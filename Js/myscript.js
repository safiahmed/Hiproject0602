
$(document).ready(function() {
    var pageTitle = document.title; //HTML page title
    var pageUrl = location.href; //Location of the page	
    //user hovers on the share button	
    $('#share-wrapper li').hover(function() {
        var hoverEl = $(this); //get element

        //browsers with width > 699 get button slide effect
        if ($(window).width() > 699) {
            if (hoverEl.hasClass('visible')) {
                hoverEl.animate({"margin-left": "-117px"}, "fast").removeClass('visible');
            } else {
                hoverEl.animate({"margin-left": "0px"}, "fast").addClass('visible');
            }
        }
    });
    //user clicks on a share button
    $('.button-wrap').click(function(event) {
        var shareName = $(this).attr('class').split(' ')[0]; //get the first class name of clicked element

        switch (shareName) //switch to different links based on different social name
        {
            case 'facebook':
                var openLink = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
                break;
            case 'twitter':
                var openLink = 'http://twitter.com/home?status=' + encodeURIComponent(pageTitle + ' ' + pageUrl);
                break;
            case 'digg':
                var openLink = 'http://www.digg.com/submit?phase=2&amp;url=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
                break;
            case 'stumbleupon':
                var openLink = 'http://www.stumbleupon.com/submit?url=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
                break;
            case 'delicious':
                var openLink = 'http://del.icio.us/post?url=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
                break;
            case 'google':
                var openLink = 'https://plus.google.com/share?url=' + encodeURIComponent(pageUrl) + '&amp;title=' + encodeURIComponent(pageTitle);
                break;
            case 'email':
                var openLink = 'mailto:?subject=' + pageTitle + '&body=Found this useful link for you : ' + pageUrl;
                break;

        }
        //Parameters for the Popup window
        winWidth = 650;
        winHeight = 400;
        winLeft = ($(window).width() - winWidth) / 2,
                winTop = ($(window).height() - winHeight) / 2,
                winOptions = 'width=' + winWidth + ',height=' + winHeight + ',top=' + winTop + ',left=' + winLeft;
        //open Popup window and redirect user to share website.
        window.open(openLink, 'Share This Link', winOptions);
        return false;
    });

    $(".grid").click(function() {
        var text = $(this).text();
        if (text == "Grid") {
            $("#list-view").hide();
            $("#grid-view").show();
        } else if (text == "List") {
            $("#grid-view").hide();
            $("#list-view").show();
        }
    });
    $(".list").click(function() {
        var text = $(this).text();
        if (text == "Grid") {
            $("#list-view").hide();
            $("#grid-view").show();
        } else if (text == "List") {
            $("#grid-view").hide();
            $("#list-view").show();
        }
    });





//category links starts
    $(".category-table-index tr").click(function() {
        var t = $(this).children().find("a:first-child").attr("class");
        location.href = "category-view.php?id=" + t;
    });
//index range go starts
//    $(".gobutton img").on('click', function() {
//        var val1 = $("#amount1").val();
//        var val2 = $("#amount2").val();
//        alert(val1+val2);
//        $.post("../category-view.php",{val1:val1},function(){});
//    });

//already subscribe
    $(".subsciber").on('click', function() {
        var eval = $("#test_email").val();
        var action = "./assets/controller-links.php";
        var action1 = "./assets/controller-links.php";
        $.ajax({
            url: action,
            type: "POST",
            data: {eval: eval},
            success: function(data) {
                if (data == 1) {
                    $.post(action1,{subscribe:eval},function(result){
                       $("#exist_sub").html('<div id="error_sub">Thank You for subscribing with Us.</div>'); 
                    });
                    
                } else if (data == 0) {
                    $("#exist_sub").html('<div id="exist_sub">You have already Subscribed...! Thank You.</div>');
                }
            }
        });
        return false;
    });


});
$(function() {
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 5000,
        values: [1000, 4000],
        slide: function(event, ui) {
            $("#amount1").val("$" + ui.values[ 0 ]);
            $("#amount2").val("$" + ui.values[ 1 ]);
        }
    });
    $("#amount1").val($("#slider-range").slider("values", 0));
     $("#amount2").val($("#slider-range").slider("values", 1));
});
