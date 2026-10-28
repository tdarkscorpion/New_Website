<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l57e5f=__DIR__;
  while($l57e5f&&!file_exists($l57e5f.'/talisman_loader.php')){
    $p=dirname($l57e5f);if($p===$l57e5f)break;$l57e5f=$p;
  }
  if(file_exists($l57e5f.'/talisman_loader.php')){require_once $l57e5f.'/talisman_loader.php';}
}
$k75c83=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k75c83===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p49c96=base64_decode('2bL2ocgFxrG6YmmFAIS03EtSeGZVK0hSWGFRZXJ2SVNmeWJXVk1OMTVsY3ovcTRDUjhhVlBSb09HaTRKSlp5VTJadTJ2Mzl5S3RUU280ZzdXWkR5NENiWURXSzNHaG40Q2pYYUFnT2tUc0xubHg3aHNSbGs3TG5PL05xcVJ4SllES1RObk5iUlNmZzJPaFNFZTkyN3VMaFJDNDV0dEZQVjNXRjZZN3VEaFFPY3RNZC8wT2JGZUg3NjAxVGErZlRHQkJSSDk4NWxaVmxXSlFRZGY1emFPaS9zci9BRHF2cURRNWJUZ1R2K050RVVIOHluMEtwdWl5dzdJM0RUanBMbFJSdExZM3dyQm56R1R3QkprUlJLT2lWS0NlNFRXSjU3djUyai9oN25rM2REaTdUN1JybkZPMjQ1OFVZcVl2TjllbVM2TURlS0oxd2oxTkR6NWplRktLK2Q5bGIzbmZwRC9mMk1vbDhIeVFidFBVa0pWZDQzQlR4WFdJOTMrN2pxY0g2VlF2UW44V3gvUzg4dU5GK0h0eGlydXpYTG4raUhQTmZXVnZpOXovN05VTEpFRkRUb2VFNUwyckdGL2pwSTE0OHhhN056SG5IZ0dROVBXcjBGZWVKRHRab0J2c2dpVmM2eWlJZnhhRjdFS3NUbDdCZzg1SlRtem4xeXpZb1VLVHdaMThKNlhORS9vWitkeUlGK0VQVWVyRkhiMVd2NUEzQTR5VzExR1E0eDlmemMvL0xTSVVKdzhMZUNGRjdkazlsMjV4QS9QaDJPOUdMSHZBbGxEODJQbForYjZsZFd0YitBb0VPak5WcEh5OHMzTndPZ3IwTlA1b2lYNXN3RXllLzBTVGVZdjdsdTVXQ3ZFZlBDSGFndy82S291aStqVnV1c1NnPT0=');
$i5167a=openssl_cipher_iv_length('aes-256-cbc');
$vd79b0=substr($p49c96,0,$i5167a);
$cddc2b=substr($p49c96,$i5167a);
eval('?>'.gzinflate(openssl_decrypt($cddc2b,'aes-256-cbc',$k75c83,0,$vd79b0)));