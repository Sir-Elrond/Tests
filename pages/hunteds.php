<?php
////////////// CONFIG START /////////////////////////
$customCurrency = ''; // If you are using a custom currency add the name here
$imgPath = 'http://outfit-images.ots.me/animatedOutfits1090/animoutfit.php'; // Path to your images (default is Gesior 10.90 animated outfit images)
////////////// CONFIG END /////////////////////////
 
$main_content .= '
    <TABLE BORDER=0 CELLPADDING=4 CELLSPACING=1 WIDTH=100%>
        <TR>
            <TD style="text-align:center;"><H2>Bounty Hunters</H2></TD>
        </TR>
        <TR BGCOLOR="'.$config['site']['vdarkborder'].'">
            <TD><CENTER><FONT COLOR=WHITE SIZE=2><b>How to use...</b></FONT></CENTER></TD>
        </TR>';
        if ($customCurrency != '') {
        $main_content .= '
        <TR BGCOLOR="'.$config['site']['darkborder'].'">
            <TD style="text-align:center;"><b>!hunt playerName, points/gold/'.$customCurrency.', amount</b></TD>
        </TR>';
        } else {
        $main_content .= '
        <TR BGCOLOR="'.$config['site']['darkborder'].'">
            <td style="text-align:center;"><b>!hunt valor,nick</b>
        <br><font color="red">
Remember to write exactly like that <b>nick,valor</b> without spaces.</font>
            <br><i>Example: !hunt Player_name,1000000
            <br> You will pay 1KK(1,000,000 gold coins) for the player who kills the Player_name.</i>
<br><b>1kk = 1,000,000 gold</b>
<br><b><font color="green">Gold is added to your bank account automatically when you kill the Hunted player...</font></b></td>';
        }
$main_content .= '
    </TABLE><br><br><table>
';
 
$main_content .= '
        <TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%>
            <TR BGCOLOR="#505050">
                <TD CLASS=white width=28%>
                    <center><B>Hunted by</B></center>
                </TD>
                <TD CLASS=white width=14%>
                    <center><B>Reward</B></center>
                </TD>
                <TD CLASS=white width=28%>
                    <center><B>Player hunted</B></center>
                </TD>
        <TD CLASS=white><b>Outfit</b></TD>
                <TD CLASS=white width=28%>
                    <center><B>Killed by</B></center>
                </TD>
            </TR>';
foreach($SQL->query('SELECT A.* , B.name AS hunted_by, C.name AS player_hunted, D.name AS killed_by
                        FROM bounty_hunter_system AS A
                        LEFT JOIN players AS B ON A.hunter_id = B.id
                        LEFT JOIN players AS C ON A.target_id = C.id
                        LEFT JOIN players AS D ON A.killer_id = D.id
                        ORDER BY A.killed,A.prize DESC') as $bounty) {
        if($num%2 == 0){$color=$config['site']['darkborder'];}else{$color=$config['site']['lightborder'];}
        if ($bounty['killed_by']){
                $killed_by = '<a href="?subtopic=characters&name='.$bounty['killed_by'].'">'.$bounty['killed_by'].'</a>';
        } else {
                $killed_by = 'still alive';
        }
    $skill = $SQL->query('SELECT * FROM '.$SQL->tableName('players').' WHERE '.$SQL->fieldName('id').' = '.$bounty['target_id'].'')->fetch();
        $main_content .= '
                <TR BGCOLOR="'.$color.'">
                    <TD><center><b><a href="?subtopic=characters&name='.$bounty['hunted_by'].'">'.$bounty['hunted_by'].'</a></b></center></TD>
                    <TD><center><b>'.$bounty[prize].' '.$bounty[currencyType].'</b></center></TD>
                    <TD><center><b><a href="?subtopic=characters&name='.$bounty['player_hunted'].'">'.$bounty['player_hunted'].'</a></b></center></TD>
           <TD><div style="position: relative; width: 32px; height: 32px;"><div style="background-image: url(\''.$imgPath.'?id='.$skill['looktype'].'&addons='.$skill['lookaddons'].'&head='.$skill['lookhead'].'&body='.$skill['lookbody'].'&legs='.$skill['looklegs'].'&feet='.$skill['lookfeet'].'\'); position: absolute; width: 64px; height: 80px; background-position: bottom right; background-repeat: no-repeat; right: 0px; bottom: 0px;"></div></div></TD>
                    <TD><center><b>'.$killed_by.'</b></center></TD>
                </TR>';
        $num++;
}
if($num == 0){
        $main_content.='<TR BGCOLOR="'.$color.'"><TD colspan=4><center>Currently there are not any bounty hunter offer.</center></TD></TR>';
}
    $main_content .='</TABLE></table>';
?>