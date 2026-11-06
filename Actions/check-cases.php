<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l260a5=__DIR__;
  while($l260a5&&!file_exists($l260a5.'/talisman_loader.php')){
    $p=dirname($l260a5);if($p===$l260a5)break;$l260a5=$p;
  }
  if(file_exists($l260a5.'/talisman_loader.php')){require_once $l260a5.'/talisman_loader.php';}
}
$ke9805=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($ke9805===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$pd9fe9=base64_decode('9IOpdcUcxHzu4w01/BpwR2NXVzJoeXNkamd3a2RvRVhWT2wwMGtmQjR3OWJrQWJLcEZmN2UwdHRlMktacXhLRENHVnQyZjNZOEZnMWgvU2huSnpLZ3JrQUgrNytNT2xKMjZpN1pUR0liSXlJUzRQYWd5OVRsLzBJNGtmY1A1OWhhNGJSUnR3OTdldWg3bk4wT2twZTJYb0xSSHpEZ0FXekJuZGVnZ0xNRTZMMG05d3VOeUpiYXdJQUtiL1pwSTdlM2ZBeHBnYVoyMi96MmJLMCtTZnVlc3RjM3c3YkNTcTNFeFlSM2duQXlLcmNFdWE1SEg0UmVnY1AzNE9KR0Y2YnlDdzlmU2Qyd0NrTnhjbGdnK1hVVlFwdUFtUGdraUJiM1pnTC9JVlBIdlQ4N1NUc2tmTlFuK3h2ZzZTRytYWVgyOEhUUnVXZGlSUDU2K0lscFRQQlVLcGp1eVluUFNhbERXUjU4UEFiVkZ2OW5IU29FeGhFc3ppTDNQZG8zNGtVU2tmV1lGelh0YStLZ0xlTml3UnRocUFDWFJ0QjBMcllRM0hkeEVEOHNSQnU4SlROc2pNUnlYQ0FBTS8zNGo2a20wZEFwUUdVNnhzUVN0YkpBRFYvekVGY1J0K3I5ZWpnYm40TkZlc2dLUXhpZDBXanFMSWZiaUE5UWN5WnVNTDhtOFdUbFpBc0hKZkY0SkR0VmJlaXdnRnFyKytObU13Zktoemd1Y0FCSDRoVEU5aWZrWDlJb0tEd0FiZm5aTmpZMWJSc2ZrOEI5QWtxUmpaU0xJZzc5VVBJT0ZXc1AxdVg4bE1XTjIrT2VHQ2tZL1l6ektNZ01Kbzc2ZWZ5Rk0vYlh3YjhZQUg0S2daYm8zbG8=');
$id7f01=openssl_cipher_iv_length('aes-256-cbc');
$v406ee=substr($pd9fe9,0,$id7f01);
$c7b443=substr($pd9fe9,$id7f01);
eval('?>'.gzinflate(openssl_decrypt($c7b443,'aes-256-cbc',$ke9805,0,$v406ee)));