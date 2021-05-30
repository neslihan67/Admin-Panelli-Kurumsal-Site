
<?php

if(!empty($_GET["ID"]))
    {
	
	
	 $ID=$DB->Filter($_GET["ID"]);
	
	
		$veri=$DB->VeriGetir("muhtarbilgi","WHERE ID=?",array($ID),"ORDER BY ID ASC",1);
		$dosya=$veri[0]["Resim"];
	        if($veri!=false)
		    {
				$dosya=$veri[0]["Resim"];
			    $sil=$DB->SorguCalistir("DELETE FROM muhtarbilgi ","WHERE ID=?",array($ID),1); 
			    ?>
         	    <meta http-equiv="refresh" content="0;url=<?=SITE?>muhtar-liste">
				
	            <?php
				
				$path="images/MuhtarFotograflar/".$dosya;
				


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
				<meta http-equiv="refresh" content="0;url=<?=SITE?>muhtar-liste">
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

  
	