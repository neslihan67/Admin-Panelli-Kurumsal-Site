 <div class="content-wrapper">  
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Vefat Edenler Bilgi Giriş Sayfası</h1>
                </div>
                    
				<div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
                    <li class="breadcrumb-item active">Vefat Edenler</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
	
	<div class="container-fluid">
	    <div class="row" style="padding-right:10px;">
	        <div class="col-md-12">
				<a href="<?=SITE?>vefateden-liste" class="btn btn-success" style="float:right; margin-bottom:10px;"><i class="fas fa-book-open"> Vefat Edenler LİSTESİ</i></a>
		    </div>    
		</div>
    </div>
	
	
	
	<div class="col-md-10">
	
	
	
	
	
	
	<?php 
		if($_POST)
		{
			if(!empty($_POST["adsoyad"])&& (!empty($_POST["dogum"])) && (!empty($_POST["olum"]))) 
			{
				$adsoyad=$DB->Filter($_POST["adsoyad"]);
				$dogum=$DB->Filter($_POST["dogum"]);
				$olum=$DB->Filter($_POST["olum"]);
			
				 			  
				  
				  
				if(!empty($_FILES["resim"]["name"]))
				{
					$yukle=$DB->upload("resim","images/VefatedenFotograflar");
					if($yukle!=false)
					{
						$ekle=$DB->SorguCalistir("INSERT INTO vefatedenkimseler ","SET Adsoyad=?,DogumTarihi=?,VefatTarihi=?,Resim=?",
						array($adsoyad,$dogum,$olum,$yukle));
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
			        $ekle=$DB->SorguCalistir("INSERT INTO vefatedenkimseler ","SET Adsoyad=?,DogumTarihi=?,VefatTarihi=?",
					array($adsoyad,$dogum,$olum));
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
                        <label>Vefat Edenin Adı Soyadı</label> 
                        <input type="text" class="form-control" style="border-color:#f0dc82;" name="adsoyad" required="required" placeholder=" Ad Soyad Giriniz ...">
				    </div>
               
				
				<div class="form-group">
                        <label>Vefat Edenin Doğum Tarihi</label> 
                        <input type="date" class="form-control" style="border-color:#f0dc82;" name="dogum" required="required">
				    </div>
				
				
				<div class="form-group">
                        <label>Vefat Edenin Ölüm Tarihi</label> 
                        <input type="date" class="form-control" style="border-color:#f0dc82;" name="olum" required="required">
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