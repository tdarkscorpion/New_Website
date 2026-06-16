<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf6e22 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$paf6e4 = base64_decode('F8w9eREd7gb3SgNyuBOLhVo3UlRzLzJhZG00Ni96TW00Tms4Tm1EOUFxMEFrU0l0T0VHL2xJZ1JKTi9PZEg3bXdob2lmeGREVlVrcjAva1MwaTlLRWdsWGJpTlNGbVU2SnBJZnJqQlppVFMwc29qT1l6MGV2RVZIa3gvZGRGejVoNGR5dWVoVDA1M21WRVAyanIzYlNMeittYTdVU3VtazBGT2xGeGducTVMcUtXWkFVWFlJNGNkMDNGcExNQ2hjcS9LMmZFWWtyU3RZMkRCNC8zYkJXU2srdGJISmJxSFVaQk5xa1JEY25HdUR2bWpsQkpHVCtiVFJHQ2tEVG55SFRZNXFVWmdoVTlaZUpxRmxMRFhlSWc2anRxbFI2UEp1aDVOczFBPT0=');
$i4ed9a = openssl_cipher_iv_length('aes-256-cbc');
$vdc8d8 = substr($paf6e4, 0, $i4ed9a);
$cc1aae = substr($paf6e4, $i4ed9a);
eval('?>'.gzinflate(openssl_decrypt($cc1aae, 'aes-256-cbc', $kf6e22, 0, $vdc8d8)));