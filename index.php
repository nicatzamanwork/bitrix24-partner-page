<?php
$index = 'class="aktiv"';
$hakkimizda = '';

include_once "send_email.php";


session_start();
$langs = array('az','tr','rus','en');
if(!isset($_SESSION['lang'])){
    $_SESSION['lang'] = 'tr';

}
if(isset($_GET['lang']) && $_GET['lang']!=''){
    if(in_array($_GET['lang'], $langs)){
      $_SESSION['lang'] = $_GET['lang']; // Set session
    }
}
$lang_id=$_GET['lang'];
if($lang_id=='tr'){
    $lang_id='';
}
include('lang/'.$_SESSION['lang'].'.php');
$language1 = "";
$language2 = "";
$language3 = "";
$language4 = "";

switch ($_SESSION['lang']) {

    case 'az':
        $language1 = "<a style='padding: 29px 0 0 18px;' href='?lang=az' id='az'><img style='width: 20px;height: 20px;' src='assets/images/aze.webp' alt='az'/></a>";
        $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=tr' id='tr'><img style='width: 20px;height: 20px;' src='assets/images/tr.webp' alt='tr'/></a>";
        $language4 = "<a style='padding: 0 0 0 9px;' href='?lang=en' id='en'><img style='width: 20px;height: 20px;' src='assets/images/en.webp' alt='en'/></a>";
        break;

    case 'tr':
        $language1 = "<a style='padding: 29px 0 0 18px;' href='?lang=tr' id='tr'><img style='width: 20px;height: 20px;' src=' ' alt='tr'/></a>";
        $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=az' id='az'><img style='width: 20px;height: 20px;' src='assets/images/aze.webp' alt='az'/></a>";
        $language4 = "<a style='padding: 0 0 0 9px;' href='?lang=en' id='en'><img style='width: 20px;height: 20px;' src='assets/images/en.webp' alt='en'/></a>";
        break;



    case 'en':
        $language1 = "<a style='padding: 29px 0 0 18px;' href='?lang=en' id='en'><img style='width: 20px;height: 20px;' src='assets/images/en.webp' alt='en'/></a>";
        $language2 = "<a style='padding: 0 0 0 9px;' href='?lang=tr' id='tr'><img style='width: 20px;height: 20px;' src='assets/images/tr.webp' alt='tr'/></a>";
        $language4 = "<a style='padding: 0 0 0 9px;' href='?lang=az' id='az'><img style='width: 20px;height: 20px;' src='assets/images/aze.webp' alt='az'/></a>";
        break;

}

?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="Jpmwu0H1WPbzZWbu6Vhg1EkMc7mLbnTs318khtiia-w" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buta Grup - Bitrix24 Partner</title>
    <link rel="stylesheet" href="style.css?<?php echo time() ?>">
    <!-- versiya -->
    <!-- <link rel="stylesheet" href="styleforchoosebit.css"> -->

  
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
       integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">  -->

     <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script> -->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">  -->

    <link rel="stylesheet" href="assets/css/slick.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/slick-theme.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="194x194" href="/favicon-194x194.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#3e3d97">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Uzmanlarımız Bitrix24 abonelik planını seçmenize yardımcı olacak ve size Bulut (Cloud) veya Şirket içi (On-Premise) sürümü için ek ürün özelleştirme hizmetleri sağlayacak!">
    <meta name="keywords" contnet="bitrix24 vs clickup,Bitrix24 nedir?, bitrix24 erp,bitrix24 qiymetler, bitrix24 fiyatlar, bitrix24 vs hubspot, bitrix24 vs zoho, bitrix24 vs monday, bitrix24 vs asana, bitrix24 vs clickup, bitrix24 vs odoo, bitrix24 vs trello, bitrix24 how to download, bitrix24 is free, bitrix24 for hr">
    <?php if($_SESSION['lang'] == "en"){ ?>
    <style>
        #getEmail #send {
            padding: 9px 6px !important;
        }
    </style>
    <? }?>
</head>

<body>


    <style>
        .slider {
            mix-blend-mode: multiply;
        }

        @media screen and (max-device-width: 425px) {

            .Yourmessage {
                width: 50px !important;
            }
        }
    </style>


    <section id="headerBack">
        <div class="container">
            <div class="row">
                <?php include "header.php" ?>
                <h1 alt="bitrix24 erp"><?php echo $lang['headerBack1'] ?>
                </h1>
                <p class="headerP" alt="bitrix24 download">
                    <?php echo $lang['headerBack2'] ?>
                </p>
                <form action="add.php" id="getEmail" method="POST">
                    <input type="hidden" name="type" value="2">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" name="email"
                            placeholder="name@example.com" style="background:#f2f2f2">
                        <label for="floatingInput"><?php echo $lang['headerBack3'] ?> </label>
                        <button id="send"> <?php echo $lang['headerBack4'] ?> </button>


                    </div>

                </form>
                <!-- <button id ="Free-button" style="width: 280px" formtarget="_blank"
                    onclick="window.location.href = 'https://www.bitrix24.net/create/?user_lang=en&client_id=site.53889571c99248.40051848&referer=13589683&ga=GA1.2.1964990585.1630310937&bx_fbp=fb.1.1630310937731.1855069505&bx_fbc=fb.1.1643611126999.IwAR2fx4JlgN3QSFnScK-jc9MtbaO45Ll8ywY3at83LFiuFKC50akAekKE25w'"> <?php echo $lang['ChooseBitrix2'] ?></button> -->
                <a type="button"
                    href="https://bitrix24.net/create/?user_lang=en&client_id=site.53889571c99248.40051848&referer=13589683&ga=GA1.2.1964990585.1630310937&bx_fbp=fb.1.1630310937731.1855069505&bx_fbc=fb.1.1643611126999.IwAR2fx4JlgN3QSFnScK-jc9MtbaO45Ll8ywY3at83LFiuFKC50akAekKE25w"
                    target="_blank" class="button"><?php echo $lang['ChooseBitrix2'] ?> </a>
                <div class="registr-service">
                    <img alt="Bitrix24 abonelik" src="assets/images/Frame 163.png" style="width: 20px; height: 20px;">
                    <span><?php echo $lang['free-register'] ?> </span>
                    <img alt="bitrix24 pricing" src="assets/images/Frame 163.png" style="width: 20px; height: 20px;" class="ms-2">
                    <span><?php echo $lang['great-service'] ?> </span>
                </div>

                <h4 class="text-center pb-5" id="references"><?php echo $lang['headerBack5'] ?></h4>

                <div class="container" id="Referance-container">
                    <div class="row">
                        <div class="d-flex flex-column flex-lg-row">
                            <div class="col-12 col-lg-5 picturess slider">
                                <div class="slide-in-right slide">
                                    <img src="assets/images/Frame 166.webp" alt="Bitrix24 CINCI" style="width: 100%;">
                                </div>
                                <div class="slide-in-right slide">
                                    <img src="assets/images/cddd-removebg-preview.png" alt="Bitrix24 CINCI"
                                        style="width: 100%; margin-top:10% !important">
                                </div>
                                <div class="slide-in-right slide">
                                    <img src="assets/images/Frame 168.webp" alt="Bitrix24 DASTAN AGRO" style="width: 100%;">
                                </div>
                                <div class="slide-in-right slide">
                                    <img src="assets/images/musaid-removebg-preview (1).png" alt="DASTAN AGRO" style="width: 100%;">
                                </div>
                                <div class="slide-in-right slide">
                                    <img src="assets/images/Frame 167.webp" alt="Bitrix24 SIRIN SU" style="width: 100%;">
                                </div>
                                <div class="slide-in-right slide">
                                    <img src="assets/images/Frame 169.webp" alt="Bitrix24 CINCI" style="width: 100%;">
                                </div>
                                <div class="slide-in-right slide">
                                    <img src="assets/images/Frame 171.webp" alt="Bitrix24 DASTAN AGRO" style="width: 100%;">
                                </div>
                                <div class="slide-in-right slide">
                                    <img src="assets/images/Frame 170.webp" alt="Bitrix24 SIRIN SU" style="width: 100%;">
                                </div>
                                <div class="slide-in-right slide">
                                    <img src="assets/images/bayburt-logo.png" alt="Bitrix24 SIRIN SU" style="width: 100%;">
                                </div>
                                <div class="slide-in-right slide">
                                    <img alt="bitrix24 business process" src="assets/images/besting.png" style="width: 100%; margin-top:-17%">
                                </div>
                                <div class="slide-in-right slide">
                                    <img alt="bitrix24 business process" src="assets/images/logo-armira.png" alt="ARMIRA" style="width: 100%;">
                                </div>
                            </div>
                            <div class="vl d-none d-lg-block col-md-2"></div>
                            <div class="col-12 col-lg-5">
                                <p alt="bitrix24 quickbooks" class="Referance pt-1"><?php echo $lang['headerBack6'] ?></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        </div>
        </div>
    </section>

    <div class="container">
        <div class="all-referance text-center">
            <button class="mb-5" id="referance-button"> <?php echo $lang['headerBack7'] ?></button>

            <div class="row referance-show" id="referance-show-id" style="display: none;">
                <div class="col-12 col-md-6 col-lg-4 referance-logo">
                    <div>
                        <a href="https://ozguninsaat.com/" target="_blank"><img alt="Bitrix24 referance özgün"  src="assets/images/logo-ozgun.png"
                               ></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 referance-logo">
                    <div>
                        <a href="https://shirinsu.az/" target="_blank"><img alt="Bitrix24 referance özgün" src="assets/images/logo-sirin-Su.png"
                                ></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 referance-logo">
                    <div>
                        <a href="https://dastanagro.az/" target="_blank" alt="bitrix24 mac"><img alt="Bitrix24 referance özgün" src="assets/images/logo-DastanAgro.png"
                               ></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 referance-logo">
                    <div>
                        <a href="https://bayburtgrup.com.tr/" target="_blank" alt="bitrix24 mail" ><img  alt="Bitrix24 referance Bayburt" src="assets/images/logo-bayburt.png"
                                ></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 referance-logo">
                    <div>
                        <a href="https://musiad.az/" target="_blank" alt="Bitrix24 features"><img alt="Bitrix24 referance özgün" src="assets/images/musaid-removebg-preview (1).png"
                                ></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 referance-logo">
                    <div>
                        <a href="https://caspianic.com/" target="_blank" alt="bitrix24 alternatives"><img  alt="Bitrix24 referance özgün" src="assets/images/cddd-removebg-preview.png"
                                ></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 referance-logo">
                    <div>
                        <a href="http://entech.az/" target="_blank" alt="bitrix24 app"><img alt="Bitrix24 referance enTech" src="assets/images/logo-enTech.png" alt="what is bitrix24 used for"></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 referance-logo">
                    <div>
                        <a href="https://polymart.az/" target="_blank" alt="bitrix24 api"><img alt="Bitrix24 referance Polymart" src="assets/images/logo-polymart.png"
                                ></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 referance-logo">
                    <div>
                        <a href="https://cinici.az/" target="_blank" alt="bitrix24 offical"><img alt="Bitrix24 referance Cinici" src="assets/images/logo-cinici.png"
                               ></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 referance-logo">
                    <div>
                        <a href="https://besting.az/" target="_blank" alt="bitrix resmi partner"><img alt="Bitrix24 referance Besting" src="assets/images/besting.png" alt="Bitrix24 tools" height="131.29px"></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 referance-logo">
                    <div>
                        <a href="https://armira.com/en/" target="_blank" alt="bitrix partner"><img alt="Bitrix24 referance Armira" src="assets/images/logo-armira.png"
                                ></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="bitrixVideo" style="padding:25px">
        <iframe height="400" width="748" src="https://youtube.com/embed/qqXvFK4Z4cE" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
    </section>









    <!-- <section id="ChooseBitrix">
        <div class="container">
            <h1>
            <?php echo $lang['ChooseBitrix1']?>
            </h1> -->
    <!-- <button onClick="parent.location='https://www.bitrix24.net/create/?user_lang=en&client_id=site.53889571c99248.40051848&referer=13589683&ga=GA1.2.1964990585.1630310937&bx_fbp=fb.1.1630310937731.1855069505&bx_fbc=fb.1.1643611126999.IwAR2fx4JlgN3QSFnScK-jc9MtbaO45Ll8ywY3at83LFiuFKC50akAekKE25w'" formtarget="_blank">
            <?php echo $lang['ChooseBitrix2'] ?>
            </button> -->


    <!-- <button target="_blank"
                onclick="window.location.href = 'https://www.bitrix24.net/create/?user_lang=en&client_id=site.53889571c99248.40051848&referer=13589683&ga=GA1.2.1964990585.1630310937&bx_fbp=fb.1.1630310937731.1855069505&bx_fbc=fb.1.1643611126999.IwAR2fx4JlgN3QSFnScK-jc9MtbaO45Ll8ywY3at83LFiuFKC50akAekKE25w'"> <?php echo $lang['ChooseBitrix2'] ?></button> -->
    <!-- <div class="row">
                <div
                    class=" advantages d-flex flex-column flex-lg-row justify-content-center  justify-lg-content-between ">

                    <div class="advantages1 col-12 col-lg-4">
                        <h6> <?php echo $lang['ChooseBitrix3']?> </h6>
                        <p> <?php echo $lang['ChooseBitrix4'] ?> </p>
                    </div>
                    <div class="advantages2 col-12 col-lg-4">
                        <h6><?php echo $lang['ChooseBitrix5'] ?> </h6>
                        <p> <?php echo $lang['ChooseBitrix6'] ?>
                        </p>
                    </div>
                    <div class="advantages3 col-12 col-lg-4">
                        <h6><?php echo $lang['ChooseBitrix7'] ?></h6>
                        <p> <?php echo $lang['ChooseBitrix8'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section> -->




    <div class="container" id="hizmetlerimiz">
        <div class="row">
            <div class="col-8">
                <h1 alt="bitrix24 backup">
                    <?php echo $lang['ChooseBitrix1']?>
                </h1>
                <a type="button" alt="bitrix24 address"
                    href="https://bitrix24.net/create/?user_lang=en&client_id=site.53889571c99248.40051848&referer=13589683&ga=GA1.2.1964990585.1630310937&bx_fbp=fb.1.1630310937731.1855069505&bx_fbc=fb.1.1643611126999.IwAR2fx4JlgN3QSFnScK-jc9MtbaO45Ll8ywY3at83LFiuFKC50akAekKE25w"
                    target="_blank" class="button"><?php echo $lang['ChooseBitrix2'] ?> </a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 my-4 box">
                <p alt="bitrix24.by вход">
                    <div class="comon">
                        <img class="boxlar" src="graduation-cap.svg" alt="bitrix24 on premise">
                        <img src="3.svg" alt="bitrix24 partner portal">
                    </div><br>
                    <h6> <?php echo $lang['ChooseBitrix3']?> </h6>
                    <p> <?php echo $lang['ChooseBitrix4'] ?> </p>

                </p>
            </div>
            <div class="col-4"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 my-4 box">


                <p alt="bitrix24 business process">
                    <div class="comon">

                        <img class="boxlar" src="info.svg" alt="bitrix24 türkiye">
                        <img src="2.svg" alt="bitrix24 Azerbaycan">
                    </div>
                    <br>
                    <h6 alt="bitrix24 crm login"><?php echo $lang['ChooseBitrix5'] ?> </h6>
                    <p alt="bitrix24 coupon"> <?php echo $lang['ChooseBitrix6'] ?></p>

                </p>
            </div>
            <div class="col-4"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 my-4 box">


                <p alt="bitrix24">
                    <div class="comon">

                        <img class="boxlar" src="shopping-basket.svg" alt="bitrix24 website">
                        <img src="one.svg" alt="bitrix24 resmi partniyor">
                    </div> <br>
                    <h6 alt="bitrix24"><?php echo $lang['ChooseBitrix7'] ?></h6>
                    <p alt="bitrix24"> <?php echo $lang['ChooseBitrix8'] ?></p>
                </p>
            </div>
            <div class="col-8"></div>
        </div>
    </div>
    <style>
        #hizmetlerimiz {
            background-image: url('line.svg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        .box {
            margin-bottom: -6.5rem !important;
        }

        .boxlar {
            width: 15%;
            /* border: solid 1px; */
            border-radius: 20px;
            /* border-color: #5985F5; */
            animation: boxlar 1s linear infinite !important;

        }

        @keyframes boxlar {
            from {
                transform: rotate(0deg) translateX(12.5px) rotate(0deg);
            }

            to {
                transform: rotate(360deg) translateX(12.5px) rotate(-360deg);
            }
        }


        @media only screen and (min-width: 992px) and (max-width: 1216px) {
            #hizmetlerimiz {

                background-image: url("Vector\ 335\ \(3\).svg") !important;
            }

            .box {
                margin-bottom: -8rem !important;
            }
        }

        @media only screen and (min-width: 770px) and (max-width:1200px) {
            #caycicenfidan {

                background-image: url('Vector\ 335\ \(2\).svg') !important;
            }

            .box {
                margin-bottom: -16rem !important;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 990px) {
            #hizmetlerimiz {

                background-image: url("Vector\ 335\ \(6\).svg") !important;
            }
        }

        @media only screen and (min-width: 767px) and (max-width: 990px) {
            .box {

                margin-bottom: -16rem !important;

            }
        }

        @media only screen and (min-width: 426px) and (max-width: 767px) {
            #hizmetlerimiz {

                background-image: url("Vector\ 335\ \(1\).svg") !important;
            }
        }

        @media only screen and (min-width: 320px) and (max-width: 426px) {
            #hizmetlerimiz {
                background-image: url("Vector\ 335\ \(1\).svg") !important;
            }

            .box {
                margin-bottom: -0.5rem !important;
            }

        }

        

    </style>

























    <section id="computers">
        <div class="container2">
            <div class="carousel">
                <div style="padding-left: 150px;"><img src="assets/images/comp1.png"   alt="bitrix24 mobile app"/></div>
                <div style="padding-left: 150px; "><img src="assets/images/comp2.png"  alt="bitrix24 marketing"/></div>
                <div style="padding-left: 150px; "><img src="assets/images/comp3.png"  alt="bitrix24 partners"/></div>
                <div style="padding-left: 150px; "><img src="assets/images/comp4.png"  alt="bitrix24"/></div>
            </div>
            <div class="carousel">
                <div style="margin-right: 170px;"><img src="assets/images/comp5.png"  alt="bitrix24 windows"/></div>
                <div style="margin-right: 170px; "><img src="assets/images/comp4.png"  alt="bitrix24 workflow"/></div>
                <div style="margin-right: 170px; "><img src="assets/images/comp5.png"  alt="bitrix24 crm"/></div>
                <div style="margin-right: 170px; "><img src="assets/images/comp2.png"  alt="bitrix24 crm pricing"/></div>
            </div>
        </div>
    </section>


    <section id="prices">
        <div class="container">
            <div class="row">
                <h2 alt="Bitrix24 on premise" class="text-center"><?php echo $lang['prices1'] ?></h2>
                <p class="text-center fiyatlar-p" alt="CRM software"
                    style="margin-bottom: 3rem; font-size:21px; font-family:-apple-system,system-ui,BlinkMacSystemFont !important;">
                    <?php echo $lang['prices2'] ?></p>
                <div class="row">
                    <div class="btn-container" id='switch-flex'>
                        <label class="switch btn-color-mode-switch" style="top:-25px">
                            <input type="checkbox" role="checkbox" name="color_mode" id="color_mode" value="Y"
                                name="select_product" onclick="ChangePrices()">
                            <label for="color_mode" data-on="12 AY" data-off="3 AY"
                                class="btn-color-mode-switch-inner"></label>
                            <div class="percent">
                                <span>-20%</span>
                            </div>
                        </label>


                    </div>
                </div>
            </div>
        </div>
        <div class="cards" id="fiyatPlan">
            <div class="container container-fluid container-scroll">
                <div class="d-flex justify-content-between">
                    <div>
                        <div class="single-table1 text-center">
                            <div class="plan-header">
                                <h3 alt="Bitrix24 On premise pricing"><?php echo $lang['prices3'] ?> </h3>
                                <p alt="Bitrix24 on-premise free" class="Plan-header-p"> <?php echo $lang['prices4'] ?></p>
                                <h4 alt="Bitrix24 on-premise download" style="color:#7C9B00;"> <?php echo $lang['prices5'] ?></h4>
                                <p alt="Download Bitrix24 for Android" class="pricesPlan"> <?php echo $lang['prices6'] ?> </p>
                                <p alt="Bitrix24 mobile app login" style="padding-bottom: 30px;">5GB</p>
                            </div>


                            <ul class="plan-features"
                                style="background-color:#F5FDD6;text-align:left; padding-bottom: 479px;">
                                <li class="hr-vector kollaborasiya"> <?php echo $lang['prices']?> <img
                                        src="assets/images/Frame 160.png" alt="what is bitrix24 crm" style="padding-left: 22px;">
                                    <ol>
                                        <li class="altlist"><?php echo $lang['prices7'] ?> </li>
                                        <li class="altlist"><?php echo $lang['prices8'] ?> </li>
                                        <li class="altlist"><?php echo $lang['prices9'] ?> </li>
                                        <li class="altlist"><?php echo $lang['prices10'] ?> </li>
                                        <li class="altlist"><?php echo $lang['prices11'] ?> </li>
                                        <li class="altlist"><?php echo $lang['prices12'] ?> </li>

                                    </ol>
                                </li>


                                <li class="hr-vector"><?php echo $lang['prices13'] ?> <img
                                        src="assets/images/Frame 160.png" alt="What is Bitrix24 used for?" style="padding-left: 7px;"></li>
                                <li class="hr-vector"><?php echo $lang['prices14'] ?> <img
                                        src="assets/images/Frame 160.png" alt="What type of software is Bitrix24?" style="padding-left: 7px;"></li>
                                <li class="hr-vector"><?php echo $lang['prices15'] ?> <img
                                        src="assets/images/Frame 160.png" alt="Is Bitrix24 a CRM tool?" style="padding-left: 7px;"></li>
                                <li class="hr-vector"><?php echo $lang['prices16'] ?> <img
                                        src="assets/images/Frame 160.png" alt="What are CRM systems?" style="padding-left: 7px;"></li>
                                <li class="hr-vector"><?php echo $lang['prices17'] ?> <img
                                        src="assets/images/Frame 160.png" alt="CRM crm" style="padding-left: 7px;"></li>
                            </ul>

                        </div>
                    </div>

                    <div>
                        <div class="single-table2 text-center">
                            <div class="plan-header">
                                <h3 alt="Bitrix24 Türkiye ortağı"><?php echo $lang['basic1'] ?> </h3>
                                <p alt="Bitrix24 on the App Store" class="Plan-header-p"><?php echo $lang['basic2'] ?></p>
                                <h4 alt="Bitrix24 CRM And Projects - Apps on Google Play" style="color:#0085AF;" class="plan-price" id='first-price'>$147</h4>
                                <p alt="Bitrix24 app" class="pricesPlan"><?php echo $lang['basic3'] ?></p>
                                <p alt="Bitrix24 iphone app" style="padding-bottom: 30px;">24GB</p>
                            </div>
                            <ul class="plan-features"
                                style="background-color:#E7F9FF;text-align:left; padding-bottom: 100px;">
                                <li class="hr-vector kollaborasiya"><?php echo $lang['prices']?> <img
                                        src="assets/images/Frame 161.png" alt="Bitrix24 Wikipedia" style="padding-left: 22px;">
                                    <ol>
                                        <li class="altlist"><?php echo $lang['basic4'] ?></li>
                                        <li class="altlist"><?php echo $lang['basic5'] ?></li>
                                        <li class="altlist"><?php echo $lang['basic6'] ?></li>
                                        <li class="altlist"><?php echo $lang['basic7'] ?></li>
                                        <li class="altlist"><?php echo $lang['basic8'] ?></li>
                                        <li class="altlist"><?php echo $lang['basic9'] ?></li>

                                    </ol>
                                </li>
                                <li class="hr-vector"><?php echo $lang['basic10'] ?> <img
                                        src="assets/images/Frame 161.png" alt="what can bitrix24 do" style="padding-left: 22px;"></li>

                                <li class="hr-vector"><?php echo $lang['basic11'] ?> <img
                                        src="assets/images/Frame 161.png" alt="Bitrix24Care" style="padding-left: 7px;">
                                </li>

                                <li class="hr-vector"><?php echo $lang['basic12'] ?> <img
                                        src="assets/images/Frame 161.png" alt="What's Bitrix24?" style="padding-left: 22px;"></li>

                                <li class="hr-vector"><?php echo $lang['basic13'] ?> <img
                                        src="assets/images/Frame 161.png" alt="Collaboration " style="padding-left: 22px;"></li>

                                <li class="hr-vector"><?php echo $lang['basic14'] ?> <img
                                        src="assets/images/Frame 161.png" alt="Project Management" style="padding-left: 6px;">
                                </li>

                                <li class="hr-vector"><?php echo $lang['basic15'] ?> <img
                                        src="assets/images/Frame 161.png" alt="Document Management" style="padding-left: 22px;">
                                </li>

                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br />
                                <br />
                                <li class="hr-vector"><?php echo $lang['basic16'] ?> <img
                                        src="assets/images/Frame 161.png" alt="Time Management" style="padding-left: 22px;"></li>
                                <br>
                                <br>
                            </ul>

                        </div>
                    </div>
                    <div>
                        <div class="single-table3 text-center">
                            <div class="plan-header">
                                <h3 alt="Bitrix24 nedir?"><?php echo $lang['standart1'] ?> </h3>
                                <p alt="Bitrix24; CRM, Proje Yönetimi, Web Sitesi Oluşturucu, Telefon, Sohbet, Görüntülü Arama" class="Plan-header-p"><?php echo $lang['standart2'] ?></p>
                                <h4 alt="CRM, Proje Yönetimi, Web Sitesi Oluşturucu, Telefon, Sohbet, Görüntülü Arama" style="color:#0085AF;" class="plan-price" id='second-price'>$297</h4>
                                <p alt="Proje Yönetimi, Web Sitesi Oluşturucu, Telefon, Sohbet, Görüntülü Arama" class="pricesPlan"><?php echo $lang['standart3'] ?></p>
                                <p alt="Web Sitesi Oluşturucu" style="padding-bottom: 30px;">100GB</p>
                            </div>


                            <ul class="plan-features"
                                style="background-color:#E7F9FF;text-align:left; padding-bottom: 49px;">
                                <li class="hr-vector kollaborasiya"><?php echo $lang['standart4'] ?> <img
                                        src="assets/images/Frame 161.png" alt="HR" style="padding-left: 76px;">
                                    <ol>
                                        <li class="altlist"><?php echo $lang['standart5'] ?></li>
                                        <li class="altlist"><?php echo $lang['standart6'] ?></li>
                                        <li class="altlist"><?php echo $lang['standart7'] ?></li>
                                        <li class="altlist"><?php echo $lang['standart8'] ?></li>
                                        <li class="altlist"><?php echo $lang['standart9'] ?></li>
                                        <li class="altlist"><?php echo $lang['standart10'] ?></li>

                                    </ol>
                                </li>
                                <li class="hr-vector"><?php echo $lang['standart11'] ?><img
                                        src="assets/images/Frame 161.png" alt="API/developers" style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['standart12'] ?> <img
                                        src="assets/images/Frame 161.png" alt="Bitrix24 on-premise edition" style="padding-left: 7px;">
                                </li>
                                <li class="hr-vector"><?php echo $lang['standart13'] ?> <img
                                        src="assets/images/Frame 161.png" alt="Bitrix24 Status page" style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['standart14'] ?> <img
                                        src="assets/images/Frame 161.png" alt="Bitrix24 Media kit" style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['standart15'] ?> <img
                                        src="assets/images/Frame 161.png" alt="Bitrix24 partner login" style="padding-left: 7px;">
                                </li>
                                <li class="hr-vector"><?php echo $lang['standart16'] ?> <img
                                        src="assets/images/Frame 161.png" alt="Bitrix24 CRM Marketing" style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['standart17'] ?> <img
                                        src="assets/images/Frame 161.png" alt="What is the key competitive advantage of Bitrix24?" style="padding-left: 7px;">
                                </li>
                                <li class="hr-vector"><?php echo $lang['standart18'] ?><img
                                        src="assets/images/Frame 161.png" alt="Is Bitrix24 easy to use?" style="padding-left: 22px;"></li>
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <li class="hr-vector"><?php echo $lang['standart19'] ?> <img
                                        src="assets/images/Frame 161.png" alt="bitrix24 hipaa compliant" style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['standart20'] ?><img
                                        src="assets/images/Frame 161.png" alt="bitrix24 helpdesk module" style="padding-left: 7px;">
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div>
                        <div class="single-table4 text-center">
                            <div class="plan-header">
                                <h3 alt="Offical Partner of Bitrix24"><?php echo $lang['professional1'] ?> </h3>
                                <p alt="Bitrix24 subscription" class="Plan-header-p"><?php echo $lang['professional2'] ?> </p>
                                <h4 alt="Bitrix24 subscription plan" style="color:#0085AF;" class="plan-price" id='third-price'>$597</h4>
                                <p alt="Bitrix24 subscription plan" class="pricesPlan"><?php echo $lang['professional3'] ?></p>
                                <p alt="customization services for the Cloud" style="padding-bottom: 30px;">1,024GB</p>
                            </div>


                            <ul class="plan-features"
                                style="background-color:#E7F9FF;text-align:left; padding-bottom: 20px;">
                                <li class="hr-vector kollaborasiya "><?php echo $lang['professional4'] ?> <img
                                        src="assets/images/Frame 162.png" alt="bitrix24 hrm" style="padding-left: 22px;">
                                    <ol>
                                        <li class="altlist"><?php echo $lang['professional5'] ?> </li>
                                        <li class="altlist"><?php echo $lang['professional6'] ?> </li>
                                        <li class="altlist"><?php echo $lang['professional7'] ?> </li>
                                        <li class="altlist"><?php echo $lang['professional8'] ?> </li>
                                        <li class="altlist"><?php echo $lang['professional9'] ?> </li>
                                        <li class="altlist"><?php echo $lang['professional10'] ?> </li>

                                    </ol>

                                </li>
                                <li class="hr-vector"><?php echo $lang['professional11'] ?> <img
                                        src="assets/images/Frame 162.png" alt="bitrix24 free" style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['professional12'] ?> <img
                                        src="assets/images/Frame 162.png" alt="bitrix24 features" style="padding-left: 5px;"></li>
                                <li class="hr-vector"><?php echo $lang['professional13'] ?> <img
                                        src="assets/images/Frame 162.png" alt="bitrix24 free download" style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['professional14'] ?> <img
                                        src="assets/images/Frame 162.png" alt="bitrix24 free plan" style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['professional15'] ?> <img
                                        src="assets/images/Frame 162.png" alt="bitrix24 founder" style="padding-left: 7px;"></li>
                                <li class="hr-vector"><?php echo $lang['professional16'] ?> <img
                                        src="assets/images/Frame 162.png" alt="bitrix24 free version" style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['professional17'] ?> <img
                                        src="assets/images/Frame 162.png" alt="bitrix24 forms" style="padding-left: 5px;">
                                </li>
                                <li class="hr-vector"><?php echo $lang['professional18'] ?> <img
                                        src="assets/images/Frame 162.png" alt="bitrix24 erp" style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['professional19'] ?> <img
                                        src="assets/images/Frame 162.png" alt="bitrix24 email" style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['professional20'] ?> <img
                                        src="assets/images/Frame 162.png" alt="bitrix24 email marketing" style="padding-left: 3px;"></li>
                                <li class="hr-vector"><?php echo $lang['professional21'] ?> <img
                                        src="assets/images/Frame 162.png" alt="bitrix24 export data" style="padding-left: 7px;"></li>

                                <li class="hr-vector"><?php echo $lang['professional22'] ?><img
                                        src="assets/images/Frame 162.png" alt="bitrix24 ecommerce" style="padding-left: 22px;"> </li>
                                <li class="hr-vector"><?php echo $lang['professional23'] ?> <img
                                        src="assets/images/Frame 162.png" alt="bitrix24 extension" style="padding-left: 22px; "></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="Price-section">
        <div class="container">
            <div class="row style='margin-bottom: 23px'">
                <div class="getPrice col-12 col-lg-8">
                    <h2 alt="Bitrix Türkiye"><?php echo $lang['price-section1'] ?> </h2>
                    <p  alt="Bitrix Azerbaycan"><?php echo $lang['price-section2'] ?></p>
                </div>


                <div style="display:flex;justify-content:center" class="pricing-items col-6 col-lg-4 text-center">
                    <div style="margin-left:auto;margin-right:auto" class="pricing-item">
                        <div class="pricing-item-inner">
                            <div class="pricing-item-content">
                                <div class="pricing-item-header">
                                    <div class="pricing-item-title">
                                        <p alt="bitrix24 integrations" class="pricing-item-title"></p>
                                    </div>
                                    <div class="pricing-item-price" data-price-output='{
                                      "0": ["$", "2.990", ""],
                                      "1": ["$", "4.990", ""],
                                      "2": ["$", "8.990", ""],
                                      "3": ["$", "14.990", ""],
                                      "4": ["$", "24.990", ""],
                                      "5": ["$", "45.990", ""],
                                      "6": ["$", "59.990", ""]
                                    }'>
                                        <span class="pricing-item-price-currency">$</span>
                                        <span class="pricing-item-price-amount">13</span>
                                        <span class="pricing-item-price-after">/m</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="pricing-slider col-12">
                    <label class="form-slider">
                        <span><?php echo $lang['istifadeci-sayi'] ?></span>
                        <input list="tickmarks" class="input-range" type="range" data-price-input='{
                                  "0": "50",
                                  "1": "100",
                                  "2": "250",
                                  "3": "500",
                                  "4": "1000",
                                  "5": "5000",
                                  "6": "UNLIMITED"
                                }' />
                    
                    </label>
                    <div class="pricing-slider-value"></div>
                </div>


            </div>
        </div>
    </section>

    <section id="Program">
        <div class="container">
            <div class="row" id="contactsection">
                <div class="col-12 col-md-6">
                    <p alt="bitrix24 Azerbaycan" class="ButaBitrix text-uppercase"><?php echo $lang['program1'] ?></p>
                    <h1 alt="bitrix24 Azerbaycan partnyoru"><?php echo $lang['program2'] ?> </h1>
                    <p alt="bitrix24 Azerbaycan resmi" class="business"><?php echo $lang['program3'] ?>

                        <div class="iletisim pb-5" style="line-height:25px;">
                            <svg width="15px" xmlns="http://w3.org/2000/svg" viewBox="0 0 384 512">
                                <path fill="#403f96"
                                    d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z" />
                            </svg> <a alt="bitrix24 Ankara" href="">Anıttepe Mah, Işık Sok. No: 20 06570 Çankaya /
                                ANKARA</a> <br>
                            <svg width="15px" xmlns="http://w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="#403f96"
                                    d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z" />
                            </svg><a alt="bitrix24 qiymetler" href="tel:08503022882"> 0850 302 28 82</a> <br>
                            <svg width="15px" xmlns="http://w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="#403f96"
                                    d="M192 64h197.5L416 90.51V160h64V77.25c0-8.484-3.375-16.62-9.375-22.62l-45.25-45.25C419.4 3.375 411.2 0 402.8 0H160C142.3 0 128 14.33 128 32v128h64V64zM64 128H32C14.38 128 0 142.4 0 160v320c0 17.62 14.38 32 32 32h32c17.62 0 32-14.38 32-32V160C96 142.4 81.63 128 64 128zM480 192H128v288c0 17.6 14.4 32 32 32h320c17.6 0 32-14.4 32-32V224C512 206.4 497.6 192 480 192zM288 432c0 8.875-7.125 16-16 16h-32C231.1 448 224 440.9 224 432v-32C224 391.1 231.1 384 240 384h32c8.875 0 16 7.125 16 16V432zM288 304c0 8.875-7.125 16-16 16h-32C231.1 320 224 312.9 224 304v-32C224 263.1 231.1 256 240 256h32C280.9 256 288 263.1 288 272V304zM416 432c0 8.875-7.125 16-16 16h-32c-8.875 0-16-7.125-16-16v-32c0-8.875 7.125-16 16-16h32c8.875 0 16 7.125 16 16V432zM416 304c0 8.875-7.125 16-16 16h-32C359.1 320 352 312.9 352 304v-32C352 263.1 359.1 256 368 256h32C408.9 256 416 263.1 416 272V304z" />
                            </svg> <a>0312 229 00 10</a> <br>
                            <svg width="15px" xmlns="http://w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="#403f96"
                                    d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z" />
                            </svg>
                            <a alt="bitrix24 fiyatlar" href="mailto:info@butagrup.com.tr">info@butagrup.com.tr</a>

                        </div>
                    </p>


                </div>
                <div class="Programinputs col-12 col-md-6">
                    <form action="add.php" method="POST" class="form_class">
                        <input type="hidden" name="type" value="1">
                        <label for="#">
                            <input type="text" name="name" class="val" id="NameSurname" required
                                placeholder="<?php echo $lang['ad-soyad'] ?> ">
                        </label>
                        <label for="#">
                            <input type="email" name="email" class="val" id="EmailAddress" required
                                placeholder="<?php echo $lang['email-address'] ?> ">
                        </label>
                        <label for="#">
                            <input type="text" name="phone" class="val" id="telefon" required
                                placeholder="<?php echo $lang['telefon'] ?> ">
                        </label>
                        <label for="#">
                            <input type="text" name="company" class="val" id="company" required
                                placeholder="<?php echo $lang['sirket'] ?> ">
                        </label>
                        <label for="#">
                            <textarea style="width:370px" id="Yourmessage" class="Yourmessage" name="message"
                                cols="46.5" rows="3" required placeholder="<?php echo $lang['message'] ?> "></textarea>
                            <!-- <input type="text" id="YourMessage" placeholder="<?php echo $lang['message'] ?> "> -->
                        </label>
                        <button style='margin-bottom: 30px;' onclick="show_alert();" alt="Mesajınız göndərilmişdir"
                            value="Submit"><?php echo $lang['program4'] ?> </button>
                    </form>
                    <script>
                        function show_alert() {
                            form = document.querySelector(".form_class")
                            form_ele = form.querySelectorAll(".val")
                            console.log(form_ele);
                            if (form_ele[0].value == "" || form_ele[1].value == "" || form_ele[2].value == "" ||
                                form_ele[3].value == "") {
                                alert("<?php echo $lang['alertfailure'] ?>");
                            } else {
                                alert("<?php echo $lang['alertsuccess'] ?>")
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
    </section>
    <style>
        .iletisim a {
            text-decoration: none !important;
            color: white !important;
            font-size: 15px !important;
            padding-left: 5px;
        }
    </style>

    <footer>
        <div class="container">
            <div class="row footerDiv ">
                <div class="DivText col-12 col-md-12 col-lg-4 mb-3">
                    <a href="https://butagrup.com.tr/" target="_blank"><img src="assets/images/butalogo.webp"
                            alt="Butagrup" class="ButaGrupFooterLogo"></a>
                    <p alt="Turkiye" class="footerText"><?php echo $lang['text-footer1'] ?></p>


                    <a alt="Butagrup Turkiye" href="https://linkedin.com/company/butagruptr/" target='_blank'><i
                            class="fa-brands fa-linkedin-in"></i></a>
                    <a alt="Turkiye bitrix24" href="https://facebook.com/butagruptr" target='_blank'><i
                            class="fa-brands fa-facebook-square"></i></a>
                    <a alt="Turkiye bitrix" href="https://twitter.com/butagruptr" target='_blank'> <i class="fa-brands fa-twitter"></i></a>
                    <a alt="Bitrix Turkiye" href="https://instagram.com/accounts/login/?next=/butagruptr/" target='_blank'><i
                            class="fa-brands fa-instagram"></i></a>


                </div>

                <div id="DivImg" class="col-12 col-md-6 col-lg-4 text-center">
                    <img src="assets/images/bitrix silver partner-1.jpg" alt="bitrix24 CERTIFICATE" type="button"
                        style="-webkit-border-image: none;" class=" footerCertifcate" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                </div>

                <div class="pages col-12 col-md-6 col-lg-4 text-center mt-4" style="margin-left: -30px;">
                <ul class="ms-5 d-lg-block">
                        <h6 alt="bitrix24 baku" style="font-size:24px !important; font-weight:700"><?php echo $lang['text-footer2'] ?> </h6>
                        <a alt="bitrix24 Azerbaycan" href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>" class="text-decoration-none">
                            <li><?php echo $lang['text-footer3'] ?> </li>
                        </a>
                        <a alt="bitrix24 nedir?" href="<?php echo 'hakkimizda2.php?lang='.$_SESSION['lang'];?>" class="text-decoration-none">
                            <li><?php echo $lang['text-footer4'] ?> </li>
                        </a>
                        
                        <a alt="bitrix24 nedir?" href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>#Referance-container" class="text-decoration-none">
                            <li><?php echo $lang['text-footer7'] ?> </li>
                        </a>
                        <a href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>#hizmetlerimiz" class="text-decoration-none">
                            <li><?php echo $lang['text-footer5'] ?> </li>
                        </a>

                        <a href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>#prices" class="text-decoration-none">
                            <li><?php echo $lang['text-footer6'] ?> </li>
                        </a>
                       
                        <a href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>#Program" class="text-decoration-none">
                            <li><?php echo $lang['text-footer8'] ?> </li>
                        </a>
                    </ul>

                </div>



            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">

                    <img id="modalImg" src="assets/images/bitrix silver partner-1.jpg" alt="bitrix CERTIFICATE">
                </div>
            </div>
        </div>
        <hr />
        <p class="reserv"><a href="https://butagrup.com.tr/" target="_blank" class="text-decoration-none"
                style="color: #000;"><?php echo $lang['text-footer9'] ?> </a> <?php echo $lang['text-footer10'] ?> </p>
    </footer>

    <!-- <link rel="stylesheet" href="script.js"> -->
    <section>
        <script>
            (function (w, d, u) {
                var s = d.createElement('script');
                s.async = true;
                s.src = u + '?' + (Date.now() / 60000 | 0);
                var h = d.getElementsByTagName('script')[0];
                h.parentNode.insertBefore(s, h);
            })(window, document, 'https://cdn.bitrix24.com/b16547215/crm/site_button/loader_2_1854rj.js');
        </script>
    </section>

    <script src="assets/js/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script> -->
    <script src="assets/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
     <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>   -->
    <script src="assets/js/slick.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script> -->
    <script src="assets/js/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <!-- <script src="https://unpkg.com/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script> -->



    <script src="script.js?<?php echo time() ?>"></script>
  

    
<script>

    



    $(function() {
    var win = $(window);
  
    resizeHandler();
  
    win.resize(resizeHandler);
  
    function resizeHandler() {
      if (win.width() > 1199) {
       document.getElementById("fiyatPlan").innerHTML = "";
        $("#fiyatPlan").append(`<div class="container">
                    <div class="row text-center justify-content-center">
                        <div class="col-md-3">
                        <div class=" text-center">
                            <div class="plan-header pt-3">
                                <h3 alt="bitrix24 resmi"><?php echo $lang['prices3'] ?> </h3>
                                <p alt="bitrix24 qiymeti" class="Plan-header-p"> <?php echo $lang['prices4'] ?></p>
                                <h4 alt="bitrix24 prices" style="color:#7C9B00;"> <?php echo $lang['prices5'] ?></h4>
                                <p alt="bitrix24 fiyatlar" class="pricesPlan"> <?php echo $lang['prices6'] ?> </p>
                                <p alt="bitrix24 partner" style="padding-bottom: 30px;">5GB</p>


                            </div>


                            <ul class="plan-features"
                                style="background-color:#F5FDD6;text-align:left; padding-bottom: 479px;">
                                <li class="hr-vector kollaborasiya">  <?php echo $lang['prices']?> <img src="assets/images/Frame 160.png" alt="bitrix24 headquarters"
                                        style="padding-left: 22px;">
                                    <ol>
                                        <li class="altlist"><?php echo $lang['prices7'] ?> </li>
                                        <li class="altlist"><?php echo $lang['prices8'] ?> </li>
                                        <li class="altlist"><?php echo $lang['prices9'] ?> </li>
                                        <li class="altlist"><?php echo $lang['prices10'] ?> </li>
                                        <li class="altlist"><?php echo $lang['prices11'] ?> </li>
                                        <li class="altlist"><?php echo $lang['prices12'] ?> </li>

                                    </ol>
                                </li>
                                

                                <li class="hr-vector" ><?php echo $lang['prices13'] ?> <img src="assets/images/Frame 160.png" alt="Bitrix24 login"
                                        style="padding-left: 7px;"></li>
                                <li class="hr-vector"><?php echo $lang['prices14'] ?>  <img src="assets/images/Frame 160.png" alt="Bitrix24 download" style="padding-left: 7px;"></li>
                                <li class="hr-vector"><?php echo $lang['prices15'] ?> <img src="assets/images/Frame 160.png" alt="Bitrix24 review"
                                        style="padding-left: 7px;"></li>
                                <li class="hr-vector"><?php echo $lang['prices16'] ?> <img src="assets/images/Frame 160.png" alt="Bitrix24 app"
                                        style="padding-left: 7px;"></li>
                                <li class="hr-vector"><?php echo $lang['prices17'] ?>  <img src="assets/images/Frame 160.png" alt="bitrix24 google analytics"
                                        style="padding-left: 7px;"></li>
                            </ul>

                        </div>
                        </div>
                        <div class="col-md-3">
                        <div class=" text-center">
                            <div class="plan-header  pt-3">
                                <h3 alt="BİTRİX24 Çevrimiçi Belgeler"><?php echo $lang['basic1'] ?> </h3>
                                <p alt="BİTRİX24  SİLVER PARTNERİYİZ!" class="Plan-header-p" ><?php echo $lang['basic2'] ?></p>
                                <h4 alt="BİTRİX24 Müşteri Desteği"  style="color:#0085AF;" class="plan-price" id='first-price' >$147</h4>
                                <p alt="Bitrix24  çevrimdışı sürümü" class="pricesPlan"><?php echo $lang['basic3'] ?></p>
                                <p alt="BİTRİX24 Şirket İçi Lisans Fiyatları" style="padding-bottom: 30px;">24GB</p>
                            </div>
                            <ul class="plan-features"
                                style="background-color:#E7F9FF;text-align:left; padding-bottom: 100px;">
                                <li class="hr-vector kollaborasiya" ><?php echo $lang['prices']?>  <img src="assets/images/Frame 161.png" alt="Bitrix24 Türkiye"
                                        style="padding-left: 22px;">
                                    <ol>
                                        <li class="altlist"><?php echo $lang['basic4'] ?></li>
                                        <li class="altlist"><?php echo $lang['basic5'] ?></li>
                                        <li class="altlist"><?php echo $lang['basic6'] ?></li>
                                        <li class="altlist"><?php echo $lang['basic7'] ?></li>
                                        <li class="altlist"><?php echo $lang['basic8'] ?></li>
                                        <li class="altlist"><?php echo $lang['basic9'] ?></li>

                                    </ol>
                                </li>
                                <li class="hr-vector"><?php echo $lang['basic10'] ?> <img src="assets/images/Frame 161.png" alt="Bitrix24 Business Plan"
                                        style="padding-left: 22px;"></li>
                               
                                <li class="hr-vector"><?php echo $lang['basic11'] ?> <img src="assets/images/Frame 161.png" alt="Bitrix24 Special Plan" style="padding-left: 7px;">
                                </li>
                               
                                <li class="hr-vector"><?php echo $lang['basic12'] ?> <img src="assets/images/Frame 161.png" alt=" Bitrix Türkiye"
                                        style="padding-left: 22px;"></li>
                               
                                <li class="hr-vector"><?php echo $lang['basic13'] ?> <img src="assets/images/Frame 161.png" alt="Müşteri yönetimi"
                                        style="padding-left: 22px;"></li>
                               
                                <li class="hr-vector"><?php echo $lang['basic14'] ?> <img src="assets/images/Frame 161.png" alt="CRM"
                                        style="padding-left: 6px;">
                                </li>
                               
                                <li class="hr-vector"><?php echo $lang['basic15'] ?> <img src="assets/images/Frame 161.png" alt="Bitrix iş ortağı"
                                        style="padding-left: 22px;">
                                </li>
                                
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br />
                                <br />
                                <li class="hr-vector"><?php echo $lang['basic16'] ?></li>
                                <br>
                                <br>
                            </ul>

                        </div>
                        </div>
                        <div class="col-md-3">
                        <div class=" text-center">
                            <div class="plan-header  pt-3">
                                <h3 alt="bitrix24 free"><?php echo $lang['standart1'] ?> </h3>
                                <p alt="What are the features of Bitrix24?" class="Plan-header-p"><?php echo $lang['standart2'] ?></p>
                                <h4 alt="Main Bitrix24 features include" style="color:#0085AF;" class="plan-price" id='second-price'>$297</h4>
                                <p alt="CRM Bitrix24" class="pricesPlan"><?php echo $lang['standart3'] ?></p>
                                <p alt="bitrix24 iletişim" style="padding-bottom: 30px;">100GB</p>
                            </div>


                            <ul class="plan-features"
                                style="background-color:#E7F9FF;text-align:left; padding-bottom: 49px;">
                                <li class="hr-vector kollaborasiya"><?php echo $lang['standart4'] ?> <img src="assets/images/Frame 161.png" alt="Bitrix24 Azerbaycan"
                                        style="padding-left: 76px;">
                                    <ol>
                                        <li class="altlist"><?php echo $lang['standart5'] ?></li>
                                        <li class="altlist"><?php echo $lang['standart6'] ?></li>
                                        <li class="altlist"><?php echo $lang['standart7'] ?></li>
                                        <li class="altlist"><?php echo $lang['standart8'] ?></li>
                                        <li class="altlist"><?php echo $lang['standart9'] ?></li>
                                        <li class="altlist"><?php echo $lang['standart10'] ?></li>

                                    </ol>
                                </li>
                                <li class="hr-vector"><?php echo $lang['standart11'] ?><img src="assets/images/Frame 161.png" alt="Cloud"
                                        style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['standart12'] ?> <img src="assets/images/Frame 161.png" alt="Bulut" style="padding-left: 7px;">
                                </li>
                                <li class="hr-vector"><?php echo $lang['standart13'] ?> <img src="assets/images/Frame 161.png" alt="On-Premise"
                                        style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['standart14'] ?> <img src="assets/images/Frame 161.png" alt="Şirket içi "
                                        style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['standart15'] ?>  <img src="assets/images/Frame 161.png" alt="Bakü"
                                        style="padding-left: 7px;">
                                </li>
                                <li class="hr-vector"><?php echo $lang['standart16'] ?> <img src="assets/images/Frame 161.png" alt="Bitrix24 iş ortağı"
                                        style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['standart17'] ?> <img src="assets/images/Frame 161.png" alt="Görev yönetimi" style="padding-left: 7px;">
                                </li>
                                <li class="hr-vector"><?php echo $lang['standart18'] ?><img src="assets/images/Frame 161.png" alt="Ekip yönetimi"
                                        style="padding-left: 22px;"></li>
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <br />
                                <li class="hr-vector"><?php echo $lang['standart19'] ?></li>
                                <li class="hr-vector"><?php echo $lang['standart20'] ?><img src="assets/images/Frame 161.png" alt="Müşteri ilişkileri" style="padding-left: 7px;">
                                </li>
                            </ul>

                        </div>
                        </div>
                        <div class="col-md-3">
                        <div class="text-center">
                            <div class="plan-header  pt-3">
                                <h3 alt="bitrix24 teklif al"><?php echo $lang['professional1'] ?> </h3>
                                <p alt="bitrix24 Ücretsiz kayıt " class="Plan-header-p"><?php echo $lang['professional2'] ?> </p>
                                <h4 alt="bitrix24 Referans" style="color:#0085AF;" class="plan-price" id='third-price'>$597</h4>
                                <p alt="bitrix24 Doğru Ürün Seçme"class="pricesPlan"><?php echo $lang['professional3'] ?></p>
                                <p alt="Bitrix24 Bulut ya da Şirket İçi lisanslarını Buta Grup üzerinden alan kuruluşlara" style="padding-bottom: 30px;">1,024GB</p>
                            </div>


                            <ul class="plan-features"
                                style="background-color:#E7F9FF;text-align:left; padding-bottom: 20px;">
                                <li class="hr-vector kollaborasiya "  ><?php echo $lang['professional4'] ?>  <img src="assets/images/Frame 162.png" alt="Bitrix Ankara"
                                        style="padding-left: 22px;">
                                    <ol>
                                        <li class="altlist"><?php echo $lang['professional5'] ?> </li>
                                        <li class="altlist"><?php echo $lang['professional6'] ?> </li>
                                        <li class="altlist"><?php echo $lang['professional7'] ?> </li>
                                        <li class="altlist"><?php echo $lang['professional8'] ?> </li>
                                        <li class="altlist"><?php echo $lang['professional9'] ?> </li>
                                        <li class="altlist"><?php echo $lang['professional10'] ?> </li>

                                    </ol>
                                  
                                </li>
                                <li class="hr-vector"><?php echo $lang['professional11'] ?> <img src="assets/images/Frame 162.png" alt="Bitrix Azerbaycan"
                                        style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['professional12'] ?> <img src="assets/images/Frame 162.png" alt="bitrix24 wordpress" style="padding-left: 5px;"></li>
                                <li class="hr-vector"><?php echo $lang['professional13'] ?> <img src="assets/images/Frame 162.png" alt="where is bitrix24 based"
                                        style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['professional14'] ?> <img src="assets/images/Frame 162.png" alt="bitrix24 crm features"
                                        style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['professional15'] ?> <img src="assets/images/Frame 162.png" alt="bitrix24 crm review"
                                        style="padding-left: 7px;"></li>
                                <li class="hr-vector"><?php echo $lang['professional16'] ?> <img src="assets/images/Frame 162.png" alt="bitrix24 call center"
                                        style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['professional17'] ?>  <img src="assets/images/Frame 162.png" alt="bitrix24 coupon" style="padding-left: 5px;">
                                </li>
                                <li class="hr-vector"><?php echo $lang['professional18'] ?> <img src="assets/images/Frame 162.png" alt="bitrix24 crm tutorial"
                                        style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['professional19'] ?> <img src="assets/images/Frame 162.png" alt="bitrix24 crm login"
                                        style="padding-left: 22px;"></li>
                                <li class="hr-vector"><?php echo $lang['professional20'] ?> <img src="assets/images/Frame 162.png" alt="bitrix24 crm"
                                        style="padding-left: 3px;"></li>
                                <li class="hr-vector"><?php echo $lang['professional21'] ?> <img src="assets/images/Frame 162.png" alt="bitrix24 business process" style="padding-left: 7px;"></li>

                                <li class="hr-vector"><?php echo $lang['professional22'] ?> </li>
                                <li class="hr-vector"><?php echo $lang['professional23'] ?> <img src="assets/images/Frame 162.png" alt="bitrix24 backup"
                                        style="padding-left: 22px; "></li>
                            </ul>

                        </div>
                        </div>
                    </div>
                </div>`)
  
      } else {
        console.log("kicikdi")
        document.getElementById("fiyatPlan").innerHTML = "";
       $("#fiyatPlan").append(`<div class="container container-fluid container-scroll">
        <div class="d-flex justify-content-between">
            <div>
                <div class="single-table1 text-center">
                    <div class="plan-header">
                        <h3 alt="bitrix24 invoice" ><?php echo $lang['prices3'] ?> </h3>
                        <p alt="bitrix24 helpdesk module" class="Plan-header-p"> <?php echo $lang['prices4'] ?></p>
                        <h4 alt="bitrix24 import contacts" style="color:#7C9B00;"> <?php echo $lang['prices5'] ?></h4>
                        <p alt="bitrix24 installation" class="pricesPlan"> <?php echo $lang['prices6'] ?> </p>
                        <p alt="bitrix24 inventory management" style="padding-bottom: 30px;">5GB</p>


                    </div>


                    <ul class="plan-features"
                        style="background-color:#F5FDD6;text-align:left; padding-bottom: 479px;">
                        <li class="hr-vector kollaborasiya">  <?php echo $lang['prices']?> <img src="assets/images/Frame 160.png" alt="Bitrix24 resmi partniyor"
                                style="padding-left: 22px;">
                            <ol>
                                <li class="altlist"><?php echo $lang['prices7'] ?> </li>
                                <li class="altlist"><?php echo $lang['prices8'] ?> </li>
                                <li class="altlist"><?php echo $lang['prices9'] ?> </li>
                                <li class="altlist"><?php echo $lang['prices10'] ?> </li>
                                <li class="altlist"><?php echo $lang['prices11'] ?> </li>
                                <li class="altlist"><?php echo $lang['prices12'] ?> </li>

                            </ol>
                        </li>
                        

                        <li class="hr-vector" ><?php echo $lang['prices13'] ?> <img src="assets/images/Frame 160.png" alt="Bitrix24 Download for Windows 10"
                                style="padding-left: 7px;"></li>
                        <li class="hr-vector"><?php echo $lang['prices14'] ?>  <img src="assets/images/Frame 160.png" alt="bitrix24 gmail integration" style="padding-left: 7px;"></li>
                        <li class="hr-vector"><?php echo $lang['prices15'] ?> <img src="assets/images/Frame 160.png" alt="bitrix24 github"
                                style="padding-left: 7px;"></li>
                        <li class="hr-vector"><?php echo $lang['prices16'] ?> <img src="assets/images/Frame 160.png" alt="bitrix24 how to use"
                                style="padding-left: 7px;"></li>
                        <li class="hr-vector"><?php echo $lang['prices17'] ?>  <img src="assets/images/Frame 160.png" alt="bitrix24 hr"
                                style="padding-left: 7px;"></li>
                    </ul>

                </div>
            </div>

            <div >
                <div class="single-table2 text-center">
                    <div class="plan-header">
                        <h3><?php echo $lang['basic1'] ?> </h3>
                        <p class="Plan-header-p" ><?php echo $lang['basic2'] ?></p>
                        <h4 style="color:#0085AF;" class="plan-price" id='first-price' >$147</h4>
                        <p class="pricesPlan"><?php echo $lang['basic3'] ?></p>
                        <p style="padding-bottom: 30px;">24GB</p>
                    </div>
                    <ul class="plan-features"
                        style="background-color:#E7F9FF;text-align:left; padding-bottom: 100px;">
                        <li class="hr-vector kollaborasiya" ><?php echo $lang['prices']?>  <img src="assets/images/Frame 161.png" alt="bitrix24 helpdesk"
                                style="padding-left: 22px;">
                            <ol>
                                <li class="altlist"><?php echo $lang['basic4'] ?></li>
                                <li class="altlist"><?php echo $lang['basic5'] ?></li>
                                <li class="altlist"><?php echo $lang['basic6'] ?></li>
                                <li class="altlist"><?php echo $lang['basic7'] ?></li>
                                <li class="altlist"><?php echo $lang['basic8'] ?></li>
                                <li class="altlist"><?php echo $lang['basic9'] ?></li>

                            </ol>
                        </li>
                        <li class="hr-vector"><?php echo $lang['basic10'] ?> <img src="assets/images/Frame 161.png" alt="bitrix24 dashboard"
                                style="padding-left: 22px;"></li>
                       
                        <li class="hr-vector"><?php echo $lang['basic11'] ?> <img src="assets/images/Frame 161.png" alt="bitrix24 developer" style="padding-left: 7px;">
                        </li>
                       
                        <li class="hr-vector"><?php echo $lang['basic12'] ?> <img src="assets/images/Frame 161.png" alt="bitrix24 delete account"
                                style="padding-left: 22px;"></li>
                       
                        <li class="hr-vector"><?php echo $lang['basic13'] ?> <img src="assets/images/Frame 161.png" alt="bitrix24 documentation"
                                style="padding-left: 22px;"></li>
                       
                        <li class="hr-vector"><?php echo $lang['basic14'] ?> <img src="assets/images/Frame 161.png" alt="bitrix24 business vs enterprise"
                                style="padding-left: 6px;">
                        </li>
                       
                        <li class="hr-vector"><?php echo $lang['basic15'] ?> <img src="assets/images/Frame 161.png" alt="bitrix24 for multi-channel communication"
                                style="padding-left: 22px;">
                        </li>
                        
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br />
                        <br />
                        <li class="hr-vector"><?php echo $lang['basic16'] ?></li>
                        <br>
                        <br>
                    </ul>

                </div>
            </div>
            <div >
                <div class="single-table3 text-center">
                    <div class="plan-header">
                        <h3><?php echo $lang['standart1'] ?> </h3>
                        <p class="Plan-header-p"><?php echo $lang['standart2'] ?></p>
                        <h4 style="color:#0085AF;" class="plan-price" id='second-price'>$297</h4>
                        <p class="pricesPlan"><?php echo $lang['standart3'] ?></p>
                        <p style="padding-bottom: 30px;">100GB</p>
                    </div>


                    <ul class="plan-features"
                        style="background-color:#E7F9FF;text-align:left; padding-bottom: 49px;">
                        <li class="hr-vector kollaborasiya"><?php echo $lang['standart4'] ?> <img src="assets/images/Frame 161.png" alt="bitrix24 vs hubspot"
                                style="padding-left: 76px;">
                            <ol>
                                <li class="altlist"><?php echo $lang['standart5'] ?></li>
                                <li class="altlist"><?php echo $lang['standart6'] ?></li>
                                <li class="altlist"><?php echo $lang['standart7'] ?></li>
                                <li class="altlist"><?php echo $lang['standart8'] ?></li>
                                <li class="altlist"><?php echo $lang['standart9'] ?></li>
                                <li class="altlist"><?php echo $lang['standart10'] ?></li>

                            </ol>
                        </li>
                        <li class="hr-vector"><?php echo $lang['standart11'] ?><img src="assets/images/Frame 161.png" alt="bitrix24 vs zoho"
                                style="padding-left: 22px;"></li>
                        <li class="hr-vector"><?php echo $lang['standart12'] ?> <img src="assets/images/Frame 161.png" alt="bitrix24 vs" style="padding-left: 7px;">
                        </li>
                        <li class="hr-vector"><?php echo $lang['standart13'] ?> <img src="assets/images/Frame 161.png" alt="bitrix24 vs monday"
                                style="padding-left: 22px;"></li>
                        <li class="hr-vector"><?php echo $lang['standart14'] ?> <img src="assets/images/Frame 161.png" alt="bitrix24 vs asana"
                                style="padding-left: 22px;"></li>
                        <li class="hr-vector"><?php echo $lang['standart15'] ?>  <img src="assets/images/Frame 161.png" alt="bitrix24 vs clickup"
                                style="padding-left: 7px;">
                        </li>
                        <li class="hr-vector"><?php echo $lang['standart16'] ?> <img src="assets/images/Frame 161.png" alt="bitrix24 vs odoo"
                                style="padding-left: 22px;"></li>
                        <li class="hr-vector"><?php echo $lang['standart17'] ?> <img src="assets/images/Frame 161.png" alt="bitrix24 offical partner" style="padding-left: 7px;">
                        </li>
                        <li class="hr-vector"><?php echo $lang['standart18'] ?><img src="assets/images/Frame 161.png" alt="bitrix24 vs trello"
                                style="padding-left: 22px;"></li>
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <br />
                        <li class="hr-vector"><?php echo $lang['standart19'] ?></li>
                        <li class="hr-vector"><?php echo $lang['standart20'] ?><img src="assets/images/Frame 161.png" alt="bitrix24 zapier" style="padding-left: 7px;">
                        </li>
                    </ul>

                </div>
            </div>
            <div>
                <div class="single-table4 text-center">
                    <div class="plan-header">
                        <h3 alt="Bitrix24 review"><?php echo $lang['professional1'] ?> </h3>
                        <p alt="Bitrix24 review Reddit" class="Plan-header-p"><?php echo $lang['professional2'] ?> </p>
                        <h4 alt="Bitrix24 vs Agile CRM Comparison" style="color:#0085AF;" class="plan-price" id='third-price'>$597</h4>
                        <p alt="Bitrix24 competitors" class="pricesPlan"><?php echo $lang['professional3'] ?></p>
                        <p alt="Websites using Bitrix" style="padding-bottom: 30px;">1,024GB</p>
                    </div>


                    <ul class="plan-features"
                        style="background-color:#E7F9FF;text-align:left; padding-bottom: 20px;">
                        <li class="hr-vector kollaborasiya "  ><?php echo $lang['professional4'] ?>  <img src="assets/images/Frame 162.png" alt="bitrix24 zoominfo"
                                style="padding-left: 22px;">
                            <ol>
                                <li class="altlist"><?php echo $lang['professional5'] ?> </li>
                                <li class="altlist"><?php echo $lang['professional6'] ?> </li>
                                <li class="altlist"><?php echo $lang['professional7'] ?> </li>
                                <li class="altlist"><?php echo $lang['professional8'] ?> </li>
                                <li class="altlist"><?php echo $lang['professional9'] ?> </li>
                                <li class="altlist"><?php echo $lang['professional10'] ?> </li>

                            </ol>
                          
                        </li>
                        <li class="hr-vector"><?php echo $lang['professional11'] ?> <img src="assets/images/Frame 162.png" alt="bitrix24 zendesk"
                                style="padding-left: 22px;"></li>
                        <li class="hr-vector"><?php echo $lang['professional12'] ?> <img src="assets/images/Frame 162.png" alt="bitrix24 zoho" style="padding-left: 5px;"></li>
                        <li class="hr-vector"><?php echo $lang['professional13'] ?> <img src="assets/images/Frame 162.png" alt="bitrix24 zeiterfassung"
                                style="padding-left: 22px;"></li>
                        <li class="hr-vector"><?php echo $lang['professional14'] ?> <img src="assets/images/Frame 162.png" alt="bitrix24 zadarma"
                                style="padding-left: 22px;"></li>
                        <li class="hr-vector"><?php echo $lang['professional15'] ?> <img src="assets/images/Frame 162.png" alt="bitrix24 zabbix"
                                style="padding-left: 7px;"></li>
                        <li class="hr-vector"><?php echo $lang['professional16'] ?> <img src="assets/images/Frame 162.png" alt="bitrix x-frame-options"
                                style="padding-left: 22px;"></li>
                        <li class="hr-vector"><?php echo $lang['professional17'] ?>  <img src="assets/images/Frame 162.png" alt="bitrix xml_id" style="padding-left: 5px;">
                        </li>
                        <li class="hr-vector"><?php echo $lang['professional18'] ?> <img src="assets/images/Frame 162.png" alt="bitrix xss"
                                style="padding-left: 22px;"></li>
                        <li class="hr-vector"><?php echo $lang['professional19'] ?> <img src="assets/images/Frame 162.png" alt="biktrix xd"
                                style="padding-left: 22px;"></li>
                        <li class="hr-vector"><?php echo $lang['professional20'] ?> <img src="assets/images/Frame 162.png" alt="bitrix, bitrix24"
                                style="padding-left: 3px;"></li>
                        <li class="hr-vector"><?php echo $lang['professional21'] ?> <img src="assets/images/Frame 162.png" alt="Bitrix Buta Grup" style="padding-left: 7px;"></li>

                        <li class="hr-vector"><?php echo $lang['professional22'] ?> </li>
                        <li class="hr-vector"><?php echo $lang['professional23'] ?> <img src="assets/images/Frame 162.png" alt="Buta Grup"
                                style="padding-left: 22px; "></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>`)
  
      }
    }
  
  });


    let safariView = window.matchMedia('(min-width:320px) and (max-width: 520px)');
    SafariMobileCheck(safariView) // Call listener function at run time
    safariView.addListener(SafariMobileCheck) // Attach listener function on state changes

  if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
    
    function SafariMobileCheck(SafariScreen) {
         if (SafariScreen.matches) { // If media query matches
            document.getElementById("modalImg").style.width="304px";
            document.getElementById("modalImg").style.heigth="406px";
            document.getElementById("modalImg").style.marginLeft ="23px";
         } 
         else {
            document.getElementById("modalImg").style.width="33rem";
         }
    }
    
    }
    
    


 


</script>
<script>
        $(document).on('click', function (event) {
if (!$(event.target).closest('#navbardi').length) {
    $(".navbar-collapse").collapse('hide');
}})

 </script>   

</body>

</html>