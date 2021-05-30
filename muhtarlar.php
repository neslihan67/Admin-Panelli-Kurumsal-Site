           <div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h4 style="font-family:Montserrat, sans-serif width:100%;">MUHTARIMIZ</h4>
								
				
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			
			
			
<!-------------------------------------------------------------------------------------------------------->


	<div style=" background-color:#fff; height:70px; width:100%;" class="container-fluid"></div>
			 
			 
<!-------------------------------------------------------------------------------------------------------->
				<?php
				$veriMuhtar=$DB->VeriGetir("muhtarbilgi","","","ORDER BY ID DESC",1);
				?>

	<div class="popular_category_area">
		<div class="container">
			<div class="row">
				<div style="background-color:#fffff0; " class="col-md-8 col-sm-12 col-xs-12">
					<div style="background-color:#fffff0; border-radius:20px; border-style:solid; border-color:#99badd;" class="row">
						
						<div style="background-color:#fffff0; " class="col-md-4">
							
							<div style="padding-left:30px; padding-right:30px; padding-top:25px; padding-bottom:15px; " class="container">
								<?php
								if($veriMuhtar!=false)
								{
									?>
									<img style="border-radius:30px;height:150px; width:130px;"
									src="<?=SITE?>admin/images/MuhtarFotograflar/<?=$veriMuhtar[0]["Resim"]?>" 
									alt="<?=$veriMuhtar[0]["Adsoyad"]?>"><br>
									
									<?php				
								}
								?>
							</div>
							
						</div>
						
						<div style="background-color:#fffff0; padding-top:25px;" class="col-md-8">
							<h2>MUHTARIMIZ</h2><hr>
							<h4><?=$veriMuhtar[0]["Adsoyad"]?></h4>
					
							<b>Görev Tarihi: </b><?=$veriMuhtar[0]["GorevBasTarih"]?>/
							<?=$veriMuhtar[0]["GorevSonTarih"]?>
															
							<style>
							   .yeni{
								color:black;
								}
								.yeni:hover{
									color:black;
								}
							</style>									
														
						</div>
						
					</div>
					
					
					<div style="background-color:#fffff0; " class="row">
						<div style="padding-top:25px;" class="col-md-12">
							<?php
							if($veriMuhtar!=false)
							{
							    ?>
							   <b>Biyografisi: </b><hr>
							   <p><?=$veriMuhtar[0]["Biyografisi"]?></p>
							   <?php
							}
							?>
						</div>
					</div>
				</div>
				
				<div style="background-color:#f8f4ff; padding-top:55px; height:400px;" class="col-md-4 col-sm-12 col-xs-12">
					<div class="popular_category_area">
					
					
						<h4>Eski Muhtarlarımız</h4><hr>
						<?php
							$veriMuhtar=$DB->VeriGetir("muhtarbilgi","","","ORDER BY ID DESC");
							if($veriMuhtar!=false)
							{
								for($i=0;$i<count($veriMuhtar);$i++)
								{
									?>
									<h5 style="color:brown"><?=$veriMuhtar[$i]["Adsoyad"]?></h5>
									<?=$veriMuhtar[$i]["GorevBasTarih"]?>/<?=$veriMuhtar[$i]["GorevSonTarih"]?><hr>
									<?php
								}
							}
					
						?>
					</div>
				</div>
			</div>
		</div>
	</div>