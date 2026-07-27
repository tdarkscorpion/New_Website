<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k27818 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pabee7 = base64_decode('4aYqtW/jny+gszfMYtTRGjVSMG00T2JYTXlhNFQrRkJBUjZ3UHhWcnJmMXBPVGJqRE9DVHhXSzBmMDIxTzlBYjRzaTJveG41ZWtkQ2tSM2Mya1NKbkswRnRrcG1SOHlUZ1cweGdaTlVNbUlmZ2I3VGZ3VlM0SUhMNXNkYk5velVkY1E4NHNNNnRqeEtzQW9ZSnR6Vi8zem9BbDVQckZvWkcyWUZWNjkrTmZwQml0Q0hndGpzL2pFamwxclhmNStqY0QzbkVJQnh3amZsdWJMMHc4N0x4RWlodFNrV2JVQ25XMG1sa2FUTGgxOUxhTGxnZE5WZDBmS3pCSjhYWEJUeW5TdzVyS3BiSVZwVlFjcDFSUXo5RjVGcm5sNTMvaTdMK2VsNjJIY0NuZnB6MWVlazBxaUZ2dmc0VUlER0hLUVU5UGFCN3ZnQWFzRzdBRzFtK2F2WTcybDlyemJ1UHdQNUc0bXV1ZWdYV1Y5R3o4QkZVUGVJYUhWa0NrTFpOV1h0K1o2R3RqR3JzWGtqNUFobnlKRUszM1M2TWU3VGs0Y01mZm90aXBDU05rdWIxTHE1Tm9mWlVyVldMUUswZGxMRkpzcnV0c0c3WVhTekJURmI=');
$ifdda7 = openssl_cipher_iv_length('aes-256-cbc');
$v66d4a = substr($pabee7, 0, $ifdda7);
$c063ed = substr($pabee7, $ifdda7);
eval('?>'.gzinflate(openssl_decrypt($c063ed, 'aes-256-cbc', $k27818, 0, $v66d4a)));