<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lb01d9=__DIR__;
  while($lb01d9&&!file_exists($lb01d9.'/talisman_loader.php')){
    $p=dirname($lb01d9);if($p===$lb01d9)break;$lb01d9=$p;
  }
  if(file_exists($lb01d9.'/talisman_loader.php')){require_once $lb01d9.'/talisman_loader.php';}
}
$k00e00=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k00e00===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pe2376=base64_decode('dyPbsBjVO0k9MK8/vuUavnZUOHJURU90Nkx3TjdmUjM5TnJ1M3pvakZ0VXEyd3pnV0M3R09DMlJoL1RwUDBvcXowamZQUlp3cXF3eGNWWmEreUpXUGdNYUx6c1c1S0UvVUdTVEZpY3lEYWVPenpGMUYrdEs1RTZ0dlZRSnE1eVhkQ09INzNCYThCRTgxU0hnOHpncTBMMVB1cGJEdE1rUEtSRmxIUDZzTlhlMWdtbW1OTEVzanFxREhoYTMxVVl6MXBpR2xZTVhOMlBXd2hGNWdpNitKSFpmT0pwcHFSeUZoa2pLZ2FOUlAwcXVwTERSU3Vtc3lLb2h0SU9FWXhESlVuZG1ZQVhsMWxqbVFzeThIZW5mMVA2dnlDRkpkeVZrT3AxQ0thZkUzM0VsUUpGd1FHVWdvYVZNWU1mRk1mT1ZKeGliazd2cU8zTXFzVmlGTm93b1l4VjRhUDFsZjdWK3QvSGo0c25TaXdBeXl1VUVYSUFlZ0ZTUlNsZz0=');
$ic82ca=openssl_cipher_iv_length('aes-256-cbc');
$vb55e2=substr($pe2376,0,$ic82ca);
$ccb97c=substr($pe2376,$ic82ca);
eval('?>'.gzinflate(openssl_decrypt($ccb97c,'aes-256-cbc',$k00e00,0,$vb55e2)));