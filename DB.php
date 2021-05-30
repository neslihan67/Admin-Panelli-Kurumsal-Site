<?php

//error_reporting(0);
class DB
{
	
	var $server="localhost";
    var $user="root";
    var $password="";
    var $dbname="medi_DBmuhtarv1Script";

    var $connection;
	
	
	function __construct()
	{
		try
		{
			$this->connection=new PDO("mysql:host=".$this->server.";dbname=".$this->dbname.";charset=utf8;",$this->user,$this->password);
		}
		catch(PDOException $error)
		{
			echo $error->getMessage();
            exit();
		}
	}
	
	//VERİGETİR SORGUSU-------------------------------------------------------
	
	public function VeriGetir($tablo,$whereAlanlar="",$whereArrayDeger="", $orderby="ORDER BY ID ASC", $limit="")
	{
		$this->connection->query("SET CHARACTER SET utf8");
        $sql="SELECT * FROM ".$tablo; //SELECT * FROM Ayarlar

        if(!empty($whereAlanlar) && !empty($whereArrayDeger))
		{ 
			$sql.=" ".$whereAlanlar;

            if(!empty($orderby))
		    {
				$sql.=" ".$orderby;
            }
        
            if(!empty($limit))
		    {
			    $sql.=" LIMIT ".$limit;
            }
                
            $run=$this->connection->prepare($sql);
        
            $result=$run->execute($whereArrayDeger);
            $data=$run->fetchAll(PDO::FETCH_ASSOC);
        }
        else
        {
			if(!empty($orderby))
			{
				$sql.=" ".$orderby;
            }

            if(!empty($limit))
			{
           
     		   $sql.=" LIMIT ".$limit; 
            }

            $data=$this->connection->query($sql,PDO::FETCH_ASSOC);


        }

        if($data!=false && (!empty($data)))
		{
			$datas=array();
            foreach($data as $bilgiler)
			{
				$datas[]=$bilgiler;
            }
			 
            return $datas;
        }
        else
        {
			return false;
        } 
   

    }
	
	//FİLTRELEME FONKSİYONU-------------------------------------------------------
	
	public function Filter($val,$tf=false)
    {
		if($tf==false)
	    {
			$val=strip_tags($val);
	    }
		
	    $val=addslashes(trim($val));
	    return $val;
    }
	
	
	//SORGUCALISTIR FONKSİYONU SORGUSU----------------------------------------------
	
    public function SorguCalistir($tablo,$alanlar="",$degerArray="",$limit="")
    {
	    $this->connection->query("SET CHARACTER SET utf8");
	
	    if((!empty($alanlar)) && (!empty($degerArray)))
	    {
			
	        $sql=$tablo." ".$alanlar; 
	        if(!empty($limit))
	        {
		        $sql.=" LIMIT ".$limit;
		    }
	        
			$run=$this->connection->prepare($sql);
		    $result=$run->execute($degerArray);
			
	    
	    }	
	    else
	    {
		    $sql=$tablo;
		
		    if(!empty($limit))
		    {
			    $sql.=" LIMIT ".$limit;
		    }
		    
			$result=$this->connection->exec($sql);
        }
	
	    if($result!=false)
	    {
		    return true;
	    }
	
	    else
	    {
	        return false;
	    }
	
	    $this->connection->query("SET CHARACTER SET utf8");
    }
	
	//UPLOAD FONKSİYONU SORGUSU---------------------------------------------------------------------

public function wordUpload($upload,$name){
	
	if($_FILES['upload']['name']){
	$dosya=$_FILES['upload']['tmp_name'];
	$dosyaadi=$_FILES['upload']['name'];
	$dosyaadi_array=explode(".",$dosyaadi);
	$yeni=end($dosyaadi_array);
	$resim_yeni=rand().'.'.$yeni;
	chmod('upload',0777);
	$kabul=array("jpg","gif","png","jpeg");
	if(in_array($yeni,$kabul)){
		move_uploaded_file($dosya,'upload/'.$resim_yeni);
		$fonksiyon_numarası=$_GET['CKEditorFuncNum'];
		$url='upload/'.resim_yeni;
		$mesaj='';
		echo "<script> type='txt/javascript' >window.parent.CKEDITOR.tools.callFunction($fonksiyon_numarası,'$url',$mesaj);</script>";
		
	}
}

}



	
	
	//UPLOAD FONKSİYONU SORGUSU---------------------------------------------------------------------
  
public function upload($nesnename,$yuklenecekyer='images/',$tur='img',$w='',$h='',$resimyazisi='')
	{
		if($tur=="img")
		{
			if(!empty($_FILES[$nesnename]["name"]))
			{
				$dosyanizinadi=$_FILES[$nesnename]["name"];
				$tmp_name=$_FILES[$nesnename]["tmp_name"];
				$uzanti=$this->uzanti($dosyanizinadi);
				if($uzanti=="png" || $uzanti=="jpg" || $uzanti=="jpeg" || $uzanti=="gif")
				{
					$classIMG=new upload($_FILES[$nesnename]);
					if($classIMG->uploaded)
					{
						if(!empty($w))
						{
							if(!empty($h))
							{
								$classIMG->image_resize=true;
								$classIMG->image_x=$w;
								$classIMG->image_y=$h;
							}
							else
							{
								if($classIMG->image_src_x>$w)
								{
									$classIMG->image_resize=true;
									$classIMG->image_ratio_y=true;
									$classIMG->image_x=$w;
								}
							}
						}
						else if(!empty($h))
						{
								if($classIMG->image_src_h>$h)
								{
									$classIMG->image_resize=true;
									$classIMG->image_ratio_x=true;
									$classIMG->image_y=$h;
								}
						}
						
						if(!empty($resimyazisi))
						{
							$classIMG->image_text = $resimyazisi;

						$classIMG->image_text_direction = 'v';
						
						$classIMG->image_text_color = '#FFFFFF';
						
						$classIMG->image_text_position = 'BL';
						}
						$rand=uniqid(true);
						$classIMG->file_new_name_body=$rand;
						$classIMG->Process($yuklenecekyer);
						if($classIMG->processed)
						{
							$resimadi=$rand.".".$classIMG->image_src_type;
							return $resimadi;
						}
						else
						{
							return false;
						}
					}
					else
					{
						return false;
					}
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
		else if($tur=="ds")
		{
			
			if(!empty($_FILES[$nesnename]["name"]))
			{
				
				$dosyanizinadi=$_FILES[$nesnename]["name"];
				$tmp_name=$_FILES[$nesnename]["tmp_name"];
				$uzanti=$this->uzanti($dosyanizinadi);
				if($uzanti=="doc" || $uzanti=="docx" || $uzanti=="pdf" || $uzanti=="xlsx" || $uzanti=="xls" || $uzanti=="ppt" || $uzanti=="xml" || $uzanti=="mp4" || $uzanti=="avi" || $uzanti=="mov")
				{
					
					$classIMG=new upload($_FILES[$nesnename]);
					if($classIMG->uploaded)
					{
						$rand=uniqid(true);
						$classIMG->file_new_name_body=$rand;
						$classIMG->Process($yuklenecekyer);
						if($classIMG->processed)
						{
							$dokuman=$rand.".".$uzanti;
							return $dokuman;
						}
						else
						{
							return false;
						}
					}
				}
			}
		}
		else
		{
			return false;
		}
	}
	//---------------------------------------------------
	
	public function uzanti($dosyaadi)

    {
		$parca=explode(".",$dosyaadi);
	    $uzanti=end($parca);
	    $donustur=strtolower($uzanti);
	    return $donustur;
    }

	public function MailGonder($mail,$konu="",$mesaj)
	   {
			include_once(SINIF."class.phpmailer.php");
			include_once(SINIF."class.smtp.php");

			   $posta = new PHPMailer();
			   	$posta->CharSet = "UTF-8";
				$posta->IsSMTP();                                   // send via SMTP
				$posta->Host     = 	"ssl://smtp.gmail.com"; // SMTP servers
				$posta->SMTPAuth = true;     // turn on SMTP authentication
				$posta->Username = "neslihanozdemir642@gmail.com";  // SMTP username
				$posta->Password = "Kalem.12NO"; // SMTP password
				$posta->Port     = 465; 
				$posta->From     = "neslihanozdemir642@gmail.com"; // smtp kullanýcý adýnýz ile ayný olmalý
				$posta->Fromname = "neslihanozdemir642@gmail.com";
				$posta->AddAddress($mail, "neslihanozdemir642@gmail.com");
				$posta->Subject  =  $konu;
				$posta->Body     =  $mesaj;
				
				if(!$posta->Send())
				{
				  return false;
				}
				else
				{
					return true;
				}
	   }
	  
public function word($nesnename,$yuklenecekyer='uploads/',$tur='pdf',$w='',$h='',$resimyazisi='')
	{
		
		 if($tur=="pdf")
		{
			
			if(!empty($_FILES[$nesnename]["name"]))
			{
				
				$dosyanizinadi=$_FILES[$nesnename]["name"];
				$tmp_name=$_FILES[$nesnename]["tmp_name"];
				$uzanti=$this->uzanti($dosyanizinadi);
				if($uzanti=="doc" || $uzanti=="docx" || $uzanti=="pdf" || $uzanti=="xlsx" || $uzanti=="xls" || $uzanti=="ppt" || $uzanti=="xml" || $uzanti=="mp4" || $uzanti=="avi" || $uzanti=="mov")
				{
					
					$classIMG=new upload($_FILES[$nesnename]);
					if($classIMG->uploaded)
					{
						$rand=uniqid(true);
						$classIMG->file_new_name_body=$rand;
						$classIMG->Process($yuklenecekyer);
						if($classIMG->processed)
						{
							$dokuman=$rand.".".$uzanti;
							return $dokuman;
						}
						else
						{
							return false;
						}
					}
				}
			}
		}
		else
		{
			return false;
		}
	}
	
}


?>