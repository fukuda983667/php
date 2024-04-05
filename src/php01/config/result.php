<?php

$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
print "私の名前は" . $my_name . "です" . "<br />";

$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);
print "注文商品は" . $choices . "ですね" . "<br />";

$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "注文数量は" . $number . "です";