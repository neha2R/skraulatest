<?php
   /* Template Name: photo gallery 2019 */
   get_header();
   ?>
<style>
   .card {
   box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
   transition: 0.3s;
   width: 100%;
   }
   .card:hover {
   box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
   }
   .photogallery-h{
   text-align: center;
   padding: 20px;
   margin: 5px;
   }
.card img{
    display: block !important;
    width: 100% !important;
    height: 250px !important;
    object-fit: cover!important;
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
                                 <h2 class="welcome-title">
                                    <p><?php the_title();?></p>
                                 </h2>
                              </div>
                              <div class="col-md-12" >
                                 <div class="row">
                                    <?php if( have_rows('top_section') ): ?>
                                    <?php while( have_rows('top_section') ): the_row(); 
                                       $heading = get_sub_field('heading');
                                       $image = get_sub_field('image');
                                        $link = get_sub_field('link');
                                       
                                       
                                       ?>
                                    <div class="col-md-6" style="margin-bottom: 30px;">
                                       <div class="card">
                                          <a href="<?php echo $link; ?>" ><img class="img-responsive" src="<?php echo $image['url']; ?>"></a>
                                          <h4 class="photogallery-h"><b><a href="<?php echo $link; ?>" style="color:#000;"><?php echo $heading; ?></a></b></h4>
                                       </div>
                                    </div>
                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                 </div>
                              </div>
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