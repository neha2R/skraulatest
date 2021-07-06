<?php
   /* Template Name: Front Page */
   get_header();
   ?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style>
   .footer-link-ul li a {
   margin: 0px;
   padding: 0px 0px 0px 17px;
   height: auto;
   width: 100%;
   float: left;
   text-decoration: none;
   font-size: 14px;
   line-height: 22px;
   color: #fff;
   }
   .footer-link-ul li a:hover {
   margin: 0px;
   padding: 0px 0px 0px 17px;
   height: auto;
   width: 100%;
   float: left;
   text-decoration: none;
   font-size: 14px;
   line-height: 22px;
   color: #fff;
   }
   .home-scroll-sec {
   margin: 0px;
   padding: 6px 0px 2px 0px;
   width: 100%;
   height: auto;
   float: left;
   border-bottom: 1px solid #ddd;
   background: #DD6E42;
   color: #fff;
   }
   .top-bar-contact-sec {
   margin: 0px 0px 0px 0px;
   padding: 1px 0px 2px 0px;
   height: auto;
   width: 100%;
   float: left;
   background: #DD6E42;
   overflow: hidden;
   background: #DD6E42;
   position: fixed;
   top: 0px;
   width: 100%;
   z-index: 999;
   }
   .galley_img {
   max-width: 250px;
   min-width: 250px;
   max-height: 170px;
   min-height: 170px;
   object-fit: cover;
   padding: 10px;
   }
   .inline-block {
   display: inline-block;
   }
   /*div.gallery {*/
   /*margin: 5px;*/
   /*float: left;*/
   /*width: 264px;*/
   /*}*/
   /*@media only screen and (max-width: 600px) {*/
   /*div.gallery {*/
   /*margin: 6px;*/
   /*float: left;*/
   /*width: 319px;*/
   /*}*/
   /*}*/
   /*@media only screen and (min-width: 1200px) {*/
   /*div.gallery {*/
   /*margin: 5px;*/
   /*float: left;*/
   /*width: 264px;*/
   /*}*/
   /*}*/
   div.desc {
   padding: 15px;
   text-align: center;
   }
   .button {
   display: block;
   margin: 0 auto;
   margin-bottom: 25px;
   position: relative;
   top: 10px;
   padding: 5px 19px 5px 19px;
   color: #fff;
   font-size: 14px;
   font-family: Poppins !important;
   }
   .button-tab {
   display: block;
   margin-bottom: 25px;
   position: relative;
   top: 10px;
   padding: 5px 19px 5px 19px;
   color: #fff;
   float: right;
   font-size: 14px;
   font-family: Poppins !important;
   }
   .button-tab:hover {
   display: block;
   float: right;
   margin-bottom: 25px;
   position: relative;
   top: 10px;
   padding: 5px 19px 5px 19px;
   color: #fff;
   background: #DD6E42;
   }
   .button:hover {
   display: block;
   margin: 0 auto;
   margin-bottom: 25px;
   position: relative;
   top: 10px;
   padding: 5px 19px 5px 19px;
   color: #fff;
   }
   #example2 {
   border: 1px solid #083D77;
   box-shadow: -3px 5px 2px 2px #a7a6a3b8;
   background: #083D77;
   border-radius: 5px;
   }
   #example2:hover {
   border: 1px solid #083D77;
   box-shadow: -3px 5px 2px 2px #a7a6a3b8;
   border-radius: 5px;
   background: #DD6E42;
   }
   .iframe {
   border: none;
   overflow: hidden;
   width: 540px;
   height: 475px;
   background: white;
   float: left;
   padding-left: 38px;
   }
   button.slick-next, button.slick-next:hover {
   position: absolute;
   top: 41%;
   right: -80px;
   width: 47px;
   height: 47px;
   background-image: url("<?php bloginfo('template_directory');?>/images/Arrow2.png");
   background-size: 50px;
   }
   @media only screen and (max-width: 600px) {
   button.slick-next, button.slick-next:hover {
   display:none !important;
   }
   .iframe {
   border: none;
   overflow: hidden;
   width: 100%;
   height: 405px;
   background: white;
   float: left;
   }
   }
   @media only screen and (min-width: 600px) {
   button.slick-next, button.slick-next:hover {
   display:none !important;
   }
   .iframe {
   border: none;
   overflow: hidden;
   width: 435px;
   height: 405px;
   background: white;
   float: left;
   }
   }
   @media only screen and (min-width: 768px) {
   button.slick-next, button.slick-next:hover {
   display:none !important;
   }
   .iframe {
   border: none;
   overflow: hidden;
   width: 100%;
   height: 405px;
   background: white;
   float: left;
   }
   }
   @media only screen and (min-width: 992px) {
      
   button.slick-next, button.slick-next:hover {
   display:none !important;
   }
   .iframe {
   border: none;
   overflow: hidden;
   width: 100%;
   height: 472px;
   background: white;
   float: left;
   }
   }
   @media only screen and (min-width: 1200px) {
      .tab .nav-tabs li a {
   font-size:14px;
   color:#fff;
   margin-right:0;
   padding:20px 15px !important;
   border-radius:0;
   overflow: hidden;
   background:#DD6E42;
   text-transform:uppercase;
   box-shadow: 8px 12px 25px 2px rgba(0, 0, 0, 0.4);
   transition: all 0.4s ease 0s;
   -webkit-transition: all 0.4s ease 0s;
   -moz-transition: all 0.4s ease 0s;
   -o-transition: all 0.4s ease 0s;
   }
   button.slick-next, button.slick-next:hover {
   display:block !important;
   }
   .iframe {
   border: none;
   overflow: hidden;
   width: 540px;
   height: 505px;
   background: white;
   float: left;
   padding-left: 38px;
   }
   }
   /* clients slider start */
   .slider {
   max-width: 1000px;
   margin: 0 auto;
   float: none !important;
   }
   .slick-slide {
   margin: 0 25px;
   }
   .slick-list {
   margin: 0px -5px 0px -5px;
   }
   button.slick-prev, button.slick-prev:hover {
   position: absolute;
   top: 40%;
   left: -75px;
   width: 47px;
   height: 47px;
   background-image: url("<?php bloginfo('template_directory');?>/images/Arrow1.png");
   background-size: 50px;
   background-position-x: right;
   }
   .slick-prev:before, .slick-next:before {
   font-size: 70px;
   color: #EA8496;
   line-height: inherit;
   font-weight: bold;
   }
   /* Slick Slider Styles -- Provided by https://kenwheeler.github.io/slick/ */
   /* Slider */
   .slick-slider
   {
   position: relative;
   display: block;
   -moz-box-sizing: border-box;
   box-sizing: border-box;
   -webkit-user-select: none;
   -moz-user-select: none;
   -ms-user-select: none;
   user-select: none;
   -webkit-touch-callout: none;
   -khtml-user-select: none;
   -ms-touch-action: pan-y;
   touch-action: pan-y;
   -webkit-tap-highlight-color: transparent;
   }
   .slick-list
   {
   position: relative;
   display: block;
   overflow: hidden;
   margin: 0;
   padding: 0;
   }
   .slick-list:focus
   {
   outline: none;
   }
   .slick-list.dragging
   {
   cursor: pointer;
   cursor: hand;
   }
   .slick-slider .slick-track,
   .slick-slider .slick-list
   {
   -webkit-transform: translate3d(0, 0, 0);
   -moz-transform: translate3d(0, 0, 0);
   -ms-transform: translate3d(0, 0, 0);
   -o-transform: translate3d(0, 0, 0);
   transform: translate3d(0, 0, 0);
   }
   .slick-track
   {
   position: relative;
   top: 0;
   left: 0;
   display: block;
   }
   .slick-track:before,
   .slick-track:after
   {
   display: table;
   content: '';
   }
   .slick-track:after
   {
   clear: both;
   }
   .slick-loading .slick-track
   {
   visibility: hidden;
   }
   .slick-slide
   {
   display: none;
   float: left;
   min-height: 1px;
   }
   [dir='rtl'] .slick-slide
   {
   float: right;
   }
   .slick-slide img
   {
   width:100%;
   object-fit:contain;
   display: block;
   }
   .slick-slide.slick-loading img
   {
   display: none;
   }
   .slick-slide.dragging img
   {
   pointer-events: none;
   }
   .slick-initialized .slick-slide
   {
   display: block;
   }
   .slick-loading .slick-slide
   {
   visibility: hidden;
   }
   .slick-vertical .slick-slide
   {
   display: block;
   height: auto;
   border: 1px solid transparent;
   }
   .slick-arrow.slick-hidden {
   display: none;
   }
   @charset 'UTF-8';
   /* Slider */
   .slick-loading .slick-list
   {
   background: #fff url('http://maggiesadler.com/wp-content/uploads/2015/10/ajax-loader.gif') center center no-repeat;
   }
   /* Icons */
   @font-face
   {
   font-family: 'slick';
   font-weight: normal;
   font-style: normal;
   src: url('file:///C:/Users/msadler/Desktop/slick-1.5.7/slick/fonts/slick.eot');
   src: url('file:///C:/Users/msadler/Desktop/slick-1.5.7/slick/fonts/slick.eot?#iefix') format('embedded-opentype'), url('file:///C:/Users/msadler/Desktop/slick-1.5.7/slick/fonts/slick.woff') format('woff'), url('file:///C:/Users/msadler/Desktop/slick-1.5.7/slick/fonts/slick.ttf') format('truetype'), url('file:///C:/Users/msadler/Desktop/slick-1.5.7/slick/fonts/slick.svg#slick') format('svg');
   }
   /* Arrows */
   .slick-prev,
   .slick-next
   {
   font-size: 0;
   line-height: 0;
   position: absolute;
   top: 50%;
   display: block;
   width: 20px;
   height: 20px;
   margin-top: -10px;
   padding: 0;
   cursor: pointer;
   color: transparent;
   border: none;
   outline: none;
   background: transparent;
   }
   .slick-prev:hover,
   .slick-prev:focus,
   .slick-next:hover,
   .slick-next:focus
   {
   color: transparent;
   outline: none;
   background: transparent;
   }
   .slick-prev:hover:before,
   .slick-prev:focus:before,
   .slick-next:hover:before,
   .slick-next:focus:before
   {
   opacity: 1;
   }
   .slick-prev.slick-disabled:before,
   .slick-next.slick-disabled:before
   {
   opacity: .25;
   }
   .slick-prev:before,
   .slick-next:before
   {
   font-family: 'slick';
   font-size: 20px;
   line-height: 1;
   opacity: .75;
   color: white;
   -webkit-font-smoothing: antialiased;
   -moz-osx-font-smoothing: grayscale;
   }
   .slick-prev
   {
   left: -25px;
   }
   [dir='rtl'] .slick-prev
   {
   right: -25px;
   left: auto;
   }
   .slick-prev:before
   {
   content: '';
   }
   [dir='rtl'] .slick-prev:before
   {
   content: '';
   font-weight: bold;
   font-size: 20px;
   }
   .slick-next
   {
   right: -25px;
   }
   [dir='rtl'] .slick-next
   {
   right: auto;
   left: -25px;
   }
   .slick-next:before
   {
   content: '';
   }
   [dir='rtl'] .slick-next:before
   {
   content: '';
   }
   /* Dots */
   .slick-slider
   {
   margin-bottom: 30px;
   }
   .slick-dots
   {
   position: absolute;
   bottom: -45px;
   display: block;
   width: 100%;
   padding: 0;
   list-style: none;
   text-align: center;
   }
   .slick-dots li
   {
   position: relative;
   display: inline-block;
   width: 20px;
   height: 20px;
   margin: 0 5px;
   padding: 0;
   cursor: pointer;
   }
   .slick-dots li button
   {
   font-size: 0;
   line-height: 0;
   display: block;
   width: 20px;
   height: 20px;
   padding: 5px;
   cursor: pointer;
   color: transparent;
   border: 0;
   outline: none;
   background: transparent;
   }
   .slick-dots li button:hover,
   .slick-dots li button:focus
   {
   outline: none;
   }
   .slick-dots li button:hover:before,
   .slick-dots li button:focus:before
   {
   opacity: 1;
   }
   .slick-dots li button:before
   {
   font-family: 'slick';
   font-size: 6px;
   line-height: 20px;
   position: absolute;
   top: 0;
   left: 0;
   width: 20px;
   height: 20px;
   content: '•';
   text-align: center;
   opacity: .25;
   color: black;
   -webkit-font-smoothing: antialiased;
   -moz-osx-font-smoothing: grayscale;
   }
   .slick-dots li.slick-active button:before
   {
   opacity: .75;
   color: black;
   }
   .mySlides {display:none;}
   .w3-display-left {
   position: absolute;
   top: 60%;
   left: 0%;
   transform: translate(0%,-50%);
   -ms-transform: translate(-0%,-50%);
   }
   .w3-display-right {
   position: absolute;
   top: 60%;
   right: 0%;
   transform: translate(0%,-50%);
   -ms-transform: translate(0%,-50%);
   }
   iframe{
   width:100%;
   height:195px;
   }
   .img-shri{
   width: 100%;
   height: auto;
   padding:20px;
   padding-bottom: 0;
   }
   .kalra-h{
   margin-top:0px;
   margin-bottom:15px;
   }
   .cardx {
   position: relative;
   text-align: justify;
   background-color: #FFFFC7;
   -webkit-box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.75);
   -moz-box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.75);
   box-shadow: 8px 12px 25px 2px rgba(0, 0, 0, 0.4);
   padding-bottom:0px;
   }
   .box-top-border {
   border-top: solid 5px #083D77;
   }
   .card {
   box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.75);
   position: relative;
   top: -30px;
   background: #fff;
   border-radius: 10px;
   transition: 0.3s;
   margin-top:0px;
   }
   .forpadding1 {
   padding-top: 100px;
   padding-bottom: 0px;
   }
   .forpadding2{
   padding-top: 60px;
   padding-bottom: 30px;
   }
   .card-kalra-h{
   background: #DD6E42;
   color: #fff;
   padding: 12px 10px 12px 10px;
   margin: 0;
   text-align:center;
   }
   .img-h-gallery{
   color: #fff;
   margin-bottom: 30px;
   background: transparent;
   color: #083D77;
   border-top: 8px solid #083D77;
   border-bottom: 1px solid #083D77;
   box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.48);
   padding-bottom: 20px;
   text-align:center;
   padding-top: 10px;
   }
   .img-h-video{
   color: #fff;
   margin-bottom: 30px;
   background: transparent;
   color: #00523D;
   border-bottom: 1px solid #DD6E42;
   padding-bottom: 20px;
   text-align:center;
   padding-top: 10px;
   }
   .separator {
   margin-top: 10px;
   border: 1px solid #DD6E42;
   margin-bottom: 25px;
   }
   .honorable-h{
   color: #00523D;
   text-align:justify;
   }
   #boxbox{
   height: 575px;
   }
   #sc-box{
   padding-right:0;
   }
   .image-hover {position:relative;overflow:hidden;background:#FFFFC7;
   width: 240px;
   height: 310px;
   float: left;
   margin-right: 20px;
   margin-bottom: 0px;
   }
   .banner-images{
   height:auto;
   }
   @media only screen and (max-width: 600px) {
   .banner-images{
   height:200px;
   background-position: center center;
   background-size: cover;
   background-repeat: no-repeat;
   background-attachment: fixed;
   }
   .image-hover {position:relative;overflow:hidden;background:#fff;
   width: 100%;
   height: auto;
   float: left;
   margin-right: 20px;
   margin-bottom: 20px;
   }
   #sc-box{
   padding-right:15px;
   }
   #boxbox{
   height:auto;
   }
   .forpadding2{
   padding-top: 0px;
   padding-bottom: 10px;
   }
   .forpadding1 {
   padding-top: 50px;
   padding-bottom: 10px;
   }
   .card {
   box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.75);
   position: relative;
   top: 0px;
   background: #fff;
   border-radius: 10px;
   transition: 0.3s;
   margin-top:20px;
   }
   .honorable-h{
   color: #083D77;
   text-align:center;
   }
   .cardx {
   position: relative;
   text-align: justify;
   background-color: #FFF;
   -webkit-box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.75);
   -moz-box-shadow: 1px 1px 5px 0px rgba(0, 0, 0, 0.75);
   box-shadow: none;
   padding-bottom:30px;
   }
   .kalra-h{
   margin-top:40px;
   }
   .img-shri{
   width: 100%;
   height: auto;
   }
   .slick-slide img
   {
   height:auto !important;
   display: block;
   width:100%;
   }
   }
   .tab .nav-tabs{
   border-bottom:0 none;
   margin-top: 20px;
   margin-left: 35px;
   }

   
  
   .tab .nav-tabs li a {
   font-size:14px;
   color:#fff;
   margin-right:0;
   padding:20px 23px !important;
   border-radius:0;
   overflow: hidden;
   background:#DD6E42;
   text-transform:uppercase;
   box-shadow: 8px 12px 25px 2px rgba(0, 0, 0, 0.4);
   transition: all 0.4s ease 0s;
   -webkit-transition: all 0.4s ease 0s;
   -moz-transition: all 0.4s ease 0s;
   -o-transition: all 0.4s ease 0s;
   }
   .tab .nav-tabs li:first-child a{
   border-top-left-radius:8px;
   }
   .tab .nav-tabs li:last-child a{
   border-top-right-radius:8px;
   }
   



   
   /* .tab .nav-tabs
   {
      margin-left : 2px !important;
   } */
   
   @media screen and (min--moz-device-pixel-ratio:0) {
      .tab .nav-tabs li a:hover,
   .tab .nav-tabs li.active a:hover,
   .tab .nav-tabs li.active a{
   background:#083D77;
   color:#fff;
   margin-top: 0;
   padding:20px 12px;
   border:1px solid #083D77;
   }
   }
   .tab .tab-content{
   color:#fff;
   padding: 25px 20px;
   background:#fff;
   border-radius: 0 0 8px 8px;
   box-shadow: 8px 12px 25px 2px rgba(0, 0, 0, 0.4);
   background: #FFFFC7;
   }
   @media only screen and (max-width: 650px){
   .tab .nav-tabs li{ width:100%; }
   .tab .nav-tabs li a{
   margin:0;
   padding:20px 45px;
   box-shadow: -2px -1px 25px 2px rgba(0, 0, 0, 0.4);
   }
   .tab .nav-tabs li:first-child a,
   .tab .nav-tabs li:last-child a{
   border-radius: 0;
   }
   .tab .nav-tabs li a:hover,
   .tab .nav-tabs li.active a:hover,
   .tab .nav-tabs li.active a{
   margin:0;
   }
   }
   #exampleb{
   background: #DD6E42;
   box-shadow: -3px 5px 2px 2px rgba(31, 43, 59, 0.32);
   border: 1px solid #DD6E42;
   padding: 8px 20px 8px 20px;
   border-radius:8px;
   }
   .section {
   display: none;
   padding: 0rem;
   }
   @media screen and (min-width: 768px) {
   .banner-images{
   height:400px;
   object-fit:cover;
   }
   .tab .nav-tabs li a {
   font-size:14px;
   color:#fff;
   margin-right:0;
   padding:20px 20px !important;
   border-radius:0;
   overflow: hidden;
   background:#DD6E42;
   text-transform:uppercase;
   box-shadow: 8px 12px 25px 2px rgba(0, 0, 0, 0.4);
   transition: all 0.4s ease 0s;
   -webkit-transition: all 0.4s ease 0s;
   -moz-transition: all 0.4s ease 0s;
   -o-transition: all 0.4s ease 0s;
   }
   .section {
   padding: 0rem;
   }
   }
   @supports (display: grid) {
   .section {
   display: block;
   }
   }
   h1 {
   font-size: 2rem;
   margin: 0 0 1.5em;
   }
   .grid {
   display: grid;
   grid-gap: 4px;
   grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
   grid-auto-rows: 150px;
   grid-auto-flow: row dense;
   }
   .item {
   position: relative;
   display: -webkit-box;
   display: flex;
   -webkit-box-orient: vertical;
   -webkit-box-direction: normal;
   flex-direction: column;
   -webkit-box-pack: end;
   justify-content: flex-end;
   box-sizing: border-box;
   color: #fff;
   grid-column-start: auto;
   grid-row-start: auto;
   color: #fff;
   background-size: cover;
   background-position: center;
   box-shadow: -2px 2px 10px 0px rgba(68, 68, 68, 0.4);
   -webkit-transition: -webkit-transform 0.3s ease-in-out;
   transition: -webkit-transform 0.3s ease-in-out;
   transition: transform 0.3s ease-in-out;
   transition: transform 0.3s ease-in-out, -webkit-transform 0.3s ease-in-out;
   cursor: pointer;
   counter-increment: item-counter;
   }
   .item:after {
   content: '';
   position: absolute;
   width: 100%;
   height: 100%;
   -webkit-transition: opacity 0.1s ease-in-out;
   transition: opacity 0.1s ease-in-out;
   }
   .item:hover {
   -webkit-transform: scale(1.01);
   transform: scale(1.01);
   background-color:#083D77 !important;
   opacity: 0.8;
   }
   .item:hover:after {
   background-color:#083D77 !important;
   opacity: 0.8;
   }
   .item--medium {
   grid-row-end: span 2;
   }
   .item--large {
   grid-row-end: span 3;
   }
   .item--full {
   grid-column-end: auto;
   }
   @media screen and (min-width: 768px) {
   .item--full {
   grid-column: 1/-1;
   grid-row-end: span 2;
   }
   }
   .item__details {
   position: relative;
   z-index: 1;
   padding: 15px;
   color: #444;
   background: #fff;
   text-transform: lowercase;
   letter-spacing: 1px;
   color: #828282;
   display:none;
   }
   .item__details:before {
   content: counter(item-counter);
   font-weight: bold;
   font-size: 1.1rem;
   padding-right: 0.5em;
   color: #444;
   }
   .gallery-grid-img{
   width:100%;
   height:100%;
   object-fit: cover
   }
   .hover02 iframe {
   width: 100%;
   -webkit-transition: .3s ease-in-out;
   transition: .3s ease-in-out;
   }
   .hover02 :hover iframe {
   width: 98%;
   }
   .image-hover * {-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box}
   .img-zoom-out img 
   {
   transition:all .2s ease-in-out;
   -webkit-transition:all .2s ease-in-out;
   -moz-transition:all .2s ease-in-out;
   -ms-transition:all .2s ease-in-out;
   -o-transition:all .2s ease-in-out;
   }
   .img-zoom-out:hover img 
   {
   transform:scale(0.9);
   -webkit-transform:scale(0.9);
   -moz-transform:scale(0.9);
   -ms-transform:scale(0.9);
   -o-transform:scale(0.9);
   }
   .slideshow-container {
   max-width: 1250px;
   position: relative;
   margin: auto;
   margin-top: 0px;
   }
   .mySlides {
   display: none;
   height: auto;
   }
   .prev,
   .next {
   cursor: pointer;
   position: absolute;
   top: 50%;
   width: auto;
   margin-top: -22px;
   padding: 5px;
   color: #222428;
   font-weight: bold;
   font-size: 20px;
   transition: .6s ease;
   border-radius: 0 3px 3px 0
   }
   .next {
   right: 0px;
   border-radius: 3px 3px 3px 3px;
   color: #f2f2f2;
   background-color: #DD6E42
   }
   .prev {
   left: 0px;
   border-radius: 3px 3px 3px 3px;
   color: #f2f2f2;
   background-color: #DD6E42
   }
   .prev:hover,
   .next:hover {
   color: #f2f2f2;
   background-color: #DD6E42
   }
   .fade{
   opacity:1;
   }
   .container1 {
   width: 1250px;
   margin-right: auto;
   margin-left: auto;
   }
   ._2p3a{
   width:100% !important;
   }
   @media only screen and (max-width: 600px) {
   .slideshow-container {
   max-width: 1250px;
   position: relative;
   margin: auto;
   margin-top: 0px;
   }
   }
   @media only screen and (min-width: 768px) {
   .slideshow-container {
   max-width: 1250px;
   position: relative;
   margin: auto;
   margin-top: 0px;
   }
   }

   @media screen 
 and (max-width: 1400px) 
 and (min-width: 480px) 
{ .banner-images{
   height:auto;
    margin-top: 40px!important;
   }
   }
   /* @media screen 
 and (max-width: 1900px) 
 and (min-width: 1080px) 
{ .banner-images{
   height:auto;
    margin-top: 40px!important;
   }
   } */
   @media only screen and (min-width: 1200px) {
   .banner-images{
   height:auto;
    margin-top: 45px !important;
   }
   /* .tab .nav-tabs li a {
   font-size:14px;
   color:#fff;
   margin-right:0;
   padding:20px 20x !important;
   border-radius:0;
   overflow: hidden;
   background:#DD6E42;
   text-transform:uppercase;
   box-shadow: 8px 12px 25px 2px rgba(0, 0, 0, 0.4);
   transition: all 0.4s ease 0s;
   -webkit-transition: all 0.4s ease 0s;
   -moz-transition: all 0.4s ease 0s;
   -o-transition: all 0.4s ease 0s;
   }
    .tab .nav-tabs
   {
      margin-left : 2px !important;
   } */
  
   .container1 {
   width: 1250px;   
   margin-right: auto;
   margin-left: auto;
   }
   .slideshow-container {
   max-width: 1250px;
   position: relative;
   margin: auto;
   margin-top: 180px;
   }
   }
   .eapps-widget-toolbar-panel-wrapper{
   display:none !important;
   }
   .unique{
   display:none !important;
   }
   .text-dark{
   color:red;
   }
   /*.eapps-remove-link{*/
   /*      display:none !important;*/
   /*}*/
   .yottie-widget {
   z-index: 0 !important;
   }
</style>
<body>
   <!-- ** Primary Section ** -->
   <div class="hasing" id="bau">
      <section>
         <div class="banner-sec">
            <div class="back-main-bg">
               <div class="banner-inr-sec">
                  <div class="">
                     <div class="slideshow-container">
                        <div class="slideshow-inner">
                           <?php if( have_rows('banner_section') ): ?>
                           <?php while( have_rows('banner_section') ): the_row(); 
                              $image = get_sub_field('image');
                              
                              
                              ?>
                           <div class="mySlides fade">
                              <img  src='<?php echo $image['url']; ?>' class="banner-images" style='width: 100%;'/>
                           </div>
                           <?php endwhile; ?>
                           <?php endif; ?>
                        </div>
                        <a class="prev" onclick='plusSlides(-1)'>&#10094;</a>
                        <a class="next" onclick='plusSlides(1)'>&#10095;</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </div>
   </section>
   <?php $upload_pdf=get_field('upload_pdf');?> 
   <section data-ng-controller="myhmScrolll">
      <div class="container1">
         <div class="home-scroll-sec" id="tp_hom_scroll">
            <?php echo do_shortcode( '[hsas-shortcode group="" speed="15" direction="left" gap="1000"]' ); ?>
            <!--<marquee attribute_name="attribute_value" onmouseout="this.start();" onmouseover="this.stop();" scrollamount="5">-->
            <!--    <img src="http://neologicx.in/sku/wp-content/themes/theme2/images/but_blinkNew.gif"><span><a href="" target="_blank" style="color:#fff; font-weight:600" >Policy of Anti-Plagiarism and Plagiarism Verification Certificate </a></span>-->
            <!--</marquee>-->
         </div>
      </div>
   </section>
   <section>
      <div class="welcome-sec forpadding2">
         <?php $kalraj_mishra_section=get_field('kalraj_mishra_section');?>
         <div class="container">
            <div class="back-main-bg">
               <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" id="sc-box" style="background: #FFFFC7; margin-top:35px; box-shadow: 8px 12px 25px 2px rgba(0, 0, 0, 0.4); border-top: 5px solid #083D77; ">
                     <div class="col-md-4">
                        <div class="card image-hover img-zoom-out">
                           <img src="<?php echo $kalraj_mishra_section['image']['url'];?>" class="img-shri " style="" />
                           <div class="" >
                              <h4 class="card-kalra-h"><b><?php echo $kalraj_mishra_section['name'];?></b></h4>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-8">
                        <!--<h2 class="kalra-h"><b>Shri <span style="color:#77b81e;">Kalraj</span> Mishra</b></h2>-->
                        <h2 class="honorable-h" style="text-align:left;"><b><?php echo $kalraj_mishra_section['heading'];?></b></h2>
                        <div class="separator"></div>
                        <p><?php echo $kalraj_mishra_section['paragraph'];?></p>
<div id="div">
                     <a href="http://rajbhawan.rajasthan.gov.in/content/rajbhawan/en/knowthegovernor.html" target="_blank">
                     <input type="button" id="example2" value="View More" class="button-tab" style="    margin-right: 10px; margin-bottom: 35px;">
                     </a>
                  </div>

                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="sc-box" style="margin-top:35px;">
                     <div class="welcome-inr-sec" style="margin-top:0px; background: #FFFFC7;">
                        <h2 class="honorable-h" style="text-align: center;"><b>Latest News</b></h2>
                        <div class="separator"></div>
                        <marquee  onmouseover="this.stop();" onmouseout="this.start();" scrollamount="7" width="100%" direction="up" height="325px">
                           <?php 
                              $homepageEvents = new WP_Query(array(
                                 'posts_per_page' => 10,
                                 'order' => 'DSC',
                                 'category_name' => 'latest-skrau-news'
                                
                                 ));
                                
                              while($homepageEvents->have_posts()){
                              
                              $homepageEvents->the_post();
                              
                              
                                 ?>
                           <p style="padding:4px 10px 4px 10px; line-height: 1.4;">
                              <a href="<?php echo get_permalink($post->ID);?>"><?php echo get_the_title();?></a>
                           </p>
                           <?php } ?>
                           <?php  wp_reset_postdata();  ?>
                        </marquee>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php
      $dbhost = '127.0.0.1';
               $dbuser = 'root';
               $dbpass = 'xFile@76s';
               $dbname = 'sku_db';
               $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
                if(! $conn ) {
                  die('Could not connect: ' . mysqli_error());
               }
      
      
         
      
      $query = "SELECT * FROM  wp_postmeta WHERE meta_id = 15984" ;
      
      
      $result = mysqli_query($conn, $query);
      while($row = mysqli_fetch_assoc($result)){
         
       $vc = $row['meta_value'];
         
        
            
      }
      
      $queryimg = "SELECT * FROM  wp_postmeta WHERE meta_id = 296" ;
      
      
      $resultimg = mysqli_query($conn, $queryimg);
      while($rowimg = mysqli_fetch_assoc($resultimg)){
         
       $vcimg = $rowimg['meta_value'];
      }
      
      
      ?>
   <section>
      <?php $about_section=get_field('about_section');?>
      <div class="welcome-sec forpadding1" >
         <div class="container">
            <div class="back-main-bg">
               <div class="row cardx  box-top-border">
                  <div class="col-md-3">
                     <div class="card image-hover img-zoom-out">
                        <img src="http://128.199.18.35/wp-content/uploads/<?php echo $vcimg;?>" class="img-shri " style="" />
                        <div class="" >
                           <h4 class="card-kalra-h"><b>Prof. Raksha Pal Singh</b></h4>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-9" style="margin-top:30px;">
                     <h2 class="honorable-h"><b>About Vice-Chancellor</b></h2>
                     <div class="separator"></div>
                     <?php 
                        function limit_text($text, $limit) {
                            if (str_word_count($text, 0) > $limit) {
                                $words = str_word_count($text, 2);
                                $pos   = array_keys($words);
                                $text  = substr($text, 0, $pos[$limit]);
                            }
                            return $text;
                        }
                        
                        echo limit_text($vc, 147);
                        
                         ?>
                  </div>
                  <div id="div">
                     <a href="<?php echo site_url('/Vice-chancellor')?>">
                     <input type="button" id="example2" value="View More" class="button-tab" style="    margin-right: 10px; margin-bottom: 35px;">
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--social connect-->
   <section style="display:block;">
      <div class="welcome-sec forpadding2">
         <div class="container">
            <div class="back-main-bg">
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="sc-box" style="margin-top:35px;">
                     <div class="welcome-inr-sec" style="margin-top:0px;">
                        <h2 class="welcome-h" style="font-size:30px; color:#00523D; "><b>Facebook Connect</b></h2>
                        <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FSKRAUBKN&width=540&colorscheme=light&show_faces=true&border_color&stream=true&header=true&height=435" scrolling="yes" frameborder="0" class="iframe" allowtransparency="true"></iframe>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="sc-box" style="margin-top:35px;">
                     <div class="welcome-inr-sec" style="margin-top:0px;">
                        <h2 class="welcome-h" style="font-size:30px; color:#00523D;"><b>Twitter Connect</b></h2>
                        <a class="twitter-timeline" data-width="550" data-height="500" href="https://twitter.com/SkrauBikaner?ref_src=twsrc%5Etfw">Tweets by SkrauBikaner</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section style="display:block;">
      <div class="welcome-sec forpadding2">
         <div class="container">
            <div class="back-main-bg">
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="sc-box" style="margin-top:35px;">
                     <div class="welcome-inr-sec" style="margin-top:0px;">
                        <h2 class="welcome-h" style="font-size:30px; color:#00523D; "><b>Youtube Connect</b></h2>
                        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                        <div class="elfsight-app-3eb4fc8d-ef7a-4fb9-a352-44b48fd99c80"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php
      $dbhost = '127.0.0.1';
               $dbuser = 'root';
               $dbpass = 'xFile@76s';
               $dbname = 'sku_db';
               $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
                if(! $conn ) {
                  die('Could not connect: ' . mysqli_error());
               }
      
      
         
      
      $query = "SELECT * FROM  wp_postmeta WHERE meta_id = 154" ;
      
      
      $result = mysqli_query($conn, $query);
      while($row = mysqli_fetch_assoc($result)){
         
       $welcome = $row['meta_value'];
      
      
      }
      
      
      ?>
   <section>
      <div class="welcome-sec forpadding2" >
         <div class="container">
            <div class="back-main-bg">
               <div class="row cardx  box-top-border">
                  <div class="col-md-12" style="margin-top:30px; margin-bottom:30px;">
                     <h2 class="honorable-h"><b>Welcome to Swami Keshwanand Rajasthan Agricultural University.</b></h2>
                     <div class="separator"></div>
                     <?php 
                        function limit_textt($text1, $limit1) {
                            if (str_word_count($text1, 0) > $limit1) {
                                $words1 = str_word_count($text1, 2);
                                $pos1   = array_keys($words1);
                                $text1  = substr($text1, 0, $pos1[$limit1]);
                            }
                            return $text1;
                        }
                        
                        echo limit_textt($welcome, 100);
                        
                         ?>
                     <div id="div">
                        <a href="<?php echo site_url('/overview')?>">
                        <input type="button" id="example2" value="View More" class="button-tab">
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section>
      <div class="welcome-sec forpadding">
         <div class="container">
            <div class="row" >
               <div class="tab" role="tabpanel">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                     <li class="active"><a href="#Tender-v" data-toggle="tab">Tenders</a></li>
                     <!--uncomment this code-->
                     <li><a href="#Notice-v" data-toggle="tab">Notice Board</a></li>
                     <li><a href="#Conferences-v" data-toggle="tab">Conferences</a></li>
                     <li><a href="#Result-v" data-toggle="tab">Result</a></li>
                     <li><a href="#Publications-v" data-toggle="tab">Publications</a></li>
                     <li><a href="#Up-Coming-v" data-toggle="tab">Distance-Education-Cources</a></li>
                     <li><a href="#Agro-Advisory-v" data-toggle="tab">Agro-Advisory</a></li>
                     <li><a href="#Job-v" data-toggle="tab">Job</a></li>
                     <!--<li><a href="#farmers-c" data-toggle="tab">Farmers Corner</a></li>-->

                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                     <div class="tab-pane " id="Notice-v">
                        <?php 
                           $homepageEvents = new WP_Query(array(
                              'posts_per_page' => 2,
                              'order' => 'DSC',
                              'category_name' => 'notice-board'
                              ));
                             
                           while($homepageEvents->have_posts()){
                           
                           $homepageEvents->the_post();
                           
                           
                              ?>
                        <h4 class="tab_heading" style="color:#083D77;">Posted On <?php echo get_the_date(); ?> </h4>
                        <h5 class="tab_heading"><?php the_title(); ?> </h5>
                        <p class="tab_para"><?php  the_content();?></p>
                        <br>
                        <?php } ?>
                        <?php  wp_reset_postdata();  ?>
                     </div>
                     <div class="tab-pane active" id="Tender-v">
                        <?php 
                           $homepageEvents = new WP_Query(array(
                              'posts_per_page' => 2,
                              'order' => 'DSC',
                              'category_name' => 'skrau-tenders'
                              ));
                             
                           while($homepageEvents->have_posts()){
                           
                           $homepageEvents->the_post();
                           
                           
                              ?>
                        <h4 class="tab_heading" style="color:#083D77;">Posted On <?php echo get_the_date(); ?> </h4>
                        <h5 class="tab_heading"><?php the_title(); ?> </h5>
                        <p class="tab_para"><?php  the_content();?></p>
                        <br>
                        <?php } ?>
                        <?php  wp_reset_postdata();  ?>
                        <div id="div">
                           <a href="<?php echo site_url('/tenders')?>">
                           <input type="button" id="example2" value="View More" class="button-tab">
                           </a>
                        </div>
                     </div>
                     <div class="tab-pane" id="Conferences-v">
                        <?php 
                           $homepageEvents = new WP_Query(array(
                              'posts_per_page' => 2,
                              'order' => 'DSC',
                              'category_name' => 'conferences'
                              ));
                             
                           while($homepageEvents->have_posts()){
                           
                           $homepageEvents->the_post();
                           
                           
                              ?>
                        <h4 class="tab_heading" style="color:#083D77;">Posted On <?php echo get_the_date(); ?> </h4>
                        <h5 class="tab_heading"><?php the_title(); ?> </h5>
                        <p class="tab_para"><?php  the_content();?></p>
                        <br>
                        <?php } ?>
                        <?php  wp_reset_postdata();  ?>
                     </div>
                     <div class="tab-pane" id="Result-v">
                        <?php 
                           $homepageEvents = new WP_Query(array(
                              'posts_per_page' => 2,
                              'order' => 'DSC',
                              'category_name' => 'result'
                              ));
                             
                           while($homepageEvents->have_posts()){
                           
                           $homepageEvents->the_post();
                           
                           
                              ?>
                        <h4 class="tab_heading" style="color:#083D77;">Posted On <?php echo get_the_date(); ?> </h4>
                        <h5 class="tab_heading"><?php the_title(); ?> </h5>
                        <p class="tab_para"><?php  the_content();?></p>
                        <br>
                        <?php } ?>
                        <?php  wp_reset_postdata();  ?>
                     </div>
                     <div class="tab-pane" id="Publications-v">
                        <?php 
                           $homepageEvents = new WP_Query(array(
                              'posts_per_page' => 2,
                              'order' => 'ASC',
                              'category_name' => 'skrau-publications'
                              ));
                             
                           while($homepageEvents->have_posts()){
                           
                           $homepageEvents->the_post();
                           
                           
                              ?>
                        <h4 class="tab_heading" style="color:#083D77;">Posted On <?php echo get_the_date(); ?> </h4>
                        <h5 class="tab_heading"><?php the_title(); ?> </h5>
                        <p class="tab_para"><?php  the_content();?></p>
                        <br>
                        <?php } ?>
                        <?php  wp_reset_postdata();  ?>
			
			<div id="div">
                           <a href="<?php echo site_url('/publications')?>">
                           <input type="button" id="example2" value="View More" class="button-tab">
                           </a>
                        </div>


                     </div>
                     <div class="tab-pane" id="Up-Coming-v">
                        <?php 
                           $homepageEvents = new WP_Query(array(
                              'posts_per_page' => 2,
                              'order' => 'DSC',
                              'category_name' => 'up-coming-events'
                              ));
                             
                           while($homepageEvents->have_posts()){
                           
                           $homepageEvents->the_post();
                           
                           
                              ?>
                        <h4 class="tab_heading" style="color:#083D77;">Posted On <?php echo get_the_date(); ?> </h4>
                        <h5 class="tab_heading"><?php the_title(); ?> </h5>
                        <p class="tab_para"><?php  the_content();?></p>
                        <br>
                        <?php } ?>
                        <?php  wp_reset_postdata();  ?>
                        <div id="div">
                           <a href="<?php echo site_url('/up-coming-events')?>">
                           <input type="button" id="example2" value="View More" class="button-tab">
                           </a>
                        </div>
                     </div>
                     <div class="tab-pane" id="Agro-Advisory-v">
                        <?php 
                           $homepageEvents = new WP_Query(array(
                              'posts_per_page' => 2,
                              'order' => 'DSC',
                              'category_name' => 'agro-advisory'
                              ));
                             
                           while($homepageEvents->have_posts()){
                           
                           $homepageEvents->the_post();
                           
                           
                              ?>
                        <h4 class="tab_heading" style="color:#083D77;">Posted On <?php echo get_the_date(); ?> </h4>
                        <h5 class="tab_heading"><?php the_title(); ?> </h5>
                        <p class="tab_para"><?php  the_content();?></p>
                        <br>
                        <?php } ?>
                        <?php  wp_reset_postdata();  ?>
                     </div>
                     <div class="tab-pane" id="Job-v">
                        <?php 
                           $homepageEvents = new WP_Query(array(
                              'posts_per_page' => 2,
                              'order' => 'DSC',
                              'category_name' => 'job'
                              ));
                             
                           while($homepageEvents->have_posts()){
                           
                           $homepageEvents->the_post();
                           
                           
                              ?>
                        <h4 class="tab_heading" style="color:#083D77;">Posted On <?php echo get_the_date(); ?> </h4>
                        <h5 class="tab_heading"><?php the_title(); ?> </h5>
                        <p class="tab_para"><?php  the_content();?></p>
                        <br>
                        <?php } ?>
                        <?php  wp_reset_postdata();  ?>
                     </div>
                     <div class="tab-pane" id="farmers-c">
                        <?php 
                           $homepageEvents = new WP_Query(array(
                              'posts_per_page' => 2,
                              'order' => 'DSC',
                              'category_name' => 'farmers-corner'
                              ));
                             
                           while($homepageEvents->have_posts()){
                           
                           $homepageEvents->the_post();
                           
                           
                              ?>
                        <h4 class="tab_heading" style="color:#083D77;">Posted On <?php echo get_the_date(); ?> </h4>
                        <h5 class="tab_heading"><?php the_title(); ?> </h5>
                        <p class="tab_para"><?php  the_content();?></p>
                        <br>
                        <?php } ?>
                        <?php  wp_reset_postdata();  ?>
                     </div>
                  </div>
               </div>
               <!--<div class="col-xs-3" style="padding: 0;">-->
               <!--    <ul class="nav nav-tabs tabs-left sideways">-->
               <!--        <li class="active"><a href="#Notice-v" data-toggle="tab">Notice Board</a></li>-->
               <!--        <li><a href="#Tender-v" data-toggle="tab">Tender</a></li>-->
               <!--        <li><a href="#Conferences-v" data-toggle="tab">Conferences</a></li>-->
               <!--        <li><a href="#Job-v" data-toggle="tab">Job</a></li>-->
               <!--        <li><a href="#Result-v" data-toggle="tab">Result</a></li>-->
               <!--        <li><a href="#Happening-v" data-toggle="tab">Happening</a></li>-->
               <!--        <li><a href="#Up-Coming-v" data-toggle="tab">Up-Coming Events</a></li>-->
               <!--        <li><a href="#Agro-Advisory-v" data-toggle="tab">Agro-Advisory</a></li>-->
               <!--    </ul>-->
               <!--</div>-->
               <!--<div class="col-xs-9" style="padding: 0px 0px 0px 9px;">-->
               <!--    <div class="tab-content">-->
               <!--        <div class="tab-pane active" id="Notice-v">-->
               <!--         <h4 class="tab_heading" style="color:#083D77;">Posted On 15 Dec 2019 </h4> <p class="tab_para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'</p>-->
               <!--            <br>-->
               <!--            <h4 class="tab_heading" style="color:#083D77;">Posted On 15 Dec 2019 </h4> <p class="tab_para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>-->
               <!--            <div id="div">-->
               <!--                <a href="<?php echo site_url('/notice-board')?>">-->
               <!--                    <input type="button" id="example2" value="View More" class="button-tab">-->
               <!--                </a>-->
               <!--        </div>-->
               <!--        </div>-->
               <!--        <div class="tab-pane" id="Tender-v">-->
               <!--        <h4  class="tab_heading" style="color:#083D77;">Posted On 15 Dec 2019 </h4> <p class="tab_para">7/19/2012 - Farm Implements & Machinery Testing & Training Centre of SKRAU, Bikaner has been approved by Ministry of Agriculture, Govt. of India, New Delhi</p>-->
               <!--            <br>-->
               <!--            <br>-->
               <!--            <h4 class="tab_heading" style="color:#083D77;">Posted On 15 Dec 2019 </h4> <p class="tab_para">5/24/2019 - Instructions for admission in B.Sc.(Hons.)Agriculture through open merit for the session 2019-20 through ONLINE ADMISSION.</p>-->
               <!--            <div id="div">-->
               <!--                <a href="http://neologicx.in/sku/news-events/">-->
               <!--                    <input type="button" id="example2" value="View More" class="button-tab">-->
               <!--                </a>-->
               <!--            </div>-->
               <!--        </div>-->
               <!--        <div class="tab-pane" id="Conferences-v">-->
               <!--            <h4 class="tab_heading" style="color:#083D77;">Posted On 11 Dec 2019 </h4> <p class="tab_para">8/30/2017 - Admission Notice, General Instructions and Application Form for spot admission on merit basis of ICAR-AIEEA Exam in B.Sc.(Hons) Ag.,M.Sc.,Ph.D and MPUAT Pre PG Exam in M.Sc. (Home Science) ,2017-18</p>-->
               <!--            <br>-->
               <!--            <br>-->
               <!--            <h4 class="tab_heading" style="color:#083D77;">Posted On 1 Dec 2019 </h4> <p class="tab_para">7/19/2012 - Farm Implements & Machinery Testing & Training Centre of SKRAU, Bikaner has been approved by Ministry of Agriculture, Govt. of India, New Delhi</p>-->
               <!--            <div id="div">-->
               <!--                <a href="http://neologicx.in/sku/news-events/">-->
               <!--                    <input type="button" id="example2" value="View More" class="button-tab">-->
               <!--                </a>-->
               <!--            </div>-->
               <!--        </div>-->
               <!--        <div class="tab-pane" id="Job-v">-->
               <!--            <h4 class="tab_heading" style="color:#083D77;">Posted On 15 Dec 2019 </h4> <p class="tab_para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'</p>-->
               <!--            <br>-->
               <!--            <br>-->
               <!--            <h4 class="tab_heading" style="color:#083D77;">Posted On 15 Dec 2019 </h4> <p class="tab_para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'</p>-->
               <!--            <div id="div">-->
               <!--                <a href="http://neologicx.in/sku/news-events/">-->
               <!--                    <input type="button" id="example2" value="View More" class="button-tab">-->
               <!--                </a>-->
               <!--            </div>-->
               <!--        </div>-->
               <!--        <div class="tab-pane" id="Result-v">-->
               <!--            <h4  class="tab_heading" style="color:#083D77;">Posted On 15 Dec 2019 </h4> <p class="tab_para">7/19/2012 - Farm Implements & Machinery Testing & Training Centre of SKRAU, Bikaner has been approved by Ministry of Agriculture, Govt. of India, New Delhi</p>-->
               <!--            <br>-->
               <!--            <br>-->
               <!--            <h4 class="tab_heading" style="color:#083D77;">Posted On 15 Dec 2019 </h4> <p class="tab_para">5/24/2019 - Instructions for admission in B.Sc.(Hons.)Agriculture through open merit for the session 2019-20 through ONLINE ADMISSION.</p>-->
               <!--            <div id="div">-->
               <!--                <a href="http://neologicx.in/sku/news-events/">-->
               <!--                    <input type="button" id="example2" value="View More" class="button-tab">-->
               <!--                </a>-->
               <!--            </div>-->
               <!--        </div>-->
               <!--        <div class="tab-pane" id="Happening-v">-->
               <!--            <h4 class="tab_heading" style="color:#083D77#083D77;">Posted On 15 Dec 2019 </h4> <p class="tab_para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'</p>-->
               <!--            <br>-->
               <!--            <br>-->
               <!--            <h4 class="tab_heading" style="color:#083D77;">Posted On 15 Dec 2019 </h4> <p class="tab_para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'</p>-->
               <!--            <div id="div">-->
               <!--                <a href="http://neologicx.in/sku/news-events/">-->
               <!--                    <input type="button" id="example2" value="View More" class="button-tab">-->
               <!--                </a>-->
               <!--            </div>-->
               <!--        </div>-->
               <!--        <div class="tab-pane" id="Up-Coming-v">-->
               <!--            <h4 class="tab_heading" style="color:#083D77;">Posted On 20 Dec 2019 </h4> <p class="tab_para">5/24/2019 - Instructions for admission in B.Sc.(Hons.)Agriculture through open merit for the session 2019-20 through ONLINE ADMISSION.</p>-->
               <!--            <br>-->
               <!--            <br>-->
               <!--            <h4 class="tab_heading" style="color:#083D77;">Posted On 15 Dec 2019 </h4> <p class="tab_para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'</p>-->
               <!--            <div id="div">-->
               <!--                <a href="http://neologicx.in/sku/news-events/">-->
               <!--                    <input type="button" id="example2" value="View More" class="button-tab">-->
               <!--                </a>-->
               <!--            </div>-->
               <!--        </div>-->
               <!--        <div class="tab-pane" id="Agro-Advisory-v">-->
               <!--            <h4 class="tab_heading" style="color:#083D77;">Posted On 15 Dec 2019 </h4> <p class="tab_para">8/30/2017 - Admission Notice, General Instructions and Application Form for spot admission on merit basis of ICAR-AIEEA Exam in B.Sc.(Hons) Ag.,M.Sc.,Ph.D and MPUAT Pre PG Exam in M.Sc. (Home Science) ,2017-18</p>-->
               <!--            <br>-->
               <!--            <br>-->
               <!--            <h4 class="tab_heading" style="color:#083D77;">Posted On 15 Dec 2019 </h4> <p class="tab_para">7/19/2012 - Farm Implements & Machinery Testing & Training Centre of SKRAU, Bikaner has been approved by Ministry of Agriculture, Govt. of India, New Delhi</p>-->
               <!--            <div id="div">-->
               <!--                <a href="http://neologicx.in/sku/news-events/">-->
               <!--                    <input type="button" id="example2" value="View More" class="button-tab">-->
               <!--                </a>-->
               <!--            </div>-->
               <!--        </div>-->
               <!--    </div>-->
               <!--</div>-->
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
   </section>
   <section>
      <div class="notice-bx-sec forpadding">
         <div class="container">
            <div class="back-main-bg">
               <div class="notice-bx-sec-iner">
                  <div class="row row cardx  box-top-border">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 20px;">
                        <div class="">
                           <div class="">
                              <h2 class="img-h-video"><b>Image Gallery</b></h2>
                           </div>
                           <div class="col-md-12" id="banner">
                              <?php if( have_rows('image_gallery_2') ): ?>
                              <?php while( have_rows('image_gallery_2') ): the_row(); 
                                 $image = get_sub_field('image');

                                 $link_text = get_sub_field('link_text');

                                 
                                 ?>
                              <div class=" gallery col-md-3" style="margin-bottom:20px;">
                                <a href="<?php echo $link_text; ?>"> <img src="<?php echo $image['url']; ?>" style="width:100%; height: 195px;
                                    object-fit: cover;"> </a>
                              </div>
                              <?php endwhile; ?>
                              <?php endif; ?>
                              <div id="div">
                                 <a href="<?php echo site_url('/photo-gallery-2019')?>">
                                 <input type="button" id="example2" value="View More" class="button">
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-bottom: 20px;">
                        <div class="">
                           <div class="">
                              <h2 class="img-h-video"><b>Video Gallery</b></h2>
                           </div>
                           <div class="col-md-12" id="banner">
                              <?php if( have_rows('video_gallery') ): ?>
                              <?php while( have_rows('video_gallery') ): the_row(); 
                                 $iframe_video = get_sub_field('iframe_video');
                                 
                                 
                                 ?>
                              <div class=" gallery col-md-6" style="margin-bottom:2px;">
                                 <div class="hover02"><?php echo $iframe_video; ?></div>
                              </div>
                              <?php endwhile; ?>
                              <?php endif; ?>
                           </div>
                           <div id="div">
                              <a href="<?php echo site_url('/video-gallery')?>">
                              <input type="button" id="example2" value="View More" class="button">
                              </a>
                           </div>
                        </div>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
   </section>

   <section>
   <div class="collaborate-sec forpadding">
   <div class="container box-top-border" style="background: #FFFFC7;">
   <h2 class="img-h-video"><b>Important Links</b></h2>
   <div class="row">
   <div class="col-lg-12 col-md-12 col-sm12 col-xs-12">
   <div class="slider">
   <?php if( have_rows('important_links_section_') ): ?>
   <?php while( have_rows('important_links_section_') ): the_row(); 
      $images = get_sub_field('images');
      $pdf = get_sub_field('pdf');
      
      
      ?>
   <a href="<?php echo $pdf; ?>" target="_blank"><img src="<?php echo $images['url']; ?>"  style="height: 100px; border-radius:12px;"/></a>
   <?php endwhile; ?>
   <?php endif; ?>
   </div>
   </div>
   </div>
   </div>
   </div>
   </section>
   <section>
   <div class="collaborate-sec forpadding" style="background: #083D77; padding-top:0px; margin: 0px 0px 0px 0px;">
   </div>
   </section>
   </div>
   <script>
      var slideIndex = 1;
      
      var myTimer;
      
      var slideshowContainer;
      
      window.addEventListener("load",function() {
      showSlides(slideIndex);
      myTimer = setInterval(function(){plusSlides(1)}, 4000);
      
      //COMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
      slideshowContainer = document.getElementsByClassName('slideshow-inner')[0];
      
      //UNCOMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
      // slideshowContainer = document.getElementsByClassName('slideshow-container')[0];
      
      slideshowContainer.addEventListener('mouseenter', pause)
      slideshowContainer.addEventListener('mouseleave', resume)
      })
      
      // NEXT AND PREVIOUS CONTROL
      function plusSlides(n){
      clearInterval(myTimer);
      if (n < 0){
      showSlides(slideIndex -= 1);
      } else {
      showSlides(slideIndex += 1); 
      }
      
      //COMMENT OUT THE LINES BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
      
      if (n === -1){
      myTimer = setInterval(function(){plusSlides(n + 2)}, 4000);
      } else {
      myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
      }
      }
      
      //Controls the current slide and resets interval if needed
      function currentSlide(n){
      clearInterval(myTimer);
      myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
      showSlides(slideIndex = n);
      }
      
      function showSlides(n){
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      }
      
      pause = () => {
      clearInterval(myTimer);
      }
      
      resume = () =>{
      clearInterval(myTimer);
      myTimer = setInterval(function(){plusSlides(slideIndex)}, 4000);
      }
   </script>
   <!-- slick slider start -->
   <script>
      jQuery(document).ready(function($) {
         $('.slider').slick({
           dots: false,
           infinite: true,
           speed: 500,
           slidesToShow: 4,
           slidesToScroll: 1,
           autoplay: true,
           autoplaySpeed: 2000,
           arrows: true,
           responsive: [{
             breakpoint: 600,
             settings: {
               slidesToShow: 2,
               slidesToScroll: 1
             }
           },
           {
              breakpoint: 400,
              settings: {
                 arrows: false,
                 slidesToShow: 1,
                 slidesToScroll: 1
              }
           }]
       });
      });
      
      
      !function(a){"use strict";"function"==typeof define&&define.amd?define(["jquery"],a):"undefined"!=typeof exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){"use strict";var b=window.Slick||{};b=function(){function c(c,d){var f,e=this;e.defaults={accessibility:!0,adaptiveHeight:!1,appendArrows:a(c),appendDots:a(c),arrows:!0,asNavFor:null,prevArrow:'<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button">Previous</button>',nextArrow:'<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button">Next</button>',autoplay:!1,autoplaySpeed:3e3,centerMode:!1,centerPadding:"50px",cssEase:"ease",customPaging:function(a,b){return'<button type="button" data-role="none" role="button" aria-required="false" tabindex="0">'+(b+1)+"</button>"},dots:!1,dotsClass:"slick-dots",draggable:!0,easing:"linear",edgeFriction:.35,fade:!1,focusOnSelect:!1,infinite:!0,initialSlide:0,lazyLoad:"ondemand",mobileFirst:!1,pauseOnHover:!0,pauseOnDotsHover:!1,respondTo:"window",responsive:null,rows:1,rtl:!1,slide:"",slidesPerRow:1,slidesToShow:1,slidesToScroll:1,speed:500,swipe:!0,swipeToSlide:!1,touchMove:!0,touchThreshold:5,useCSS:!0,variableWidth:!1,vertical:!1,verticalSwiping:!1,waitForAnimate:!0,zIndex:1e3},e.initials={animating:!1,dragging:!1,autoPlayTimer:null,currentDirection:0,currentLeft:null,currentSlide:0,direction:1,$dots:null,listWidth:null,listHeight:null,loadIndex:0,$nextArrow:null,$prevArrow:null,slideCount:null,slideWidth:null,$slideTrack:null,$slides:null,sliding:!1,slideOffset:0,swipeLeft:null,$list:null,touchObject:{},transformsEnabled:!1,unslicked:!1},a.extend(e,e.initials),e.activeBreakpoint=null,e.animType=null,e.animProp=null,e.breakpoints=[],e.breakpointSettings=[],e.cssTransitions=!1,e.hidden="hidden",e.paused=!1,e.positionProp=null,e.respondTo=null,e.rowCount=1,e.shouldClick=!0,e.$slider=a(c),e.$slidesCache=null,e.transformType=null,e.transitionType=null,e.visibilityChange="visibilitychange",e.windowWidth=0,e.windowTimer=null,f=a(c).data("slick")||{},e.options=a.extend({},e.defaults,f,d),e.currentSlide=e.options.initialSlide,e.originalSettings=e.options,"undefined"!=typeof document.mozHidden?(e.hidden="mozHidden",e.visibilityChange="mozvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(e.hidden="webkitHidden",e.visibilityChange="webkitvisibilitychange"),e.autoPlay=a.proxy(e.autoPlay,e),e.autoPlayClear=a.proxy(e.autoPlayClear,e),e.changeSlide=a.proxy(e.changeSlide,e),e.clickHandler=a.proxy(e.clickHandler,e),e.selectHandler=a.proxy(e.selectHandler,e),e.setPosition=a.proxy(e.setPosition,e),e.swipeHandler=a.proxy(e.swipeHandler,e),e.dragHandler=a.proxy(e.dragHandler,e),e.keyHandler=a.proxy(e.keyHandler,e),e.autoPlayIterator=a.proxy(e.autoPlayIterator,e),e.instanceUid=b++,e.htmlExpr=/^(?:\s*(<[\w\W]+>)[^>]*)$/,e.registerBreakpoints(),e.init(!0),e.checkResponsive(!0)}var b=0;return c}(),b.prototype.addSlide=b.prototype.slickAdd=function(b,c,d){var e=this;if("boolean"==typeof c)d=c,c=null;else if(0>c||c>=e.slideCount)return!1;e.unload(),"number"==typeof c?0===c&&0===e.$slides.length?a(b).appendTo(e.$slideTrack):d?a(b).insertBefore(e.$slides.eq(c)):a(b).insertAfter(e.$slides.eq(c)):d===!0?a(b).prependTo(e.$slideTrack):a(b).appendTo(e.$slideTrack),e.$slides=e.$slideTrack.children(this.options.slide),e.$slideTrack.children(this.options.slide).detach(),e.$slideTrack.append(e.$slides),e.$slides.each(function(b,c){a(c).attr("data-slick-index",b)}),e.$slidesCache=e.$slides,e.reinit()},b.prototype.animateHeight=function(){var a=this;if(1===a.options.slidesToShow&&a.options.adaptiveHeight===!0&&a.options.vertical===!1){var b=a.$slides.eq(a.currentSlide).outerHeight(!0);a.$list.animate({height:b},a.options.speed)}},b.prototype.animateSlide=function(b,c){var d={},e=this;e.animateHeight(),e.options.rtl===!0&&e.options.vertical===!1&&(b=-b),e.transformsEnabled===!1?e.options.vertical===!1?e.$slideTrack.animate({left:b},e.options.speed,e.options.easing,c):e.$slideTrack.animate({top:b},e.options.speed,e.options.easing,c):e.cssTransitions===!1?(e.options.rtl===!0&&(e.currentLeft=-e.currentLeft),a({animStart:e.currentLeft}).animate({animStart:b},{duration:e.options.speed,easing:e.options.easing,step:function(a){a=Math.ceil(a),e.options.vertical===!1?(d[e.animType]="translate("+a+"px, 0px)",e.$slideTrack.css(d)):(d[e.animType]="translate(0px,"+a+"px)",e.$slideTrack.css(d))},complete:function(){c&&c.call()}})):(e.applyTransition(),b=Math.ceil(b),d[e.animType]=e.options.vertical===!1?"translate3d("+b+"px, 0px, 0px)":"translate3d(0px,"+b+"px, 0px)",e.$slideTrack.css(d),c&&setTimeout(function(){e.disableTransition(),c.call()},e.options.speed))},b.prototype.asNavFor=function(b){var c=this,d=c.options.asNavFor;d&&null!==d&&(d=a(d).not(c.$slider)),null!==d&&"object"==typeof d&&d.each(function(){var c=a(this).slick("getSlick");c.unslicked||c.slideHandler(b,!0)})},b.prototype.applyTransition=function(a){var b=this,c={};c[b.transitionType]=b.options.fade===!1?b.transformType+" "+b.options.speed+"ms "+b.options.cssEase:"opacity "+b.options.speed+"ms "+b.options.cssEase,b.options.fade===!1?b.$slideTrack.css(c):b.$slides.eq(a).css(c)},b.prototype.autoPlay=function(){var a=this;a.autoPlayTimer&&clearInterval(a.autoPlayTimer),a.slideCount>a.options.slidesToShow&&a.paused!==!0&&(a.autoPlayTimer=setInterval(a.autoPlayIterator,a.options.autoplaySpeed))},b.prototype.autoPlayClear=function(){var a=this;a.autoPlayTimer&&clearInterval(a.autoPlayTimer)},b.prototype.autoPlayIterator=function(){var a=this;a.options.infinite===!1?1===a.direction?(a.currentSlide+1===a.slideCount-1&&(a.direction=0),a.slideHandler(a.currentSlide+a.options.slidesToScroll)):(0===a.currentSlide-1&&(a.direction=1),a.slideHandler(a.currentSlide-a.options.slidesToScroll)):a.slideHandler(a.currentSlide+a.options.slidesToScroll)},b.prototype.buildArrows=function(){var b=this;b.options.arrows===!0&&(b.$prevArrow=a(b.options.prevArrow).addClass("slick-arrow"),b.$nextArrow=a(b.options.nextArrow).addClass("slick-arrow"),b.slideCount>b.options.slidesToShow?(b.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),b.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),b.htmlExpr.test(b.options.prevArrow)&&b.$prevArrow.prependTo(b.options.appendArrows),b.htmlExpr.test(b.options.nextArrow)&&b.$nextArrow.appendTo(b.options.appendArrows),b.options.infinite!==!0&&b.$prevArrow.addClass("slick-disabled").attr("aria-disabled","true")):b.$prevArrow.add(b.$nextArrow).addClass("slick-hidden").attr({"aria-disabled":"true",tabindex:"-1"}))},b.prototype.buildDots=function(){var c,d,b=this;if(b.options.dots===!0&&b.slideCount>b.options.slidesToShow){for(d='<ul class="'+b.options.dotsClass+'">',c=0;c<=b.getDotCount();c+=1)d+="<li>"+b.options.customPaging.call(this,b,c)+"</li>";d+="</ul>",b.$dots=a(d).appendTo(b.options.appendDots),b.$dots.find("li").first().addClass("slick-active").attr("aria-hidden","false")}},b.prototype.buildOut=function(){var b=this;b.$slides=b.$slider.children(b.options.slide+":not(.slick-cloned)").addClass("slick-slide"),b.slideCount=b.$slides.length,b.$slides.each(function(b,c){a(c).attr("data-slick-index",b).data("originalStyling",a(c).attr("style")||"")}),b.$slidesCache=b.$slides,b.$slider.addClass("slick-slider"),b.$slideTrack=0===b.slideCount?a('<div class="slick-track"/>').appendTo(b.$slider):b.$slides.wrapAll('<div class="slick-track"/>').parent(),b.$list=b.$slideTrack.wrap('<div aria-live="polite" class="slick-list"/>').parent(),b.$slideTrack.css("opacity",0),(b.options.centerMode===!0||b.options.swipeToSlide===!0)&&(b.options.slidesToScroll=1),a("img[data-lazy]",b.$slider).not("[src]").addClass("slick-loading"),b.setupInfinite(),b.buildArrows(),b.buildDots(),b.updateDots(),b.setSlideClasses("number"==typeof b.currentSlide?b.currentSlide:0),b.options.draggable===!0&&b.$list.addClass("draggable")},b.prototype.buildRows=function(){var b,c,d,e,f,g,h,a=this;if(e=document.createDocumentFragment(),g=a.$slider.children(),a.options.rows>1){for(h=a.options.slidesPerRow*a.options.rows,f=Math.ceil(g.length/h),b=0;f>b;b++){var i=document.createElement("div");for(c=0;c<a.options.rows;c++){var j=document.createElement("div");for(d=0;d<a.options.slidesPerRow;d++){var k=b*h+(c*a.options.slidesPerRow+d);g.get(k)&&j.appendChild(g.get(k))}i.appendChild(j)}e.appendChild(i)}a.$slider.html(e),a.$slider.children().children().children().css({width:100/a.options.slidesPerRow+"%",display:"inline-block"})}},b.prototype.checkResponsive=function(b,c){var e,f,g,d=this,h=!1,i=d.$slider.width(),j=window.innerWidth||a(window).width();if("window"===d.respondTo?g=j:"slider"===d.respondTo?g=i:"min"===d.respondTo&&(g=Math.min(j,i)),d.options.responsive&&d.options.responsive.length&&null!==d.options.responsive){f=null;for(e in d.breakpoints)d.breakpoints.hasOwnProperty(e)&&(d.originalSettings.mobileFirst===!1?g<d.breakpoints[e]&&(f=d.breakpoints[e]):g>d.breakpoints[e]&&(f=d.breakpoints[e]));null!==f?null!==d.activeBreakpoint?(f!==d.activeBreakpoint||c)&&(d.activeBreakpoint=f,"unslick"===d.breakpointSettings[f]?d.unslick(f):(d.options=a.extend({},d.originalSettings,d.breakpointSettings[f]),b===!0&&(d.currentSlide=d.options.initialSlide),d.refresh(b)),h=f):(d.activeBreakpoint=f,"unslick"===d.breakpointSettings[f]?d.unslick(f):(d.options=a.extend({},d.originalSettings,d.breakpointSettings[f]),b===!0&&(d.currentSlide=d.options.initialSlide),d.refresh(b)),h=f):null!==d.activeBreakpoint&&(d.activeBreakpoint=null,d.options=d.originalSettings,b===!0&&(d.currentSlide=d.options.initialSlide),d.refresh(b),h=f),b||h===!1||d.$slider.trigger("breakpoint",[d,h])}},b.prototype.changeSlide=function(b,c){var f,g,h,d=this,e=a(b.target);switch(e.is("a")&&b.preventDefault(),e.is("li")||(e=e.closest("li")),h=0!==d.slideCount%d.options.slidesToScroll,f=h?0:(d.slideCount-d.currentSlide)%d.options.slidesToScroll,b.data.message){case"previous":g=0===f?d.options.slidesToScroll:d.options.slidesToShow-f,d.slideCount>d.options.slidesToShow&&d.slideHandler(d.currentSlide-g,!1,c);break;case"next":g=0===f?d.options.slidesToScroll:f,d.slideCount>d.options.slidesToShow&&d.slideHandler(d.currentSlide+g,!1,c);break;case"index":var i=0===b.data.index?0:b.data.index||e.index()*d.options.slidesToScroll;d.slideHandler(d.checkNavigable(i),!1,c),e.children().trigger("focus");break;default:return}},b.prototype.checkNavigable=function(a){var c,d,b=this;if(c=b.getNavigableIndexes(),d=0,a>c[c.length-1])a=c[c.length-1];else for(var e in c){if(a<c[e]){a=d;break}d=c[e]}return a},b.prototype.cleanUpEvents=function(){var b=this;b.options.dots&&null!==b.$dots&&(a("li",b.$dots).off("click.slick",b.changeSlide),b.options.pauseOnDotsHover===!0&&b.options.autoplay===!0&&a("li",b.$dots).off("mouseenter.slick",a.proxy(b.setPaused,b,!0)).off("mouseleave.slick",a.proxy(b.setPaused,b,!1))),b.options.arrows===!0&&b.slideCount>b.options.slidesToShow&&(b.$prevArrow&&b.$prevArrow.off("click.slick",b.changeSlide),b.$nextArrow&&b.$nextArrow.off("click.slick",b.changeSlide)),b.$list.off("touchstart.slick mousedown.slick",b.swipeHandler),b.$list.off("touchmove.slick mousemove.slick",b.swipeHandler),b.$list.off("touchend.slick mouseup.slick",b.swipeHandler),b.$list.off("touchcancel.slick mouseleave.slick",b.swipeHandler),b.$list.off("click.slick",b.clickHandler),a(document).off(b.visibilityChange,b.visibility),b.$list.off("mouseenter.slick",a.proxy(b.setPaused,b,!0)),b.$list.off("mouseleave.slick",a.proxy(b.setPaused,b,!1)),b.options.accessibility===!0&&b.$list.off("keydown.slick",b.keyHandler),b.options.focusOnSelect===!0&&a(b.$slideTrack).children().off("click.slick",b.selectHandler),a(window).off("orientationchange.slick.slick-"+b.instanceUid,b.orientationChange),a(window).off("resize.slick.slick-"+b.instanceUid,b.resize),a("[draggable!=true]",b.$slideTrack).off("dragstart",b.preventDefault),a(window).off("load.slick.slick-"+b.instanceUid,b.setPosition),a(document).off("ready.slick.slick-"+b.instanceUid,b.setPosition)},b.prototype.cleanUpRows=function(){var b,a=this;a.options.rows>1&&(b=a.$slides.children().children(),b.removeAttr("style"),a.$slider.html(b))},b.prototype.clickHandler=function(a){var b=this;b.shouldClick===!1&&(a.stopImmediatePropagation(),a.stopPropagation(),a.preventDefault())},b.prototype.destroy=function(b){var c=this;c.autoPlayClear(),c.touchObject={},c.cleanUpEvents(),a(".slick-cloned",c.$slider).detach(),c.$dots&&c.$dots.remove(),c.options.arrows===!0&&(c.$prevArrow&&c.$prevArrow.length&&(c.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display",""),c.htmlExpr.test(c.options.prevArrow)&&c.$prevArrow.remove()),c.$nextArrow&&c.$nextArrow.length&&(c.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display",""),c.htmlExpr.test(c.options.nextArrow)&&c.$nextArrow.remove())),c.$slides&&(c.$slides.removeClass("slick-slide slick-active slick-center slick-visible slick-current").removeAttr("aria-hidden").removeAttr("data-slick-index").each(function(){a(this).attr("style",a(this).data("originalStyling"))}),c.$slideTrack.children(this.options.slide).detach(),c.$slideTrack.detach(),c.$list.detach(),c.$slider.append(c.$slides)),c.cleanUpRows(),c.$slider.removeClass("slick-slider"),c.$slider.removeClass("slick-initialized"),c.unslicked=!0,b||c.$slider.trigger("destroy",[c])},b.prototype.disableTransition=function(a){var b=this,c={};c[b.transitionType]="",b.options.fade===!1?b.$slideTrack.css(c):b.$slides.eq(a).css(c)},b.prototype.fadeSlide=function(a,b){var c=this;c.cssTransitions===!1?(c.$slides.eq(a).css({zIndex:c.options.zIndex}),c.$slides.eq(a).animate({opacity:1},c.options.speed,c.options.easing,b)):(c.applyTransition(a),c.$slides.eq(a).css({opacity:1,zIndex:c.options.zIndex}),b&&setTimeout(function(){c.disableTransition(a),b.call()},c.options.speed))},b.prototype.fadeSlideOut=function(a){var b=this;b.cssTransitions===!1?b.$slides.eq(a).animate({opacity:0,zIndex:b.options.zIndex-2},b.options.speed,b.options.easing):(b.applyTransition(a),b.$slides.eq(a).css({opacity:0,zIndex:b.options.zIndex-2}))},b.prototype.filterSlides=b.prototype.slickFilter=function(a){var b=this;null!==a&&(b.unload(),b.$slideTrack.children(this.options.slide).detach(),b.$slidesCache.filter(a).appendTo(b.$slideTrack),b.reinit())},b.prototype.getCurrent=b.prototype.slickCurrentSlide=function(){var a=this;return a.currentSlide},b.prototype.getDotCount=function(){var a=this,b=0,c=0,d=0;if(a.options.infinite===!0)for(;b<a.slideCount;)++d,b=c+a.options.slidesToShow,c+=a.options.slidesToScroll<=a.options.slidesToShow?a.options.slidesToScroll:a.options.slidesToShow;else if(a.options.centerMode===!0)d=a.slideCount;else for(;b<a.slideCount;)++d,b=c+a.options.slidesToShow,c+=a.options.slidesToScroll<=a.options.slidesToShow?a.options.slidesToScroll:a.options.slidesToShow;return d-1},b.prototype.getLeft=function(a){var c,d,f,b=this,e=0;return b.slideOffset=0,d=b.$slides.first().outerHeight(!0),b.options.infinite===!0?(b.slideCount>b.options.slidesToShow&&(b.slideOffset=-1*b.slideWidth*b.options.slidesToShow,e=-1*d*b.options.slidesToShow),0!==b.slideCount%b.options.slidesToScroll&&a+b.options.slidesToScroll>b.slideCount&&b.slideCount>b.options.slidesToShow&&(a>b.slideCount?(b.slideOffset=-1*(b.options.slidesToShow-(a-b.slideCount))*b.slideWidth,e=-1*(b.options.slidesToShow-(a-b.slideCount))*d):(b.slideOffset=-1*b.slideCount%b.options.slidesToScroll*b.slideWidth,e=-1*b.slideCount%b.options.slidesToScroll*d))):a+b.options.slidesToShow>b.slideCount&&(b.slideOffset=(a+b.options.slidesToShow-b.slideCount)*b.slideWidth,e=(a+b.options.slidesToShow-b.slideCount)*d),b.slideCount<=b.options.slidesToShow&&(b.slideOffset=0,e=0),b.options.centerMode===!0&&b.options.infinite===!0?b.slideOffset+=b.slideWidth*Math.floor(b.options.slidesToShow/2)-b.slideWidth:b.options.centerMode===!0&&(b.slideOffset=0,b.slideOffset+=b.slideWidth*Math.floor(b.options.slidesToShow/2)),c=b.options.vertical===!1?-1*a*b.slideWidth+b.slideOffset:-1*a*d+e,b.options.variableWidth===!0&&(f=b.slideCount<=b.options.slidesToShow||b.options.infinite===!1?b.$slideTrack.children(".slick-slide").eq(a):b.$slideTrack.children(".slick-slide").eq(a+b.options.slidesToShow),c=f[0]?-1*f[0].offsetLeft:0,b.options.centerMode===!0&&(f=b.options.infinite===!1?b.$slideTrack.children(".slick-slide").eq(a):b.$slideTrack.children(".slick-slide").eq(a+b.options.slidesToShow+1),c=f[0]?-1*f[0].offsetLeft:0,c+=(b.$list.width()-f.outerWidth())/2)),c},b.prototype.getOption=b.prototype.slickGetOption=function(a){var b=this;return b.options[a]},b.prototype.getNavigableIndexes=function(){var e,a=this,b=0,c=0,d=[];for(a.options.infinite===!1?e=a.slideCount:(b=-1*a.options.slidesToScroll,c=-1*a.options.slidesToScroll,e=2*a.slideCount);e>b;)d.push(b),b=c+a.options.slidesToScroll,c+=a.options.slidesToScroll<=a.options.slidesToShow?a.options.slidesToScroll:a.options.slidesToShow;return d},b.prototype.getSlick=function(){return this},b.prototype.getSlideCount=function(){var c,d,e,b=this;return e=b.options.centerMode===!0?b.slideWidth*Math.floor(b.options.slidesToShow/2):0,b.options.swipeToSlide===!0?(b.$slideTrack.find(".slick-slide").each(function(c,f){return f.offsetLeft-e+a(f).outerWidth()/2>-1*b.swipeLeft?(d=f,!1):void 0}),c=Math.abs(a(d).attr("data-slick-index")-b.currentSlide)||1):b.options.slidesToScroll},b.prototype.goTo=b.prototype.slickGoTo=function(a,b){var c=this;c.changeSlide({data:{message:"index",index:parseInt(a)}},b)},b.prototype.init=function(b){var c=this;a(c.$slider).hasClass("slick-initialized")||(a(c.$slider).addClass("slick-initialized"),c.buildRows(),c.buildOut(),c.setProps(),c.startLoad(),c.loadSlider(),c.initializeEvents(),c.updateArrows(),c.updateDots()),b&&c.$slider.trigger("init",[c]),c.options.accessibility===!0&&c.initADA()},b.prototype.initArrowEvents=function(){var a=this;a.options.arrows===!0&&a.slideCount>a.options.slidesToShow&&(a.$prevArrow.on("click.slick",{message:"previous"},a.changeSlide),a.$nextArrow.on("click.slick",{message:"next"},a.changeSlide))},b.prototype.initDotEvents=function(){var b=this;b.options.dots===!0&&b.slideCount>b.options.slidesToShow&&a("li",b.$dots).on("click.slick",{message:"index"},b.changeSlide),b.options.dots===!0&&b.options.pauseOnDotsHover===!0&&b.options.autoplay===!0&&a("li",b.$dots).on("mouseenter.slick",a.proxy(b.setPaused,b,!0)).on("mouseleave.slick",a.proxy(b.setPaused,b,!1))},b.prototype.initializeEvents=function(){var b=this;b.initArrowEvents(),b.initDotEvents(),b.$list.on("touchstart.slick mousedown.slick",{action:"start"},b.swipeHandler),b.$list.on("touchmove.slick mousemove.slick",{action:"move"},b.swipeHandler),b.$list.on("touchend.slick mouseup.slick",{action:"end"},b.swipeHandler),b.$list.on("touchcancel.slick mouseleave.slick",{action:"end"},b.swipeHandler),b.$list.on("click.slick",b.clickHandler),a(document).on(b.visibilityChange,a.proxy(b.visibility,b)),b.$list.on("mouseenter.slick",a.proxy(b.setPaused,b,!0)),b.$list.on("mouseleave.slick",a.proxy(b.setPaused,b,!1)),b.options.accessibility===!0&&b.$list.on("keydown.slick",b.keyHandler),b.options.focusOnSelect===!0&&a(b.$slideTrack).children().on("click.slick",b.selectHandler),a(window).on("orientationchange.slick.slick-"+b.instanceUid,a.proxy(b.orientationChange,b)),a(window).on("resize.slick.slick-"+b.instanceUid,a.proxy(b.resize,b)),a("[draggable!=true]",b.$slideTrack).on("dragstart",b.preventDefault),a(window).on("load.slick.slick-"+b.instanceUid,b.setPosition),a(document).on("ready.slick.slick-"+b.instanceUid,b.setPosition)},b.prototype.initUI=function(){var a=this;a.options.arrows===!0&&a.slideCount>a.options.slidesToShow&&(a.$prevArrow.show(),a.$nextArrow.show()),a.options.dots===!0&&a.slideCount>a.options.slidesToShow&&a.$dots.show(),a.options.autoplay===!0&&a.autoPlay()},b.prototype.keyHandler=function(a){var b=this;a.target.tagName.match("TEXTAREA|INPUT|SELECT")||(37===a.keyCode&&b.options.accessibility===!0?b.changeSlide({data:{message:"previous"}}):39===a.keyCode&&b.options.accessibility===!0&&b.changeSlide({data:{message:"next"}}))},b.prototype.lazyLoad=function(){function g(b){a("img[data-lazy]",b).each(function(){var b=a(this),c=a(this).attr("data-lazy"),d=document.createElement("img");d.onload=function(){b.animate({opacity:0},100,function(){b.attr("src",c).animate({opacity:1},200,function(){b.removeAttr("data-lazy").removeClass("slick-loading")})})},d.src=c})}var c,d,e,f,b=this;b.options.centerMode===!0?b.options.infinite===!0?(e=b.currentSlide+(b.options.slidesToShow/2+1),f=e+b.options.slidesToShow+2):(e=Math.max(0,b.currentSlide-(b.options.slidesToShow/2+1)),f=2+(b.options.slidesToShow/2+1)+b.currentSlide):(e=b.options.infinite?b.options.slidesToShow+b.currentSlide:b.currentSlide,f=e+b.options.slidesToShow,b.options.fade===!0&&(e>0&&e--,f<=b.slideCount&&f++)),c=b.$slider.find(".slick-slide").slice(e,f),g(c),b.slideCount<=b.options.slidesToShow?(d=b.$slider.find(".slick-slide"),g(d)):b.currentSlide>=b.slideCount-b.options.slidesToShow?(d=b.$slider.find(".slick-cloned").slice(0,b.options.slidesToShow),g(d)):0===b.currentSlide&&(d=b.$slider.find(".slick-cloned").slice(-1*b.options.slidesToShow),g(d))},b.prototype.loadSlider=function(){var a=this;a.setPosition(),a.$slideTrack.css({opacity:1}),a.$slider.removeClass("slick-loading"),a.initUI(),"progressive"===a.options.lazyLoad&&a.progressiveLazyLoad()},b.prototype.next=b.prototype.slickNext=function(){var a=this;a.changeSlide({data:{message:"next"}})},b.prototype.orientationChange=function(){var a=this;a.checkResponsive(),a.setPosition()},b.prototype.pause=b.prototype.slickPause=function(){var a=this;a.autoPlayClear(),a.paused=!0},b.prototype.play=b.prototype.slickPlay=function(){var a=this;a.paused=!1,a.autoPlay()},b.prototype.postSlide=function(a){var b=this;b.$slider.trigger("afterChange",[b,a]),b.animating=!1,b.setPosition(),b.swipeLeft=null,b.options.autoplay===!0&&b.paused===!1&&b.autoPlay(),b.options.accessibility===!0&&b.initADA()},b.prototype.prev=b.prototype.slickPrev=function(){var a=this;a.changeSlide({data:{message:"previous"}})},b.prototype.preventDefault=function(a){a.preventDefault()},b.prototype.progressiveLazyLoad=function(){var c,d,b=this;c=a("img[data-lazy]",b.$slider).length,c>0&&(d=a("img[data-lazy]",b.$slider).first(),d.attr("src",d.attr("data-lazy")).removeClass("slick-loading").load(function(){d.removeAttr("data-lazy"),b.progressiveLazyLoad(),b.options.adaptiveHeight===!0&&b.setPosition()}).error(function(){d.removeAttr("data-lazy"),b.progressiveLazyLoad()}))},b.prototype.refresh=function(b){var c=this,d=c.currentSlide;c.destroy(!0),a.extend(c,c.initials,{currentSlide:d}),c.init(),b||c.changeSlide({data:{message:"index",index:d}},!1)},b.prototype.registerBreakpoints=function(){var c,d,e,b=this,f=b.options.responsive||null;if("array"===a.type(f)&&f.length){b.respondTo=b.options.respondTo||"window";for(c in f)if(e=b.breakpoints.length-1,d=f[c].breakpoint,f.hasOwnProperty(c)){for(;e>=0;)b.breakpoints[e]&&b.breakpoints[e]===d&&b.breakpoints.splice(e,1),e--;b.breakpoints.push(d),b.breakpointSettings[d]=f[c].settings}b.breakpoints.sort(function(a,c){return b.options.mobileFirst?a-c:c-a})}},b.prototype.reinit=function(){var b=this;b.$slides=b.$slideTrack.children(b.options.slide).addClass("slick-slide"),b.slideCount=b.$slides.length,b.currentSlide>=b.slideCount&&0!==b.currentSlide&&(b.currentSlide=b.currentSlide-b.options.slidesToScroll),b.slideCount<=b.options.slidesToShow&&(b.currentSlide=0),b.registerBreakpoints(),b.setProps(),b.setupInfinite(),b.buildArrows(),b.updateArrows(),b.initArrowEvents(),b.buildDots(),b.updateDots(),b.initDotEvents(),b.checkResponsive(!1,!0),b.options.focusOnSelect===!0&&a(b.$slideTrack).children().on("click.slick",b.selectHandler),b.setSlideClasses(0),b.setPosition(),b.$slider.trigger("reInit",[b]),b.options.autoplay===!0&&b.focusHandler()},b.prototype.resize=function(){var b=this;a(window).width()!==b.windowWidth&&(clearTimeout(b.windowDelay),b.windowDelay=window.setTimeout(function(){b.windowWidth=a(window).width(),b.checkResponsive(),b.unslicked||b.setPosition()},50))},b.prototype.removeSlide=b.prototype.slickRemove=function(a,b,c){var d=this;return"boolean"==typeof a?(b=a,a=b===!0?0:d.slideCount-1):a=b===!0?--a:a,d.slideCount<1||0>a||a>d.slideCount-1?!1:(d.unload(),c===!0?d.$slideTrack.children().remove():d.$slideTrack.children(this.options.slide).eq(a).remove(),d.$slides=d.$slideTrack.children(this.options.slide),d.$slideTrack.children(this.options.slide).detach(),d.$slideTrack.append(d.$slides),d.$slidesCache=d.$slides,d.reinit(),void 0)},b.prototype.setCSS=function(a){var d,e,b=this,c={};b.options.rtl===!0&&(a=-a),d="left"==b.positionProp?Math.ceil(a)+"px":"0px",e="top"==b.positionProp?Math.ceil(a)+"px":"0px",c[b.positionProp]=a,b.transformsEnabled===!1?b.$slideTrack.css(c):(c={},b.cssTransitions===!1?(c[b.animType]="translate("+d+", "+e+")",b.$slideTrack.css(c)):(c[b.animType]="translate3d("+d+", "+e+", 0px)",b.$slideTrack.css(c)))},b.prototype.setDimensions=function(){var a=this;a.options.vertical===!1?a.options.centerMode===!0&&a.$list.css({padding:"0px "+a.options.centerPadding}):(a.$list.height(a.$slides.first().outerHeight(!0)*a.options.slidesToShow),a.options.centerMode===!0&&a.$list.css({padding:a.options.centerPadding+" 0px"})),a.listWidth=a.$list.width(),a.listHeight=a.$list.height(),a.options.vertical===!1&&a.options.variableWidth===!1?(a.slideWidth=Math.ceil(a.listWidth/a.options.slidesToShow),a.$slideTrack.width(Math.ceil(a.slideWidth*a.$slideTrack.children(".slick-slide").length))):a.options.variableWidth===!0?a.$slideTrack.width(5e3*a.slideCount):(a.slideWidth=Math.ceil(a.listWidth),a.$slideTrack.height(Math.ceil(a.$slides.first().outerHeight(!0)*a.$slideTrack.children(".slick-slide").length)));var b=a.$slides.first().outerWidth(!0)-a.$slides.first().width();a.options.variableWidth===!1&&a.$slideTrack.children(".slick-slide").width(a.slideWidth-b)},b.prototype.setFade=function(){var c,b=this;b.$slides.each(function(d,e){c=-1*b.slideWidth*d,b.options.rtl===!0?a(e).css({position:"relative",right:c,top:0,zIndex:b.options.zIndex-2,opacity:0}):a(e).css({position:"relative",left:c,top:0,zIndex:b.options.zIndex-2,opacity:0})}),b.$slides.eq(b.currentSlide).css({zIndex:b.options.zIndex-1,opacity:1})},b.prototype.setHeight=function(){var a=this;if(1===a.options.slidesToShow&&a.options.adaptiveHeight===!0&&a.options.vertical===!1){var b=a.$slides.eq(a.currentSlide).outerHeight(!0);a.$list.css("height",b)}},b.prototype.setOption=b.prototype.slickSetOption=function(b,c,d){var f,g,e=this;if("responsive"===b&&"array"===a.type(c))for(g in c)if("array"!==a.type(e.options.responsive))e.options.responsive=[c[g]];else{for(f=e.options.responsive.length-1;f>=0;)e.options.responsive[f].breakpoint===c[g].breakpoint&&e.options.responsive.splice(f,1),f--;e.options.responsive.push(c[g])}else e.options[b]=c;d===!0&&(e.unload(),e.reinit())},b.prototype.setPosition=function(){var a=this;a.setDimensions(),a.setHeight(),a.options.fade===!1?a.setCSS(a.getLeft(a.currentSlide)):a.setFade(),a.$slider.trigger("setPosition",[a])},b.prototype.setProps=function(){var a=this,b=document.body.style;a.positionProp=a.options.vertical===!0?"top":"left","top"===a.positionProp?a.$slider.addClass("slick-vertical"):a.$slider.removeClass("slick-vertical"),(void 0!==b.WebkitTransition||void 0!==b.MozTransition||void 0!==b.msTransition)&&a.options.useCSS===!0&&(a.cssTransitions=!0),a.options.fade&&("number"==typeof a.options.zIndex?a.options.zIndex<3&&(a.options.zIndex=3):a.options.zIndex=a.defaults.zIndex),void 0!==b.OTransform&&(a.animType="OTransform",a.transformType="-o-transform",a.transitionType="OTransition",void 0===b.perspectiveProperty&&void 0===b.webkitPerspective&&(a.animType=!1)),void 0!==b.MozTransform&&(a.animType="MozTransform",a.transformType="-moz-transform",a.transitionType="MozTransition",void 0===b.perspectiveProperty&&void 0===b.MozPerspective&&(a.animType=!1)),void 0!==b.webkitTransform&&(a.animType="webkitTransform",a.transformType="-webkit-transform",a.transitionType="webkitTransition",void 0===b.perspectiveProperty&&void 0===b.webkitPerspective&&(a.animType=!1)),void 0!==b.msTransform&&(a.animType="msTransform",a.transformType="-ms-transform",a.transitionType="msTransition",void 0===b.msTransform&&(a.animType=!1)),void 0!==b.transform&&a.animType!==!1&&(a.animType="transform",a.transformType="transform",a.transitionType="transition"),a.transformsEnabled=null!==a.animType&&a.animType!==!1},b.prototype.setSlideClasses=function(a){var c,d,e,f,b=this;d=b.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden","true"),b.$slides.eq(a).addClass("slick-current"),b.options.centerMode===!0?(c=Math.floor(b.options.slidesToShow/2),b.options.infinite===!0&&(a>=c&&a<=b.slideCount-1-c?b.$slides.slice(a-c,a+c+1).addClass("slick-active").attr("aria-hidden","false"):(e=b.options.slidesToShow+a,d.slice(e-c+1,e+c+2).addClass("slick-active").attr("aria-hidden","false")),0===a?d.eq(d.length-1-b.options.slidesToShow).addClass("slick-center"):a===b.slideCount-1&&d.eq(b.options.slidesToShow).addClass("slick-center")),b.$slides.eq(a).addClass("slick-center")):a>=0&&a<=b.slideCount-b.options.slidesToShow?b.$slides.slice(a,a+b.options.slidesToShow).addClass("slick-active").attr("aria-hidden","false"):d.length<=b.options.slidesToShow?d.addClass("slick-active").attr("aria-hidden","false"):(f=b.slideCount%b.options.slidesToShow,e=b.options.infinite===!0?b.options.slidesToShow+a:a,b.options.slidesToShow==b.options.slidesToScroll&&b.slideCount-a<b.options.slidesToShow?d.slice(e-(b.options.slidesToShow-f),e+f).addClass("slick-active").attr("aria-hidden","false"):d.slice(e,e+b.options.slidesToShow).addClass("slick-active").attr("aria-hidden","false")),"ondemand"===b.options.lazyLoad&&b.lazyLoad()},b.prototype.setupInfinite=function(){var c,d,e,b=this;if(b.options.fade===!0&&(b.options.centerMode=!1),b.options.infinite===!0&&b.options.fade===!1&&(d=null,b.slideCount>b.options.slidesToShow)){for(e=b.options.centerMode===!0?b.options.slidesToShow+1:b.options.slidesToShow,c=b.slideCount;c>b.slideCount-e;c-=1)d=c-1,a(b.$slides[d]).clone(!0).attr("id","").attr("data-slick-index",d-b.slideCount).prependTo(b.$slideTrack).addClass("slick-cloned");for(c=0;e>c;c+=1)d=c,a(b.$slides[d]).clone(!0).attr("id","").attr("data-slick-index",d+b.slideCount).appendTo(b.$slideTrack).addClass("slick-cloned");b.$slideTrack.find(".slick-cloned").find("[id]").each(function(){a(this).attr("id","")})}},b.prototype.setPaused=function(a){var b=this;b.options.autoplay===!0&&b.options.pauseOnHover===!0&&(b.paused=a,a?b.autoPlayClear():b.autoPlay())},b.prototype.selectHandler=function(b){var c=this,d=a(b.target).is(".slick-slide")?a(b.target):a(b.target).parents(".slick-slide"),e=parseInt(d.attr("data-slick-index"));return e||(e=0),c.slideCount<=c.options.slidesToShow?(c.setSlideClasses(e),c.asNavFor(e),void 0):(c.slideHandler(e),void 0)},b.prototype.slideHandler=function(a,b,c){var d,e,f,g,h=null,i=this;return b=b||!1,i.animating===!0&&i.options.waitForAnimate===!0||i.options.fade===!0&&i.currentSlide===a||i.slideCount<=i.options.slidesToShow?void 0:(b===!1&&i.asNavFor(a),d=a,h=i.getLeft(d),g=i.getLeft(i.currentSlide),i.currentLeft=null===i.swipeLeft?g:i.swipeLeft,i.options.infinite===!1&&i.options.centerMode===!1&&(0>a||a>i.getDotCount()*i.options.slidesToScroll)?(i.options.fade===!1&&(d=i.currentSlide,c!==!0?i.animateSlide(g,function(){i.postSlide(d)}):i.postSlide(d)),void 0):i.options.infinite===!1&&i.options.centerMode===!0&&(0>a||a>i.slideCount-i.options.slidesToScroll)?(i.options.fade===!1&&(d=i.currentSlide,c!==!0?i.animateSlide(g,function(){i.postSlide(d)}):i.postSlide(d)),void 0):(i.options.autoplay===!0&&clearInterval(i.autoPlayTimer),e=0>d?0!==i.slideCount%i.options.slidesToScroll?i.slideCount-i.slideCount%i.options.slidesToScroll:i.slideCount+d:d>=i.slideCount?0!==i.slideCount%i.options.slidesToScroll?0:d-i.slideCount:d,i.animating=!0,i.$slider.trigger("beforeChange",[i,i.currentSlide,e]),f=i.currentSlide,i.currentSlide=e,i.setSlideClasses(i.currentSlide),i.updateDots(),i.updateArrows(),i.options.fade===!0?(c!==!0?(i.fadeSlideOut(f),i.fadeSlide(e,function(){i.postSlide(e)
      })):i.postSlide(e),i.animateHeight(),void 0):(c!==!0?i.animateSlide(h,function(){i.postSlide(e)}):i.postSlide(e),void 0)))},b.prototype.startLoad=function(){var a=this;a.options.arrows===!0&&a.slideCount>a.options.slidesToShow&&(a.$prevArrow.hide(),a.$nextArrow.hide()),a.options.dots===!0&&a.slideCount>a.options.slidesToShow&&a.$dots.hide(),a.$slider.addClass("slick-loading")},b.prototype.swipeDirection=function(){var a,b,c,d,e=this;return a=e.touchObject.startX-e.touchObject.curX,b=e.touchObject.startY-e.touchObject.curY,c=Math.atan2(b,a),d=Math.round(180*c/Math.PI),0>d&&(d=360-Math.abs(d)),45>=d&&d>=0?e.options.rtl===!1?"left":"right":360>=d&&d>=315?e.options.rtl===!1?"left":"right":d>=135&&225>=d?e.options.rtl===!1?"right":"left":e.options.verticalSwiping===!0?d>=35&&135>=d?"left":"right":"vertical"},b.prototype.swipeEnd=function(){var c,b=this;if(b.dragging=!1,b.shouldClick=b.touchObject.swipeLength>10?!1:!0,void 0===b.touchObject.curX)return!1;if(b.touchObject.edgeHit===!0&&b.$slider.trigger("edge",[b,b.swipeDirection()]),b.touchObject.swipeLength>=b.touchObject.minSwipe)switch(b.swipeDirection()){case"left":c=b.options.swipeToSlide?b.checkNavigable(b.currentSlide+b.getSlideCount()):b.currentSlide+b.getSlideCount(),b.slideHandler(c),b.currentDirection=0,b.touchObject={},b.$slider.trigger("swipe",[b,"left"]);break;case"right":c=b.options.swipeToSlide?b.checkNavigable(b.currentSlide-b.getSlideCount()):b.currentSlide-b.getSlideCount(),b.slideHandler(c),b.currentDirection=1,b.touchObject={},b.$slider.trigger("swipe",[b,"right"])}else b.touchObject.startX!==b.touchObject.curX&&(b.slideHandler(b.currentSlide),b.touchObject={})},b.prototype.swipeHandler=function(a){var b=this;if(!(b.options.swipe===!1||"ontouchend"in document&&b.options.swipe===!1||b.options.draggable===!1&&-1!==a.type.indexOf("mouse")))switch(b.touchObject.fingerCount=a.originalEvent&&void 0!==a.originalEvent.touches?a.originalEvent.touches.length:1,b.touchObject.minSwipe=b.listWidth/b.options.touchThreshold,b.options.verticalSwiping===!0&&(b.touchObject.minSwipe=b.listHeight/b.options.touchThreshold),a.data.action){case"start":b.swipeStart(a);break;case"move":b.swipeMove(a);break;case"end":b.swipeEnd(a)}},b.prototype.swipeMove=function(a){var d,e,f,g,h,b=this;return h=void 0!==a.originalEvent?a.originalEvent.touches:null,!b.dragging||h&&1!==h.length?!1:(d=b.getLeft(b.currentSlide),b.touchObject.curX=void 0!==h?h[0].pageX:a.clientX,b.touchObject.curY=void 0!==h?h[0].pageY:a.clientY,b.touchObject.swipeLength=Math.round(Math.sqrt(Math.pow(b.touchObject.curX-b.touchObject.startX,2))),b.options.verticalSwiping===!0&&(b.touchObject.swipeLength=Math.round(Math.sqrt(Math.pow(b.touchObject.curY-b.touchObject.startY,2)))),e=b.swipeDirection(),"vertical"!==e?(void 0!==a.originalEvent&&b.touchObject.swipeLength>4&&a.preventDefault(),g=(b.options.rtl===!1?1:-1)*(b.touchObject.curX>b.touchObject.startX?1:-1),b.options.verticalSwiping===!0&&(g=b.touchObject.curY>b.touchObject.startY?1:-1),f=b.touchObject.swipeLength,b.touchObject.edgeHit=!1,b.options.infinite===!1&&(0===b.currentSlide&&"right"===e||b.currentSlide>=b.getDotCount()&&"left"===e)&&(f=b.touchObject.swipeLength*b.options.edgeFriction,b.touchObject.edgeHit=!0),b.swipeLeft=b.options.vertical===!1?d+f*g:d+f*(b.$list.height()/b.listWidth)*g,b.options.verticalSwiping===!0&&(b.swipeLeft=d+f*g),b.options.fade===!0||b.options.touchMove===!1?!1:b.animating===!0?(b.swipeLeft=null,!1):(b.setCSS(b.swipeLeft),void 0)):void 0)},b.prototype.swipeStart=function(a){var c,b=this;return 1!==b.touchObject.fingerCount||b.slideCount<=b.options.slidesToShow?(b.touchObject={},!1):(void 0!==a.originalEvent&&void 0!==a.originalEvent.touches&&(c=a.originalEvent.touches[0]),b.touchObject.startX=b.touchObject.curX=void 0!==c?c.pageX:a.clientX,b.touchObject.startY=b.touchObject.curY=void 0!==c?c.pageY:a.clientY,b.dragging=!0,void 0)},b.prototype.unfilterSlides=b.prototype.slickUnfilter=function(){var a=this;null!==a.$slidesCache&&(a.unload(),a.$slideTrack.children(this.options.slide).detach(),a.$slidesCache.appendTo(a.$slideTrack),a.reinit())},b.prototype.unload=function(){var b=this;a(".slick-cloned",b.$slider).remove(),b.$dots&&b.$dots.remove(),b.$prevArrow&&b.htmlExpr.test(b.options.prevArrow)&&b.$prevArrow.remove(),b.$nextArrow&&b.htmlExpr.test(b.options.nextArrow)&&b.$nextArrow.remove(),b.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden","true").css("width","")},b.prototype.unslick=function(a){var b=this;b.$slider.trigger("unslick",[b,a]),b.destroy()},b.prototype.updateArrows=function(){var b,a=this;b=Math.floor(a.options.slidesToShow/2),a.options.arrows===!0&&a.slideCount>a.options.slidesToShow&&!a.options.infinite&&(a.$prevArrow.removeClass("slick-disabled").attr("aria-disabled","false"),a.$nextArrow.removeClass("slick-disabled").attr("aria-disabled","false"),0===a.currentSlide?(a.$prevArrow.addClass("slick-disabled").attr("aria-disabled","true"),a.$nextArrow.removeClass("slick-disabled").attr("aria-disabled","false")):a.currentSlide>=a.slideCount-a.options.slidesToShow&&a.options.centerMode===!1?(a.$nextArrow.addClass("slick-disabled").attr("aria-disabled","true"),a.$prevArrow.removeClass("slick-disabled").attr("aria-disabled","false")):a.currentSlide>=a.slideCount-1&&a.options.centerMode===!0&&(a.$nextArrow.addClass("slick-disabled").attr("aria-disabled","true"),a.$prevArrow.removeClass("slick-disabled").attr("aria-disabled","false")))},b.prototype.updateDots=function(){var a=this;null!==a.$dots&&(a.$dots.find("li").removeClass("slick-active").attr("aria-hidden","true"),a.$dots.find("li").eq(Math.floor(a.currentSlide/a.options.slidesToScroll)).addClass("slick-active").attr("aria-hidden","false"))},b.prototype.visibility=function(){var a=this;document[a.hidden]?(a.paused=!0,a.autoPlayClear()):a.options.autoplay===!0&&(a.paused=!1,a.autoPlay())},b.prototype.initADA=function(){var b=this;b.$slides.add(b.$slideTrack.find(".slick-cloned")).attr({"aria-hidden":"true",tabindex:"-1"}).find("a, input, button, select").attr({tabindex:"-1"}),b.$slideTrack.attr("role","listbox"),b.$slides.not(b.$slideTrack.find(".slick-cloned")).each(function(c){a(this).attr({role:"option","aria-describedby":"slick-slide"+b.instanceUid+c})}),null!==b.$dots&&b.$dots.attr("role","tablist").find("li").each(function(c){a(this).attr({role:"presentation","aria-selected":"false","aria-controls":"navigation"+b.instanceUid+c,id:"slick-slide"+b.instanceUid+c})}).first().attr("aria-selected","true").end().find("button").attr("role","button").end().closest("div").attr("role","toolbar"),b.activateADA()},b.prototype.activateADA=function(){var a=this,b=a.$slider.find("*").is(":focus");a.$slideTrack.find(".slick-active").attr({"aria-hidden":"false",tabindex:"0"}).find("a, input, button, select").attr({tabindex:"0"}),b&&a.$slideTrack.find(".slick-active").focus()},b.prototype.focusHandler=function(){var b=this;b.$slider.on("focus.slick blur.slick","*",function(c){c.stopImmediatePropagation();var d=a(this);setTimeout(function(){b.isPlay&&(d.is(":focus")?(b.autoPlayClear(),b.paused=!0):(b.paused=!1,b.autoPlay()))},0)})},a.fn.slick=function(){var g,a=this,c=arguments[0],d=Array.prototype.slice.call(arguments,1),e=a.length,f=0;for(f;e>f;f++)if("object"==typeof c||"undefined"==typeof c?a[f].slick=new b(a[f],c):g=a[f].slick[c].apply(a[f].slick,d),"undefined"!=typeof g)return g;return a}});
   </script>
   <!-- slick slider end -->
   <script>
      var myIndex = 0;
      carousel();
      
      function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 14000); // Change image every 2 seconds
      }
   </script>
   <script>
      $('.img-g').click(function() {
      window.location = "photo-gallery-2019" + this.id;
      });
   </script>
   <script>
      $(document).ready(function(){
           $('.tab-pane').each(function(){
             //   console.log($(this).text().trim());
               if(! $(this).text().trim()){
                   $(this).addClass('text-dark');
                 $(this).text('No Record Found.');
                
             }
             // console.log($(this).text())
           })
           
           
           
          setTimeout(()=>{
          $('.yottie-widget-inner a:last').hide()
          
         
      },7000)    
           
      })
      
   </script>
   <?php get_footer();?>