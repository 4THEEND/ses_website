<?php
$lien = 'https://www.college-sacre-coeur-lamballe.fr/component/uddeim/?task=new&Itemid=0';
$postfields = array(
    'username' => 'test',
    'password' => 'test',
    'login' => '1'
);

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $lien);
curl_setopt($curl, CURLOPT_COOKIESESSION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $postfields);

$return = curl_exec($curl);
curl_close($curl);
?>