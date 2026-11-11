<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lc634d=__DIR__;
  while($lc634d&&!file_exists($lc634d.'/talisman_loader.php')){
    $p=dirname($lc634d);if($p===$lc634d)break;$lc634d=$p;
  }
  if(file_exists($lc634d.'/talisman_loader.php')){require_once $lc634d.'/talisman_loader.php';}
}
$k5d0bd=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k5d0bd===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pa8f47=base64_decode('AurDrnyKxPEIOg5t44is1lZ5SlU0UUN0b3BBSTRzY3k5cU14a0hYSHU4K0Nxc1Bqc3IwR24xNTZaRDdENHk2c3phWnpGNFYyb281SWtiWnNrUnFSYjdJS2dSK2s0bVZidG1rRDlaRWNDbm12SVljYkpjN2dQNEFzS0djc2x1ZGpRaU5XQ1JkbjFqbW5YcHZhMzlkbkFOMUw2UW83OVRibTdZeC83dmlUSWRQL3dHOWtWaEt6bTNIN0gwSFhNVmlVbngzRktOa1JyWURJV3QxQnN1a2RwS0xvN0NIUmtiYVhUOFhSeWErbXRSOXdSclo1bjQ0OVZPMkhTN1FPM3NKOEZyelUwTyt5YnNCRkdBZ0NxbitGSzdnd3VlSFBZYjJNNjNYZ08rSFFoRFQ1bElMS1o1MHNWaFVuVXF6SGRNa1d2WFErWXN3M3JkNytNb013dDF1dlVBeWI4N1J5Z2hrMnBSLzJkMnoyTWpTMmoxei85ZC9ERGNaTkdjRkdMcFN4alVldVAxTWpuZVBXd3hvQklsNjUvbVY1T2pCd0piRVNjUzNHTm5ibjBuTGxEekhwTW5tekVqb0FYMWN1RE9LbWZNUWRkSG4wY1ErZWtRRDluUyt4MW1yT3hUQUZJZUlCMXVOSUx2MHlzNjhhbmlkdkNWUFEzUGFINFJTWjlEKzIzalVubUtsZjRrQlN3Y1R0ZGZicWtraVlRT2l3Sms5cmhqakZ0cWR6TG82M0tmaEE3ZW1TVitnMkZla2N3UUp3c2VDWSthc3A5dlNrVUJLR0oxRHJ4NW1VNkpkUHpDNGE1SWx6V016ZWtMVGN4c2dWbDg1UzZRbVZxV0xVVVIyc2F4TjB5L21DVUxwMGlSYmMzSEUrSmhxTDdQVUNvZUF5dzJxUnFaTXNFRFRuNWJ2V0NOaXFORkx5MXBtRVZoWlNBSkplNTlGVkhZWnlxaVRxWGtpdTdmeXpaYUpCQ0lSMnpQSDI1dUxsdW9HQjJMMEFyeFBVdG5yVEFVQVhEcG01WWRsc2k2cGV5M3NtejJpZDNMdGIvN0pUWm4xeWZTUW9HbWFrVkRrQUpCOHUxSi9lbDUzdEVVRWVjK0Q3WTZxY2lYbFVmUWNrM2g0YlpqazMwQ2htdm9ZRlpNREpSc0JEd3hmck1RPT0=');
$ia21f3=openssl_cipher_iv_length('aes-256-cbc');
$v1001a=substr($pa8f47,0,$ia21f3);
$c8c09f=substr($pa8f47,$ia21f3);
eval('?>'.gzinflate(openssl_decrypt($c8c09f,'aes-256-cbc',$k5d0bd,0,$v1001a)));