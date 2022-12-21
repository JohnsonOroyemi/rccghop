<?php
require('top.inc.php');
$categories_id='';
$name='';
$file='';
$minister	='';
$date	='';
$short_desc	='';
$detailed_desc	='';
$price='';

$msg='';
$file_required='required';
if(isset($_GET['id']) && $_GET['id']!=''){
	$file_required='';
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from resource where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$categories_id=$row['categories_id'];
		$name=$row['name'];
		$minister=$row['minister'];
		$date=$row['date'];
		$short_desc	=$row['short_desc'];
		$detailed_desc	=$row['detailed_desc'];
		$price=$row['price'];
	
	}else{
		header('location:resource.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$categories_id=get_safe_value($con,$_POST['categories_id']);
	$name=get_safe_value($con,$_POST['name']);
	$minister=get_safe_value($con,$_POST['minister']);
	$date=get_safe_value($con,$_POST['date']);
	$short_desc=get_safe_value($con,$_POST['short_desc']);
	$detailed_desc=get_safe_value($con,$_POST['detailed_desc']);
	$price=get_safe_value($con,$_POST['price']);

	$res=mysqli_query($con,"select * from resource where name='$name'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="resource already exist";
			}
		}else{
			$msg="resource already exist";
		}
	}
	
	
	if($_GET['id']==0){
		if($_FILES['file']['type']!='image/png' && $_FILES['file']['type']!='image/jpg' && $_FILES['file']['type']!='image/jpeg' && $_FILES['file']['type']!='audio/mpeg' && $_FILES['file']['type']!='video/mpeg' && $_FILES['file']['type']!='audio/webm' && $_FILES['file']['type']!='video/webm' && $_FILES['file']['type']!='audio/mp4' && $_FILES['file']['type']!='video/mp4' && $_FILES['file']['type']!='audio/mp3' && $_FILES['file']['type']!='video/Ogg' && $_FILES['file']['type']!='audio/WAV' && $_FILES['file']['type']!='video/WAV' && $_FILES['file']['type']!='application/pdf' && $_FILES['file']['type']!='image/doc'){ 
			$msg="Please select only png,jpg and jpeg image formate";
		}
	}else{
		if($_FILES['file']['type']!=''){
				if($_FILES['file']['type']!='image/png' && $_FILES['file']['type']!='image/jpg' && $_FILES['file']['type']!='image/jpeg' && $_FILES['file']['type']!='audio/mpeg' && $_FILES['file']['type']!='video/mpeg' && $_FILES['file']['type']!='audio/webm' && $_FILES['file']['type']!='video/webm' && $_FILES['file']['type']!='audio/mp4' && $_FILES['file']['type']!='video/mp4' && $_FILES['file']['type']!='audio/mp3' && $_FILES['file']['type']!='video/Ogg' && $_FILES['file']['type']!='audio/WAV' && $_FILES['file']['type']!='video/WAV' && $_FILES['file']['type']!='application/pdf' && $_FILES['file']['type']!='image/doc'){
				$msg="Please select only png,jpg and jpeg image formate";
			}
		}
	}
	
	$targetDir = "uploads/";
    $targetFilePath = $targetDir;

	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			if($_FILES['file']['name']!=''){
				$file=$_FILES['file']['name'];
				move_uploaded_file($_FILES['file']['tmp_name'],   $targetFilePath.$file);
				$update_sql="update resource set categories_id='$categories_id',name='$name',minister='$minister',date='$date', ,short_desc='$short_desc', detailed_desc='$detailed_desc', price='$price',file='$file' where id='$id'";
			}else{
				$update_sql="update resource set categories_id='$categories_id',name='$name', minister='$minister',date='$date', short_desc='$short_desc', detailed_desc='$detailed_desc', price='$price',file='$file'  where id='$id'";
			}
			mysqli_query($con,$update_sql);
		}else{
			$file=$_FILES['file']['name'];
			move_uploaded_file($_FILES['file']['tmp_name'],   $targetFilePath.$file);
			mysqli_query($con,"insert into resource(categories_id,name,minister,price,date, short_desc, detailed_desc, status,file) values('$categories_id','$name','$minister','$price','$date', '$short_desc', '$detailed_desc',1,'$file')");
		}
		header('location:resource.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Resource</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="categories" class=" form-control-label">Categories</label>
									<select class="form-control" name="categories_id">
										<option>Select Category</option>
										<?php
										$res=mysqli_query($con,"select id,categories from categories order by categories asc");
										while($row=mysqli_fetch_assoc($res)){
											if($row['id']==$categories_id){
												echo "<option selected value=".$row['id'].">".$row['categories']."</option>";
											}else{
												echo "<option value=".$row['id'].">".$row['categories']."</option>";
											}
											
										}
										?>
									</select>
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Resource Name</label>
									<input type="text" name="name" placeholder="Enter resource name" class="form-control" required value="<?php echo $name?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">File</label>
									<input type="file" name="file" class="form-control" <?php echo  $file_required?>>
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">Minister</label>
									<textarea name="minister" placeholder="Enter minister's name" class="form-control"><?php echo $minister?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Date</label>
									<input type="date" name="date" placeholder="Enter posting date" class="form-control" required value="<?php echo $date?>">
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">Short Description</label>
									<textarea name="short_desc" placeholder="Enter resource short description" class="form-control" required><?php echo $short_desc?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Detailed Description</label>
									<textarea name="detailed_desc" placeholder="Enter resource detailed description" class="form-control" required><?php echo $detailed_desc?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Price</label>
									<input type="number" name="price" placeholder="Enter resource price" class="form-control" required value="<?php echo $price?>">
								</div>
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
<?php
require('footer.inc.php');
?>