<!DOCTYPE html>
<html>
<head>
	<title>Video loop</title>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url("resources/css/videoloop/style.css") ?> >
	
	<meta http-equiv="Refresh" content="15;url=<?php echo "".site_url("main")."" ?>">
	<script type="text/javascript">
		// function redireccionar() {
		//     setTimeout(<?php echo "location.href='".site_url("main")."'" ?>, 15000);
	 //  	}
	 //  	redireccionar();
	</script>
</head>
<body >
	<video autoplay loop  id="bgvid"> <!-- poster="polina.jpg"-->
			<!-- <source src="polina.webm" type="video/webm"> -->
		<source src=<?php echo base_url("resources/videos/mosaik_loop_small.mp4") ?> type="video/mp4" >
	</video>

</body>
</html>