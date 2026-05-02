<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k057ff = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9b0de = base64_decode('QqCxmPEdxVyWnyCJJoinFGYrMWJ6VGxSVDlxOGN5Qm1tL1AyL0dlSEtOSTVYYVU0bWxaelJnSlY0VWk3ektoajVpV2ZsUXNhSFRpU3ZNanhiMjgwWHZNSStaS2h2blpPeFo1bkdYN2hQVXpzTUZvanlyMHFiOEZuYVl3aVlNaGo3VDA3ZkZhMG1ldlNSTXpmZlZnaDlKWi9aaXRFbG81RlBSdFArK20wZWhSakFhTVBLWFRhekVZZk0ybENFeHhpekhVK1RDL3d1ZE5rc3R4eHVVM0VUWjVrbG1TKy9PRi8vV1kxblJrVUIxS2ZJOVlzbitOdU1hdm9ONDFZRHcrK0VGYWlOTFowaEp0N2t3ZjV1a3l5bGJ5REV6WnBLQXJ0M0hmc0Q4S0RrdDZySXJDUC9pYUUrYURxTktzPQ==');
$i8f8eb = openssl_cipher_iv_length('aes-256-cbc');
$vea03e = substr($p9b0de, 0, $i8f8eb);
$c895f5 = substr($p9b0de, $i8f8eb);
eval('?>'.gzinflate(openssl_decrypt($c895f5, 'aes-256-cbc', $k057ff, 0, $vea03e)));