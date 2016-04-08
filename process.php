<?php
session_start();

if(!isset($_SESSION['history'])) {
  $_SESSION['history'] = "";
}

if(!isset($_SESSION['gold'])) {
  $gold = 0;
  $_SESSION['gold'] = $gold;
}

if($_POST['building'] == 'cave') {
  $cave_money = rand(5,10);
  $_SESSION['gold'] += $cave_money ;
  $time_cave = date("F j, Y, g:i a");
  $_SESSION['history'] .= "<p> You entered a cave and earned " . $cave_money . " golds. (". $time_cave . ").<br/>";
  // $_SESSION['history']['building'][] = 'cave';
  // $_SESSION['history']['time'][] = date('h:i:sa');

}

if($_POST['building'] == 'farm') {
  $farm_money = rand(10,20);
  $_SESSION['gold'] += $farm_money;
  $time_farm = date("F j, Y, g:i a");
  $_SESSION['history'] .= "<p> You entered a farm and earned " . $farm_money . " golds. (". $time_farm . ").<br/>";
  // $_SESSION['history']['building'][] = 'farm';
  // $_SESSION['history']['time'][] = date('h:i:sa');
}

if($_POST['building'] == 'house') {
  $house_money = rand(2,5);
  $_SESSION['gold'] += $house_money;
  $time_house = date("F j, Y, g:i a");
  $_SESSION['history'] .= "<p> You entered a house and earned " . $house_money . " golds. (". $time_house . ").<br/>";
  // $_SESSION['history']['building'][] = 'house';
  // $_SESSION['history']['time'][] = date('h:i:sa');
}

if($_POST['building'] == 'casino') {

    $time_casino = date("F j, Y, g:i a");
    $chance = rand(0,1);
    $_SESSION['chance'] = $chance;

    if($chance == 0) {
    $casino_money = rand(0,50);
    $_SESSION['gold'] -= $casino_money;
    $_SESSION['history'] .= "<p> You entered a casino and lost " . $casino_money . " golds. (". $time_casino . ").<br/>";
    // $_SESSION['history']['building'][] = 'casino';
    // $_SESSION['history']['time'][] = date('h:i:sa');
  } else if ($chance == 1) {
    $casino_money = rand(0,50);
    $_SESSION['gold'] += $casino_money;
    $_SESSION['history'] .= "<p> You entered a casino and earned " . $casino_money . " golds. (". $time_casino . ").<br/>";
    // $_SESSION['history']['building'][] = 'casino';
    // $_SESSION['history']['time'][] = date('h:i:sa');
  }

}

header('Location: index.php');

?>
