
<!-- Detail Model -->
<!DOCTYPE html>

<html>
<head>

 <title>Health Card</title>
<script src="jquery.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css" />
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" href="jquery.dataTables.min.css"></style>
<script type="text/javascript" src="jquery.dataTables.min.js"></script>
<script type="text/javascript" src="bootstrap-filestyle.min.js"> </script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
		<script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
		<script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
		<script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script> 
		 

<link href="fonts.css" rel="stylesheet">
<div class="modal fade" id="detail<?php echo $row['id']; ?>" tabindex="-1" 
role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" 
aria-hidden="true">&times;</button>
<h3> Profile Details </h3>
</div>
<div class="modal-body">
<?php
$edit=mysqli->query("select * from health_details where id=".$row['id']);
$erow=$edit=fetch_assoc();
?>
<div class="container-fluid">
<form method="POST" action="update.php?id=<?php echo $erow['id']; ?>" 
enctype="multipart/form-data">
 
<div class="row">
<div class="col-lg-12" align="center">
<?php $img = "http://localhost/php_crud/profile_images/".$row['id']. ".jpg";?>
<img src='<?php echo $img ?>' height="150px" width="170px" />
 
</div>
 
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Name:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['sym']; ?>
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Gender:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['sugg']; ?>
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label style="position:relative; top:7px;">Address:</label>
</div>
<div class="col-lg-8" align="left">
<?php echo $erow['doc']; ?>
<!--
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label class="control-label" style="position:relative; top:7px;">Phone:</label>
</div>
<div class="col-lg-8" align="left">

</div>
</div>
 
 
<div style="height:10px;"></div>
<div class="row">
<div class="col-lg-4" align="left">
<label class="control-label" style="position:relative; top:7px;">Post:</label>
</div>
<div class="col-lg-8" align="left">
</div>
</div>
 
-->
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal"> 
Close</button>
 
</div>
</form>
</div>
</div>
</div>
<!-- /.modal -->