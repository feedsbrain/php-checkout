<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'postdata.php';

$bank_info = '<table rules="all" style="width:90%;border:1px solid #555" cellpadding="10">'
        . '<tbody>'
        . '<tr>'
        . '<td width="35%"><strong>' . $bank1 . '</strong></td>'
        . '<td><strong>' . $bank1_acc_no . '</strong>&nbsp;-&nbsp;<strong>' . $bank1_acc_name . '</strong></td>'
        . '</tr>'
        . '<tr>'
        . '<td width="35%"><strong>' . $bank2 . '</strong></td>'
        . '<td><strong>' . $bank2_acc_no . '9</strong>&nbsp;-&nbsp;<strong>' . $bank2_acc_name . '</strong></td>'
        . '</tr>'
        . '<tr>'
        . '<td width="35%"><strong></strong></td>'
        . '<td><strong></strong>&nbsp;-&nbsp;<strong></strong></td>'
        . '</tr>'
        . '</tbody>'
        . '</table>';

$general_notes = '<table rules="all" style="width:90%;border:1px solid #555" cellpadding="10">'
        . '<tbody>'
        . '<tr>'
        . '<td>' . $note1 . '<br><br><a href="' . $note_detail1 . '" target="_blank">' . $note_detail1 . '</a><br><br>' . $note2 . '<br><br><a href="' . $note_detail2 . '" target="_blank">' . $note_detail2 . '</a><br></td>'
        . '</tr>'
        . '</tbody>'
        . '</table>';

$shop_info = '<table rules="all" style="width:90%;border:1px solid #555" cellpadding="10">'
        . '<tbody>'
        . '<tr><td width="35%">Online Store Managed By:</td>'
        . '<td><strong>' . $shop_bizname . '</strong></td>'
        . '</tr>'
        . '<tr>'
        . '<td width="35%">Business Address:</td>'
        . '<td><strong>' . $shop_bizaddress . '</strong></td>'
        . '</tr>'
        . '<tr>'
        . '<td width="35%">Business Phone Number:</td>'
        . '<td><strong>' . $shop_bizphone1 . '<br>' . $shop_bizphone2 . '<br> </strong></td>'
        . '</tr>'
        . '</tbody>'
        . '</table>';

$copyright = '<table style="width:90%" cellpadding="10">'
        . '<tbody>'
        . '<tr style="font-size:90%;background:#333;text-align:center;color:#fff">'
        . '<td>Powered by: <strong><a href="' . $shop_url . '" target="_blank"><span style="color:white">' . $shop_name . '</span></a></strong><br>For more further detail and information, please contact us at <span style="color:white"><a href="mailto:info@sumberaromatik.com" target="_blank">info@sumberaromatik.com</a></span></td>'
        . '</tr>'
        . '<tr style="font-size:90%;background:#999;text-align:center;color:#fff"><td><i>Theme Design by: <strong><a href="' . $shop_url . '" target="_blank"><span style="color:#fff">' . $shop_name . '</span></a></strong></i></td>'
        . '</tr>'
        . '</tbody>'
        . '</table>';

$email_footer = '<br/>Preferred Transactions:-<br/><br/>' . $bank_info
        . '<br/>General Notes:-<br/><br/>' . $bank_info . '<br/><br/>' . $shop_info . '<br/><br/>' . $copyright;
