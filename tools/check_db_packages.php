<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k69c2e = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p5bd82 = base64_decode('n2VNl81nnW9wblzuKKgBH1VMbnRPMDB3SitqMEpWb0d2MGUvekhUNU9kTytGcE5DQ1J2aUEzVzFNd25YTHlwektSYWFmT1pJSnBGdnpHcStxQURaUmVIblowZEcwU3hIUzd3SW1xK3lJTjdxb0syQUtPMEt3a0NQcXF2SzV0eXpuU0ZpQzFuZVB0T3JTR0hPRjdLZGZMNEhTMS9yenVsYW9VS1d6QXhoaVFZWFZ5VXA4aEROaFY2K0lIWk4xeCsrVGRjUVcyazVFWE1WM1JxUU94SE5rcVExaFdyL3FmUHhKTkh0SVE9PQ==');
$i1f43b = openssl_cipher_iv_length('aes-256-cbc');
$vc3245 = substr($p5bd82, 0, $i1f43b);
$c2b772 = substr($p5bd82, $i1f43b);
eval('?>'.gzinflate(openssl_decrypt($c2b772, 'aes-256-cbc', $k69c2e, 0, $vc3245)));