 <?php 
    get_header(); 


        $msg = "";
        $custname = "";
        $custemail = "";
        $subject = "";
        $message = "";
    if(isset($_POST['submit']))
    {
        $custname = htmlentities($_POST['custname']);
        $custemail = htmlentities($_POST['custemail']);
        $subject = htmlentities($_POST['subject']);
        $message = htmlentities($_POST['message']);

        $to      = $custemail;
        $subject = $subject;
        $message = $message;
        $headers = 'From: ceburbt@ceburbt-travel.com' . "\r\n" .
                'X-Mailer: PHP/';

        $var = mail($to, $subject, $message, $headers);
        if($var)
            $msg = "Message Sent";
        else
            $msg = "Error in sending your email. Please try again";


    }
      

?>
 <!--start contact-->
        <div class="contactmap">
            <!--start info contact-->
    <div class="infocontact infocontactlight blue">
    
    	<div class="contentinfocontact">
        	<p class="titleinfocontact">CEBU RBT TRAVEL</p>
            <ul>
            	<li><p><img alt="" src="<?php bloginfo('template_url');?>/img/contact/iconinfocontactaddress.png">Cebu City, Philippines</p></li>
                <li><p><img alt="" src="<?php bloginfo('template_url');?>/img/contact/iconinfocontactphone.png">Telephone: (0039) 34916656398</p></li>
                <li><p><img alt="" src="<?php bloginfo('template_url');?>/img/contact/iconinfocontactmail.png">Mail: ceburbt@ceburbt-travel.com</p></li>
            </ul>
        </div>
        
        <div class="triangleinfocontact">
        	<span></span>
        </div>
        
    	<!--start marker-->
     <!--    <div class="markercontactmap">
            <div class="circlemarker"><div class="innercirclemarker"></div></div>
            <div class="trianglemarker"></div>
        </div> -->
        <!--end marker-->
    
    </div>
    <!--end info contact-->
    
	<!--google maps-->
    <div id="map-canvas"></div>
    <!--google maps-->
    	
</div>
<!--end contactmap-->

<div class="divider"><span></span></div>

<!--start page-->
<section id="internalpage">

	<!--start container-->
    <div class="container clearfix">
    	
		<!--accordion-->
		<div class="grid_4 violet fade-left">
			<h2 class="titlewithborder">
                <span>OUR FEATURES</span>
            </h2>
            
			<div class="dividerheight20"></div>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit, neque erat fringilla nibh, vel sodales sem diam nec nunc. Donec mattis blandit metus ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><br/>
            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit, neque erat fringilla nibh, vel sodales sem diam nec nunc.</blockquote>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit, neque erat fringilla nibh, vel sodales sem diam nec nunc. Donec mattis blandit metus ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit.</p>
            

		</div>
		<!--end accordion-->
		
		<!--simple text-->
		<div class="grid_4 blue fade-up">
			<h2 class="titlewithborder"><span>OUR AGENCY</span></h2>
			<div class="dividerheight20"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit, neque erat fringilla nibh, vel sodales sem diam nec nunc. Donec mattis blandit metus ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><br/>
			<blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit, neque erat fringilla nibh, vel sodales sem diam nec nunc.</blockquote>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit, neque erat fringilla nibh, vel sodales sem diam nec nunc. Donec mattis blandit metus ut volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit.</p>
            
		</div>
		<!--end simple text-->
		
		<!--start form-->
		<div class="grid_4 green fade-right">
			<h2 class="titlewithborder"><span><?php the_title(); ?></span></h2>
			
			<!--start form-->

			<form class="contactform" method = "POST">

				<div class="dividerheight20"></div>	
				<ul>
                    <li class="filterinputicon">
                        <div class="inputicon inputfirstname"></div>
                    </li>
                    <li>
                        <input type="text" name = "custname" placeholder = "Name" value = "<?php echo "$custname"; ?>" required>
                    </li>
                </ul>
				<span class = "error-message"></span>
				<div class="dividerheight20"></div>
				
                <ul>
                    <li class="filterinputicon"><div class="inputicon inputemail"></div></li>
                    <li>
                        <input style = "width: 96%;
                        float: left;
                        border: 0;
                        background-color: #F9FAFC;
                        padding: 0 2%;
                        height: 50px;
                        color: #A9A9A9;
                        font-size: 13px;
                        font-style: italic;
                        font-weight: normal;
                        -webkit-box-shadow: inset 0px 0px 0px 1px rgba(244, 244, 246, 1.0);
                        box-shadow: inset 0px 0px 0px 1px rgba(244, 244, 246, 1.0); 
                        "type="email" name = "custemail" placeholder = "Email" value = "<?php echo $custemail; ?>" required>
                    </li>
                </ul>

                <span class = "error-message"></span>
                <div class="dividerheight20"></div>
                
                <ul>
                    <li class="filterinputicon"><div class="inputicon inputemail"></div></li>
                    <li><input type="text" name = "subject" placeholder = "Subject"  value = "<?php echo $subject; ?>" required></li>
                </ul>
				<span class = "error-message"></span>

				<div class="dividerheight20"></div>
				
				<textarea name = "message" placeholder = "Message" required><?php echo $message; ?></textarea>
				<span class = "error-message"></span>
				<div class="dividerheight20"></div>
				<span class = "error-message"><?php echo $msg; ?></span>
				<input value="SEND" type="submit" name = "submit">
			</form>
			<!--end form-->
			
		</div>
		<!--end form-->
    </div>
    <!--end container--> 
    
</section>
<!--end internal page-->


<div class="divider"><span></span></div>

 <?php get_footer(); ?>