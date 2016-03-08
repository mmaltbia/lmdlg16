jQuery(document).ready(function($){
 
     jQuery('.datepicker').datepicker({
        dateFormat: 'mm' + '-' + 'dd'+ '-' + 'yy'
     });
 
    var custom_uploader;
 
    $('#upload_banner_button').click(function(e) {
    
        e.preventDefault();
    
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
    
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
    
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#banner_image').val(attachment.url);
        });
    
        //Open the uploader dialog
        custom_uploader.open();
    
    });


    $('#upload_image_button').click(function(e) {
 
        e.preventDefault();
 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
 
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block1_img').val(attachment.url);
            $('#banner-img').empty();
            $('#banner-img').append("<img src='"+attachment.url+"' class='w-100'>");
        });
 
        //Open the uploader dialog
        custom_uploader.open();
 
    });

    $('#upload_image_button2').click(function(e) {
    
        e.preventDefault();
    
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
    
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
    
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block2_img').val(attachment.url);
        });
    
        //Open the uploader dialog
        custom_uploader.open();
    
    });

    $('#upload_image_button2_2').click(function(e) {
    
        e.preventDefault();
    
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
    
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
    
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block2_img2').val(attachment.url);
        });
    
        //Open the uploader dialog
        custom_uploader.open();
    
    });
    $('#upload_image_button2_3').click(function(e) {
    
        e.preventDefault();
    
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
    
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
    
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block2_img3').val(attachment.url);
        });
    
        //Open the uploader dialog
        custom_uploader.open();
    
    });
 
 $('#upload_image_button3').click(function(e) {
 
     e.preventDefault();
 
     //If the uploader object has already been created, reopen the dialog
     if (custom_uploader) {
         custom_uploader.open();
         return;
     }
 
     //Extend the wp.media object
     custom_uploader = wp.media.frames.file_frame = wp.media({
         title: 'Choose Image',
         button: {
             text: 'Choose Image'
         },
         multiple: false
     });
 
     //When a file is selected, grab the URL and set it as the text field's value
     custom_uploader.on('select', function() {
         attachment = custom_uploader.state().get('selection').first().toJSON();
         $('#block3_img').val(attachment.url);
         $('#block3-img').empty();
         $('#block3-img').append("<img src='"+attachment.url+"' class='w-100'>");
     });
 
     //Open the uploader dialog
     custom_uploader.open();
 
 });
    $('#upload_image_button4').click(function(e) {
    
        e.preventDefault();
    
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
    
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
    
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block4_img').val(attachment.url);
        });
    
        //Open the uploader dialog
        custom_uploader.open();
    
    }); 
    $('#upload_image_button4_2').click(function(e) {
    
        e.preventDefault();
    
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
    
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
    
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block4_img2').val(attachment.url);
        });
    
        //Open the uploader dialog
        custom_uploader.open();
    
    });
    $('#upload_image_button5').click(function(e) {
    
        e.preventDefault();
    
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
    
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
    
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block5_img').val(attachment.url);
        });
    
        //Open the uploader dialog
        custom_uploader.open();
    
    });
$('#upload_event_img').click(function(e) {
    
        e.preventDefault();
    
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
    
        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });
    
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block2_img').val(attachment.url);
        });
    
        //Open the uploader dialog
        custom_uploader.open();
    
    });
$('#event_image_button').click(function(e) {

    e.preventDefault();

    //If the uploader object has already been created, reopen the dialog
    if (custom_uploader) {
        custom_uploader.open();
        return;
    }

    //Extend the wp.media object
    custom_uploader = wp.media.frames.file_frame = wp.media({
        title: 'Choose Image',
        button: {
            text: 'Choose Image'
        },
        multiple: false
    });

    //When a file is selected, grab the URL and set it as the text field's value
    custom_uploader.on('select', function() {
        attachment = custom_uploader.state().get('selection').first().toJSON();
        $('#event-image-edit').val(attachment.url);
        $('#event-img-edit').empty();
        $('#event-img-edit').append("<img src='"+attachment.url+"' class='w-100'>");
    });

    //Open the uploader dialog
    custom_uploader.open();

});

    $('#upload_icon_btn1').click(function(e) {

        e.preventDefault();

        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block2_issue1_icon').val(attachment.url);
            $('#icon-container1').empty();
            $('#icon-container1').append("<img src='"+attachment.url+"' width='50%'>");
        });

        //Open the uploader dialog
        custom_uploader.open();

    });
    
    $('#upload_icon_btn2').click(function(e) {

        e.preventDefault();

        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block2_issue2_icon').val(attachment.url);
            $('#icon-container2').empty();
            $('#icon-container2').append("<img src='"+attachment.url+"' width='50%'>");
        });

        //Open the uploader dialog
        custom_uploader.open();

    });
    
    $('#upload_icon_btn3').click(function(e) {

        e.preventDefault();

        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block2_issue3_icon').val(attachment.url);
            $('#icon-container3').empty();
            $('#icon-container3').append("<img src='"+attachment.url+"' width='50%'>");
        });

        //Open the uploader dialog
        custom_uploader.open();

    });
    
    $('#upload_icon_btn4').click(function(e) {

        e.preventDefault();

        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block2_issue4_icon').val(attachment.url);
            $('#icon-container4').empty();
            $('#icon-container4').append("<img src='"+attachment.url+"' width='50%'>");
        });

        //Open the uploader dialog
        custom_uploader.open();

    });
    
    $('#upload_icon_btn5').click(function(e) {

        e.preventDefault();

        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block2_issue5_icon').val(attachment.url);
            $('#icon-container5').empty();
            $('#icon-container5').append("<img src='"+attachment.url+"' width='50%'>");
        });

        //Open the uploader dialog
        custom_uploader.open();

    });
    
    $('#upload_icon_btn6').click(function(e) {

        e.preventDefault();

        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block2_issue6_icon').val(attachment.url);
            $('#icon-container6').empty();
            $('#icon-container6').append("<img src='"+attachment.url+"' width='50%'>");
        });

        //Open the uploader dialog
        custom_uploader.open();

    });
    
    $('#upload_icon_btn7').click(function(e) {

        e.preventDefault();

        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block2_issue7_icon').val(attachment.url);
            $('#icon-container7').empty();
            $('#icon-container7').append("<img src='"+attachment.url+"' width='50%'>");
        });

        //Open the uploader dialog
        custom_uploader.open();

    });
    
    $('#upload_icon_btn8').click(function(e) {

        e.preventDefault();

        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block2_issue8_icon').val(attachment.url);
            $('#icon-container8').empty();
            $('#icon-container8').append("<img src='"+attachment.url+"' width='50%'>");
        });

        //Open the uploader dialog
        custom_uploader.open();

    });
    
    $('#upload_icon_btn9').click(function(e) {

        e.preventDefault();
        console.log('hello btn 9')
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }

        //Extend the wp.media object
        custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Image',
            button: {
                text: 'Choose Image'
            },
            multiple: false
        });

        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $('#block2_issue9_icon').val(attachment.url);
            $('#icon-container9').empty();
            $('#icon-container9').append("<img src='"+attachment.url+"' width='50%'>");
        });

        //Open the uploader dialog
        custom_uploader.open();

    });
});