
<?php
     $db = new PDO('mysql:host=localhost;dbname=bitm-joy;charset=utf8mb4', 'root', '');
     $query = "SELECT * FROM `user_info` WHERE `user_info`.`id` = ".$_GET['id'];;
     $stmt = $db->query($query);
     $data = $stmt->fetch(PDO::FETCH_ASSOC);

?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration form</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/style.css">

    <style>
        label{
            display: block;
            border-bottom: 2px solid #ccc;
            padding: 7px 5px;

        }


    </style>
</head>

<body>



	<div class="area">
		<h3>Your Information Show</h3>
		<hr>
		<label for="">Your Name: <i><?php echo $data['name'] ?></i></label>
		
		<label for="">Your Email: <i><?php echo $data['email'] ?></i></label>

		<label for="">Your Password: <i><?php echo $data['password'] ?></i></label>
		
		<label for="">Your Address: <i><?php echo $data['address'] ?></i></label>

		<label for="">Your Mobile: <i><?php echo $data['mobile'] ?></i></label>

		<label for="">Your Gender: <i><?php echo $data['gender'] ?></i></label>

		<label for="">Your Hobbies: <i><?php echo $data['hobby'] ?></i></label>

		<label for="">Your Profile Pic: 
			<img class="img-responsive" src="images/<?php echo $data['image_name']; ?>" alt="">
		</label>

		<label for="">Your DOB:<i><?php echo $data['dob'] ?></i></label>
	</div>






</body>
</html>