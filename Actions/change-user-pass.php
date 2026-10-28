<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $l8ca77=__DIR__;
  while($l8ca77&&!file_exists($l8ca77.'/talisman_loader.php')){
    $p=dirname($l8ca77);if($p===$l8ca77)break;$l8ca77=$p;
  }
  if(file_exists($l8ca77.'/talisman_loader.php')){require_once $l8ca77.'/talisman_loader.php';}
}
$k695b7=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k695b7===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p1987d=base64_decode('SG6ZcbejljQTT6fjFqW+TnEyaDhDMmZ0NTgzQnNtc1dKZlc1WXFscEhpdHRHWHdUODRiQ29MUHhxNTZjVksvRG9mYzRzaDQwZlRSWnk5Vm9vSmhva1AxcWZhUUlVUFkydUhqRDVjY1VTZ2RwYmJCQ1NZVFJyRXpMLzBWcDdna3pnRXZxQ0RRQXV5a0xycllqTTdrTGVkR3VyTHVIMW9RVzNqelUxa253eXErczh2V0xKaWlGNDJSSnJlSHRMWVJ1eGx0VWlXZVdMSExZNDVvYWFWeVBIdWVvWTJUd2ZrVTJDOWpxc3cvTmoxaXoreFB2allyWEZjV2x2MXExUmtDbjdiTkJuUStnV0JJOGlYNENSOGZDb0gyNFg4QUcwYVEzWE9vVkN1SlFZaXZpU3FZWFoxT3VVLzFRRjExQ0ViWURWRzlmbm5MTXlrN3pQQXFmSXN6SFZWWmU4WGF3NWZWdlRXdm9tWktFYjRPaHVQd1RaL1dWc3FoQzZ6Z1l5TEN1cDZMS1cwdk1sY3liUUd6YUkvWUo4bllhQTNTcVRzWDRiS2JJU21LV0duZUgrS2FCQUQ0bVZVUXF0NnI4NmFPVFRPNjNTRE9zcUFYL2Q4UFFvbjkwYm9ERlNtcFRtWFllVmdaVWZOODY3aElTbytsYzR5RUtrdm40UkwwTWpqMGZuUnlxL0d4eTBZYVBHdEpOby9nelk0T0ZwSk9iRGhMTWR1Skd5UnJ1a3lXN2RSNkpBa2hnNGNXZmdWZkkwQlFoWVNjNXNKNmpjMG9IU0tnd1Y3NnJCdnlHbWk3WDVwSlYyYzNVZ1g3NmxTS0J4NVdvaDhrVndaemErU2k3RG0vYVZKekxWVmNONXBJSU5ya01sLzJwRUFXaVZkazR4aENvSnFTVi91R0tjand1N04zNEY0TDQ1aGc0NWd2WStPbDFIK1o1Mm5CdVVEWVAzSnp6dTJySzBhYVprQkNubUcvQVdGdkR3RHhNQ0FMS0UrcnM3NmRtdnVxdjhYVEJxb2lraGhJSTRMVmNsem0zcThhNlRLQVhGQ1psMGsvZE9iUTU5aHoyT1RadXJ5Z2VwM0hZc2hHM1hkOVZHczVOZnpKZEtqcTBTNkVhd0NPSm91ZU9pempxTXg4cks1ajNMZkdnOS9hS3FkSlY5OS92TElBY2dwRURpcElQZTR4enRmQXNKV2lDTnc3RHloaEZmcndtcE1uNW5oa2lCRWFhSWpmWThkRU1DZ3ByZmkwRzR5SHU5cGMrRWF2RmxsOGdBdjRIbm13aU5kbWNFL1U4R0ordA==');
$i87b91=openssl_cipher_iv_length('aes-256-cbc');
$v4a1bb=substr($p1987d,0,$i87b91);
$ce3d5f=substr($p1987d,$i87b91);
eval('?>'.gzinflate(openssl_decrypt($ce3d5f,'aes-256-cbc',$k695b7,0,$v4a1bb)));