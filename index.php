<?php

//MUHTAR Kurumsal İndexxxxx KURUMSAL

@session_start();
@ob_start();

define("DATA","data/");
define("SAYFA","include/");
define("SINIF","admin/sinif/");

include_once(DATA."connection.php");
define("SITE",$siteUrl);

include_once(SINIF."class.phpmailer.php");
include_once(SINIF."class.smtp.php");

?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	
	 <title><?=$siteTarayiciAd?></title>
  <meta name="description" content="<?=$siteAciklama?>">
  <meta name="keywords" content="<?=$siteAnahtar?>">
  <meta name="author" content="Neslihan Özdemir">
  
 
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
	 <?php
	$veri=$DB->VeriGetir("logo","","","ORDER  BY ID ASC",1);
	
	?>
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE?>admin/images/SiteLogo/<?=$veri[0]["Resim"]?>">
    
    <!-- Place favicon.ico in the root directory -->
	
  <!--	ATOMATİK SLAYT KUTUPHANESİ-->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- CSS here -->
    <link rel="stylesheet" href="<?=SITE?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=SITE?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=SITE?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?=SITE?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=SITE?>css/themify-icons.css">
    <link rel="stylesheet" href="<?=SITE?>css/nice-select.css">
    <link rel="stylesheet" href="<?=SITE?>css/flaticon.css">
    <link rel="stylesheet" href="<?=SITE?>css/gijgo.css">
    <link rel="stylesheet" href="<?=SITE?>css/animate.css">
    <link rel="stylesheet" href="<?=SITE?>css/slick.css">
    <link rel="stylesheet" href="<?=SITE?>css/slicknav.css">

	
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="<?=SITE?>css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
  

<?php

 include_once(DATA."ust.php");
 
 
	if($_GET && !empty($_GET["sayfa"]))
	{
		$sayfa=$_GET["sayfa"].".php";
			if(file_exists(SAYFA.$sayfa))
			{
				include_once(SAYFA.$sayfa);
			}
			else
			{
				include_once(SAYFA."home.php");// include/home.php
			}

	}
	else
	{
 
		include_once(SAYFA."home.php");
	}
	
	include_once(DATA."footer.php");
	
	?>
	

   



    <!-- link that opens popup -->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="<?=SITE?>js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?=SITE?>js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?=SITE?>js/popper.min.js"></script>
    <script src="<?=SITE?>js/bootstrap.min.js"></script>
    <script src="<?=SITE?>js/owl.carousel.min.js"></script>
    <script src="<?=SITE?>js/isotope.pkgd.min.js"></script>
    <script src="<?=SITE?>js/ajax-form.js"></script>
    <script src="<?=SITE?>js/waypoints.min.js"></script>
    <script src="<?=SITE?>js/jquery.counterup.min.js"></script>
    <script src="<?=SITE?>js/imagesloaded.pkgd.min.js"></script>
    <script src="<?=SITE?>js/scrollIt.js"></script>
    <script src="<?=SITE?>js/jquery.scrollUp.min.js"></script>
    <script src="<?=SITE?>js/wow.min.js"></script>
    <script src="<?=SITE?>js/nice-select.min.js"></script>
    <script src="<?=SITE?>js/jquery.slicknav.min.js"></script>
    <script src="<?=SITE?>js/jquery.magnific-popup.min.js"></script>
    <script src="<?=SITE?>js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="<?=SITE?>js/slick.min.js"></script>

	
	



    <!--contact js-->
    <script src="<?=SITE?>js/contact.js"></script>
    <script src="<?=SITE?>js/jquery.ajaxchimp.min.js"></script>
    <script src="<?=SITE?>js/jquery.form.js"></script>
    <script src="<?=SITE?>js/jquery.validate.min.js"></script>
    <script src="<?=SITE?>js/mail-script.js"></script>
	<script src="<?=SITE?>js/main.js"></script>


   
	<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlidesOne");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 2 seconds
}


</script>
<!---->


							<script>

	
</body>

</html>