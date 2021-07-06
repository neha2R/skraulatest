<?php
   /* Template Name: Newsletter Subscription */
   get_header();
   ?>
   <style>
.btn {
  padding: .66em 2.25em;
  text-decoration: none;
  position: relative;
  display: inline-block;
}
.btn:after {
  content: '';
  display: block;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 4px;
  left: 4px;
  border-bottom: 0.125em solid;
  border-right: 0.125em solid;
}
.btn:active {
  -webkit-transform: translate(0.125em, 0.125em);
          transform: translate(0.125em, 0.125em);
}
.btn:active:after {
  -webkit-transform: translate(-0.125em, -0.125em);
          transform: translate(-0.125em, -0.125em);
}



.btn-outline-fill {
    color: #000;
    font-weight: 800;
  box-shadow: inset 0 0 0 0.125em #05396b;
  background-color: transparent;
  -webkit-transition: color 0.2s ease-out, box-shadow 0.2s ease-out, background-color 0.2s ease-out;
  transition: color 0.2s ease-out, box-shadow 0.2s ease-out, background-color 0.2s ease-out;
  border-radius: 0;
  padding: 15px 50px 15px 50px;
    margin: 8px;
}
.btn-outline-fill:after {
  border-color: #05396b;
}
.btn-outline-fill:hover {
  color: #fff;
  background-color: #05396b;
  box-shadow: inset 0 0 0 0.125em transparent;
}
.btn-outline-fill:hover:after {
  border-color: #05396b;
}

</style>
<?php $top_section=get_field('top_section');?>
<section>
   <div class="course-sec">
      <div class="container">
         <div class="course-detials">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="innr-program-section">
                     <div class="program-syllabus-sec">
                        <div id="ContentPlaceHolder1_Panel1">
                           
                           <div class="col-md-12" id="overviewmaindiv">
                               <div class="col-md-3" id="overviewmaindiv1">
                                   
                                   <?php include("sidebar.php"); ?>
                               </div>
                                <div class="col-md-9" id="overviewmaindiv2">
                                   <div class="row">
                                       <div class="col-md-12">
                                           <h2 class="welcome-title"><?php the_title();?></h2>
                                            <img src="<?php the_post_thumbnail_url();?>" class="all_images_header"/>
                                   
                                     </div>
                                     <div class="col-md-12">
<h4><b>Join the www.raubikaner.org Mailing List</b></h4>
 <?php echo do_shortcode('[contact-form-7 id="1917" title="Contact form 1"]');?> 

<h3>Available Newsletters -</h3>
                               <?php if( have_rows('newsletter_subscription_section') ): ?>
                                          <?php while( have_rows('newsletter_subscription_section') ): the_row(); 
                                              $text = get_sub_field('text');
                                             $pdf = get_sub_field('pdf');
                                             
                                             
                                             
                                             ?>
                           <div class="col-md-12" style="padding: 0;">
                           
                                <a href="<?php echo $pdf; ?>" target="_blank"><h5 style="font-size: 17px;"><?php echo $text; ?></h5></a>
                              </div>
                              
                              <?php endwhile; ?>
                        <?php endif; ?>
                        
                              
                              
                             
                           </div>
                                   </div>
                               </div>
                               

                              
                           <div class="col-md-12">
                                
                              </div>
                              
                             
                           </div>
                           
                                       <div class="clearfix" style="height:30px;"></div>
                          
                              
                           
                        </div>
                        
                     </div>
                  </div>
               </div>
               
            </div>
            
         </div>
      </div>
      
   </div>





   
</section>

<?php get_footer();?>


