		<?php

		if(!empty($_GET["ID"]))
		{
			$ID=$DB->Filter($_GET["ID"]);
			$veri=$DB->VeriGetir("muhtarbilgi","WHERE ID=?",array($ID),"ORDER BY ID ASC",1);
	
		}
		?>  

            <div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                  <h3> <?=stripslashes($veri[0]["Adsoyad"])?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
<!------------------------------------------------------------------------------------------------------>

	
	<div class="explorer_europe" style="margin-top:50px;"> 
		<div class="container"><hr><hr>
            <div class="row">
				<div class="col-md-3">
			        <div class="single_team">
					   <div style="padding-top:50px;" class="team_thumb">
							<img style="width:100%;height:250px; border-radius:10px;" src="<?=SITE?>admin/images/MuhtarFotograflar/<?=$veri[0]["Resim"]?>" alt="<?=$veri[0]["Adsoyad"]?>">
					   </div>
					</div>  
						
						<h4><?=$veri[0]["Adsoyad"]?><h4>
						<h4 style="background-color:#f0e68c" ><?=$veri[0]["GorevBasTarih"]?>/	<?=$veri[0]["GorevSonTarih"]?></h4>
					
						  
						<h4><?=$veri[0]["Telefon"]?></h4>
						<h4><?=$veri[0]["Mail"]?></h4>
						
						
				 
                                           
			
			</div>	
			<div class="col-md-9">
			<h2 style="text-align:center;" >BİYOGRAFİ</h2>
			 <p><?=$veri[0]["Biyografisi"]?></p>
		
			</div>
			
		  </div>
	   </div>
	</div>