<div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h4 style="font-family:Montserrat, sans-serif">KÖŞE YAZILARIMIZ</h4>
								
				
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			
			
			<!------------------------------------------------------------------------------------------->
			
			<div style="height:85px;background-color:#f5f5dc;"><h2 style="text-align:center;padding-top:20px;"> Son Köşe Yazılarımız</h2> </div>
			 <section style="padding-top:10px;">
        <div class="container">
            <div style="text-align:center" class="row">
			<div class="col-lg-2 col-md-2 col-xs-0 col-sm-0"></div>
                <div  class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
				
				
                    <div class="blog_left_sidebar">
					<?php
					
					$veri=$DB->VeriGetir("kosemetinleri","","","ORDER BY ID DESC",5);
					if($veri!=false)
					{
						for($i=0;$i<count($veri);$i++)
						{
							?>
							<article class="blog_item">
								<div class="blog_item_img">
									<img class="card-img rounded-0" src="<?=SITE?>admin/images/KosemetinFotograflar/<?=$veri[$i]["Resim"]?>" alt="<?=$veri[$i]["Baslik"]?>">
									<a href="#" class="blog_item_date">
										<h3><?=$veri[$i]["Tarih"]?></h3>
										<p><?=$veri[$i]["SeflinkYazarad"]?></p>
									</a>
								</div>

								<div class="blog_details">
									<a class="d-inline-block" href="<?=SITE?>koseyazisi-detay/<?=$veri[$i]["ID"]?>">
										<h2><?=$veri[$i]["Baslik"]?></h2>
									</a>
									<p><?=mb_substr($veri[$i]["Metin"],0,538,"UTF-8")?>...</p>
									<ul class="blog-info-link">
										<li><a href="#"><i class="fa fa-user"></i>Köşe Yazısı</a></li>
										<li><a href="#"><i class="fa fa-comments"></i>0 Yorum </a></li>
									</ul>
								</div>
							</article>
							<?php
						}
					}
					
					?>
                       

                        

                   

                       


                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                


                    
            </div>
        </div>
    </section>
	