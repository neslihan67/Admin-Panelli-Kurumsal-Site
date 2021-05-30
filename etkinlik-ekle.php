 <div class="content-wrapper">  
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Etkinlik Ekleme Sayfası</h1>
                </div>
                    
				<div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
                    <li class="breadcrumb-item active">Etkinlik</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
	
	<div class="container-fluid">
	    <div class="row" style="padding-right:10px;">
	        <div class="col-md-12">
				<a href="<?=SITE?>etkinlik-liste" class="btn btn-success" style="float:right; margin-bottom:10px;"><i class="fas fa-book-open"> ETKİNLİK LİSTESİ</i></a>
		    </div>    
		</div>
    </div>
	
	
	
	<div class="col-md-10">
	
	
	
	
	
	
	<?php 
		if($_POST)
		{
			if(!empty($_POST["baslik"])&& (!empty($_POST["aciklama"]))) 
			{
				$baslik=$DB->Filter($_POST["baslik"]);
				$aciklama=$DB->Filter($_POST["aciklama"],true);
			
				 			  
				  
				  
				if(!empty($_FILES["resim"]["name"]))
				{
					$yukle=$DB->upload("resim","images/EtkinlikFotograflar");
					if($yukle!=false)
					{
						$ekle=$DB->SorguCalistir("INSERT INTO etkinlikler ","SET Baslik=?,Aciklama=?,Resim=?, Tarih=?",
						array($baslik,$aciklama,$yukle,date("Y-m-d")));
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
			        $ekle=$DB->SorguCalistir("INSERT INTO etkinlikler ","SET Baslik=?,Aciklama=?, Tarih=?",
					array($baslik,$aciklama,date("Y-m-d")));
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
                        <label>Etkinlik</label> 
                        <input type="text" class="form-control" style="border-color:#f0dc82;" name="baslik" required="required" placeholder="Etkinlik Adı Giriniz ...">
				    </div>
               
				
				
				
				
				
                   <div class="form-group">
					<label>Açıklama</label> 
					<textarea class="textarea" placeholder="Place some text here" name="aciklama" 
                     style="width: 100%; height:400px;  font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
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