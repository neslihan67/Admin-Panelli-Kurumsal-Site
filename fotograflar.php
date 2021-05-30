<div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h4 style="font-family:Montserrat, sans-serif">FOTOĞRAFLAR...</h4>
								
				
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
					
			<div  style="height:85px; background-color:#f5f5dc;margin-bottom:0px;" class="container-fluid">
			<h2 style="text-align:center;padding-top:20px; ">Mix Galeri</h2>
			</div>		
			
			
		  <div style="padding-top:0px; margin-top:0px;" class="container">				
					
			<div style="padding-top:10px;" class="popular_catagory_area">
			<div style="height:85px;background-color:#f5f5dc;margin-bottom:20px;"><h2 style="text-align:center;padding-top:20px; "> Haber Galeri</h2> </div>
			
			
				<div class="row">
					
					<?php
					$veriH=$DB->VeriGetir("haberler","","","ORDER BY ID DESC");
					if($veriH!=false)
					{
						for($i=0;$i<count($veriH);$i++)
						{
							?>
							<div  style="padding-bottom:3px;" class="col-md-3 col-sm-12 col-xs-12">
								<img src="<?=SITE?>admin/images/HaberFotograflar/<?=$veriH[$i]["Resim"]?>" alt="<?=$veriH[$i]["Baslik"]?>" class="img-fluid">
							</div>
							<?php
					
						}
					}
					?>
					
					
				
			</div>		
					
		<div style="height:75px;background-color:#f5f5dc;margin-bottom:20px;"><h2 style="text-align:center;padding-top:20px; "> Fotoğraf Galeri</h2> </div>
	
		
				<div class="row">
					<?php
					$veriH=$DB->VeriGetir("resimgalerisi","","","ORDER BY ID DESC");
					if($veriH!=false)
					{
						for($i=0;$i<count($veriH);$i++)
						{
							?>
							<div style="padding-bottom:3px;" class="col-md-3 col-sm-12 col-xs-12">
								<img style="height:auto; width:100%;" src="<?=SITE?>admin/images/Fotograflar/<?=$veriH[$i]["Resim"]?>" alt="<?=$veriH[$i]["Baslik"]?>" class="img-fluid">
							</div>
							<?php
					
						}
					}
					?>
					
					
				
			 
		
			
			
			
			
		      </div>
			  
			<div style="height:85px;background-color:#f5f5dc;margin-bottom:20px;"><h2 style="text-align:center;padding-top:20px; "> Etkinlik Galeri</h2> </div>		
			
				<div class="row">
					
					<?php
					$veriE=$DB->VeriGetir("etkinlikler","","","ORDER BY ID DESC");
					if($veriE!=false)
					{
						for($i=0;$i<count($veriE);$i++)
						{
							?>
							<div  style="padding-bottom:3px;" class="col-md-4  col-sm-12 col-xs-12">
								<img style="height:200px; width:100%" src="<?=SITE?>admin/images/EtkinlikFotograflar/<?=$veriE[$i]["Resim"]?>" alt="<?=$veriE[$i]["Baslik"]?>" class="img-fluid">
							</div>
							<?php
					
						}
					}
					?>
					
			
			
			</div>
		  
		  </div>
		</div>







