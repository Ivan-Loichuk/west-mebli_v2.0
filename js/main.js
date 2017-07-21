//NAV-MENU
var options ={
	offset: 200
}
var header = new Headhesive('.nav-menu', options);

$(document).ready(function() {
    // Gallery
    $('i.glyphicon-thumbs-up, i.glyphicon-thumbs-down').click(function(){
        var $this = $(this),
        c = $this.data('count');
        if (!c) c = 0;
        c++;
        $this.data('count',c);
        $('#'+this.id+'-bs3').html(c);
    });
    $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });


 
    // navigation on click
	$("#menu").on("click","a", function (event) {
		//We cancel the standard processing of the goods by reference
		event.preventDefault();

		//Take the side identifier from the href attribute
		var id  = $(this).attr('href'),

		//We find out the height of the top-up unit which is referred to anchor
			top = $(id).offset().top - 50;

		//Animate the transition to the distance - top for 1500 ms
		$('body, html').animate({scrollTop: top}, 600);
	});


       // slider 'carousel'
        $('#myCarousel').carousel({
                interval: 5000
        });

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });

});

// section <how to order>, mouse event
var thumbnail_mouse_over = function (atribute_name) {
        document.getElementById(atribute_name).style.backgroundColor = "#fff";
};
var thumbnail_mouse_out = function (atribute_name) {
    document.getElementById(atribute_name).style.backgroundColor = "rgba(255,255,255,0.5)";
};


$(document).on('click', '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});






