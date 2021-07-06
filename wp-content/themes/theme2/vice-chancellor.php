<?php
   /* Template Name: Vice Chancellor */
   get_header();
   ?>
<style>
   tbody tr:nth-child(2n+1) td, tbody tr:nth-child(2n+1) th {
   background: #dbaa5700;
   padding: 20px;
   }
   .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
   line-height: 24px;
   vertical-align: top;
   border-top: 1px solid #ddd;
   padding: 10px 10px 10px 10px;
   text-align: left;
   }
   .table-responsive {
   min-height: .01%;
   overflow-x: auto;
   margin-top: 30px;
   }
   .table-bg-h{
   background:#DD6E42 !important;
   color:#fff;
   width: 200px;
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
                               <h2 class="welcome-title"><p><?php echo $top_section['main_heading'];?></p></h2>
                              <div class="col-md-3"><img src="<?php echo $top_section['image']['url'];?>" class="vc-img-vc" style="" /></div>
                              <div class="col-md-9">
                                 <h2 style="margin-top:0px; margin-left: 15px;"><?php echo $top_section['name'];?></h2>
                                 
                                 <div class="col-md-12">
                                 <div class="table-responsive">
                                     <?php $table_section=get_field('table_section');?>
                                     <?php echo $table_section['table'];?>
                                   
                                 </div>
                              </div>
                              </div>
                              
                           </div>
                           <div class="row">
                              
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                  <?php $description=get_field('description');?>
                                     
                                 <p class="welcome-p">
                                    <?php echo $description['content'];?>
                                    <br /><br />
                                 </p>
                                                               </div>
                           </div>
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