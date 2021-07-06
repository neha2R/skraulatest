<?php
   /* Template Name: Report */
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
.row-hover{
    border:1px solid #ccc;
}
#tablepress-19{
    display: inline-block;
    overflow: auto;
}
#tablepress-20{
    display: inline-block;
    overflow: auto;
}
#tablepress-21{
    display: inline-block;
    overflow: auto;
}

.tablepress tbody tr:first-child td {
    
    padding: 5px 20px 5px 20px;
  
}
table {
   border-collapse: collapse;
   border-spacing: 0;
   }
.tablepress .even td {
    background-color: #fff;
    border: 1px solid #ccc;
}
.tablepress .odd td {
    background-color: #f9f9f9;
    border: 1px solid #ccc;
}

</style>
<?php $heading=get_field('heading');?>
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
                                       <h2 class="welcome-title">
                                          <p><?php echo $heading['main_heading'];?></p>
                                       </h2>
                                    </div>
                                    <div class="col-md-12">
                                                                                                                                  
                               <div class="row">
                            <?php echo do_shortcode('[table id=19 datatables_columnfilter=true /]'); ?>

                          
                        </div>

<div class="clearfix" style="height:30px;"></div>


<div class="row">
                            <?php echo do_shortcode('[table id=20 datatables_columnfilter=true /]'); ?>

                          
                        </div>

<div class="clearfix" style="height:30px;"></div>


	<div class="row">
                            <?php echo do_shortcode('[table id=21 datatables_columnfilter=true /]'); ?>

                          
                        </div>


                       
                        
                                                 
                                       
                                      
                                      
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