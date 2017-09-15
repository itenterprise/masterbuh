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
	<script type="text/javascript" src="js/moment.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" href="style/slick.css">
    <link rel="stylesheet" href="style/webinar.css">
	<title> Вебінар | MASTER: Бухгалтерія</title>
</head>
<body>
  <?php include 'header-part.php'; ?>
    <div>
        <div>
        <div class="banner-shedule-section">
            <div class="banner-wrap">
            	<div class="banner-meta">
            		<h2>Безкоштовний вебінар<br />
					«MASTER: Бухгалтерія: огляд можливостей»</h2>
					<div class="banner-date">
						<img src="images/calendar-icon.png" alt="">21 вересня
					</div>	
					<div class="banner-time uppercase">
						<img src="images/clock-icon.png" alt="">00:00
					</div>
            	</div>
            	
            </div>
            <div class="shedule-wrap">
              <img id="logo" src="images/logo_small.png" alt="">
              <!-- <div class="shedule-inner">
                calendar
              </div> -->
            </div>
        </div>
    </div>
    </div>
	<div class="container-fluid">
	<section class="webinar-desc row">
		<div class="col-xs-12 col-sm-6 col-md-4">
			<img class="webinar-img" src="images/webinar-host.PNG" alt="">
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4 webinar-short-desc">
			<p>Безкоштовний вебінар<br />
			<b>&laquo;MASTER: Бухгалтерія: огляд можливостей&raquo;</b></p>
			<p>21 вересня (четвер) о&hellip;. ви&nbsp;дізнаєтеся про основи роботи, функціональні можливості та&nbsp;переваги системи<br />
			бухгалтерського обліку MASTER: Бухгалтерія. Вебінар<br />
			проводитиме Марія Галелюка, керівниця проекту &laquo;MASTER: Бухгалтерія&raquo;</p>
		</div>
	</section>	
	</div>
	
	<div class="clear"></div>
	<section class="webinar-data col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
		<div class="webinar-data-item">
			<h2 class="text-center">Радимо брати участь:</h2>
			<p>&mdash;&nbsp;керівникам малих та&nbsp;середніх підприємств;<br />
			&mdash;&nbsp;фінансовим директорам;<br />
			&mdash;&nbsp;бухгалтерам та&nbsp;співробітникам відділу фінансів;</p>
		</div>
		<div class="webinar-data-item">
			<h2 class="text-center">#Що_дізнаєтеся?</h2>
			<ul>
				<li>
					Як влаштована перша українська система бухгалтерського обліку?
				</li>
				<li>
					Які переваги MASTER: Бухгалтерії перед аналогами?
				</li>
				<li>
					Як почати роботу з Master Бухгалтерією?
				</li>
				<li>
					Які функції доступні користувачам системи?
				</li>
			</ul>
		</div>
		<div class="webinar-data-item">
			<h2 class="text-center">
				Ще&nbsp;більше питань та&nbsp;експертних відповідей&nbsp;&mdash; на&nbsp;нашому вебінарі 21 вересня.
			</h2>
			<p>Участь у&nbsp;вебінарі безкоштовна. Реєстрація&nbsp;&mdash; обов’язкова. Всі учасники отримають матеріали вебінару на&nbsp;пошту.<br /> #MasterБух #вебінар #навчання</p>
		</div>
		<div class="webinar-data-item">
			<h2 class="text-center">Рeєструйтесь на вебінар!</h2>
			<form id="webinarRegistration" class="webinar-form" action="javascript:void(0);" >
				<input type="text" name="firstname" placeholder="Ім'я*" required>
				<input type="text" name="lastname" placeholder="Прізвище*" required>
				<input type="tel" name="phone" placeholder="Телефон*" required>
				<input type="email" name="email" placeholder="Email*" required>
				<input type="text" name="company" placeholder="Назва компанії">
				<button type="submit" class="main_btn main_btn_MAIN" onclick="sendform_webinar()">ЗАРЕЄСТРУВАТИСЬ</button>
			</form>
		</div>
	</section>

    <section class="slider-wrap">
    	<div class="clear"></div>
   		<div class="heading-wrap">
   			<h2 class="text-center uppercase">Інші вебінари</h2>
   		</div>
   		<div class="clear"></div>
   		      <div class="webinars-wrap">
        <div class="webinar">
          <div class="webinar-inner">
            <div class="webinar-meta">
              <span class="webinar-meta-month uppercase bux-red thin">
                Вересень
              </span>
              <div class="clear"></div>
              <div class="bux-red-bg webinar-date-wrap">
                <span class="day-circle bux-red">21</span>
                <span class="day-title uppercase">ЧТ</span>
              </div>
              <a class="webinar-title" href="/single-webinar">"MASTER Бухгалетрія: огляд можливостей"</a>
              
            </div>  
            <div class="webinar-description">
              Ви дізнаєтеся про основи роботи, функціональні можливості та переваги програми для бухгалтерського обліку MASTER: Бухгалтерія
            </div>          
          </div>
        </div>
        <div class="webinar">
          <div class="webinar-inner">
            <div class="webinar-meta">
              <span class="webinar-meta-month uppercase bux-red thin">
                Жовтень
              </span>
              <div class="clear"></div>
              <div class="bux-red-bg webinar-date-wrap">
                <span class="day-circle bux-red">5</span>
                <span class="day-title uppercase">ЧТ</span>
              </div>
              <a class="webinar-title" href="/single-webinar">"Ведення обліку ПДВ у MASTER: Бухгалтерія"</a>
              
            </div>  
            <div class="webinar-description">
              Ви дізнаєтеся про особливості та функціональні можливості ведення обліку ПДВ у MASTER: Бухгалтерія
            </div>          
          </div>
        </div>
        <div class="webinar">
          <div class="webinar-inner">
            <div class="webinar-meta">
              <span class="webinar-meta-month uppercase bux-red thin">
                Жовтень
              </span>
              <div class="clear"></div>
              <div class="bux-red-bg webinar-date-wrap">
                <span class="day-circle bux-red">19</span>
                <span class="day-title uppercase">ЧТ</span>
              </div>
              <a class="webinar-title" href="/single-webinar">"Облік основних засобів і нематеріальних активів у MASTER: Бухгалтерія"</a>
              
            </div>  
            <div class="webinar-description">
              Ви дізнаєтеся про особливості роботи з обліком основних засобів і нематеріальних активів у MASTER: Бухгалтерія
            </div>          
          </div>
        </div>
        <div class="webinar">
          <div class="webinar-inner">
            <div class="webinar-meta">
              <span class="webinar-meta-month uppercase bux-red thin">
                Листопад
              </span>
              <div class="clear"></div>
              <div class="bux-red-bg webinar-date-wrap">
                <span class="day-circle bux-red">2</span>
                <span class="day-title uppercase">ЧТ</span>
              </div>
              <a class="webinar-title" href="/single-webinar">"Заробітна плата і управління персоналом у MASTER: Бухгалтерія"</a>
              
            </div>  
            <div class="webinar-description">
              Ви дізнаєтеся про особливості обліку заробітної плати та можливості бухглатерського управління персоналом у MASTER: Бухгалтерія
            </div>          
          </div>
        </div>
        <div class="webinar">
          <div class="webinar-inner">
            <div class="webinar-meta">
              <span class="webinar-meta-month uppercase bux-red thin">
                Листопад
              </span>
              <div class="clear"></div>
              <div class="bux-red-bg webinar-date-wrap">
                <span class="day-circle bux-red">6</span>
                <span class="day-title uppercase">ПН</span>
              </div>
              <a class="webinar-title" href="/single-webinar">"Облік грошових коштів у MASTER: Бухгалтерія"</a>
              
            </div>  
            <div class="webinar-description">
              Ви дізнаєтеся про особливості обліку грошових коштів підприємства у MASTER: Бухгалтерія
            </div>          
          </div>
        </div>
      </div>
    </section>
	 

    <?php include 'footer.php'; ?>

    <script src="js/bootstrap.min.js"></script>
	<script src="js/jQuery.js"></script>
	<script>
        $(function () {
            var k = jQuery.noConflict(); 
                function equalHeight(group) { 
                    var tallest = 0; 
                    
                    group.each(function() { 
                        thisHeight = k(this).height(); 
                    
                        if(thisHeight > tallest) { 
                            tallest = thisHeight; 
                        } 
                    }); 
                    
                    group.height(tallest); 
                }       
            k(document).ready(function(){
                equalHeight(k(".kolum")); 
                equalHeight(k(".kolon-tarif"));
                var options = {
                  slidesToShow: 4,
                  prevArrow: '<span class="bux-prev"></span>',
                  nextArrow: '<span class="bux-next"></span>',
                  responsive: [
                    {
                  breakpoint: 1165,
                  settings: {
                      slidesToShow: 3
                  }
              },
              {
                  breakpoint: 875,
                  settings: {
                      slidesToShow: 2
                  }
              },
              {
                  breakpoint: 600,
                  settings: {
                      slidesToShow: 1,
                      arrows: false,
                      autoplay: true,
                      speed: 1500
                  }
              }
                  ]
                };

                function equalizeWebinarHeight() {
                  $('.webinar-meta').each(function(){
                    $(this).height('inherit');
                  });
                  $('.webinar-description').each(function(){
                    $(this).height('inherit');
                  });
                  var maxWebinarMetaHeight = 0;
                  var maxWebinarDescHeight = 0;
                  $('.webinar-meta').each(function(){
                    maxWebinarMetaHeight = $(this).height() > maxWebinarMetaHeight ? $(this).height() : maxWebinarMetaHeight;
                  });
                  $('.webinar-meta').each(function(){
                    $(this).height(maxWebinarMetaHeight + 'px');
                  });
                  $('.webinar-description').each(function(){
                    maxWebinarDescHeight = $(this).height() > maxWebinarDescHeight ? $(this).height() : maxWebinarDescHeight;
                  });
                  $('.webinar-description').each(function(){
                    $(this).height(maxWebinarDescHeight + 'px');
                  });
                }

                k(window).on('resize', function() {
                  $('.webinars-wrap').slick('unslick');
            $('.webinars-wrap').slick(options);
        });

                $('.webinars-wrap').on('init', equalizeWebinarHeight);  
                $('.webinars-wrap').slick(options);         

            });
        });
        
    </script>
</body>
</html>