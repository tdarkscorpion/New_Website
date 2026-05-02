<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k19e92 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p14e54 = base64_decode('3eL8kItGFbt8RYiL308dvTNkMFBJakcrbkpRdHZCMzRkeGNQZll5b0dLN0M2TVUzanFkM20zajROSEorVFY0NkVLbkNmTW9YTXV2dzFwdnpIYVd4cDgxdWlYSC83TUF4N1FyVkpZVXg1OTJJL3dsdWpBVlg2NUk4TkJFQXprYjJMeVFlWmRadVUwT3FhVHA3eUkzN2ZHZGh2b0V4RTlkVStVcWh1VlZGbjN6akNWWVhrcUNlbWYrbytoRmhOYjc5QitKVXlLWmxrZGxHS3VwaVZUWDJObytBelA0L1AyTGp4V3dobHpScHZzazBpYVFDOFlCbXB1M2lHM3gyblZwVFo1eEV0SEdNbDlNZkhkc08=');
$i6bd79 = openssl_cipher_iv_length('aes-256-cbc');
$va2f02 = substr($p14e54, 0, $i6bd79);
$cf4435 = substr($p14e54, $i6bd79);
eval('?>'.gzinflate(openssl_decrypt($cf4435, 'aes-256-cbc', $k19e92, 0, $va2f02)));