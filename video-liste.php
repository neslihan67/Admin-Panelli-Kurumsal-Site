	
	<div class="content-wrapper">
	    <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Video Listesi</h1>
                    </div>
                    
					<div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Videolar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
	
	
	
        <div class="container-fluid">
		    <div class="row">
	            <div class="col-md-12">
				
	            <a href="<?=SITE?>video-ekle" class="btn btn-success" style="float:right; margin-bottom:10px;"><i class="fa fa-plus"> YENİ EKLE</i></a>
		        
				</div>
		    </div>
		</div>	
		
		
		<div style="margin-left:10px;" class="container">
			<div class="row">
				
				
					<?php
					$veri=$DB->VeriGetir("videogalerisi","","","ORDER BY ID ASC");
					if($veri!=false)
					{
						for($i=0;$i<count($veri);$i++)
					   {
						?>
						<div style="text-align:center;" class="col-md-3 col-sm-6 col-xs-6">
						<hr>
							<div style="text-align:center;" class="row">
								<a href="<?=SITE?>video-duzenle/<?=$veri[$i]["ID"]?>" style="text-align:center;" class="btn btn-warning btn-sm">Güncelle</a>
								<a href="<?=SITE?>video-sil/<?=$veri[$i]["ID"]?>" style="text-align:center;" class="btn btn-danger btn-sm">...Sil...</a>
							</div>
							
							<div style="padding:5px;" class="row">
								<?=$veri[$i]["Video"]?>
							</div>
							
							<div style="text-align:center;" class="row">
								<h5  style="text-align:center;" ><?=$veri[$i]["Aciklama"]?></h5>
							</div>	
								
							<div style="text-align:center;" class="row">	
								<h5  style="text-align:center;" ><?=$veri[$i]["Tarih"]?></h5>
							</div>
						
						</div> 
						
						<?php
					    }
					}
					
					
					?>
			
			
			</div>
			
		</section>	
                  
                
			
			

	</div>