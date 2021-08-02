<?php
require('../src/GojekPay.php');

use Dutta\GojekPay;

$access_token = 'eyJhbGciOiJSUzI1NiIsImtpZCI6IiJ9.....';
$gopay = new GojekPay($access_token);
/**
@ get Account Balance
return @type json
*/
echo $gopay->getBalance();
