<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l30329=__DIR__;
  while($l30329&&!file_exists($l30329.'/talisman_loader.php')){
    $p=dirname($l30329);if($p===$l30329)break;$l30329=$p;
  }
  if(file_exists($l30329.'/talisman_loader.php')){require_once $l30329.'/talisman_loader.php';}
}
$k4d452=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k4d452===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p7a565=base64_decode('AiFlJuEF/d+64yB7MK+sXDVUc2t1N1VOODdsUUhPTERiSlluTmNqVXJPWStVbjliTzU5TVZMeFZXNm0rYWVKSWlEK1FiQUxZd1duV3JPSXIrYTRYTnM5LzRram5XTjF2bnp5aWQ4SWI1dEVpc2x1eHJkSzJycUxPbkhuY3VWNm9raWFrbjByakhkYlpncWhxRzBvbnRSQjIxcnp0UENMN2RCMDUvUlM2WkkzYnhIcFg0TGxJeitaQkl2a2dzUUNqUm1sT083RmtvRjJtaElMc3d5Smk5cldwSHNCeXhtTERGajg1bW4yQ2tOaWhDNzZTMVdibzNRem9BV0hIaWtSOWdlak8xNGEzN2ZxS3U5WWZXTGlWalZrUkREbG11YlprYXhXRlpmMzRicEJoSXhGYjhPQzNBN1B4L0VpQmRIYUVFbGlLa2dFNUFmTWZCdmZsc0dLN0RNaWE1SHBxS0tFQzVYSCtqSW5mRVYzclpDOUZRSWI5amtiWisxeklERWJBSkZJWXlaTExrMWQ4WTVZcSs0RHQ3UkpVaHBlWXYrN0xwWFZvUnpTRGZ4QnVGV1RWb3lmZHlhMllsRmg1OFUrSmhOMGFWMzN6UWhIZ2p6S2xVeXBPYjNEVTJBdVFyckNHMGVDWTQ0K1UwTHgwVUUrOFZuZGFJcmJESjk4UWk1QlYxVlc0MVE0L2F0WjJzQjJnN3dYZTYrb0tpWmFFcGxxQ2tBK1p5c3ZPWW9mQkZlRVJHSllvcmEzMXJ4SWRMZmFhTVdGWXpnTDdWU2VIZzI4ZkpDL2pjS05DMXU2bGNiQTM3RFhIY2FLenBqc0ovcWhCZFFwMU96S2gvMEVhMnZUSVZBSitCVkFyWGxVcGE4VDhNa3Vhb3czWkdpc25FSHpabUQxUDVueUdLdXVqWUtRUHpZMGxUZ2tIWFRCRzQzRVhYMWZ6WGNUUy83K0N2ZnFzK0d5RzJac3J3WnZsd2RISndOR0Vici80NmNmUkp4YnRqakFFWHRLWG1TVWhkWGp2b2tsOU9BYk1KVWRSY1AzRQ==');
$ia9e07=openssl_cipher_iv_length('aes-256-cbc');
$v0ea21=substr($p7a565,0,$ia9e07);
$c1d9e8=substr($p7a565,$ia9e07);
eval('?>'.gzinflate(openssl_decrypt($c1d9e8,'aes-256-cbc',$k4d452,0,$v0ea21)));