  


	<?php
	//GÜNCELLE KULLANICI
	if(!empty($_GET["ID"]))
	{

		$ID=$DB->Filter($_GET["ID"]);
	
		$kontrol=$DB->VeriGetir("duyurular","","","ORDER BY ID ASC");
		if($kontrol!=false)
		{
			$veri=$DB->VeriGetir("duyurular","WHERE ID=?",array($ID),"ORDER BY ID ASC");
			if($veri!=false)
			{			

	?>

	<div class="content-wrapper">  
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Duyuru Güncelleme Sayfası</h1>
					</div>
                    
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
						<li class="breadcrumb-item active">Duyurular</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	
		<div class="container-fluid">
			<div class="row" style="padding-right:10px;">
				<div class="col-md-12">
					<a href="<?=SITE?>duyuru-liste" class="btn btn-success" style="float:right; margin-bottom:10px;"><i class="fas fa-book-open"> .DUYURU LİSTESİ</i></a>
					<a href="<?=SITE?>duyuru-ekle" class="btn btn-info" style="float:right; margin-bottom:10px; margin-right:3px;"><i class="fas fa-plus"> .DUYURU EKLE</i></a>
				
				</div>    
			</div>
		</div>
	
	  <div class="card card-warning">
		<div class="card-header">
						<h3 class="card-title">GÜNCELLEME FORMU</h3>
        
					</div>
					
	   <div class="col-md-10">
		
		
		<?php
		if($_POST)
		{
			if((!empty($_POST["baslik"])) && (!empty($_POST["aciklama"])))
			{
				$baslik=$DB->Filter($_POST["baslik"]);
				$aciklama=$DB->Filter($_POST["aciklama"]);
				
				$guncelle=$DB->SorguCalistir("UPDATE duyurular","SET Baslik=?,Aciklama=?,Tarih=? WHERE ID=?",
			    array($baslik,$aciklama,date("Y-m-d"),$veri[0]["ID"]));
				
				if($guncelle!=false)
				{
					$veri=$DB->VeriGetir("duyurular","WHERE ID=?",array($veri[0]["ID"]),"ORDER BY ID ASC"); 
					?>
					<div class="alert alert-success">Güncelleme İşleminiz Başarıyla Kaydedildi.</div>
					<?php
				}
				else
				{
					?>
					<div class="alert alert-danger">Güncelleme İşleminiz Sırasında Bir Sorunla Karşılaşıldı.Lütfen Daha Sonra Tekrar Deneyiniz.</div>
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
		<form action="#" method="post" enctype="multipart/form-data">
		
            <div class="card-body">
				
			    <div class="form-group">
                    <label>Başlık</label>
                    <input type="text" class="form-control" style="border-color:#f0dc82;" 
					value="<?=stripslashes($veri[0]["Baslik"])?>" name="baslik" >
                </div>
			
			
				  
				
				<div class="form-group">
                    <label>Açıklama</label>
                    <input type="text" class="form-control" style="border-color:#f0dc82;" 
					value="<?=stripslashes($veri[0]["Aciklama"])?>" name="aciklama" >
                </div>
				
				
				
				

                <div class="card-footer">
                  <button type="submit" style="width:100%;" class="btn btn-primary">Değişklikleri Kaydet</button>
                </div>
				
			</div>
				
        </form>
			  
					
					
					
		
	  </div>
	 </div>
	
	
	
	</div>
	    <?php
		}
		else
		{
		?>
         	<meta http-equiv="refresh" content="0;url=<?=SITE?>duyuru-liste">
	         <?php
	 	   }
        }
     else
        {
	       ?>
	        <meta http-equiv="refresh" content="0;url=<?=SITE?>">
	       <?php
         }
      }
       else
       {
	     ?>
	      <meta http-equiv="refresh" content="0;url=<?=SITE?>">
     	<?php

        }

    
        ?>
