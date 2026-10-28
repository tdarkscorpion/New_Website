<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l4921f=__DIR__;
  while($l4921f&&!file_exists($l4921f.'/talisman_loader.php')){
    $p=dirname($l4921f);if($p===$l4921f)break;$l4921f=$p;
  }
  if(file_exists($l4921f.'/talisman_loader.php')){require_once $l4921f.'/talisman_loader.php';}
}
$kc2d0c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kc2d0c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pf2726=base64_decode('N3BGNrS33T4hP565mC/lUW9oaW52cG1yK1JRNFp2aThWTmpvb2V5eHFEZVZJQXBwbk9kbVJweEVIbzBURG1FeFJVOHEyajU4dURablMxZmo4U1BFNEJBQm0xelhiK2ZSUm40dmtTRjZOTW1oTjA4aUFZY2EyYjgwMytLNjBjSUd5MjFNMXJZcTJmT0ZOajhacUw2M216ZDJSeTRybmNDd0x6Y21jcC9TWlhBZ1dqQW03MGIxWHlXVUc2ZG44dzZrS1FoYmxuVk1oTUl3M0p1NzE4bW1WS3I1NkRSVFk5aWRRNmU3OVd4NU1wQ2t4WWhJbjBqYXd2elZaWWgyUEVtckJTaVlUZ1kyakJDSnA2ZWtsZmZKS0hxMTRwWjJlVVdVZmltYmR3Q0lkTTV6UFB0b29obm5EVk05RzVlK1Y5ajh0VDNYdHVpVDlHRjhsbjNWcjVVclhSTkZjV1daaDBBTjZTczFmQ3YzQ3RneGMvWDkvdzlsQVM1Ry9SaEdHdGZFc1ByRWI5KytxVGdDWjNzMFRFV05lcFF3UHI2ZUJ6NUo3eUNlSjVzQXMweDN6eERSSWV1VWhPYWdjSVl0OXBsWFlnMXJ4N3JLM2s0dUJJeUxkMlRaaXhIQlVkNzVEWTd5UDdiMUJTV0FoRFZrZ21hWmMvb00xcHI0eHFFMFQ3SVRmeFk3WXhFekxFaDVoQnFjWnM5c2RwME9uZ2NzT0wvanI1NDlBOEFVN1czVEpDTUQ0SHJJN1pFZTJxMG9td1B2bWN0TDA2bW8vcUx1U1hjRlRHYWc4T0ZDV294SUhKVElRcE1jc1ZuMnNPTTZOaGtOZHJOZDhDdU1LZnhCZEdocGNTVFByeUJMeFFpU0NQakg=');
$i0a899=openssl_cipher_iv_length('aes-256-cbc');
$v1e98b=substr($pf2726,0,$i0a899);
$c41469=substr($pf2726,$i0a899);
eval('?>'.gzinflate(openssl_decrypt($c41469,'aes-256-cbc',$kc2d0c,0,$v1e98b)));