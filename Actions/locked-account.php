<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lbfac6=__DIR__;
  while($lbfac6&&!file_exists($lbfac6.'/talisman_loader.php')){
    $p=dirname($lbfac6);if($p===$lbfac6)break;$lbfac6=$p;
  }
  if(file_exists($lbfac6.'/talisman_loader.php')){require_once $lbfac6.'/talisman_loader.php';}
}
$kb1b0d=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kb1b0d===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pe52ab=base64_decode('7wvcPvmzM+PS0A0PPFe4FnhPbjVQV1BRYmt2blRoZStrMVJEd1lXWC94R1ZEa3hTUVJ0eDJ1Mzdua29iQVE1cjU5bzF6YVZCOHY3Z01KakxSTmlrc0tRU1hDNTNEYTZVbUhvTGhJcURKQ0k4a3hJb3ptNzdMUFR3NHB5WElCS2VLZnJuUjJQL0xaVUhmQmt6UUc3QXIyc3FhRzh1OFFvRFd2OTFUeTFhUnBTRmxSTFhVNDdPbEgxNU0yanV2SUY2TEk3c0V0M1lVeUtNWEpHMDBDNjNUYUtPVmRGTFEwV3M2Mmtsem9XVXNZSlhtQTQ1bDdDRFU5WVNZZ0FPNXk5cHpCazRoMHpKZUxmMGxVcGxmTjRoWldBVGlHTEM5aE02R0xNQkJKb0Q2WEljbHZoMUx4T1pQbnlqY3RkVDdBcTZ4QjBiSm9hU2tLNTBmYjN1SEM1b0JKRVA4LythUmhXQ1hJenFVSzdpU3RndjZtdm5qL3A4SnZuUXdTR1lYeUVMZklpT3BGbmxXOUZZSHJDd0tjSVU5YWo3MlNPbEk2TjdBc3k5cWZSYU5ZamVhajR4MU1vVVJuVDA3Z0VtcmZ5Vnl4RFBGRVhxSjdkaGc3QWpzSmMwVkJrNkEwckdranA3cmF3TjdzRldPTTI5UVBYS3Qzd1FOUmZWMmRITit1QlV3UUk2aWRxUzBycEZuOGVMRnJ1ZXlXTWRFTlJtWnZsWThKYkpZWEhoOVhqUWM1LzhDYzVJNXBIRDZDVDByOGcralFrOXFoMU9WMlVsanhxWjFabEIxamFSczBIMjNBa0g4S29IaEVNdm9VNlRyQmkzQnpDUEdvdjJqUjFMVU0zUXZyTThxb2VydlNkZVJ5emgrbXRVVGwvWE56ekhsVTNRcCtab1ZQc1k4dUZpVTFnVk9Pc3RtcnlieDI2K2xoMVM3bTErcEE1dDZJbGFWcEFOY1hnbzRtRXdRNWkwcmIzMzN5R0RqOEVhUWxQNU4xU0dLOHRRYjh0OUtndz0=');
$if65ad=openssl_cipher_iv_length('aes-256-cbc');
$v336fe=substr($pe52ab,0,$if65ad);
$cf0c56=substr($pe52ab,$if65ad);
eval('?>'.gzinflate(openssl_decrypt($cf0c56,'aes-256-cbc',$kb1b0d,0,$v336fe)));