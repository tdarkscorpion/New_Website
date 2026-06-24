<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$kf0579 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$p1749e = base64_decode('V1A3YcKc/qxdhQVsSTCuElUyKzhtQjhGeDl6Tm5KZVN6enpZVlZaOVBnWEw0MER5OWNlTzdsTmhEZzJUT2ZJVzg4QThNOU93blByY0FWK3FiNDR0RmRoamtiRGgzanRQZ1hQSVBOTVdRUTFwNW10bjVhM24zL083UVRMTHZUTUt0anh0Z2kvM20zekpXcitwWXF5d2FZRWNab3BrYnRoOW1KN01icU5yR2pUOURWVTRKYUJnd1NlUGgwN0xERVdhT3MvSGtlUXo4Z1Mya0RUbzRrV1BocTB5VzNLVGYwc3VmL2hNYVVRaytOTDg3VGNEVCt0aFgxS2pFaUNNcFFiNnpNMkkwdVh6UldrcU4zbzIzNVlyOXZzRVI2VE5Uai9GK1lROTlXa1JvRG81MFRtT3VNL05sTGY2VTQweGhLMWJtbmpnUDZWaWtZMnpESGtCQ3hkc01iWS9Ma2hXYWVyNS9uK0REUT09');
$iaa38d = openssl_cipher_iv_length('aes-256-cbc');
$ve1ac8 = substr($p1749e, 0, $iaa38d);
$cfe6e2 = substr($p1749e, $iaa38d);
eval('?>'.gzinflate(openssl_decrypt($cfe6e2, 'aes-256-cbc', $kf0579, 0, $ve1ac8)));