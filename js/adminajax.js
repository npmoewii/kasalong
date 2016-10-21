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
