 <?php get_header(); ?>
        <section class="header-page fade-up header-page-tours">
        	<div class="bounce-in animate4"><h2 class="header-pagetitle">AMAZING TOURS</h2></div>
        </section>

        <div class="divider"><span></span></div>

        <!--start page-->
        <section id="internalpage">

        	<!--start container-->
            <div class="container clearfix">
            
                 <?php        
                        $options = array('cat' => '3', 'order' => 'DESC');
                        $query = new WP_Query($options);
                        while ( $query->have_posts() ) : $query->the_post();
                            $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'full' );
                            $id = get_the_ID();
                            $description = get_post_meta($id, 'description'); 
                            $price = get_post_meta($id, 'tour-price'); 
                        ?>
        		<div class="grid_6">
                    <!--start archivetour-->
                    <div class="archivetour yellow fade-left animate1">
                        
                        <!--left-->
                        <div class="leftarchivetour">
                        
                            <a href="single-project.html">
                                <img alt="" class="imgleftarchivetour opacity" src="<?php echo $image_src[0]; ?>">
                            </a>
                        
                            <div class="pricetitleleftarchivetour">
                                
                                <div class="priceleftarchivetour">
                                    <p>1000 $</p>
                                </div>
                                <p class="titleleftarchivetour">For person</p>
                            </div>
                        
                        
                        </div>
                        <!--end left-->
                        
                        <!--right-->
                        <div class="rightarchivetour">
                        
                            <div class="titledayarchivetour">
                                <a href="single-project.html">
                                    <p class="titlearchivetour"><?php the_title(); ?></p>
                                </a>
                            
                                <div class="dayarchivetour">
                                    <p>15</p>
                                    <span>DAYS</span>
                                </div>
                            
                            </div>
                            
                            <div class="descriptioniconsarchivetour">
                            
                                <p class="descriptionarchivetour">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin cursus, elit vitae fermentum hendrerit, neque erat fringilla nibh.</p>
                                <p class="iconsarchivetour">
                                
                                    <a title="Car" class="tooltip" href="#"><img alt="" src="<?php bloginfo('template_url');?>/img/tours/icon/car.png"></a>
                                    <a title="Fly and Drive" class="tooltip" href="#"><img alt="" src="<?php bloginfo('template_url');?>/img/tours/icon/plane.png"></a>
                                    <a title="Sun" class="tooltip" href="#"><img alt="" src="<?php bloginfo('template_url');?>/img/tours/icon/sun.png"></a>
                                    <a title="Insurance included" class="tooltip" href="#"><img alt="" src="<?php bloginfo('template_url');?>/img/tours/icon/insurance.png"></a>
                                    <a title="Nature" class="tooltip" href="#"><img alt="" src="<?php bloginfo('template_url');?>/img/tours/icon/nature.png"></a>
                                
                                </p>
                            
                            </div>
                        
                        </div>
                        <!--end right-->
                           
                    </div>
                    <!--end archivetour-->
                </div>
            <!--end container--> 
            <?php endwhile; ?>
            
        </section>
        <!--end internal page-->

        <div class="divider"><span></span></div>

 <?php get_footer(); ?>