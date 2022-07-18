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

        $facebook = '<a href="https://facebook.com/ButaGrupAz"  target="_blank"><i class="fa-brands fa-facebook-square"></i></a>';
        $instagram = ' <a href="https://instagram.com/butagrup.az/"  target="_blank"><i
        class="fa-brands fa-instagram"></i></a>';
        $linkedin = '<a href="https://linkedin.com/company/butagrupaz/mycompany/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>';
        // $twitter = '<a href="https://twitter.com/butagruptr"  target="_blank"> <i class="fa-brands fa-twitter"></i></a>';

        break;

    case 'tr':
        $logo = '<a  class="langActive" style="background-color: honeydew; appearance: auto;"><img style="width:20px;" src="https://bitrix.butagrup.com.tr/assets/images/tr.webp" alt=""></a>';
        $logo2 ='<a href="?lang=en"><img style="width:20px;" src="https://bitrix.butagrup.com.tr/assets/images/en.webp" alt=""></a>';
        $logo3 = '<a href="?lang=az"><img style="width:20px;" src="https://bitrix.butagrup.com.tr/assets/images/aze.webp" alt=""></a>';

        $facebook = '<a href="https://facebook.com/butagruptr"  target="_blank"><i class="fa-brands fa-facebook-square"></i></a>';
        $instagram = ' <a href="https://instagram.com/accounts/login/?next=/butagruptr/"  target="_blank"><i class="fa-brands fa-instagram"></i></a>';
        $linkedin = '<a href="https://linkedin.com/company/butagruptr/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>';
        $twitter = '<a href="https://twitter.com/butagruptr"  target="_blank"> <i class="fa-brands fa-twitter"></i></a>';

        break;

    case 'en':
        $logo = '<a class="langActive" style="background-color: honeydew; appearance: auto;"><img style="width:20px;" src="https://bitrix.butagrup.com.tr/assets/images/en.webp" alt=""></a>';
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
    @media (min-width: 992px) {
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
            width: 10rem !important;
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

    .navbar-collapse {
        padding-left: 15px;
    }
</style>


<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode
            .insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(83225227, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/83225227" style="position:absolute; left:-9999px;" alt="bitrix24 yandex" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->
<div class="row" style="display:flex; justify-content:center"> 

<nav class="col-4 navbar navbar-expand-lg navbar-light bg-light" id="navbardi"
    style="z-index:1; position:fixed; width: 50%; background: white;opacity:0.8;border-bottom-left-radius: 26px;border-bottom-right-radius: 26px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
   
    <div class="container-fluid">
        <a style="width:20%;" href="https://bitrix.butagrup.com.tr/"> <img src="assets/images/bitrix logo.webp"
                id="logobitrix" alt="Bitrix Buta Grup"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" id="vv"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item active">
                    <a alt="Bitrix24 Services" class="nav-link" href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['menu1'] ?></a>
                </li>
                <li class="nav-item">
                    <a alt="Bitrix24 CRM Solutions" class="nav-link" href="<?php echo 'hakkimizda2.php?lang='.$_SESSION['lang'];?>"><?php echo $lang['text-footer4'] ?></a>
                </li>
                <li class="nav-item">
                    <a alt="Bitrix Azerbaycan" class="nav-link" href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>#Referance-container"><?php echo $lang['menu3'] ?></a>
                </li>
                <li class="nav-item ">
                    <a alt="Bitrix24 resmi partnyor" class="nav-link" href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>#hizmetlerimiz"><?php echo $lang['menu2'] ?></a>
                </li>
               
                <li class="nav-item ">
                    <a alt="Bitrix24 Azerbaycanda resmi partnyoru" class="nav-link" href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>#prices"><?php echo $lang['menu4'] ?></a>
                </li>
                <li class="nav-item ">
                    <a alt="Bitrix24 Turkiye" class="nav-link" href="<?php echo 'index.php?lang='.$_SESSION['lang'];?>#Program"><?php echo $lang['menu5'] ?></a>
                </li>



                <style>



 @media screen and (min-width:320px) and (max-width:425px) {
    #navbardi{
    margin-left: 7% !important;
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
                        left: -6px;
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
                </style>
                <li class="dropdown2">
                    <button class="dropbtn2" style="border:none; margin-top:4px;"> <?php echo $logo ?></button>
                    <div class="dropdown2-content">
                    <?php echo $logo3 ?>
                    <?php echo $logo2 ?>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>

</div>