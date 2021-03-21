<?php 
if(isset($_POST['submit'])){
    $to = "williamanonstidhem2323@gmail.com"; // sends contact info to this email
    $too = "highridgeroof@gmail.com"; // sends contact info to this email
    $first_name = $_POST['fname'];
    $sender_email = $_POST['user_email'];
    $sender_phone = $_POST['user_phone'];
    $sender_message = $_POST['user_message'];
    $subject = "High Ridge Testimonail Form";
    $message = "First: " . $first_name . " \n\n " . "Email: " . $sender_email  . "\n\n" . "Phone: " . $sender_phone  . "\n\n" . "Testimonial: " . $sender_message . " \n\n " . "From Testimonials Page";
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

    <link rel="canonical" href="https://highridgepro.com/testimonials/" />

<meta charset="UTF-8">
<meta name="author" content="William Stidhem">
<meta name="keywords" content="construction, roofing, commercial roofing, residential roofing, siding, windows, window installation, eugene, springfield, lane county">
<meta name="description" content="">
<title>High Ridge LLC | Testimonials – Roofing, Siding, Windows</title>
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

    .three_testimonials{
        margin-top: 25px;
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

<?php include("../header.html"); ?>

<div class="roof_content" id="roof_content">

<div class="big_pic" id="big_pic">
    <div class="big_pic_copy_outer_wrap">
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h2>SCROLL DOWN TO READ OUR REVIEWS</h2></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>LICENCED &middot; INSURED &middot; GUARANTEED</h3></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>FINANCING AND FREE ESTIMATES</h3></div></div>
        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><h3>ROOFING &middot; SIDING &middot; SKYLIGHTS</h3></div></div>

        <div class="big_pic_copy_inner_wrap"><div class="big_pic_copy copy_show"><form action="https://highridgepro.com/contact"><button class="contact_button">CONTACT US &#62;</button></form></div></div>

    </div>
</div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><h1>We do what it takes for each commercial and residential roofing client.</h1></div></div>

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

                            <div class="my_text">Leave your review here<br><textarea class="comments" rows="5" name="user_message"></textarea></div>
                            
                            <div class="my_text">Write the word human here. <div class="red_text" >*</div><br><input class="input_len" name="hum" pattern="[H,h][U,u][M,m][A,a][N,n]$" required></div>
                            
                            <div class="my_text" style="text-align: center;"><input type="submit" name="submit" value="Submit" class="more_button"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="entrance_animation_wrap"><div class="entrance_animation slide_up"><h2 class="secton_title">TESTIMONIALS</h2></div></div>





<!-- <div class="three_sections three_testimonials">
    <div class="three_row">
        <div class="three_single single_testimonial">
            <p class="testimonial_content">Tim and his crew were professional and honest the whole way through. High quality craftsmanship, hard working crew, and great clean-up. Would highly recommend!</p>
            <p class="testimonial_signature">- BRANDON M</p>
        </div>
        <div class="three_single single_testimonial">
            <p class="testimonial_content">Excellent craftsmanship very well mannered and hard working crew. All around great company.</p>
            <p class="testimonial_signature">- KYLE BAXTER</p>
        </div>
        <div class="three_single single_testimonial">
            <p class="testimonial_content">Tim and his crew went above and beyond to do some needed repairs on our roof. The price was very reasonable and the work was completed in a timely matter.</p>
            <p class="testimonial_signature">- ROBERT & CHRISTI BARNES</p>
        </div>
    </div>
</div>
 -->





<div class="three_sections three_testimonials">
    <div class="three_row">
        <div class="three_single single_testimonial">
            <p class="testimonial_content">Tim and his crew were professional and honest the whole way through. High quality craftsmanship, hard working crew, and great clean-up. Would highly recommend!</p>
            <p class="testimonial_signature">- BRANDON M</p>
        </div>
        <div class="three_single single_testimonial">
            <p class="testimonial_content">Excellent craftsmanship very well mannered and hard working crew. All around great company.</p>
            <p class="testimonial_signature">- KYLE BAXTER</p>
        </div>
        <div class="three_single single_testimonial">
            <p class="testimonial_content">Tim and his crew went above and beyond to do some needed repairs on our roof. The price was very reasonable and the work was completed in a timely matter.</p>
            <p class="testimonial_signature">- ROBERT & CHRISTI BARNES</p>
        </div>
    </div>
</div>

<div class="three_sections three_testimonials">
    <div class="three_row">
        <div class="three_single single_testimonial">
            <p class="testimonial_content">High Ridge Construction is excellent in terms of being conscientious of making sure the job is done right. Tim came back to iron out some details related to the job; I wasn’t charged extra for that.</p>
            <p class="testimonial_signature">- BILL Y</p>
        </div>
        <div class="three_single single_testimonial">
            <p class="testimonial_content">This is a great local roofing company in the Springfield/Eugene area. I called several roofing companies for a bid on my roof and this was the company that stood out from the rest in bid presentation, quality of product and professionalism. Their communication through the process was exemplary as was their attention to detail. The owner and his crew are definitely 5* quality! Thank you Tim, Ben and crew!</p>
            <p class="testimonial_signature">- SONNY & MARNIE</p>
        </div>
        <div class="three_single single_testimonial">
            <p class="testimonial_content">Thank you High Ridge for the roof job you did. 3 days from tear off to completion! No mess left, and the team was courteous and professional. I particularly liked seeing the Owner hands on with the training and development of his team. Work Smart, follow the process, is what I got out of his directions, and than he inspected his expectations! Thank you! I highy recommend this business.</p>
            <p class="testimonial_signature">- LINDA FRICKE</p>
        </div>
    </div>
</div>

<div class="three_sections three_testimonials">
    <div class="three_row">
        <div class="three_single single_testimonial">
            <p class="testimonial_content">It wasn’t an easy process to find a right contractor to replace my old LP siding. Most of the proposals from a few contractors were very close to each other in many aspects except one unreasonably expensive out-of-state Siding company. High Ridge Roofing and Construction was our choice mostly influenced by the Owner, Tim’s energy toward the project, and that was the right choice. They did a great job. The whole team was courteous during the month-long work. After the completion of the work, the owner, Tim came back a few times to inspect the details and made final touchups. I don’t think I can ask better work than that. I do highly recommend Tim and his crew</p>
            <p class="testimonial_signature">- YOON SHINE</p>
        </div>
        <div class="three_single single_testimonial">
            <p class="testimonial_content">In the process of selling our home we found the roof needed repairs and in a hurry. We must have contacted six other companies in the area before we called Tim at High Ridge Construction. Tim was the only contractor to answer his phone and he made it our to our home within two days to provide an estimate. His estimate was well below the other companies and he was able to get us in within a week compared to months with the other guys. Tim and his crew are fantastic, I recommend them for any job without hesitation.</p>
            <p class="testimonial_signature">- DOUG BRYANT</p>
        </div>
        <div class="three_single single_testimonial">
            <p class="testimonial_content">Tim gave me a quick and accurate quote and was one of the most competitive bids. The bid price and the final price for the roof was the same… no mistakes or overruns. The project was completed as soon as the weather permitted, and the cleanup of debris was terrific. There was no sign that they had even been there. During this project, I asked Tim to fix some warped fascia boards and rebuild the chimney enclosure. He even painted them both and the cost was only for time and materials. He is a conscientious businessman and a master roofing craftsman. I would hire him again to do any other job, and I would probably skip the process of asking other contractors for bids. I was THAT impressed with him and his work.</p>
            <p class="testimonial_signature">- JOE E</p>
        </div>
    </div>
</div>

<div class="three_sections three_testimonials">
    <div class="three_row">
        <div class="three_single single_testimonial">
            <p class="testimonial_content">Tim and his crew are great. Period.</p>
            <p class="testimonial_signature">- LAWREI Z</p>
        </div>
        <div class="three_single single_testimonial">
            <p class="testimonial_content">Excellent work and great prices.</p>
            <p class="testimonial_signature">- PHIL D</p>
        </div>
        <div class="three_single single_testimonial">
            <p class="testimonial_content">They are standup guys and did a good job.</p>
            <p class="testimonial_signature">- JASON N</p>
        </div>
    </div>
</div>





<div class="three_sections three_testimonials">
    <div class="three_row">
        <div class="three_single single_testimonial">
            <p class="testimonial_content">High Ridge Roofing did a great job!  They showed up on time when they said they’d be there. There was always someone up on the roof hammering when other workers took breaks or lunch.  They picked up after themselves and any roofing debris each day. The men were very polite when talking to me and each other and I never heard one swear come out of their mouths!!  I highly recommend this company!!  Thank You High Ridge Roofing!!!</p>
            <p class="testimonial_signature">- SHERRY W. Z</p>
        </div>
        <div class="three_single single_testimonial">
            <p class="testimonial_content">Working with High Ridge has been a very positive experience all the way: from the initial consultation to the registration of the warranty Tim and his crew kept us updated about the various work steps during  the replacement of our roof.The hard working crew was always on time and collected all debris around the house before they left. Great reliability and excellent craftsmanship!</p>
            <p class="testimonial_signature">INA ASIM</p>
        </div>
        <div class="three_single single_testimonial"  style="border:none; box-shadow: none;">
            <p class="testimonial_content"></p>
            <p class="testimonial_signature"></p>
        </div>
    </div>
</div>




</div>  <!--break roof_content -->
<!-- <div class="dummy" style="width: 100%; height: 500px; background: red; position: relative;"></div> -->

<?php include("../footer.html"); ?>
</body>

</html>
