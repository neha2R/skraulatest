<?php
   /* Template Name: central_library */
   get_header();
   ?>
<section>
   <style>
      .library_sub_h{
      color:#05396b;
      font-weight:800;
      }
      table, td, th {  
      border: 1px solid #ddd;
      text-align: left;
      }
      table {
      border-collapse: collapse;
      width: 100%;
      }
      th, td {
      padding: 15px;
      }
      .th_lib{
      padding: 14px;
      text-align: center;
      }
      .th_lib{
         
    background: #05396b !important;
    color: #fff;

      }
   </style>
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
                                          <?php $top_section=get_field('top_section');?>
                                          <?php echo $top_section['paragraph'];?>
                              
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