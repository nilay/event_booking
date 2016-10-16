/**
  * File picker button handler 
  * Set uploaded file url in form's hidden field
  */

$(document).ready(function(){
    $('.fp-button').click(function(e){
        e.preventDefault();

        var el = $(this);

        filepicker.setKey(el.data('fp-apikey'));
        filepicker.pickAndStore(
            {},
            {
                path: el.data('fp-store-path'),
                storeContainer: $(this).data('fp-bucket')
            },
            function(blobs){
              // After successfull upload
              // Set file url inside hidden field  
              el.parent().find( "span" ).html(blobs[0].url);
              el.parent().find( "input" ).val(blobs[0].url);

             }
        );

    });

});