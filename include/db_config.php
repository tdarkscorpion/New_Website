<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $ld81a7=__DIR__;
  while($ld81a7&&!file_exists($ld81a7.'/talisman_loader.php')){
    $p=dirname($ld81a7);if($p===$ld81a7)break;$ld81a7=$p;
  }
  if(file_exists($ld81a7.'/talisman_loader.php')){require_once $ld81a7.'/talisman_loader.php';}
}
$kdacbc=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kdacbc===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p7cf18=base64_decode('F6JvoeA0g4Z4UwHXlfcgdzlvUGZmdm5JcVMrYnR1VTFNZnlPQytBK1N4MTk0RWdLQkh0WE9zOVFQLzc3ZndSZjdmK0g0SzhISHZiQlpBcG5rejMrRjl2cUpBeE90MUpqcFp5MDZweVpHL1pjRGY5TjlqQzllU3JqOXpOck5FMW9xWU0vdTd1NWpiUVJBSmdKOWxzUk5IUzlSNnJPT3NGdHhVMW5HNHFaUExiYzVMdkRwU283b2NRVzBZZWUrWGFWeTU3UkNUNHRmR3ZJUGJTZC9rYWVMbW9FcmRjOE1RRHRkNGJUZWg5SHp4MnlvSGtYanNrN0ZCejRlKzR4L1RMbUs1WWl2Z0FTQk4zTnEvbDBUMU91djFZZHBhb0RGTGE4ZzBVVTcvdGlKTHFDSHlabm03bXdhejJNRmpCUGNuNk5QamgvQnlLK3FlR3JWeVh2OFdTSFMycHhwbjZWblZFcTJadkMxdlhGa1VkMWpUcHF0UEFqWXJ6OHdOQy9HVWZLVDA3ZGgxSmpOODdYc1l6RjFqaW5TWHJMSlZvdXMxcXNVTG41UkJVeW5qN1dacVRPTkJPUHlpSk1laFFBZ0k2Qkoza3cwdi9FQmg4OGcrajJQSzEwZTA4REFnZWcvUWhkQXczbStwYlZhL2IzMDVwR1hCS1BhZjBENDBrcTl3aVNnRm5TRXpnbFg2b284TzFUWmFnWjRybk5QREhKdU44T21wS1JGa3prWC9GRm1lYmd3YjFJOWFXa3A2WVZ5eitGVUZhV1hFaC9RclNyOWlqbUFxSUNTOU0ySzAwUGhETU9SeFE4M0lkOXVDZVRzU1JXVDlKU2FJTXlXQytFZG5ZTHNuYjllaVp1Z0xlcjRUU0EwcVltR05lOTMvNTRLT2ZZamhDQnpmRXc0UG1rYkhCbWYzTTFJbG5EanhqeEZhOVdxdTFMakhwUGFJMFBCMFhLdDg2bUtwSlFYaEg1T25wZ2tlOHJ3ckt0MXVtVFpRSE9BUkhJNlJhSnA4WE9nL2ZyQStJd0hwbEJ5UzcvL0FpMitaTUMwaFNKNVlDV1dlTld4RWcwRFNkWGpGd0NWcDVvcFNIemszR2VFRG1Sb1hZazVSWWc3QndqYUxyb29sNkVRYTM3M3RoeXJQTVJNN2FNYVMyMEo0amVBWE9EK2dGU2dSaDlHTzIzMGx3RmZXVnUwNloweG5NN1lqRjVkMFc5THhiOWp3aERJbnNIUDI3NjBMMnh0dz09');
$i0a47a=openssl_cipher_iv_length('aes-256-cbc');
$vd040e=substr($p7cf18,0,$i0a47a);
$c19552=substr($p7cf18,$i0a47a);
eval('?>'.gzinflate(openssl_decrypt($c19552,'aes-256-cbc',$kdacbc,0,$vd040e)));