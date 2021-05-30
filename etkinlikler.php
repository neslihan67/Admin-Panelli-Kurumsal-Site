			<div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h4 style="font-family:Montserrat, sans-serif">ETKİNLİKLERİMİZ</h4>
								
				
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
	<div style="height:85px;background-color:#f5f5dc;margin-bottom:20px;"><h2 style="text-align:center;padding-top:20px; "> Etkinlikler</h2> </div>
			
		<div class="container">
            <div style="text-align:center" class="row">
				
					<?php
						$veri=$DB->VeriGetir("etkinlikler","","","ORDER BY ID DESC");
						if($veri!=false)
						{
							for($i=0;$i<count($veri);$i++)
							{
								?>
								<div  class="col-xl-4 col-lg-4 col-md-4 col-xs-12 col-sm-12">
									<div class="blog_left_sidebar">
										<article class="blog_item">
											<div class="blog_item_img">
												<a href="<?=SITE?>etkinlik-detay/<?=$veri[$i]["ID"]?>" >
												<img style ="height:220px;" class="card-img rounded-0" src="<?=SITE?>admin/images/EtkinlikFotograflar/<?=$veri[$i]["Resim"]?>" 
												     alt="<?=$veri[$i]["Baslik"]?>"></a>
													
													<a class="blog_item_date">
														<h4><?=$veri[$i]["Tarih"]?></h4>
													</a>
											</div>
											
											<div class="blog_details">
												<a href="<?=SITE?>etkinlik-detay/<?=$veri[$i]["ID"]?>" >
												<h2><?=$veri[$i]["Baslik"]?></h2></a>
												<p><?=mb_substr($veri[$i]["Aciklama"],0,300,"UTF-8")?>...</p>
											</div>
										</article>    
									</div>
								</div>  
								<?php
							}
						}
					?>
					
                       

                   

                   

                       


                   


                
            </div>
        </div>