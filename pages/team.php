<?php
if(!defined('INITIALIZED'))
	exit;
$list = $SQL->query('SELECT ' . $SQL->fieldName('name') . ', ' . $SQL->fieldName('id') . ', ' . $SQL->fieldName('group_id') . ' FROM ' . $SQL->tableName('players') . ' WHERE ' . $SQL->fieldName('group_id') . ' IN (' . implode(',', $config['site']['groups_support']) . ') ORDER BY ' . $SQL->fieldName('group_id') . ' DESC');
$main_content .= '<div class="TableContainer">
					<div class="CaptionContainer">
    <div class="CaptionInnerContainer">
        <span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
        <span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
        <span class="CaptionBorderTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
        <span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
        <span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
        <span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
        <div class="Text" style="min-height: 17px"><div style="float: left">Contact Information</div> </div>
        <span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
        <span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
        <span class="CaptionEdgeLeftBottom"></span>
        <span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
    </div>
</div>

<table class="Table3" cellpadding="0" cellspacing="0" align="">
    <tbody>
        <tr>
            <td>
                <div class="InnerTableContainer">
                    <table style="width:100%;">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="TableShadowContainerRightTop">
                                        <div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div>
                                    </div>
                                    <div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
                                        <div class="TableContentContainer">
                                            <table class="TableContent " width="100%">
                                                <tbody>
                                            <TR><TD style="width: 20%">Contact Email</TD><TD>'.htmlspecialchars($config['site']['mail_address']).'</A></TD></TR>
                                            <TR><TD style="width: 20%">Managing Director:</TD><TD>Victor Orozco</TD></TR>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="TableShadowContainer">
													<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);">
														<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);"></div>
														<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);"></div>
													</div>
												</div>
											</td>
										</tr>
									</tbody></table>
								</div>
							</td></tr></tbody></table>
						</div><br><div class="TableContainer">
					<div class="CaptionContainer">
    <div class="CaptionInnerContainer">
        <span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
        <span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
        <span class="CaptionBorderTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
        <span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
        <span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
        <span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
        <div class="Text" style="min-height: 17px"><div style="float: left">Disclaimer</div> </div>
        <span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
        <span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
        <span class="CaptionEdgeLeftBottom"></span>
        <span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
    </div>
</div>

<table class="Table3" cellpadding="0" cellspacing="0" align="">
    <tbody>
        <tr>
            <td>
                <div class="InnerTableContainer">
                    <table style="width:100%;">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="TableShadowContainerRightTop">
                                        <div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div>
                                    </div>
                                    <div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
                                        <div class="TableContentContainer">
                                            <table class="TableContent " width="100%">
                                                <tbody>
<tr><td style="text-align: -webkit-center">
Olympa World disclaims all warranties for the up-to-dateness, correctness,
completeness or quality of the information presented on this website.
Olympa World is not liable for any lost profits or special, incidental
or consequential damages arising out of the use or not-use of the presented
information. Olympa World reserves the right to supplement, change or
delete parts of the website or the whole website, or even to close the
service temporarily or finally.
</td></tr><tr><td style="text-align: -webkit-center">
The following of our websites contain links to other pages on the internet:
tibia.com, tibia.net, tibia.org as well as all connected
subdomains. We would like to expressly emphasise the fact that Olympa World
has no influence whatsoever on the design or the content of any of the
websites to which these links refer. For this reason Olympa World cannot
take responsibility for the up-to-dateness, correctness, completeness or
general quality of the information supplied by these websites. Also,
Olympa World expressly disassociates itself from any content presented on
said websites. This declaration applies to any link to external websites to
be found on one or more of Olympa´s websites, as well as to any kind of
content these external websites may contain.
</td></tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="TableShadowContainer">
													<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);">
														<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);"></div>
														<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);"></div>
													</div>
												</div>
											</td>
										</tr>
									</tbody></table>
								</div>
							</td></tr></tbody></table>
						</div><br><div class="TableContainer">
					<div class="CaptionContainer">
							<div class="CaptionInnerContainer">
								<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
								<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
								<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span>
								<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
								<div class="Text">Community Managers</div>
								<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
								<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span>
								<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
								<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
							</div>
						</div><table class="Table4" cellpadding="0" cellspacing="0">

						<tbody><tr>
							<td>
								<div class="InnerTableContainer">
									<table style="width:100%;">
										<tbody><tr>
											<td>
												<div class="TableShadowContainerRightTop">
													<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);"></div>
												</div>
												<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);">
													<div class="TableContentContainer">';
$bgcolor = (($i++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
$main_content .= '<table border="1" cellpadding="4" cellspacing="1" class="TableContent" width="100%" style="border:1px solid #faf0d7;
      <tbody>
      <tr bgcolor="'.$config['site']['darkborder'].'"><td width="100%"><b>Name</b></td><td><b>Group</b></td><td><b>Status</b></td><td><b>Action</b></td></tr>';
	  $list = $SQL->query('SELECT ' . $SQL->fieldName('name') . ', ' . $SQL->fieldName('id') . ', ' . $SQL->fieldName('group_id') . ' FROM ' . $SQL->tableName('players') . ' WHERE ' . $SQL->fieldName('group_id') . ' IN (' . implode(',', $config['site']['groups_support']) . ') ORDER BY ' . $SQL->fieldName('group_id') . ' DESC');
foreach($list as $i => $supporter)
{
	if(!Player::isPlayerOnline($supporter['id']))
		$player_list_status = '<font color="red">Offline</font>';
	else
		$player_list_status = '<font color="green">Online</font>';
	$bgcolor = (($i++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
	$main_content .= '<tr bgcolor="'.$bgcolor.'"><td>'.htmlspecialchars($supporter['name']).'</td><td><nobr>' . htmlspecialchars(Website::getGroupName($supporter['group_id'])) . '<nobr></td><td>'.$player_list_status.'</td><td><a href="?subtopic=characters&name='.urlencode($supporter['name']).'"><img src="'.$layout_name.'/images/global/buttons/sbutton_view.gif" alt="'.htmlspecialchars($supporter['name']).'"></a></td></tr>';
}
$main_content .= '</tbody></table>';
$main_content .= '</div>
												</div>
												<div class="TableShadowContainer">
													<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);">
														<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);"></div>
														<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);"></div>
													</div>
												</div>
											</td>
										</tr>
									</tbody></table>
								</div>
							</td></tr></tbody></table>
						</div>
                        <br>
                        <div class="TableContainer">
                    <div class="CaptionContainer">
                            <div class="CaptionInnerContainer">
                                <span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
                                <span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
                                <span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span>
                                <span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
                                <div class="Text">Gamemasters</div>
                                <span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
                                <span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span>
                                <span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
                                <span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
                            </div>
                        </div><table class="Table4" cellpadding="0" cellspacing="0">

                        <tbody><tr>
                            <td>
                                <div class="InnerTableContainer">
                                    <table style="width:100%;">
                                        <tbody><tr>
                                            <td>
                                                <div class="TableShadowContainerRightTop">
                                                    <div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);"></div>
                                                </div>
                                                <div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);">
                                                    <div class="TableContentContainer">';
$bgcolor = (($i++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
$main_content .= '<table border="1" cellpadding="4" cellspacing="1" class="TableContent" width="100%" style="border:1px solid #faf0d7;
      <tbody>
      <tr bgcolor="'.$config['site']['darkborder'].'"><td width="100%"><b>Name</b></td><td><b>Group</b></td><td><b>Status</b></td><td><b>Action</b></td></tr>';
      $list = $SQL->query('SELECT ' . $SQL->fieldName('name') . ', ' . $SQL->fieldName('id') . ', ' . $SQL->fieldName('group_id') . ' FROM ' . $SQL->tableName('players') . ' WHERE ' . $SQL->fieldName('group_id') . ' IN (' . implode(',', $config['site']['groups_gms']) . ') ORDER BY ' . $SQL->fieldName('group_id') . ' DESC');
foreach($list as $i => $supporter)
{
    if(!Player::isPlayerOnline($supporter['id']))
        $player_list_status = '<font color="red">Offline</font>';
    else
        $player_list_status = '<font color="green">Online</font>';
    $bgcolor = (($i++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
    $main_content .= '<tr bgcolor="'.$bgcolor.'"><td>'.htmlspecialchars($supporter['name']).'</td><td><nobr>' . htmlspecialchars(Website::getGroupName($supporter['group_id'])) . '<nobr></td><td>'.$player_list_status.'</td><td><a href="?subtopic=characters&name='.urlencode($supporter['name']).'"><img src="'.$layout_name.'/images/global/buttons/sbutton_view.gif" alt="'.htmlspecialchars($supporter['name']).'"></a></td></tr>';
}
$main_content .= '</tbody></table>';
$main_content .= '</div>
                                                </div>
                                                <div class="TableShadowContainer">
                                                    <div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);">
                                                        <div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);"></div>
                                                        <div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);"></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </div>
                            </td></tr></tbody></table>
                        </div>
                        <br>
                        <div class="TableContainer">
                    <div class="CaptionContainer">
                            <div class="CaptionInnerContainer">
                                <span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
                                <span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
                                <span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span>
                                <span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
                                <div class="Text">Tutors</div>
                                <span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
                                <span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span>
                                <span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
                                <span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
                            </div>
                        </div><table class="Table4" cellpadding="0" cellspacing="0">

                        <tbody><tr>
                            <td>
                                <div class="InnerTableContainer">
                                    <table style="width:100%;">
                                        <tbody><tr>
                                            <td>
                                                <div class="TableShadowContainerRightTop">
                                                    <div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);"></div>
                                                </div>
                                                <div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);">
                                                    <div class="TableContentContainer">';
$bgcolor = (($i++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
$main_content .= '<table border="1" cellpadding="4" cellspacing="1" class="TableContent" width="100%" style="border:1px solid #faf0d7;
      <tbody>
      <tr bgcolor="'.$config['site']['darkborder'].'"><td width="100%"><b>Name</b></td><td><b>Group</b></td><td><b>Status</b></td><td><b>Action</b></td></tr>';
      $list = $SQL->query('SELECT ' . $SQL->fieldName('name') . ', ' . $SQL->fieldName('id') . ', ' . $SQL->fieldName('group_id') . ' FROM ' . $SQL->tableName('players') . ' WHERE ' . $SQL->fieldName('group_id') . ' IN (' . implode(',', $config['site']['groups_tt']) . ') ORDER BY ' . $SQL->fieldName('group_id') . ' DESC');
foreach($list as $i => $supporter)
{
    if(!Player::isPlayerOnline($supporter['id']))
        $player_list_status = '<font color="red">Offline</font>';
    else
        $player_list_status = '<font color="green">Online</font>';
    $bgcolor = (($i++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
    $main_content .= '<tr bgcolor="'.$bgcolor.'"><td>'.htmlspecialchars($supporter['name']).'</td><td><nobr>' . htmlspecialchars(Website::getGroupName($supporter['group_id'])) . '<nobr></td><td>'.$player_list_status.'</td><td><a href="?subtopic=characters&name='.urlencode($supporter['name']).'"><img src="'.$layout_name.'/images/global/buttons/sbutton_view.gif" alt="'.htmlspecialchars($supporter['name']).'"></a></td></tr>';
}
$main_content .= '</tbody></table>';
$main_content .= '</div>
                                                </div>
                                                <div class="TableShadowContainer">
                                                    <div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);">
                                                        <div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);"></div>
                                                        <div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);"></div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                </div>
                            </td></tr></tbody></table>
                        </div>';
