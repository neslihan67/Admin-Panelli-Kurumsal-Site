		<?php

		if(!empty($_GET["ID"]))
		{
			$ID=$DB->Filter($_GET["ID"]);
			$veri=$DB->VeriGetir("haberler","WHERE ID=?",array($ID),"ORDER BY ID ASC",1);
	
		}
		?>  

            <div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                  <h3> <?=stripslashes($veri[0]["Baslik"])?></h3>
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
							<img style="width:100%;height:250px; border-radius:10px;" src="<?=SITE?>admin/images/HaberFotograflar/<?=$veri[0]["Resim"]?>" alt="<?=$veri[0]["Baslik"]?>">
					   </div>
					</div>  
						
					
					
						  
				</div>	
			    <div class="col-md-9">
			           <h2 style="text-align:center;" ><?=$veri[0]["Baslik"]?></h2>
			           <p><?=$veri[0]["Aciklama"]?></p>
		
		     	</div>
			
		    </div>
	    </div>
	</div>