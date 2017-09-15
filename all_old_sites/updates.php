<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MJ5M88X');</script>
    <!-- End Google Tag Manager -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link href="style/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/updates.css">
	<title> Оновлення | MASTER: Бухгалтерія</title>
	<meta name="description" content="MASTER: Бухгалтерія - облік для малого і середнього бізнесу. Відповідність законодавству України, оновлення програми, технічна підтримка розробника.">
</head>
<body>
    <?php include 'header-part.php'; ?>
   
    <div class="modal fade" id="modal2">
        <div class="modal-dialog">
            <div class="modal-content modal-setting">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title">Будь ласка, заповніть форму</h4>
              </div>
              <div class="modal-body">
                <form class="demo_form" action="javascript:void(0);"  id="myform1" name="myform1"> 
                    <input type="text" placeholder="Ваше ім'я" name="name" id="name">
                    <input type="E-mail" placeholder="Контаткний Email" name="email" id="email">
                    <input type="text" placeholder="Контактний телефон" name="phone" id="phone">
                    <textarea id="comment" cols="2" rows="4" placeholder="Ваше питання" name="textarea"></textarea>
                    <a href="#" class="btn_place" style="background-color: #cc2229;" onclick="sendform_1()">Відправити</a>
                </form>
              </div>
            </div>
         </div>
    </div>
    
    <div class="modal fade" id="spasibo">
        <div class="modal-dialog">
            <div class="modal-content modal-setting">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                <h4 class="modal-title">Дякую за звернення! Наші менеджери зв'яжуться з Вами найближчим часом</h4>
              </div>
            </div>
         </div>
    </div>
   
   
    <div class="wrap country_choose_wrap" data-type="background" data-speed="10" style="margin-bottom: 0">
    <div class="country_choose"><h1>Незабаром<br>тут з'являться оновлення<br> для MASTER: Бухгалтерія</h1></div>
    <div class="logo_small">
      <img src="images/logo_small.png" alt="logo">
    </div>
    </div>
	 <?php include 'footer.php'; ?>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jQuery.js"></script>
</body>
</html>