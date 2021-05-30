			<div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h4 style="font-family:Montserrat, sans-serif">VİDEOLAR</h4>
								
				
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div  style="height:85px; background-color:#f5f5dc;margin-bottom:0px;" class="container-fluid">
			<h2 style="text-align:center;padding-top:20px; ">Mix Video Galeri</h2>
			</div>		
			
			<div class="popular_catagory_area" >
			
				<div class="container">
				
					<div class="row">
						
						
						<?php
						$veriH=$DB->VeriGetir("videogalerisi","","","ORDER BY ID DESC");
						if($veriH!=false)
						{
							for($i=0;$i<count($veriH);$i++)
							{
								?>
								<div class="col-lg-4 col-md-4 col-xs-12">
									<?=$veriH[$i]["Video"]?>
								</div>
								<?php
							}
						}
						?>
						
						
					</div>
					
				</div>
			
			</div>