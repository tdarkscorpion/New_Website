<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kbccee = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p9e961 = base64_decode('jnHlxVA71xOH+uQfnBp3x3l5ZHhyMTk5WVBNM25JZENmUTBkVTVKMFBNamVzMDVMc2Y2cU9xWkFGL092dU96NWgvQXhtK2RQNHlEVENUbWdHUVl6MTBibUd5VE8vajRNMzZteEQ2Y2M2WkNrNTJQNDBSakdycHlFRTR3PQ==');
$idb7f4 = openssl_cipher_iv_length('aes-256-cbc');
$vc90d7 = substr($p9e961, 0, $idb7f4);
$c99a91 = substr($p9e961, $idb7f4);
eval('?>'.gzinflate(openssl_decrypt($c99a91, 'aes-256-cbc', $kbccee, 0, $vc90d7)));