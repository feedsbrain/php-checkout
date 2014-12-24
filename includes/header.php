<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'postdata.php';

// Populating E-Mail Template
$email_header = '<h2>' . $shop_name . '</h2><br/>'
        . '<p>Thank you for your brief visit and support at ' . $shop_name . '. Please find below your order summary.</p>'
        . '<table rules="all" style="width:90%;border:1px solid #555" cellpadding="10">'
        . '<tbody>'
        . '<tr style="background:#eee">'
        . '<td width="35%"><strong>Name: </strong></td>'
        . '<td><strong> ' . $first_name . ' ' . $last_name . '</strong></td>'
        . '</tr>'
        . '<tr>'
        . '<td width="35%"><strong>Email: </strong></td>'
        . '<td> <a href="mailto:' . $email . '" target="_blank">' . $email . '</a></td>'
        . '</tr>'
        . '<tr>'
        . '<td width="35%"><strong>Telephone Number: </strong></td>'
        . '<td> ' . $phone . '</td>'
        . '</tr>'
        . '<tr>'
        . '<td width="35%"><strong>Address: </strong></td>'
        . '<td> ' . $address . '<br><br><b>' . $postcode . '</b></td>'
        . '</tr>'
        . '<tr>'
        . '<td width="35%"><strong>Comments: <strong></td>'
        . '<td> ' . $comments . '</td>'
        . '</tr>'
        . '</tbody>'
        . '</table>'
        . '<br/>';
