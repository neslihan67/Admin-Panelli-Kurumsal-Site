
<?php
//GÜNCELLE KULLANICI
if(!empty($_GET["ID"]))
{

	$ID=$DB->Filter($_GET["ID"]);
	
	$kontrol=$DB->VeriGetir("koseyazarbilgi","","","ORDER BY ID ASC");
	if($kontrol!=false)
	{
		$veri=$DB->VeriGetir("koseyazarbilgi","WHERE ID=?",array($ID),"ORDER BY ID ASC");
		if($veri!=false)
		{			

	?>

	<div class="content-wrapper">
	    
        <div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Yazar Güncelleme</h1>
					</div>
					
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
						<li class="breadcrumb-item active">Yazar</li>
						</ol>
					</div>
				</div>
	
			</div>
		</div>
		
		
		<section class="content">
		    <div class="container-fluid">
			
				<div class="row">
					<div class="col-md-12">
	 
						<a href="<?=SITE?>yazar-liste" class="btn btn-info" style="float:right; margin-left:10px;"><i style="margin-right:3px;"class="fas fa-bars">__LİSTELE</i></a>
						<a href="<?=SITE?>yazar-ekle" class="btn btn-success" style="float:right; margin-bottom:10px;"><i class="fa fa-plus">__YENİ EKLE</i></a>
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
			  
			if((!empty($_POST["adsoyad"])) && (!empty($_POST["biografi"])) && (!empty($_POST["telefon"]))
			&& (!empty($_POST["mailll"])) )
			{
				$adsoyad=$DB->Filter($_POST["adsoyad"]);
				$biografi=$DB->Filter($_POST["biografi"],true);
				$telefon=$DB->Filter($_POST["telefon"]);
				$mailll=$DB->Filter($_POST["mailll"]);
				$dosya=$veri[0]["Resim"];
				
				  
			    if(!empty($_FILES["resim"]["name"]))
				{
					$yukle=$DB->upload("resim","images/YazarFotograflar");
				    error_reporting(0); 
					ini_set('display_errors',0);
					$path="images/HaberFotograflar/".$dosya;
					
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
						$guncelle=$DB->SorguCalistir("UPDATE koseyazarbilgi","SET Adsoyad=?, Biyografisi=?,Resim=?,Telefon=?,Mail=? WHERE ID=?",
			            array($adsoyad,$biografi,$yukle,$telefon,$mailll,$veri[0]["ID"]));
						
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
			        $guncelle=$DB->SorguCalistir("UPDATE koseyazarbilgi","SET Adsoyad=?,Biyografisi=?,Telefon=?,Mail=? WHERE ID=?",
			        array($adsoyad,$biografi,$telefon,$mailll,$veri[0]["ID"]));
						  
				}
				if($guncelle!=false)
				{
					$veri=$DB->VeriGetir("koseyazarbilgi","WHERE ID=?",array($veri[0]["ID"]),"ORDER BY ID ASC"); 
					?>
					<div class="alert alert-success">Güncelleme İşleminiz Başarıyla Kaydedildi.</div>
					<?php
				}
				else
				{
					?><div class="alert alert-danger">Güncelleme İşleminiz Sırasında Bir Sorunla Karşılaşıldı.Lütfen Daha Sonra Tekrar Deneyiniz.</div>
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
                    <label>Ad Soyad</label>
                    <input type="text" class="form-control" style="border-color:#f0dc82;" 
					value="<?=stripslashes($veri[0]["Adsoyad"])?>" name="adsoyad" >
                </div>
			
			
			  <div class="form-group">
                        <label>Biyografisi</label>    
                        <textarea class="textarea" name="biografi" 
						style="width: 100%; height:100px; font-size:20px; line-height : 10px; border: 1px solid #ddddddd; padding:10px;"><?=stripslashes($veri[0]["Biyografisi"])?></textarea>
						
                    </div>
			
			    <div class="form-group">
					<label>Resim</label> 
				   <input type="file" class="form-control" style="border-color:#f0dc82;"
				   name="resim" placeholder="Resim Seçiniz">
                </div>
				  
				
				
				  
				<div class="form-group">
                    <label>Telefon</label>
                    <input type="text" class="form-control" placeholder="Telefon numaranızı giriniz."style="border-color:#f0dc82;"
					value="<?=stripslashes($veri[0]["Telefon"])?>" name="telefon" maxlength="15" >
                </div>
				  
			
				  <div class="form-group">
                    <label>Mail Adresi</label>
                    <input type="email" class="form-control" placeholder="Mail Adresiniz"style="border-color:#f0dc82;"
					value="<?=stripslashes($veri[0]["Mail"])?>" name="mailll"  >
                  </div>
				  
				 
				

                <div class="card-footer">
                  <button type="submit" style="width:100%;" class="btn btn-primary">Değişklikleri Kaydet</button>
                </div>
              </form>
			  
					
					
					
					</div>
				</div> 
			
			</div>
		</section>
	
	</div>
   <?php
		}
		else
		{
			?>
         	<meta http-equiv="refresh" content="0;url=<?=SITE?>yazar-liste">
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

  
	