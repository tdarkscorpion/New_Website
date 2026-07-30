<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k5acd0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pac274 = base64_decode('/++wIJL+XoolGjqTwEylj0EzWXRHWWw0RGs1RG1sbktnRTdvaWVsZHp3TmJPdGxPNW1SR0hFSlhuV0x4ekl2OWFRRDY0NEc1ZXAxdWF1VTd5NkRBM2VIa2RpSDU2cXAwZlJjZlZWS21xV3o5aC9pS0YyZUk3OUxZYlJCSll0eXlrZ0QzUXB5V3hwdFNLdWQ2R3pNWit4Uit3N1FEcnZPMGF5TEtHYXovZ09QcHZaNTdiaThMQ2MxbXZUQnNvenN6ZXE4cFk3bHRmbjNXY1JCMm84aFFTOEgrNFBvbXJNeThoNHFuNElUVkYrWGhpRUFpb0o4cEUzemIyakMyVWZvQ1l5eHJOZUJISUx4OXZwRWxiZi9STFh0QXN3aUt4N3VkT2gzQUFBWWQwdTBOaW9Mck1YVEtUNnY1MzJGRkZRSWMwWXhqaWVtY3YzMHNraGZ1aDk3TGwxL0dNL3pUVVN2ODMreVFPZz09');
$ia8012 = openssl_cipher_iv_length('aes-256-cbc');
$v0ae81 = substr($pac274, 0, $ia8012);
$cc1288 = substr($pac274, $ia8012);
eval('?>'.gzinflate(openssl_decrypt($cc1288, 'aes-256-cbc', $k5acd0, 0, $v0ae81)));