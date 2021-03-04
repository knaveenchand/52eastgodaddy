<?php

/**

 * Template Name:  Pages Design

 * @package WordPress

 * @subpackage Twenty_Seventeen

 * @since 1.0

 * @version 1.0

 */

get_header();

?>
<div style="display:none;">
<?php //echo "<pre>";print_r($_SESSION); ?>
<?php
if(isset($_POST)){

  //echo "<pre>";print_r($_SESSION);
  if(isset($_POST['cdesign']) && $_POST['cdesign']!=""){

    unset($_SESSION['draw_textbox']);
    unset($_SESSION['pTextFont']);
    unset($_SESSION['pfont_size']);
    unset($_SESSION['page_per_pack']);
    unset($_SESSION['printdesign']);
    unset($_SESSION['number_of_packs']);
    unset($_SESSION['contentArea']);
    unset($_SESSION['add_singleline']);
    unset($_SESSION['add_box_noline']);
    unset($_SESSION['design_page_title']);
    $design_id=$_POST['cdesign'];
    $wpdb->insert('design_order', array(
       'design_id' => $design_id,
       'user_id' => get_current_user_id(),
       'datetime' =>  date("Y-m-d H:i:s"),
    ));
    $id = $wpdb->insert_id;
    //echo "SELECT json_data From custom_gallery where image_id='{$design_id}'";
    $post_id = $wpdb->get_results("SELECT json_data From custom_gallery where image_id='{$design_id}'");
    //var_dump($post_id[0]->json_data);
    $j_string             =json_decode(stripslashes($post_id[0]->json_data));
    //echo "<pre>";print_r($j_string);
    $sdesign_page_title   =$j_string->design_page_title;
    $scontentArea         =$j_string->contentArea;            
    $spage_per_pack       =$j_string->page_per_pack;
    $sprintdesign         =$j_string->printdesign;
    $snumber_of_packs     =$j_string->number_of_packs;
    $textarea             =$j_string->textarea;
    if($textarea!=""){
      $textarea = rtrim($textarea, "&");
    }
  }
  if(isset($_POST['redesign_id']) || isset($_POST['design_id'])){

      unset($_SESSION['draw_textbox']);
      unset($_SESSION['pTextFont']);
      unset($_SESSION['pfont_size']);
      unset($_SESSION['page_per_pack']);
      unset($_SESSION['printdesign']);
      unset($_SESSION['number_of_packs']);
      unset($_SESSION['contentArea']);
      unset($_SESSION['add_singleline']);
      unset($_SESSION['add_box_noline']);
      unset($_SESSION['design_page_title']);
    if($_POST['redesign_id']!=""){
      $re_design_id=$_POST['redesign_id'];
      $post_id = $wpdb->get_results("SELECT json_data From re_order_design where design_id='{$re_design_id}'");
    }
    elseif($_POST['design_id']!=""){
       $design_id=$_POST['design_id'];
       $post_id = $wpdb->get_results("SELECT json_data From custom_gallery where image_id='{$design_id}'");
    }
    //echo "<pre>";print_r(json_decode(stripslashes($post_id[0]->json_data)));//exit;
    $j_string             =json_decode(stripslashes($post_id[0]->json_data));
    //echo "<pre>";print_r($j_string->textarea);
    $sdesign_page_title   =$j_string->design_page_title;
    $scontentArea         =$j_string->contentArea;            
    $spage_per_pack       =$j_string->page_per_pack;
    $sprintdesign         =$j_string->printdesign;
    $snumber_of_packs     =$j_string->number_of_packs;
    $textarea             =$j_string->textarea;
    if($textarea!=""){
      $textarea = rtrim($textarea, "&");
    }
  }

} ?> </div>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://www.jqueryscript.net/demo/jQuery-Plugin-For-Auto-Resizing-Text-textfill/jquery.textfill.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.js" integrity="sha256-EzjZPP7sOCQ+ugF/U8x2VH3PEvg3NFjis/dpwogN3T0=" crossorigin="anonymous"></script>
<!-- container -->
<div class="wrap"> 
  <div class="price_calc_upper">
  <div class="rightPane">
  <div id="price_calculator" class="price_calculator">
  <div class="container">
   <div class="row app_class">
  	<div class="item_title col-md-8"><strong>ITEMS</strong></div>
    <div class="item_price col-md-4"><i class="fa fa-shopping-cart" style="font-size:20px;"></i></div>
    <div class="item_page_name col-md-4"></div>
    <div class="item_page_name col-md-8"></div>
    <div class="item_cover_icolor col-md-8"></div>
    <div class="item_cover_icolor col-md-4"></div>
    <div class="item_cover_biwt col-md-8"></div>
    <div class="item_cover_biwt col-md-4"><strong></strong></div>
    <div class="item_print_design col-md-8"></div>
    <div class="item_print_design col-md-4"></div>   
    <div class="item_initial_embosscolor col-md-8"></div>
    <div class="item_initial_embosscolor col-md-4"><strong></strong></div>
    <div class="item_innercolor_embosscolor col-md-8"></div>
    <div class="item_innercolor_embosscolor col-md-4"><strong></strong></div>
    <div class="item_disc_size col-md-8"></div>
    <div class="item_disc_size col-md-4"><strong></strong></div>
    <div class="item_subtotal col-md-8"></div>
    <div class="item_subtotal col-md-4"><strong></strong></div>
   </div>
   </div> 
    </div>
      </div>
  <div id="step2">
    <div class="container">
      <div class="row">
       <div class="leftPane">
        <div id="sidebar0" class="sidebar_page">
        <div class="sideBarInner">
           <h1 class="sidebar-heading">Page Design</h1>
		  <div class="bdr-bot">
          <div class="form-group ptitle"> 
            <input type="text" name="design_page_title" id="design_page_title" class="form-control design_page_title" placeholder="Type Page Name Here" maxlength="20" style="margin:0" />
           </div>
		  </div>
          <div class="form-group bdr-bot add_box_line"> 
            <div id="add_box_line" class="btn_add_box_line text-center">Add a Box with Lines</div>
          </div>
          <div class="form-group bdr-bot add_box_noline">
            <div id="add_box_noline" class="btn_add_box_line text-center">Add a Box with No Lines</div>
          </div>
          <div class="form-group bdr-bot">
            <div id="draw_textbox" class="btn_add_box_line text-center">Add a Text Box</div>
          </div>
          <div class="bdr-bot">      
           <div class="select_font"> 
			<div class="dualFld_row">
            <select class="form-control font-family-select text-center" onchange="changeTextFont(this.value,1)" name="text-font"  id="text-font" >
                <option style="font-weight:bold;" value="">Font</option>
          		  <option style="font-family: Arial, sans-serif;" value="Arial, sans-serif;">Arial</option>
                <option style="font-family: 'Amatic SC', cursive;" value="'Amatic SC', cursive;">Amatic SC</option>
                <!-- <option style="font-family: 'Domine', serif;" value="'Domine', serif;">Domine</option> -->
                <!-- <option style="font-family: 'Gloria Hallelujah', cursive;" value="'Gloria Hallelujah', cursive;">Gloria Hallelujah</option> -->
                <option style="font-family: 'Special Elite', cursive;"  value="'Special Elite', cursive;">Special Elite</option>
                <!-- <option style="font-family: 'Coda Caption', sans-serif;" value="'Coda Caption', sans-serif;">Coda Caption</option> -->
                <!-- <option style="font-family: 'Bangers', cursive;"  value="'Bangers', cursive;">Bangers</option> -->
                <!-- <option style="font-family: 'Rock Salt', cursive;"  value="'Rock Salt', cursive;">Rock Salt</option> -->
                <option style="font-family: 'Shadows Into Light Two', cursive;"  value="'Shadows Into Light Two', cursive;">Shadows</option>
                <option style="font-family: 'Nothing You Could Do', cursive;"  value="'Nothing You Could Do', sans-serif;">Nothing You Could Do</option>
                <option style="font-family: 'Fredericka the Great', cursive;"  value="'Fredericka the Great', cursive;">Fredericka the Great</option>
                <option style="font-family: 'Cabin Sketch', cursive;"  value="'Cabin Sketch', cursive;">Cabin Sketch</option>
                <!-- <option style="font-family: 'Annie Use Your Telescope', cursive;"  value="'Annie Use Your Telescope', cursive;">Annie Use Your Telescope</option> -->
                <option style="font-family: 'Nixie One', cursive;"  value="'Nixie One', cursive;">Nixie One</option>
                <option style="font-family: 'Freckle Face', cursive;"  value="'Freckle Face', cursive;">Freckle Face</option>
                <!-- <option style="font-family: 'Give You Glory', cursive;"  value="'Give You Glory', cursive;">Give You Glory</option> -->
                <option style="font-family: 'Chelsea Market', cursive;"  value="'Chelsea Market', cursive;">Chelsea Market</option>
                <!-- <option style="font-family: 'Mirza', cursive;"  value="'Mirza', cursive;">Mirza</option> -->
                <option style="font-family: 'Bilbo Swash Caps', cursive;"  value="'Bilbo Swash Caps', cursive;">Bilbo Swash Caps</option>
                <option style="font-family: 'Stardos Stencil', cursive;"  value="'Stardos Stencil', cursive;">Stardos Stencil</option>
                <!-- <option style="font-family: 'Fontdiner Swanky', cursive;"  value="'Fontdiner Swanky', cursive;">Fontdiner Swanky</option> -->
                <option style="font-family: 'Life Savers', cursive;"  value="'Life Savers', cursive;">Life Savers</option>
                <!-- <option style="font-family: 'Dokdo', cursive;"  value="'Dokdo', cursive;">Dokdo</option>
                <option style="font-family: 'Mountains of Christmas', cursive;"  value="'Mountains of Christmas', cursive;">Mountains of Christmas</option>-->
                <!-- <option style="font-family: 'Milonga', cursive;"  value="'Milonga', cursive;">Milonga</option> -->
                <option style="font-family: 'Lovers Quarrel', cursive;"  value="'Lovers Quarrel', cursive;">Lovers Quarrel</option>
                <option style="font-family: 'Trade Winds', cursive;"  value="'Trade Winds', cursive;">Trade Winds</option>
                <!-- <option style="font-family: 'Mystery Quest', cursive;"  value="'Mystery Quest', cursive;">Mystery Quest</option> -->
                <!-- <option style="font-family: 'Henny Penny', cursive;"  value="'Henny Penny', cursive;">Henny Penny</option> -->
                <!-- <option style="font-family: 'Barrio', cursive;"  value="'Barrio', cursive;">Barrio</option> -->
                <option style="font-family: 'Kirang Haerang', cursive;"  value="'Kirang Haerang', cursive;">Kirang Haerang</option>
                <!-- <option style="font-family: 'Lakki Reddy', cursive;"  value="'Lakki Reddy', cursive;">Lakki Reddy</option> -->
                <!-- <option style="font-family: 'Ruthie',cursive;"  value="'Ruthie',cursive;">Ruthie</option> -->
            </select>
            <select class="form-control font-family-select text-center"  name="text-font-size" id="text-font-size" onchange="AdjustSize(this.value,1)">
                <option style="font-weight:bold;" disabled selected>Size</option>
                <option value="12">12px</option>
                <option value="14">14px</option> 
                <option value="16">16px</option>
                <option value="18">18px</option>
                <option value="20">20px</option>
                <option value="22">22px</option> 
                <option value="24">24px</option>
                <option value="26">26px</option> 
                <option value="28">28px</option>
                <option value="30">30px</option>
                <option value="32">32px</option> 
                <option value="34">34px</option> 
                <option value="36">36px</option>
                <option value="38">38px</option>
                <option value="40">40px</option>
            </select>
            </div> 
            </div>
          </div>
           <div class="form-group bdr-bot disc_size">
           <div id="add_setof_checkbox" class="btn_add_box_line text-center">Add a Set of Check Boxes</div>
          </div>
          <div class="form-group bdr-bot disc_size">
           <div id="add_set_of_lines" class="btn_add_box_line text-center">Add a Set of Lines</div>
          </div>        
          <div class="form-group bdr-bot add_box_line"> 
            <div id="add_box_line_checkbox" class="btn_add_box_line text-center">Add a Box with Lines and Check Boxes</div>
          </div>
         <!--  <div class="form-group bdr-bot disc_size">
           <div id="add_checkbox" class="btn_add_box_line text-center">Add a Single Check Box</div>
          </div> -->
          <div class="form-group bdr-bot disc_size">
           <div id="add_singleline" class="btn_add_box_line text-center">Add a Horizontal Line</div>
          </div>       
          <div class="form-group bdr-bot disc_size">
           <div id="add_singleline_v" class="btn_add_box_line text-center">Add a Vertical Line</div>
          </div>
          <div class="bdr-bot">
           <select class="form-control font-family-select text-center full-length"  name="text-select-icon" id="text-select-icon" onchange="AddIcon(this.value)">
                <option value="">Add an Icon</option>
                <option value="1">Star</option>
                <option value="2">Star 2</option>
            </select>
         </div>
         <div class="bdr-bot">
           <select class="form-control font-family-select text-center full-length"  name="text-select-shape" id="text-select-shape" onchange="AddShape(this.value)">
                <option value="">Add a Shape</option> 
                <option value="1">Square</option> 
                <option value="2">Circle</option>
                <option value="3">Square-No Border</option>
                <option value="4">Circle-No Border</option>
            </select>
         </div>
         <div class="bdr-bot">      
    <div class="dividerNav form-control">
        <label>Adjust Position</label>
        <button class="form-control movLeft"><i class="fa fa-arrow-left"></i></button>
        <button class="form-control movRight"><i class="fa fa-arrow-right"></i></button>
        <button class="form-control movUp"><i class="fa fa-arrow-up"></i></button>
        <button class="form-control movDown"><i class="fa fa-arrow-down"></i></button>
    </div>
    </div>
<!--
     <div class="form-group bdr-bot">
     <div class="dualFld_row dual_btns_row">
        <div class="btn_add_box_line">
           <span id="color_page_add" class="pagecolor_option">Color</span>
         </div>
        <div class="btn_add_box_line">
           <span id="biwt_page_add" class="pagecolor_option">Bl/Wt</span>
         </div>
    </div> 
         </div>-->
         <div class="hilighted_fields">
         <div class="bdr-bot">
          <div id="ppp">
            <select class="form-control page_per_pack text-center"  name="page_per_pack"  id="page_per_pack" style="width:100%;">
                <option style="font-weight:bold;"  selected>Pages Per Pack</option>
                <!-- <option  value="50biwt">50 Pages per Pack</option> -->
                <option  value="100biwt">100 Pages</option>
                <option  value="200biwt">200 Pages</option>
<!--
          		<option  value="50biwt">50 pps BI/Wt $10/pk</option>
                <option  value="100biwt">100 pps BI/Wt $15/pk</option>
                <option  value="200biwt">200 pps BI/Wt $25/pk</option>
                 <option  value="50color">50 pps Color $25/pk</option>
                <option  value="100color">100 pps Color $40/pk</option>
                <option  value="200color">200 pps Color $60/pk</option> -->
          	</select>
          </div>
         </div>
          <div class="bdr-bot" style="border-bottom:0;">
           <select class="form-control printdesign text-center" name="printdesign" id="printdesign" style="width:100%;">
                <option style="font-weight:bold;">One or Two Sided</option>
                <option value="1">Print Design on One Side</option>
                <option value="2">Print Design on Both Sides</option>
            </select>
         </div>
         <div class="bdr-bot" style="border-bottom:0;">
           <select class="form-control page_per_pack text-center"  name="number_of_packs" id="number_of_packs" style="width:100%;">
                <option value="" style="font-weight:bold;">Number of Packs</option>
          		  <option  value="1">1</option>
                <option  value="2">2</option>
                <option  value="3">3</option>
                <option  value="4">4</option>
                <option  value="5">5</option>
                <option  value="6">6</option>
                <option  value="7">7</option>
                <option  value="8">8</option>
                <option  value="9">9</option>
                <option  value="10">10</option>
          	</select>
         </div>
    	</div>
           <div class="form-group" id="pd_page_design"><span class="btn">Preview Design</span></div>
           <div class="form-group btn_add_to_wishlist">
            <a class='btn' id='add_to_wishlist'><i class='fa fa-heart'></i> Add to Wishlist</a>
         </div>
           <div id="apdapc"><span class="btn" onclick="canvasSaveImage();">Approve Page Design and Add Pack(s) to Cart</span></div>
        </div>
           <div id="pydgos"><span class="btn">Post Your Design to the Gallery for Others to See & Use</span></div>

        </div>

    <div id="upper_div_working" class="upper_div_working">

     <div id="working_area" class="working_area bindingPage">  

		<div class="contentArea"><!-- <div class="snap-bg"></div> -->

      <?php if(isset($_SESSION['contentArea']) && $_SESSION['contentArea']!=""){

            $contentArea=stripslashes($_SESSION['contentArea']);

            $contentArea=str_replace('<div class="snap-bg"></div>','',$contentArea);

            echo $contentArea;

         //unset($_SESSION['contentArea']);

      } //var_dump($_SESSION['contentArea']);

      if(isset($scontentArea)){

         $scontentArea=str_replace('<div class="snap-bg"></div>','',$scontentArea);

         echo $scontentArea;

      }?>

		</div>

        </div>

     <!-- <div class="btnsRow">

      <div id="next" class="next_step_btn"><a class="btn" href="<?php echo site_url();?>/customized-calender">Cover Design</a></div>

      <div id="middle" class="next_step_btn"><a class="btn" href="<?php echo site_url();?>/divider">Divider Design</a></div>

      <div id="last" class="next_step_btn"><a class="btn" href="<?php echo site_url();?>/cart">Checkout</a></div>

    </div> -->

    </div>    

 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-xl" role="document">



    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Preview of Page Design</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

         <div align="center" style="white-space:nowrap;">

          <img src="" alt="cover design preview" id="page_design_preview" class="modal_preview_image"  />

         </div>

        </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>

    </div>

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

</div>

</div>

</div>

</div>

</div>

</div>

</div>

<div id="dialog" title="Processing ...." style="display: none;">

  <p>You will be redirect to cart page shortly......</p>

</div>

<script type="text/javascript">
var current_main_box=emboss_name=page_title='';
var subtotal=firstDone=sel_title=c_cover=0;
var number_of_packs=colorpage=add_to_wishlist=0;
var sel_initial=sel_cntinfo=s_title=0;
var s_initial=s_cntinfo=printdesign=0;
var lg_add=sm_add=size_add=cover_icon=0;
var size=disc_gcolor=number_of_pages=side12='';
var focus_id=txtarea_id='';
var len=1;
var theme_directory_uri = "<?php echo get_template_directory_uri(); ?>";

$(document).ready(function() {
    <?php if($textarea !=""){
      $textarea   = rtrim($textarea, "&");
      $textarea_a = explode("&",$textarea);
      foreach($textarea_a as $txt_value){
        $arr=explode("=",$txt_value);
        $id=$arr[0];
        $va=$arr[1];
        if($va !=""){
         echo "$('#".$id."').val('".$va."');";
         echo "<br/>";
         //$div_nummber=substr($id,7,0);
         echo "$('#main_".$id."').css('border-color','#dedede');";
         echo "<br/>";
         //echo "console.log(".$id."  -- ".$va.");";
        }
       } 
      }
   else { ?>
   /**///window.onload = function() {        
    $('textarea').each(function(){    
       var id = $(this).attr('id');
       var text2 = localStorage.getItem(id);
       if (text2 !== null) $('#'+id).val(text2);
       console.log('id val local get '+id+" "+text2);
    }); 
  //} 
<?php } ?>
    window.onbeforeunload = function() {
     $('textarea').each(function(){    
        var id = $(this).attr('id');
        var value = $(this).val();
       localStorage.setItem(id, value);
       console.log('id val local set '+id+" "+value);
    }); 
   }
    <?php 
      if(isset($_SESSION['design_page_title']) && $_SESSION['design_page_title']!=""){
         $design_page_title = $_SESSION['design_page_title'];
         echo 'jQuery("#design_page_title").val("'.$design_page_title.'");';
         echo 'jQuery("#design_page_title").trigger("keyup");';
      }
      if(isset($sdesign_page_title)){
         echo 'jQuery("#design_page_title").val("'.$sdesign_page_title.'");';
         echo 'jQuery("#design_page_title").trigger("keyup");';
      }
      if(isset($_SESSION['color_page_add']) && $_SESSION['color_page_add']!=""){
         $color_page_add = $_SESSION['color_page_add'];
         echo 'jQuery(".pagecolor_option")[0].click();';
      }
      if(isset($_SESSION['biwt_page_add']) && $_SESSION['biwt_page_add']!=""){
         $color_page_add = $_SESSION['biwt_page_add'];
         echo 'jQuery(".pagecolor_option")[1].click();';
      }
      if(isset($_SESSION['page_per_pack']) && $_SESSION['page_per_pack']!=""){
         $page_per_pack = $_SESSION['page_per_pack'];
         echo 'jQuery("#page_per_pack").val("'.$page_per_pack.'");';
         //echo 'jQuery("#page_per_pack").trigger("change");';
      }
      if(isset($spage_per_pack)){
         echo 'jQuery("#page_per_pack").val("'.$spage_per_pack.'");';
         echo 'jQuery("#page_per_pack").trigger("change");';
      }
      if(isset($_SESSION['printdesign']) && $_SESSION['printdesign']!=""){
         $printdesign = $_SESSION['printdesign'];
         echo 'jQuery("#printdesign").val("'.$printdesign.'");';
         echo 'jQuery("#printdesign").trigger("change");';
      }
      if(isset($sprintdesign)){
         echo 'jQuery("#printdesign").val("'.$sprintdesign.'");';
         echo 'jQuery("#printdesign").trigger("change");';
      }
      if(isset($_SESSION['number_of_packs']) && $_SESSION['number_of_packs']!=""){
         $number_of_packs = $_SESSION['number_of_packs'];
         echo 'jQuery("#number_of_packs").val("'.$number_of_packs.'");';
         echo 'jQuery("#number_of_packs").trigger("change");';
      }
      if(isset($snumber_of_packs)){
         echo 'jQuery("#number_of_packs").val("'.$snumber_of_packs.'");';
         echo 'jQuery("#number_of_packs").trigger("change");';
      }
      if(isset($_SESSION['pTextFont']) && $_SESSION['pTextFont']!=""){
         $pTextFont = stripslashes($_SESSION['pTextFont']).";";
         echo 'jQuery("#text-font").val("'.$pTextFont.'");';
      }
      if(isset($_SESSION['pfont_size']) && $_SESSION['pfont_size']!=""){
         $pfont_size = $_SESSION['pfont_size'];
         echo 'jQuery("#text-font-size").val("'.$pfont_size.'");';
      }
      //unset($_SESSION['pTextFont']);
      //unset($_SESSION['pfont_size']);
    ?> 
    var j=k=1;
    setTimeout(function(){ 

    for(i=1;i<=10;i++){
      console.log('i',i);
      if($("#main_textbox"+i).length > 0) {
        
        $("#main_textbox"+i).draggable({ containment: ".contentArea" }).css("position", "absolute");
        $("#main_textbox"+i).resizable({ handles: 'n, e, s, w',containment: ".contentArea" });
        console.log('j',j);
        j++;
        k=i;
      }
      len=k;
      console.log('lenk',k);
    }
  }, 10000);
  
  
});

$(document).on('keyup','.design_page_title',function(){

		console.log($(this).val());//console.log($(this).attr("counter"));
    SendToSession('design_page_title',$(this).val(),'set');
		page_title=$(this).val();

    if(typeof number_of_packs == 'undefined')
			number_of_packs =0;
		 /*$(".item_page_name").empty();
		 $(".item_page_name.col-md-4").html("Page Title ");
		 $(".item_page_name.col-md-8").html(text+'<i id="item_page_name" style="cursor:pointer;" class="fa fa-window-close titleCross" aria-hidden="true"></i>');*/

    if(number_of_packs>0){

       $(".item_subtotal.col-md-8").html("Q-"+number_of_packs+" "+page_title);
       $(".item_subtotal.col-md-4").html('<strong>$'+parseInt(subtotal)*parseInt(number_of_packs)+'</strong>');

    }
 		s_title=1;
});

$(document).on('click','#draw_button',function(){

		var html ='<div id="main_box_'+len+'" style="width:200px;border:2px solid;height:200px">'+
				'<div></div>'+
				   '</div>';
		$("#working_area").append(html);
		$("#main_box_"+len).draggable();
		$("#main_box_"+len).resizable();
		current_main_box="#main_box_"+len;
		len++;
    console.log('html',html);
});
$(document).on('click','#draw_textbox',function(){
   var font_family ='';
   font_family     =$("#text-font").val();
   var font_size   = $("#text-font-size").val();
   console.log('font_family',font_family);
   if(font_family !== null || font_family !== undefined){
    console.log('font_family 950');
   }
   else{
   font_family     = font_family.replace(/"/g, "'");
   console.log(font_size+" new "+font_family);
  }
   //changeTextFont(font_family,1);
   //AdjustSize(font_size,1);
	var html ='<div class="obj_txtBox dashedBox"  id="main_textbox'+len+'"><textarea placeholder="Sample text here" style="font-family:'+font_family+'font-size:'+font_size+'px;" id="textbox'+len+'" ></textarea><i style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i><i style="cursor:pointer;" class="fa fa-clone facdrwtxtbox" aria-hidden="true"></i></div>';		  

  SendToSession('draw_textbox',len,'set');
  txtarea_id='textbox'+len;
   /*$("#"+txtarea_id).css('font-family',font_family);
   $("#"+txtarea_id).css("font-size",font_size);*/

var containerWidth = $(".contentArea").width();
var containerHeight = $(".contentArea").height();
var getCurrentBlockRight = function ($currentBlock) {
var $parent = $currentBlock.parent();

return $currentBlock.offset().left + $currentBlock.outerWidth() - $parent.offset().left - parseInt($parent.css("padding-left"), 10);

};

var getCurrentBlockBottom = function ($currentBlock) {

var $parent = $currentBlock.parent();
return $currentBlock.offset().top + $currentBlock.outerHeight() - $parent.offset().top - parseInt($parent.css("padding-top"), 10);

};

		console.log("#main_textbox"+len);		   
		$(".contentArea").append(html);
		$("#main_textbox"+len).draggable({

			 	grid: [3, 3],
				containment: ".contentArea" ,
				cancel: "text",
				start: function (){
					$("#textbox"+len).focus();
				},
				stop: function (){
					$("#textbox"+len).focus();
				},
	      drag: function(event, ui) {
		    focus_id = $(this).attr("id"); 
   } 

 		}).css("position", "absolute");
	$("#main_textbox"+len).resizable({

        //handles: 'n, e, s, w',
        //maxWidth: containerWidth,
		//maxHeight: containerHeight,
		containment: ".contentArea",
        minHeight: 2,
        minWidth: 15,

		maxWidth: containerWidth,
		maxHeight: containerHeight,
		start: function (event, ui) {
            var $currentBlock = $(this);
            var width = $(this).width();
			      var height = $(this).height();

            $currentBlock.resizable("option", "maxWidth", width + containerWidth - getCurrentBlockRight($currentBlock));
            $currentBlock.resizable("option", "maxHeight", height + containerHeight - getCurrentBlockBottom($currentBlock));
        }
    }); 
	    $("#textbox"+len).focus();
		  //focus_id = $("*:focus").attr("id");
		  focus_id = "main_textbox"+len;
		  len++;
		/*$("#main_textbox"+len).dblclick(function() {
		$(this).draggable({ disabled: true });
		$(this).resizable({ disabled: true });
		focus_id = $("*:focus").attr("id");
		$('#'+focus_id).focus();
			console.log("disabled: true");
			//alert($("*:focus").attr("id"));
			//alert('dblclick');
		});

		$("#main_textbox"+len).click(function() {
    		$(this).draggable( {disabled: false});
			$(this).resizable( {disabled: false});

			focus_id = $("*:focus").attr("id");

			$('#'+focus_id).focus();

			//alert($("*:focus").attr("id"));

			//alert('dblclick');
			console.log("disabled: false");
		});	
*/
});

//add_setof_checkbox

$(document).on('click','#add_setof_checkbox',function(){

var html ='<div id="main_textbox'+len+'" class="extraChkbox"><i style="cursor:pointer;font-size:10px;position:absolute;right:1px;z-index:2;" class="fa fa-window-close" aria-hidden="true"></i><i style="cursor:pointer;font-size:10px;position:absolute;right:1px;z-index:2;" class="fa fa-clone facsetofchkbox" aria-hidden="true"></i><div  class="withCheckBox2" title="Drag at the bottom vertically to expand checkbox"></div></div>';

SendToSession('add_setof_checkbox',len,'set');
//var containerWidth = $(".contentArea").width();
var containerHeight = $(".contentArea").height();

/*var getCurrentBlockRight = function ($currentBlock) {
	var $parent = $currentBlock.parent();
	return $currentBlock.offset().left + $currentBlock.outerWidth() - $parent.offset().left - parseInt($parent.css("padding-left"), 10);
};*/
var getCurrentBlockBottom = function ($currentBlock) {
	var $parent = $currentBlock.parent();
	return $currentBlock.offset().top + $currentBlock.outerHeight() - $parent.offset().top - parseInt($parent.css("padding-top"), 10);
};

    //$("#working_area").append(html);
	$(".contentArea").append(html);
    $("#main_textbox"+len).draggable({ containment: ".contentArea",
		grid: [2, 14],
        //snap: ".contentArea",
		drag: function(event, ui) {
			focus_id = $(this).attr("id");    
			//console.log('Dragged: ' + $(this).attr("id"));
	   }
		}).css("position", "absolute");
    $("#main_textbox"+len).resizable({
		containment: ".contentArea",
		handles: 's',
		//maxWidth: containerWidth,
		maxHeight: containerHeight,
		start: function (event, ui) {
            var $currentBlock = $(this);
            var width = $(this).width();
			      var height = $(this).height();
            //$currentBlock.resizable("option", "maxWidth", width + containerWidth - getCurrentBlockRight($currentBlock));
            $currentBlock.resizable("option", "maxHeight", height + containerHeight - getCurrentBlockBottom($currentBlock));
        }
		/*stop: function(event, ui) {
			$(this).css("width", '');
	   }*/
	}
/*
	{
        maxWidth: "20px",//containerWidth,
		maxHeight: containerHeight,
        minHeight: 32,
        minWidth: 15,
        start: function (event, ui) {
            var $currentBlock = $(this);
            var width = "20px";//$(this).width();
			var height = "60px";//$(this).height();
            //$currentBlock.resizable("option", "maxWidth", width + containerWidth - getCurrentBlockRight($currentBlock));
			$currentBlock.resizable("option", "maxWidth", "20px");
            $currentBlock.resizable("option", "maxHeight", height + containerHeight - getCurrentBlockBottom($currentBlock));
        }
    }
*/
	);



   /* $("#main_textbox"+len).dblclick(function() {

      $(this).draggable({ disabled: true });

      console.log("disabled: true");

    });



    $("#main_textbox"+len).click(function() {

        $(this).draggable( {disabled: false});

        console.log("disabled: false");



    });*/



	focus_id = "main_textbox"+len;

	len++;



});



//add_box_line_checkbox

$(document).on('click','#add_box_line_checkbox',function(){



  var html ='<div contenteditable="true" class="txtOuterArea" id="main_textbox'+len+'"><div class="withCheckBox AreaWithLines"><i style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i><i style="cursor:pointer;" class="fa fa-clone addbxlinechkbox" aria-hidden="true"></i></div></div>';



SendToSession('add_box_line_checkbox',len,'set');



var containerWidth = $(".contentArea").width();

var containerHeight = $(".contentArea").height();



var getCurrentBlockRight = function ($currentBlock) {

	var $parent = $currentBlock.parent();

	return $currentBlock.offset().left + $currentBlock.outerWidth() - $parent.offset().left - parseInt($parent.css("padding-left"), 10);

};



var getCurrentBlockBottom = function ($currentBlock) {

	var $parent = $currentBlock.parent();

	return $currentBlock.offset().top + $currentBlock.outerHeight() - $parent.offset().top - parseInt($parent.css("padding-top"), 10);

};

    //$("#working_area").append(html);

	$(".contentArea").append(html);



  $("#main_textbox"+len).draggable({ containment: ".contentArea",

	grid: [3, 3], 

	drag: function(event, ui) {

		focus_id = $(this).attr("id");    

        //console.log('Dragged: ' + $(this).attr("id"));

   }

   }).css("position", "absolute");



    $("#main_textbox"+len).resizable({

	containment: ".contentArea",

    handles: 'n, e, s, w',

    maxWidth: containerWidth,

	  maxHeight: containerHeight,



        minHeight: 32,

        minWidth: 15,



        start: function (event, ui) {

            var $currentBlock = $(this);

            var width = $(this).width();

			var height = $(this).height();

            $currentBlock.resizable("option", "maxWidth", width + containerWidth - getCurrentBlockRight($currentBlock));

            $currentBlock.resizable("option", "maxHeight", height + containerHeight - getCurrentBlockBottom($currentBlock));

        }

    }

	);

   /* $("#main_textbox"+len).dblclick(function() {

      $(this).draggable({ disabled: true });

      console.log("disabled: true");

    });

    $("#main_textbox"+len).click(function() {

        $(this).draggable( {disabled: false});

        console.log("disabled: false");

    });*/

		focus_id = "main_textbox"+len;

		len++;

});



$(document).on('click','#add_box_line,#add_set_of_lines',function(){



  console.log(this.id);

  

  if(this.id == 'add_box_line'){

        var classname='txtOuterArea';

        var faclass='facadd_box_line';

        SendToSession('add_box_line',len,"set");

  }else{

        var classname='txtOuterAreaNoBorder';

        var faclass='facadd_set_of_lines';

        SendToSession('add_set_of_lines',len,"set");

  }



  var html ='<div contenteditable="true" class="'+classname+'" id="main_textbox'+len+'"><div class="AreaWithLines"><i class="fa fa-clone '+faclass+'" aria-hidden="true" style="cursor:pointer;"></i><i style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>'+



        '</div></div>';



  var containerWidth = $(".contentArea").width();

  var containerHeight = $(".contentArea").height();

  var getCurrentBlockRight = function ($currentBlock) {

	var $parent = $currentBlock.parent();

	return $currentBlock.offset().left + $currentBlock.outerWidth() - $parent.offset().left - parseInt($parent.css("padding-left"), 10);

};



  var getCurrentBlockBottom = function ($currentBlock) {

	var $parent = $currentBlock.parent();

	return $currentBlock.offset().top + $currentBlock.outerHeight() - $parent.offset().top - parseInt($parent.css("padding-top"), 10);

};

    console.log("#main_textbox"+len);      

    //$("#working_area").append(html);

	  $(".contentArea").append(html);

    $("#main_textbox"+len).draggable({ containment: ".contentArea",

		grid: [3, 3], 

	  drag: function(event, ui) {

		focus_id = $(this).attr("id");    

        //console.log('Dragged: ' + $(this).attr("id"));

   }

   }).css("position", "absolute");



    $("#main_textbox"+len).resizable({

		containment: ".contentArea",

    	handles: 'n, e, s, w',

    	maxWidth: containerWidth,

		  maxHeight: containerHeight,



        minHeight: 32,

        minWidth: 15,

        start: function (event, ui) {

            var $currentBlock = $(this);

            var width = $(this).width();

			      var height = $(this).height();

            $currentBlock.resizable("option", "maxWidth", width + containerWidth - getCurrentBlockRight($currentBlock));

            $currentBlock.resizable("option", "maxHeight", height + containerHeight - getCurrentBlockBottom($currentBlock));

        }

    }

	);



  focus_id = "main_textbox"+len;

	len++;



});



$(document).on('click','#add_singleline',function(){



 var html ='<div id="main_textbox'+len+'"><i style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i><i style="cursor:pointer;" class="fa fa-clone facaddsngllne" aria-hidden="true"></i>'+

			'<div class="divederRow"></div>'+

        '</div>';

SendToSession('add_singleline',len,'set');        

var containerWidth = $(".contentArea").width();

var containerHeight = $(".contentArea").height();

var getCurrentBlockRight = function ($currentBlock) {

	var $parent = $currentBlock.parent();

	return $currentBlock.offset().left + $currentBlock.outerWidth() - $parent.offset().left - parseInt($parent.css("padding-left"), 10);

};

var getCurrentBlockBottom = function ($currentBlock) {

	var $parent = $currentBlock.parent();

	return $currentBlock.offset().top + $currentBlock.outerHeight() - $parent.offset().top - parseInt($parent.css("padding-top"), 10);

};

    console.log("#main_textbox"+len);     

	$(".contentArea").append(html);

    $("#main_textbox"+len).draggable({ containment: ".contentArea",

	grid: [3, 3],

	drag: function(event, ui) {

		focus_id = $(this).attr("id");    

        //console.log('Dragged: ' + $(this).attr("id"));

    }

	}).addClass('AreaWithSingleLines').css("position", "absolute");

    $("#main_textbox"+len).resizable({

		containment: ".contentArea",

		maxWidth: containerWidth,

		handles: 'e, w'

	});

	focus_id = "main_textbox"+len;

	len++;

});



$(document).on('click','#add_singleline_v',function(){



  var html ='<div id="main_textbox'+len+'"><i style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i><i style="cursor:pointer;" class="fa fa-clone facsngllinev" aria-hidden="true"></i>'+

			'<div class="divederRow_v"></div>'+

        '</div>';

SendToSession('add_singleline_v',len,'set');



var containerWidth = $(".contentArea").width();

var containerHeight = $(".contentArea").height();



var getCurrentBlockRight = function ($currentBlock) {

	var $parent = $currentBlock.parent();

	return $currentBlock.offset().left + $currentBlock.outerWidth() - $parent.offset().left - parseInt($parent.css("padding-left"), 10);

};



  var getCurrentBlockBottom = function ($currentBlock) {

	var $parent = $currentBlock.parent();

	return $currentBlock.offset().top + $currentBlock.outerHeight() - $parent.offset().top - parseInt($parent.css("padding-top"), 10);

};     



	$(".contentArea").append(html);

  $("#main_textbox"+len).draggable({ containment: ".contentArea",

	grid: [3, 3],

	drag: function(event, ui) {

		focus_id = $(this).attr("id");    

        //console.log('Dragged: ' + $(this).attr("id"));

   }

   }).addClass('AreaWithSingleLines_v').css("position", "absolute");



    $("#main_textbox"+len).resizable({

		containment: ".contentArea",

		maxHeight: containerHeight,

		handles: 's, n'

	});

 	focus_id = "main_textbox"+len;

    len++;

});



$(document).on('click','#add_box_noline',function(){



  var html ='<div contenteditable="true" class="txtOuterArea BoxWithNoLine" id="main_textbox'+len+'"><i style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i><i style="cursor:pointer;" class="fa fa-clone addbxnlne" aria-hidden="true"></i>'+

        '</div>';

SendToSession("add_box_noline",len,'set');



var containerWidth = $(".contentArea").width();

var containerHeight = $(".contentArea").height();

var getCurrentBlockRight = function ($currentBlock) {

	var $parent = $currentBlock.parent();

	return $currentBlock.offset().left + $currentBlock.outerWidth() - $parent.offset().left - parseInt($parent.css("padding-left"), 10);

};



var getCurrentBlockBottom = function ($currentBlock) {

	var $parent = $currentBlock.parent();

	return $currentBlock.offset().top + $currentBlock.outerHeight() - $parent.offset().top - parseInt($parent.css("padding-top"), 10);

};



    console.log("#main_textbox"+len);      



    //$("#working_area").append(html);

    $(".contentArea").append(html);



    $("#main_textbox"+len).draggable({ containment: ".contentArea",

	grid: [3, 3], 

	drag: function(event, ui) {

		focus_id = $(this).attr("id");    

        //console.log('Dragged: ' + $(this).attr("id"));

   } }).css("position", "absolute");



    $("#main_textbox"+len).resizable({

		containment: ".contentArea",

        handles: 'n, e, s, w',

        maxWidth: containerWidth,

		    maxHeight: containerHeight,

        minHeight: 32,

        minWidth: 15,

        start: function (event, ui) {



            var $currentBlock = $(this);

            var width = $(this).width();

			      var height = $(this).height();



            $currentBlock.resizable("option", "maxWidth", width + containerWidth - getCurrentBlockRight($currentBlock));

            $currentBlock.resizable("option", "maxHeight", height + containerHeight - getCurrentBlockBottom($currentBlock));

        }



    });



    $("#main_textbox"+len).dblclick(function() {



      $(this).draggable({ disabled: true });

      console.log("disabled: true");

    });







    $("#main_textbox"+len).click(function() {



        $(this).draggable( {disabled: false});

        console.log("disabled: false");



    });

    //len++;

		focus_id = "main_textbox"+len;

		len++;

});



$(document).on('click','#add_checkbox',function(){



  var html ='<div class="add_checkbox" id="main_textbox'+len+'" ><i style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>'+

    '<span class="objMove" style=""><!--<input type="checkbox" value="" name="main_checkbox'+len+'" id="main_checkbox'+len+'"/>--></span>'+

        '</div>';



    SendToSession("add_singleline_v",len,'set');

    console.log("#main_textbox"+len); 

    //$("#working_area").append(html);

	  $(".contentArea").append(html);

    $("#main_textbox"+len).draggable({ containment: ".contentArea" }).css("position", "absolute");



    len++;



});







function textbox_fontsize(len){



		var font_size_append='<div class="form-group" id="font_size'+len+'"><span>Font Size</span><div class=""><input id="font_size'+len+'" name="font_size'+len+'" counter="'+len+'" type="number" min="10" max="300" value="" class="font_sizee"/></div></div>';



		return font_size_append;



}



function textbox_fontcolor(len){	



		var font_color='<div class="form-group" id="font_color'+len+'"><input type="hidden" style="width:100px;" class="mycolor" counter="'+len+'" /><label for="cover_color">Font Color</label></div>';

		return font_color;

}



$(document).on('change','.font_sizee',function(){



	console.log($(this).val());console.log($(this).attr("counter"));

	var counter=$(this).attr("counter");

	var div_span_id = "#main_textbox"+counter+" span";

	console.log(div_span_id);



	$(div_span_id).css({



    	fontSize: parseInt($(this).val())



  });



});



$(".mycolor").on("change.color", function(event, color){



    //$('#title').css('background-color', color);

	console.log($(this).attr("counter"));

	var counter=$(this).attr("counter");

	var div_span_id = "#main_textbox"+counter+" span";

	console.log(div_span_id);



	$(div_span_id).css({

     color: color

	});

});



$(document).on("change",".mycolor", function(event, color){



    //$('#title').css('background-color', color);



	console.log($(this).val());

	console.log($(this).attr("counter"));

	var counter=$(this).attr("counter");

	var div_span_id = "#main_textbox"+counter+" span";

	console.log(div_span_id);

	$(div_span_id).css({

     color: $(this).val()

	});

});



$(document).on('click','.cover_icolor',function(){







		var titletext=$(this).attr("title");

		if(titletext == 'Remove'){

			$(".item_cover_icolor").empty();

			if(subtotal>=20)

			subtotal -=20;

			if(subtotal == 0){

				$(".item_subtotal").empty();

			   }

			}

		else{



			$(".item_cover_icolor").empty();

			$(".item_subtotal").empty();

			$(".item_cover_icolor.col-md-8").html(titletext+' Cover');

			$(".item_cover_icolor.col-md-4").html('<strong>$20</strong>&nbsp;&nbsp;<i id="item_cover_icolor" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');



			if(c_cover==0){

    		   subtotal +=20;

			}

			$(".item_subtotal.col-md-8").html('Subtotal');

			$(".item_subtotal.col-md-4").html('<strong>$'+subtotal+'</strong>');

			c_cover=1;

		}

});



$(document).on('click','.fa-window-close',function(){



		var div_id = $(this).parent().attr("id");

		console.log(div_id);

		if(typeof div_id != "undefined") {



			$("#"+div_id).remove();

			console.log(div_id+" Div Removed");



		}

		else{



			  var classname = $(this).attr("id");

			  if(typeof classname == "undefined") {

				var div_id = $(this).parent().parent().attr("id");

				$("#"+div_id).remove();

				console.log(div_id+" 2nd level Div Removed");

			  }

        else{



			  	

          if(classname =='item_cover_icolor'){

            SendToSession('page_per_pack',"","destroy");

            console.log('c_cover '+c_cover);

            if(c_cover>0){

             console.log(s_initial+" s_initial subtotal before"); 

             subtotal=parseInt(subtotal)-parseInt(s_initial);

             c_cover = s_initial =0;

             console.log(subtotal+" subtotal after"); 

            } 

          }

          if(classname =='item_cover_biwt'){

            SendToSession('color_page_add',"","destroy");

            SendToSession('biwt_page_add',"","destroy");

            console.log('sel_cntinfo '+sel_cntinfo);

            if(sel_cntinfo>0){

             subtotal=subtotal-sel_cntinfo;

             sel_cntinfo = 0;

            } 





          }

          if(classname =='item_print_design'){

            SendToSession('printdesign',"","destroy");

            console.log('s_title '+s_title);

            if(s_title>0){

             subtotal=subtotal-s_title;

             s_title = 0;

            } 

          }



          $("."+classname).empty();

          $("#design_page_title").val("");

          console.log(classname+" Class Removed");

			  

        }

			  

		}

  if(subtotal <= 0){

      console.log(subtotal+" <=0");

      $(".item_subtotal").empty();

      /*var s_all=['number_of_cover','cover_name','cover_icolor','cover_icolor','disc_icolor','lg','sm','title_page','title_page2','initial_page','i_initial_page','emb_color','TextFont_title_page','TextFont_initial_page','TextFont_i_initial_page','AdjustSize_title_page','AdjustSize_initial_page','AdjustSize_i_initial_page,icon'];

      for(i=0;i<=s_all.length;i++){

        console.log(s_all[i]);

        SendToSession(s_all[i],'','destroy');

      }*/

      





    }else if(subtotal > 0){

      console.log(subtotal+" >0");

      //$(".item_subtotal").empty();

      $(".item_subtotal.col-md-8").html("Q-"+number_of_packs+" "+page_title);

      $(".item_subtotal.col-md-4").html('<strong>$'+parseInt(subtotal)*parseInt(number_of_packs)+'</strong>');

    }  

});



function AdjustSize(val,s_no){





	var res = val;

	console.log('AdjustSizer',res);

  console.log('AdjustSizet',txtarea_id);

  console.log('AdjustSizes',s_no);

	if(s_no == 1){



		$("#"+txtarea_id).css('font-size',res+ "px");

		console.log('1 ' ,s_no);

    SendToSession("pfont_size",res,'set');

	}



}







function changeTextFont(val,s_no){



  console.log('val ctf',val);

  console.log('s_no ctf',s_no);

	//var strnew = val.substr(0, strnew.length-1);

	var res = val.replace(";", "");

	//console.log(res);

  console.log('changeTextFontr',res);

  console.log('changeTextFontt',txtarea_id);

  console.log('AchangeTextFonts',s_no);

  SendToSession("pTextFont",res,'set');

	if(s_no == 1){

   // res     = res.replace(/"/g, "'");

		$("#"+txtarea_id).css('font-family',res);

		console.log('txtarea_id in ctf',txtarea_id);

	}



}



$(document).on('change','#number_of_packs',function(){



		    var sel_val = $("#number_of_packs option:selected" ).val();

			//size_add=subtotal;

		    number_of_packs = sel_val;

        SendToSession("number_of_packs",number_of_packs,'set');

		    

       if(number_of_packs == 0){

        $(".item_cover_icolor").hide();

        $(".item_print_design").hide();

        $(".item_cover_biwt").hide();

        $(".item_subtotal").hide();

       }else{

        $(".item_cover_icolor").show();

        $(".item_print_design").show();

        $(".item_cover_biwt").show();

        $(".item_subtotal").show();

       }			



			$(".item_subtotal.col-md-8").html('Q-'+number_of_packs+" "+page_title);

			$(".item_subtotal.col-md-4").html('<strong>$'+parseInt(number_of_packs)*parseInt(subtotal)+'</strong>');



			c_cover=1;



      if(subtotal ==0){

        console.log(subtotal);

        $(".item_subtotal").hide();

        SendToSession("number_of_packs","",'destroy');

      }

		

});

$(document).on('change','#page_per_pack',function(){

	

	var sel_text=sel_val=pd_val='';

	    sel_val  = $("#page_per_pack option:selected" ).val();

	    sel_text = $("#page_per_pack option:selected" ).text();

      pd_val   = $("#printdesign option:selected" ).val();

	//sel_text = sel_text.slice(0,-8);

  console.log(sel_val+" ==== "+sel_text);

	SendToSession("page_per_pack",sel_val,'set');

	if(sel_val != ""){

		c_cover=1;	

	}

	else if(sel_val == ""){

		c_cover=0;	

	}

	

	if(s_title>0){

    	subtotal -=s_title;

	}

	

	var total = 0;

	if(sel_val == '100biwt' ){

		 if(pd_val == 1){

        total = 15;

        sel_text=sel_text+'/One Sided';

     }

     else if(pd_val == 2){

        total = 24;

        sel_text=sel_text+'/Two Sided'; 

     }

	}

  

  else if(sel_val == '200biwt' ){

     if(pd_val == 1){

        total = 24;

        sel_text=sel_text+'/One Sided';

     }

     else if(pd_val == 2){

        total = 40;

        sel_text=sel_text+'/Two Sided'; 

     }

  }

	

	s_title=total;



  if(number_of_packs == 0){

     $(".item_cover_icolor").hide();

     $(".item_print_design").hide();

     $(".item_cover_biwt").hide();

     $(".item_subtotal").hide();

  }else{

    $(".item_cover_icolor").show();

    $(".item_print_design").show();

    $(".item_cover_biwt").show();

    $(".item_subtotal").show();

    

  }

	

	    $(".item_cover_icolor").empty();

			$(".item_subtotal").empty();

			$(".item_print_design.col-md-8").html(sel_text);

			$(".item_print_design.col-md-4").html('<strong>$'+total+'</strong>&nbsp;&nbsp;<i id="item_cover_icolor" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');

			

			if(c_cover==1){

    		   subtotal +=total;

			}



			$(".item_subtotal.col-md-8").html('Q-'+number_of_packs+" "+page_title);



			$(".item_subtotal.col-md-4").html('<strong>$'+parseInt(number_of_packs)*parseInt(subtotal)+'</strong>');

      console.log(subtotal+" subtotal ");

			c_cover=1;

      if(subtotal ==0){

        console.log(subtotal);

        $(".item_subtotal").hide();

        

      }



		

});





function AddIcon(val){

	

	console.log(val);

	var res = val;

	if(val == ""){

		console.log(cover_icon);

	 	html='';

	}

  var facaddicn='';

	if(val == 1){

	 html='<img class="page-icon" src="<?php echo site_url();?>/wp-content/uploads/asset/star-Black.png" width="16" height="16">';

   facaddicn='facaddicn1'; 

	}

	else if(val == 2){

	 html='<img class="page-icon" src="<?php echo site_url();?>/wp-content/uploads/asset/star2-Black.png" width="16" height="16">';

   facaddicn='facaddicn2';

	}



	$(".contentArea").append('<div class="icon_in_working_area icon_add" id="icon_add'+len+'"><i style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i><i style="cursor:pointer;" class="fa fa-clone '+facaddicn+'" aria-hidden="true"></i>'+html+'</div>');



	var containerWidth = $(".contentArea").width();

	var containerHeight = $(".contentArea").height();

	

	var getCurrentBlockRight = function ($currentBlock) {

	  var $parent = $currentBlock.parent();

	  return $currentBlock.offset().left + $currentBlock.outerWidth() - $parent.offset().left - parseInt($parent.css("padding-left"), 10);

	};

	

	var getCurrentBlockBottom = function ($currentBlock) {

	  var $parent = $currentBlock.parent();

	  return $currentBlock.offset().top + $currentBlock.outerHeight() - $parent.offset().top - parseInt($parent.css("padding-top"), 10);

	};



	$(".icon_in_working_area").draggable({ containment: ".contentArea",

	grid: [3, 3],

	drag: function(event, ui) {

		focus_id = $(this).attr("id");    

        //console.log('Dragged: ' + $(this).attr("id"));

   }

   }).css("position", "absolute");

  $(".icon_in_working_area").resizable({ 

  	

		aspectRatio: true,

		containment: ".contentArea", 

		

		maxWidth: containerWidth,

		maxHeight: containerHeight,

  

        start: function (event, ui) {

            var $currentBlock = $(this);

            var width = $(this).width();

      		var height = $(this).height();

            $currentBlock.resizable("option", "maxWidth", width + containerWidth - getCurrentBlockRight($currentBlock));

            $currentBlock.resizable("option", "maxHeight", height + containerHeight - getCurrentBlockBottom($currentBlock));

        }

  });



	$("#text-select-icon").val("");

	focus_id = "icon_add"+len;

	len++;

	

	

}



function AddShape(val){



	console.log(val);

	var res = val;

	if(val == ""){

		console.log(cover_icon);

	 	html='';

	}

  var cloneclass=''; 

	if(val == 1){

	 html='<div class="shape-square"></div>';

   cloneclass='s1';

	}

	else if(val == 2){

	 html='<div class="shape-circle"></div>';

   cloneclass='s2';

	} 

  else if(val == 3){

   html='<div class="shape-square noborder"></div>';

   cloneclass='s3';

  } 

  else if(val == 4){

   html='<div class="shape-circle noborder"></div>';

   cloneclass='s4';

  } 



	$(".contentArea").append('<div class="icon_in_working_area icon_add shapeOuter" id="shape_add'+len+'"><i style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i><i class="fa fa-clone '+cloneclass+'" aria-hidden="true" style="cursor:pointer;"></i>'+html+'</div>');



var containerWidth = $(".contentArea").width();

var containerHeight = $(".contentArea").height();



var getCurrentBlockRight = function ($currentBlock) {

  var $parent = $currentBlock.parent();

  return $currentBlock.offset().left + $currentBlock.outerWidth() - $parent.offset().left - parseInt($parent.css("padding-left"), 10);

};



var getCurrentBlockBottom = function ($currentBlock) {

  var $parent = $currentBlock.parent();

  return $currentBlock.offset().top + $currentBlock.outerHeight() - $parent.offset().top - parseInt($parent.css("padding-top"), 10);

};



	$(".icon_in_working_area").draggable({ containment: ".contentArea",

	grid: [3, 3],

	drag: function(event, ui) {

		focus_id = $(this).attr("id");    

        //console.log('Dragged: ' + $(this).attr("id"));

   }

   }).css("position", "absolute");

   

	$(".icon_in_working_area").resizable({

	

		containment: ".contentArea",

		handles: 'n, e, s, w',

		maxWidth: containerWidth,

		maxHeight: containerHeight,

  

        start: function (event, ui) {

            var $currentBlock = $(this);

            var width = $(this).width();

      		var height = $(this).height();

            $currentBlock.resizable("option", "maxWidth", width + containerWidth - getCurrentBlockRight($currentBlock));

            $currentBlock.resizable("option", "maxHeight", height + containerHeight - getCurrentBlockBottom($currentBlock));

        }

		

		 });



	$("#text-select-shape").val("");

 

		//$("#icon_add"+len).focus();

		focus_id = "shape_add"+len;

		len++;  

}



$(document).on("click",".ui-draggable",function(){

	focus_id = $(this).attr("id"); 

	console.log('Focused: '+focus_id); 

});



$(document).on("click",".pagecolor_option",function(){

  

   console.log("pagecolor_option hits");

   console.log(this.id);

   var pval = this.id;

   var total = 0;

  if(pval != ""){

    colorpage=1;  

  }

  else if(pval == ""){

    colorpage=0;  

  }

  

  if(sel_cntinfo>0){

      subtotal -=sel_cntinfo;

  }

  

   if(pval == "color_page_add"){

    sel_text='Color Page';

    total=50;

    SendToSession("color_page_add",'Color Page','set');

    SendToSession("biwt_page_add",'','destroy');

   }

   else if(pval =="biwt_page_add"){

    sel_text='Black/White Page';

    total=30;

    SendToSession("biwt_page_add",'Black/White Page','set');

    SendToSession("color_page_add",'','destroy');

   }



   sel_cntinfo=total;

   if(number_of_packs == 0){

       $(".item_cover_icolor").hide();

       $(".item_print_design").hide();

       $(".item_cover_biwt").hide();

       $(".item_subtotal").hide();

  }else{

       $(".item_cover_icolor").show();

       $(".item_print_design").show();

       $(".item_cover_biwt").show();

       $(".item_subtotal").show();

  }

  

      $(".item_cover_biwt").empty();

      $(".item_subtotal").empty();

      $(".item_cover_biwt.col-md-8").html(sel_text);

      $(".item_cover_biwt.col-md-4").html('<strong>$'+total+'</strong>&nbsp;&nbsp;<i id="item_cover_biwt" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');

        console.log(subtotal);   

        subtotal +=total;

           

        console.log(subtotal);

        $(".item_subtotal.col-md-8").html('Q-'+number_of_packs+" "+page_title);

        $(".item_subtotal.col-md-4").html('<strong>$'+parseInt(number_of_packs)*parseInt(subtotal)+'</strong>');

});



$(document).on("change",".printdesign",function(){

  

   console.log("printdesign hits");

   console.log($("#printdesign").val());

   var pval=ppp=pppv='';

       pval = $("#printdesign").val();

       ppp  = $("#page_per_pack option:selected" ).text();

       pppv = $("#page_per_pack" ).val();

   var total = 0;

  if(pval != ""){

    printdesign=1;  

  }

  else if(pval == ""){

    printdesign=0;  

  }

  

  if(s_title>0){

      subtotal -=s_title;

      console.log(s_title+' -ive');

  }

  

   if(pval == 1){

    sel_text=ppp+'/One sided';

    if(pppv=='100biwt')

      total=15;

    else if(pppv == '200biwt')

      total=24;

    SendToSession("printdesign",'1','set');

   }

   else if(pval ==2){

    sel_text=ppp+'/Two sided';

    if(pppv=='100biwt')

      total=24;

    else if(pppv == '200biwt')

      total=40;

    SendToSession("printdesign",'2','set');

   }else{

    sel_text=ppp;

   }

   s_title=total;

   console.log('s_title',s_title);

   if(number_of_packs == 0){

       $(".item_cover_icolor").hide();

       $(".item_print_design").hide();

       $(".item_cover_biwt").hide();

       $(".item_subtotal").hide();

  }else{

       $(".item_cover_icolor").show();

       $(".item_print_design").show();

       $(".item_cover_biwt").show();

       $(".item_subtotal").show();

  }

  

      $(".item_print_design").empty();

      $(".item_subtotal").empty();

      $(".item_print_design.col-md-8").html(sel_text);

      $(".item_print_design.col-md-4").html('<strong>$'+total+'</strong>&nbsp;&nbsp;<i id="item_print_design" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');

      console.log('before',subtotal);

      if(subtotal<0)

         subtotal=0;

     

           subtotal +=total;

           

     

      console.log('after',subtotal);

      $(".item_subtotal.col-md-8").html('Q-'+number_of_packs+" "+page_title);

      $(".item_subtotal.col-md-4").html('<strong>$'+parseInt(number_of_packs)*parseInt(subtotal)+'</strong>');



      

  



});



$(document).on("click",".obj_txtBox",function(){

	

	 console.log("textbox clicked");

	 console.log(this.id);

	 var div_id = this.id;

	 var textarea_div = div_id.slice(5);

	 console.log('t',textarea_div);

	 $("#"+textarea_div).focus();

	 txtarea_id=textarea_div;

	 focus_id = $(this).attr("id");

	 console.log('f',focus_id);

   var font_size   = $("#"+txtarea_id).css("font-size");

   var font_family = $("#"+txtarea_id).css("font-family");

   console.log("before "+font_size+" "+font_family+";");

    if(typeof value !== "undefined") {

     font_family     = font_family.replace(/"/g, "'");

	  }

   font_family=font_family.replace(/"/g,"'");

   console.log("after "+font_size+" "+font_family+";");

   $("#text-font").val(font_family+";");

   $("#text-font-size").val(parseInt(font_size));

   

});

//fatxtOuterArea

$(document).on("click",".facadd_box_line,.s1,.s2,.s3,.s4,.facsetofchkbox,.facdrwtxtbox,.addbxlinechkbox,.facaddsngllne,.facsngllinev,.facaddicn1,.facaddicn2,.addbxnlne",function(){

        var clk_class= $(this).attr('class');

        clk_class=clk_class.replace("fa fa-clone ", "");

        if(clk_class == "facadd_box_line")

           jQuery("#add_box_line").trigger("click");

        else if(clk_class == "s1")

           AddShape(1);

        else if(clk_class == "s2")

           AddShape(2);

        else if(clk_class == "s3")

           AddShape(3);

        else if(clk_class == "s4")

           AddShape(4);

        else if(clk_class == "facsetofchkbox")

           jQuery("#add_setof_checkbox").trigger("click");

        else if(clk_class == "facdrwtxtbox")

           jQuery("#draw_textbox").trigger("click");

        else if(clk_class == "addbxlinechkbox")

           jQuery("#add_box_line_checkbox").trigger("click");

        else if(clk_class == "facaddsngllne")

           jQuery("#add_singleline").trigger("click");

        else if(clk_class == "facsngllinev")

           jQuery("#add_singleline_v").trigger("click");

        else if(clk_class == "facaddicn1")

           AddIcon(1);

        else if(clk_class == "facaddicn2")

           AddIcon(2);

        else if(clk_class == "addbxnlne") 

           jQuery("#add_box_noline").trigger("click");         

         



        console.log($(this).attr('class'));

});

$(document).on("click",".fatxtOuterArea",function(){

/*

    var div4clone = $(this).parent().parent().attr("id");

    console.log("div id for clone "+div4clone);

    console.log($("#"+div4clone).html());

    var div4clone_html = $("#"+div4clone).html();

    console.log("div4clone_html "+div4clone_html);

    var classname='txtOuterArea';

    var html ='<div contenteditable="true" class="'+classname+'" id="main_textbox'+len+'">'+div4clone_html+'</div>';





var containerWidth = $(".contentArea").width();

var containerHeight = $(".contentArea").height();



var getCurrentBlockRight = function ($currentBlock) {

  var $parent = $currentBlock.parent();

  return $currentBlock.offset().left + $currentBlock.outerWidth() - $parent.offset().left - parseInt($parent.css("padding-left"), 10);

};



var getCurrentBlockBottom = function ($currentBlock) {

  var $parent = $currentBlock.parent();

  return $currentBlock.offset().top + $currentBlock.outerHeight() - $parent.offset().top - parseInt($parent.css("padding-top"), 10);

};



  



    console.log("#main_textbox"+len);      



    //$("#working_area").append(html);



  $(".contentArea").append(html);



    $("#main_textbox"+len).draggable({ containment: ".contentArea",

    grid: [3, 3], 

    drag: function(event, ui) {

    focus_id = $(this).attr("id");    

        //console.log('Dragged: ' + $(this).attr("id"));

   }

   }).css("position", "absolute");



    $("#main_textbox"+len).resizable({

		containment: ".contentArea",

		handles: 'n, e, s, w',

		maxWidth: containerWidth,

		maxHeight: containerHeight,



        minHeight: 32,

        minWidth: 15,



        start: function (event, ui) {

            var $currentBlock = $(this);

            var width = $(this).width();

      		var height = $(this).height();

            $currentBlock.resizable("option", "maxWidth", width + containerWidth - getCurrentBlockRight($currentBlock));

            $currentBlock.resizable("option", "maxHeight", height + containerHeight - getCurrentBlockBottom($currentBlock));

        }



    }



  



  );



  focus_id = "main_textbox"+len;

  len++;

*/

});

function hide_before_screen_capture(){



	  $('.ui-resizable').each(function() {

			//alert( this.id );

		 $("#"+this.id).resizable({ disabled: true });

	  });

	 $(".fa-window-close").css('visibility', 'hidden');

	 $(".extraChkbox").css('border-color', 'transparent');

	 $(".dashedBox").css('border-color', 'transparent');

	 $(".contentArea").css('border-color', 'transparent'); 

	 $(".BoxWithNoLine").css('border-color', '#404040');

	 $(".AreaWithSingleLines").css('border-color', 'transparent');

	 $(".page-icon").css('border-color', 'transparent');

	 $(".shapeOuter").css('border-color', 'transparent'); 

	 //$(".txtOuterArea").css('border', '1px solid #404040');

   //$(".snap-bg").css('background-image', 'none');

   $(".fa-clone").css('visibility', 'hidden');

}



function show_after_screen_capture(){

	

	 $(".fa-window-close").css('visibility', 'visible');

	 $(".extraChkbox").css('border-color', '#dedede');

	 $(".dashedBox").css('border-color', '#dedede');

	 $(".contentArea").css('border-color', '#f4f4f4');

	 $(".BoxWithNoLine").css('border-color', '#404040');

	 $(".AreaWithSingleLines").css('border-color', '#dedede');

	 $(".page-icon").css('border-color', '#dedede');

	 $(".shapeOuter").css('border-color', '#dedede'); 	

	 //$(".txtOuterArea").css('border', '0px solid #404040');

   $(".fa-clone").css('visibility', 'visible');

   //var imageUrl=theme_directory_uri+"/images/snap-bg.png";

   //$(".snap-bg").css('background-image', 'url("' + imageUrl + '")');

	 $('.ui-resizable').each(function() {

		//alert( this.id );

		$("#"+this.id).resizable({ disabled: false });

	 });		

		

	

}



$(document).on('click','#pd_page_design',function(e){



	 

	 $([document.documentElement, document.body]).animate({



        scrollTop: $(".site-header").offset().top



    }, 0);

	 hide_before_screen_capture();

	 html2canvas($("#working_area"), {



                onrendered: function (canvas) {

                var imageStr2 = canvas.toDataURL('png');

                var rawData2 = canvas.toDataURL("image/png");

				        rawData2 = rawData2.substr("data:image/png;base64,".length);

		            $("#page_design_preview").attr("src",imageStr2);

				        //console.log(imageStr2);

				        //window.open(imageStr2);

				        $('#exampleModal').modal('show');

				        show_after_screen_capture();
            },
            logging: true,
        });
})
$(document).on('click','#add_to_wishlist',function(e){
  add_to_wishlist=1;
  $("#pydgos").trigger("click");
});
$(document).on('click','#pydgos',function(e){
  $([document.documentElement, document.body]).animate({
        scrollTop: $(".site-header").offset().top
    }, 0);
	$(".loader").css('display', 'block');
	hide_before_screen_capture();
	html2canvas($("#working_area"), {
        onrendered: function (canvas) {
        var imageStr2 = canvas.toDataURL('png');
        var rawData2 = canvas.toDataURL("image/png");
				rawData2 = rawData2.substr("data:image/png;base64,".length);
				var img_name          = 'page_design';
        var datasend          = 'calender';
        var design_page_title = $("#design_page_title").val();
        var contentArea       = $(".contentArea").html();
        //alert(contentArea);
        var j_string = {};
        j_string['design_page_title']=$("#design_page_title").val();
        j_string['contentArea']      =$(".contentArea").html();
        j_string['page_per_pack']    =$("#page_per_pack").val();
        j_string['printdesign']      =$("#printdesign").val();
        j_string['number_of_packs']  =$("#number_of_packs").val();
        var s_textarea="";
        $('textarea').each(function(){    
         var id       = $(this).attr('id');
         var value    = $(this).val();
         if(value !=""){
          s_textarea +=id+"="+value+"&";
          console.log('id w val'+id+" "+value);
         }
         
        });
        j_string['textarea']=s_textarea;
        var json_data = JSON.stringify(j_string);
        //alert(json_data);
				console.log(imageStr2);
                jQuery.ajax({
                    type: 'POST',
                    url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",
                    data: {
                        action         : 'cover_page_add_to_gallery',
                        image          : imageStr2,
                        page_name      :img_name,
                        page_title     :design_page_title,
                        p_id           :41,
                        variation_id   :51,
                        add_to_wishlist:add_to_wishlist,
                        json_data      :json_data,
                        price          :subtotal
                    },
                    //dataType: 'json',
                    encode: true,
                    success: function (data_return) {
                        console.log(data_return);
						            show_after_screen_capture();
							          $(".loader").css('display', 'none');
                        if(data_return==0){
                            //alert("Please log in to add Wishlist");
                            $("#showloginmsg").modal('show');
                        }else{
							              alert("Design have been saved successfully");
                        }
							          if(add_to_wishlist==1){
							             	add_to_wishlist=0;
							          }
            },
            logging: true,
        });
			}
	});
});
function canvasSaveImage() {
        var qnt = $("#number_of_packs").val();
        console.log('qnt',qnt);
        if(qnt==""){
            alert("Please select atleast 1 Number of Pack");
            return false;
        }
//var r = confirm("Press OK to continues to Cart Page");
 //if (r == true) {
    $( function() {
    $( "#dialog" ).dialog();
    $( "#dialog" ).show();
  } );
    $([document.documentElement, document.body]).animate({
        scrollTop: $(".site-header").offset().top}, 0);

		$(".loader").css('display', 'block');
		hide_before_screen_capture();
        html2canvas($("#working_area"), {
            onrendered: function (canvas) {
                var imageStr2 = canvas.toDataURL('png');
                var rawData2 = canvas.toDataURL("image/png");
				        rawData2 = rawData2.substr("data:image/png;base64,".length);
                var img_name = 'Adil';
                var datasend = 'adil';
				        console.log(imageStr2);
                jQuery.ajax({
                    type: 'POST',
                    url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",
                    data: {
                        action: 'canvas_funtion',
                        image: imageStr2,
                        img_name: img_name
                    },
                    dataType: 'json',
                    encode: true,
                    success: function (data_return) {
                        var image_id = data_return['image_id'];
						            //var image_url = data_return['image_url'];
						            show_after_screen_capture();
                        console.log(image_id);
						            //console.log(image_url);
                        SendToSession("contentArea",jQuery(".contentArea").html(),'set');
                        addToCart(image_id);
                    }
                });
            },
            logging: true,
            //width: 3250,
            //height: 3183
        });
		     //$(".loader").css('display', 'none');
        //txt = "You pressed OK!";
     //}
    }
 function addToCart(image_id) {
    var design_page_title = $("#design_page_title").val();
		var text_font         = $("#text-font").val();
		var text_font_size    = $("#text-font-size").val();
		var page_per_pack  	  = $("#page_per_pack option:selected" ).text();
		var page_per_pack_val = $("#page_per_pack option:selected" ).val();
    var print_design      = $("#printdesign option:selected" ).text();
		var number_of_packs   = $("#number_of_packs").val();
    var qnt               = $('#number_of_packs').val();
    console.log(qnt);//alert(page_per_pack);
		variation_id ='51';
		/*if(page_per_pack_val!="" && page_per_pack_val == "50biwt"){
			variation_id = 51;
		}
		if(page_per_pack_val!="" && page_per_pack_val == "100biwt"){
			variation_id = 110;
		}
		if(page_per_pack_val!="" && page_per_pack_val == "200biwt"){

			variation_id = 111;
		}
		if(page_per_pack_val!="" && page_per_pack_val == "50color"){
			variation_id = 112;
		}
		if(page_per_pack_val!="" && page_per_pack_val == "100color"){
			variation_id = 113;
		}
		if(page_per_pack_val!="" && page_per_pack_val == "200color"){
			variation_id = 114;
		}*/
		//variation_id = variation_id.substring(0,variation_id.length-1) // removes the last character.
        var j_string = {};
        j_string['design_page_title']=$("#design_page_title").val();
        j_string['contentArea']      =$(".contentArea").html();
        j_string['page_per_pack']    =$("#page_per_pack").val();
        j_string['printdesign']      =$("#printdesign").val();
        j_string['number_of_packs']  =$("#number_of_packs").val();
        var s_textarea="";
        $('textarea').each(function(){    
         var id       = $(this).attr('id');
         var value    = $(this).val();
         if(value !=""){
          s_textarea +=id+"="+value+"&";
          //j_string[id] = value;
          console.log('id val'+id+" "+value);
         }         
        });
        j_string['textarea']= s_textarea;
        var json_data = JSON.stringify(j_string);
        //alert(json_data);
        jQuery.ajax({
            type: 'POST',
            url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",
            data: {
                action         :'save_before_cart',
                page_name      :'page_design',
                json_data      :json_data
            },
            //dataType    : 'json',
            //encode      : true,
            success: function (data) { //alert(data);
            console.log(data);
            var design_id=data;
		    console.log(variation_id);
        jQuery.ajax({
            type: 'POST',
            url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",
            data: {
                action              : 'canvas_add_cart',
                p_id                : 41,
                img_id              : image_id,
                design_id           : design_id,
        				variation_id		    : variation_id,
                design_page_title   : design_page_title,
                print_design        : print_design,
                page_per_pack       : page_per_pack,
                qnt   				      : number_of_packs,
        				subtotal   			    : subtotal
            },
            //dataType    : 'json',
            //encode      : true,
            success: function (data) { //alert(data);
				    console.log(data);
            window.location.href = '<?php echo get_home_url(); ?>/cart/';
            },
            error: function (request, error) {
              console.log(request);
              alert(" Can't do because: " + error);
            }
        });
      }
    });
  }

function SendToSession(skey,sval,target){



  jQuery.ajax({



            type: 'POST',



            url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",

            data: {



                action              : 'add_to_session',

                skey                : skey,

                sval                : sval,

                target              : target

            },



            dataType    : 'json',

            encode      : true,

            success: function (data) { //alert(data);

            console.log(data);

           



            }

        });

}







jQuery(document).on("click",".movLeft",function(){ 

   var objPosition = jQuery("#"+focus_id).css('left').replace(/[^-\d\.]/g, ''); 

	objPosition = parseInt(objPosition);

	var ObjNewVal = objPosition-1;

		jQuery("#"+focus_id).css('left',ObjNewVal+'px');

    console.log(ObjNewVal);

    if(parseInt(ObjNewVal)<0){

      ObjNewVal=ObjNewVal+1;

      jQuery("#"+focus_id).css('left',ObjNewVal+'px');

      console.log("Prevent Outside");

    }



});

jQuery(document).on("click",".movRight",function(){ 

   var objPosition = jQuery("#"+focus_id).css('left').replace(/[^-\d\.]/g, '');

   var objWidth = jQuery("#"+focus_id).css('width').replace(/[^-\d\.]/g, ''); 

	objPosition = parseInt(objPosition);

	var ObjNewVal = objPosition+1;

	jQuery("#"+focus_id).css('left',ObjNewVal+'px');

  console.log("left "+ObjNewVal+" width "+objWidth);

    if(parseInt(ObjNewVal)+parseInt(objWidth)>387){

      ObjNewVal=ObjNewVal-1;

      jQuery("#"+focus_id).css('left',ObjNewVal+'px');

      console.log("Prevent Outside");

    } 

});

jQuery(document).on("click",".movUp",function(){ 

   var objPosition = jQuery("#"+focus_id).css('top').replace(/[^-\d\.]/g, ''); 

	 objPosition = parseInt(objPosition);

	 var ObjNewVal = objPosition-1;

		jQuery("#"+focus_id).css('top',ObjNewVal+'px');

    console.log(ObjNewVal);

    if(parseInt(ObjNewVal)<0){

      ObjNewVal=ObjNewVal+1;

      jQuery("#"+focus_id).css('top',ObjNewVal+'px');

      console.log("Prevent Outside");

    } 

});

jQuery(document).on("click",".movDown",function(){ 

   var objPosition = jQuery("#"+focus_id).css('top').replace(/[^-\d\.]/g, '');

   var objHeight = jQuery("#"+focus_id).css('height').replace(/[^-\d\.]/g, ''); 

	 objPosition = parseInt(objPosition);

	 var ObjNewVal = objPosition+1;

	 jQuery("#"+focus_id).css('top',ObjNewVal+'px');

   console.log(ObjNewVal);console.log(objHeight);

    if(parseInt(ObjNewVal)+parseInt(objHeight)>656){

        ObjNewVal=ObjNewVal-1;

        jQuery("#"+focus_id).css('top',ObjNewVal+'px');

        console.log("Prevent Outside");

    }  

});

</script>



<style>



.btnsRow {

 margin-top: 15%;

 position: static;

}



.item_page_name {

	

    font-size: 10px;

    white-space: nowrap;

}



/* old */



.item_cover_name{ 



	font-size:10px;

	white-space:nowrap;



}



.btn_add_box_line{ 



    display: inline-block;

/*    float: right;*/



    padding:2px 5px;

	width: 100%;

    font-size: 14px;

    background: #f4f4f4;

	border: 1px solid #d2d2d2;

    cursor: pointer;



}





.font_sizee { width:35% !important;}



.initial_page { 



    position: absolute;

    bottom: 335px;

    right: 20px;

	font-size: 16px;

}



.bottom_div ,

.bottom_div2{



	position: absolute;

    bottom: 195px;

	width:100%;

	text-align:center;

	font-weight: bold;

	font-size: 11px;

}



.float_right{float: right;}

.i_lower_div {



    position: absolute;

    left: 35px;

    bottom: 335px;

    padding: 0 24px;

}



.i_lower_div h6 { margin:0; }



.i_initial_page{

  	height:25px;

    width:155px;

    white-space: nowrap;

}

.colorBox {

    display: inline-block;

    padding: 0 5px 5px 0;

}



.colorBox>input[type="radio"] {

    display: none;

}

.colorBox>input[type="radio"]+label {



    display: inline-block;

    cursor: pointer;

    position: relative;

    margin: 0;

    overflow: hidden;

}

.color-select label {



    font-weight: bold;

    margin-bottom: 5px;

    display: block;

}

.colorBox>input[type="radio"]+label>i {



    width: 27px;

    height: 27px;

    border: 1px solid #ddd;

    display: block;

}

.b-gold {



    background-color: #f4d374;

}

.b-silver {

    background-color: #e0dfe5;

}

.b-black {

    background-color: #000000;

}

.emb_color{

	cursor:pointer;

} 

.cover_design {

	margin-bottom: 18px !important;

	font-size:77px;

	font-family:'Quicksand',sans-serif;

}

.price_calc_upper{



	position:relative;



}

.cover_design{



	white-space:nowrap;



}

.item_cover_icolor{

	white-space:nowrap;

	font-size: 12px;

	

}

.item_subtotal{

	text-align:right;

	font-size:13px;

}

.item_subtotal+.item_subtotal{



	text-align:left;

}

.item_title {

	font-size:16px;

}



.item_cover_embosscolor {



	white-space:nowrap;

	font-size: 10px;

}



.item_initial_embosscolor {



  white-space:nowrap;

	font-size: 10px;



}

.item_innercolor_embosscolor{



	white-space:nowrap;

	font-size: 10px;



}



.item_disc_size{



	white-space:nowrap;

	font-size: 10px;



} 

.ccover_color,.cembossing_color,.cdisc_color,.cdisc_size{

	font-weight:bold;

	font-size:20px;

	font-family:'Quicksand' , sans-serif;

	width: 60%;

}

.ccustom_title,.cinput_name,.ccontact_info{



	font-weight:bold;

	font-size:20px;

	font-family:'Quicksand' , sans-serif;

}

.scustom_title{



	font-weight:bold;

	font-size:15px;

  font-family:'Quicksand' , sans-serif;

}

.text-font{

	font-size:19px;

	font-family:'Quicksand' , sans-serif;

}

.float_right{



	font-weight:bold;

	font-size:20px;

	font-family:'Quicksand' , sans-serif;

	cursor:pointer;

	margin-right:20%;

}

.sub-menu{



	font-weight: bold;

  font-size: 14px;

  font-family: 'Quicksand' , sans-serif;

}



.img_icon {

	cursor:pointer;

	border:solid 1px black;

}



li{



	cursor:pointer;

}



.select_font{



    /*width: 100px;

    margin-left: 15px;*/

}



.lg,.sm {

	font-weight: bold;

  margin-right: 5px;

  padding-right: 5px;

	margin-left: 4px;

	cursor:pointer;

}



.item_print_design{



  font-size:12px;

  white-space: nowrap;

}



.item_cover_biwt {



  font-size:12px;

  white-space: nowrap;

}

.custom_title {

	font-size: 13px !important;

}



.contact_info {



	font-size:10px !important;



}

.item_cover_icon{



	font-size:10px;

	white-space:nowrap;



}

div#outer_cover_page {



    width: 75%;

	height:80%;

	margin-top:30%



}



.modal_preview_image{



	width:95%;



}



.extraChkbox{ 

    top: 24px;

	width:34px;

	height:60px;

	border:solid 1px #dedede;

}

.page-template-page_design div#working_area {

    border-radius: 0;

}

.dividerNav label {

    font-size: 13px;

    font-weight: normal;

    margin-bottom: 4px;

} 

.shape-square{

	width:100%;

	height:100%;

	min-width:20px;

	min-height:20px;

	background:#fff;

	border:1px solid #000;

}

.shape-circle{

	width:100%;

	height:100%;

	min-width:20px;

	min-height:20px;

	background:#fff;

	border-radius:100%;

	border:1px solid #000;

}

.shape-rectangle{

	width:100%;

	height:100%;

	min-width:30px;

	min-height:20px;

	background:#fff;

	border:1px solid #000;

}

.shape-oval{

	width:100%;

	height:100%;

	min-width:30px;

	min-height:20px;

	border-radius:50%;

	background:#fff;

	border:1px solid #000;

} 

</style>



<?php //get_footer();

