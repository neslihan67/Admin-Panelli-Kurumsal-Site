    <div class="content-wrapper">  
        <div class="col-md-9 col-sm-12 col-xs-12">	<br>	
		    <div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">HİZMET YERİ BİNASI BİLGİLERİ</h3>
				</div>
			  
			  
			  
		<?php   
		if($_POST)
		{
			if((!empty($_POST["adres"])) && (!empty($_POST["telefon"])) && (!empty($_POST["mailll"])) && (!empty($_POST["muhtarlikAdi"])))
			{
				$muhtarlikAdi=$DB->Filter($_POST["muhtarlikAdi"]);
				$adres=$DB->Filter($_POST["adres"]);
				$telefon=$DB->Filter($_POST["telefon"]);
				$mailll=$DB->Filter($_POST["mailll"]);
				$fax=$DB->Filter($_POST["fax"]);
				
			
				
				$youtube=$_POST["youtube"];
				
				$instagram=$_POST["instagram"];
				
				$twitter=$_POST["twitter"];
				
				$facebook=$_POST["facebook"];
				
				$linkedin=$_POST["linkedin"];
				
		
				$dosya=$hizmetyeriResim;
				

			    if(!empty($_FILES["resim"]["name"]))
				{
					$yukle=$DB->upload("resim","images/HizmetyeriFotograflar");
					error_reporting(0); 
					ini_set('display_errors',0);
					$path="images/HizmetyeriFotograflar/".$dosya;
					
					if(file_exists($path))
					{
						unlink($path);
                    
					}
					else
					{
						echo "bu isimde bir dosya yok:";
					}
					if($yukle!=false)
					{
						$guncelle=$DB->SorguCalistir("UPDATE muhtarlikbilgi","SET MuhtarlikAdi=?,Adres=?,Telefon=?,Resim=?,Mail=?,Fax=?,Youtube=?,Twitter=?,Facebook=?,Linkedin=?,Instagram=? WHERE ID=?",
			            array($muhtarlikAdi,$adres,$telefon,$yukle,$mailll,$fax,$youtube,$twitter,$facebook,$linkedin,$instagram,1),1);
						
					}
					
					else
					{
						?>
						<div class="alert alert-info">Resim Yükleme işleminiz Başarısız</div>
						<?php
					}
					
					

				}
				else
				{
			        $guncelle=$DB->SorguCalistir("UPDATE muhtarlikbilgi","SET MuhtarlikAdi=?,Adres=?,Telefon=?,Mail=?,Fax=?,Youtube=?,Twitter=?,Facebook=?,Linkedin=?,Instagram=? WHERE ID=?",
			        array($muhtarlikAdi,$adres,$telefon,$mailll,$fax,$youtube,$twitter,$facebook,$linkedin,$instagram,1),1);
						  
				}
			
				if($guncelle!=false)
				{
					?>
					<div class="alert alert-success">İşleminiz Başarıyla Kaydedildi.</div>
					<meta http-equiv="refresh" content="2;url=<?=SITE?>hizmetyeri">
					<?php
				}
				else
				{
					?>
					<div class="alert alert-danger">İşlemini Sırasında Bir Sorunla Karşılaşıldı.Lütfen Daha Sonra Tekrar Deneyiniz.</div>
					<?php
				} 
		    }
			else
			{
				?>
				<div class="alert alert-danger">Boş Bıraktığınız Alanları Doldurunuz.</div>
			    <?php
			}
		}
		
	    else
		{
			?>
			<meta http-equiv="refresh" content="url=<?=SITE?>hizmetyeri">
			<?php
		}
		?>
			  
			  
			   
			  
                <form action="#" method="post" enctype="multipart/form-data">
				    <div class="card-body">
					
                        <div class="form-group">
							<label>Muhtarlık Adı</label>
							<input type="text" class="form-control" style="border-color:#f0dc82;" value="<?=$hizmetyerimuhtarlikAdi?>" name="muhtarlikAdi" >
						</div>
					
						<div class="form-group">
							<label>Hizmetyeri Adresi</label>
							<input type="text" class="form-control" style="border-color:#f0dc82;" value="<?=$hizmetyeriAdres?>" name="adres" >
						</div>
						
						
					    <div class="form-group">
							<label>Telefon</label>
							<input type="text" class="form-control" style="border-color:#f0dc82;" value="<?=$hizmetyeriTelefon?>" name="telefon" >
						</div>
						
						
						<div class="form-group">
							<label>Fax Numarası</label>
							<input type="text" class="form-control" style="border-color:#f0dc82;" value="<?=$hizmetyeriFax?>" name="fax" >
						</div>
						
						<div class="form-group">
							<label>Mail</label>
							<input type="email" class="form-control" style="border-color:#f0dc82;" value="<?=$hizmetyeriMail?>" name="mailll" >
						</div>
						
						<div class="form-group">
							<label>Harita URL Adresi</label> 
							 <?=$hizmetyeriHarita?>
						</div>
						
						
						<div class="form-group">
							<label>Facebook</label>
							<input type="text" class="form-control" style="border-color:#f0dc82;" value="<?=$hizmetyeriFacebook?>" name="facebook" >
						</div>
						
						<div class="form-group">
							<label>Twitter</label>
							<input type="text" class="form-control" style="border-color:#f0dc82;" value="<?=$hizmetyeriTwitter?>" name="twitter" >
						</div>
						
						<div class="form-group">
							<label>Linkedin</label>
							<input type="text" class="form-control" style="border-color:#f0dc82;" value="<?=$hizmetyeriLinkedin?>" name="linkedin" >
						</div>
						
						<div class="form-group">
							<label>Youtube</label>
							<input type="text" class="form-control" style="border-color:#f0dc82;" value="<?=$hizmetyeriYoutube?>" name="youtube" >
						</div>
						
						<div class="form-group">
							<label>Instagram</label>
							<input type="text" class="form-control" style="border-color:#f0dc82;" value="<?=$hizmetyeriInstagram?>" name="instagram" >
						</div>
						
						<div class="row">
							<label style="background-color:pink; width:100%;"><?=$hizmetyeriResim?></label> 
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group">
									<img style="width:100%; height:auto;" src="images/HizmetyeriFotograflar/<?=$hizmetyeriResim?>">
								</div>
							</div>
						</div>
				  
						
						<div class="form-group">
							<label>Harita Resmi</label> 
							<input type="file" class="form-control" style="border-color:#f0dc82;" name="resim" placeholder="Resim Seçiniz">
						</div>
						
						
					</div>
                    
					
					<div class="card-footer">
					    <button type="submit" style="width:100%; border-radius:0px;" class="btn btn-primary">Değişiklikleri Kaydet</button>
					</div>
				</form>
			   
			   

			  
			  
            </div>
		</div>
	</div>
	
	
	
	
	
	
