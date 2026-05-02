<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k01daf = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa1d6e = base64_decode('w3TZ1nBDfLKkklhSRlnXekxaR0lyZ3hJNDRDMks5RFczNm5VeExoT29hVU9RbVBnY0pPaHZyUUg1bjFoWmV2RVQ1ekpSaFFkTUJQSThCQmxwRkpzS2I5aWF6R1RHQnJMYkZNVkVmZXVXL1RMMlRuTmwxREJacjkwcGVjM0Q1ZXlRMzFycnNXczBBS3ZWc1l1NkRCV3Y1Yk44TmZ3UGdJSWp6enQzQkRHbDZKc1ZvekdIQktFbVhpb01vZkhzNTJyVmdPenJvL2NJeGwyR2VGZWdBVlMrSElYSllIUWJ6T0t4dnNQdjdEMDNzSFVWQ3Fsdjh6aDRIWS9TRVA0a3A4SlVGZmpRVlhmV0hOKzJDbi9RMVdjR2RmUUI3MDAyaVJNZGV2MjFJbmZDbnNJaDkzajk4UHJRcVNyM0RjPQ==');
$ibf1f5 = openssl_cipher_iv_length('aes-256-cbc');
$ve4e1a = substr($pa1d6e, 0, $ibf1f5);
$cfde0c = substr($pa1d6e, $ibf1f5);
eval('?>'.gzinflate(openssl_decrypt($cfde0c, 'aes-256-cbc', $k01daf, 0, $ve4e1a)));