<?php
   /* Template Name: Directorate of Human Resource Development*/
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

                                   <div class="row">
                                       <div class="col-md-12">








                                           <h2 class="welcome-title"><?php echo $top_section['heading_section'];?></h2>
                                            <img src="<?php the_post_thumbnail_url();?>" id="all_images_header" class="all_images_header"/>
                                   
                                     </div>
                                     <div class="col-md-12">
                                            
                                   <?php echo $top_section['content_section'];?>
                                   
                                     </div>
                                   </div>
                               </div>
                               

                              
                           <div class="col-md-12">
                                
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


