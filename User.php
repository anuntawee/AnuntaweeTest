<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<?php
 include("connect.php");
  $body = file_get_contents('/employees/5e2e9dd0880bdf2d751b51c8');

  echo $body;
  $data = json_decode($ch);

  
             
          
?>
<body>
    <div class='container-fluid'>
<button type="button" class="btn btn-primary"><a href="addemployee.php"> Add Employee</button></a>
<p></p>
<table class="table">
    <thead>
        <th></th>
        <th>Fistname</th>
        <th >Lastname</th>
        <th >Birtyday</th>
        <th >Email</th>
        <th >Operation</th>
    </thead>
    <tbody>
        <td></td>
        <td><?php echo $data['fistname']; ?> </td>
        <td></td>
        <td></td>
        <td></td>
        
										<td><button class="btn btn-info">Update</button><button class="btn btn-danger" onclick="return delete_student();">Delete</button> </td>
    </tbody>
</table>

</div>
</body>
<script>
function delete_student(){
	if(confirm("คุณต้องการลบข้อมูลหรือไม่")){
		$.ajax({
			type:"POST",
			url:"", 
			data:{},
			success:function(data){
				alert(data);
				location.reload();
			}
		});
	}
	return false;
}
</script>
</html>