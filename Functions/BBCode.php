<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kdcf88 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pba41d = base64_decode('/hY38Nmg7u6ptt71BjM8DURTN2VHSTZIRTJHMWg2czRGaUxZakJJTHhXdEc2TlBVNHVPUitqU3VXL0RId3UySzRQU0FkUERoK05BWm82Z0FBVzlLZnJ6YmhuM1N2Nk9vaFJaM2hKMFlpM3FaZGtZWEN4b0h0T0kwcFBMSGtBd25heTh1OUlDN1NVVmo2cTd0UmlJR2MxT3ZPMGM0TXZRZ1psSFJNYm93ZHhWVkhFWlI2NU15NmFzb3hIZ0NtSUlqeXR0NVlaREQzY2VuR3NiMlZ5YkVYdjZwSTZYQjI3ZnVTR3B6OFhVZXdhcStZZUQvbUFsNWozSDZ3WDc0R2NHejJKV2kzbEZ1ZEVQQ1hnK0JwWFA0Q1J3UHIyS21FdmRhL0hhREdGNTlKaDhHaHpYU0hMS0EyK2NndzZSbExhNlNQaDdicjZNblByYmpIVklG');
$ibfdd6 = openssl_cipher_iv_length('aes-256-cbc');
$vea83b = substr($pba41d, 0, $ibfdd6);
$cb5998 = substr($pba41d, $ibfdd6);
eval('?>'.gzinflate(openssl_decrypt($cb5998, 'aes-256-cbc', $kdcf88, 0, $vea83b)));