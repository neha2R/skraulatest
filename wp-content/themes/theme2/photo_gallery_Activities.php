<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js'></script>
<?php
   /* Template Name: photo gallery Activities */
   get_header();
   ?>
<style>
   .gallery {
   display: -webkit-box;
   display: flex;
   flex-wrap: wrap;
   margin: 0 -10px;
   padding: 12px 0;
   }
   .gallery__item {
   -webkit-box-flex: 0;
   flex: 0 1 calc(1290px / 3);
   padding: 0 10px;
   margin-bottom: 20px;
   }
   .gallery__item > figure {
   -webkit-transition: 0.3s ease-in-out;
   transition: 0.3s ease-in-out;
   padding: 5px 0 5px 15px;
   margin-top: 30px;
   }
   .gallery__item > figure:hover .gallery__image::after {
   -webkit-transform: rotateZ(0deg);
   transform: rotateZ(0deg);
   opacity: 1;
   }
   .gallery__item > figure:hover .gallery__btns {
   opacity: 1;
   }
   .gallery__image {
   position: relative;
   border: 1px solid rgba(0, 0, 0, 0.1);
   border-radius: 1px;
   padding: 10px;
   margin-top: -50px;
   -webkit-transition: 0.3s ease-in-out;
   transition: 0.3s ease-in-out;
   }
   .gallery__image::after {
   content: '';
   background: rgba(21, 21, 21, 0.4);
   position: absolute;
   top: 16px;
   right: 18px;
   bottom: 18px;
   left: 18px;
   opacity: 0;
   -webkit-transform: rotate(50deg);
   transform: rotate(50deg);
   -webkit-transition: 0.5s ease-in-out;
   transition: 0.5s ease-in-out;
   }
   .gallery__image img {
   box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
   width:100%;
   height: 237px;
   object-fit: cover;
   }
   .gallery__image .gallery__btns {
   position: absolute;
   top: 50%;
   left: 50%;
   z-index: 1;
   -webkit-transform: translate(-50%, -50%);
   transform: translate(-50%, -50%);
   opacity: 0;
   -webkit-transition: 0.3s ease-in-out;
   transition: 0.3s ease-in-out;
   }
   .gallery__image .gallery__btns > a {
   position: relative;
   overflow: hidden;
   display: block;
   margin-bottom: 10px;
   text-align: center;
   padding: 12px 40px;
   font-size: 12px;
   color: white;
   text-transform: uppercase;
   letter-spacing: 0.14rem;
   border: 1px solid white;
   }
   .gallery__image .gallery__btns > a::after {
   content: '';
   position: absolute;
   left: -200%;
   top: -50%;
   width: 150%;
   height: 200%;
   z-index: -1;
   -webkit-transform: skew(-45deg);
   transform: skew(-45deg);
   background: white;
   -webkit-transition: 0.7s all;
   transition: 0.7s all;
   }
   .gallery__image .gallery__btns > a:hover::after {
   left: -30%;
   }
   .gallery__image .gallery__btns > a:hover {
   color: #333;
   }
   .gallery__image .gallery__btns > a:last-child {
   margin-bottom: 0;
   }
   .gallery__description {
   padding: 8px 14px 9px;
   margin-left: 36%;
   font-size: 14px;
   position: relative;
   top: 13px;
   max-width: 250px;
   border: 1px solid rgba(0, 0, 0, 0.1);
   border-radius: 1px;
   }
   .gallery__description h4 {
   margin-bottom: 8px;
   text-transform: uppercase;
   letter-spacing: 0.02rem;
   }
   .gallery__description span {
   color: #ea4c89;
   }
   @media only screen and (max-width: 600px) {
   .gallery__image img {
   box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
   width:100%;
   height: auto;
   object-fit: cover;
   }
   }
   @media only screen and (min-width: 600px) {
   .gallery__image img {
   box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
   width:100%;
   height: auto;
   object-fit: cover;
   }
   }
   @media only screen and (min-width: 768px) {
   .gallery__image img {
   box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
   width:100%;
   height: auto;
   object-fit: cover;
   }
   }
   @media only screen and (min-width: 992px) {
   .gallery__image img {
   box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
   width:100%;
   height: auto;
   object-fit: cover;
   }
   }
   @media only screen and (min-width: 1200px) {
   .gallery__image img {
   box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
   width:100%;
   height: 237px;
   object-fit: cover;
   }
   }
</style>
<section>
   <?php $heading_section=get_field('heading_section');?>
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

                              <div class="col-md-12">
                                 <h2 class="welcome-title">
                                    <p><?php echo $heading_section['main_heading'];?></p>
                                 </h2>
                              </div>
                              <div class="col-md-12">
                                 <?php if( have_rows('top_section') ): ?>
                                 <?php while( have_rows('top_section') ): the_row(); 
                                    $image = get_sub_field('image');
                                    
                                    
                                    
                                    ?>
                                 <div class="gallery col-md-6">
                                    <div class="gallery__item">
                                       <figure>
                                          <div class="gallery__image">
                                             <img class="img-responsive" src="<?php echo $image['url']; ?>" >
                                             <div class="gallery__btns">
                                                <a href="<?php echo $image['url']; ?>" data-fancybox="gallery">view gallery</a>
                                             </div>
                                          </div>
                                       </figure>
                                    </div>
                                 </div>
                                 <?php endwhile; ?>
                                 <?php endif; ?>
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
<script>
   $('[data-fancybox="gallery"]').fancybox({
   // Enable infinite gallery navigation
   loop: false,
   
   // What buttons should appear in the top right corner.
   // Buttons will be created using templates from `btnTpl` option
   // and they will be placed into toolbar (class="fancybox-toolbar"` element)
   buttons: [
   "zoom",
   "share",
   "slideShow",
   "fullScreen",
   "download",
   "thumbs",
   "close"
   ],
   
   // Disable right-click and use simple image protection for images
   protect: false,
   
   image: {
   preload: false
   },
   
   // Open/close animation type
   // Possible values:
   //   false            - disable
   //   "zoom"           - zoom images from/to thumbnail
   //   "fade"
   //   "zoom-in-out"
   //
   animationEffect: "circular",
   
   // Duration in ms for open/close animation
   animationDuration: 700,
   
   // Should image change opacity while zooming
   // If opacity is "auto", then opacity will be changed if image and thumbnail have different aspect ratios
   zoomOpacity: "auto",
   
   // Transition effect between slides
   // Possible values:
   //   false            - disable
   //   "fade'
   //   "slide'
   //   "circular'
   //   "tube'
   //   "zoom-in-out'
   //   "rotate'
   //
   transitionEffect: "slide",
   
   // Duration in ms for transition animation
   transitionDuration: 700,
   
   // Hide browser vertical scrollbars; use at your own risk
   hideScrollbar: true,
   
   fullScreen: {
   autoStart: false
   },
   
   slideShow: {
   autoStart: false,
   speed: 3000
   },
   
   thumbs: {
   autoStart: false, // Display thumbnails on opening
   hideOnClose: true, // Hide thumbnail grid when closing animation starts
   parentEl: ".fancybox-container", // Container is injected into this element
   axis: "y" // Vertical (y) or horizontal (x) scrolling
   },
   
   // Use mousewheel to navigate gallery
   // If 'auto' - enabled for images only
   wheel: "auto"
   });
</script>
<?php get_footer();?>