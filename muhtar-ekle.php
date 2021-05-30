 <div class="content-wrapper">  
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Muhtar Ekleme Formu</h1>
                </div>
                    
				<div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
                    <li class="breadcrumb-item active">Muhtar Ekle</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
	
	<div class="container-fluid">
	    <div class="row" style="padding-right:10px;">
	        <div class="col-md-12">
				<a href="<?=SITE?>muhtar-liste" class="btn btn-success" style="float:right; margin-bottom:10px;"><i class="fas fa-book-open"> MUHTAR LİSTESİ</i></a>
		    </div>    
		</div>
    </div>
	
	
	
	<div class="col-md-10">
	
	
	
	
	
	
	<?php 
		  if($_POST)
		  {
			  if(!empty($_POST["adsoyad"])&& (!empty($_POST["baslama"])) && (!empty($_POST["adres"])) 
			  && (!empty($_POST["telefon"])) ) 
			  {
				  $adsoyad=$DB->Filter($_POST["adsoyad"]);
				  $baslama=$DB->Filter($_POST["baslama"]);
				  $bitis=$DB->Filter($_POST["bitis"]);
				  $biografi=$DB->Filter($_POST["biografi"],true);
				  $adres=$DB->Filter($_POST["adres"]);
				  $telefon=$DB->Filter($_POST["telefon"]);
				  $maill=$DB->Filter($_POST["maill"]);
				  $kullaniciAdi=$DB->Filter($_POST["kullaniciAdi"]);
				  $sifre=$DB->Filter($_POST["sifre"]);
				  $sifre=md5($sifre);
				 			  
				  
				  
				  if(!empty($_FILES["resim"]["name"]))
				  {
					  $yukle=$DB->upload("resim","images/MuhtarFotograflar");
					 
					  if($yukle!=false)
						  
					  
					  {
						  $ekle=$DB->SorguCalistir("INSERT INTO muhtarbilgi ","SET Adsoyad=?,KullaniciAdi=?,Sifre=?,GorevBasTarih=?,
						  GorevSonTarih=?,Biyografisi=?, Resim=?,  Adres=? ,Telefon=?,Mail=?",
						  array($adsoyad,$kullaniciAdi,$sifre,$baslama,$bitis,$biografi,$yukle,$adres,$telefon,$maill));
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
			              $ekle=$DB->SorguCalistir("INSERT INTO muhtarbilgi ","SET Adsoyad=?,KullaniciAdi=?,Sifre=?,GorevBasTarih=?,
						  GorevSonTarih=?,Biyografisi=?,  Adres=? ,Telefon=?,Mail=?",
						  array($adsoyad,$kullaniciAdi,$sifre,$baslama,$bitis,$biografi,$adres,$telefon,$maill));
				  }
				  if($ekle!=false)
				  {
					  ?>
					  <div class="alert alert-success">İşleminiz Başarıyla Kaydedildi.</div>
					  <?php
				  }
				  else
				  {
					  ?><div class="alert alert-danger">İşlemini Sırasında Bir Sorunla Karşılaşıldı.Lütfen Daha Sonra Tekrar Deneyiniz.</div>
					  <?php
				  } 
			  }
			  else
			  {?>
				  <div class="alert alert-danger">Boş Bıraktığınız Alanları Doldurunuz.</div>
			  <?php
			  }
		  }

			  ?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	    <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">KAYIT FORMU</h3>
            </div>
	        <form action="#" method="post" enctype="multipart/form-data">
		 
                <div class="card-body">
                       
                
                    <div class="form-group">
                        <label>Ad Soyad</label> 
                        <input type="text" class="form-control" style="border-color:#f0dc82;" name="adsoyad" required="required" placeholder="Tam Adınızı Giriniz ...">
				    </div>
               
				<div class="form-group">
                        <label>Kullanıcı Adı Belirleyiniz.</label> 
			            <input type="text" class="form-control" style="border-color:#f0dc82;" name="kullaniciAdi" required="required" placeholder="Giriniz..."
						>
                    </div>

					<div class="form-group">
					
                        <label>Şifre Belirleyiniz</label> 
			            <input type="text" class="form-control" style="border-color:#f0dc82;" name="sifre" required="required" placeholder="Giriniz..."
						>
                    </div>
					
				
				
				
				
                    <div class="form-group">
                        <label>Telefon</label> 
			            <input type="text" class="form-control" style="border-color:#f0dc82;" name="telefon" required="required" placeholder="Telefon numarasını giriniz.">
                    </div>
				

				
				
				
				
                    <div class="form-group">
                        <label>Mail</label> 
			            <input type="text" class="form-control" style="border-color:#f0dc82;" name="maill" placeholder="Mail Adresinizi giriniz...">
                    </div>
               
				
				
				
				
				
                    <div class="form-group">
                        <label>Adres</label> 
			            <input type="text" class="form-control" style="border-color:#f0dc82;" name="adres" required="required" placeholder="Adres Giriniz...">
                    </div>
				
				
				
                    
				
				
				
				
				
                    <div class="form-group">
                        <label>Göreve Başlama Tarihi</label> 
				        <input type="date" class="form-control" style="border-color:#f0dc82;" name="baslama" required="required" placeholder="Telefonuzu Giriniz...">
                    </div>
				
  
  
  
				
				
				
                    <div class="form-group">
                        <label>Görev Bitiş Tarihi</label> 
				        <input type="date" class="form-control" style="border-color:#f0dc82;" name="bitis">
                    </div>
			
             
			 
			 
			        <div class="form-group">
                        <label>Biyografisi</label>    
                        <textarea class="textarea" name="biografi"
						style="width: 100%; height:100px; font-size:20px; line-height : 10px; border: 1px solid #ddddddd; padding:10px;"></textarea>
						
                    </div>
				
				
				
            
               
                    <div class="form-group">
                        <label>Resim</label> 
				        <input type="file" class="form-control" style="border-color:#f0dc82;" name="resim" placeholder="Resim Seçiniz">
                    </div>
				
             
			 
		
             
			   
			        <div class="col-md-10">
                        <div class="form-group">
                           <button type="submit" style="width:100%;"class="btn btn-block btn-primary btn-lg">Kaydet</button>
				        </div>
			        </div>
			   
			  
			
		        </div> 
	        </form>
    	</div>
	</div>
	
	
 </div>		