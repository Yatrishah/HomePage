$(document).ready(function () {
    $(".div-sidebar .nav-tog p").on("click", function () {
        if (!$(this).parent().hasClass("active-nav")) {
            const navtags = document.getElementsByClassName("nav-tog");
            for (var i = 0; i < navtags.length; i++) {
                navtags[i].classList.remove("active-nav");
            }
            $(this).parent().addClass("active-nav");
            //alert("add");
        } else {
            //alert("remove");
            $(this).parent().removeClass("active-nav");
        }
    });
    $(".div-sidebar a").on("click", function () {
        //alert($(this).hasClass("sidebar-active"));
        if (!$(this).find("sidebar-active").length) {
            const active = document.getElementsByClassName("sidebar-active");
            for (var i = 0; i < active.length; i++) {
                active[i].classList.remove("sidebar-active");
            }
            $(this).addClass("sidebar-active");
          //  alert("add");
        } else {
            //alert("remove");
            $(this).removeClass("sidebar-active");
        }
    });
}); 



function usermanagement(){
        document.getElementById("usermanagement").style.display="block";
        document.getElementById("servicerequest").style.display="none";
        
        document.getElementById("usermanagement1").classList.add("active");
        if(document.getElementById("servicerequest1").classList.contains("active")){
            document.getElementById("servicerequest1").classList.remove("active");
        }
        
        }



function servicerequest(){
        document.getElementById("servicerequest").style.display="block";
        document.getElementById("usermanagement").style.display="none";
        
        document.getElementById("servicerequest1").classList.add("active");
        if(document.getElementById("usermanagement1").classList.contains("active")){
            document.getElementById("usermanagement1").classList.remove("active");
        }
        
        }