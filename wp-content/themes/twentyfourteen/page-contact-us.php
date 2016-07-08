 <?php get_header(); ?>
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
    <!--     <div class="markercontactmap">
            <div class="circlemarker"><div class="innercirclemarker"></div></div>
            <div class="trianglemarker"></div>
        </div> -->
        <!--end marker-->
    
    </div>
    <!--end info contact-->
    
	<!--google maps-->
    <!-- <div id="map-canvas"></div> -->
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
			<h2 class="titlewithborder"><span>OUR FEATURES</span></h2>
            
			<div class="dividerheight20"></div>
            
            <!--start accordion-->
            <div class="accordion accordionlight">
                
                <h4 class="violet-borderleft firstaccordiontitle">CREATIVE</h4>
                <div>
                    <p>
                    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                    </p>
                </div>
                
                <h4 class="violet-borderleft">DYNAMIC</h4>
                <div>
                    <p>
                     Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                    </p>
                </div>
                
                <h4 class="violet-borderleft">PROFESSIONAL</h4>
                <div>
                    <p>
                     Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                    </p>

                </div>
                
            </div>
            <!--end accordion-->
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
                    <li><input type="text" name = "custname" value = "" placeholder = "Name"></li>
                </ul>
				<span class = "error-message"></span>
				<div class="dividerheight20"></div>
				
                <ul>
                    <li class="filterinputicon"><div class="inputicon inputemail"></div></li>
                    <li><input type="text" name = "custemail" value = "" placeholder = "Email"></li>
                </ul>

                <span class = "error-message"></span>
                <div class="dividerheight20"></div>
                
                <ul>
                    <li class="filterinputicon">
                        <div class="inputicon inputemail"></div>
                    </li>
                    <li><input type="text" name = "subject" value = "" placeholder = "Subjet"></li>
                </ul>
				<span class = "error-message"></span>

				<div class="dividerheight20"></div>
				
				<textarea name = "message">Message</textarea>
				<span class = "error-message"></span>
				<div class="dividerheight20"></div>
				
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