$('#navbutton').click(function() {
  $('.nav').toggle("fast");
});
function scroll(id,off=50) {
  $('body').animate(
    {
      scrollTop: ($('#'+id).offset().top-off)
    },'slow'
  );
}
