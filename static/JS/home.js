$("document").ready(function(){
    var contentArea = $("#content-area");
    contentArea.load('../routes/inbox.html');
    
    $("#inbox").click(function (e) {
        e.stopImmediatePropagation();
        contentArea.load('../routes/inbox.html');
  });
  
  $("#add-user").click(function (e) {
        e.stopImmediatePropagation();
        contentArea.load('../routes/add.html');
  });
  
  $("#compose").click(function (e) {
        e.stopImmediatePropagation();
        contentArea.load('../routes/compose.html');
  });
      
});