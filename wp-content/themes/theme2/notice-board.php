<?php
   /* Template Name: Notice Board */
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
                              <h2 class="welcome-title">Notice Board</h2>
                              
                              
                              <?php 
                              
                               $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : '1';
                                                $args = array (
                                                    'nopaging'               => false,
                                                    'paged'                  => $paged,
                                                    'posts_per_page'         => '2',
                                                     'category_name' => 'notice-board',
                                                );
                                                
                                                // The Query
                                                $query = new WP_Query( $args );
                                                
                                                // The Loop
                                                if ( $query->have_posts() ) {
                                                
                                                   
                                                
                                                    while ( $query->have_posts() ) {
                                                        $query->the_post();
                                                        ?>
                              
                              
                                               
                                      
                                                   
                                           
                              <div class="col-md-12 news_evnts_div">
                                <h4 class="heading_news_events"><i class="fa fa-calendar calender-icon" aria-hidden="true" style="color:red;"></i>&nbsp; Posted On <?php echo get_the_date();?> </h4>
                                <h5 class="subheading_news_events"> <?php the_title(); ?> </h5>
                                <p class="paragraph_nws_evnts"><?php the_content(); ?></p>
                                <p class="paragraph_nws_evnts">*Click on icon to download files :-&nbsp;&nbsp;<i class="fa fa-download" aria-hidden="true" style="cursor: pointer;"></i></p>
                              </div>
                              
                              <?php } ?>
                              
                              
                               <div style="float:right; font-weight: 100; padding-right: 20px;">
                                                 <?php
                                                                     previous_posts_link( '« Previous');
                                                                    next_posts_link( 'Next »', $query->max_num_pages );
                                                                
                                                                } else {
                                                                    // no posts found
                                                                    echo '<h1 class="page-title screen-reader-text">No Posts Found</h1>';
                                                                }
                                                                
                                                                // Restore original Post Data
                                                                wp_reset_postdata();
                                                                                    
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
   </div>
</section>
	<?php get_footer();?>