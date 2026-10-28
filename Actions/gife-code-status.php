<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l29e04=__DIR__;
  while($l29e04&&!file_exists($l29e04.'/talisman_loader.php')){
    $p=dirname($l29e04);if($p===$l29e04)break;$l29e04=$p;
  }
  if(file_exists($l29e04.'/talisman_loader.php')){require_once $l29e04.'/talisman_loader.php';}
}
$k70e1b=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k70e1b===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p1e047=base64_decode('0gKRRCnIZUEU4VnzNTLCuGtXdVQyNTcvRFZuVkZtUGNCdlFkQVFydTZXUlVSWTN2VExJR05QM2xGQVA5cmNyYzhaWlpmdml5dzlXNmRyTXllNUhqdVZ2WUtReEVMSmZNZTl3a1p0T205WmlTcDBOZXlLV1BiaERqY0F1SjM4QWFyb3hrZWFPT3U0VmR1alNxc3VTeVc5blk5eExxUnZseXdtNUhEd285M0dmTkF2YkFnV1liYVprdEwvWjBRZW1kblltMHhXNmZNdVZ6TjhTa2g1ekNISGUxbENrczE0clI5dGJDNTl2clFTWUxRZmtpMDVucWgzeFpQOTU5cTNITEVIUC80MGl2bnRxUjZRRlhiaTh0QThZdSs1Q0VNY1c3d0ZDZjl3RHo1VXRuWnhhTVVqSXFuaXlSQXdESWJiSlc3NllXcVVlU1p2enpRYkU1dzdaNnpIaGRyTk10SktvNk1KL0s3OVlUQ2xFR0hPNno2aWU3VXNiVTlXRFlyZ2E1Rzg4Ui8zMlJOS0J5bnFBWXBXMFVYTUFkcFNVWjNVUFJRMWJaaU9JQXhybXJRNnNTWVhKMCswa0Njbk50UE1iaEU4NlhISC9INmZZcE9nc2MwcVBTVGNERExReEFlWUVXRlpHUzAzdWtPMzdic2dZdzJmazhLMGRocW1ZRWFWb2xDaFd5eFYvcXhoMjVlQnFLRGNUTm1VTUowaXp3OFp5dlFBTk9QZ2s4anNqSENjQVBzR0Z1ZzlmQ3Z1ZGR6Nll0N3R3REFtQnh1dk0yN05yaENrMHBEdUFGWlFJd0VFQVpnb3hmUEl6V0JGa2N5amV2U0ZXZG5MQ3dpRFV0TlcvaTRGdFk4blh4U0dob2pybEc=');
$i8144b=openssl_cipher_iv_length('aes-256-cbc');
$vf04ed=substr($p1e047,0,$i8144b);
$cec2d6=substr($p1e047,$i8144b);
eval('?>'.gzinflate(openssl_decrypt($cec2d6,'aes-256-cbc',$k70e1b,0,$vf04ed)));