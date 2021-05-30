
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://www.medianostalgie.com/" class="brand-link">
      <img src="<?=SITE?>mediaNotalgieLOGO/log.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="background:white;">
      <span class="brand-text font-weight-light">Media Nostalgie</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <a href="<?=SITE?>" class="d-block"><i style="color:red;" class="fa fa-user"></i>_Kullanıcı Adı</a>
		 
        </div>
       
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			   
			     
		  <li class="nav-item">
            <a href="<?=$siteUrl?>" class="nav-link">
              <i class="nav-icon fas fa-hand-point-right"></i>
              <p>
                Siteye Git
                
              </p>
            </a>
          </li>
			   
		 <li class="nav-item">
            <a href="<?=SITE?>cikis" class="nav-link">
			<i style="color:red;" class="fas fa-sign-out-alt nav-icon"></i>
              <p>Güvenli Çıkış</p>
            </a>
          </li>
		  
          <li class="nav-item">
            <a href="<?=SITE?>site-ayarlari" class="nav-link ">
              <i style="color:seagreen;" class="nav-icon fas fa-tools"></i>
              <p>
                Site Ayarları
              </p>
            </a>
          </li>
		  
		  
		  
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Kişi Bilgileri
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              
			  <li class="nav-item">
                <a href="<?=SITE?>aza-liste" class="nav-link ">
                  <i style="color:#74e61e;" class="fas fa-star-of-life nav-icon"></i>
                  <p>Aza Bilgileri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=SITE?>muhtar-liste" class="nav-link ">
                  <i style="color:#74e61e;" class="fas fa-star-of-life nav-icon"></i>
                  <p>Muhtar Bilgileri</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=SITE?>yazar-liste" class="nav-link">
                  <i style="color:#74e61e;" class="fas fa-star-of-life nav-icon"></i>
                  <p>Yazar Bilgileri</p>
                </a>
              </li>
            </ul>
          </li>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Görseller
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
			
			
            <ul class="nav nav-treeview" style="display: none;">
              
			  
			  <li class="nav-item">
                <a href="<?=SITE?>logoAyarlari" class="nav-link ">
                  <i style="color:#74e61e;" class="fas fa-images nav-icon"></i>
                  <p>Logo</p>
                </a>
              </li>
			  
			 	
		<li class="nav-item">
            <a href="<?=SITE?>foto-liste" class="nav-link">
				<i style="color:seagreen;" class="nav-icon fas fa-camera"></i>
					<p>FOTOGRAF GALERİ</p>
            </a>
        </li>
		
		<li class="nav-item">
            <a href="<?=SITE?>video-liste" class="nav-link">
				<i style="color:pink;" class="nav-icon fas fa-video"></i>
					<p>VİDEO GALERİ</p>
            </a>
        </li>
		
            </ul>
          </li>
		  
		  
		  
		  
		  
		  
		  
		  
		   <li class="nav-item">
            <a href="<?=SITE?>duyuru-liste" class="nav-link">
              <i style="color:pink;" class="nav-icon fas fa-bullhorn"></i>
              <p>
                Duyuru İşlemleri
                
              </p>
            </a>
          </li>
			   
			   
		<li class="nav-item">
            <a href="<?=SITE?>etkinlik-liste" class="nav-link">
				<i style="color:yellow;" class="nav-icon far fa-calendar-alt"></i>
					<p>Etkinlik Bilgileri</p>
            </a>
        </li>
		
		 <li class="nav-item">
            <a href="<?=SITE?>linkler-liste" class="nav-link">
				<i style="color:#4779f4;" class="nav-icon fas fa-link"></i>
					<p>Faydalı Linkler</p>
            </a>
        </li>
		
		<li class="nav-item">
            <a href="<?=SITE?>haber-liste" class="nav-link">
				<i style="color:black;" class="nav-icon far fa-newspaper"></i>
					<p>Haber Bilgileri</p>
            </a>
        </li>
		
         
		 
		 <li class="nav-item">
            <a href="<?=SITE?>koseyazi-liste" class="nav-link">
				<i style="color:#c154c1;" class="nav-icon fas fa-marker"></i>
					<p>Köşe Yazı Bilgileri</p>
            </a>
        </li>
         
		  
		



		  
		 <li class="nav-item">
            <a href="<?=SITE?>mahallebilgi" class="nav-link">
				<i style="color:orange;" class="nav-icon fas fa-landmark"></i>
					<p>Mahalle Bilgi</p>
            </a>
        </li>
		 	
	 <li class="nav-item">
            <a href="<?=SITE?>hizmetyeri" class="nav-link">
				<i style="color:olive;" class="nav-icon fas fa-map-marked"></i>
					<p>Muhtarlık Hizmet Yeri</p>
            </a>
        </li>			
		 
		 
		 	 <li class="nav-item">
            <a href="<?=SITE?>muhtargorev-liste" class="nav-link">
				<i style="color:coral;" class="nav-icon fas fa-tasks"></i>
					<p>Muhtarlık Görevleri</p>
            </a>
        </li>
		
		 <li class="nav-item">
            <a href="<?=SITE?>muhtarsozu" class="nav-link">
				<i style="color:#bcd8c4;" class="nav-icon far fa-comments"></i>
					<p>Muhtarın Sözü</p>
            </a>
        </li>
		
		<li class="nav-item">
            <a href="<?=SITE?>sponsor-liste" class="nav-link">
				<i style="color:#4683ff;" class="nav-icon far fa-life-ring"></i>
					<p>Sponsorlar</p>
            </a>
        </li>
		
		
		 <li class="nav-item">
            <a href="<?=SITE?>tebligat-liste" class="nav-link">
				<i style="color:gold;" class="nav-icon fas fa-print"></i>
					<p>Tebligat Bilgi Girişi</p>
            </a>
        </li>
		
		
		<li class="nav-item">
            <a href="<?=SITE?>vefateden-liste" class="nav-link">
				<i style="color:#ff4f05;" class="nav-icon fas fa-heartbeat"></i>
					<p>Vefat Eden Bilgisi</p>
            </a>
        </li>
		
	
		
		
		 <li class="nav-item">
         <hr>
		 <hr>
		  <hr>
		   <hr>
		   <h6>neslihan özdemir</h6>
		   <hr>
		   
            </a>
        </li>
		 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>