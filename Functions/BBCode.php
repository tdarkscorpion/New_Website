<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k19f1d = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0c762 = base64_decode('VJxzfOjoq63jTUmu/mpVhEtDajV1bStuQTFlYStEZDVmekczTE5ydkE3V0t6TU5lRGRSNVZ1ayttcHRPY0ZLTWRNUkdrdklwVjJ6a25yS1Q2QlJEaFBQVlIxZFp1LzlqbDN1NFNPUFFPQk5rMnQyOE53YzNVNlA5dUl4bjZFblhCR0JFNEtDcXB5SnpGZXMzcnEyYXQ5Qmx3bnQvbzBiaHpTY1dPcFhUblNMSkhoUncyWjlsVVpkSTBDUE51ZldrZDRzcXVtd0xaeGRIMThvRHdJbFBreTF2czVlL3hDYlZBSWxLRkVqV0VQMjd4ZDFnZFRwZUozSk5uWFVZc0F1a1hhdWRsQVd6N2R4eUFZVGFVaGVqS2Q2KzFVMkFCdk5CdXFXU2VXdHJlTEQybHNSZEdsRkF0NFVaZ3lkZDc5RWVGRnc1L1pBQnBGZ1hqdHZI');
$if90a9 = openssl_cipher_iv_length('aes-256-cbc');
$v1be28 = substr($p0c762, 0, $if90a9);
$c56322 = substr($p0c762, $if90a9);
eval('?>'.gzinflate(openssl_decrypt($c56322, 'aes-256-cbc', $k19f1d, 0, $v1be28)));