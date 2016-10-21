$('.change').click(function() {
  thisid = $(this).attr("data-id");
  to = $(this).attr("data-to");
  $.post("../php/achangestatus.php",
         {
           "id": thisid,
           "to": to,
           "request": "achangestatus"
         },
         function() {
           setTimeout(updateone, 10);
         });
});
function updateone() {
  id = $("#st").attr("data-id");
  $("#st").load("../php/aloadstatus.php?id="+id,
                function (result) {
                  if (result == 1) {
                    $("#statusnow").removeClass("tgreen");
                    $("#statusnow").removeClass("tblue");
                    $("#statusnow").addClass("tred");
                    $("#statusnow").text("ไม่ผ่าน");
                  }
                  else if (result == 2) {
                    $("#statusnow").removeClass("tred");
                    $("#statusnow").removeClass("tblue");
                    $("#statusnow").addClass("tgreen");
                    $("#statusnow").text("ผ่าน");
                  }
                });
}
