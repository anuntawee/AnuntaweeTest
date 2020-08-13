<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<?php
  include ("connect.php");
 
  $get = file_get_contents('/employees/5e2e9dd0880bdf2d751b51c8');

  print_r($get);

  
?>
<body>
<div class='container-fluid'>
        <form action="">
<p>Firstname <input type="text"    name="text_txt"     class="form-control" placeholder="กรอก Firstname"></p> 
<p>Lastname <input type="text"      name="text_txt"     class="form-control" placeholder="กรอก Lastname"></p>
<p>Birthday <input type="date"     name="text_txt"     class="form-control"></p>
<p>Email <input type="tex"      name="text_txt"         class="form-control" placeholder="กรอก Email"></p>
<button type="submit"  class="btn btn-primary" onblur="check();"> บันทึก</button>
<button type="submit" class="btn btn-danger"></a>ยกเลิก</button>
</form>
</div>

</body>
<script>
	function check()
	{
		var elem = document.getElementById('text_txt').value;
		if(!elem.match(/^([a-z0-9])+$/i))
		{
			alert("กรอกได้เฉพาะตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น");
			document.getElementById('text_txt').value = "";
		}
	}
</script>
</html>