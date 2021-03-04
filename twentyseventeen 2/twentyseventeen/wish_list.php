<?php
/**
 * Template Name: Wish List
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
*/

get_header(); ?>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<?php
 $user_id = get_current_user_id();
 if($user_id>0){
 	global $wpdb;	
 	$wishlists = $wpdb->get_results("SELECT  image_id,design_id,image_url,page_name FROM wishlist w , custom_gallery cg WHERE w.user_id = '".$user_id."' and w.design_id = cg.image_id");
  	 //echo "<pre>";print_r($wishlists);
 	 $i=0;
  	 ?> 
  	<div align="center">
  		Sort By
  	<select id="page_sel" class="page_sel" name="page_sel">
      <option value="all">All</option>
  		<option value="cover_page">COVERS</option>
  		<option value="page_design">PAGES</option>
  		<option value="divider_page">DIVIDERS</option>
  		<option value="stock_item">STOCK ITEMS</option>
  	</select> 
<div class="container">
	<div class="row" id="show_wishlist">
    <?php 
      foreach($wishlists as $wishlist) { 
              if($wishlist->page_name=="cover_page")
                $page_name="customized-calender/";
              else if($wishlist->page_name=="page_design")
                $page_name="page-design/";
              else if($wishlist->page_name=="divider_page")
                $page_name="divider/";

    ?>
		<div class="col-md-4 mt-3">
			<div class="outer-box">
				<div class="inner-box">
        <a href="javascript:void(0);">  
				 <img alt="Qries" onclick="load_this_design(<?php echo $wishlist->image_id;?>)" src="<?php echo $wishlist->image_url;?>" width="100%" height="400" id="paclass<?php echo $wishlist->image_id;?>" urlc='<?php echo site_url()."/".$page_name;?>'>
        </a> 
			</div>
			</div>
		</div>
    <?php
   }
 }else{
  echo "<div align='center'><br/><br/><br/><br/><br/><h5>Please <a href='".site_url()."/wp-login.php'>Log In</a> to view the Wish list item</h5></div>";
 }
 ?>	
	</div>
</div>
</div>
<!-- Loader Start -->
    <div class="loader">
      <div style="transform:scale(0.6);" class="uil-default-css">
        <div style="top:80px;left:93px;width:14px;height:40px;background:#b8f4f4;-webkit-transform:rotate(0deg) translate(0,-60px);transform:rotate(0deg) translate(0,-60px);border-radius:10px;position:absolute;"></div>
        <div style="top:80px;left:93px;width:14px;height:40px;background:#b8f4f4;-webkit-transform:rotate(30deg) translate(0,-60px);transform:rotate(30deg) translate(0,-60px);border-radius:10px;position:absolute;"></div>
        <div style="top:80px;left:93px;width:14px;height:40px;background:#b8f4f4;-webkit-transform:rotate(60deg) translate(0,-60px);transform:rotate(60deg) translate(0,-60px);border-radius:10px;position:absolute;"></div>
        <div style="top:80px;left:93px;width:14px;height:40px;background:#b8f4f4;-webkit-transform:rotate(90deg) translate(0,-60px);transform:rotate(90deg) translate(0,-60px);border-radius:10px;position:absolute;"></div>
        <div style="top:80px;left:93px;width:14px;height:40px;background:#b8f4f4;-webkit-transform:rotate(120deg) translate(0,-60px);transform:rotate(120deg) translate(0,-60px);border-radius:10px;position:absolute;"> </div>
        <div style="top:80px;left:93px;width:14px;height:40px;background:#b8f4f4;-webkit-transform:rotate(150deg) translate(0,-60px);transform:rotate(150deg) translate(0,-60px);border-radius:10px;position:absolute;"></div>
        <div style="top:80px;left:93px;width:14px;height:40px;background:#b8f4f4;-webkit-transform:rotate(180deg) translate(0,-60px);transform:rotate(180deg) translate(0,-60px);border-radius:10px;position:absolute;"></div>
        <div style="top:80px;left:93px;width:14px;height:40px;background:#b8f4f4;-webkit-transform:rotate(210deg) translate(0,-60px);transform:rotate(210deg) translate(0,-60px);border-radius:10px;position:absolute;"></div>
        <div style="top:80px;left:93px;width:14px;height:40px;background:#b8f4f4;-webkit-transform:rotate(240deg) translate(0,-60px);transform:rotate(240deg) translate(0,-60px);border-radius:10px;position:absolute;"></div>
        <div style="top:80px;left:93px;width:14px;height:40px;background:#b8f4f4;-webkit-transform:rotate(270deg) translate(0,-60px);transform:rotate(270deg) translate(0,-60px);border-radius:10px;position:absolute;"> </div>
        <div style="top:80px;left:93px;width:14px;height:40px;background:#b8f4f4;-webkit-transform:rotate(300deg) translate(0,-60px);transform:rotate(300deg) translate(0,-60px);border-radius:10px;position:absolute;"></div>
        <div style="top:80px;left:93px;width:14px;height:40px;background:#b8f4f4;-webkit-transform:rotate(330deg) translate(0,-60px);transform:rotate(330deg) translate(0,-60px);border-radius:10px;position:absolute;"></div>
      </div>
</div> 
         <!-- Loader End -->
<form method="post" action="" name="wishlist_id" id="wishlist_id"><input type="hidden" value="" name="design_id" id="design_id"/></form>         
</body>
</html>
<script type="text/javascript">
	jQuery(document).on('change','#page_sel',function(e){
    jQuery(".loader").css('display', 'block');
		//alert("dd changed");
		var sel_val=jQuery("#page_sel").val();
		console.log(sel_val);
    jQuery.ajax({

            type: 'POST',

            url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",
            data: {

                action              : 'sort_by_page',
                page_name           : sel_val
                
            },

            //dataType    : 'json',
            //encode      : true,
            success: function (data) { //alert(data);
            console.log(data);
            //alert(data);
            jQuery("#show_wishlist").html(data);
            jQuery(".loader").css('display', 'none');
            }
        });
	})
       function load_this_design(img_id){

                        var s_id="#paclass"+img_id;
                        console.log("s_id",s_id);
                        var urlc=jQuery(s_id).attr("urlc");
                        console.log("urlc",urlc);
                        jQuery("#wishlist_id").attr("action",urlc);
                        //var dn=jQuery(s_id).attr("dn");
                        //console.log("dn",dn);
                        document.getElementById("design_id").value =img_id;
                        console.log("in function");
                        jQuery("#wishlist_id").submit();
                   }
                  </script> 

<style type="text/css">
	#content{
		width: 100%;
	}
	.outer-box{
		width:100%;
		height: 400px;
		border:1px solid #000;
	}
	.inner-box {
    padding: 15px;
}
.outer-box {
    width: 100%;
    height: 525px;
    border: 1px solid #000;
}
</style>