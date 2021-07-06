<?php
   /* Template Name: Search */
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
                           
                           <div class="col-md-12">
                               
                                <div class="col-md-12">
                                   <div class="row">
                                        <?php if ( have_posts() ) :
				WP_Advanced_Search (); 

		
				
	 ?>

			<?php
			// Start the loop.
			while ( have_posts() ) :
				the_post();
			

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

				// End the loop.
					
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination(
				array(
					'prev_text'          => __( 'Previous page', 'skrau' ),
					'next_text'          => __( 'Next page', 'skrau' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'skrau' ) . ' </span>',
				)
			);

			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
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






