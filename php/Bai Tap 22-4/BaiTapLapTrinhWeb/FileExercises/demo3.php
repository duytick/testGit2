<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="vi-VN"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="vi-VN"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="vi-VN"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="vi-VN"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        	<meta property="og:locale" content="vi_VN" />
	<meta http-equiv="content-language" content="vi" />
	<link rel="alternate" href="https://freetuts.net/cac-ham-xu-ly-file-trong-php-22.html" hreflang="vi-vn" />
	<meta name="twitter:card" content="summary" />
	<title>Các hàm xử lý file trong php</title>
	<meta itemprop="name" content="Các hàm xử lý file trong php">
	<meta property="og:title" content="Các hàm xử lý file trong php" />
	<meta name="twitter:title" content="Các hàm xử lý file trong php" />
	<meta name="revisit-after" content="1 days" />
	<meta name="robots" content="INDEX,FOLLOW"/>
	<meta name="keywords" content="xu ly file, ham xu ly file,xu ly file php"/>
	<meta name="description" content="Tổng hợp các hàm xử lý file trong php, danh sách những hàm hay dùng nhất trong php để xử lý file, có kèm ví dụ minh họa rất hay"/>
	<meta itemprop="description" content="Tổng hợp các hàm xử lý file trong php, danh sách những hàm hay dùng nhất trong php để xử lý file, có kèm ví dụ minh họa rất hay">
	<meta property="og:description" content="Tổng hợp các hàm xử lý file trong php, danh sách những hàm hay dùng nhất trong php để xử lý file, có kèm ví dụ minh họa rất hay" />
	<meta name="twitter:description" content="Tổng hợp các hàm xử lý file trong php, danh sách những hàm hay dùng nhất trong php để xử lý file, có kèm ví dụ minh họa rất hay" />
	<link rel="author" href="https://plus.google.com/104638972201822941189"/>
	<meta itemprop="image" content="https://freetuts.net/upload/tut_post/images/2014/08/03/22/cac-ham-xu-ly-file-trong-php.gif">
	<meta property="og:image" content="https://freetuts.net/upload/tut_post/images/2014/08/03/22/cac-ham-xu-ly-file-trong-php.gif" />
	<meta property="og:image:secure_url" content="https://freetuts.net/upload/tut_post/images/2014/08/03/22/cac-ham-xu-ly-file-trong-php.gif" />
	<meta property="og:image:width" content="600" />
	<meta property="og:image:height" content="500" />
	<meta name="twitter:image" content="https://freetuts.net/upload/tut_post/images/2014/08/03/22/cac-ham-xu-ly-file-trong-php.gif" />
	<meta property="og:type" content="article" />
	<meta property="article:tag" content="PHP căn bản"/>
	<meta property="og:url" content="https://freetuts.net/cac-ham-xu-ly-file-trong-php-22.html" />
	<link rel="canonical" href="https://freetuts.net/cac-ham-xu-ly-file-trong-php-22.html" />
	<meta property="article:section" content="PHP" />
	<meta property="article:author" content="TheHalfHeart" />
	<meta name="author" content="TheHalfHeart" />
	<meta property="article:published_time" content="2014-08-04T00:53:50+00:00" />
	<meta property="article:modified_time" content="2019-03-12T21:01:26+00:00" />
	<meta property="og:updated_time" content="2019-03-12T21:01:26+00:00" />
	<meta name="twitter:creator" content="@freetutsdotnet" />
	<meta property="article:publisher" content="https://www.facebook.com/groups/freetutsdotnet/" />
	<link rel="publisher" href="https://plus.google.com/107680919915235377536/videos"/>
	<meta property="og:site_name" content="freetuts" />
	<meta name="copyright" content="Copyright © 2018 by Freetuts.net" />
	<link rel="shortcut icon" type="image/x-icon" href="https://freetuts.net/public/logo/icon.png?r=1" />	<meta property="fb:app_id" content="2175055175872587" />        <meta name="google-site-verification" content="mco4fG6mE6Rh6fWFCAU7zwQkDGYtKNA8g_UnbaB1oBQ" />
<link rel='stylesheet' id='plugins-css'  href='https://freetuts.net/public/theme/css/style.css?v=308' type='text/css' media='all' />
<script data-ad-client="ca-pub-3652581368701082" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script type='text/javascript' src='https://freetuts.net/public/theme/js/lib.js?v=308'></script>
<script type='text/javascript' src='https://freetuts.net/public/theme/js/ads.js?v=308'></script>
<script type='text/javascript' src='https://freetuts.net/public/theme/js/all.js?v=308'></script>
        <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '222589982159021');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=222589982159021&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->    </head>
    <body id="tut_detail" class=" page page-template-default right-sidebar singular fade-imgs-in-appear time_in_twelve_format one-side-wide both-sidebars wpb-js-composer js-comp-ver-4.9 vc_responsive no-js" itemtype="http://schema.org/WebPage">
                <div class="boxed-wrap clearfix">
            
<div id="header-wrapper">
    <header class="header">
        <div class="inner">
            <div class="logo">
                <a href="https://freetuts.net/" title="freetuts">
                    <img src="https://freetuts.net/public/logo/logo.png?rand=2" alt="freetuts" style="max-width: 130px"/>
                </a>
            </div>
            <div class="header-right hide-mobile">
                <div class="mom-e3lanat-wrap  ">
                    <div class="mom-e3lanat " style="margin-bottom:-0px;">
                        <div class="mom-e3lanat-inner">
                            <div class="mom-e3lan" style=" margin-bottom:0px;">
                                <div class="e3lan-code">
                                    <div class="job_action" >
                                        <span class="mom_button_wrap"><a class="button mom_button " href="/tim-khoa-hoc" title="tìm khóa học" style="font-size: 13px; line-height: 30px">TÌM KHÓA HỌC</a></span>
                                        <span class="mom_button_wrap"><a class="button mom_button " href="/khoa-hoc/tao-combo" title="TẠO COMBO KHÓA HỌC" style="font-size: 13px; line-height: 30px">TẠO COMBO</a></span>
                                        <span class="mom_button_wrap"><a class="button mom_button " href="/bang-bao-gia-dat-banner-va-text-link.html" title="bảng giá guest post" style="font-size: 13px; line-height: 30px">GUEST POST</a></span>
                                        <span class="mom_button_wrap"><a class="button mom_button " href="/lien-he.html" title="liên hệ" style="font-size: 13px; line-height: 30px">LIÊN HỆ</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </header>
</div>
<nav id="navigation" itemtype="http://schema.org/SiteNavigationElement" itemscope="itemscope" role="navigation" class="dd-effect-slide navigation">
    <div class="navigation-inner">
        <div class="inner">
            <ul id="menu-main-menu" class=" main-menu mom_visibility_desktop">
    <li id="menu-item-87" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home mom_default_menu_item menu-item-iconsOnly menu-item-depth-0"><a href="/"><i class="icon_only momizat-icon-home"></i><span class="icon_only_label"></span></a></li>
            
    <li class="menu-item menu-item-has-children menu-parent-item mom_default_menu_item menu-item-depth-0" 
                    >
        <a  href="/tutorials" 
                      title="Tutorials"
                       
           >
                           Tutorials</a>
                <ul class="sub-menu ">
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/web-frontend" 
                       
                        title="Web Frontend"
                        
                        >Web Frontend</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/web-backend" 
                       
                        title="Web Backend"
                        
                        >Web Backend</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/mobile-development" 
                       
                        title="Mobile Development"
                        
                        >Mobile Development</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/programming" 
                       
                        title="Programming"
                        
                        >Programming</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/network" 
                       
                        title="Network"
                        
                        >Network</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/database" 
                       
                        title="Database"
                        
                        >Database</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/cong-cu" 
                       
                        title="Công cụ"
                        
                        >Công cụ</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/tutorials" 
                       
                        title="... xem thêm"
                        
                        >... xem thêm</a>
                        
                                    </li>
                    </ul>
        <i class='responsive-caret'></i>
    </li>
        
    <li class="menu-item menu-item-has-children menu-parent-item mom_default_menu_item menu-item-depth-0" 
                    style="background:#7d719c"
                        >
        <a  href="#" 
           rel="nofollow"           title="Bắt đầu"
                       
           >
                        <i class="fa-icon-hand-right"></i>
                           Bắt đầu</a>
                <ul class="sub-menu ">
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/hoc-lam-web" 
                       
                        title="Học làm web"
                        
                        >Học làm web</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/hoc-kiem-tien-online-bat-dau-tu-dau-2548.html" 
                       
                        title="Học kiếm tiền online"
                        
                        >Học kiếm tiền online</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/webmaster" 
                       
                        title="Học quản trị website"
                        
                        >Học quản trị website</a>
                        
                                    </li>
                    </ul>
        <i class='responsive-caret'></i>
    </li>
        
    <li class="menu-item menu-item-has-children menu-parent-item mom_default_menu_item menu-item-depth-0" 
                    >
        <a  href="/giam-gia" 
                      title="VPS/Hosting"
                       
           >
                           VPS/Hosting</a>
                <ul class="sub-menu ">
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/hosting-viet-nam-nuoc-ngoai-tot-nhat-2547.html" 
                       
                        title="Hosting/VPS tốt nhất"
                        
                        >Hosting/VPS tốt nhất</a>
                        
                                    </li>
                            <li class="menu-item menu-item-has-children menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="#" 
                       
                        title="Trong nước"
                        
                        >Trong nước</a>
                        
                                        <ul class="sub-menu ">
                                                                                <li class="menu-item  mom_default_menu_item menu-item-depth-2">
                                <a href="/giam-gia/ma-giam-gia-azdigi"  title="# Azdigi"># Azdigi</a>
                            </li>
                                                                                <li class="menu-item  mom_default_menu_item menu-item-depth-2">
                                <a href="/giam-gia/ma-giam-gia-tinohost"  title="# Tinohost"># Tinohost</a>
                            </li>
                                            </ul>
                    <i class="responsive-caret"></i>
                                    </li>
                            <li class="menu-item menu-item-has-children menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="#" 
                       
                        title="Nước ngoài"
                        
                        >Nước ngoài</a>
                        
                                        <ul class="sub-menu ">
                                                                                <li class="menu-item  mom_default_menu_item menu-item-depth-2">
                                <a href="/giam-gia/ma-giam-gia-vultr"  title="# Vultr"># Vultr</a>
                            </li>
                                                                                <li class="menu-item  mom_default_menu_item menu-item-depth-2">
                                <a href="/giam-gia/ma-giam-gia-stablehost"  title="# Stablehost"># Stablehost</a>
                            </li>
                                                                                <li class="menu-item  mom_default_menu_item menu-item-depth-2">
                                <a href="/giam-gia/ma-giam-gia-dreamhost"  title="# DreamHost"># DreamHost</a>
                            </li>
                                            </ul>
                    <i class="responsive-caret"></i>
                                    </li>
                    </ul>
        <i class='responsive-caret'></i>
    </li>
        
    <li class="menu-item menu-item-has-children menu-parent-item mom_default_menu_item menu-item-depth-0" 
                    >
        <a  href="/mmo" 
                      title="MMO"
                       
           >
                           MMO</a>
                <ul class="sub-menu ">
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/tin-tuc-mmo" 
                       
                        title="Tin Tức MMO"
                        
                        >Tin Tức MMO</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/digital-marketing" 
                       
                        title="Digital Marketing"
                        
                        >Digital Marketing</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/dropshipping" 
                       
                        title="DropShipping"
                        
                        >DropShipping</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/affiliate-marketing" 
                       
                        title="Affiliate Marketing"
                        
                        >Affiliate Marketing</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/google-adsense" 
                       
                        title="Google Adsense"
                        
                        >Google Adsense</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/rut-gon-link" 
                       
                        title="Rút Gọn Link"
                        
                        >Rút Gọn Link</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/trade-coin" 
                       
                        title="Trade Coin"
                        
                        >Trade Coin</a>
                        
                                    </li>
                    </ul>
        <i class='responsive-caret'></i>
    </li>
        
    <li class="menu-item menu-item-has-children menu-parent-item mom_default_menu_item menu-item-depth-0" 
                    >
        <a  href="/thu-thuat" 
                      title="Thủ thuật"
                       
           >
                           Thủ thuật</a>
                <ul class="sub-menu ">
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/thu-thuat/dien-thoai" 
                       
                        title="Điện Thoại"
                        
                        >Điện Thoại</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/thu-thuat/may-tinh" 
                       
                        title="Máy Tính"
                        
                        >Máy Tính</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/thu-thuat/ky-thuat-so" 
                       
                        title="Kỹ Thuật Số"
                        
                        >Kỹ Thuật Số</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/thu-thuat/game" 
                       
                        title="Game"
                        
                        >Game</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/thu-thuat/ung-dung" 
                       
                        title="Ứng dụng"
                        
                        >Ứng dụng</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/thu-thuat/dien-tu" 
                       
                        title="Điện tử"
                        
                        >Điện tử</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/thu-thuat/xe" 
                       
                        title="Xe Hay"
                        
                        >Xe Hay</a>
                        
                                    </li>
                    </ul>
        <i class='responsive-caret'></i>
    </li>
        
    <li class="menu-item menu-item-has-children menu-parent-item mom_default_menu_item menu-item-depth-0" 
                    >
        <a  href="/review" 
                      title="Review"
                       
           >
                           Review</a>
                <ul class="sub-menu ">
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/review/dien-thoai" 
                       
                        title="Điện Thoại"
                        
                        >Điện Thoại</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/review/may-tinh" 
                       
                        title="PC / Laptop"
                        
                        >PC / Laptop</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/review/ky-thuat-so" 
                       
                        title="Kỹ Thuật Số"
                        
                        >Kỹ Thuật Số</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/review/game" 
                       
                        title="Đồ chơi game"
                        
                        >Đồ chơi game</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/review/ung-dung" 
                       
                        title="Ứng dụng"
                        
                        >Ứng dụng</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/review/dien-tu" 
                       
                        title="Đồ điện tử"
                        
                        >Đồ điện tử</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/review/xe" 
                       
                        title="Đồ chơi xe"
                        
                        >Đồ chơi xe</a>
                        
                                    </li>
                    </ul>
        <i class='responsive-caret'></i>
    </li>
        
    <li class="menu-item menu-item-has-children menu-parent-item mom_default_menu_item menu-item-depth-0" 
                    >
        <a  href="/khoa-hoc" 
                      title="Khóa học"
                       
           >
                           Khóa học</a>
                <ul class="sub-menu ">
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/khoa-hoc/lap-trinh-web" 
                       
                        title="Lập trình Web"
                        
                        >Lập trình Web</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/khoa-hoc/lap-trinh-mobile" 
                       
                        title="Lập trình Mobile"
                        
                        >Lập trình Mobile</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/khoa-hoc/ngon-ngu-lap-trinh" 
                       
                        title="Ngôn Ngữ lập trình"
                        
                        >Ngôn Ngữ lập trình</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/khoa-hoc/tin-hoc-may-tinh" 
                       
                        title="Tin học - máy tính"
                        
                        >Tin học - máy tính</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/khoa-hoc/seo-marketing" 
                       
                        title="SEO - Marketing"
                        
                        >SEO - Marketing</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/khoa-hoc/ngoai-ngu" 
                       
                        title="Ngoại Ngữ"
                        
                        >Ngoại Ngữ</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/khoa-hoc/khoa-pho-thong" 
                       
                        title="Khóa phổ thông"
                        
                        >Khóa phổ thông</a>
                        
                                    </li>
                    </ul>
        <i class='responsive-caret'></i>
    </li>
        
    <li class="menu-item menu-item-has-children menu-parent-item mom_default_menu_item menu-item-depth-0" 
                    >
        <a  href="/song" 
                      title="Đời sống"
                       
           >
                           Đời sống</a>
                <ul class="sub-menu ">
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/sach-hay" 
                       
                        title="Sách hay"
                        
                        >Sách hay</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/mon-hoc" 
                       
                        title="Môn học"
                        
                        >Môn học</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/suc-khoe" 
                       
                        title="Sức khỏe"
                        
                        >Sức khỏe</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/am-thuc" 
                       
                        title="Ẩm thực"
                        
                        >Ẩm thực</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/nha-cua" 
                       
                        title="Nhà cửa"
                        
                        >Nhà cửa</a>
                        
                                    </li>
                            <li class="menu-item  menu-parent-item mom_default_menu_item menu-item-depth-1">
                    <a 
                                                href="/tai-chinh" 
                       
                        title="Tài chính"
                        
                        >Tài chính</a>
                        
                                    </li>
                    </ul>
        <i class='responsive-caret'></i>
    </li>
        
</ul>

<div class="device-menu-wrap mom_visibility_device">
    <div id="menu-holder" class="device-menu-holder">
        <i class="fa-icon-align-justify mh-icon"></i> <span class="the_menu_holder_area"><i class="dmh-icon"></i>Menu</span><i class="mh-caret"></i>
    </div>
    <ul class="device-menu mom_visibility_device" id="main_menu_mobile">
    </ul>  
</div>            <div class="nav-buttons">
                <span class="nav-button nav-search">
                    <i class="fa-icon-search"></i>
                </span>
                <div class="nb-inner-wrap search-wrap border-box">
                    <div class="nb-inner sw-inner">
                        <div class="search-form mom-search-form">
                            <form method="get" id="search_form_top" action="https://www.google.com.vn/search" target="_blank" onsubmit="jQuery('#q').val('site:freetuts.net ' + jQuery('#q_tmp').val())">
                                <input class="sf" type="text" placeholder="Search ..." value="" onkeypress="" autocomplete="off" id="q_tmp" />
                                <input type="hidden" name="q" id="q" value=""/>
                                <button class="button" type="submit"><i class="fa-icon-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>             
            <div class="boxed-content-wrapper clearfix">
                
                                
<div class="inner" id="breaking_news">
    <div class="breaking-news">
        <div class="the_ticker" >
            <div class="bn-title"><span><a href="/roundup" title="tin tức công nghệ">Roundups</a></span></div>
            <div class="news-ticker">
                <ul>
                                        <li><a href="https://freetuts.net/khoa-hoc/ma-giam-gia-unica" title="Mã giảm giá Unica">Mã giảm giá Unica</a></li>
                                        <li><a href="https://freetuts.net/giam-gia/tinohost-giam-30-va-nhan-doi-thoi-gian-60.html" title="Tinohost giảm 30% và nhân đôi thời gian sử dụng hosting">Tinohost giảm 30% và nhân đôi thời gian sử dụng hosting</a></li>
                                    </ul>
            </div>
        </div>
    </div>
</div>    
                                <div class="inner">
                   

<div class="" style="line-height: 30px; margin-bottom: 10px;" >
    <div itemscope itemtype="https://schema.org/BreadcrumbList">
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="https://freetuts.net" title="Trang chủ">
                    <span itemprop="name">Trang chủ</span>
                    <meta itemprop="position" content="1" />
                </a>
            </span>
            > 
                    
                    <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">

                        <a itemprop="item" href="https://freetuts.net/hoc-php" title="PHP">
                            <span itemprop="name">PHP</span>

                            <meta itemprop="position" content="2" />
                        </a>
                    </span>
              
                    
    </div>
</div>    
 
                </div>
                                <div class="inner">
    <nav class="second_navigation">
        <div>
            <ul>
                                <li >
                    <a href="https://freetuts.net/hoc-php" title="PHP">PHP</a>
                </li>
                                <li class='active'>
                    <a href="https://freetuts.net/hoc-php/hoc-lap-trinh-php-can-ban" title="PHP căn bản">PHP căn bản</a>
                </li>
                                <li >
                    <a href="https://freetuts.net/hoc-php/hoc-lap-trinh-php-nang-cao" title="PHP nâng cao">PHP nâng cao</a>
                </li>
                                <li >
                    <a href="https://freetuts.net/hoc-php/ung-dung-note-va-chat-voi-php" title="Note và Chat với PHP">Note và Chat với PHP</a>
                </li>
                                <li >
                    <a href="https://freetuts.net/hoc-php/tu-hoc-php7" title="Tự học PHP7">Tự học PHP7</a>
                </li>
                                <li >
                    <a href="https://freetuts.net/hoc-php/php-va-mysql" title="PHP và MySQL">PHP và MySQL</a>
                </li>
                                <li >
                    <a href="https://freetuts.net/hoc-php/php-mvc-can-ban" title="PHP MVC căn bản">PHP MVC căn bản</a>
                </li>
                                <li >
                    <a href="https://freetuts.net/hoc-php/web-tin-tuc-php-can-ban" title="Web tin tức PHP căn bản">Web tin tức PHP căn bản</a>
                </li>
                                <li >
                    <a href="https://freetuts.net/hoc-php/hoc-mvc-php-nang-cao" title="MVC PHP nâng cao">MVC PHP nâng cao</a>
                </li>
                                <li >
                    <a href="https://freetuts.net/hoc-php/hoc-ajax" title="PHP Ajax">PHP Ajax</a>
                </li>
                                <li >
                    <a href="https://freetuts.net/hoc-php/hoc-regular-expression-php" title="Regular Expression PHP">Regular Expression PHP</a>
                </li>
                                <li >
                    <a href="https://freetuts.net/hoc-php/hoc-curl-php" title="PHP CURL">PHP CURL</a>
                </li>
                                <li >
                    <a href="https://freetuts.net/hoc-php/file-htaccess" title="Học Htaccess">Học Htaccess</a>
                </li>
                                <li >
                    <a href="https://freetuts.net/hoc-php/bao-mat-website-php" title="Bảo mật website">Bảo mật website</a>
                </li>
                                <li >
                    <a href="https://freetuts.net/hoc-php/design-pattern-php" title="Design Pattern">Design Pattern</a>
                </li>
                                <li >
                    <a href="https://freetuts.net/hoc-php/php-tutorials" title="PHP tutorials">PHP tutorials</a>
                </li>
                            </ul>
        </div>
    </nav>
</div>
                
                                <div class="inner">
                    <div class="abc2side">
    <div id="abcleft" style="overflow: hidden">
        <div id="abcleft-unit">
            <div class="ggad"><ins class="adsbygoogle " style="display:inline-block;width:160px;height:600px" data-ad-client="ca-pub-3652581368701082" data-ad-slot="7762000484"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script></div>        </div>
    </div>
    <div id="abcright" style="overflow: hidden">
        <div id="abcright-unit">
                
             <div class="ggad"><ins class="adsbygoogle " style="display:inline-block;width:160px;height:600px" data-ad-client="ca-pub-3652581368701082" data-ad-slot="7762000484"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script></div>        </div>
    </div>
</div>                    <div class="main_container">
                        <div class="main-col" id="main_container">
                            <blockquote>
    Tuyển CTV viết bài thủ thuật máy tính. <br/>
    <strong>Yêu cầu</strong>: Có hiểu biết về máy tính, cài win, internet, số lượng không giới hạn.<br/>
    <strong>Nhuận bút</strong>: 30 - 100k / bài - tùy chất lượng<br/>
    Liên hệ: https://www.facebook.com/thehalfheart <br/>
    
    <strong style="color: red">!HOT</strong>
    <p>
        <a href="https://freetuts.net/recommended/unica" title="FREETUTS50" class="coupon">Lấy mã</a> - <span style="color: red">Giảm 50%</span> các khác khóa học Unica
    </p>
    <p>
        <a href="https://freetuts.net/recommended/tinohost" title="TINO30_2020" class="coupon">Lấy mã</a> - <span style="color: red">Giảm 30%</span> VPS / Hosting TinoHost
    </p>
    <p>
        <a href="https://freetuts.net/recommended/azdigi" title="Không cần mã" class="coupon">Lấy mã</a> - <span style="color: red">Giảm 30%</span> VPS / Hosting Azdigi
    </p>
</blockquote>
<div class="base-box hasgoto" itemtype="http://schema.org/Article">
    <h1 id="main_title" class="post-tile entry-title" itemprop="headline">Bài 22: Các hàm xử lý file trong php</h1>
    <span id="element_action" data-id="22" data-uri="https://freetuts.net/ajax/view/tut_post"></span> 
    <!--<div style="margin-bottom: 20px">
<div class="sharethis-inline-share-buttons"></div>
</div>-->    <div class="mom-post-meta single-post-meta">

        <span class="author vcard">Đăng bởi:
                TheHalfHeart        </span>
        <span>
            - Vào ngày: <time datetime="2014-08-04T00:53:50+00:00" itemprop="datePublished" class="updated">04-08-2014</time>
        </span>
        
        <span>
            - View: 67115        </span>
    </div>
    <div class="entry-content">
        <div style="margin-top: 20px">
       
                        
                        
            <script type="text/javascript" src="https://app.getresponse.com/view_webform_v2.js?u=wbNix&webforms_id=S8rgl" data-webform-id="S8rgl"></script>            
            <p>Việc <strong>xử lý file trong php rất quan trọng</strong> vì&nbsp;trong các ứng dụng thực tế ta hay dùng file để lưu trữ dữ cache cho website hoặc là lưu trữ một thứ gì đó để cho nhằm giúp ứng dụng chạy nhanh hơn, vì thế tôi viết bài này giúp các bạn làm quen với <strong>một số hàm liên quan đến file </strong>như đọc file, ghi file, tạo folder mới, xóa folder, xóa file. Trong bài này tôi không đề cập đến vấn đề <a href="https://freetuts.net/upload-file-len-server-voi-php-23.html" title="upload file trong php">upload file</a>.</p><div class="content-unit-300-250"><div class="ggad"><ins class="adsbygoogle " style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-3652581368701082" data-ad-slot="5608989174"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script></div></div>


<h2 class="ads_displayed">1. Mở file</h2><div class="content-unit-300-250"><div class="ggad"><ins class="adsbygoogle " style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-3652581368701082" data-ad-slot="5608989174"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script></div></div>

<p>Để mở một file ta dùng cú pháp sau: <span style="color:#800000"><code><span style="color:#000000">open($path, $option)</span></code>. </span>Trong đó <code>$path</code> là đường dẫn đến file cần mở, <code>$option</code> là quyền cho phép thao tác trên file.</p>

<p>Ta có danh sách các quyền sau:</p>

<table cellpadding="1" cellspacing="1" class="bordered" style="width: 100%;">
	<thead>
		<tr>
			<th scope="col">Mode</th>
			<th scope="col">Diễn giải</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>r</td>
			<td>Read only</td>
		</tr>
		<tr>
			<td>r+</td>
			<td>Read + Write</td>
		</tr>
		<tr>
			<td>w</td>
			<td>Write only</td>
		</tr>
		<tr>
			<td>w+</td>
			<td>Write + Read. Nếu file này tồn tại thì nội dung cũ sẽ bị xóa đi và ghi lại nội dung mới, còn nếu file chưa tồn tại thì nó tạo file mới</td>
		</tr>
		<tr>
			<td>a</td>
			<td>Mở dưới dạng append dữ liệu, chỉ có write và nếu file tồn tại nó sẽ ghi tiếp nội dung phía dưới, ngược lại nếu file không tồn tại nó tạo file mới</td>
		</tr>
		<tr>
			<td>a+</td>
			<td>Mở dưới dạng append dữ liệu, bao gồm write và read.&nbsp;<span style="line-height: 20.7999992370605px;">Nếu file tồn tại nó sẽ ghi tiếp nội dung phía dưới, ngược lại nếu file không tồn tại nó tạo file mới</span></td>
		</tr>
		<tr>
			<td>b</td>
			<td>Mở dưới dạng chế độ binary</td>
		</tr>
	</tbody>
</table>

<p>Ví dụ:</p>

<p>&nbsp;</p>

<div><pre class="brush:php;">
// Mở một file, ta dùng dấu @ đặt trước hàm fopen
// để phòng trường hợp đường dẫn $path ta truyền
// vào bị sai nó sẽ không bung lỗi ra màn hình.
// Đường dẫn $path có thể là đường dẫn tương đối
// hoặc tuyệt đối đều được
 
$path = 'demo.txt';
$fp = @fopen($path, "r");
 
// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file không thành công';
}
else{
    echo 'Mở file thành công';
}</pre></div>

<p>&nbsp;</p>

<h2 class="ads_displayed">2. Đọc file</h2><div class="content-unit-300-250"><div class="ggad"><ins class="adsbygoogle " style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-3652581368701082" data-ad-slot="5608989174"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script></div></div>

<p>Có 3 cách đọc file thông thường trong PHP đó là đọc từng dòng, đọc từng ký tự và đọc hết file.</p>

<p>Ta dùng hàm <code>fgetc($fp)</code> để đọc theo từng ký tự, dùng<strong> </strong><code>fgets($fp)</code> để đọc theo từng dòng. Đối với đọc từng dòng và đọc từng ký tự ta phải dùng hàm <code>feof($fp)</code> đặt trong <a href="https://freetuts.net/vong-lap-while-trong-python-685.html" title="vòng lặp while">vòng lặp while</a> để sau khi đọc xong nó sẽ chuyển sang dòng mới hoặc ký tự mới.</p>

<p>Để đọc hết tất cả file ta dùng hàm <code>fread($fp, $size)</code>, trong đó <code>$fp</code> là đối tượng lúc mở file còn <code>$size</code> là kích cỡ của file cần đọc. Để lấy kích cỡ của file cần đọc ta dùng hàm <code>filesize($path)</code>.</p>

<p><strong>Ví dụ</strong>: Đọc file từng ký tự</p>

<p>&nbsp;</p>

<div><pre class="brush:php;">
$fp = @fopen('demo.txt', "r");
 
// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file không thành công';
}
else
{
    // Lặp qua từng ký tự để đọc
    while(!feof($fp))
    {
        echo fgetc($fp);
    }
}</pre></div>

<p>&nbsp;</p>

<p><strong>Ví dụ</strong>: Đọc file từng dòng</p>

<p>&nbsp;</p>

<div><pre class="brush:php;">
$fp = @fopen('demo.txt', "r");
 
// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file không thành công';
}
else
{
    // Lặp qua từng dòng để đọc
    while(!feof($fp))
    {
        echo fgets($fp);
    }
}</pre></div>

<p>&nbsp;</p>

<p><strong>Ví dụ</strong>: Đọc hết file</p>

<p>&nbsp;</p>

<div><pre class="brush:php;">
$fp = @fopen('demo.txt', "r");
 
// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file không thành công';
}
else
{
    // Đọc file và trả về nội dung
    $data = fread($fp, filesize('demo.txt'));
    echo $data;
}</pre></div>

<p>&nbsp;</p>

<h2 class="ads_displayed">3. Ghi file</h2><div class="content-unit-300-250"><div class="ggad"><ins class="adsbygoogle " style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-3652581368701082" data-ad-slot="5608989174"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script></div></div>

<p>Để ghi nội dung vào file ta dùng hàm <code>fwrite($fp, $content)</code> trong đó <code>$fp</code> là đối tượng trả về lúc mở file, còn <code>$content</code> là nội dung muốn ghi vào.</p>

<p>Việc ghi file phụ thuộc vào lúc bạn mở file như thế nào. Ví dụ lúc bạn mở file ghi đè thì lúc ghi file nó sẽ ghi đè, lúc bạn mở file ghi kiểu append thì lúc ghi file nó sẽ thêm xuống cuối file, nếu bạn mở file chỉ cho đọc thì bạn không thể ghi file được.</p>

<p><strong>Ví dụ:</strong></p>

<p>&nbsp;</p>

<div><pre class="brush:php;">
$fp = @fopen('demo.txt', "w");
 
// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file không thành công';
}
else
{
    $data = 'freetuts.net file functions tutorial';
    fwrite($fp, $data);
}</pre></div>

<p>&nbsp;</p>

<h2 class="ads_displayed">4. Đóng File</h2><div class="content-unit-300-250"><div class="ggad"><ins class="adsbygoogle " style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-3652581368701082" data-ad-slot="5608989174"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script></div></div>

<p>Việc mở file để sử dụng mà không đóng file rất nguy hiểm, vì thế sau khi sử dụng xong bạn nên đóng file để an toán hơn. Để đóng file ta dùng hàm <strong>fclose($fp)</strong> trong đó $fp là đối tượng trả về lúc bạn mở file.</p>

<p><strong>Ví dụ:</strong></p>

<p>&nbsp;</p>

<div><pre class="brush:php;">
$fp = @fopen('demo.txt', "w");
 
// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file không thành công';
}
else
{
    $data = 'freetuts.net file functions tutorial';
    // Ghi file
    fwrite($fp, $data);
 
    // Đóng file
    fclose($fp);
}</pre></div>

<p>&nbsp;</p>

<h2 class="ads_displayed">5 Các hàm xử lý file khác</h2><div class="content-unit-300-250"><div class="ggad"><ins class="adsbygoogle " style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-3652581368701082" data-ad-slot="5608989174"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script></div></div>

<p>Sau đây là một số hàm xử lý file khác.</p>

<h3>Kiểm tra file có tồn tại không</h3>

<p>Ta dùng hàm <code>file_exists($path)</code>, trong đó <code>$path</code> là đường dẫn đến file cần kiểm tra, ví dụ:</p>

<p>&nbsp;</p>

<div><pre class="brush:php;">
if (file_exists('demo.txt'))
{
    echo 'File tồn tại';
}</pre></div>

<p>&nbsp;</p>

<h3>Kiểm tra file có được cấp quyền ghi không</h3>

<p>a dùng hàm<strong> </strong><code>is_writable ($path)</code> trong đó <code>$path</code> là đường dẫn đến file cần kiểm tra .</p>

<p><strong>Ví dụ</strong>:</p>

<p>&nbsp;</p>

<div><pre class="brush:php;">
$fp = @fopen('demo.txt', "w");
 
// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file không thành công';
}
else
{
    if (is_writable ('demo.txt')){
        fwrite($fp, 'Welcome');
    }
    fclose($fp);
}</pre></div>

<p>&nbsp;</p>

<h3>Lấy nội dung một file mà không cần dùng hàm fread</h3>

<p>Ta dùng hàm&nbsp; <code>file_get_contents($path)</code> để lấy nội dung của một file, trong đó <code>$path</code> là đường dẫn đến file cần lấy. <code>$path</code> có thể là đường link đến một trang web trên internet thì nó sẽ trả về nội dung html của trang web đó.</p>

<p><strong>Ví dụ</strong>:</p>

<p>&nbsp;</p>

<div><pre class="brush:php;">
// Lấy nội dung file txt
echo file_get_contents('demo.txt');
 
// Lấy nội dung đường link http://www.freetuts.net
echo file_get_contents('http://www.freetuts.net');</pre></div>

<p>&nbsp;</p>

<h3>Ghi nội dung file mà không cần dùng hàm fwrite</h3>

<p><em>Trước khi dùng hàm này bạn nên dùng hàm is_writable để kiểm tra file có được phép ghi không.</em></p>

<p>Ta dùng hàm <code>file_put_contents($path, $noidung)</code> để ghi nội dung cho một file, trong đó <code>$path</code> là đường dẫn đến file cần ghi, <code>$noidung</code> là nội dung bạn muốn ghi vào file.</p>

<p>Ví dụ:</p>

<p>&nbsp;</p>

<div><pre class="brush:php;">
file_put_contents('demo.txt', 'noi dung');</pre></div>

<p>&nbsp;</p>

<h3>Đổi tên file</h3>

<p>Để đổi tên file ta dùng hàm <code>rename($oldname, $newname)</code><strong>,</strong> trong đó <code>$oldname</code> là đường dẫn đến file cần đổi tên, <code>$newname</code> là đường dẫn mới có kèm tên file cần đổi . Nếu bạn chỉ muốn đổi tên thôi thì đường dẫn của cả 2 biến giống nhau, chỉ khác nhau ở cái tên file. Nếu tên file mới bị trùng thì file đó sẽ bị ghi đè.</p>

<p>Ví dụ:</p>

<p>&nbsp;</p>

<div><pre class="brush:php;">
rename('demo.txt', 'demo2.txt');</pre></div>

<p>&nbsp;</p>

<h3>Copy file</h3>

<p>Để copy sang file mới ta dùng hàm <code>copy($source, $dest)</code>, trong đó <code>$source</code> là path file cần copy và <code>$dest</code> là path file cần di chuyển tới. Nếu bạn muốn đổi luôn tên thì đường dẫn <code>$dest</code> bạn khai báo một cái tên khác.</p>

<p>Ví dụ:</p>

<p>&nbsp;</p>

<div><pre class="brush:php;">
if (!copy('demo2.txt', 'demo3.txt'))
{
    echo 'Copy thất bại';
}</pre></div>

<p>&nbsp;</p>

<h3>Xóa file</h3>

<p>Ta dùng hàm <code>unlink($path)</code> để xóa file, trong đó <code>$path</code> là đường dẫn đến file cần xóa, ví dụ:</p>

<p>&nbsp;</p>

<div><pre class="brush:php;">
if (file_exists('demo.txt'))
{
    unlink('demo.txt');
}</pre></div>

<p>&nbsp;</p>

<h3>Kiểm tra một đường dẫn folder có tồn tại không</h3>

<p>Ta dùng <a href="https://freetuts.net/xay-dung-ham-trong-php-11.html" title="hàm">hàm</a> <strong>is_dir($filename)</strong>, trong đó $filename là đường dẫn đến folder cần kiểm tra.</p>

<p>Ví dụ:</p>

<p>&nbsp;</p>

<div><pre class="brush:php;">
if(is_dir('system')){
    echo 'Folder Tồn Tại';
}</pre></div>

<p>&nbsp;</p>

<h3>Tạo một folder mới</h3>

<p>Ta dùng hàm <code>mkdir($path)</code> để tạo folder mới, trong đó <code>$path</code> là đường dẫn đến folder cần tạo. Bạn lưu ý folder cuối cùng chính là tên folder bạn cần tạo và tất cả các folder trước nó bạn chắc chắn là phải có, nếu không sẽ bị lỗi.</p>

<p>Ví dụ:</p>

<p>&nbsp;</p>

<div><pre class="brush:php;">
// Kiểm tra folder parent chưa có chưa, nếu có thì tạo folder con
if(is_dir('parent/sub')){
    mkdir('parent/sub');
}</pre></div>

<p>&nbsp;</p>

<h2 class="ads_displayed">6. Lời kết</h2><div class="content-unit-300-250"><div class="ggad"><ins class="adsbygoogle " style="display:inline-block;width:336px;height:280px" data-ad-client="ca-pub-3652581368701082" data-ad-slot="5608989174"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script></div></div>

<p>Trên&nbsp;là những hàm xử lý file hay dùng, vì tôi không thể liệt kê hết được nên nếu bạn muốn tham khảo thêm thì vào <a  href="http://www.php.net/manual/en/function.popen.php"   title="file" target="_blank" rel="nofollow">đây </a>để xem thêm. Bài tiếp theo chúng ta sẽ học làm thế nào để <a href="https://freetuts.net/upload-file-len-server-voi-php-23.html" title="upload file trong PHP">upload file trong PHP</a>.</p><script type="text/javascript" src="https://freetuts.net/public/syntaxhighlighter/scripts/shCore.js"></script><link type="text/css" rel="stylesheet" href="https://freetuts.net/public/syntaxhighlighter/styles/shCoreDefault.css"/><script type="text/javascript" src="https://freetuts.net/public/syntaxhighlighter/scripts/shBrushPhp.js"></script><script type="text/javascript"> SyntaxHighlighter.config.stripBrs = false; /*SyntaxHighlighter.config.tagName = "pre";*/ SyntaxHighlighter.defaults["gutter"] = true; SyntaxHighlighter.all();</script>            
            
            
                            
                        
                            
                            <div style=" border: solid 5px #ff08a8; padding: 20px; margin: 40px 0px">
                <h4 style="text-align: center; font-size: 20px; color: #e74c3c">Gợi ý cho bạn, một khóa học PHP MVC rất hay</h4>
                
                <div style="margin-bottom: -20px">
                    <p>Bạn mất quá nhiều thời gian học PHP nhưng không hiệu quả? Mình biết một khóa học sẽ giúp bạn học nhanh hơn mà&nbsp;giá lại rất rẻ, chỉ vài ly cà phê là bạn có thể mua và học trên chính trang chủ của họ. Mình nhận mua 2 khóa học này giúp bạn với chi phí rẻ nhất, đảm bảo uy tín nhé.</p>

<ul>
	<li><a href="https://freetuts.net/khoa-hoc/khoa-hoc-lap-trinh-web-phpmysql-theo-mo-hinh-mvc-9.html" rel="nofollow" target="_blank" title="Khóa học lập trình web PHP/MySQL theo mô hình MVC (18)">Khóa học lập trình web PHP/MySQL theo mô hình MVC</a>&nbsp;(P1)</li>
	<li><a href="https://freetuts.net/khoa-hoc/khoa-hoc-lap-trinh-web-phpmysql-theo-mo-hinh-mvc-9.html" rel="nofollow" target="_blank" title="Khóa học lập trình web PHP/MySQL theo mô hình MVC (18)">Khóa học lập trình web PHP/MySQL theo mô hình MVC</a>&nbsp;(P2)</li>
</ul>

<p>Tốt nhất bạn nên mua <a href="https://freetuts.net/khoa-hoc/combo-2-khoa-hoc-lap-trinh-php-va-mysql-mvc-tu-can-ban-den-nang-cao-33.html" rel="nofollow" target="_blank">combo cả 2 khóa</a> để có giá rẻ nhất nhé.</p>                </div>
            </div>
    
       
            <div style="overflow: hidden">
    
    <div class='one_half'>
                    <a class="call-to-action" href="https://freetuts.net/cac-ham-xu-ly-mang-trong-php-21.html" title="Bài 21: Các hàm xử lý mảng trong php"><i class="momizat-icon-previous"></i>BÀI KẾ SAU</a>
            
    </div>
    
    <div class='one_half last' style="text-align: right">
                    <a class="call-to-action" href="https://freetuts.net/upload-file-len-server-voi-php-23.html" title="Bài 23: Upload file lên server với php">BÀI KẾ TIẾP <i class="momizat-icon-next"></i></a>
            </div>
    
    <div class="clearboth"></div>
</div>
              
            <p style="text-align: right; font-style: italic; margin-top: 10px">
    Nguồn: <a href="https://freetuts.net" title="chia sẻ kiến thức miễn phí">freetuts.net</a>
</p>        </div>
    </div> 
</div>




 <script type='text/javascript'> 
(function(){ 
    var s1=document.createElement('script'),s0=document.getElementsByTagName('script')[0]; 
    s1.async=true; 
    s1.src='//tr.topdevvn.com/js/follow.js'; 
    s1.charset='UTF-8'; 
    s1.setAttribute('crossorigin','*'); 
    s0.parentNode.insertBefore(s1,s0); 
})(); 
</script>
<div class='ml-rcm' rc-type='job' rc-layout='bjobs' rc-li='3' rc-for='url' rc-title='Những việc làm hấp dẫn' token-site='QpoRzXsUUp6TxscrR2hBkKmQoNs7ZMOOMge9hjaxF6ijLK4ncw3FWhyw9RKnruqbA1S6D3ZKpc2LlI%2BMHNv7yQ%3D%3D' animate="off"></div>

<div class="news-box  base-box scrolling-box-wrap">
    <header class="nb-header">
        <h3 class="nb-title"><a href="https://freetuts.net/marketing" title="Marketing">Marketing</a></h3>
    </header>
    <div class="nb-content">
        <div class="scrolling-box">
            <div class="sb-content mom-carousel giam-gia-slide" data-item="3">
                                <div class="sb-item post type-post status-publish format-audio has-post-thumbnail category-life category-world tag-momizat tag-templates tag-themes tag-tutorial tag-wordpress post_format-post-format-audio">
                    <div class="sb-item-img">
                        <a href="https://freetuts.net/kinh-doanh-online-zalo-2554.html" title="Kinh doanh online Zalo: Ý tưởng giúp bán hàng hiệu quả nhất">
                            <img src="https://freetuts.net/upload/tut_post/images/2020/04/24/2554/kinh-doanh-online-zalo(1).jpg" alt="Kinh doanh online Zalo: Ý tưởng giúp bán hàng hiệu quả nhất"/>
                        </a>
                    </div>
                    <h3><a href="https://freetuts.net/kinh-doanh-online-zalo-2554.html" title="Kinh doanh online Zalo: Ý tưởng giúp bán hàng hiệu quả nhất">Kinh doanh online Zalo: Ý tưởng giúp bán hàng hiệu quả nhất</a></h3>
                  
                </div>
                                <div class="sb-item post type-post status-publish format-audio has-post-thumbnail category-life category-world tag-momizat tag-templates tag-themes tag-tutorial tag-wordpress post_format-post-format-audio">
                    <div class="sb-item-img">
                        <a href="https://freetuts.net/hoc-kiem-tien-online-bat-dau-tu-dau-2548.html" title="Học kiếm tiền online bắt đầu từ đâu? Các bước cơ bản cho người mới">
                            <img src="https://freetuts.net/upload/tut_post/images/2020/04/19/2548/hoc-kiem-tien-online-bat-dau-tu-dau.jpg" alt="Học kiếm tiền online bắt đầu từ đâu? Các bước cơ bản cho người mới"/>
                        </a>
                    </div>
                    <h3><a href="https://freetuts.net/hoc-kiem-tien-online-bat-dau-tu-dau-2548.html" title="Học kiếm tiền online bắt đầu từ đâu? Các bước cơ bản cho người mới">Học kiếm tiền online bắt đầu từ đâu? Các bước cơ bản cho người mới</a></h3>
                  
                </div>
                                <div class="sb-item post type-post status-publish format-audio has-post-thumbnail category-life category-world tag-momizat tag-templates tag-themes tag-tutorial tag-wordpress post_format-post-format-audio">
                    <div class="sb-item-img">
                        <a href="https://freetuts.net/landbot-cong-cu-chatbot-2326.html" title="Landbot - Công cụ Chatbot giúp bạn tư vấn khách hàng tự động">
                            <img src="https://freetuts.net/upload/tut_post/images/2020/03/22/2326/landbot.jpg" alt="Landbot - Công cụ Chatbot giúp bạn tư vấn khách hàng tự động"/>
                        </a>
                    </div>
                    <h3><a href="https://freetuts.net/landbot-cong-cu-chatbot-2326.html" title="Landbot - Công cụ Chatbot giúp bạn tư vấn khách hàng tự động">Landbot - Công cụ Chatbot giúp bạn tư vấn khách hàng tự động</a></h3>
                  
                </div>
                                <div class="sb-item post type-post status-publish format-audio has-post-thumbnail category-life category-world tag-momizat tag-templates tag-themes tag-tutorial tag-wordpress post_format-post-format-audio">
                    <div class="sb-item-img">
                        <a href="https://freetuts.net/ma-giam-gia-80-tai-ktcity-2324.html" title="Mã giảm giá 80% các khóa học Marketing - Kiếm tiền online tại KtCity">
                            <img src="https://freetuts.net/upload/tut_post/images/2020/03/22/2324/ma-giam-gia-80-ktcity.jpg" alt="Mã giảm giá 80% các khóa học Marketing - Kiếm tiền online tại KtCity"/>
                        </a>
                    </div>
                    <h3><a href="https://freetuts.net/ma-giam-gia-80-tai-ktcity-2324.html" title="Mã giảm giá 80% các khóa học Marketing - Kiếm tiền online tại KtCity">Mã giảm giá 80% các khóa học Marketing - Kiếm tiền online tại KtCity</a></h3>
                  
                </div>
                                <div class="sb-item post type-post status-publish format-audio has-post-thumbnail category-life category-world tag-momizat tag-templates tag-themes tag-tutorial tag-wordpress post_format-post-format-audio">
                    <div class="sb-item-img">
                        <a href="https://freetuts.net/email-marketing-voi-getresponse-2267.html" title="Quản lý Email Marketing với Getresponse đầy đủ nhất (Giao diện 2020)">
                            <img src="https://freetuts.net/upload/tut_post/images/2020/03/15/2267/getresponse-email-marketing.jpg" alt="Quản lý Email Marketing với Getresponse đầy đủ nhất (Giao diện 2020)"/>
                        </a>
                    </div>
                    <h3><a href="https://freetuts.net/email-marketing-voi-getresponse-2267.html" title="Quản lý Email Marketing với Getresponse đầy đủ nhất (Giao diện 2020)">Quản lý Email Marketing với Getresponse đầy đủ nhất (Giao diện 2020)</a></h3>
                  
                </div>
                                <div class="sb-item post type-post status-publish format-audio has-post-thumbnail category-life category-world tag-momizat tag-templates tag-themes tag-tutorial tag-wordpress post_format-post-format-audio">
                    <div class="sb-item-img">
                        <a href="https://freetuts.net/lam-website-kiem-tien-voi-affiliate-2265.html" title="Mô hình làm website kiếm tiền với affiliate">
                            <img src="https://freetuts.net/upload/tut_post/images/2020/03/15/2265/lam-website-kiem-tien-online.jpg" alt="Mô hình làm website kiếm tiền với affiliate"/>
                        </a>
                    </div>
                    <h3><a href="https://freetuts.net/lam-website-kiem-tien-voi-affiliate-2265.html" title="Mô hình làm website kiếm tiền với affiliate">Mô hình làm website kiếm tiền với affiliate</a></h3>
                  
                </div>
                                <div class="sb-item post type-post status-publish format-audio has-post-thumbnail category-life category-world tag-momizat tag-templates tag-themes tag-tutorial tag-wordpress post_format-post-format-audio">
                    <div class="sb-item-img">
                        <a href="https://freetuts.net/kiem-tien-voi-accesstrade-2256.html" title="Hướng dẫn kiếm tiền với AccessTrade đầy đủ nhất A - Z (2020)">
                            <img src="https://freetuts.net/upload/tut_post/images/2020/03/14/2256/kiem-tien-accesstrade.jpg" alt="Hướng dẫn kiếm tiền với AccessTrade đầy đủ nhất A - Z (2020)"/>
                        </a>
                    </div>
                    <h3><a href="https://freetuts.net/kiem-tien-voi-accesstrade-2256.html" title="Hướng dẫn kiếm tiền với AccessTrade đầy đủ nhất A - Z (2020)">Hướng dẫn kiếm tiền với AccessTrade đầy đủ nhất A - Z (2020)</a></h3>
                  
                </div>
                                <div class="sb-item post type-post status-publish format-audio has-post-thumbnail category-life category-world tag-momizat tag-templates tag-themes tag-tutorial tag-wordpress post_format-post-format-audio">
                    <div class="sb-item-img">
                        <a href="https://freetuts.net/kiem-tien-voi-nghe-content-writer-2244.html" title="Content writer là gì? Hướng dẫn kiếm tiền với nghề viết content thuê">
                            <img src="https://freetuts.net/upload/tut_post/images/2020/03/12/2244/content-writer-la-gi.jpg" alt="Content writer là gì? Hướng dẫn kiếm tiền với nghề viết content thuê"/>
                        </a>
                    </div>
                    <h3><a href="https://freetuts.net/kiem-tien-voi-nghe-content-writer-2244.html" title="Content writer là gì? Hướng dẫn kiếm tiền với nghề viết content thuê">Content writer là gì? Hướng dẫn kiếm tiền với nghề viết content thuê</a></h3>
                  
                </div>
                                <div class="sb-item post type-post status-publish format-audio has-post-thumbnail category-life category-world tag-momizat tag-templates tag-themes tag-tutorial tag-wordpress post_format-post-format-audio">
                    <div class="sb-item-img">
                        <a href="https://freetuts.net/tu-coder-tro-thanh-nha-marketing-kiem-tien-online-2238.html" title="Chia sẻ con đường từ CODER tham gia kiếm tiền online bị sấp mặt">
                            <img src="https://freetuts.net/upload/tut_post/images/2020/03/05/2238/tu-coder-tro-thanh-nha-marketing-kiem-tien-online.jpg" alt="Chia sẻ con đường từ CODER tham gia kiếm tiền online bị sấp mặt"/>
                        </a>
                    </div>
                    <h3><a href="https://freetuts.net/tu-coder-tro-thanh-nha-marketing-kiem-tien-online-2238.html" title="Chia sẻ con đường từ CODER tham gia kiếm tiền online bị sấp mặt">Chia sẻ con đường từ CODER tham gia kiếm tiền online bị sấp mặt</a></h3>
                  
                </div>
                            </div>
        </div>
    </div>
</div>

<div class="news-box tutorials-box">
    <header class="nb-header">
        <h2 class="nb-title"><span>Ngẫu nhiên</span></h2>
    </header> 
    <div class="nb-content">
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-format="autorelaxed"
            data-ad-client="ca-pub-3652581368701082"
            data-ad-slot="4407390042"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
 </div>
                            
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="sidebar main-sidebar" id="right_sidebar" style="position: relative">
                    

<div class="weather-widget blog widget weather-categories " style="border: solid 4px #09d809">
    <div class="widget-head">
        <h3 class="widget-title">
            <span>KHÓA HỌC NỔI BẬT</span>
        </h3>
    </div>
    <div class="next-days">
        <ol>
            <li>
                <div class="day-summary">
                    <div class="d-decs" style="padding-left: 10px">
                        <i class="momizat-icon-star" style="color:#ffa507" ></i>  
                        <a class="uppercase" href="https://freetuts.net/khoa-hoc/khoa-hoc-javascript-tu-dau-8.html" 
                           title="khóa học javascript">
                            Javascript (<span style="color: blue; font-weight: bold">160k</span>)</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="day-summary">
                    <div class="d-decs" style="padding-left: 10px">
                        <i class="momizat-icon-star" style="color:#ffa507" ></i>  
                        <a class="uppercase" href="https://freetuts.net/khoa-hoc/khoa-hoc-lap-trinh-jquery-tu-can-ban-den-nang-cao-42.html" 
                           title="khóa học jquery">
                               jQuery (<span style="color: blue; font-weight: bold">160k</span>)</a>
                    </div>
                </div>
            </li>
            
            <li>
                <div class="day-summary">
                    <div class="d-decs" style="padding-left: 10px">
                        <i class="momizat-icon-star" style="color:#ffa507" ></i>  
                        <a class="uppercase" href="https://freetuts.net/khoa-hoc/combo-khoa-hoc-lap-trinh-frontend-tu-can-ban-den-nang-cao-67.html" 
                           title="HTML/CSS">
                               Frontend A-Z (<span style="color: blue; font-weight: bold">458</span>)</a>
                    </div>
                </div>
            </li>
            
            <li>
                <div class="day-summary">
                    <div class="d-decs" style="padding-left: 10px">
                        <i class="momizat-icon-star" style="color:#ffa507" ></i>  
                        <a class="uppercase" href="https://freetuts.net/khoa-hoc/khoa-hoc-thuc-hanh-thiet-ke-database-va-truy-van-csdl-voi-mysql-93.html" 
                           title="HTML/CSS">
                               MySQL (<span style="color: blue; font-weight: bold">160</span>)</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="day-summary">
                    <div class="d-decs" style="padding-left: 10px">
                        <i class="momizat-icon-star" style="color:#ffa507" ></i>  
                        <a class="uppercase" href="https://freetuts.net/khoa-hoc/react-js-va-redux-tao-ung-dung-fullstack-voi-node-js-+-react-js-14.html" 
                           title="reactjs">
                               ReactJS (<span style="color: blue; font-weight: bold">160k</span>)</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="day-summary">
                    <div class="d-decs" style="padding-left: 10px">
                        <i class="momizat-icon-star" style="color:#ffa507" ></i>  
                        <a class="uppercase" href="https://freetuts.net/khoa-hoc/nodejs-ket-hop-mongodb-mongoose-va-postgresql-13.html" 
                           title="nodejs">
                               NodeJS (<span style="color: blue; font-weight: bold">160k</span>)</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="day-summary">
                    <div class="d-decs" style="padding-left: 10px">
                        <i class="momizat-icon-star" style="color:#ffa507" ></i>  
                        <a class="uppercase" href="https://freetuts.net/khoa-hoc/combo-2-khoa-hoc-lap-trinh-php-va-mysql-mvc-tu-can-ban-den-nang-cao-33.html" 
                           title="nodejs">
                               PHP MVC (<span style="color: blue; font-weight: bold">279k</span>)</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="day-summary">
                    <div class="d-decs" style="padding-left: 10px">
                        <i class="momizat-icon-star" style="color:#ffa507" ></i>  
                        <a class="uppercase" href="https://freetuts.net/khoa-hoc/combo-khoa-hoc-tung-buoc-tro-thanh-fullstack-developer-68.html" 
                           title="nodejs">
                               Full stack (<span style="color: blue; font-weight: bold">780k</span>)</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="day-summary">
                    <div class="d-decs" style="padding-left: 10px">
                        <i class="momizat-icon-star" style="color:#ffa507" ></i>  
                        <a style="color: red" class="uppercase" href="https://freetuts.net/khoa-hoc/tao-combo" 
                           title="nodejs">
                               Tạo Combo</a>
                    </div>
                </div>
            </li>
        </ol>
    </div>
</div>
                            <div id="sidebar_right_tut_series_post">
                <div class="widget widget_categories cate_post_list weather-categories">
       <div class="widget-head">
            <h3 class="widget-title">
                <span>DANH SÁCH BÀI HỌC</span>
            </h3>
        </div>
        <div id="scroll-post">
            <ul class='cate-more-wapper'>
                <!--<li class="cat-item ">
                    <a href="https://freetuts.net/hoc-php/hoc-lap-trinh-php-can-ban" title="Giới thiệu" >Giới thiệu</a>
                </li> -->
                
                                                    <li class="cate-more current">
                        <span style="text-transform: uppercase; padding-left: 5px;">Lý thuyết</span>
                    </li>
                                                                                        <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/huong-dan-cai-dat-vertrigo-server-1.html" title="PHP - Cài đặt vertrigo">PHP - Cài đặt vertrigo (1)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/khai-bao-bien-va-hang-so-trong-php-2.html" title="PHP - Biến và hằng số">PHP - Biến và hằng số (2)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/cac-kieu-du-lieu-trong-php-3.html" title="PHP - Các kiểu dữ liệu">PHP - Các kiểu dữ liệu (3)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/toan-tu-va-bieu-thuc-trong-php-4.html" title="PHP - Toán tử và biểu thức">PHP - Toán tử và biểu thức (4)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/cau-lenh-if-else-trong-php-5.html" title="PHP - lệnh if else">PHP - lệnh if else (5)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/cau-lenh-switch-case-trong-php-6.html" title="PHP - Lệnh switch case">PHP - Lệnh switch case (6)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/vong-lap-for-trong-php-7.html" title="PHP - Vòng lặp for">PHP - Vòng lặp for (7)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/vong-lap-while-va-do-while-trong-php-8.html" title="PHP - Vòng lặp while và do while">PHP - Vòng lặp while và do while (8)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/vong-lap-foreach-trong-php-9.html" title="PHP - Vòng lặp foreach">PHP - Vòng lặp foreach (9)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/lenh-break-continue-goto-die-exit-trong-php-10.html" title="PHP - Lệnh break - goto - die - exit">PHP - Lệnh break - goto - die - exit (10)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/xay-dung-ham-trong-php-11.html" title="PHP - Xây dựng hàm">PHP - Xây dựng hàm (11)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/giai-thuat-de-quy-trong-php-12.html" title="PHP - Giải thuật đệ quy">PHP - Giải thuật đệ quy (12)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/thuat-toan-sap-xep-noi-bot-trong-php-13.html" title="PHP - Thuật toán sắp xếp nổi bọt">PHP - Thuật toán sắp xếp nổi bọt (13)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/thuat-toan-tim-kiem-tuyen-tinh-trong-php-14.html" title="PHP - Tìm kiếm tuyến tính">PHP - Tìm kiếm tuyến tính (14)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/ky-thuat-dat-linh-canh-trong-php-15.html" title="PHP - Kỹ thuật đặt lính canh">PHP - Kỹ thuật đặt lính canh (15)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/ky-thuat-dat-co-hieu-trong-php-16.html" title="PHP - Kỹ thuật đặt cờ hiệu">PHP - Kỹ thuật đặt cờ hiệu (16)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/thuat-toan-sap-xep-chon-trong-php-17.html" title="PHP - Sắp xếp chọn">PHP - Sắp xếp chọn (17)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/thuat-toan-sap-xep-chen-trong-php-18.html" title="PHP - Sắp xếp chèn">PHP - Sắp xếp chèn (18)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/phuong-thuc-get-va-post-trong-php-19.html" title="PHP - GET và POST">PHP - GET và POST (19)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/cac-ham-xu-ly-chuoi-trong-php-20.html" title="PHP - Các hàm xử lý chuỗi">PHP - Các hàm xử lý chuỗi (20)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/cac-ham-xu-ly-mang-trong-php-21.html" title="PHP - Các hàm xử lý mảng">PHP - Các hàm xử lý mảng (21)</a>
                        </li>
                                                                                                                    <li class="cat-item  active">
                            <a style="text-transform: initial !important" href="https://freetuts.net/cac-ham-xu-ly-file-trong-php-22.html" title="PHP - Các hàm xử lý file">PHP - Các hàm xử lý file (22)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/upload-file-len-server-voi-php-23.html" title="PHP - Upload file lên server">PHP - Upload file lên server (23)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/cac-ham-kiem-tra-du-lieu-trong-php-24.html" title="PHP - Các hàm kiểm tra dữ liệu">PHP - Các hàm kiểm tra dữ liệu (24)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/session-va-cookie-trong-php-25.html" title="PHP - Session và Cookie">PHP - Session và Cookie (25)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/ham-isset-va-empty-trong-php-350.html" title="PHP -  Hàm isset() và empty()">PHP -  Hàm isset() và empty() (26)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/xu-ly-truy-van-du-lieu-mysql-voi-php-646.html" title="PHP -  Truy vấn dữ liệu MySQL">PHP -  Truy vấn dữ liệu MySQL (27)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/lenh-require-require_once-include-include_once-trong-php-647.html" title="PHP -  require, require_once, include, include_once">PHP -  require, require_once, include, include_once (28)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/xu-ly-ngay-thang-trong-php-649.html" title="PHP - Xử lý ngày tháng (date)">PHP - Xử lý ngày tháng (date) (29)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/tim-hieu-ham-header-trong-php-653.html" title="PHP - Hàm Header">PHP - Hàm Header (30)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/php-filter-ham-filtervar-trong-php-657.html" title="PHP -  Hàm filter_var">PHP -  Hàm filter_var (31)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/header-request-va-header-response-670.html" title="PHP - Header Request và Header Response">PHP - Header Request và Header Response (32)</a>
                        </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <li class="cate-more current">
                        <span style="text-transform: uppercase; padding-left: 5px;">Xử lý Form</span>
                    </li>
                                                                                        <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/gioi-thieu-phan-xu-ly-form-trong-php-1677.html" title="PHP - Giới thiệu phần xử lý form">PHP - Giới thiệu phần xử lý form (33)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/hieu-ve-request-va-response-trong-lap-trinh-web-676.html" title="PHP - Request và Response">PHP - Request và Response (34)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/xu-ly-form-voi-phuong-thuc-get-677.html" title="PHP -  Xử lý form với GET">PHP -  Xử lý form với GET (35)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/xu-ly-form-voi-phuong-thuc-post-678.html" title="PHP - Xử lý form với POST">PHP - Xử lý form với POST (36)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/validate-form-bang-javascript-679.html" title="PHP - Validate form Javascript">PHP - Validate form Javascript (37)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/validate-form-bang-php-680.html" title="PHP - Validate form bằng PHP">PHP - Validate form bằng PHP (38)</a>
                        </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li class="cate-more current">
                        <span style="text-transform: uppercase; padding-left: 5px;">Bài tập</span>
                    </li>
                                                                                        <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/gioi-thieu-phan-bai-tap-php-can-ban-co-loi-giai-1676.html" title="PHP - Giới thiệu phần bài tập">PHP - Giới thiệu phần bài tập (39)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/giai-phuong-trinh-bac-nhat-mot-an-bang-php-650.html" title="PHP - Giải phương trình bậc nhất">PHP - Giải phương trình bậc nhất (40)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/giai-phuong-trinh-bac-hai-mot-an-bang-php-651.html" title="PHP - Giải phương trình bậc hai">PHP - Giải phương trình bậc hai (41)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/bai-tap-thuc-hanh-voi-mang-array-trong-php-656.html" title="PHP - Thực hành với Array">PHP - Thực hành với Array (42)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/chuong-trinh-quan-ly-sinh-vien-php-luu-session-652.html" title="PHP - Quản lý học sinh Session">PHP - Quản lý học sinh Session (44)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/ket-noi-co-so-du-lieu-mysql-su-dung-mysqli-trong-php-191.html" title="PHP - Kết nối CSDL với MYSQLI">PHP - Kết nối CSDL với MYSQLI (45)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/chuong-trinh-quan-ly-sinh-vien-php-luu-database-654.html" title="PHP - Quản lý học sinh lưu DB">PHP - Quản lý học sinh lưu DB (46)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/xay-dung-chuc-nang-dang-ky-thanh-vien-voi-php-va-mysql-192.html" title="PHP - Đăng ký thành viên">PHP - Đăng ký thành viên (47)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/xay-dung-chuc-nang-tim-kiem-voi-lenh-like-trong-php-89.html" title="PHP - Tìm kiếm với lệnh LIKE">PHP - Tìm kiếm với lệnh LIKE (48)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/xay-dung-chuc-nang-dang-nhap-va-dang-ky-voi-php-va-mysql-85.html" title="PHP - Đăng nhập và đăng ký">PHP - Đăng nhập và đăng ký (49)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/xay-dung-chuc-nang-dang-nhap-moi-duoc-download-file-105.html" title="PHP - Đăng nhập để download file">PHP - Đăng nhập để download file (50)</a>
                        </li>
                                                                                                                    <li class="cat-item  ">
                            <a style="text-transform: initial !important" href="https://freetuts.net/tim-hieu-ve-curd-trong-php-thong-qua-ung-dung-quan-li-cau-thu-939.html" title="PHP - Quản lý cầu thủ CURD">PHP - Quản lý cầu thủ CURD (51)</a>
                        </li>
                                                                                                                                    
            </ul>
        </div>
                 <ul class='cate-more-wapper' style="margin-top: 2px; background: #f7f7f7">
            <li style="text-align: center; background: #3498db; border-bottom: 0px">
                <span style="text-transform: uppercase;"><a id="series_list_action" style="color: #fff" href="#" rel="nofollow" title="Danh sách chủ đề">Danh sách chủ đề</a></span>
            </li>
            <li style="padding: 0px;" id="series_list_wrapper">
                <ul style="border: solid 3px #3498db;">
                                        <li><i style="color: #ffa507; margin-right: 5px" class="momizat-icon-star"></i> <a href="https://freetuts.net/hoc-php/hoc-lap-trinh-php-can-ban" title="Học lập trình PHP căn bản">Học lập trình PHP căn bản</a></li>
                                        <li><i style="color: #ffa507; margin-right: 5px" class="momizat-icon-star"></i> <a href="https://freetuts.net/hoc-php/hoc-lap-trinh-php-nang-cao" title="Học lập trình PHP nâng cao">Học lập trình PHP nâng cao</a></li>
                                        <li><i style="color: #ffa507; margin-right: 5px" class="momizat-icon-star"></i> <a href="https://freetuts.net/hoc-php/ung-dung-note-va-chat-voi-php" title="Ứng dụng Note và Chat với PHP">Ứng dụng Note và Chat với PHP</a></li>
                                        <li><i style="color: #ffa507; margin-right: 5px" class="momizat-icon-star"></i> <a href="https://freetuts.net/hoc-php/tu-hoc-php7" title="Tự học PHP7">Tự học PHP7</a></li>
                                        <li><i style="color: #ffa507; margin-right: 5px" class="momizat-icon-star"></i> <a href="https://freetuts.net/hoc-php/php-va-mysql" title="PHP và MySQL">PHP và MySQL</a></li>
                                        <li><i style="color: #ffa507; margin-right: 5px" class="momizat-icon-star"></i> <a href="https://freetuts.net/hoc-php/php-mvc-can-ban" title="PHP MVC căn bản">PHP MVC căn bản</a></li>
                                        <li><i style="color: #ffa507; margin-right: 5px" class="momizat-icon-star"></i> <a href="https://freetuts.net/hoc-php/web-tin-tuc-php-can-ban" title=""></a></li>
                                        <li><i style="color: #ffa507; margin-right: 5px" class="momizat-icon-star"></i> <a href="https://freetuts.net/hoc-php/hoc-mvc-php-nang-cao" title="Học MVC PHP nâng cao">Học MVC PHP nâng cao</a></li>
                                        <li><i style="color: #ffa507; margin-right: 5px" class="momizat-icon-star"></i> <a href="https://freetuts.net/hoc-php/hoc-ajax" title="Học Ajax - PHP Ajax - jQuery Ajax">Học Ajax - PHP Ajax - jQuery Ajax</a></li>
                                        <li><i style="color: #ffa507; margin-right: 5px" class="momizat-icon-star"></i> <a href="https://freetuts.net/hoc-php/hoc-regular-expression-php" title="Học Regular Expression PHP">Học Regular Expression PHP</a></li>
                                        <li><i style="color: #ffa507; margin-right: 5px" class="momizat-icon-star"></i> <a href="https://freetuts.net/hoc-php/hoc-curl-php" title="Học CURL PHP">Học CURL PHP</a></li>
                                        <li><i style="color: #ffa507; margin-right: 5px" class="momizat-icon-star"></i> <a href="https://freetuts.net/hoc-php/file-htaccess" title="File htaccess">File htaccess</a></li>
                                        <li><i style="color: #ffa507; margin-right: 5px" class="momizat-icon-star"></i> <a href="https://freetuts.net/hoc-php/bao-mat-website-php" title="Bảo mật website PHP">Bảo mật website PHP</a></li>
                                        <li><i style="color: #ffa507; margin-right: 5px" class="momizat-icon-star"></i> <a href="https://freetuts.net/hoc-php/design-pattern-php" title="Design Pattern PHP">Design Pattern PHP</a></li>
                                        <li><i style="color: #ffa507; margin-right: 5px" class="momizat-icon-star"></i> <a href="https://freetuts.net/hoc-php/php-tutorials" title="PHP tutorials">PHP tutorials</a></li>
                                                            <li><i style="color: #ffa507; margin-right: 5px" class="momizat-icon-star"></i> <a href="/php-function" title="PHP Function">PHP Function</a></li>
                                    </ul>
            </li>
        </ul>
            </div>
    </div>
                            <div id="f_right_sidebar">
                <div class="widget momizat-reviews">
    <div class="mom-posts-widget">
       <div class="ggad"><ins class="adsbygoogle " style="display:inline-block;width:300px;height:600px" data-ad-client="ca-pub-3652581368701082" data-ad-slot="9963167153"></ins> <script> (adsbygoogle = window.adsbygoogle || []).push({}); </script></div>    </div>
</div>
            </div>
            </div>                    
                    <div class="clear"></div>
                    
                </div>
            </div>
             
            
            
<div id="footer_wrapper">
     <footer id="footer">
        <div class="inner">
            <div class="one_fourth">
                <div class="widget momizat-posts">
                    <div class="widget-head">
                        <h3 class="widget-title">
                            <span style="font-weight: normal">
                                HOT REVIEWS
                            </span>
                        </h3>
                    </div>
                    <div class="mom-posts-widget">
                                                <div class="mpw-post">
                            <div class="post-img main-sidebar-element"><a href="https://freetuts.net/review/oppo-find-x2-pro-365.html">
                                    <img src="https://freetuts.net/upload/product_post/_thumbs/Images/2020/04/18/365/oppo-find-x2-pro.jpg"  alt="Đánh giá Oppo Find X2 Pro: Giá bán, thông số, camera và pin có tốt không?" width="75" height="60"></a>
                            </div>
                            <div class="details has-feature-image">
                                <h4><a href="https://freetuts.net/review/oppo-find-x2-pro-365.html" title="Đánh giá Oppo Find X2 Pro: Giá bán, thông số, camera và pin có tốt không?">Đánh giá Oppo Find X2 Pro: Giá bán, thông số, camera và pin có tốt không?</a></h4>
                            </div>
                        </div>
                                                <div class="mpw-post">
                            <div class="post-img main-sidebar-element"><a href="https://freetuts.net/review/samsung-galaxy-m40-363.html">
                                    <img src="https://freetuts.net/upload/product_post/_thumbs/Images/2020/04/17/363/samsung-galaxy-m40.jpg"  alt="Đánh giá Galaxy M40: Giá bán, thông số và có những màu nào?" width="75" height="60"></a>
                            </div>
                            <div class="details has-feature-image">
                                <h4><a href="https://freetuts.net/review/samsung-galaxy-m40-363.html" title="Đánh giá Galaxy M40: Giá bán, thông số và có những màu nào?">Đánh giá Galaxy M40: Giá bán, thông số và có những màu nào?</a></h4>
                            </div>
                        </div>
                                                <div class="mpw-post">
                            <div class="post-img main-sidebar-element"><a href="https://freetuts.net/review/samsung-galaxy-fold-362.html">
                                    <img src="https://freetuts.net/upload/product_post/_thumbs/Images/2020/04/17/362/samsung-galaxy-fold.jpg"  alt="Đánh giá Galaxy Fold: Giá bán bao nhiêu? Thiết kế độc đáo, camera siêu khủng" width="75" height="60"></a>
                            </div>
                            <div class="details has-feature-image">
                                <h4><a href="https://freetuts.net/review/samsung-galaxy-fold-362.html" title="Đánh giá Galaxy Fold: Giá bán bao nhiêu? Thiết kế độc đáo, camera siêu khủng">Đánh giá Galaxy Fold: Giá bán bao nhiêu? Thiết kế độc đáo, camera siêu khủng</a></h4>
                            </div>
                        </div>
                                                <div class="mpw-post">
                            <div class="post-img main-sidebar-element"><a href="https://freetuts.net/review/samsung-galaxy-note-10-lite-361.html">
                                    <img src="https://freetuts.net/upload/product_post/_thumbs/Images/2020/04/16/361/samsung-galaxy-note-10-lite.jpg"  alt="Đánh giá Samsung Galaxy Note 10 Lite: Thiết kế ấn tượng, camera chụp nét" width="75" height="60"></a>
                            </div>
                            <div class="details has-feature-image">
                                <h4><a href="https://freetuts.net/review/samsung-galaxy-note-10-lite-361.html" title="Đánh giá Samsung Galaxy Note 10 Lite: Thiết kế ấn tượng, camera chụp nét">Đánh giá Samsung Galaxy Note 10 Lite: Thiết kế ấn tượng, camera chụp nét</a></h4>
                            </div>
                        </div>
                                            </div>
                </div>			
            </div>
            
            <div class="one_fourth">
                <div class="widget momizat-posts">
                    <div class="widget-head"><h3 class="widget-title"><span style="font-weight: normal">ROUNDUPS</span></h3></div>
                    <div class="mom-posts-widget">
                                                <div class="mpw-post">
                            <div class="post-img main-sidebar-element"><a href="https://freetuts.net/roundup/cac-dong-dien-thoai-oppo-353.html">
                                    <img src="https://freetuts.net/upload/product_key/_thumbs/Images/2020/04/15/353/cac-dong-dien-thoai-oppo.jpg"  alt="Tìm hiểu các dòng điện thoại Oppo tốt nhất 2020" width="75" height="60"></a>
                            </div>
                            <div class="details has-feature-image">
                                <h4><a href="https://freetuts.net/roundup/cac-dong-dien-thoai-oppo-353.html" title="Tìm hiểu các dòng điện thoại Oppo tốt nhất 2020">Tìm hiểu các dòng điện thoại Oppo tốt nhất 2020</a></h4>
                            </div>
                        </div>
                                                <div class="mpw-post">
                            <div class="post-img main-sidebar-element"><a href="https://freetuts.net/roundup/playstation-5-ps5-se-ra-mat-vao-cuoi-nam-2020-355.html">
                                    <img src="https://freetuts.net/upload/product_post/_thumbs/Images/2020/03/06/233/ps5.jpg"  alt="Playstation 5 (PS5) sẽ ra mắt vào cuối năm 2020 có gì nổi bật?" width="75" height="60"></a>
                            </div>
                            <div class="details has-feature-image">
                                <h4><a href="https://freetuts.net/roundup/playstation-5-ps5-se-ra-mat-vao-cuoi-nam-2020-355.html" title="Playstation 5 (PS5) sẽ ra mắt vào cuối năm 2020 có gì nổi bật?">Playstation 5 (PS5) sẽ ra mắt vào cuối năm 2020 có gì nổi bật?</a></h4>
                            </div>
                        </div>
                                                <div class="mpw-post">
                            <div class="post-img main-sidebar-element"><a href="https://freetuts.net/roundup/danh-sach-dien-thoai-samsung-galaxy-352.html">
                                    <img src="https://freetuts.net/upload/product_series/_thumbs/Images/2020/04/13/784/danh-sach-dien-thoai-samsung-galaxy.jpg"  alt="Danh sách điện thoại Samsung Galaxy từ cổ chí kim đến nay" width="75" height="60"></a>
                            </div>
                            <div class="details has-feature-image">
                                <h4><a href="https://freetuts.net/roundup/danh-sach-dien-thoai-samsung-galaxy-352.html" title="Danh sách điện thoại Samsung Galaxy từ cổ chí kim đến nay">Danh sách điện thoại Samsung Galaxy từ cổ chí kim đến nay</a></h4>
                            </div>
                        </div>
                                                <div class="mpw-post">
                            <div class="post-img main-sidebar-element"><a href="https://freetuts.net/roundup/iphone-12-he-lo-nhung-thong-tin-moi-351.html">
                                    <img src="https://freetuts.net/upload/product_key/_thumbs/Images/2020/03/23/351/iphone-12.jpg"  alt="iPhone 12: Hé lộ những thông tin mới về dòng iPhone 2020 sắp ra mắt" width="75" height="60"></a>
                            </div>
                            <div class="details has-feature-image">
                                <h4><a href="https://freetuts.net/roundup/iphone-12-he-lo-nhung-thong-tin-moi-351.html" title="iPhone 12: Hé lộ những thông tin mới về dòng iPhone 2020 sắp ra mắt">iPhone 12: Hé lộ những thông tin mới về dòng iPhone 2020 sắp ra mắt</a></h4>
                            </div>
                        </div>
                                            </div>
                </div>			
            </div>
            <div class="one_fourth">
                <div class="widget widget_categories">
                    <div class="widget-head"><h3 class="widget-title"><span style="font-weight: normal">KHÓA HỌC</span></h3></div>
                    <div class="mom-posts-widget">
                        <ul>
                            <li><a href="https://freetuts.net/khoa-hoc/khoa-hoc-javascript-tu-dau-8.html" target="_blank" rel="noopener noreferrer nofollow external"><i class="momizat-icon-star" style="color:#FFF" ></i> HỌC <span style="color: pink">JAVASCRIPT</span></a></li>
                            <li><a href="https://freetuts.net/khoa-hoc/combo-khoa-hoc-lap-trinh-frontend-tu-can-ban-den-nang-cao-67.html" target="_blank" rel="noopener noreferrer nofollow external"><i class="momizat-icon-star" style="color:#FFF" ></i> HỌC <span style="color: pink">FRONT-END</span></a></li>
                            <li><a href="https://freetuts.net/khoa-hoc/nodejs-ket-hop-mongodb-mongoose-va-postgresql-13.html" target="_blank" rel="noopener noreferrer nofollow external"><i class="momizat-icon-star" style="color:#FFF" ></i> HỌC <span style="color: pink">NODEJS</span></a></li>
                            <li><a href="https://freetuts.net/khoa-hoc/react-js-va-redux-tao-ung-dung-fullstack-voi-node-js-+-react-js-14.html" target="_blank" rel="noopener noreferrer nofollow external"><i class="momizat-icon-star" style="color:#FFF" ></i> HỌC <span style="color: pink">REACTJS</span></a></li>
                            <li><a href="https://freetuts.net/khoa-hoc/lap-trinh-theme-wordpress-tao-website-hoan-chinh-20.html" target="_blank" rel="noopener noreferrer nofollow external"><i class="momizat-icon-star" style="color:#FFF" ></i> HỌC <span style="color: pink">WORDPRESS</span></a></li>
                            <li><a href="https://freetuts.net/khoa-hoc/khoa-hoc-lap-trinh-jquery-tu-can-ban-den-nang-cao-42.html" target="_blank" rel="noopener noreferrer nofollow external"><i class="momizat-icon-star" style="color:#FFF" ></i> HỌC <span style="color: pink">JQUERY</span></a></li>
                            <li><a href="https://freetuts.net/khoa-hoc/thiet-ke-do-hoa-adobe-ilustrator-adobe-photoshop-49.html" target="_blank" rel="noopener noreferrer nofollow external"><i class="momizat-icon-star" style="color:#FFF" ></i> HỌC <span style="color: pink">PHOTOSHOP</span></a></li>
                            <li><a href="https://freetuts.net/khoa-hoc/combo-khoa-hoc-tung-buoc-tro-thanh-fullstack-developer-68.html" target="_blank" rel="noopener noreferrer nofollow external"><i class="momizat-icon-star" style="color:#FFF" ></i> HỌC <span style="color: pink">COMBO FULLSTACK</span></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
            <div class="one_fourth last">
                <div class="widget momizat-twitter">			
                    <div class="widget-head">
                        <h3 class="widget-title"><span style="font-weight: normal">FREETUTS LÀ AI?</span></h3>
                    </div>	
                    <div>
                        <p>
                            Chào các bạn, mình là <strong style="color: pink">Cường</strong>. Hiện mình đang quản lý blog freetuts.net.</p>
                        <p>Mình là một <strong style="color: pink">lập trình viên</strong>, công việc chính là xây dựng website. Hiện tại mình đang đi theo con đường <strong style="color: pink">kiếm
                        tiền online (MMO)</strong>.</p>
                        <p>
                            Ngoài kiến thức công nghệ ra mình sẽ chia sẻ kinh nghiệm làm MMO đến mọi người. Hãy ủng hộ mình nhé!
                        </p>
                    </div>
                </div>	
            </div>
            <div class="clear"></div>                    
        </div>
    </footer> 
    <div class="copyrights-area" style="margin-bottom: 50px">
        <div class="inner">
            <p class="copyrights-text" style="text-align: center">
                                        
                
                 <a href="/gioi-thieu.html" title="giới thiệu">Giới thiệu</a> |
                 <a href="/chinh-sach-bao-mat.html" title="Chính sách bảo mật">Chính sách bảo mật</a> |
                 <a href="/dieu-khoan-su-dung.html" title="Điều khoản sử dụng">Điều khoản sử dụng</a> |
                 <a href="/lien-he.html" title="liên hệ">Liên hệ</a> 
                 <br/>
                 <a href="//www.dmca.com/Protection/Status.aspx?ID=4495f67a-93e3-4127-a6fe-eb89933037aa" title="DMCA.com Protection Status" class="dmca-badge" target="_blank" rel="nofollow"> 
                    <img style="margin-top: 10px" src="https://freetuts.net/public/dmca-protected.png" alt="DMCA.com Protection Status">
                </a>
            </p>				                
        </div>
    </div>
</div>

<div class="sticky_ads">
    
</div>
<script language="javascript">
    var stickyAd = [];
        
</script>



<div class="tool" id="tool">
    <div class="tcontent">
        <div class="function">
            <div class="func-item" id="menu-data">
                <ul class="mobile-menu">
                                                            <li>
                        <a href="/tutorials" rel="nofollow" title="Tutorials">Tutorials</a>
                        <span class="open closed"></span>
                        <ul>
                            
                                                        <li>
                                <a 
                                    href="https://freetuts.net/web-frontend" 
                                   
                                    title="Web Frontend"

                                    >Web Frontend</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/web-backend" 
                                   
                                    title="Web Backend"

                                    >Web Backend</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/mobile-development" 
                                   
                                    title="Mobile Development"

                                    >Mobile Development</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/programming" 
                                   
                                    title="Programming"

                                    >Programming</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/network" 
                                   
                                    title="Network"

                                    >Network</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/database" 
                                   
                                    title="Database"

                                    >Database</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/cong-cu" 
                                   
                                    title="Công cụ"

                                    >Công cụ</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/tutorials" 
                                   
                                    title="... xem thêm"

                                    >... xem thêm</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li>
                        <a href="#" rel="nofollow" title="Bắt đầu">Bắt đầu</a>
                        <span class="open closed"></span>
                        <ul>
                            
                                                        <li>
                                <a 
                                    href="https://freetuts.net/hoc-lam-web" 
                                   
                                    title="Học làm web"

                                    >Học làm web</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/hoc-kiem-tien-online-bat-dau-tu-dau-2548.html" 
                                   
                                    title="Học kiếm tiền online"

                                    >Học kiếm tiền online</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/webmaster" 
                                   
                                    title="Học quản trị website"

                                    >Học quản trị website</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li>
                        <a href="/giam-gia" rel="nofollow" title="VPS/Hosting">VPS/Hosting</a>
                        <span class="open closed"></span>
                        <ul>
                            
                                                        <li>
                                <a 
                                    href="https://freetuts.net/hosting-viet-nam-nuoc-ngoai-tot-nhat-2547.html" 
                                   
                                    title="Hosting/VPS tốt nhất"

                                    >Hosting/VPS tốt nhất</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/#" 
                                   
                                    title="Trong nước"

                                    >Trong nước</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/#" 
                                   
                                    title="Nước ngoài"

                                    >Nước ngoài</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li>
                        <a href="/mmo" rel="nofollow" title="MMO">MMO</a>
                        <span class="open closed"></span>
                        <ul>
                            
                                                        <li>
                                <a 
                                    href="https://freetuts.net/tin-tuc-mmo" 
                                   
                                    title="Tin Tức MMO"

                                    >Tin Tức MMO</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/digital-marketing" 
                                   
                                    title="Digital Marketing"

                                    >Digital Marketing</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/dropshipping" 
                                   
                                    title="DropShipping"

                                    >DropShipping</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/affiliate-marketing" 
                                   
                                    title="Affiliate Marketing"

                                    >Affiliate Marketing</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/google-adsense" 
                                   
                                    title="Google Adsense"

                                    >Google Adsense</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/rut-gon-link" 
                                   
                                    title="Rút Gọn Link"

                                    >Rút Gọn Link</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/trade-coin" 
                                   
                                    title="Trade Coin"

                                    >Trade Coin</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li>
                        <a href="/thu-thuat" rel="nofollow" title="Thủ thuật">Thủ thuật</a>
                        <span class="open closed"></span>
                        <ul>
                            
                                                        <li>
                                <a 
                                    href="https://freetuts.net/thu-thuat/dien-thoai" 
                                   
                                    title="Điện Thoại"

                                    >Điện Thoại</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/thu-thuat/may-tinh" 
                                   
                                    title="Máy Tính"

                                    >Máy Tính</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/thu-thuat/ky-thuat-so" 
                                   
                                    title="Kỹ Thuật Số"

                                    >Kỹ Thuật Số</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/thu-thuat/game" 
                                   
                                    title="Game"

                                    >Game</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/thu-thuat/ung-dung" 
                                   
                                    title="Ứng dụng"

                                    >Ứng dụng</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/thu-thuat/dien-tu" 
                                   
                                    title="Điện tử"

                                    >Điện tử</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/thu-thuat/xe" 
                                   
                                    title="Xe Hay"

                                    >Xe Hay</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li>
                        <a href="/review" rel="nofollow" title="Review">Review</a>
                        <span class="open closed"></span>
                        <ul>
                            
                                                        <li>
                                <a 
                                    href="https://freetuts.net/review/dien-thoai" 
                                   
                                    title="Điện Thoại"

                                    >Điện Thoại</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/review/may-tinh" 
                                   
                                    title="PC / Laptop"

                                    >PC / Laptop</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/review/ky-thuat-so" 
                                   
                                    title="Kỹ Thuật Số"

                                    >Kỹ Thuật Số</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/review/game" 
                                   
                                    title="Đồ chơi game"

                                    >Đồ chơi game</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/review/ung-dung" 
                                   
                                    title="Ứng dụng"

                                    >Ứng dụng</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/review/dien-tu" 
                                   
                                    title="Đồ điện tử"

                                    >Đồ điện tử</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/review/xe" 
                                   
                                    title="Đồ chơi xe"

                                    >Đồ chơi xe</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li>
                        <a href="/khoa-hoc" rel="nofollow" title="Khóa học">Khóa học</a>
                        <span class="open closed"></span>
                        <ul>
                            
                                                        <li>
                                <a 
                                    href="https://freetuts.net/khoa-hoc/lap-trinh-web" 
                                   
                                    title="Lập trình Web"

                                    >Lập trình Web</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/khoa-hoc/lap-trinh-mobile" 
                                   
                                    title="Lập trình Mobile"

                                    >Lập trình Mobile</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/khoa-hoc/ngon-ngu-lap-trinh" 
                                   
                                    title="Ngôn Ngữ lập trình"

                                    >Ngôn Ngữ lập trình</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/khoa-hoc/tin-hoc-may-tinh" 
                                   
                                    title="Tin học - máy tính"

                                    >Tin học - máy tính</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/khoa-hoc/seo-marketing" 
                                   
                                    title="SEO - Marketing"

                                    >SEO - Marketing</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/khoa-hoc/ngoai-ngu" 
                                   
                                    title="Ngoại Ngữ"

                                    >Ngoại Ngữ</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/khoa-hoc/khoa-pho-thong" 
                                   
                                    title="Khóa phổ thông"

                                    >Khóa phổ thông</a>
                            </li>
                                                    </ul>
                    </li>
                                        <li>
                        <a href="/song" rel="nofollow" title="Đời sống">Đời sống</a>
                        <span class="open closed"></span>
                        <ul>
                            
                                                        <li>
                                <a 
                                    href="https://freetuts.net/sach-hay" 
                                   
                                    title="Sách hay"

                                    >Sách hay</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/mon-hoc" 
                                   
                                    title="Môn học"

                                    >Môn học</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/suc-khoe" 
                                   
                                    title="Sức khỏe"

                                    >Sức khỏe</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/am-thuc" 
                                   
                                    title="Ẩm thực"

                                    >Ẩm thực</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/nha-cua" 
                                   
                                    title="Nhà cửa"

                                    >Nhà cửa</a>
                            </li>
                                                        <li>
                                <a 
                                    href="https://freetuts.net/tai-chinh" 
                                   
                                    title="Tài chính"

                                    >Tài chính</a>
                            </li>
                                                    </ul>
                    </li>
                                    </ul>
            </div>
            <div class="func-item" id="news-data">
                <p style="padding: 10px 10px 0px 10px; font-weight: bold; font-size: 13px;">TIN MỚI</p>
                                <ul class="mobile-menu" id="news_content">
                                     </ul>
            </div>
            
            <div class="func-item" id="share-data">
                <ul class="mobile-menu" id="hotlink_content">
                    <div style="padding: 15px 20px 0px 20px;">
                        <form id="error-contact" action="https://freetuts.net/ajax/contact" method="post" class="wpcf7-form">
                            <div style="display: none;">
                                <input type="hidden" name="ci_csrf_token" value=""/>                                <input type="hidden" id="add_contact_error" name="add_contact_error" value="c549f3aada94d608d8f3115ed6d96c8f"/>                            </div>
                            <p>Nếu bạn phát hiện lỗi sai link, nội dung sai, hay một lỗi bất kì nào đó <strong>trên trang này</strong> thì hãy cho mình biết nhé. Cám ơn bạn!</p>
                            <p id="error_remove">
                                <textarea id="error_question" cols="40" rows="5" placeholder="Nhập nội dung lỗi tại đây"></textarea>
                            </p>
                            <p>
                                <input style="margin-left: 20px" type="submit" value="Gửi báo lỗi" id="send_message_error">
                            </p>
                        </form>
                    </div>
                </ul>
            </div>
        </div>
        <a  href="#" rel="nofollow" class="menu-click" id="menu">
            <img src="https://freetuts.net/public/tool/menu.png"/>
            <span>MENU</span>
        </a>

        <a  href="#" rel="nofollow" class="menu-click" id="news">
            <img src="https://freetuts.net/public/tool/notice.png"/>
            <span>NEWS</span>
        </a>
        <a  href="https://freetuts.net/" rel="nofollow" title="">
            <img src="https://freetuts.net/public/tool/home.png" title=""/>
            <span>HOME</span>
        </a>

        <a  href="#" class="menu-click" id="share" rel="nofollow" >
            <img src="https://freetuts.net/public/tool/hot.gif"/> 
            <span>BÁO LỖI</span>
        </a>

        <a href="#" rel="nofollow" id="totop">
            <img src="https://freetuts.net/public/tool/top.png"/>
            <span>TO TOP</span>
        </a>
        <div style="clear:both"></div>
    </div>
    <!--
    <div id="a-d-s-mobile" >
        <span class="close">X</span>
        <div class="ad-s-content">
            
        </div>
    </div> -->
</div>            
            <div class="clear"></div>
        </div> <!--Boxed wrap-->
        <div class="checkabl" style="display: none">
    <span>Tắt adblock bạn ơi, năn nỉ đấy :| Mình hứa sẽ viết bài chất hơn!</span>
</div>

<script type="text/javascript">
    var config = {
        base_url    : 'https://freetuts.net/'
    };
    
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-136331943-1', 'auto');
            ga('send', 'pageview');
          </script>
<!--[if lt IE 9]>
<script src="https://freetuts.net/public/theme/js/html5.js"></script>
<script src="https://freetuts.net/public/theme/js/IE9.js"></script>
<![endif]-->
<!--<a href="#" rel="nofollow" class="scrollToTop button"><i class="enotype-icon-arrow-up"></i></a>
<a href="#" rel="nofollow" class="scrollToBottom button"><i class="enotype-icon-arrow-down"></i></a> -->        
    </body>

</html>