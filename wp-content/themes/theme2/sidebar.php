<?php
   /* Template Name: sidebar */
  
   ?>

<style>
.accordion {
  background-color: #05396b;
  color: #fff;
  cursor: pointer;
  padding: 10px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
  margin: 1px;
}

.active, .accordion:hover {
  background-color:  #05396b; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
  margin:-1px;
}
#sub-accordion{
        padding: 6px;
    font-size: 13px;
    width: 110%;
}
/* toggle menu */
#togglesidebar {
  width: 28px;
  height: 30px;
  float:right;
 
}

#togglesidebar div {
  width: 100%;
  height: 5px;
  background: #083D77;
  margin: 4px auto;
  transition: all 0.3s;
  backface-visibility: hidden;
}

#togglesidebar.on .one {
  transform: rotate(45deg) translate(5px, 5px);
}

#togglesidebar.on .two {
  opacity: 0;
}

#togglesidebar.on .three {
  transform: rotate(-45deg) translate(7px, -8px);
}

#menusidebar {
  color: white;
  border: 1px solid white;
  border-radius: 3px;
  font-family: "Segoe UI", Candara, "Bitstream Vera Sans", "DejaVu Sans", "Bitstream Vera Sans", "Trebuchet MS", Verdana, "Verdana Ref", sans-serif;
  text-align: center;
  margin: auto;
  display: none;
}

@media only screen and (max-width: 600px) {
    #formob{
        display:block;
    }
    #forpc{
        display:none;
    }
}

@media only screen and (min-width: 600px) {
    #formob{
        display:block;
    }
    #forpc{
        display:none;
    }
}

@media only screen and (min-width: 768px) {
    #formob{
        display:block;
    }
    #forpc{
        display:none;
    }
}


@media only screen and (min-width: 992px) {
    #formob{
        display:none;
    }
    #forpc{
        display:block;
    }
}

@media only screen and (min-width: 1200px) {
    #formob{
        display:none;
    }
    #forpc{
        display:block;
    }
}
</style>


<div style="margin-bottom: 40px;" id="forpc">
<h2 class="welcome-title"><p>Quick Links</p></h2>

<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/e-library')?>" style="color:#fff;">E - Library</a></button>
<div class="panel">
</div>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="https://www.drillbitplagiarismcheck.com/drillbit_new/drillbitlogin" style="color:#fff;">Anti Plagiarism Software</a></button>
<div class="panel">
</div>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/latest_news')?>" style="color:#fff;">Latest News</a></button>
<div class="panel">
</div>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/office-orders')?>" style="color:#fff;">Office Orders</a></button>
<div class="panel">
</div>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/advertisements')?>" style="color:#fff;"> Advt/Recruitment</a></button>
<div class="panel">
</div>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/tenders')?>" style="color:#fff;"> Tenders</a></button>
<div class="panel">
</div>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php bloginfo('template_directory');?>/PDF/Grievance_Redressal_Portal.pdf" target="_blank" style="color:#fff;"> Student's Grievance Redressal</a></button>
<div class="panel">
</div>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="https://www.mkgandhi.org/gandhiquotes/gandhi_quotes.htm" style="color:#fff;"> Mahatma Gandhi Quotes</a></button>
<div class="panel">
</div>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/photo-gallery-2019')?>" style="color:#fff;"> SKRAU Photo Gallery</a></button>
<div class="panel">
</div>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php bloginfo('template_directory');?>/PDF/Uni. Data for NIRF-2020.pdf" target="_blank" style="color:#fff;">   Uni. Data for NIRF-2020 </a></button>
<div class="panel">
</div>



<button class="accordion" style="cursor: initial;"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Other Links</button>
<div class="panel">
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/publications')?>" style="color:#fff;">  University Publications</a>   </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<a href="<?php echo site_url('/report')?>" style="color:#fff;"> Right To Information </a> </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; University Links  </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/apar-of-employees-time-schedule')?>" style="color:#fff;"> APAR of Employees  & Time schedule</a>   </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="http://www.iasri.res.in/nisagenet/" style="color:#fff;"> NISAGENET</a>  </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/immovable-assets-of-university-employee')?>" style="color:#fff;">Immovable Assets of University Employee</a>  </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/information-of-ph-d-scholars-of-university')?>" style="color:#fff;">Information of Ph.D. Scholars of University</a>  </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php bloginfo('template_directory');?>/PDF/Accredited_teachers_list to_upload.pdf" target="_blank" style="color:#fff;">Subject wise list of accredited teachers of Ph. D. programme</a>   </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php bloginfo('template_directory');?>/PDF/Subject_wise_broad_area_for_upload.pdf" target="_blank" style="color:#fff;">Subject wise broad area of Research</a>   </button>
</div>

<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<a href="https://pmil.in/rajasthan-govt-scheme/jan-soochna-portal-rajasthan/" style="color:#fff;">   Jan Soochna Portal 2019 </a> </button>
<div class="panel">
</div>

<button class="accordion"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Explore </button>
<div class="panel">
<button id="sub-accordion" class="accordion"><a href="https://cbp.icar.gov.in/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/Winter_School_Online_Application.png" class="all_images_header"/></a>  </button>
<button id="sub-accordion" class="accordion"><a href="http://www.fimttcbkn.org/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/fimttc.png" class="all_images_header"/></a>  </button>
<button id="sub-accordion" class="accordion"><a href="<?php echo site_url('/skrau_newsletter')?>"><img src="<?php bloginfo('template_directory');?>/images/Newsletter.png" class="all_images_header"/></a>  </button>
<button id="sub-accordion" class="accordion"><a href="http://mail.raubikaner.org" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/Skrau_Mail.png" class="all_images_header"/></a>  </button>
<button id="sub-accordion" class="accordion"><a href="<?php bloginfo('template_directory');?>/PDF/dee.pdf" target="_blank" ><img src="<?php bloginfo('template_directory');?>/images/Brisk_farming.png" class="all_images_header"/></a>  </button>

</div>


<button class="accordion"><a href="https://nvsp.in/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/nvsp-hindi.png" class="all_images_header"/></a></button>

<button class="accordion">
<div style="margin:auto;text-align:center;"><div style="text-align:center;"><a style="font-size:14px;color:#039;font-family:arial;font-weight:bold; text-decoration:none;title="Golf WeatherOnline" href="https://www.weatheronline.in/weather/maps/city?GLOC=&LANG=in&WMO=&LEVEL=100&R=400" target="_blank" ></a></div><iframe width="180" height="150" marginheight="0" marginwidth="0" frameborder="0"
src="https://www.weatheronline.in/cgi-bin/homecif?WMO=42165&L=in&WIDTH=180&HEIGHT=150&CLOUD=1&V=2">
</iframe>
</div>

</button>

<button class="accordion">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3520.3462356244463!2d73.3427866145467!3d28.07497981584753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393fdc4676e61439%3A0xbe68cb46b03607e8!2sSwami%20Keshwanand%20Rajasthan%20Agriculture%20University.!5e0!3m2!1sen!2sin!4v1614680986587!5m2!1sen!2sin" width="220" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
</button>



</div>



<div style="margin-bottom: 40px;" id="formob">

<div class="row">
<div class="col-md-10" style="padding: 0;"><h2 class="welcome-title"  style="width:auto;"><p>Quick Links</p></h2></div>
<div class="col-md-2">
<div id="togglesidebar">
  <div class="one"></div>
  <div class="two"></div>
  <div class="three"></div>
</div>
</div>
</div>




<div id="menusidebar">
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/e-library')?>" style="color:#fff;">E - Library</a></button>
<div class="panel">
</div>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="https://www.drillbitplagiarismcheck.com/drillbit_new/drillbitlogin" style="color:#fff;">Anti Plagiarism Software</a></button>
<div class="panel">
</div>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/latest_news')?>" style="color:#fff;">Latest News</a></button>
<div class="panel">
</div>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/office-orders')?>" style="color:#fff;">Office Orders</a></button>
<div class="panel">
</div>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/advertisements')?>" style="color:#fff;"> Advt/Recruitment</a></button>
<div class="panel">
</div>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/tenders')?>" style="color:#fff;"> Tenders</a></button>
<div class="panel">
</div>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php bloginfo('template_directory');?>/PDF/Grievance_Redressal_Portal.pdf" target="_blank" style="color:#fff;"> Student's Grievance Redressal</a></button>
<div class="panel">
</div>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="https://www.mkgandhi.org/gandhiquotes/gandhi_quotes.htm" style="color:#fff;"> Mahatma Gandhi Quotes</a></button>
<div class="panel">
</div>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/photo-gallery-2019')?>" style="color:#fff;"> SKRAU Photo Gallery</a></button>
<div class="panel">
</div>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php bloginfo('template_directory');?>/PDF/Uni. Data for NIRF-2020.pdf" target="_blank" style="color:#fff;">   Uni. Data for NIRF-2020 </a></button>
<div class="panel">
</div>



<button class="accordion" style="cursor: initial;"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Other Links</button>
<div class="panel">
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/publications')?>" style="color:#fff;">  University Publications</a>   </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<a href="<?php echo site_url('/report')?>" style="color:#fff;"> Right To Information </a> </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; University Links  </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/apar-of-employees-time-schedule')?>" style="color:#fff;"> APAR of Employees  & Time schedule</a>   </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="http://www.iasri.res.in/nisagenet/" style="color:#fff;"> NISAGENET</a>  </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/immovable-assets-of-university-employee')?>" style="color:#fff;">Immovable Assets of University Employee</a>  </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/information-of-ph-d-scholars-of-university')?>" style="color:#fff;">Information of Ph.D. Scholars of University</a>  </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php bloginfo('template_directory');?>/PDF/Accredited_teachers_list to_upload.pdf" target="_blank" style="color:#fff;">Subject wise list of accredited teachers of Ph. D. programme</a>   </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php bloginfo('template_directory');?>/PDF/Subject_wise_broad_area_for_upload.pdf" target="_blank" style="color:#fff;">Subject wise broad area of Research</a>   </button>
</div>

<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;<a href="https://pmil.in/rajasthan-govt-scheme/jan-soochna-portal-rajasthan/" style="color:#fff;">   Jan Soochna Portal 2019 </a> </button>
<div class="panel">
</div>

<button class="accordion"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Explore </button>
<div class="panel">
<button id="sub-accordion" class="accordion"><a href="https://cbp.icar.gov.in/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/Winter_School_Online_Application.png" class="all_images_header"/></a>  </button>
<button id="sub-accordion" class="accordion"><a href="http://www.fimttcbkn.org/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/fimttc.png" class="all_images_header"/></a>  </button>
<button id="sub-accordion" class="accordion"><a href="<?php echo site_url('/skrau_newsletter')?>"><img src="<?php bloginfo('template_directory');?>/images/Newsletter.png" class="all_images_header"/></a>  </button>
<button id="sub-accordion" class="accordion"><a href="http://mail.raubikaner.org" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/Skrau_Mail.png" class="all_images_header"/></a>  </button>
<button id="sub-accordion" class="accordion"><a href="<?php bloginfo('template_directory');?>/PDF/dee.pdf" target="_blank" ><img src="<?php bloginfo('template_directory');?>/images/Brisk_farming.png" class="all_images_header"/></a>  </button>

</div>


<button class="accordion"><a href="https://nvsp.in/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/nvsp-hindi.png" class="all_images_header"/></a></button>

<button class="accordion">
<div style="margin:auto;text-align:center;"><div style="text-align:center;"><a style="font-size:14px;color:#039;font-family:arial;font-weight:bold; text-decoration:none;title="Golf WeatherOnline" href="https://www.weatheronline.in/weather/maps/city?GLOC=&LANG=in&WMO=&LEVEL=100&R=400" target="_blank" ></a></div><iframe width="180" height="150" marginheight="0" marginwidth="0" frameborder="0"
src="https://www.weatheronline.in/cgi-bin/homecif?WMO=42165&L=in&WIDTH=180&HEIGHT=150&CLOUD=1&V=2">
</iframe>
</div>

</button>

<button class="accordion">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3520.3462356244463!2d73.3427866145467!3d28.07497981584753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393fdc4676e61439%3A0xbe68cb46b03607e8!2sSwami%20Keshwanand%20Rajasthan%20Agriculture%20University.!5e0!3m2!1sen!2sin!4v1614680986587!5m2!1sen!2sin" width="220" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
</button>
</div>





</div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}


$("#togglesidebar").click(function() {
  $(this).toggleClass("on");
  $("#menusidebar").slideToggle();
});
</script>


