<?php
   /* Template Name: Mandate */
   get_header();
   ?>
   <style>
   .live {
  overflow: hidden;
}
.live > li {
  list-style: none;
  position: relative;
  padding: 0 0 0 2em;
  margin: 0 0 .5em 10px;
  -webkit-transition: .12s;
  transition: .12s;
}
.live > li::before {
  position: absolute;
  content: '\2022';
  font-family: Arial;
  color: #000;
  top: 0;
  left: 0;
  text-align: center;
  font-size: 2em;
  opacity: .8;
  line-height: .75;
  -webkit-transition: .5s;
  transition: .5s;
}
.live > li:hover {
  color: #000;
}
.live > li:hover::before {
  -webkit-transform: scale(2);
          transform: scale(2);
  opacity: 1;
  text-shadow: 0 0 4px;
  -webkit-transition: .1s;
  transition: .1s;
}
.live.type2 > li::before {
  content: '';
  width: 10px;
  height: 10px;
  background: #FFF;
  border-radius: 3px;
  line-height: 0;
  top: .27em;
  left: 5px;
}
.live.type2 > li:hover::before {
  -webkit-transform: none;
          transform: none;
  border-radius: 5px;
  width: 25px;
  left: -10px;
  background: #BA5353;
}

.live.numbers {
  counter-reset: xxx 0;
}
.live.numbers > li::before {
  content: counter(xxx,decimal) ".";
  counter-increment: xxx 1;
  font-family: 'Roboto Condensed';
  font-size: 1em;
  opacity: .5;
  line-height: 1.4;
  -webkit-transition: .5s;
  transition: .5s;
}
.live.numbers > li:hover:before {
  opacity: 1;
  left: -10px;
  -webkit-transform: none;
          transform: none;
  text-shadow: none;
  -webkit-transition: .12s;
  transition: .12s;
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
                                     <h2 class="welcome-title"> <?php echo $top_section['heading_section'];?> </h2>
                          
                           <div class="col-md-12">
                                 <img src="<?php the_post_thumbnail_url();?>" id="all_images_header" class="all_images_header" />
                              </div>
                              
                              
                          
                           
                           <div class="row">
                               <?php echo $top_section['content_section'];?>

                           </div>
                           
                          
                           <div class="clearfix"></div>
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