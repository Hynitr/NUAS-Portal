$(document).ready(function() 
{

	//upload first term result
	$("#chk").click(function() 
	{

	var admn	 = $("#admn").val();
	var cls      = $("#cls").val();
    var tmms     = $("#tmms").val(); 
	var ses     = $("#ses").val(); 

   
   	$(toastr.error('Loading Please wait...'));
	window.location.href = "./res?id="+admn+"&cls="+cls+"&term="+tmms+"&ses="+ses;	

})


  //upload assignment
  $("#uplagn").click(function () {
    var fd = new FormData();
    var file = $("#fileToUpload").prop("files")[0];
    fd.append("assfile", file);

    if (file == null || file == "") {
      $(toastr.error("Assignment file can`t be empty"));
    } else {
      $("#ModalCenter").modal("show");
      $(toastr.error("Loading... Please wait"));

      $.ajax({
        type: "post",
        url: "functions/init.php",
        data: fd,
        contentType: false,
        processData: false,
        success: function (data) {
          $(toastr.error(data)).html(data);
        },
      });
    }
  });


    //edit uploaded assignment file
	$("#eduplagn").click(function () {
		var fd = new FormData();
		var files = $("#edfileToUpload").prop("files")[0];
		fd.append("fle", files);
	
		if (files == null || files == "") {
		  $(toastr.error("Assignment file can`t be empty"));
		} else {
		  $("#ModalCenter").modal("show");
		  $(toastr.error("Loading... Please wait"));
		  $.ajax({
			type: "post",
			url: "functions/init.php",
			data: fd,
			contentType: false,
			processData: false,
			success: function (data) {
			  $(toastr.error(data)).html(data);
			},
		  });
		}
	  });
})