    <div class="content-wrapper">  
        <div class="col-md-9 col-sm-12 col-xs-12">	<br>	
		    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">MAHALLE BİLGİLERİ</h3>
              </div>
			  
			  
			  
		<?php   
		if($_POST)
		{
			if((!empty($_POST["baslik"])) && (!empty($_POST["aciklama"])))
			{
				$baslik=$DB->Filter($_POST["baslik"]);
				$aciklama=$_POST["aciklama"];
		
				$dosya=$mahalleResim;
				

			    if(!empty($_FILES["resim"]["name"]))
				{
					$yukle=$DB->upload("resim","images/MahalleFotograflar");
					error_reporting(0); 
					ini_set('display_errors',0);
					$path="images/MahalleFotograflar/".$dosya;
					
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
						$guncelle=$DB->SorguCalistir("UPDATE mahallebilgi","SET Baslik=?,Aciklama=?,Resim=? WHERE ID=?",
			            array($baslik,$aciklama,$yukle,1),1);
						
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
			        $guncelle=$DB->SorguCalistir("UPDATE mahallebilgi","SET Baslik=?,Aciklama=? WHERE ID=?",
			        array($baslik,$aciklama,1),1);
						  
				}
			
				if($guncelle!=false)
				{
					?>
					<div class="alert alert-success">İşleminiz Başarıyla Kaydedildi.</div>
					<meta http-equiv="refresh" content="2;url=<?=SITE?>mahallebilgi">
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
			<meta http-equiv="refresh" content="url=<?=SITE?>mahallebilgi">
			<?php
		}
		?>
			  
			  
			   
			  
               <form action="#" method="post" enctype="multipart/form-data">
			  
                <div class="card-body">
				
					<div class="form-group">
						<label>Mahalle/Semt/Köy Adı</label>
						<input type="text" class="form-control" style="border-color:#f0dc82;" 
						value="<?=$mahalleBaslik?>" name="baslik" >
                    </div>
				  
				  
				    <div class="form-group">
						<label>Mahalle Açıklaması</label> 
						<textarea class="textarea" placeholder="Place some text here" name="aciklama" 
						style="width: 100%; height:400px;  font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
						<?=$mahalleAciklama?></textarea>
					</div>
				   				  
                    	<div class="row">
						<label style="background-color:pink; width:100%;"><?=$mahalleResim?></label> 
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
					 
                       <img style="width:100%; height:auto;" src="<?=SITE?>images/MahalleFotograflar/<?=$mahalleResim?>">
                    </div></div>	</div>
					
				
                    <div class="form-group">
                        <label>Harita Resmi</label> 
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
	