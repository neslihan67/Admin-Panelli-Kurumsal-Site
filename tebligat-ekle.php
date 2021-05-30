 <div class="content-wrapper">  
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tebligat Ekleme Sayfası</h1>
                </div>
                    
				<div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
                    <li class="breadcrumb-item active">Tebligat</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
	
	<div class="container-fluid">
	    <div class="row" style="padding-right:10px;">
	        <div class="col-md-12">
				<a href="<?=SITE?>tebligat-liste" class="btn btn-success" style="float:right; margin-bottom:10px;"><i class="fas fa-book-open"> TEBLİGAT LİSTESİ</i></a>
		    </div>    
		</div>
    </div>
	
	
	
	<div class="col-md-10">
	
	
	
	
	
	
	<?php 
		if($_POST)
		{
			if(!empty($_POST["tc"])&& (!empty($_POST["adsoyad"]))) 
			{
				$tc=$DB->Filter($_POST["tc"]);
				$adsoyad=$DB->Filter($_POST["adsoyad"],true);
			
				$ekle=$DB->SorguCalistir("INSERT INTO tebligatbilgi ","SET TC=?, Adsoyad=?,Tarih=?",array($tc,$adsoyad,date("Y-m-d")));
			
			
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
			  {
				?>
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
                        <label>Tebligat sahibinin TC si</label> 
                        <input type="text" class="form-control" style="border-color:#f0dc82;" maxlength="11"; name="tc" required="required" placeholder="TC Giriniz ...">
				    </div>
               
				
				
				
				
				
                   <div class="form-group">
					<label>Adsoyad</label> 
					 <input type="text" class="form-control" style="border-color:#f0dc82;" name="adsoyad" required="required" placeholder="Adsoyad Giriniz ...">
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