	
	<div class="content-wrapper">
	    <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Etkinlik Listesi</h1>
                    </div>
                    
					<div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?=SITE?>">Anasayfa</a></li>
                        <li class="breadcrumb-item active">Etkinlikler</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
	
	
	<section class="content">
        <div class="container-fluid">
		    <div class="row">
	            <div class="col-md-12">
				
	            <a href="<?=SITE?>etkinlik-ekle" class="btn btn-success" style="float:right; margin-bottom:10px;"><i class="fa fa-plus"> YENİ EKLE</i></a>
		        
				</div>
		    </div>
			
			
			
			
			<div class="card card-info">
                <div class="card-header">
                   
                </div>
              
			    <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="width:105px;">Başlık</th>
                        <th>Açıklama</th>
                        <th>Resim</th>
					    <th>Tarih</th>
                        <th style="width:155px;">İşlem</th>
                      </tr>
                    </thead>
			
                    <tbody>
				    <?php
				    $veriler=$DB->VeriGetir("etkinlikler","","","ORDER BY ID ASC");
					if($veriler!=false)
					{
						for($i=0;$i<count($veriler);$i++)
					{
					
						
					?>
				    <tr>
                        <td>
					    <?php 
					     echo stripslashes($veriler[$i]["Baslik"]);
						?>
					    </td>
		
					    <td><?=mb_substr(strip_tags(stripslashes($veriler[$i]["Aciklama"])),0,130,"UTF-8")."..."?></td>
					    <td><img style="width:auto; height:100px;" src="images/EtkinlikFotograflar/<?=$veriler[$i]["Resim"]?>"></td>
					    <td><?=$veriler[$i]["Tarih"]?></td>
					   
   					    <td>
				
           				<a href="<?=SITE?>etkinlik-duzenle/<?=$veriler[$i]["ID"]?>" class="btn btn-warning btn-sm">Güncelle</a>
					    <a href="<?=SITE?>etkinlik-sil/<?=$veriler[$i]["ID"]?>" class="btn btn-danger btn-sm">Sil</a>
				
					    </td>
					
                  </tr>
				  <?php
					}
					}
					
					?>
                 
                  </tbody>
                  <tfoot>
                    <tr>
                        <th style="width:105px;">Başlık</th>
                        <th>Açıklama</th>
                        <th>Resim</th>
					    <th>Tarih</th>
                        <th style="width:155px;">İşlem</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body ----------------------------------------------------------------------------------------------------------->
            </div>
			
			
			
			
                  
                
			
			
			
			
			
		</div>
	</section>	
	</div>