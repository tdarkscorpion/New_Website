<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lbe22d=__DIR__;
  while($lbe22d&&!file_exists($lbe22d.'/talisman_loader.php')){
    $p=dirname($lbe22d);if($p===$lbe22d)break;$lbe22d=$p;
  }
  if(file_exists($lbe22d.'/talisman_loader.php')){require_once $lbe22d.'/talisman_loader.php';}
}
$k9b2f3=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k9b2f3===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p3b0a2=base64_decode('LfCmeALXiqcJFW/wEVoDc1cvaHhmUFl1SDkwNHBLSnlucG9uc1BwU1FSbTh2dXhBMC8vOVlZUXpudEsyK0RnR01WcldpSFdIeklHa2RHZnF2NUF4ZkRzRGo2VEVLN0NCRnpuMXdFMmhrWTllNERlVnkxeEdhMDZJVGVMcHVYZWxGeWt3RjhMaVhMeUs5a29kcjFUaHZMQzhYLzdFcEw1ZjBFdHlkOW1oOWlDSkUvTXhZcCtHQUJFYzBmYjNuazA0bVQyUHp3SDFQRk5lTlkzNWZQS2hkVXRhQmJCV0ZjbEEwTEFvU2NNNjdZSkxHN0JGdTdXdTM2K0VEd2Z3ZlN0eWVwdDFVc2x1cHVtdnhlaU5mT3hRNHJHVGdkd0J3L0VnVTV4bjVDVURGWEhoNS93eThwWmgwSi9WQ0lYY2VURW5DYk13UktJMTN0TUJIMEdWVk1BRzZtZHI1MytTZFd5TnZSKzBJMjdjdjJ3cDgwR29LY3BHdUozOXdFMVFocHBDd0M3R1QvWERKRDFLWVUvWXNhU2tKdUhRWjJhVkpEcWp5M2JndUQvWk5rU0NZYWRpQkJPa0pVSTN5NCt4ZENjY2ZNTTNSdTlSZjZhcGg5TU9FeGpUemVaTXZtM3hQTTJXQjVIR2o2by9pdnNWZ04rbUZmcEIrMGpuY0FSdVJMTWx2TVlsdkM2bXR2WmJHMHFxQ0kvR0I4c1Q0c3BpcDhJSUI0aDBGYStSSDRyQmFrUmJqVnlua05yMW5vazQ2dXVRTEhKODBRemVjSW5aOXBNblNrUXA1MHJhWjlsaE1tQnl4WkNLWE1BYVhTanREMHloNGFtN2EvamhMWjhtMDQ1blZqc3N1NFJNLzNpMWtVR0w3N2dtN2NxSkhQZ0EyZzVMZ3piY1dFcGpmeWg0YjJjTnl2eUJsRDQ2TkoyNEZlRjUrWWgrNlNhSHRsakxQTnVvL05KYTUvb21sRXBGVldhM0FKZGlUN2pJenNHMWIyd3pib05STzhIeFZrZz0=');
$i3164b=openssl_cipher_iv_length('aes-256-cbc');
$vba21f=substr($p3b0a2,0,$i3164b);
$cdfb35=substr($p3b0a2,$i3164b);
eval('?>'.gzinflate(openssl_decrypt($cdfb35,'aes-256-cbc',$k9b2f3,0,$vba21f)));