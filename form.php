<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		img{
			width:200px;
			margin:10px;
			display:inline-block;
		}
		.formData{
			width:600px;
			margin:5px auto;
			border:1px solid gray;
			display: block;
			clear:both;
			padding:10px;


		}
	</style>
</head>
<body>

</body>
</html>

<?php 
	$ad=$_POST["ad"];
	$soyad=$_POST["soyad"];
	$mesaj=$_POST["mesaj"];
	$file=$_FILES["file"];

	$file_name=$file["name"];
	$file_type=$file["type"];
	$file_size=$file["size"];
	$file_tmp=$file["tmp_name"];

	$newName="images/sekil".rand().".".substr($file_name, -3);



	
	if (move_uploaded_file($file_tmp, $newName)) {

	$myfile=fopen("defter.txt", "a+");

	fwrite($myfile, "<div class='formData'>
		<img src=$newName><hr>Ad : $ad\r\n<br>Soyad :$soyad\r\n<br>Mesajınız :$mesaj\r\n <br></div>");

	echo file_get_contents("defter.txt");
		
	}else{
		echo "Error";
	}
	


?>