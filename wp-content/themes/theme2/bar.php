<?php
   /* Template Name: bar */
   get_header();
   ?>

<style>
.accordion {
  background-color: #77b81e;
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
  background-color: #77b81e; 
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
</style>

<h2 class="welcome-title"><p>Quick Links</p></h2>
<?php if( have_rows('top_section') ): ?>
                                          <?php while( have_rows('top_section') ): the_row(); 
                                             
                                             $text = get_sub_field('text');
                                             
                                             
                                             ?>
<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/e-library')?>" style="color:#fff;"><?php echo $text; ?></a></button>
<div class="panel">
</div>
<?php endwhile; ?>
                        <?php endif; ?>
<button class="accordion"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Other Links</button>
<div class="panel">
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/publications')?>" style="color:#fff;">  University Publications</a>   </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Right To Information  </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; University Links  </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; <a href="<?php echo site_url('/apar-of-employees-time-schedule')?>" style="color:#fff;"> APAR of Employees  & Time schedule</a>   </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; NISAGENET  </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Immovable Assets of University Employee  </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Information of Ph.D. Scholars of University  </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Subject wise list of accredited teachers of Ph. D. programme  </button>
<button id="sub-accordion" class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Subject wise broad area of Research  </button>
</div>

<button class="accordion"><i class="fa fa-check" aria-hidden="true"></i>&nbsp; Jan Soochna Portal 2019 </button>
<div class="panel">
</div>

<button class="accordion"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Images </button>
<div class="panel">
<button id="sub-accordion" class="accordion"><img src="http://raubikaner.org/images/Winter_School_Online_Application.png" class="all_images_header"/>  </button>
<button id="sub-accordion" class="accordion"><img src="http://raubikaner.org/images/fimttc.png" class="all_images_header"/>  </button>
<button id="sub-accordion" class="accordion"><img src="http://raubikaner.org/images/Newsletter.png" class="all_images_header"/>  </button>
<button id="sub-accordion" class="accordion"><img src="http://raubikaner.org/images/Skrau_Mail.png" class="all_images_header"/>  </button>
<button id="sub-accordion" class="accordion"><img src="http://raubikaner.org/images/Brisk_farming.png" class="all_images_header"/>  </button>

</div>

<button class="accordion"><iframe src="https://calendar.google.com/calendar/b/1/embed?title=SKRAU%20Bikaner&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=admin%40raubikaner.org&amp;color=%23A32929&amp;ctz=Asia%2FCalcutta" style=" border-width:0; " width="220" height="200"  frameborder="0" scrolling="no"></iframe>
</button>
<div class="panel">

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
</script>


