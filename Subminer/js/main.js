$(document).ready(() => {

    function getData(st, en) {
        // console.log(st, en);
        let clr = ['#751113', '#ff1e26', '#ff6600', '#feba27', '#ffff01', '#0d4f21', '#65ff00', '#47d4e5', '#4f8dfe', '#013ba7', '#ddb168', '#976005', '#8e00ce', '#dc0058', '#ffa7cf', '#ff4864', '#ffffff', '#c0c0c0', '#9a9a9a', '#4e2700', '#000000', '#6ea4d0'];
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
        if (Id == "#Case" || Id == "#Winder") {
            $('.color-menu.twoclrs').show();
            $('.twoclrs .color-box').removeClass("color-active");
            $('.twoclrs .color-box').attr("data-id", Id);
        } else if (Id == ".Barrel" || Id == ".Hour_mark" || Id == ".Spring" || Id == ".Plate") {
            $('.color-menu.fourclrs').show();
            $('.fourclrs .color-box').removeClass("color-active");
            $('.fourclrs .color-box').attr("data-id", Id);
        } else if (Id == "#Strap") {
            $('.styles').show();
            $('.styles ul').html(`<li class="submenu-li" p-name="#Strap" style-id="1">Strap</li> <li class="submenu-li" p-name="#Strap" style-id="2">Crocodile Strap</li>`);
        } else if (Id == "#Bezel") {
            $('.styles').show();
            $('.styles ul').html(`<li class="submenu-li" p-name="#Bezel" style-id="1">Original Bezel</li> <li class="submenu-li" p-name="#Bezel" style-id="2">Diamond Bezel</li>`);
        } else if (Id == "#Bezel_number") {
            getData(23, 44);
            $('.color-menu.major').show();
            $('.color-box').removeClass("color-active");
            $('.major .color-box').attr("data-id", Id);
        } else if (Id == "#BezelDash") {
            getData(1, 22);
            $('.color-menu.major').show();
            $('.color-box').removeClass("color-active");
            $('.major .color-box').attr("data-id", Id);
        } else if (Id == ".Hands" || Id == ".Second_hand" || Id == ".secondmark") {
            $('.color-menu.forHands_sechand').show();
            $('.forHands_sechand .color-box').removeClass("color-active");
            $('.forHands_sechand .color-box').attr("data-id", Id);
        } else {
            $('.color-menu.major').show();
            $('.color-box').removeClass("color-active");
            $('.major .color-box').attr("data-id", Id);
        }
        console.log("Id => ", Id);
    });

    $(document).on("click", ".styles .submenu-li", function () {
        let Id = $(this).attr("style-id");
        let p_name = $(this).attr("p-name");
        $('.submenu.styles').hide();
        if (p_name == "#Strap") {
            if (Id == 1) {
                $('.color-menu.twoclrs').show();
                $('.twoclrs .color-box').removeClass("color-active");
                $('.twoclrs .color-box').attr("data-id", p_name);
            } else if (Id == 2) {
                $('.color-menu.major').show();
                $('.major .color-box').removeClass("color-active");
                $('.major .color-box').attr("data-id", "#CrocoStrap");
            }
        } else if (p_name == "#Bezel") {
            if (Id == 1) {
                $('.color-menu.forBezel').show();
                $("#Bezel_number,#BezelDash,#BezelTriangle").show();
                $('.forBezel .color-box').removeClass("color-active");
                $('.forBezel .color-box').attr("data-id", p_name);
                $('.forBezel .color-box').first().trigger("click");
            } else if (Id == 2) {
                $('.color-menu.another').show();
                $("#Bezel_number,#BezelDash,#BezelTriangle").hide();
                $('.another .color-box').removeClass("color-active");
                $('.another .color-box').attr("data-id", "#DiamondBezel");
                $('.another .color-box').eq(0).trigger("click")
            }
        }
        console.log(p_name, Id);
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
            $(`${Id}`).attr("src", `./data/Original bezel/${Name}.png`);
        } else if (Id == "#DiamondBezel") {
            $(`#Bezel`).attr("src", `./data/Diamond Bezel/${Name}.png`);
        } else if (Id == "#Bezel_number") {
            $(`${Id}`).attr("src", `./data/Bezel number/${k}.png`);
        } else if (Id == "#BezelDash") {
            $(`${Id}`).attr("src", `./data/Bezel number/${k}.png`);
        } else if (Id == "#BezelTriangle") {
            $(`${Id}`).attr("src", `./data/Bezel triangle/${ind}.png`);
        } else if (Id == ".Barrel") {
            $(`${Id}`).attr("src", `./data/Barrel/${Name}.png`);
        } else if (Id == ".Spring") {
            $(`${Id}`).attr("src", `./data/Spring/${Name}.png`);
        } else if (Id == ".Plate") {
            $(`${Id}`).attr("src", `./data/Plate/${Name}.png`);
        }
        // else if (Id == ".Movement") {
        //     $(`${Id}`).attr("src", `./data/Movment/${Name}.png`);
        // }
        else if (Id == ".Face") {
            $(`.Face`).css("opacity", `1`);
            $(`${Id}`).attr("src", `./data/Face/${ind}.png`);
        } else if (Id == ".Glass-Face") {
            $(`.Face`).css("opacity", `0.5`);
            $(`.Face`).attr("src", `./data/Face/${ind}.png`);
        } else if (Id == ".secondmark") {
            // $(`${Id}`).attr("src", `./data/Second mark/${ind}.png`);
            $(`${Id}`).attr("src", `./data/Second mark/${Name}.png`);
        } else if (Id == ".Subnumber") {
            $(`${Id}`).attr("src", `./data/Submark/Sub number/${k}.png`);
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
        } else if (Id == ".subHandTip") {
            $(`${Id}`).attr("src", `./data/Sub hand tip/${ind}.png`);
        } else if (Id == ".Hands") {
            // $(`#Min_hand,.Min_hand`).attr("src", `./data/Min hand/${Name}.png`);
            $(`#Hour_hand,.Hour_Hand`).attr("src", `./data/Hour hand/${Name}.png`);
        } else if (Id == ".Hands_lumi") {
            $(`${Id}`).attr("src", `./data/Hand lumi/${ind}.png`);
        } else if (Id == ".Second_hand") {
            $(`${Id}`).attr("src", `./data/Second hand/${Name}.png`);
        }
    });

    // Screen Shot Function
    $(document).on('click', '.screenShotBtn', function () {
        $(".working-box").find(".Hour_hand,.Hands_lumi,.Second_hand").removeClass("sz2");
        html2canvas(document.getElementById("2dwatch"), {
            backgroundColor: null
        }).then(function (canvas) {
            document.body.appendChild(canvas);
            Canvas2Image.saveAsPNG(canvas);
            document.body.removeChild(canvas);
            // $("#loader").addClass("d-none");
            $(".working-box").find(".Hour_hand,.Hands_lumi,.Second_hand").addClass("sz2");
        });
    });
});