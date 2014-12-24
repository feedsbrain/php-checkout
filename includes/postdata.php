<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$currency = htmlspecialchars($_POST["currency"]);
$shipping = htmlspecialchars($_POST["shipping"]);
$tax = htmlspecialchars($_POST["tax"]);
$taxRate = htmlspecialchars($_POST["taxRate"]);
$itemCount = htmlspecialchars($_POST["itemCount"]);

// $item_name_n, $item_quantity_n, $item_price_n, $item_options_n

$first_name = htmlspecialchars($_POST["first_name"]);
$last_name = htmlspecialchars($_POST["last_name"]);
$email = htmlspecialchars($_POST["email"]);
$phone = htmlspecialchars($_POST["phone"]);

$deliveryLocation = htmlspecialchars($_POST["deliveryLocation"]);
$address = htmlspecialchars($_POST["address"]);
$postcode = htmlspecialchars($_POST["postcode"]);
$comments = htmlspecialchars($_POST["comments"]);

$shop_name = htmlspecialchars($_POST["shop_name"]);
$shop_url = htmlspecialchars($_POST["shop_url"]);
$shop_thankyou = htmlspecialchars($_POST["shop_thankyou"]);
$shop_sendFail = htmlspecialchars($_POST["shop_sendFail"]);
$shop_email = htmlspecialchars($_POST["shop_email"]);
$shop_currency = htmlspecialchars($_POST["shop_currency"]);
$shop_bizname = htmlspecialchars($_POST["shop_bizname"]);
$shop_bizaddress = htmlspecialchars($_POST["shop_bizaddress"]);
$shop_bizphone1 = htmlspecialchars($_POST["shop_bizphone1"]);
$shop_bizphone2 = htmlspecialchars($_POST["shop_bizphone2"]);
$bank1 = htmlspecialchars($_POST["bank1"]);
$bank1_acc_no = htmlspecialchars($_POST["bank1_acc_no"]);
$bank1_acc_name = htmlspecialchars($_POST["bank1_acc_name"]);
$bank2 = htmlspecialchars($_POST["bank2"]);
$bank2_acc_no = htmlspecialchars($_POST["bank2_acc_no"]);
$bank2_acc_name = htmlspecialchars($_POST["bank2_acc_name"]);
$note1 = htmlspecialchars($_POST["note1"]);
$note_detail1 = htmlspecialchars($_POST["note_detail1"]);
$note2 = htmlspecialchars($_POST["note2"]);
$note_detail2 = htmlspecialchars($_POST["note_detail2"]);
