        <div class="content-wrapper">  
         <div class="col-md-11 col-sm-11 col-xs-12">	<br>	
		   <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">MUHTARIN SOZLERİ</h3>
              </div>
			  
			  
			  
		<?php   
		if($_POST)
		{
			if(!empty($_POST["aciklama"]))
			
			{
				$aciklama=$DB->Filter($_POST["aciklama"],true);
				
				
				
				
			    $guncelle=$DB->SorguCalistir("UPDATE muhtarsozleri","SET Soz=? WHERE ID=?",
			    array($aciklama,1),1);
						  
			
				if($guncelle!=false)
				{
					?>
					<div class="alert alert-success">İşleminiz Başarıyla Kaydedildi.</div>
					<meta http-equiv="refresh" content="url=<?=SITE?>muhtarsozu">
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
			<meta http-equiv="refresh" content="url=<?=SITE?>muhtarsozu">
			<?php
		}
		?>
			  
			  
			   
			  
            <form action="#" method="post" enctype="multipart/form-data">
			  
                <div class="card-body">
				
					<div class="form-group">
						<label>Muhtar Sözü</label> 
						<textarea 
						class="textarea" 
						placeholder="Place some text here" 
						name="aciklama" 
						style="width: 100%; height:auto;  font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
						<?=$muhtarsoz?>
						</textarea>
					</div>
				</div>
				
                <div class="card-footer">
                  <button type="submit" style="width:100%;" class="btn btn-primary">Değişiklikleri Kaydet</button>
                </div>
              </form>
            </div>
		 </div>
		</div>
		</div>