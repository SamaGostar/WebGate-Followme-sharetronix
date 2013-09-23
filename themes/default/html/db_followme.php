<style>
	#fkffkkfodo9874 { width: 76%; height: 30px; font: 13px tahoma; -webkit-border-radius:5px;	-moz-border-radius:5px;	border-radius:5px;	border:1px solid #33a8e7; margin:5px; padding: 5px;}
	#fkkowreh76{

	vertical-align:middle;
width:74%;
	height:25px;
margin:5px;

	}
#db_myfllow_arash345{
height:73px;
position:relative;
background: url('<?= $C->SITE_URL.'themes/'.$C->THEME ?>/imgs/fmyp.png') no-repeat center left ;
}
	
	</style>
<?
$D->all_add_fllow = array('1','3','6','12');
$it = 'FLLOW_M'

?>
	<div class="greygrad" style="margin-top:5px;">
								<div class="greygrad2">
									<div class="greygrad3" style="padding-top:0px;">
<div id="db_myfllow_arash345">
<form action="<?=$C->SITE_URL?>payfllow/tab:sabad" method="POST" target="_blank">

<select name="fp_select" id="fkffkkfodo9874"	>
<? foreach($D->all_add_fllow as $a){ $b = $it.$a ?>

<? if($C->$b >0 ){  ?>

<option value="<?=$a?>" ><?=$a?> ماهه : <?=$C->$b?> تومان </option>

<?}}?>	
</select>
<input type="submit" name="payfs" id="fkkowreh76" value="خرید" /> 
<center>
<a title="با خرید بسته های زیر آواتار شما در بخش کاربران مهم برای دنبال کردن یا دوستی افزونه میشود"href="javascript:;" style="font-size:18px;color:red;position:absolute;top:2px;left:2px;vertical-align:middle;cursor:help;font-weight:bold;text-align:right;">?</a>
</center>
</form>

</div>		

</div>	</div>	</div>	