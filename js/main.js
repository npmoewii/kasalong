$('#navbutton').click(function() {
  $('.nav').toggle("fast");
});
$('.page-scroll').click(function() {
  id = $(this).find('a').attr("href");
  $('html, body').animate(
    {
      scrollTop: ($(id).offset().top)
    },'slow'
  );
});
