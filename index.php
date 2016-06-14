<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		.main{
			width:600px;
			margin:0 auto;
		}
	</style>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
          
</head>
<body>
<div class="main">
<div class="row">
    <form class="col s12" action="form.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="input-field col s6">
          <input  id="first_name" type="text" class="validate" placeholder="Ad" name="ad">

        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" placeholder="Soyad" name="soyad">
        </div>
      </div>
      <div class="row">
     
      <div class="row">
        <div class="file-field input-field">
      <div class="btn">
        <input type="file" value="Yukle" name="file"><span>Yukle</span>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" placeholder="Mesaj" name="mesaj"></textarea>
        </div>
      </div>
      <div class="row">
      	<input class="btn waves-effect waves-light" type="submit" name="action" value="Gonder">
        
      </div>
    </form>
  </div>
  </div>
</body>
</html>