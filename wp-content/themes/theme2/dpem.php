<?php
   /* Template Name: Directorate: Prioritization, Monitoring and Evaluation */
   get_header();
   ?>
<style>
   .check-color{
   color:#05396b;
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

                              <div class="row">
                                 <div class="col-md-12">
                                    <h2 class="welcome-title"><?php echo $top_section['main_heading'];?></h2>
                                    <img src="<?php the_post_thumbnail_url();?>" id="all_images_header-dpem" class="all_images_header"/>
                                 </div>
                                 <div class="col-md-12">
                                    <p class="welcome-p">
                                       <?php echo $top_section['paragraph'];?>
                                    </p>
                                 </div>
                              </div>
                              <div class="clearfix" style="height:30px;"></div>
                              <h2 class="welcome-title">Objectives of DPME</h2>
                              <div class="row">
                                 <div class="col-md-12 ul_dpem">
                                    <?php echo $top_section['objective_section'];?>
                                 </div>
                                 <div class="col-md-6 ul_dpem">
                                 </div>
                              </div>
                              <div class="clearfix"></div>
                              <div class="row">
                                 <?php if( have_rows('bottom_intro_section') ): ?>
                                 <?php while( have_rows('bottom_intro_section') ): the_row(); 
                                    $image = get_sub_field('image');
                                    $name = get_sub_field('name');
                                    $des = get_sub_field('des');
                                    
                                    
                                    ?>
                                 
                                    <div class="col-md-6" style="margin: 20px 0px 0px 0px;">
                                       <h4 class="welcome-title-dpem" style="line-height: 15px; font-size: 15px;"><?php echo $name; ?></h4>
                                       <p><?php echo $des; ?></p>
                                    </div>
                                    
                                                                  <?php endwhile; ?>
                                 <?php endif; ?>
                              </div>
                           </div>
                        </div>
                        </div>
                        <div id="ContentPlaceHolder1_Panel3">
                           <span id="ContentPlaceHolder1_Label1"></span>
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