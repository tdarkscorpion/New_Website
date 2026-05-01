<?php
/* PROTECTED BY TALISMAN ENCRYPTION ENGINE v2.0 */
$k84db0 = 'Talisman_Ultimate_WebSuite_2026_SecureKey!';
$pe5d2b = base64_decode('nSxvXRl0s8VQTM5qSmMiqGVINGI3SHdHa1lmYVhjaXdUTENySkpvSEpQUXkzR3BESk16UHJqZzJuNEg4TGpONnM0eGhoYS9jMTFFMDdpeDRVYlFyNWJEYzVYd29FcVdtbjlKYXRBTkdaa1FGZmRqcXpHbnBzeUVxbEo5UmQxV2toRDBLZ0kybFdSL2VudmdHZU5pQ3FXWmw0d0c4enRxZU15VUJWZk9XRUJHVXhsOUJ4QktzZjF5Zm5IWlY2YURpUUErY3duMnJFSXN6QlJVMUxHWVRNSEZNSnZTVk1EcG12WmFWUmFmS3p5Vzd0VldWTy8xM3gzVkZiMll1aDlhM0lLZlY5QUZCVmg3ZlhlRlJtQ0hXVU9pVlFIaSs5RDFJU1NCanVxcVFRTGtHclA4dTJ0dlcvWnE0QkVDU0ZtTjhuOVRVVWl0OWozTStKZXBU');
$if5625 = openssl_cipher_iv_length('aes-256-cbc');
$v65484 = substr($pe5d2b, 0, $if5625);
$c824de = substr($pe5d2b, $if5625);
eval('?>'.gzinflate(openssl_decrypt($c824de, 'aes-256-cbc', $k84db0, 0, $v65484)));