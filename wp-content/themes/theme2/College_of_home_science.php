<?php
   /* Template Name: College of Home Science
 */
   get_header();
   ?>
<style>
    .tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color:rgba(31,43,59,0.92) ;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
  color:#fff;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #DD6E42;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
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
                          <div class="col-md-12" style="margin-bottom:20px;">
                               <!-- <div class="tab">
  <a href="#Objectives"><button class="tablinks">The Objectives</button></a>
  <a href="#FutureThrust"><button class="tablinks">Future Thrust</button></a>
  <a href="#Departments-at-College"><button class="tablinks">Departments at College</button></a>
  <a href="#CourseOfferings"><button class="tablinks">Course Offerings</button></a>
  <a href="#PGDiploma"><button class="tablinks">PG Diploma</button></a>
  <a href="#ResearchActivities"><button class="tablinks">Research Activities</button></a>
  <a href="#ExtensionActivities"><button class="tablinks">Extension Activities</button></a>
</div> -->
                          </div>
                             
                           <div class="col-md-12">
                                 <img src="<?php the_post_thumbnail_url();?>" id="all_images_header-dpem" class="all_images_header"/>
                              </div>
                              
                              <div class="col-md-12">
                                   <?php echo $top_section['top_content'];?>
                              </div>

                               <?php echo $top_section['content'];?>
                              
                             
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


