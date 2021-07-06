<?php
   /* Template Name: College of Agriculture, Bikaner */
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


   .btn {
   padding: .66em 2.25em;
   text-decoration: none;
   position: relative;
   display: inline-block;
   }
   .btn:after {
   content: '';
   display: block;
   width: 100%;
   height: 100%;
   position: absolute;
   top: 4px;
   left: 4px;
   border-bottom: 0.125em solid;
   border-right: 0.125em solid;
   }
   .btn:active {
   -webkit-transform: translate(0.125em, 0.125em);
   transform: translate(0.125em, 0.125em);
   }
   .btn:active:after {
   -webkit-transform: translate(-0.125em, -0.125em);
   transform: translate(-0.125em, -0.125em);
   }
   .btn-outline-fill {
   color: #fff;
   background-color: #05396b;
   box-shadow: inset 0 0 0 0.125em transparent;
   font-weight: 800;
   box-shadow: inset 0 0 0 0.125em #05396b;
   -webkit-transition: color 0.2s ease-out, box-shadow 0.2s ease-out, background-color 0.2s ease-out;
   transition: color 0.2s ease-out, box-shadow 0.2s ease-out, background-color 0.2s ease-out;
   border-radius: 0;
   padding: 15px 50px 15px 50px;
   margin: 8px;
   }
   .btn-outline-fill:after {
   border-color: transparent !important
   }
   .btn-outline-fill:hover {
   color: #fff;
   background-color: #05396b;
   box-shadow: inset 0 0 0 0.125em transparent;
   }
   .btn-outline-fill:hover:after {
   border-color: #05396b;
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
                              <div class="col-md-7">
                                 <a class="btn btn-outline-fill" href="<?php echo site_url('/attendance-and-topics')?>" target="_blank">Monthly student attendance & Topics covered</a>
                              </div>
                              <div class="col-md-5">
                                 <!-- <a class="btn btn-outline-fill" href="#">Official login</a> -->
                              </div>
                           </div>
                           <div class="col-md-12">
                              <img src="<?php the_post_thumbnail_url();?>" id="all_images_header" class="all_images_header"/>
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