<?php 
	$params = http_build_query($_GET);
	$link = "https://sfgc.smrtapp.com/customer/?$params";
	
    <link rel="stylesheet" href="css/form.css">

	require __DIR__ . "/../Mobile_Detect.php";
	$detect = new Mobile_Detect;
	if($detect->isMobile()){
		header("Location: $link");
		exit();
	}

	include ("../header.php"); 
?>

<div class="main">
  <div class="div-content">
    <div style="width:95%; margin:0 auto;">
    	<style scoped>
		#sfgc_iframe {
			height: 1200px;
		}
		@media (max-width: 860px) {
		 #sfgc_iframe {
		 height: 2550px;
		}
		}
		</style>
      <div id="error_message"></div>
      <iframe id="sfgc_iframe" style="width:95%;overflow:visible;" src="<?php echo $link; ?>"></iframe>
    </div>
  </div>
</div>
<?php include '../footer.php'; ?>