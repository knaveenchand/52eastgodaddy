<?php

/**

 * Template Name: Customizer Page 1

 * @package WordPress

 * @subpackage Twenty_Seventeen

 * @since 1.0

 * @version 1.0

*/

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

get_header();

//$_SESSION['cover_name']='My cover';
//unset($_SESSION['item_innercolor_embosscolor']);
//unset($_SESSION['item_initial_embosscolor']);
//echo "";print_r($_SESSION);
/*if(stripslashes($_SESSION['TextFont_title_page'])=="'Domine', serif"){
  echo "match";
}else{ echo "miss match";}*/
//if(isset($_SESSION)){ echo $_SESSION['cover_name']; } ?>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
            <ul class="cartItems_list">
              <li>
               <div class="item_title c_item"><strong>ITEMS</strong></div>
                <div class="item_price c_price"><i class="fa fa-shopping-cart" style="font-size:20px;"></i></div>
              </li>
              <!--<li>
                <div class="item_cover_name col-md-4 c_item"></div>
                <div class="item_cover_name col-md-8 c_price"><strong></strong></div>
              </li>-->
              <li>
                <div class="item_cover_icolor item_n c_item"></div>
                <div class="item_cover_icolor item_p c_price"><strong></strong></div>
              </li>
              <li>
                <div class="item_cover_icon item_n c_item"></div>
                <div class="item_cover_icon item_p c_price"><strong></strong></div>
              </li>
              <li>
                <div class="item_cover_embosscolor item_n c_item"></div>
                <div class="item_cover_embosscolor item_p c_price"><strong></strong></div>
              </li>
              <li>
                <div class="item_initial_embosscolor item_n c_item"></div>
                <div class="item_initial_embosscolor item_p c_price"><strong></strong></div>
              </li>

              <li>

                <div class="item_innercolor_embosscolor item_n c_item"></div>

                <div class="item_innercolor_embosscolor item_p c_price"><strong></strong></div>

              </li>

              <li>

                <div class="item_disc_size item_n c_item"></div>

                <div class="item_disc_size item_p c_price"><strong></strong></div>

              </li>

              <li>

                <div class="item_subtotal item_n c_item text-right"></div>

                <div class="item_subtotal item_p c_price"><strong></strong></div>

              </li>

            </ul>

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



                    <img src="<?php echo site_url();?>/wp-content/uploads/asset/fabric_classic_black.png" width="8%" height="8%" title="Classic Black" style="cursor:pointer;" class="cover_icolor" id="ClassicBlack" /> 

                    <img src="<?php echo site_url();?>/wp-content/uploads/asset/fabric_fog_gray.png" width="8%" height="8%" title="Fog Gray" style="cursor:pointer;"  class="cover_icolor" id="TraditionalTweed" /> 

                    <!--<img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_93.png"  width="8%" height="8%" title="Executive Gray" style="cursor:pointer;"  class="cover_icolor" id="ExecutiveGray" />-->



                    <input type="hidden" name="cover_color_name" id="cover_color_name" value="" />



                  </div>



                </div>



                <div class="form-group fldBlock embossing_color">



                  <label for="embossing_color" class="cembossing_color">Text Color</label>



                  <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_94.png" width="8%" height="8%" data-id="Gold"  title="Gold Foil" class="emb_color" style="cursor:pointer;" id="GoldFoil">

                  <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_95.png" width="8%" height="8%" title="Silver Foil" data-id="Silver" class="emb_color" style="cursor:pointer;" id="SilverFoil" /> <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_96.png" width="8%" height="8%" data-id="Black" title="Black Foil" class="emb_color" style="cursor:pointer;" id="BlackFoil" /> </div>



                <input type="hidden" name="text_color_name" id="text_color_name" value="" />
                <div class="form-group fldBlock disc_color">
                  <label for="disc_color" class="cdisc_color">Aluminum Discs</label>
                  <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_94.png" width="8%" height="8%"  title="Gold" class="disc_icolor" style="cursor:pointer;" id="GoldDisc"  />
                  <img src="<?php echo site_url();?>/wp-content/uploads/asset/fabric_classic_black.png" width="8%" height="8%" title="Classic Black" class="disc_icolor" style="cursor:pointer;" id="BlackDisc" />
               <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_95.png" width="8%" height="8%" title="Silver" class="disc_icolor" style="cursor:pointer;" id="SilverDisc"/>
               <!--    <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_95.png" width="8%" height="8%" title="Fog Gray" class="disc_icolor" style="cursor:pointer;" id="SilverDisc"/> --> 
                  <input type="hidden" name="alum_disc_color_name" id="alum_disc_color_name" value="" />
                </div>
                <div class="form-group fldBlock disc_size">
                  <label for="disc_size" class="cdisc_size" style="float:left">Aluminum Discs</label>
                  <span class="lg idisc_size" id="lg" title="32mm">Lg</span><span class="sm idisc_size" id="sm" title="24 m">Sm</span>
                  <input type="hidden" name="alum_disc_size" id="alum_disc_size" value="" />
                </div>
                <div class="form-group bdr-bot"> 
                  <input type="text" name="custom_title" id="custom_title" class="form-control custom_title text-center" placeholder="Type Line 1 of Title Here" maxlength="15">
                  <div class="dualFld_row">
                      <select class="form-control font-family-select text-center" onchange="changeTextFont(this.value,4)" name="text-font" id="text-font">
                        <option style="font-weight:bold;" value="" disabled="" selected="">Font</option>
                        <option style="font-family: Arial, sans-serif;" value="Arial, sans-serif;">Arial</option>
                        <option style="font-family: 'Amatic SC', cursive;" value="'Amatic SC', cursive;">Amatic SC</option>
                        <!-- <option style="font-family: 'Domine', serif;" value="'Domine', serif;">Domine</option> -->
                        <!--<option style="font-family: 'Gloria Hallelujah', cursive;" value="'Gloria Hallelujah', cursive;">Gloria Hallelujah</option>-->
                        <!-- <option style="font-family: 'Special Elite', cursive;" value="'Special Elite', cursive;">Special Elite</option>
                        <option style="font-family: 'Coda Caption', sans-serif;" value="'Coda Caption', sans-serif;">Coda Caption</option>
                        <option style="font-family: 'Bangers', cursive;" value="'Bangers', cursive;">Bangers</option> -->
                        <!--<option style="font-family: 'Rock Salt', cursive;"  value="'Rock Salt', cursive;">Rock Salt</option>-->
                        <option style="font-family: 'Shadows Into Light Two', cursive;" value="'Shadows Into Light Two', cursive;">Shadows</option>
                        <option style="font-family: 'Nothing You Could Do', cursive;" value="'Nothing You Could Do', sans-serif;">Nothing You Could Do</option>
                        <option style="font-family: 'Fredericka the Great', cursive;" value="'Fredericka the Great', cursive;">Fredericka the Great</option>
                        <option style="font-family: 'Cabin Sketch', cursive;" value="'Cabin Sketch', cursive;">Cabin Sketch</option>
                        <!-- <option style="font-family: 'Annie Use Your Telescope', cursive;" value="'Annie Use Your Telescope', cursive;">Annie Use Your Telescope</option> -->
                        <option style="font-family: 'Nixie One', cursive;" value="'Nixie One', cursive;">Nixie One</option>
                        <option style="font-family: 'Freckle Face', cursive;" value="'Freckle Face', cursive;">Freckle Face</option>
                        <!-- <option style="font-family: 'Give You Glory', cursive;" value="'Give You Glory', cursive;">Give You Glory</option> -->
                        <option style="font-family: 'Chelsea Market', cursive;" value="'Chelsea Market', cursive;">Chelsea Market</option>
                        <!-- <option style="font-family: 'Mirza', cursive;" value="'Mirza', cursive;">Mirza</option> -->
                        <option style="font-family: 'Bilbo Swash Caps', cursive;" value="'Bilbo Swash Caps', cursive;">Bilbo Swash Caps</option>
                        <option style="font-family: 'Stardos Stencil', cursive;" value="'Stardos Stencil', cursive;">Stardos Stencil</option>
                        <!--<option style="font-family: 'Fontdiner Swanky', cursive;"  value="'Fontdiner Swanky', cursive;">Fontdiner Swanky</option>-->
                        <option style="font-family: 'Life Savers', cursive;" value="'Life Savers', cursive;">Life Savers</option>
                        <!-- <option style="font-family: 'Dokdo', cursive;" value="'Dokdo', cursive;">Dokdo</option>
                        <option style="font-family: 'Mountains of Christmas', cursive;" value="'Mountains of Christmas', cursive;">Mountains of Christmas</option>
                        <option style="font-family: 'Milonga', cursive;" value="'Milonga', cursive;">Milonga</option>-->
                        <option style="font-family: 'Lovers Quarrel', cursive;" value="'Lovers Quarrel', cursive;">Lovers Quarrel</option>
                        <option style="font-family: 'Trade Winds', cursive;" value="'Trade Winds', cursive;">Trade Winds</option>
                        <!-- <option style="font-family: 'Mystery Quest', cursive;" value="'Mystery Quest', cursive;">Mystery Quest</option>
                        <option style="font-family: 'Henny Penny', cursive;" value="'Henny Penny', cursive;">Henny Penny</option>
                        <option style="font-family: 'Barrio', cursive;" value="'Barrio', cursive;">Barrio</option> -->
                        <option style="font-family: 'Kirang Haerang', cursive;" value="'Kirang Haerang', cursive;">Kirang Haerang</option>
                        <!--<option style="font-family: 'Lakki Reddy', cursive;"  value="'Lakki Reddy', cursive;">Lakki Reddy</option>-->
                        <!-- <option style="font-family: 'Ruthie',cursive;" value="'Ruthie',cursive;">Ruthie</option> -->
                      </select>
                      <select class="form-control font-family-select title-font-size text-center" name="title-font-size" id="title-font-size" onchange="AdjustSize(this.value,4)">
                        <option value="" style="font-weight:bold;" disabled="" selected="">Size</option>
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
                  <input type="text" name="custom_title2" id="custom_title2" class="form-control custom_title text-center" placeholder="Type Line 2 of Title Here" maxlength="15">
                  <div class="select_font">
                    <div class="dualFld_row">
                      <select class="form-control font-family-select text-center" onchange="changeTextFont(this.value,1)" name="text-font" id="text-font2">
                        <option style="font-weight:bold;" value="" disabled selected>Font</option>
                        <option style="font-family: Arial, sans-serif;" value="Arial, sans-serif;">Arial</option>
                        <option style="font-family: 'Amatic SC', cursive;" value="'Amatic SC', cursive;">Amatic SC</option>
<!--
                        <option style="font-family: 'Domine', serif;" value="'Domine', serif;">Domine</option>
                        <option style="font-family: 'Gloria Hallelujah', cursive;" value="'Gloria Hallelujah', cursive;">Gloria Hallelujah</option>-->
                        <option style="font-family: 'Special Elite', cursive;"  value="'Special Elite', cursive;">Special Elite</option>
<!--
                        <option style="font-family: 'Coda Caption', sans-serif;" value="'Coda Caption', sans-serif;">Coda Caption</option>
                        <option style="font-family: 'Bangers', cursive;"  value="'Bangers', cursive;">Bangers</option>
                        <option style="font-family: 'Rock Salt', cursive;"  value="'Rock Salt', cursive;">Rock Salt</option>-->
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
                        <!--<option style="font-family: 'Fontdiner Swanky', cursive;"  value="'Fontdiner Swanky', cursive;">Fontdiner Swanky</option>-->
                        <option style="font-family: 'Life Savers', cursive;"  value="'Life Savers', cursive;">Life Savers</option>
                        <option style="font-family: 'Dokdo', cursive;"  value="'Dokdo', cursive;">Dokdo</option>
                        <option style="font-family: 'Mountains of Christmas', cursive;"  value="'Mountains of Christmas', cursive;">Mountains of Christmas</option>
                        <option style="font-family: 'Milonga', cursive;"  value="'Milonga', cursive;">Milonga</option>
                        <option style="font-family: 'Lovers Quarrel', cursive;"  value="'Lovers Quarrel', cursive;">Lovers Quarrel</option>
                        <option style="font-family: 'Trade Winds', cursive;"  value="'Trade Winds', cursive;">Trade Winds</option>
                        <!-- <option style="font-family: 'Mystery Quest', cursive;"  value="'Mystery Quest', cursive;">Mystery Quest</option>
                        <option style="font-family: 'Henny Penny', cursive;"  value="'Henny Penny', cursive;">Henny Penny</option>
                        <option style="font-family: 'Barrio', cursive;"  value="'Barrio', cursive;">Barrio</option> -->
                        <option style="font-family: 'Kirang Haerang', cursive;"  value="'Kirang Haerang', cursive;">Kirang Haerang</option>
                        <!--<option style="font-family: 'Lakki Reddy', cursive;"  value="'Lakki Reddy', cursive;">Lakki Reddy</option>-->
                        <!-- <option style="font-family: 'Ruthie',cursive;"  value="'Ruthie',cursive;">Ruthie</option> -->
                      </select>
                      <select class="form-control font-family-select title-font-size text-center"  name="title-font-size" id="title2-font-size" onchange="AdjustSize(this.value,1)">
                        <option value="" style="font-weight:bold;" disabled selected>Size</option>
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
                    <select class="form-control font-family-select text-center ful-length"  name="text-select-icon" id="text-select-icon" onchange="AddIcon(this.value)">
                      <option value="">Select Icon</option>
                      <option value="1">Star</option>
                      <option value="2">Star 2</option>
                    </select>
                  </div>
                </div>
                <div class="bdr-bot" style="border-bottom:0;"> 
                 <input type="text" name="input_name" id="input_name" class="form-control input_name text-center" placeholder="Type Initials Here" maxlength="5" />
                  <div class="select_font">
                    <div class="dualFld_row">
                      <select class="form-control font-family-select text-center" onchange="changeTextFont(this.value,2)" name="text-font" id="initial_text-font">
                        <option style="font-weight:bold;" value="" disabled selected>Font</option>

                        <option style="font-family: Arial, sans-serif;" value="Arial, sans-serif;">Arial</option>

                        <option style="font-family: 'Amatic SC', cursive;" value="'Amatic SC', cursive;">Amatic SC</option>

                        <!-- <option style="font-family: 'Domine', serif;" value="'Domine', serif;">Domine</option> -->

                        <!--<option style="font-family: 'Gloria Hallelujah', cursive;" value="'Gloria Hallelujah', cursive;">Gloria Hallelujah</option>-->

                        <option style="font-family: 'Special Elite', cursive;"  value="'Special Elite', cursive;">Special Elite</option>
                        <!--
                        <option style="font-family: 'Coda Caption', sans-serif;" value="'Coda Caption', sans-serif;">Coda Caption</option>

                        <option style="font-family: 'Bangers', cursive;"  value="'Bangers', cursive;">Bangers</option>

                        <option style="font-family: 'Rock Salt', cursive;"  value="'Rock Salt', cursive;">Rock Salt</option>-->

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

                        <!--<option style="font-family: 'Fontdiner Swanky', cursive;"  value="'Fontdiner Swanky', cursive;">Fontdiner Swanky</option>-->

                        <option style="font-family: 'Life Savers', cursive;"  value="'Life Savers', cursive;">Life Savers</option>

                        <!-- <option style="font-family: 'Dokdo', cursive;"  value="'Dokdo', cursive;">Dokdo</option>

                        <option style="font-family: 'Mountains of Christmas', cursive;"  value="'Mountains of Christmas', cursive;">Mountains of Christmas</option>

                        <option style="font-family: 'Milonga', cursive;"  value="'Milonga', cursive;">Milonga</option> -->

                        <option style="font-family: 'Lovers Quarrel', cursive;"  value="'Lovers Quarrel', cursive;">Lovers Quarrel</option>

                        <option style="font-family: 'Trade Winds', cursive;"  value="'Trade Winds', cursive;">Trade Winds</option>

                        <!-- <option style="font-family: 'Mystery Quest', cursive;"  value="'Mystery Quest', cursive;">Mystery Quest</option>

                        <option style="font-family: 'Henny Penny', cursive;"  value="'Henny Penny', cursive;">Henny Penny</option>

                        <option style="font-family: 'Barrio', cursive;"  value="'Barrio', cursive;">Barrio</option> -->

                        <option style="font-family: 'Kirang Haerang', cursive;"  value="'Kirang Haerang', cursive;">Kirang Haerang</option>

                        <!--<option style="font-family: 'Lakki Reddy', cursive;"  value="'Lakki Reddy', cursive;">Lakki Reddy</option>-->

                        <!-- <option style="font-family: 'Ruthie',cursive;"  value="'Ruthie',cursive;">Ruthie</option> -->

                      </select>

                      <select class="form-control font-family-select text-center"  name="text-font-size-initial" id="initial-font-size" onchange="AdjustSize(this.value,2)">

                        <option value="" style="font-weight:bold;" disabled selected>Size</option>

                        <option value="8">8px</option>

                        <option value="10">10px</option>

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

                      </select>

                    </div>

                  </div>

                </div>

                <div class="form-group bdr-bot contact_info" style="border-bottom:0;">

                  <!--<label for="contact_info" class="ccontact_info">Add Contact Info $12</label><br /><span class="scustom_title"></span>-->

                  <input type="text" name="contact_info" id="contact_info" class="form-control contact_info text-center" placeholder="Type Email/Phone/Other Here" maxlength="30"  />

                  <div class="select_font">

                    <div class="dualFld_row">

                      <select class="form-control font-family-select text-center" onchange="changeTextFont(this.value,3)" name="text-font" id="contact_info_font">

                        <option style="font-weight:bold;" value="" disabled selected>Font</option>

                        <option style="font-family: Arial, sans-serif;" value="Arial, sans-serif;">Arial</option>

                        <option style="font-family: 'Amatic SC', cursive;" value="'Amatic SC', cursive;">Amatic SC</option>
<!--
                        <option style="font-family: 'Domine', serif;" value="'Domine', serif;">Domine</option>

                        <option style="font-family: 'Gloria Hallelujah', cursive;" value="'Gloria Hallelujah', cursive;">Gloria Hallelujah</option>-->

                        <option style="font-family: 'Special Elite', cursive;"  value="'Special Elite', cursive;">Special Elite</option>
<!--
                        <option style="font-family: 'Coda Caption', sans-serif;" value="'Coda Caption', sans-serif;">Coda Caption</option>

                        <option style="font-family: 'Bangers', cursive;"  value="'Bangers', cursive;">Bangers</option>

                        <option style="font-family: 'Rock Salt', cursive;"  value="'Rock Salt', cursive;">Rock Salt</option>-->

                        <option style="font-family: 'Shadows Into Light Two', cursive;"  value="'Shadows Into Light Two', cursive;">Shadows</option>

                        <option style="font-family: 'Nothing You Could Do', cursive;"  value="'Nothing You Could Do', sans-serif;">Nothing You Could Do</option>

                        <option style="font-family: 'Fredericka the Great', cursive;"  value="'Fredericka the Great', cursive;">Fredericka the Great</option>

                        <option style="font-family: 'Cabin Sketch', cursive;"  value="'Cabin Sketch', cursive;">Cabin Sketch</option>

                        <!-- <option style="font-family: 'Annie Use Your Telescope', cursive;"  value="'Annie Use Your Telescope', cursive;">Annie Use Your Telescope</option> -->

                        <option style="font-family: 'Nixie One', cursive;"  value="'Nixie One', cursive;">Nixie One</option>

                        <option style="font-family: 'Freckle Face', cursive;"  value="'Freckle Face', cursive;">Freckle Face</option>

                        <option style="font-family: 'Give You Glory', cursive;"  value="'Give You Glory', cursive;">Give You Glory</option>

                        <option style="font-family: 'Chelsea Market', cursive;"  value="'Chelsea Market', cursive;">Chelsea Market</option>

                        <!-- <option style="font-family: 'Mirza', cursive;"  value="'Mirza', cursive;">Mirza</option> -->

                        <option style="font-family: 'Bilbo Swash Caps', cursive;"  value="'Bilbo Swash Caps', cursive;">Bilbo Swash Caps</option>

                        <option style="font-family: 'Stardos Stencil', cursive;"  value="'Stardos Stencil', cursive;">Stardos Stencil</option>

                        <!--<option style="font-family: 'Fontdiner Swanky', cursive;"  value="'Fontdiner Swanky', cursive;">Fontdiner Swanky</option>-->

                        <option style="font-family: 'Life Savers', cursive;"  value="'Life Savers', cursive;">Life Savers</option>

                        <!-- <option style="font-family: 'Dokdo', cursive;"  value="'Dokdo', cursive;">Dokdo</option>

                        <option style="font-family: 'Mountains of Christmas', cursive;"  value="'Mountains of Christmas', cursive;">Mountains of Christmas</option>

                        <option style="font-family: 'Milonga', cursive;"  value="'Milonga', cursive;">Milonga</option> -->

                        <option style="font-family: 'Lovers Quarrel', cursive;"  value="'Lovers Quarrel', cursive;">Lovers Quarrel</option>

                        <option style="font-family: 'Trade Winds', cursive;"  value="'Trade Winds', cursive;">Trade Winds</option>

<!--                         <option style="font-family: 'Mystery Quest', cursive;"  value="'Mystery Quest', cursive;">Mystery Quest</option>

                        <option style="font-family: 'Henny Penny', cursive;"  value="'Henny Penny', cursive;">Henny Penny</option>

                        <option style="font-family: 'Barrio', cursive;"  value="'Barrio', cursive;">Barrio</option> -->

                        <option style="font-family: 'Kirang Haerang', cursive;"  value="'Kirang Haerang', cursive;">Kirang Haerang</option>

                        <!--<option style="font-family: 'Lakki Reddy', cursive;"  value="'Lakki Reddy', cursive;">Lakki Reddy</option>-->

                        <!-- <option style="font-family: 'Ruthie',cursive;"  value="'Ruthie',cursive;">Ruthie</option> -->

                      </select>

                      <select class="form-control font-family-select text-center"  name="text-font-size-cinfo" id="contact_info_size" onchange="AdjustSize(this.value,3)">

                        <option value="" style="font-weight:bold;" disabled selected>Size</option>

                        <option value="6">6px</option>

                        <option value="8">8px</option>

                        <option value="10">10px</option>

                        <option value="12">12px</option>

                        <option value="14">14px</option>

                        <option value="16">16px</option>

                        <option value="18">18px</option>

                        <option value="20">20px</option>

                        <option value="22">22px</option>

                        <option value="24">24px</option>

                        <option value="26">26px</option>

                      </select>

                    </div>

                    <div class="bdr-bot">      

            <div class="dividerNav form-control">

                <label>Adjust Position</label>

                <button class="form-control movLeft"><i class="fa fa-arrow-left" title="Adjust position of selected item"></i></button>

                <button class="form-control movRight"><i class="fa fa-arrow-right" title="Adjust position of selected item"></i></button>

                <button class="form-control movUp"><i class="fa fa-arrow-up"title="Adjust position of selected item"></i></button>

                <button class="form-control movDown"><i class="fa fa-arrow-down" title="Adjust position of selected item"></i></button>

            </div>

            </div> 

                    <select class="form-control font-family-select"  name="text-number-cover" id="text-number-cover">

                      <option value="" style="font-weight:bold;" selected>Number of Covers (Front/Back <!-- + 8 discs -->)</option>

                      <option value="1">1</option>

                      <option value="2">2</option>

                      <option value="3">3</option>

                      <option value="4">4</option>

                      <option value="5">5</option>

                    </select>

                  </div>

                </div>

                <div class="form-group btn_preview_design">

                  <div id="pd_cover"><span class="btn">Preview Design</span></div>

                </div>

                <div class="form-group btn_add_to_wishlist">

                <a class='btn' id='add_to_wishlist'><i class='fa fa-heart'></i> Add to Wishlist</a>

                </div>

                <div class="btn_approve_cover">

                  <div id="approve_cover"><span class="btn" onclick="canvasSaveImage();">Approve Cover Design and Add to Cart</span></div>

                </div>

              </div>

              <div class="btn_post_to_gallery">

                <div id="cover_page_post_to_gallery" class="btn_post_to_gallery"><span class="btn">Post Your Design to the Gallery for Others to See & Use</span></div>

              </div>

            </div>

            <div id="outer_cover_page">

        <div class="upper_div_working">

              <div id="upper_div_working" style="display:inline-block;width:100%;">

              <div id="working_area0" class="working_area" style="background-image:url(<?php echo site_url();?>/wp-content/uploads/asset/FrontCover_N.png);background-size: 100% auto;background-repeat: no-repeat;background-position: center;">

                <div class="upper_div222">

          <div class="limetBox">

                    <div class="title_page"> <span style="font-size: 12px;"><strong></strong></span></div>

                    <div class="title_page2"> <span style="font-size: 12px;"><strong></strong></span></div>

                     <div id="icon_under_title"></div>

          </div>

                </div>

                <div class="lower_div">

                  <div class="initial_page" contenteditable="false"> <span style="font-size: 12px;"><strong></strong></span> </div>

                </div>

              </div>

              <div id="working_area1" class="working_area" style="background-image:url(<?php echo site_url();?>/wp-content/uploads/asset/InsideCover_N.png);background-size: 100% auto;background-repeat: no-repeat;background-position: 26px center;">

                <div class="i_lower_div">

                  <div class="i_initial_page" id="i_initial_page" contenteditable="false"> <span style="font-size: 11px;"><strong></strong></span> </div>

                </div>

              </div> 

              </div>

        </div>

            <!-- <div class="btnsRow">

              <div id="next" class="next_step_btn"><a class="btn" href="<?php echo site_url();?>/page-design">Page Design</a></div>

              <div id="middle" class="next_step_btn"><a class="btn" href="<?php echo site_url();?>/divider">Divider Design</a></div>

              <div id="last" class="next_step_btn"><a class="btn" href="<?php echo site_url();?>/cart">Checkout</a></div>

            </div> -->

            </div>

          </div>

        </div>

        <!-- Modal -->

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

          <div class="modal-dialog modal-xl" role="document">

            <div class="modal-content">

              <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Preview of Cover Page</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>

              </div>

              <div class="modal-body">

                <div align="center" style="white-space:nowrap;"> <img src="" alt="cover design preview" id="cover_design_preview" class="modal_preview_image" width="620" height="451"  /> <!-- <img src="" alt="cover design preview" id="cover_design_preview2" class="modal_preview_image" /> --> </div>

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
</div><div style="display:none;">
<?php

echo "<pre>";print_r($_SESSION);print_r($_POST);
$post=0;
if(isset($_POST)){  
  if(isset($_POST['redesign_id']) || isset($_POST['design_id'])){
    $post=1;
    unset($_SESSION['cover_icolor']);
    unset($_SESSION['title_page']);
    unset($_SESSION['title_page2']);
    unset($_SESSION['initial_page']);
    unset($_SESSION['i_initial_page']);
    unset($_SESSION['cover_name']);
    unset($_SESSION['icon']);
    unset($_SESSION['TextFont_title_page1']);
    unset($_SESSION['AdjustSize_title_page2']);    
    unset($_SESSION['TextFont_title_page']);
    unset($_SESSION['AdjustSize_title_page']);
    unset($_SESSION['TextFont_initial_page']);
    unset($_SESSION['AdjustSize_initial_page']);
    unset($_SESSION['TextFont_i_initial_page']);
    unset($_SESSION['AdjustSize_i_initial_page']);
    unset($_SESSION['number_of_cover']);
    unset($_SESSION['emb_color']);
    //var_dump($_POST);
    if($_POST['redesign_id']!=""){
      $re_design_id=$_POST['redesign_id'];
      $post_id = $wpdb->get_results("SELECT json_data From re_order_design where design_id='{$re_design_id}' and page_name='divider_page'");
    }
    elseif($_POST['design_id']!=""){
       $design_id=$_POST['design_id'];
       $post_id = $wpdb->get_results("SELECT json_data From custom_gallery where image_id='{$design_id}'");
    }
    //echo "<pre>";print_r(json_decode(stripslashes($post_id[0]->json_data)));//exit;
    $j_string=json_decode(stripslashes($post_id[0]->json_data));
    $scover_name           =$j_string->cover_name;
    $scover_color_name     =$j_string->cover_color_name;            
    $stext_color_name      =$j_string->text_color_name;
    $salum_disc_color_name =$j_string->alum_disc_color_name;
    $salum_disc_size       =$j_string->alum_disc_size;
    $scustom_title         =$j_string->title_text;
    $title_pagef           =$j_string->title_pagef;
    $title_pages           =$j_string->title_pages;
    $title_pageml          =$j_string->title_pageml;
    $title_pagemt          =$j_string->title_pagemt;
    $scustom_title2        =$j_string->title_text2;
    $title2_pagef          =$j_string->title2_pagef;
    $title2_pages          =$j_string->title2_pages;
    $title2_pageml         =$j_string->title2_pageml;
    $title2_pagemt         =$j_string->title2_pagemt;
    $stitle_text_font      =$j_string->title_text_font;
    $stitle_text_size      =$j_string->title_text_size;
    $stext_select_icon     =$j_string->select_icon;
    $sinput_name           =$j_string->initial_text;
    $initial_pagef         =$j_string->initial_pagef;
    $initial_pages         =$j_string->initial_pages;
    $initial_pageml        =$j_string->initial_pageml;
    $initial_pagemt        =$j_string->initial_pagemt;
    $sinitial_text_font    =$j_string->initial_text_font;
    $sinitial_text_size    =$j_string->initial_text_size;
    $scontact_info         =$j_string->contact_info;
    $scontact_info_font    =$j_string->contact_info_font;
    $scontact_info_size    =$j_string->contact_info_size;
    $i_initial_pagef       =$j_string->i_initial_pagef;
    $i_initial_pages       =$j_string->i_initial_pages;
    $i_initial_pageml      =$j_string->i_initial_pageml;
    $i_initial_pagemt      =$j_string->i_initial_pagemt;
    $stext_select_icon     =$j_string->text_select_icon;
    $stext_number_cover    =$j_string->qnt;

  }
  if(isset($_POST['cdesign']) && $_POST['cdesign']!=""){

    //var_dump($_POST);exit;
    //global $wpdb;
    $post=1;
    unset($_SESSION['cover_icolor']);
    unset($_SESSION['title_page']);
    unset($_SESSION['title_page2']);
    unset($_SESSION['initial_page']);
    unset($_SESSION['i_initial_page']);
    unset($_SESSION['cover_name']);
    unset($_SESSION['icon']);
    unset($_SESSION['TextFont_title_page1']);
    unset($_SESSION['AdjustSize_title_page2']);    
    unset($_SESSION['TextFont_title_page']);
    unset($_SESSION['AdjustSize_title_page']);
    unset($_SESSION['TextFont_initial_page']);
    unset($_SESSION['AdjustSize_initial_page']);
    unset($_SESSION['TextFont_i_initial_page']);
    unset($_SESSION['AdjustSize_i_initial_page']);
    unset($_SESSION['number_of_cover']);
    unset($_SESSION['emb_color']);
    $design_id=$_POST['cdesign'];
    $wpdb->insert('design_order', array(
       'design_id' => $design_id,
       'user_id' => get_current_user_id(),
       'datetime' =>  date("Y-m-d H:i:s"),
    ));
    $id = $wpdb->insert_id;
    //echo "SELECT json_data From custom_gallery where image_id='{$design_id}'";
    $post_id = $wpdb->get_results("SELECT json_data From custom_gallery where image_id='{$design_id}'");
    //echo "<pre>";print_r(json_decode(stripslashes($post_id[0]->json_data)));
    $j_string=json_decode(stripslashes($post_id[0]->json_data));
    //print_r($j_string);
    //json_data: {"cover_name":"Imran","cover_color_name":"Classic Blue Cover","text_color_name":"","alum_disc_color_name":"","alum_disc_size":"","title_text":"Worry Less","title_pagef":"\"Fredericka the Great\", cursive","title_pages":"12px","title_pageml":"0px","title_pagemt":"0px","title_text2":"Smile More","title2_pagef":"\"Fredericka the Great\", cursive","title2_pages":"12px","title2_pageml":"0px","title2_pagemt":"0px","select_icon":"","initial_text":"faith","initial_text_font":"'Fredericka the Great', cursive;","initial_pagef":"\"Fredericka the Great\", cursive","initial_pages":"15px","initial_pageml":"0px","initial_pagemt":"0px","contact_info":"52 EAST STUDIO","i_initial_pagef":"\"Fredericka the Great\", cursive","i_initial_pages":"15px","i_initial_pageml":"0px","i_initial_pagemt":"0px","text_select_icon":"","qnt":"1"}

    $scover_name           =$j_string->cover_name;
    $scover_color_name     =$j_string->cover_color_name;            
    $stext_color_name      =$j_string->text_color_name;
    $salum_disc_color_name =$j_string->alum_disc_color_name;
    $salum_disc_size       =$j_string->alum_disc_size;
    $scustom_title         =$j_string->title_text;
    $title_pagef           =$j_string->title_pagef;
    $title_pages           =$j_string->title_pages;
    $title_pageml          =$j_string->title_pageml;
    $title_pagemt          =$j_string->title_pagemt;
    $scustom_title2        =$j_string->title_text2;
    $title2_pagef          =$j_string->title2_pagef;
    $title2_pages          =$j_string->title2_pages;
    $title2_pageml         =$j_string->title2_pageml;
    $title2_pagemt         =$j_string->title2_pagemt;
    $stitle_text_font      =$j_string->title_text_font;
    $stitle_text_size      =$j_string->title_text_size;
    $stext_select_icon     =$j_string->select_icon;
    $sinput_name           =$j_string->initial_text;
    $initial_pagef         =$j_string->initial_pagef;
    $initial_pages         =$j_string->initial_pages;
    $initial_pageml        =$j_string->initial_pageml;
    $initial_pagemt        =$j_string->initial_pagemt;
    $sinitial_text_font    =$j_string->initial_text_font;
    $sinitial_text_size    =$j_string->initial_text_size;
    $scontact_info         =$j_string->contact_info;
    $scontact_info_font    =$j_string->contact_info_font;
    $scontact_info_size    =$j_string->contact_info_size;
    $i_initial_pagef       =$j_string->i_initial_pagef;
    $i_initial_pages       =$j_string->i_initial_pages;
    $i_initial_pageml      =$j_string->i_initial_pageml;
    $i_initial_pagemt      =$j_string->i_initial_pagemt;
    $stext_select_icon     =$j_string->text_select_icon;
    $stext_number_cover    =$j_string->qnt;

  }

} ?> </div>

<script type="text/javascript">

var current_main_box=emboss_name=cover_name='';
var subtotal=firstDone=sel_title=c_cover=number_of_cover=0;
var sel_initial=sel_cntinfo=s_title=0;
var s_initial=s_cntinfo=add_to_wishlist=0;
var lg_add=sm_add=size_add=cover_icon=0;
var size=disc_gcolor=focus_id='';
var alumdisccolor=covercolor1='';
var site_url='<?php echo site_url();?>';

$(document).ready(function() {
   
  <?php
if(isset($_POST) && $post == 1){
   //echo 'alert("IF");';
   if(isset($stext_number_cover) && $stext_number_cover !=""){

        echo 'jQuery("#text-number-cover").val("'.$stext_number_cover.'");';
   }
   if(isset($scover_name) && $scover_name !=""){
    echo 'jQuery("#cover_name").val("'.$scover_name.'");';
    echo 'jQuery("#cover_name").trigger("keyup");';
   }  
   
   if(isset($scover_color_name) && $scover_color_name !=""){

    $cover_icolor = str_replace(" ","",$scover_color_name);
    $cover_icolor = str_replace("Cover","",$cover_icolor);
    echo 'jQuery("#'.$cover_icolor.'").trigger("click");';
   }
   if(isset($salum_disc_size) && $salum_disc_size !=""){

    echo 'jQuery("#'.$salum_disc_size.'").trigger("click");';
   }
   if(isset($salum_disc_color_name) && $salum_disc_color_name !=""){

    $disc_icolor = $salum_disc_color_name."Disc";
    echo 'jQuery("#'.$disc_icolor.'").trigger("click");';
   }
   if(isset($scustom_title) && $scustom_title !=""){    

    echo 'jQuery("#custom_title").val("'.$scustom_title.'");';
    echo 'jQuery("#custom_title").trigger("keyup");';
   }
   if(isset($title_pagef) && $title_pagef!=""){

    echo 'jQuery("#text-font").val("'.str_replace('"',"'",$title_pagef).';");';
    echo 'jQuery("#text-font").trigger("change");'; 
  } 
  if(isset($title_pages) && $title_pages!=""){

    echo 'jQuery("#title-font-size").val("'.str_replace('px','',$title_pages).'");';
    echo 'jQuery("#title-font-size").trigger("change");'; 
  } //echo "<pre>1";var_dump($title_pages);exit;
  if(isset($title_pageml) && $title_pageml!=""){
    echo 'jQuery(".title_page>span").css("margin-left","'.$title_pageml.'");';
  }

  if(isset($title_pagemt) && $title_pagemt!=""){
    echo 'jQuery(".title_page>span").css("margin-top","'.$title_pagemt.'");';
  }
  if(isset($scustom_title2) && $scustom_title2!=""){
    echo 'jQuery("#custom_title2").val("'.$scustom_title2.'");';
    echo 'jQuery("#custom_title2").trigger("keyup");';
  } 
  if(isset($title2_pagef) && $title2_pagef!=""){

    echo 'jQuery("#text-font2").val("'.str_replace('"',"'",$title2_pagef).';");';
    echo 'jQuery("#text-font2").trigger("change");'; 
  } 
  if(isset($title2_pages) && $title2_pages!=""){

    echo 'jQuery("#title2-font-size").val("'.str_replace('px','',$title2_pages).'");';
    echo 'jQuery("#title2-font-size").trigger("change");'; 
  }
  if(isset($title2_pageml) && $title2_pageml!=""){
    echo 'jQuery(".title_page2>span").css("margin-left","'.$title_pageml.'");';
  }
  if(isset($title2_pagemt) && $title2_pagemt!=""){
    echo 'jQuery(".title_page2>span").css("margin-top","'.$title_pagemt.'");';
  }
  if(isset($initial_pagef) && $initial_pagef!=""){

    echo 'jQuery("#initial_text-font").val("'.str_replace('"',"'",$initial_pagef).';");';
    echo 'jQuery("#initial_text-font").trigger("change");'; 
  } 
  if(isset($initial_pages) && $initial_pages!=""){

    echo 'jQuery("#initial-font-size").val("'.str_replace('px','',$initial_pages).'");';
    echo 'jQuery("#initial-font-size").trigger("change");'; 
  }
  if(isset($initial_pageml) && $initial_pageml!=""){
    echo 'jQuery(".initial_page>span").css("margin-left","'.$initial_pageml.'");';
  }
  if(isset($initial_pagemt) && $initial_pagemt!=""){
    echo 'jQuery(".initial_page>span").css("margin-top","'.$initial_pagemt.'");';
  }
  if(isset($scontact_info) && $scontact_info!=""){

    echo 'jQuery("#contact_info").val("'.$scontact_info.'");';
    echo 'jQuery("#contact_info").trigger("keyup");';
  }
  if(isset($sinput_name) && $sinput_name!=""){

    echo 'jQuery("#input_name").val("'.$sinput_name.'");';
    echo 'jQuery("#input_name").trigger("keyup");';
  }
  if(isset($stext_color_name) && $stext_color_name!=""){

    $emb_color = str_replace(" ","",str_replace("Title","",$stext_color_name));
    echo 'jQuery("#'.$emb_color.'").trigger("click");';
  }
  if(isset($sinitial_text_font) && $sinitial_text_font!=""){

    $sinitial_text_font = stripslashes($sinitial_text_font);
    echo 'jQuery("#initial_text-font").val("'.$sinitial_text_font.'");';
  }  
  if(isset($stext_select_icon) && $stext_select_icon!=""){
    echo 'jQuery("#text-select-icon").val("'.$stext_select_icon.'");';
    echo 'AddIcon("'.$stext_select_icon.'");';
  }  
  
  if(isset($i_initial_pagef) && $i_initial_pagef!=""){

    $i_initial_pagef = $i_initial_pagef.";";
    echo 'jQuery("#contact_info_font").val("'.str_replace('"',"'",$i_initial_pagef).'");';
    echo 'jQuery("#contact_info_font").trigger("change");';
  }
  if(isset($i_initial_pages) && $i_initial_pages!=""){

    $contact_info_size = str_replace('px','',$i_initial_pages);
    if($contact_info_size%2==1){
       $contact_info_size--;
    }
    echo 'jQuery("#contact_info_size").val("'.$contact_info_size.'");';
    echo 'jQuery("#contact_info_size").trigger("change");';
  }
  if(isset($i_initial_pageml) && $i_initial_pageml!=""){

    $i_initial_pageml = $i_initial_pageml;
    echo 'jQuery(".i_initial_page>span").css("margin-left","'.$i_initial_pageml.'");';
  }
  if(isset($i_initial_pagemt) && $i_initial_pagemt!=""){
    echo 'jQuery(".i_initial_page>span").css("margin-top","'.$i_initial_pagemt.'");';
  }
}else{
   //echo 'alert("ELSE");';
   if(isset($_SESSION['number_of_cover']) && $_SESSION['number_of_cover']!=""){

      $number_of_cover = $_SESSION['number_of_cover'];
      echo 'jQuery("#text-number-cover").val("'.$number_of_cover.'");';
   }

   if(isset($_SESSION['cover_name']) && $_SESSION['cover_name']!=""){

    $cover_name = $_SESSION['cover_name'];
    echo 'jQuery("#cover_name").val("'.$cover_name.'");';
    echo 'jQuery("#cover_name").trigger("keyup");';
  }

  
  if(isset($_SESSION['cover_icolor']) && $_SESSION['cover_icolor']!=""){

    $cover_icolor = str_replace(" ","",$_SESSION['cover_icolor']);
    $cover_icolor = str_replace("Cover","",$cover_icolor);
    echo 'jQuery("#'.$cover_icolor.'").trigger("click");';
  }

  if(isset($_SESSION['disc_icolor']) && $_SESSION['disc_icolor']!=""){

    $disc_icolor = $_SESSION['disc_icolor']."Disc";
    echo 'jQuery("#'.$disc_icolor.'").trigger("click");';
  }

  if(isset($_SESSION['lg']) && $_SESSION['lg']!=""){

    $lg = $_SESSION['lg'];
    echo 'jQuery("#'.$lg.'").trigger("click");';
  }

  if(isset($_SESSION['sm']) && $_SESSION['sm']!=""){

    $sm = $_SESSION['sm'];
    echo 'jQuery("#'.$sm.'").trigger("click");';
  }

  if(isset($_SESSION['title_page']) && $_SESSION['title_page']!=""){

    $title_page = $_SESSION['title_page'];
    echo 'jQuery("#custom_title").val("'.$title_page.'");';
    echo 'jQuery("#custom_title").trigger("keyup");';
  }
  if(isset($_SESSION['title_page2']) && $_SESSION['title_page2']!=""){

    $title_page2 = $_SESSION['title_page2'];
    echo 'jQuery("#custom_title2").val("'.$title_page2.'");';
    echo 'jQuery("#custom_title2").trigger("keyup");';
  } 
  if(isset($_SESSION['initial_page']) && $_SESSION['initial_page']!=""){

    $initial_page = $_SESSION['initial_page'];
    echo 'jQuery("#input_name").val("'.$initial_page.'");';
    echo 'jQuery("#input_name").trigger("keyup");';
  }
  
  if(isset($_SESSION['i_initial_page']) && $_SESSION['i_initial_page']!=""){

    $i_initial_page = $_SESSION['i_initial_page'];
    echo 'jQuery("#contact_info").val("'.$i_initial_page.'");';
    echo 'jQuery("#contact_info").trigger("keyup");';
  }
  
  if(isset($_SESSION['emb_color']) && $_SESSION['emb_color']!=""){

    $emb_color = $_SESSION['emb_color']."Foil";
    echo 'jQuery("#'.$emb_color.'").trigger("click");';
  }

  if(isset($_SESSION['TextFont_title_page']) && $_SESSION['TextFont_title_page']!=""){

    $TextFont_title_page = stripslashes($_SESSION['TextFont_title_page']).";";
    echo 'jQuery("#text-font").val("'.$TextFont_title_page.'");';
    echo 'jQuery("#text-font2").val("'.$TextFont_title_page.'");';
   }   
  if(isset($_SESSION['TextFont_i_initial_page']) && $_SESSION['TextFont_i_initial_page']!=""){
    $TextFont_i_initial = stripslashes($_SESSION['TextFont_i_initial_page']).";";
    echo 'jQuery("#contact_info_font").val("'.$TextFont_i_initial.'");';
  }

  if(isset($_SESSION['AdjustSize_title_page']) && $_SESSION['AdjustSize_title_page']!=""){

    $AdjustSize_title_page = $_SESSION['AdjustSize_title_page'];
    echo 'jQuery("#title-font-size").val("'.stripslashes($AdjustSize_title_page).'");';
  }

  if(isset($_SESSION['AdjustSize_initial_page']) && $_SESSION['AdjustSize_initial_page']!=""){

    $AdjustSize_initial_page = $_SESSION['AdjustSize_initial_page'];
    echo 'jQuery("#initial-font-size").val("'.stripslashes($AdjustSize_initial_page).'");';
  }

  if(isset($_SESSION['AdjustSize_i_initial_page']) && $_SESSION['AdjustSize_i_initial_page']!=""){

    $AdjustSize_i_initial_page = $_SESSION['AdjustSize_i_initial_page'];
    echo 'jQuery("#contact_info_size").val("'.stripslashes($AdjustSize_i_initial_page).'");';

  }

  if(isset($_SESSION['icon']) && $_SESSION['icon']!=""){
    $icon = $_SESSION['icon'];
    echo 'jQuery("#text-select-icon").val("'.$icon.'");';
    echo 'AddIcon("'.$icon.'");';
  }
}
?>
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

      $(".item_cover_icolor.item_n").html(titletext+' Cover');

      $(".item_cover_icolor.item_p").html('<strong>$20</strong>&nbsp;&nbsp;<i id="item_cover_icolor" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');



      if(c_cover==0){



         subtotal +=20;



      }



      $(".item_subtotal.item_n").html("Q-"+number_of_cover+" "+cover_name);

      $(".item_subtotal.item_p").html('<strong>$'+parseInt(subtotal)*parseInt(number_of_cover)+'</strong>');



      c_cover=1;



      $("#cover_color_name").val(titletext+' Cover');

      SendToSession('cover_icolor',titletext+' Cover','set'); 

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

      SendToSession('cover_icolor','','destroy');





    }else if(id == "item_cover_embosscolor"){



      



      subtotal -=18;console.log('item_cover_embosscolor',subtotal);



      $("#custom_title").val('');

      $("#custom_title2").val('');

      $("#text-font").val('');

      $("#title-font-size").val('');

      $(".title_page>span>strong").html('');

      $(".title_page2>span>strong").html('');

      SendToSession('title_page','','destroy');

      SendToSession('title_page2','','destroy');

      SendToSession('TextFont_title_page','','destroy');

      SendToSession('AdjustSize_title_page','','destroy');

      SendToSession('emb_color','','destroy');

      SendToSession('disc_icolor','','destroy');

    }



    else if(id == "item_initial_embosscolor"){



      subtotal -=10;

      $("#input_name").val('');

      $("#initial_text-font").val('');

      $("#initial-font-size").val('');

      $(".initial_page>span>strong").html('');

      SendToSession('initial_page','','destroy');

      SendToSession('TextFont_initial_page','','destroy');

      SendToSession('AdjustSize_initial_page','','destroy');



    }



    else if(id == "item_innercolor_embosscolor"){





      subtotal -=12;

      $("#contact_info").val('');

      $("#contact_info_font").val('');

      $("#contact_info_size").val('');

      $(".i_initial_page>span>strong").html('');

      SendToSession('i_initial_page','','destroy');

      SendToSession('TextFont_i_initial_page','','destroy');

      SendToSession('AdjustSize_i_initial_page','','destroy');



    }



    else if(id == "item_disc_size_lg"){



      subtotal -=16;

      $(".item_disc_size").empty();

      size='';

      lg_add=sm_add=size_add=0;

      disc_gcolor='';

      SendToSession('lg','','destroy');

    }







    else if(id == "item_disc_size_sm"){



      subtotal -=10;

      $(".item_disc_size").empty();

      size='';

      lg_add=sm_add=size_add=0;

      disc_gcolor='';

      SendToSession('sm','','destroy');

    }







    else if(id == "item_cover_icon"){



      subtotal -=10;



      $(".item_cover_icon").empty();

      $("#icon_under_title").html('');

      $('#text-select-icon').prop('selectedIndex',0);

      SendToSession('icon','','destroy');

      cover_icon=0;



    }







    /////////////////////////////////////////////



    if(subtotal <= 0){



      $(".item_subtotal").empty();

      var s_all=['number_of_cover','cover_name','cover_icolor','cover_icolor','disc_icolor','lg','sm','title_page','title_page2','initial_page','i_initial_page','emb_color','TextFont_title_page','TextFont_initial_page','TextFont_i_initial_page','AdjustSize_title_page','AdjustSize_initial_page','AdjustSize_i_initial_page,icon'];

      for(i=0;i<=s_all.length;i++){

        console.log(s_all[i]);

        SendToSession(s_all[i],'','destroy');

      }

      





    }else if(subtotal > 0){



      $(".item_subtotal").empty();

      $(".item_subtotal.item_n").html("Q-"+number_of_cover+" "+cover_name);

      $(".item_subtotal.item_p").html('<strong>$'+parseInt(subtotal)*parseInt(number_of_cover)+'</strong>');

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
    $(".item_disc_size.item_n").html(disc_gcolor+" Discs-28mm");
    $(".item_disc_size.item_p").html('<strong>$16</strong>&nbsp;&nbsp;<i id="item_disc_size_lg" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');

    SendToSession('lg','lg','set');
    SendToSession('sm','','destroy');
    lg_add=1;
    if(size=='lg'){
      subtotal -=16;
    }else if(size=='sm'){
        subtotal -=10;
    }

    $("#alum_disc_size").val(disc_gcolor+" Discs-28mm");
    $(".upper_div222").css("width","225px");
    $(".initial_page").css("bottom","90px");
    $(".initial_page").css("right","55px");
    size_add=1;
    size='lg';
    subtotal +=16;
    console.log(size);
    console.log(site_url+"/wp-content/uploads/asset/"+covercolor1+alumdisccolor+'Large.jpeg');
  var imageUrl=site_url+"/wp-content/uploads/asset/"+covercolor1+alumdisccolor+'Large.jpeg';
  $("#working_area0").css("background-image",'url(' + imageUrl + ')');
  //$("#working_area1").css("background-image",'url(' + imageUrl + ')');
  }

  else if(sel_id=="sm"){

    $(".item_disc_size").empty();
    $(".item_disc_size.item_n").html(disc_gcolor+" Discs-Small");
    $(".item_disc_size.item_p").html('<strong>$10</strong>&nbsp;&nbsp;<i id="item_disc_size_sm" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');

    SendToSession('sm','sm','set');
    SendToSession('lg','','destroy');
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
    console.log(site_url+"/wp-content/uploads/asset/"+covercolor1+alumdisccolor+'Small.jpeg');
    var imageUrl=site_url+"/wp-content/uploads/asset/"+covercolor1+alumdisccolor+'Small.jpeg';
    $("#working_area0").css("background-image",'url(' + imageUrl + ')');
     //$("#working_area1").css("background-image",'url(' + imageUrl + ')');
    }
      $(".upper_div222").css("width","225px");
      $(".initial_page").css("bottom","70px");
      $(".initial_page").css("right","45px");
      $(".item_subtotal").empty();
      $(".item_subtotal.item_n").html("Q-"+number_of_cover+" "+cover_name);
      $(".item_subtotal.item_p").html('<strong>$'+parseInt(subtotal)*parseInt(number_of_cover)+'</strong>');
}); 



$(document).on('change','.select_title',function(){});





$(document).on('keyup','.cover_name',function(){



    number_of_cover = $("#number_of_cover").val();

    if(typeof number_of_cover == 'undefined')

      number_of_cover =1;

      

    cover_name=$(this).val();

    console.log(cover_name);

    SendToSession("cover_name",cover_name,'set');

    

    if(subtotal>0){

      $(".item_subtotal.item_n").html("Q-"+number_of_cover+" "+cover_name);

    }

    /*$(".item_cover_name").empty();

    $(".item_cover_name.item_p").html("Cover Name:");

    $(".item_cover_name.item_n").html(text+'<!--&nbsp;&nbsp;<i id="item_cover_name" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i-->');*/



});



function addNewlines(str) {



  var result = '';





  while (str.length > 0) {





    result += str.substring(0, 15) + '<br />';

    str = str.substring(15);



  }

  return result;

}

$(document).on('click','#custom_title,#custom_title2,#input_name,#contact_info',function(){



        var clk_id = $(this).attr('id');

        if(clk_id == 'custom_title' || clk_id == 'custom_title2'){

          focus_id='upper_div222';

        }

        else if(clk_id == 'input_name'){

            focus_id='initial_page';

        }else if(clk_id == 'contact_info'){

          focus_id='i_lower_div';



        }

        console.log($(this).attr('id'));

        console.log(focus_id);

});

$(document).on('keyup','#custom_title',function(){



  console.log($(this).val());//console.log($(this).attr("counter"));

  var text=$(this).val();

  //text = addNewlines(text);

  focus_id='upper_div222';

  text=text.replace(/\r\n|\n|\r/g, '<br />');

  $(".title_page span strong").html(text);

  //$('.title_page').textfill({ });

  SendToSession('title_page',text,"set");

    var fsize1 = parseInt($('.title_page span').css('font-size'));

   if (fsize1 % 2 === 0) { /* we are even */ }

     else { fsize1++; /* we are odd */ }

  $("#title-font-size").val(parseInt(fsize1));



  console.log('fsize1',fsize1);

  console.log('firstDone',firstDone);

  if(firstDone==1){



    $(".item_cover_embosscolor").empty();

    $(".item_cover_embosscolor.item_n").html(emboss_name+" Title");

    $(".item_cover_embosscolor.item_p").html('<strong>$18</strong>&nbsp;&nbsp;<i id="item_cover_embosscolor" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');

    

    if(sel_title==0){



      subtotal +=18;

      sel_title++;

    }



    $(".item_subtotal.item_n").html("Q-"+number_of_cover+" "+cover_name);

    $(".item_subtotal.item_p").html('<strong>$'+parseInt(subtotal)*parseInt(number_of_cover)+'</strong>');







 }s_title=1;



});

$(document).on('keyup','#custom_title2',function(){



  console.log($(this).val());//console.log($(this).attr("counter"));

  var text=$(this).val();

  //text = addNewlines(text);

  focus_id='upper_div222';

  text=text.replace(/\r\n|\n|\r/g, '<br />');

  $(".title_page2 span strong").html(text);

  //$('.title_page2').textfill({ });

  var fsize2 = parseInt($('.title_page2 span').css('font-size'));

  if (fsize2 % 2 === 0) { /* we are even */ }

    else { fsize2++; /* we are odd */ }

  $("#title-font-size").val(parseInt(fsize2));

  SendToSession('title_page2',text,"set");

  console.log('fsize2',fsize2);

  

  console.log('firstDone',firstDone);



  s_title=1;



});



$(document).on('keyup','.input_name',function(){



  console.log($(this).val());//console.log($(this).attr("counter"));

  var text=$(this).val();

  $(".initial_page strong").html(text);

  //$('.initial_page').textfill({ });

  var initial_size = parseInt($('.initial_page span').css('font-size'));

  if (initial_size % 2 === 0) { /* we are even */ }

    else { initial_size++; /* we are odd */ }

  $("#initial-font-size").val(initial_size);

    SendToSession('initial_page',text,"set");

  console.log('initial_size',initial_size);

  focus_id='initial_page';

  if(firstDone==1){

    

  $(".item_initial_embosscolor").empty();

  $(".item_initial_embosscolor.item_n").html(emboss_name+" Initials");

  $(".item_initial_embosscolor.item_p").html('<strong>$10</strong>&nbsp;&nbsp;<i id="item_initial_embosscolor" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');

  

  if(sel_initial==0){



      subtotal +=10;

      sel_initial++;



   }

    $(".item_subtotal.item_n").html("Q-"+number_of_cover+" "+cover_name);

    $(".item_subtotal.item_p").html('<strong>$'+parseInt(subtotal)*parseInt(number_of_cover)+'</strong>');



  } s_initial=1;





});





$(document).on('keyup','.contact_info',function(e){





  console.log("tddf");

  console.log($(this).val());//console.log($(this).attr("counter"));



  var text=$(this).val();

  $(".i_initial_page strong").html(text);

  //$('.i_initial_page').textfill({ });

  focus_id='i_lower_div';

  e.preventDefault();

  e.stopPropagation();

  SendToSession('i_initial_page',text,"set");

  var contact_info = parseInt($('.i_initial_page span').css('font-size'));

  if (contact_info % 2 === 0) { /* we are even */ }

    else { contact_info++; /* we are odd */ }

  $("#contact_info_size").val(parseInt(contact_info));

  console.log('contact_info_size',contact_info);

  

  if(firstDone==1){



  $(".item_innercolor_embosscolor").empty();

  $(".item_innercolor_embosscolor.item_n").html(emboss_name+" Contact Info");

  $(".item_innercolor_embosscolor.item_p").html('<strong>$12</strong>&nbsp;&nbsp;<i id="item_innercolor_embosscolor" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');

  

   if(sel_cntinfo==0){



      subtotal +=12;

      sel_cntinfo++;

    }



    $(".item_subtotal.item_n").html("Q-"+number_of_cover+" "+cover_name);

    $(".item_subtotal.item_p").html('<strong>$'+parseInt(subtotal)*parseInt(number_of_cover)+'</strong>');

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

  var icon_val = $("#text-select-icon").val();

  if(icon_val !=""){

    AddIcon(icon_val) //change Icon color if icon selected

  }

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

    //$(".item_subtotal.item_n").empty();

    //$(".item_subtotal.item_p").empty();



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

  $(".title_page2 strong").css("color",color);

  $(".initial_page strong").css("color",color);

  $(".i_initial_page strong").css("color",color);





  var titletext=$(this).attr("title");

  $('#text_color_name').val(titletext+" Title");

  //SendToSession('text_color_name',titletext+" Title","set");



  if(s_title==1){



    titletext=$(this).attr("data-id");

    $(".item_cover_embosscolor").empty();

    $(".item_cover_embosscolor.item_n").html(titletext+" Title");

    $(".item_cover_embosscolor.item_p").html('<strong>$18</strong>&nbsp;&nbsp;<i id="item_cover_embosscolor" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');

    SendToSession('emb_color',titletext,"set");



    if(sel_title==0){



      subtotal +=18;

      sel_title++;

    }



    $(".item_subtotal.item_n").html("Q-"+number_of_cover+" "+cover_name);

    $(".item_subtotal.item_p").html('<strong>$'+parseInt(subtotal)*parseInt(number_of_cover)+'</strong>');



  }



  if(s_initial==1){



    $(".item_initial_embosscolor").empty();

    $(".item_initial_embosscolor.item_n").html(emboss_name+" Initial");

    $(".item_initial_embosscolor.item_p").html('<strong>$10</strong>&nbsp;&nbsp;<i id="item_initial_embosscolor" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');

    

    if(sel_initial==0){



      subtotal +=10;

      sel_initial++;



    }



    $(".item_subtotal.item_n").html("Q-"+number_of_cover+" "+cover_name);

    $(".item_subtotal.item_p").html('<strong>$'+parseInt(subtotal)*parseInt(number_of_cover)+'</strong>');



  }



  if(s_cntinfo==1){

    

    $(".item_innercolor_embosscolor").empty();

    $(".item_innercolor_embosscolor.item_n").html(emboss_name+" Contact Info");

    $(".item_innercolor_embosscolor.item_p").html('<strong>$12</strong>&nbsp;&nbsp;<i id="item_innercolor_embosscolor" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');

    

     if(sel_cntinfo==0){



        subtotal +=12;

        sel_cntinfo++;

      }



      $(".item_subtotal.item_n").html("Q-"+number_of_cover+" "+cover_name);

      $(".item_subtotal.item_p").html('<strong>$'+parseInt(subtotal)*parseInt(number_of_cover)+'</strong>');

    }



});

$(document).on('click','.disc_icolor',function(e){


  var text        = $(this).attr("title");
  covercolor1 = $("#cover_color_name").val();
  covercolor1     = covercolor1.replace("Classic ", "");
  covercolor1     = covercolor1.replace("Fog ", "");
  covercolor1     = covercolor1.replace(" Cover", "");
  //console.log(covercolor);
  alumdisccolor=text.replace("Classic ","");
  alumdisccolor=alumdisccolor.replace("Fog ","");
  alumdisccolor=alumdisccolor.replace(" Cover ","");
  //var imageUrl = $(this).attr("src");
  disc_gcolor=text;
  console.log(site_url+"/wp-content/uploads/asset/"+covercolor1+alumdisccolor+'Small.jpeg');
  var imageUrl=site_url+"/wp-content/uploads/asset/"+covercolor1+alumdisccolor+'Small.jpeg';
  $("#working_area0").css("background-image",'url(' + imageUrl + ')');
  //$("#working_area1").css("background-image",'url(' + imageUrl + ')');

  SendToSession('working_area0','',"destroy");
  SendToSession('working_area1','',"destroy");
  SendToSession('disc_icolor',text,"set");

  $("#alum_disc_color_name").val(text);

});



$(document).on('change','#text-number-cover',function(e){

  

  number_of_cover = $("#text-number-cover").val();

  $(".item_subtotal.item_n").html("Q-"+number_of_cover+" "+cover_name);

  $(".item_subtotal.item_p").html('<strong>$'+parseInt(subtotal)*parseInt(number_of_cover)+'</strong>');

   SendToSession('number_of_cover',number_of_cover,"set");

});



$(document).on('keyup','#design_page_title',function(e){

  

  var text=$(this).val();console.log(text);

  $("#design_title_div h2").html(text);



});





function AdjustSize(val,s_no){





  var res = val;

  console.log(res);



  if(s_no == 1){



    //$(".title_page span").css('font-size',res+ "px");

    $(".title_page2 span").css('font-size',res+ "px");

    SendToSession('AdjustSize_title_page',res,"set");

    console.log('1 ' ,s_no);

  }

  else if(s_no == 2){

    $(".initial_page span").css('font-size',res+ "px");

    SendToSession('AdjustSize_initial_page',res,"set");

    console.log('2 ' ,s_no);



  }

  else if(s_no == 3){

    $(".i_initial_page span").css('font-size',res+ "px");

    SendToSession('AdjustSize_i_initial_page',res,"set");

    console.log('3 ' ,s_no);

  }

  if(s_no == 4){



    $(".title_page span").css('font-size',res+ "px");

    //$(".title_page2 span").css('font-size',res+ "px");

    SendToSession('AdjustSize_title_page2',res,"set");

    console.log('1 ' ,s_no);

  }

}





function changeTextFont(val,s_no){



    console.log(val);

  //var strnew = val.substr(0, strnew.length-1);

  var res = val.replace(";", "");

  console.log(res);

  if(s_no == 1){



    //$(".title_page").css('font-family',res);

    //$('.title_page').textfill({ });

    $(".title_page2").css('font-family',res);

    //$('.title_page2').textfill({ });

    SendToSession('TextFont_title_page',res,"set");

  }

  //$(".initial_page strong").css('font-family',val);



  else if(s_no == 2){



    $(".initial_page").css('font-family',res);

    //$('.initial_page').textfill({ });

    SendToSession('TextFont_initial_page',res,"set");



  }



  //$(".title_page strong").css('font-family',val);



  else if(s_no == 3){

    

    $(".i_initial_page").css('font-family',res);

    //$('.i_initial_page').textfill({ });

    SendToSession('TextFont_i_initial_page',res,"set");



  }

  else if(s_no == 4){



    $(".title_page").css('font-family',res);

    //$('.title_page').textfill({ });

    //$(".title_page2").css('font-family',res);

    //$('.title_page2').textfill({ });

    SendToSession('TextFont_title_page1',res,"set");

  }



  console.log('end');

}







function AddIcon(val){

  

  console.log(val);

  var res = val;

    console.log(emboss_name);

  if(emboss_name=="")

   emboss_name='Black';

  if(val == ""){



    console.log(cover_icon);

    html='';



     if(cover_icon==1){



        subtotal -=10;console.log(subtotal);

        cover_icon=0;



        $(".item_cover_icon").empty();

        $(".item_subtotal.item_n").html("Q-"+number_of_cover+" "+cover_name);

        $(".item_subtotal.item_p").html('<strong>$'+parseInt(subtotal)*parseInt(number_of_cover)+'</strong>');



      }

  }



  if(val == 1){



    html='<img src="<?php echo site_url();?>/wp-content/uploads/asset/star-'+emboss_name+'.png" width="36" height="36">';

  }



  else if(val == 2){

    

    html='<img src="<?php echo site_url();?>/wp-content/uploads/asset/star2-'+emboss_name+'.png" width="36" height="36">';



  }



  if(val !=""){



    $(".item_cover_icon").empty();

    $(".item_cover_icon.item_n").html(emboss_name+" Icon");

    $(".item_cover_icon.item_p").html('<strong>$10</strong>&nbsp;&nbsp;<i id="item_cover_icon" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');



    if(cover_icon==0){



      subtotal +=10;

      cover_icon=1;



    }





  $(".item_subtotal.item_n").html("Q-"+number_of_cover+" "+cover_name);

  $(".item_subtotal.item_p").html('<strong>$'+parseInt(subtotal)*parseInt(number_of_cover)+'</strong>');

  

}

  SendToSession('icon',val,"set");

  $("#icon_under_title").html(html);

}



jQuery(document).on("click",".movLeft,.movRight,.movDown,.movUp",function(){ 

   

    var objPosition=ObjNewVal=target_class=target_class2=0;

    var clk_class= $(this).attr('class');

        clk_class=clk_class.replace("form-control ", "");

        console.log(clk_class);console.log(focus_id);

      if(focus_id=='upper_div222'){

         change_lf    ='margin-left';

         change_tb    ='margin-top';

         target_class ='.title_page>span';

         target_class2='.title_page2>span';   

      }

      else if(focus_id=='initial_page'){

        change_lf   ='margin-left';

        change_tb   ='margin-top';

        target_class='.initial_page>span';

        

      }

      else if(focus_id=='i_lower_div'){

        change_lf   ='margin-left';

        change_tb   ='margin-top';

        target_class='.i_initial_page>span';

        

      }

      if(clk_class=='movLeft'){

         

         //alert(target_class+" "+change_lf);

         objPosition = jQuery(target_class).css(change_lf);

         console.log('objPosition',objPosition);

       objPosition = parseInt(objPosition);

       if(focus_id=='i_lower_div' || focus_id=='upper_div222')

          ObjNewVal = objPosition-1;

       else if(focus_id=='initial_page')

        ObjNewVal = objPosition-1;

       jQuery(target_class).css(change_lf,ObjNewVal+'px');



        if(focus_id=='upper_div222'){

         jQuery(target_class2).css(change_lf,ObjNewVal+'px');

        }

        console.log('ObjNewVal',ObjNewVal);

        

        }

       else if(clk_class=='movRight'){

         

         objPosition = jQuery(target_class).css(change_lf);

         console.log(objPosition);

         objPosition = parseInt(objPosition);

         if(focus_id=='upper_div222'){

           ObjNewVal = objPosition+1;

        }

        else if(focus_id=='i_lower_div')
          ObjNewVal = objPosition+1;
        else if(focus_id=='initial_page')
          ObjNewVal = objPosition+1;

        jQuery(target_class).css(change_lf,ObjNewVal+'px');

        if(focus_id=='upper_div222'){
         jQuery(target_class2).css(change_lf,ObjNewVal+'px');
        }
        console.log(ObjNewVal);        
        } 
        else if(clk_class=='movUp'){

         objPosition = jQuery(target_class).css(change_tb);
         console.log(objPosition);
         objPosition = parseInt(objPosition);

         if(focus_id=='i_lower_div' || focus_id=='upper_div222')
          ObjNewVal = objPosition-1;
         else if(focus_id=='initial_page')
            ObjNewVal = objPosition-1;
         
         jQuery(target_class).css(change_tb,ObjNewVal+'px');
         
         if(focus_id=='upper_div222'){
            jQuery(target_class2).css(change_tb,ObjNewVal+'px');
         }
         console.log(ObjNewVal);

        }

        else if(clk_class=='movDown'){

         objPosition = jQuery(target_class).css(change_tb);
         console.log(objPosition);
         objPosition = parseInt(objPosition);
         if(focus_id=='i_lower_div' || focus_id=='upper_div222')
           ObjNewVal = objPosition+1;
         else if(focus_id=='initial_page')
           ObjNewVal = objPosition+1;
           jQuery(target_class).css(change_tb,ObjNewVal+'px');
         if(focus_id=='upper_div222'){
           jQuery(target_class2).css(change_tb,ObjNewVal+'px');
         }
           console.log(ObjNewVal);

        }  
});

function hide_before_screen_capture(){

  $('.limetBox').css('overflow-x', 'hidden');
  $('.title_page').css('border-top', '0');
  $('.title_page').css('border-left', '0');
  $('.title_page').css('border-right', '0');
  $('.title_page2').css('border-bottom', '0');
  $('.title_page2').css('border-left', '0');
  $('.title_page2').css('border-right', '0');
  $('#icon_under_title').css('border', '0');
  $('.initial_page').css('border', '0');
  $('.initial_page').css('overflow', 'hidden');
  //$('.initial_page').css('bottom', '80px');
  $('.i_initial_page').css('border', '0');
  $('.i_initial_page').css('overflow', 'hidden');
  //$('.i_lower_div').css('bottom', '80px');
  $('.upper_div222').css('bottom','244px');
  //$('.upper_div222').css('background-color','green');
  //alert("dfdfdf");
  //$('#working_area0').css('background-image', '');
  //$('#working_area1').css('background-image', '');
  $('.next_step_btn').css('display','none');  
}

function show_after_screen_capture(){

        $('.limetBox').css('overflow', 'visible');
        $('.title_page').css('border-top', '1px solid red');
        $('.title_page').css('border-left', '1px solid red');
        $('.title_page').css('border-right', '1px solid red');
        $('.title_page2').css('border-bottom', '1px solid red');
        $('.title_page2').css('border-left', '1px solid red');
        $('.title_page2').css('border-right', '1px solid red');
        $('#icon_under_title').css('border', '1px solid red');
        $('.initial_page').css('border', '1px solid red');
        $('.initial_page').css('overflow', 'visible'); 
        //$('.initial_page').css('bottom', '53px');
        $('.i_initial_page').css('border', '1px solid red');
        $('.i_initial_page').css('overflow', 'visible');
        //$('.i_lower_div').css('bottom', '53px');
        //$('.upper_div222').css('bottom','43%');
        //$('#working_area0').css('background-image', 'url(<?php echo site_url();?>/wp-content/uploads/asset/FrontCover.png)');
        //$('#working_area1').css('background-image', 'url(<?php echo site_url();?>/wp-content/uploads/asset/InsideCover.png)');
        $('.next_step_btn').css('display','inline-block');
}

$(document).on('click','#add_to_wishlist',function(e){

  add_to_wishlist=1;
  $("#cover_page_post_to_gallery").trigger("click");
});

$(document).on('click','#pd_cover',function(e){

    //$('.title_page').css('overflow', 'hidden');
    $([document.documentElement, document.body]).animate({

        scrollTop: $("#working_area0").offset().top
    }, 0);
   hide_before_screen_capture();
   html2canvas($("#upper_div_working"), {
            onrendered: function (canvas) {
                var imageStr2 = canvas.toDataURL('png');
                var rawData2 = canvas.toDataURL("image/png");
                rawData2 = rawData2.substr("data:image/png;base64,".length);
                $("#cover_design_preview").attr("src",imageStr2);
                //console.log(imageStr2);
                //window.open(imageStr2);
                //$('#exampleModal').modal('show');
                $('#exampleModal').modal('show');
                show_after_screen_capture();
              },
              logging: true,
          });
})

$(document).on('click','#cover_page_post_to_gallery',function(e){
  $(".loader").css('display', 'block');
  hide_before_screen_capture();
  $([document.documentElement, document.body]).animate({
        scrollTop: $("#working_area0").offset().top
    }, 0);
  html2canvas($("#upper_div_working"), {

            onrendered: function (canvas) {
                var imageStr2 = canvas.toDataURL('png');
                var rawData2 = canvas.toDataURL("image/png");
                rawData2 = rawData2.substr("data:image/png;base64,".length);
                var img_name = 'cover_page';
                var datasend = 'calender';
                var cover_name= $("#cover_name").val();
                ///////////////////////////////////////
                var j_string = {};
                j_string['cover_name']      = $("#cover_name").val();
                j_string['cover_color_name']= $("#cover_color_name").val();
                j_string['text_color_name'] = $("#text_color_name").val();
                j_string['alum_disc_color_name']= $("#alum_disc_color_name").val();
                j_string['alum_disc_size']= $("#alum_disc_size").val();
                j_string['title_text']= $('#custom_title').val();
                j_string['title_pagef']= $('.title_page').css("font-family");
                j_string['title_pages']= $('.title_page>span').css("font-size");
                j_string['title_pageml']= $('.title_page>span').css("margin-left");
                j_string['title_pagemt']= $('.title_page>span').css("margin-top");
                j_string['title_text2']= $('#custom_title2').val();
                j_string['title2_pagef']= $('.title_page2').css("font-family");
                j_string['title2_pages']= $('.title_page2>span').css("font-size");
                j_string['title2_pageml']= $('.title_page2>span').css("margin-left");
                j_string['title2_pagemt']= $('.title_page2>span').css("margin-top");
                j_string['title_text_font']= $('#title_text-font').val();
                j_string['title_text_size']= $('#title_text-size').val();
                j_string['select_icon'] = $('#text-select-icon').val();
                j_string['initial_text']= $('#input_name').val();
                j_string['initial_text_font'] = $('#initial_text-font').val();
                j_string['initial_text_size'] = $('#initial_text-size').val();
                j_string['initial_pagef']= $('.initial_page').css("font-family");
                j_string['initial_pages']= $('.initial_page>span').css("font-size");
                j_string['initial_pageml']= $('.initial_page>span').css("margin-left");
                j_string['initial_pagemt']= $('.initial_page>span').css("margin-top");
                j_string['contact_info']= $('#contact_info').val();
                j_string['i_initial_pagef']= $('.i_initial_page').css("font-family");
                j_string['i_initial_pages']= $('.i_initial_page>span').css("font-size");
                j_string['i_initial_pageml']= $('.i_initial_page>span').css("margin-left");
                j_string['i_initial_pagemt']= $('.i_initial_page>span').css("margin-top");
                j_string['contact_info_font'] = $('#contact_info-font').val();
                j_string['contact_info_size'] = $('#contact_info-size').val();
                j_string['text_select_icon']  = $('#text-select-icon').val();
                j_string['qnt']               = $('#text-number-cover').val();
                var json_data = JSON.stringify(j_string);
                //alert(json_data);
                console.log(subtotal);
                //console.log('addwish',add_to_wishlist);
                jQuery.ajax({

                    type: 'POST',
                    url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",
                    data: {

                        action         :'cover_page_add_to_gallery',
                        image          : imageStr2,
                        page_name      : img_name,
                        page_title     : cover_name,
                        json_data      : json_data,
                        add_to_wishlist:add_to_wishlist,
                        p_id           :40,
                        variation_id   :43,
                        price          :subtotal,
                    },

                    //dataType: 'json',

                    //encode: true,

                    success: function (data_return) {


                            console.log(data_return);
                            show_after_screen_capture();
                            if(add_to_wishlist==1){
                              add_to_wishlist=0;
                            }

                            $(".loader").css('display', 'none');
                            if(data_return==0){
                              jQuery("#showloginmsg").modal('show');
                            }else{
                              alert("Design have been saved successfully");
                            }
            },

            logging: true,

        });

      }

   });

});

 function canvasSaveImage() {

    var qnt = $('#text-number-cover').val();

    if (qnt == ""){

      alert("Please select the number of sets of covers you would like to order.");

      return false;

    }

    $(".loader").css('display', 'block');

    $([document.documentElement, document.body]).animate({

        scrollTop: $("#working_area0").offset().top

    }, 0);

        hide_before_screen_capture();

        html2canvas($("#outer_cover_page"), {
            onrendered: function (canvas) {

                var imageStr2 = canvas.toDataURL('png');
                var rawData2 = canvas.toDataURL("image/png");
                rawData2 = rawData2.substr("data:image/png;base64,".length);
                var img_name = 'calender';
                var datasend = 'calender';
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

    /*if (qnt === null){

      alert("Please select at least 1 Number of Covers");

      return false;

    }*/

        //var large_image = '<?php echo get_template_directory_uri(); ?>/new/images/large-images/sweater-'+sweaterColor+'-pattern-'+pattern+'-pattern-color-'+patternColor+'.png';

          //var debug="product_id="+product_id+" variation_id="+variation_id+" image_id="+image_id+" sweaterColor="+sweaterColor+" pattern="+pattern+" patternColor="+patternColor+" xs_qnt="+xs_qnt+" s_qnt="+s_qnt+" m_qnt="+m_qnt+" l_qnt="+l_qnt+" xl_qnt="+xl_qnt+" xxl_qnt="+xxl_qnt;

    console.log(qnt);//alert(qnt);
    variation_id ='43';

    /*if(cover_color_name!=""){

      variation_id += 43+",";

    }

    if(text_select_icon!=""){

      variation_id += 102+",";

    }

    if(custom_title!=""){

      variation_id += 95+",";

    }

    if(initial_text!=""){

      variation_id += 103+",";

    }

    if(contact_info!=""){

      variation_id += 104+",";

    }

    if(alum_disc_size!="" && alum_disc_size == "Silver Discs-Small"){

      variation_id += 107+",";

    }

    if(alum_disc_size!="" && alum_disc_size == "Silver Discs-28mm"){

      variation_id += 108+",";

    }
    variation_id = variation_id.substring(0,variation_id.length-1) // removes the last character.*/
    var j_string = {};
    j_string['cover_name']      = $("#cover_name").val();
    j_string['cover_color_name']= $("#cover_color_name").val();
    j_string['text_color_name'] = $("#text_color_name").val();
    j_string['alum_disc_color_name']= $("#alum_disc_color_name").val();
    j_string['alum_disc_size']= $("#alum_disc_size").val();
    j_string['title_text']= $('#custom_title').val();
    j_string['title_pagef']= $('.title_page').css("font-family");
    j_string['title_pages']= $('.title_page>span').css("font-size");
    j_string['title_pageml']= $('.title_page>span').css("margin-left");
    j_string['title_pagemt']= $('.title_page>span').css("margin-top");
    j_string['title_text2']= $('#custom_title2').val();
    j_string['title2_pagef']= $('.title_page2').css("font-family");
    j_string['title2_pages']= $('.title_page2>span').css("font-size");
    j_string['title2_pageml']= $('.title_page2>span').css("margin-left");
    j_string['title2_pagemt']= $('.title_page2>span').css("margin-top");
    j_string['title_text_font']= $('#title_text-font').val();
    j_string['title_text_size']= $('#title_text-size').val();
    j_string['select_icon'] = $('#text-select-icon').val();
    j_string['initial_text']= $('#input_name').val();
    j_string['initial_text_font'] = $('#initial_text-font').val();
    j_string['initial_text_size'] = $('#initial_text-size').val();
    j_string['initial_pagef']= $('.initial_page').css("font-family");
    j_string['initial_pages']= $('.initial_page>span').css("font-size");
    j_string['initial_pageml']= $('.initial_page>span').css("margin-left");
    j_string['initial_pagemt']= $('.initial_page>span').css("margin-top");
    j_string['contact_info']= $('#contact_info').val();
    j_string['i_initial_pagef']= $('.i_initial_page').css("font-family");
    j_string['i_initial_pages']= $('.i_initial_page>span').css("font-size");
    j_string['i_initial_pageml']= $('.i_initial_page>span').css("margin-left");
    j_string['i_initial_pagemt']= $('.i_initial_page>span').css("margin-top");
    j_string['contact_info_font'] = $('#contact_info-font').val();
    j_string['contact_info_size'] = $('#contact_info-size').val();
    j_string['text_select_icon']  = $('#text-select-icon').val();
    j_string['qnt']               = $('#text-number-cover').val();
    var json_data = JSON.stringify(j_string);
    jQuery.ajax({
            type: 'POST',
            url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",
            data: {
                action         :'save_before_cart',
                page_name      :'cover_page',
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
                p_id                : 40,
                img_id              : image_id,
                design_id           : design_id,
                cover_name          : cover_name,
                cover_color_name    : cover_color_name,
                text_color_name     : text_color_name,
                alum_disc_color_name: alum_disc_color_name,
                alum_disc_size      : alum_disc_size,
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
                variation_id        : variation_id,
                qnt                 : qnt,
                subtotal            : subtotal
            },
            //dataType    : 'json',
            //encode      : true,
            success: function (data) { //alert(data);
            console.log(data);
            window.location.href = '<?php echo get_home_url(); ?>/cart/';
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
</script>
<style>
.btnsRow {
 margin-bottom: 3%;
 margin-top: 2%;
 position: static;
}
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
  top: 0;
  left: 0;
  width: 254px;
  padding-left: 78px;
  padding-right: 30px;
  text-align: center;
  margin:150px 0 0 26px;

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
    bottom: 20px;
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
  font-size: 12px; 
}

.item_subtotal{

  text-align:right;
  font-size:13px;
  white-space:nowrap;
}

.item_subtotal+.item_subtotal{
  text-align:left;
}

.item_title {
  font-size:16px;
}

.item_cover_embosscolor {
  white-space:nowrap; 
  font-size: 12px;
}

.item_initial_embosscolor {
  white-space:nowrap;
  font-size: 12px; 
}

.item_innercolor_embosscolor{

  white-space:nowrap;
  font-size: 12px; 

}

.item_disc_size{

  white-space:nowrap;
  font-size: 12px; 

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
  /*cursor:pointer;*/
}
.select_font{
    /*width: 100px;
    margin-left: 15px;*/
}
.lg,.sm {
  font-weight: bold;
  margin-right: 4px;
  padding-right: 4px;
  margin-left: 3px;
  cursor:pointer;
}
.custom_title {
  font-size: 13px !important;
}
.contact_info {
  font-size:10px !important;
}

.item_cover_icon{
  font-size:12px;
  white-space:nowrap; 
}
.modal_preview_image{
  width:100%;
}
/*.title_page, .i_initial_page, .initial_page { position: relative; }
.title_page span, .i_initial_page span, .initial_page span { 
position: absolute;
width:100%;
text-align: center;
left: 0;
top:0;
}*/
.title_page span, .title_page2 span, .i_initial_page span, .initial_page span { 
  display: block;
}
</style>
<?php //get_footer();

















































