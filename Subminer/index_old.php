<?php require_once("./func.php");

// FETCHING DATA ON BEHALF PARTICULAR ID
if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $q = "SELECT * FROM savechanges WHERE id=" . $id;

    $result = mysqli_query($mysqli, $q);

    if ($result) {

        foreach ($result as $rows) {
            $data = json_decode($rows["changes_details"]);
        }
        $w_id = $data->watch_id;
        $strap = $data->strap;
        $winder = $data->winder;
        $case = $data->case;
        $movement = $data->movement;
        $upText = $data->upText;
        $lwText = $data->lwText;
        $secMark = $data->secMark;
        $hourMark = $data->hourMark;
        $hourMarkLumi = $data->hourMarkLumi;
        $bezel = $data->bezel;
        $bezelDash = $data->bezelDash;
        $bezelDashStyle = $data->bezelDashStyle;
        $bezelNum = $data->bezelNum;
        $bezelNumStyle = $data->bezelNumStyle;
        $bezelTriangle = $data->bezelTriangle;
        $bezelTriangleStyle = $data->bezelTriangleStyle;
        $face = $data->face;
        $hour = $data->hour;
        $min = $data->min;
        $lumi = $data->lumi;
        $sec_hands = $data->secHand;
        // echo $sec_hands;
        // exit;
    }
}

// $details =
//     '{ "watch_id": "1", "strap" : "./data/Strap/Black1.png" , "winder" : "./data/Winder/Black1.png" ,
//      "case" : "./data/Case/Gold1.png", "movement" : "./data/Movment/Black.png" , "face" : "./data/Face/21.png" ,
//      "upText" : "./data/Upper text/3.png" , "lwText" : "./data/Swiss Text/3.png" ,
//       "secMark" : "./data/Second mark/8.png" , "hourMark" : "./data/Hour mark/Steel.png" , 
//       "hourMarkLumi" : "./data/Hour mark lumi/5.png" , "bezel" : " ./data/Original bezel/7.png" , 
//       "bezelDash" : " ./data/Bezel number/13.png" , "bezelDashStyle" : "block" , 
//       "bezelNum" : " ./data/Bezel number/23.png" , "bezelNumStyle" : "block" , 
//       "bezelTriangle" : " ./data/Bezel triangle/8.png" , "bezelTriangleStyle" : "none" , 
//       "lumi" : " ./data/Hand lumi/13.png" , "hour" : " ./data/Hour hand/2.png" ,
//       "min" : " ./data/Min hand/2.png" , "secHand" : "./data/Second hand/5.png" } ';

// $d = json_decode($details);
// //    var_dump($d);
// print_r($d);
// exit;

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/72a9c1090f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" href="./img/favicon.png">

    <!-- <link href="icons/themify-icons/themify-icons.css" rel="stylesheet"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <!--<link href="https://db.onlinewebfonts.com/c/67dd7a753cce719a17304beb973d5dfc?family=Keep+Calm+W01+Light" rel="stylesheet" type="text/css" />-->

    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/custom.css" rel="stylesheet">
    <link href="./scss/mystyle.css" rel="stylesheet">
    <!-- <script src="./js/svg-data.js"></script> -->
    <script>
        let clr = ['#751113', '#ff1e26', '#ff6600', '#feba27', '#ffff01', '#0d4f21', '#65ff00', '#47d4e5', '#4f8dfe', '#013ba7', '#ddb168', '#976005', '#8e00ce', '#dc0058', '#ffa7cf', '#ff4864', '#ffffff', '#c0c0c0', '#9a9a9a', '#4e2700', '#000000'];
        let j = 0;
    </script>
    <title>Watch</title>

</head>

<body style="overflow: hidden;">
    <!-- PAGE LOADER -->
    <div id="loader" class="d-none">
        <div class="loading-page">
            <div class="counter text-white text-center">
                <h2>Loading</h2>
                <h1>0%</h1>
                <hr style="width: 100%;height:5px;color:red;">
            </div>
        </div>
    </div>
    <!-- PAGE LOADER END -->

    <!-- start-header -->
    <div class="row p-0 m-0">
        <div class="col-12 p-0 m-0">
            <div class="logo-text-1">MINC</div>
            <div class="myfont tabs d-none" style="position: relative; z-index: 2;">
                <span style="z-index: 10000;" class="style-1 style-box-btn stylewatch">Click to Change</span>
            </div>
        </div>
    </div>
    <!-- end-header -->
    <!-- start-container -->
    <div class="container-fluid p-0 m-0" style="position: absolute;top: 0;">
        <div class="canvas-div p-0 m-0">
            <div class="range-1">
                <input type="range" min="1" max="4" class="slider" id="myRange" style="display:none;">
            </div>

            <!-- <div class="my-option d-sm-none" style="display: none;">
                    <i class="fa fa-chevron-left arrow left"></i>
                    <i class="fa fa-chevron-right arrow right"></i>
                </div> -->


            <!-- start-dot-menu -->
            <div class="dot-menu">
                <!-- <span class="dot-btn"><i class="fas fa-circle"></i></span> -->
                <div class="dropdown config-drp dropstart">
                    <a class="btn p-0 m-0 w-100" href="javascript:void(0)" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="dot-btn">
                            <img src="img/plus2.svg" class="img-fluid plus2 mx-auto">
                            <img src="img/plus.svg" class="img-fluid plus1">
                            <p>Configure</p>
                        </div>
                    </a>

                    <ul class="dropdown-menu dot" aria-labelledby="dropdownMenuLink">
                        <li><a data-watch="svg-sechand" class="dropdown-item newControlMenu" href="javascript:void(0)">Second Hand</a></li>
                        <li><a style-id="1" data-watch="svg-hands" class="dropdown-item newControlMenu" href="javascript:void(0)">Hands</a></li>
                        <li><a style-id="1" data-watch="svg-lumi" class="dropdown-item newControlMenu" href="javascript:void(0)">Hand Lumi</a></li>
                        <li><a data-watch="svg-sechand-mark" class="dropdown-item newControlMenu" href="javascript:void(0)">Second Mark</a></li>
                        <li><a style-id="1" data-watch="svg-hour-mark" class="dropdown-item newControlMenu" href="javascript:void(0)">Hour Mark</a></li>
                        <li><a style-id="1" data-watch="svg-hour-mark-lumi" class="dropdown-item newControlMenu" href="javascript:void(0)">Hour Mark Lumi</a></li>
                        <li><a data-watch="svg-up-text" class="dropdown-item newControlMenu" href="javascript:void(0)">Upper Text</a></li>
                        <li><a data-watch="svg-lw-text" class="dropdown-item newControlMenu" href="javascript:void(0)">Lower Text</a></li>
                        <li><a data-watch="svg-face" class="dropdown-item newControlMenu" href="javascript:void(0)">Face</a></li>
                        <li><a data-watch="svg-strap" class="dropdown-item newControlMenu" href="javascript:void(0)">Strap</a></li>
                        <li><a data-watch="svg-crocodile-strap" class="dropdown-item newControlMenu" href="javascript:void(0)">Crocodile Strap</a></li>
                        <li><a data-watch="svg-case" class="dropdown-item newControlMenu" href="javascript:void(0)">Case</a></li>
                        <li><a data-watch="svg-bezel" class="dropdown-item newControlMenu" href="javascript:void(0)">Bezel</a></li>
                        <li><a data-watch="svg-diamond-bezel" class="dropdown-item newControlMenu" href="javascript:void(0)">Diamond Bezel</a></li>
                        <li><a data-watch="svg-original-bezel" class="dropdown-item newControlMenu" href="javascript:void(0)">Original Bezel</a></li>
                        <li><a data-watch="svg-bezel-num" class="dropdown-item newControlMenu" href="javascript:void(0)">Original Bezel Number</a></li>
                        <li><a data-watch="svg-movement" class="dropdown-item newControlMenu" href="javascript:void(0)">Movement</a></li>
                        <li><a data-watch="svg-winder" class="dropdown-item newControlMenu" href="javascript:void(0)">Winder</a></li>
                    </ul>
                </div>
            </div>
            <!-- end-dot-menu -->


            <div class="row p-0 m-0 justify-content-center">
                <div id="myCanvas" class="col-sm-12 col-md-8 d-flex justify-content-center align-items-center">
                    <div id="desk-sx" class="col-md-6 col-sm-12 tail justify-content-center align-items-center">
                        <img id="watchStrap" src="<?php echo (!empty($strap)) ? $strap : './data/Strap/Steel1.png'; ?>" alt="" class="img-responsive" />
                        <img id="winder" src="<?php echo (!empty($winder)) ? $winder : './data/Winder/Steel1.png'; ?>" alt="" class="img-responsive " />
                        <img id="case" src="<?php echo (!empty($case)) ? $case : './data/Case/Steel1.png'; ?>" alt="" class="img-responsive" />
                        <img id="movement" src="<?php echo (!empty($movement)) ? $movement : './data/Movment/steel.png'; ?>" alt="" class="img-responsive" />
                        <img id="face" src="<?php echo (!empty($face)) ? $face : './data/Face/21.png'; ?>" alt="" class="img-responsive" />
                        <img id="upText" src="<?php echo (!empty($upText)) ? $upText : './data/Upper text/17.png'; ?>" alt="" class="img-responsive" />
                        <img id="secMark" src="<?php echo (!empty($secMark)) ? $secMark : './data/Second mark/17.png'; ?>" alt="" class="img-responsive" />
                        <img id="hourMark" src="<?php echo (!empty($hourMark)) ? $hourMark : './data/Hour mark/Steel.png'; ?>" alt="" class="img-responsive" />
                        <img id="hourMarkLumi" src="<?php echo (!empty($hourMarkLumi)) ? $hourMarkLumi : './data/Hour mark lumi/17.png'; ?>" alt="" class="img-responsive" />
                        <img id="lwText" src="<?php echo (!empty($lwText)) ? $lwText : './data/Swiss Text/3.png'; ?>" alt="" class="img-responsive" />

                        <img id="bezel" src="<?php echo (!empty($bezel)) ? $bezel : './data/Original bezel/21.png'; ?>" alt="" class="img-responsive" />
                        <img id="bezelDash" src="<?php echo (!empty($bezelDash)) ? $bezelDash : './data/Bezel number/18.png'; ?>" alt="" class="img-responsive" style="display: <?= ($bezelDashStyle == "none") ? "none" : "block" ?>" />
                        <img id="bezelNum" src="<?php echo (!empty($bezelNum)) ? $bezelNum : './data/Bezel number/39.png'; ?>" alt="" class="img-responsive" style="display:<?= ($bezelNumStyle == "none") ? "none" : "block" ?>" />
                        <img id="bezelTriangle" src="<?php echo (!empty($bezelTriangle)) ? $bezelTriangle : './data/Bezel triangle/18.png'; ?>" alt="" class="img-responsive" style="display:<?= ($bezelTriangleStyle == "none") ? "none" : "block" ?>" />

                        <img id="hourHand" src="<?php echo (!empty($hour)) ? $hour : './data/Hour hand/18.png'; ?>" alt="" class="img-responsive " />
                        <img id="minHand" src="<?php echo (!empty($min)) ? $min : './data/Hour hand/18.png'; ?>" alt="" class="img-responsive " />

                        <img id="handLumi" src="<?php echo (!empty($lumi)) ? $lumi : './data/Hand lumi/17.png'; ?>" alt="" class="img-responsive " />
                        <img id="secHand" src="<?php echo (!empty($sec_hands)) ? $sec_hands : './data/Second hand/21.png'; ?>" alt="" class="img-responsive " />
                        <img id="bolt" src="./data/Bolt/1.png" alt="" class="img-responsive" />
                        <img id="bolt" src="./data/eng.png" alt="" class="img-responsive" />
                        <!-- OVERLAYED WATCH SVG WILL BE ADDED BY JQUERY -->

                        <!-- OVERLAYED WATCH SVG END -->
                    </div>
                </div>
            </div>

            <!-- OVERLAYED WATCH SVG END -->
        </div>
    </div>




    <!-- SELECT DYNAMICS SECOND HANDS  START-->

    <div class="color-popup secondhand" style-id="1" style="display:none ;">

        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>

        <div class="overflow-div">
            <p class="com-name mb-0 ">Second Hand</p>
            <div class="row mbl-width-clr p-0 m-0">
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('secHand').src='./data/Second hand/22.png'">
                    <div class="color-box" style="background-color: #6ea4d0"></div>
                </div>
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('secHand').src='./data/Second hand/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>

        </div>

    </div>
    <!-- end-hands-popup -->
    <?php //} 
    ?>
    <!-- SELECT DYNAMICS SECOND HANDS END-->


    <div class="color-popup strapmodels" style="display:none;">
        <!-- start-arrow -->
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <!-- end-arrow -->

        <div class="overflow-div">
            <div class="row mbl-width-clr p-0 m-0 verticleH justify-content-center align-items-center">
                <div class="col-1 col-sm-12 p-0 m-0 myStrap" role="button" data-watch="svg-strap">
                    <h4 class='text-white customized'>Original Strap</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 myStrap" role="button" data-watch="svg-crocodile-strap">
                    <h4 class='text-white customized'>Crocodile Strap</h4>
                </div>
            </div>


        </div>

    </div>

    <!-- SELECT DYNAMICS STRAP  START-->
    <div class="color-popup  watchstrap" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Strap</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    // let cc = ['#000000', '#d4af37', '#b76e79', '#71797E'];
                    // let nn = ['Black', 'Gold', 'Rose gold', 'Steel'];
                    let cc = ['#000000', '#71797E'];
                    let nn = ['Black', 'Steel'];
                    j = 0;
                    for (let i = 1; i < 3; i++) {
                    // for (let i = 1; i < 5; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('watchStrap').src=' ./data/Strap/${nn[j]}1.png';">
                            <div class="color-box" style="background-color: ${cc[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>

            </div>
        </div>
    </div>
    <!-- end-strap-popup -->

    <!-- start-crocodile-strap-popup -->
    <div class="color-popup  watchcrocodileStrap" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Crocodile Strap</p>
            <div class="row mbl-width-clr p-0 m-0">
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('watchStrap').src='./data/Crocodile strap/22.png'">
                    <div class="color-box" style="background-color: #6ea4d0"></div>
                </div>
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('watchStrap').src=' ./data/Crocodile strap/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- end-crocodile-strap-popup -->

    <!-- SELECT DYNAMICS STRAP END-->


    <div class="color-popup bezelmodels" style="display:none;">
        <!-- start-arrow -->
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <!-- end-arrow -->

        <div class="overflow-div">
            <div class="row mbl-width-clr p-0 m-0 verticleH justify-content-center align-items-center">

                <div class="col-1 col-sm-12 p-0 m-0 myBezels" role="button" data-watch="svg-diamond-bezel">
                    <h4 class='text-white customized'>Diamond Bezel</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 myBezels" role="button" data-watch="svg-original-bezel">
                    <h4 class='text-white customized'>Original Bezel</h4>
                </div>
                <!-- <div class="col-1 col-sm-12 p-0 m-0 myBezels" role="button" data-watch="svg-bezel" >
                    <h4 class='text-white customized'>Bezel</h4>
                </div> -->
            </div>


        </div>

    </div>

    <!-- SELECT DYNAMICS BEZEL START-->
    <!-- start-bezel-popup -->
    <div class="color-popup  watchbezel" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Bezel</p>
            <div class="row mbl-width-clr p-0 m-0">
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('bezel').src='./data/Bezel/22.png'">
                    <div class="color-box" style="background-color: #6ea4d0"></div>
                </div>
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('bezel').src=' ./data/Bezel/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- end-bezel-popup -->

    <!-- start-bezel-popup -->
    <div class="color-popup  watchoriginalBezel" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Original Bezel</p>
            <div class="row mbl-width-clr p-0 m-0">
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('bezel').src='./data/Original bezel/22.png'">
                    <div class="color-box" style="background-color: #6ea4d0"></div>
                </div>
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('bezel').src=' ./data/Original bezel/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- end-bezel-popup -->
    <!-- SELECT DYNAMICS STRAP END-->


    <!-- start-bezel-number-popup -->
    <div class="color-popup  watchdiamondBezel" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Diamond Bezel</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    let clr4 = ['silver', 'purple', 'green'];
                    let dnames = ['1', 'Amesthy', 'Green'];
                    j = 0;
                    for (let i = 1; i < 4; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('bezel').src=' ./data/Diamond Bezel/${dnames[j]}.png'">
                            <div class="color-box" style="background-color: ${clr4[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('bezel').src=' ./data/Diamond Bezel/Rainbow.png'">
                    <div class="color-box" style="background: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet);"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end-bezel-number-popup -->

    <div class="color-popup bezelnumModels" style="display:none;">
        <!-- start-arrow -->
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <!-- end-arrow -->

        <div class="overflow-div">
            <div class="row mbl-width-clr p-0 m-0 verticleH justify-content-center align-items-center">
                <div class="col-1 col-sm-12 p-0 m-0  myBezelNumbers" role="button" data-watch="svg-bezel-num" data-id="1">
                    <h4 class='text-white customized'>Bezel Number</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0  myBezelNumbers" role="button" data-watch="svg-bezel-dash" data-id="1">
                    <h4 class='text-white customized'>Bezel Dashes</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 myBezelNumbers" role="button" data-watch="svg-bezel-triangle" data-id="1">
                    <h4 class='text-white customized'>Bezel Triangle</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- start-bezel-number-popup -->

    <div class="color-popup  watchbezelDash" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Bezel Dashes</p>
            <div class="row mbl-width-clr p-0 m-0">
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('bezelDash').src='./data/Bezel number/22.png'">
                    <div class="color-box" style="background-color: #6ea4d0"></div>
                </div>
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('bezelDash').src=' ./data/Bezel number/${i}.png';">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>

    <div class="color-popup  watchbezelNum" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Bezel Number</p>
            <div class="row mbl-width-clr p-0 m-0">
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('bezelNum').src='./data/Bezel number/44.png'">
                    <div class="color-box" style="background-color: #6ea4d0"></div>
                </div>
                <script>
                    j = 0;
                    for (let i = 23; i < 44; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('bezelNum').src=' ./data/Bezel number/${i}.png';">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>

    <div class="color-popup  watchbezelTriangle" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Bezel Triangle</p>
            <div class="row mbl-width-clr p-0 m-0">
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('bezelTriangle').src='./data/Bezel triangle/22.png'">
                    <div class="color-box" style="background-color: #6ea4d0"></div>
                </div>
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('bezelTriangle').src=' ./data/Bezel triangle/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>

    <!-- end-bezel-number-popup -->


    <!-- SELECT DYNAMICS HOUR HANDS  START-->

    <div class="color-popup watchhands" style-id="1" style="display: none;">

        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>

        <div class="overflow-div">
            <p class="com-name mb-0 ">Hands</p>
            <div class="row mbl-width-clr p-0 m-0">
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('minHand').src=' ./data/Hour hand/22.png';document.getElementById('hourHand').src=' ./data/Hour hand/22.png';">
                    <div class="color-box" style="background-color: #6ea4d0"></div>
                </div>
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                            <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('minHand').src=' ./data/Min hand/${i}.png';document.getElementById('hourHand').src=' ./data/Hour hand/${i}.png';">
                                <div class="color-box" style="background-color: ${clr[j]}"></div>
                            </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- end-hands-popup -->

    <!-- SELECT DYNAMICS HOUR HANDS END-->

    <!-- start-hour-mark-popup -->
    <div class="color-popup  watchhourMark" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Hour Mark</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    let clr2 = ['#6ea4d0', '#000000', '#d4af37', '#b76e79', '#71797E'];
                    let names = ['1', 'black', 'gold', 'Rose gold', 'Steel'];
                    j = 0;
                    for (let i = 1; i < 6; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('hourMark').src='./data/Hour mark/${names[j]}.png'">
                            <div class="color-box" style="background-color: ${clr2[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- end-hour-mark-popup -->

    <!-- start-hour-mark-lumi-popup -->
    <div class="color-popup  watchhourmarkLumi" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Hour Mark Lumi</p>
            <div class="row mbl-width-clr p-0 m-0">
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('hourMarkLumi').src=' ./data/Hour mark lumi/22.png';">
                    <div class="color-box" style="background-color: #6ea4d0"></div>
                </div>
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('hourMarkLumi').src='./data/Hour mark lumi/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- end-hour-mark-lumi-popup -->

    <!-- start-second-mark-popup -->
    <div class="color-popup  watchsecondMark" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Second Mark</p>
            <div class="row mbl-width-clr p-0 m-0">
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('secMark').src=' ./data/Second mark/22.png';">
                    <div class="color-box" style="background-color: #6ea4d0"></div>
                </div>
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('secMark').src='./data/Second mark/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- end-second-mark-popup -->


    <!-- start-movement-popup -->
    <div class="color-popup  watchmovement" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Movement</p>
            <div class="row mbl-width-clr p-0 m-0">
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('movement').src='./data/Movment/Black.png'">
                    <div class="color-box" style="background-color: black;"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('movement').src='./data/Movment/steel.png'">
                    <div class="color-box" style="background-color: lightgray;"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end-movement-popup -->


    <!-- start-swiss-text-popup -->
    <div class="color-popup  watchupText" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Upper Text</p>
            <div class="row mbl-width-clr p-0 m-0">
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('upText').src=' ./data/Upper text/22.png';">
                    <div class="color-box" style="background-color: #6ea4d0"></div>
                </div>
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('upText').src='./data/Upper text/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- end-swiss-text-popup -->

    <!-- start-swiss-text-popup -->
    <div class="color-popup  watchswissText" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Lower Text</p>
            <div class="row mbl-width-clr p-0 m-0">
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('lwText').src=' ./data/Swiss Text/22.png';">
                    <div class="color-box" style="background-color: #6ea4d0"></div>
                </div>
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('lwText').src='./data/Swiss Text/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- end-swiss-text-popup -->

    <!-- start-sub-mark-popup -->
    <div class="color-popup  watchsubMark" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Sub Mark</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subMark').src='./data/Submark/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- end-sub-mark-popup -->


    <!-- SELECT DYNAMICS WINDER START-->

    <div class="color-popup  watchwinder" data-id="1" style="display: none;">

        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Winder</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 1; i < 5; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('winder').src=' ./data/Winder/${nn[j]}1.png';">
                            <div class="color-box" style="background-color: ${cc[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- end-watch-wender-popup -->

    <!-- SELECT DYNAMICS WINDER END-->


    <!-- SELECT DYNAMICS CASE START-->

    <!-- start-watch-tip-popup -->
    <div class="color-popup watchcases" data-id="<?= $watch_id; ?>" style="display: none;">

        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Case</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    // for (let i = 1; i < 5; i++) {
                    for (let i = 1; i < 3; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('case').src=' ./data/Case/${nn[j]}1.png';">
                            <div class="color-box" style="background-color: ${cc[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>

    </div>
    <!-- end-watch-tip-popup -->

    <!-- SELECT DYNAMICS CASE END-->


    <!-- SELECT DYNAMICS LUMI START-->

    <div class="color-popup watchlumi" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Lumi</p>
            <div class="row mbl-width-clr p-0 m-0">
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('handLumi').src=' ./data/Hand lumi/22.png';">
                    <div class="color-box" style="background-color: #6ea4d0"></div>
                </div>
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('handLumi').src=' ./data/Hand lumi/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- end-watch-lumi-popup -->
    <!-- SELECT DYNAMICS LUMI END-->


    <!-- SELECT DYNAMICS FACE START-->
    <div class="color-popup  watchface" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Face</p>
            <div class="row mbl-width-clr p-0 m-0">
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('face').src='./data/Face/22.png'">
                    <div class="color-box" style="background-color: #6ea4d0"></div>
                </div>
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('face').src='./data/Face/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- end-face-popup -->
    <!-- SELECT DYNAMICS FACE END-->




    <!-- end-container -->

    <!-- start-left-icons -->
    <div class="icon-main">
        <div class="row p-0 m-0">

            <div class="col-12 zoom-btns p-0 m-0 " id="zoomIn">
                <i class="fas fa-plus"></i>
            </div>

            <div class="col-12 zoom-btns p-0 m-0" id="zoomOut">
                <i class="fas fa-minus"></i>
            </div>

            <div class="col-12 icons1 p-0 m-0">
                <img src="img/plus.svg" class="img-fluid zoom-op w-75">
            </div>

            <div class="col-12 icons1 p-0 m-0 resetCanvas">
                <img src="img/reset.png" class="img-fluid w-75">
            </div>

            <div class="col-12 icons1 p-0 m-0 createLink">
                <i class="fa fa-globe"></i>
            </div>

            <div class="col-12 icons1 p-0 m-0 screenShotBtn">
                <img src="img/download.svg" class="img-fluid w-75">
            </div>
            <div class="col-12 icons1 p-0 m-0">
                <p class="logo-text p-0 m-0">MINC</p>
            </div>

        </div>
    </div>
    <!-- end-left-icons -->

    <!-- HIDDEN FIElDS -->
    <input type="hidden" id="skullDetails" value='<?= !empty($skull) ? $skull : '' ?>'>
    <!-- HIDDEN FIElDS -->

    <!-- CHANGES MODAL -->
    <div class="modal fade" id="changes-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Save Changes</h5>
                    <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="changesNotify"></div>
                    <div class="form-group">
                        <label for="saveChanges">Click Ok to open with Save Changes.</label>
                        <input type="text" class="form-control" id="saveChanges" readonly />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary mybtn2" id="applyChangesBtn">Ok</button>
                    <button type="button" class="btn btn-secondary close-modal" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- CHANGES MODAL END -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <script src="./js/main.js"></script>
    <script src="./newmyjs.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/html2canvas.js"></script>
    <script src="./js/canvas2image.js"></script>
</body>

<script>
    $(document).ready(function() {

        function getSvgData(imgId) {
            $.get(`./svg/watch ${imgId}.svg`, null, function(data) {
                let svgdata = $(data).find("svg")[0];
                $("#desk-sx").append(svgdata);
            });
        }

        getSvgData(1);

    })
</script>


<!-- SCREEN SHOT AND SCREEN RESET FUNCTION -->
<script>
    $(document).ready(() => {

        $(document).on("click", ".close-modal", function() {
            $(this).parent().parent().parent().parent().css('opacity', '0');
            $(this).parent().parent().parent().parent().hide();
        })

        $(document).on("click", ".resetCanvas", function() {
            $("#zoomOut").trigger("click");
            $(this).css("background-color", "inherit");
        })

        // Screen Shot Function
        document.querySelector('.screenShotBtn').addEventListener('click', function() {
            $("#zoomOut").trigger("click");
            $("#hourHand,#minHand,#handLumi,#secHand").css({
                "transform": "scale(1)",
                "-webkit-transform": "scale(1)",
                "-moz-transform": "scale(1)"
            });
            $("#loader").removeClass("d-none");
            let c = 0;
            let i = setInterval(function() {
                $(".loading-page .counter h1").html(c + "%");
                $(".loading-page .counter hr").css("width", c + "%");
                c++;
                if (c == 101) {
                    clearInterval(i);
                    $("#loader").addClass("d-none");
                }
            }, 40);

            setTimeout(() => {
                html2canvas(document.getElementById("desk-sx"), {
                    backgroundColor: null
                }).then(function(canvas) {
                    document.body.appendChild(canvas);
                    Canvas2Image.saveAsPNG(canvas);
                    document.body.removeChild(canvas);
                    $("#loader").addClass("d-none");

                    $("#hourHand,#minHand,#handLumi,#secHand").css({
                        "transform": "scale(1.15)",
                        "-webkit-transform": "scale(1.15)",
                        "-moz-transform": "scale(1.15)"
                    });
                });
            }, 1500);
        });
    });
</script>

</html>