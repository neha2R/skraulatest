<?php
   /* Template Name: DOR */
   get_header();
   ?>
<style>
.border-bottom{
    border-bottom: 3px solid #dd6e42b5;
    margin-bottom: 15px;
    display: inline-block;
     padding: 10px;
}
.tablepress tfoot th, .tablepress thead th {
    background-color: #05396b;

    font-weight: 700;
    vertical-align: middle;
}
.tablepress td, .tablepress th {
float: none!important;
    border: 1px solid #ccc;
       text-align: center !important;
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
img{
 width: 100%;

}
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
 #loadmore {
    margin: 5px auto;
    padding: 8px 0;
    width: 50%;
    background: #c12b2b;
    text-align: center;
    color: #fff;
    display: block;
    text-decoration: none;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}
.loadmore{
display:none;
}
.loadmorediv{
        background: #DD6E42;
    text-align: center;
    color: #fff !important;
    padding: 8px 0px 8px 0px;
}
.pb{
    text-align:center;
    color:#fff;
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
                                 <h2 class="welcome-title">
                                    <?php the_title(); ?>
                                 </h2>
                                 
                                 <div class="row">
                                    <div class="col-md-12">
                                       <img src="<?php the_post_thumbnail_url();?>" id="all_images_header" class="all_images_header" />
                                    </div>
                                    <div class="col-md-12 loadmore">
                                       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                        <?php the_content(); ?>
                                        <?php endwhile; endif; ?>  
                                    </div>
                                   
                                    <div class="col-md-12 loadmore">
                                        <?php $crop_improvement_top_section=get_field('crop_improvement_top_section');?>
                                        <?php echo $crop_improvement_top_section['content'];?>
                                    </div>
                                    
                                    <div class="col-md-12 loadmore">
                                         <?php if( have_rows('crop_improvement_content') ): ?>
                                          <?php while( have_rows('crop_improvement_content') ): the_row(); 
                                             
                                             $heading = get_sub_field('heading');
                                             $content = get_sub_field('content');
                                             $image = get_sub_field('image');
                                             
                                             
                                             ?>
<div class="row" style="margin-bottom: 20px;">
                                             <div class="col-md-8">
                                                 <?php echo $heading; ?>
                                                 <?php echo $content; ?>
                                             </div>
                                              <div class="col-md-4">
                                                 <img src="<?php echo $image['url']; ?>" style="width:100%;">
                                             </div>
</div>
                                             <?php endwhile; ?>
                                          <?php endif; ?>
                                    </div>
                                    
                                    <div class="col-md-12 loadmore">
                                        <?php $crop_improvement_bottom_section=get_field('crop_improvement_bottom_section');?>
                                        <?php echo $crop_improvement_bottom_section['content'];?>
                                    </div>

					<div class="col-md-12 loadmore">
                                        <?php $agronomy_section=get_field('agronomy_section');?>
                                        <?php echo $agronomy_section['content'];?>
                                    </div>

					<div class="col-md-12 loadmore">
                                        <?php $precision__protected_agriculture=get_field('precision__protected_agriculture');?>
                                        <?php echo $precision__protected_agriculture['content'];?>
                                    </div>


					<div class="col-md-12 loadmore">
                                        <?php $organic_production_technology=get_field('organic_production_technology');?>
                                        <?php echo $organic_production_technology['content'];?>
                                    </div>

					<div class="col-md-12 loadmore">
                                        <?php $crop_protection_diseases_management=get_field('crop_protection_diseases_management');?>
                                        <?php echo $crop_protection_diseases_management['content'];?>
                                    </div>

					<div class="col-md-12 loadmore">
                                        <?php $horticulture=get_field('horticulture');?>
                                        <?php echo $horticulture['content'];?>
                                    </div>
                                    
                                    <div class="col-md-12 loadmore">
                                        <?php if( have_rows('post_harvest_management__production_of_food_and_fruit_products_of_arid_region') ): ?>
                                          <?php while( have_rows('post_harvest_management__production_of_food_and_fruit_products_of_arid_region') ): the_row(); 
                                             
                                             $heading = get_sub_field('heading');
                                             
                                            ?>
                                            <h3><b><?php echo $heading; ?></b></h3>
                                            
                                            <?php if( have_rows('inner_content') ): ?>
                                          <?php while( have_rows('inner_content') ): the_row(); 
                                             
                                             $heading = get_sub_field('heading');
                                             $content = get_sub_field('content');
                                             $image = get_sub_field('image');
                                             
                                            ?>
                                            
                                            <div class="col-md-12">
                                                <div class="col-md-8">
                                                    <h4><b><?php echo $heading; ?></b></h4>
                                                    <?php echo $content; ?>
                                                </div>
                                                <div class="col-md-4">
                                                    <img src="<?php echo $image['url']; ?>" style="width:100%;">
                                                </div>
                                            </div>
                                            
                                             <?php endwhile; ?>
                                          <?php endif; ?>
                                            <?php endwhile; ?>
                                          <?php endif; ?>
                                       
                                    </div>
                                    
                                    <div class="col-md-12 loadmore">
                                        <?php $research_issues_and_way_forward=get_field('research_issues_and_way_forward');?>
                                        <?php echo $research_issues_and_way_forward['content'];?>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <div class="col-md-4"></div>
                                        <div class="col-md-4 loadmorediv">
                                            <a href="#" id="loadmore" style="color: #fff !important;">Load More Content</a>
                                        </div>
                                        <div class="col-md-4"></div>
                                        
                                    </div>




                                    
                                 </div>
                                 
                                <div class="clearfix"></div>
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
    /*global $, document, alert, console*/
$(function () {
	
    $('.loadmore').slice(0, 1).show();
    $('#loadmore').on('click', function (e) {
        e.preventDefault();
        $('.loadmore:hidden').slice(0, 1).slideDown();
        if ($('.loadmore:hidden').length === 0) {
            $('#loadmore').replaceWith("<p class='pb'>No More Content</p>");
        }
    });
    $('#top').on('click', function (e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 600);
        return false;
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#top a').fadeIn();
        } else {
            $('#top a').fadeOut();
        }
    });
});
</script>
<?php get_footer();?>
