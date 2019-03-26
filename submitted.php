<?php 
$db = mysqli_connect('localhost', 'root', '', 'registration');
if (isset($_POST['ans_user'])) {
		
		$q_one = mysqli_real_escape_string($db, $_POST['q_one']);
		$q_two = mysqli_real_escape_string($db, $_POST['q_two']);
		$q_three = mysqli_real_escape_string($db, $_POST['q_three']);
		$q_four = mysqli_real_escape_string($db, $_POST['q_four']);
		$q_five = mysqli_real_escape_string($db, $_POST['q_five']);

	
		if (empty($q_one)) { array_push($errors, "Answer is required"); }
		if (empty($q_two)) { array_push($errors, "Answer is required"); }
		if (empty($q_three)) { array_push($errors, "Answer is required"); }
		if (empty($q_four)) { array_push($errors, "Answer is required"); }
		if (empty($q_five)) { array_push($errors, "Answer is required"); }


		if (count($errors) == 0) {
		
			$query_ans = "INSERT INTO answers (q_one, q_two, q_three, q_four, q_five) 
					  VALUES('$q_one', '$q_two', '$q_three', '$q_four', '$q_five')";
			mysqli_query($db, $query_ans);

			
		
		}

	}

	?>
