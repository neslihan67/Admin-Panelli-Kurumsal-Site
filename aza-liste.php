	
	<div class="content-wrapper">
	    <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Aza Listesi</h1>
                    </div>
                    
					<div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Azalar</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
	
	
	<section class="content">
        <div class="container-fluid">
		    <div class="row">
	            <div class="col-md-12">
				
	            <a href="<?=SITE?>aza-ekle" class="btn btn-success" style="float:right; margin-bottom:10px;"><i class="fa fa-plus">__YENİ EKLE</i></a>
		        
				</div>
		    </div>
			
			
			
			
			<div class="card card-info">
                <div class="card-header">
                   
                </div>
              
			    <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="width:105px;">Ad Soyad</th>
                        <th>Telefon</th>
                        <th>Mail</th>
					    <th>Adres</th>
                        <th style="width:155px;">İşlem</th>
                      </tr>
                    </thead>
			
                    <tbody>
				    <?php
				    $veriler=$DB->VeriGetir("azabilgi","","","ORDER BY ID ASC");
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
		
					    <td><?=$veriler[$i]["Telefon"]?></td>
					    <td><?=$veriler[$i]["Mail"]?></td>
					    <td><?=$veriler[$i]["Adres_ikamet"]?></td>
					   
   					    <td>
				
           				<a href="<?=SITE?>aza-duzenle/<?=$veriler[$i]["ID"]?>" class="btn btn-warning btn-sm">Güncelle</a>
					    <a href="<?=SITE?>aza-sil/<?=$veriler[$i]["ID"]?>" class="btn btn-danger btn-sm">Sil</a>
				
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
                        <th>Telefon</th>
                        <th>Mail</th>
					    <th>Adres</th>
                        <th style="width:105px;" >İşlem</th>
                      </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body ----------------------------------------------------------------------------------------------------------->
            </div>
			
			
			
			
                  
                
			
			
			
			
			
		</div>
	</section>	
	</div>