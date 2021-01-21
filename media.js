// Runs when a square is clicked on, loads video above
$("ul.gallery a").click(function(e){
  e.preventDefault();
  $('ul.gallery a').removeClass('active');
  $(this).addClass('active');  
  
  var getVideo = $(this).attr('href');
  var addPlayer = 
      '<iframe src="' 
      + getVideo +
      '" frameborder="0" allowfullscreen></iframe>';
  
  console.log(addPlayer);

  $('.theater').addClass('active').empty().append(addPlayer);
  $('.close-theater').addClass('active');
  
  $('html, body').animate({
        scrollTop: $("#gallery-theater").offset().top
    }, 1500).focus();
})

// Closing the theater
$('.close-theater a').click(function(e){
  e.preventDefault();
  $('.theater').empty().removeClass('active');
  $('.close-theater').removeClass('active');
  $('gallery-theater').focus();
})