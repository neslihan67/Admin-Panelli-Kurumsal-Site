            <div class="bradcam_area bradcam_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h4 style="font-family:Montserrat, sans-serif">İLETİŞİM</h4>
								
				
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
<!---------------------------------------------------------------------------------------------------------------------->


        <div style="background-color:#f5f5dc; padding-bottom:0px; padding-top:50px;padding-bottom:20px; width:100%; height:auto; margin:0px;" class="col-12">
		 	<h1 style="text-align:center;" >KONUMUMUZ</h1>
		</div>
			
		<div style="margin-top:20px; text-align:center; " class="container">
		 <?=$hizmetyeriHarita?>
			
		</div>
			


<!---------------------------------------------------------------------------------------------------------------------->
	<div class="popular_category_area">
		<div class="container text-center">
			<br><h6>Adres : <?=$hizmetyeriAdres?></h6>
			<h6>Telefon : <?=$hizmetyeriTelefon?></h6>
			<h6>Fax : <?=$hizmetyeriFax?></h6>
			
			<p></p>
		</div>
	</div>
   <!-- about_mission  -->
   <div class="explorer_europe" style="padding-top:50px;"><hr>
   <div style="padding:0px; margin:0px;background-color:#b0b0b0;height:auto;width:100%"  class="col-12">
   <h1 style="text-align:center;" >İLETİŞİM FORMU</h1>
   </div>
       
<hr>
			<div class="container">
            <div class="row align-items-center">
			
			<div class="col-12">
			
			<?php
			
			if($_POST)
			{
			 include_once(SINIF."class.phpmailer.php");
             include_once(SINIF."class.smtp.php");
				if(!empty($_POST["adsoyad"]) && !empty($_POST["mail"]) && !empty($_POST["konu"]) && !empty($_POST["mesaj"]))
				{
					$adsoyad=$DB->Filter($_POST["adsoyad"]);
					$mail=$DB->Filter($_POST["mail"]);
					$konu=$DB->Filter($_POST["konu"]);
					$mesaj=$DB->Filter($_POST["mesaj"]);
					$telefon=$DB->Filter($_POST["telefon"]);
					$metin="Ad Soyad : ".$adsoyad.' Mail Adresi : '.$mail."Telefon : ".$telefon." Mesaj : ".$mesaj;
					$maililet=$DB->MailGonder("neslihanOzdemir642@gmail.com",$konu,$metin);
					
					if($maililet!=false)
					{
						echo '<div class="alert alert-success">Mesajınız Başarıyla Gönderildi</div>';
					}
					else
					{
						echo '<div class="alert alert-danger">Mail Görderme işlemi sırasında hata oluştu.Lütfen daha
						sonra yeniden deneyiniz</div>';
					}
					
				}
				else
				{
					echo '<div class="alert alert-danger">Boş Alanları Doldurunuz</div>';
				}
			}
			
			?>
			<form action="#" method="post">
			<table class="table">
			
			<tr>
			<td style="font-weight:bolder;">Adınız Soyadınız</td>
			<td><input type="text" style="border-color:#f5deb3;"  name="adsoyad" class="form-control" required="required"/></td>
			</tr>
			
			<tr>
			<td style="font-weight:bolder">Mail Adresiniz</td>
			<td><input type="email" style="border-color:#f5deb3;" name="mail" class="form-control" required="required"/></td>
			</tr>
			
			<tr>
			<td style="font-weight:bolder">Telefon</td>
			<td><input type="text" style="border-color:#f5deb3;"  name="telefon" class="form-control" maxlength="11"/></td>
			</tr>
			
			<tr>
			<td style="font-weight:bolder">Konu</td>
			<td><input  type="text"  style="border-color:#f5deb3;"name="konu" class="form-control" required="required"/></td>
			</tr>
			
			<tr>
			<td style="font-weight:bolder">Mesajınız</td>
			<td><textarea  style="border-color:#f5deb3;" name="mesaj" class="form-control" required="required"/></textarea></td>
			</tr>
			
           <tr>
			<td></td>
			<td><input  style="border-color:#ffefd5; color:white; background-color:red;" type="submit" name="ilet" class="form-control" value="GÖNDER"></td>
			</tr>
			
			</table>
			</div>

			</div>
			 
           </div>
        </div>