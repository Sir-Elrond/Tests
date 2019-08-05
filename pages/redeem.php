<?php
if(!defined('INITIALIZED'))
    exit;
if($logged){
  if(isset($_POST['code'])) {
 
    $code =  $SQL->quote($_POST['code']);
    $query = $SQL->query('SELECT * FROM `__cornex_redeem` WHERE `code` = '.$code.' LIMIT 1;');
 
 
 
    // Key exist in database
    if ($query->rowCount() >= 1) {
      // $query = $query[0];
      $result = $query->fetchAll(PDO::FETCH_ASSOC)[0];
 
      if ($result['used_by'] > 0) {
        $error[] = 'Key has already been used';
      }
 
      if (!empty($error)) {
 
        foreach ($error as $err) {
          echo $err.'<br>';
        }
 
      }
 
 
      if (empty($error)) {
        $time = time();
        $code = $result['code'];
        $points = $result['points'];
        $querys = sprintf('UPDATE `__cornex_redeem` SET `time`='.time().', `used_by`='.$account_logged->getId().' WHERE `code`="'.$result['code'].'" ');
        $SQL->query($querys);
        $account_logged->setPremiumPoints($account_logged->getPremiumPoints() + $points);
        $account_logged->save();
 
        echo '<br><center>Amount of '.$points.' points has been added to your account!</center>';
      }
 
    } else {
      echo '<br><center>Key is not valid</center>';
    }
 
  }
$accid = $account_logged->getID();
$main_content .= '
<form action="" method="POST">
 <center>
   <b>Code</b>
   <br>
   <input type="text" name="code">
   <br>
   <br>
   <input type="submit" value="Redeem">
 </center>
</form>';
} else {
    $main_content .= '
<div class="ui warning message">
 <div class="header">
   You dont have permission to do that!
 </div>
</div>
   ';
}