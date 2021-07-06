<?php
   /* Template Name: Video Gallery */
   get_header();
   ?>
<style>
iframe{
        width: 100%;
    height: 200px;
}
</style>
<section>
    <?php $top_section=get_field('top_section');?>
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
                                       <h2 class="welcome-title"><p><?php echo $top_section['main_heading'];?></p></h2>
                           <div class="row">
                               <?php if( have_rows('video_section') ): ?>
                                          <?php while( have_rows('video_section') ): the_row(); 
                                              $upload_video = get_sub_field('upload_video');
                                            
                                             
                                             
                                             
                                             ?>
                           <div class="col-md-6">
                           
                                <?php echo $upload_video; ?>
                              </div>
                              
                              <?php endwhile; ?>
                        <?php endif; ?>
                        
                              
                              
                             
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


