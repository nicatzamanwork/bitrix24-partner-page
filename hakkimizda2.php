<?php
$index = 'class="aktiv"';
$hakkimizda = '';

include_once "send_email.php";
?>

<?php
session_start();

// What languages do we support
$available_langs = array('tr','en','az');

// Set our default language session
$_SESSION['lang'] = 'tr';

if(isset($_GET['lang']) && $_GET['lang'] != ''){
  // check if the language is one we support
  if(in_array($_GET['lang'], $available_langs))
  {
    $_SESSION['lang'] = $_GET['lang']; // Set session
  }
}

require_once './lang/'.$_SESSION['lang'].'.php';

    $currentLang =$_GET['lang'];
    $langId = $_GET['id'];
?>

<?php

$logo = "";
$logo2 = "";
$logo3 = "";

$facebook = "";
$instagram = "";
$linkedin = "";
$twitter = "";


switch ($_SESSION['lang']) {

    case 'az':
        $logo = '<a  class="langActive" style="background-color: honeydew; appearance: auto;"><img style="width:20px;" src="https://bitrix.butagrup.com.tr/assets/images/aze.webp" alt=""></a>';
        $logo3 = '<a href="?lang=tr"><img style="width:20px;" src="https://bitrix.butagrup.com.tr/assets/images/tr.webp" alt=""></a>';
        $logo2 ='<a href="?lang=en"><img style="width:20px;" src="https://bitrix.butagrup.com.tr/assets/images/en.webp" alt=""></a>';

        $facebook = '<a href="https://www.facebook.com/ButaGrupAz"  target="_blank"><i class="fa-brands fa-facebook-square"></i></a>';
        $instagram = ' <a href="https://www.instagram.com/butagrup.az/"  target="_blank"><i
        class="fa-brands fa-instagram"></i></a>';
        $linkedin = '<a href="https://www.linkedin.com/company/butagrupaz/mycompany/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>';
        // $twitter = '<a href="https://twitter.com/butagruptr"  target="_blank"> <i class="fa-brands fa-twitter"></i></a>';

        break;

    case 'tr':
        $logo = '<a  class="langActive" style="background-color: honeydew; appearance: auto;"><img style="width:20px;" src="https://bitrix.butagrup.com.tr/assets/images/tr.webp" alt=""></a>';
        $logo2 ='<a href="?lang=en"><img style="width:20px;" src="https://bitrix.butagrup.com.tr/assets/images/en.webp" alt=""></a>';
        $logo3 = '<a href="?lang=az"><img style="width:20px;" src="https://bitrix.butagrup.com.tr/assets/images/aze.webp" alt=""></a>';

        $facebook = '<a href="https://www.facebook.com/butagruptr"  target="_blank"><i class="fa-brands fa-facebook-square"></i></a>';
        $instagram = ' <a href="https://www.instagram.com/accounts/login/?next=/butagruptr/"  target="_blank"><i class="fa-brands fa-instagram"></i></a>';
        $linkedin = '<a href="https://www.linkedin.com/company/butagruptr/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>';
        $twitter = '<a href="https://twitter.com/butagruptr"  target="_blank"> <i class="fa-brands fa-twitter"></i></a>';

        break;

    case 'en':
        $logo = '<a class="langActive" style="background-color: honeydew; appearance: auto; "><img style="width:20px;" src="https://bitrix.butagrup.com.tr/assets/images/en.webp" alt=""></a>';
        $logo3 = '<a href="?lang=tr"><img style="width:20px;" src="https://bitrix.butagrup.com.tr/assets/images/tr.webp" alt=""></a>';
        $logo2 = '<a href="?lang=az"><img style="width:20px;" src="https://bitrix.butagrup.com.tr/assets/images/aze.webp" alt=""></a>';
       
       
    
        $facebook = '<a href="https://www.facebook.com/butagruptr"  target="_blank"><i class="fa-brands fa-facebook-square"></i></a>';
        $instagram = ' <a href="https://www.instagram.com/accounts/login/?next=/butagruptr/"  target="_blank"><i
        class="fa-brands fa-instagram"></i></a>';
        $linkedin = '<a href="https://www.linkedin.com/company/butagruptr/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>';
        $twitter = '<a href="https://twitter.com/butagruptr"  target="_blank"> <i class="fa-brands fa-twitter"></i></a>';


        break;

}

?>

<style>
    <style>@media (min-width: 992px) {
        .navbar-expand-lg .navbar-collapse {

            justify-content: space-around !important;
        }
    }

    @media screen and (min-width: 992px) {
        #navbar-nav menu {
            width: 20% !important;
            margin-left: 5% !important;

        }
    }

    @media screen and (min-width: 992px)and (max-width: 1078px) {
        #logobitrix {
            width: 10rem !important;

        }
    }

    @media screen and (min-width: 1080px)and (max-width: 2560px) {
        #logobitrix {
            width: 10rem !important;
        }
    }

    @media screen and (max-width: 487px) {
        #logobitrix {
            width:10rem !important;
        }
    }

    @media screen and (min-width: 487px) and (max-width: 991px) {
        #logobitrix {
            width: 10rem !important;
        }
    }

    @media screen and (min-width: 1080px) {
        #logobitrix {
            width: 10rem !important;

        }
    }

    .dropdown-menu {
        min-width: 3rem !important;
    }

    .btn-check:focus+.btn,
    .btn:focus {
        box-shadow: none !important;
    }

    .navbar-light .navbar-nav .nav-link {
        color: black !important;
    }

    #headerBack a:hover {
        color: blue !important;
    }


    .card {
        width: 21%;
        margin-left: 3%;
        border: none !important;
        margin: auto;
    }

    .card img {
        width: 90%;
        border-radius: 50%;
        margin-top: 3px !important;
        margin-bottom: 3px !important;
    }

    .Border {
        width: 65%;
        height: 65%;
        border-radius: 50%;
        border: 2px solid #23A7D0;
        margin: auto;
        position: relative;
    }

    .icons {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: inline-block;
        position: relative;
        background-color: #fff;
        border: 2px solid #23A7D0;
    }

    .Border .fb {
        position: absolute;
        top: 17%;
        left: 87%;
    }

    .Border .tw {
        position: absolute;
        top: 22%;
        left: 89%;
    }

    .Border .ln {
        position: absolute;
        top: 46%;
        left: 93%;
    }

    .Border .g {
        position: absolute;
        top: 70%;
        left: 85%;
    }

    .icons i {
        font-size: 16px;
        position: absolute;
        color:  #23A7D0;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
    }

    .card h5 {
        letter-spacing: 2px;
    }

    @media only screen and (max-width: 992px) {
        .card {
            width: 40%;
        }
    }

    @media only screen and (max-width: 768px) {
        .card {
            width: 40%;
        }
    }

    @media only screen and (max-width: 576px) {
        .card {
            width: 70%;
        }
    }

    /* ------------------------------------- */
    footer {
        padding-top: 67px;
    }

    .ButaGrupFooterLogo {
        width: 179px;
        padding-bottom: 23px;
    }

    .footerText {
        color: #757095;
        text-align: justify;
        font-family: 'Manrope', sans-serif;
        font-weight: 500;
    }

    .footerCertifcate {
        width: 213px;
    }

    .pages h6 {
        font: 700 24px var(--man);
    }

    .pages li {
        padding-top: 10px;
        list-style-type: none;
        color: #181433;
    }

    .reserv {
        font: 500 16px var(--man);
        line-height: 26px;
        letter-spacing: -2%;
        text-align: center;
        color: #000;
    }

    .DivText a i {
        color: #3734A9;
        padding-left: 15px;
        font-size: 23px;
    }

    /* _________Responsivlik____________ */

    @media only screen and (max-width: 1440px) {
        #ChooseBitrix {
            background-image: url('assets/images/Frame\ 169.png') !important;
        }

        #getEmail .form-control {
            width: 45%;
        }
    }

    @media only screen and (min-width: 1400px) {
        #headerBack {
            background-image: url(assets/images/Back.png) !important;
            background-size: cover;
        }

        .headerP {
            width: 50% !important;
        }

        /* ThirdSection-------------------------- */
        .Programinputs textarea {
            width: 98% !important;
        }
    }

    @media only screen and (min-width: 992px) {
        #ChooseBitrix {
            background-image: url("assets/images/2.png");
        }

        .vl {
            margin-left: -4px;
            margin-right: 38px;
        }

        #bitrixVideo iframe {
            width: 50%;
        }

        #getEmail .form-control {
            width: 34%;
        }
    }



    @media only screen and (min-width: 768px) {
        #headerBack {
            background-image: url(assets/images/Frame\ 124.png);
        }

        .headerP {
            width: 50%;
        }

        .picturess {
            background: none !important;
        }

        .picturess img {
            width: 50%;
        }

        .slider {
            background-color: none !important;
        }

        .btn-color-mode-switch-inner {
            margin-left: -92px;
        }

        .percent {
            margin-left: 0px;
        }

        /* Footer----------------------- */
        .footerCertifcate {
            padding-top: 36px;
            margin-left: 45px;
        }
    }
</style>

</style>
<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang'] ?>">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buta Grup - Bitrix24 Partner</title>
    <link rel="stylesheet" href="style.css?<?php echo time() ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" /> -->


</head>

<body>
    <section id="section-hakkimizda" style="background:#23a7d0;">
   
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbardi"
            style="width: 63%;z-index:1; margin-left: 20%; background: white;opacity:0.8;border-bottom-left-radius: 26px;border-bottom-right-radius: 26px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">

            <div class="container-fluid">
            <a style="width:30%;" href="https://bitrix.butagrup.com.tr/"> <img src="assets/images/bitrix logo.webp" id="logobitrix"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                    <a class="nav-link" href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['menu1'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo 'hakkimizda2.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['text-footer4'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>#Referance-container"><?php echo $lang['menu3'] ?></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>#hizmetlerimiz"><?php echo $lang['menu2'] ?></a>
                </li>
                
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>#prices"><?php echo $lang['menu4'] ?></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>#Program"><?php echo $lang['menu5'] ?></a>
                </li>
 

                        <style>
                            .dropbtn2 {
                                background-color: transparent;
                                color: navy;
                                padding: 10px;
                                font-size: 16px;
                                border: none;
                                cursor: pointer;
                            }

                            .dropdown2 {
                                position: relative;
                                display: inline-block;
                            }

                            .dropdown2-content {
                                display: none;
                                position: absolute;
                                background-color: #f9f9f9;
                                min-width: fit-content;
                                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                                z-index: 1;
                                left:-6px;
                            }

                            .dropdown2-content a {
                                color: black;
                                padding: 12px 16px;
                                text-decoration: none;
                                display: block;
                            }

                            .dropdown2-content a:hover {
                                background-color: #f1f1f1
                            }

                            .dropdown2:hover .dropdown2-content {
                                display: block;
                            }

                            .dropdown2:hover .dropbtn2 {
                                background-color: transparent;
                            }
                            
 @media screen and (min-width:320px) and (max-width:425px) {
    #navbardi{
    margin-left: 16% !important;
    position: fixed;
    width: 70% !important;
    background: white;
    opacity: 0.8;
    border-bottom-left-radius: 26px;
    border-bottom-right-radius: 26px;
    box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
    }
    
    
}
@media screen and (min-width:995px) and (max-width:1320px) {
    #navbardi{
   
    position: fixed;
    width: 70%  !important;
    background: white;
    opacity: 0.8;
    border-bottom-left-radius: 26px;
    border-bottom-right-radius: 26px;
    box-shadow: rgb(100 100 111 / 20%) 0px 7px 29px 0px;
    }
    
    
}
                        </style>
                        <li class="dropdown2">
                            <button class="dropbtn2" style="border:none; margin-top:4px;"> <?php echo $logo ?></button>
                            <div class="dropdown2-content">
                                <?php echo $logo2 ?>
                                <?php echo $logo3 ?>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="container pt-5">
            <div class="row">
                <div class="col-12 col-lg-6 " style="margin-top:30px">
                    <h2 style="color:white;"><?php echo $lang['hakkimizdaPage'] ?></h2>
                    <p style="color:white;"> <?php echo $lang['HakkimizdaButaGrup'] ?></p>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <img src="assets/images/1.webp" style="width:50%;" alt="">
                </div>
            </div>
        </div>
    </section>
    <div class="container" style="margin-top:5%;">
        <div class="row">
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="Border"><img src="assets/images/AlimSenturk.webp" class="mt-3 mb-3" alt="">
                    <a href="#" class="icons fb" type="button"> <img src="certificate.png" data-bs-toggle="modal"
                            data-bs-target="#AlimSenturk"></a>
                    <a href="https://www.linkedin.com/in/alims/" target="blank" class="icons ln"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <h3 class=" d-flex justify-content-center" style="font-size:21px;">Alim Şentürk</h3>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="AlimSenturk" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <img src="assets/images/AlimSenturkCertifcate.webp" alt="CERTIFICATE">
                    </div>
                </div>
            </div>
            <!-- --------------------- -->

            <div class="card col-12 col-md-6 col-lg-4">

                <div class="Border"><img src="assets/images/Ebru.webp" class="mt-3 mb-3" alt="">
                    <a href="#" class="icons fb" data-bs-toggle="modal" type="button"
                        data-bs-target="#EbruEdanurŞenturk"><img
                            src="certificate.png"></a>
                    <a href="https://www.linkedin.com/in/ebru-edanur-%C5%9Fent%C3%BCrk-754440148/" target="blank"
                        class="icons ln"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <h3 class=" d-flex justify-content-center" style="font-size:21px;">Ebru Edanur Şentürk</h3>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="EbruEdanurŞenturk" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <img src="assets/images/EbruCertifcate.jpg" alt="CERTIFICATE">
                    </div>
                </div>
            </div>

            <!-- --------------------- -->
            <div class="card col-12 col-md-6 col-lg-4">

                <div class="Border"><img src="assets/images/Aydan.webp" class="mt-3 mb-3" alt="">
                    <a href="" class="icons fb" data-bs-toggle="modal" type="button" data-bs-target="#Aydan"><img
                            src="certificate.png"></a>
                    <a href="https://www.linkedin.com/in/aydan-isgandarova-773b991a4/" target="blank"
                        class="icons ln"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <h3 class=" d-flex justify-content-center" style="font-size:21px;">Aydan İsgenderova</h3>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="Aydan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <img src="assets/images/AydanCertifcate.webp" alt="CERTIFICATE">
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="Border"><img src="assets/images/Amil.webp" class="mt-3 mb-3" alt="">
                    <a href="" class="icons fb" data-bs-toggle="modal" type="button" data-bs-target="#Amil"><img
                            src="certificate.png" alt="CERTIFICATE"></a>
                    <a href="https://www.linkedin.com/in/amilars/" target="blank" class="icons ln"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <h3 class=" d-flex justify-content-center" style="font-size:21px;">Amil Rüstəmli</h3>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="Amil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <img src="assets/images/AmilCertifcate.jpg" alt="CERTIFICATE">
                    </div>
                </div>
            </div>

            <!-- --------------------- -->
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="Border"><img src="assets/images/Nazrin.webp" class="mt-3 mb-3" alt="">
                    <a href="" class="icons fb" data-bs-toggle="modal" type="button" data-bs-target="#Nezrin"><img
                            src="certificate.png"></a>
                    <a href="https://www.linkedin.com/in/nazrin-bakhishli-357086167/" target="blank" class="icons ln"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <h3 class=" d-flex justify-content-center" style="font-size:21px;">Nezrin Bakışlı</h3>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="Nezrin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <img src="assets/images/NezrinCertifcate.webp" alt="CERTIFICATE">
                    </div>
                </div>
            </div>


            <!-- --------------------- -->
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="Border"><img src="assets/images/Hurriyet.webp" class="mt-3 mb-3" alt="">
                    <a href="" class="icons fb" data-bs-toggle="modal" type="button" data-bs-target="#Huriyyet"><img
                            src="certificate.png"></a>
                    <a href="https://www.linkedin.com/in/huriyyat-shahmuradova-564a46213/" target="blank"
                        class="icons ln"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <h3 class=" d-flex justify-content-center" style="font-size:21px;">Hüriyyət Şahmuradova</h3>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="Huriyyet" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <img src="assets/images/HuriyyetCertifcate.jpg" alt="CERTIFICATE">
                    </div>
                </div>
            </div>
            <!-- --------------------- -->

        </div>
    </div>
    </div>


    <footer>
        <div class="container">
            <div class="row footerDiv ">
                <div class="DivText col-12 col-md-12 col-lg-4 mb-3">
                    <a href="https://www.butagrup.com.tr/" target="_blank"><img src="assets/images/butalogo.webp"
                            alt="Butagrup" class="ButaGrupFooterLogo"></a>
                    <p class="footerText"><?php echo $lang['text-footer1'] ?></p>
                    <a href="https://www.linkedin.com/company/butagruptr/"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://www.facebook.com/butagruptr"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com/butagruptr"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.instagram.com/accounts/login/?next=/butagruptr/"><i
                            class="fab fa-instagram"></i></a>

                </div>
                <div id="DivImg" class="col-12 col-md-6 col-lg-4 text-center">
                    <img src="assets/images/bitrix silver partner-1.jpg" alt="CERTIFICATE" class="footerCertifcate" type="button"
                       data-bs-toggle="modal" data-bs-target="#exampleModal" style="-webkit-border-image: none;">
                </div>

                <div class="pages col-12 col-md-6 col-lg-4 text-center mt-4" style="margin-left: -30px;">

                    <ul class="ms-5 d-lg-block">
                        <h6 style="font-size:24px !important; font-weight:700"><?php echo $lang['text-footer2'] ?> </h6>
                        <a href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>" class="text-decoration-none">
                            <li><?php echo $lang['text-footer3'] ?> </li>
                        </a>
                        <a href="<?php echo 'hakkimizda2.php?lang='.$_SESSION['lang'];?>" class="text-decoration-none">
                            <li><?php echo $lang['text-footer4'] ?> </li>
                        </a>
                        <a href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>#Referance-container" class="text-decoration-none">
                            <li><?php echo $lang['text-footer7'] ?> </li>
                        </a>
                        <a href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>#hizmetlerimiz" class="text-decoration-none">
                            <li><?php echo $lang['text-footer5'] ?> </li>
                        </a>
                        
                       
                        <a href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>#prices " class="text-decoration-none">
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
                    <img src="assets/images/bitrix silver partner-1.jpg" alt="CERTIFICATE">
                </div>
            </div>
        </div>
        <hr />
        <p class="reserv"><a href="https://www.butagrup.com.tr/" target="_blank" class="text-decoration-none"
                style="color: #000;"><?php echo $lang['text-footer9'] ?> </a> <?php echo $lang['text-footer10'] ?> </p>
    </footer>

    <!-- jQuery Modal -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
</body>