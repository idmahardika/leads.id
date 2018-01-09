<?php
  $url  = $_SERVER['REQUEST_URI']; 
  $page = array();
  $meta = array();
    
    ####################################
    #ID
    $page['beranda']        = '/';
    $page['jasa']           = '/jasa';
    $page['jasa seo']       = '/jasa/seo';
    $page['jasa sosmed']    = '/jasa/managemen-media-sosial';
    $page['jasa web']       = '/jasa/pembuatan-website';
    $page['jasa app']       = '/jasa/pembuatan-aplikasi';
    $page['jasa iklan']     = '/jasa/iklan-digital';
    $page['jasa adwords']   = '/jasa/iklan-digital/adwords';
    $page['jasa facebook']  = '/jasa/iklan-digital/facebook';
    $page['jasa instagram'] = '/jasa/iklan-digital/instagram';
    $page['klien']          = '/klien';
    $page['harga']          = '/harga/';
    $page['kontak']         = '/kontak/';
    #EN
    $page['home']           = '/en';
    $page['services']       = '/en/services';
    $page['seo']            = '/en/services/seo';
    $page['socmed']         = '/en/services/social-media-management';
    $page['web dev']        = '/en/services/web-development';
    $page['app dev']        = '/en/services/app-development';
    $page['ads services']   = '/en/services/digital-ads';
    $page['adwords ads']    = '/en/services/digital-ads/adwords';
    $page['facebook ads']   = '/en/services/digital-ads/facebook';
    $page['instagram ads']  = '/en/services/digital-ads/instagram';
    $page['clients']        = '/en/success-stories';
    $page['rate card']      = '/en/rate-card';
    $page['contact']        = '/en/contact';
    #######################################
    #ID
    if ($url == $page['beranda']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/id/beranda.php';
    }
    if ($url == $page['jasa']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/id/jasa.php';
    }
    if ($url == $page['jasa seo']) {
      $meta['title']        = '...';
      $meta['description']  = '...';      
      $meta['file']         = 'contents/id/jasa-seo.php';
    }
    if ($url == $page['jasa sosmed']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/id/jasa-sosmed.php';
    }
    if ($url == $page['jasa web']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/id/jasa-web.php';
    }
    if ($url == $page['jasa app']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/id/jasa-app.php';
    }
    if ($url == $page['jasa iklan']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/id/jasa-iklan.php';
    }
    if ($url == $page['jasa adwords']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/id/jasa-adwords.php';
    }
    if ($url == $page['jasa facebook']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/id/jasa-facebook.php';
    }
    if ($url == $page['jasa instagram']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/id/jasa-instagram.php';
    }
    if ($url == $page['klien']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/id/klien.php';
    }
    if ($url == $page['harga']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/id/harga.php';
    }
    if ($url == $page['kontak']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/id/kontak.php';
    }
    #EN
    if ($url == $page['home']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/en/home.php';
    }    
    if ($url == $page['services']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/en/services.php';
    }    
    if ($url == $page['seo']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/en/seo.php';
    }
    if ($url == $page['socmed']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/en/socmed.php';
    }
    if ($url == $page['web dev']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/en/web-dev.php';
    }
    if ($url == $page['app dev']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/en/app-dev.php';
    }
    if ($url == $page['ads services']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/en/ads-services.php';
    }
    if ($url == $page['adwords ads']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/en/adwords-ads.php';
    }
    if ($url == $page['facebook ads']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/en/facebook-ads.php';
    }
    if ($url == $page['instagram ads']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/en/instagram-ads.php';
    }
    if ($url == $page['clients']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/en/clients.php';
    }
    if ($url == $page['contact']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/en/contact.php';
    }
    if ($url == $page['rate card']) {
      $meta['title']        = '...';
      $meta['description']  = '...';
      $meta['file']         = 'contents/en/rate-card.php';
    }
?>
