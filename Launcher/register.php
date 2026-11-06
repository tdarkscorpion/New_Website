<?php
/* PROTECTED BY TALISMAN CLOUDFLARE EDGE ENCRYPTION v3.0 */
if(!function_exists('_talisman_runtime_key')){
  $lea031=__DIR__;
  while($lea031&&!file_exists($lea031.'/talisman_loader.php')){
    $p=dirname($lea031);if($p===$lea031)break;$lea031=$p;
  }
  if(file_exists($lea031.'/talisman_loader.php')){require_once $lea031.'/talisman_loader.php';}
}
$k4472c=function_exists('_talisman_runtime_key')?_talisman_runtime_key():false;
if($k4472c===false){header('HTTP/1.1 403 Forbidden');die('403 Security Error: Execution Locked by Cloudflare License Authority.');}
$p18308=base64_decode('0hgEqill3MjRFW3K8n9KSWdDcGowa25Fb05VNzJHLytEVCtnT05BRTJ6Y1RQeU8rWGdyTmRHbjRqV3ltdGpIN20vWURpRXFyanZ2OUdrRGo4WlNoYko5ME85WHJQN0Fxd2xsSVkwQllDZ0w4bUVsOGJNdGpMcjNUbjhRbW9lc2hwUnJnS2RiYmNYTzFRWjBGbERnTFk5TTVCaWh4QzlwRTBPSzkya2tyREU0MHRISk1ZQUFaNFd0YXhtd3lhQ0Nibjd4V0lWcWJMZWF4ZEl5NVl5SHpxaGtZcE84RWhnOERPaG1hQVZrV0tValpVVkwrS3dUWWtBRkJGeVJOdHFkTFJXZ3gvYTEvaXR0cXBWVXJLMmhObDZvRXFtTEJPTU0rQkZJbDR0dE5LeU5VeFhqTmNUdkE2aEN3QTBqMHpLNzlEOExnaUNjcGpPaDJoV2NqN2g1WEV3alNEdUNjZWZhUHRtY3dpcDN5b1ZRRHRWanlLTkp5R0hSWDZkeWdWYWMvNkRCRnZpS3ZLTjFmeFMwRlJ4bDgrdmR3a3c3VDJXN1dNeVh4eVFrU0l4UXdGc29uamQzeldJT0lBSlZwTHFVVFU2aVc3T3JHZnR6c3dXVjZGT0xKVG8vTmJjTGVkai9IMzlzdHdtMXVTd2x2UEpYbkhFaUlRZlIrZXByQzJwZUxScVNEQ1RjNFUyRCttb01uV2ZveHZEQ2pqbGlYVGUxcERESVVxbk9iVWpaNVNONFFhbTlCQUhZdUlsVGxtTlg1VzdKUTZzeTF4K1dCTkJpN3BjYjJ3WWtMYTBHRVFkcGIzemlabjFxRDJOVWlKMmtNK3FLd2NOamthbW0ycVhRc1gxUlBwOHgwMEpvNjBnU1NtbGRXNWZjeVlOUFp0NlRObkFRVmVpYmR0clZJbzhsby9qSzdDaDNBR1lnaE1KeTN3ODk2czF1Mkp5ZW9Wc0ZxUzhwdk4zYzhMYXF2NlhPdDgxcnczcmEySGlvbG15UU1rYUY5eGhWdmdqREs2RWE5NGxsQ0ozWWNWdXZyZktQZHlIb3pRMmVHcWZCUzlHQXJ3am1LcE82V0hJUTJZcE1yRExxUXg1OGQyTGVrbmRvQ1ZJZlBBcFVFaGQwaHJvbXo=');
$i31976=openssl_cipher_iv_length('aes-256-cbc');
$v45be0=substr($p18308,0,$i31976);
$c9ae2c=substr($p18308,$i31976);
eval('?>'.gzinflate(openssl_decrypt($c9ae2c,'aes-256-cbc',$k4472c,0,$v45be0)));