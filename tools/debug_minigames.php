<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k48ee9 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pad283 = base64_decode('HrPb2E4Ev6TmkG9EWkyhD3JkbGtCbytWZWN4c2tmK0NlS1RGRFZBRUkwQktLUi82b0hzOGIzbjZLbVZ6Y25DNVdINWpWVFR4UC9OR01rOVluemIrbGx4VGw0MGpaTlNIRTh1cnBqcDQxdVpmUmNHMUR0d2lHdWZVSnZ1Sjk0dFBVLzJ5aDQwQ0syTUlvRjdqRlhZSTE4QUxoWllqemF5cWdKbVc5ei94ak4yZEYwNUY3OFNQNzdTb2hDdk1NM3JtSkdHdDEvd3NNRzd5ZVdoQlZkVXhGWXhOVHNGOWhtNXZtRmVlTnU3czFQVUlzN2JqOTdhRm0vR3JZZ0MvRVVxT0oybkx3bnhMamh5RC9HVkFLa0RNMThodXhISlpoNTNRdlFlbnVUcTVmTEF6WndZNjFuQ2V6ZnJ3WFdMWlY3bVdRRXFxRE9leDd6ZWEwbVFVM0gvWUhlcXl3OVJFMDI4R3VSZDJzQT09');
$i98196 = openssl_cipher_iv_length('aes-256-cbc');
$v9701c = substr($pad283, 0, $i98196);
$cc19d7 = substr($pad283, $i98196);
eval('?>'.gzinflate(openssl_decrypt($cc19d7, 'aes-256-cbc', $k48ee9, 0, $v9701c)));