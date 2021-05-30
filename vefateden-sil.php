
<?php

if(!empty($_GET["ID"]))
    {
	
	
	 $ID=$DB->Filter($_GET["ID"]);
	
	
		$veri=$DB->VeriGetir("vefatedenkimseler","WHERE ID=?",array($ID),"ORDER BY ID ASC",1);
			$dosya=$veri[0]["Resim"];
	        if($veri!=false)
		    {
		        $dosya=$veri[0]["Resim"];
			    $sil=$DB->SorguCalistir("DELETE FROM vefatedenkimseler ","WHERE ID=?",array($ID),1); 
			    ?>
         	    <meta http-equiv="refresh" content="0;url=<?=SITE?>vefateden-liste">
				

	            <?php				
				$path="images/VefatedenFotograflar/".$dosya;
				if(file_exists($path))
                {
                    unlink($path);
                    
                }
				else
				{
                    echo "bu isimde bir dosya yok:";
                }
				
		    }		
            else
            {
				?>
				<meta http-equiv="refresh" content="0;url=<?=SITE?>vefateden-liste">
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

  
	