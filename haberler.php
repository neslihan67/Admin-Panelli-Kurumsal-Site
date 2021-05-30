<div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h4 style="font-family:Montserrat, sans-serif ; padding-top:25px">HABERLER</h4>
								
				
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
   <div style="padding-top:30px;" class="container">
	 <?php
		
		$veriH=$DB->VeriGetir("haberler","","","ORDER BY ID DESC",15);
		if($veriH!=false)
		{
			for($i=0;$i<count($veriH);$i++)
			{
				?>
				<div  style="padding:10px 0;" class="section-top-border">
				   
				  <a href="<?=SITE?>haber-detay/<?=$veriH[$i]["ID"]?>">  <h3 style="text-align:center;" class="mb-30"><?=$veriH[$i]["Baslik"]?></h3></a>
				 
				   
					<div class="row">
						<div class="col-md-3">
							
							<a href="<?=SITE?>haber-detay/<?=$veriH[$i]["ID"]?>"> 
							<img src="<?=SITE?>admin/images/HaberFotograflar/<?=$veriH[$i]["Resim"]?>" alt="<?=$veriH[$i]["Baslik"]?>" class="img-fluid"></a>
						</div>
					
						<div class="col-md-9 mt-sm-20">
							<p><?=mb_substr(strip_tags(stripslashes($veriH[$i]["Aciklama"])),0,300,"UTF-8")."..."?></p>
						
						</div>
					</div>
				</div>
            <?php
			}
		}
		?>
			</div>