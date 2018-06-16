<!DOCTYPE HTML>
<html>
<head>
 <meta name="description" content="Create secure password in your browser. Generate secure password with highest entropy.">
 <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <meta name="HandheldFriendly" content="true">
 <link rel="stylesheet" type="text/css" href="/css/loading.css">
 <link rel="stylesheet" type="text/css" href="/rangeslider/rangeslider.css">
 <link rel="stylesheet" type="text/css" href="/css/main.css"> 
 <title>Secure password generator</title>
 <script src="/js/jquery.min.js"></script>
</head>

<body bgcolor="#252839">

  <div class="head_h1">
    <h1>SECURE PASSWORD GENERATOR</h1>
  </div>
  <br>
  <br>

<div id="page_loading" class="sk-cube-grid">
	<br><br><br><br>
                           <div class="sk-cube sk-cube1"></div>
                           <div class="sk-cube sk-cube2"></div>
                           <div class="sk-cube sk-cube3"></div>
                           <div class="sk-cube sk-cube4"></div>
                           <div class="sk-cube sk-cube5"></div>
                           <div class="sk-cube sk-cube6"></div>
                           <div class="sk-cube sk-cube7"></div>
                           <div class="sk-cube sk-cube8"></div>
                           <div class="sk-cube sk-cube9"></div>
</div>

<div id="body_load" style=display:none>   
 <form id="test_slider" oninput="x.value=parseInt(a.value)"> 
    <div class="leng_value">
    <output id="onload_page" form="test_slider" name="x">
    </output>
    <br><br>
    </div>
    <div class="range_slider">
   <input type="range" id="a" name="a"  min="1" max="128" step="1" value='16' data-rangeslider>
    </div>
    </form> 


     <br><br>
     
     <div class="content">
      <div id="checkbox_box" class="box">
       <p>
       <input type="checkbox" id="c1" name="cb1" value="checked"/>
       <label for="c1">Include symbols: @#$%!</label>
       </p>
       <p>
       <input type="checkbox" id="c2" name="cb2" value="2">
       <label for="c2">Incude numbers: 0123456789</label>
       </p>
       <p>
       <input type="checkbox" id="c3" name="cb3" value="3">
       <label for="c3">Include uppercase characters: ABCDEFGHIJ...</label>
       </p>
      </div>
     </div>     

<script src="/rangeslider/rangeslider.min.js"></script>
<script>
$(document).ready(function() {
// Initialize a new plugin instance for all
// e.g. $('input[type="range"]') elements.
$('input[type="range"]').rangeslider({
            // Deactivate the feature detection
            polyfill: false
        });

});
</script>

<br><br>
<div id="button_and_pw">
      <div class="button_gen">
      <button id="getNewPass" type="button" class="sub_button getNewPass">Generate</button>
</div><br>


<div id="auto_fit" class="out_pass">
  <textarea id="out_pw" rel="gp" data-size="" data-character-set="a-z,A-Z,0-9,#">
  </textarea>
</div>
</div>

<div class="pw_meter" style="display:none">
</div>

<br>
<br>
<br>

<div class='footer'><a class='link_createdby' target='_blank' href='https://www.linkedin.com/in/michal-vaško-490331aa?trk=hp-identity-name'> Created by <strong>Michal Vasko</a></strong>
&nbsp
&nbsp
<a href='https://twitter.com/michalvasko2' class='twitter-follow-button' data-show-count='false' data-show-screen-name='false'></a><script async src='//platform.twitter.com/widgets.js' charset='utf-8'></script>
</div>

<script type="text/javascript">
	function randString(id) {
		var dataSet = $(id).attr('data-character-set').split(',');
		var possible = '';
		
		// Get slider value
		var slider_value = document.getElementById('a').value;


		//PW meter
		if(slider_value <= 8 ) {
		$("div.pw_meter").replaceWith('<div class="pw_meter" id="box_strenght" style="text-align:center; margin: auto; color: #D91E18;"><div id="strenght1" style="width:100%; height:30px; display:inline"><div id=p1 style=" margin: 0px 0px -20px 0px;font-family: Open Sans Condensed, sans-serif"><p>Weak password</p></div></div><div id="strenght2" style="width:40px;border-left: solid #D91E18;border-top: solid #D91E18;border-bottom: solid #D91E18; height:30px;background-color: #D91E18; text-align:center; display: inline-block"></div><div id="strenght3" style="width:40px; height:30px; border-top: solid #D91E18; border-bottom: solid #D91E18; text-align: center; display: inline-block; margin: 0px 0px 0px -5px"></div><div id="strenght4" style="width:40px; height:30px; border-top: solid #D91E18; border-bottom: solid #D91E18; text-align: center; display: inline-block; margin: 0px 0px 0px -5px"></div><div id="strenght5" style="width:40px; height:30px; border-top: solid #D91E18; border-bottom: solid #D91E18; border-right: solid #D91E18; text-align:center; display: inline-block; margin: 0px 0px 0px -5px"></div></div>');
		}
		if(slider_value <= 15 && slider_value >= 9) {
		$("div.pw_meter").replaceWith('<div class="pw_meter" id="box_strenght" style="width: 100%;text-align:center;margin: auto; display: block; color: #f2b632;"><div id="strenght1" style="width:100px; height:30px; display:inline"><div id=p1 style="margin: 0px 0px -20px 0px;font-family: Open Sans Condensed, sans-serif"><p>Medium password</p></div></div><div id="strenght2" style="width:40px;border-left: solid #f2b632;border-top: solid #f2b632;border-bottom: solid #f2b632; height:30px;background-color: #f2b632; text-align: center; display: inline-block"></div><div id="strenght3" style="width:40px; height:30px; border-top: solid #f2b632; border-bottom: solid #f2b632; background-color: #f2b632; text-align:center; display: inline-block; margin: 0px 0px 0px -5px"></div><div id="strenght4" style="width:40px; height:30px; border-top: solid #f2b632; border-bottom: solid #f2b632; text-align: center; display: inline-block; margin: 0px 0px 0px -5px"></div><div id="strenght5" style="width:40px; height:30px; border-top: solid #f2b632; border-bottom: solid #f2b632; border-right: solid #f2b632; text-align: center; display: inline-block; margin: 0px 0px 0px -5px"></div></div>');
		}
		if(slider_value <= 29 && slider_value >= 16) {
		$("div.pw_meter").replaceWith('<div class="pw_meter" id="box_strenght" style="text-align:center; margin: auto; display:block; color: #2ECC71;"><div id="strenght1" style="width:100%; height:30px; display:inline"><div id=p1 style="font-family: Open Sans Condensed, sans-serif;margin: 0px 0px -20px 0px;"><p>Strong password</p></div></div><div id="strenght2" style="width:40px;border-left: solid #2ECC71;border-top: solid #2ECC71;border-bottom: solid #2ECC71; height:30px;background-color: #2ECC71;text-align: center;display: inline-block"></div><div id="strenght3" style="width:40px; height:30px; border-top:  solid #2ECC71; border-bottom: solid #2ECC71; background-color: #2ECC71;text-align: center;display: inline-block;margin: 0px 0px 0px -5px"></div><div id="strenght4" style="width:40px; height:30px;border-top: solid #2ECC71; border-bottom: solid #2ECC71; background-color: #2ECC71;text-align: center;display: inline-block;margin: 0px 0px 0px -5px"></div><div id="strenght5" style="width:40px; height:30px;border-top: solid #2ECC71; border-bottom: solid #2ECC71; border-right: solid #2ECC71;text-align: center;display: inline-block; margin: 0px 0px 0px -5px"></div></div>');
		}
		if(slider_value >= 30) {
		$("div.pw_meter").replaceWith('<div class="pw_meter" id="box_strenght" style="text-align:center; margin: auto; display: block; color: #2ECC71;"><div id="strenght1" style="width:100%; height:30px; display:inline"><div id=p1 style="font-family: Open Sans Condensed, sans-serif; margin: 0px 0px -20px 0px;"><p>Very strong password</p></div></div><div id="strenght2" style="width:40px;border-left: solid #2ECC71;border-top: solid #2ECC71;border-bottom: solid #2ECC71; height:30px; background-color: #2ECC71;text-align:center; display: inline-block"></div><div id="strenght3" style="width:40px; height:30px; border-top: solid #2ECC71; border-bottom: solid #2ECC71; background-color: #2ECC71; text-align:center; display: inline-block; margin: 0px 0px 0px -5px"></div><div id="strenght4" style="width:40px; height:30px; border-top: solid #2ECC71; border-bottom: solid #2ECC71; background-color: #2ECC71; text-align: center; display: inline-block; margin: 0px 0px 0px -5px"></div><div id="strenght5" style="width:40px; height:30px; border-top: solid #2ECC71; border-bottom: solid #2ECC71; border-right: solid #2ECC71; background-color: #2ECC71; text-align: cebter; display: inline-block; margin: 0px 0px 0px -5px"></div></div>');
		}

		if(document.getElementById('c1').checked) {
			if($.inArray('#', dataSet) >= 0) {
			possible += '![]{}()%&*$#^<>~@|';
			}
		}
		if(document.getElementById('c2').checked) {
                        if($.inArray('0-9', dataSet) >= 0) {
                        possible += '0123456789';
                        }
                }
		if(document.getElementById('c3').checked) {
                        if($.inArray('A-Z', dataSet) >= 0) {
                        possible += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                        }
                }
			if($.inArray('a-z', dataSet) >= 0){
			possible += 'abcdefghijklmnopqrstuvwxyz';
		}
		var text = '';
		//for (var i=0; i < $(id).attr('data-size'); i++) {
		for ( var i=0; i < slider_value; i++) {
			text += possible.charAt(Math.floor(Math.random() * possible.length));
		}
		return text;
}		

		//Create a new password on page load
                $('textarea[rel="gp"]').each(function(){
                $(this).val(randString($(this)));
                });

		//Create slider value on load
		var slider_onload = document.getElementById('a').value;
		$('#onload_page').html(slider_onload);

		//Save checkbox state in to local client storage
		var checkboxValues = JSON.parse(localStorage.getItem('checkboxValues')) || {},
			$checkbox_save = $("#checkbox_box :checkbox");
		$checkbox_save.on("change", function() {
			$checkbox_save.each(function() {
				checkboxValues[this.id] = this.checked;
			});
			localStorage.setItem("checkboxValues", JSON.stringify(checkboxValues));
		});
		$.each(checkboxValues, function(key, value) {
			$("#" + key).prop('checked', value);
		});
		

		//Create a new password
		$('#getNewPass').click(function(){
		$('textarea[rel="gp"]').each(function(){
                $(this).val(randString($(this)));
                });
		});

		//Auto select pass on focus
		$('textarea[rel="gp"]').on("click", function () {
   		$(this).select();
		});
		
		//Auto resize output for specific lenght
		$('#getNewPass').click(function() {
		$('#auto_fit').on('change keyup keydown paste cut', 'textarea',
                function(){
                        $(this).height(0).height(this.scrollHeight);
                }).find( 'textarea' ).change();
		});
//});


</script>

<script type="text/javascript">
     $(document).ready(function() {
      setTimeout(function() {
      $("#page_loading").hide();
      $("#body_load").fadeIn(1000);
      }, 2000);
    }); 
</script>


</div>
</body>

</html>
