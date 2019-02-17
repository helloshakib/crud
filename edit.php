
<?php
     $db = new PDO('mysql:host=localhost;dbname=bitm-joy;charset=utf8mb4', 'root', '');
     $query = "SELECT * FROM `user_info` WHERE `user_info`.`id` = ".$_GET['id'];
     $stmt = $db->query($query);
     $data = $stmt->fetch(PDO::FETCH_ASSOC);

//var_dump($data);

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration form</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/style.css">
</head>
	
<body>


	<h2>Registration Form</h2>

	<form action="update.php" method="POST" enctype="multipart/form-data">
		<div class="box">
			<hr>
			<div class="form-group">
				<label for="name">Edit Your Name:</label>
				<input type="text" value="<?php echo $data['name']; ?>" name="name" id="name" class="form-control">
				<input type="hidden" value="<?php echo $data['id']; ?>" name="id" id="name" class="form-control">
			</div>
			<div class="form-group">
				<label for="email">Edit Your Email:</label>
				<input id="email" type="email" value="<?php echo $data['email']; ?>" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label for="pass">Edit Your Password:</label>
				<input type="password" value="<?php echo $data['name']; ?>" name="password" class="form-control">
				
			</div>
			<div class="form-group">
				<label for="address">Edit Your Address:</label>
				<textarea id="address" name="address" class="form-control"><?php echo $data['address']; ?></textarea>	
			</div>
			<div class="form-group">
				<label for="cell">Edit Your Mobile:</label>
				<input id="cell" type="text" value="<?php echo $data['mobile']; ?>" name="mobile" class="form-control">
			</div>
			

			<?php 
            
//            if($data['gender']=='male'){
//                $ckd = 'checked';
//            }else{
//                $ckd ='';
//            }
//            
//            if($data['gender']=='female'){
//                $cd = 'checked';
//            }else{
//                $cd ='';
//            }
            ?>

				
			<div class="form-group">
				<label>Select your Gender:</label>
				  <input id="male" type="radio" name="gender" <?php echo ($data['gender']=='male')? 'checked':''; ?> value="male">
				  <label for="male">Male</label>
				  
				<input id="female" type="radio" name="gender" <?php echo ($data['gender']=='female')? 'checked':''; ?> value="female">
				<label for="female">Female</label>
			</div>

			<div class="form-group">
				<label for="name">Check your hobbies:</label>
				
				<input id="cricket" type="checkbox" <?php echo (in_array('cricket', explode(', ', $data['hobby'])))? 'checked':''; ?> name="hobby[]" value="cricket">
				<label for="cricket">Cricket</label>
				
				<input id="sing" type="checkbox" <?php echo (in_array('singing', explode(', ', $data['hobby'])))? 'checked':''; ?> name="hobby[]" value="singing">
				<label for="sing">Singing</label>
				
				<input id="dance" type="checkbox" <?php echo (in_array('dancing', explode(', ', $data['hobby'])))? 'checked':''; ?> name="hobby[]" value="dancing">
				<label for="dance">Dancing</label>
			</div>
				
			<div class="form-group">
				<label for="image">Chosose yor profile pic</label>
				<input id="image" type="file" name="image" class="btn btn-default">
			</div>
			
			<?php 
            
            $date = explode('-', $data['dob']);
            //var_dump($date);
            //echo $date[];
            
            ?>
			
			<div class="form-group">
				<label>Select your DOB:</label>
				<select name="day" class="btn btn-default">
					<option value="">Day</option>
					
					<?php 
                    
                    for($i=1;$i<=31;$i++){
                        if($i==$date[0]){
                            $key = 'selected';
                        }
                        else{
                            $key = '';
                        }
                        echo "<option $key value='$i'>$i</option>";
                    }
                    
                    ?>
				</select>
				<select name="month" class="btn btn-default">
					<option value="">Month</option>
					<?php 
                    
                    for($i=1;$i<=12;$i++){
                        if($i==$date[1]){
                            $key = 'selected';
                        }
                        else{
                            $key = '';
                        }
                        echo "<option $key value='$i'>$i</option>";
                    }
                    
                    ?>
				</select>
				<select name="year" class="btn btn-default">
					<option value="">Year</option>
					<?php 
                    
                    for($i=1980;$i<=2019;$i++){
                        if($i==$date[2]){
                            $key = 'selected';
                        }
                        else{
                            $key = '';
                        }
                        echo "<option $key value='$i'>$i</option>";
                    }
                    
                    ?>
				</select>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Update" class="btn btn-success">
				<input type="reset" name="submit" value="Reset" class="btn btn-info">
			</div>
		</div>
	</form>

</body>
</html>