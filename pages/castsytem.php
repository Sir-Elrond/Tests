<?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
if(!defined('INITIALIZED'))
	exit;
$getCasts = $SQL->query("SELECT * FROM `live_casts` ORDER BY `spectators` DESC")->fetchAll();
$main_content .= '
	<div class="TableContainer">
		<div class="CaptionContainer">
			<div class="CaptionInnerContainer">
				<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
				<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
				<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span>
				<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
				<div class="Text">Information</div>
				<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
				<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span>
				<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
				<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
			</div>
		</div>
		<table class="Table3" cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<td>
						<div class="InnerTableContainer" >
							<table style="width:100%;" >
								<tr>
									<td>
										<div class="TableShadowContainerRightTop" >
											<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
										</div>
										<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
											<div class="TableContentContainer" >
												<table class="TableContent" width="100%">
													<tr bgcolor="'.$config['site']['darkborder'].'">
														<td class="LabelV" >Server Status:</td><td><font color="green"><b>Online</b></font></td>
													</tr>
													<tr bgcolor="'.$config['site']['lightborder'].'">
														<td class="LabelV" >Players in cast:</td>
														<td style="width:90%;" >'.count($getCasts).'</td>
													</tr>
												</table>
											</div>
										</div>
										<div class="TableShadowContainer" >
											<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
												<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
												<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
											</div>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<p></p>
	<p></p>
	<p></p>';

$main_content .= '
	<div class="TableContainer">
		<div class="CaptionContainer">
			<div class="CaptionInnerContainer">
				<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
				<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
				<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span>
				<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
				<div class="Text">Players In Cast</div>
				<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/global/content/box-frame-vertical.gif);"></span>
				<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/global/content/table-headline-border.gif);"></span>
				<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
				<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/global/content/box-frame-edge.gif);"></span>
			</div>
		</div>
		<table class="Table3" cellpadding="0" cellspacing="0">
			<tbody>
				<tr>
					<td>
						<div class="InnerTableContainer" >
							<table style="width:100%;" >
								<tr>
									<td>
										<div class="TableShadowContainerRightTop" >
											<div class="TableShadowRightTop" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rt.gif);" ></div>
										</div>
										<div class="TableContentAndRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-rm.gif);" >
											<div class="TableContentContainer" >
												<table class="TableContent" width="100%">
													<tr bgcolor="'.$config['site']['darkborder'].'">
														<td class="LabelV"  width="4%">Outfit</td>
														<td class="LabelV" width="90%">Name</td>
														<td class="LabelV" width="3%" >Spectators</td>
														<td class="LabelV" width="10%"></td>
													</tr>';
											$cast_number = 0;
										if(count($getCasts) > 0)
											foreach($getCasts as $cast) {

												$player = new Player();
												$player->loadById($cast['player_id']);

												$bgcolor = (($cast_number++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
												$main_content .= '
													<tr bgcolor="'.$bgcolor.'">
														<td width="32px" style="position:relative;"><span style="display:block; position:absolute; top:-30px; left:-20px;"><img src="http://outfit-images.ots.me/animatedOutfits1099/animoutfit.php?id='.$player->getLookType().'&addons='.$player->getLookAddons().'&head='.$player->getLookHead().'&body='.$player->getLookBody().'&legs='.$player->getLookLegs().'&feet='.$player->getLookFeet().'&=500&direction=3"/></span></td>
														<td><a href="?subtopic=characters&name='.urlencode($player->getName()).'">'.htmlspecialchars($player->getName()).'</a><br><small>(' . htmlspecialchars($vocation_name[$player->getVocation()]) . ' - Level '.$player->getLevel().')</small></td>
														<td width="32px">'.$cast['spectators'].'</td>
														<td width="32px" align="center">'.(($cast['password'] == 1) ? '<img src="images/lockcast.png" width="32px" alt="Cast Locked">' : '').'</td>
													</tr>';
											}
										else {
												$main_content .= '
													<tr>
														<td colspan="6" bgcolor="'.$config['site']['lightborder'].'">There is no Active Casts.</td>
													</tr>';
										}
											$main_content .= '
												</table>
											</div>
										</div>
										<div class="TableShadowContainer" >
											<div class="TableBottomShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bm.gif);" >
												<div class="TableBottomLeftShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-bl.gif);" ></div>
												<div class="TableBottomRightShadow" style="background-image:url('.$layout_name.'/images/global/content/table-shadow-br.gif);" ></div>
											</div>
												</div>
											</td>
										</tr>
									</tbody></table>
								</div>
							</td></tr></tbody></table>
						</div><br><center><center>
						        <div class="TableContainer">
					            <div class="CaptionContainer">
							    <div class="CaptionInnerContainer">
								<span class="CaptionEdgeLeftTop" style="background-image:url(././layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
								<span class="CaptionEdgeRightTop" style="background-image:url(././layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
								<span class="CaptionBorderTop" style="background-image:url(././layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
								<span class="CaptionVerticalLeft" style="background-image:url(././layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
								<div class="Text">Cast Commands</div>
								<span class="CaptionVerticalRight" style="background-image:url(././layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
								<span class="CaptionBorderBottom" style="background-image:url(././layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
								<span class="CaptionEdgeLeftBottom" style="background-image:url(././layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
								<span class="CaptionEdgeRightBottom" style="background-image:url(././layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
							</div>
						</div><table class="Table4" cellpadding="0" cellspacing="0">

						<tbody><tr>
							<td>
								<div class="InnerTableContainer">
									<table style="width:100%;">
										<tbody><tr>
											<td>
												<div class="TableShadowContainerRightTop">
													<div class="TableShadowRightTop" style="background-image:url(././layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div>
												</div>
												<div class="TableContentAndRightShadow" style="background-image:url(././layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
													<div class="TableContentContainer">
														<table border="1" cellpadding="4" cellspacing="1" class="TableContent" width="100%" style="border:1px solid #faf0d7;">
															<tbody>
				                                            <tr bgcolor="#D4C0A1">
				                                            <td><font><b>Commands</b></font></td>
				                                            <td><font><b>Description of command</b></font></td>
			                                                </tr>
			                                                <tr bgcolor="#F1E0C6">
			                                             	<td>!cast on</td><td>Create your own cast.</td>
			                                                </tr>
			                                                <tr bgcolor="#D4C0A1">
				                                            <td>!stopcast</td><td>Close your own cast.</td>
			                                                </tr>

			                                                </tbody></table>
													</div>
												</div>
												<div class="TableShadowContainer">
													<div class="TableBottomShadow" style="background-image:url(././layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
														<div class="TableBottomLeftShadow" style="background-image:url(././layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
														<div class="TableBottomRightShadow" style="background-image:url(././layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
													<tr>
												</table>
											</div>
										</div>
									</td>
								</tr>
							</table>


						</div>';
