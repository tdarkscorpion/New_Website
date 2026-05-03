<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k20169 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf233d = base64_decode('1i4ZWC62pbyGY9CKnYm/mWh2VnF4cnNrY0w1bVMxT0Q1NmVFdDBSamJIWEhIK3BGQzRWYU1MRkxCMXVoeDVmcUNuMzYzSDg1bVFXbjBrbnN0ekFMRW1YbjNlQ0VDdk9tMUR2MmgxWXpVOHlXb2g1dlk0S05NNkJrTHN1MGFMemd1SnpLcmtObFQ2VFdaZnRvUXNYT1U3UXM1eWNmRG9JWXBSdHBiT0ZjZG03b3RTSXVVcUh4V0tOZ29DQ3VMWkxUbHZqc1RmcTdKQzVCREUrYU1KMXBvNnA4bXlsZ1BncXhabE1oSmF5QU1EaW9pdDNZd0NWTEkxWEkySFRtMWFaaVlBV21SUkpLTFFER0NOdHhRZTlnSE9PZzdMRTZhWnpjWVBtZXpCRHdqbkcybHFGTVN4TzcveEdnRXhBMVlKZzlKRXlRQStzWEZQYUlMczBi');
$if6022 = openssl_cipher_iv_length('aes-256-cbc');
$v20f29 = substr($pf233d, 0, $if6022);
$c3bfd7 = substr($pf233d, $if6022);
eval('?>'.gzinflate(openssl_decrypt($c3bfd7, 'aes-256-cbc', $k20169, 0, $v20f29)));