<?php 
if(isset($_POST['submit'])){
    $to = "williamanonstidhem2323@gmail.com"; // sends contact info to this email
    $too = "info@smartfiresprinklers.com"; // sends contact info to this email
    $first_name = $_POST['fname'];
    $sender_email = $_POST['user_email'];
    $sender_phone = $_POST['user_phone'];
    $sender_message = $_POST['user_message'];
    $subject = "Will & Hall Contact Form";
    $message = "First:" . $first_name . " \n\n " . "Email:" . $sender_email  . "\n\n" . "Phone:" . $sender_phone  . "\n\n" . "Message:" . $sender_message;
    mail($to,$subject,$message);
    mail($too,$subject,$message);
    header("Location: https://smartfiresprinklers.com");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="canonical" href="https://smartfiresprinklers.com/gallery/" />

<meta charset="UTF-8">
<meta name="author" content="William Stidhem">
<meta name="keywords" content="construction, roofing, commercial roofing, residential roofing, siding, windows, window installation, eugene, springfield, lane county">
<meta name="description" content="">
<title>Will & Hall LLC | Gallery  – Roofing, Siding, Windows</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" href="https://smartfiresprinklers.com/img/roofing-logo-tab.png" type="image/x-icon">  <!-- sets the tab icon-->
<link rel="apple-touch-icon" href="https://smartfiresprinklers.com/img/roofing-logo-tab.png">

<link rel="stylesheet" type="text/css" href="https://smartfiresprinklers.com/css/roof.css">
<script async src="https://smartfiresprinklers.com/js/roof.js"></script>

<style>
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/eugene-oregon-roofing-m.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center center;
        background-size: cover;

    }

    .big_pic_copy h2{
        padding-left: 10vw;
        padding-right: 10vw;
    }

    .entrance_animation_wrap{
        flex-basis: 100%;
    }

    .filter_outter_wrap{
        /*border: 1px solid red;*/
        display: flex;
        justify-content: space-around;
        align-items: center;
        background: white;
        width: 100%;
    }

    .filter_inner_wrap{
        /*border: 1px solid green;*/
        display: flex;
        justify-content: space-around;
        align-items: center;
        flex-basis: 90%;
        flex-wrap: wrap;
    }

    .filter{
        font-size: 3.2vw;
        flex-basis: 30%;
        white-space: nowrap;
        margin-top: 5px;
        margin-bottom: 5px;
        position: relative;
        background-color: #d6d6d6;
        border-radius: 15px;
    }

    .gallery_img_wrap{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        /*border: 2px solid red;*/
    }

    .gallery_img{
        flex-basis: 45%;
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .gallery_img img{
        width: 100%;
        height: auto;
    }

    .lightbox{
        /*border: 2px solid purple;*/
        display: none;
        width: 90%;
        height: 90%;
        position: fixed;
        top: 5%;
        left: 5%;
        z-index: 999999;
        text-align: center;
        background: #fff;
        box-shadow: 0px 0px 300px #000;
    }

    .lightbox img{
        /*border: 2px solid orange;*/
        margin-top: 3%;
        width: 94%;
        height: auto;
    }

    .close_lightbox{
        /*border:2px solid yellow;*/
        cursor: pointer;
        z-index: 9999999;
        width: 6%;
        height: 6%;
        position: fixed;
        right: 2%;
        background: url(https://smartfiresprinklers.com/img/gallery/lightbox-close.png);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        box-shadow: 2px -3px 3px #666;
    }

    .arrow_wrap{
        /*border:2px solid blue;*/
        width:100%;
        height: auto;
    }

    .left_arrow{
        border: none;
        /*border:2px solid red;*/
        cursor: pointer;
        z-index: 9999999;
        width: 6%;
        height: 6%;
        position: fixed;
        bottom: 7%;
        left: 40%;
        transform: translate(-50%, 0);
        background: url(https://smartfiresprinklers.com/img/gallery/left-arrow.png);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        box-shadow: -2px 3px 3px #666;
    }

    .right_arrow{
        border: none;
        /*border:2px solid green;*/
        cursor: pointer;
        z-index: 9999999;
        width: 6%;
        height: 6%;
        position: fixed;
        bottom: 7%;
        left: 60%;
        transform: translate(-50%, 0);
        background: #fff;
        background: url(https://smartfiresprinklers.com/img/gallery/right-arrow.png);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        box-shadow: 2px 3px 3px #666;
    }

    /* shrunken screen*/
@media screen and (min-width:320px){}

/* portrait phones*/
@media screen and (max-device-width:738px)
and (orientation: portrait)  {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/eugene-oregon-roofing-m.jpg);
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-position: center center;
        background-size: cover;

    }

    .filter{
        font-size: 4.2vw;
        flex-basis: 40%;
    }

    .gallery_img{
        flex-basis: 48%;
    }

    .lightbox{
        top: 5%;
        left: 5%;
    }

    .lightbox img{
        margin-top: 25%;
        width: 94%;
    }

    .close_lightbox{
        width: 12%;
        height: 6%;
        right: 10%;
        top: 8%;
    }

    .arrow_wrap{
        width:100%;
        height: auto;
    }

    .left_arrow{
        width: 12%;
        height: 6%;
        left: 30%;
    }

    .right_arrow{
        width: 12%;
        height: 6%;
        left: 70%;
    }
}

/*landscape phones*/
@media screen and (max-device-width:738px)
and (orientation: landscape) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/gallery-bkgnd.jpg);
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-position: center center;
        background-size: cover;

    }

    .lightbox{
        top: 5%;
        left: 5%;
    }

    .lightbox img{
        margin-top: 2%;
        width: auto;
        height: 90%;
    }

    .close_lightbox{
        width: 8%;
        height: 8%;
        right: 7%;
        top: 8%;
    }

    .arrow_wrap{
        width:100%;
        height: auto;
    }

    .left_arrow{
        width: 8%;
        height: 8%;
        left: 30%;
    }

    .right_arrow{
        width: 8%;
        height: 8%;
        left: 70%;
    }
}

/* portrait tablets, iPad*/
@media screen and (min-width:739px) 
and (orientation: portrait) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/eugene-oregon-roofing-m.jpg);
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-position: center center;
        background-size: cover;

    }
}

/* landscape tablet iPad, pc default */
@media screen and (min-width:961px) 
and (orientation: landscape) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/gallery-bkgnd.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center center;
        background-size: cover;
    }

    .gallery_img{
        flex-basis: 31%;
    }
}

/*portrait ipad pro*/
@media screen and (min-width:961px) 
and (orientation: portrait) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/eugene-oregon-roofing-m.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center center;
        background-size: cover;

    }
}

/* galaxy landscape, big landscape tablets/laptops/desktops */
@media screen and (min-width:1025px) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/gallery-bkgnd.jpg);
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-position: center center;
        background-size: cover;

    }

    .lightbox img{
        margin-top: 2%;
        width: auto;
        height: 85%;
    }

    .filter{
        font-size: 20px;
        flex-basis: 14%;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .gallery_img{
        margin-top: 2%;
        width: auto;
        height: 85%;
    }

    .lightbox img{
        margin-top: 2%;
        width: auto;
        height: 85%;
    }

    .close_lightbox{
        width: 35px;
        height: 35px;
        right: 7%;
        top: 8%;
    }

    .left_arrow{
        width: 30px;
        height: 30px;
        left: 47%;
        box-shadow: none;
    }

    .right_arrow{
        width: 30px;
        height: 30px;
        left: 52%;
        box-shadow: none;
    }
}

/* ipad pro landscape, hi-res laptops and desktops*/ 
@media (min-width:1281px) {
    .lightbox img{
        width: auto;
        height: 95%;
    }

    .lightbox{
        /*height: 95%;*/
        padding-bottom: 20px;
    }
}

</style>

</head>

<body onload="showBigPicCopy('gallery');" onresize="checkMobHeader();">

<div class="lightbox" id="lightbox">
    <img src="https://smartfiresprinklers.com/img/big-background-pics/gallery-bkgnd.jpg" id="lightbox_img" alt="roofing contractor">
    <div class="closebox"><button onclick="closeClicked()" class="close_lightbox"></button></div>
    <div class="arrow_wrap">
        <button onclick="leftClicked()" class="left_arrow"></button>
        <button onclick="rightClicked()" class="right_arrow"></button>
    </div>
</div>

<?php include("../header.html"); ?>

<div class="roof_content" id="roof_content">

<div class="big_pic" id="big_pic">
    <div class="big_pic_copy_outer_wrap">
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h2>Gallery</h2></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>Residential Roofs</h3></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>Commercial Roofs</h3></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>New Siding</h3></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>Widnows</h3></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><form action="https://smartfiresprinklers.com/contact"><button class="contact_button">CONTACT US &#62;</button></form></div></div>

    </div>
</div>

<div class="filter_outter_wrap" id="filter_outter_wrap">
    <div class="filter_inner_wrap">
        <button class="filter" id="residentialBtn" onclick="filterButtonClicked('residential')">Residential</button>
        <button class="filter" id="commercialBtn" onclick="filterButtonClicked('commercial')">Commercial</button>
        <button class="filter" id="sidingBtn" onclick="filterButtonClicked('siding')">Siding</button>
        <button class="filter" id="windowsBtn" onclick="filterButtonClicked('windows')">Windows</button>
        <button class="filter" id="guttersBtn" onclick="filterButtonClicked('gutters')">gutters</button>
    </div>
</div>

<div class="gallery_img_wrap residential" id="residential">
    <div class="entrance_animation_wrap"><div class="secton_title">Residential Roofs</div></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/roofing-oregon.jpg" class="gallery_img_source" alt="roofing oregon"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/eugene-roofing-company.jpg" class="gallery_img_source" alt="residential roofing"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/springfield-roof-repair.jpg" class="gallery_img_source" alt="springfield roof repair"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/springfield-roofing-company.jpg" class="gallery_img_source" alt="springfield roofing company"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/roofing-company-eugene-springfield.jpg" class="gallery_img_source" alt="eugene residential roofing"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/roofing-contractor.jpg" class="gallery_img_source" alt="roofing contractor"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/new-roof-installation-eugene.jpg" class="gallery_img_source" alt="new roof installation eugene"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/roofers-near-springfield.jpg" class="gallery_img_source" alt="roofers near springfield"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/roofers-eugene.jpg" class="gallery_img_source" alt="roofers eugene"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/commercial-roofing-contractor.jpg" class="gallery_img_source" alt="commercial roofing contractor"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/new-roof-eugene-oregon.jpg" class="gallery_img_source" alt="new roof eugene oregon"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/roofers-in-eugene.jpg" class="gallery_img_source" alt="roofers in eugene"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/residential-roof-installation-eugene.jpg" class="gallery_img_source" alt="residential roof installation eugene"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/skylight-repair-eugene.jpg" class="gallery_img_source" alt="skylight repair eugene"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/roofers-near-eugene.jpg" class="gallery_img_source" alt="roofers near eugene"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/roofing-contractors-eugene.jpg" class="gallery_img_source" alt="roofing contractors eugene"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/roof-repair-eugene.jpg" class="gallery_img_source" alt="roof repair eugene"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/eugene-commercial-roofers.jpg" class="gallery_img_source" alt="eugene commercial roofers"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/residential-roofing-before.jpg" class="gallery_img_source" alt="residential roofing before"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/new-siding-eugene.jpg" class="gallery_img_source" alt="new siding eugene"></div>
</div>
<div class="gallery_img_wrap commercial" id="commercial">
    <div class="entrance_animation_wrap"><div class="secton_title">Commercial Roofs</div></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/commercial-roofers-eugene.jpg" class="gallery_img_source" alt="commercial roofing company"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/new-roof-for-business-eugene-repl.jpg" class="gallery_img_source" alt="new roof for business eugene repl"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/business-roofing-company-eugene-repl.jpg" class="gallery_img_source" alt="business roofing company eugene repl"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/commercial-roofing-company.jpg" class="gallery_img_source" alt="eugene roofing contractors"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/commercial-roofing-eugene-repl.jpg" class="gallery_img_source" alt="commercial roofing eugene repl"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/commercial-roof-repair-eugene.jpg" class="gallery_img_source" alt="commercial roof repair eugene"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/commercial-roofing-contractors-repl.jpg" class="gallery_img_source" alt="commercial roofing contractors repl"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/new-commercial-roof-eugene.jpg" class="gallery_img_source" alt="new commercial roof eugene"></div>
</div>
<div class="gallery_img_wrap siding" id="siding">
    <div class="entrance_animation_wrap"><div class="secton_title">Siding</div></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/eugene-siding-and-windows.jpg" class="gallery_img_source" alt="eugene siding company"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/siding-repair-repl.jpg" class="gallery_img_source" alt="siding repair repl"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/siding-springfield-repl.jpg" class="gallery_img_source" alt="siding springfield repl"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/siding-eugene-repl.jpg" class="gallery_img_source" alt="siding eugene repl"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/siding-repl.jpg" class="gallery_img_source" alt="siding repl"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/siding-repair-eugene.jpg" class="gallery_img_source" alt="siding repair eugene"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/eugene-siding-company.jpg" class="gallery_img_source" alt="eugene siding company"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/new-siding-installation.jpg" class="gallery_img_source" alt="siding and window installation"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/siding-company-eugene.jpg" class="gallery_img_source" alt="siding company eugene"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/new-construction-roofer-and-siding.jpg" class="gallery_img_source" alt="new construction roofer and siding"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/siding-company-near-eugene.jpg" class="gallery_img_source" alt="siding company near eugene"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/new-siding.jpg" class="gallery_img_source" alt="new siding"></div>
</div>
<div class="gallery_img_wrap windows" id="windows">
    <div class="entrance_animation_wrap"><div class="secton_title">Windows</div></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/new-window-installation.jpg" class="gallery_img_source" alt="eugene siding company"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/eugene-windows-repl.jpg" class="gallery_img_source" alt="eugene windows repl"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/new-construction-window-installation.jpg" class="gallery_img_source" alt="new construction window installation"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/window-installation.jpg" class="gallery_img_source" alt="window installation"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/residential-window-repair.jpg" class="gallery_img_source" alt="siding and window installation"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/window-installation-eugene.jpg" class="gallery_img_source" alt="window installation eugene"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/window-repair-and-installation.jpg" class="gallery_img_source" alt="window repair and installation"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/window-replacement-eugene-oregon-repl.jpg" class="gallery_img_source" alt="window replacement eugene oregon repl"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/windows-eugene.jpg" class="gallery_img_source" alt="windows eugene"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/window-replacement-eugene-repl.jpg" class="gallery_img_source" alt="window replacement eugene repl"></div>
</div>
<div class="gallery_img_wrap gutters" id="gutters">
    <div class="entrance_animation_wrap"><div class="secton_title">Gutters</div></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/commercial-gutter-repair.jpg" class="gallery_img_source" alt="commercial gutter repair"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/eugene-gutter-repair.jpg" class="gallery_img_source" alt="eugene gutter repair"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/gutter-cleaning.jpg" class="gallery_img_source" alt="gutter cleaning"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/gutter-installation.jpg" class="gallery_img_source" alt="gutter installation"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/gutter-repair.jpg" class="gallery_img_source" alt="gutter repair"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/gutter-repair-company.jpg" class="gallery_img_source" alt="gutter repair company"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/gutter-replacement.jpg" class="gallery_img_source" alt="gutter replacement"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/gutter-replacement-and-repair.jpg" class="gallery_img_source" alt="gutter replacement and repair"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/gutter-replacement-company.jpg" class="gallery_img_source" alt="gutter replacement company"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/new-gutters.jpg" class="gallery_img_source" alt="new gutters"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/new-roofing-gutters.jpg" class="gallery_img_source" alt="new roofing gutters"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/replacement-roof-gutters.jpg" class="gallery_img_source" alt="replacement roof gutters"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/residential-gutter-repair.jpg" class="gallery_img_source" alt="residential gutter repair"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/roof-drain-gutters.jpg" class="gallery_img_source" alt="roof drain gutters"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/roofing-gutter-replacement-2.jpg" class="gallery_img_source" alt="roofing gutter replacement"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/roofing-gutters.jpg" class="gallery_img_source" alt="roofing gutters"></div>
    <div class="gallery_img"><img src="https://smartfiresprinklers.com/img/gallery/springfield-gutter-repair.jpg" class="gallery_img_source" alt="springfield gutter repair"></div>


</div>

<!-- <div class="separator_wrap"><div class="separator separator_slide_left"></div><div class="separator separator_slide_right"></div></div> -->

<div class="entrance_animation_wrap">
    <div class="entrance_animation slide_up">
        <div class="form_wrap">
            <div class="form_copy">
                <h3>Get a hassle-free estimate. Reach out and start the conversation.</h3>
                <img src="https://smartfiresprinklers.com/img/roofing-estimate.png" alt="roofing estimate">
                <p>We will set up a time for you to meet one of our premier roofing professionals and discuss the options.</p>
                <p>Servicing Eugene Springfield and beyond</p>
            </div>
            <div class="form_input">
                <div class="my_contact">
                    <div class="my_contact_inner">
                        <form action="" method="post" autocomplete="on">
                            <div class="my_text" style="margin-top: 0px;">Name<div class="red_text" >*</div><br><input class="input_len" name="fname" required></div>
                            
                            <!-- <div class="my_text">Last name<br><input class="input_len" name="lname"></div> -->
                            
                            <div class="my_text">E-mail<div class="red_text" >*</div><br><input class="input_len" type="email" name="user_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required></div>
                            
                            <div class="my_text">Phone Number<br><input class="input_len" name="user_phone" pattern="[0-9]*[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$"></div>

                            <div class="my_text">Tell Us About Your Project<br><textarea class="comments" rows="5" name="user_message"></textarea></div>
                            
                            <div class="my_text">Write the word human here. <div class="red_text" >*</div><br><input class="input_len" name="hum" pattern="[H,h][U,u][M,m][A,a][N,n]$" required></div>
                            
                            <div class="my_text" style="text-align: center;"><input type="submit" name="submit" value="Submit" class="more_button"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>  <!--break roof_content -->
<!-- <div class="dummy" style="width: 100%; height: 500px; background: red; position: relative;"></div> -->

<?php include("../footer.html"); ?>
</body>

<script async>

var filter = document.getElementById('filter_outter_wrap');
var bigPic = document.getElementById('big_pic');
var gallerySections = document.getElementsByClassName('gallery_img_wrap');
var filterButtons = document.getElementsByClassName('filter');
var visibleSections = [];
var wasShowing = false;
var lightbox = document.getElementById('lightbox');
var lightboxImg = document.getElementById('lightbox_img');
var galleryImage = document.getElementsByClassName("gallery_img_source");


function imageSelected(imageIn){
    lightbox.style.display = "inline-block";
    lightboxImg.src = imageIn.src;
}




function setListeners() {
    for(var i = 0; i < galleryImage.length; i++){
        galleryImage[i].addEventListener("click", function() {
        imageSelected(this);
      });
    }
}

setListeners();


// handle swipeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
// handle swipeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
// handle swipeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee

document.addEventListener('touchstart', handleTouchStart, false);        
document.addEventListener('touchmove', handleTouchMove, false);

var xDown = null;                                                        
var yDown = null;

function getTouches(evt) {
  return evt.touches ||             // browser API
         evt.originalEvent.touches; // jQuery
}                                                     

function handleTouchStart(evt) {
    const firstTouch = getTouches(evt)[0];                                      
    xDown = firstTouch.clientX;                                      
    yDown = firstTouch.clientY;                                      
}                             

function handleTouchMove(evt) {
    if ( ! xDown || ! yDown ) {
        return;
    }

    var xUp = evt.touches[0].clientX;                                    
    var yUp = evt.touches[0].clientY;

    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;

    if ( Math.abs( xDiff ) > Math.abs( yDiff )) {
        if ( xDiff > 0 ) {
            rightClicked();
        } else {
            leftClicked()
        }                       
    } 
    /* reset values */
    xDown = null;
    yDown = null;                                             
};





function rightClicked(){
    for(var i = 0; i < galleryImage.length; i++){
        if(lightboxImg.src == galleryImage[i].src){
            if(i == galleryImage.length-1){
                lightboxImg.src = galleryImage[0].src;
                return;
            }else{
                lightboxImg.src = galleryImage[i+1].src;
                return;
            }
        }else{
        }
    }
}

function leftClicked() {
    for(var i = 0; i < galleryImage.length; i++){
        if(lightboxImg.src == galleryImage[i].src){
            if(i == 0){
                lightboxImg.src = galleryImage[galleryImage.length-1].src;
                return;
            }else{
                lightboxImg.src = galleryImage[i-1].src;
                return;
            }
        }else{
        }
    }
}

function closeClicked() {
    lightbox.style.display = "none"
}




function filterButtonClicked(sectionIn){
    if(visibleSections.length == 0){                        //if all sections are showing
        for(var i = 0; i < gallerySections.length; i++){    //hide all sections
            gallerySections[i].style.display = "none";
        }
        visibleSections.push(sectionIn);
            document.getElementById(sectionIn).style.display = "flex";
            // button = sectionIn + "Btn"
            document.getElementById(sectionIn+"Btn").style.background = "#E6DE19";
            setTimeout(scrollToSection.bind(null, sectionIn), 200);
            // scrollToSection(sectionIn);
    }else{                                                  //else some sections are showing
        for(var i = 0; i < visibleSections.length; i++){    //look for the clicked section
            if(visibleSections[i] == sectionIn){            //if it is already showing
                wasShowing = true;
                document.getElementById(sectionIn).style.display = "none";  //hide it
                document.getElementById(sectionIn+"Btn").style.background = "#d6d6d6";
                visibleSections.splice(i, 1);               //and take it out of the array
            }
        }
        if(visibleSections.length == 0){                    //after pop, if there are no sections selected
            for(var i = 0; i < gallerySections.length; i++){
                gallerySections[i].style.display = "flex";  //show all sections
            }
            for(var i = 0; i < filterButtons.length; i++){
                filterButtons[i].style.background = "#d6d6d6";
            }
        }else{                                              //after pop there are still some sections selected
            if(!wasShowing){
                visibleSections.push(sectionIn);            //push it into the array
                document.getElementById(sectionIn).style.display = "flex";  //show it
                document.getElementById(sectionIn+"Btn").style.background = "#E6DE19";

                setTimeout(scrollToSection.bind(null, sectionIn), 200);

                // scrollToSection(sectionIn);
            }
        }
    }
    wasShowing = false
}

function scrollToSection(sectionIn){
    var height = document.getElementById(sectionIn).offsetTop-180;
    window.scrollTo(0, height);
    console.log("height is " + height);
    // window.scrollTo({height , behavior: 'smooth' });
}


function getHeadHeight(){
    return Math.max(smobileHead.clientHeight, spcHead.clientHeight);
}

function checkFilter(direction){
    // console.log(window.pageYOffset);
    if(direction === "down"){                   //scrolling down
        if(filter.getBoundingClientRect().top - getHeadHeight() < 0){
            if(isMobile()){
                filter.style.position = "fixed";
                filter.style.top = getHeadHeight() + "px";
                setTimeout(function(){filter.style.top = getHeadHeight() + "px"; }, 300);
            }else{
                filter.style.position = "fixed";
                filter.style.top = "0px";
            }
        }
    }else{                                      //scrolling up
        if(window.pageYOffset < bigPic.offsetHeight){
            filter.style.position = "relative";
            filter.style.top = "0";
            setTimeout(function(){filter.style.top = "0"; }, 300);
        }
    }
}

</script>

</html>
