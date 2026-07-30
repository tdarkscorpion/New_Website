<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka35b8 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p00211 = base64_decode('QiOAIkz+z3hXxQhBiooDDmk1S3lSRmpBMmNVSi9sK1M4amx4ajFQM2RYWVhocklDV3UvdnRVNmplQmZMeGtBWmpiRk1WQTNkTW94WlN3V3YxajY2TWRiL2NIeEVReXdUTDErYXJvZWxCSWxiZkpBZkhmUkFQelJUeWN6OU1EMGF0emRsTWRhWjNLU0Z0OWVuTVNmTXFPdlBQNzFTMyt6Rnl3cDBEdll3eE1CZkhYTmxkQ1Y1a3YremhBcTF1UkNzT29GZGJDMzBLL01Pa1NvVXN5dFg5WWRlWnd1OG01bnQ0K3dIdTFIK3JwRjhxS1M5Q1cxNGZTQXF3WXhoMHRIL2trV2NGSFU5VXAwY2xvcFg=');
$i9018e = openssl_cipher_iv_length('aes-256-cbc');
$v3ed12 = substr($p00211, 0, $i9018e);
$c5ddee = substr($p00211, $i9018e);
eval('?>'.gzinflate(openssl_decrypt($c5ddee, 'aes-256-cbc', $ka35b8, 0, $v3ed12)));