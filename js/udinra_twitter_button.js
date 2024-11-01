(function () {
    'use strict';

    tinymce.PluginManager.add('udinra_twitter_subscribe', function (editor, url) {
        editor.addButton('udinra_twitter_subscribe', {
            title: 'Udinra Twitter Button',
            image: url + '/../image/twticon.png',

            onclick: function () {
                editor.windowManager.open({
                    title: 'Udinra Twitter Button Configuration',
                    body: [
                        {
                            type: 'listbox',
                            name: 'button',
                            label: 'Button Type',
                            values: [
                                {text: 'Tweet', value: 'tweet'},
                                {text: 'Follow', value: 'follow'}
                            ]
                        },
                        {
                            type: 'listbox',
                            name: 'size',
                            label: 'Size',
                            values: [
                                {text: 'Large', value: 'large'},
                                {text: 'Default', value: 'default'}
                            ]
                        },
                        {
                            type: 'listbox',
                            name: 'count',
                            label: 'Count(NA for Tweet)',
                            values: [
								{text: 'Show', value: 'true'},
                                {text: 'Hide', value: 'false'}
                            ]
                        },
                        {
                            type: 'listbox',
                            name: 'style',
                            label: 'Style',
                            values: [
                                {text: 'Aqua', value: 'UdinraTwitterAqua'},
								{text: 'Teal', value: 'UdinraTwitterTeal'},
								{text: 'Chocolate', value: 'UdinraTwitterChocolate'},
								{text: 'Coral', value: 'UdinraTwitterCoral'},
								{text: 'Golden', value: 'UdinraTwitterGolden'},
								{text: 'Pink', value: 'UdinraTwitterPink'},
								{text: 'Green 1', value: 'UdinraTwitterLightGreen'},
								{text: 'Green 2', value: 'UdinraTwitterSeaGreen'},
								{text: 'Grey', value: 'UdinraTwitterGrey'},
								{text: 'Tan', value: 'UdinraTwitterTan'},
								{text: 'White', value: 'UdinraTwitterWhite'},
								{text: 'None', value: 'UdinraTwitterNone'}																
                            ]
                        },				
						{
                            type: 'textbox',
							size: 40,
                            name: 'hash',
                            label: 'Hash Tag(NA for Follow)',
                        },
						{
                            type: 'textbox',
							size: 40,
                            name: 'text',
                            label: 'Tweet Text(NA for Follow)',
                        },					
						{
                            type: 'textbox',
							size: 40,
                            name: 'tweet',
                            label: 'Tweet URL(NA for Follow)',
                        },					
						{
                            type: 'textbox',
							size: 40,
                            name: 'user',
                            label: 'UserName (without @)(*)',
                        },								
						{
                            type: 'textbox',
							size: 40,
                            name: 'header',
                            label: 'Header Text',
                        },								
						{
                            type: 'textbox',
							size: 40,
                            name: 'body',
                            label: 'Body Text',
                        }
                    ],
                    onsubmit: function (e) {
                        editor.insertContent('[udinra_twitter button=' + e.data.button +
                        ' size=' + e.data.size + ' count=' + e.data.count + ' style=' + e.data.style + 
						'" header="' + e.data.header + '" body="' + e.data.body + '" user="' + e.data.user + '" hash="' + e.data.hash +
						'" text="' + e.data.text + '" tweet="' + e.data.tweet + '"]' );
                    }
                });
            }
        });
    });
})();


