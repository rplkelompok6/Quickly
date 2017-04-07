
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hope Center</title>
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
<body id="page1">
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
            <li id="menu_active"><a href="<?php echo site_url('cadmin/index_admin');?>">Home</a></li>
            <li><a href="<?php echo site_url('cadmin/tampil_user'); ?>">Data User</a></li>
            <li><a href="news.html">Report korban bencana</a></li>
            <li><a href="help.html">Report donasi</a></li>
            <li><a href="<?php echo site_url('clogin/logout'); ?>">Logout</a></li>
          </ul>
        </nav>
      </div>
      <div class="wrapper">
        <h3>Assalamualaikum </h3> <br><br>
       <h4>selamat datang, anda login sebagai   </h4>
        

     
      <div id="footer_text">Copyright &copy; <a href="#">Quickly</a> All Rights Reserved<br>
        </div>
    </footer>
    <!-- / footer -->
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(window).load(function () {
    $('.slider')._TMS({
        preset: 'zabor',
        easing: 'easeOutQuad',
        duration: 800,
        pagination: true,
        banners: true,
        waitBannerAnimation: false,
        slideshow: 6000,
        bannerShow: function (banner) {
            banner.css({
                right: '-700px'
            }).stop().animate({
                right: '0'
            }, 600, 'easeOutExpo')
        },
        bannerHide: function (banner) {
            banner.stop().animate({
                right: '-700'
            }, 600, 'easeOutExpo')
        }
    })
    $('.pagination li').hover(function () {
        if (!$(this).hasClass('current')) {
            $(this).find('a').stop().animate({
                backgroundPosition: '0 0'
            }, 600, 'easeOutExpo', function () {
                $(this).parent().css({
                    backgroundPosition: '-20px 0'
                })
            });
        }
    }, function () {
        if (!$(this).hasClass('current')) {
            $(this).css({
                backgroundPosition: '0 0'
            }).find('a').stop().animate({
                backgroundPosition: '-250px 0'
            }, 600, 'easeOutExpo');
        }
    })
})
</script>
</body>
</html>