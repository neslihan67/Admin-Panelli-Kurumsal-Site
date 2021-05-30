 <div class="content-wrapper">  
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Aza Ekleme Formu</h1>
                </div>
                    
				<div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
                    <li class="breadcrumb-item active">Aza Ekle</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
	
	<div class="container-fluid">
	    <div class="row" style="padding-right:10px;">
	        <div class="col-md-12">
				<a href="<?=SITE?>aza-liste" class="btn btn-success" style="float:right; margin-bottom:10px;"><i class="fas fa-book-open"> AZA LİSTESİ</i></a>
		    </div>    
		</div>
    </div>
	
	
	
	<div class="col-md-10">
	
	
	
	
	
	
	<?php 
		  if($_POST)
		  {
			  if(!empty($_POST["adsoyad"])&& (!empty($_POST["baslama"])) && (!empty($_POST["adres"])) 
			  && (!empty($_POST["meslek"])) &&  (!empty($_POST["telefon"])) ) 
			  {
				  $adsoyad=$DB->Filter($_POST["adsoyad"]);
				  $baslama=$DB->Filter($_POST["baslama"]);
				  $bitis=$DB->Filter($_POST["bitis"]);
				  $adres=$DB->Filter($_POST["adres"]);
				  $meslek=$DB->Filter($_POST["meslek"]);
				  $telefon=$DB->Filter($_POST["telefon"]);
				  $maill=$DB->Filter($_POST["maill"]);
				 			  
				  
				  
				  if(!empty($_FILES["resim"]["name"]))
				  {
					  $yukle=$DB->upload("resim","images/AzaFotograflar");
					 
					  if($yukle!=false)
						  
					  
					  {
						  $ekle=$DB->SorguCalistir("INSERT INTO azabilgi ","SET Adsoyad=?,Resim=?, GorevBasTarih=?, 
						  GorevSonTarih=?, Adres_ikamet=? ,Meslek=?, Telefon=?,Mail=?, Tarih=?",
						  array($adsoyad,$yukle,$baslama,$bitis,$adres,$meslek,$telefon,$maill,date("Y-m-d")));
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
			         $ekle=$DB->SorguCalistir("INSERT INTO azabilgi ","SET Adsoyad=?,GorevBasTarih=?, 
						  GorevSonTarih=?, Adres_ikamet=? ,Meslek=?, Telefon=?,Mail=?, Tarih=?",
						  array($adsoyad,$baslama,$bitis,$adres,$meslek,$telefon,$maill,date("Y-m-d")));
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
                        <label>Meslek</label> 
	                    <input type="text" class="form-control" style="border-color:#f0dc82;" name="meslek" required="required" placeholder=" Meslek Giriniz ...">
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