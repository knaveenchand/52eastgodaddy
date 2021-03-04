<?php
/**
 * Template Name: Covers Gallery
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
*/
get_header(); ?>
<!--<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div class="wrap customSlides">
<h1 class="pageTitle">Covers Gallery</h1>

<div class="row">
<div class="col-4">1 </div>
<div class="col-4"> 2</div>
<div class="col-4"> 3</div>
</div>


  <div class="owl-carousel" id="coverSlider">
    <?php
    $user_id=get_current_user_id();
    global $wpdb;
    $sql = "SELECT image_id,image_url,page_title,pid,variation_id,price from custom_gallery where page_name='cover_page'";
    $gallery = $wpdb->get_results($sql);
    //echo "<pre>";print_r($gallery);
    $i=1;
    foreach($gallery as $gallery){

      $d_id = $gallery->image_id;
      $count_like = $wpdb->get_results("SELECT count(design_id) as total FROM design_likes WHERE design_id = '{$d_id}'");
        //print_r($count_like);
      $total_likes =$count_like[0]->total;
        //echo "#";
      $user_like = $wpdb->get_results("SELECT count(design_id) as total FROM design_likes WHERE design_id = '{$d_id}' and user_id='{$user_id}'");
        //print_r($count_like);
      $already_like =$user_like[0]->total;
      //echo "#";
      $count_order = $wpdb->get_results("SELECT count(design_id) as total FROM design_order WHERE design_id = '{$d_id}'");
        //print_r($count_like);
      $total_orders =$count_order[0]->total;
      echo "<div class='item'><img class='mySlides' src='".$gallery->image_url."' title='cover page gallery' alt='cover page gallery' number='".$gallery->image_id."' id='".$i."'>
         <div class='prod_details'>
          <div class='prod_titleRow'>
           <span class='prodTitles'>".stripslashes($gallery->page_title)."</span>
           <span class='prodprices'>$".$gallery->price."</span>
          </div>
          ";
          if($already_like ==0){
             echo "<a class='button likec".$gallery->image_id."' id='likethis'><i class='fa fa-thumbs-up'></i> Like This Design</a> ";
          }else{
             echo "<a class='button'><i class='fa fa-thumbs-up'></i>Already Liked</a> ";
          }
          echo "<a class='button' id='wishlist'><i class='fa fa-heart'></i> Add to Wishlist</a>
          <a class='button' id='shop'><i class='fa fa-shopping-cart'></i> Order This Design</a>
          <div class='postOverView'><svg viewBox='0 0 32 32'><path d='M16,29.5c-0.215,0-0.43-0.068-0.61-0.207C14.844,28.872,2,18.896,2,10.5c0-4.411,3.589-8,8-8s8,3.589,8,8 c0,0.552-0.447,1-1,1c-0.552,0-1-0.448-1-1c0-3.309-2.691-6-6-6s-6,2.691-6,6c0,6.467,9.477,14.652,12,16.719 C18.521,25.152,28,16.96,28,10.5c0-3.309-2.691-6-6-6c-0.895,0-1.756,0.192-2.559,0.57c-0.5,0.236-1.098,0.021-1.332-0.478 c-0.234-0.5-0.021-1.095,0.479-1.331C19.66,2.756,20.809,2.5,22,2.5c4.411,0,8,3.589,8,8c0,8.396-12.844,18.372-13.391,18.793 C16.43,29.432,16.215,29.5,16,29.5z'/></svg> <span id='likecounter".$gallery->image_id."'>".$total_likes." Likes</span> | <svg viewBox='0 0 32 32'><path d='M25,30H3c-0.552,0-1-0.447-1-1V11c0-0.552,0.448-1,1-1s1,0.448,1,1v17h20V8H3C2.448,8,2,7.552,2,7s0.448-1,1-1h22 c0.553,0,1,0.448,1,1v22C26,29.553,25.553,30,25,30z M29,22c-0.553,0-1-0.447-1-1V4H11c-0.552,0-1-0.448-1-1s0.448-1,1-1h18 c0.553,0,1,0.448,1,1v18C30,21.553,29.553,22,29,22z'/></svg> <span id='ordercounter".$gallery->image_id."'>".$total_orders." Order</span></div>
          </div>
         </div>";
      $i++;
    }
    
    ?>
  </div>
</div>
<div class="modal fade" id="showloginmsg" tabindex="-1" role="dialog" aria-labelledby="showloginmsgLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="showloginmsgLabel">Please log in</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div align="center" style="white-space:nowrap;">
          Please <a href="<?php echo site_url();?>/wp-login.php" target="_blank">SIGN INTO YOUR ACCOUNT</a> in order to save designs to your Wish List.<br/>
If you do not have an account, please click <a href="<?php echo site_url();?>/wp-login.php?action=register" target="_blank">HERE</a> to create one.
         </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
    </div>
</div>
<form id="coverform" method="POST" action="<?php echo home_url();?>/customized-calender/"><input type="hidden" value="" id="cdesign" name="cdesign"></form>
<style type="text/css">

/*.customSlides{max-width:90%;}
#coverSlider .owl-item.active+.active .item img{
  height:303px;
}
#coverSlider .owl-item.active .item img,
#coverSlider .owl-item.active+.active+.active .item img{
  height:280px;
  width: auto;
  margin:0 auto;
}*/


.customSlides{max-width:90%;margin-top:10px}
.owl-carousel .owl-stage-outer {height:580px;margin-top:65px;}
.owl-carousel .owl-item img{max-width:98%;}
#coverSlider .owl-item.active+.active .item img{
  height:400px;
  margin:0 auto;
}  
#coverSlider .owl-item.active .item img,
#coverSlider .owl-item.active+.active+.active .item img{
  height:300px;
  width: auto;
  margin:50px auto 0;
}
.owl-dots {display:none;}


#coverSlider .owl-item.active .item img{-o-transition:.3s;-ms-transition:.3s;-moz-transition:.3s;-webkit-transition:.3s;transition:.3s;}
#coverSlider .owl-nav{text-align:center;}
#coverSlider .owl-nav button{margin:20px 10px 0;}
#coverSlider .owl-nav button svg{width:46px;height:46px;display:block;fill:#000;}
#coverSlider .owl-nav button:hover svg{fill:#767676;} 
</style>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript">
var current_design=0;  
var owl = jQuery('#coverSlider');
owl.owlCarousel({
  loop:true,
  margin:0,
  nav:true,
  navText : ['<svg viewBox="0 0 46 46"><path d="M1,23c0,12.15,9.85,22,22,22c12.149,0,22-9.85,22-22c0-12.15-9.851-22-22-22C10.85,1,1,10.85,1,23z M3,23 C3,11.954,11.954,3,23,3s20,8.954,20,20s-8.954,20-20,20S3,34.046,3,23z"/><path d="M12.377,23c0,0.252,0.091,0.482,0.277,0.666l6.104,6.06C18.943,29.908,19.197,30,19.43,30c0.254,0,0.484-0.092,0.67-0.274 c0.369-0.367,0.369-0.964,0-1.331L15.674,24h16.949c0.552,0,1-0.446,1-1c0-0.553-0.448-1-1-1H15.674l4.426-4.394 c0.369-0.367,0.369-0.964,0-1.331c-0.369-0.367-0.971-0.367-1.342,0l-6.104,6.059C12.469,22.518,12.377,22.748,12.377,23z"/></svg>','<svg viewBox="0 0 46 46"><path d="M23,1C10.85,1,1,10.85,1,23c0,12.15,9.85,22,22,22c12.15,0,22-9.85,22-22C45,10.85,35.15,1,23,1z M23,43 C11.954,43,3,34.046,3,23S11.954,3,23,3s20,8.954,20,20S34.046,43,23,43z"/><path d="M33.346,22.334l-6.104-6.059c-0.371-0.367-0.973-0.367-1.342,0c-0.369,0.367-0.369,0.964,0,1.331L30.326,22H13.377 c-0.552,0-1,0.447-1,1c0,0.554,0.448,1,1,1h16.949L25.9,28.395c-0.369,0.367-0.369,0.964,0,1.331C26.086,29.908,26.316,30,26.57,30 c0.232,0,0.486-0.092,0.672-0.274l6.104-6.06c0.187-0.184,0.277-0.414,0.277-0.666S33.531,22.518,33.346,22.334z"/></svg>']
});
jQuery(document).on('click', '.prod_details .button', function() {
  jQuery(this).toggleClass('active');
});
jQuery(document).ready(function() {
  jQuery(".owl-prev").trigger("click");
  
});
// jQuery method on
owl.on('changed.owl.carousel',function(property){
    var current = property.item.index+1;
    //jQuery(this).attr("current",current);
    console.log(current);
    var number = jQuery(property.target).find(".owl-item").eq(current).find("img").attr('number');
    current_design=number;
    console.log('Image current number is ' + number);
    //showLikes(current_design);
});
jQuery(document).on("click","#likethis",function(){

  //alert(current_design);
    if(current_design !=0){
      LikeThis();
    } 
})
jQuery(document).on("click","#wishlist",function(){

  //alert(current_design);
    if(current_design !=0){
      wishlist();
    } 
})
jQuery(document).on("click","#shop",function(){

  //alert(current_design);
    if(current_design !=0){
      shop();
    } 
})


function wishlist(){
  //alert("wishlist");
  jQuery.ajax({

            type: 'POST',

            url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",
            data: {

                action              : 'add_to_wishlist',
                page_name           : 'cover_page',
                id                  : current_design,
                target              : 'wishlist'
            },
            //dataType    : 'json',
            //encode      : true,
            success: function (data) { //alert(data);
            console.log(data);
            if(data ==0){
              //alert("Please login to add this desing into Wishlist");
              jQuery("#showloginmsg").modal('show');
            }
            else if(data>0){
              alert(data);
            }else{
              alert(data);
            }

            }
        });
}
function LikeThis(){

  jQuery.ajax({

            type: 'POST',

            url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",
            data: {

                action              : 'add_to_likethis',
                page_name           : 'cover_page',
                id                  : current_design,
                target              : 'like'
            },

            dataType    : 'json',
            encode      : true,
            success: function (data) { //alert(data);
            console.log(data);
            //alert(data+" Like in this Design");
            console.log("#likecounter"+current_design);
            jQuery("#likecounter"+current_design).html(data+" Likes");
            console.log(jQuery("#likecounter"+current_design).html());
            jQuery(".likec"+current_design).removeAttr("id");
            jQuery(".likec"+current_design).text('Already Liked');
            }
        });
}
function shop(){

    console.log(current_design);
    jQuery("#cdesign").val(current_design);
    jQuery('#coverform').submit();
}
function showLikes(design_id){
      //alert(design_id);
      /*jQuery.ajax({

            type: 'POST',

            url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",
            data: {

                action              : 'showLikes',
                page_name           : 'divider_page',
                id                  : design_id,
                target              : 'like'
            },

            //dataType    : 'json',
            encode      : true,
            success: function (data) { //alert(data);
              //console.log(data);
              //alert(data+" Like in this Design");
              var div_id="#likecounter"+current_design;
              jQuery(div_id).html(data+" Likes");
              console.log(div_id);
            }
        });*/
}
</script>
</div>
</body>
</html>