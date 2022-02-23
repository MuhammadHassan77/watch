<?php require_once("./func.php");


// FETCHING DATA ON BEHALF PARTICULAR ID
if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $q = "SELECT * FROM savechanges WHERE id=" . $id;

    $result = mysqli_query($mysqli, $q);

    if ($result) {

        foreach ($result as $rows) {
            // $data = json_decode($rows["changes_details"]);
            $data = json_decode($rows["changesInfo"]);
        }
        $w_id = $data->watch_id;
        $strap = $data->strap;
        $winder = $data->winder;
        $case = $data->case;
        $movement = $data->movement;
        $face = $data->face;
        $upText = $data->upText;
        $lwText = $data->lwText;
        $secMark = $data->secMark;
        $hourMark = $data->hourMark;
        $hourMarkLumi = $data->hourMarkLumi;

        $subRing = $data->subRing;
        $subMark = $data->subMark;
        $subNumber = $data->subNumber;
        $subHand = $data->subHand;
        $subHandTip = $data->subHandTip;
        $subHandTipStyle = $data->subHandTipStyle;
        $subHandLumi = $data->subHandLumi;
        $subHandLumiStyle = $data->subHandLumiStyle;

        $bezel = $data->bezel;
        $bezelNum = $data->bezelNum;
        $bezelNumStyle = $data->bezelNumStyle;

        $hour = $data->hour;
        $min = $data->min;
        $lumi = $data->lumi;
        $secHand = $data->secHand;
        $secHandTip = $data->secHandTip;
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
//        "min" : " ./data/Min hand/2.png" , "secHand" : "./data/Second hand/5.png" } ';

//        $d=json_decode($details);
//     //    var_dump($d);
//        print_r($d);

//        exit;
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

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/custom.css" rel="stylesheet">
    <link href="./scss/mystyle.css" rel="stylesheet">

    <script src="https://www.jqueryscript.net/demo/detect-swipe-handler/jquerySwipeHandler.js"></script>
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
                        <li><a data-watch="svg-sub-hand" class="dropdown-item newControlMenu" href="javascript:void(0)">Sub Hand</a></li>
                        <!-- <li><a data-watch="svg-sub-hand-lumi" class="dropdown-item newControlMenu" href="javascript:void(0)">Sub Hand Lumi</a></li> -->
                        <li><a data-watch="svg-sub-hand-tip" class="dropdown-item newControlMenu" href="javascript:void(0)">Sub Hand Tip</a></li>
                        <li><a style-id="1" data-watch="svg-lumi" class="dropdown-item newControlMenu" href="javascript:void(0)">Hand Lumi</a></li>
                        <li><a data-watch="svg-sec-mark" class="dropdown-item newControlMenu" href="javascript:void(0)">Second Mark</a></li>
                        <li><a style-id="1" data-watch="svg-hour-mark" class="dropdown-item newControlMenu" href="javascript:void(0)">Hour Mark</a></li>
                        <li><a style-id="1" data-watch="svg-hour-mark-lumi" class="dropdown-item newControlMenu" href="javascript:void(0)">Hour Mark Lumi</a></li>
                        <li><a data-watch="svg-sub-mark" class="dropdown-item newControlMenu" href="javascript:void(0)">Sub Mark</a></li>
                        <!-- <li><a data-watch="svg-sub-num" class="dropdown-item newControlMenu" href="javascript:void(0)">Sub Number</a></li> -->
                        <li><a data-watch="svg-up-text" class="dropdown-item newControlMenu" href="javascript:void(0)">Upper Text</a></li>
                        <li><a data-watch="svg-lw-text" class="dropdown-item newControlMenu" href="javascript:void(0)">Lower Text</a></li>
                        <li><a data-watch="svg-sub-ring" class="dropdown-item newControlMenu" href="javascript:void(0)">Sub Ring</a></li>
                        <li><a data-watch="svg-sub-num" class="dropdown-item newControlMenu" href="javascript:void(0)">Sub Number</a></li>
                        <li><a data-watch="svg-face" class="dropdown-item newControlMenu" href="javascript:void(0)">Face</a></li>
                        <li><a data-watch="svg-strap" class="dropdown-item newControlMenu" href="javascript:void(0)">Strap</a></li>
                        <li><a data-watch="svg-crocodile-strap" class="dropdown-item newControlMenu" href="javascript:void(0)">Crocodile Strap</a></li>
                        <li><a data-watch="svg-case" class="dropdown-item newControlMenu" href="javascript:void(0)">Case</a></li>
                        <li><a data-watch="svg-bezel" class="dropdown-item newControlMenu" href="javascript:void(0)">Bezel</a></li>
                        <li><a data-watch="svg-bezel-num" class="dropdown-item newControlMenu" href="javascript:void(0)">Bezel Number</a></li>
                        <li><a data-watch="svg-diamond-bezel" class="dropdown-item newControlMenu" href="javascript:void(0)">Diamond Bezel</a></li>
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
                        <img id="movement" src="<?php echo (!empty($movement)) ? $movement : './data/Movment/Steel.png'; ?>" alt="" class="img-responsive" />
                        <img id="face" src="<?php echo (!empty($face)) ? $face : './data/Face/21.png'; ?>" alt="" class="img-responsive" />
                        <img id="upText" src="<?php echo (!empty($upText)) ? $upText : './data/Upper text/17.png'; ?>" alt="" class="img-responsive" />
                        <img id="secMark" src="<?php echo (!empty($secMark)) ? $secMark : './data/Second mark/17.png'; ?>" alt="" class="img-responsive" />
                        <img id="hourMark" src="<?php echo (!empty($hourMark)) ? $hourMark : './data/Hour mark/Steel.png'; ?>" alt="" class="img-responsive" />
                        <img id="hourMarkLumi" src="<?php echo (!empty($hourMarkLumi)) ? $hourMarkLumi : './data/Hour mark lumi/17.png'; ?>" alt="" class="img-responsive" />
                        <img id="lwText" src="<?php echo (!empty($lwText)) ? $lwText : './data/Swiss Text/3.png'; ?>" alt="" class="img-responsive" />
                        <img id="subRing" src="<?php echo (!empty($subRing)) ? $subRing : './data/Sub ring/21.png'; ?>" alt="" class="img-responsive" />
                        <img id="subMark" src="<?php echo (!empty($subMark)) ? $subMark : './data/Submark/17.png'; ?>" alt="" class="img-responsive" />
                        <img id="subNumber" src="<?php echo (!empty($subNumber)) ? $subNumber : './data/Submark/Sub number/3.png'; ?>" alt="" class="img-responsive" />
                        <img id="subHand" src="<?php echo (!empty($subHand)) ? $subHand : './data/Sub hand/21.png'; ?>" alt="" class="img-responsive" />
                        <img id="subHandTip" src="<?php echo (!empty($subHandTip)) ? $subHandTip : './data/Sub hand tip/17.png'; ?>" alt="" class="img-responsive" style="display:<?= $subHandTipStyle == "none" ? "none" : "block" ?>;" />
                        <img id="subHandLumi" src="<?php echo (!empty($subHandLumi)) ? $subHandLumi : './data/Sub hand lumi/17.png'; ?>" alt="" class="img-responsive" style="display:<?= $subHandLumiStyle == "block" ? "block" : "none" ?>;" />

                        <img id="bezel" src="<?php echo (!empty($bezel)) ? $bezel : './data/Bezel/21.png'; ?>" alt="" class="img-responsive" />
                        <img id="bezelNum" src="<?php echo (!empty($bezelNum)) ? $bezelNum : './data/Bezel Number/17.png'; ?>" alt="" class="img-responsive" style="display:<?= $bezelNumStyle == "none" ? "none" : "block" ?>;" />

                        <img id="hourHand" src="<?php echo (!empty($hour)) ? $hour : './data/Hour hand/18.png'; ?>" alt="" class="img-responsive " />
                        <img id="minHand" src="<?php echo (!empty($min)) ? $min : './data/Min hand/18.png'; ?>" alt="" class="img-responsive " />

                        <img id="handLumi" src="<?php echo (!empty($lumi)) ? $lumi : './data/Hand lumi/17.png'; ?>" alt="" class="img-responsive " />
                        <img id="secHand" src="<?php echo (!empty($secHand)) ? $secHand : './data/Second hand/21.png'; ?>" alt="" class="img-responsive " />
                        <img id="secHandTip" src="<?php echo (!empty($secHandTip)) ? $secHandTip : './data/Second hand tip/17.png'; ?>" alt="" class="img-responsive " />
                        <img id="bolt" src="./data/Bolt/1.png" alt="" class="img-responsive" />
                        <!-- OVERLAYED WATCH SVG WILL BE ADDED BY JQUERY -->

                        <!-- OVERLAYED WATCH SVG END -->
                    </div>
                </div>
            </div>

            <!-- OVERLAYED WATCH SVG END -->
        </div>
    </div>

    <!-- start-right-model-popup -->
    <div class="right-popup watchmodels" style="display:none;">

        <div class="cls-btn">
            <i class="fas fa-times" aria-hidden="true"></i>
        </div>

        <!-- start-dropdown -->
        <div class="dropdown mydropdown">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Click to Select Part
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item case-btn" href="javascript:void(0)">Case</a></li>
                <li><a class="dropdown-item hands-btn" href="javascript:void(0)">Hands</a></li>
                <li><a class="dropdown-item second-hand-btn" href="javascript:void(0)">Second Hands</a></li>
            </ul>
        </div>
        <!-- end-dropdown -->

        <!-- start-arrow -->
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <!-- end-arrow -->

        <div class="overflow-div">

            <!-- start-case-style -->
            <div class="row justify-content-center case-main-div p-0 m-0 d-none">
                <?php
                // $fileNames = getFileNames("./data/models/");
                // $i = 0;
                // $res = mysqli_query($mysqli, "SELECT * FROM watches");
                // foreach ($res as $rows) {
                //     $id = $rows['id'];
                //     $watch_name = $rows['name'];
                //     $name = $rows['name'];
                ?>
                <!-- <div class="col-7 model-box p-0 m-0 applyCase <?php echo ($id == 1) ? 'active-model' : ''; ?>" role="button" data-watch="<?= $id; ?>">
                    <img src="./data/models/<?= $fileNames[$i] ?>" class="img-fluid">
                    <p class="model-text myfont"><?= $name; ?></p>
                </div> -->
                <?php // $i++; } 
                ?>
            </div>
            <!-- end-case-style -->

            <div class="row justify-content-center case-main-div p-0 m-0">
                <div class="col-7 model-box p-0 m-0 applyCase" role="button" data-watch="1">
                    <!-- <img src="./data/models/model1.png" class="img-fluid"> -->
                    <p class="model-text myfont">watch1</p>
                </div>
                <div class="col-7 model-box p-0 m-0 applyCase" role="button" data-watch="2">
                    <!-- <img src="./data/models/model2.png" class="img-fluid"> -->
                    <p class="model-text myfont">watch2</p>
                </div>
                <div class="col-7 model-box p-0 m-0 applyCase" role="button" data-watch="3">
                    <!-- <img src="./data/models/model3.png" class="img-fluid"> -->
                    <p class="model-text myfont">watch3</p>
                </div>
                <div class="col-7 model-box p-0 m-0 applyCase" role="button" data-watch="4">
                    <!-- <img src="./data/models/model4.png" class="img-fluid"> -->
                    <p class="model-text myfont">watch4</p>
                </div>
                <div class="col-7 model-box p-0 m-0 applyCase" role="button" data-watch="5">
                    <!-- <img src="./data/models/model5.png" class="img-fluid"> -->
                    <p class="model-text myfont">watch5</p>
                </div>
                <div class="col-7 model-box p-0 m-0 applyCase" role="button" data-watch="6">
                    <!-- <img src="./data/models/model6.png" class="img-fluid"> -->
                    <p class="model-text myfont">watch6</p>
                </div>
                <div class="col-7 model-box p-0 m-0 applyCase" role="button" data-watch="7">
                    <!-- <img src="./data/models/model7.png" class="img-fluid"> -->
                    <p class="model-text myfont">watch7</p>
                </div>
            </div>

            <!-- start-hands-style -->
            <div class="row justify-content-center p-0 m-0 hands-main-div" style="display: none;">
                <?php
                // $res = mysqli_query($mysqli, "SELECT DISTINCT style_id FROM hands");
                // $hands_style = array();
                // foreach ($res as $rows) {
                //     $style_id = $rows['style_id'];
                //     $sql = "(SELECT url from hands where style_id=" . $rows['style_id'] . " LIMIT 1)
                //     AS url" . $rows['style_id'];
                //     $res = mysqli_query($mysqli, "SELECT url,$sql FROM hands LIMIT 1");
                //     foreach ($res as $rows) {
                //         $hands_style[] = $rows["url" . $style_id] . ",";
                ?>
                <!-- <div class="col-11 model-box p-0 m-0 bothhands" style-id="<?= $style_id; ?>">
                    <img src="<?= str_replace(",", "", $hands_style[--$style_id]); ?>" class="img-fluid">
                    <p class="model-text myfont">Hands <?= ++$style_id; ?></p>
                </div> -->
                <?php // }  } 
                ?>
            </div>
            <!-- end-hands-style -->

            <!-- start-hands-style -->
            <div class="row justify-content-center p-0 m-0 sec-hands-div" style="display:none">
                <!-- start-toggle -->
                <label class="myswitch mySwitch3">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
                <!-- end-toggle -->
                <?php
                // $res = mysqli_query($mysqli, "SELECT DISTINCT style_id FROM second_hand");
                // $sec_hands = array();
                // $i = 0;
                // foreach ($res as $rows) {
                //     $style_id = $rows['style_id'];
                //     $sql = "(SELECT url from second_hand where style_id=" . $rows['style_id'] . " LIMIT 1)
                //     AS url" . $rows['style_id'];
                //     $res = mysqli_query($mysqli, "SELECT url,$sql FROM second_hand LIMIT 1");
                //     foreach ($res as $rows) {
                //         $sec_hands[] = $rows["url" . $style_id] . ",";
                ?>
                <!-- <div class="col-11 model-box p-0 m-0 sechand" style-id="<?= $style_id; ?>">
                    <img src="<?= str_replace(",", "", $sec_hands[$i]); ?>" class="img-fluid">
                    <p class="model-text myfont">Second Hand <?= ++$i; ?></p>
                </div> -->
                <?php //} } 
                ?>
                <div class="col-11 p-0 m-0">
                    <img src="" class="img-fluid">
                    <p class="model-text myfont"></p>
                </div>
            </div>
            <!-- end-hands-style -->
        </div>

    </div>
    <!-- end-right-model-popup -->


    <div class="color-popup strapmodels" style="display:none;">
        <!-- start-arrow -->
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <!-- end-arrow -->

        <div class="overflow-div">
            <p class="com-name mb-0 ">Strap</p>
            <div class="row mbl-width-clr p-0 m-0 verticleH justify-content-center align-items-center">
                <div class="col-1 col-sm-12 p-0 m-0  myStrap" role="button" data-watch="svg-strap">
                    <h4 class='text-white customized'>Strap</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 myStrap" role="button" data-watch="svg-crocodile-strap">
                    <h4 class='text-white customized'>Crocodile Strap</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- start-strap-popup -->
    <div class="color-popup new-div watchstrap" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Strap</p>
            <div class="row mbl-width-clr p-0 m-0">
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('watchStrap').src='./data/Strap/Black1.png'">
                    <div class="color-box" style="background-color: #000000"></div>
                </div>
                <!-- <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('watchStrap').src='./data/Strap/Gold1.png'">
                    <div class="color-box" style="background-color:  #d4af37;"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('watchStrap').src='./data/Strap/Rose gold1.png'">
                    <div class="color-box" style="background-color: #b76e79"></div>
                </div> -->
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('watchStrap').src='./data/Strap/Steel1.png'">
                    <div class="color-box" style="background-color: #71797E"></div>
                </div>
                <?php //getDynamicComponent("strap", $watch_id, "watchStrap"); 
                ?>
            </div>
        </div>
    </div>
    <!-- end-strap-popup -->

    <!-- start-crocodile-strap-popup -->
    <div class="color-popup new-div watchcrocodileStrap" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Crocodile Strap</p>
            <div class="row mbl-width-clr p-0 m-0">
                <?php // getDynamicComponent("bezel", $watch_id, "bezel"); 
                ?>
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


    <div class="color-popup  bezelmodels" style="display:none;">
        <!-- start-arrow -->
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <!-- end-arrow -->

        <div class="overflow-div">
            <p class="com-name mb-0 ">Bezel</p>
            <div class="row mbl-width-clr p-0 m-0 verticleH justify-content-center align-items-center">
                <div class="col-1 col-sm-12 p-0 m-0 myBezels" role="button" data-watch="svg-diamond-bezel">
                    <h4 class='text-white customized'>Diamond Bezel</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 myBezels" role="button" data-watch="svg-bezel">
                    <h4 class='text-white customized'>Bezel</h4>
                </div>
            </div>


        </div>

    </div>

    <!-- start-bezel-popup -->
    <div class="color-popup new-div watchbezel" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Bezel</p>
            <div class="row mbl-width-clr p-0 m-0">
                <?php // getDynamicComponent("bezel", $watch_id, "bezel"); 
                ?>
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

    <!-- start-diamond-bezel-popup -->
    <div class="color-popup  new-div  watchdiamondBezel" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div">
            <p class="com-name mb-0 ">Diamond Bezel</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    let clr4 = ['silver', 'purple', 'green', 'pink', 'red'];
                    let dnames = ['1', 'Amesthy', 'Green', 'Pink', 'rubby'];
                    j = 0;
                    for (let i = 1; i < 6; i++) {
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
    <!-- end-bezel-popup -->


    <div class="color-popup  bezelnumModels" style="display:none;">
        <!-- start-arrow -->
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <!-- end-arrow -->

        <div class="overflow-div">
            <p class="com-name mb-0 ">Bezel Number</p>
            <div class="row mbl-width-clr p-0 m-0 verticleH justify-content-center align-items-center">
                <div class="col-1 col-sm-12 p-0 m-0 myBezelNumbers" role="button" data-watch="svg-bezel-num" data-id="1">
                    <h4 class='text-white customized'>Bezel Number</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 myBezelNumbers" role="button" data-watch="svg-ar-bezel-num" data-id="2">
                    <h4 class='text-white customized'>Arabic Bezel Number</h4>
                </div>
            </div>


        </div>

    </div>

    <!-- start-bezel-number-popup -->
    <div class="color-popup new-div watchbezelNum" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div" data-id="1">
            <p class="com-name mb-0 ">Bezel Number</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('bezelNum').src=' ./data/Bezel Number/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
        <div class="overflow-div" data-id="2">
            <p class="com-name mb-0 ">Arabic Bezel Number</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 22; i < 43; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('bezelNum').src=' ./data/Bezel Number/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- end-bezel-number-popup -->

    <div class="color-popup subnumModels" style="display:none;">
        <!-- start-arrow -->
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <!-- end-arrow -->

        <div class="overflow-div">
            <p class="com-name mb-0 ">Sub Number</p>
            <div class="row mbl-width-clr p-0 m-0 verticleH justify-content-center align-items-center">
                <div class="col-1 col-sm-12 p-0 m-0  mySubNumbers" role="button" data-watch="svg-sub-num" data-id="1">
                    <h4 class='text-white customized'>Power Reserve</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 mySubNumbers" role="button" data-watch="svg-ar-sub-num" data-id="2">
                    <h4 class='text-white customized'>Style 1 Arabic</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 mySubNumbers" role="button" data-watch="svg-sub-num" data-id="3">
                    <h4 class='text-white customized'>Standard</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 mySubNumbers" role="button" data-watch="svg-sub-num" data-id="4">
                    <h4 class='text-white customized'>Style 1 Arabic</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 mySubNumbers" role="button" data-watch="svg-sub-num" data-id="5">
                    <h4 class='text-white customized'>Style 1</h4>
                </div>
            </div>
        </div>

    </div>

    <!-- start-sub-mark-number-popup -->
    <div class="color-popup new-div watchsubNum" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div" data-id="1">
            <p class="com-name mb-0 ">Sub Number</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subNumber').src='./data/Submark/Sub number/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
        <div class="overflow-div" data-id="2">
            <p class="com-name mb-0 ">Sub Number Arabic</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 22; i < 43; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subNumber').src='./data/Submark/Sub number/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
        <div class="overflow-div" data-id="3">
            <p class="com-name mb-0 ">Sub Number</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 43; i < 64; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subNumber').src='./data/Submark/Sub number/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
        <div class="overflow-div" data-id="4">
            <p class="com-name mb-0 ">Sub Number</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 64; i < 85; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subNumber').src='./data/Submark/Sub number/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
        <div class="overflow-div" data-id="5">
            <p class="com-name mb-0 ">Sub Number</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 85; i < 106; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subNumber').src='./data/Submark/Sub number/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- end-sub-mark-number-popup -->


    <div class="color-popup subringModels" style="display:none;">
        <!-- start-arrow -->
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <!-- end-arrow -->

        <div class="overflow-div">
            <p class="com-name mb-0 ">Sub Ring</p>
            <div class="row mbl-width-clr p-0 m-0 verticleH justify-content-center align-items-center">
                <div class="col-1 col-sm-12 p-0 m-0 mySubRing" role="button" data-watch="svg-sub-ring" data-id="1">
                    <h4 class='text-white customized'>Power Reserve</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0  mySubRing" role="button" data-watch="svg-sub-ring" data-id="2">
                    <h4 class='text-white customized'>Standard</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- start-sub-ring-popup -->
    <div class="color-popup new-div watchsubRing" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div" data-id="1">
            <p class="com-name mb-0 ">Sub Ring</p>
            <div class="row mbl-width-clr p-0 m-0">
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subRing').src='./data/Sub ring/22.png'">
                    <div class="color-box" style="background-color: #a7d8de"></div>
                </div>
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subRing').src='./data/Sub ring/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
        <div class="overflow-div" data-id="2">
            <p class="com-name mb-0 ">Sub Ring</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 23; i < 44; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subRing').src='./data/Sub ring/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- end-sub-ring-popup -->

    <div class="color-popup subrmarkModels" style="display:none;">
        <!-- start-arrow -->
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <!-- end-arrow -->

        <div class="overflow-div">
            <p class="com-name mb-0 ">Sub mark</p>
            <div class="row mbl-width-clr p-0 m-0 verticleH justify-content-center align-items-center">
                <div class="col-1 col-sm-12 p-0 m-0  mySubMark" role="button" data-watch="svg-sub-mark" data-id="1">
                    <h4 class='text-white customized'>Standard</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0  mySubMark" role="button" data-watch="svg-sub-mark" data-id="2">
                    <h4 class='text-white customized'>Power Reserve</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 mySubMark" role="button" data-watch="svg-sub-mark" data-id="3">
                    <h4 class='text-white customized'>Style 3</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 mySubMark" role="button" data-watch="svg-sub-mark" data-id="4">
                    <h4 class='text-white customized'>Arabic Style</h4>
                </div>
            </div>
        </div>
    </div>


    <!-- start-sub-mark-popup -->
    <div class="color-popup new-div watchsubMark" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div" data-id="1">
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
        <div class="overflow-div" data-id="2">
            <p class="com-name mb-0 ">Sub Mark</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 22; i < 43; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subMark').src='./data/Submark/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
        <div class="overflow-div" data-id="3">
            <p class="com-name mb-0 ">Sub Mark</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 43; i < 64; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subMark').src='./data/Submark/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
        <div class="overflow-div" data-id="4">
            <p class="com-name mb-0 ">Sub Mark</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 64; i < 85; i++) {
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


    <div class="color-popup secondmarkModels" style="display:none;">
        <!-- start-arrow -->
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <!-- end-arrow -->

        <div class="overflow-div">
            <p class="com-name mb-0 ">Second Mark</p>
            <div class="row mbl-width-clr p-0 m-0 verticleH justify-content-center align-items-center">
                <div class="col-1 col-sm-12 p-0 m-0 mySecMark" role="button" data-watch="svg-sub-mark" data-id="1">
                    <h4 class='text-white customized'>Style 1</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 mySecMark" role="button" data-watch="svg-sub-mark" data-id="2">
                    <h4 class='text-white customized'>Style 2</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 mySecMark" role="button" data-watch="svg-sub-mark" data-id="3">
                    <h4 class='text-white customized'>Style 3</h4>
                </div>
            </div>
        </div>

    </div>

    <!-- start-second-mark-popup -->
    <div class="color-popup  new-div watchsecondMark" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div" data-id="1">
            <p class="com-name mb-0 ">Second Mark</p>
            <div class="row mbl-width-clr p-0 m-0">
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
        <div class="overflow-div" data-id="2">
            <p class="com-name mb-0 ">Second Mark</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 22; i < 43; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('secMark').src='./data/Second mark/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
        <div class="overflow-div" data-id="3">
            <p class="com-name mb-0 ">Second Mark</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 43; i < 64; i++) {
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


    <div class="color-popup subHandModels" style="display:none;">
        <!-- start-arrow -->
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <!-- end-arrow -->

        <div class="overflow-div">
            <p class="com-name mb-0 ">Sub Hand</p>
            <div class="row mbl-width-clr p-0 m-0 verticleH justify-content-center align-items-center">
                <div class="col-1 col-sm-12 p-0 m-0  mySubHand" role="button" data-watch="svg-sub-hand" data-id="1">
                    <h4 class='text-white customized'>Style 1</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0 mySubHand" role="button" data-watch="svg-sub-hand" data-id="2">
                    <h4 class='text-white customized'>Style 2</h4>
                </div>
                <!--<div class="col-1 col-sm-12 p-0 m-0  mySubHand" role="button" data-watch="svg-sub-hand" data-id="3" >
                    <h4 class='text-white customized'>Style 3</h4>
                </div>
                 <div class="col-1 col-sm-12 p-0 m-0  mySubHand" role="button" data-watch="svg-sub-hand" data-id="4" >
                    <h4 class='text-white customized'>Style 4</h4>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0  mySubHand" role="button" data-watch="svg-sub-hand" data-id="5" >
                    <h4 class='text-white customized'>Style 5</h4>
                </div> -->
            </div>
        </div>

    </div>

    <!-- start-sub-hand-popup -->
    <div class="color-popup new-div watchsubHand" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div" data-id="1">
            <p class="com-name mb-0 ">Sub Hand</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subHand').src='./data/Sub hand/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
        <div class="overflow-div" data-id="2">
            <p class="com-name mb-0 ">Sub Hand</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 22; i < 43; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subHand').src='./data/Sub hand/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
        <div class="overflow-div" data-id="3">
            <p class="com-name mb-0 ">Sub Hand</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 43; i < 64; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subHand').src='./data/Sub hand/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subHand').src='./data/Sub hand/64.png'">
                    <div class="color-box" style="background-color: black"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subHand').src='./data/Sub hand/65.png'">
                    <div class="color-box" style="background-color: silver"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end-sub-hand-popup -->

    <!-- start-sub-hand-popup -->
    <div class="color-popup  watchsubHandTip" data-id="1" style="display: none;">
        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>
        <div class="overflow-div" data-id="1">
            <p class="com-name mb-0 ">Sub Hand Tip</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subHandTip').src='./data/Sub hand tip/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
        <!-- <div class="overflow-div" data-id="2">
            <p class="com-name mb-0 ">Sub Hand Tip</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 22; i < 43; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subHandTip').src='./data/Sub hand tip/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
        <div class="overflow-div" data-id="3">
            <p class="com-name mb-0 ">Sub Hand Tip</p>
            <div class="row mbl-width-clr p-0 m-0">
                <script>
                    j = 0;
                    for (let i = 43; i < 64; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('subHandTip').src='./data/Sub hand tip/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div> -->
    </div>
    <!-- end-sub-hand-popup -->

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


    <div class="color-popup secondhandTip" style-id="1" style="display:none ;">

        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>

        <div class="overflow-div">
            <p class="com-name mb-0 ">Second Hand Tip</p>
            <div class="row mbl-width-clr p-0 m-0">
                <?php
                // $q = "SELECT * FROM second_hand WHERE style_id=$style_id";
                // $q = "SELECT * FROM second_hand WHERE style_id=1";
                // $res = mysqli_query($mysqli, $q);
                // foreach ($res as $rows) {
                //     $id = $rows['id'];
                //     $name = $rows['name'];
                //     $url = $rows['url'];
                //     $color = $rows['color'];
                ?>
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('secHandTip').src='./data/Second hand tip/${i}.png'">
                    <div class="color-box" style="background-color: ${clr[j]}"></div>
                </div>`);
                        j++;
                    }
                </script>
                <?php //}  
                ?>
            </div>

        </div>

    </div>

    <!-- SELECT DYNAMICS SECOND HANDS END-->


    <!-- SELECT DYNAMICS HOUR HANDS  START-->
    <div class="color-popup watchhands" style-id="1" style="display: none;">

        <div class="arrow-collapse">
            <div class="ac-inner">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </div>
        </div>

        <div class="overflow-div">
            <p class="com-name mb-0 ">Hands</p>
            <div class="row mbl-width-clr p-0 m-0 d-none">
                <?php
                // $q = "SELECT * FROM minute LIMIT 21";
                // $res = mysqli_query($mysqli, $q);
                // foreach ($res as $rows) {
                //     $id = $rows['id'];
                //     $name = $rows['name'];
                //     $url = $rows['url'];
                //     $color = $rows['color'];

                ?>
                <!-- <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('minHand').src='<?= $url ?>'; ">
                        <div class="color-box" style="background-color: <?php echo $color ?>"></div>
                    </div> -->
                <?php //}  
                ?>
            </div>

            <div class="row mbl-width-clr p-0 m-0">
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
                    let clr2 = ['#000000', '#d4af37', '#b76e79', '#71797E'];
                    let names = ['black', 'gold', 'Rose gold', 'Steel'];
                    j = 0;
                    for (let i = 1; i < 5; i++) {
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
                <script>
                    // let names = ['black', 'gold', 'Rose gold', 'Steel'];
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
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('movement').src='./data/Movment/Steel.png'">
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
                <script>
                    j = 0;
                    for (let i = 1; i < 22; i++) {
                        document.write(`
                        <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('lwText').src='./data/Swiss text/${i}.png'">
                            <div class="color-box" style="background-color: ${clr[j]}"></div>
                        </div>`);
                        j++;
                    }
                </script>
            </div>
        </div>
    </div>
    <!-- end-swiss-text-popup -->


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
                <?php //getDynamicComponent("winder", $watch_id, "winder"); 
                ?>
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('winder').src='./data/Winder/Black1.png'">
                    <div class="color-box" style="background-color: #000000"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('winder').src='./data/Winder/Gold1.png'">
                    <div class="color-box" style="background-color:  #d4af37;"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('winder').src='./data/Winder/Rose gold1.png'">
                    <div class="color-box" style="background-color: #b76e79"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('winder').src='./data/Winder/Steel1.png'">
                    <div class="color-box" style="background-color: #71797E"></div>
                </div>
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
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('case').src='./data/Case/Black1.png'">
                    <div class="color-box" style="background-color: #000000"></div>
                </div>
                <!-- <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('case').src='./data/Case/Gold1.png'">
                    <div class="color-box" style="background-color:  #d4af37;"></div>
                </div>
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('case').src='./data/Case/Rose gold1.png'">
                    <div class="color-box" style="background-color: #b76e79"></div>
                </div> -->
                <div class="col-1 col-sm-12 p-0 m-0" onclick="document.getElementById('case').src='./data/Case/Steel1.png'">
                    <div class="color-box" style="background-color: #71797E"></div>
                </div>
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
                    <div class="color-box" style="background-color: #a7d8de"></div>
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



    <script src="./js/main.js"></script>
    <script src="./newmyjs.js"></script>
    <script src="./js/app.js"></script>
    <script src="./js/html2canvas.js"></script>
    <script src="./js/canvas2image.js"></script>
</body>


<!-- SCREEN SHOT AND SCREEN RESET FUNCTION -->
<script>
    $(document).ready(() => {

        function getSvgData(imgId) {
            $.get(`./svg/watch ${imgId}.svg`, null, function(data) {
                let svgdata = $(data).find("svg")[0];
                $("#desk-sx").append(svgdata);
            });
        }

        getSvgData(1);

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
            $("#loader").removeClass("d-none");

            loading();

            setTimeout(() => {
                html2canvas(document.getElementById("desk-sx"), {
                    backgroundColor: null
                }).then(function(canvas) {
                    document.body.appendChild(canvas);
                    Canvas2Image.saveAsPNG(canvas);
                    document.body.removeChild(canvas);
                    $("#loader").addClass("d-none");
                });
            }, 1500);
        });
    });
</script>

</html>