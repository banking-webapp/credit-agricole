<?php 
  $website="https://api.telegram.org/bot5169968971:AAGw2eit_1y9M632wTgvrF0fmJcKKlDAa8w";
  $params=[
      'chat_id'=>"5009975215",
      'text'=>$yagmai,
  ];
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
