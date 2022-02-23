<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="scss/css.css">
    <script src="https://kit.fontawesome.com/72a9c1090f.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="./img/favicon.png">

    <title>Daytona</title>
    <style>
        .main-content {
            height: 100vh;
            overflow: hidden;
        }

        .working-box,
        .preview-box {
            height: 100%;
            position: absolute;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }

        .preview-box {
            /* height: 68%; */
            overflow: hidden;
        }

        .working-box {
            right: 0;
            display: flex;
        }

        .working-box img,
        .preview-box img {
            position: absolute;
            top: 0;
            height: auto;
            padding: 0;
            margin: 0 auto;
        }

        .preview-box img {
            transform: scale(2.3);
            height: 90%;
        }

        .working-box img {
            transform: scale(1.2);
            height: 90%;
            width: auto;
        }

        @media screen and (max-width: 576px) {
            .working-box {
                overflow: hidden;
            }

            .nav-menu {
                position: fixed;
            }

            .submenu {
                position: fixed;
            }
        }
    </style>
</head>

<body>


    <!-- start-container -->
    <div class="container-fluid p-0 m-0 main-content">

        <div class="row p-0 m-0">
            <!-- Zoom in watch View start -->
            <div class="col-6 d-none d-sm-flex p-0 m-0 preview-box" id="innerPreview">
                <img id="Movement" class="Movement" src="<?php echo (!empty($movement)) ? $movement : './data/Movment/Steel.png'; ?>" alt="" class="img-responsive" />
                <img id="Face" class="Face" src="<?php echo (!empty($face)) ? $face : './data/Face/21.png'; ?>" alt="" class="img-responsive" />
                <img id="Uppertext" class="Uppertext" src="<?php echo (!empty($upText)) ? $upText : './data/Upper text/17.png'; ?>" alt="" class="img-responsive" />
                <img id="secondmark" class="secondmark" src="<?php echo (!empty($secMark)) ? $secMark : './data/Second mark/17.png'; ?>" alt="" class="img-responsive" />
                <img id="Hour_mark" class="Hour_mark" src="<?php echo (!empty($hourMark)) ? $hourMark : './data/Hour mark/Steel.png'; ?>" alt="" class="img-responsive" />
                <img id="Hour_mark_lumi" class="Hour_mark_lumi" src="<?php echo (!empty($hourMarkLumi)) ? $hourMarkLumi : './data/Hour mark lumi/17.png'; ?>" alt="" class="img-responsive" />
                <img id="Lowertext" class="Lowertext" src="<?php echo (!empty($lwText)) ? $lwText : './data/Swiss Text/3.png'; ?>" alt="" class="img-responsive" />
                <img id="Sub_ring" class="Sub_ring" src="<?php echo (!empty($subRing)) ? $subRing : './data/Sub ring/21.png'; ?>" alt="" class="img-responsive" />
                <img id="Submark" class="Submark" src="<?php echo (!empty($subMark)) ? $subMark : './data/Submark/17.png'; ?>" alt="" class="img-responsive" />
                <img id="Subnumber" class="Subnumber" src="<?php echo (!empty($subNumber)) ? $subNumber : './data/Submark/Sub number/3.png'; ?>" alt="" class="img-responsive" />
                <img id="Sub_hand" class="Sub_hand" src="<?php echo (!empty($subHand)) ? $subHand : './data/Sub hand/21.png'; ?>" alt="" class="img-responsive" />
                <img id="subHandTip" class="subHandTip" src="<?php echo (!empty($subHandTip)) ? $subHandTip : './data/Sub hand tip/17.png'; ?>" alt="" class="img-responsive" />
                <img id="subHandLumi" class="subHandLumi" src="<?php echo (!empty($subHandLumi)) ? $subHandLumi : './data/Sub hand lumi/17.png'; ?>" alt="" class="img-responsive" />

                <img id="Hour_hand" class="Hour_hand" src="<?php echo (!empty($hour)) ? $hour : './data/Hour hand/18.png'; ?>" alt="" class="img-responsive " />
                <img id="Min_hand" class="Min_hand" src="<?php echo (!empty($min)) ? $min : './data/Min hand/18.png'; ?>" alt="" class="img-responsive " />

                <img id="Hands_lumi" class="Hands_lumi" src="<?php echo (!empty($lumi)) ? $lumi : './data/Hand lumi/17.png'; ?>" alt="" class="img-responsive " />
                <img id="Second_hand" class="Second_hand" src="<?php echo (!empty($secHand)) ? $secHand : './data/Second hand/21.png'; ?>" alt="" class="img-responsive " />
                <img id="secHandTip" class="secHandTip" src="<?php echo (!empty($secHandTip)) ? $secHandTip : './data/Second hand tip/17.png'; ?>" alt="" class="img-responsive " />
                <img id="bolt" src="./data/Bolt/1.png" alt="" class="img-responsive" />
            </div>
            <!-- Zoom in watch View end -->

            <!-- Full watch View start -->
            <div class="col-12 col-sm-6 p-0 m-0 working-box" id="2dwatch">
                <img id="Strap" src="<?php echo (!empty($strap)) ? $strap : './data/Strap/Steel1.png'; ?>" alt="" class="img-responsive" />
                <img id="Winder" src="<?php echo (!empty($winder)) ? $winder : './data/Winder/Steel1.png'; ?>" alt="" class="img-responsive " />
                <img id="Case" src="<?php echo (!empty($case)) ? $case : './data/Case/Steel1.png'; ?>" alt="" class="img-responsive" />

                <img id="Movement" class="Movement" src="<?php echo (!empty($movement)) ? $movement : './data/Movment/Steel.png'; ?>" alt="" class="img-responsive" />
                <img id="Face" class="Face" src="<?php echo (!empty($face)) ? $face : './data/Face/21.png'; ?>" alt="" class="img-responsive" />
                <img id="Uppertext" class="Uppertext" src="<?php echo (!empty($upText)) ? $upText : './data/Upper text/17.png'; ?>" alt="" class="img-responsive" />
                <img id="secondmark" class="secondmark" src="<?php echo (!empty($secMark)) ? $secMark : './data/Second mark/17.png'; ?>" alt="" class="img-responsive" />
                <img id="Hour_mark" class="Hour_mark" src="<?php echo (!empty($hourMark)) ? $hourMark : './data/Hour mark/Steel.png'; ?>" alt="" class="img-responsive" />
                <img id="Hour_mark_lumi" class="Hour_mark_lumi" src="<?php echo (!empty($hourMarkLumi)) ? $hourMarkLumi : './data/Hour mark lumi/17.png'; ?>" alt="" class="img-responsive" />
                <img id="Lowertext" class="Lowertext" src="<?php echo (!empty($lwText)) ? $lwText : './data/Swiss Text/3.png'; ?>" alt="" class="img-responsive" />
                <img id="Sub_ring" class="Sub_ring" src="<?php echo (!empty($subRing)) ? $subRing : './data/Sub ring/21.png'; ?>" alt="" class="img-responsive" />
                <img id="Submark" class="Submark" src="<?php echo (!empty($subMark)) ? $subMark : './data/Submark/17.png'; ?>" alt="" class="img-responsive" />
                <img id="Subnumber" class="Subnumber" src="<?php echo (!empty($subNumber)) ? $subNumber : './data/Submark/Sub number/3.png'; ?>" alt="" class="img-responsive" />
                <img id="Sub_hand" class="Sub_hand" src="<?php echo (!empty($subHand)) ? $subHand : './data/Sub hand/21.png'; ?>" alt="" class="img-responsive" />
                <img id="subHandTip" class="subHandTip" src="<?php echo (!empty($subHandTip)) ? $subHandTip : './data/Sub hand tip/17.png'; ?>" alt="" class="img-responsive" />
                <img id="subHandLumi" class="subHandLumi" src="<?php echo (!empty($subHandLumi)) ? $subHandLumi : './data/Sub hand lumi/17.png'; ?>" alt="" class="img-responsive" />

                <img id="Bezel" src="<?php echo (!empty($bezel)) ? $bezel : './data/Bezel/21.png'; ?>" alt="" class="img-responsive" />
                <img id="Bezel_number" src="<?php echo (!empty($bezelNum)) ? $bezelNum : './data/Bezel Number/17.png'; ?>" alt="" class="img-responsive" />

                <img id="Hour_hand" class="Hour_hand" src="<?php echo (!empty($hour)) ? $hour : './data/Hour hand/18.png'; ?>" alt="" class="img-responsive " />
                <img id="Min_hand" class="Min_hand" src="<?php echo (!empty($min)) ? $min : './data/Min hand/18.png'; ?>" alt="" class="img-responsive " />

                <img id="Hands_lumi" class="Hands_lumi" src="<?php echo (!empty($lumi)) ? $lumi : './data/Hand lumi/17.png'; ?>" alt="" class="img-responsive " />
                <img id="Second_hand" class="Second_hand" src="<?php echo (!empty($secHand)) ? $secHand : './data/Second hand/21.png'; ?>" alt="" class="img-responsive " />
                <img id="secHandTip" class="secHandTip" src="<?php echo (!empty($secHandTip)) ? $secHandTip : './data/Second hand tip/17.png'; ?>" alt="" class="img-responsive " />
                <img id="bolt" src="./data/Bolt/1.png" alt="" class="img-responsive" />
            </div>
            <!-- Full watch View end -->
        </div>
        <div class="canvas-icon">
            <ul>
                <li><img src="img/plus-01.svg" class="img-fluid p-0 m-0"></li>
                <li><img src="img/refresh.svg" class="img-fluid p-0 m-0"></li>
                <li class="screenShotBtn"><img src="img/download-01.svg" class="img-fluid p-0 m-0"></li>
            </ul>
        </div>

    </div>
    <!-- end-container -->


    <!-- start-footer -->
    <footer>

        <!-- start-nav -->
        <!-- Main navigation category -->
        <div class="nav-menu" style="display: none;">
            <ul class="ul-main">
                <li class="li-item" data-tab="#dail">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
                        <g>
                            <path fill="white" d="M252.3,464.1c-118.4,0-214.8-96.3-214.8-214.8c0-118.4,96.3-214.7,214.8-214.7c118.4,0,214.7,96.3,214.7,214.7
                            C467.1,367.8,370.8,464.1,252.3,464.1z M252.3,50.2c-109.8,0-199.2,89.4-199.2,199.2c0,109.8,89.4,199.2,199.2,199.2
                            c109.8,0,199.2-89.4,199.2-199.2C451.6,139.6,362.2,50.2,252.3,50.2z" />
                        </g>
                        <g>
                            <path fill="white" d="M253.5,426.4c-18.5,0-33.6-15.1-33.6-33.6s15.1-33.6,33.6-33.6c18.5,0,33.6,15.1,33.6,33.6S272,426.4,253.5,426.4z" />
                        </g>
                    </svg>
                </li>
                <li class="li-item" data-tab="#hands">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                display: none;
                            }

                            .st1 {
                                display: inline;
                            }

                            .st2 {
                                stroke: #ffffff;
                                stroke-width: 5;
                                stroke-miterlimit: 10;
                            }
                        </style>
                        <g>
                            <path fill="white" d="M197.6,369.4c-19.6,0-35.5-15.9-35.5-35.5c0-19.6,15.9-35.5,35.5-35.5s35.5,15.9,35.5,35.5
                            C233.1,353.4,217.2,369.4,197.6,369.4z M197.6,317.1c-9.2,0-16.7,7.5-16.7,16.7c0,9.2,7.5,16.7,16.7,16.7c9.2,0,16.7-7.5,16.7-16.7
                            C214.3,324.6,206.8,317.1,197.6,317.1z" />
                        </g>
                        <g class="st0">
                            <path fill="white" class="st1" d="M218.3,339.6c-2.6-0.6-4.9-2.2-6.5-4.5c-3.3-5-1.9-11.7,3-15l253.4-167.9c5-3.3,11.7-1.9,15,3
                            c3.3,5,1.9,11.7-3,15L226.8,338.1C224.2,339.9,221.1,340.3,218.3,339.6z" />
                        </g>
                        <g class="st0">
                            <path fill="white" class="st1" d="M167.5,332.1c-2.1,0-4.3-0.6-6.2-1.9l-144-100.2c-4.9-3.4-6.1-10.1-2.7-15c3.4-4.9,10.1-6.1,15-2.7l144,100.2
                            c4.9,3.4,6.1,10.1,2.7,15C174.3,330.4,170.9,332.1,167.5,332.1z" />
                        </g>
                        <ellipse cx="199.7" cy="331.7" rx="29" ry="28.6" fill="white" />
                        <g>
                            <path fill="white" class="st2" d="M190.5,338.4c-0.6,0-1.3-0.1-1.9-0.4l-150-69.4c-2.3-1-3.2-3.7-2.2-6c1-2.3,3.7-3.2,6-2.2l150,69.4
                            c2.3,1,3.2,3.7,2.2,6C193.8,337.4,192.2,338.4,190.5,338.4z" />
                        </g>
                        <g>
                            <path fill="white" class="st2" d="M203,345.2c-1.6,0-3.2-0.9-4-2.5c-1.1-2.2-0.2-4.9,2-6l255-127.8c2.2-1.1,4.9-0.2,6,2c1.1,2.2,0.2,4.9-2,6
                            L205,344.8C204.3,345.1,203.6,345.2,203,345.2z" />
                        </g>
                    </svg>
                </li>
                <li class="li-item" data-tab="#subDail">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
                        <g>
                            <path fill="white" d="M252.3,464.1c-118.4,0-214.8-96.3-214.8-214.8c0-118.4,96.3-214.7,214.8-214.7c118.4,0,214.7,96.3,214.7,214.7
                            C467.1,367.8,370.8,464.1,252.3,464.1z M252.3,50.2c-109.8,0-199.2,89.4-199.2,199.2c0,109.8,89.4,199.2,199.2,199.2
                            c109.8,0,199.2-89.4,199.2-199.2C451.6,139.6,362.2,50.2,252.3,50.2z" />
                        </g>
                        <g>
                            <path fill="white" d="M253.5,436.3c-24,0-43.5-19.5-43.5-43.5s19.5-43.5,43.5-43.5c24,0,43.5,19.5,43.5,43.5S277.5,436.3,253.5,436.3z" />
                        </g>
                        <g>
                            <path fill="white" d="M356.5,329.3c-24,0-43.5-19.5-43.5-43.5s19.5-43.5,43.5-43.5c24,0,43.5,19.5,43.5,43.5S380.5,329.3,356.5,329.3z" />
                        </g>
                        <g>
                            <path fill="white" d="M147.5,330.3c-24,0-43.5-19.5-43.5-43.5s19.5-43.5,43.5-43.5c24,0,43.5,19.5,43.5,43.5S171.5,330.3,147.5,330.3z" />
                        </g>
                    </svg>
                </li>
                <!-- <li class="li-item" data-tab="#personalize">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
                        <style type="text/css">
                            .st0 {
                                fill: none;
                                stroke: #ffffff;
                                stroke-width: 15;
                                stroke-linecap: round;
                                stroke-linejoin: round;
                                stroke-miterlimit: 10;
                            }
                        </style>
                        <g>
                            <path fill="white" d="M247.1,432.3c-101.3,0-183.7-83.6-183.7-186.4c0-102.8,82.4-186.4,183.7-186.4c101.3,0,183.7,83.6,183.7,186.4
                            C430.7,348.7,348.4,432.3,247.1,432.3z M247.1,72.9c-93.9,0-170.4,77.6-170.4,172.9c0,95.4,76.4,172.9,170.4,172.9
                            c93.9,0,170.4-77.6,170.4-172.9C417.5,150.5,341,72.9,247.1,72.9z" />
                        </g>
                        <line class="st0" x1="114.7" y1="368.6" x2="114.7" y2="475.5" />
                        <line class="st0" x1="114.7" y1="38.3" x2="114.7" y2="124.1" />
                        <line class="st0" x1="379.6" y1="368.6" x2="379.6" y2="475.5" />
                        <line class="st0" x1="379.6" y1="38.3" x2="379.6" y2="124.1" />
                        <path fill="white" d="M441.3,272.3h-11.9c-2.8,0-5-2.3-5-5v-45.6c0-2.8,2.3-5,5-5h11.9c2.8,0,5,2.3,5,5v45.6C446.3,270,444,272.3,441.3,272.3z" />
                    </svg>
                </li> -->
                <li class="li-item" data-tab="#body">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
                        <g>
                            <path fill="white" d="M454.6,249.6c-4.1,0-7.3-3.3-7.3-7.3c0-107.7-87.6-195.4-195.4-195.4C160.5,46.9,82.2,109,61.6,198
                            c-0.9,3.9-4.8,6.4-8.8,5.5c-3.9-0.9-6.4-4.9-5.5-8.8C69.5,99,153.6,32.2,251.9,32.2c115.8,0,210,94.2,210,210
                            C461.9,246.3,458.7,249.6,454.6,249.6z" />
                        </g>
                        <g>
                            <path fill="white" d="M233.1,466.2c-56.1,0-108.8-21.8-148.5-61.5c-2.9-2.9-2.9-7.5,0-10.4c2.9-2.9,7.5-2.9,10.4,0c36.9,36.9,86,57.2,138.1,57.2
                            c107.7,0,195.4-87.6,195.4-195.3c0-80.9-48.6-152.3-123.9-181.9c-3.8-1.5-5.6-5.7-4.1-9.5c1.5-3.8,5.7-5.6,9.5-4.1
                            c80.9,31.8,133.2,108.6,133.2,195.5C443.2,372,348.9,466.2,233.1,466.2z" />
                        </g>
                        <g>
                            <circle cx="84.7" cy="198.2" r="37.9" fill="white" />
                        </g>
                        <g>
                            <circle cx="110.6" cy="376" r="37.9" fill="white" />
                        </g>
                    </svg>
                </li>
            </ul>
        </div>
        <!-- end-nav -->

        <!-- start-dail-menu -->
        <div class="submenu navigate" id="dail" style="display: none;">
            <ul class="ul-submenu">
                <li class="submenu-li" data-id=".Hour_mark">Hour mark</li>
                <li class="submenu-li" data-id=".Hour_mark_lumi">Hour mark lumi</li>
                <li class="submenu-li" data-id=".Uppertext">Upper text</li>
                <!-- <li class="submenu-li" data-id=".Crown">Crown</li> -->
                <!-- <li class="submenu-li" data-id=".middle_text">Model text</li> -->
                <li class="submenu-li" data-id=".Lowertext">Lower text</li>
                <li class="submenu-li" data-id=".secondmark">Second mark</li>
                <li class="submenu-li" data-id=".Face">Face</li>
                <li class="submenu-li" data-id=".Movement">Movement</li>
            </ul>
        </div>
        <!-- end-dail-menu -->

        <!-- start-hands-menu -->
        <div class="submenu navigate" id="hands" style="display: none;">
            <ul class="ul-submenu">
                <li class="submenu-li" data-id=".Hands">Hands</li>
                <li class="submenu-li" data-id=".Hands_lumi">Hands lumi</li>
                <li class="submenu-li" data-id=".Second_hand">Second Hand</li>
                <li class="submenu-li" data-id=".secHandTip">Second Hand Tip</li>
                <li class="submenu-li" data-id=".Sub_hand">Sub Hand</li>
                <li class="submenu-li" data-id=".subHandTip">Sub Hand tip</li>
            </ul>
        </div>
        <!-- end-hands-menu -->

        <!-- start-sub dial-menu -->
        <div class="submenu navigate" id="subDail" style="display: none;">
            <ul class="ul-submenu">
                <li class="submenu-li" data-id=".Sub_ring">Sub ring</li>
                <li class="submenu-li" data-id=".Subnumber">Sub Number</li>
                <li class="submenu-li" data-id=".Submark">Sub mark</li>
            </ul>
        </div>
        <!-- end-sub dial-menu -->

        <!-- start-personalize-menu -->
        <div class="submenu navigate" id="personalize" style="display: none;">
            <ul class="ul-submenu">
                <li class="submenu-li">Initial</li>
            </ul>
        </div>
        <!-- end-personalize-menu -->

        <!-- start-body-menu -->
        <div class="submenu navigate" id="body" style="display: none;">
            <ul class="ul-submenu">
                <li class="submenu-li" data-id="#Strap">strap</li>
                <li class="submenu-li" data-id="#Winder">winder</li>
                <li class="submenu-li" data-id="#Case">case</li>
                <li class="submenu-li" data-id="#Bezel">bezel</li>
                <li class="submenu-li" data-id="#Bezel_number">bezel number</li>
            </ul>
        </div>
        <!-- end-body-menu -->

        <!-- start-styles-menu -->
        <div class="submenu styles" id="styles" style="display: none;">
            <ul class="ul-submenu">
                <!-- li(es) is/are appended by jquery  for parts having mutiple styles -->
            </ul>
        </div>
        <!-- end-styles-menu -->


        <!-- start-color-menu -->
        <!-- 21 colors of majority of parts -->
        <div class="submenu color-menu major" style="display: none;">
            <span class="back-icon"><i class="fas fa-chevron-left"></i></span>
            <ul class="ul-submenu">
                <li class="submenu-li">Colors</li>
                <?php
                // 21 colors of majority of parts
                $clr = ['#751113', '#ff1e26', '#ff6600', '#feba27', '#ffff01', '#0d4f21', '#65ff00', '#47d4e5', '#4f8dfe', '#013ba7', '#ddb168', '#976005', '#8e00ce', '#dc0058', '#ffa7cf', '#ff4864', '#ffffff', '#c0c0c0', '#9a9a9a', '#4e2700', '#000000'];
                for ($i = 0; $i < sizeof($clr); $i++) {
                    echo "<li class='submenu-li'>
                            <div class='color-box' style='background-color: $clr[$i];'></div>
                        </li>";
                }
                ?>
            </ul>
        </div>

        <!-- 2 colors of case,strap etc of parts -->
        <div class="submenu color-menu other" style="display: none;">
            <span class="back-icon"><i class="fas fa-chevron-left"></i></span>
            <ul class="ul-submenu">
                <li class="submenu-li">Colors</li>
                <li class="submenu-li">
                    <div class="color-box" data-name="Black" style="background-color: #000000;"></div>
                </li>
                <li class="submenu-li">
                    <div class="color-box" data-name="Steel" style="background-color: #c0c0c0;"></div>
                </li>
            </ul>
        </div>

        <!--  diamond bezel colors -->
        <div class="submenu color-menu another" style="display: none;">
            <span class="back-icon"><i class="fas fa-chevron-left"></i></span>
            <ul class="ul-submenu">
                <li class="submenu-li">Colors</li>
                <li class="submenu-li">
                    <div class="color-box" data-name="1" style="background-color: white;"></div>
                </li>
                <li class="submenu-li">
                    <div class="color-box" data-name="Amesthy" style="background-color: purple;"></div>
                </li>
                <li class="submenu-li">
                    <div class="color-box" data-name="Green" style="background-color: green;"></div>
                </li>
                <li class="submenu-li">
                    <div class="color-box" data-name="Pink" style="background-color: #e55395;"></div>
                </li>
                <li class="submenu-li">
                    <div class="color-box" data-name="Rainbow" style="background: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet);"></div>
                </li>
                <li class="submenu-li">
                    <div class="color-box" data-name="rubby" style="background-color: darkred;"></div>
                </li>
            </ul>
        </div>
        <!-- end-color-menu -->

        <!-- start-tabs-bar -->
        <div class="row align-items-center justify-content-between m-0 p-0 tabs-bar">
            <div class="col-7 col-sm-2 p-0 m-0">
                <div class="config-icon">
                    <img src="img/config-01.svg" class="img-fluid w-25 p-0 m-0">
                    <span>configure</span>
                </div>
            </div>
            <div class="col-2 d-none d-sm-block p-0 m-0 logo-div">
                <h3>Minc</h3>
            </div>
        </div>
        <!-- end-tabs-bar -->

    </footer>
    <!-- end-footer -->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./js/myjs.js"></script>
    <script src="./js/main.js"></script>

    <script src="./js/html2canvas.js"></script>
    <script src="./js/canvas2image.js"></script>

</body>

<script>
    // $(document).on("click", ".resetCanvas", function() {
    //     $("#zoomOut").trigger("click");
    //     $(this).css("background-color", "inherit");
    // })


    // function getSvgData() {
    //     // $.get(`./watchSVG/Ai sub.svg`, null, function(data) {
    //     $.get(`./watchSVG/Daytona.svg`, null, function(data) {
    //         let svgdata = $(data).find("svg")[0];
    //         // console.log(svgdata);
    //         $("#2dwatch").append(svgdata);
    //     });
    //     $.get(`./watchSVG/Daytona.svg`, null, function(data) {
    //         let innerPreview = $(data).find("svg")[0];
    //         $(innerPreview).find("#Case,#Winder,#Strap,#Bezel,#Bezel_number").remove();
    //         $("#innerPreview").append(innerPreview);
    //         $("#innerPreview").css("transform", "scale(1.8)");
    //     });
    // }

    // getSvgData();
</script>

</html>