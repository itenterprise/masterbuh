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
              <a class="webinar-title" href="/master-buhgalterija-ogljad-mozhlivostej">"MASTER: Бухгалтерія - огляд можливостей"</a>
              
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
              <a class="webinar-title" href="/vedennja-obliku-pdv-u-master-buhgalterija">"Ведення обліку ПДВ у MASTER: Бухгалтерія"</a>
              
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
              <a class="webinar-title" href="/oblik-osnovnih-zasobiv-i-nematerialnih-aktyviv-u-master-buhgalterija">"Облік основних засобів і нематеріальних активів у MASTER: Бухгалтерія"</a>
              
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
              <a class="webinar-title" href="/zarobitna-plata-i-upravlinnja-personalom-u-master-buhgalterija">"Заробітна плата і управління персоналом у MASTER: Бухгалтерія"</a>
              
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
              <a class="webinar-title" href="/oblik-groshovih-koshtiv-u-master-buhgalterija">"Облік грошових коштів у MASTER: Бухгалтерія"</a>
              
            </div>  
            <div class="webinar-description">
              Ви дізнаєтеся про особливості обліку грошових коштів підприємства у MASTER: Бухгалтерія
            </div>          
          </div>
        </div>
      </div>

      <script>
      $(function () {
        var $ = jQuery.noConflict(); 
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

                $(window).on('load', function(){
                  $('.webinars-wrap').on('init', equalizeWebinarHeight);  
                  $('.webinars-wrap').slick(options);
                });

                $(window).on('resize', function() {
                  $('.webinars-wrap').slick('unslick');
                  $('.webinars-wrap').slick(options);
                  $('.webinars-wrap').on('init', equalizeWebinarHeight);  
                  $('.webinars-wrap').slick(options);         
                });
      });
      </script>