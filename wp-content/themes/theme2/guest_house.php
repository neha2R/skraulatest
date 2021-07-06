<?php
   /* Template Name: SKRAU Guest House/Kisan Ghar
 */
   get_header();
   ?>
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

                                     <div class="col-md-12">
                               <h2 class="welcome-title"><?php echo $top_section['heading_section'];?></h2>
                               <div class="col-md-12">
                                   <img src="<?php the_post_thumbnail_url();?>" id="all_images_header-dpem" class="all_images_header"/>
                                   
                               </div>
                           <div class="col-md-12">
                                 <?php echo $top_section['content_section'];?>
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


