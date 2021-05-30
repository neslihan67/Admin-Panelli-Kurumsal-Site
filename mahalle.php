<div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h4 style="font-family:Montserrat, sans-serif">MAHALLEMİZ</h4>
								
				
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			
			  <div style="padding-top:30px;" class="container">
				 <?php
					
					$veriH=$DB->VeriGetir("mahallebilgi","","","ORDER BY ID DESC");
					if($veriH!=false)
					{
						for($i=0;$i<count($veriH);$i++)
						{
							?>
							<div  style="padding:10px 0;" class="section-top-border">
							   
							  <h3 style="text-align:center;" class="mb-30"><?=$veriH[$i]["Baslik"]?></h3></a>
							 
							   
								<div class="row">
									<div class="col-md-3">
										
										
										<img src="<?=SITE?>admin/images/MahalleFotograflar/<?=$veriH[$i]["Resim"]?>" alt="<?=$veriH[$i]["Baslik"]?>" class="img-fluid">
									</div>
								
									<div class="col-md-9 mt-sm-20">
										<p><?=strip_tags(stripslashes($veriH[$i]["Aciklama"]))?></p>
									
									</div>
								</div>
							</div>
						<?php
						}
					}
					?>
			</div>