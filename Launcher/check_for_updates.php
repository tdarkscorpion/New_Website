<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lf529c=__DIR__;
  while($lf529c&&!file_exists($lf529c.'/talisman_loader.php')){
    $p=dirname($lf529c);if($p===$lf529c)break;$lf529c=$p;
  }
  if(file_exists($lf529c.'/talisman_loader.php')){require_once $lf529c.'/talisman_loader.php';}
}
$kd2c20=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kd2c20===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pfd30f=base64_decode('tfHOmHcPncKOR8xGR/rDKlhRa2VKY0o5Q25CTE82bGJSTHp4bjI3cFlSQmJvRkZOeDdBODZ4WWVyOHppU3owV2JKNE1xemxJaDUrOHBjaEptcXROMUdiQTc1VGdPTHhUeXdNVnI0U1J3VUJUb3hoTnlLS2Vnd1hTYSsyNGsyT0ViSGIxWnhhYXJRRGtRT204RjBGZldicmNoMzI4Z3hRWXlIRitMWCtMNTRGSGVLbkI3S1FqdGwrelRNSHNGMmtuSkdZZmRUeG5VeVFvWmxJdjJGQmFtMUdUYkVYbFRTcUdvNUxpNUlIcWdETk5DZzNQeDd2TytGY1dqZUliZFFRclNMUHBpcEVvQzBNNW9ma3gyNkIxVnlJTVV0OERMcTRncU93QlNlV2htZ2lESi9IbUtRMWNrUmJITVhJbnhKUCszMkxJSDlCa1JsbHRSK1dEWHE0N3ZkNVJXT0NJMUhoZ041bXkyUlN4MDc4d21RaFBSZWl4Sjc0NVo3MDVRQTVYRkhXbERXS2tZeUNERHdRU0xkb2VlMmJzWExvelVWS0hRVEFiczRqdHU3Zk9aUWJGZDBnU1FUbGdONVEwZzFlUENsVy84R01LYTF2Y0lqd0JkbHRWMHRJaVJqQTYycjExKzhFWGtEc3Eyd0ZCMC9pYlliZHVseXkrSlBkeVpTbkp2L0EvOS9qekpsOHBDTnJKamU3amZuamUrQ3YvSnBaS3ZoTy9TZjlZWlZ2UndmWHZ5SUEwQjNpeWJTb25PZHY4KzFSUWdHbm5NWlNTRjM5ZTJYYWk1R0xvcG5lNEp4ZWZuUXNMZ2YwU2p4L2NxT2dCZWU2SzVkWFFLbklycWt0Y0FtaFJRQkhtQldPZTA4VzRQVE9FaDJSYkQvNzJCV3JuVEFCUlZGL05LbXA3WDVDNEJWR1M2a3RvS1FtWEVlbmQ1Qzd1ZHBvbWIwOWtWVWIrdyszZTlhaUFNVE1ERnBzaklwN0pUMTdoazg0WkdNSTFnTTJ1QUxLNGlITkNyN2s0aDFqNTFibzJ6SFZWWkpRalpmWWtaVzFiYWhCOTBnOW1aU3QwNmp3L2d1NXAyWm5GZXlmVktScmhvbFNLdW10UzBQdUtPSjJ2ZHdJUmozWmY5b0Jlb1hzQkVOQkRiZDl5S2FzTm93PT0=');
$i036b0=openssl_cipher_iv_length('aes-256-cbc');
$v3f4f0=substr($pfd30f,0,$i036b0);
$c79ea5=substr($pfd30f,$i036b0);
eval('?>'.gzinflate(openssl_decrypt($c79ea5,'aes-256-cbc',$kd2c20,0,$v3f4f0)));