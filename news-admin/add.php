<!DOCTYPE html>
<html>
	<head>
		<title>SPR Langgak News</title>

		<!--CSS overriding-->
		<style type="text/css">
			ul.main{
			    list-style-type: none;
				position: fixed;
				top: 0;
				left: 0;
			    margin: 0;
			    padding: 0;
				overflow: auto;
			}
			li{
				margin: 10px;
			}
		</style>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<!--TinyMCE Content Editor-->
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	  	<script>
	  		tinymce.init({
			    selector: 'textarea',
			    height: 500,
			    theme: 'modern',
			    plugins: [
			      'advlist autolink lists link image charmap print preview hr anchor pagebreak',
			      'searchreplace wordcount visualblocks visualchars code fullscreen',
			      'insertdatetime media nonbreaking save table contextmenu directionality',
			      'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
			    ],
			    toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
			    toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
			    image_advtab: true,
			    paste_enable_default_filters: false,
			    paste_data_images: true
		  	});
	  	</script>
	  	<br>
	  	<ul class="main">
			<li><a href="main_menu.php" data-toggle="tooltip" data-placement="right" title="Add News"><img src="../assets/images/icons/back.png" height="64" width="64"></a></li>
			<li><a href="index.php" data-toggle="tooltip" data-placement="right" title="Logout"><img src="../assets/images/icons/logout.png" height="64" width="64"></a></li>
		</ul>
		<div class="container">
			<div class="jumbotron">
				<h1>SPRL News</h1>
			</div>
			<h3>Add a News</h3>
			<hr>
			<form action="create.php" method="post">
				<div class="form-group">
					<label for="title">Title:</label>
				  	<input type="text" class="form-control" id="title" name="title">
				</div>
				<div class="form-group">
					<label for="content">Content:</label>
				  	<textarea class="form-control" rows="5" id="content" name="content"></textarea>
				</div>
				<input type="submit" class="btn btn-primary" value="Confirm" id="submit"></input>
			</form>
		</div>
	</body>
</html>