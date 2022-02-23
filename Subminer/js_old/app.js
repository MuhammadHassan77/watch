$(document).ready(function () {


    $(document).on("click", "#show-opt-btn", function () {
        $(this).hide();
        $("#desk-dx").show();
        // $("#desk-sx").css("align-items", "flex-start");
        // $("#desk-sx img").addClass("mobile-img");
        var div = $(".tail");
        // var svg = $(".tail svg");
        // var img = $(".tail");
        // $("#watch-svg2").css({ "width": "81%", "height": "87%" })
        // $("#watch-svg2").css("width": "81%", "height": "87%")
        startAnimation();
        function startAnimation() {
            div.css({
                "transform": "translate(0%,-11%)",
                "-webkit-transform": "translate(0%,-11%)",
                "-moz-transform": "translate(0%,-11%)",
                "transition": "all 0.3s",
                "-webkit-transition": "all 0.3s",
                "-moz-transition": "all 0.3s"
            });
        }
    });

    $(document).on("click", ".times", function () {
        $("#show-opt-btn").show();
        $("#desk-dx").hide();
        $(".scale-skull").addClass("d-none");
        // $("#desk-sx").css("align-items", "center");
        // $("#desk-sx img").removeClass("mobile-img")
        $("#desk-sx svg").removeClass(function (index, css) {
            return (css.match(/(^|\s)watch-svg\S+/g) || []).join(' ');
        });
        var div = $(".tail");
        // var svg = $(".tail svg");
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

        $("#desk-sx svg").removeClass(function (index, css) {
            return (css.match(/(^|\s)watch-svg\S+/g) || []).join(' ');
        });

    });


    // register function
    $(document).on("click", "#registerBtn", function () {
        let name = $("#fullName").val().trim();
        let email = $("#registerEmail").val().trim();
        let password = $("#registerPassword").val().trim();
        let phone = $("#phoneNumber").val().trim();
        let pattern = /[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,3}/;
        let act = "register";
        // console.log(name, email, password, phone);
        if (name == "" || email == "" || password == "" || phone == "") {
            $(".registerNotify").html(`<div class="alert alert-danger alert-dismissible  show" role="alert">
                    <strong>All fields are required!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>`);
        }
        else if (!pattern.test(email)) {

            $(".registerNotify").html(`<div class="alert alert-danger alert-dismissible  show" role="alert">
                <strong>Invalid Email!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>`);

        }
        else {
            let dataString = `act=${act}&name=${name}&email=${email}&password=${password}&phone=${phone}`;
            // console.log(datastring);
            $.ajax({
                url: "./func.php",
                method: "POST",
                data: dataString,
                caches: false,
                success: (res) => {
                    if (res == 'success') {
                        $(".registerNotify").html(`<div class="alert alert-success alert-dismissible  show" role="alert">
                            <strong>Registered successfully!</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>`);
                        $("#fullName").val('');
                        $("#registerEmail").val('');
                        $("#registerPassword").val('');
                        $("#phoneNumber").val('');
                    }
                    // console.log(res);
                },
                error: (err) => {
                    console.log(err);
                }
            })
        }
    })

    // login function
    $(document).on("click", "#loginBtn", function () {
        let email = $("#loginEmail").val().trim();
        let password = $("#loginPassword").val().trim();
        let act = "login";
        // console.log(name, email, password, phone);
        if (email == "" || password == "") {
            $(".loginNotify").html(`<div class="alert alert-danger alert-dismissible show" role="alert">
            <strong>All fields are required!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>`)
        }
        else {
            let dataString = `act=${act}&email=${email}&password=${password}`;
            // console.log(datastring);
            $.ajax({
                url: "./func.php",
                method: "POST",
                data: dataString,
                caches: false,
                success: (res) => {
                    if (res == "success") {
                        // console.log(res);
                        $(".loginNotify").html(`<div class="alert alert-success alert-dismissible  show" role="alert">
                        <strong>Login successfully!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>`);
                        $("#loginEmail").val("");
                        $("#loginPassword").val("");
                        $(".loginBtn").addClass("d-none");
                        $(".register").addClass("d-none");
                        $(".profileLink").removeClass("d-none");
                        // $(".screenShotBtn").removeClass("d-none");
                        $(".logoutBtn").removeClass("d-none");
                        $(".createLink").removeClass("d-none");
                        $("#uploadModel").attr({ "data-target": "#upload-model-modal", "data-toggle": "modal" });
                        $(".buyNowBtn").removeClass("d-none");
                        // $(".buyNowBtn").attr("data-target", "#order-modal");
                        if ($("#currentEmail").val() == "") {

                        }
                        setTimeout(() => {
                            $("button.close").trigger("click");
                        }, 800);
                    }
                    else {
                        $(".loginNotify").html(`<div class="alert alert-danger alert-dismissible  show" role="alert">
                        <strong>Incorrect Email Or Password!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>`);
                    }
                },
                error: (err) => {
                    console.log(err);
                }
            })
        }
    })

    // prevneting button logout and savechanges button not to hide on refresh
    if ($("#currentEmail").val() != "") {
        $("#uploadModel").attr({ "data-target": "#upload-model-modal", "data-toggle": "modal" });
        $(".loginBtn").addClass("d-none");
        $(".register").addClass("d-none");
        $(".logoutBtn").removeClass("d-none");
        $(".profileLink").removeClass("d-none");
        // $(".screenShotBtn").removeClass("d-none");
        $(".createLink").removeClass("d-none");
        $(".buyNowBtn").removeClass("d-none");
        // $(".buyNowBtn").text("Buy Now");
        // $(".buyNowBtn").attr("data-target", "#order-modal");
    }

    // order now function
    $("#enquiryForm").on('submit', (function (e) {
        e.preventDefault();
        let name = $("#full_name").val().trim();
        let email = $("#enquiryEmail").val().trim();
        let contact_num = $("#contactNumber").val().trim();
        // let uploadImage = $("#uploadImage").val().trim();
        let detail = $("#enquiryDetail").val().trim();


        // if (name == "" || email == "" || contact_num == "" || uploadImage == "" || detail == "") {
        if (name == "" || email == "" || contact_num == "" || detail == "") {
            $(".enquiryNotify").html(`<div class="alert alert-danger alert-dismissible  show" role="alert">
            <strong>All fields are required!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>`)
        } else {
            $.ajax({
                url: "func.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: (res) => {
                    if (res == "success") {
                        // console.log(res);
                        $(".enquiryNotify").html(`<div class="alert alert-success alert-dismissible  show" role="alert">
                        <strong>Order placed successfully!</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>`);
                        $("#full_name").val('');
                        $("#enquiryEmail").val('');
                        $("#contactNumber").val('');
                        $("#uploadImage").val('');
                        $("#enquiryDetail").val('');
                        setTimeout(() => {
                            $("button.close").trigger("click");
                        }, 1500);
                    }
                },
                error: (err) => {
                    console.log(err);
                }
            });
        }
    }));

    let lastId;
    // create link function
    $(document).on("click", ".createLink", function () {
        let watch_id = $("svg.watch-svg").data("watch");
        let strap = $("#watchStrap").attr("src");
        let winder = $("#winder").attr("src");
        let Case = $("#case").attr("src");
        let movement = $("#movement").attr("src");
        let face = $("#face").attr("src");
        let upText = $("#upText").attr("src");
        let secMark = $("#secMark").attr("src");
        let hourMark = $("#hourMark").attr("src");
        let hourMarkLumi = $("#hourMarkLumi").attr("src");
        let lwText = $("#lwText").attr("src");

        let bezel = $("#bezel").attr("src");
        let bezelDash = $("#bezelDash").attr("src");
        let bezelNum = $("#bezelNum").attr("src");
        let bezelTriangle = $("#bezelTriangle").attr("src");

        let bezelDashStyle = $("#bezelDash").css("display");
        let bezelNumStyle = $("#bezelNum").css("display");
        let bezelTriangleStyle = $("#bezelTriangle").css("display");

        let hour = $("#hourHand").attr("src");
        let min = $("#minHand").attr("src");
        let lumi = $("#handLumi").attr("src");
        let secHand = $("#secHand").attr("src");

        // let tip = $("#handTip").attr("src");

        let url = window.location.origin + window.location.pathname;

        let details = ` { "watch_id": "${watch_id}", "face" : "${face}" , "strap" : "${strap}" , "winder" : "${winder}" , "case" : "${Case}", "movement" : "${movement}" , "face" : "${face}" , "upText" : "${upText}" , "lwText" : "${lwText}" , "secMark" : "${secMark}" , "hourMark" : "${hourMark}" , "hourMarkLumi" : "${hourMarkLumi}" , "bezel" : "${bezel}" ,  "bezelDash" : "${bezelDash}" , "bezelDashStyle" : "${bezelDashStyle}" , "bezelNum" : "${bezelNum}" , "bezelNumStyle" : "${bezelNumStyle}" , "bezelTriangle" : "${bezelTriangle}" , "bezelTriangleStyle" : "${bezelTriangleStyle}" , "lumi" : "${lumi}" , "hour" : "${hour}" , "min" : "${min}" , "secHand" : "${secHand}" } `;


        let act = "createLink";

        // console.log(details);

        let dataString = `act=${act}&details=${details}&url=${url}`;

        // console.log(dataString);

        // watch_id=1&strap=./data/Strap/Black1.png&winder=./data/Winder/Gold1.png&case=./data/Case/Black1.png&movement=[object HTMLImageElement]&face=./data/Face/2.png&upText=./data/Upper text/2.png&lwText=./data/Swiss Text/3.png&secMark=./data/Second mark/13.png&hourMark=./data/Hour mark/gold.png&hourMarkLumi=./data/Hour mark lumi/21.png&bezel= ./data/Diamond Bezel/Rainbow.png& bezelDash=./data/Bezel number/18.png&bezelDashStyle=none&bezelNum=./data/Bezel number/39.png&bezelNumStyle=none&bezelTriangle=./data/Bezel triangle/18.png&bezelTriangleStyle=none&lumi= ./data/Hand lumi/10.png&hour= ./data/Hour hand/2.png&min= ./data/Min hand/2.png&secHand=./data/Second hand/5.png

        // console.log(newSkullDetails,dataString);
        // if (bezel == "" || Case == "" || daimond == "" || face == "" || lumi == "" || tip == "" || hour == "" || min == "" || skull == "" || strap == "" || winder == "") {

        if (watch_id == "" || details == "") {
            alert("Do Some Chages!!");
        } else {
            $.ajax({
                url: "func.php",
                type: "POST",
                data: dataString,
                cache: false,
                success: (res) => {
                    res = JSON.parse(res);
                    // console.log(res);
                    lastId = res['lastId'];
                    if (res['result'] == "success") {
                        $("#saveChanges").val(url + "?id=" + res['lastId']);
                        alert(url + "?id=" + res['lastId']);
                        $("#changes-modal").show();
                        console.log($("#changes-modal").css('opacity', "1"));
                    }
                },
                error: (err) => {
                    console.log(err);
                }
            })
        }
    })

    // opening new window for savechanges
    $(document).on("click", "#applyChangesBtn", function () {

        if (lastId !== "" || lastId !== undefined) {
            window.open($("#saveChanges").val(), '_blank').focus();
        } else {
            window.open(window.location.origin + window.location.pathname, '_blank').focus();
        }
    })

    // handling logout button
    $(document).on("click", ".logoutBtn", function () {
        let dataString = `act=logout`;
        $.ajax({
            url: "./func.php",
            method: "POST",
            data: dataString,
            caches: false,
            success: (res) => {
                // console.log(res);
                if (res == "success") {
                    $(".profileLink").addClass("d-none");
                    // $(".screenShotBtn").addClass("d-none");
                    $(".logoutBtn").addClass("d-none");
                    $(".createLink").addClass("d-none");
                    $(".buyNowBtn").addClass("d-none");
                    $("#uploadModel").removeAttr("data-target data-toggle");
                    // $(".buyNowBtn").text("Login");
                    // $(".buyNowBtn").attr("data-target", "#login-modal");
                    $(".loginBtn").removeClass("d-none");
                    $(".register").removeClass("d-none");
                }
            },
            error: (err) => {
                console.log(err);
            }
        })
    })

})
