<?php
   /* Template Name: ARSS Hanumangarh */
   get_header();
   ?>
<style>
  
 

/* Accordion styles */
.tabs {
  
  overflow: hidden;

}

.tab {
  width: 96%;
  color: white;
  overflow: hidden;
}
.tab-label {
  display: -webkit-box;
  display: flex;
  -webkit-box-pack: justify;
          justify-content: space-between;
  padding: 1em;
  background: #05396b;
  font-weight: bold;
  cursor: pointer;
  /* Icon */
}
.tab-label:hover {
  background: #1a252f;
}
.tab-label::after {
  content: "\276F";
  width: 1em;
  height: 1em;
  text-align: center;
  -webkit-transition: all .35s;
  transition: all .35s;
}
.tab-content {
  max-height: 0;
  padding: 0 1em;
  color: #2c3e50;
  background: white;
  -webkit-transition: all .35s;
  transition: all .35s;
  
}
.tab-close {
  display: -webkit-box;
  display: flex;
  -webkit-box-pack: end;
          justify-content: flex-end;
  padding: 1em;
  font-size: 0.75em;
  background: #2c3e50;
  cursor: pointer;
}
.tab-close:hover {
  background: rgba(31,43,59,0.92);
}

input:checked + .tab-label {
  background: rgba(31,43,59,0.92);
}
input:checked + .tab-label::after {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}
input:checked ~ .tab-content {
  max-height: 100%;
  padding: 1em;
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
                                      <h2 class="welcome-title"><p><?php echo $top_section['main_heading'];?></p></h2>
                           <div class="row">
                              <div class="col-md-12">
                                 <img src="<?php the_post_thumbnail_url();?>" class="all_images_header"/>
                              </div>
                              <div class="col-md-12">
                                 <?php echo $top_section['content'];?>
                              </div>
                           </div>
                           <div class="clearfix" style="height:30px;"></div>
                           <?php $middle_section=get_field('middle_section');?>
                           <h4 class="welcome-title-arss"><?php echo $middle_section['brief_history_heading'];?></h4>
                           <div class="row">
                              <div class="col-md-8">
                                  <?php echo $middle_section['brief_history_content'];?>
                                 
                              </div>
                              <div class="col-md-4">
                                 <img src="<?php echo $middle_section['brief_history_image']['url'];?>" class="all_images_header"/>
                              </div>
                           </div>
                           <h4 class="welcome-title-arss"><?php echo $middle_section['projects_at_arss_hanumangarh_heading'];?></h4>
                           <div class="row">
                              <div class="col-md-4">
                                 <img src="<?php echo $middle_section['projects_at_arss_hanumangarh_image']['url'];?>" class="all_images_header"/>
                              </div>
                              <div class="col-md-8">
                                  <?php echo $middle_section['projects_at_arss_hanumangarh_content'];?>
                                 
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-8" style="margin-top: 30px;">
                                 <h4 class="welcome-title-arss"><?php echo $middle_section['staff_position_heading'];?></h4>
                                 <?php echo $middle_section['staff_position_content'];?>
                                
                              </div>
                              <div class="col-md-4">
                                 <img src="<?php echo $middle_section['staff_position_image']['url'];?>" class="all_images_header" style="    margin-top: 40px;"/>
                              </div>
                           </div>
                           <h4 class="welcome-title-arss"><?php echo $middle_section['crop_improvement_in_groundnut_heading'];?></h4>
                           <div class="row">
                              <div class="col-md-6">
                                 <img src="<?php echo $middle_section['crop_improvement_in_groundnut_image']['url'];?>" class="all_images_header"/>
                              </div>
                              <div class="col-md-6">
                                  <?php echo $middle_section['crop_improvement_in_groundnut_content'];?>
                                 
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                  
<div class="row">
  <div class="col">
  
    <div class="tabs">
        <?php $accordion_section=get_field('accordion_section');?>
      <div class="tab">
        <input type="checkbox" id="chck1" style="display: none;">
        <label class="tab-label" for="chck1"><?php echo $accordion_section['heading1'];?></label>
        <div class="tab-content" style="height: auto;">
            <?php echo $accordion_section['content1'];?>
        </div>
      </div>
      <div class="tab">
        <input type="checkbox" id="chck2" style="display: none;">
        <label class="tab-label" for="chck2"><?php echo $accordion_section['heading2'];?></label>
        <div class="tab-content" style="height: auto;">
          <?php echo $accordion_section['content2'];?>
        </div>
      </div>
      
      <div class="tab">
        <input type="checkbox" id="chck3" style="display: none;">
        <label class="tab-label" for="chck3"><?php echo $accordion_section['heading3'];?></label>
        <div class="tab-content" style="height: auto;">
 <?php echo $accordion_section['content3'];?>        </div>
      </div>
      
      <div class="tab">
        <input type="checkbox" id="chck4" style="display: none;">
        <label class="tab-label" for="chck4"><?php echo $accordion_section['heading4'];?></label>
        <div class="tab-content" style="height: auto;">
             <?php echo $accordion_section['content4'];?>
        </div>
      </div>
    </div>
  </div>
  
</div>
                                 
                              </div>
                              <div class="col-md-6">
                                 <img src="<?php echo $accordion_section['left_side_image']['url'];?>" class="all_images_header"/>
                              </div>
                           </div>
                           
                           <div class="row">
                              <div class="col-md-12">
                                  <?php $bottom_section_content=get_field('bottom_section_content');?>
                                  <?php echo $bottom_section_content['content'];?>
                             

                              </div>
                           </div>
                                     </div>
                                     </div>
                          

                           <div class="clearfix"></div>
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