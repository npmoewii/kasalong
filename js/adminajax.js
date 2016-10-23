function updateall() {
  $(".eachrow").each(function() {
    var item = $(this)
    var thisid = item.attr("data-id");
    $("#st").load("../php/aloadstatus.php?id="+thisid,
                   function(result) {
                     var subitem = item.find(".tst");
                     if (result == 0) {
                       subitem.removeClass("tgreen");
                       subitem.removeClass("tred");
                       subitem.addClass("tblue");
                       subitem.text("ยังไม่ตรวจสอบ");
                     }
                     else if (result == 1) {
                       subitem.removeClass("tgreen");
                       subitem.addClass("tred");
                       subitem.removeClass("tblue");
                       subitem.text("ไม่ผ่าน");
                     }
                     else if (result == 2) {
                       subitem.addClass("tgreen");
                       subitem.removeClass("tred");
                       subitem.removeClass("tblue");
                       subitem.text("ผ่าน");
                     }
                   });
  });
  setTimeout(updateall, 1000);
}
function updateall2() {
  $(".eachrow").each(function() {
    var item = $(this)
    var thisid = item.attr("data-id");
    $("#st").load("../php/aloadslipstatus.php?id="+thisid,
                   function(result) {
                     var tst = item.find(".tst");
                     var tch = item.find(".tch");
                     if (result == 0) {
                       tst.removeClass("tgreen");
                       tst.addClass("tred");
                       tst.text("ยังไม่ส่ง");
                       tch.removeClass("tgreen");
                       tch.removeClass("tred");
                       tch.removeClass("tblue");
                       tch.text(" ");
                       $('.btncheck').hide("fast");
                     }
                     else if (result > 0) {
                       tst.removeClass("tred");
                       tst.addClass("tgreen");
                       $('.btncheck').show("fast");
                       if (result == 1) {
                         tch.removeClass("tgreen");
                         tch.removeClass("tred");
                         tch.addClass("tblue");
                         tch.text("ยังไม่ตรวจสอบ");
                       }
                       else if (result == 2) {
                         tch.removeClass("tgreen");
                         tch.addClass("tred");
                         tch.removeClass("tblue");
                         tch.text("ไม่ผ่าน");
                       }
                       else if (result == 3) {
                         tch.addClass("tgreen");
                         tch.removeClass("tred");
                         tch.removeClass("tblue");
                         tch.text("ผ่าน");
                       }
                     }
                   });
  });
  setTimeout(updateall2, 1000);
}
