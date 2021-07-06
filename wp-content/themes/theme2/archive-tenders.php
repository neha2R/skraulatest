<?php
   /* Template Name: Archive Tenders */
   get_header();
   ?>
<style>
   table {
   border-collapse: collapse;
   border-spacing: 0;
   }
   table thead,
   table th,
   table td,
   table tfoot {
   border: 1px solid #ccc;
   padding: 10px;
   }
   table thead {
   background-color: #77b81e;
   }
   table td:first-child {
   color: #000;
   }
   table td.not-first-child {
   color: #000;
   }
   .for_bold{
   font-weight:bold;
   }
   .container2 select {
   text-align: left;
   border: 1px solid gray;
   padding: 4px;
   margin: 0 0 1rem;
   }
   .container2 .box {
   display: inline-block;
   overflow: hidden;
   }
   .container2 .box.blue {
   background: #023159;
   }
   .container2 .box.pink {
   background: #7D0844;
   }
   .container2 .box.purple {
   background: #3d048f;
   }
   .container2 .box.teal {
   background: #05A3A3;
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
                        <div class="col-md-12" id="overviewmaindiv">
                               <div class="col-md-3" id="overviewmaindiv1">
                                   
                                   <?php include("sidebar.php"); ?>
                               </div>
                                <div class="col-md-9" id="overviewmaindiv2">
                              <h2 class="welcome-title">
                                 <p>Archive Tenders</p>
                              </h2>
                              <a href="<?php echo site_url('/tenders')?>">
                              <p><b>Show Current</b></p>
                              </a>

<div class="clearfix" style="height:20px;"></div>
                              <div class="col-md-12">

                                 <?php 
 
                                    $homepageEvents = new WP_Query(array(
                                       'posts_per_page' => 10,
                                       'order' => 'DSC',
                                       'category_name' => 'archive-tenders'
                                      
                                       ));
                                      
                                    while($homepageEvents->have_posts()){
                                    
                                    $homepageEvents->the_post();
                                    $category = get_the_category( $id );
                                    
                                       ?>
                                       <div class="col-md-12">
				                    <p style="color:red;font-weight: 600; margin: 0;"><?php echo $category[0]->cat_name; ?></p>
                                
                                    <p style="color:000;font-weight: normal;">&nbsp;<?php echo get_the_date();?>&nbsp;&nbsp; <a href="<?php echo get_permalink($post->ID);?>" style="font-weight: normal;"><?php echo wp_trim_words(get_the_content(), 10);?></a></p>
                                    </div>
                                    <hr style="border: 0.1px dashed #77b81e;">
                                    
                               
                                 <?php } ?>
                                 <?php  wp_reset_postdata();  ?>
                                 <!--<hr style="border: 0.1px dashed #77b81e;">-->
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