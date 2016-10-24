$('#ch_manual').click(function() {
  $('#manual').show("fast");
  $('#auto').hide("fast");
});
$('#ch_auto').click(function() {
  $('#manual').hide("fast");
  $('#auto').show("fast");
});
$('#before').click(function() {
  $('#beforedate').removeAttr("disabled");
  $('#afterdate').attr("disabled", "disabled");
  $('#betweendate1').attr("disabled", "disabled");
  $('#betweendate2').attr("disabled", "disabled");
});
$('#after').click(function() {
  $('#beforedate').attr("disabled", "disabled");
  $('#afterdate').removeAttr("disabled");
  $('#betweendate1').attr("disabled", "disabled");
  $('#betweendate2').attr("disabled", "disabled");
});
$('#between').click(function() {
  $('#beforedate').attr("disabled", "disabled");
  $('#afterdate').attr("disabled", "disabled");
  $('#betweendate1').removeAttr("disabled");
  $('#betweendate2').removeAttr("disabled");
});
