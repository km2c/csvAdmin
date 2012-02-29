<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link href="../css/popup.css" type="text/css" rel="stylesheet" media="screen"/>
	<!--[if IE]>
	<link href="../css/ie.css" type="text/css" rel="stylesheet" media="screen"/>
	<![endif]-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>	
	<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $("#signup").validate({
				rules: {
					email2: {
						required: true,
						equalTo: "#email"
					},
				},
				messages: {
					email2: {
						equalTo: "Matching email required."
					}
				}
			});
	});
	</script>
</head>
<body>
	<div id="wrapper">
		<div id="header"><h2>RSVP Today!</h2></div> 
	
		<div id="content">