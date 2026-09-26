<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb3908 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5cdcb = base64_decode('9NpBpgsh9hzImEk+JAf9BkYyZUkvZ1VqdXFtMDRveFNZbnl0Q0t1M1pXb2JpUVMvYWlhK3FpN0tCV0tSbVlQRVF4b2JvdU8zcUttcEpjZmdYcDVjT2VFeUFCV2dtUTU4ZGNpd205RVVYV00vd1NPWFY0M2pYbHdFTHdqWnkvYUhiNGlXanhLdG9nTHI1bGFRNm0xWGhaOHRyOTNyd3ZQcnVKaVVEWWI1ZGxUcTlmdzRJR3YyTUx1MlVpcG5Nek0xRmhRdTh1SitBdHVMYUUzWnlJKzY5YS8zV2ZMRVJTMzJXMzVaMC92VXFaVU00UTR3bTdQTzFYYkNhd1pjQ1ROWVBOdWRNL3FXU0lhdlYxYVFBanRHMXE5aFJMenpHQm1VWTNEUDdudSsrL2lYdEsyaUNCVDByNmxla05NPQ==');
$i135a2 = openssl_cipher_iv_length('aes-256-cbc');
$v72e5e = substr($p5cdcb, 0, $i135a2);
$c2b29e = substr($p5cdcb, $i135a2);
eval('?>'.gzinflate(openssl_decrypt($c2b29e, 'aes-256-cbc', $kb3908, 0, $v72e5e)));