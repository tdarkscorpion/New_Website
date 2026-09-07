<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k86b57 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pf4f76 = base64_decode('9eVDzO+DNejIn8Ie4h3mWGE4Vk1sUGt1TnJ0UGltZUl1c0JqUTMwSHRPS1pGTm5oMC9yVVNhc0dHblBhcFVaWDQ1ZGZ4QmdGTFFIRE5wcGIvWHcrMk83Y0YrVGhCUE9jSzI0MzRtY3JUTDQycGdOMzV4ZHREUjgwUW1QcFhlYUxyZGFSbll2YnoxNTV3Zk9wR2p3VVc4bFVsYi83T01IWWVFTDZyNU9HbDBYalhGVXpSbVBHSW9pRU9FOUJ4NW9IRWgyZDlnRE5yRU01NjM2M0xyc3F4ZE0wbUdlUWl3aFVybndrY2o2S05KNFpmdWlBSHR2T3dPbEpJSlB6amNuRjdJQnlEVGE2VnhLVlZGOUI=');
$idc26a = openssl_cipher_iv_length('aes-256-cbc');
$vc4897 = substr($pf4f76, 0, $idc26a);
$caf038 = substr($pf4f76, $idc26a);
eval('?>'.gzinflate(openssl_decrypt($caf038, 'aes-256-cbc', $k86b57, 0, $vc4897)));