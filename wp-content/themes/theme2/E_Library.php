<?php
   /* Template Name: E Library */
   get_header();
   ?>
<style>
   .tablepress tbody td, .tablepress tfoot th {
   border-top: 1px solid #fff;
   border: 1px solid #ccc !important;
   }
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
   background-color: #05396b;
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
   .tablepress tfoot th, .tablepress thead th {
   background-color: #05396b;
   font-weight: 700;
   vertical-align: middle;
   }
   .tablepress .sorting:hover,
   .tablepress .sorting_asc,
   .tablepress .sorting_desc {
   background-color: #05396b;
   }
   .tablepress .sorting, .tablepress .sorting_asc, .tablepress .sorting_desc {
   position: relative;
   padding-right: 20px;
   cursor: pointer;
   outline: 0;
   width: 100px!important;
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
                                 <p><?php echo $top_section['heading'];?></p>
                              </h2>
                              <?php echo do_shortcode('[table id=18 /]'); ?>
                              <div class="clearfix" style="height:30px;"></div>
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