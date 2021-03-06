$(document).ready(function(){
    $('.modal-trigger').leanModal();


    //Forms error hide after 5 second
    setTimeout("$('.error_forms').hide()",2000)


    //select materialize activate
    $(document).ready(function() {
        $('select').material_select();
    });

    // Initialize collapse button
    $(".button-collapse").sideNav();
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
    //$('.collapsible').collapsible();
    $(".button-collapse").sideNav();
    $(document).find('.drag-target').hide();


//    date picker materialize css
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });
    /**
     * right block height = cont height
     */
    // var cont_height = $(document).find('.cont').height();
    // $(document).find('.rightBar').css('height',cont_height)
    var cont_height = $(document).find('.cont').height();
    $(document).find('.rightBar').css('height',cont_height)

    /**
     * open modal order work by side bar link
     */
    $(document).on('click','.modalOrderOpen', function () {
        $(document).find('#modal_order_work').openModal();
    })
});



//    sms price slideUp
$(document).on('click','.fixed_sms',function(){
   $(document).find('.middle_ask_price').slideToggle(200);
});


//header fixed
$(document).scroll(function(){
    if($(window).scrollTop() > 100){
        $(document).find('.nav_header').animate(2000).css('position','fixed');
    }
    else{
        $(document).find('.nav_header').css('position','relative');
    }
})

 //Login And Register Modal view
$(document).on('click','.login_modal_view', function(){
    $('#loginModal').openModal();
});
$(document).on('click','.register_modal_view', function(){
    $('#registerModal').openModal();
});

$(document).on('submit','#login_controller', function (e) {
    e.preventDefault();
    var base_url = $(document).find('.nav_header').data('base_url');
    var _token = $(document).find('input[name="_token"]').val();
    var email = $(this).find('#email').val();
    var password = $(this).find('#password').val();
    console.log(password)
    $.ajax({
        url: base_url + "/auth/login",
        method: 'POST',
        data: {
            email: email,
            password:password,
            _token: _token
        },
        success: function (result) {
            if(result == 'false'){
                $(document).find('#email').css({borderBottom:'2px solid red'})
                $(document).find('#password').css({borderBottom:'2px solid red'})
            }
            else{
                $(document).find('.right.hide-on-med-and-down.header_menu_login .login_modal_view').remove();
                $(document).find('.right.hide-on-med-and-down.header_menu_login .register_modal_view').remove();

                var html_login_register = '\n\
                                                 <li class="dropdown user_name_header">\n\
                                                        '+result.name+'<span class="caret"></span>\n\
                                                 </li>\n\
                                                    <li><a href="#!" id="logoutUser"><i class="large material-icons" > power_settings_new</i></a></li>\n\
                                            ';
                $(document).find('.right.hide-on-med-and-down.header_menu_login').prepend(html_login_register);
                location.reload();
                $('#loginModal').closeModal();


            }
        }
    });
});
$(document).on('submit','#register_controller', function (e) {
    e.preventDefault();
    var base_url = $(document).find('.nav_header').data('base_url');
    var _token = $(document).find('input[name="_token"]').val();
    var email = $(this).find('#email_register').val();
    var first_name = $(this).find('#first_name_register').val();
    var password = $(this).find('#password_register').val();
    var confirm_password = $(this).find('#confirm_password_register').val();
    $.ajax({
        url: base_url + "/auth/register",
        method: 'POST',
        data: {
            name: first_name,
            email: email,
            password:password,
            confirm_password:confirm_password,
            _token: _token
        },
        success: function (result) {
            console.log(result)
            if(result.status == 1){
                $(document).find('.right.hide-on-med-and-down.header_menu_login .login_modal_view').remove();
                $(document).find('.right.hide-on-med-and-down.header_menu_login .register_modal_view').remove();

                var html_register = '\n\
                                                 <li class="dropdown user_name_header">\n\
                                                        '+result.name+'<span class="caret"></span>\n\
                                                 </li>\n\
                                                    <li><a href="#!" id="logoutUser"><i class="large material-icons" > power_settings_new</i></a></li>\n\
                                            ';
                $(document).find('.right.hide-on-med-and-down.header_menu_login').prepend(html_register);

                $('#registerModal').closeModal();
            }
            else if(result == 0){
                Materialize.toast('This user is already token', 3000)
            }
        }
    });
});
$(document).on('click','#logoutUser', function (e) {
    e.preventDefault();
    var base_url = $(document).find('.nav_header').data('base_url');
    var _token = $(document).find('input[name="_token"]').val();
    $.ajax({
        url: base_url + "/auth/logout",
        method: 'POST',
        data: {
            _token:_token
        },
        success: function (result) {
            console.log(result)
            if(result == 'true'){
                $(document).find('.right.hide-on-med-and-down.header_menu_login #logoutUser').remove();
                $(document).find('.right.hide-on-med-and-down.header_menu_login .user_name_header').remove();
                var html_logout = '\n\
                                      <li><a href="#!" class="login_modal_view">Login</a></li>\n\
                                      <li><a href="#!" class="register_modal_view">Register</a></li>';
                    $(document).find('.right.hide-on-med-and-down.header_menu_login').prepend   (html_logout);
            }
        }
    });
});


/**
 * Order work ajax
 * params from modal modal_order_work
 * controller function :
 *
 */
$(document).on('click','.order_work_modal_btn',function(){
    var url = $(document).find('.order_work_modal_form').data('action');
    var _token = $(document).find('input[name="_token"]').val()
   var category = $(document).find('.body_modal_order_work').find('.order_work_categoryy option:selected').text();
   var fakultet = $(document).find('.body_modal_order_work').find('.order_work_fakultet option:selected').text();
   var name_of_work = $(document).find('.body_modal_order_work').find('input[name="name_modal_order_work"]').val();
   var nauch_ruk = $(document).find('.body_modal_order_work').find('input[name="nauch_ruk_modal_order_work"]').val();
   var data_sdachi = $(document).find('.body_modal_order_work').find('input[name="date_sdachi"]').val();
   var nameOfStudent = $(document).find('.body_modal_order_work').find('input[name="nameOfStud_modal_order_work"]').val();
   var tel_number = $(document).find('.body_modal_order_work').find('input[name="number_modal_order_work"]').val();

    $.ajax({
       url: url,
       method: 'POST',
        data:{
            category:category,
            fakultet:fakultet,
            name_of_work:name_of_work,
            nauch_ruk:nauch_ruk,
            data_sdachi:data_sdachi,
            nameOfStudent:nameOfStudent,
            tel_number:tel_number,
            _token:_token,
        },
        success: function(result) {
            $('#modal_order_work').closeModal();
        }
    });
});
