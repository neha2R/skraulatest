<?php
   /* Template Name: Introduction */
   get_header();
   ?>
<style>
   .bg-green{
   padding: 40px 0px 40px 0px;
   background: #05396b; 
   }
   .bg-heading{
   color: #fff;
   
   }
   .bg-p{
   color: #fff;
   }
   .welcome-title-green-box {
    margin: 0px 0px 15px 0px;
    padding: 0px 15px 10px 15px;
    width: 100%;
    height: auto;
    float: left;
    font-weight: 700;
    font-size: 30px;
    color: #fff;
    line-height: 35px;
    font-family: Roboto Slab;
    position: relative;
    letter-spacing: 1px;
}
   .welcome-title-green-box:after {
    border-bottom: 3px solid;
    height: 2px;
    width: 80px;
    content: "";
    position: absolute;
    left: 15px;
    bottom: 0px;
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
                        <div id="ContentPlaceHolder1_Panel2">
                           
                              <div class="col-md-12 welcome-p">
                                 <div class="col-md-3">
                                     <?php include("sidebar.php"); ?>
                                 </div>
                                 <div class="col-md-9">
                                     <div class="row">
                                 <h2 class="welcome-title "><p><?php echo $top_section['main_heading'];?></p></h2>
                                 <div class="col-md-9">
                                    <p class="welcome-p" style="text-align: justify;"><?php echo $top_section['intro'];?></p>
                                 </div>
                                 <div class="col-md-3">
                                    <img src="<?php echo $top_section['image']['url'];?>" class="all_images_header" >
                                 </div>
                              </div>
                              <div style="height:70px;"></div>
                              <?php if( have_rows('middle_section') ): ?>
                                          <?php while( have_rows('middle_section') ): the_row(); 
                                            
                                             $heading = get_sub_field('heading');
                                             $paragraph = get_sub_field('paragraph');
                                             
                                             
                                             ?>
                              <div class="col-md-12 bg-green" >
                                 <div class="col-md-12">
                                     
                                    <h2 class="welcome-title-green-box bg-heading"><?php echo $heading; ?></h2>
                                    <p class="welcome-p bg-p" style="text-align: justify; "><?php echo $paragraph; ?></p>
                                 </div>
                                 <!--<div class="col-md-3">-->
                                 <!--   <img  src="<?php bloginfo('template_directory');?>/images/1.jpg" class="img-responsive logo-img" style="margin-top: 65px;" />-->
                                 <!--</div>-->
                              </div>
                               <?php endwhile; ?>
                                          <?php endif; ?>
                              
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
   </div>
</section>
<?php get_footer();?>