<?php
   /* Template Name: National Seed Project */
   get_header();
   ?>
<style>
   blockquote {
   margin: 0 auto;
   padding: 1em;
   border-left: 5px solid rgba(31,43,59,0.92);
   margin: 10px 50px 10px 50px
   }
   blockquote:before {
   display: none;
   }
   blockquote:not(:first-of-type) {
   margin-top: .5em;
   }
   blockquote p {
   font-size: 14px;
   line-height: 1.4;
   }
   blockquote ul {
   font-size: 14px;
   }
   blockquote:nth-of-type(even) {
   text-align: right;
   border-left: none;
   border-right: 5px solid rgba(31,43,59,0.92);
   }
   blockquote:nth-of-type(even) footer {
   text-align: right;
   }
   blockquote:nth-of-type(even) footer:before {
   content: '';
   }
   blockquote:nth-of-type(even) footer:after {
   content: ' —';
   }
   @element 'blockquote' and (min-width: 300px) {
   blockquote {
   padding: 1em 20% 1em 1em;
   }
   blockquote p {
   font-size: 14pt;
   }
   blockquote:nth-of-type(even) {
   padding: 1em 1em 1em 20%;
   }
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
                                 <h2 class="welcome-title">
                                    <p><?php echo $top_section['main_heading'];?></p>
                                 </h2>
                                 <div class="row">
                                    <div class="col-md-12">
                                       <img src="<?php the_post_thumbnail_url();?>" class="all_images_header"/>
                                    </div>
                                    <div class="col-md-12">
                                       <p><?php echo $top_section['content'];?></p>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <?php if( have_rows('middle_section') ): ?>
                                    <?php while( have_rows('middle_section') ): the_row(); 
                                       $heading = get_sub_field('heading');
                                       $content = get_sub_field('content');
                                       
                                       
                                       ?>
                                    <blockquote>
                                       <h4 class="welcome-title-dpem"><?php echo $heading; ?></h4>
                                       <?php echo $content; ?>
                                    </blockquote>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                 </div>

                                 <div class="row">
                                 <?php $email_section=get_field('email_section');?>
                                 <?php echo $email_section['emailsection'];?>
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