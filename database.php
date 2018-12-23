<?php 
	session_start();

	$name = "";
	$surname = ""; 
	$birthday = ""; 
	$city = "";
	$school = ""; 
	$mother = "";
	$father = "";
	$yourNumber = "";
	$motherNumber = "";
	$fatherNumber =	"";
	$room = "";
	$errors = array();	
	$first = array();
	$second = array();
	$third = array();

	$db = mysqli_connect('localhost', 'root', '', 'dorm');
	
	if(isset($_POST['register'])){
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$birthday = $_POST['birthday'];
		$city = $_POST['city'];
		$school = $_POST['school'];
		$mother = $_POST['mother'];
		$father = $_POST['father'];
		$yourNumber = $_POST['yourNumber'];
		$motherNumber = $_POST['motherNumber'];
		$fatherNumber = $_POST['fatherNumber'];

		if(empty($name)){
			array_push($errors, "Name is required");
		}

		if(empty($surname)){
			array_push($errors, "Surname is required");
		}

		if(empty($birthday)){
			array_push($errors, "Birthday is required");
		}
		if(empty($city)){
			array_push($errors, "City is required");
		}

		if(empty($school)){
			array_push($errors, "School is required");
		}

		if(empty($mother)){
			array_push($errors, "Mother is required");
		}
		if(empty($father)){
			array_push($errors, "Father is required");
		}

		if(empty($yourNumber)){
			array_push($errors, "Your number is required");
		}

		if(empty($motherNumber)){
			array_push($errors, "Mother number is required");
		}

		if(empty($fatherNumber)){
			array_push($errors, "Father number is required");
		}

		$sql1 = "SELECT * FROM rooms";
		$result = mysqli_query($db, $sql1);
		if(mysqli_num_rows($result)>0){
			while($row = mysqli_fetch_assoc($result)){
				if(empty($row['first'])){
					array_push($first, $row['roomNumber']);
				}
				if(empty($row['second'])){
					array_push($second, $row['roomNumber']);
				}
				if(empty($row['third'])){
					array_push($third, $row['roomNumber']);
				}
			}
		}

		if(count($errors) == 0){
			$sql = "INSERT INTO students(name, surname, birthday, city, school, mother, father, yourNumber, motherNumber, fatherNumber)
					VALUES ('$name', '$surname', '$birthday', '$city', '$school', '$mother', '$father', '$yourNumber', '$motherNumber', '$fatherNumber')";
			if(!empty($first)){
				$sql2 = "UPDATE rooms SET first='$name $surname' WHERE roomNumber='$first[0]'";
				$room = $first[0];
			}
			if(empty($first) && !empty($second)){
				$sql2 = "UPDATE rooms SET first='$name $surname' WHERE roomNumber='$second[0]'";
				$room = $second[0];
			}
			if(empty($first) && empty($second) && !empty($third)){
				$sql2 = "UPDATE rooms SET first='$name $surname' WHERE roomNumber='$third[0]'";
				$room = $third[0];
			}
		    mysqli_query($db, $sql2);		    		
			mysqli_query($db, $sql);
			$_SESSION['name'] = $name;
			$_SESSION['room'] = $room;
			header('location: succes.php');
		}
	}
?>