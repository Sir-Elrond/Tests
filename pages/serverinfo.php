<?php
					$housesFree = $SQL->query('SELECT COUNT(*) FROM houses WHERE owner = 0');
					foreach ($housesFree as $numeroHouses){
						$houses = $numeroHouses['COUNT(*)'];
					}
					$housesBuyed = $SQL->query('SELECT COUNT(*) FROM houses WHERE owner > 0');
					foreach ($housesBuyed as $numeroHousesBuyed){
						$housesB = $numeroHousesBuyed['COUNT(*)'];
					}

					$numBans = $SQL->query('SELECT COUNT(*) FROM account_bans');
					foreach ($numBans as $numBansRep){
						$numBanss = $numBansRep['COUNT(*)'];
					}

					$accounts = $SQL->query('SELECT COUNT(*) FROM accounts');
					foreach ($accounts as $accountsss){
						$accountss = $accountsss['COUNT(*)'];
					}

					$players = $SQL->query('SELECT COUNT(*) FROM players');
					foreach ($players as $playersss){
						$playerss = $playersss['COUNT(*)'];
					}

					$guilds = $SQL->query('SELECT COUNT(*) FROM guilds');
					foreach ($guilds as $guildsss){
						$guildss = $guildsss['COUNT(*)'];
					}

					$highscore = $SQL->query('select * from players where level = (select max(level) from players where group_id < 3)');
					foreach ($highscore as $highscoresss){
						$name = $highscoresss['name'];
						$level = $highscoresss['level'];
					}

					$dates = $SQL->query('select * from players where create_date = (select max(create_date) from players)');
					foreach ($dates as $datess){
						$names = $datess['name'];
						$levels = $datess['level'];
					}
if(!defined('INITIALIZED'))
	exit;
if($action == "") {
		$main_content .= '
			<style>
				ul.countdown {
				  list-style: none;
				  padding: 0;
				  display: block;
				  text-align: center;
				  margin-top:-15px;
				}

				ul.countdown li { display: inline-block; }

				ul.countdown li span {
				  font-size: 45px;
				  font-weight: 300;
				  line-height: 60px;
				  padding: 0 20px;
				  border-top: 1px solid #C0392B;
				  border-bottom: 1px solid #C0392B;
				  margin-left: -4px;
				}

				ul.countdown li p {
				  color: #a7abb1;
				  font-size: 14px;
				  text-transform: uppercase;
				  margin-top:-3px;
				}

				.hours {
				  background-color: #C0392B;
				  padding: 0 10px;
				  color: #fff;
				}

				.last { border-right: 1px solid #C0392B; }
			</style>';
			$main_content .= '<script>';
			$todayDate = mktime(06, 00, 0, date('n'), date('j'));
			if(time() < $todayDate) // it's before 2:45
			{
				$main_content .= 'var secondsToServerSave = ' . ($todayDate - time()) . '';
			}
			else // it's after 2:45
			{
				$main_content .= 'var secondsToServerSave = ' . (mktime(06, 00, 0, date('n'), date('j') + 1) - time()) . '';
			}
			$main_content .= '</script>';
		$main_content .= '
			<script>
			function updateServerSaveTimer()
{
	secondsToServerSave -= 1;
	if(secondsToServerSave < 0) {
		secondsToServerSave = 96400;
	}
	var horas = Math.floor(secondsToServerSave / 3600);
	var str;
	var minutos;
	var segundos;
	minutos = Math.floor((secondsToServerSave % 3600) / 60);
	segundos = (secondsToServerSave % 60);
	$(\'.hours\').html(horas);
	$(\'.minutes\').html(minutos);
	$(\'.seconds\').html(segundos);
}
$(function() {
	setInterval(\'updateServerSaveTimer()\', 1000);
});
			</script>';
		$main_content .= '
			<h2><center>Time for server save</center></h2>
			<ul class="countdown">
				<li>
					<span class="hours">00</span>
					<p class="hours_ref">Hours</p>
				</li>
				<li>
					<span class="minutes">00</span>
					<p class="minutes_ref">Minutes</p>
				</li>
				<li>
					<span class="seconds last">00</span>
					<p class="seconds_ref">Seconds</p>
				</li>
			</ul>
<div class="TableContainer">
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
			<div class="Text">Server Information</div>
			<span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiacom/images/global/global/content/box-frame-vertical.gif);"></span>
			<span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
			<span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
				</div>
					</div>
						<table class="Table5" cellpadding="0" cellspacing="0">
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
		<table border="1" cellpadding="4" cellspacing="1" class="TableContent" width="100%" style="border:1px solid #faf0d7;">
			<tbody>
			<tr bgcolor="#D4C0A1">
			<td width="30%" class="LabelV">World type:</td>
		    <td>RPG/PVP</td>
		</tr>
		<tr bgcolor="#F1E0C6">
		<td width="30%" class="LabelV">Client version:</td>
		    <td>10.100 - 11.52</td>
		</tr>
		<tr bgcolor="#D4C0A1">
			<td width="30%" class="LabelV">Server motd:</td>
		    <td>'.$config['server']['motd'].'</td>
		</tr>
		<tr bgcolor="#F1E0C6">
		<td width="30%" class="LabelV">Last joined:</td>
		    <td><a href="?subtopic=characters&amp;name='.$names.'">'.$names.'</a>  (player number '.$playerss.')</td>
		</tr>
		<tr bgcolor="#D4C0A1">
		<td width="30%" class="LabelV">Best level:</td>
		    <td><a href="index.php?subtopic=characters&amp;name='.$name.'">'.$name.'</a> (Level: '.$level.')</td>
		</tr>
			<tr bgcolor="#F1E0C6">
		<td width="30%" class="LabelV">Free houses:</td><td>'.$houses.'</td>
		</tr>
			<tr bgcolor="#D4C0A1">
		<td width="30%" class="LabelV">Rented houses:</td><td>'.$housesB.'</td>
			</tr>
			<tr bgcolor="#F1E0C6">
		<td width="30%" class="LabelV">Banned accounts:</td><td>'.$numBanss.'</td>
		</tr>
		<tr bgcolor="#D4C0A1">
		<td width="30%" class="LabelV">Accounts in database:</td><td>'.$accountss.'</td>
			</tr>
			<tr bgcolor="#F1E0C6">
		<td width="30%" class="LabelV">Players in database:</td><td>'.$playerss.'</td>
		</tr>
		<tr bgcolor="#D4C0A1">
		<td width="30%" class="LabelV">Guild in database:</td><td>'.$guildss.'</td>
			</tr>

		</tbody></table>
										</div>
									</div>
										<div class="TableShadowContainer">
											<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
											<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
											<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
										</div>
									</div></td>
								</tr>
							</tbody>
						</table>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div>
		<br>
		<div class="TableContainer">
	<div class="TopButtonContainer">
		<div class="TopButton">
		<a href="#top">
		<img style="border:0px;" src="./layouts/tibiacom/images/global/content/back-to-top.gif"></a></div></div>
					<div class="CaptionContainer">
							<div class="CaptionInnerContainer">
								<span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
								<span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
								<span class="CaptionBorderTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
								<span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
								<div class="Text">Rates And Others</div>
								<span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
								<span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
								<span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
								<span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
							</div>
						</div><table class="Table4" cellpadding="0" cellspacing="0">

						<tbody><tr>
							<td>

									<div class="InnerTableContainer">
		<table style="width:100%;"><tbody><tr>
		<td width="20%">
		<div class="TableShadowContainerRightTop">
		<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div></div>
		<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
		<div class="TableContentContainer">    <table border="1" cellpadding="4" cellspacing="1" class="TableContent" width="100%" style="border:1px solid #faf0d7;"><tbody>
<tr bgcolor="#F1E0C6">
				<td>1 - 80</td><td>500x</td>
			</tr>
<tr bgcolor="#D4C0A1">
				<td>81 - 200</td><td>400x</td>
			</tr>
<tr bgcolor="#F1E0C6">
				<td>201 - 300</td><td>300x</td>
			</tr>
<tr bgcolor="#D4C0A1">
				<td>301 - 400</td><td>250x</td>
			</tr>
<tr bgcolor="#F1E0C6">
				<td>401 - 500</td><td>150x</td>
			</tr>
<tr bgcolor="#D4C0A1">
				<td>501 - 600</td><td>50x</td>
			</tr>
<tr bgcolor="#F1E0C6">
				<td>601 - 750</td><td>20x</td>
			</tr>
<tr bgcolor="#D4C0A1">
				<td>751 - 850</td><td>10x</td>
			</tr>
<tr bgcolor="#F1E0C6">
				<td>851 - 900</td><td>5x</td>
			</tr>
<tr bgcolor="#D4C0A1">
				<td>901 - 950</td><td>3x</td>
			</tr>
<tr bgcolor="#F1E0C6">
				<td>951 - 1000</td><td>2x</td>
			</tr>
<tr bgcolor="#F1E0C6">
				<td>1001+</td><td>1x</td>
			</tr>
</tbody></table>  </div></div><div class="TableShadowContainer">
		<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
		<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
		<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
		</div></div></td>
		<td width="30%">
		<br>
		<br>
		<center><img width="400" weight="293" src="images/thornia/am.gif"></center>
		</td>



		</tr>
<tr>
		<td width="20%">
		<div class="TableShadowContainerRightTop">
		<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div></div>
		<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
		<div class="TableContentContainer">    <table border="1" cellpadding="4" cellspacing="1" class="TableContent" width="100%" style="border:1px solid #faf0d7;"><tbody>
<tr bgcolor="#D4C0A1">
				<td>Skill</td><td>60x</td>
			</tr>
<tr bgcolor="#F1E0C6">
				<td>Magic</td><td>30x</td>
			</tr>
<tr bgcolor="#D4C0A1">
				<td>Loot</td><td>6x</td>
			</tr>
</tbody></table>  </div></div><div class="TableShadowContainer">
		<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
		<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
		<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
		</div></div></td>





		</tr> 		</tbody></table>        </div>

							</td></tr></tbody></table>
						</div><br>

	<div class="TableContainer">
	<div class="TopButtonContainer">
		<div class="TopButton">
		<a href="#top">
		<img style="border:0px;" src="./layouts/tibiacom/images/global/content/back-to-top.gif"></a></div></div>
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
			<div class="Text">Frags</div>
			<span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
			<span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
			<span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
				</div>
					</div>
						<table class="Table5" cellpadding="0" cellspacing="0">
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
		<table border="1" cellpadding="4" cellspacing="1" class="TableContent" width="100%" style="border:1px solid #faf0d7;">
			<tbody>
		<tr style="background-color:#D4C0A1;" >
														<td width="30%" class="LabelV">Day kills to RedSkull:</td>
														<td>'.$config['server']['dayKillsToRedSkull'].'</td>
													</tr>
													<tr style="background-color:#F1E0C6;" >
														<td class="LabelV">Week kills to BlackSkull:</td>
														<td>'.$config['server']['weekKillsToRedSkull'].'</td>
													</tr>
													<tr style="background-color:#D4C0A1;" >
														<td class="LabelV">Time to decrease frags:</td>
														<td>4 hours</td>
													</tr>
													<tr style="background-color:#F1E0C6;" >
														<td class="LabelV">White skull time:</td>
														<td>2 minutes</td>
													</tr>
													<tr style="background-color:#D4C0A1;" >
														<td class="LabelV">Red skull time:</td>
														<td>frags * time to decrease frags (<b>Ex:</b> 15 frags * 4 hours = 32 hours)</td>
		</tr>
	</tbody></table>
										</div>
									</div>
										<div class="TableShadowContainer">
											<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
											<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
											<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
										</div>
									</div></td>
								</tr>
							</tbody>
						</table>
					</div>
				</td>
			</tr>
		</tbody>
	</table>
</div><br><div class="TableContainer">
	<div class="TopButtonContainer">
		<div class="TopButton">
		<a href="#top">
		<img style="border:0px;" src="./layouts/tibiacom/images/global/content/back-to-top.gif"></a></div></div>
	<div class="CaptionContainer">
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
			<div class="Text">Another Information</div>
			<span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
			<span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
			<span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
				</div>
					</div>
						<table class="Table5" cellpadding="0" cellspacing="0">
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
		<table border="1" cellpadding="4" cellspacing="1" class="TableContent" width="100%" style="border:1px solid #faf0d7;">
			<tbody>
		<tr bgcolor="#D4C0A1">
			<td class="LabelV">Premium:</td>
		    <td>Free</td>
		</tr>
		<tr bgcolor="#F1E0C6">
			<td class="LabelV">Bank system:</td>
		    <td>Enabled</td>
		</tr>
		<tr bgcolor="#D4C0A1">
			<td class="LabelV">Guild halls:</td>
	        <td>Disabled</td>
		</tr>
		<tr bgcolor="#F1E0C6">
			<td class="LabelV">Kick time:</td>
		    <td>15 minutes</td>
		</tr>
		<tr bgcolor="#D4C0A1">
			<td class="LabelV">Pz lock:</td>
			<td>60 seconds</td>
		</tr>
		<tr bgcolor="#F1E0C6">
			<td class="LabelV">Free bless level until lvl:</td>
			<td>120</td>
		</tr>
		<tr bgcolor="#D4C0A1">
			<td class="LabelV">Buy house:</td>
			<td>!buyhouse</td>
		</tr>
		<tr bgcolor="#F1E0C6">
			<td class="LabelV">Level to buy house:</td>
			<td>100</td>
		</tr>
		<tr bgcolor="#D4C0A1">
		<td class="LabelV">Level to create guild:</td>
			<td>8</td>
		</tr>
		<tr style="background-color:#F1E0C6;" >
		<td width="30%" class="LabelV">House rent:</td>
		    <td>Weekly (Check <a href="?subtopic=houses" target="_BLANK">Houses</a> page for more details).</td>
		</tr>
		<tr bgcolor="#D4C0A1">
		<td class="LabelV">Up Level Reward:</td>
	    <td><li>Level 30 - 3 Crystal Coin<br/>
	    <li>Level 50 - Widow Queen Mount<br/>
	    <li>Level 60 - 5 Crystal Coins<br/>
	    <li>Level 100 - Addon Citizen Full<br/>
		<li>Level 120 - 10 Cyrstal Coins</i><br/>
		<li>Level 350 - Void boots<br/>
		<li>Level 400 - Weapon according to the vocation<br/>
		<li>Level 450 - Addon Doll<br/>
		<li>Level 500 - Mount Doll<br/>
		<li>Level 600 - 100 Crystal Coins<br/>
		<li>Level 650 - Exp Boost for 6 hours<br/>
		<li>Level 780 - Thornia Boots<br/>
		<li>Level 900 - 300 Crystal Coins and unlock all retro outfits<br/>
		</tr>
		<tr bgcolor="#F1E0C6">
		<td class="LabelV">Server Save:</td>
			<td>23:00 p.m GMT-5</td>
		</tr>
		</tbody></table>
										</div>
									</div>
										<div class="TableShadowContainer">
											<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
											<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
											<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
										</div></div></td></tr><tr>
												</tr></tbody></table>
											</div>

									</td>
								</tr>
							</tbody></table>


						</div>

						<br>

	<div class="TableContainer">
		<div class="CaptionContainer">
			<div class="CaptionInnerContainer">
				<span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
				<span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
				<span class="CaptionBorderTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
				<span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
				<div class="Text">Commands</div>
				<span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-vertical.gif);"></span>
				<span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/global/content/table-headline-border.gif);"></span>
				<span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
				<span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiacom/images/global/content/box-frame-edge.gif);"></span>
					</div>
						</div>
							<table class="Table5" cellpadding="0" cellspacing="0">
								<tbody>
									<tr>
										<td>
										<div class="InnerTableContainer">
											<table style="width:100%;">
												<tbody>




												<tr>
													<td width="25%">
														<div class="TableShadowContainerRightTop">
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
															<div class="TableContentContainer">
																<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
																	<tbody><tr>
																		<td><center>!online</center></td>
																	</tr>

																</tbody></table>
															</div>
														</div>
														<div class="TableShadowContainer">
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
															</div>
														</div>
													</td>

													<td width="25%">
														<div class="TableShadowContainerRightTop">
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
															<div class="TableContentContainer">
																<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
																	<tbody><tr>
																		<td><center>!uptime</center></td>
																	</tr>

																</tbody></table>
															</div>
														</div>
														<div class="TableShadowContainer">
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
															</div>
														</div>
													</td>
													<td width="25%">
														<div class="TableShadowContainerRightTop">
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
															<div class="TableContentContainer">
																<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
																	<tbody><tr>
																		<td><center>!serverinfo</center></td>
																	</tr>

																</tbody></table>
															</div>
														</div>
														<div class="TableShadowContainer">
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
															</div>
														</div>
													</td>
													<td width="25%">
														<div class="TableShadowContainerRightTop">
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
															<div class="TableContentContainer">
																<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
																	<tbody><tr>
																		<td><center>!tutor</center></td>
																	</tr>

																</tbody></table>
															</div>
														</div>
														<div class="TableShadowContainer">
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
															</div>
														</div>
													</td>
												</tr>


												<tr>
													<td width="25%">
														<div class="TableShadowContainerRightTop">
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
															<div class="TableContentContainer">
																<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
																	<tbody><tr>
																		<td><center>!bless</center></td>
																	</tr>

																</tbody></table>
															</div>
														</div>
														<div class="TableShadowContainer">
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
															</div>
														</div>
													</td>

													<td width="25%">
														<div class="TableShadowContainerRightTop">
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
															<div class="TableContentContainer">
																<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
																	<tbody><tr>
																		<td><center>!aol</center></td>
																	</tr>

																</tbody></table>
															</div>
														</div>
														<div class="TableShadowContainer">
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
															</div>
														</div>
													</td>
													<td width="25%">
														<div class="TableShadowContainerRightTop">
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
															<div class="TableContentContainer">
																<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
																	<tbody><tr>
																		<td><center>!buyhouse</center></td>
																	</tr>

																</tbody></table>
															</div>
														</div>
														<div class="TableShadowContainer">
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
															</div>
														</div>
													</td>
													<td width="25%">
														<div class="TableShadowContainerRightTop">
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
															<div class="TableContentContainer">
																<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
																	<tbody><tr>
																		<td><center>!leavehouse</center></td>
																	</tr>

																</tbody></table>
															</div>
														</div>
														<div class="TableShadowContainer">
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
															</div>
														</div>
													</td>

												</tr>

												<tr>
													<td width="25%">
														<div class="TableShadowContainerRightTop">
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
															<div class="TableContentContainer">
																<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
																	<tbody><tr>
																		<td><center>!sellhouse</center></td>
																	</tr>

																</tbody></table>
															</div>
														</div>
														<div class="TableShadowContainer">
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
															</div>
														</div>
													</td>

													<td width="25%">
														<div class="TableShadowContainerRightTop">
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
															<div class="TableContentContainer">
																<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
																	<tbody><tr>
																		<td><center>!buybackpack</center></td>
																	</tr>

																	</tbody></table>
																</div>
															</div>
															<div class="TableShadowContainer">
																<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
																	<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
																	<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
																</div>
															</div>
														</td>
													<td width="25%">
														<div class="TableShadowContainerRightTop">
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
															<div class="TableContentContainer">
																<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
																	<tbody><tr>
																		<td><center>!food</center></td>
																	</tr>

																</tbody></table>
															</div>
														</div>
														<div class="TableShadowContainer">
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
															</div>
														</div>
													</td>
													<td width="25%">
														<div class="TableShadowContainerRightTop">
															<div class="TableShadowRightTop" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rt.gif);"></div>
														</div>
														<div class="TableContentAndRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-rm.gif);">
															<div class="TableContentContainer">
																<table class="TableContent" width="100%" style="border:1px solid #faf0d7;">
																	<tbody><tr>
																		<td><center>!outfit</center></td>
																	</tr>

																</tbody></table>
															</div>
														</div>
														<div class="TableShadowContainer">
															<div class="TableBottomShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bm.gif);">
																<div class="TableBottomLeftShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-bl.gif);"></div>
																<div class="TableBottomRightShadow" style="background-image:url(./layouts/tibiacom/images/global/content/table-shadow-br.gif);"></div>
															</div>
														<tr>
												</table>
											</div>
										</div>
									</td>
								</tr>
							</table>


						</div>';
}
