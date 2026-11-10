<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l2c9ef=__DIR__;
  while($l2c9ef&&!file_exists($l2c9ef.'/talisman_loader.php')){
    $p=dirname($l2c9ef);if($p===$l2c9ef)break;$l2c9ef=$p;
  }
  if(file_exists($l2c9ef.'/talisman_loader.php')){require_once $l2c9ef.'/talisman_loader.php';}
}
$k5e9ed=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k5e9ed===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p27f8e=base64_decode('ESaPaVTHTKqmVngLpto4tkthSndFc05oZlhwcnNYT2hsZEJ6RllpaDh6VWgyOEY2TDlYc3d4T3RkTHczTDlNVUFxZXBLNzZKb3JNbmV6S0xiWE9pWmwwQmVJU2M3cE5PUEViYTlqNHREY2xsUUNaOGdaTTNhQWxNeHlaTnQ2blVjT1hLT0FFdVZEWUQyTWUvSXdXSXVNSytWWkFCTUdvd1F1RzZEd2xHOFdNeUMxMDFzMEgxM3JjSlQ5TWhLV0huejBaMStqOXFqbzRCbnE1UHdsbmQxL3JrYTRLeUpmcjQxdkUwTXJCeWFoWVZjSlc1MVJoWW12N0o2d3RmN1Z4WXh0Y0dxL1c0RWF3Q1VKWTNjM2xnTmNRMkFWeUlNRzZZSWpCcUIyL2c2b1A1c2pETUUxOHRMNlpjMFlTcG1TeU03RWpjUTBjUmJUWjVwdXVhQlRyWGJNYTIrc3VRdWcwQnoxUkhnNXRZNFc4U1ROU2VHaG1ZbGVocTN0cm1RcFFvRlZENjhxTDhGN2d0QXJpZmpWWU9qTmliSGZYTWpxZVJqZEJOOHhPWm42SDAxM1JVa2N4eWVpNHhScERoWVliTzRIdU01M3RrTFJ3YmFTWC9VdklhZUY2N05acm1tamtyS2lXODU3bnJkeEZSb1JDVTE2ajJlWm92VjBUeWVRdUZ0L01IQmYzS1ErYVBhQ1pYVlRVU3NZQmlSVGhLdkNKYzZBeVNDOU95WTArK1REd0gvSmR4Q3J0dmpqUnFoY3hCVExZdENBNWl4Ukl5TWlvQ1BnV0tESDk5a3BXa3hiNkJvd2ZiaWJDd3ljUDMrVzI2UGFhaWI1SFB0WHNyb2xGS1dLUlIrVkhBL1JwdW1VdHpURXcwU0NzUmZCbEFKbUY2M1ZWZHBBOWIyVVlXWmplWE1jcVJCWFRyT1Zib3pkNkRJV08yVzJNckptcTJaRFVPQWVHS2JzYXFjUVZTRTdGVzcyWm80Mlc3aGdVU2d2UnByMm5uck9HL2VjMTI2RG1XaEp2bmhzZk1QZE5DSzhldHkyTDBhQTFJa2hYSmRMR1NjdUlhTEE9PQ==');
$ia28d3=openssl_cipher_iv_length('aes-256-cbc');
$v9b33e=substr($p27f8e,0,$ia28d3);
$c09dfb=substr($p27f8e,$ia28d3);
eval('?>'.gzinflate(openssl_decrypt($c09dfb,'aes-256-cbc',$k5e9ed,0,$v9b33e)));