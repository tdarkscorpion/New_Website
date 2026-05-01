<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf94b7 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p0f6bf = base64_decode('pnTxRDgrWbwCERGproMXslZPelRlTVZpek9oeDhQc3hrcEJYWUVXZlBOVFZaWVl2c3Q3cGlKeEZ0YUp2VnFMVGJaZkRvN2JHWDBrb0VxQUtrbENkdjZKMEwvTFhvMm12aUp1NGowaTlWLzZzczlYcWs3VWo4TmJJVnM2NEUrd1VGSHVQaDBpc2Vvay9PN3VlV2RUY2FXNWdsWXFSNTVSMytqSUt5SUx2VDBPeHkrckFRQ1MwSGpnTmo4cVdBVTRzaTZDRUQ1UUd2eU11WUVKNEkxQXNhK2dZRVdIQWRMRWJQazVqVFF3RFk0czBaMkxGYXFOZkF1RGFKa1lJcVhoUDR6ZnlmYTNXRFZOQkdkRVMydHBhV1l2b0dVYzR1blBtRlZIRXNZS0tJU0hrSUhxbEl3aTdwNzcwQmJVPQ==');
$if6427 = openssl_cipher_iv_length('aes-256-cbc');
$v68bb1 = substr($p0f6bf, 0, $if6427);
$c50faa = substr($p0f6bf, $if6427);
eval('?>'.gzinflate(openssl_decrypt($c50faa, 'aes-256-cbc', $kf94b7, 0, $v68bb1)));