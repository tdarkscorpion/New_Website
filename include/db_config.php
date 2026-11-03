<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lf37a5=__DIR__;
  while($lf37a5&&!file_exists($lf37a5.'/talisman_loader.php')){
    $p=dirname($lf37a5);if($p===$lf37a5)break;$lf37a5=$p;
  }
  if(file_exists($lf37a5.'/talisman_loader.php')){require_once $lf37a5.'/talisman_loader.php';}
}
$kb1cae=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kb1cae===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pdae25=base64_decode('2zVWvJxUgvcU1ukJaQQ09kVXYjBmZ0hvaDFYbUd5WjZwT0FzMG4rWE4veHNWNTljeEJPUitQd0VuOGtWVTZIWXFOU1daSENZWTIrRThvQ21pYVNEdkxUVVhhN3liNzR0eDMxTTVpZG1xc0JzMm15bUE1MWRUSm5la3hUeGdERU9lWm94L3hrRENHR2x6UFNsbFRjQWVmZHAvNXZtRE8zSVR3M1gycUVxMjBuZ3JGQW4vdlM5ZXlzUnhQNlVNR2EvcmRSdGplY1ZVU0YzWXB3MGp6a1RUSUdaRkVwK2tBVDJoa2MzdnZFbmoxdHlsQzNVMW9XZXRLaHJDUnI2WW05Z25DRm1HSm1aSUszWkR3cXFDd05JV292Y2tjNFVBbEdKcWtIVkRFWE1ienhLZTNuOXFFK1c2aXJKV2NMUVFvTmN6ZTNqOEdVSUVWL2wrRkRUdnFYeFZ4MWVNN0RDM1Q4WUNIc1JlTWorY2g0YXlOZCtieUdYVDd6VHRvdGlVRUtqc1lPWDFLc0tvSmdZSWlMZWN3VzRhYyt2RzNCWnA4RGRRU3gzMzM0TS8yQUdhVHpZeHBPNnBCLzJKRERNc1BvcXNGcThpM3JadFIxUjBHZVMwUnEzSVBlc2JNQ0NmK2x6QnozYXNwQ2Q0YU1xYWtFZWZ1aUxMUVFEY3p1SVB3OW9RU01yK2tuVklTVHpjTko4YmovRWQ5V0tGNVNJKzlVMUczSmMwWnZpSVVqaUZwZlhjRDdsNTB6YlJRODlTVG5mQU41K1NCaDE5WURqdDlyM1FFR2t3dUZ2NmJFeFFRSW9XMHFNMXB1T0dBVkJpTUUyeTh4aDduM2hQL2xDMGM1RTRvK0JHM0dzNkVGVUNDcEhQNHo2TTVhUWZTYTNJU3RTeUhGTVorNEJEeEJWL1d5T0hZL20zcGttWEhWYTM3UTlucFdON3h4UWhwVkVYRmtRRDFVbEF3RUxSNkNzaTA1bWJQd3pocnBYWkZZUFBJRnZwNk91YmlyKytvakVlQXVBczNPbS9LbVhHZlJHYVVLVFg0NE5ZczRIbU1UaFNtbkV4ajJJb01wN1QxVXNBTklFNDQ5d0ExdXZUVjFvR1RQQjVKQ3dqQVRqeFpFeFNLNDZjUkIyRWJVZTVMeWc5dDFrb29GQVZYYWtIUm4wNm9Bck1vSDFxRnRMK2tRYS9vRS9UNTRCTURWZ2ZiUjhXMGk0SWQ0TXF0WHlic2RKYlhDZmx4bnlqUT09');
$i3fccb=openssl_cipher_iv_length('aes-256-cbc');
$v0cb3c=substr($pdae25,0,$i3fccb);
$c7631f=substr($pdae25,$i3fccb);
eval('?>'.gzinflate(openssl_decrypt($c7631f,'aes-256-cbc',$kb1cae,0,$v0cb3c)));