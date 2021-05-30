		
		<?php

		if(!empty($_GET["ID"]))
		{
			$ID=$DB->Filter($_GET["ID"]);
			$veri=$DB->VeriGetir("etkinlikler","WHERE ID=?",array($ID),"ORDER BY ID ASC",1);
	
		}
		?>  
			
			
			<div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h4 style="font-family:Montserrat, sans-serif"><?=$veri[0]["Baslik"]?></h4>
								
				
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			<div style="height:85px;background-color:#f5f5dc;margin-bottom:20px;"><h2 style="text-align:center;padding-top:20px; "> Etkinliğimiz</h2> </div>
			
			<div class="container">
            <div style="text-align:center" class="row">
			<div class="col-lg-2 col-md-2 col-xs-0 col-sm-0"></div>
                <div  class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
					<?php
					
					
					if($veri!=false)
					{
						
							?>
							<article class="blog_item">
								<div class="blog_item_img">
									<img class="card-img rounded-0" src="<?=SITE?>admin/images/EtkinlikFotograflar/<?=$veri[0]["Resim"]?>" alt="<?=$veri[0]["Baslik"]?>">
									<a class="blog_item_date">
										<h3><?=$veri[0]["Tarih"]?></h3>
										
									</a>
								</div>

								<div class="blog_details">
									<a class="d-inline-block" href="single-blog.html">
										<h2><?=$veri[0]["Baslik"]?></h2>
									</a>
									<p><?=$veri[0]["Aciklama"]?></p>
									<ul class="blog-info-link">
										<li><a ><i class="fa fa-user"></i>Görüntüleme</a></li>
										<li><a ><i class="fa fa-comments"></i>0 Yorum </a></li>
									</ul>
								</div>
							</article>
							<?php
						
					}
					
					?>
                       </div>
</div>
</div>