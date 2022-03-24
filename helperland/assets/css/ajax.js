$('#check_availability').click(function (e) {
    e.preventDefault();

    var postalcode = $('#postalcode_aj').val().trim();
    console.log(postalcode);
    if (postalcode == "") {

        $('#postalerror').html("Please Enter Value");
    } 
    else if (postalcode.length != 6) {
        $('#postalerror').html("Postal Code must have six numbers");}
    else {
        $.ajax({
            type: "POST",
            url: "http://localhost/project/?controller=Home&function=postalcodevalidation",
            data: {
                code: postalcode

            },
            success: function (response) {
                if (response == 1) {
                    $('#postalform').trigger("reset");
                    $('#postalerror').html("We are not providing service in this area. Well notify you if any helper would start working near your area.");
                } else {
                  scheduleplan();
                  var splitted = response.split("|");
                  $('#postalcode').val(splitted[0]);
                  
                   // console.log(response);
                    $('#city').val(splitted[1]);
                }
            }
        });
    }
});


$('#continue_schedulePlan').click(function (e) {
    e.preventDefault();
    var date = $('#date').val();

   
    if (date == "") {
        $('#add').html("Please Enter Date");
    }
    else{
    details();
    }
    $.ajax({
        url: "http://localhost/project/?controller=Home&function=usersaddress",
        success: function (response) {
            $('#addresses').html(response);
        }
    });

    $.ajax({
        url: "http://localhost/project/?controller=Home&function=favourite_service_provider",
        success: function (response) {
            $('#fav_service_provider_box').html(response);
        }
    });

    
    
});

$('#save_address_btn').click(function (e) {
    e.preventDefault();

    var streetname = $('#street_name').val();
    var houseno = $('#house_no').val();
    var postalcode = $('#postalcode').val();
    var city = $('#city').val();
    var phone_no = $('#phoneno').val();
    if (streetname == "" || houseno == "" || postalcode == "" || city == "" || phone_no == "") {
        $('#add_new_address_error').html("Please Enter all Value");
    
    } else if (phone_no.length != 10) {
        $('#add_new_address_error').html("Phone No must have 10 numbers");
    } else {
    $.ajax({
        type: "POST",
        url: "http://localhost/project/?controller=Home&function=insertaddress",
        data: {
            street_name: streetname,
            house_no: houseno,
            postalcode: postalcode,
            city: city,
            phoneno: phone_no
        },
        success: function (response) {
            $('#addnewaddress_form').trigger("reset");
            $('#addnewadd').css('display', 'none');
            $('#formadd').css('display', 'block');

            $('#addresses').html(response);
        }
    });
  }
});

$(document).on("click", ".select_btn", function (e) {

id = $(this).attr('id');

$('.serviceproviderid').attr('id',id);

checkclass = $(this).attr('class');

checkclass_str = checkclass.split(" ");
 console.log(checkclass_str[1]);

if(checkclass_str[1] == undefined){
    $('.select_btn_selected').removeClass('select_btn_selected');
    $(this).addClass('select_btn_selected');
}else{
    $(this).removeClass('select_btn_selected');
    $('.serviceproviderid').removeAttr('id');
}

console.log($('.serviceproviderid').attr('id'));
});

$('#continue_details').click(function (e) { 
    e.preventDefault();

    addressid =  $("input:radio[name=address]:checked").attr('id');
    console.log(addressid);
    if (addressid == undefined) {
        // alert("Please select the address");
        $('#address_alert').css('display', 'block');
        window.scrollTo(0,300);
    } else {
        $('#address_alert').css('display', 'none');
        payment();
    }
    
});

$('#complete_booking').click(function (e) {
    e.preventDefault();
   
    creditcardno = $('#creditcardno').val().trim();
    creditcardexpiry = $('#creditcardexpiry').val().trim();
    creditcardcvc = $('#creditcardcvc').val().trim();
    promo_code = $('#promo_code').val().trim();

    if (creditcardno == "" || creditcardexpiry == "" || creditcardcvc == "") {
        alert("Please Enter all details")
    // } else if(creditcardno.length != 16 || creditcardexpiry.length != 4 || 
    //             creditcardcvc.length != 3){
    //     alert("Please Enter all the details properly");
    } else {

   var date = $('#date').val();
    var time = $('#time').val();
    var duration = $('#duration').val();
    var comments = $('#comments').val();
    if ($("#pets").is(":checked")) {
        pets = 1;
    } else {
        pets = 0;
    }
    var extraservice = [];
    $("input:checkbox[name=extraservice]:checked").each(function () {
        extraservice.push($(this).val());
    });

    if (extraservice.length == 0) {
        extraservice.push(0);
    }
    idstr = $('.serviceproviderid').attr('id');
        if(idstr != undefined){
            id_arr = idstr.split('-');
            ServiceProviderid = parseInt(id_arr[0]);
        }else{
            ServiceProviderid = 0;
        }

        console.log(ServiceProviderid);
    $.ajax({
        type: "POST",
        url: "http://localhost/project/?controller=Home&function=schedule",
        data: {
            date: date,
            time: time,
            duration: duration,
            pets: pets,
            comments: comments,

            extraservice: extraservice,
            providerid: ServiceProviderid

        },
        success: function (response) {
          //  console.log(ServiceProviderid);

            addressid =  $("input:radio[name=address]:checked").attr('id');
    id_arr = addressid.split("-");

    $.ajax({
        type: "POST",
        url: "http://localhost/project/?controller=Home&function=insertServiceRequestAddress",
        data: {
            addressid : id_arr[0]
        },
                success: function (response) {
                //  $('.request_id').html("Service Request Id: ".concat(response));
                    $('#complete_booking_modal').modal('show');
                    $.ajax({
                            type: "POST",
                            url: "http://localhost/project/?function=sendEmailtoProvider",
                            success: function (response) {
                                console.log(response);
                                }
                        });
                }
            });
         
           
        }


    });

    }
});
function avgrating() {
    val1 = parseInt($('#rating_value').html());
    val2 = parseInt($('.rating_value1').html());
    val3 = parseInt($('.rating_value2').html());

    average = (val1 + val2 + val3) / 3;
    console.log(val1,val2,val3);

    $('#average_rating_value').html(average.toFixed(1));

    $("#average_rating").rateYo("option", "rating", average.toFixed(1)); //returns a jQuery Element
}

$("#rateYo").rateYo({
    rating: 1,
    starWidth: "20px",
    ratedFill: "#FFA500",

    onSet: function (rating, rateYoInstance) {
        $('#rating_value').html(rating);
        console.log(rating);
        avgrating()
    },
});
$("#rateYo1").rateYo({
    rating: 1,
    starWidth: "20px",
    ratedFill: "#FFA500",

    onSet: function (rating, rateYoInstance) {
        $('.rating_value1').html(rating);
        avgrating()
    },
});
$("#rateYo2").rateYo({
    rating: 1,
    starWidth: "20px",
    ratedFill: "#FFA500",

    onSet: function (rating, rateYoInstance) {
        $('.rating_value2').html(rating);
        avgrating()
    },
});

$("#average_rating").rateYo({
    rating: 1,
    starWidth: "20px",
    ratedFill: "#FFA500",
});

function setAvgRating(id,className){
    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=averageRating",
        data: {
            serviceProviderId: id
        },
        success: function (response) {
            console.log(className, response);
            $("." + className).rateYo("option", "rating", response);
        }
    });
}
function updatedashboard(offset,limit) {
    
    $.ajax({
        // type: "method",
        url: "http://localhost/project/?function=fetchcurrentservice&parameter=" + offset + "-" + limit,
        
        success: function (response) {
            //console.log(response);
            
            $('.dashboardtable').html(response);
            $('.avg_rating_serprovider').rateYo({
                rating: 1,
                starWidth: "20px",
                readOnly: true
            });

            $('.avg_rating_serprovider').each(function (i, obj) {

                class_str = $(this).attr('class');
                class_arr = class_str.split(" ");
                id_arr = class_arr[1].split("-");
                id = parseInt(id_arr[0]);
                console.log(class_arr[1]);

                setAvgRating(id,class_arr[1]);
            });
        },
      
        error: function (e) {
            console.log(e);
        }
    });
}

function dashboardtotalentries() {

    $.ajax({
        url: "http://localhost/project/?function=fetchtotalentriesdashboard",
        success: function (response) {
            $('#totalRecord_dashboard').html("Total Record: " + response);
        }
    });

}
function historytotalentries() {

    $.ajax({
        url: "http://localhost/project/?function=fetchtotalentriesservicehistory",
        success: function (response) {
            $('#totalRecord_history').html("Total Record: " + response);
        }
    });

}
$('.dashboardrow').click(function (e) {
    e.preventDefault();
     updatedashboard(0, 2);
     dashboardtotalentries();


});

function onReschedule(id) {
//console.log('hiii');
    $('#error').css('display','none');
    $('#RescheduleRequest').modal('show');


    $.ajax({
        type: "POST",
        url: "http://localhost/project/?controller=Home&function=fetch_datetime",
        data: {
            serviceid: id
        },
        success: function (response) {

            datetime = response.split("|");
            $('#rescheduledate').val(datetime[0]);
            $('#rescheduletime').val(datetime[1]);
        },
        error: function (e) {
            console.log(e);
        }
    });

    $('.reschedulebutton').attr('id', id);
}   
$('#Updatereschudele').click(function () {
    
    id = $('.reschedulebutton').attr('id');

    date1 = $('#rescheduledate').val();
    time1 = $('#rescheduletime').val();
   
    $.ajax({
        type: "POST",
        url: "http://localhost/project/?controller=Home&function=checkserviceavailable",
        data: {
            date: date1,
            time: time1,
            serviceid: id
        },
        success: function (response) {
            if (response == 0) {
                $.ajax({
                    type: "POST",
                    url: "http://localhost/project/?controller=Home&function=update_datetime",
                    data: {
                        date: date1,
                        time: time1,
                        serviceid: id
                    },
                    success: function (response) {
                        $('#error').css('display','none');

                        $('#RescheduleRequest').modal('hide');
                        $('.show').remove('.modal-backdrop');

                        updatedashboard(0, 2);
                    }
                });
            }else{
                $('#error').css('display','block');
            }
        }
    });

});
function onCancel($servicerequestid){
    
    $('.cancelservice').attr('id',$servicerequestid);
    $('#cancelRequest').modal('show');


}

$('#cancelButton').click(function () { 
    id = $('.cancelservice').attr('id');
    comments = $('#textarea').val();
    
    console.log(comments);

    $.ajax({
        type: "POST",
        url: "http://localhost/project/?controller=Home&function=cancelservice",
        data: {
            serviceid : id,
            comment : comments
        },
        success: function (response) {
            console.log(response);
             $('#cancelRequest').modal('hide');


        }
    });
    dashboardtotalentries();
    $('#pageno').html(1)
    updatedashboard(0,2);
});

function dashboardmodal(servicerequestid){
    

    $.ajax({
        type: "POST",
        url: "http://localhost/project/?controller=Home&function=Allservicerequestdetails",
        data: {
            id : servicerequestid
        },
        success: function (response) {
            var servicedetails = JSON.parse(response);
            console.log(servicedetails);

            $('#servicedetailsserviceid').html("Service Id: " + servicedetails["ServiceId"]);
            $('#servicedetailsdatetime').html(servicedetails["date"] + " " + servicedetails["starttime"] + "-" + servicedetails["endtime"]);
            $('#servicedetailsduration').html("Duration: " + servicedetails["duration"]);

            $('.servicedetailsamount').html("&nbsp; &nbsp; &nbsp;" + servicedetails["TotalCost"] + "€");

            $('#servicedetailscomments').html("Comment: " + servicedetails["Comments"]);

            if(servicedetails["HasPets"] == 0){
                $('#servicedetailspets').html("<img  src='../assets/image1/not-included.png' style='width: 20px;height: 20px;'>  I don't have pets at home.");
            }else{
                $('#servicedetailspets').html("<img  src='../assets/image1/included.png' style='width: 20px;height: 20px;'> I have pets at home.");
            }

            extraservice = "Extras: ";
            if(servicedetails["ExtraService"][0] == 0){
                $('#servicedetailsextraservice').html(extraservice);
            }else{
                servicedetails["ExtraService"].forEach(element => {
                    extraservice += element + ", ";
                });
                $('#servicedetailsextraservice').html(extraservice);
            }

            $('#servicedetailsserviceaddress').html("Service Address: " + servicedetails["AddressLine1"] + " " + servicedetails["AddressLine2"]
                + ", " + servicedetails["City"] + " " + servicedetails["State"] + ", " + servicedetails["PostalCode"]);

            $('#servicedetailscustomername').html("Customer Name: " + servicedetails["customername"]);

            $('#exampleModalServiceRequest').modal('show');

            $('.reschudule_id').attr('id',servicedetails["servicerequestid"]);
        }
    });
}

$('#dashboard_reschedule').click(function (e) { 
    e.preventDefault();

    id = $('.reschudule_id').attr('id');
    $('#exampleModalServiceRequest').modal('hide');

    onReschedule(id);
    
});

$('#dashboard_cancel').click(function (e) { 
    e.preventDefault();

    id = $('.reschudule_id').attr('id');
    $('#exampleModalServiceRequest').modal('hide');
    //console.log(reschudule_setid);
    onCancel(id);
    
});

function serviceHistory(offset,limit){
    $.ajax({
        url: "http://localhost/project/?function=ServiceHistory&parameter=" + offset + "-" + limit ,
        success: function (response) {
            $('#tblCustomers').html(response);
            
            $('.servicehistory_rating').rateYo({
                rating: 1,
                starWidth: "15px"
            });

            $('.servicehistory_rating').each(function (i, obj) {

                id = $(this).attr('id');
                servicerequestid_arr = id.split('-');
                servicerequestid = servicerequestid_arr[0];

                $.ajax({
                    type: "POST",
                    url: "http://localhost/project/?function=getrating",
                    data: {
                        serviceRequestId: servicerequestid
                    },
                    success: function (response) {
                        id_rating_arr = response.split('|');
                        rating = id_rating_arr[0];
                        id = id_rating_arr[1];
                        $('#' + id + '-ratings').rateYo("option", "rating", rating);
                    }
                });
            });
        }
    });
}


$('#history').click(function (e) { 
    e.preventDefault();
   serviceHistory(0, 2);
   historytotalentries();
    
});

$(document).ready(function () {
    
    updatedashboard(0, 2);
    dashboardtotalentries();
});


$('#entries_dashboard').change(function () {
    limit = $('#entries_dashboard').val();
    updatedashboard(0, limit);
    $('#pageno').html(1);
});
$('#entries_history').change(function () {
    limit = $('#entries_history').val();
    serviceHistory (0, limit);
    $('#pageno1').html(1);
});
function paginationno1(textno) {
    limit = $('#entries_history').val();

    totalentriestext = $('#totalRecord_history').html();
    totalentriesarr = totalentriestext.split(": ");
    totalentries = parseInt(totalentriesarr[1]);

    currentpageno = parseInt($('#pageno1').html());

    maxpageno = Math.ceil(totalentries / limit);
    if (textno == 'next') {
        currentpageno += 1;

        if (currentpageno <= maxpageno) {
            $('#pageno1').html(currentpageno);

            offset = (currentpageno - 1) * limit;
            serviceHistory(offset, limit);
        }
    } else if (textno == 'back') {
        currentpageno -= 1;

        if (currentpageno > 0) {
            $('#pageno1').html(currentpageno);

            offset = (currentpageno - 1) * limit;
            serviceHistory(offset, limit);
        }
    } else if (textno == 'max') {
        $('#pageno1').html(maxpageno);

        offset = (currentpageno - 1) * limit;
        serviceHistory(offset, limit);

    } else if (textno == 'min') {
        $('#pageno1').html(1);

        offset = (currentpageno - 1) * limit;
        serviceHistory(offset, limit);
    } else {
        console.log("Error in Pagination");
    }
} 

function paginationno(textno) {
    limit = $('#entries_dashboard').val();

    totalentriestext = $('#totalRecord_dashboard').html();
    totalentriesarr = totalentriestext.split(": ");
    totalentries = parseInt(totalentriesarr[1]);

    currentpageno = parseInt($('#pageno').html());

    maxpageno = Math.ceil(totalentries / limit);
    if (textno == 'next') {
        currentpageno += 1;

        if (currentpageno <= maxpageno) {
            $('#pageno').html(currentpageno);

            offset = (currentpageno - 1) * limit;
            updatedashboard(offset, limit);
        }
    } else if (textno == 'back') {
        currentpageno -= 1;

        if (currentpageno > 0) {
            $('#pageno').html(currentpageno);

            offset = (currentpageno - 1) * limit;
            updatedashboard(offset, limit);
        }
    } else if (textno == 'max') {
        $('#pageno').html(maxpageno);

        offset = (currentpageno - 1) * limit;
        updatedashboard(offset, limit);

    } else if (textno == 'min') {
        $('#pageno').html(1);

        offset = (currentpageno - 1) * limit;
        updatedashboard(offset, limit);
    } else {
        console.log("Error in Pagination");
    }
}

function ratingclick(servicerequestid, serviceproviderid) {
console.log(serviceproviderid);
    $.ajax({
        method: "POST",
        url: "http://localhost/project/?function=setratingmodal",
        data: {
            serviceProviderId : serviceproviderid

        },
        success: function (response) {
            arr = response.split("|");
            $('.rating_name_modal').html(arr[0]);
            $('#rating_logo').attr('src','../assets/image/' + arr[1]);
        }
    });

    $('.rating_serviceid').attr('id', servicerequestid + "/" + serviceproviderid);
}

$('#rating_submit').click(function (e) {
    e.preventDefault();

    idarr = $('.rating_serviceid').attr('id').split("/");
    serviceid = idarr[0];
    serviceproviderid = idarr[1];
    feedback = $('#rating_textarea').val();
    //console.log(feedback);

    timeArrivalRating = parseFloat($('.rating_value').html());
    friendlyRating =  parseFloat($('.rating_value1').html());
    QualityRating = parseFloat($('.rating_value2').html());
    rating = parseFloat($('#average_rating_value').html());

    if (serviceproviderid != undefined) {
        $.ajax({
            type: "POST",
            url: "http://localhost/project/?function=setrating",
            data: {
                id: serviceid,
                serviceprovider_id : serviceproviderid,
                service_feedback: feedback,
                timeArrival : timeArrivalRating,
                friendly : friendlyRating,
                quality : QualityRating,
                rating_service : rating
            },
            success: function (response) {
                ratings_id_arr = response.split("|");
                console.log("#" + ratings_id_arr[0] + "-ratings");
                $("#" + ratings_id_arr[0] + "-ratings").rateYo("option", "rating", ratings_id_arr[1]);
            }
        });
    }


}); 
$('#setting_update_password').click(function (e) {
    e.preventDefault();

    old_password = $('#old_password').val();
    new_password = $('#new_password').val();
    confirm_password = $('#confirm_password').val();

    if (old_password == "" || new_password == "" || confirm_password == "") {
        $('#update_password_sucess').html(" ");
        $('#update_password_error').html("Please Enter all the values");
    } else if (new_password != confirm_password) {
        $('#update_password_sucess').html(" ");
        $('#update_password_error').html("Please enter the same password");
    } else {

        $.ajax({
            type: "POST",
            url: "http://localhost/project/?function=oldpasswordcheck",
            data: {
                oldPassword: old_password
            },
            success: function (response) {
                if (old_password != old_password) {
                    $('#update_password_sucess').html(" ");
                    $('#update_password_error').html("Incorrect old password");
                   
                } else {
                    $.ajax({
                        type: "POST",
                        url: "http://localhost/project/?function=updatePassword",
                        data: {
                            password: new_password
                        },
                        success: function (response) {
                            $('#update_password_error').html(" ");
                            $('#update_password_sucess').html("Password Updated");
                        }
                    });
                }
            }
        });
    }

});

function setting_load_address(){
    $.ajax({
        url: "http://localhost/project/?function=loadsettingaddress",
        success: function (response) {
            $('.address_table').html(response);  
        }
    });
}
$('#mysettings').click(function () {

//setting_set_details();
setting_load_address();
});

function edit_address(id) {

$('.setting_address_error').attr('id',id + '-addressid');

$.ajax({
    type: "POST",
    url: "http://localhost/project/?controller=Home&function=setAddressModal",
    data: {
        addressId: id
    },
    success: function (response) {
        var address = JSON.parse(response);

        $('#streetname_setting').val(address["AddressLine2"]);
        $('#streetname_houseno').val(address["AddressLine1"]);
        $('#postalcode_setting').val(address["PostalCode"]);
        $('#city_setting').val(address["City"]);
        $('#phoneno_setting').val(address["Mobile"]);

    }
    
});


}

$('#submit_setting').click(function (e) {
e.preventDefault();

StreetName = $('#streetname_setting').val();
HouseNo = $('#streetname_houseno').val();
PostalCode = $('#postalcode_setting').val();
City = $('#city_setting').val();
PhoneNo = $('#phoneno_setting').val();


AddressId = $('.setting_address_error').attr('id');
idarr = AddressId.split('-');
id = parseInt(idarr[0]);

$.ajax({
    type: "POST",
    url: "http://localhost/project/?controller=Home&function=updateAddress",
    data: {
        streetName : StreetName,
        houseno : HouseNo,
        postalcode : PostalCode,
        city : City,
        Mobile : PhoneNo,
        AddressId : id
    },
    success: function (response) {
        setting_load_address();
        console.log(response);
        //$('.setting_address_sucess').html('Address Updated Successfully');
    }
});
});

$('#submit_add_setting').click(function (e) { 
    e.preventDefault();

    var streetname = $('#streetname_add_setting').val().trim();
    var houseno = $('#houseno_add_setting').val().trim();
    var postalcode = $('#postalcode_add_setting').val().trim();
    var city = $('#city_add_setting').val().trim();
    var phone_no = $('#phoneno_add_setting').val().trim();
    
    //console.log(streetname, houseno,postalcode,city,phone_no);

    if (streetname == "" || houseno == "" || postalcode == "" || city == "" || phone_no == "") {
        $('#add_new_address_error').html("Please Enter all Value");
    } else if (postalcode.length != 6) {
        $('#add_new_address_error').html("Postal Code must have 6 numbers");
    } else if (phone_no.length != 10) {
        $('#add_new_address_error').html("Phone No must have 10 numbers");
    } else {
        $.ajax({
            type: "POST",
            url: "http://localhost/project/?controller=Home&function=insertaddress",
            data: {
                street_name: streetname,
                house_no: houseno,
                postalcode: postalcode,
                city: city,
                phoneno: phone_no
            },
            success: function (response) {
                setting_load_address();
                console.log(response);
                $('#addnewaddress_setting_form').trigger("reset");
            }
        });
    }
    
});

// Delete Address 

function delete_address(addressid){
    $('.delete_address_id').attr('id',addressid + '-delete_addr');
}

$('#delete_address_setting').click(function (e) { 
    e.preventDefault();

    id_str = $('.delete_address_id').attr('id');
    id_arr = id_str.split('-');
    id = parseInt(id_arr[0]);

    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=deleteaddress_setting",
        data: {
            addressId : id,
        },
        success: function (response) {
            setting_load_address();     
        }
    });
    
});





function loadBlockedCustomer() {
    $.ajax({
        url: "http://localhost/project/?function=GetBlockedCustomerlist_C",
        success: function (response) {
            console.log(response);
            $('#favouritepros').html(response);

            //Rating in Customer

            $('.rating_customer').rateYo({
                rating: 1,
                starWidth: "20px",
                readOnly: true
            });

            $('.rating_customer').each(function () {
                className = $(this).attr('class');
                className_arr = className.split(' ');
                rating_arr = className_arr[1].split('-');
                avgrating = parseFloat(rating_arr[0]);

                $(this).rateYo("option", "rating", avgrating);
            });

        }
    });

}

$('#favpros').click(function (e) {
    e.preventDefault();

    loadBlockedCustomer()
});


function favouriteSp(id) {
    id_arr = id.split("-");

    favblockid = parseInt(id_arr[0]);

    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=favouriteblocked_C",
        data: {
            favouriteId: favblockid
        },
        success: function (response) {
            loadBlockedCustomer();
        }
    });
}

function BlockedSp(id) {
    id_arr = id.split("-");

    favblockid = parseInt(id_arr[0]);

    $.ajax({
        type: "POST",
        url: "http://localhost/project/?function=favouriteblocked_C2",
        data: {
            favouriteId: favblockid
        },
        success: function (response) {
            loadBlockedCustomer();
        }
    });
}