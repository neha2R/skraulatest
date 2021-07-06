<?php
   /* Template Name: deanpg */
   get_header();
   ?>
<style>
   table {
   border-collapse: collapse;
   border-spacing: 0;
   margin-bottom: 50px;
   }
   @media screen and (max-width: 767px) {
   table {
   display: block !important;
   overflow-x: auto !important;
   white-space: nowrap !important;
   }
   }
   table thead,
   table th,
   table td,
   table tfoot {
   border: 1px solid #ccc;
   padding: 10px;
   }
   table td:first-child {
   color: #000;
   }
   table td.not-first-child {
   color: #000;
   }
   .table_deanpg_h{
   background:#05396b !important;
   }
   .table_deanpg_p{
   color:#fff !important;
   font-weight:bold !important;
   }
   .table_deanpg_bold{
   font-weight:bold !important;
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
                              <img src="<?php the_post_thumbnail_url();?>" id="all_images_header" class="all_images_header"/>
                           </div>
                           <div class="col-md-12">
                               
                               <?php echo $top_section['paragraph'];?>
                              <p></p>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <h4 class="welcome-title-dpem">MAJOR ACHIEVEMENTS</h4>
                           <?php $major_achievements=get_field('major_achievements');?>
                               <?php echo $major_achievements['paragraph'];?>
                           <p><b>No. of Theses Approved (Period 2014 to 2019)</b></p>
                          <?php echo $major_achievements['table'];?>
                        </div>
                        <div class="clearfix" style="height:100px;"></div>
                        <?php $bottom_section_tables=get_field('bottom_section_tables');?>
                        
                        <div class="col-md-12">
                           <p><b>Faculty Wise Post Graduate & Ph. D. Degree Courses and intake is as follows:</b></p>
                           <h4 class="welcome-title-arss">1. Agriculture</h4>
                           <?php echo $bottom_section_tables['agriculture_table'];?>
                           
                        </div>
                        <div class="col-md-12">
                           <h4 class="welcome-title-arss">2. Home Science</h4>
                            <?php echo $bottom_section_tables['home_science_table'];?>
                           
                        </div>
                        <div class="col-md-12">
                           <h4 class="welcome-title-arss">3. Agri. Business
                           </h4>
                            <?php echo $bottom_section_tables['agri_business_table'];?>
                          
                        </div>
                        <div class="col-md-12">
                           
                               <?php echo $bottom_section_tables['bottom_paragraph'];?>
                           
                        </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<script>
   $.each( $('table', this.$el), function( index, table ){
     var rowspan = 0;
     $.each( $('tr', table), function( index, tr ){
       if( rowspan > 0 ){
         $('td:first-child', tr).addClass("not-first-child");
         rowspan = (rowspan>0) ? rowspan-1 : 0;
       } else if( $('td:first-child', tr).attr("rowspan") > 0){
         rowspan = parseInt( $('td:first-child', tr).attr("rowspan")) - 1;
       }
     });
   });
</script>
<?php get_footer();?>