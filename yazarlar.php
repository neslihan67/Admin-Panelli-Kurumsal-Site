<div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h4 style="font-family:Montserrat, sans-serif">YAZARLARIMIZ</h4>
								
				
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
<!------------------------------------------------------------------------------------------------------------------->

	
		
		
		
		<div  style="padding-left:0px; padding-right:0px; " class="container-fluid">
		 <div style=" background-color:#f5f5dc; height:70px; width:100%;" class="col-12"></div>
	    	<div style="background-color:#f5f5dc;"	 class="col-12">
			
			  <section style="padding-top:0px;padding-bottom:5px; " class="blog_area single-post-area section-padding">
		        <div style=";padding-left:20px;padding-right:20px" class="row">
		        
             
				  <?php
				   $veriMuhtar=$DB->VeriGetir("koseyazarbilgi","","","ORDER BY ID DESC",6);
				   if($veriMuhtar!=false)
					{
						for($i=0;$i<count($veriMuhtar);$i++)
						{
							?> 
						<div style=";padding-left:2px;padding-right:2px" class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						  <div style="margin-top: 10px; background-color:white;"  class="blog-author">
							<div style="text-align:center;" class="mediar">
						
                             <img style="border-radius:30px;height:150px; width:150px;" src="<?=SITE?>admin/images/YazarFotograflar/<?=$veriMuhtar[$i]["Resim"]?>" alt="<?=$veriMuhtar[$i]["Adsoyad"]?>"><br>
							 </div> 
                              <div class="media-body">
                              <hr>
									<h4><?=$veriMuhtar[$i]["Adsoyad"]?></h4><hr>
                        
								 <p>
									
									<style>
									.yeni{
										color:black;
									}
									.yeni:hover{
										color:black;
									}
									</style>
									<b>Biyografisi: </b><a href="<?=SITE?>yazar-detay/<?=$veriMuhtar[$i]["ID"]?>"><button class="btn btn-warning"> ->> OKU <<-</button></a><hr>
									
									<b>Telefon: </b><?=$veriMuhtar[$i]["Telefon"]?><hr>
									<b>Mail: </b><?=$veriMuhtar[$i]["Mail"]?>
						
								  </p>
							   </div>          
						   
					      </div>
				 	    </div>
			    	<?php
						}
					
					}	
				
					?>
        
                </div>        
		    </section>
		
		
		  </div>
		</div>
		
	
		
			
            			
			<!--_____________________________________________________________________________________________________________________________________________-->
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			