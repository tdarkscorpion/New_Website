<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k47dc6 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbf7b0 = base64_decode('fWCPFwFEQVDjG1HnLbBjzlVabG5wckV5d296VW1YQzVuM0dNS092bVpDWmk1N2pyNFJnRkhVdjNCZUhYNnNJZ1F4YTY2bTVtUHN4VlVNOEIwM0Y4elNZdmkwVzB5aExucngvN0srMUpHT0FEMG9jMTJhMUYyMm8vUm5WS0VlZDgwcTZSbVVFZ1dRVnNUMkNIMW1mdXU4aFc3a3p6b1VuUzBMSGY2a3VFdmZtcENFeWRNSEc0eGRLR2RxbVR0Slp5dTNTZllyV3dIY00zejQ1eGEzZVV3dWY1Tm1DRm8yZHZvVHJjRmhPMG9aUHlwWVgwRW5BL0NTRnRkTWUrMHZic0NiWWFuVjFoMDZ6Y2hlWWc=');
$i9dffb = openssl_cipher_iv_length('aes-256-cbc');
$vcce8b = substr($pbf7b0, 0, $i9dffb);
$c9fb0f = substr($pbf7b0, $i9dffb);
eval('?>'.gzinflate(openssl_decrypt($c9fb0f, 'aes-256-cbc', $k47dc6, 0, $vcce8b)));