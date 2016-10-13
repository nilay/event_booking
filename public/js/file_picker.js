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
              el.parent().find( "span" ).html(blobs[0].url);
              el.parent().find( "input" ).val(blobs[0].url);

             }
        );

    });

});