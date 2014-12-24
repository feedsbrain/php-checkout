<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'postdata.php';

// Populating E-Mail Template
$email_details = createOrderTemplate($itemCount, $shipping, htmlspecialchars_decode($shop_currency));

function createOrderTemplate($count, $shipping, $currency) {

    if ($shipping === '' || $shipping === null) {
        $shipping = 0;
    }

    $detail_template = '';
    $grand_total = 0;

    for ($x = 1; $x <= $count; $x++) {

        $item_name = htmlspecialchars($_POST['item_name_' . $x]);
        $item_options = htmlspecialchars_decode($_POST['item_options_' . $x]);
        $item_options = str_replace('thumb:', '', $item_options);
        $item_quantity = htmlspecialchars($_POST['item_quantity_' . $x]);
        $item_price = htmlspecialchars($_POST['item_quantity_' . $x]);
        
        if ($item_quantity <= 0 || $item_price <=0) {
            continue;
        }
        
        $quantity_price = $item_quantity * $item_price;
        $shipping_cost = $item_quantity * $shipping;
        $subtotal = (($item_quantity * $item_price) + ($item_quantity * $shipping));

        $grand_total += $subtotal;

        $detail_template = $detail_template
                . '<table rules="all" style="width:90%;border:1px solid #555" cellpadding="10">'
                . '<tbody>'
                . '<tr>'
                . '<td><b>Order #' . $x . ':</b> ' . $item_name . ' <br><b> <a href="' . $item_options . '" target="_blank"><img src="' . $item_options . '"/></a></b><br><br>Quantity: <b>' . $item_quantity . ' item(s)</b> X Unit Price: <b> ' . $currency . '  ' . number_format((float) $item_price, 2) . '</b> -- Amount: ' . $currency . '  ' . number_format((float) $quantity_price, 2) . '</b><br>'
                . 'Delivery Charges for <b>1 items</b> selected at <b>' . $currency . '  ' . number_format((float) $shipping, 2) . ' </b>/item -- <b>' . $currency . '  ' . number_format((float) $shipping_cost, 2) . '</b><br><br> SUB-TOTAL: <b>' . $currency . '  ' . number_format((float) $subtotal, 2) . '</b><br>'
                . '</td>'
                . '</tr>'
                . '</tbody>'
                . '</table>'
                . '<br/>';
    }
    
    $final_detail = $detail_template
                . '<table rules="all" style="width:90%;border:1px solid #555" cellpadding="10">'
                . '<tbody>'
                . '<tr style="background:#eee">'
                . '<td>YOUR ORDER GRAND TOTAL: <strong>' . $currency . '  ' . number_format($grand_total, 2) . '</strong> - Shipping/Delivery Cost Excluded</td>'
                . '</tr>'
                . '</tbody>'
                . '</table>'
                . '<br/>';
    
    return $final_detail;
}
