<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $la8ee4=__DIR__;
  while($la8ee4&&!file_exists($la8ee4.'/talisman_loader.php')){
    $p=dirname($la8ee4);if($p===$la8ee4)break;$la8ee4=$p;
  }
  if(file_exists($la8ee4.'/talisman_loader.php')){require_once $la8ee4.'/talisman_loader.php';}
}
$k16a14=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k16a14===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pb10ea=base64_decode('Bgg1A4CXJCsuyfW5lbBUOWw2Q2xtcXU5SVRHY0REYXQ0NVRXVWhrS0dFU0hmT29Pc0NWOWxFV0Z3Ylp5RG9aWElsNE9VYkRqb2U1VUt4WUk0U25XVmpITVg5RVhsOWJ2aVpFZjVlTElxaWEyczFaNFBqejlnM3ptUVhtVEhkNFkzWjEvM0Z4QjNQalUvUExUbXlSemV4M2NQMCs3NVlmUVl0Y2lkOGZHVVFibGQ3TmVUNGFGUG1QVWRUaitidlZTNjZkZHRGbm5QLytMeU4vajY4bVJ4OXNkS0tNRGlwdkNZM0lvY2FpajhnSjhIY3NHUURvRHgxbU5zdVZxTjFLdWpqZ1RKYTlDVVhjbVpEMTBqODloT3h6NGtKS0VjaERkSk5YbmhqalN6VGlnb1ZFZmJmZXZYS0pmV0ZEejFQR1BRTlJTMi91dHRBaUx2WU53NUdILy8wLzJZNlE1cGJ4QkYvQm5EblNTTU0rL3Nja3A0bW1aMlk5SVpTdU5RbkRTeDZOWlVpZ21iSXNJanhZaUk1eHNlZjZBN20ycGNGZWJKbmZHaWEzOGRIZjE1emk0WjBlTEg0U3p0aUVqaWVBeERURFhzVHY0eks0K1ZtVkdINzFTMFpMNEFkYnhVazQzSzZidktmSitSWnNlcndxSjdsM2p0RzJEa1g2eEU5eUZaYVMrbGRkajhZZ0hlKzZWZlh2WmZHQlFoSS8yeUQ4aWxhdHRQQXRUL0FtMnRrbGVLNWtwK0EySHdnK28xK3ErVWdCREVQdmNLV01Bb0ZTc0dHdE1Rak9WMHlaK0g1cmEvUU5QTHBwZ0RkVmRtQ2dqcHhScWVySzdnY1NmdkhpS2hTQkhGa1pyV2hzSkZWRVY=');
$ieef07=openssl_cipher_iv_length('aes-256-cbc');
$v86990=substr($pb10ea,0,$ieef07);
$ca4e03=substr($pb10ea,$ieef07);
eval('?>'.gzinflate(openssl_decrypt($ca4e03,'aes-256-cbc',$k16a14,0,$v86990)));