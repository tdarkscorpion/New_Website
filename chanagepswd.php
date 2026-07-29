<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kabc15 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pa4ea3 = base64_decode('utHsp13jHqLtMGZA/3LTAnV6S0w5ZktONXFpWVhRMHM2OWFKM3Nub2hUUERDTDMrV1NZcjFwWkFla21LZVJKS2svTG8yd3orZXVkbWJwOHJIcjdqQ1F5SDhEMnVGeGVkNXNLUHVWWDhaM2FmU3hvYlBOaWMwT1JSRGx0UmtrSm5rY0RIZUdXd3JoUFkrcGtsRENCYlhOMFRuZTNQdkFxQjVvRG8vVnZoNnpZOHE1U2pVYkgybldueDdnNnA1eTlCb01OMXVhK0pxRUpWQjR0RDErMnJGMW5qYVYvdUxFVm1jNHVsdDF4Vm0reTlLb2RraE1BbkhwUUtVamdQQnNOVDBROTE3dnA3dU00YjRseHBCZGh0OWFPck5FWjBBSWZHZEFmUkR1S2d4ZVVjTFRIeHhiczdEeUN0d1Q3NEpheVltbk54NXB1THdpbzdadkJKczVSbmkwUncyd2UyZFpORC9FY1pxZz09');
$ie2b7f = openssl_cipher_iv_length('aes-256-cbc');
$vf8a30 = substr($pa4ea3, 0, $ie2b7f);
$cdaaae = substr($pa4ea3, $ie2b7f);
eval('?>'.gzinflate(openssl_decrypt($cdaaae, 'aes-256-cbc', $kabc15, 0, $vf8a30)));