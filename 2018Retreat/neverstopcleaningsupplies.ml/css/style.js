
// $(window).scroll(function(){
//     $(".top").css("opacity", 1 - $(window).scrollTop() / 250);
//   });

  $(document).ready(function(){
    $(window).scroll(function(){
        $(".tob").css("opacity", 1 - $(window).scrollTop() / 1000);
    });
});