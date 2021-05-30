			<div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h4 style="font-family:Montserrat, sans-serif">VEFAT EDENLER</h4>
								
				
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			
	<div style="padding-top:30px;padding-bottom:20px;" class="container">
		 <?php
			
			$veriH=$DB->VeriGetir("vefatedenkimseler","","","ORDER BY ID DESC",10);
			if($veriH!=false)
			{
				for($i=0;$i<count($veriH);$i++)
				{
					?>
					<div  style="padding:10px 0;" class="section-top-border">
					   
						<div class="row">
							<div class="col-md-3">
								
								 
								<img style="border-radius:15px; height:200px;" src="<?=SITE?>admin/images/VefatedenFotograflar/<?=$veriH[$i]["Resim"]?>" alt="<?=$veriH[$i]["Adsoyad"]?>" class="img-fluid">
							</div>
						
							<div class="col-md-9 mt-sm-20">
							
							     <h5>Adı Soyadı :<p><?=$veriH[$i]["Adsoyad"]?></p> </h5>
								<h5>DOĞUM TARİHİ : <p><?=$veriH[$i]["DogumTarihi"]?></p></h5>
								<h5>VEFAT TARİHİ : <p><?=$veriH[$i]["VefatTarihi"]?></p></h5>
							
							</div>
						</div>
					</div>
				<?php
				}
			}
			?>
	</div>