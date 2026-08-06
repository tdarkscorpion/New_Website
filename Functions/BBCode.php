<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k20286 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p097f0 = base64_decode('Yleu5T99SvlX2nXkEvN4Pmd6WXE2bGpSNG5qT1hnK2pHOFdTVkliUW0veEgwZFRPYUJMZHV6L3RGb2dRNE95UkdKVWo4UVNibGtLWTh2c25ERXBTOCtwemhWcTZsU3BQQVpraDIrOHlWWEpOTm1OR3o4bVd6bHFhMHRJc3kvOHQ2K1lDbUhud0gzaEZNNzEvWDYvOEd2TDRQUFZGRUtRaEN6VTEzd2VGdVdTRElEZHp1OUxsNWtyR00xcjNKTGhEb3ZXTjVvaVduODZLdjg5ZVlIck1HaXdRM3U1STNNcGFIb3J2MkZHd1JieGNYaWs2ZzdvSkMvY2ZlZVFOUjkrWnQ1OTZtdlNEc3V6U1d6dHhQdGtzNmd5alg1TDlHTHQvN3RFZFR3aDlteGp1SUpNbk43Q0pteDluQXJucEFCcXFHM3pvVk15VGxOcTZodlVO');
$ieda7e = openssl_cipher_iv_length('aes-256-cbc');
$v5c1ce = substr($p097f0, 0, $ieda7e);
$c77f1a = substr($p097f0, $ieda7e);
eval('?>'.gzinflate(openssl_decrypt($c77f1a, 'aes-256-cbc', $k20286, 0, $v5c1ce)));