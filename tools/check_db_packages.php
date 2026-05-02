<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka80b4 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p243b7 = base64_decode('3I07b0Q2OQkTN3+x6uIegW5HSWhkaGcxUy9iR2J3T3U4S2lVeUEzbFE4MEFxc1hZRlJpNjVNaXVRSVVvNzRuSGF5eXV3MWdja1AzUEhCVTdURW92bUEzdStqZGtqcm5ndEkzREsvTG5kVTZwUGRxSzhTV0F1dEVrQmFnVUtZMGRCTkJJbXJUclpFb2QwNmUwd0UwMzRsanIreHcralYrUVV3WFNDcEw5cFE1NlpnK2hlQzdXUU5kSWlCZjRmNWwxMDlIN3NtZHovYnZNWGNXNm83VU5mZTdLWUNndFpPRVVPc1pYUnc9PQ==');
$i89c38 = openssl_cipher_iv_length('aes-256-cbc');
$ve8251 = substr($p243b7, 0, $i89c38);
$ce9bd0 = substr($p243b7, $i89c38);
eval('?>'.gzinflate(openssl_decrypt($ce9bd0, 'aes-256-cbc', $ka80b4, 0, $ve8251)));