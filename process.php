<!-- Don't touch-->
<?php
include("dbConnect.php");
$name = $_REQUEST['name'];
$ingredients = $_REQUEST['ingredients'];
$htm = $_REQUEST['htm'];
$ttm = $_REQUEST['ttm'];
$uploadedBy = $_REQUEST['uploadedBy'];
$ip = $_SERVER['REMOTE_ADDR'];

$query = mysqli_query($db_connect, "INSERT INTO sbi (Name, Ingradients, HowToMake, TimeToMake, UploadedBy, IP) VALUES ('$name','$ingredients','$htm', '$ttm', '$uploadedBy','$ip')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
//header("location:recipe.php?note=success");
?>

<script>
	window.location.href = "recipe.html?note=success";
</script>