<?php
   /* Template Name: Screen Reader Access */
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
.dataTables_wrapper {
   
    margin-top: 3em;
}
#tablepress-9{
    display: inline-block;
    overflow: auto;
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
                                          
                                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                        <?php the_content(); ?>
                                        <?php endwhile; endif; ?>

                                            
                                   
                                     </div>
                                     <div class="col-md-12">
                                   
                                   <?php echo do_shortcode('[table id=9 /]');?>
                                   
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


