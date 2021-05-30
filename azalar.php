			<div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h4 style="font-family:Montserrat, sans-serif width:100%;">AZALARIMIZ</h4>
								
				
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			
			<!--_____________________________________________________________________________________________________________________________________________-->
		
		
			<div class="popular_category_area">
				<div class="container" style="padding:50px; 0px;">
					<div class="row" style="" >
						<?php
						$veriAza=$DB->VeriGetir("azabilgi","","","ORDER BY ID DESC",12);
						if($veriAza!=false)
						{
							for($i=0;$i<count($veriAza);$i++)
							{
								?> 
								
									<div class="col-md-5 col-sm-12 col-xs-12" style="height:200px; ">
										<img src="<?=SITE?>admin/images/AzaFotograflar/<?=$veriAza[$i]["Resim"]?>"
										alt="<?=$veriAza[$i]["Adsoyad"]?>" style="width:auto; height:100%; max-midth:100px; border-radius:20px; ">
									</div>
								
							
									<div class="col-md-7 col-sm-12 col-xs-12" style="height:200px; margin-bottom:15px;"><hr>
										<h4><?=$veriAza[$i]["Adsoyad"]?></h4>
										
										<p>
										<b>Görev Tarihi: </b><br><?=$veriAza[$i]["GorevBasTarih"]?>/<?=$veriAza[$i]["GorevSonTarih"]?><br>
										<b>Meslek: </b><br><?=$veriAza[$i]["Meslek"]?>
										</p><hr>
									</div>
									
							
									
									
								
								
							
								
										
									<?php
							}
						}	
						?>
						
						
					</div>
				</div>
			</div>			
		
		
		
		
	
		
			