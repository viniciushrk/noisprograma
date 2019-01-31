<html> 
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>     
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
</head>
	<body>
		<div class="container">
			<br/>
			<h3 align="center">Upload de arquivo</h3>
			<br/>
			

			<form action="upload.php" class="dropzone" id="dropzoneFrom" style=" border: 2px dashed rgb(54, 183, 0);">
			</form>

			<br/>
			<br/>
			<div align="center">
				<button type="button" class="btn btn-info" id="submit-all"> Upload</button>
			</div>
				
			<br/>
			<br/>
		</div>
	</body>
</html>

<script>
$(document).ready(function(){
	Dropzone.options.dropzoneFrom = {
		autoProcessQueue: false,
		acceptedFiles:".xls, .png, .jpg, .jpeg, .docx, .odt",
		maxFiles:8,
		addRemoveLinks:true,
		init: function(){
			var submitButton = document.querySelector('#submit-all');
			myDropzone = this;
			submitButton.addEventListener("click",function(){
				myDropzone.processQueue();
			});
			/*this.on("complete",function() {
				if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
				{
					var _this = this;
					_this.removeAllFiles();
				}
			});*/
		},
	};
});
</script>