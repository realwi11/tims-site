<?php 
if(isset($_POST['submit'])){
    $to = "williamanonstidhem2323@gmail.com"; // sends contact info to this email
    $too = "info@smartfiresprinklers.com";
    $first_name = $_POST['fname'];
    $sender_email = $_POST['user_email'];
    $sender_phone = $_POST['user_phone'];
    $sender_message = $_POST['user_message'];
    $subject = "Will & Hall Contact Form";
    $message = "First: " . $first_name . " \n\n " . "Email: " . $sender_email  . "\n\n" . "Phone: " . $sender_phone  . "\n\n" . "Message: " . $sender_message . "\n\n" . "From Skylight Installation Page";
    mail($to,$subject,$message);
    mail($too,$subject,$message);
    header("Location: https://smartfiresprinklers.com");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    

    <link rel="canonical" href="https://smartfiresprinklers.com/skylight-installation" />

<meta charset="UTF-8">
<meta name="author" content="William Stidhem">
<meta name="keywords" content="construction, roofing, commercial roofing, residential roofing, siding, windows, window installation, eugene, springfield, lane county">
<meta name="description" content="We have been doing skylight installation in the Eugene area for decades">
<title>Will & Hall LLC | Skylight Installation Specialists</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" href="https://smartfiresprinklers.com/img/roofing-logo-tab.png" type="image/x-icon">  <!-- sets the tab icon-->
<link rel="apple-touch-icon" href="https://smartfiresprinklers.com/img/roofing-logo-tab.png">

<link rel="stylesheet" type="text/css" href="https://smartfiresprinklers.com/css/roof.css">
<script async src="https://smartfiresprinklers.com/js/roof.js"></script>

<style>
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/roofers-eugene-contact-m.jpg);
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
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/roofers-eugene-contact-m.jpg);
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
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/roofers-eugene-contact.jpg);
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
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/roofers-eugene-contact-m.jpg);
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
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/roofers-eugene-contact.jpg);
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
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/roofers-eugene-contact-m.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
}

/* galaxy landscape, big landscape tablets/laptops/desktops */
@media screen and (min-width:1025px) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/roofers-eugene-contact.jpg);
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
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h2>WHEN YOUR ROOF NEEDS MORE</h2></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>LICENCED &middot; INSURED &middot; GUARANTEED</h3></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>FINANCING AND FREE ESTIMATES</h3></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>ROOFING &middot; SIDING &middot; SKYLIGHTS</h3></div></div>

        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><form action="https://smartfiresprinklers.com/contact"><button class="contact_button">CONTACT US &#62;</button></form></div></div>

    </div>
</div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><h1>Nothing will top your roof off like a new skylight.</h1></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>From solar tubes (AKA solar tunnels, sun tunnels, or light tubes) to classic skylights, Will & Hall will brighten your day. Transform your property with natural light and a classy, modern look. Bringing sunlight in does more than improve your look, it will save you money. Electricity costs can be brutal, and skylights will absolutely help to counteract them. Call now and we will get you set up to make some attractive and practical improvements.</p></div></div>

<div class="hide_on_pc">

    <div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><div class="single_show"><img src="https://smartfiresprinklers.com/img/skylights-eugene.jpg" alt="skylights eugene"></div></div></div>

    <div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><div class="single_show"><img src="https://smartfiresprinklers.com/img/skylight-repair.jpg" alt="skylight repair"></div></div></div>

    <div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><div class="single_show"><img src="https://smartfiresprinklers.com/img/skylight-installation.jpg" alt="skylight installation"></div></div></div>

</div>

<div class="hide_on_mobile"><div class="three_pics"><div class="inner_pic_3 slide_up_scale"><img src="https://smartfiresprinklers.com/img/skylights-eugene.jpg" alt="skylights eugene" style="margin-bottom: 20px;"></div><div class="inner_pic_3 slide_up_scale"><img src="https://smartfiresprinklers.com/img/skylight-repair.jpg" alt="skylight repair" style="margin-bottom: 20px;"></div><div class="inner_pic_3 slide_up_scale"><img src="https://smartfiresprinklers.com/img/skylight-installation.jpg" alt="skylight installation" style="margin-bottom: 20px;"></div></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><h2 class="secton_title">WE DO SKYLIGHTS RIGHT</h2></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>We offer many options when it comes to skylights, and we have been doing skylight installations for almost as long as we have been doing roofs. Our work and our products are guaranteed to be functional and beautiful.</p></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>There are many benefits to installing skylights. Letting sunlight in will make you feel better. It will make your space feel larger and more inviting. It will even improve your carbon footprint. Use less. Be more.</p></div></div>

<div class="separator_wrap"><div class="separator zoom"></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><h2 class="secton_title">CONTACT US</h2></div></div>

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
<!-- <div class="separator_wrap"><div class="separator zoom"></div></div> -->

</div>  <!--break roof_content -->
<!-- <div class="dummy" style="width: 100%; height: 500px; background: red; position: relative;"></div> -->

<?php include("../footer.html"); ?>
</body>

</html>
