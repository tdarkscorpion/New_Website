<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kcc87c = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pd30bf = base64_decode('1biWpSdmKr8FCziR6wKAakFYZkxNVXFNTGdPUFYvK2pGaWExMTc5TE50N0ZSaWRGUmlvSi8waGhYZFpZNlhzaWc4dXhwSk1DZ002c1ZRYkM3cHoxZlFvQ2RYY0NkcFVuSDdVZ1d3cVRCamIwemkxWGc1b053TnhmbnFaVnFCS2lGMy8rYnZnY3ErRFlDVDVxNWhBUFkvcVpBTVROY1cvMHdWc1JJZ0pCd3NsQ2pSRjVZM0gwSFBiOWJZd2hWSWtFMFJDc21GbjJ4RDFoUmlBalJPQ2dmVSsyeXZRbldRZkhIcTYyVUZjb2VXZUE1dzlhd0ZyVnZUQXp3VUthSDZtS1AreXpaR3MvdjBaL25IWEZFU3MranhhbzYyWTN2dzV6QVlXdmovbzBnZkVZZUJyalZVUjhuRS8zMXZkYlFCb21KNUxKcHQrMWU0OUFPTkFu');
$i3bafb = openssl_cipher_iv_length('aes-256-cbc');
$v410c7 = substr($pd30bf, 0, $i3bafb);
$cc2380 = substr($pd30bf, $i3bafb);
eval('?>'.gzinflate(openssl_decrypt($cc2380, 'aes-256-cbc', $kcc87c, 0, $v410c7)));