<?php

get_header(); ?>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="http://xp.littlelove.dk/wp-content/themes/flatsome/assets/
css/evol-colorpicker.min.css"/>
<script src="http://xp.littlelove.dk/wp-content/themes/flatsome/assets/js/evol-colorpicker.min.js"></script>
<script src="https://www.jqueryscript.net/demo/jQuery-Plugin-For-Auto-Resizing-Text-textfill/jquery.textfill.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="wrap"> 
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- container -->
  <div class="price_calc_upper">
  <div class="rightPane" style="width:20%;float:right;position:absolute;top:0;right:0">
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
      <div class="leftPane" style="width:80%;display: flex;">
        <div id="sidebar0" class="sidebar_page">
      	<div class="sideBarInner">
           <h1 class="sidebar-heading">Cover Design</h1>
          <div class="form-group bdr-bot cover_color"> 
            <label for="cover_color" class="ccover_color">Cover Color</label>
            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_91.png" width="10%" height="10%" title="Classic Blue" style="cursor:pointer;" class="cover_icolor " />
            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_92.png" width="10%" height="10%" title="Traditional Tweed" style="cursor:pointer;"  class="cover_icolor" />
            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_93.png"  width="10%" height="10%" title="Executive Gray" style="cursor:pointer;"  class="cover_icolor"/>
            <!--<img src="<?php echo site_url();?>/wp-content/uploads/asset/cross-icon.png"  width="10%" height="10%" title="Remove" class="cover_icolor img_icon" /> -->
            </div>
          <div class="form-group bdr-bot embossing_color"> 
            <label for="embossing_color" class="cembossing_color">Text Color</label>
            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_94.png" width="10%" height="10%" data-id="Gold"  title="gold foil" class="emb_color" /style="cursor:pointer;"> <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_95.png" width="10%" height="10%" title="silver foil" data-id="Silver" class="emb_color" style="cursor:pointer;" /> <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_96.png" width="10%" height="10%" data-id="Black" title="black foil" class="emb_color" style="cursor:pointer;" /><!-- <img src="<?php echo site_url();?>/wp-content/uploads/asset/cross-icon.png" width="10%" height="10%" title="Remove" class="emb_color img_icon" />--> </div>
          <div class="form-group bdr-bot disc_color">
            <label for="disc_color" class="cdisc_color">Disc Color</label>
            <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_94.png" width="10%" height="10%"  title="Gold" class="disc_icolor" style="cursor:pointer;" /> <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_95.png" width="10%" height="10%" title="Silver" class="disc_icolor" style="cursor:pointer;"/> <img src="<?php echo site_url();?>/wp-content/uploads/asset/Screenshot_96.png" width="10%" height="10%" title="Black" class="disc_icolor" style="cursor:pointer;"/> <!--<img src="<?php echo site_url();?>/wp-content/uploads/asset/cross-icon.png" width="10%" height="10%" title="Remove" class="disc_icolor img_icon" />-->
          </div>
          <div class="form-group bdr-bot disc_size">
            <label for="disc_size" class="cdisc_size">Disc Size</label>
             <span class="lg idisc_size" id="lg" title="32mm">Lg</span><span class="sm idisc_size" id="sm" title="24 m">Sm</span>
          </div>
          
          <!--<div class="form-group">
            <label for="select_title">Add a Title $18</label>
            <br/>
            <select name="select_title" id="select_title" class="select_title" style="width:230px;">
              <option value="">Choose a Title</option>
              <option value="a">Seize the Day</option>
              <option value="b">Good , Better , Best</option>
              <option value="c">Good Morning Sunshine!</option>
            </select>
          </div>-->
          <div class="form-group">
            <label for="custom_title" class="ccustom_title"> Add a Title $18 </label><br/><span class="scustom_title"></span>
            <input type="text" name="custom_title" id="custom_title" class="form-control custom_title" placeholder="Type a custom title here" maxlength="30"   />
          </div>
          <div class="form-group select_font">
            <label for="text-font" class="text-font"></label>
            <select class="form-control font-family-select" onchange="changeTextFont(this.value,1)" name="text-font">
                <option style="font-weight:bold;" value="">FONT</option>
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
          </div>
          
          <div class="form-group">
            <label for="input_name" class="cinput_name">Add Initials $10</label><br /><span class="scustom_title"></span>
            <input type="text" name="input_name" id="input_name" class="input_name"  style="width:153px;" placeholder="Type initials Here" maxlength="5" />
            <div class="form-group select_font">
            <label for="text-font" class="text-font"></label>
            <select class="form-control font-family-select" onchange="changeTextFont(this.value,2)" name="text-font">
                <option style="font-weight:bold;" value="">FONT</option>
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
          </div>
          </div>
        </div>
        </div>
        
        <div id="working_area0" class="working_area col-md-4" style="background-image:url(http://production.technology-architects.com/customize_calendar/wp-content/uploads/asset/FrontCover.png);background-size: 100% auto;
  background-repeat: no-repeat;background-position: center;">
          <div class="upper_div">
            <div class="title_page" contenteditable="false" style="width:160px;height:20px;white-space:nowrap;">
              <span style="font-size: 11px;"><strong></strong></span>
            </div>
          </div>
          <!--<div class="bottom_div">Front Cover Design</div>-->
          <div class="lower_div">
            <div class="initial_page" contenteditable="false">
              <strong></strong>
            </div>
          </div>
        </div>
        <div id="working_area1" class="working_area col-md-4" style="background-image:url(http://production.technology-architects.com/customize_calendar/wp-content/uploads/asset/InsideCover.png);background-size: 100% auto;
  background-repeat: no-repeat;background-position: 40px center;">
          <div class="i_lower_div">
            <div class="i_initial_page" id="i_initial_page" contenteditable="false">
              <span style="font-size: 11px;"><strong></strong></span>
            </div>
          </div><!--<div class="bottom_div2">Inside Cover Design</div>-->
        </div>
        
      </div>
      
      </div>
            
      <div class="form-group contact_info">
        
        <label for="contact_info" class="ccontact_info">Add Contact Information $12</label><br /><span class="scustom_title"></span>
        <input type="text" name="contact_info" id="contact_info" class="contact_info"  style="width:330px;" placeholder="Type Email or Phone Number Here" maxlength="30"  />
        <div  id="next" class="float_right">Design Your Pages<i class="fa fa-angle-right" style="font-size: 50px;vertical-align:middle;padding-left: 10px;"></i></div>
      </div>
      <div class="form-group select_font">
            <label for="text-font" class="text-font"></label>
            <select class="form-control font-family-select" onchange="changeTextFont(this.value,3)" name="text-font">
                <option style="font-weight:bold;" value="">FONT</option>
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
          </div>
       </div>
  </div>
  <div id="step2" style="display:none;">
    
    <h2>Page Design</h2>
    <div class="container">
      <div class="row">
        <div id="sidebar" class="sidebar_page col-md-3">
          <div class="form-group">
            <input type="button" name="draw_button" id="draw_button" class="draw_button" value="Draw Box" />
          </div>
          <div class="form-group">
            <input type="button" name="draw_textbox" id="draw_textbox" class="draw_textbox" value="Draw TextBox" />
            <div id="text_box_contrl"></div>
          </div>
          <div class="form-group">
            <input type="button" name="draw_line" id="draw_line" class="draw_line" value="Draw Line" />
          </div>
          <div class="form-group">
            <input type="button" name="draw_cat" id="draw_cat" class="draw_cat" value="Draw Category" />
            <div id="cat_class" class="cat_class" style="display:none;">
            <ul>
            <li id="s">
            <a href="#" onclick="show_subcat('student');">Student</a>
                <ul id="student_sub" style="display:none;">
                <li class="subli">Classes</li>
                <li class="subli">Library</li>
                <li class="subli">Study</li>
                </ul>
            </li>
            <li id="ls">
            <a href="#" onclick="show_subcat('lifestyle');">Life Style</a>
                <ul id="lifestyle_sub" style="display:none;">
                <li class="subli">Exercise</li>
                <li class="subli">Meditate</li>
                <li class="subli">Walk Dogs</li>
                </ul>
            </li>
            <li>
            <a href="#" onclick="show_subcat('parenting');">Parenting</a>
                <ul id="parenting_sub" style="display:none;">
                <li class="subli">Bus Pickup</li>
                <li class="subli">Pack Lunches</li>
                <li class="subli">Kid activites</li>
                </ul>
            </li>
            <li id="sei">
            <a href="#" onclick="show_subcat('sticker');">Sticker/Emojis/Icons</a>
                <ul>
                 
                </ul>
             </li>
            </ul>
            </div>
          </div>
        </div>
        <div id="working_area" class="working_area col-md-9"> </div>
      </div>
    </div>
    <div class="form-group">
    	<!--<input type="button" value="Back" id="back" class="float_right" />-->
        <div  id="back" class="float_right"><i class="fa fa-angle-left" style="font-size: 50px;vertical-align:middle;padding-left: 10px;"></i>Back</div>
    </div>
  </div>
  </div>
</div>
<script type="text/javascript">


var current_main_box=emboss_name='';
var subtotal=firstDone=sel_title=0;
var sel_initial=sel_cntinfo=s_title=0;
var s_initial=s_cntinfo=0;

$(document).ready(function() {
        //$("#mycolor").colorpicker();
		//$(".mycolor").colorpicker();
});
$(document).on('click','#next',function(){
	
	$("#step1").hide();
	$("#step2").show();
	
});
$(document).on('click','#back',function(){
	
	$("#step2").hide();
	$("#step1").show();
	
});
function show_subcat(subcat){
	  
	  
	  var ul_id="#"+subcat+"_sub";
	  console.log(ul_id);
	  $(ul_id).show();
}
$(document).on('click','#draw_cat',function(){
		
		$("#cat_class").show();
});

$(document).on('click','.subli',function(){
		
		console.log($(this).html());
		var crr=$(this).html();
		var html ='<div id="main_dd_menu'+len+'">'+crr+'</div>';
		console.log(current_main_box);//console.log("#main_textbox"+len);		   
		$(current_main_box).append(html);
		$("#main_dd_menu"+len).draggable();
		len++;
});
var len=1;
$(document).on('click','#draw_button',function(){
		
		var html ='<div id="main_box_'+len+'" style="width:200px;border:2px solid;height:200px">'+
					'<div></div>'+
				   '</div>';
		$("#working_area").append(html);
		$("#main_box_"+len).draggable();
		$("#main_box_"+len).resizable();
		current_main_box="#main_box_"+len;
		len++;
		
});
var len=1;
$(document).on('click','#draw_textbox',function(){
	
	var html ='<div contenteditable="true" id="main_textbox'+len+'" style="width:100px;border:2px dotted;height:100px">'+
			   '<span>Text to edit</span>'+
			  '</div>';
		console.log(current_main_box);console.log("#main_textbox"+len);		   
		$(current_main_box).append(html);
		$("#main_textbox"+len).draggable();
		$("#main_textbox"+len).resizable();
		$("#main_textbox"+len).dblclick(function() {
			$(this).draggable({ disabled: true });
			console.log("disabled: true");
		});
		$("#main_textbox"+len).click(function() {
    		$(this).draggable( {disabled: false});
			console.log("disabled: false");
		});
		
		font_size=textbox_fontsize(len);
		font_color=textbox_fontcolor(len);
		$("#text_box_contrl").append(font_size+font_color);
		$(".mycolor").colorpicker();
		len++;
		
	
});
var len=1;
$(document).on('click','#draw_line',function(){
	
	var html ='<div class="lines"><hr /></div>';
		$("#main_textbox_"+len).append(html);
		$(".lines").draggable();
		$(".lines").resizable();
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
			subtotal+=20;
			$(".item_subtotal.col-md-8").html('Subtotal');
			$(".item_subtotal.col-md-4").html('<strong>$'+subtotal+'</strong>');
		}

});

$(document).on('click','.fa-window-close',function(){
	
		console.log($(this).attr("id"));
		console.log(subtotal);
		var id=$(this).attr("id");
		$("."+id).empty();
		if(id == "item_cover_icolor"){
			subtotal -=20;
			console.log('item_cover_icolor',subtotal);
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
	if(sel_id=="lg"){
		/*$(".item_cover_embosscolor").empty();
		$(".item_cover_embosscolor.col-md-8").html(" Large");
		$(".item_cover_embosscolor.col-md-4").html('<strong>$16</strong>&nbsp;&nbsp;<i id="item_cover_embosscolor" style="cursor:pointer;" class="fa fa-window-close" aria-hidden="true"></i>');*/
	}
	else if(sel_id=="sm"){}
	
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
$(document).on('keyup','.custom_title',function(){
	
	console.log($(this).val());//console.log($(this).attr("counter"));
	var text=$(this).val();
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
	if(s_title==1){
		$(".item_cover_embosscolor").empty();
		$(".item_cover_embosscolor.col-md-8").html(titletext+" Title");
		$(".item_cover_embosscolor.col-md-4").html("<strong>$18</strong>");
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
		$(".item_initial_embosscolor.col-md-4").html("<strong>$10</strong>");
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
		$(".item_innercolor_embosscolor.col-md-4").html("<strong>$12</strong>");
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
	/*if(text == "Gold"){
		 var imageUrl = $(this).attr("src");//'';
	}
	else if(text == "Silver"){
	     var imageUrl = $(this).attr("src");//'';
	}*/
	console.log(imageUrl);
	$("#working_area0").css("background-image",'url(' + imageUrl + ')');
	$("#working_area1").css("background-image",'url(' + imageUrl + ')');
	
});
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
</script>
<style>
.font_sizee { width:35% !important;}
.upper_div {
	position: absolute;
    top: 50%;
    left: 45%;
    width: 84%;
    transform: translate(-50%,-50%);
    text-align: center;
    padding-left: 55px;
	}
.upper_div h4{margin:0;}	
.initial_page { 
    position: absolute;
    bottom: 115px;
    right: 20px;
	font-size: 11px;
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
    bottom: 115px;
    padding: 0 24px;
}
.i_lower_div h6 { margin:0; }
.i_initial_page{
	height:25px;
    width:110px;
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
.price_calculator{
	width:100%;
	border:solid 2px;
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
}
.item_subtotal{
	text-align:right;
	padding-top:10px;
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
    width: 100px;
    margin-left: 15px;
}
.lg,.sm {
	font-weight: bold;
    margin-right: 7px;
    padding-right: 7px;
	cursor:pointer;
}
</style>
<?php get_footer();




