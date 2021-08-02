<?php
require('../src/GojekPay.php');

use Dutta\GojekPay;

$access_token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6IiJ9.....';
$gopay = new GojekPay($access_token);
/**
@ get Account Information
return @type json
*/
echo $gopay->getProfile();
