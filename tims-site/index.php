<?php 
if(isset($_POST['submit'])){
    $to = "williamanonstidhem2323@gmail.com"; // sends contact info to this email
    $too = "highridgeroof@gmail.com";
    $first_name = $_POST['fname'];
    $sender_email = $_POST['user_email'];
    $sender_phone = $_POST['user_phone'];
    $sender_message = $_POST['user_message'];
    $subject = "High Ridge Contact Form";
    $message = "First: " . $first_name . " \n\n " . "Email: " . $sender_email  . "\n\n" . "Phone: " . $sender_phone  . "\n\n" . "Message: " . $sender_message . "\n\n" . "From Home Page";
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
    
    <!--<meta name="google-site-verification" content="NqixTT4AQ6ElQVoZ-hX5xPNXpP-JJSWMPIYF-pfIT2g" />-->
    <meta name="google-site-verification" content="Exj0thwLjIjXoWT7HyWS-K6MrlFCFMTkza8IJszqffU" />



	<link rel="canonical" href="https://highridgepro.com/" />

<meta charset="UTF-8">
<meta name="author" content="William Stidhem">
<meta name="keywords" content="construction, roofing, commercial roofing, residential roofing, siding, windows, window installation, eugene, springfield, lane county">
<meta name="description" content="We do residential roofs, commercial roofs, siding and windows">
<title>High Ridge LLC | Residential And Commercial Roofing</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" href="https://highridgepro.com/img/roofing-logo-tab.png" type="image/x-icon">  <!-- sets the tab icon-->
<link rel="apple-touch-icon" href="https://highridgepro.com/img/roofing-logo-tab.png">

<link rel="stylesheet" type="text/css" href="https://highridgepro.com/css/roof.css">
<script async src="https://highridgepro.com/js/roof.js"></script>

<style>
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://highridgepro.com/img/big-background-pics/eugene-oregon-roofing-m2.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center center;
        background-size: cover;
    }

    .split{
        /*border: 1px solid yellow;*/
        display: flex;
        flex-direction: column;
    }

    .split_left{
        /*border: 1px solid blue;*/
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .split_right{
        /*border: 1px solid red;*/
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .split_copy{
        /*border: 2px solid teal;*/
    }

    .split_copy h2{
        width: 100%;
        /*border: 2px solid green;*/
        font-weight: bold;
        margin: 10px 0;
        /*color: red;*/
    }

    .split_pic{
        /*border: 2px solid orange;*/
        width: 70%;
        margin: 0;
        padding: 0;
        /*flex-basis: 60%;*/
        line-height: 0;
    }

    .split_pic img{
        width: 100%;
        height: auto;
        line-height: 0;
    }

@media screen and (min-width:320px){}

/* portrait phones*/
@media screen and (max-device-width:738px)
and (orientation: portrait)  {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://highridgepro.com/img/big-background-pics/eugene-oregon-roofing-m2.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: scroll;
    }

    .split_pic{
        width: 100%;
    }
}

/*landscape phones*/
@media screen and (max-device-width:738px)
and (orientation: landscape) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://highridgepro.com/img/big-background-pics/eugene-oregon-roofing-6.jpg);
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
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://highridgepro.com/img/big-background-pics/eugene-oregon-roofing-m2.jpg);
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
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://highridgepro.com/img/big-background-pics/eugene-oregon-roofing-6.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .no_pad{
        padding-top: 0px;
    }

    .hide_sep{
        display: none;
    }

    .split{
        display: flex;
        flex-direction: row;
    }

    .split_reverse{
        flex-direction: row-reverse;
    }

    .split_left{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        flex-basis: 50%;
    }

    .split_right{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        flex-basis: 50%;
    }

    .split_copy{
    }

    .split_copy h2{
        margin: 10px 0;
    }

    .split_pic{
        width: 100%;
    }
}

/*portrait ipad pro*/
@media screen and (min-width:961px) 
and (orientation: portrait) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://highridgepro.com/img/big-background-pics/eugene-oregon-roofing-m2.jpg);
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }
}

/* galaxy landscape, big landscape tablets/laptops/desktops */
@media screen and (min-width:1025px) {
    .big_pic{
        background:linear-gradient(rgba(0, 0, 0, 0.4),rgba(0, 0, 0, 0.4)),url(https://highridgepro.com/img/big-background-pics/eugene-oregon-roofing-6.jpg);
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

<?php include("header.html"); ?>

<div class="roof_content" id="roof_content">

<div class="big_pic" id="big_pic">
	<div class="big_pic_copy_outer_wrap">
		<div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h2>Increase The Value Of Your Property</h2></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>LICENCED &middot; INSURED &middot; GUARANTEED</h3></div></div>
		<div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>FINANCING AND FREE ESTIMATES</h3></div></div>
		<div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>ROOFING &middot; SIDING &middot; SKYLIGHTS</h3></div></div>

        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><form action="https://highridgepro.com/contact"><button class="contact_button">CONTACT US &#62;</button></form></div></div>

	</div>
</div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><h1>Quality roofers at a trusted roofing company in Eugene and Springfield.</h1></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><p>We depend heavily on word of mouth. That means our number one priority is customer satisfaction. We will finish your roof or siding job on time and within the budget. We guarantee our work, and our roofs. Our record proves that we are trusted. Our record speaks for itself.</p></div></div>

<div class="hide_sep"><div class="separator_wrap"><div class="separator zoom"></div></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up">
    <div class="split">
        <div class="split_left"><div class="split_pic"><img src="https://highridgepro.com/img/residential-roofers-eugene.jpg" alt="residential roofers in eugene"></div></div>
        <div class="split_right"><div class="split_copy"><h2>RESIDENTIAL ROOFING</h2><p>Nothing says you care about your home and loved ones like a beautiful new roof. Upgrade your home with a new shingle, metal or flat roof today.</p><form action="https://highridgepro.com/residential-roofing"><button class="more_button">READ MORE&nbsp;&nbsp;&#62;</button></form></div></div>
    </div>
</div></div>

<div class="hide_sep"><div class="separator_wrap"><div class="separator zoom"></div></div></div>

<div class="entrance_animation_wrap no_pad"><div class="entrance_animation slide_up">
    <div class="split split_reverse">
        <div class="split_left"><div class="split_pic"><img src="https://highridgepro.com/img/commercial-roofers-eugene.jpg" alt="commercial roofers in eugene"></div></div>
        <div class="split_right"><div class="split_copy"><h2>COMMERCIAL ROOFING</h2><p>Your place of business needs to make a good first impression. Go with a company who will leave your building looking flawless. Go with high quality. Go with High Ridge.</p><form action="https://highridgepro.com/commercial-roofing"><button class="more_button">READ MORE&nbsp;&nbsp;&#62;</button></form></div></div>
    </div>
</div></div>

<div class="hide_sep"><div class="separator_wrap"><div class="separator zoom"></div></div></div>

<div class="entrance_animation_wrap no_pad"><div class="entrance_animation slide_up">
    <div class="split">
        <div class="split_left"><div class="split_pic"><img src="https://highridgepro.com/img/residential-siding-eugene.jpg" alt="siding replacement and repair"></div></div>
        <div class="split_right"><div class="split_copy"><h2>SIDING AND WINDOWS</h2><p>We will totally transform your property. New windows and siding will help us deliver that state-of-the-art appearance you have been looking for.</p><form action="https://highridgepro.com/siding-and-windows"><button class="more_button">READ MORE&nbsp;&nbsp;&#62;</button></form></div></div>
    </div>
</div></div>

<div class="separator_wrap"><div class="separator zoom"></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><h2 class="secton_title">ABOUT HIGH RIDGE</h2></div></div>

<div class="three_sections three_about">
    <div class="three_row">
        <div class="three_single single_about">
            <img src="https://highridgepro.com/img/check-mark.png" alt="check mark">
            <h3>Certified</h3>
            <p>We’re certified GAF roof installers. That means qualified installers, quality materials, and protection for our clients.</p>
        </div>
        <div class="three_single single_about">
            <img src="https://highridgepro.com/img/check-mark.png" alt="check mark">
            <h3>Qualified</h3>
            <p>We have been installing roofs for decades. Our experience has taught us a lot about the unique roofing requirements of the Northwest.</p>
        </div>
        <div class="three_single single_about">
            <img src="https://highridgepro.com/img/check-mark.png" alt="check mark">
            <h3>Verified</h3>
            <p>Check out our testimonials and reviews. We always – ALWAYS – surpass the expectations of our roofing clients.</p>
        </div>
    </div>
</div>

<div class="outbound_logo_links">
    <div class="single_outbound"><img src="https://highridgepro.com/img/outbound-logos/eugene-chamber-of-commerce-logo.png" alt="eugene chamber of commerce logo"></div>
    <div class="single_outbound"><img src="https://highridgepro.com/img/outbound-logos/GAF-certified-roofers.png" alt="gaf logo"></div>
    <div class="single_outbound"><img src="https://highridgepro.com/img/outbound-logos/better-business-logo.png" alt="better business icon"></div>
    <div class="single_outbound"><img src="https://highridgepro.com/img/outbound-logos/national-roofers-logo.png" alt="national roofers logo"></div>
    <div class="single_outbound"><img src="https://highridgepro.com/img/outbound-logos/springfield-chamber-of-commerce-logo.png" alt="springfield chamber of commerce logo"></div>
</div>

<div class="entrance_animation_wrap about_page_button"><div class="entrance_animation slide_up"><form action="https://highridgepro.com/about"><button class="more_button">VISIT OUR ABOUT PAGE&nbsp;&nbsp;&#62;</button></form></div></div>

<div class="separator_wrap"><div class="separator zoom"></div></div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><h2 class="secton_title">TESTIMONIALS</h2></div></div>

<div class="three_sections three_testimonials">
    <div class="three_row">
        <div class="three_single single_testimonial">
            <p class="testimonial_content">Tim and his crew were professional and honest the whole way through. High quality craftsmanship, hard working crew, and great clean-up. Would highly recommend!</p>
            <p class="testimonial_signature">- BRANDON M</p>
        </div>
        <div class="three_single single_testimonial">
            <p class="testimonial_content">High Ridge Roofing did a great job!  They showed up on time when they said they’d be there. They picked up after themselves each day. The men were very polite when talking to me and each other and I never heard one swear come out of their mouths!!  I highly recommend this company!!  Thank You High Ridge Roofing!!!</p>
            <p class="testimonial_signature">- SHERRY W</p>
        </div>
        <!--<div class="three_single single_testimonial">-->
        <!--    <p class="testimonial_content">Tim and his crew went above and beyond to do some needed repairs on our roof. The price was very reasonable and the work was completed in a timely matter.</p>-->
        <!--    <p class="testimonial_signature">- ROBERT & CHRISTI BARNES</p>-->
        <!--</div>-->
        
        <div class="three_single single_testimonial">
            <p class="testimonial_content">Working with High Ridge has been a very positive experience all the way: from the initial consultation to the registration of the warranty Tim and his crew kept us updated about the various work steps during  the replacement of our roof.The hard working crew was always on time and collected all debris around the house before they left. Great reliability and excellent craftsmanship!</p>
            <p class="testimonial_signature">- INA ASIM</p>
        </div>
        
        
    </div>
</div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><form action="https://highridgepro.com/testimonials"><button class="more_button">MORE TESTIMONIALS&nbsp;&nbsp;&#62;</button></form></div></div>

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
<!-- 
<div class="outbound_logo_links">
    <div class="single_outbound"><img src="https://highridgepro.com/img/outbound-logos/eugene-chamber-of-commerce-logo.png" alt="eugene chamber of commerce logo"></div>
    <div class="single_outbound"><img src="https://highridgepro.com/img/outbound-logos/GAF-certified-roofers.png" alt="gaf logo"></div>
    <div class="single_outbound"><img src="https://highridgepro.com/img/outbound-logos/better-business-logo.png" alt="better business icon"></div>
    <div class="single_outbound"><img src="https://highridgepro.com/img/outbound-logos/national-roofers-logo.png" alt="national roofers logo"></div>
    <div class="single_outbound"><img src="https://highridgepro.com/img/outbound-logos/springfield-chamber-of-commerce-logo.png" alt="springfield chamber of commerce logo"></div>
</div>
 -->
</div>  <!--break roof_content -->
<!-- <div class="dummy" style="width: 100%; height: 500px; background: red; position: relative;"></div> -->

<?php include("footer.html"); ?>

</body>

</html>
