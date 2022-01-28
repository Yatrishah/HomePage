

// Display Tabs 

function display(id) {
    $('.right_service_list').css('display', 'none');
    $('#new_service_request').css('display', 'none');
    $('#service_history').css('display', 'none');
    $('#block_customer').css('display', 'none');
    $('#my_ratings').css('display', 'none');
    $('#My_settings_service').css('display', 'none');
    $('#My_settings_customer').css('display', 'none');
    $('#Service_history').css('display', 'none');
    $('#dashboard').css('display', 'none');

    $('.active_left').removeClass('active_left');

    $(id).css('display', 'block');
}


$('#MySettings').click(function () {

    // display('#My_settings_customer');
    display('#My_settings_service');
    $('#My_settings_customer').css('display', 'block');

    $('.arrow_down_section').css('display', 'none');

});

function avatar_logo(event, className) {
    var class_selected = document.getElementById('avatar_selected').classList;
    class_selected.replace(class_selected[1], className);
}

$('.avatar').click(function () {
    $('.select').removeClass('select');
    $(this).addClass('select');
});

$().click(function () {
    $('.active_left').removeClass('active_left');
    $(this).addClass('active_left');
});

$('.new_service_request').click(function () {
    display('#new_service_request');
    $('.new_service_request').addClass('active_left');
});

$('.service_history_tab').click(function () {
    display('#service_history');
    $('.service_history_tab').addClass('active_left');
});

$('.block_customer_tab').click(function () {
    display('#block_customer');
    $('.block_customer_tab').addClass('active_left');
})

$('.my_ratings_tab').click(function () {
    display('#my_ratings');
    $('.my_ratings_tab').addClass('active_left');
})

$('.dashboard_tab').click(function () {
    display('#dashboard');
    $('.dashboard_tab').addClass('active_left');
})

$('.service_history_tab').click(function () {
    display('#service_history');
    $('#Service_history').css('display', 'block');
    $('.service_history_tab').addClass('active_left');
    // $('.service_history_tab').addClass('active_left');
})



// Add Address

$('.add_address').click(function () { 
    $('.add_new_address').css('display', 'block');
    $('.add_address').css('display', 'none');
});

$('#save_address_btn').click(function () { 
    $('.add_new_address').css('display', 'none');
    $('.add_address').css('display', 'block');
});

$('.cancel_btn').click(function () { 
    $('.add_new_address').css('display', 'none');
    $('.add_address').css('display', 'inline');
});


// Tabs Move to Next Tab 

$('#check_availability').click(function () { 
    $('#setup_service').css('display', 'none');
    $('#schedule_plan').css('display', 'block');

    $('#tab2').addClass('tabclick');
    $('.arrow_rotate').removeClass('arrow_rotate');
    $('#tab2 div').addClass('arrow_rotate');
    
});

$('#continue_schedulePlan').click(function () { 
    $('#schedule_plan').css('display', 'none');
    $('#your_details').css('display', 'block');

    $('#tab3').addClass('tabclick');
    $('.arrow_rotate').removeClass('arrow_rotate');
    $('#tab3 div').addClass('arrow_rotate');
    
});

$('#continue_details').click(function () { 
    $('#your_details').css('display', 'none');
    $('#make_payment').css('display', 'block');

    $('#tab4').addClass('tabclick');
    $('.arrow_rotate').removeClass('arrow_rotate');
    $('#tab4 div').addClass('arrow_rotate');
  
});
