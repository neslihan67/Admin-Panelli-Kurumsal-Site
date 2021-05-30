        <div class="content-wrapper">  
         <div class="col-md-9 col-sm-12 col-xs-12">	<br>	
		   <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">SİTE AYARLARI</h3>
              </div>
			  
			  
			  
		<?php   
		if($_POST)
		{
			if((!empty($_POST["siteurl"])) && (!empty($_POST["anahtar"])) && (!empty($_POST["aciklama"])) && (!empty($_POST["baslik"]))
			&& (!empty($_POST["adres"])) && (!empty($_POST["telefon"]))
			&& (!empty($_POST["fax"])) && (!empty($_POST["mailll"])))
			{
				$siteurl=$DB->Filter($_POST["siteurl"],true);
				$anahtar=$DB->Filter($_POST["anahtar"]);
				$aciklama=$DB->Filter($_POST["aciklama"]);
				$baslik=$DB->Filter($_POST["baslik"]);
				
				$facebook=$DB->Filter($_POST["facebook"],true);
				$twitter=$DB->Filter($_POST["twitter"],true);
				$linkedin=$DB->Filter($_POST["linkedin"],true);
				$youtube=$DB->Filter($_POST["youtube"],true);
				$instagram=$DB->Filter($_POST["instagram"],true);
				
				$adres=$DB->Filter($_POST["adres"],true);
				$harita=$DB->Filter($_POST["harita"],true);
				
				$telefon=$DB->Filter($_POST["telefon"]);
				$telefon2=$DB->Filter($_POST["telefon2"]);
				$telefon3=$DB->Filter($_POST["telefon3"]);
				
				$fax=$DB->Filter($_POST["fax"]);
				$fax2=$DB->Filter($_POST["fax2"]);
				
				$mailll=$DB->Filter($_POST["mailll"]);
				$mailll2=$DB->Filter($_POST["mailll2"]);
				
				
			    $guncelle=$DB->SorguCalistir("UPDATE siteayarlar","SET Url=?,Anahtar=?,Aciklama=?, TarayiciAd=?, 
                Facebook=?, Twitter=?,Linkedin=?,Youtube=?,Instagram=?,Adres=?,HaritaAdres=?,
                Telefon=?,Telefon2=?,Telefon3=?,Fax=?,Fax2=?,Mail=?,Mail2=?,Tarih=?				
                WHERE ID=?",
			    array($siteurl,$anahtar,$aciklama,$baslik,$facebook,$twitter,$linkedin,$youtube,$instagram,
				$adres,$harita,$telefon,$telefon2,$telefon3,$fax,$fax2,$mailll,$mailll2,date("Y-m-d"),1),1);
						  
			
				if($guncelle!=false)
				{
					?>
					<div class="alert alert-success">İşleminiz Başarıyla Kaydedildi.</div>
					<meta http-equiv="refresh" content="2;url=<?=SITE?>site-ayarlari">
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
			<meta http-equiv="refresh" content="url=<?=SITE?>site-ayarlari">
			<?php
		}
		?>
			  
			  
			   
			  
               <form action="#" method="post" enctype="multipart/form-data">
			  
                <div class="card-body">
				
				 <div class="form-group">
                    <label>Site URL</label>
                     <input type="text" class="form-control" style="border-color:#f0dc82;" 
					 value="<?=$siteUrl?>" name="siteurl" >
                  </div>
				  
				   <div class="form-group">
                    <label>Site Anahtar Kelimeleri(SEO- Sitenizin internet aramalarında öne çıkaracak kelimeler)</label>
                    <input type="text" class="form-control"  placeholder="Anahtar kelimeleri giriniz." style="border-color:#f0dc82"
					value="<?=$siteAnahtar?>" name="anahtar" >
                  </div>
				  
				   <div class="form-group">
                    <label>Site Açıklaması</label>
                    <input type="text" class="form-control"  placeholder="Açıklama giriniz."style="border-color:#f0dc82"
					value="<?=$siteAciklama?>" name="aciklama" >
                  </div>
				  
				   <div class="form-group">
                    <label>Site Tarayıcı Adı</label>
                    <input type="text" class="form-control" placeholder="Tarayıcı Adı"style="border-color:#f0dc82"
					value="<?=$siteTarayiciAd?>" name="baslik" >
                  </div>
				  
				  <div class="form-group">
                    <label>Site Mail Adresi</label>
                    <input type="text" class="form-control" placeholder="Mail Adresiniz"style="border-color:#f0dc82"
					value="<?=$siteMail?>" name="maill" >
                  </div>
				 
				  
				 
				  
				
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" style="width:100%;" class="btn btn-primary">Değişklikleri Kaydet</button>
                </div>
              </form>
            </div>
		 </div>
		</div>
		</div>