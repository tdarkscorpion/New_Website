<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l43ffd=__DIR__;
  while($l43ffd&&!file_exists($l43ffd.'/talisman_loader.php')){
    $p=dirname($l43ffd);if($p===$l43ffd)break;$l43ffd=$p;
  }
  if(file_exists($l43ffd.'/talisman_loader.php')){require_once $l43ffd.'/talisman_loader.php';}
}
$k31a3a=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k31a3a===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pa40a7=base64_decode('xa5JnevHcl1UqOJxJ3QWaXREK3hmNnU4bExmMWlDT0FMdFFqVnAvMHkvTWFjRGVhd0o0UmZmc2kydXZPUHNZYWlKMXV2amQ3c1U5UER2VjZaNTBSWElGdWRyQ2w0d2VGZ2cyajZHTGlidm51aVEzZnZVbDJ2RkxIM2pvYUViSlVQayswN3ZQaXNqdmlQTkRJNzc0NUQxR29ORHRubnc3WmovRENIQUU4bHY3dEhBRUtrNHRPNlRCZWVBYnU1VkVPakVPOHNZeW5MZEZTNmlKd1V5YW1xY1ZyelRDaWNRTnlpNjFnaGVJY0E1Z1R2VGxVakdlYVEveTF1d3dXUmVUWm44SVB0TllDeTlQNDgyYWFTT1YvK1RoaWxMVWVxUEpaODNRbXMzQkhHMFRTQ1VRU0owWklaamJsTjQyMEN0ZlliWFRGWEJEdXI4aDhkL3lUbU5uekp3anQ0clhwTmpiZ2R1Rmd1eDdyRk1SeEJ6Zk1lT2plUEo0UmpHNm40SVIvM1JzUzE3VC91V2UzTHFCaWxpd0llZklKT2tOM1JYOFpEM0RsNit1aXVxd015Zk5NcWlsSlI3SUZ5SmRsWjFlM3k3UGpFbzNuLzJXZ2tzeXBaYUkrSTkzeWJVMGI4YmllLzQrdnMzeGVTZnloQitvRWlDcnVoMDF3VW5nQlhPeWJYOFB6SjBKMXV0N1FkelM5RjJjUnJWR1VUL3ZZTDBwaElFNGNHNC9zWnlZMmtCUmxrdDcySzJiUHF6MU5vMWV2dTk0SktYUnBQOGQ3OTkyVUt6OHIrWHZIWTcxR0V5UDNPVXNBSHVsODY4MzYyN3FIUytZbVpXWUlhRS9EMTFRTS9zRmFOc0RtNmx3MG4rRG5xOVBlOFBrZzN4NU5DZkliMjVrOW9MUTUvYVk3aWk3WFVMdlYzR3c3ZUJ3Ui9PcFdacHJ1KzZESmd1T1lDN3QrdUV0OFE0TERwYUJWU3BiNnI4azYwUExCYVU4NVJtb2RYNURVcE9ESWp0ejZ0UkZicXNWYnFvOG1NTnVYNVZaemJRN2VZU1IycmlaR0pBQ21FbjJjdmk0WFdlMVZJZDZoOW9RN1dpbTMwU1BkSEVSUEJFNE5ibWdiYnk0RllvWlhYZzFVdDlFNWtUVEU3WlI0Q2dySXhnPT0=');
$i822dd=openssl_cipher_iv_length('aes-256-cbc');
$v1a1cc=substr($pa40a7,0,$i822dd);
$ca1228=substr($pa40a7,$i822dd);
eval('?>'.gzinflate(openssl_decrypt($ca1228,'aes-256-cbc',$k31a3a,0,$v1a1cc)));