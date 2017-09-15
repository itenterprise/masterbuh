<script>
$(function() {
$(document).ready(function(){
	var $ = jQuery.noConflict();
	var validateRules = {
		rules: {
			name: "required",
			email: {
				required: true,
				email: true
			},
			phone: "required",
			company: "required",
			comment: "required",
		},
		messages: {
			name: "Необхідно вказати ім'я",
			email: "Необхідно вказати e-mail",
			phone: "Необхідно вказати телефон",
			company: "Необхідно вказати компанію",
			comment: "Необхідно вказати запитання",
		},
		submitHandler: function(form) {
			switch(form.id) {
				case "myform1":
					sendform_1();
					break;
				case "myformcloud":
					sendform_cloud();
					break;
				case "myformdemo":
					sendform_demo();
					break;
				case "myformbox":
					sendform_box();
					break;
				case "webinarRegistration":
					sendform_webinar()
					break;
			}
		}
	};
	var forms = ["myformcloud", "myformbox", "myformdemo", "myform1", "webinarRegistration" ]
	for(var i = 0; i < forms.length; i++) {
		$("#" + forms[i]).validate(validateRules);
	}
});
});
function sendform_cloud(){
	var $ = jQuery.noConflict();
            var UTM = window.location.search + ' ' + document.referrer;
            var frm = $('#myformcloud');
            var form = {
            MODE: "ORDER",
            PHONE: frm.children("[name=phone]").val(),
            EMAIL: frm.children("[name=email]").val(),
            FIO: frm.children("[name=name]").val(),
            POST: "",
            COMPANY_NAME: frm.children("[name=company]").val(),
            TYPE: "",
            COMMENT: "хмарна версія ",
            COUNTRY:"",
            MAILTEMPLATE:"_MASTER_UNI_CONFIRM",
            SOURCE:"80",
            MAILTEAM:"sales@masterbuh.com",
            UTM: UTM,
            SERVICE:"MASTER",
            PRODUCT:"MRD"
            };
            send(form, frm);
};

    function sendform_demo(){
		var $ = jQuery.noConflict();
            var UTM = window.location.search + ' ' + document.referrer;
            var frm = $('#myformdemo');
            var form = {
            MODE: "DEMO",
            PHONE: frm.children("[name=phone]").val(),
            EMAIL: frm.children("[name=email]").val(),
            FIO: frm.children("[name=name]").val(),
            POST: "",
            COMPANY_NAME: frm.children("[name=company]").val(),
            TYPE: "",
            COMMENT: "",
            COUNTRY:"",
            MAILTEMPLATE:"_MASTER_UNI_CONFIRM",
            SOURCE:"80",
            MAILTEAM:"sales@masterbuh.com",
            UTM: UTM,
            SERVICE:"MASTER",
            PRODUCT:"MRD"
            };
            send(form, frm);
};

function sendform_webinar(){
	var $ = jQuery.noConflict();
            var UTM = window.location.search + ' ' + document.referrer;
            var frm = $('#webinarRegistration');
            var form = {
            MODE: "REG",
            PHONE: frm.children("[name=phone]").val(),
            EMAIL: frm.children("[name=email]").val(),
            FIO: frm.children("[name=lastname]").val() + " " + frm.children("[name=firstname]").val(),
            POST: "",
            COMPANY_NAME: frm.children("[name=company]").val(),
            TYPE: "",
            COMMENT: "",
            COUNTRY:"",
            MAILTEMPLATE:"_" + frm.children("[name=webinar]").val(),
            SOURCE:"80",
            MAILTEAM:"sales@masterbuh.com",
            UTM: UTM,
            SERVICE:"MASTER",
            PRODUCT:"MRD",
            EVENTNAME: frm.children("[name=webinar]").val()
            };
            send(form, frm);
};
  
function sendform_box(){
	var $ = jQuery.noConflict();
            var UTM = window.location.search + ' ' + document.referrer;
            var frm = $('#myformbox');
            var form = {
            MODE: "ORDER",
            PHONE: frm.children("[name=phone]").val(),
            EMAIL: frm.children("[name=email]").val(),
            FIO: frm.children("[name=name]").val(),
            POST: "",
            COMPANY_NAME: frm.children("[name=company]").val(),
            TYPE: "",
            COMMENT: "версія для ПК",
            COUNTRY:"",
            MAILTEMPLATE:"_MASTER_UNI_CONFIRM",
            SOURCE:"80",
            MAILTEAM:"sales@masterbuh.com",
            UTM: UTM,
            SERVICE:"MASTER",
            PRODUCT:"MRD"
            };
            send(form, frm);
};

  
function sendform_1(){
	var $ = jQuery.noConflict();
            var UTM = window.location.search + ' ' + document.referrer;
            var frm = $('#myform1');
            var form = {
            MODE: "QUEST",
            PHONE: frm.children("[name=phone]").val(),
            EMAIL: frm.children("[name=email]").val(),
            FIO: frm.children("[name=name]").val(),
            POST: "",
            COMPANY_NAME: "",
            TYPE: "",
            COMMENT: frm.children("[id=comment]").val(),
            COUNTRY:"",
            MAILTEMPLATE:"_MASTER_UNI_CONFIRM",
            SOURCE:"80",
            MAILTEAM:"sales@masterbuh.com",
            UTM: UTM,
            SERVICE:"MASTER",
            PRODUCT:"MRD"
            };
            send(form, frm);
};


        
            function send(data, form){
				showLoading(true);
				var $ = jQuery.noConflict();
				$.ajax({
					url: "https://it.it.ua/ws/webservice.asmx/ExecuteEx?pureJSON=",
					type: "POST",
					dataType: "json",
					contentType: "application/json",
					data: JSON.stringify({
						calcId: "_CLOUD.REGISTER",
						ticket: "",
						args: JSON.stringify({form: data})
					}),
					success: function(d){
						$('.close').click(); 
						$('#sendFormOneBtn').attr('disabled', false);
						$('#sendFormOneBtn').text('Відправити');
						$('#spasibo').modal('toggle');
						form.find(".error").remove();
						form[0].reset();
					},
					complete: function() {
						showLoading(false);
					},
				});
			};   

			function showLoading(visible) {
				var $ = jQuery.noConflict();
				if (visible){
					$("#loader").show();
					$("#loader-placeholder").show();
				} else {
					$("#loader").hide();
					$("#loader-placeholder").hide();
				}
			}
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJ5M88X"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/uk_UA/sdk.js#xfbml=1&version=v2.10&appId=180730259074867";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    
    <div class="modal fade" id="modal_cloud">
        <div class="modal-dialog">
            <div class="modal-content modal-setting">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title">Будь ласка, заповніть форму</h4>
              </div>
              <div class="modal-body">
                <form class="demo_form" action="javascript:void(0);"  id="myformcloud" name="myformcloud" > 
                    <input type="text" placeholder="Ваше ім'я" name="name" id="name" >
                    <input type="E-mail" placeholder="Контаткний Email" name="email" id="email" >
                    <input type="text" placeholder="Контактний телефон" name="phone" id="phone" >
                    <input type="text" placeholder="Компанія" name="company" id="company" >
                    <button id="sendFormOneBtn" class="btn_place" style="background-color: #cc2229;">Відправити</button>
                </form>
              </div>
            </div>
         </div>
    </div>
    
    <div class="modal fade" id="modal_box">
        <div class="modal-dialog">
            <div class="modal-content modal-setting">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title">Будь ласка, заповніть форму</h4>
              </div>
              <div class="modal-body">
                <form class="demo_form" action="javascript:void(0);"  id="myformbox" name="myform1"> 
                    <input type="text" placeholder="Ваше ім'я" name="name" id="name" >
                    <input type="E-mail" placeholder="Контаткний Email" name="email" id="email" >
                    <input type="text" placeholder="Контактний телефон" name="phone" id="phone" >
                    <input type="text" placeholder="Компанія" name="company" id="company" >
                    <button id="sendFormOneBtn" class="btn_place" style="background-color: #cc2229;">Відправити</button>
                </form>
              </div>
            </div>
         </div>
    </div>
    
    
    <div class="modal fade" id="modal_demo">
        <div class="modal-dialog">
            <div class="modal-content modal-setting">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title">Будь ласка, заповніть форму</h4>
              </div>
              <div class="modal-body">
                <form class="demo_form" action="javascript:void(0);"  id="myformdemo" name="myform1"> 
                    <input type="text" placeholder="Ваше ім'я" name="name" id="name" required>
                    <input type="E-mail" placeholder="Контаткний Email" name="email" id="email" required>
                    <input type="text" placeholder="Контактний телефон" name="phone" id="phone" required>
                    <input type="text" placeholder="Компанія" name="company" id="company" required>
                    <button id="sendFormOneBtn" class="btn_place" style="background-color: #cc2229;">Відправити</button>
                </form>
              </div>
            </div>
         </div>
    </div>
    
    <div class="modal fade" id="modal2">
        <div class="modal-dialog">
            <div class="modal-content modal-setting">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title">Будь ласка, заповніть форму</h4>
              </div>
              <div class="modal-body">
                <form class="demo_form" action="javascript:void(0);"  id="myform1" name="myform1"> 
                    <input type="text" placeholder="Ваше ім'я" name="name" id="name" >
                    <input type="E-mail" placeholder="Контаткний Email" name="email" id="email" >
                    <input type="text" placeholder="Контактний телефон" name="phone" id="phone" >
                    <textarea id="comment" required aria-required cols="2" rows="4" placeholder="Ваше питання" name="comment" ></textarea>
                    <button id="sendFormOneBtn" class="btn_place" style="background-color: #cc2229;" >Відправити</button>
                </form>
              </div>
            </div>
         </div>
    </div>
	
	<div id="loader-placeholder"></div>
	<div id="loader"></div>	
    
    <div class="modal fade" id="spasibo">
        <div class="modal-dialog">
            <div class="modal-content modal-setting">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title">Дякуємо за звернення! Наші менеджери зв'яжуться з Вами найближчим часом</h4>
              </div>
            </div>
         </div>
    </div>

  <header>
  <a href="/">
    <span class="logo"></span>
  </a>
    <nav>
      <?php include 'menu.php'; ?>
    </nav>
    <div class="contact_wrap">
      <a href="tel:+380443334447"><div class="contact"></div></a>
      <a data-toggle="modal" data-target="#modal2" href="#" class="open_modal_2"><div class="mail">info@masterbuh.com</div></a>
    </div>
  </header>