<?php 
if(isset($_POST['submit'])){
    $to = "williamanonstidhem2323@gmail.com"; // sends contact info to this email
    $too = "info@smartfiresprinklers.com";
    $first_name = $_POST['fname'];
    $sender_email = $_POST['user_email'];
    $sender_phone = $_POST['user_phone'];
    $sender_message = $_POST['user_message'];
    $subject = "Will & Hall Contact Form";
    $message = "First: " . $first_name . " \n\n " . "Email: " . $sender_email  . "\n\n" . "Phone: " . $sender_phone  . "\n\n" . "Message: " . $sender_message . "\n\n" . "From Residential Roofing Page";
    mail($to,$subject,$message);
    mail($too,$subject,$message);
    header("Location: https://smartfiresprinklers.com");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
	<link rel="canonical" href="https://smartfiresprinklers.com/residential-roofing/" />

<meta charset="UTF-8">
<meta name="author" content="William Stidhem">
<meta name="keywords" content="construction, roofing, commercial roofing, residential roofing, siding, windows, window installation, eugene, springfield, lane county">
<meta name="description" content="We specialize in installation and repair of residential roofing">
<title>Will & Hall LLC | Residential Roofing Specialis</title>
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

@media screen and (min-width:320px){}

/* portrait phones*/
@media screen and (max-device-width:738px)
and (orientation: portrait)  {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/eugene-oregon-roofing-m.jpg);
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
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/residential-roofer-springfield-eugene.jpg);
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
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/eugene-oregon-roofing-m.jpg);
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
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/residential-roofer-springfield-eugene.jpg);
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
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/eugene-oregon-roofing-m.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
}

/* galaxy landscape, big landscape tablets/laptops/desktops */
@media screen and (min-width:1025px) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/residential-roofer-springfield-eugene.jpg);
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
		<div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h2>UPGRADE YOUR HOME WITH A NEW ROOF</h2></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>LICENCED &middot; INSURED &middot; GUARANTEED</h3></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>FINANCING AND FREE ESTIMATES</h3></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>ROOFING &middot; SIDING &middot; SKYLIGHTS</h3></div></div>

        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><form action="https://smartfiresprinklers.com/contact"><button class="contact_button">CONTACT US &#62;</button></form></div></div>

	</div>
</div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><h1>We specialize in residential roofing. Servicing Eugene Springfield And Beyond.</h1></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>We go the extra mile because <u>we care</u> about more than just curb appeal. We know your home is a huge investment. Your new roof will not only be a long term investment in yourself and your legacy - it is an investment in the people and possessions underneath it. The protection of your loved ones and most prized assets should only be trusted to the most competent experts. Experts who care.</p></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>Will & Hall should be your only choice when it comes to roof replacement or repair. Our staff is comprised of the most polished professionals. Everything we do is guaranteed. All new roofs come with a warranty - a warranty that will last decades. We even offer 24-hour emergency roofing services. Throughout the entire process, from estimate to maintenance, we will keep you informed, satisfied, and safeguarded.</p></div></div>

<div class="hide_on_pc">

    <div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><div class="single_show"><img src="https://smartfiresprinklers.com/img/roof-repair-eugene.jpg" alt="best eugene roofers"></div></div></div>

    <div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><div class="single_show"><img src="https://smartfiresprinklers.com/img/residential-roofing-contractors-eugene.jpg" alt="oregon roofing company"></div></div></div>

    <div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><div class="single_show"><img src="https://smartfiresprinklers.com/img/residential-roofing-eugene.jpg" alt="best roofers in eugene"></div></div></div>

</div>

<div class="hide_on_mobile"><div class="three_pics"><div class="inner_pic_3 slide_up_scale"><img src="https://smartfiresprinklers.com/img/roof-repair-eugene.jpg" alt="best eugene roofers" style="margin-bottom: 20px;"></div><div class="inner_pic_3 slide_up_scale"><img src="https://smartfiresprinklers.com/img/residential-roofing-contractors-eugene.jpg" alt="oregon roofing company" style="margin-bottom: 20px;"></div><div class="inner_pic_3 slide_up_scale"><img src="https://smartfiresprinklers.com/img/residential-roofing-eugene.jpg" alt="best roofers in eugene" style="margin-bottom: 20px;"></div></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><h2 class="secton_title">Every home owner should know the signs of roof damage.</h2></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>Keep an eye out for stains on your ceiling, especially in your attic. Watch for broken flashing, because it prevents water from entering your home. It’s important to repair or replace your roof as soon as you notice wear or damage. Fixing your roof as soon as there is a problem can save you tens of thousands of dollars in the long run. The reality is that torn or curling shingles may be more than just an eyesore, and if you don't do something about it, it will most definitely become a bigger problem.</p></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>Call Will & Hall Roofing And Construction now to get a free estimate anywhere in Springfield, Eugene, and surrounding areas.</p></div></div>

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
