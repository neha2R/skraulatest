<?php
   /* Template Name: CIMCA */
   get_header();
   ?>
<style>
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
   @media screen and (max-width: 767px) {
   table {
   display: block !important;
   overflow-x: auto !important;
   white-space: nowrap !important;
   }
   }
   table, th, td {
   border: 1px solid #ccc;
   border-collapse: collapse;
   }
   th, td {
   padding: 15px;
   text-align: center;
   }
   table#t01 tr:nth-child(odd) {
   background-color: #fff;
   }
   table#t01 th {
   background-color: #05396b;
   color: white;
   padding: 20px;
   text-align: center;
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
                                       <img src="<?php the_post_thumbnail_url();?>" id="all_images_header" class="all_images_header" />
                                    </div>
                                    <div class="col-md-12">
                                       <p class="welcome-p">
                                           
                                           <?php echo $top_section['paragraph'];?>
                                       </p>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="clearfix" style="height:30px;"></div>
                                        <h2 class="welcome-title">Major Activities:</h2>
                                        <?php $major_activities=get_field('major_activities');?>
                                           <?php echo $major_activities['all_text'];?>
                                             
                                 
                                    </div>
                                    <div class="col-md-12">
                                        <?php $table_section=get_field('table_section');?>
                                           <?php echo $table_section['table'];?>
                                       

                                    </div>
                                 </div>
                                 
                                 <div class="clearfix"></div>
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