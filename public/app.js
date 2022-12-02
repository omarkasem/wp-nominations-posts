if (typeof GLightbox !== 'undefined') {
const lightbox = GLightbox({ 
    'selector':'.wp_nom_video',
    'autoplayVideos': false

 });
}

jQuery(document).ready(function($){

    $('.load_more').on('click',function(e){
        e.preventDefault();
        var img = $(this).find('img');
        var full_count = $(this).attr('full_count');
        img.show();
        jQuery.ajax({
            type: "GET",
            url: ajax_object.ajax_url,
            data: { action: 'wp_nom_load_more',exist:$('.wp_noms > div').length},
            success: function(response){
                img.hide();
                $('.wp_noms').append(response);
                if($('.wp_noms > div').length >= full_count){
                    $('.load_more').hide();
                }
            },
            error: function(error){
                console.log("bad");
            }
        });

    });
});
