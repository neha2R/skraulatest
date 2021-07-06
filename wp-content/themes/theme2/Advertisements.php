<?php
   /* Template Name: Advertisements*/
   get_header();
   ?>
<style>
   .for_bold{
   font-weight:bold;
   }
   .container2 select {
   text-align: left;
   border: 1px solid gray;
   padding: 4px;
   margin: 0 0 1rem;
   }
   .container2 .box {
   display: inline-block;
   overflow: hidden;
   }
   .container2 .box.blue {
   background: #023159;
   }
   .container2 .box.pink {
   background: #7D0844;
   }
   .container2 .box.purple {
   background: #3d048f;
   }
   .container2 .box.teal {
   background: #05A3A3;
   }
   td, tbody th {
   border-bottom: 00px solid #e2d6c100;
   background: #fdf6ea00;
   padding: 10px;
   width:50%;
   }
   .ul { 
   height: 30px;
   width: 100%;
   border: 1px #000 solid;
   }
   .ul .li { padding: 5px 10px; z-index: 2; }
   .ul .li:not(.init) { float: left; width: 100%; display: none; background: #ddd; }
   .ul .li:not(.init):hover, .ul .li.selected:not(.init) { }
   .li.init { cursor: pointer; }
   .heading_news_events{
   display:none;
   }
   .subheading_news_events{
   padding: 0;
   margin: 0;
   }
   .col-md-12{
   margin-bottom: 25px;
   }
   a#submit { z-index: 1; }
   .loadmorebutton{
    background: #DD6E42;
    text-align: center;
    color: #fff;
    font-size: 18px;
    padding: 5px 0px 5px 0px;
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
                                 <div class="col-md-12" style="margin-bottom:0;">
                                    <h2 class="welcome-title">
                                       <p>Recruitment/Advertisement Section</p>
                                    </h2>
                                 </div>
                                 <div class="categories col-md-12" >
                                    <span id="span-id"></span>
                                    <select id="id-select" class="js-filter-item">
                                       <option value="115" >All</option>
                                       <?php 
                                          $cat_args = array(
                                              'hide_empty' => false,
                                              'exclude' => array(1),
                                              'option_all' => 'All',
                                              'parent' => 115
                                          
                                          );
                                          
                                          $categories = get_categories($cat_args);
                                          foreach($categories as $key=> $cat):?>
                                       <option value="<?php echo $cat->term_id; ?>" data-category="<?php echo $cat->term_id; ?>" class="subcategory"><?php echo $cat->name; ?></option>
                                       <?php endforeach;
                                          ?>
                                    </select>
                                 </div>
                                 <?php 
                                    $start = 1;
                                       $endpost = 10 ;
                                    ?>
                                 <div class="js-filter col-md-12">
                                    <?php 
                                       $args = array(
                                           'post_type'=>'post',
                                           'posts_per_page'=>-1,
                                           'category_name' => 'recruitment-advertisement'
                                       );
                                       $query = new WP_Query($args);
                                       if($query->have_posts()):
                                          
                                           while($query->have_posts()): $query->the_post();
                                       
                                           ?>
                                    <div class="col-md-12 all-content" id="limitid<?php echo $start; ?>" style="display:none;">
                                       <h4 class="heading_news_events"><i class="fa fa-calendar calender-icon" aria-hidden="true" style="color:red;"></i>&nbsp; Posted On <?php echo get_the_date();?> </h4>
                                       <p class="subheading_news_events"> <b><?php the_title();?> </b></p>
                                       <a href="<?php echo get_permalink($post->ID);?>"><?php echo wp_trim_words(get_the_content(), 10);?></a>
                                    </div>
                                    <?php 
                                       $start ++;?>
                                    <?php
                                       endwhile;?>
                                    <?php endif;
                                       wp_reset_postdata();
                                       ?>
                                 </div>
                                 
                              </div>
                              <div class="row">
                              <div class="col-md-4"></div>
                              <div class="col-md-4"><div id="loadmorebtn" class="loadmorebutton" style="display:none;">Load More Posts</div></div>
                              <div class="col-md-4"></div>
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
   $(document).ready(function(event){
     $('.boxselect').change(function(){
       $this = $(this);
       $('.box').hide();
       $('.'+$this.val()).show();
       console.log("showing "+$this.val()+" boxes");
      });
   });
   $(".ul").on("click", ".init", function() {
    $(this).closest(".ul").children('.li:not(.init)').toggle();
   });
   
   var allOptions = $(".ul").children('.li:not(.init)');
   $(".ul").on("click", ".li:not(.init)", function() {
    allOptions.removeClass('selected');
    $(this).addClass('selected');
    $(".ul").children('.init').html($(this).html());
    allOptions.toggle();
   });   
   
   
   
   // (function($){
   // $(document).ready(function(){
   //     $('.js-filter-item').on('change',function(e){
        
   //     });
   // });
   
   // })(jQuery);
   
   
   
   function fetchpost(limit=false, limitcount=''){
    if(limit== true){
        limitcount++
         document.getElementById('span-id').innerHTML = limitcount;
        var test = 4;
        
        
    }
    console.log(limit);
   
   }(jQuery);
   
   
   
   $('document').ready(function(){
       
    var countlimit = 10;
    for(var i=1; i<= countlimit; i++){
        if(document.getElementById(`limitid${i}`)!= null)
         document.getElementById(`limitid${i}`).style.display="block";
    }
    // console.log(document.getElementById('limitid11'));
    if(document.getElementById('limitid11')!= null){
        document.getElementById('loadmorebtn').style.display="block";
    }
    else{
         document.getElementById('loadmorebtn').style.display="none";
    }
    
     $('#id-select').change(function(){
           countlimit = 10;
           console.log("hello");
        //  event.preventDefault();
   
        var category = document.getElementById('id-select').value;
   // console.log(event.target.value );
   var jsfilter = document.getElementsByClassName('js-filter')[0]
        $.ajax({
            url: wpAjax.ajaxUrl,
            data: {action: 'filter', category: category},
            type:'post',
            
            success: function(result){
                if(result.trim().length !== 0){
                    console.log(result.trim().length);
                     jsfilter.innerHTML=result;
                   for(var j=1; j<= countlimit; j++){
                       
                     if(document.getElementById(`limitid${j}`)!=null){
                         document.getElementById(`limitid${j}`).style.display="block";
                      }
                     
    
         
    } 
                }
                else{
                     console.log("hehuu");
                    jsfilter.innerHTML='No Data Found';
                }
               
                //  countlimit = 1;
                
                 
    //  console.log(document.getElementById('limitid11'));
    if(document.getElementById('limitid11')!= null){
        document.getElementById('loadmorebtn').style.display="block";
    }
    else{
         document.getElementById('loadmorebtn').style.display="none";
    }
    
    //             for(var i=1; i<= countlimit*10; i++){
    //      document.getElementById(`limitid${i}`).style.display="block";
    // }
               
               
                
            },
            error: function(result){
                console.warn(result);
            }
        });
     });
    
   $('#loadmorebtn').click(function(){
        
        countlimit = countlimit+10;
        for(var k=1; k<=countlimit; k++){
            // if(document.getElementById(`limitid${k}`)!=null){
               
              document.getElementById(`limitid${k}`).style.display="block";
            // }
        
   }
   //alert("helloooo");
   
    })
   })
   
   // function showPost(limit){
    
   //     for(var i=1; i<=countlimit; i++){
   //          document.getElementById(`limitid${i}`).style.display="block";
   //     }
   // }
</script>
<?php get_footer();?>