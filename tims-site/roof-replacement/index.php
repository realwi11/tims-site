<?php 
if(isset($_POST['submit'])){
    $to = "williamanonstidhem2323@gmail.com"; // sends contact info to this email
    $too = "highridgeroof@gmail.com";
    $first_name = $_POST['fname'];
    $sender_email = $_POST['user_email'];
    $sender_phone = $_POST['user_phone'];
    $sender_message = $_POST['user_message'];
    $subject = "High Ridge Contact Form";
    $message = "First: " . $first_name . " \n\n " . "Email: " . $sender_email  . "\n\n" . "Phone: " . $sender_phone  . "\n\n" . "Message: " . $sender_message . "\n\n" . "From Roof Replacement Page";
    mail($to,$subject,$message);
    mail($too,$subject,$message);
    header("Location: https://highridgepro.com");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127720297-4"></script>-->
    <!--<script>-->
    <!--window.dataLayer = window.dataLayer || [];-->
    <!--function gtag(){dataLayer.push(arguments);}-->
    <!--gtag('js', new Date());-->
    
    <!--gtag('config', 'UA-127720297-4');-->
    <!--</script>-->
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172822784-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-172822784-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Ads: 639848312 --> 
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-639848312"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-639848312'); </script>

    <link rel="canonical" href="https://highridgepro.com/roof-replacement/" />

<meta charset="UTF-8">
<meta name="author" content="William Stidhem">
<meta name="keywords" content="construction, roofing, commercial roofing, residential roofing, siding, windows, window installation, eugene, springfield, lane county">
<meta name="description" content="Professional roof replacement in the Eugene Springfield area">
<title>High Ridge LLC | Residential And Commercial Roof Replacement</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" href="https://highridgepro.com/img/roofing-logo-tab.png" type="image/x-icon">  <!-- sets the tab icon-->
<link rel="apple-touch-icon" href="https://highridgepro.com/img/roofing-logo-tab.png">

<link rel="stylesheet" type="text/css" href="https://highridgepro.com/css/roof.css">
<script async src="https://highridgepro.com/js/roof.js"></script>

<style>
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://highridgepro.com/img/big-background-pics/new-roof-eugene-oregon.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center center;
        background-size: cover;
    }

@media screen and (min-width:320px){}

/* portrait phones*/
@media screen and (max-device-width:738px)
and (orientation: portrait)  {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://highridgepro.com/img/big-background-pics/new-roof-eugene-oregon.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: scroll;
    }
}

/*landscape phones*/
@media screen and (max-device-width:738px)
and (orientation: landscape) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://highridgepro.com/img/big-background-pics/new-roof-installation-eugene-oregon.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: scroll;
    }
}

/* portrait tablets, iPad*/
@media screen and (min-width:739px) 
and (orientation: portrait) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://highridgepro.com/img/big-background-pics/new-roof-eugene-oregon.jpg);
        background-position: top center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: scroll;
    }
}

/* landscape tablet iPad, pc default */
@media screen and (min-width:961px) 
and (orientation: landscape) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://highridgepro.com/img/big-background-pics/new-roof-installation-eugene-oregon.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
}

/*portrait ipad pro*/
@media screen and (min-width:961px) 
and (orientation: portrait) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://highridgepro.com/img/big-background-pics/new-roof-eugene-oregon.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
}

/* galaxy landscape, big landscape tablets/laptops/desktops */
@media screen and (min-width:1025px) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://highridgepro.com/img/big-background-pics/new-roof-installation-eugene-oregon.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
}

/* ipad pro landscape, hi-res laptops and desktops*/ 
@media (min-width:1281px) {

}

</style>

</head>

<body onload="showBigPicCopy('home');" onresize="checkMobHeader();">

<?php include("../header.html"); ?>

<div class="roof_content" id="roof_content">

<div class="big_pic" id="big_pic">
    <div class="big_pic_copy_outer_wrap">
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h2>TOP IT OFF WITH A NEW ROOF</h2></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>LICENCED &middot; INSURED &middot; GUARANTEED</h3></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>FINANCING AND FREE ESTIMATES</h3></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>ROOFING &middot; SIDING &middot; SKYLIGHTS</h3></div></div>

        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><form action="https://highridgepro.com/contact"><button class="contact_button">CONTACT US &#62;</button></form></div></div>

    </div>
</div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><h1>Top notch roof replacement in the Eugene Springfield area.</h1></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>Never chase bad money with good money. There comes a time when repairing a roof is just not enough. Since High Ridge is so familiar with the roofing industry, we will build you a quality - and beautiful - new roof at a beautiful low rate. Whether you want a new roof for your home or place of business - and regardless of whether you want simple and sleek, or skylights with style - High Ridge will get it done right. We guarantee all of our work. All of our products all come with a warranty. Make no mistake, <u>there is no better choice</u>.</p></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>We tear off and replace roofs every day. It’s what we do. It’s what we love. Our craftsmanship and work quality is unparalleled. Call us today and we will discuss your options, get you a free estimate, and build you an extraordinary new roof before you know it.</p></div></div>

<div class="hide_on_pc">

    <div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><div class="single_show"><img src="https://highridgepro.com/img/new-roof-installation-eugene.jpg" alt="new roof installation eugene"></div></div></div>

    <div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><div class="single_show"><img src="https://highridgepro.com/img/roof-replacement.jpg" alt="roof replacement"></div></div></div>

    <div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><div class="single_show"><img src="https://highridgepro.com/img/roofer-replacing-roof.jpg" alt="roofer replacing roof"></div></div></div>

</div>

<div class="hide_on_mobile"><div class="three_pics"><div class="inner_pic_3 slide_up_scale"><img src="https://highridgepro.com/img/new-roof-installation-eugene.jpg" alt="new roof installation" style="margin-bottom: 20px;"></div><div class="inner_pic_3 slide_up_scale"><img src="https://highridgepro.com/img/roof-replacement.jpg" alt="roof replacement" style="margin-bottom: 20px;"></div><div class="inner_pic_3 slide_up_scale"><img src="https://highridgepro.com/img/roofer-replacing-roof.jpg" alt="roofer replacing roof" style="margin-bottom: 20px;"></div></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><h2 class="secton_title">HOW DO YOU KNOW IT'S TIME TO REPLACE YOUR ROOF?</h2></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>When there are stains on your ceiling from water damage. When you see rock grit in your rain gutters. When your roof is sagging or buckling. When your tiles are torn, curling, or look worn out. When your HVAC bill looks like a military budget. Any one of these signs could point to additional complications on the horizon and should not be ignored. If you suspect an issue or see a problem, contact us for a free consultation.</p></div></div>

<div class="separator_wrap"><div class="separator zoom"></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><h2 class="secton_title">CONTACT US</h2></div></div>

<div class="entrance_animation_wrap">
    <div class="entrance_animation slide_up">
        <div class="form_wrap">
            <div class="form_copy">
                <h3>Get a hassle-free estimate. Reach out and start the conversation.</h3>
                <img src="https://highridgepro.com/img/roofing-estimate.png" alt="roofing estimate">
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
<!-- <div class="separator_wrap"><div class="separator zoom"></div></div> -->

</div>  <!--break roof_content -->
<!-- <div class="dummy" style="width: 100%; height: 500px; background: red; position: relative;"></div> -->

<?php include("../footer.html"); ?>
</body>

</html>
