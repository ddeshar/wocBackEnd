    <script src="{!! url('plugins/ckeditor/ckeditor.js') !!}"></script>
    <script src="{!! url('plugins/ckeditor/config.js') !!}"></script>

    <script>

            

    </script>

    <script>
    	var options = {
            filebrowserImageBrowseUrl:  '/laravel-filemanager?type=Images', 
            filebrowserImageUploadUrl:  '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}', 
            filebrowserBrowseUrl:       '/laravel-filemanager?type=Files', 
            filebrowserUploadUrl:       '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}' 
        };

        var  toolbar =  [{
                            name: 'document',
                            items: ['Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates']
                        },
                        {
                            name: 'clipboard',
                            items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']
                        },
                        {
                            name: 'editing',
                            items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt']
                        },

                        '/',
                        {
                            name: 'basicstyles',
                            items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting',
                                'RemoveFormat'
                            ]
                        },
                        {
                            name: 'paragraph',
                            items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-',
                                'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language'
                            ]
                        },
                        {
                            name: 'links',
                            items: ['Link', 'Unlink', 'Anchor']
                        },
                        {
                            name: 'insert',
                            items: ['Image','Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe']
                        },
                        '/',
                        {
                            name: 'styles',
                            items: ['Styles', 'Format', 'Font', 'FontSize']
                        },
                        {
                            name: 'colors',
                            items: ['TextColor', 'BGColor']
                        },
                        {
                            name: 'tools',
                            items: ['Maximize', 'ShowBlocks']
                        },
                        {
                            name: 'about',
                            items: ['About']
                        }
                    ]
        var  test =  [{
                    name: 'WOC',
                    items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting','RemoveFormat','-','Maximize', 'ShowBlocks', 'Source']
        }]
        
        CKEDITOR.replace('newa', options, {
            toolbar
        });

        CKEDITOR.replace('excerpt', options, {
            toolbar
        });

        CKEDITOR.replace( 'metaDescription',{
            test
        });
        CKEDITOR.replace( 'metaKeywords',{
            test 
        });

    </script>