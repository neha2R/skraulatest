<?php
   /* Template Name: Conferences */
   get_header();
   ?>


<section>
   <div class="course-sec">
      <div class="container">
         <div class="course-detials">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="innr-program-section">
                     <div class="program-syllabus-sec">
                        <div id="ContentPlaceHolder1_Panel2">
                           <div id="ContentPlaceHolder1_lbl_viewdata" class="welcome-p">
                              <h2 class="welcome-title">Conferences</h2>
                              <?php 
                                                $homepageEvents = new WP_Query(array(
                                                   'posts_per_page' => 2,
                                                   'order' => 'ASC',
                                                   'category_name' => 'conferences'
                                                   ));
                                                  
                                              while($homepageEvents->have_posts()){
                                               
                                                $homepageEvents->the_post();
                                               
                                                
                                                   ?>
                                      
                                                   
                                           
                              <div class="col-md-12 news_evnts_div">
                                <h4 class="heading_news_events"><i class="fa fa-calendar calender-icon" aria-hidden="true" style="color:red;"></i>&nbsp; Posted On <?php the_date(); ?> </h4>
                                <h5 class="subheading_news_events"> <?php the_title(); ?> </h5>
                                <p class="paragraph_nws_evnts"><?php the_content(); ?></p>
                                <p class="paragraph_nws_evnts">*Click on icon to download files :-&nbsp;&nbsp;<i class="fa fa-download" aria-hidden="true" style="cursor: pointer;"></i></p>
                              </div>
                              
                              <?php } ?>
                              
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