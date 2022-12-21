<?php
require('top.inc.php');
$name='';
$file='';
$location	='';
$title	='';
$date	='';
$short_desc	='';
$detailed_desc	='';

$msg='';
$file_required='required';
if(isset($_GET['id']) && $_GET['id']!=''){
	$file_required='';
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from testimony where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$name=$row['name'];
		$location=$row['location'];
		$title=$row['title_testimony'];
		$date=$row['date'];
		$short_desc	=$row['short_desc'];
		$detailed_desc	=$row['detailed_desc'];
	
	}else{
		header('location:testimony.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$name=get_safe_value($con,$_POST['name']);
	$location=get_safe_value($con,$_POST['location']);
	$title=get_safe_value($con,$_POST['title_testimony']);
	$date=get_safe_value($con,$_POST['date']);
	$short_desc=get_safe_value($con,$_POST['short_desc']);
	$detailed_desc=get_safe_value($con,$_POST['detailed_desc']);

	$res=mysqli_query($con,"select * from testimony where name='$name'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="testimony already exist";
			}
		}else{
			$msg="testimony already exist";
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
				$update_sql="update testimony set name='$name',location='$location', title_testimony ='$title', date='$date', short_desc='$short_desc', detailed_desc='$detailed_desc', file='$file' where id='$id'";
			}else{
				$update_sql="update testimony set name='$name', location='$location', title_testimony ='$title', date='$date', short_desc='$short_desc', detailed_desc='$detailed_desc', file='$file'  where id='$id'";
			}
			mysqli_query($con,$update_sql);
		}else{
			$file=$_FILES['file']['name'];
			move_uploaded_file($_FILES['file']['tmp_name'],   $targetFilePath.$file);
			mysqli_query($con,"insert into testimony (name,location,  title_testimony, date, short_desc, detailed_desc,status,file) values('$name','$location', '$title', '$date', '$short_desc', '$detailed_desc',1,'$file')");
		}
		header('location:testimony.php');
		die();
	}															
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Testimony</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
						
								<div class="form-group">
									<label for="categories" class=" form-control-label"> Name of Testifier</label>
									<input type="text" name="name" placeholder="Enter testifier's name" class="form-control" required value="<?php echo $name?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Picture of Testifier</label>
									<input type="file" name="file" class="form-control" <?php echo  $file_required?>>
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">Location</label>
									<textarea name="location" placeholder="Enter location" class="form-control"><?php echo $location?></textarea>
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">Title of Testimony</label>
									<textarea name="title_testimony" placeholder="Enter title of testimony" class="form-control"><?php echo $title?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Date</label>
									<input type="date" name="date" placeholder="Enter date of testimony" class="form-control" required value="<?php echo $date?>">
								</div>

								<div class="form-group">
									<label for="categories" class=" form-control-label">Short Description</label>
									<textarea name="short_desc" placeholder="Give a short description of the testimony" class="form-control" required><?php echo $short_desc?></textarea>
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Detailed Description</label>
									<textarea name="detailed_desc" placeholder="Enter a detailed description of the testimony" class="form-control" required><?php echo $detailed_desc?></textarea>
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