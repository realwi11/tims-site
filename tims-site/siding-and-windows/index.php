<?php 
if(isset($_POST['submit'])){
    $to = "williamanonstidhem2323@gmail.com"; // sends contact info to this email
    $too = "info@smartfiresprinklers.com";
    $first_name = $_POST['fname'];
    $sender_email = $_POST['user_email'];
    $sender_phone = $_POST['user_phone'];
    $sender_message = $_POST['user_message'];
    $subject = "Will & Hall Contact Form";
    $message = "First: " . $first_name . " \n\n " . "Email: " . $sender_email  . "\n\n" . "Phone: " . $sender_phone  . "\n\n" . "Message: " . $sender_message . "\n\n" . "From Siding And Windows Page";
    mail($to,$subject,$message);
    mail($too,$subject,$message);
    header("Location: https://smartfiresprinklers.com");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    


	<link rel="canonical" href="https://smartfiresprinklers.com/siding-and-windows/" />

<meta charset="UTF-8">
<meta name="author" content="William Stidhem">
<meta name="keywords" content="construction, roofing, commercial roofing, residential roofing, siding, windows, window installation, eugene, springfield, lane county">
<meta name="description" content="We do siding and window replacement in Eugene Springfield and surrounding areas">
<title>Will & Hall LLC | Siding And Window Installation In Eugene</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" href="https://smartfiresprinklers.com/img/roofing-logo-tab.png" type="image/x-icon">  <!-- sets the tab icon-->
<link rel="apple-touch-icon" href="https://smartfiresprinklers.com/img/roofing-logo-tab.png">

<link rel="stylesheet" type="text/css" href="https://smartfiresprinklers.com/css/roof.css">
<script async src="https://smartfiresprinklers.com/js/roof.js"></script>

<style>
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/siding-and-windows-eugene.jpg);
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
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/siding-and-windows-eugene.jpg);
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
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/residential-siding-eugene.jpg);
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
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/siding-and-windows-eugene.jpg);
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
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/residential-siding-eugene.jpg);
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
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/siding-and-windows-eugene.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
}

/* galaxy landscape, big landscape tablets/laptops/desktops */
@media screen and (min-width:1025px) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://smartfiresprinklers.com/img/big-background-pics/residential-siding-eugene.jpg);
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
		<div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h2>COMPLETE YOUR EXTERIOR TODAY</h2></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>LICENCED &middot; INSURED &middot; GUARANTEED</h3></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>FINANCING AND FREE ESTIMATES</h3></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>ROOFING &middot; SIDING &middot; SKYLIGHTS</h3></div></div>

        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><form action="https://smartfiresprinklers.com/contact"><button class="contact_button">CONTACT US &#62;</button></form></div></div>

	</div>
</div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><h1>Get replacement windows or siding for your property in the Eugene Springfield area today.</h1></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>The exterior of your home or place of business can be summarized in three words: siding, windows, and roof. Will & Hall Roofing And Construction specializes in all three. Our work is guaranteed, and our products come with a warranty.</p></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>Your place of business needs to look polished and professional. Your home should reflect the fact that you care about what is inside it. At Will & Hall we understand the importance of our responsibility to you. We have been doing siding and window installation in Eugene, Springfield, and surrounding areas for decades.</p></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>We know windows. Our windows will leave nothing to be desired. We understand the nuances of window installation and maintenance in the rainy Northwest. Whether you want vinyl or wood windows, go with trusted and experienced professionals.</p></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>There is no way to substitute for great siding. Period. We specialize in siding. If you want a clean, modern look, let the professionals at Will & Hall get you there. There is only one choice for the best siding work available. We will remove your old siding, weatherize the exterior of your home, tape all of the windows to protect the glass, and install your new siding. It's that straightforward. Call Will & Hall and let’s set up a free consultation and estimate to get you where you need to be.</p></div></div>

<div class="hide_on_pc">

    <div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><div class="single_show"><img src="https://smartfiresprinklers.com/img/residential-siding-replacement-2.jpg" alt="residential siding replacement"></div></div></div>

    <div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><div class="single_show"><img src="https://smartfiresprinklers.com/img/siding-replacement.jpg" alt="siding replacement"></div></div></div>

    <div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><div class="single_show"><img src="https://smartfiresprinklers.com/img/eugene-siding-and-windows-2.jpg" alt="eugene siding and windows"></div></div></div>

</div>

<div class="hide_on_mobile"><div class="three_pics"><div class="inner_pic_3 slide_up_scale"><img src="https://smartfiresprinklers.com/img/residential-siding-replacement-2.jpg" alt="residential siding replacement" style="margin-bottom: 20px;"></div><div class="inner_pic_3 slide_up_scale"><img src="https://smartfiresprinklers.com/img/siding-replacement.jpg" alt="siding replacement" style="margin-bottom: 20px;"></div><div class="inner_pic_3 slide_up_scale"><img src="https://smartfiresprinklers.com/img/eugene-siding-and-windows-2.jpg" alt="eugene siding and windows" style="margin-bottom: 20px;"></div></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><h2 class="secton_title">WE MAKE IT EASY TO UPGRADE YOUR ENTIRE EXTERIOR</h2></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>We can make your property look like new construction or bring you a beautiful rustic appearance. We are here to fulfill all of your needs - big or small - and we love it. Upgrade to new siding and windows today. Your property will look fantastic, and our follow-up and maintenance habits will not leave you regretting a thing.</p></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>Simplify the construction process - and your life - with Will & Hall today.</p></div></div>

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
