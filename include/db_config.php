<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l21bd2=__DIR__;
  while($l21bd2&&!file_exists($l21bd2.'/talisman_loader.php')){
    $p=dirname($l21bd2);if($p===$l21bd2)break;$l21bd2=$p;
  }
  if(file_exists($l21bd2.'/talisman_loader.php')){require_once $l21bd2.'/talisman_loader.php';}
}
$ke27df=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ke27df===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pff5a0=base64_decode('erALuy0TlJ9vIGq/lWQ0WGFNTkxVckdwYzNPQnpCSlV2emR6aGxTSTIreTZSVjEzMTV3M2plbUp5UHVSZGc1OGMvNHJPc3Nod2FVam1HZTNtbS85cjIvUjRhSGRjYmNMMFhiSHhORkV0YmlNSDZ5bXBiOU90eXZkL2pUaVZuTVBWaWNkQURIMmhWQnVucmN2OHBaTmJIVm0rdkpuNGhqVnZ4MTcyRVY5bnRvNHV5MzdzdUNzazRxOUhFbXM0dldEbVlPR1NhN1lVTDd3a21LM2FGcGVuTEQ2L3dTa3hOdytmTG02R0hhK3pGWUE2MU5LZUZZMHNqRElLQlQ0S1h6KzJ6TFd6eVZ5SW5MNEhOM24xcm5VaG5ZL1VaaFhhd29ESmFJeVBkOTh2TjZ0RnNyQ0FzSmZHR3lsZk9mdjE3enRmQjkyVzdocXg1YkZhaGhPSncyQ3ZPdUlma3pvNGhzMmhGczgyWFBoWnFIS1Y3VkJWZVFaUVVKNjZZSTh2bW9NeGNOc21OL3d5cC9CVXd1Znl0U2VtZDQ5NjBaSVhOWXIxYnRzbGRiNnh5N3RERTYzOUREWVBHOU9mTGtTQnRIMTc4NGNFMGNsY1YyeDBqNktYdC9oUDlidlB0NFEvdW1sOVVpRm4zMEYxUnhJcnhBUk5ldEVmaDFNVlRobjlSbTNCbjJ3OGp5VzFPbkU5UERKdVdoREljK01Ud1ZrL013ZkFsT2I2KzBKank4Y0NxS1RId3FaMUpaT3FQTEVTMytNaHRzTFhvM3JMTkR1dC9MLzRlb2wrZkdhVmwzQU5tSWk2OFpScld2TE41UWgyNU05N3B4RXFXQ3VZb2swZU4rYzUrdGdPMzcvTWdNZnRNNUgvSjZUWlBDamRkNFFkMlRRc250MnFTcGkrZ3VrbndidXZqRjFJSlVidE1aOTA3YkRURFYrY21lMGFqS1FXa0xzK1pubnRELzVHVVA0OUQzYXIrTFRoTWV0TTdxNVk3bm53aGpHNHA5SHhCVXN4MWdRWXdwL3AwUGpQY2N1dHU5VW1tQTJqWUs0ZVNJdmpScFgvUElUZU1SQm9tWUQwc1o5SUlUd0JheVBHM3cwTHdNaWJSbVpWMjlTaEMrdTcrcEVjcU5yY05zcks5R3FwekN4NmNuTkQvaTBINXJTZU9HT2gyaFNPd3dTL1JsQTN6MUZKZ0dkRURkdGlmUnpCU2JFSDAxN3JqWDNJUUNMY2xCbVh1MXFpUT09');
$i1d938=openssl_cipher_iv_length('aes-256-cbc');
$v4b832=substr($pff5a0,0,$i1d938);
$c990f9=substr($pff5a0,$i1d938);
eval('?>'.gzinflate(openssl_decrypt($c990f9,'aes-256-cbc',$ke27df,0,$v4b832)));