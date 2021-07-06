<?php
   /* Template Name: Members Of ac */
   get_header();
   ?>
<style>
.tablepress tbody td, .tablepress tfoot th {
    border-top: 1px solid #fff;
    border: 1px solid #ccc !important;
}
   table {
   border-collapse: collapse;
   border-spacing: 0;
   }
   table thead,
   table th,
   table td,
   table tfoot {
   border: 1px solid #ccc;
   padding: 10px;
   }
   table thead {
   background-color: #05396b;
   }
   table td:first-child {
   color: #000;
   }
   table td.not-first-child {
   color: #000;
   }
   .for_bold{
   font-weight:bold;
   }
   .tablepress tfoot th, .tablepress thead th {
    background-color: #05396b;
    font-weight: 700;
    vertical-align: middle;
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
.row-hover{
    border:1px solid #ccc;
}

</style>
<section>
     <?php $heading=get_field('heading');?>
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
                                     <h2 class="welcome-title"><p><?php echo $heading['main_heading'];?></p></h2>
                       
                      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
                        <div class="clearfix" style="height:30px;"></div>
                        
                        
                        
                        
                       
                        <h2 class="welcome-title">MINUTES OF MEETING</h2>
                        <div class="row">
                           <table cellspacing="1" cellpadding="1" border="1" style="width:100%">
                              <thead>
                                 <tr>
                                    <th>Date</th>
                                    <th>Document</th>
                                 </tr>
                              </thead>
                              <tbody>
                                   <?php if( have_rows('bottom_section') ): ?>
                                          <?php while( have_rows('bottom_section') ): the_row(); 
                                             
                                             $date = get_sub_field('date');
                                             $link = get_sub_field('link');
                                             
                                             
                                             ?>
                                 <tr>
                                    <td rowspan="1" colspan="1" class="for_bold"><?php echo $date; ?>
                                    </td>
                                    <td>
                                       <div class="download-wrap">
                                          <div class="download">
                                             <a href="<?php echo $link; ?>" target="_blank" class="button-download" style="color:#fff;">
                                             Download
                                             <span class="icon-wrap">
                                             <i class="icon-download"></i>
                                             </span>
                                             </a>
                                             <div class="meter">
                                                <span class="meter-progress"></span>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                <?php endwhile; ?>
                                          <?php endif; ?>
                                 
                              </tbody>
                           </table>
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
   $.each( $('table', this.$el), function( index, table ){
     var rowspan = 0;
     $.each( $('tr', table), function( index, tr ){
       if( rowspan > 0 ){
         $('td:first-child', tr).addClass("not-first-child");
         rowspan = (rowspan>0) ? rowspan-1 : 0;
       } else if( $('td:first-child', tr).attr("rowspan") > 0){
         rowspan = parseInt( $('td:first-child', tr).attr("rowspan")) - 1;
       }
     });
   });
</script>
<?php get_footer();?>