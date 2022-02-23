$(document).ready(() => {

    function getData(st, en) {
        // console.log(st, en);
        let clr = ['#751113', '#ff1e26', '#ff6600', '#feba27', '#ffff01', '#0d4f21', '#65ff00', '#47d4e5', '#4f8dfe', '#013ba7', '#ddb168', '#976005', '#8e00ce', '#dc0058', '#ffa7cf', '#ff4864', '#ffffff', '#c0c0c0', '#9a9a9a', '#4e2700', '#000000'];
        let j = 0;
        let ind = st;
        $(".color-menu.major ul").html(`<li class="submenu-li">Colors</li>`);
        for (let i = st; i <= en; i++) {
            $(".color-menu.major ul").append(`<li class="submenu-li">
                <div class="color-box" data-index="${ind}" style="background-color: ${clr[j]};"></div>
            </li>`);
            j++;
            ind++;
        }
    }

    $(document).on("click", ".navigate .submenu-li", function () {
        let Id = $(this).attr("data-id");
        $('.color-menu,.submenu').hide();
        if (Id == "#Case" || Id == "#Winder" || Id == ".Movement" || Id == ".Hour_mark") {
            $('.color-menu.other').show();
            $('.other .color-box').removeClass("color-active");
            $('.other .color-box').attr("data-id", Id);
        } else if (Id == "#Strap") {
            $('.styles').show();
            $('.styles ul').html(`<li class="submenu-li" p-name="#Strap" style-id="1">Strap</li> <li class="submenu-li" p-name="#Strap" style-id="2">Crocodile Strap</li>`);
        } else if (Id == "#Bezel") {
            $('.styles').show();
            $('.styles ul').html(`<li class="submenu-li" p-name="#Bezel" style-id="1">Bezel</li> <li class="submenu-li" p-name="#Bezel" style-id="2">Diamond Bezel</li>`);
        } else if (Id == "#Bezel_number") {
            $('.styles').show();
            $('.styles ul').html(`<li class="submenu-li" p-name="#Bezel_number" style-id="1">Style 1</li> <li class="submenu-li" p-name="#Bezel_number" style-id="2">Style 2</li>`);
        } else if (Id == ".secondmark") {
            $('.styles').show();
            $('.styles ul').html(`<li class="submenu-li" p-name=".secondmark" style-id="1">Style 1</li> <li class="submenu-li" p-name=".secondmark" style-id="2">Style 2</li> <li class="submenu-li" p-name=".secondmark" style-id="3">Style 3</li>`);
        } else if (Id == ".Sub_hand") {
            $('.styles').show();
            $('.styles ul').html(`<li class="submenu-li" p-name=".Sub_hand" style-id="1">Style 1</li> <li class="submenu-li" p-name=".Sub_hand" style-id="2">Style 2</li> <li class="submenu-li" p-name=".Sub_hand" style-id="3">Style 3</li>`);
        } else if (Id == ".Sub_ring") {
            $('.styles').show();
            $('.styles ul').html(`<li class="submenu-li" p-name=".Sub_ring" style-id="1">Style 1</li> <li class="submenu-li" p-name=".Sub_ring" style-id="2">Style 2</li>`);
        } else if (Id == ".Subnumber") {
            $('.styles').show();
            $('.styles ul').html(`<li class="submenu-li" p-name=".Subnumber" style-id="1">Style 1</li> <li class="submenu-li" p-name=".Subnumber" style-id="2">Style 2</li> <li class="submenu-li" p-name=".Subnumber" style-id="3">Style 3</li> <li class="submenu-li" p-name=".Subnumber" style-id="4">Style 4</li> <li class="submenu-li" p-name=".Subnumber" style-id="5">Style 5</li>`);
        } else if (Id == ".Submark") {
            $('.styles').show();
            $('.styles ul').html(`<li class="submenu-li" p-name=".Submark" style-id="1">Style 1</li> <li class="submenu-li" p-name=".Submark" style-id="2">Style 2</li> <li class="submenu-li" p-name=".Submark" style-id="3">Style 3</li> <li class="submenu-li" p-name=".Submark" style-id="4">Style 4</li>`);
        } else {
            $('.color-menu.major').show();
            $('.color-box').removeClass("color-active");
            $('.major .color-box').attr("data-id", Id);
        }
        // console.log("Id => ", Id);
    });

    $(document).on("click", ".styles .submenu-li", function () {
        let Id = $(this).attr("style-id");
        let p_name = $(this).attr("p-name");
        $('.submenu.styles').hide();
        if (p_name == "#Strap") {
            if (Id == 1) {
                $('.color-menu.other').show();
                $('.other .color-box').removeClass("color-active");
                $('.other .color-box').attr({
                    "data-id": p_name
                });
            } else if (Id == 2) {
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr({
                    "data-id": "#CrocoStrap"
                });
            }
        } else if (p_name == "#Bezel") {
            if (Id == 1) {
                $('.color-menu.major').show();
                $("#Bezel_number").show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr({
                    "data-id": p_name
                });
                $('.major .color-box').last().trigger("click")
            } else if (Id == 2) {
                $('.color-menu.another').show();
                $("#Bezel_number").hide();
                $('.another .color-box').removeClass("color-active");
                $('.another .color-box').attr({
                    "data-id": "#DiamondBezel"
                });
                $('.another .color-box').eq(0).trigger("click")
            }
        } else if (p_name == "#Bezel_number") {
            if (Id == 1) {
                getData(1, 22);
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').eq(17).trigger("click");
            } else if (Id == 2) {
                getData(22, 42);
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').eq(17).trigger("click");
            }
        } else if (p_name == ".secondmark") {
            if (Id == 1) {
                getData(1, 21);
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').eq(17).trigger("click");
            } else if (Id == 2) {
                getData(22, 42);
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').eq(17).trigger("click");
            } else if (Id == 3) {
                getData(43, 63);
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').eq(17).trigger("click");
            }
        } else if (p_name == ".Sub_hand") {
            if (Id == 1) {
                getData(1, 21);
                $(".subHandTip").show();
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').last().trigger("click");
            } else if (Id == 2) {
                getData(22, 42);
                $(".subHandTip").hide();
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').last().trigger("click");
            } else if (Id == 3) {
                getData(43, 65);
                $(".subHandTip").hide();
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').eq(21).trigger("click");
            }
        } else if (p_name == ".Sub_ring") {
            if (Id == 1) {
                getData(1, 21);
                $(".color-menu.major ul").append(`<li class="submenu-li">
                    <div class="color-box" data-index="${22}" style="background-color: #6ea4d0;"></div>
                </li>`);
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').last().trigger("click");
            } else if (Id == 2) {
                getData(23, 43);
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').last().trigger("click");
            }
        } else if (p_name == ".Subnumber") {
            if (Id == 1) {
                getData(1, 21);
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').eq(17).trigger("click");
            } else if (Id == 2) {
                getData(22, 42);
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').eq(17).trigger("click");
            } else if (Id == 3) {
                getData(43, 63);
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').eq(17).trigger("click");
            } else if (Id == 4) {
                getData(64, 84);
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').eq(17).trigger("click");
            } else if (Id == 5) {
                getData(85, 105);
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').eq(17).trigger("click");
            }
        } else if (p_name == ".Submark") {
            if (Id == 1) {
                getData(1, 21);
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').eq(17).trigger("click");
            } else if (Id == 2) {
                getData(22, 42);
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').eq(17).trigger("click");
            } else if (Id == 3) {
                getData(43, 63);
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').eq(17).trigger("click");
            } else if (Id == 4) {
                getData(64, 84);
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", p_name);
                $('.major .color-box').eq(17).trigger("click");
            }
        }
        // console.log(p_name, Id);
    });

    $(document).on("click", ".color-menu .submenu-li", function () {
        let Id = $(this).find(".color-box").attr("data-id");
        let Name = $(this).find(".color-box").attr("data-name");
        let k = $(this).find(".color-box").attr("data-index");
        let ind = $(this).index();
        // console.log(Id, ind, Name);
        if (Id == "#Case") {
            $(`${Id}`).attr("src", `./data/Case/${Name}1.png`);
        } else if (Id == "#Winder") {
            $(`${Id}`).attr("src", `./data/Winder/${Name}1.png`);
        } else if (Id == "#Strap") {
            $(`${Id}`).attr("src", `./data/Strap/${Name}1.png`);
        } else if (Id == "#CrocoStrap") {
            $(`#Strap`).attr("src", `./data/Crocodile strap/${ind}.png`);
        } else if (Id == "#Bezel") {
            $(`${Id}`).attr("src", `./data/Bezel/${ind}.png`);
        } else if (Id == "#DiamondBezel") {
            $(`#Bezel`).attr("src", `./data/Diamond Bezel/${Name}.png`);
        } else if (Id == "#Bezel_number") {
            $(`${Id}`).attr("src", `./data/Bezel Number/${k}.png`);
        } else if (Id == ".Movement") {
            $(`${Id}`).attr("src", `./data/Movment/${Name}.png`);
        } else if (Id == ".Face") {
            $(`${Id}`).attr("src", `./data/Face/${ind}.png`);
        } else if (Id == ".secondmark") {
            $(`${Id}`).attr("src", `./data/Second mark/${k}.png`);
        } else if (Id == ".Sub_ring") {
            $(`${Id}`).attr("src", `./data/Sub ring/${k}.png`);
        } else if (Id == ".Subnumber") {
            $(`${Id}`).attr("src", `./data/Submark/Sub number/${k}.png`);
        } else if (Id == ".Submark") {
            $(`${Id}`).attr("src", `./data/Submark/${k}.png`);
        } else if (Id == ".Lowertext") {
            $(`${Id}`).attr("src", `./data/Swiss Text/${ind}.png`);
        } else if (Id == ".middle_text") {
            // $(`${Id}`).attr("src", `./data/Bezel/${ind}.png`);
        } else if (Id == ".Uppertext") {
            $(`${Id}`).attr("src", `./data/Upper text/${ind}.png`);
        } else if (Id == ".Crown") {
            // $(`${Id}`).attr("src", `./data/Bezel/${ind}.png`);
        } else if (Id == ".Hour_mark") {
            $(`${Id}`).attr("src", `./data/Hour mark/${Name}.png`);
        } else if (Id == ".Hour_mark_lumi") {
            $(`${Id}`).attr("src", `./data/Hour mark lumi/${ind}.png`);
        } else if (Id == ".Sub_hand") {
            $(`${Id}`).attr("src", `./data/Sub hand/${k}.png`);
        } else if (Id == ".subHandTip") {
            $(`${Id}`).attr("src", `./data/Sub hand tip/${ind}.png`);
        } else if (Id == ".Min_hand") {
            $(`${Id}`).attr("src", `./data/Min hand/${ind}.png`);
        } else if (Id == ".Hour_hand") {
            $(`${Id}`).attr("src", `./data/Hour hand/${ind}.png`);
        } else if (Id == ".Hands") {
            $(`#Min_hand,.Min_hand`).attr("src", `./data/Min hand/${ind}.png`);
            $(`#Hour_hand,.Hour_Hand`).attr("src", `./data/Hour hand/${ind}.png`);
        } else if (Id == ".Hands_lumi") {
            $(`${Id}`).attr("src", `./data/Hand lumi/${ind}.png`);
        } else if (Id == ".Second_hand") {
            $(`${Id}`).attr("src", `./data/Second hand/${ind}.png`);
        } else if (Id == ".secHandTip") {
            $(`${Id}`).attr("src", `./data/Second hand tip/${ind}.png`);
        }
    });

    // Screen Shot Function
    $(document).on('click', '.screenShotBtn', function () {
        html2canvas(document.getElementById("2dwatch"), {
            backgroundColor: null
        }).then(function (canvas) {
            document.body.appendChild(canvas);
            Canvas2Image.saveAsPNG(canvas);
            document.body.removeChild(canvas);
            // $("#loader").addClass("d-none");
        });
    });
});