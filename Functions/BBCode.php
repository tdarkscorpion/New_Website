<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$ka910a = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pbdec0 = base64_decode('QJLbMR9Yw1c5AWXIh7tXSWhKV2czSUQvdHlzYzVoTGNlN0h0SXRhSXJKTEJxS1RUM0crdkh4dGZFaVhMVFZvWXlncnFlWWZQblZja0pBcHFZNXZTTnc5K2ZNaEEzbmpwYm9Sa0VmVG05MDl3bHNjYVZ5Z0cyMHFtbXVaTy9zaVpnSUdUcHM4QjRVekIzSnEvTzk2MGFaUS9qS0N3NURDNjZPem5mQW1vNi9hRnM5M3oyUW5hUEN3L0MzdjRTeE1qRmdkUi9hV1M3SnBqRGlZeFZ3UHgyY0kxMnpFanlVQlBBVTNPVXNEV1JxTEpJaWtkYVZzcXQ1Z0NvSUJlcWQ5RVBJREY0Qm1nU2JkUWNmSU5pRTRVbS9IeGtPVWJKYzlCUWdXOUZJZkJFWkF3QVRnV1p4c1VhR2dRUVRyS0o5YTduZ2txeSsxZzh3c0tmRnVK');
$ibdf4f = openssl_cipher_iv_length('aes-256-cbc');
$v4b627 = substr($pbdec0, 0, $ibdf4f);
$c677d8 = substr($pbdec0, $ibdf4f);
eval('?>'.gzinflate(openssl_decrypt($c677d8, 'aes-256-cbc', $ka910a, 0, $v4b627)));