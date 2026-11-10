<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $le95db=__DIR__;
  while($le95db&&!file_exists($le95db.'/talisman_loader.php')){
    $p=dirname($le95db);if($p===$le95db)break;$le95db=$p;
  }
  if(file_exists($le95db.'/talisman_loader.php')){require_once $le95db.'/talisman_loader.php';}
}
$ked52d=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ked52d===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p2c9d1=base64_decode('Lp4pkWStR+ddMm9YhpkT2WZPSG9VakFIL0F0U0d4ZzE2c1B6bFRBL3Y0WlU1MWcyZnRpN25sU3NyWXNrZUNMY3RBUVFaV2ViYUZSeE4wMjJoQmY1WjJLSWQzV3ZEUWZTNk9OeS9ZUk8vS2lwcjBnMnZYRkRIR2QyWjZSQVUrY3hDVENva2RMcHh5NzRBdXAydG1nTHBvTE5OempUMVFoaUpmSlkvNXlSVEtWdDhzSnZ6eWFQbGpXcGRST3d1d1JURzY3QWdJNjJpcHc1QjFlSlNrS0RtNUFmTjg4dnJJSklMSkZnOGRtVFdneFBlTWp1cC9sM1BKR0NxM3FrQlpQUHIrUGI5WDlWYUVDQ2pEaGZBTzR6ZGVHK2g0RDg0dnEyblJzTkIwcGNFL2E0TGhhbzFYWHZUVXNyUDBTSlVLQTRXRlJTZUg0R1kyVVF2NjJGM2Y2YWVIQmQ3TThUQlFieUp2TkE4R2ZsT0hYRGN3TW5rcDlvZS84K0k2REt5WjFxUDZ1MitPeUN3U1FBV1FyeUlhcjRkN3JkWnhydW9TYm5GVGxxdkhvaGVBZThsZUZRbE15Z3JEOER4SXhNbFlrOHBNVnI5N1JyVjJpTlhsc2YzalBJYnhldzJZTW9nbDg0bkhJVWUweCtZc1k5RC9zYzMydVBsZ0hTZUpIdkg4KzI1TVJmUlJ4aHI5M2FZeVFoNWx6cUpqenFqRVFBcXBuOThRTDAyMStSbXUvWlZ2czZTRUpvQlRiV1c5K0pFdGttWGppOHpDd3lGaEdVVlZPc3c5Z2twaUNpQkt2ang4SjYwdjI5dmV1ODJ1VEZCbnNoK1Z0c2tObThFZTAxTGdONGJpSDJxUlZyVDlLMW4xdWFkMmUzd1MrbDIwazZBUUppUWJQUEpmckhOK09zZEhYSUVGdTNudFdCMjhlYis1MVlYemQzQVNmbXR6UkJuMUNEY3Z5dkMyNk9RWkFUc3BDNjkybS9VQTBRa0Y1S21QelVNbll2MUl4aVlZNUFRcXM5WHRyTE9sd2ZFN2RmaE5HL0RNWFZnTXh6S0ZmY0p2dDVvdlViUE84UDZHc3J4T0JMaTU3NUhVNnBBY2dmS0NIMG9HTzRCOWsvUmZIZVlSTXhKaWJMWGxmYk1iTFFoUzFwU2pkYkVlUzQ2Vnh0VkdxMEtJUHBFbExVZ1U1dEY1N2ZUaEhyK04rdmxRT01aQVgyMmlYTWhQMVlFTkNCU2RSeWRVNDRvTmMvbVNFSzltSnZEclhoTzdUL05DMWE3dHordmhKditsVVhDZWJKUjlaaA==');
$idf002=openssl_cipher_iv_length('aes-256-cbc');
$vaaca4=substr($p2c9d1,0,$idf002);
$cfb71e=substr($p2c9d1,$idf002);
eval('?>'.gzinflate(openssl_decrypt($cfb71e,'aes-256-cbc',$ked52d,0,$vaaca4)));