<?php
/**
 * Template Name: customize_calender____BK_26_SEP-imran
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
*/

get_header(); ?>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="http://xp.littlelove.dk/wp-content/themes/flatsome/assets/css/evol-colorpicker.min.css"/>
<script src="http://xp.littlelove.dk/wp-content/themes/flatsome/assets/js/evol-colorpicker.min.js"></script>
<script src="https://www.jqueryscript.net/demo/jQuery-Plugin-For-Auto-Resizing-Text-textfill/jquery.textfill.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="wrap"> 
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.js" integrity="sha256-EzjZPP7sOCQ+ugF/U8x2VH3PEvg3NFjis/dpwogN3T0=" crossorigin="anonymous"></script>
<!-- container -->
<div class="price_calc_upper">
 <div class="rightPane">
  <div id="price_calculator" class="price_calculator">
  <div class="container">
  <div class="row app_class">
  <div class="item_title col-md-8"><strong>ITEMS</strong></div>
   <div class="item_price col-md-4"><i class="fa fa-shopping-cart" style="font-size:20px;"></i></div>
    <div class="item_cover_name col-md-4"></div> 
    <div class="item_cover_name col-md-8"></div>
   <!-- <div class="indented">-->
     <div class="item_cover_icolor col-md-8"></div>
      <div class="item_cover_icolor col-md-4"></div>
       <div class="item_cover_icon col-md-8"></div>
        <div class="item_cover_icon col-md-4"></div>
        <div class="item_cover_embosscolor col-md-8"></div>
        <div class="item_cover_embosscolor col-md-4"><strong></strong></div>
        <div class="item_initial_embosscolor col-md-8"></div>
        <div class="item_initial_embosscolor col-md-4"><strong></strong></div>
        <div class="item_innercolor_embosscolor col-md-8"></div>
        <div class="item_innercolor_embosscolor col-md-4"><strong></strong></div>
        <div class="item_disc_size col-md-8"></div>
        <div class="item_disc_size col-md-4"><strong></strong></div>
        <div class="item_subtotal col-md-8"></div>
        <div class="item_subtotal col-md-4"><strong></strong></div>
   <!-- </div>-->
   </div>
   </div> 
    </div>
      </div>
  <div id="step1">
    <div class="container">
      <div class="row">
      <div class="leftPane">
        <div id="sidebar0" class="sidebar_page">
      	<div class="sideBarInner">
          <h1 class="sidebar-heading">Cover Design</h1>
          <div class="form-group bdr-bot cover_color"> 
          <input type="text" name="cover_name" id="cover_name" class="form-control cover_name" placeholder="Type Cover Name Here" maxlength="20"  /> 
          <div class="fldBlock">
            <label for="cover_color" class="ccover_color">Cover Color</label>
            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_91.png" width="8%" height="8%" title="Classic Blue" style="cursor:pointer;" class="cover_icolor " />
            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_92.png" width="8%" height="8%" title="Traditional Tweed" style="cursor:pointer;"  class="cover_icolor" />
            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_93.png"  width="8%" height="8%" title="Executive Gray" style="cursor:pointer;"  class="cover_icolor"/>
            <input type="hidden" name="cover_color_name" id="cover_color_name" value="" />
            </div>
            </div>
          <div class="form-group fldBlock embossing_color"> 
            <label for="embossing_color" class="cembossing_color">Text Color</label>
            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_94.png" width="8%" height="8%" data-id="Gold"  title="Gold Foil" class="emb_color" /style="cursor:pointer;"> 
            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_95.png" width="8%" height="8%" title="Silver Foil" data-id="Silver" class="emb_color" style="cursor:pointer;" />
            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_96.png" width="8%" height="8%" data-id="Black" title="Black Foil" class="emb_color" style="cursor:pointer;" /> </div>
            <input type="hidden" name="text_color_name" id="text_color_name" value="" />

          <div class="form-group fldBlock disc_color">
            <label for="disc_color" class="cdisc_color">Aluminum Discs</label>
            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_94.png" width="8%" height="8%"  title="Gold" class="disc_icolor" style="cursor:pointer;" /> 
            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_95.png" width="8%" height="8%" title="Silver" class="disc_icolor" style="cursor:pointer;"/> 
            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_96.png" width="8%" height="8%" title="Black" class="disc_icolor" style="cursor:pointer;"/> 
            <input type="hidden" name="alum_disc_color_name" id="alum_disc_color_name" value="" />
          </div>
          <div class="form-group fldBlock disc_size">
           <label for="disc_size" class="cdisc_size" style="float:left">Aluminum Discs</label>
           <span class="lg idisc_size" id="lg" title="32mm">Lg</span><span class="sm idisc_size" id="sm" title="24 m">Sm</span>
           <input type="hidden" name="alum_disc_size" id="alum_disc_size" value="" />
         </div>
        <div class="form-group bdr-bot">
           <!--<label for="custom_title" class="ccustom_title"> Add a Title $18 </label><br/><span class="scustom_title"></span>-->
            <!--<input type="text" name="custom_title" id="custom_title" class="form-control custom_title" placeholder="Type Title Here" maxlength="30"   />-->         <textarea name="custom_title" id="custom_title" class="form-control custom_title text-center" placeholder="Type Title Here" maxlength="30"></textarea>
            <div class="select_font">
            <div class="dualFld_row">

            	<select class="form-control font-family-select text-center" onchange="changeTextFont(this.value,1)" name="text-font" id="text-font">



            <option style="font-weight:bold;" disabled selected>FONT</option>



            <option style="font-family: Arial, sans-serif;" value="Arial, sans-serif;">Arial</option>



            <option style="font-family: 'Amatic SC', cursive;" value="'Amatic SC', cursive;">Amatic SC</option>



            <option style="font-family: 'Domine', serif;" value="'Domine', serif;">Domine</option>



            <option style="font-family: 'Gloria Hallelujah', cursive;" value="'Gloria Hallelujah', cursive;">Gloria Hallelujah</option>



            <option style="font-family: 'Special Elite', cursive;"  value="'Special Elite', cursive;">Special Elite</option>



            <option style="font-family: 'Coda Caption', sans-serif;" value="'Coda Caption', sans-serif;">Coda Caption</option>



            <option style="font-family: 'Bangers', cursive;"  value="'Bangers', cursive;">Bangers</option>



            <option style="font-family: 'Rock Salt', cursive;"  value="'Rock Salt', cursive;">Rock Salt</option>



            <option style="font-family: 'Shadows Into Light Two', cursive;"  value="'Shadows Into Light Two', cursive;">Shadows</option>



            <option style="font-family: 'Nothing You Could Do', cursive;"  value="'Nothing You Could Do', sans-serif;">Nothing You Could Do</option>



            <option style="font-family: 'Fredericka the Great', cursive;"  value="'Fredericka the Great', cursive;">Fredericka the Great</option>



            <option style="font-family: 'Cabin Sketch', cursive;"  value="'Cabin Sketch', cursive;">Cabin Sketch</option>



            <option style="font-family: 'Annie Use Your Telescope', cursive;"  value="'Annie Use Your Telescope', cursive;">Annie Use Your Telescope</option>



            <option style="font-family: 'Nixie One', cursive;"  value="'Nixie One', cursive;">Nixie One</option>



            <option style="font-family: 'Freckle Face', cursive;"  value="'Freckle Face', cursive;">Freckle Face</option>



            <option style="font-family: 'Give You Glory', cursive;"  value="'Give You Glory', cursive;">Give You Glory</option>



            <option style="font-family: 'Chelsea Market', cursive;"  value="'Chelsea Market', cursive;">Chelsea Market</option>



            <option style="font-family: 'Mirza', cursive;"  value="'Mirza', cursive;">Mirza</option>



            <option style="font-family: 'Bilbo Swash Caps', cursive;"  value="'Bilbo Swash Caps', cursive;">Bilbo Swash Caps</option>



            <option style="font-family: 'Stardos Stencil', cursive;"  value="'Stardos Stencil', cursive;">Stardos Stencil</option>



            <option style="font-family: 'Fontdiner Swanky', cursive;"  value="'Fontdiner Swanky', cursive;">Fontdiner Swanky</option>



            <option style="font-family: 'Life Savers', cursive;"  value="'Life Savers', cursive;">Life Savers</option>



            <option style="font-family: 'Dokdo', cursive;"  value="'Dokdo', cursive;">Dokdo</option>



            <option style="font-family: 'Mountains of Christmas', cursive;"  value="'Mountains of Christmas', cursive;">Mountains of Christmas</option>



            <option style="font-family: 'Milonga', cursive;"  value="'Milonga', cursive;">Milonga</option>



            <option style="font-family: 'Lovers Quarrel', cursive;"  value="'Lovers Quarrel', cursive;">Lovers Quarrel</option>



            <option style="font-family: 'Trade Winds', cursive;"  value="'Trade Winds', cursive;">Trade Winds</option>



            <option style="font-family: 'Mystery Quest', cursive;"  value="'Mystery Quest', cursive;">Mystery Quest</option>



            <option style="font-family: 'Henny Penny', cursive;"  value="'Henny Penny', cursive;">Henny Penny</option>



            <option style="font-family: 'Barrio', cursive;"  value="'Barrio', cursive;">Barrio</option>



            <option style="font-family: 'Kirang Haerang', cursive;"  value="'Kirang Haerang', cursive;">Kirang Haerang</option>



            <option style="font-family: 'Lakki Reddy', cursive;"  value="'Lakki Reddy', cursive;">Lakki Reddy</option>



            <option style="font-family: 'Ruthie',cursive;"  value="'Ruthie',cursive;">Ruthie</option>



            



            </select>
	            <select class="form-control font-family-select title-font-size text-center"  name="title-font-size" id="title-font-size" onchange="AdjustSize(this.value,1)">



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
            <select class="form-control font-family-select text-center"  name="text-select-icon" id="text-select-icon" onchange="AddIcon(this.value)">



                <option value="">Select Icon</option>



                <option value="1">Star</option>



                <option value="2">Star 2</option>



            </select>
           </div>
          </div>      
         <div class="bdr-bot" style="border-bottom:0;">	
            <!--<label for="input_name" class="cinput_name">Add Initials $10</label><br /><span class="scustom_title"></span>-->
            <input type="text" name="input_name" id="input_name" class="form-control input_name text-center" placeholder="Type Initials Here" maxlength="5" />
           <div class="select_font"> 
            <div class="dualFld_row">
            <select class="form-control font-family-select text-center" onchange="changeTextFont(this.value,2)" name="text-font" id="initial_text-font">



                <option style="font-weight:bold;" disabled selected>FONT</option>



  				<option style="font-family: Arial, sans-serif;" value="Arial, sans-serif;">Arial</option>



                <option style="font-family: 'Amatic SC', cursive;" value="'Amatic SC', cursive;">Amatic SC</option>



                <option style="font-family: 'Domine', serif;" value="'Domine', serif;">Domine</option>



                <option style="font-family: 'Gloria Hallelujah', cursive;" value="'Gloria Hallelujah', cursive;">Gloria Hallelujah</option>



                <option style="font-family: 'Special Elite', cursive;"  value="'Special Elite', cursive;">Special Elite</option>



                <option style="font-family: 'Coda Caption', sans-serif;" value="'Coda Caption', sans-serif;">Coda Caption</option>



                <option style="font-family: 'Bangers', cursive;"  value="'Bangers', cursive;">Bangers</option>



                <option style="font-family: 'Rock Salt', cursive;"  value="'Rock Salt', cursive;">Rock Salt</option>



                <option style="font-family: 'Shadows Into Light Two', cursive;"  value="'Shadows Into Light Two', cursive;">Shadows</option>



                <option style="font-family: 'Nothing You Could Do', cursive;"  value="'Nothing You Could Do', sans-serif;">Nothing You Could Do</option>



                <option style="font-family: 'Fredericka the Great', cursive;"  value="'Fredericka the Great', cursive;">Fredericka the Great</option>



                <option style="font-family: 'Cabin Sketch', cursive;"  value="'Cabin Sketch', cursive;">Cabin Sketch</option>



                <option style="font-family: 'Annie Use Your Telescope', cursive;"  value="'Annie Use Your Telescope', cursive;">Annie Use Your Telescope</option>



                <option style="font-family: 'Nixie One', cursive;"  value="'Nixie One', cursive;">Nixie One</option>



                <option style="font-family: 'Freckle Face', cursive;"  value="'Freckle Face', cursive;">Freckle Face</option>



                <option style="font-family: 'Give You Glory', cursive;"  value="'Give You Glory', cursive;">Give You Glory</option>



                <option style="font-family: 'Chelsea Market', cursive;"  value="'Chelsea Market', cursive;">Chelsea Market</option>



                <option style="font-family: 'Mirza', cursive;"  value="'Mirza', cursive;">Mirza</option>



                <option style="font-family: 'Bilbo Swash Caps', cursive;"  value="'Bilbo Swash Caps', cursive;">Bilbo Swash Caps</option>



                <option style="font-family: 'Stardos Stencil', cursive;"  value="'Stardos Stencil', cursive;">Stardos Stencil</option>



                <option style="font-family: 'Fontdiner Swanky', cursive;"  value="'Fontdiner Swanky', cursive;">Fontdiner Swanky</option>



                <option style="font-family: 'Life Savers', cursive;"  value="'Life Savers', cursive;">Life Savers</option>



                <option style="font-family: 'Dokdo', cursive;"  value="'Dokdo', cursive;">Dokdo</option>



                <option style="font-family: 'Mountains of Christmas', cursive;"  value="'Mountains of Christmas', cursive;">Mountains of Christmas</option>



                <option style="font-family: 'Milonga', cursive;"  value="'Milonga', cursive;">Milonga</option>



                <option style="font-family: 'Lovers Quarrel', cursive;"  value="'Lovers Quarrel', cursive;">Lovers Quarrel</option>



                <option style="font-family: 'Trade Winds', cursive;"  value="'Trade Winds', cursive;">Trade Winds</option>



                <option style="font-family: 'Mystery Quest', cursive;"  value="'Mystery Quest', cursive;">Mystery Quest</option>



                <option style="font-family: 'Henny Penny', cursive;"  value="'Henny Penny', cursive;">Henny Penny</option>



                <option style="font-family: 'Barrio', cursive;"  value="'Barrio', cursive;">Barrio</option>



                <option style="font-family: 'Kirang Haerang', cursive;"  value="'Kirang Haerang', cursive;">Kirang Haerang</option>



                <option style="font-family: 'Lakki Reddy', cursive;"  value="'Lakki Reddy', cursive;">Lakki Reddy</option>



                <option style="font-family: 'Ruthie',cursive;"  value="'Ruthie',cursive;">Ruthie</option>



            </select>
            <select class="form-control font-family-select text-center"  name="text-font-size-initial" id="initial-font-size" onchange="AdjustSize(this.value,2)">



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
         <div class="form-group bdr-bot contact_info" style="border-bottom:0;">  
        <!--<label for="contact_info" class="ccontact_info">Add Contact Info $12</label><br /><span class="scustom_title"></span>-->
        <input type="text" name="contact_info" id="contact_info" class="form-control contact_info text-center" placeholder="Type email or phone number here" maxlength="30"  /> 
        <div class="select_font"> 
        <div class="dualFld_row">
            <select class="form-control font-family-select text-center" onchange="changeTextFont(this.value,3)" name="text-font" id="contact_info_font">



                <option style="font-weight:bold;" disabled selected>FONT</option>



  				<option style="font-family: Arial, sans-serif;" value="Arial, sans-serif;">Arial</option>



                <option style="font-family: 'Amatic SC', cursive;" value="'Amatic SC', cursive;">Amatic SC</option>



                <option style="font-family: 'Domine', serif;" value="'Domine', serif;">Domine</option>



                <option style="font-family: 'Gloria Hallelujah', cursive;" value="'Gloria Hallelujah', cursive;">Gloria Hallelujah</option>



                <option style="font-family: 'Special Elite', cursive;"  value="'Special Elite', cursive;">Special Elite</option>



                <option style="font-family: 'Coda Caption', sans-serif;" value="'Coda Caption', sans-serif;">Coda Caption</option>



                <option style="font-family: 'Bangers', cursive;"  value="'Bangers', cursive;">Bangers</option>



                <option style="font-family: 'Rock Salt', cursive;"  value="'Rock Salt', cursive;">Rock Salt</option>



                <option style="font-family: 'Shadows Into Light Two', cursive;"  value="'Shadows Into Light Two', cursive;">Shadows</option>



                <option style="font-family: 'Nothing You Could Do', cursive;"  value="'Nothing You Could Do', sans-serif;">Nothing You Could Do</option>



                <option style="font-family: 'Fredericka the Great', cursive;"  value="'Fredericka the Great', cursive;">Fredericka the Great</option>



                <option style="font-family: 'Cabin Sketch', cursive;"  value="'Cabin Sketch', cursive;">Cabin Sketch</option>



                <option style="font-family: 'Annie Use Your Telescope', cursive;"  value="'Annie Use Your Telescope', cursive;">Annie Use Your Telescope</option>



                <option style="font-family: 'Nixie One', cursive;"  value="'Nixie One', cursive;">Nixie One</option>



                <option style="font-family: 'Freckle Face', cursive;"  value="'Freckle Face', cursive;">Freckle Face</option>



                <option style="font-family: 'Give You Glory', cursive;"  value="'Give You Glory', cursive;">Give You Glory</option>



                <option style="font-family: 'Chelsea Market', cursive;"  value="'Chelsea Market', cursive;">Chelsea Market</option>



                <option style="font-family: 'Mirza', cursive;"  value="'Mirza', cursive;">Mirza</option>



                <option style="font-family: 'Bilbo Swash Caps', cursive;"  value="'Bilbo Swash Caps', cursive;">Bilbo Swash Caps</option>



                <option style="font-family: 'Stardos Stencil', cursive;"  value="'Stardos Stencil', cursive;">Stardos Stencil</option>



                <option style="font-family: 'Fontdiner Swanky', cursive;"  value="'Fontdiner Swanky', cursive;">Fontdiner Swanky</option>



                <option style="font-family: 'Life Savers', cursive;"  value="'Life Savers', cursive;">Life Savers</option>



                <option style="font-family: 'Dokdo', cursive;"  value="'Dokdo', cursive;">Dokdo</option>



                <option style="font-family: 'Mountains of Christmas', cursive;"  value="'Mountains of Christmas', cursive;">Mountains of Christmas</option>



                <option style="font-family: 'Milonga', cursive;"  value="'Milonga', cursive;">Milonga</option>



                <option style="font-family: 'Lovers Quarrel', cursive;"  value="'Lovers Quarrel', cursive;">Lovers Quarrel</option>



                <option style="font-family: 'Trade Winds', cursive;"  value="'Trade Winds', cursive;">Trade Winds</option>



                <option style="font-family: 'Mystery Quest', cursive;"  value="'Mystery Quest', cursive;">Mystery Quest</option>



                <option style="font-family: 'Henny Penny', cursive;"  value="'Henny Penny', cursive;">Henny Penny</option>



                <option style="font-family: 'Barrio', cursive;"  value="'Barrio', cursive;">Barrio</option>



                <option style="font-family: 'Kirang Haerang', cursive;"  value="'Kirang Haerang', cursive;">Kirang Haerang</option>



                <option style="font-family: 'Lakki Reddy', cursive;"  value="'Lakki Reddy', cursive;">Lakki Reddy</option>



                <option style="font-family: 'Ruthie',cursive;"  value="'Ruthie',cursive;">Ruthie</option>



            </select>
            <select class="form-control font-family-select text-center"  name="text-font-size-cinfo" id="contact_info_size" onchange="AdjustSize(this.value,3)">



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
            <select class="form-control font-family-select"  name="text-number-cover" id="text-number-cover">



                <option style="font-weight:bold;" disabled selected>Number of Covers (Front/Back + 8 discs)</option>



                <option value="1">1</option>



                <option value="2">2</option>



                <option value="3">3</option>



                <option value="4">4</option>



                <option value="5">5</option>



            </select>
        
       </div>
      </div>
   	<div class="btn_preview_design">
     <div id="pd_cover"><span class="btn">Preview Design</span></div>
    </div> 
    <div class="btn_approve_cover">
    <div id="approve_cover"><span class="btn" onclick="canvasSaveImage();">Approve Cover Design and Add to Cart</span></div>
    </div>
    </div>
   <div class="btn_post_to_gallery">
    <div id="post_to_gallery" class="btn_post_to_gallery"><span class="btn">Post Your Design to the Gallery for Others to See & Use</span></div>
   </div>
   </div>
  <div id="outer_cover_page">
        	<div id="working_area0" class="working_area" style="background-image:url(http://technology-architects.com/customize_calendar/wp-content/uploads/asset/FrontCover.png);background-size: 100% auto;background-repeat: no-repeat;background-position: center;">
          <div class="upper_div222">
            <div class="title_page" contenteditable="false">
              <span style="font-size: 11px;"><strong></strong></span>
              <div id="icon_under_title"></div>
            </div>
          </div>
          <div class="lower_div">
            <div class="initial_page" contenteditable="false">
              <strong></strong>
            </div>
          </div>
        </div>
        	<div id="working_area1" class="working_area" style="background-image:url(http://technology-architects.com/customize_calendar/wp-content/uploads/asset/InsideCover.png);background-size: 100% auto;background-repeat: no-repeat;background-position: 40px center;">
          <div class="i_lower_div">
            <div class="i_initial_page" id="i_initial_page" contenteditable="false">
              <span style="font-size: 11px;"><strong></strong></span>
            </div>
          </div>
        </div>
       </div> 
<div class="btnsRow">
      <div id="next" class="next_step_btn"><a class="btn" href="<?php echo site_url();?>/page-design">Page Design</a></div>
      <div id="middle" class="next_step_btn"><a class="btn" href="<?php echo site_url();?>/divider">Divider Design</a></div>
      <div id="last" class="next_step_btn"><a class="btn" href="<?php echo site_url();?>/cart">Checkout</a></div>
    </div> 
      </div>
      </div>
   <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Preview of Cover Page</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div align="center" style="white-space:nowrap;">
          <img src="" alt="cover design preview" id="cover_design_preview" class="modal_preview_image"  />
          <img src="" alt="cover design preview" id="cover_design_preview2" class="modal_preview_image" />
         </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
var current_main_box=emboss_name='';
var subtotal=firstDone=sel_title=c_cover=0;
var sel_initial=sel_cntinfo=s_title=0;
var s_initial=s_cntinfo=0;
var lg_add=sm_add=size_add=cover_icon=0;
var size=disc_gcolor='';
$(document).ready(function() {



        //$("#mycolor").colorpicker();



		//$(".mycolor").colorpicker();



  //$("#draw_button").trigger('click');



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
			$("#cover_color_name").val(titletext+' Cover');
		}
});

$(document).on('click','.fa-window-close',function(){

		console.log($(this).attr("id"));
		console.log(subtotal);
		var id=$(this).attr("id");

		$("."+id).empty();
		if(id == "item_cover_icolor"){
			subtotal -=20;
			c_cover=0;
			console.log('item_cover_icolor',subtotal);
			$("#cover_color_name").val();

		}else if(id == "item_cover_embosscolor"){
			
			subtotal -=18;console.log('item_cover_embosscolor',subtotal);
			$("#custom_title").val('');
			$(".title_page>span>strong").html('');
		}
		else if(id == "item_initial_embosscolor"){
			subtotal -=10;
			$("#input_name").val('');
			$(".initial_page>strong").html('');
		}
		else if(id == "item_innercolor_embosscolor"){

			subtotal -=12;
			$("#contact_info").val('');
			$(".i_initial_page>span>strong").html('');
		}
		else if(id == "item_disc_size_lg"){

			subtotal -=16;
			$(".item_disc_size").empty();
			size='';
			lg_add=sm_add=size_add=0;
			disc_gcolor='';
		}

		else if(id == "item_disc_size_sm"){
			subtotal -=10;
			$(".item_disc_size").empty();
			size='';
			lg_add=sm_add=size_add=0;
			disc_gcolor='';
		}

		else if(id == "item_cover_icon"){
			subtotal -=10;
			$(".item_cover_icon").empty();
			$("#icon_under_title").html('');
			$('#text-select-icon').prop('selectedIndex',0);
			cover_icon=0;
		}

		/////////////////////////////////////////////
		if(subtotal <= 0){
			$(".item_subtotal").empty();
		}else if(subtotal > 0){
			$(".item_subtotal").empty();
			$(".item_subtotal.col-md-8").html('Subtotal');
			$(".item_subtotal.col-md-4").html('<strong>$'+subtotal+'</strong>');
		}
});







$(document).on('click','.idisc_size',function(){


	console.log($(this).attr("id"));//console.log($(this).attr("counter"));

	var sel_id=$(this).attr("id");
	//var sel_id=$(this).attr("id");
	if(disc_gcolor==""){

		alert("Please select Disc color first");
		return false;

	}

	if(sel_id=="lg"){

		$(".item_disc_size").empty();
		$(".item_disc_size.col-md-8").html(disc_gcolor+" Discs-28mm");
		$(".item_disc_size.col-md-4").html('<strong>$16</strong>&nbsp;&nbsp;<i id="item_disc_size_lg" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');

		lg_add=1;

		if(size=='lg'){
			subtotal -=16;
		}else if(size=='sm'){
		    subtotal -=10;
		}
		$("#alum_disc_size").val(disc_gcolor+" Discs-28mm");
		size_add=1;
		size='lg';
		subtotal +=16;
		console.log(size);
	}

	else if(sel_id=="sm"){

		$(".item_disc_size").empty();
		$(".item_disc_size.col-md-8").html(disc_gcolor+" Discs-Small");
		$(".item_disc_size.col-md-4").html('<strong>$10</strong>&nbsp;&nbsp;<i id="item_disc_size_sm" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');

		sm_add=1;
		if(size=='sm'){
			subtotal -=10;
		}else if(size=='lg'){
			subtotal -=16;
		}

		subtotal +=10;
		size_add=1;
		size='sm';
		console.log(size);
		$("#alum_disc_size").val(disc_gcolor+" Discs-Small");
	}

			$(".item_subtotal").empty();
			$(".item_subtotal.col-md-8").html('Subtotal');
			$(".item_subtotal.col-md-4").html('<strong>$'+subtotal+'</strong>');
});	



$(document).on('change','.select_title',function(){



	



	



	console.log($(this).val());//console.log($(this).attr("counter"));



	var sel_val=$(this).val();



	var text='';



	if(sel_val == 'a'){



		text ='Seize the Day';



	}



	else if(sel_val == 'b'){



		text ='Good,Better,Best';



	}



	else if(sel_val == 'c'){



		text ='Good Morning Sunshine!';



	}



	$(".title_page span strong").html(text);



	$(".title_page").draggable();



	//$(".title_page").resizable();



	$('.title_page').textfill({ });



	console.log('firstDone',firstDone);



	if(firstDone==1){



		$(".item_cover_embosscolor").empty();



		$(".item_cover_embosscolor.col-md-8").html(emboss_name+" Title");



		$(".item_cover_embosscolor.col-md-4").html('<strong>$18</strong>&nbsp;&nbsp;<i id="item_cover_embosscolor" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');



		if(sel_title==0){



		   subtotal +=18;



		}



		$(".item_subtotal.col-md-8").html('Subtotal');



		$(".item_subtotal.col-md-4").html('<strong>$'+subtotal+'</strong>');



  }



        sel_title=1;



		s_title=1;



});







$(".title_page").click(function() {



    $(this).draggable( {disabled: false});



});



$(".title_page").dblclick(function() {



			$(this).draggable({ disabled: true });



});







$(document).on('keyup','.cover_name',function(){



		



		var text=$(this).val();



		console.log(text);



		$(".item_cover_name").empty();



		$(".item_cover_name.col-md-4").html("Cover Name:");



		$(".item_cover_name.col-md-8").html(text+'<!--&nbsp;&nbsp;<i id="item_cover_name" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i-->');



		



		



});



function addNewlines(str) {



  var result = '';



  while (str.length > 0) {



    result += str.substring(0, 15) + '<br />';



    str = str.substring(15);



  }



  return result;



}



$(document).on('keyup','.custom_title',function(){



	



	console.log($(this).val());//console.log($(this).attr("counter"));



	var text=$(this).val();



	//text = addNewlines(text);

	text=text.replace(/\r\n|\n|\r/g, '<br />');



	$(".title_page span strong").html(text);



	//$(".title_page").draggable();



	//$(".title_page").resizable();



	$('.title_page').textfill({ });



	console.log('firstDone',firstDone);



	if(firstDone==1){



		$(".item_cover_embosscolor").empty();



		$(".item_cover_embosscolor.col-md-8").html(emboss_name+" Title");



		$(".item_cover_embosscolor.col-md-4").html('<strong>$18</strong>&nbsp;&nbsp;<i id="item_cover_embosscolor" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');



		if(sel_title==0){



			subtotal +=18;



			sel_title++;



		}



		$(".item_subtotal.col-md-8").html('Subtotal');



		$(".item_subtotal.col-md-4").html('<strong>$'+subtotal+'</strong>');



			



 }s_title=1;



});



$(document).on('keyup','.input_name',function(){



	



	



	console.log($(this).val());//console.log($(this).attr("counter"));



	var text=$(this).val();



	$(".initial_page strong").html(text);



	//$(".initial_page").draggable();



	//$(".initial_page").resizable();



	if(firstDone==1){



	$(".item_initial_embosscolor").empty();



	$(".item_initial_embosscolor.col-md-8").html(emboss_name+" Initial");



	$(".item_initial_embosscolor.col-md-4").html('<strong>$10</strong>&nbsp;&nbsp;<i id="item_initial_embosscolor" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');



	if(sel_initial==0){



			subtotal +=10;



			sel_initial++;



	 }



		$(".item_subtotal.col-md-8").html('Subtotal');



		$(".item_subtotal.col-md-4").html('<strong>$'+subtotal+'</strong>');



	}	s_initial=1;



	



});











$(document).on('keyup','.contact_info',function(e){



	console.log("tddf");



	console.log($(this).val());//console.log($(this).attr("counter"));



	var text=$(this).val();



	$(".i_initial_page strong").html(text);



	$('.i_initial_page').textfill({ });



	//$(".i_initial_page").draggable();



	//$(".i_initial_page").resizable();



	e.preventDefault();



	e.stopPropagation();



	 



	if(firstDone==1){



	$(".item_innercolor_embosscolor").empty();



	$(".item_innercolor_embosscolor.col-md-8").html(emboss_name+" Contact Info");



	$(".item_innercolor_embosscolor.col-md-4").html('<strong>$12</strong>&nbsp;&nbsp;<i id="item_innercolor_embosscolor" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');



	 if(sel_cntinfo==0){



			subtotal +=12;



			sel_cntinfo++;



	  }



		$(".item_subtotal.col-md-8").html('Subtotal');



		$(".item_subtotal.col-md-4").html('<strong>$'+subtotal+'</strong>');



	}



	s_cntinfo =1;



});



	



$(document).on('click','.emb_color',function(e){

 if(typeof firstDone === "undefined"){
 	       firstDone=0;
 }
    console.log(firstDone);	
	firstDone = 1;
	var text=$(this).attr("data-id");
	emboss_name=text; //assign globally
	if(text == "Gold"){
		color ="#f4d374";
	}

	else if(text == "Silver"){
	   color ="#e0dfe5";
	}
	else if(text == "Black"){
	   color ="#000000";
	}
	else if(text == "Remove"){
		$(".item_cover_embosscolor").empty();
		$(".item_initial_embosscolor").empty();
		$(".item_innercolor_embosscolor").empty();
		//$(".item_subtotal.col-md-8").empty();
		//$(".item_subtotal.col-md-4").empty();
		color ="#000000";
		$(".title_page strong").css("color",color);
		$(".initial_page strong").css("color",color);
		$(".i_initial_page strong").css("color",color);
		
		if(s_title==1){
			s_title=0;
			subtotal -=18;
		}
		if(s_initial==1){

			s_initial=0;
			subtotal -=10;
		}

		if(s_cntinfo==1){
			s_cntinfo=0;
			subtotal -=12;
		}
		if(subtotal == 0){

				$(".item_subtotal").empty();
		}

	}
    
	$(".title_page strong").css("color",color);
	$(".initial_page strong").css("color",color);
	$(".i_initial_page strong").css("color",color);

	var titletext=$(this).attr("title");
	$('#text_color_name').val(titletext+" Title");
	if(s_title==1){
		titletext=$(this).attr("data-id");
		$(".item_cover_embosscolor").empty();
		$(".item_cover_embosscolor.col-md-8").html(titletext+" Title");
		$(".item_cover_embosscolor.col-md-4").html('<strong>$18</strong>&nbsp;&nbsp;<i id="item_cover_embosscolor" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');
		if(sel_title==0){
			subtotal +=18;
			sel_title++;
		}
		$(".item_subtotal.col-md-8").html('Subtotal');
		$(".item_subtotal.col-md-4").html('<strong>$'+subtotal+'</strong>');
	}
	if(s_initial==1){
		$(".item_initial_embosscolor").empty();
		$(".item_initial_embosscolor.col-md-8").html(emboss_name+" Initial");
		$(".item_initial_embosscolor.col-md-4").html('<strong>$10</strong>&nbsp;&nbsp;<i id="item_initial_embosscolor" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');
		if(sel_initial==0){
			subtotal +=10;
			sel_initial++;
	 	}

		$(".item_subtotal.col-md-8").html('Subtotal');
		$(".item_subtotal.col-md-4").html('<strong>$'+subtotal+'</strong>');
	}

	if(s_cntinfo==1){

		$(".item_innercolor_embosscolor").empty();
		$(".item_innercolor_embosscolor.col-md-8").html(emboss_name+" Contact Info");
		$(".item_innercolor_embosscolor.col-md-4").html('<strong>$12</strong>&nbsp;&nbsp;<i id="item_innercolor_embosscolor" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');

		 if(sel_cntinfo==0){
				subtotal +=12;
				sel_cntinfo++;
		  }

			$(".item_subtotal.col-md-8").html('Subtotal');
			$(".item_subtotal.col-md-4").html('<strong>$'+subtotal+'</strong>');
		}
});


$(document).on('click','.disc_icolor',function(e){

	var text=$(this).attr("title");console.log(text);
	var imageUrl = $(this).attr("src");
	disc_gcolor=text;
	console.log(imageUrl);
	$("#working_area0").css("background-image",'url(' + imageUrl + ')');
	$("#working_area1").css("background-image",'url(' + imageUrl + ')');
	$("#alum_disc_color_name").val(text);

});

$(document).on('keyup','#design_page_title',function(e){
	
	var text=$(this).val();console.log(text);
	$("#design_title_div h2").html(text);
});







function AdjustSize(val,s_no){







	var res = val;



	console.log(res);



	if(s_no == 1){



		$(".title_page span").css('font-size',res+ "px");



		console.log('1 ' ,s_no);



		



	}



	else if(s_no == 2){



		$(".initial_page").css('font-size',res+ "px");



		console.log('2 ' ,s_no);



		



	}



	else if(s_no == 3){



		$(".i_initial_page span").css('font-size',res+ "px");



		console.log('3 ' ,s_no);



		



	}



}







function changeTextFont(val,s_no){



    console.log(val);



	//var strnew = val.substr(0, strnew.length-1);



	var res = val.replace(";", "");



	console.log(res);



	if(s_no == 1){



		$(".title_page").css('font-family',res);



		$('.title_page').textfill({ });



	}



	//$(".initial_page strong").css('font-family',val);



	else if(s_no == 2){



		$(".initial_page").css('font-family',res);



	}



	//$(".title_page strong").css('font-family',val);



	else if(s_no == 3){



		$(".i_initial_page").css('font-family',res);



	}



	console.log('end');







}







function AddIcon(val){



	console.log(val);



	var res = val;



	if(val == ""){



		console.log(cover_icon);



	 	html='';



		 if(cover_icon==1){



			 



				subtotal -=10;console.log(subtotal);



				cover_icon=0;



				$(".item_cover_icon").empty();



				$(".item_subtotal.col-md-8").html('Subtotal');



				$(".item_subtotal.col-md-4").html('<strong>$'+subtotal+'</strong>');



			}



	 



	}



	if(val == 1){



	 html='<img src="<?php echo site_url();?>/wp-content/uploads/asset/star.png" width="36" height="36">';



	}



	else if(val == 2){



	 html='<img src="<?php echo site_url();?>/wp-content/uploads/asset/star2.png" width="36" height="36">';



	}



	if(val !=""){



		



		$(".item_cover_icon").empty();



		$(".item_cover_icon.col-md-8").html(emboss_name+" Icon");



		$(".item_cover_icon.col-md-4").html('<strong>$10</strong>&nbsp;&nbsp;<i id="item_cover_icon" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');



		if(cover_icon==0){



			subtotal +=10;



			cover_icon=1;



		}



	$(".item_subtotal.col-md-8").html('Subtotal');



	$(".item_subtotal.col-md-4").html('<strong>$'+subtotal+'</strong>');



	}



	



	//



	$("#icon_under_title").html(html);



	$("#icon_under_title").draggable();



}







$(document).on('click','#pd_cover',function(e){

    $([document.documentElement, document.body]).animate({



        scrollTop: $("#working_area0").offset().top



    }, 0);
	
	$('.title_page').css('border', '0px solid red');
	$('#icon_under_title').css('border', '0px solid red');
	$('.initial_page').css('border', '0px solid red'); 
	$('.i_initial_page').css('border', '0px solid red'); 

	 html2canvas($("#working_area0"), {

            onrendered: function (canvas) {
				
                var imageStr2 = canvas.toDataURL('png');
                var rawData2 = canvas.toDataURL("image/png");
				rawData2 = rawData2.substr("data:image/png;base64,".length);
		        $("#cover_design_preview").attr("src",imageStr2);

				//console.log(imageStr2);
				//window.open(imageStr2);
				//$('#exampleModal').modal('show');
            },
            logging: true,

        });
		html2canvas($("#working_area1"), {
            onrendered: function (canvas) {
                var imageStr2 = canvas.toDataURL('png');
                var rawData2 = canvas.toDataURL("image/png");
				rawData2 = rawData2.substr("data:image/png;base64,".length);
		        $("#cover_design_preview2").attr("src",imageStr2);
				$('#exampleModal').modal('show');
				$('.title_page').css('border', '1px solid red');
				$('#icon_under_title').css('border', '1px solid red');
				$('.initial_page').css('border', '1px solid red'); 
				$('.i_initial_page').css('border', '1px solid red'); 
            },


            logging: true,


        });

})

 function canvasSaveImage() {

		$(".loader").css('display', 'block');
		
		$([document.documentElement, document.body]).animate({



        scrollTop: $("#working_area0").offset().top



    }, 0);

		$('.title_page').css('border', '0px solid red');
		$('#icon_under_title').css('border', '0px solid red');
		$('.initial_page').css('border', '0px solid red'); 
		$('.i_initial_page').css('border', '0px solid red'); 
		
        html2canvas($("#outer_cover_page"), {

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

                        console.log(image_id);

						//console.log(image_url);

                        addToCart(image_id);

                    }

                });

            },

            logging: true,

            //width: 3250,

            //height: 3183

        });

		//$(".loader").css('display', 'none');

    }



 function addToCart(image_id) {

        var cover_name        = $("#cover_name").val();
		var cover_color_name  = $("#cover_color_name").val();
		var text_color_name   = $("#text_color_name").val();
		var alum_disc_color_name= $("#alum_disc_color_name").val();
		var alum_disc_size    = $("#alum_disc_size").val();
        var title_text        = $('#custom_title').val();
		var title_text_font   = $('#title_text-font').val();	
		var title_text_size   = $('#title_text-size').val();
        var initial_text      = $('#input_name').val();
		var initial_text_font = $('#initial_text-font').val();	
		var initial_text_size = $('#initial_text-size').val();	
		var contact_info      = $('#contact_info').val();
        var contact_info_font = $('#contact_info-font').val();	
		var contact_info_size = $('#contact_info-size').val();
        var text_select_icon  = $('#text-select-icon').val();
		//var text_select_icon  = $('#text-select-icon').val();text-number-cover
        var qnt               = $('#text-number-cover').val();

        //var large_image = '<?php echo get_template_directory_uri(); ?>/new/images/large-images/sweater-'+sweaterColor+'-pattern-'+pattern+'-pattern-color-'+patternColor+'.png';


      		//var debug="product_id="+product_id+" variation_id="+variation_id+" image_id="+image_id+" sweaterColor="+sweaterColor+" pattern="+pattern+" patternColor="+patternColor+" xs_qnt="+xs_qnt+" s_qnt="+s_qnt+" m_qnt="+m_qnt+" l_qnt="+l_qnt+" xl_qnt="+xl_qnt+" xxl_qnt="+xxl_qnt;

        //console.log(debug);//alert(debug);

        jQuery.ajax({

            type: 'POST',

            url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",

            data: {

                action              : 'canvas_add_cart',

                p_id                : 40,

                img_id              : image_id,
				
				cover_name          : cover_name,
				
				cover_color_name    : cover_color_name,
				
				text_color_name     : text_color_name,
				
				alum_disc_color_name: alum_disc_color_name,
				
				alum_disc_size      : alum_disc_size,
				
				cover_name          : cover_name,
				
				title_text          : title_text,

                title_text_font     : title_text_font,

                title_text_size     : title_text_size,

                initial_text        : initial_text,

                initial_text_font   : initial_text_font,

                initial_text_size   : initial_text_size,

                contact_info        : contact_info,

                contact_info_font   : contact_info_font,

                contact_info_size   : contact_info_size,

                text_select_icon    : text_select_icon,

				variation_id		: 43,

                qnt   				: qnt,
				
				subtotal   			: subtotal

            },

            dataType    : 'json',

            encode      : true,

            success: function (data) { //alert(data);

				

				console.log(data);

                window.location.href = '<?php echo get_home_url(); ?>/cart/';

				

            }

        });

    }


</script>
<style>
.item_cover_name{ 

	font-size:10px;
	white-space:nowrap;
}
#working_area {
 
    width: 67%;
    position: relative;
}

.btn_add_box_line{
  

    display: inline-block;
    float: right;
    padding: 10px;
    font-size: 17px;
    background: #eee;
    cursor: pointer;
}
.font_sizee { width:35% !important;}
.upper_div h4{margin:0;}
.upper_div222 {
	position: absolute;
	top: auto;
	bottom:43%;
	left: 50%;
	width: 85%;
	transform: translate(-50%,-50%);
	padding-left: 78px;
	padding-right: 30px;
	text-align: center;

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
    bottom: 53px;
    padding: 0 24px;
}
.i_lower_div h6 { margin:0; }
.i_initial_page{
	
	height:25px;
    width:140px;
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
	font-size: 10px;
	padding-left: 20px;



}



.item_subtotal{



	text-align:right; 



	font-size:11px;



    font-weight: bold;



}



.item_subtotal+.item_subtotal{



	text-align:left;



}



.item_title {



	font-size:16px;



}



.item_cover_embosscolor {
	
	white-space:nowrap;
    padding-left:20px;
	font-size: 10px;
}



.item_initial_embosscolor {

    white-space:nowrap;
	font-size: 10px;
	padding-left:20px;
}



.item_innercolor_embosscolor{
	
	white-space:nowrap;
	font-size: 10px;
	padding-left:20px;
}



.item_disc_size{

	white-space:nowrap;
	font-size: 10px;
	padding-left:20px;
	
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



.custom_title {



	font-size: 13px !important;



}



.contact_info {



	font-size:10px !important;



}



.item_cover_icon{

	font-size:10px;
	white-space:nowrap;
	padding-left:20px;
}



div#outer_cover_page {

    width: 75%;
	height:80%;
}

.modal_preview_image{

	width:45%;
}

</style>

<?php //get_footer();
















