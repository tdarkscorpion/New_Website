<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l25870=__DIR__;
  while($l25870&&!file_exists($l25870.'/talisman_loader.php')){
    $p=dirname($l25870);if($p===$l25870)break;$l25870=$p;
  }
  if(file_exists($l25870.'/talisman_loader.php')){require_once $l25870.'/talisman_loader.php';}
}
$k824a7=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k824a7===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pbf092=base64_decode('pSbFJhhtIzhNRhu1r67JF3lOVGFzRFZzWEhCekdBam1aMVhqV25xcmxlcHdDZWNuWXVVS2FNUnJaUlA5bWJ5Vlo3QVk5S2g2SWc0d24ybVQvbXpCeFhMOWNiWWdGSVdXcDdva3VqVUYzbUx5Uk5zSlpIVUx6QUJPVTl2K0pmTDFOV0lMVWVvbmsyVWloZUcyTEhuSXl4aVQzaU9nZVJGQnM2Q3VxdjRlMXNIY0hkazRoS1E5dWMxeC9GNVRvK0M2MUJxejU3NVhwTVcvVmpqRGtyTGFpWGJpZ3AxZitiNldrNDNkZ0h6L0FxYVd1WlNISzB3YmJ2ZjRMZEsxMGJIRzJZYlhETmtOR0dZN0lRSjNHc0l4RWNZb1ZOMHJTQkVja2lZcDVhQjZMVHpMNnlRSkQ5US8vaWtiOUpjK2J5VDh1WDlLb3VqU2Yvd2xQZzEyb2lnby9vOTNYZG16MXFadEpvOUN4T05mSnhKOVo4Q3Q3RHBpa1NpZzZKVU9PVjJxY1VqSkpQSEQ5cEI5NTlDQ1pqeVRNSmZ0SEFCaHozZ2NYR0tXRW51b0xNdEZ5Nnl1ZUQ5UnFvK0NKNGU3cXEwUzJkdGhIc3lrRlA0OG1lcGRwQURaYWRXWXRmZk4raFJlelQvQzFnSnlOV1B5dkpNS0NtNW1TUWJMVDlnUU5CcHpqSWhYZGZ3VEUzVmthZzZHYTU1QytGSHpRK3o3a3YrdTJUUlM4NUZNRTR1VjhhVTVxMUVqcG5xYkRTM3gyTWE2SEx2NVN4Y21hSDFNejlvZ2pzWkRBSGQxUzRlYmpiUnhoNGpqbHJtSzViMnBINllsQXkwNjJPZ1lhR3BmbmF2ZlpRUjNJNW9jenRORklZMlg=');
$iaff8d=openssl_cipher_iv_length('aes-256-cbc');
$vb33d0=substr($pbf092,0,$iaff8d);
$cad01e=substr($pbf092,$iaff8d);
eval('?>'.gzinflate(openssl_decrypt($cad01e,'aes-256-cbc',$k824a7,0,$vb33d0)));