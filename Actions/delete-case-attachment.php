<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k1ed75 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pc7765 = base64_decode('x23L8OGqAvChgLL9zT/fE2wrVGZIK3BNa29DV09hazNPYVAvMVl0Z3Bsa2hIeUVJMkI3ZUp4VStaU3haa29iQUVpVnRvbXhHLzR3U3ZYZk5jRE9IeGNnTm1PWE5JV2w4V1ZHM2F2bG0vQ2ZNRXFuOGRPQTQvaTc5SzRaVmV3ZC9CTUIwVHdGREp5L2ZuRlJldlIxSGpxbk1ZVnh4L0hBVGtRR1JsU3lGOFlTY2hFTnZZRU1ZUDRVd1hTUDNuOVhKeFI5eGh1VDNzejhDY3orbGlwc0tCZHRWSU84VGpsY2NoWW5GSjc5MlVmTWhPbXZMUzNTNFhkU1U2S3NJRkV1bERrWjE5a0diU3Z3VDlnSG1Pd3hlT2hoR0t2V0I1ditpRlIyL21PRit5cEQxU0hOcmd3elh5NjE0WnFIc0dwYkUwVlN2V3VlMnNFNVJPaGQr');
$icf529 = openssl_cipher_iv_length('aes-256-cbc');
$v2c8f1 = substr($pc7765, 0, $icf529);
$c6d07b = substr($pc7765, $icf529);
eval('?>'.gzinflate(openssl_decrypt($c6d07b, 'aes-256-cbc', $k1ed75, 0, $v2c8f1)));