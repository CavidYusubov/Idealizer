<?php
$input_xml='<?xml version="1.0" encoding="UTF-8"?>
        <TKKPG>
            <Request>
                <Operation>CreateOrder</Operation>
                <Language>EN</Language>
                <Order>
                    <OrderType>Purchase</OrderType>
                    <Merchant>modernlab</Merchant>
                    <Amount>2500</Amount>
                    <Currency>944</Currency>
                    <Description>xxxxxxxx</Description>
                    <ApproveURL>https://modernlab.az/callback?orderId-200</ApproveURL>
                    <CancelURL>https://modernlab.az/index.php?route=checkout/checkout</CancelURL>
                    <DeclineURL>https://modernlab.az/index.php?route=checkout/checkout</DeclineURL>
                </Order>
            </Request>
        </TKKPG>';

$url = "pay.millikart.az/exec";

        //setting the curl parameters.
      $ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_URL, "test.millikart.az:7443/exec");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $input_xml);
$data=curl_exec($ch);

        //convert the XML result into array
        $array_data = json_decode(json_encode(simplexml_load_string($data)), true);

        print_r('<pre>');
        print_r($array_data);
        
        print_r('</pre>');
        echo $array_data[Response][Status];
        echo '<a href="http://test.millikart.az:7443/epayment/exec2.jsp?ORDERID='.$array_data[Response][Order][OrderID].'&SESSIONID='.$array_data[Response][Order][SessionID].'&URL='.$array_data[Response][Order][URL].'">Goo</a>';
if($array_data[Response][Status] == '00'){
    echo "yes";
}
        ?>