<?php
		$companyname = $_POST['companyname'];
		$username = $_POST['username'];
		$usertype = $_POST['usertype'];
		$schedule_solicitation_id = $_POST['schedule_solicitation_id'];
		$user_id = $_POST['user_id'];
	
	
	$post_data = array('usertype' => $usertype,
    'schedule_solicitation_id' => $schedule_solicitation_id,
    'user_id' => $user_id,
	'username'=> $username,
	'companyname'=> $companyname);
	$post_data = json_encode($post_data);
	setcookie("colorimetria_parameters", $post_data);
	
?>