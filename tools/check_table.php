<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k8d311 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe3aeb = base64_decode('5okr1M+8m2E6q8fZV09RJHhUMnRMVmVBMktRM3dXU2tsdkd6ZmRFdU12VGJtdjZONmlZc1A1Sk5tczYxVk9hSFZuNHdlaEhvSnU3cHhSMFU2cE4zUTZVb2RZVTZITDlGbndDVEJqaWFEYnV1ZCtaVFJjaHVwMW9DRDFydU03cExzS25WQU1lRHliMk05Vm9ORW9NeWxqNkk1T3RGNXFpTmdlZHAyVi9vRitzOEptOUhWOWJEbXQzMTc0TStPWnFnVnVndlR0RVdIazViWEQ0UkR4ejdvcUVINWs4MjlqeVZRSERqRnkreTNCcEk5ZTdvYTdPS0dTeVpCU3BxL0lzT0hxazJRR0hkNW1rdW9YTmxNREo3YjlRd1pSNWp0bnVRdHVtSXJYRzBOMkZ4aE1ZSUlKclRFLzNMQnlLMGdjRjB5cU1jYlJ4WGRHR3VEQVlx');
$i926d7 = openssl_cipher_iv_length('aes-256-cbc');
$vd8400 = substr($pe3aeb, 0, $i926d7);
$c68f44 = substr($pe3aeb, $i926d7);
eval('?>'.gzinflate(openssl_decrypt($c68f44, 'aes-256-cbc', $k8d311, 0, $vd8400)));