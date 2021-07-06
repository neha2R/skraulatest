<?php
   /* Template Name: fimttc
   */
   get_header();
   ?>
<style>
   table { 
   width: 100%; 
   border-collapse: collapse; 
   }
   /* Zebra striping */
   tr:nth-of-type(odd) { 
   }
   td, th { 
   padding: 10px; 
   border: 1px solid #ccc; 
   text-align: left; 
   }
   /* 
   Max width before this PARTICULAR table gets nasty
   This query will take effect for any screen smaller than 760px
   and also iPads specifically.
   */
   @media 
   only screen and (max-width: 760px),
   (min-device-width: 768px) and (max-device-width: 1024px)  {
   table { 
   width: 100%; 
   }
   /* Force table to not be like tables anymore */
   table, thead, tbody, th, td, tr { 
   display: block; 
   }
   /* Hide table headers (but not display: none;, for accessibility) */
   thead tr { 
   position: absolute;
   top: -9999px;
   left: -9999px;
   }
   tr { border: 1px solid #ccc; }
   td { 
   /* Behave  like a "row" */
   border: none;
   border-bottom: 1px solid #eee; 
   position: relative;
  
   }
   td:before { 
   /* Now like a table header */
   position: absolute;
   /* Top/left values mimic padding */
   top: 6px;
   left: 6px;
   width: 45%; 
   padding-right: 10px; 
   white-space: nowrap;
   /* Label the data */
   content: attr(data-column);
   color: #000;
   font-weight: bold;
   }
   }
   .download-wrap {
    perspective: 80rem;
    perspective-origin: 50% 50% 0;
    width: 15rem;
    height: 4rem;
    margin: 0;
}
</style>
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

                                     <h2 class="welcome-title"><?php echo $top_section['main_heading'];?></h2>
                                        <div class="row">
                                          <div class="col-md-12">
                                               <table border="0">
                                          <tr>
                                            <td style="background: #05396b; color: #fff;"><strong>Document Name</strong></td>
                                            <td style="background: #05396b; color: #fff;"><strong>Download Link</strong></td>
                                           
                                          </tr>
                                           <?php if( have_rows('document_table') ): ?>
                                          <?php while( have_rows('document_table') ): the_row(); 
                                             
                                             $link_text = get_sub_field('link_text');
                                             $pdf = get_sub_field('pdf');
                                             
                                             
                                             ?>
                                          <tr>
                                            <td><?php echo $link_text; ?></td>
                                            <td><div class="download-wrap">
                                                      <div class="download">
                                                         <a href="<?php echo $pdf; ?>" class="button-download" style="color:#fff;" target="_blank">
                                                         Download
                                                         <span class="icon-wrap">
                                                         <i class="icon-download"></i>
                                                         </span>
                                                         </a>
                                                         <div class="meter">
                                                            <span class="meter-progress"></span>
                                                         </div>
                                                      </div>
                                                   </div>
                                        </td>
                                            
                                          </tr>
                                          <?php endwhile; ?>
                                          <?php endif; ?>
                                          
                                          
                                          
                                        </table>
                                             
                                          </div>
                                          
                                       </div>
                           <div class="clearfix" style="height:20px;"></div>
                           <div class="row">
                               <div class="col-md-12">
                                 <img src="<?php the_post_thumbnail_url();?>" id="all_images_header" class="all_images_header"/>
                              </div>
                              <div class="col-md-12">
                                 <p><?php echo $top_section['paragraph'];?></p>
                              </div>
                              
                           </div>
                           <div class="clearfix" style="height:30px;"></div>
                           <?php echo $top_section['list_section'];?>
                          
                           <div class="clearfix" style="height:30px;"></div>
                           <?php $farm_implements_section=get_field('farm_implements_section');?>
                           <div class="row">
                              <div class="col-md-12">
                                 <h4 class="welcome-title-dpem"><?php echo $farm_implements_section['heading'];?></h4>
                              </div>
                              <div class="col-md-9">
                                 <p><?php echo $farm_implements_section['content'];?></p>
                              </div>
                              <div class="col-md-3">
                                 <img src="<?php echo $farm_implements_section['image']['url'];?>" class="img-responsive"/>
                              </div>
                              <?php echo $farm_implements_section['list_section'];?>
                              
                           </div>
                           <div class="clearfix" style="height:30px;"></div>
                           <div class="row">
                               <?php $central_workshop_section=get_field('central_workshop_section');?>
                              <div class="col-md-12">
                                 <h4 class="welcome-title-dpem"><?php echo $central_workshop_section['heading'];?></h4>
                              </div>
                              <div class="col-md-9">
                                 <p><?php echo $central_workshop_section['content'];?>
                                 </p>
                                 
                              </div>
                              <div class="col-md-3">
                                 <img src="<?php echo $central_workshop_section['image']['url'];?>" class="img-responsive"/>
                              </div>
                           </div>
                           <div class="clearfix" style="height:30px;"></div>
                           <div class="row">
                              <div class="col-md-12">
                                  <?php $testing_fees_section=get_field('testing_fees_section');?>
                                 <h4 class="welcome-title-dpem"><?php echo $testing_fees_section['heading'];?></h4>
                              </div>
                              <div class="col-md-12">
                                 <img src="<?php echo $testing_fees_section['image']['url'];?>" class="all_images_header" />
                              </div>
                           </div>
                           <div class="clearfix" style="height:30px;"></div>
                           <div class="row">
                              <div class="col-md-8">
                                   <?php $achievements_section=get_field('achievements_section');?>
                                 <h4 class="welcome-title-dpem"><?php echo $achievements_section['heading'];?></h4>
                                 <?php echo $achievements_section['content'];?>
                                
                                  <?php echo $achievements_section['table'];?>
                                 
                              </div>
                              <div class="col-md-4">
                                 <img src="<?php echo $achievements_section['image']['url'];?>" class="all_images_header" />
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <h4 class="welcome-title-dpem"><?php echo $achievements_section['commercial_test_heading'];?></h4>
                                 <?php echo $achievements_section['commercial_test_table'];?>
                                
                              </div>
                              <div class="col-md-6">
                                 <h4 class="welcome-title-dpem"><?php echo $achievements_section['income_heading'];?></h4>
                                 <?php echo $achievements_section['income_table'];?>
                                 
                              </div>
                           </div>
                           <div class="clearfix" style="height:30px;"></div>
                           <div class="row">
                              <div class="col-md-12">
                                 <h4 class="welcome-title-dpem"><?php echo $achievements_section['training_heading'];?></h4>
                                 <img src="<?php echo $achievements_section['training_upper_image']['url'];?>" class="all_images_header" />
                                 <div class="clearfix" style="height:30px;"></div>
                                 <?php echo $achievements_section['training_upper_content'];?>
                              </div>
                           </div>
                           <div class="clearfix" style="height:30px;"></div>
                           <div class="row">
                           <div class="col-md-12">
                           <img src="<?php echo $achievements_section['training_lower_image']['url'];?>" class="all_images_header" style="margin-bottom:20px;" />
                           </div>
                           
                           <div class="col-md-12">
                               <?php echo $achievements_section['training_lower_content'];?>
                          
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
   </div>
</section>
<?php get_footer();?>