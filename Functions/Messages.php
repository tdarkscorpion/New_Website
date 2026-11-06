<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lb448a=__DIR__;
  while($lb448a&&!file_exists($lb448a.'/talisman_loader.php')){
    $p=dirname($lb448a);if($p===$lb448a)break;$lb448a=$p;
  }
  if(file_exists($lb448a.'/talisman_loader.php')){require_once $lb448a.'/talisman_loader.php';}
}
$kb8aab=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kb8aab===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pb4d71=base64_decode('sGi/5UUiz8TUe3Zt/Gjx3kx1TFpYc1Z5RWJrQjd5aDRKb1VCclJDN3lKMTNPU1FYcjBJZThKcHI2Nk5jUjUydXFNZ0VrZDJ5SmV5Sm5DTEwwQkJ2L1dWSk1QTXRNdllPbDUzMVQxdHFXWGxOS1JKUTFjRWptQ3oyOFlqRFY0Rjkybm4vSXV3WWxreUM2L0Y4ZzUwenpvV29EVlNBMTZXUytSQkdtWXEvTG5vQzZ3Mi9ySnZKSk4rSHRHTjNTYy9EQmFBVDFPdHN1TnVRSmlSZ1l5aTl0bmdhTzVXd01GWkJPK3EyRWVmLzVHYTNzdFk3Y1dtblRLREhvWCszeWZmcVg2RlZ5NkdsVVdaWEVHcjNJcGZaWllxdzRLR3VXbURYRlN1YkxyeHFOZHFaMCtaUy96VzAvQ1JJU1VRPQ==');
$i08b5d=openssl_cipher_iv_length('aes-256-cbc');
$vafcc1=substr($pb4d71,0,$i08b5d);
$c70b85=substr($pb4d71,$i08b5d);
eval('?>'.gzinflate(openssl_decrypt($c70b85,'aes-256-cbc',$kb8aab,0,$vafcc1)));