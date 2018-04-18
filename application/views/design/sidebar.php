
 

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="<?php echo base_url('assets/images/avatar.jpg') ;?>" alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                     
                        <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Administrator</p>
                </div>
            </div>
            </li>
            <li class="bold"><a href="<?= base_url('index.php/dashboard') ;?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
            </li>
           <li><a href="<?= base_url('index.php/objekpajak') ;?>"><i class="mdi-image-grid-on"></i> Data Master Objek Pajak</a></li>

           <li><a href="<?= base_url('index.php/jenispajak') ;?>"><i class="mdi-action-swap-vert-circle"></i> Data Master Jenis Pajak</a></li> 
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold">
                        <a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-view-carousel"></i>Rincian Jenis Pajak</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="<?= base_url('index.php/rincianjenishotel') ;?>">Hotel</a></li>
                                <li><a href="<?= base_url('index.php/rincianjenisrestoran') ;?>">Restoran</a></li>
                                <li><a href="layout-horizontal-menu.html">----</a></li>
                                <li><a href="layout-horizontal-menu.html">----</a></li>
                                <li><a href="layout-horizontal-menu.html">----</a></li>
                                <li><a href="layout-horizontal-menu.html">----</a></li>
                                <li><a href="layout-horizontal-menu.html">----</a></li>
                                <li><a href="layout-horizontal-menu.html">----</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
           
           <!--  <li class="bold"><a href="app-calendar.html" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Rekap Transaksi</a>
            </li> -->
            <li><a href="<?= base_url('index.php/laporpajak') ;?>"><i class="mdi-editor-insert-link"></i> Data Master Lapor Pajak</a></li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li class="bold">
                        <a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i>Rekap Transaksi</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="<?= base_url('index.php/rekaphotel') ;?>">Rekapitulasi Hotel</a></li>
                                <li><a href="<?= base_url('index.php/rekaprestoran') ;?>">Rekapitutlasi Restoran</a></li>
                                <li><a href="layout-horizontal-menu.html">----</a></li>
                                <li><a href="layout-horizontal-menu.html">----</a></li>
                                <li><a href="layout-horizontal-menu.html">----</a></li>
                                <li><a href="layout-horizontal-menu.html">----</a></li>
                                <li><a href="layout-horizontal-menu.html">----</a></li>
                                <li><a href="layout-horizontal-menu.html">----</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>

            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">                 
                   <!--  <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-border-all"></i> Surat Perintah</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="table-basic.html">Tujuan</a>
                                </li>
                                <li><a href="table-data.html">----</a>
                                </li>
                                <li><a href="table-jsgrid.html">----</a>
                                </li>
                                <li><a href="table-editable.html">----</a>
                                </li>
                                <li><a href="table-floatThead.html">----</a>
                                </li>
                            </ul>
                        </div>
                    </li> -->
                    
                    <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-action-account-circle"></i> Data User</a>
                        <div class="collapsible-body">
                            <ul>     
                                <li><a href="<?= base_url('index.php/users');?>">User Profile</a>
                                </li>                                   
                                <!-- <li><a href="user-login.html">Login</a>
                                </li>                                        
                                <li><a href="user-register.html">Register</a>
                                </li>
                                <li><a href="user-forgot-password.html">Forgot Password</a>
                                </li>
                                <li><a href="user-lock-screen.html">Lock Screen</a>
                                </li>               -->                          
                                
                            </ul>
                        </div>
                    </li>
                    
                    <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Report Rekap</a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="<?= base_url('index.php/reporthotel');?>">Hotel</a>
                                </li>
                                <li><a href="<?= base_url('index.php/reportrestoran');?>">Restoran</a>
                                </li>
                                <li><a href="charts-morris.html">----</a>
                                </li>
                                <li><a href="charts-xcharts.html">----s</a>
                                </li>
                                <li><a href="charts-flotcharts.html">----</a>
                                </li>
                                <li><a href="charts-sparklines.html">----</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->