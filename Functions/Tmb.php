<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lae6c5=__DIR__;
  while($lae6c5&&!file_exists($lae6c5.'/talisman_loader.php')){
    $p=dirname($lae6c5);if($p===$lae6c5)break;$lae6c5=$p;
  }
  if(file_exists($lae6c5.'/talisman_loader.php')){require_once $lae6c5.'/talisman_loader.php';}
}
$k94061=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k94061===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p6d686=base64_decode('V+AROt0gSI/8eJ6ykeaVVklSek8vM3dpWmUvaGFwcnBrQzBJZ1NHV1hrUnl1ZTZRVlJ1Nnh6aldYSzBnZXhUUFIxL0luenVhTE9ERlc5OGltVURZdUJ3NXVkYTVza3dYc0Nkenk0MWFQeWxtQmhnVUl2RFVWYlU2TnZpcTJsV1N3U1o4bDlQeVlxQWV2K1RZc2VZelp5SkdDVTUzZ2tQUVZReDBrK3lSUGdsK0pvaHdUSEltNVcrcGp5RExVdlN3S0MzTW1QQ2pRR0toN2JPTUJVVmZaRU55MzdGZzRNRkFSY2xpcngrL3Q5N2p0UWFxc080akdQa1d3eFpkTHA1K2oyYURlMDhxWWFrdGFHWVUrbkhrQUtoTXlndm5NSFdCMnZlV2oxSWJ2bnRQQ2lsMTZzWHpNSmFLZFB0YzJMSHhRWU9IcWRPOTJteXVhU2xQRkRXTVpheXZ2WE9YQmlXbVBDVUFDbGRGWjg1bU1KQ0t3SHVvZTB5RDJYZ0V3WFQyQnNuU0FQSmxmbHMvOGRpWHBrRGd5TzEyckRLblBqc0k4U1Z6ZUNtbHVMU2E1V09RZ1B4ZW8zUzlDSFp5QUpkd2pEWjlSajhPTEQrYThVWVliejFQRzNNSVk5NmJBVnA2TmtTbk5Sd2I5TjlSSXNDend3RFRyNTVtK0ZFbWJOMjVLUlRLSXo0T0d0TWg5U2NXMG5ocXhBdm5pMHpXWWVpNW9TNjBIVXM1SFFoT2d2cFlCY1lnTGFWdzcrQnNGajV2UHd6SmZqWkZRaTRmWlcxVEdUUllKZEZIWWJTREY3V0tpQjB6SEhkall5dGdZSFVVVlRiWXFKMUxiaTV0d01mVEVZaHBYckNtR241MDI2UXh3REcxQU12ckkrQldpeWdEVG83QXZBbzRSeE9RdFpNZTg5dEtreFl0bnJwNjl4d2tXU2MzbE9HakRlbEJBMFNlUmFrTzVrMnM3V0FyZ2N0R2tVaERZK1J4N3JtMGNiSnhxai85aEFBRkQ3dWZET2U3YWdqdHFxWlBwTklZNHJ4dndpajZwZTl6Y3gvZDNOb0JJd3B4ckE9PQ==');
$i9fdd0=openssl_cipher_iv_length('aes-256-cbc');
$v1a2b3=substr($p6d686,0,$i9fdd0);
$c989e8=substr($p6d686,$i9fdd0);
eval('?>'.gzinflate(openssl_decrypt($c989e8,'aes-256-cbc',$k94061,0,$v1a2b3)));