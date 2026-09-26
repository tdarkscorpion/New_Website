<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k3a9e0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p68b4b = base64_decode('9WNOF9fJ98MWjoyW3DFw4U1yQ0h6UlpONmZ0ZWdzVUNwTmFMeHFIeS8yN3h4Sm1iM0xqY3JuKy9YSWt1UmxsNmJUazdFRTdtQWxUVnFld1RrVGNmNWZDbVF4S1Uvbkl0dFp3ZE5PTFdrT1hoRDB5Zk5ETzNWa2tJOWtIVkxnQVpLVUJubGJHb0lTS2lsT2wwS1hlRkthaXdvYXI1Tm9vTXVnYnFxRzlRS3BMOGQ2TlRzUzR4UFF1a3I3Y3BPVDBvWXZJeTZSdjNzU2lzeVYveSs0akVSaW1UdHJGSlhsMk9SaTZhc1dLNW9yaUFMLytpclFpTnV3ditRSEtLWlhNZTBGR0h2K011SnROb0VDZWlzN0oweVkyZlp4ckt1ZllZOGVCTzdHbCtHZGl6VVVnZVgwZG56Y0NvN1d3PQ==');
$ic5115 = openssl_cipher_iv_length('aes-256-cbc');
$va14ac = substr($p68b4b, 0, $ic5115);
$ca026e = substr($p68b4b, $ic5115);
eval('?>'.gzinflate(openssl_decrypt($ca026e, 'aes-256-cbc', $k3a9e0, 0, $va14ac)));