<?php

if(isset($_POST['contact_me_via']) && !empty($_POST['contact_me_via'])){
	$contact_me_via_string = implode(',', $_POST['contact_me_via']);
} else {
	$contact_me_via_string = null;
}

$to 		= "register@theenglishchannel.in";
$subject 	= "Trial IELTS Form";

$message = "
<html>
	<head>
		<title>HTML email</title>
	</head>
	<body>
		<p>This email is from Trial IELTS Form!</p>
		<table>
		<tr style='text-align:left;'>
			<th>Name  </th>
			<td> : </td>
			<td> </td>
			<td>".$_POST['name']."</td>
		</tr>
		<tr  style='text-align:left;'>
			<th>Email  </th>
			<td> : </td>
			<td> </td>
			<td>".$_POST['email']."</td>
		</tr>
		<tr  style='text-align:left;'>
			<th>Number  </th>
			<td> : </td>
			<td> </td>
			<td>".$_POST['contact_number']."</td>
		</tr>
		<tr  style='text-align:left;'>
			<th>Module  </th>
			<td> : </td>
			<td> </td>
			<td>".$_POST['module']."</td>
		</tr>
		<tr  style='text-align:left;'>
			<th>Test Date  </th>
			<td> : </td>
			<td> </td>
			<td>".$_POST['test_date']."</td>
		</tr>
		<tr  style='text-align:left;'>
			<th>Exposure  </th>
			<td> : </td>
			<td> </td>
			<td>".$_POST['exposure']."</td>
		</tr>
		<tr  style='text-align:left;'>
			<th>Exam Date  </th>
			<td> : </td>
			<td> </td>
			<td>".$_POST['exam_date']."</td>
		</tr>
		<tr  style='text-align:left;'>
			<th>Reason for choosing  </th>
			<td> : </td>
			<td> </td>
			<td>".$_POST['reason_for_choosing']."</td>
		</tr>
		<tr  style='text-align:left;'>
			<th>Contact Me Via  </th>
			<td> : </td>
			<td> </td>
			<td>".$contact_me_via_string."</td>
		</tr>

		</table>

	</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= 'From: <ielts@mehulkumar.com>' . "\r\n";

$retval = mail ($to,$subject,$message,$headers);

if( $retval == true ) {
?>
	<script>alert("Your response has been submitted successfully. We will revert back to you within the next 24 hours.");
	 	window.location="index.html";
	</script>
<?php
}else {
?>
	<script>alert("Message could not be sent...");
	 	window.location="form.html";
	</script>
<?php
}

?>
