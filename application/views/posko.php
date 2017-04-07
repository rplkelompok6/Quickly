<!DOCTYPE html>
<html lang="en">
<head>
<title>Hope Center | Contact</title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url();?>css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url();?>css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="all">
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.6.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/cufon-replace.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/Vegur_700.font.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/Vegur_400.font.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/Vegur_300.font.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/tms-0.3.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/tms_presets.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/backgroundPosition.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/atooltip.jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/script.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.box1 figure{behavior:url("js/PIE.htc");}</style>
<![endif]-->
</head>
<body id="page5">
<div class="body1">
  <div class="main">
    <!-- header -->
    <header>
      <div class="wrapper">
        <h1><a href="index.html" id="footer_logo"> Quickly</a></h1>
        <nav>
          <ul id="top_nav">
            <li><a href="index.html"><img src="<?php echo base_url();?>images/top_icon1.gif" alt=""></a></li>
            <li><a href="#"><img src="<?php echo base_url();?>images/top_icon2.gif" alt=""></a></li>
            <li class="end"><a href="contact.html"><img src="<?php echo base_url();?>images/top_icon3.gif" alt=""></a></li>
          </ul>
        </nav>
        <nav>
          <ul id="menu">
            <li><a href="<?php echo base_url();?>index.php/auth/index">Home</a></li>

            <li><a href="<?php echo base_url();?>index.php/auth/berita">Berita</a></li>
           <li id="menu_active"><a href="<?php echo site_url('auth/tampil_posko'); ?>">Posko Bencana</a></li>
            <li><a href="<?php echo site_url('auth/tampil_korban'); ?>">Korban Bencana</a></li>
            <li><a href="<?php echo base_url();?>index.php/auth/donasi">Donasi</a></li>

            <li><a href="<?php echo base_url();?>index.php/clogin/login">Login</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- / header -->
    <!-- content -->
    <article id="content">

      <div class="wrapper">
      <table border="3" align="center">
            <tr align="center">
              <td>Posko Bencana |</td>
              <td>Alamat | </td>
              <td>Jumlah Korban |</td>
              <td>Penaggung Jawab |</td>
              <td>Contact Person |</td>
              <td>Jenis Bencana |</td>
             
              </tr>
              
     <?php
            foreach($tampil_posko->result() as $row)
            {
            ?> 
        <tr>
        <td><?php echo $row->posko;?></td>
         <td><?php echo $row->alamat_posko;?></td>
        <td><?php echo $row->jumlah_korban;?></td>
        <td><?php echo $row->pj;?></td>
         <td><?php echo $row->cp;?></td>
         <td><?php echo $row->jenis_bencana;?></td>
         </tr>
         <?php } ?>
         </table>

      </div>
      
    </article>
    <!-- / content -->
    <!-- footer -->
    <footer>
      <div class="wrapper"> <a href="index.html" id="footer_logo"><span> Quickly</a>
        <ul id="icons">
          <li><a href="#" class="normaltip"><img src="<?php echo base_url();?>images/icon1.gif" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="<?php echo base_url();?>images/icon2.gif" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="<?php echo base_url();?>images/icon3.gif" alt=""></a></li>
        </ul>
      </div>
      <div class="wrapper">
        <nav>
          <ul id="footer_menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="mission.html">Our Mission</a></li>
            <li><a href="news.html">News &amp; Press</a></li>
            <li><a href="help.html">How to Help</a></li>
            <li class="end active"><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
        <div class="tel"><span>022</span>6620987</div>
      </div>
      <div id="footer_text">Copyright &copy; <a href="#">Quickly</a> All Rights Reserved<br>
        </div>
    </footer>
    <!-- / footer -->
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>