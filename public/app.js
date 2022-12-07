if (typeof GLightbox !== 'undefined') {
const lightbox = GLightbox({ 
    'selector':'.wp_nom_video',
    'autoplayVideos': false

 });
}

jQuery(document).ready(function($){
    if($('.wp_noms').isotope){

        var $grid = $('.wp_noms').isotope({
            itemSelector: '.nomination',
            layoutMode : 'masonry',
            masonry: {
                columnWidth: 5
            }

        });

        // filter items on button click
        $('.filter-button-group').on( 'click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({ filter: filterValue });
        });

        $('.button-group button').on('click', function() {
            $('.button-group').find('button').removeClass('active');
            $(this).addClass('active');
        });
    }
   
});
