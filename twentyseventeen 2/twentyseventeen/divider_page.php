<?php

/**

 * Template Name: Divider Page

 * @package WordPress

 * @subpackage Twenty_Seventeen

 * @since 1.0

 * @version 1.0

 */

get_header(); ?>

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
  	<div class="item_title col-md-8"><strong>ITEMS</strong></div>
    <div class="item_price col-md-4"><i class="fa fa-shopping-cart" style="font-size:20px;"></i></div>
    <div class="item_cover_icolor col-md-8"></div>
    <div class="item_cover_icolor col-md-4"></div>
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
           <h1 class="sidebar-heading">Divider Design</h1>
           <div class="form-group bdr-bot cover_color"> 
            <input type="text" name="driver_name" id="driver_name" class="form-control driver_name" placeholder="Type Divider Name Here" maxlength="20">  
            </div>
           <div class="form-group bdr-bot cover_color"> 
          <div class="fldBlock">
            <label for="cover_color" class="ccover_color">Divider Color</label>
            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_97.png" width="8%" height="8%" title="Fog" style="cursor:pointer;" class="cover_icolor divider_color" id="cFog" />

            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_98.png" width="8%" height="8%" title="Blush" style="cursor:pointer;"  class="cover_icolor divider_color" id="cBlush" />

            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_96.png"  width="8%" height="8%" title="Black" style="cursor:pointer;"  class="cover_icolor divider_color" id="cBlack"/>

            <input type="hidden" name="divider_color" id="divider_color" value="" />

           </div>
            </div>
           <div class="form-group bdr-bot embossing_color"> 
          <div class="fldBlock">
            <label for="embossing_color" class="cembossing_color">Text Color</label>
            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_94.png" width="8%" height="8%" data-id="Gold"  title="Gold Foil" class="emb_color divider_text_color" id="tGold" style="cursor:pointer;"> 

            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_95.png" width="8%" height="8%" title="Silver Foil" data-id="Silver" class="emb_color divider_text_color" id="tSilver" style="cursor:pointer;" /> 

            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_96.png" width="8%" height="8%" data-id="Black" title="Black Foil" class="emb_color divider_text_color" id="tBlack" style="cursor:pointer;" />

            <input type="hidden" name="divider_text_color" id="divider_text_color" value="" />
            </div>
         </div>     
          <div class="form-group bdr-bot">
           <div class="select_font">
            <div class="dualFld_row">
             <select class="form-control font-family-select text-center" onchange="changeTextFont(this.value,1)" name="text-font" id="text-font">
                <option style="color: #575757;" value="" selected>Text Font</option>
                <option style="font-family: Arial, sans-serif;" value="Arial, sans-serif;">Arial</option>
                <option style="font-family: 'Amatic SC', cursive;" value="'Amatic SC', cursive;">Amatic SC</option>
<!--                 <option style="font-family: 'Domine', serif;" value="'Domine', serif;">Domine</option> --> 
                <!--<option style="font-family: 'Special Elite', cursive;"  value="'Special Elite', cursive;">Special Elite</option>-->
                <!-- <option style="font-family: 'Coda Caption', sans-serif;" value="'Coda Caption', sans-serif;">Coda Caption</option> -->
                <!-- <option style="font-family: 'Bangers', cursive;"  value="'Bangers', cursive;">Bangers</option> -->
               <!-- <option style="font-family: 'Rock Salt', cursive;"  value="'Rock Salt', cursive;">Rock Salt</option>-->
                <option style="font-family: 'Shadows Into Light Two', cursive;"  value="'Shadows Into Light Two', cursive;">Shadows</option>
                <option style="font-family: 'Nothing You Could Do', cursive;"  value="'Nothing You Could Do', sans-serif;">Nothing You Could Do</option>
                <option style="font-family: 'Fredericka the Great', cursive;"  value="'Fredericka the Great', cursive;">Fredericka the Great</option>   
                <option style="font-family: 'Cabin Sketch', cursive;"  value="'Cabin Sketch', cursive;">Cabin Sketch</option>   
                <!-- <option style="font-family: 'Annie Use Your Telescope', cursive;"  value="'Annie Use Your Telescope', cursive;">Annie Use Your Telescope</option> -->    
                <option style="font-family: 'Nixie One', cursive;"  value="'Nixie One', cursive;">Nixie One</option>    
                <option style="font-family: 'Freckle Face', cursive;"  value="'Freckle Face', cursive;">Freckle Face</option>    
                <!--<option style="font-family: 'Give You Glory', cursive;"  value="'Give You Glory', cursive;">Give You Glory</option>-->    
                <option style="font-family: 'Chelsea Market', cursive;"  value="'Chelsea Market', cursive;">Chelsea Market</option>     
                <option style="font-family: 'Bilbo Swash Caps', cursive;"  value="'Bilbo Swash Caps', cursive;">Bilbo Swash Caps</option>    
                <!-- <option style="font-family: 'Stardos Stencil', cursive;"  value="'Stardos Stencil', cursive;">Stardos Stencil</option>-->    
                <!-- <option style="font-family: 'Fontdiner Swanky', cursive;"  value="'Fontdiner Swanky', cursive;">Fontdiner Swanky</option> -->    
                <option style="font-family: 'Life Savers', cursive;"  value="'Life Savers', cursive;">Life Savers</option>    
                <!--<option style="font-family: 'Dokdo', cursive;"  value="'Dokdo', cursive;">Dokdo</option>-->    
                <!-- <option style="font-family: 'Mountains of Christmas', cursive;"  value="'Mountains of Christmas', cursive;">Mountains of Christmas</option>    
                <option style="font-family: 'Milonga', cursive;"  value="'Milonga', cursive;">Milonga</option>  -->   
                <option style="font-family: 'Lovers Quarrel', cursive;"  value="'Lovers Quarrel', cursive;">Lovers Quarrel</option>    
                <!-- <option style="font-family: 'Trade Winds', cursive;"  value="'Trade Winds', cursive;">Trade Winds</option> -->    
                <!-- <option style="font-family: 'Mystery Quest', cursive;"  value="'Mystery Quest', cursive;">Mystery Quest</option>     -->
                <!--<option style="font-family: 'Henny Penny', cursive;"  value="'Henny Penny', cursive;">Henny Penny</option>-->    
                <option style="font-family: 'Barrio', cursive;"  value="'Barrio', cursive;">Barrio</option>    
                <option style="font-family: 'Kirang Haerang', cursive;"  value="'Kirang Haerang', cursive;">Kirang Haerang</option>    
                <!--<option style="font-family: 'Lakki Reddy', cursive;"  value="'Lakki Reddy', cursive;">Lakki Reddy</option>-->    
                <!-- <option style="font-family: 'Ruthie',cursive;"  value="'Ruthie',cursive;">Ruthie</option> -->    
               </select>

               <select class="form-control font-family-select text-center"  name="text-font-size-div1" id="div1-font-size" onchange="AdjustSize(this.value,1)">
                        <option value="" selected>Size</option>
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
                        <option value="36">36px</option>
                        <option value="38">38px</option>
                        <option value="40">40px</option>
                        <option value="42">42px</option>
                      </select>
                  </div>
            </div>
<div class="dualFld_row">

        <input type="text" name="divider_1_text" id="divider_1_text" class="form-control divider_1_text" placeholder="Type Divider 1 Text" maxlength="12"  />
        <button class="form-control moveUp" id="mu1"><i class="fa fa-arrow-up"></i></button>
        <button class="form-control moveDown" id="md1"><i class="fa fa-arrow-down"></i></button>
        <!-- <select class="form-control font-family-select text-center divider_select"  name="text-font-size-div1" id="div1-font-size" onchange="AdjustSize(this.value,1)">
                        <option value="" selected>Size</option>
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
                        <option value="36">36px</option>
                        <option value="38">38px</option>
                        <option value="40">40px</option>
                        <option value="42">42px</option>
                      </select> -->
</div>   
<div class="dualFld_row">                   

        <input type="text" name="divider_2_text" id="divider_2_text" class="form-control divider_2_text" placeholder="Type Divider 2 Text" maxlength="12"  />
        <button class="form-control moveUp" id="mu2"><i class="fa fa-arrow-up"></i></button>
        <button class="form-control moveDown" id="md2"><i class="fa fa-arrow-down"></i></button>
        <!-- <select class="form-control font-family-select text-center divider_select"  name="text-font-size-div2" id="div2-font-size" onchange="AdjustSize(this.value,2)">
                        <option value="" selected>Size</option>
                        <option value="8">8px</option>
                        <option value="10">10px</option>
                        <option value="12">12px</option>
                        <option value="14">14px</option>
                        <option value="16">16px</option>
                        <option value="18">18px</option>
                        <option value="20">20px</option>
                        <option value="22">22px</option>
                        <option value="24">24px</option>
                        <option value="26">26px</option
                        <option value="28">28px</option>
                        <option value="30">30px</option>
                        <option value="32">32px</option>
                        <option value="34">34px</option>
                        <option value="36">36px</option>
                        <option value="38">38px</option>
                        <option value="40">40px</option>
                        <option value="42">42px</option>
                      </select> -->
</div>

<div class="dualFld_row">

<input type="text" name="divider_3_text" id="divider_3_text" class="form-control divider_3_text" placeholder="Type Divider 3 Text" maxlength="12"  />        	       

<button class="form-control moveUp" id="mu3"><i class="fa fa-arrow-up"></i></button>

        <button class="form-control moveDown" id="md3"><i class="fa fa-arrow-down"></i></button>

<!-- <select class="form-control font-family-select text-center divider_select"  name="text-font-size-div3" id="div3-font-size" onchange="AdjustSize(this.value,3)">

                        <option value="" selected>Size</option>

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

                        <option value="36">36px</option>

                        <option value="38">38px</option>

                        <option value="40">40px</option>

                        <option value="42">42px</option>

                      </select> -->

</div>

<div class="dualFld_row">

        <input type="text" name="divider_4_text" id="divider_4_text" class="form-control divider_4_text" placeholder="Type Divider 4 Text" maxlength="12"  />

        <button class="form-control moveUp" id="mu4"><i class="fa fa-arrow-up"></i></button>

        <button class="form-control moveDown" id="md4"><i class="fa fa-arrow-down"></i></button>

        <!-- <select class="form-control font-family-select text-center divider_select"  name="text-font-size-div4" id="div4-font-size" onchange="AdjustSize(this.value,4)">

                        <option value="" selected>Size</option>

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

                        <option value="36">36px</option>

                        <option value="38">38px</option>

                        <option value="40">40px</option>

                        <option value="42">42px</option>

                      </select> -->

</div>

<div class="dualFld_row">

        <input type="text" name="divider_5_text" id="divider_5_text" class="form-control divider_5_text" placeholder="Type Divider 5 Text" maxlength="12"  />

        <button class="form-control moveUp" id="mu5"><i class="fa fa-arrow-up"></i></button>

        <button class="form-control moveDown" id="md5"><i class="fa fa-arrow-down"></i></button>

        <!-- <select class="form-control font-family-select text-center divider_select"  name="text-font-size-div5" id="div5-font-size" onchange="AdjustSize(this.value,5)">

                        <option value="" selected>Size</option>

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

                        <option value="36">36px</option>

                        <option value="38">38px</option>

                        <option value="40">40px</option>

                        <option value="42">42px</option>

                      </select> -->

</div>

<div class="dualFld_row">

        <input type="text" name="divider_6_text" id="divider_6_text" class="form-control divider_6_text" placeholder="Type Divider 6 Text" maxlength="12"  /> <button class="form-control moveUp" id="mu6"><i class="fa fa-arrow-up"></i></button>

        <button class="form-control moveDown" id="md6"><i class="fa fa-arrow-down"></i></button>          

       <!-- <select class="form-control font-family-select text-center divider_select"  name="text-font-size-div6" id="div6-font-size" onchange="AdjustSize(this.value,6)">

                        <option value="" selected>Size</option>

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

                        <option value="36">36px</option>

                        <option value="38">38px</option>

                        <option value="40">40px</option>

                        <option value="42">42px</option>

                      </select> -->

 </div>  

 

 <div class="dividerNav form-control">

 <label>Adjust Text Position</label>

 <button class="form-control movLeft"><i class="fa fa-arrow-left"></i></button>

 <button class="form-control movRight"><i class="fa fa-arrow-right"></i></button>



 <button class="form-control movUp"><i class="fa fa-arrow-up"></i></button>

 <button class="form-control movDown"><i class="fa fa-arrow-down"></i></button>

 </div>  

                 

        <div class="form-group bdr-bot nop_slct" style="border-bottom:0;"> 

        <span>(6 Dividers per Pack)</span>

           <select class="form-control page_per_pack text-center" name="number_of_packs" id="number_of_packs" style="width:100%;">

                <option style="color:#575757" value=""   selected>Number of Packs</option>

          		<option value="1">1</option>

                <option value="2">2</option>

                <option value="3">3</option>

                <option value="4">4</option>

                <option value="5">5</option>

                <option value="6">6</option> 

          	</select>

         </div>

         <div class="form-group btn_preview_design">



            <div id="pd_cover"><span class="btn">Preview Design</span></div>



         </div>

         <div class="form-group btn_add_to_wishlist">

            <a class='btn' id='add_to_wishlist'><i class='fa fa-heart'></i> Add to Wishlist</a>

         </div>

        <div class="approve_divider" onclick="canvasSaveImage();">Approve Dividers Design & Add Pack(s) to Cart</div>

      </div>

     </div>

        <div class="btn_post_to_gallery">

            <div id="post_to_gallery" class="btn_post_to_gallery"><span class="btn">Post Your Design to the Gallery for Others to See &amp; Use</span></div>

        </div>

        </div>

        <div id="outer_cover_page">

       <div id="upper_div_working" class="upper_div_working"> 

        <div id="working_area" class="working_area bindingPage">



          <div class="divStrip_set">

          	<div class="divStrip strip1" title="1"><span class="border-red" style="font-family:'Segoe UI'"></span></div>

          	<div class="divStrip strip2" title="2"><span class="border-red" style="font-family:'Segoe UI'"></span></div>

          	<div class="divStrip strip3" title="3"><span class="border-red" style="font-family:'Segoe UI'"></span></div>

          	<div class="divStrip strip4" title="4"><span class="border-red" style="font-family:'Segoe UI'"></span></div>

          	<div class="divStrip strip5" title="5"><span class="border-red" style="font-family:'Segoe UI'"></span></div>

          	<div class="divStrip strip6" title="6"><span class="border-red" style="font-family:'Segoe UI'"></span></div>

          </div>

        </div>  

       </div>

    <!--    <div class="btnsRow">

      <div id="next" class="next_step_btn"><a class="btn" href="<?php echo site_url();?>/customized-calender">Cover Design</a></div>

      <div id="middle" class="next_step_btn"><a class="btn" href="<?php echo site_url();?>/page_design">Page Design</a></div>

      <div id="last" class="next_step_btn"><a class="btn" href="<?php echo site_url();?>/cart">Checkout</a></div>

    </div> -->

		</div>

        <!-- Modal -->

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">



          <div class="modal-dialog modal-xl" role="document">



            <div class="modal-content">



              <div class="modal-header">



                <h5 class="modal-title" id="exampleModalLabel">Preview of Divider Page</h5>



                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>



              </div>



              <div class="modal-body">



                <div align="center" style="white-space:nowrap;"> <img src="" alt="divider design preview" id="divider_design_preview" class="modal_preview_image"  /> </div>



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

<div style="display:none;">

<?php
//echo "<pre>";print_r($_SESSION);
if(isset($_POST)){

  if(isset($_POST['redesign_id']) || isset($_POST['design_id'])){
    
    //var_dump($_POST);exit;
    if($_POST['redesign_id']!=""){
      $re_design_id=$_POST['redesign_id'];
      $post_id = $wpdb->get_results("SELECT json_data From re_order_design where design_id='{$re_design_id}' and page_name='divider_page'");
    }
    elseif($_POST['design_id']!=""){
       $design_id=$_POST['design_id'];
       $post_id = $wpdb->get_results("SELECT json_data From custom_gallery where image_id='{$design_id}'");
    }
    var_dump($post_id[0]->json_data);
    $j_string              =json_decode(stripslashes($post_id[0]->json_data));
    //echo "<pre>";print_r($j_string);
    $sdriver_name        =$j_string->driver_name;
    $sdivider_color      =$j_string->divider_color;            
    $sdivider_text_color =$j_string->divider_text_color;
    $stext_font          =$j_string->text_font;
    $sdivider_1_text     =$j_string->divider_1_text;
    $sdivider_2_text     =$j_string->divider_2_text;
    $sdivider_3_text     =$j_string->divider_3_text;
    $sdivider_4_text     =$j_string->divider_4_text;
    $sdivider_5_text     =$j_string->divider_5_text;
    $sdivider_6_text     =$j_string->divider_6_text;
    $sdiv1_font_size     =$j_string->div1_font_size;
    $sdiv2_font_size     =$j_string->div2_font_size;
    $sdiv3_font_size     =$j_string->div3_font_size;
    $sdiv4_font_size     =$j_string->div4_font_size;
    $sdiv5_font_size     =$j_string->div5_font_size;
    $sdiv6_font_size     =$j_string->div6_font_size;
    $snumber_of_packs    =1;//$j_string->number_of_packs;
    //$stext_number_cover=$j_string->number_of_packs;  
}
if(isset($_POST['cdesign']) && $_POST['cdesign']!=""){

    //var_dump($_POST);exit;
    //global $wpdb;
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
    $j_string              =json_decode(stripslashes($post_id[0]->json_data));
    //echo "<pre>";print_r($j_string)
    $sdriver_name        =$j_string->driver_name;
    $sdivider_color      =$j_string->divider_color;            
    $sdivider_text_color =$j_string->divider_text_color;
    $stext_font          =$j_string->text_font;
    $sdivider_1_text     =$j_string->divider_1_text;
    $sdivider_2_text     =$j_string->divider_2_text;
    $sdivider_3_text     =$j_string->divider_3_text;
    $sdivider_4_text     =$j_string->divider_4_text;
    $sdivider_5_text     =$j_string->divider_5_text;
    $sdivider_6_text     =$j_string->divider_6_text;
    $sdiv1_font_size     =$j_string->div1_font_size;
    $sdiv2_font_size     =$j_string->div2_font_size;
    $sdiv3_font_size     =$j_string->div3_font_size;
    $sdiv4_font_size     =$j_string->div4_font_size;
    $sdiv5_font_size     =$j_string->div5_font_size;
    $sdiv6_font_size     =$j_string->div6_font_size;
    $snumber_of_packs    =$j_string->number_of_packs;
    //$stext_number_cover=$j_string->number_of_packs;
  }

}  //echo "<pre>";var_dump($_SESSION);?></div>

<script type="text/javascript">

$(document).ready(function(){
//load_session_data();
<?php

   if(isset($_SESSION['divider_title']) && $_SESSION['divider_title']!=""){

        echo 'jQuery("#driver_name").val("'.$_SESSION['divider_title'].'");';

        echo 'jQuery("#driver_name").trigger("keyup");';

   }

   if(isset($sdriver_name)){

        echo 'jQuery("#driver_name").val("'.$sdriver_name.'");';

        echo 'jQuery("#driver_name").trigger("keyup");';

   }

   if(isset($_SESSION['divider_color']) && $_SESSION['divider_color']!=""){

        $divider_color="c".$_SESSION['divider_color'];

        echo 'jQuery("#'.$divider_color.'").trigger("click");';

   }

   if(isset($sdivider_color)){

        $sdivider_color="c".$sdivider_color;

        echo 'jQuery("#'.$sdivider_color.'").trigger("click");';

   }

   if(isset($_SESSION['divider_text_color']) && $_SESSION['divider_text_color']!=""){

        $divider_color="t".$_SESSION['divider_text_color'];

        echo 'jQuery("#'.$divider_color.'").trigger("click");';

   }

   if(isset($sdivider_text_color)){

        $sdivider_color="t".$sdivider_text_color;

        echo 'jQuery("#'.$sdivider_color.'").trigger("click");';

   }

   

   if(isset($_SESSION['TextFont']) && $_SESSION['TextFont']!=""){

        $TextFont=$_SESSION['TextFont'];
        echo 'jQuery("#text-font").val("'.stripslashes($TextFont).';");';
        echo 'changeTextFont("'.stripslashes($stext_font).'",1);';

   }

   if(isset($stext_font)){

        echo 'jQuery("#text-font").val("'.stripslashes($stext_font).'");';
        echo 'changeTextFont("'.stripslashes($stext_font).'",1);';
    }

    if(isset($_SESSION['text1']) && $_SESSION['text1']!=""){

        $text1=$_SESSION['text1'];

        echo 'jQuery("#divider_1_text").val("'.$text1.'");';

        echo 'jQuery("#divider_1_text").trigger("keyup");';

   }

    if(isset($sdivider_1_text)){

        echo 'jQuery("#divider_1_text").val("'.$sdivider_1_text.'");';

        echo 'jQuery("#divider_1_text").trigger("keyup");';

    }

    if(isset($_SESSION['text2']) && $_SESSION['text2']!=""){

        $text2=$_SESSION['text2'];

        echo 'jQuery("#divider_2_text").val("'.$text2.'");';

        echo 'jQuery("#divider_2_text").trigger("keyup");';

   }

    if(isset($sdivider_2_text)){

        echo 'jQuery("#divider_2_text").val("'.$sdivider_2_text.'");';

        echo 'jQuery("#divider_2_text").trigger("keyup");';

    }

    if(isset($_SESSION['text3']) && $_SESSION['text3']!=""){

        $text3=$_SESSION['text3'];

        echo 'jQuery("#divider_3_text").val("'.$text3.'");';

        echo 'jQuery("#divider_3_text").trigger("keyup");';

   }

    if(isset($sdivider_3_text)){

        echo 'jQuery("#divider_3_text").val("'.$sdivider_3_text.'");';

        echo 'jQuery("#divider_3_text").trigger("keyup");';

    }

    if(isset($_SESSION['text4']) && $_SESSION['text4']!=""){

        $text4=$_SESSION['text4'];

        echo 'jQuery("#divider_4_text").val("'.$text4.'");';

        echo 'jQuery("#divider_4_text").trigger("keyup");';

   }

    if(isset($sdivider_4_text)){

        echo 'jQuery("#divider_4_text").val("'.$sdivider_4_text.'");';

        echo 'jQuery("#divider_4_text").trigger("keyup");';

    }

    if(isset($_SESSION['text5']) && $_SESSION['text5']!=""){

        $text5=$_SESSION['text5'];

        echo 'jQuery("#divider_5_text").val("'.$text5.'");';

        echo 'jQuery("#divider_5_text").trigger("keyup");';

   }

    if(isset($sdivider_5_text)){

        echo 'jQuery("#divider_5_text").val("'.$sdivider_5_text.'");';

        echo 'jQuery("#divider_5_text").trigger("keyup");';

    }

    if(isset($_SESSION['text6']) && $_SESSION['text6']!=""){

        $text6=$_SESSION['text6'];

        echo 'jQuery("#divider_6_text").val("'.$text6.'");';

        echo 'jQuery("#divider_6_text").trigger("keyup");';

   }

    if(isset($sdivider_6_text)){

        echo 'jQuery("#divider_6_text").val("'.$sdivider_6_text.'");';

        echo 'jQuery("#divider_6_text").trigger("keyup");';

    }

    if(isset($_SESSION['div1_font_size']) && $_SESSION['div1_font_size']!=""){

        $div1_font_size=$_SESSION['div1_font_size'];

        echo 'jQuery("#div1-font-size").val("'.$div1_font_size.'");';

        echo 'AdjustSize("'.$div1_font_size.'",1);';

    }

    if(isset($sdiv1_font_size)){

        echo 'jQuery("#div1-font-size").val("'.$sdiv1_font_size.'");';

        echo 'AdjustSize("'.$sdiv1_font_size.'",1);';

    }

    if(isset($_SESSION['div2_font_size']) && $_SESSION['div2_font_size']!=""){

        $div2_font_size=$_SESSION['div2_font_size'];

        echo 'jQuery("#div2-font-size").val("'.$div2_font_size.'");';

        echo 'AdjustSize("'.$div2_font_size.'",2);';

    }

    if(isset($sdiv2_font_size)){

        echo 'jQuery("#div2-font-size").val("'.$sdiv2_font_size.'");';

        echo 'AdjustSize("'.$sdiv2_font_size.'",2);';

        

    }

    if(isset($_SESSION['div3_font_size']) && $_SESSION['div3_font_size']!=""){

        $div3_font_size=$_SESSION['div3_font_size'];

        echo 'jQuery("#div3-font-size").val("'.$div3_font_size.'");';

        echo 'AdjustSize("'.$div3_font_size.'",3);';

    }

    if(isset($sdiv3_font_size)){

        echo 'jQuery("#div3-font-size").val("'.$sdiv3_font_size.'");';

        echo 'AdjustSize("'.$sdiv3_font_size.'",3);';

    }

    if(isset($_SESSION['div4_font_size']) && $_SESSION['div4_font_size']!=""){

        $div4_font_size=$_SESSION['div4_font_size'];

        echo 'jQuery("#div4-font-size").val("'.$div4_font_size.'");';

        echo 'AdjustSize("'.$div4_font_size.'",4);';

    }

    if(isset($sdiv4_font_size)){

        echo 'jQuery("#div4-font-size").val("'.$sdiv4_font_size.'");';

        echo 'AdjustSize("'.$sdiv4_font_size.'",4);';

    }

    if(isset($_SESSION['div5_font_size']) && $_SESSION['div5_font_size']!=""){

        $div5_font_size=$_SESSION['div5_font_size'];

        echo 'jQuery("#div5-font-size").val("'.$div5_font_size.'");';

        echo 'AdjustSize("'.$div1_font_size.'",5);';

    }

    if(isset($sdiv5_font_size)){

        echo 'jQuery("#div5-font-size").val("'.$sdiv5_font_size.'");';

        echo 'AdjustSize("'.$sdiv5_font_size.'",5);';

    }

    if(isset($_SESSION['div6_font_size']) && $_SESSION['div6_font_size']!=""){

        $div6_font_size=$_SESSION['div6_font_size'];

        echo 'jQuery("#div6-font-size").val("'.$div6_font_size.'");';

        echo 'AdjustSize("'.$div6_font_size.'",6);';

    }

    if(isset($sdiv6_font_size)){

        echo 'jQuery("#div6-font-size").val("'.$sdiv6_font_size.'");';

        echo 'AdjustSize("'.$sdiv6_font_size.'",6);';

    }

    if(isset($_SESSION['number_of_packs']) && $_SESSION['number_of_packs']!=""){

        $number_of_packs=$_SESSION['number_of_packs'];

        echo 'jQuery("#number_of_packs").val("'.$number_of_packs.'");';

        echo 'jQuery("#number_of_packs").trigger("change");';

    }

    if(isset($snumber_of_packs)){

        echo 'jQuery("#number_of_packs").val("'.$snumber_of_packs.'");';
        echo 'jQuery("#number_of_packs").trigger("change");';
    }
if(isset($_SESSION['dividerleft']) && $_SESSION['dividerleft']!=""){
        $dividerleft=$_SESSION['dividerleft']+"px";
        echo 'jQuery(".divStrip_set .divStrip span").css("left",'.$dividerleft.');';
    }
if(isset($_SESSION['dividertop1']) && $_SESSION['dividertop1']!=""){
        $dividertop1=$_SESSION['dividertop1']+"px";
        echo 'jQuery(".strip1>span").css("top",'.$dividertop1.');';
}
if(isset($_SESSION['dividertop2']) && $_SESSION['dividertop2']!=""){
        $dividertop2=$_SESSION['dividertop2']+"px";
        echo 'jQuery(".strip2>span").css("top",'.$dividertop2.');';
} 
if(isset($_SESSION['dividertop3']) && $_SESSION['dividertop3']!=""){
        $dividertop3=$_SESSION['dividertop3']+"px";
        echo 'jQuery(".strip3>span").css("top",'.$dividertop3.');';
}
if(isset($_SESSION['dividertop4']) && $_SESSION['dividertop4']!=""){
        $dividertop4=$_SESSION['dividertop4']+"px";
        echo 'jQuery(".strip4>span").css("top",'.$dividertop4.');';
}
if(isset($_SESSION['dividertop5']) && $_SESSION['dividertop5']!=""){
        $dividertop5=$_SESSION['dividertop5']+"px";
        echo 'jQuery(".strip5>span").css("top",'.$dividertop5.');';
}
if(isset($_SESSION['dividertop6']) && $_SESSION['dividertop6']!=""){
        $dividertop6=$_SESSION['dividertop6']+"px";
        echo 'jQuery(".strip6>span").css("top",'.$dividertop6.');';
}       
?>
})

</script>

<script type="text/javascript">

var number_of_packs=1;

var divider_title=divider_text_color=divider_color='';

var current_main_box=emboss_name='';

var subtotal=firstDone=sel_title=c_cover=0;

var sel_initial=sel_cntinfo=s_title=0;

var s_initial=s_cntinfo=0;

var lg_add=sm_add=size_add=add_to_wishlist=0;

var size=disc_gcolor=divider_titletext='';



function adjustfontsize(length){

	var font_size=10;
	if(length<=4){

	  font_size=22;

	}

	else if(length>4 && length<8 ){

	  font_size=16;

	}

	else if(length>=9){

	  font_size=8;

	}

	return font_size;

}



$(document).on('keyup','#divider_1_text',function(){

	    var text1 = $('#divider_1_text').val();

		$(".strip1>span").html(text1);

        SendToSession("text1",text1,"set");



});



$(document).on('keyup','#divider_2_text',function(){

	    var text2 = $('#divider_2_text').val();

		$(".strip2>span").html(text2);

        SendToSession("text2",text2,"set");

		//font_size = adjustfontsize(text2.length);

		//$(".strip2>span").css("font-size",font_size);



});

$(document).on('keyup','#divider_3_text',function(){

	    var text3 = $('#divider_3_text').val();

		$(".strip3>span").html(text3);

        SendToSession("text3",text3,"set");

		//font_size = adjustfontsize(text3.length);

		//$(".strip3>span").css("font-size",font_size);

});

$(document).on('keyup','#divider_4_text',function(){

	    var text4 = $('#divider_4_text').val();

		$(".strip4>span").html(text4);

        SendToSession("text4",text4,"set");

		//font_size = adjustfontsize(text4.length);

		//$(".strip4>span").css("font-size",font_size);

});

$(document).on('keyup','#divider_5_text',function(){

	    var text5 = $('#divider_5_text').val();

        console.log("text5",text5);

		$(".strip5>span").html(text5);

        SendToSession("text5",text5,"set");

		//font_size = adjustfontsize(text5.length);

		//$(".strip5>span").css("font-size",font_size);

});

$(document).on('keyup','#divider_6_text',function(){

	    var text6 = $('#divider_6_text').val();

		$(".strip6>span").html(text6);

        SendToSession("text6",text6,"set");

		//font_size = adjustfontsize(text6.length);

		//$(".strip6>span").css("font-size",font_size);

});

$(document).on('click','.divider_color',function(){



		divider_color=$(this).attr("title");

		$("#divider_color").val(divider_color);

        SendToSession("divider_color",divider_color,"set");

});

$(document).on('click','.divider_text_color',function(){



		$("#price_calculator").show();

		divider_text_color=$(this).attr("data-id");

		$("#divider_text_color").val(divider_text_color);

        SendToSession("divider_text_color",divider_text_color,"set");

		subtotal=12;

		$(".item_cover_icolor.col-md-8").html(divider_color+"/"+divider_text_color);

		$(".item_cover_icolor.col-md-4").html('$12 <i id="item_cover_icolor" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>'); 

		$(".item_subtotal.col-md-8").html('Q-'+number_of_packs+" "+divider_title);

		$(".item_subtotal.col-md-4").html('<strong>$'+parseInt(number_of_packs)*parseInt(subtotal)+'</strong>');

	

		if(divider_text_color == "Gold"){

			color ="#f4d374";

		}

		else if(divider_text_color == "Silver"){

		   	color ="#e0dfe5";

	

		}

		else if(divider_text_color == "Black"){

		    color ="#000000";

		}

		$(".strip1>span").css('color',color);

		$(".strip2>span").css('color',color);

		$(".strip3>span").css('color',color);

		$(".strip4>span").css('color',color);

		$(".strip5>span").css('color',color);

		$(".strip6>span").css('color',color);

});



$(document).on('change','#number_of_packs',function(){



		    var sel_val = $("#number_of_packs option:selected" ).val();

			//size_add=subtotal;

		    number_of_packs = sel_val;

            SendToSession("number_of_packs",number_of_packs,"set");

			$(".item_subtotal.col-md-8").html('Q-'+number_of_packs+" "+divider_title);

			$(".item_subtotal.col-md-4").html('<strong>$'+parseInt(number_of_packs)*parseInt(subtotal)+'</strong>');

            SendToSession("number_of_packs",number_of_packs,"set");

			c_cover=1;

		

});

$(document).on('keyup','#driver_name',function(){



		console.log($(this).val());//console.log($(this).attr("counter"));

		divider_title=$(this).val();

        SendToSession("divider_title",divider_title,"set");

		if(typeof number_of_packs == 'undefined'){

			number_of_packs =1;

        }    

 		    s_title=1;

        $(".item_subtotal.col-md-8").html('Q-'+number_of_packs+" "+divider_title);

        $(".item_subtotal.col-md-4").html('<strong>$'+parseInt(number_of_packs)*parseInt(subtotal)+'</strong>');

});

$(document).on('click','.fa-window-close',function(){

		console.log($(this).attr("id"));
		console.log(subtotal);
		var id=$(this).attr("id");
		$("."+id).empty();

		if(id == "item_cover_icolor"){

			subtotal -=12;
			c_cover=0;
			console.log('item_cover_icolor',subtotal);
			$("#driver_name").val("");
			$("#divider_color").val("");
			$("#divider_text_color").val("");
			$("#text-font").val("");
			$("#divider_1_text").val("");
			$("#divider_2_text").val("");
			$("#divider_3_text").val("");
			$("#divider_4_text").val("");
			$("#divider_5_text").val("");
			$("#divider_6_text").val("");
			$("#div1-font-size").val("");
			$("#div2-font-size").val("");
			$("#div3-font-size").val("");
			$("#div4-font-size").val("");
			$("#div5-font-size").val("");
			$("#div6-font-size").val("");
			$(".strip1>span").html("");
			$(".strip2>span").html("");
			$(".strip3>span").html("");
			$(".strip4>span").html("");
			$(".strip5>span").html("");
			$(".strip6>span").html("");
			$("#number_of_packs").val("");
			$("#price_calculator").hide();
		}
		/////////////////////////////////////////////
		if(subtotal <= 0){
			$(".item_subtotal").empty();
		}else if(subtotal > 0){/*
			$(".item_subtotal").empty();
			$(".item_subtotal.col-md-8").html('Subtotal');
			$(".item_subtotal.col-md-4").html('<strong>$'+subtotal+'</strong>');
		*/}
});

function changeTextFont(val,s_no){

    console.log(val);

	//var strnew = val.substr(0, strnew.length-1);

	var res = val.replace(";", "");

	console.log(res);

    SendToSession("TextFont",res,"set");

	if(s_no == 1){

		

		$(".border-red").css('font-family',res);

		

		

	}

	console.log('end');

}



function AdjustSize(val,s_no){





	var font_size = parseInt(val);

	console.log(font_size);

    

	if(s_no == 1){

		$(".strip1>span").css("font-size",font_size);

		SendToSession("div1_font_size",font_size,"set");

		console.log('1 ' ,s_no);

	}

	//else if(s_no == 2){

		$(".strip2>span").css("font-size",font_size);

        SendToSession("div2_font_size",font_size,"set");

		console.log('2 ' ,s_no);



	//}

	//else if(s_no == 3){

		$(".strip3>span").css("font-size",font_size);

        SendToSession("div3_font_size",font_size,"set");

		console.log('3 ' ,s_no);

	//}

	//else if(s_no == 4){

		$(".strip4>span").css("font-size",font_size);

        SendToSession("div4_font_size",font_size,"set");

		console.log('4 ' ,s_no);

	//}

	//else if(s_no == 5){

		$(".strip5>span").css("font-size",font_size);

        SendToSession("div5_font_size",font_size,"set");

		console.log('5 ' ,s_no);

	//}

	//else if(s_no == 6){

		$(".strip6>span").css("font-size",font_size);

        SendToSession("div6_font_size",font_size,"set");

		console.log('6 ' ,s_no);

	//}

}



$(document).on('click','#pd_cover',function(e){

    $(".loader").css("display","block");

	

	$('.next_step_btn').css('display','none');

	

	$([document.documentElement, document.body]).animate({



        scrollTop: $(".site-header").offset().top



    }, 0);

 	var dividers = jQuery('.divStrip_set .divStrip span');

	var dividersPosL = jQuery(dividers).css('left').replace(/[^-\d\.]/g, ''); 

	dividersPosL = parseInt(dividersPosL); 

	var BtnNewVal = dividersPosL+3;

	jQuery(dividers).css('left',BtnNewVal+'px'); 

	

	var dividersPosT = jQuery(dividers).css('top').replace(/[^-\d\.]/g, ''); 

	dividersPosT = parseInt(dividersPosT); 

	var BtnNewVal = dividersPosT+5;

	jQuery(dividers).css('top',BtnNewVal+'px');  

	html2canvas($("#working_area"), {

            onrendered: function (canvas) {

                var imageStr2 = canvas.toDataURL('png');

                var rawData2 = canvas.toDataURL("image/png");

				rawData2 = rawData2.substr("data:image/png;base64,".length);

		        $("#divider_design_preview").attr("src",imageStr2);

				//console.log(imageStr2);

				//window.open(imageStr2);

				$('.next_step_btn').css('display','inline-block');

				$('#exampleModal').modal('show');

				

				

 	var dividers = jQuery('.divStrip_set .divStrip span');

	var dividersPosL = jQuery(dividers).css('left').replace(/[^-\d\.]/g, ''); 

	dividersPosL = parseInt(dividersPosL); 

	var BtnNewVal = dividersPosL-3;

	jQuery(dividers).css('left',BtnNewVal+'px'); 

	

	var dividersPosT = jQuery(dividers).css('top').replace(/[^-\d\.]/g, ''); 

	dividersPosT = parseInt(dividersPosT); 

	var BtnNewVal = dividersPosT-5;

	jQuery(dividers).css('top',BtnNewVal+'px'); 

            $(".loader").css("display","none");			 

            },

            logging: true,



        });



})

$(document).on('click','#add_to_wishlist',function(e){

  

  add_to_wishlist=1;

  $("#post_to_gallery").trigger("click");



});

$(document).on('click','#post_to_gallery',function(e){
    $('.loader').css("display","block");
	$('.next_step_btn').css('display','none');
    $([document.documentElement, document.body]).animate({

        scrollTop: $(".site-header").offset().top

    }, 0);

	       //$('.divStrip_set').css('right','0');

            

	html2canvas($("#working_area"), {



            onrendered: function (canvas) {



                var imageStr2 = canvas.toDataURL('png');

                var rawData2 = canvas.toDataURL("image/png");

				rawData2 = rawData2.substr("data:image/png;base64,".length);

				var img_name = 'divider_page';

                var datasend = 'calender';

                var divider_page_title = $("#driver_name").val(); 

				console.log(imageStr2);

                var j_string = {};
                j_string['driver_name']       =$("#driver_name").val();
                j_string['divider_color']     =$("#divider_color").val();
                j_string['divider_text_color']=$("#divider_text_color").val();
                j_string['text_font']         =$("#text-font").val();
                j_string['divider_1_text']    =$("#divider_1_text").val();
                j_string['divider_2_text']    =$("#divider_2_text").val();
                j_string['divider_3_text']    =$("#divider_3_text").val();
                j_string['divider_4_text']    =$("#divider_4_text").val();
                j_string['divider_5_text']    =$("#divider_5_text").val();
                j_string['divider_6_text']    =$("#divider_6_text").val();
                j_string['div1_font_size']    =$("#div1-font-size").val();
                j_string['strip1_left']       =$(".strip1>span").css("left");
                j_string['strip1_top']        =$(".strip1>span").css("top");
                //j_string['strip2_left']       =$(".strip2>span").css("left");
                j_string['strip2_top']        =$(".strip2>span").css("top");
                //j_string['strip3_left']       =$(".strip3>span").css("left");
                j_string['strip3_top']        =$(".strip3>span").css("top");
                //j_string['strip4_left']       =$(".strip4>span").css("left");
                j_string['strip4_top']        =$(".strip4>span").css("top");
                //j_string['strip5_left']       =$(".strip5>span").css("left");
                j_string['strip5_top']        =$(".strip5>span").css("top");
                //j_string['strip6_left']       =$(".strip6>span").css("left");
                j_string['strip6_top']        =$(".strip6>span").css("top");
                j_string['number_of_packs']   =$("#number_of_packs").val();
                j_string['price_calculator']  =$("#price_calculator").val();
                var json_data = JSON.stringify(j_string);
                //alert(json_data);
                jQuery.ajax({
                    type: 'POST',
                    url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",
                    data: {
                        action         :'cover_page_add_to_gallery',
                        image          :imageStr2,
                        page_name      :img_name,
                        page_title     :divider_page_title,
                        p_id           :40,
                        variation_id   :43,
                        json_data      :json_data,
                        add_to_wishlist:add_to_wishlist,
                        price          :subtotal
                    },
                    //dataType: 'json',
                    encode: true,
                    success: function (data_return) {
                            console.log(data_return);
							$('.next_step_btn').css('display','inline-block');
                            if(add_to_wishlist==1){
                                add_to_wishlist=0;
                            }
							//$('.divStrip_set').css('right','-2px');
                            $('.loader').css("display","none");
							if(data_return==0){
                                //alert("Please log in to add Wishlist");
                                $("#showloginmsg").modal('show');
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

		var qnt = $("#number_of_packs").val();
        console.log('qnt',qnt);
        if(qnt==""){
            alert($("#text-font").val());
            alert("Please select atleast 1 Number of Pack");
            return false;
        }
        $(".loader").css('display', 'block');
		$('.next_step_btn').css('display','none');
		$([document.documentElement, document.body]).animate({
        scrollTop: $(".site-header").offset().top
        }, 0);
        html2canvas($("#working_area"), {

            onrendered: function (canvas) {

                var imageStr2 = canvas.toDataURL('png');
                var rawData2 = canvas.toDataURL("image/png");
				rawData2 = rawData2.substr("data:image/png;base64,".length);
                var img_name = 'Divider';
                var datasend = 'divider';
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
						$('.next_step_btn').css('display','block');
						//$('.divStrip_set').css('right','-2px');
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

        var divider_color      = $("#divider_color").val();
		var divider_text_color = $("#divider_text_color").val();
		var text_font    	   = $("#text-font").val();
		var divider_1_text     = $("#divider_1_text").val();
		var divider_2_text     = $("#divider_2_text").val();
		var divider_3_text     = $("#divider_3_text").val();
		var divider_4_text     = $("#divider_4_text").val();
		var divider_5_text     = $("#divider_5_text").val();
		var divider_6_text     = $("#divider_6_text").val();
		var qnt                = $("#number_of_packs").val();
        var divider_title      = $("#driver_name").val();
        var j_string = {};

        j_string['driver_name']       =$("#driver_name").val();
        j_string['divider_color']     =$("#divider_color").val();
        j_string['divider_text_color']=$("#divider_text_color").val();
        j_string['text_font']         =$("#text-font").val();
        j_string['divider_1_text']    =$("#divider_1_text").val();
        j_string['divider_2_text']    =$("#divider_2_text").val();
        j_string['divider_3_text']    =$("#divider_3_text").val();
        j_string['divider_4_text']    =$("#divider_4_text").val();
        j_string['divider_5_text']    =$("#divider_5_text").val();
        j_string['divider_6_text']    =$("#divider_6_text").val();
        j_string['div1_font_size']    =$("#div1-font-size").val();
        j_string['strip1_left']       =$(".strip1>span").css("left");
        j_string['strip1_top']        =$(".strip1>span").css("top");
        //j_string['strip2_left']       =$(".strip2>span").css("left");
        j_string['strip2_top']        =$(".strip2>span").css("top");
        //j_string['strip3_left']       =$(".strip3>span").css("left");
        j_string['strip3_top']        =$(".strip3>span").css("top");
        //j_string['strip4_left']       =$(".strip4>span").css("left");
        j_string['strip4_top']        =$(".strip4>span").css("top");
        //j_string['strip5_left']       =$(".strip5>span").css("left");
        j_string['strip5_top']        =$(".strip5>span").css("top");
        //j_string['strip6_left']       =$(".strip6>span").css("left");
        j_string['strip6_top']        =$(".strip6>span").css("top");
        j_string['number_of_packs']   =$("#number_of_packs").val();
        j_string['price_calculator']  =$("#price_calculator").val();
        var json_data = JSON.stringify(j_string);
        //alert(json_data);
		console.log(divider_color);
        console.log(divider_text_color);
        console.log(text_font);
		console.log(divider_1_text);
        console.log(divider_2_text);
        console.log(divider_3_text);
		console.log(divider_4_text);
        console.log(divider_5_text);
        console.log(divider_6_text);
        jQuery.ajax({
            type: 'POST',
            url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",
            data: {
                action         :'save_before_cart',
                page_name      :'divider_page',
                json_data      :json_data
            },
            //dataType    : 'json',
            //encode      : true,
            success: function (data) { //alert(data);
			console.log(data);
            var design_id=data;
            jQuery.ajax({
            type: 'POST',
            url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",
            data: {
                action            : 'canvas_add_cart',
                p_id              : 42,
                img_id            : image_id,
                design_id         : design_id,
                divider_title     : divider_title,
				divider_color     : divider_color,
				divider_text_color: divider_text_color,
				text_font         : text_font,
				divider_1_text    : divider_1_text,
				divider_2_text    : divider_2_text,
				divider_3_text    : divider_3_text,
				divider_4_text    : divider_4_text,
				divider_5_text    : divider_5_text,
				divider_6_text    : divider_6_text,
				variation_id	  : 70,
                qnt   			  : qnt
            },
            //dataType    : 'json',
            //encode      : true,
            success: function (data) { //alert(data);
				console.log(data);
                //window.location.href = '<?php echo get_home_url(); ?>/cart/';
            }
        });
       }
     });
        
    }



     $('.movLeft').on('click',function(){ 

		var dividers = jQuery('.divStrip_set .divStrip span');
		var dividersPosL = jQuery(dividers).css('left').replace(/[^-\d\.]/g, ''); 
			dividersPosL = parseInt(dividersPosL); 
			var BtnNewVal = dividersPosL-1;
			jQuery(dividers).css('left',BtnNewVal+'px');
            SendToSession("dividerleft",BtnNewVal,'set');
			console.log(BtnNewVal+'px'); 

    });

    $('.movRight').on('click',function(){

		var dividers = jQuery('.divStrip_set .divStrip span');
		var dividersPosL = jQuery(dividers).css('left').replace(/[^-\d\.]/g, ''); 
			dividersPosL = parseInt(dividersPosL); 
			var BtnNewVal = dividersPosL+1;
			jQuery(dividers).css('left',BtnNewVal+'px');
            SendToSession("dividerleft",BtnNewVal,'set');
			console.log(BtnNewVal+'px'); 

    });

	 $('.movUp').on('click',function(){ 

        var dividers = jQuery('.divStrip_set .divStrip span');
        var dividersPosT = jQuery(dividers).css('top').replace(/[^-\d\.]/g, ''); 
            dividersPosT = parseInt(dividersPosT); 
            var BtnNewVal = dividersPosT-1;
            jQuery(dividers).css('top',BtnNewVal+'px');
            SendToSession("dividertop1",BtnNewVal,'set');
            SendToSession("dividertop2",BtnNewVal,'set');
            SendToSession("dividertop3",BtnNewVal,'set');
            SendToSession("dividertop4",BtnNewVal,'set');
            SendToSession("dividertop5",BtnNewVal,'set');
            SendToSession("dividertop6",BtnNewVal,'set');

            console.log(BtnNewVal+'px'); 

    });

    $('.movDown').on('click',function(){

        var dividers = jQuery('.divStrip_set .divStrip span');
        var dividersPosT = jQuery(dividers).css('top').replace(/[^-\d\.]/g, ''); 
            dividersPosT = parseInt(dividersPosT); 
            var BtnNewVal = dividersPosT+1;
            jQuery(dividers).css('top',BtnNewVal+'px');

            SendToSession("dividertop1",BtnNewVal,'set');
            SendToSession("dividertop2",BtnNewVal,'set');
            SendToSession("dividertop3",BtnNewVal,'set');
            SendToSession("dividertop4",BtnNewVal,'set');
            SendToSession("dividertop5",BtnNewVal,'set');
            SendToSession("dividertop6",BtnNewVal,'set');

            console.log(BtnNewVal+'px'); 

    });

  $('.moveUp').on('click',function(){ 

        var cur_id=$(this).attr("id").replace("mu", "");
        //var cur_id=cur_id.replace("mu", "");
        console.log(cur_id);
        var cur_span=".strip"+cur_id+">span";
        var cur_top=$(cur_span).css('top').replace(/[^-\d\.]/g, '');
        var top_min=parseInt(cur_top)-1;
        $(cur_span).css('top',top_min+'px');
        var currentdivider="dividertop"+cur_id;
        SendToSession(currentdivider,top_min,'set');
    });  

$('.moveDown').on('click',function(){

        var cur_id=$(this).attr("id").replace("md", "");
        //var cur_id=cur_id.replace("mu", "");
        console.log('cur_id',cur_id);
        var cur_span=".strip"+cur_id+">span";
        console.log('cur_span',cur_span);
        var cur_top=$(cur_span).css('top').replace(/[^-\d\.]/g, '');
        console.log('cur_top',cur_top);
        var top_max=parseInt(cur_top)+1;
        $(cur_span).css('top',top_max+'px');
        var currentdivider="dividertop"+cur_id;
        SendToSession(currentdivider,top_max,'set');
    });
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
function load_session_data(){
  jQuery.ajax({
            type: 'POST',
            url: "<?php echo get_home_url(); ?>/wp-admin/admin-ajax.php",

            data: {
                action              : 'load_session_data',
                target              : 'divider',
            },
            dataType    : 'json',
            encode      : true,
            success: function (data) { //alert(data);
            console.log(data);
            jQuery("#load_session_data").html(data);
            }
        });
}   	
</script>
<style>

.modal_preview_image{

    width:60%;

}    

.btnsRow {

margin-top: 2%;



position: static;



margin-bottom: 3%;

}



.font_sizee { width:35% !important;}



.upper_div h4{margin:0;}	

.initial_page { 

    position: absolute;

    bottom: 150px;

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

    left: 45px;

    bottom: 150px;

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



.moveUp,.moveDown{

    width: 15%;

}



.lg,.sm {

	font-weight: bold;

    margin-right: 7px;

    padding-right: 7px;

	cursor:pointer;

}

.custom_title {

	font-size: 13px !important;



}

.contact_info {



	font-size:10px !important;

} 







.bdr-bot .form-control {



    font-size: 12px;

    text-align: center;



}

.bdr-bot select.form-control.divider_select {

   

    height: 32px;

    line-height: 10px;

    color: #575757;

    margin-left: 3px;

	padding-left: 15px !important;

}

</style>

<?php //get_footer();