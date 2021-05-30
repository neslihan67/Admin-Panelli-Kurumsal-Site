	
	<div class="content-wrapper">
	    <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Vefat Edenler</h1>
                    </div>
                    
					<div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Liste</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
	
	
	<section class="content">
        <div class="container-fluid">
		    <div class="row">
	            <div class="col-md-12">
				
	            <a href="<?=SITE?>vefateden-ekle" class="btn btn-success" style="float:right; margin-bottom:10px;"><i class="fa fa-plus"> YENİ EKLE</i></a>
		        
				</div>
		    </div>
			
			
			<div class="col-md-10 col-lg-10 col-sm-12 col-xs-12">
			
			<div class="card card-info">
                <div class="card-header">
                   
                </div>
              
			    <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="width:105px;">Ad Soyad</th>
                        <th  style="width:75px;">Doğum Tarihi</th>
                        <th style="width:75px;">Vefat Tarihi</th>
					    <th style="width:65px;">Resim</th>
                        <th >İşlem</th>
                      </tr>
                    </thead>
			
                    <tbody>
				    <?php
				    $veriler=$DB->VeriGetir("vefatedenkimseler","","","ORDER BY ID ASC");
					if($veriler!=false)
					{
						for($i=0;$i<count($veriler);$i++)
					{
					
						
					?>
				    <tr>
                        <td>
					    <?php 
					     echo stripslashes($veriler[$i]["Adsoyad"]);
						?>
					    </td>
						<td><?=$veriler[$i]["DogumTarihi"]?></td>
					  
					  
					    <td><?=$veriler[$i]["VefatTarihi"]?></td> 
						<td><img style="width:100%; height:auto;" src="images/VefatedenFotograflar/<?=$veriler[$i]["Resim"]?>"></td>
					   
   					    <td>
				
           				<a href="<?=SITE?>vefateden-duzenle/<?=$veriler[$i]["ID"]?>" class="btn btn-warning btn-sm">Güncelle</a>
					    <a href="<?=SITE?>vefateden-sil/<?=$veriler[$i]["ID"]?>" class="btn btn-danger btn-sm">Sil</a>
				
					    </td>
					
                  </tr>
				  <?php
					}
					}
					
					?>
                 
                  </tbody>
                  <tfoot>
                     <tr>
                        <th style="width:105px;">Ad Soyad</th>
                        <th  style="width:75px;">Doğum Tarihi</th>
                        <th style="width:75px;">Vefat Tarihi</th>
					    <th style="width:65px;">Resim</th>
                        <th >İşlem</th>
                      </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body ----------------------------------------------------------------------------------------------------------->
            </div>   
		</div>
			
			
			
			
                  
                
			
			
			
			
			
		</div>
	</section>	
	</div>