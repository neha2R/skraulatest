<?php
   /* Template Name: Directorate of Student's Welfare */
   get_header();
   ?>
<style>
   .acc {
   position: relative;
   
   }
   .acc dl {
   box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
   }
   .acc dl:after {
   content: "";
   display: block;
   height: 0.2em;
   width: 100%;
   background-color: #05396b;
   }
   .acc dt > a {
   text-align: center;
   font-weight: 300;
   padding: 2em;
   display: block;
   text-decoration: none;
   color: #000;
   -webkit-transition: background-color 0.5s ease-in-out;
   background: #fdfcf8;
   font-weight: bold;
   }
   .acc dd {
   background-color: #fff;
   font-size: 1em;
   line-height: 1.5em;
   background-image: -webkit-gradient(linear, left top, left bottom, from(#444), to(#fff));
   background-image: linear-gradient(to bottom, #444 0%, #fff 100%);
   -webkit-background-clip: text;
   }
   .acc dd > p {
   padding: 1em 2em 1em 2em;
   }
   .acc_title {
   border: 1px solid #05396b;
   }
   .acc_title:before {
   content: "+";
   font-size: 1.5em;
   line-height: 0.5em;
   float: left;
   -webkit-transition: -webkit-transform 0.3s ease-in-out;
   transition: -webkit-transform 0.3s ease-in-out;
   transition: transform 0.3s ease-in-out;
   transition: transform 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
   }
   .acc_title:hover {
   background-color: #05396b;
   color:#fff;
   }
   .acc_title_active {
   background-color: #05396b;
   }
   .acc_title_active:before {
   -webkit-transform: rotate(-225deg);
   transform: rotate(-225deg);
   }
   .acc_panel {
   height: auto;
   overflow: hidden;
   }
   @media all {
   .acc_panel {
   max-height: 50em;
   -webkit-transition: max-height 1s;
   transition: max-height 1s;
   }
   }
   @media screen and (min-width: 48em) {
   .acc_panel {
   /* max-height: 15em; */
   -webkit-transition: max-height 0.5s;
   transition: max-height 0.5s;
   }
   }
   .acc_panel_col {
   max-height: 0;
   }
   .anim_in {
   -webkit-animation-name: acc_in;
   animation-name: acc_in;
   -webkit-animation-duration: 0.65s;
   animation-duration: 0.65s;
   -webkit-animation-iteration-count: 1;
   animation-iteration-count: 1;
   -webkit-animation-direction: normal;
   animation-direction: normal;
   -webkit-animation-timing-function: ease-in-out;
   animation-timing-function: ease-in-out;
   -webkit-animation-fill-mode: both;
   animation-fill-mode: both;
   -webkit-animation-delay: 0s;
   animation-delay: 0s;
   }
   .anim_out {
   -webkit-animation-name: acc_out;
   animation-name: acc_out;
   -webkit-animation-duration: 0.75s;
   animation-duration: 0.75s;
   -webkit-animation-iteration-count: 1;
   animation-iteration-count: 1;
   -webkit-animation-direction: alternate;
   animation-direction: alternate;
   -webkit-animation-timing-function: ease-in-out;
   animation-timing-function: ease-in-out;
   -webkit-animation-fill-mode: both;
   animation-fill-mode: both;
   -webkit-animation-delay: 0s;
   animation-delay: 0s;
   }
   @-webkit-keyframes acc_in {
   0% {
   opacity: 0;
   -webkit-transform: scale(0.8);
   transform: scale(0.8);
   }
   100% {
   opacity: 1;
   -webkit-transform: scale(1);
   transform: scale(1);
   }
   }
   @keyframes acc_in {
   0% {
   opacity: 0;
   -webkit-transform: scale(0.8);
   transform: scale(0.8);
   }
   100% {
   opacity: 1;
   -webkit-transform: scale(1);
   transform: scale(1);
   }
   }
   @-webkit-keyframes acc_out {
   0% {
   opacity: 1;
   -webkit-transform: scale(1);
   transform: scale(1);
   }
   100% {
   opacity: 0;
   -webkit-transform: scale(0.8);
   transform: scale(0.8);
   }
   }
   @keyframes acc_out {
   0% {
   opacity: 1;
   -webkit-transform: scale(1);
   transform: scale(1);
   }
   100% {
   opacity: 0;
   -webkit-transform: scale(0.8);
   transform: scale(0.8);
   }
   }
   /*  hover image */
   .main-title{
   color: #2d2d2d;
   text-align: center;
   text-transform: capitalize;
   padding: 0.7em 0;
   }
   .content {
   position: relative;
   width: 90%;
   max-width: 400px;
   margin: auto;
   overflow: hidden;
   margin-bottom: 40px;
   }
   .content .content-overlay {
   background: rgba(0, 0, 0, 0.49);;
   position: absolute;
   height: 99%;
   width: 100%;
   left: 0;
   top: 0;
   bottom: 0;
   right: 0;
   opacity: 0;
   -webkit-transition: all 0.4s ease-in-out 0s;
   -moz-transition: all 0.4s ease-in-out 0s;
   transition: all 0.4s ease-in-out 0s;
   }
   .content:hover .content-overlay{
   opacity: 1;
   }
   .content-image{
   width: 100%;
height: 150px;
   }
   .content-details {
   position: absolute;
   text-align: center;
   padding-left: 1em;
   padding-right: 1em;
   width: 100%;
   top: 50%;
   left: 50%;
   opacity: 0;
   -webkit-transform: translate(-50%, -50%);
   -moz-transform: translate(-50%, -50%);
   transform: translate(-50%, -50%);
   -webkit-transition: all 0.3s ease-in-out 0s;
   -moz-transition: all 0.3s ease-in-out 0s;
   transition: all 0.3s ease-in-out 0s;
   }
   .content:hover .content-details{
   top: 50%;
   left: 50%;
   opacity: 1;
   }
   .content-details h3{
   color: #fff;
   font-weight: 600;
   margin-bottom: 0.5em;
   font-size:17px;
   }
   .content-details p{
   color: #fff;
   font-size: 0.8em;
   }
   .fadeIn-bottom{
   top: 80%;
   }
   .fadeIn-top{
   top: 20%;
   }
   .fadeIn-left{
   left: 20%;
   }
   .fadeIn-right{
   left: 80%;
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
                                 <p class="welcome-p">
                                     
                                     <?php echo $top_section['paragraph'];?>
                                    
                                 </p>
                              </div>
                           </div>
                           <div class="clearfix"></div>
                           <div class="acc">
                              <div class="row">
                                 <div class="col-md-6">
                                    <dl>
                                        <?php if( have_rows('left_side_accordion') ): ?>
                                          <?php while( have_rows('left_side_accordion') ): the_row(); 
                                             
                                             $heading = get_sub_field('heading');
                                             $paragraph = get_sub_field('paragraph');
                                             
                                             
                                             
                                             ?>
                                       <dt><a class="acc_title accordion__header is-active"><?php echo $heading; ?></a></dt>
                                       <dd class="acc_panel acc_panel_col">
                                          <p><?php echo $paragraph; ?>
                                          </p>
                                       </dd>
                                        <?php endwhile; ?>
                                          <?php endif; ?>
                                       
                                    </dl>
                                 </div>
                                 <div class="col-md-6">
                                    <dl>
                                         <?php if( have_rows('right_side_accordion') ): ?>
                                          <?php while( have_rows('right_side_accordion') ): the_row(); 
                                             
                                             $heading = get_sub_field('heading');
                                             $paragraph = get_sub_field('paragraph');
                                             
                                             
                                             
                                             ?>
                                       <dt><a class="acc_title"><?php echo $heading; ?></a></dt>
                                       <dd class="acc_panel acc_panel_col">
                                          <p><?php echo $paragraph; ?></p>
                                       </dd>
                                         <?php endwhile; ?>
                                          <?php endif; ?>
                                    </dl>
                                 </div>
                              </div>
                           </div>
                           <div class="clearfix" ></div>
                           <div class="row">
                                 <?php if( have_rows('image_section') ): ?>
                                          <?php while( have_rows('image_section') ): the_row(); 
                                             
                                             $images = get_sub_field('images');
                                             $image_text = get_sub_field('image_text');
                                             
                                             
                                             
                                             ?>
                                <div class="col-md-4">
                                    <div class="content">
                                        
                                            <div class="content-overlay"></div>
                                            <img class="content-image" src="<?php echo $images; ?>">
                                            <div class="content-details fadeIn-left">
                                                <h3><?php echo $image_text; ?></h3>
                                               
                                            </div>
                                        
                                    </div>
                                </div>
                                 <?php endwhile; ?>
                                          <?php endif; ?>
                           </div>
                           
                           
                           <div class="row">
                               <div class="col-md-12">
                                    <?php if( have_rows('bottom_intro_section') ): ?>
                                          <?php while( have_rows('bottom_intro_section') ): the_row(); 
                                             
                                             $image = get_sub_field('image');
                                             $name = get_sub_field('name');
                                             $des = get_sub_field('des');
                                             
                                             
                                             ?>
                                   <div class="row">
                                        
                                        
                                        <div class="col-md-7" style="margin: 20px 0px 0px 0px;">
                                        <h5 class="welcome-title-dpem">	<?php echo $name; ?></h5>
                                        <p><?php echo $des; ?></p>
                                        </div>

					<div class="col-md-4">
                                        <img  src="<?php echo $image; ?>">
                                        </div>
                                   </div>
                                    <?php endwhile; ?>
                                          <?php endif; ?>
                                   
                               </div>
                               
                               
                           </div>
                           <div class="clearfix" ></div>
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
<script>
   /*!
    * classie - class helper functions
    * from bonzo https://github.com/ded/bonzo
    */
   
   
   ( function( window ) {
   
   'use strict';
   
   // class helper functions from bonzo https://github.com/ded/bonzo
   
   function classReg( className ) {
     return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
   }
   
   // classList support for class management
   // altho to be fair, the api sucks because it won't accept multiple classes at once
   var hasClass, addClass, removeClass;
   
   if ( 'classList' in document.documentElement ) {
     hasClass = function( elem, c ) {
       return elem.classList.contains( c );
     };
     addClass = function( elem, c ) {
       elem.classList.add( c );
     };
     removeClass = function( elem, c ) {
       elem.classList.remove( c );
     };
   }
   else {
     hasClass = function( elem, c ) {
       return classReg( c ).test( elem.className );
     };
     addClass = function( elem, c ) {
       if ( !hasClass( elem, c ) ) {
         elem.className = elem.className + ' ' + c;
       }
     };
     removeClass = function( elem, c ) {
       elem.className = elem.className.replace( classReg( c ), ' ' );
     };
   }
   
   function toggleClass( elem, c ) {
     var fn = hasClass( elem, c ) ? removeClass : addClass;
     fn( elem, c );
   }
   
   var classie = {
     // full names
     hasClass: hasClass,
     addClass: addClass,
     removeClass: removeClass,
     toggleClass: toggleClass,
     // short names
     has: hasClass,
     add: addClass,
     remove: removeClass,
     toggle: toggleClass
   };
   
   // transport
   if ( typeof define === 'function' && define.amd ) {
     // AMD
     define( classie );
   } else {
     // browser global
     window.classie = classie;
   }
   
   })( window );
   
   //fake jQuery
   var $ = function(selector){
     return document.querySelector(selector);
   }
   var accordion = $('.acc');
   
   
   
   
   
   //add event listener to all anchor tags with accordion title class
   accordion.addEventListener("click",function(e) {
     e.stopPropagation();
     e.preventDefault();
     if(e.target && e.target.nodeName == "A") {
       var classes = e.target.className.split(" ");
       if(classes) {
         for(var x = 0; x < classes.length; x++) {
           if(classes[x] == "acc_title") {
             var title = e.target;
   
             //next element sibling needs to be tested in IE8+ for any crashing problems
             var content = e.target.parentNode.nextElementSibling;
             
             //use classie to then toggle the active class which will then open and close the accordion
            
             classie.toggle(title, 'acc_title_active');
             //this is just here to allow a custom animation to treat the content
             if(classie.has(content, 'acc_panel_col')) {
               if(classie.has(content, 'anim_out')){
                 classie.remove(content, 'anim_out');
               }
               classie.add(content, 'anim_in');
   
             }else{
                classie.remove(content, 'anim_in');
                classie.add(content, 'anim_out');
             }
             //remove or add the collapsed state
             classie.toggle(content, 'acc_panel_col');
   
   
   
             
           }
         }
       }
       
     }
   });
   
</script>

<script>
$('.accordion__header').click(function(e) {
	e.preventDefault();
	var currentIsActive = $(this).hasClass('is-active');
	$(this).parent('.accordion').find('> *').removeClass('is-active');
	if(currentIsActive != 1) {
		$(this).addClass('is-active');
		$(this).next('.accordion__body').addClass('is-active');
	}
});
</script>
<!-- end of container -->
<?php get_footer();?>