<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lb7c57=__DIR__;
  while($lb7c57&&!file_exists($lb7c57.'/talisman_loader.php')){
    $p=dirname($lb7c57);if($p===$lb7c57)break;$lb7c57=$p;
  }
  if(file_exists($lb7c57.'/talisman_loader.php')){require_once $lb7c57.'/talisman_loader.php';}
}
$kcc6b1=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($kcc6b1===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p3c53c=base64_decode('wuHtwCWfdk+Zsw2w29rXIWMrVGFPRWVxRkR6ODdiQlMzTm5rQ28ydDJ1dzEzRGFyT0JwR0ozRTVvbGd0d2IwVXVGZVJJbmhiZ3lxazJzK0ppUHI4NGJTWUU1Q1cxQ3dKNmdIUldaSTFhSGJmV3hqWDE1eHVsdytFRmR0aFlWQytRYTA4dGxQMmxsbXJwMjlEejRxT2lyYmUwalFiL0lqMytqSEIzYWFycnFGbGR0Y0N3aEdTZHNTZENkbWRVSCtRWWFTQ3k1L2lLcjJMQXM1OXB6SzkzSzBLVTc3WEJ0clEyVG5Xenk4SlhyaGRwMjcxbmtWbVJaemwvWWFWU0xRdGJYZk80WXl2bFZqZysyVE5pUlpSOUt1VlhNMTV4dldpQ2pZU3lBR1JuTXBCSXJEQUJpSWpObFRWK3BTSjcvWVZIcTdpRHNhbThwZVdDWDd2WEUwVWh5SUJDQ2IyVmt2YVZwYW5pSWtGV1lnNUo5NU1EaUtJNE1vTFl1VDREMUkwaWJzLzFIckcveE01OGJEZ0lOdVRJWDZtc2UrZGplbVlka2tyVlcwMzFiMVl2NVZjSWU2L05xT0c4QUtmTmhoakpVWEt5V2hBVnV2Z2tZUkdGUzdVcW9FUXkzbjdvSC8ybHFkdGl2ZThuZUEzc3dXNytJREVRQSszY2E4dGRhMFc0cHVxN1l1V3daL29VcVVyaVhKYVpxSzhqb3A3Y0lHOE1mUm9DRENWZ1lJWS9VNjZJcXh4eS8zNkxCYTVldWZNZnBZTDREK3QrcllQN2pjcXdFRjFITFRZVHhhTFVvZ3d4NEw4eGF2NGhFRWJDZnpTdGh5TlB4UFgxd1JrU1VOYWNOUXpmSUdHQnQwYndSZE8yN1lCVE05SDNsTll0UGd5SUYvd24ycHgyWjNSN0FtTzZOZ0dpVTRmOGhOOU1EWW9PNVNTUUFtUlJIa1I2em10Ym5sU1VaRmluRzVBM1BUUFI5RU5wdEdRdGQ4TlJmUTIxOVNtakNncWhybkxiVHh4NTNTWDVCVzB4NlZyd3JBWHcwejZFWHFHc3htdDloNjgvOC9VelpyZExNek4wbGRWWnNXZ1VwOVNuR0dnTlpqZWxTWDFqcWphbnhKRit6bTBXVEVKeGo3M2JiRGJxaExVd1dCR3dRPT0=');
$if4c1a=openssl_cipher_iv_length('aes-256-cbc');
$v9d10a=substr($p3c53c,0,$if4c1a);
$c2421a=substr($p3c53c,$if4c1a);
eval('?>'.gzinflate(openssl_decrypt($c2421a,'aes-256-cbc',$kcc6b1,0,$v9d10a)));