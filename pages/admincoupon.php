<?php
if(!defined('INITIALIZED'))
    exit;
 
if($group_id_of_acc_logged >= $config['site']['access_admin_panel']){
    function serialKey()
    {
        $chars = array_merge(range(0, 9), range('A', 'Z'));
        $serial = '';
        $max = count($chars)-1;
        for($i=0;$i<20;$i++){
            $serial .= (!($i % 5) && $i ? '-' : '').$chars[rand(0, $max)];
        }
        return $serial;
    }
 
    if (isset($_POST['points'])) {
 
        $error = false;
        $points = $_POST['points'];
 
        if (empty($points)) {
            $error[] = "<font color='red'>Field cannot be empty</font>";
        }
 
        if (!is_numeric($points)) {
            $error[] = "<font color='red'>Must be a number value</font>";
        }
 
        if (!empty($error)) {
 
            foreach ($error as $err) {
                $main_content .=''.$err.'<br>';
            }
 
        }
 
 
        if (empty($error)) {
            // Success
            $key = serialKey();
            $SQL->query('INSERT INTO `__cornex_redeem` (`code`, `points`, `used_by`, `time`, `ip`) VALUES ('.$SQL->quote($key).','.$points.', 0, 0, 0)');
            echo '<p><b>Key generated</b><font color="red">: '.$key.'</font></p>';
        }
 
    }
 
$main_content .= '
<BR>
<FORM ACTION="" METHOD="POST">
<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
<TR>
<TD BGCOLOR="'.$config['site']['vdarkborder'].'" CLASS=white><B>Administrador Redeem System</B></TD>
</TR>
<TR>
<TD BGCOLOR="'.$config['site']['darkborder'].'">
<TABLE BORDER=0 CELLPADDING=1>
<TR>
<TD>Cantidad:</TD>
<TD><INPUT type="text" name="points" placeholder="Cantidad De Coins"></TD>
<TD><INPUT class="" TYPE="image" NAME="Submit" value="Crear Codigo" SRC="'.$layout_name.'/images/buttons/sbutton_submit.gif" BORDER=0 WIDTH=120 HEIGHT=18></TD>
</TR>
</TABLE>
</TD></TR></TABLE></FORM>';
} else {
    $main_content .= '
<div class="ui warning message">
 <div class="header">
   You dont have permission to do that!
 </div>
</div>
   ';
}