<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5fd29 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pb4828 = base64_decode('PYyWrmTkOwpnSbEXCjcAk0c4b3RMWnJ5VnFTSzBsRTV3Q08wc2lINVAyaWdRSk85azhVRXBhcGZXTyt3T0wwT0ZDWXpEaVUvR3FZd29wSkFCdWNESVZYOVZHQVVzZk5CTXNjSmZUWGdLUGtUVGdsMEZMY0NYOS9Scm9mcjNqbGdmQUZyZnRUWEd6eHFaNUt0RllkTmVBa3BoaWpTWjg3dzg2YmtuZHJ5cG84Z3MyMW1oS2t1aitRQkp2TkJMbnZVZzNkTEYxamJjUUl6TXB6anFVdjR2UHpvNTRSbURJcENpU3E4WlJpLzJPT0t1WjhYUWZLWEQ1eXRiMG96UmIyT1Q4d3RzZTBCNDlZRnkxTVhISjNpc2ZubWlyanVRMGx5OS9SZVhYZk9vYnZMaDdFU2FLcUlrTTJDK0k2WFFONGJ5ZHV0eVhiRTQzVzk0L1Z0');
$i6f3ff = openssl_cipher_iv_length('aes-256-cbc');
$vc2cce = substr($pb4828, 0, $i6f3ff);
$cfca21 = substr($pb4828, $i6f3ff);
eval('?>'.gzinflate(openssl_decrypt($cfca21, 'aes-256-cbc', $k5fd29, 0, $vc2cce)));