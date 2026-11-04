<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l3a52b=__DIR__;
  while($l3a52b&&!file_exists($l3a52b.'/talisman_loader.php')){
    $p=dirname($l3a52b);if($p===$l3a52b)break;$l3a52b=$p;
  }
  if(file_exists($l3a52b.'/talisman_loader.php')){require_once $l3a52b.'/talisman_loader.php';}
}
$k5e609=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k5e609===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p017df=base64_decode('uLt9YQ5s/UwQL31AiGHjbjFRdmtRNjZMUm53MGJIVEphdEJTaEVadFoySEpMTCtUcmd2Q2JNUjdRZHJnOWFEdzJNSVdKRlhydnBZVXdMRkR1TmtTSS84WVVWZWNiTFJ1WW9pMjFSeWQyc1p0RGxOUWJOTzNFZmJ1dXRSdVZwY01PMHRMcGpwMGtuaEJmVkhyZjk5anJDM3E0U0pIVU93SUVkQ0drMmxIcU51VDVoT2d1eFMvc2FMdVRTTXRsZXdtSWl3RjNYcXhwOUZzU1N1alVVWWFyQldhRG5BNjFGd0NJa0ZHNEhzTmhOeExQUFJmVHVmZ1V4NlRkOXZBd2lBMnNtcEsvRXlCeTJ0bzVuU3hkYUhrV3kvczhhUDdYWkk2NkYwYnl3MUhRZGcyeDNZZUx0Ym1EU2FLSWk2bWVlYkFRRGd3R3UyM2tVbDZQNVZVdk9XakY5NjQwTGZ2aEc0a3AyakdNcXpsRUt5STFUb1diTWVUVVdRL0xBZVppL2ZPS2MwcitsRXBHR0hSR01vWjdwUmFMcjNPeDllQUJSemRYblMwU0RDZlg1T09EdXY1TlRaNlRMZkxPRkFaQjNFM1d0bnVoSmk5SUdQUFFyNk5EbHdzYUlKRDNWQ09Yell0VG4veTZ3dGIzRlFYbW5LK0hwUFVtdDdidTV2ZlBQT3V2OVg0SFhyOUh1NHg0ZWowczVnS1VvZ1NWSDUvbDZsNzBiMkdZOVd4ZlpOaG1MK0pjZkxVRW9wTFFrL2VmSDdrc1grbk1FU0pna2IrQWs2RXR6TUxqVTNPcmNlWDkxMkZWSUsyZE1wQ0FmU1BxV2RHZjNoNUkwUDdsWWltUjZta3NPbTlUNDVGNFljNVhtUEtKQUdXZHF3Q3hJZEQ0b3pTSnB1M1NtaUVZOUZ1ZUpjT1cwcDZERmp2c1ZpSWFKVjRvdTRkcW1VdTRRZnpoOWkwSHJ4OEkxQlVIWkpRem55S3JQcUUvLzZVOWdscGRHZXZEZG1mVXdyS1dPaz0=');
$i16d4f=openssl_cipher_iv_length('aes-256-cbc');
$vbe05d=substr($p017df,0,$i16d4f);
$c2b3db=substr($p017df,$i16d4f);
eval('?>'.gzinflate(openssl_decrypt($c2b3db,'aes-256-cbc',$k5e609,0,$vbe05d)));