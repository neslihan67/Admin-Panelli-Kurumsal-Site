    <div class="content-wrapper">  
        <div class="col-md-9 col-sm-12 col-xs-12">	<br>	
		    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">LOGO BİLGİLERİ</h3>
              </div>
			  
			  
			  
		<?php   
		if($_POST)
		{
			if(!empty($_POST["baslik"])) 
			{
				$baslik=$DB->Filter($_POST["baslik"]);
				
		
				$dosya=$logoResim;
				

			    if(!empty($_FILES["resim"]["name"]))
				{
					$yukle=$DB->upload("resim","images/SiteLogo");
					error_reporting(0); 
					ini_set('display_errors',0);
					$path="images/SiteLogo/".$dosya;
					
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
						$guncelle=$DB->SorguCalistir("UPDATE logo","SET Aciklama=?,Resim=? WHERE ID=?",
			            array($baslik,$yukle,1),1);
						
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
			        $guncelle=$DB->SorguCalistir("UPDATE logo","SET Aciklama=? WHERE ID=?",
			        array($baslik,1),1);
						  
				}
			
				if($guncelle!=false)
				{
					?>
					<div class="alert alert-success">İşleminiz Başarıyla Kaydedildi.</div>
					<meta http-equiv="refresh" content="2;url=<?=SITE?>logoAyarlari">
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
			<meta http-equiv="refresh" content="url=<?=SITE?>logoAyarlari">
			<?php
		}
		?>
			  
			  
			   
			  
               <form action="#" method="post" enctype="multipart/form-data">
			  
                <div class="card-body">
				
					<div class="form-group">
						<label>Logo Başlik Giriniz</label>
						<input type="text" class="form-control" style="border-color:#f0dc82;" 
						value="<?=$logoBaslik?>" name="baslik" >
                    </div>
				  
				  
				   	<div class="row">
						<label style="background-color:pink; width:100%;"><?=$logoResim?></label> 
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
					 
                       <img style="width:100%; height:auto;" src="<?=SITE?>images/SiteLogo/<?=$logoResim?>">
                    </div></div>	</div>
				   		
				
                    <div class="form-group">
                        <label>Logo Resimini Değiştirmek İçin Seçiniz</label> 
				        <input type="file" class="form-control" style="border-color:#f0dc82;" name="resim" placeholder="Resim Seçiniz">
                    </div>
					

					<div class="card-footer">
						<button type="submit" style="width:100%;" class="btn btn-primary">Değişiklikleri Kaydet</button>
                    </div>
					

                <!-- /.card-body -->
            </div>
               
              </form>
            </div>
		 </div>
	</div>
	