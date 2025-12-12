<?php
$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$product = htmlspecialchars($_POST["product"], ENT_QUOTES);
$quantity = htmlspecialchars($_POST["quantity"], ENT_QUOTES);

print "お名前は" . $name . "ですね" . "<br />";
print "ご注文の商品は、" . $product . "<br />";
print "注文数は" . $quantity;
