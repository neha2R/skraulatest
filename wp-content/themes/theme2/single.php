<?php
   
   get_header();
   ?>
   <style>
       .download-wrap {
    perspective: 80rem;
    perspective-origin: 50% 50% 0;
    width: 15rem;
    height: 4rem;
     margin: 0;
}
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
                        <div class="col-md-12">
                             <div class="col-md-3">
                                     <?php include("sidebar.php"); ?>
                                 </div>
                            <div class="col-md-9">
                                <h2 class="welcome-title"><p>News and Tenders</p></h2>
                        
                       
                        <div class="clearfix" style="height:50px;"></div>
                       
                        <?php 
                            if ( have_posts() ) : 
                                while ( have_posts() ) : the_post(); ?>
                                    <div class="col-md-12 " style="margin-bottom:40px;">
                            
                                
                               <h3 class="subheading_news_events"><b><?php echo the_title();?></b> &nbsp; </h3>
                               
                                 <p class="subheading_news_events"> <?php echo the_content();?></p>
                                
                                
                              </div>
                               <?php endwhile; 
                            endif; 
                            ?>
                       
                         
                              
                         
                        
                        
                        
                        
                            </div>
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