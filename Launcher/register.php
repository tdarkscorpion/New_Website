<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l947b3=__DIR__;
  while($l947b3&&!file_exists($l947b3.'/talisman_loader.php')){
    $p=dirname($l947b3);if($p===$l947b3)break;$l947b3=$p;
  }
  if(file_exists($l947b3.'/talisman_loader.php')){require_once $l947b3.'/talisman_loader.php';}
}
$k60753=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k60753===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pec9c8=base64_decode('xxZ8RJOfrbwmf6z19ljhU3JpTmw4dFhXcFh4d1kwR1BSSG1mdlhiWC9NaTU3MVBiTEVRckpWUGlYdUJGUTc0V01jUExGMVZQcWhCaUJrUGRaRGR0ZlE2MEViR3I2UGZnZmdYMnEwK2NYalVLZGtzcTBndFd0NlVCZ0tBNW1FaVAxV2ZITEpvbGsrV0FtVkE2TTBkWGFPRmxPMmhReDFYQi8xTlR0WUd5TElRaXlZd1prZlVEaFNWTlVnWWx2eFgrVEFjbFNmazVPVVRrQXlsZnVGNFdmWlQrc3pUT3BxejFmcUx3V2NIOUl2ZlJuNTM3bFM5R05nTis0UEc5T3NPYklUVkRIaThRdzQyU3QxdVA5Ris4NXFNcWVtY0d3RURsZnREZC9tU0tTb2cwRng2MzhTbVl1MkxaeXBCU1NvV0VtaDJlVTV5ZTdRY1ZLc096d1VHRHdFcXEvNjhVVFV0ZWVpSnZYZXIwdzkvSlpudFBRdFZ3bDJtcG1YM0V0ZDhEOGlhU2VjWTFCa1V4eFYvTXhtTFdDUVBDcys4MWhFVEl0YzU2NnQ5blNvTU5VVkhvNDlDZmhLeURjZkF4OHNnS2RkTWY3K1BhSGVjRXpsUjdYaFdkZmlSb3RRcUxLdjJpYVl6M3B5dlRhM1MrWEdaaysyRUZrckROc0pMM1lUZXJvalczZFhyOEZEOHZXMzNHR0lTODd1RFRJY2xWamlPckxsTExEbmhyVWVVdVV2VmxkemcrZFZ6cjdQQUh1TjlTTWwxMkdGR0NaRE5hckl2amlpMUtuL0Vybjc3YUg0dHd3TVJManZXdVdPdExZZjNQd3NIV1BpRzdRWnRiYnZVeHpaU0RkQkZzdzQybDBpT0NYenpyby8wUVV4cEtaUVNRdk9LbkZEcVFTdk80dTdhc2JUeGthQlFKUTFxSVltR3MxUTNUZjZXZUFzUWx5SDc3TDFyZUw1VHFtSmY1NmFSNGlqQTFQaXZhMEswOVR0dFh5WURaczJ2eTkvWHdrRkJwMlFQSEx5WjZSa3F2UDdOMVpmZWZsRTllUXlpMDhoRXQ4RjRJYkIyRk5mRElTbGpEYjlDY1BDd1JPZHZ0Y2RuWWQ4NGNCbGN3MFlnV1hEQUc=');
$i9f3bc=openssl_cipher_iv_length('aes-256-cbc');
$v95f42=substr($pec9c8,0,$i9f3bc);
$c060f4=substr($pec9c8,$i9f3bc);
eval('?>'.gzinflate(openssl_decrypt($c060f4,'aes-256-cbc',$k60753,0,$v95f42)));