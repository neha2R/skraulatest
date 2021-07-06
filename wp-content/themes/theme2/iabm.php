<?php
   /* Template Name: IABM*/
   get_header();
   ?>
<style>
   .flip-card {
   background-color: transparent;
   height: 250px;
   perspective: 1000px;
   margin-top: 20px;
   }
   .flip-card-inner {
   position: relative;
   width: 100%;
   height: 100%;
   text-align: center;
   transition: transform 0.6s;
   transform-style: preserve-3d;
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
   }
   .flip-card:hover .flip-card-inner {
   transform: rotateY(180deg);
   }
   .flip-card-front, .flip-card-back {
   position: absolute;
   width: 100%;
   height: 100%;
   -webkit-backface-visibility: hidden;
   backface-visibility: hidden;
   }
   .flip-card-front {
   background-color: #fdfcf8;
   color: black;
   padding: 30px;
   }
   .flip-card-back {
   background-color: #05396b;
   color: white;
   transform: rotateY(180deg);
   padding: 25px;
   }
   .flip-card-back p {
   font-size: 12.5px;
   color: white;
   }
   #project1 {
   text-align: center;
   background-color: white;
   background-color: rgba(255,255,255,0.9);
   color: black;
   margin: 20px 0px 20px 0px;
   padding: 20px 10px 20px 10px;
   }
   #project1:hover {
   color: #05396b;
   }
   #project1:hover h4 {
   color: #05396b;
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
                                       <img src="<?php the_post_thumbnail_url();?>" id="all_images_header" class="all_images_header"/>
                                    </div>
                                    <div class="col-md-12">
                                       <p class="welcome-p">
                                          <?php echo $top_section['content'];?>
                                       </p>
                                    </div>
                                 </div>
                                 <!-- <div class="clearfix" style="height:30px;"></div>
                                 <?php $mission_section=get_field('mission_section');?>
                                 <h4 class="welcome-title-dpem"><?php echo $mission_section['heading'];?></h4>
                                 <?php echo $mission_section['content'];?>
                                 <div class="clearfix"></div>
                                 <?php $programs_section_heading=get_field('programs_section_heading');?>
                                 <h4 class="welcome-title-dpem"><?php echo $programs_section_heading['heading'];?></h4>
                                 <div class="row offered_hover">
                                    <?php if( have_rows('programs_section') ): ?>
                                    <?php while( have_rows('programs_section') ): the_row(); 
                                       $heading = get_sub_field('heading');
                                       $content = get_sub_field('content');
                                       
                                       
                                       ?>
                                    <div class="col-md-12 " id="project1">
                                       <h4 class="offered_h"><?php echo $heading; ?></h4>
                                       <p class="offered_p"><?php echo $content; ?></p>
                                    </div>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                 </div>
                                 <div class="clearfix"></div>
                                 <?php $infrastructure_heading=get_field('infrastructure_heading');?>
                                 <h4 class="welcome-title-dpem"><?php echo $infrastructure_heading['heading'];?></h4>
                                 <p><b><?php echo $infrastructure_heading['content'];?></b></p>
                                 <div class="row">
                                    <?php if( have_rows('infrastructure') ): ?>
                                    <?php while( have_rows('infrastructure') ): the_row(); 
                                       $heading = get_sub_field('heading');
                                       $content = get_sub_field('content');
                                       
                                       
                                       ?>
                                    <div class="col-md-6">
                                       <div class="flip-card">
                                          <div class="flip-card-inner">
                                             <div class="flip-card-front">
                                                <i class="fa fa-check"></i>
                                                <h3><?php echo $heading; ?></h3>
                                             </div>
                                             <div class="flip-card-back">
                                                <p> <?php echo $content; ?></p>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                 </div>
                                 <div class="clearfix"></div>
                                 <?php $placement_cell_section=get_field('placement_cell_section');?>
                                 <h4 class="welcome-title-dpem"><?php echo $placement_cell_section['heading'];?></h4>
                                 <?php echo $placement_cell_section['content'];?> -->
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