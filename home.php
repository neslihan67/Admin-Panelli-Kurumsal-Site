
		<div style="background-color:#d3d2d1; padding-top:160px;"class="container-fluid">
			<div class="row">
	<!--********************************              SOL ALAN              ***********************************************************************-->	
<!--*******************************************************************************************************************-->		

				<div class="col-xl-3 col-lg-3 col-md-3 d-none d-sm-block d-sm-none d-md-block "  style="height:auto; padding-left:2px; padding-right:2px; background-color:#fefdfa;">
					<div style="background-color:white; height:auto; border-style: none solid solid solid;
								border-radius:10px;	border-width:2px; border-color:#b5c1c0 " class="popular_category_area">
						<div class="container" style="background-color:#f5f5dc;">
							<aside style="padding-top:5px; padding-bottom:10px;" class="single_sidebar_widget search_widget">
				
								<?php
								
								$verimuhtar=$DB->VeriGetir("muhtarbilgi","","","ORDER BY ID DESC");
								if($verimuhtar!=false)
								{
									
									?>
									<div class="container" style="padding:15px; padding-bottom:0px; border-radius:0px; " >
										<img src="<?=SITE?>admin/images/MuhtarFotograflar/<?=$verimuhtar[0]["Resim"]?>" style="width:100%;border-radius:5px; border:2px groove #1e90ff; height:auto;" >
										<a href="<?=SITE?>muhtarlar"><h4 style="text-align:center; padding-top:5px; padding width:100%;"><u style="color:black"><?=$verimuhtar[0]["Adsoyad"]?></u></h4></a>
								
								    </div>	
									<?php
									
								}
								?>
								<div style=" padding-top:0px;" class="hover_inner">
									<?php
									
									$verisoz=$DB->VeriGetir("muhtarsozleri","","","ORDER BY ID DESC");
									?>
									
									<h4 style="text-align:center; padding:5px;; width:100%; background-color:#b6bcb9; border-radius:5px;"><p>Muhtarın Sözü:</p><?=$verisoz[0]["Soz"]?></h4>
								
								</div>
				
							</aside>
						</div>
					</div>
					
					
						<style>
						table{
		
		
						font-size:15px;
						background-color:#fbf9ff;
						padding-top:5px;
						padding-left:15px;
						padding-bottom:5px;
						padding-right:15px;
						}


						th{
		
						color:red;
						border: 1px none ;
						text-align: left;
						}


						td{
		
						text-align: left;
						}
						</style>
					 
		<!-------------------------------------------------------------------------------------------------------->
						
						<?php
						$site="https://www.bloomberght.com/doviz";
						$parcala='@<td>(.*?)</td>@si';
						$botara=file_get_contents($site);
						preg_match_all($parcala, $botara, $gelen);
						?>
						 
		<!-------------------------------------------------------------------------------------------------------->
				
				<div class="popular_category_area" style="margin:15px 0px; padding-bottom:10px;  border-style: none solid solid solid;
							border-radius:10px;  border-width:2px;  border-color:#b5c1c0; background-color:#f8f8ff;">
					<div class="container" style="background-color:#1e90ff; border-radius:9px 9px 0px 0px;">
								<h4 style="padding:10px 0px; " class="widget_title">DÖVİZ BİLGİSİ</h4>
							</div>
					<div class="container" style="align-items:center; background-color:#f5f5dc;">
						
						
						   <table>
									<tr><th>USD -DOLAR </th></tr>
									<tr><td>Alış<?php print_r($gelen[0][1]);?></td> </tr>
									<tr><td>Satış <?php print_r($gelen[0][3]); ?></td> </tr>
							</table>
						
							<hr>
						
									
							<table>
							<tr> <th>EUR- EURO</th></tr>
							<tr><td> Alış<?php print_r($gelen[0][5]);?></td></tr>
							<tr><td> Satış<?php print_r($gelen[0][7]); ?></td></tr>
							</table>
								 
								   
					
					</div>
					
					
						
						
				</div>	
			<!-------------------------------------------------------------------------------------------------------->
					<meta charset="UTF-8">
					<?php

					  $linkhava="https://www.milliyet.com.tr/hava-durumu/zonguldak/";
					  
					  $ch=curl_init();
					  curl_setopt($ch,CURLOPT_URL,$linkhava);
					  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
					  curl_setopt($ch,CURLOPT_HEADER,0);
					  $havaisle=curl_exec($ch);
					  
					  curl_close($ch);
					  
					  
						$parcalaHavaX='@<span class="havaS6">(.*?)</span>@si';
					   $botaraHavaX=file_get_contents("https://www.milliyet.com.tr/hava-durumu/zonguldak/");
					   preg_match_all($parcalaHavaX, $botaraHavaX, $gelenHavaX);
					 
					   
						$parcalaHavaY='@<span class="havaS8">(.*?)</span>@si';
					   $botaraHavaY=file_get_contents("https://www.milliyet.com.tr/hava-durumu/zonguldak/");
					   preg_match_all($parcalaHavaY, $botaraHavaY, $gelenHavaY);
					   
					  $parcalaHava='@<span class="havadate1 time">(.*?)</span>@si';
					   $botaraHava=file_get_contents("https://www.milliyet.com.tr/hava-durumu/zonguldak/");
					   preg_match_all($parcalaHava, $botaraHava, $gelenHava);


						$parcalaHavaA='@<span class="havaspan1">(.*?)</span>@si';
						$botaraHavaA=file_get_contents("https://www.milliyet.com.tr/hava-durumu/zonguldak/");
						preg_match_all($parcalaHavaA, $botaraHavaA, $gelenHavaA);

						
						$parcalaHavaB='@<span class="havaspan7">(.*?)</span>@si';
						$botaraHavaB=file_get_contents("https://www.milliyet.com.tr/hava-durumu/zonguldak/");
						preg_match_all($parcalaHavaB, $botaraHavaB, $gelenHavaB);
						
						
						$parcalaHavaC='@<span class="havaspan8b">(.*?)</span>@si';
						$botaraHavaC=file_get_contents("https://www.milliyet.com.tr/hava-durumu/zonguldak/");
						preg_match_all($parcalaHavaC, $botaraHavaC, $gelenHavaC);
						
						

						

						$tarih = date("d.m.Y"); 

						?>

					<div class="popular_category_area" style="margin:15px 0px; padding-bottom:10px;  border-style: none solid solid solid;
                                border-radius:10px;  border-color:#b5c1c0 ;  border-width:2px; background-color:#f8f8ff;">
						<div class="container" style="background-color:#1e90ff; border-radius:9px 9px 0px 0px;">
								<h4 style="padding:10px 0px; " class="widget_title">Hava Durumu</h4>
								
						</div>
						
						<div class=" col-12 text-center ">
									<img style="width:70px; height:auto;" src="<?=SITE?>iconslarim/hava.jpg">   
									
						</div>
						
					<style>
						#customers {
						  font-family: Arial, Helvetica, sans-serif;
						  border-collapse: collapse;
						  width: 100%;
						}

						#customers td, #customers th {
						  border: 1px solid #ddd;
						   text-align:center;
						  padding: 8px;
						}

						#customers tr:nth-child(even){background-color: #f2f2f2;}

						#customers tr:hover {background-color: #ddd;}

						#customers th {
						  padding-top: 12px;
						  padding-bottom: 12px;
						  text-align: center;
						  background-color: #4CAF50;
						  color: white;
						}
						</style>
			
						
						 
						 <div class="container">
							 <table id="customers">
							  <tr>
								
							 
							  
							  </tr>
							  <tr>
								<td><h4>Bugün | <?=$tarih?> </h4></td>
							   
							  </tr>
							  <tr>
								<td><?=$gelenHavaX[0][0]?></td>
							   
							  </tr>
							  <tr>
								<td style="text-transform:uppercase; color:#e68c00;"><?=$gelenHavaY[0][0]?></td>
							 
							  </tr>
							  <tr>
								<td> <h4>Yarın | <?=$gelenHava[0][0]?></h4></td>
							   
							  </tr>
							 
							  <tr>
								<td>Gündüz :<?=$gelenHavaA[0][11]?></td>
							   
							  </tr>
							  <tr>
								<td>Gece :<?=$gelenHavaC[0][1]?></td>
								
							  </tr>
							   <tr>
								<td style="text-transform:uppercase; color:#e68c00;"><?=$gelenHavaB[0][11]?></td>
							   
							  </tr>
							</table>
						 </div> 
						


						
						
					</div>
	<!-------------------------------------------------------------------------------------------------------->		

				

	<!--**********************************************MİLADİ TAKVİM*********************************************************************-->	
	
					<div class="popular_category_area" style="margin:15px 0px; padding-bottom:10px;   border-style: none solid solid solid;
								border-radius:10px;		border-color:#b5c1c0 ; border-width:2px;background-color:#f8f8ff">
						<div class="container" style="background-color:#1e90ff; border-radius:9px 9px 0px 0px;">
							<h4 style="padding:10px 0px;" class="widget_title">MİLADİ TAKVİM</h4>
						</div>					
						<style>
						#customers {
						  font-family: Arial, Helvetica, sans-serif;
						  border-collapse: collapse;
						  width: 100%;
						}

						#customers td, #customers th {
						  border: 1px solid #ddd;
						   text-align:center;
						  padding: 8px;
						}

						#customers tr:nth-child(even){background-color: #f2f2f2;}

						#customers tr:hover {background-color: #ddd;}

						#customers th {
						  padding-top: 12px;
						  padding-bottom: 12px;
						  text-align: center;
						  background-color: #4CAF50;
						  color: white;
						}
						</style>
						   <meta charset="UTF-8">
						<?php

						  $linkEzan="https://namazvakitleri.diyanet.gov.tr/tr-TR/9954/karadeniz-eregli-icin-namaz-vakti";
						  
						  $ch=curl_init();
						  curl_setopt($ch,CURLOPT_URL,$linkEzan);
						  curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
						  curl_setopt($ch,CURLOPT_HEADER,0);
						  $EzanIsle=curl_exec($ch);
						  
						  curl_close($ch);
						  
						  $parcalaEzan='@<div class="tpt-time">(.*?)</div>@si';
						   $botaraEzan=file_get_contents("https://namazvakitleri.diyanet.gov.tr/tr-TR/9954/karadeniz-eregli-icin-namaz-vakti");
						   preg_match_all($parcalaEzan, $botaraEzan, $gelenEzan);
							

						  
						  ?>
						 
						 <div class="container">
							 <table id="customers">
							  <tr>
								
							 
							  
							  </tr>
							  <tr>
								<td><h5>İmsak <?=$gelenEzan[0][0]?></h5></td>
							   
							  </tr>
							  <tr>
								<td>Güneş :<?=$gelenEzan[0][1]?></td>
							   
							  </tr>
							  <tr>
								<td>Öğle :<?=$gelenEzan[0][2]?></td>
							 
							  </tr>
							  <tr>
								<td>İkindi :<?=$gelenEzan[0][3]?></td>
							   
							  </tr>
							 
							  <tr>
								<td>Akşam :<?=$gelenEzan[0][4]?></td>
							   
							  </tr>
							  <tr>
								<td>Yatsı :<?=$gelenEzan[0][5]?></td>
								
							  </tr>
							 
							</table>
						 </div> 
						
  
		
					</div>
<!--****************************************************************SPONSOR***************************************************-->		
					<div class="popular_category_area" style="margin:15px 0px; padding-bottom:10px;   border-style: none solid solid solid;
								border-radius:10px; border-color:#b5c1c0 ; border-width:2px;background-color:#f8f8ff">
						
						<div class="container" style="background-color:#1e90ff; border-radius:9px 9px 0px 0px;">
							<h4 style="padding:10px 0px;" class="widget_title">Sponsorlarımız</h4>
						</div>
						
						<div class="container" style="align-items:center;">
							
							 <?php
							 $veriS=$DB->VeriGetir("sponsorlar","","","ORDER BY ID ASC");
							 if($veriS!=false)
							 {
							 ?>
							 <style>
							
							 .marqueeA:hover{
								 animation-play-state:paused;
							 }
							 </style>
							<marquee width="auto" height="250px" style="background-color:white;margin-left:auto; margin-right:auto; " direction="up" > 
						  

								   <?php
									  
									 for($i=0;$i<count($veriS);$i++)
									 {
										 ?>
										
										
										<a href="<?=$veriS[$i]["LinkAdresi"]?>">
										<img class="marqueeA" src="<?=SITE?>admin/images/SponsorFotograflar/<?=$veriS[$i]["Resim"]?>" alt="<?=$veriS[$i]["Aciklama"]?>"
										style="width:100%; height:auto; border:solid; border-color:#e6e6fa;padding:15px;"></a>
									
										<?php
									 }
									 
								 }
									?>
								
							</marquee>
						</div>
						
						
							
							
					</div>	
						
					
				</div><!--col-3 sol alan finish-->
				
				
	<!--******************************       İÇERİK ALANI -HABER SLAYT     *******************************************************-->		

	
				<div class="col-md-6 col-sm-12 col-xs-12" style="height:auto; padding-left:2px; padding-right:2px; background-color:#fefdfa;" >
					<div class="popular_category_area" 
					style="background-color:white;  border-style: none solid solid solid;border-radius:10px; border-color:#b5c1c0 ;border-width:2px;">
						<div class="container" style="padding:0px;">
							<?php
							
							$veri=$DB->VeriGetir("haberler","","","ORDER BY ID DESC",3);
							if($veri!=false)
							{
								for($i=0;$i<count($veri);$i++)
								{
									?>
									<img class="mySlidesOne" src="<?=SITE?>admin/images/HaberFotograflar/<?=$veri[$i]["Resim"]?>" style="width:100%; height:300px;">
									<style>
									.mySlidesOne {display:none;}
									</style>
									<?php
								}
							}
							?>
						</div>
					</div>
			<!--****************************************    İÇERİK ALANI - BİZDEN HABER YAZI  **************************************************************-->							
					
					<div class="popular_catagory_area" style="padding-top: 0px; margin-top:10px;  padding-bottom: 10px;margin-bottom:10px; background-color:white; border-style: none solid solid solid;
								  border-radius:10px;
								  border-color:#b5c1c0 ;
								  border-width:2px;">
						<div class="container" style="background-color:#1e90ff; border-radius:9px 9px 0px 0px; ">
							<div class="row"  style=" padding-top:12px; padding-bottom:10px;" >
							
									
										<h4 style="padding-top:12px; padding-left:5px;">
										   ETKİNLİKLERİMİZ
										</h4>
							
							</div>
						</div>
						<div class="container">	
							<div class="row">
							<?php
							
							$veriEtkinlik=$DB->VeriGetir("etkinlikler","","","ORDER BY ID DESC",2);
							if($veriEtkinlik!=false)
							{
								for($i=0;$i<count($veriEtkinlik);$i++)
								{
									?>
								   <div class="col-xl-6 col-md-6 col-lg-6" style="padding:1px; border-radius:0px ; border-style=solid; border-color:grey;">
									 <div class="single_catagory" style="border-radius:0px ; border-style=solid; border-color:grey;">
										<div class="thumb"style="border-radius:0px; border-style=solid; border-color:grey;"  >
											<img src="<?=SITE?>admin/images/EtkinlikFotograflar/<?=$veriEtkinlik[$i]["Resim"]?>"
											style="width:100%; height:180px; max-height:185px; border-radius: 0px; border-style=solid; border-color:grey;"
											alt="<?=$veriEtkinlik[$i]["Baslik"]?>">
										</div>
										
											<a href="Etkinlik-detay/<?=$veriEtkinlik[$i]["ID"]?>" style="text-align:center;"><h4 style=" background-color:grey;"><?=$veriEtkinlik[$i]["Baslik"]?></h4></a> 
											<div class="col-12">		
											<h6 style="float:right;padding:10px 10px; background-color:pink;" ><?=$veriEtkinlik[$i]["Tarih"]?></h6>
										</div>
										
										
									 </div>
								  </div>
								  <?php
								}
							}
							?>
							  
								
							</div>
						</div>
					</div>		
<!--****************************************        İÇERİK ALANI - HABER YAZI       **************************************************************-->
	<div class="popular_category_area" style="background-color:white; margin-top:10px; margin-bottom:5px;
				 border-style: none solid solid solid;
				  border-radius:10px;
				  border-color:#b5c1c0 ;
				  border-width:2px;">
				
					<div class="container" style="background-color:#1e90ff; border-radius:9px 9px 0px 0px;">
						<div class="row"  style=" padding-top:12px; padding-bottom:10px;" >
							<h4 style="padding-top:12px; padding-left:5px;">
							   Son Paylaşılan Fotoğraflar
							</h4>
						</div>
					</div>
					
					<div class="container">
							<style>
							.mySlidesTwo {display:none;}
							</style>
						

						<div class="w3-content w3-display-container">
								<?php
								$veriFotograflar=$DB->VeriGetir("resimgalerisi","","","ORDER BY ID DESC",10);
								if($veriFotograflar!=false)
								{
									for($i=0;$i<count($veriFotograflar);$i++)
									{
										?>
										
										<img class="mySlidesTwo" src="<?=SITE?>admin/images/Fotograflar/<?=$veriFotograflar[$i]["Resim"]?>" style="width:100%; height:300px">
										
										<?php
									}
								}
								?>
								
							<button class="w3-button w3-black w3-display-left" onclick="plusDivsFoto(-1)">&#10094;</button>
							<button class="w3-button w3-black w3-display-right" onclick="plusDivsFoto(1)">&#10095;</button>
							
						</div>
							 


							<script>
							var slideIndexim = 1;
							showDivsFoto(slideIndexim);

							function plusDivsFoto(n) {
							  showDivsFoto(slideIndexim += n);
							}

							function showDivsFoto(n) {
							  var i;
							  var x = document.getElementsByClassName("mySlidesTwo");
							  if (n > x.length) {slideIndexim = 1}
							  if (n < 0) {slideIndexim = x.length}
							  for (i = 0; i < x.length; i++) {
								x[i].style.display = "none";  
							  }
							  x[slideIndexim-1].style.display = "block";  
							}
							</script>
					</div>		
				</div>
	<!--*******************************************************************************************************************-->		
	
					<div class="popular_category_area" style="background-color:white; height:auto; margin-bottom:15px; border-style: none solid solid solid;
								  border-radius:10px;
								  border-color:#b5c1c0 ;
								  border-width:2px;" >
						<div class="container" style="background-color:#1e90ff; padding:15px; border-radius:9px 9px 0px 0px; ">
							<h4  >BİZDEN HABERLER</h4>
							
						</div>
						
						<div class="container" style="background-color:#fffff0;">
							
								<?php
								
								$veriH=$DB->VeriGetir("haberler","","","ORDER BY ID DESC",10);
								if($veriH!=false)
								{
									for($i=0;$i<count($veriH);$i++)
									{
										?>
										<div  style="padding: 2px 0; border-color:orange;" class="section-top-border">
											
											
											<div class="row" style="border-style:none; ">
												
												<div class="col-md-3" style="padding:0px 2px;">
													<img src="<?=SITE?>admin/images/HaberFotograflar/<?=$veriH[$i]["Resim"]?>" alt="" style="width:100%; height:auto;"  class="img-fluid">
												</div>
												
												<div class="col-md-9 mt-sm-20" style="padding-top:5px; " >
													<a href="<?=SITE?>haber-detay/<?=$veriH[$i]["ID"]?>">
													<h6 style="text-align:left; text-transform: uppercase; padding-bottom:0px;" class="mb-30"><?=$veriH[$i]["Baslik"]?></h6></a>
													<p><?=mb_substr(strip_tags(stripslashes($veriH[$i]["Aciklama"])),0,180,"UTF-8")."..."?></p>
													<a href="<?=SITE?>haber-detay/<?=$veriH[$i]["ID"]?>">
														<div class="col-12">
															<button class="btn btn-lg"
															style="background-color:black; float:right; border-style:solid; border-top-color:#deb887;border-radius:0px;color:white; font-size:14px;" >Devamı --></button></a>
														</div>
												</div>
												
											</div>
										</div>
										<?php
									}
								}
								?>
							
						</div>		
						
					</div>
					
<!--****************************************        İÇERİK ALANI - sponsorlar YAZI       **************************************************************-->						
			
					

							
							

							
						
					
				
					
					
					
			</div>	<!--col-md-6 area finish tag-->
					
<!--**************************************** SAG ALAN **************************************************************-->							
			
				<div  class="col-md-3 col-sm-12 col-xs-12" style="height:auto; padding-left:2px; padding-right:2px; background-color:#fefdfa;" >
				
<!--****************************************  SAG ALAN - TEBLİGAT SORGULAMA **************************************************************-->	

					<div class="popular_category_area"  style="background-color:#f5f5dc; height:auto; margin-top:10px; padding-bottom:10px;  border-style: none solid solid solid;
								  border-radius:10px;
								  border-color:#b5c1c0 ;
								  border-width:2px;">
						<h4 style="padding:10px 0px; background-color:#1e90ff; border-radius:9px 9px 0px 0px; " class="widget_title">TEBLİGAT Sorgula</h4>
						<?php
						if($_POST)
						{
							if(!empty($_POST["tcno"]))
							{
								$tcno=$DB->Filter($_POST["tcno"]);
								$veriAra=$DB->VeriGetir("tebligatbilgi","WHERE (TC LIKE ?)",array('%'.$tcno.'%'),"ORDER BY ID DESC");
								
								if($veriAra==null)
								{
									?>
									<script>
									window.alert('Bu TC numarasında kayıtlı bir tebligat BULUNAMADI!');
									</script>
									<?php
								}
								else
								{	
									?>
									<script>
									window.alert('Bu TC numarasında kayıtlı tebligat VARDIR!');
									</script>
									<?php
								}
							}
						}	
						?>
							<div class="col-12" style="padding:0px; ">
								<form action="#" method="post" enctype="multipart/form-data">
								
									<label style="width:100%; color:black;">TC giriniz:</label><br>
									<div class="container">
										<input type="text" name="tcno" style="width:100%;"></input>
									</div>
									<div class="container">
										<br><button class="btn btn-success" style="width:100%;">Ara</button>
									</div>
									
								</form>
							</div>
							
							
						
					</div>
				
<!--****************************************    SAG ALAN - GÜNCEL BİLGİLER YAZISI  **************************************************************-->				
					<div class="popular_category_area" style="margin:15px 0px; padding-bottom:10px; background-color:#f8f8ff;  border-style: none solid solid solid;
								  border-radius:10px;
								  border-color:#b5c1c0 ;
								  border-width:2px;">
						<div class="container" style="background-color:#1e90ff; border-radius:9px 9px 0px 0px; padding:10px 0px;  ">
							<h4  class="widget_title"> DUYURULAR</h4>
							
						</div>
						
						<div class="container"  style="padding:10px 0px; background-color:#f5f5dc; ">
							<ul class="list cat-list">
						 
								<?php
								$veriDuyuru=$DB->VeriGetir("duyurular","","","ORDER BY ID DESC",4);
								if($veriDuyuru!=false)
								{
									for($i=0;$i<count($veriDuyuru);$i++)
									{
										?>
										<li>
										<p><img src="<?=SITE?>iconslarim/exclamation-mark.png"> <?=$veriDuyuru[$i]["Baslik"]?></p>
										</li>
										<hr>
										<?php
									}
								}
								?>
							
							</ul>
						</div>
					</div>
					


<!--****************************************    SAG ALAN - GÜNCEL BİLGİLER YAZISI  **************************************************************-->							
									
				
						 
						 
		<!-------------------------------------------------------------------------------------------------------->
	
						
				<div class="popular_category_area" style="margin:15px 0px; padding-bottom:10px; background-color:#f5f5dc;  border-style: none solid solid solid;
							  border-radius:10px;
							  border-color:#b5c1c0 ;
							  border-width:2px;">	
				    <h4 style="padding:10px 0px; background-color:#1e90ff; border-radius:9px 9px 0px 0px; " class="widget_title">Köşe Yazıları</h4>
					
					 	
					<?php
					$veriMetin=$DB->VeriGetir("kosemetinleri","","","ORDER BY ID DESC",3);
					
					$yazarimizA=$veriMetin[0]["SeflinkYazarad"];
					$yazarimizB=$veriMetin[1]["SeflinkYazarad"];
					$yazarimizC=$veriMetin[2]["SeflinkYazarad"];
					
					$veriYazarResA=$DB->VeriGetir("koseyazarbilgi","WHERE Adsoyad=?",array($yazarimizA),"ORDER BY ID ASC",1);
					$veriYazarResB=$DB->VeriGetir("koseyazarbilgi","WHERE Adsoyad=?",array($yazarimizB),"ORDER BY ID ASC",1);
					$veriYazarResC=$DB->VeriGetir("koseyazarbilgi","WHERE Adsoyad=?",array($yazarimizC),"ORDER BY ID ASC",1);
					
						
					
							?>
							<div class="row" style="width:100%;">
								<div class="col-4 text-center">
									<img src="<?=SITE?>admin/images/YazarFotograflar/<?=$veriYazarResA[0]["Resim"]?>" style="width:100%;height:91px;"></img>
									<a href="yazar-detay/<?=$veriYazarResA[0]["ID"]?>"><h6><?=$veriYazarResA[0]["Adsoyad"]?></h6></a>
								</div>
								
								
								<div class="col-8">
									<a href="koseyazisi-detay/<?=$veriMetin[0]["ID"]?>"><h6><?=$veriMetin[0]["Baslik"]?></h6></a>
									<p><?=mb_substr(strip_tags($veriMetin[0]["Metin"]),0,50,"UTF-8")."..."?></p>
									<h6 style="float:right; padding-right:10px;"><?=$veriMetin[0]["Tarih"]?></h6>
								</div>
								
								
							</div>	
							<hr>
							<div class="row" style="width:100%;">
								<div class="col-4 text-center">
									<img src="<?=SITE?>admin/images/YazarFotograflar/<?=$veriYazarResB[0]["Resim"]?>" style="width:100%;height:91px;"></img>
									<a href="yazar-detay/<?=$veriYazarResB[0]["ID"]?>"><h6><?=$veriYazarResB[0]["Adsoyad"]?></h6></a>
								</div>
								
								
								<div class="col-8">
									<a href="koseyazisi-detay/<?=$veriMetin[1]["ID"]?>"><h6><?=$veriMetin[1]["Baslik"]?></h6></a>
									<p><?=mb_substr(strip_tags($veriMetin[1]["Metin"]),0,50,"UTF-8")."..."?></p>
									<h6 style="float:right; padding-right:10px;"><?=$veriMetin[1]["Tarih"]?></h6>
								</div>
									
								
							</div>
							<hr>
							<div class="row" style="width:100%;">
								<div class="col-4 text-center">
									<img src="<?=SITE?>admin/images/YazarFotograflar/<?=$veriYazarResC[0]["Resim"]?>" style="width:100%;height:91px;"></img>
									<a href="yazar-detay/<?=$veriYazarResC[0]["ID"]?>"><h6><?=$veriYazarResC[0]["Adsoyad"]?></h6></a>
								</div>
								
								
								<div class="col-8">
									<a href="koseyazisi-detay/<?=$veriMetin[2]["ID"]?>"><h6><?=$veriMetin[2]["Baslik"]?></h6></a>
									<p><?=mb_substr(strip_tags($veriMetin[2]["Metin"]),0,50,"UTF-8")."..."?></p>
									<h6 style="float:right; padding-right:10px;"><?=$veriMetin[2]["Tarih"]?></h6>
								</div>
								
								
							</div>	
					
				</div>	
	<!--------------------------------------------------------------------------------------------------------------------->				
					<div class="popular_category_area"  style="background-color:white; height:auto; margin-bottom:15px; border-style: none solid solid solid;
								  border-radius:10px;
								  border-color:#b5c1c0 ;
								  border-width:2px;">
						<div class="container" style="padding:10px 0px; border-radius:9px 9px 0px 0px;  background-color:#1e90ff; margin-bottom:0px">
						 
							<h4 class="widget_title">Yararlı Linkler</h4>
						</div>	
						
						<div class="container" style="padding:10px 5px;background-color:#f5f5dc; ">
							
								<ul class="list">
									 <?php
									 $verilerYararli=$DB->VeriGetir("linkler","","","ORDER BY ID ASC");
									 if($verilerYararli!=false)
									 {
										 for($i=0;$i<count($verilerYararli);$i++)
										 {
											 ?>
										  <li>
											<a href="<?=$verilerYararli[$i]["LinkAdresi"]?>"><?=$verilerYararli[$i]["Baslik"]?></a>
										  </li> <hr>
										  <?php
										 }
									 }
									 ?>
								
								</ul>
						
						</div>	
					</div>
					
	<!----------------------------------------sag alan sponsorlar------------------------------------------------>					
					
					<div class="popular_category_area" style="margin:15px 0px; padding-bottom:10px; background-color:#f8f8ff; border-style: none solid solid solid;
								  border-radius:10px;
								  border-color:#b5c1c0 ;
								  border-width:2px;">
						
						<div class="container" style="background-color:#1e90ff; border-radius:9px 9px 0px 0px;">
							<h4 style="padding:10px 0px;" class="widget_title">Sponsorlarımız</h4>
						</div>
						
						<div class="container" style="align-items:center; background-color:#f5f5dc">
							
							 <?php
							 $veriS=$DB->VeriGetir("sponsorlar","","","ORDER BY ID ASC");
							 if($veriS!=false)
							 {
							 ?>
							 <style>
							
							 .marqueeA:hover{
								 animation-play-state:paused;
							 }
							 </style>
							<marquee width="auto" height="250px" style="background-color:#f5f5dc; margin-left:auto; margin-right:auto; "  direction="up" > 
						  

								   <?php
									  
									 for($i=0;$i<count($veriS);$i++)
									 {
										 ?>
										
										
										<a href="<?=$veriS[$i]["LinkAdresi"]?>">
										<img class="marqueeA" src="<?=SITE?>admin/images/SponsorFotograflar/<?=$veriS[$i]["Resim"]?>" alt="<?=$veriS[$i]["Aciklama"]?>"
										style="width:100%; height:auto; border:solid; border-color:#e6e6fa;padding:15px;"></a>
									
										<?php
									 }
									 
								 }
									?>
								
							</marquee>
						</div>
						
						
							
							
					</div>	
					
					
				</div>
<!----------------------------------------ROW EN DIS CONTAİNER FLUİD EN DIS------------------------------------------------>			
			</div>
		</div>
