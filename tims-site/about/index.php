<?php 
if(isset($_POST['submit'])){
    $to = "williamanonstidhem2323@gmail.com"; // sends contact info to this email
    $too = "info@smartfiresprinklers.com";
    $first_name = $_POST['fname'];
    $sender_email = $_POST['user_email'];
    $sender_phone = $_POST['user_phone'];
    $sender_message = $_POST['user_message'];
    $subject = "Will & Hall Contact Form";
    $message = "First: " . $first_name . " \n\n " . "Email: " . $sender_email  . "\n\n" . "Phone: " . $sender_phone  . "\n\n" . "Message: " . $sender_message . "\n\n" . "From About Page";
    mail($to,$subject,$message);
    mail($too,$subject,$message);
    header("Location: https://smartfiresprinklers.com");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="canonical" href="https://smartfiresprinklers.com/about/" />

<meta charset="UTF-8">
<meta name="author" content="William Stidhem">
<meta name="keywords" content="construction, roofing, commercial roofing, residential roofing, siding, windows, window installation, eugene, springfield, lane county">
<meta name="description" content="GAF certified roofers">
<title>Will & Hall LLC | About Your Local Roofing Company</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" href="https://smartfiresprinklers.com/img/roofing-logo-tab.png" type="image/x-icon">  <!-- sets the tab icon-->
<link rel="apple-touch-icon" href="https://smartfiresprinklers.com/img/roofing-logo-tab.png">

<link rel="stylesheet" type="text/css" href="https://smartfiresprinklers.com/css/roof.css">
<script async src="https://smartfiresprinklers.com/js/roof.js"></script>

<style>
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/roofers-oregon-about.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center center;
        background-size: cover;
    }

    .person_pic img{
        width: 90%;
    }

    .person_name{
        text-align: center;
        font-size: 1.4em;
        font-weight: bold;
        padding-top: 3vh;
    }

    .person_position{
        text-align: center;
        color: grey;
        font-style: italic;
        padding-top: 3vh;
        font-size: 1.1em;
    }

    .person_description{
        text-align: center;
        padding-top: 3vh;
        line-height: 1.5;
        padding-left: 5vw;
        padding-right: 5vw;
    }
    

@media screen and (min-width:320px){}

/* portrait phones*/
@media screen and (max-device-width:738px)
and (orientation: portrait)  {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/roofers-oregon-about.jpg);
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
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/about-high-ridge-roofers.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: scroll;
    }

    .person_pic img{
        width: 30%;
    }

    .person_name{
        font-size: 1.4em;
        padding-top: 3vh;
    }

    .person_position{
        padding-top: 3vh;
        font-size: 1.1em;
    }

    .person_description{
        padding-top: 3vh;
        padding-left: 15vw;
        padding-right: 15vw;
    }
}

/* portrait tablets, iPad*/
@media screen and (min-width:739px) 
and (orientation: portrait) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/roofers-oregon-about.jpg);
        background-position: top center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: scroll;
    }

    .person_pic img{
        width: 60%;
    }

    .person_name{
        font-size: 1.9em;
    }

    .person_position{
        font-size: 1.6em;
    }

    .person_description{
        padding-left: 15vw;
        padding-right: 15vw;
        font-size: 1.6em;
    }
}

/* landscape tablet iPad, pc default */
@media screen and (min-width:961px) 
and (orientation: landscape) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/about-high-ridge-roofers.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .person_pic img{
        width: 60%;
    }

    .person_name{
        font-size: 1.9em;
    }

    .person_position{
        font-size: 1.6em;
    }

    .person_description{
        padding-left: 2vw;
        padding-right: 2vw;
        font-size: 1.6em;
    }
}

/*portrait ipad pro*/
@media screen and (min-width:961px) 
and (orientation: portrait) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/roofers-oregon-about.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
}

/* galaxy landscape, big landscape tablets/laptops/desktops */
@media screen and (min-width:1025px) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/about-high-ridge-roofers.jpg);
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
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h2>ABOUT Will & Hall PRO</h2></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>CLIENT SATISFACTION FIRST.</h3></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>DECADES OF EXPERIENCE.</h3></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>TRIED.TRUSTED.TRUE.</h3></div></div>

        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><form action="https://smartfiresprinklers.com/contact"><button class="contact_button">CONTACT US &#62;</button></form></div></div>

    </div>
</div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><h1>Will & Hall has been doing commercial and residential roofs for decades.</h1></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>Our success corresponds directly to the long term satisfaction our clients. Period. That is why we go the extra mile to keep you happy from the free estimate to follow-up maintenance, and everything in between.</p></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>Give us a call today and let's get started on your project!</p></div></div>

<div class="hide_on_pc">
    <div class="entrance_animation_wrap"><div class="entrance_animation slide_up_scale"><div class="person_pic"><img src="https://smartfiresprinklers.com/img/roofing-estimator.png" alt="eugene roofing contractor"></div><div class="person_name">Ben Demerest</div><div class="person_position">Estimator</div><div class="person_description">Ben has been in the roofing industry for 10+ years. His commitment to clients is utterly unparalleled. Have him come take a look at your roof and find out what Will & Hall can do for you.</div></div></div>

    <div class="entrance_animation_wrap"><div class="entrance_animation slide_up_scale"><div class="person_pic"><img src="https://smartfiresprinklers.com/img/roofing-contractor-tim.png" alt="eugene roofing crew"></div><div class="person_name">Tim Childress</div><div class="person_position">Owner</div><div class="person_description">Tim is a 25-year roofer. His knowledge about how to build or repair a roof to withstand our beautiful Northwest weather is one-of-a-kind. His experience translates to an extraordinary experience for his clients.</div></div></div>

    <div class="entrance_animation_wrap"><div class="entrance_animation slide_up_scale"><div class="person_pic"><img src="https://smartfiresprinklers.com/img/roofing-office-rowker.png" alt="eugene roofing company"></div><div class="person_name">Charlena</div><div class="person_position">Office Manger</div><div class="person_description">Charlena is the best office manager of all time. Her customer service skills and practical understanding of the roofing industry will streamline your project and help deliver your results.</div></div></div>
</div>

<div class="hide_on_mobile"><div class="three_pics"><div class="inner_pic_3 slide_up_scale"><img src="https://smartfiresprinklers.com/img/roofing-estimator.png" alt="eugene roofing contractor" style="margin-bottom: 20px;"><div class="person_name">Ben Demerest</div><div class="person_position">Estimator</div><div class="person_description">Ben has been in the roofing industry for 10+ years. His commitment to clients is utterly unparalleled. Have him come take a look at your roof and find out what Will & Hall can do for you.</div></div><div class="inner_pic_3 slide_up_scale"><img src="https://smartfiresprinklers.com/img/roofing-contractor-tim.png" alt="eugene roofing crew" style="margin-bottom: 20px;"><div class="person_name">Tim Childress</div><div class="person_position">Owner</div><div class="person_description">Tim is a 25-year roofer. His knowledge about how to build or repair a roof to withstand our beautiful Northwest weather is one-of-a-kind. His experience translates to an extraordinary experience for his clients.</div></div><div class="inner_pic_3 slide_up_scale"><img src="https://smartfiresprinklers.com/img/roofing-office-rowker.png" alt="eugene roofing company" style="margin-bottom: 20px;"><div class="person_name">Charlena</div><div class="person_position">Office Manager</div><div class="person_description">Charlena is the best office manager of all time. Her customer service skills and practical understanding of the roofing industry will streamline your project and help deliver your results.</div></div></div></div>

<div class="hide_sep"><div class="separator_wrap"><div class="separator zoom"></div></div></div>

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

</div>  <!--break roof_content -->
<!-- <div class="dummy" style="width: 100%; height: 500px; background: red; position: relative;"></div> -->

<?php include("../footer.html"); ?>
</body>

</html>
