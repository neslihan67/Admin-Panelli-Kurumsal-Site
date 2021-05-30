 <div class="content-wrapper">  
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Sponsor Ekleme Sayfası</h1>
                </div>
                    
				<div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
                    <li class="breadcrumb-item active">Sponsorlar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
	
	<div class="container-fluid">
	    <div class="row" style="padding-right:10px;">
	        <div class="col-md-12">
				<a href="<?=SITE?>sponsor-liste" class="btn btn-success" style="float:right; margin-bottom:10px;"><i class="fas fa-book-open"> SPONSOR LİSTESİ</i></a>
		    </div>    
		</div>
    </div>
	
	
	
	<div class="col-md-10">
	
	
	
	
	
	
	<?php 
		if($_POST)
		{
			if(!empty($_POST["aciklama"] && (!empty($_POST["linkAdresi"])))) 
			{
				
				$aciklama=$DB->Filter($_POST["aciklama"],true);
				$linkAdresi=$DB->Filter($_POST["linkAdresi"],true);
			
				 			  
				  
				  
				if(!empty($_FILES["resim"]["name"]))
				{
					$yukle=$DB->upload("resim","images/SponsorFotograflar");
					if($yukle!=false)
					{
						$ekle=$DB->SorguCalistir("INSERT INTO sponsorlar ","SET Aciklama=?,LinkAdresi=?,Resim=?",
						array($aciklama,$linkAdresi,$yukle));
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
			        $ekle=$DB->SorguCalistir("INSERT INTO sponsorlar ","SET Aciklama=?,LinkAdresi=?",
					array($aciklama,$linkAdresi));
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
                        <label>Sponsor Adı</label> 
                        <input type="text" class="form-control" style="border-color:#f0dc82;" name="aciklama" required="required" placeholder="Sponsor Adı Giriniz ...">
				    </div>
               
			        <div class="form-group">
                        <label>Sponsorun Linki(internet sitesi url'si)</label> 
                        <input type="text" class="form-control" style="border-color:#f0dc82;" name="linkAdresi" required="required" placeholder="Sponsor url Giriniz ...">
				    </div>
				
				
               
                    <div class="form-group">
                        <label>Resim-Logo </label> 
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