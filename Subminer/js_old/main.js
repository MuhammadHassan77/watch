function loading() {
    let c = 0;
    let i = setInterval(function () {
        $(".loading-page .counter h1").html(c + "%");
        $(".loading-page .counter hr").css("width", c + "%");
        c++;
        if (c == 101) { clearInterval(i); $("#loader").addClass("d-none"); }
    }, 40);
}
loading();

//zoom in and zoom out function
$(document).ready(function () {
    $("#zoomIn").click(function () {
        var div = $(".tail img,.tail svg");
        // var div = $(".tail");
        startAnimation();
        function startAnimation() {
            div.css({
                "transform": "scale(1.3)",
                "-webkit-transform": "scale(1.3)",
                "-moz-transform": "scale(1.3)",
                "transition": "all 0.3s",
                "-webkit-transition": "all 0.3s",
                "-moz-transition": "all 0.3s"
            });
        }
        $("#hourHand,#minHand,#handLumi,#secHand").css({
            "transform": "scale(1.35)",
            "-webkit-transform": "scale(1.35)",
            "-moz-transform": "scale(1.35)"
        });

    });

    $("#zoomOut").click(function () {
        var div = $(".tail img,.tail svg");
        // var div = $(".tail");
        startAnimation();
        function startAnimation() {
            div.css({
                "transform": "scale(1)",
                "-webkit-transform": "scale(1)",
                "-moz-transform": "scale(1)",
                "transition": "all 0.3s",
                "-webkit-transition": "all 0.3s",
                "-moz-transition": "all 0.3s"
            });
        }
        $("#hourHand,#minHand,#handLumi,#secHand").css({
            "transform": "scale(1.15)",
            "-webkit-transform": "scale(1.15)",
            "-moz-transform": "scale(1.15)"
        });
        // if ($(window).width() < 576) $(".stylewatch").css("color", "black");
    });
    $("#hourHand,#minHand,#handLumi,#secHand").css({
        "transform": "scale(1.15)",
        "-webkit-transform": "scale(1.15)",
        "-moz-transform": "scale(1.15)"
    });
});


// function startAnimation(div) {
//     div.css({
//         "transform": "scale(1.2)",
//         "-webkit-transform": "scale(1.2)",
//         "-moz-transform": "scale(1.2)",
//         "transition": "all 0.3s",
//         "-webkit-transition": "all 0.3s",
//         "-moz-transition": "all 0.3s"
//     });
//     $("#hourHand,#minHand,#handLumi,#secHand").css({
//         "transform": "scale(1.35)",
//         "-webkit-transform": "scale(1.35)",
//         "-moz-transform": "scale(1.35)"
//     });
// }

/*Close Configurator function*/
$(document).on("click", '.arrow-collapse, .cls-btn', function () {
    // $('.arrow-collapse, .cls-btn').click(function(){
    $(".style-1").removeClass('active-style');
    // $(".tabsrt").addClass('d-none');
    $(".tabsrt,.color-popup,.watchmodels").addClass('d-none');
    $(".watchskull,.skullParts,.skullColor,#myRange").hide();
    $('#myCanvas').css('transform', 'translateX(0%)');
    // 	$('.dot-menu').css('transform', 'translateX(0%)');

});

/*Configurator work start*/
$(document).on('click', '#desk-sx svg g', function () {
    $(".color-popup").removeClass('d-none');
    $(".watchskull,.right-popup,.skullColor,#myRange").hide();
    $('#myCanvas').css('transform', 'translateX(-5%)');
    // 	$('.dot-menu').css('transform', 'translateX(-160%)');
    id = $(this).attr("id");
    // let lumi_id = $(this).attr("style-id");
    let lumi_id = 1;
    // let hands_id = $(this).attr("style-id");
    let hands_id = 1;
    // let sechand_id = $(this).attr("style-id");
    let sechand_id = 1;

    let watchid = $('.watch-svg').attr("data-watch");

    // var div = $(".tail img,.tail svg");
    // startAnimation(div);
    $(".resetCanvas").css("background-color", "#d3d3d394");

    console.log(id);
    if (id == "svg-strap") {
        $("#zoomOut").trigger("click");
        $(".right-popup,.color-popup").hide();
        $(".strapmodels").show();
        // 	$(`.watchstrap[data-id="${watchid == 3 ? watchid = 1 : watchid = watchid}"],.my-option`).show();

        // $('.watchstrap').eq(--watchid).show();
    } else if (id == "svg-case") {
        $(".right-popup,.color-popup").hide();
        $(`.watchcases`).show();
        // $(`.watchcases[data-id="${watchid}"],.my-option`).show();
        // $('.watchcases').eq(--watchid).show();
    } else if (id == "svg-bezel") {
        $(".right-popup,.color-popup").hide();
        $(".bezelmodels").show();
        // 		$("#bezelNum").hide();
        // 		$(`.watchbezel`).show();
        // 		$(`.watchbezel`).find(".col-1").last().trigger("click");

        // $(`.watchbezel[data-id='${watchid}'],.my-option`).show();
        // $('.watchbezel').eq(--watchid).show();
    } else if (id == "svg-bezel-num") {
        $(".right-popup,.color-popup").hide();
        $('.bezelnumModels').show();
        // $('.watchbezelNum,#bezelTriangle').show();

    } else if (id == "svg-winder") {
        $(".right-popup,.color-popup").hide();
        $(`.watchwinder`).show();
        // $(`.watchwinder[data-id='${watchid}']`).show();
        // ($('.watchwinder').eq(--watchid).show());
    } else if (id == "svg-face") {
        $(".right-popup,.color-popup").hide();
        $('.watchface').show();
    } else if (id == "svg-hour") {
        $(".right-popup,.color-popup").hide();
        $('.watchhands').show();
        // $(`.watchhour[style-id="${hands_id}"]`).show();
    } else if (id == "svg-min") {
        $(".right-popup,.color-popup").hide();
        $('.watchhands').show();
        // $(`.watchmin[style-id="${hands_id}"]`).show();
    }else if (id == "svg-hands") {
        $(".right-popup,.color-popup").hide();
        $('.watchhands').show();
        // $(`.watchmin[style-id="${hands_id}"]`).show();
    } else if (id == "svg-sechand") {
        $(".right-popup,.color-popup").hide();
        $(`.secondhand[style-id="${sechand_id}"]`).show();
    } else if (id == "svg-lumi") {
        $(".right-popup,.color-popup").hide();
        $(`.watchlumi`).show();
    } else if (id == "svg-sub-hands") {
        $(".right-popup,.color-popup").hide();
        $(`.watchsubHand`).show();
    } else if (id == "svg-sub-ring") {
        $(".right-popup,.color-popup").hide();
        $('.watchsubRing').show();
    } else if (id == "svg-up-text") {
        $(".right-popup,.color-popup").hide();
        $('.watchupText').show();
    } else if (id == "svg-swiss") {
        $(".right-popup,.color-popup").hide();
        $('.watchswissText').show();
    } else if (id == "svg-sec-mark") {
        $(".right-popup,.color-popup").hide();
        $('.watchsecondMark').show();
    } else if (id == "svg-hour-mark") {
        $(".right-popup,.color-popup").hide();
        $('.watchhourMark').show();
    } else if (id == "svg-hour-mark-lumi") {
        $(".right-popup,.color-popup").hide();
        $('.watchhourmarkLumi').show();
    } else if (id == "svg-sub-number") {
        $(".right-popup,.color-popup").hide();
        $('.watchsubNum').show();
    } else if (id == "svg-sub-mark") {
        $(".right-popup,.color-popup").hide();
        $('.watchsubMark').show();
    }

})



$(document).on('click', '.newControlMenu', function () {
    $(".color-popup").removeClass('d-none');
    $(".watchskull,#myRange").hide();

    if ($(window).width() > 576) {
        $("#closeCarousel").trigger("click");
        $('#myCanvas').css('transform', 'translateX(-5%)');
        $('.dot-menu').css('transform', 'translateX(-120%)');
    }
    // var div = $(".tail img,.tail svg");
    // startAnimation(div);
    $(".resetCanvas").css("background-color", "#d3d3d394");

    // style_id = $(this).attr("style-id");
    style_id = 1;

    // watchid = $('.watch-svg').attr("data-watch");
    watchid = 1;

    com_name = $(this).attr("data-watch");

    console.log(com_name);

    if (com_name == "svg-lumi") {

        $(".right-popup,.color-popup").hide();
        // $('.watchskull').show();
        // $('#myRange').show();
        $('.watchlumi').show();
        $('#myCanvas').css('transform', 'translateX(-15%)');

    } else if (com_name == "svg-case") {

        $(".right-popup,.color-popup").hide();
        $(`.watchcases[data-id="${watchid}"]`).show();
        $(`.watchcases`).show();
        // $('.watchcases').eq(--watchid).show();

    } else if (com_name == "svg-strap") {

        $("#zoomOut").trigger("click")
        $(".right-popup,.color-popup").hide();
        $(`.watchstrap[data-id="${watchid == 3 ? watchid = 1 : watchid = watchid}"]`).show();
        // $('.watchstrap').eq(--watchid).show();

    } else if (com_name == "svg-crocodile-strap") {

        $("#zoomOut").trigger("click")
        $(".right-popup,.color-popup").hide();
        $(`.watchcrocodileStrap`).show();
        // $('.watchstrap').eq(--watchid).show();

    } else if (com_name == "svg-original-bezel") {

        $(".right-popup,.color-popup").hide();
        // 		$(`.bezelmodels`).show();
        $(".bezelmodels").show();
        // $("#bezelNum").show();
        // $(`.watchoriginalBezel`).show();
        // $(`.watchoriginalBezel`).find(".col-1").last().trigger("click");

        // $(`.watchbezel[data-id="${watchid}"]`).show();

    } else if (com_name == "svg-bezel") {

        $(".right-popup,.color-popup").hide();
        $(`.bezelmodels`).show();

        // $("#bezelNum").hide();
        // $(`.watchbezel`).show();
        // $(`.watchbezel`).find(".col-1").last().trigger("click");

        // $(`.watchbezel[data-id="${watchid}"]`).show();

    } else if (com_name == "svg-diamond-bezel") {

        $(".right-popup,.color-popup").hide();
        $(`.bezelmodels`).show();

        // $("#bezelNum").hide();
        // $(`.watchdiamondBezel[data-id="${watchid}"]`).show();
        // $(`.watchdiamondBezel`).find(".col-1").first().trigger("click");

    } else if (com_name == "svg-winder") {

        $(".right-popup,.color-popup").hide();
        $(`.watchwinder`).show();
        // $(`.watchwinder[data-id="${watchid}"]`).show();
        // ($('.watchwinder').eq(--watchid).show());
    } else if (com_name == "svg-movement") {

        $(".right-popup,.color-popup").hide();
        // $(`.watchmovement[style-id="${style_id}"]`).show();
        $(`.watchmovement`).show();

    } else if (com_name == "svg-bezel-num") {

        $(".right-popup,.color-popup").hide();
        $('.bezelnumModels').show();
        // $('.watchbezelNum,#bezelTriangle').show();

    } else if (com_name == "svg-sub-ring") {

        $(".right-popup,.color-popup").hide();
        // $(`.watchhands[style-id="${style_id}"]`).show();
        $(`.watchsubRing`).show();

    } else if (com_name == "svg-hour") {

        $(".right-popup,.color-popup").hide();
        $('.watchhands').show();
        // $('.watchhour').show();

    } else if (com_name == "svg-min") {

        $(".right-popup,.color-popup").hide();
        $('.watchhands').show();
        // $('.watchmin').show();

    } else if (com_name == "svg-sechand") {

        $(".right-popup,.color-popup").hide();
        $(`.secondhand[style-id="${style_id}"]`).show();

    } else if (com_name == "svg-face") {

        $(".right-popup,.color-popup").hide();
        $('.watchface').show();

    } else if (com_name == "svg-up-text") {

        $(".right-popup,.color-popup").hide();
        $('.watchupText').show();

    } else if (com_name == "svg-lw-text") {

        $(".right-popup,.color-popup").hide();
        $('.watchswissText').show();

    } else if (com_name == "svg-hour-mark") {

        $(".right-popup,.color-popup").hide();
        $('.watchhourMark').show();

    } else if (com_name == "svg-hour-mark-lumi") {

        $(".right-popup,.color-popup").hide();
        $('.watchhourmarkLumi').show();

    } else if (com_name == "svg-sechand-mark") {

        $(".right-popup,.color-popup").hide();
        $('.watchsecondMark').show();

    } else if (com_name == "svg-sub-hand") {

        $(".right-popup,.color-popup").hide();
        $('.watchsubHand').show();

    } else if (com_name == "svg-sub-ring") {

        $(".right-popup,.color-popup").hide();
        $('.watchsubRing').show();

    } else if (com_name == "svg-sub-mark") {

        $(".right-popup,.color-popup").hide();
        $('.watchsubMark').show();

    } else if (com_name == "svg-sub-num") {

        $(".right-popup,.color-popup").hide();
        $('.watchsubNum').show();

    } else {
        console.log(com_name + " Not Matched");
    }

})

$(document).on("click", ".myBezelNumbers", function () {

    let com_name = $(this).attr("data-watch");
    // let id = $(this).attr("data-id");
    let id = 1;
    console.log(com_name);

    if (com_name == "svg-bezel-num") {

        $(".right-popup,.color-popup").hide();

        $('#bezelNum,#bezelTriangle ,g#svg-bezel-num').show();
        $(`.watchbezelNum[data-id='${id}']`).show();
        $(`.watchbezelNum[data-id='${id}']`).find(".col-1").eq(17).trigger("click");

    } else if (com_name == "svg-bezel-dash") {

        $(".right-popup,.color-popup").hide();

        $('#bezelNum,#bezelTriangle ,g#svg-bezel-num').show();
        $(`.watchbezelDash[data-id='${id}']`).show();
        $(`.watchbezelDash[data-id='${id}']`).find(".col-1").eq(17).trigger("click");

    } else if (com_name == "svg-bezel-triangle") {

        $(".right-popup,.color-popup").hide();

        $('#bezelNum,#bezelTriangle ,g#svg-bezel-num').show();
        $(`.watchbezelTriangle[data-id='${id}']`).show();
        $(`.watchbezelTriangle[data-id='${id}']`).find(".col-1").eq(17).trigger("click");

    }
})

$(document).on("click", ".myBezels", function () {

    com_name = $(this).attr("data-watch");
    console.log(com_name);

    if (com_name == "svg-original-bezel") {

        $(".right-popup,.color-popup").hide();

        $("#bezelNum,#bezelDash,#bezelTriangle ,g#svg-bezel-num").show();

        $(`.watchoriginalBezel`).show();
        $(`.watchoriginalBezel`).find(".col-1").last().trigger("click");

        // $(`.watchbezel[data-id="${watchid}"]`).show();
        // ($('.watchbezel').eq(--watchid).show());

    } else if (com_name == "svg-bezel") {

        $(".right-popup,.color-popup").hide();

        $("#bezelNum,#bezelDash,#bezelTriangle ,g#svg-bezel-num").hide();
        $(`.watchbezel`).show();
        $(`.watchbezel`).find(".col-1").last().trigger("click");

        // $(`.watchbezel[data-id="${watchid}"]`).show();
        // ($('.watchbezel').eq(--watchid).show());

    } else if (com_name == "svg-diamond-bezel") {

        $(".right-popup,.color-popup").hide();

        $("#bezelNum,#bezelDash,#bezelTriangle ,g#svg-bezel-num").hide();
        $(`.watchdiamondBezel`).show();
        $(`.watchdiamondBezel`).find(".col-1").first().trigger("click");

        // ($('.watchbezel').eq(--watchid).show());

    }
})


$(document).on("click", ".myStrap", function () {

    com_name = $(this).attr("data-watch");
    console.log(com_name);

    if (com_name == "svg-strap") {

        $(".right-popup,.color-popup").hide();
        $(".watchstrap").show();

    } else if (com_name == "svg-crocodile-strap") {
        $(".right-popup,.color-popup").hide();
        $(".watchcrocodileStrap").show();

    }
})


$(document).on("click", ".bothhands", function () {
    let style_id = $(this).attr('style-id');
    // console.log(style_id)

    // var div = $(".tail img,.tail svg");
    // startAnimation(div);

    if (style_id == 1) {
        // $("#secHand").hide();
        $("#handLumi,#svg-lumi,#handTip,#svg-tip,li a[data-watch='svg-lumi'],li a[data-watch='svg-tip']").show();
        $("#handLumi").attr("src", "./data/Hand lumi/1.png");
        $("#minHand,#hourHand").attr("src", "./data/Hands/1.png");
        $("g#svg-min,g#svg-hour,g#svg-lumi,a[data-watch='svg-lumi'],a[data-watch='svg-hands']").attr("style-id", style_id);
    } else if (style_id == 2) {
        $("#handLumi,#svg-lumi,#handTip,#svg-tip,li a[data-watch='svg-lumi'],li a[data-watch='svg-tip']").hide();
        $("#minHand,#hourHand").attr("src", "./data/Hands/24.png");
        $("g#svg-min,g#svg-hour").attr("style-id", style_id);
    } else if (style_id == 3) {
        $("#handLumi,#svg-lumi,#handTip,#svg-tip,li a[data-watch='svg-lumi'],li a[data-watch='svg-tip']").hide();
        $("#minHand,#hourHand").attr("src", "./data/Hands/47.png");
        $("g#svg-min,g#svg-hour").attr("style-id", style_id);
    } else if (style_id == 4) {
        $("#handLumi,#svg-lumi,#handTip,#svg-tip,li a[data-watch='svg-lumi'],li a[data-watch='svg-tip']").hide();
        $("#minHand,#hourHand").attr("src", "./data/Hands/70.png");
        $("g#svg-min,g#svg-hour").attr("style-id", style_id);
    } else if (style_id == 5) {
        $("#handLumi,#svg-lumi,li a[data-watch='svg-lumi']").show();
        $("#handTip,#svg-tip,li a[data-watch='svg-tip']").hide();
        $("#handLumi").attr("src", "./data/Hand lumi/22.png");
        $("#minHand,#hourHand").attr("src", "./data/Hands/93.png");
        // $("#secHand").attr("src", "./data/Second hand/1.png");
        $("g#svg-min,g#svg-hour,a[data-watch='svg-hands']").attr("style-id", style_id);
        $("g#svg-lumi,a[data-watch='svg-lumi']").attr("style-id", "2");
        // $("g#svg-sechand,a[data-watch='svg-sechand']").attr("style-id", style_id);
    } else if (style_id == 6) {
        $("#handLumi,#svg-lumi,li a[data-watch='svg-lumi']").show();
        $("#handTip,#svg-tip,li a[data-watch='svg-tip']").hide();
        $("#handLumi").attr("src", "./data/Hand lumi/43.png");
        $("#minHand,#hourHand").attr("src", "./data/Hands/114.png");
        $("g#svg-min,g#svg-hour,a[data-watch='svg-hands']").attr("style-id", style_id);
        $("g#svg-lumi,a[data-watch='svg-lumi']").attr("style-id", "3");
    } else if (style_id == 7) {
        $("#handLumi,#svg-lumi,li a[data-watch='svg-lumi']").show();
        $("#handTip,#svg-tip,li a[data-watch='svg-tip']").hide();
        $("#handLumi").attr("src", "./data/Hand lumi/64.png");
        $("#minHand,#hourHand").attr("src", "./data/Hands/135.png");
        // $("#secHand").attr("src", "./data/Second hand/24.png");
        $("g#svg-min,g#svg-hour,a[data-watch='svg-hands']").attr("style-id", style_id);
        $("g#svg-lumi,a[data-watch='svg-lumi']").attr("style-id", "4");
        // $("g#svg-sechand,a[data-watch='svg-sechand']").attr("style-id", style_id);
    } else if (style_id == 8) {
        $("#handLumi,#svg-lumi,li a[data-watch='svg-lumi']").show();
        $("#handTip,#svg-tip,li a[data-watch='svg-tip']").hide();
        $("#handLumi").attr("src", "./data/Hand lumi/85.png");
        $("#minHand,#hourHand").attr("src", "./data/Hands/156.png");
        // $("#secHand").attr("src", "./data/Second hand/47.png");
        $("g#svg-min,g#svg-hour,a[data-watch='svg-hands']").attr("style-id", style_id);
        $("g#svg-lumi,a[data-watch='svg-lumi']").attr("style-id", "5");
        // $("g#svg-sechand,a[data-watch='svg-sechand']").attr("style-id", style_id);
    } else if (style_id == 9) {
        $("#handLumi,#svg-lumi,li a[data-watch='svg-lumi']").show();
        $("#handTip,#svg-tip,li a[data-watch='svg-tip']").hide();
        $("#handLumi").attr("src", "./data/Hand lumi/106.png");
        $("#minHand,#hourHand").attr("src", "./data/Hands/177.png");
        $("g#svg-min,g#svg-hour,a[data-watch='svg-hands']").attr("style-id", style_id);
        $("g#svg-lumi,a[data-watch='svg-lumi']").attr("style-id", "6");
    } else if (style_id == 10) {
        $("#handLumi,#svg-lumi,li a[data-watch='svg-lumi']").show();
        $("#handTip,#svg-tip,li a[data-watch='svg-tip']").hide();
        $("#handLumi").attr("src", "./data/Hand lumi/127.png");
        $("#minHand,#hourHand").attr("src", "./data/Hands/198.png");
        $("g#svg-min,g#svg-hour,a[data-watch='svg-hands']").attr("style-id", style_id);
        $("g#svg-lumi,a[data-watch='svg-lumi']").attr("style-id", "7");
    } else if (style_id == 11) {
        $("#handLumi,#svg-lumi,li a[data-watch='svg-lumi']").show();
        $("#handTip,#svg-tip,li a[data-watch='svg-tip']").hide();
        $("#handLumi").attr("src", "./data/Hand lumi/148.png");
        $("#minHand,#hourHand").attr("src", "./data/Hands/219.png");
        $("g#svg-min,g#svg-hour,a[data-watch='svg-hands']").attr("style-id", style_id);
        $("g#svg-lumi,a[data-watch='svg-lumi']").attr("style-id", "8");
    } else if (style_id == 12) {
        $("#handLumi,#svg-lumi,li a[data-watch='svg-lumi']").show();
        $("#handTip,#svg-tip,li a[data-watch='svg-tip']").hide();
        $("#handLumi").attr("src", "./data/Hand lumi/183.png");
        $("#minHand,#hourHand").attr("src", "./data/Hands/254.png");
        $("g#svg-min,g#svg-hour,a[data-watch='svg-hands']").attr("style-id", style_id);
        $("g#svg-lumi,a[data-watch='svg-lumi']").attr("style-id", "9");
    } else if (style_id == 13) {
        $("#handLumi,#svg-lumi,li a[data-watch='svg-lumi']").show();
        $("#handTip,#svg-tip,li a[data-watch='svg-tip']").hide();
        $("#handLumi").attr("src", "./data/Hand lumi/206.png");
        $("#minHand,#hourHand").attr("src", "./data/Hands/277.png");
        $("g#svg-min,g#svg-hour,a[data-watch='svg-hands']").attr("style-id", style_id);
        $("g#svg-lumi,a[data-watch='svg-lumi']").attr("style-id", "10");
    }

    // $(".watchhands, .watchmodels").hide();
    // ($(".watchhands[style-id='" + style_id + "']").show());
    $("li a[data-watch='svg-hands']").attr("style-id", style_id);
})

$(document).on("click", ".sechand", function () {
    // var div = $(".tail img,.tail svg");
    // startAnimation(div);

    let url = $(this).find('img.img-fluid').attr("src");
    let style_id = $(this).attr("style-id");
    $("#secHand").attr("src", url);
    $("g#svg-sechand,a[data-watch='svg-sechand']").attr("style-id", style_id);
})

/*Configurator work end*/
$(document).on('click', '.stylewatch', function () {
    $('#myRange').hide();
    $(".right-popup,.color-popup").hide();
    $('.watchmodels').show();
})


$(".mySwitch2 input").click(function () {
    if ($(this).prop("checked") == true) {
        $(".forMen").hide();
        $(".forWomen").show();
        // $("#toggleCaseType").text("FOR MEN");
    } else if ($(this).prop("checked") == false) {
        $(".forWomen").hide();
        $(".forMen").show();
        // $("#toggleCaseType").text("FOR WOMEN");
    }
});
