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
	$("#menu, .image-contact").on("click","a", function (event) {
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


/* gategory select - save value  */
    var selCategory = sessionStorage.getItem("SelItem");
    $('#img_category').val(selCategory);

    $('#img_category').change(function() {
        var selVal = $(this).val();
        sessionStorage.setItem("SelItem", selVal);
    });

//Callback form
    /*
    klient validation
     */
   var valid = false;
    $('#name').on('input',function () {
        if($('#name').val() == ""){
            $('#name').css ("border-color", "#f70515");
            valid = false;
            console.log(valid);
        }
        else {
            $('#name').css ("border-color", "#6BB343");
            $('#err_name').html("");
            valid = true;
            console.log(valid);
        }
    });
    $('#number').on('input', function () {
        if(!($('#number').val().match('[0-9]{9,13}'))){
            $('#number').css ("border-color", "#f70515");
            valid = false;
            console.log(valid);
        }
        else {
            $('#number').css ("border-color", "#6BB343");
            $('#err_number').html("");
            valid = true;
            console.log(valid);
        }
    });
    $('#email').on('input', function () {
        var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(!($('#email').val().match(regex))){
            $('#email').css ("border-color", "#f70515");
            valid = false;
            console.log(valid);
        }
        else {
            $('#email').css ("border-color", "#6BB343");
            $('#err_email').html("");
            valid = true;
            console.log(valid);
        }
    });
    $('#message').on('input', function () {
        if($('#message').val() == ""){
            $('#message').css ("border-color", "#f70515");
            valid = false;
            console.log(valid);
        }
        else {
            $('#message').css ("border-color", "#6BB343");
            $('#err_message').html("");
            valid = true;
            console.log(valid);
        }
        if(valid){
            console.log("fkdjfk");
            $('#send_btn').removeAttr ("disabled");
        }
        else{
            $('#send_btn').attr ("disabled", "disabled");
        }

    });
    /*
    send to server
     */
    $('#send_btn').click(function () {
        var email = $('#email').val ();
        var name = $('#name').val ();
        var number = $('#number').val ();
        var message = $('#message').val ();
        $.ajax({
            url:    	'send_mail.php',
            type:		'POST',
            cache: 		false,
            data: {
                'name':name,
                'email':email,
                'number': number ,
                'message':message
            },
            dataType:	'html',
            beforeSend: function () {
                $('#send_btn').attr ("disabled", "disabled");
            },
            success: function(data) {
                if (data == true) {
                    $('#name').val ("");
                    $('#email').val ("");
                    $('#number').val("");
                    $('#message').val ("");
                    $('#success_msg').html("Повідомлення надіслано.<br>Ми зв'яжемося з вами найближчим часом");
                    $('#err_number, #err_message, #err_email').html("");
                    $('#email').css ("border-color", "#A5B3B1");
                    $('#number').css ("border-color", "#A5B3B1");
                    $('#name').css ("border-color", "#A5B3B1");
                    $('#message').css ("border-color", "#A5B3B1");
                    $('#send_btn').attr ("disabled", "disabled");
                } else {
                    if (data == false)
                        alert ("Что-то пошло не так! Сообщение не отправлено");
                    else {
                        switch (data) {
                            case "Ім'я не вказано":
                                $('#name').css ("border-color", "#f70515");
                                $('#err_name').html(data);
                                $('#err_number, #err_email, #err_message').html("");
                                break;
                            case "Не вказано номер телефону":
                                $('#number').css("border-color", "#f70515");
                                $('#err_number').html(data);
                                $('#err_name, #err_message,#err_email').html("");
                                break;
                            case "Не вірний номер телефону":
                                $('#number').css("border-color", "#f70515");
                                $('#err_number').html(data);
                                $('#err_name, #err_message,#err_email').html("");
                                break;
                            case "Введіть своє повідомлення":
                                $('#message').css ("border-color", "#f70515");
                                $('#err_message').html(data);
                                $('#err_name, #err_number,#err_email').html("");
                                break;
                            case "Не правильний емайл адрес":
                                $('#email').css ("border-color", "#f70515");
                                $('#err_email').html(data);
                                $('#err_name, #err_number,#err_message').html("");
                                break;
                            default:
                                $('#email').css ("border-color", "#f70515");
                                $('#number').css ("border-color", "#f70515");
                                $('#message').css ("border-color", "#f70515");
                                $('#name').css ("border-color", "#f70515");
                        }
                    }
                }
            }
        });
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

/*
    get image from server to gallery
 */
function getContent(id){
    var tab_content = document.getElementById('tab-content');
    tab_content.innerHTML = '<div class="loading_gif"><img src="../img/loading.gif" /> </div>';
    $.ajax({
        url: "get_page.php",
        data:'id='+id,
        type: "POST",
        success:function(data){

            if(data == 0){
                tab_content.innerHTML = "Галерея пуста!!";
                console.log(data);
            }
            else {
                tab_content.innerHTML = data;
            }

        }
    });
}

/*
     delete image from galery
 */
function delete_request(id){
    $.ajax({
        url: "delete-image.php",
        data: 'id='+id,
        type: "POST",
        success: function (data) {
            if(data == 0){
                alert('Error SQL');
            }
            else{
                $('#img_'+data).remove();
                $('#del_'+data).remove();
                $('#openModal_'+data).remove();
            }
        }
    });
}





