<?php
   /* Template Name: Administrative Set Up */
   get_header();
   ?>
   <style>


   </style>
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
                                  <h2 class="welcome-title"><p><?php the_title(); ?></p></h2>
                           <div class="row">
                           <div class="col-md-12">
                                 
                                       <img src="<?php the_post_thumbnail_url();?>" class="all_images_header"/>
                                  
                                    
                              </div>
                              
                             
                           </div>
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


