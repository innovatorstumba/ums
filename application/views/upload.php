<!DOCTYPE html>
<html>
<head>
	<title>File Upload System Script - CodeIgniter</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	 
     <!-- Optional theme -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
          
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <!-- Latest compiled and minified JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body>

<div class="container">
	<div class="row">
<?php echo form_open_multipart(site_url('upload/do_upload'));?>
        <h2 class="form-signin-heading">Upload File</h2>
	  <div class="form-group">
	    <label for="InputFile">File input</label>
	    <input type="file" name="ufile" id="InputFile">
	    <p class="help-block">Upload JPEG Files that are below 100 KiloBytes</p>
	  </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Upload</button>
      </form>
	</div>
</div>
</body>
</html>