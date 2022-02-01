<?php
$cur = $_GET['cur'];
$from_Currency = urlencode('INR');
$to_Currency = urlencode($cur);
$query =  "{$from_Currency}_{$to_Currency}";
 
  $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey=7a2f4bc32b1274d54edf");
  $obj = json_decode($json, true);
 
  $val = floatval($obj["$query"]);
 $amount_uiux = "24990";
 $amount_website = "24990";
 $amount_web = "990";
 $amount_ecommerce = "29990";
 $amount_mobile = "990";
 $amount_digital = "19990";
 $datastring = "";
 $datastring = $datastring.'uiux:'.number_format(($val * $amount_uiux), 2, '.', '');
 $datastring = $datastring.',website:'.number_format(($val * $amount_website), 2, '.', '');
 $datastring = $datastring.',web:'.number_format(($val * $amount_web), 2, '.', '');
 $datastring = $datastring.',ecommerce:'.number_format(($val * $amount_ecommerce), 2, '.', '');
 $datastring = $datastring.',mobile:'.number_format(($val * $amount_mobile), 2, '.', '');
 $datastring = $datastring.',digital:'.number_format(($val * $amount_digital), 2, '.', '');
 //echo implode(',',$data);
 echo $datastring.'#'.$to_Currency;