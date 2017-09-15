$(document).ready(function() {
    var overlay = $('#overlay'); 
    var open_modal = $('.open_modal'); 
    var close = $('.modal_close, #overlay'); 
    var modal = $('.modal_div'); 
     open_modal.click( function(event){
         event.preventDefault(); 
         var div = $(this).attr('href');
         console.log(div);
         overlay.fadeIn(400, 
             function(){ 
                 $(div)
                     .css('display', 'block') 
                     .animate({opacity: 1, top: '50%'}, 200); 
         });
     });

     close.click( function(){ 
            modal
             .animate({opacity: 0, top: '45%'}, 200, 
                 function(){ 
                     $(this).css('display', 'none');
                     overlay.fadeOut(400);
                 }
             );
     });
});

$(document).ready(function() {
    var overlay = $('#overlay'); 
    var open_modal = $('.open_modal_1'); 
    var close = $('.modal_close, #overlay'); 
    var modal = $('.modal_div'); 
     open_modal.click( function(event){
         event.preventDefault(); 
         var div = $(this).attr('href');
         console.log(div);
         overlay.fadeIn(400, 
             function(){ 
                 $(div)
                     .css('display', 'block') 
                     .animate({opacity: 1, top: '50%'}, 200); 
         });
     });

     close.click( function(){ 
            modal
             .animate({opacity: 0, top: '45%'}, 200, 
                 function(){ 
                     $(this).css('display', 'none');
                     overlay.fadeOut(400);
                 }
             );
     });
});

$(document).ready(function() {
    var overlay = $('#overlay'); 
    var open_modal = $('.open_modal_2'); 
    var close = $('.modal_close, #overlay'); 
    var modal = $('.modal_div'); 
     open_modal.click( function(event){
         event.preventDefault(); 
         var div = $(this).attr('href');
         console.log(div);
         overlay.fadeIn(400, 
             function(){ 
                 $(div)
                     .css('display', 'block') 
                     .animate({opacity: 1, top: '50%'}, 200); 
         });
     });

     close.click( function(){ 
            modal
             .animate({opacity: 0, top: '45%'}, 200, 
                 function(){ 
                     $(this).css('display', 'none');
                     overlay.fadeOut(400);
                 }
             );
     });
});

$( "#show" ).click(function() {
  $( "div#item" ).toggleClass( "main_show");
});

    $( "#show_1" ).click(function() {
  $( "div#item_1" ).toggleClass( "main_show");
});
 $( "#show_2" ).click(function() {
  $( "div#item_2" ).toggleClass( "main_show");
});
  $( "#show_3" ).click(function() {
  $( "div#item_3" ).toggleClass( "main_show");
});
   $( "#show_4" ).click(function() {
  $( "div#item_4" ).toggleClass( "main_show");
});
    $( "#show_5" ).click(function() {
  $( "div#item_5" ).toggleClass( "main_show");
});
     $( "#show_6" ).click(function() {
  $( "div#item_6" ).toggleClass( "main_show");
});
      $( "#show_7" ).click(function() {
  $( "div#item_7" ).toggleClass( "main_show");
});
       $( "#show_8" ).click(function() {
  $( "div#item_8" ).toggleClass( "main_show");
});
        $( "#show_9" ).click(function() {
  $( "div#item_9" ).toggleClass( "main_show");
});
         $( "#show_10" ).click(function() {
  $( "div#item_10" ).toggleClass( "main_show");
});
    $( "button#MAIN" ).click(function() {
 $("div.features_block").attr("style", "display: flex;")
 $("button#MAIN").attr("style", "display: none;")
});