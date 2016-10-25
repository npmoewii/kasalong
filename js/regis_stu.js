$('#personalhead').click(function() {
  $('#personalinfo').toggle("fast");
});
$('#parenthead').click(function() {
  $('#parentinfo').toggle("fast");
});
$('#otherhead').click(function() {
  $('#otherinfo').toggle("fast");
});
$('#nationid').change(function() {
  var nationid = $('#nationid').val();
  if (nationid.length != 13) {
    $('#nationid').addClass("error");
  }
  else {
    var sum = 0;
    for (i=0; i<=11; i++) {
      sum += nationid[i] * (13-i);
    }
    x = (sum%11);
    if (x > 1) {
      last = 11-x;
    }
    else {
      last = 1-x;
    }
    if (nationid[12] == last) {
      $('#nationid').removeClass("error");
    }
    else {
      $('#nationid').addClass("error");
    }
  }
});
$('#stel').change(function() {
  var stel = $('#stel').val();
  if (stel.length != 10) {
    $('#stel').addClass("error");
  }
  else if (stel[0] != 0) {
    $('#stel').addClass("error");
  }
  else {
    $('#stel').removeClass("error");
  }
});
$('#ptel').change(function() {
  var stel = $('#ptel').val();
  if (stel.length != 10) {
    $('#ptel').addClass("error");
  }
  else if (stel[0] != 0) {
    $('#ptel').addClass("error");
  }
  else {
    $('#ptel').removeClass("error");
  }
});
