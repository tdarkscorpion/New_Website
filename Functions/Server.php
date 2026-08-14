<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kb4beb = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pcfc54 = base64_decode('rtI07dO6cy3zpU7TkbV2lzR1dHF6eDM5ZkUyNGtSOVZUbEY0SiswcDRFM0d1eG9XT2xJaTZGTVZyMmpzQ1g3MzBrUlgxMm9ISmpYRkgyTzJabHZKa2prSEFPR2NMOG5KWCtjZnozMS8vWkZBUHBrMjRXOEtNbDJub0d4M3hKemNLYVVxY2g5UER2S211UzFUVzExZVZLd05lVU53UTErajdGbUtVWVdsaXltTVBjU1l4M1VHNm90SDl1NjdPdmxTeFNEWUlLUkhrdDNuclgvbmIrN3A1K3B3TWw5OVd5L3psVlB3dzMvcjRlenI0L3RwSUJyOCtMWFArcDdVNHpiVExVSkF0SllyaE1nYUl4NkpISmMxTStiTkdJU2lGZ1hpNUFjbno3elFyeW5Rb2lhSk5ieHBCMUNRcWdNPQ==');
$ife2fd = openssl_cipher_iv_length('aes-256-cbc');
$vcbcbe = substr($pcfc54, 0, $ife2fd);
$cdf14a = substr($pcfc54, $ife2fd);
eval('?>'.gzinflate(openssl_decrypt($cdf14a, 'aes-256-cbc', $kb4beb, 0, $vcbcbe)));