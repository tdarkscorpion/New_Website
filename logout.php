<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf225c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pceeed = base64_decode('0o1SIyjpi0LNHgtxT3+b7FM4OXZaOUl4SDNvQUt6TW43MUdZbFM1Z0xQWEVRVnUzSHBLYU5SUUpFUytuajFzZkNTaGNrNm9DRjlQTWNYTEUrWFN3eDdxUmhST1psdlE2Ulk5a2duclBzakVmbjRkOVJHeUd2d3FuWGlBPQ==');
$iebe8a = openssl_cipher_iv_length('aes-256-cbc');
$vd093f = substr($pceeed, 0, $iebe8a);
$ce1818 = substr($pceeed, $iebe8a);
eval('?>'.gzinflate(openssl_decrypt($ce1818, 'aes-256-cbc', $kf225c, 0, $vd093f)));