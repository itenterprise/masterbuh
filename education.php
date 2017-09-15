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
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jQuery.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script type="text/javascript" src="js/moment.js"></script>
  <script type="text/javascript" src="js/slick.min.js"></script>
  <link rel="stylesheet" href="style/style.css?v=20170912">
  <link rel="stylesheet" href="style/slick.css">
    <link rel="stylesheet" href="style/education.css">
  <title> Демонстрація | MASTER: Бухгалтерія</title>
  <meta name="description" content="Купити програму для бухобліку MASTER: Бухгалтерія. Весь облік в одній системі, простий функціонал, відповідність законодавству.">
</head>
<body>
	<?php include 'header-part.php'; ?>
    <div>
        <div class="banner-shedule-section videoWrapper">
            <iframe width="560" height="349" src="https://www.youtube.com/embed/MYSmGxnkVc0?autoplay=1" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <div class="clear"></div>
    <div class="demo-btns text-center">
        <a data-toggle="modal" data-target="#modal_demo" href="#" class="open_modal_2"><button class="main_btn main_btn_MAIN">Демо-версія</button></a>
    <button class="main_btn main_btn_MAIN" data-toggle="modal" data-target="#modal2">ЗАДАТИ ПИТАННЯ</button>  
    </div>
    

    <div class="clear"></div>

    <section class="slider-wrap">
      <div class="clear"></div>
      <div class="heading-wrap video_uroki">
        <h2 class="uppercase">ДЕМОНСТРАЦІЯ MASTER: БУХГАЛТЕРІЇ</h2>
        

      </div>
     <!--  <a href="https://www.youtube.com/channel/UC1cvlTF-n1Ak9wRev28F10A/" target="_blank" rel="nofollow" class="vse_video">Усі відео</a>
      <div class="clear"></div> -->
      <div class="clear"></div>
      <div class="videos-wrap">
        <div class="video-item">
          <a href="https://www.youtube.com/watch?v=IsWFokTJE4k" target="_blank" rel="nofollow" class="video-inner">
            <img class="video-image bux-cream-bg" src="https://img.youtube.com/vi/IsWFokTJE4k/hqdefault.jpg">
            <div class="video-title">Банк і каса. Касові операції</div>
          </a>
        </div>
        <div class="video-item">
          <a href="https://www.youtube.com/watch?v=mWeWjpDtTjg" target="_blank" rel="nofollow" class="video-inner">
          	<img class="video-image bux-cream-bg" src="https://img.youtube.com/vi/mWeWjpDtTjg/hqdefault.jpg">
            <div class="video-title">Банк і каса. Проведення платежів</div>
          </a>
        </div>
        <div class="video-item">
          <a href="https://www.youtube.com/watch?v=Hjuiya2wjzc" target="_blank" rel="nofollow" class="video-inner">
            <img class="video-image bux-cream-bg" src="https://img.youtube.com/vi/Hjuiya2wjzc/hqdefault.jpg">
            <div class="video-title">Основні засоби і нематеріальні активи</div>
          </a>
        </div>
      </div>
      <div class="clear"></div>
      <a href="https://www.youtube.com/channel/UC1cvlTF-n1Ak9wRev28F10A/" target="_blank" rel="nofollow" class="main_btn main_btn_MAIN">Усі відео</a>
    </section>
    <section class="slider-wrap">
      <div class="clear"></div>
      <div class="heading-wrap">
        <h2 class="uppercase">Вебінари</h2>
      </div>
      <div class="clear"></div>
      <?php include 'webinars-slider.php'; ?>
    </section>
   
<div class="clear"></div>
    <div class="demo-btns text-center">
        <a data-toggle="modal" data-target="#modal_demo" href="#" class="open_modal_2"><button class="main_btn main_btn_MAIN">Демо-версія</button></a>
    <button class="main_btn main_btn_MAIN" data-toggle="modal" data-target="#modal2">ЗАДАТИ ПИТАННЯ</button>  
    </div>
    <?php include 'footer.php'; ?>

    
  <script>
        $(function () {
            var $ = jQuery.noConflict(); 
                function equalHeight(group) { 
                    var tallest = 0; 
                    
                    group.each(function() { 
                        thisHeight = $(this).height(); 
                    
                        if(thisHeight > tallest) { 
                            tallest = thisHeight; 
                        } 
                    }); 
                    
                    group.height(tallest); 
                }       
           $(document).ready(function(){
                equalHeight($(".kolum")); 
                equalHeight($(".kolon-tarif"));
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

               	$('.videos-wrap').slick(options);           

            });
        });
        
    </script>
</body>
</html>