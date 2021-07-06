<?php
   /* Template Name: Attendance And Topics */
   get_header();
   ?>
 <style>
.tablepress tfoot th, .tablepress thead th {
    background-color: #DD6E42;
    font-weight: 700;
    vertical-align: middle;
}
.tablepress .sorting:hover,
.tablepress .sorting_asc,
.tablepress .sorting_desc {
	background-color: #DD6E42;
}
.tablepress .sorting, .tablepress .sorting_asc, .tablepress .sorting_desc {
    position: relative;
    padding-right: 20px;
    cursor: pointer;
    outline: 0;
    width: 100px!important;
}
.row-hover{
    border:1px solid #ccc;
}
#tablepress-4{
    display: inline-block;
    overflow: auto;
}
#tablepress-8{
    display: inline-block;
    overflow: auto;
}
.tablepress tbody tr:first-child td {
    
    padding: 5px 20px 5px 20px;
  
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
                                   <div class="row">
                                       <div class="col-md-12">
                                           <h2 class="welcome-title"><p><?php the_title();?></p></h2>
                                            
                                   
                                     </div>
                                     <div class="col-md-12">
                                    <h3><b>UG Students</b></h3>
                                   <?php echo do_shortcode('[table id=4 datatables_columnfilter=true /]');?>
                                   
                                     </div>
                                   </div>
                               </div>
                               
                               
                               
                               
                               
                               
                               <div class="col-md-9">
                                   <div class="row">
                                       
                                     <div class="col-md-12">
                                    <h3><b>PG Students</b></h3>
                                   <?php echo do_shortcode('[table id=8 datatables_columnfilter=true /]');?>
                                   
                                     </div>
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


