<?  if($users_af = $this->network->get_add_follows() ) {?>
<style>
a#duror859ertkdlflori58{
width:140px;
vertical-align:middle;
height:33px;
display: inline-block;
background : url('<?= $C->SITE_URL.'themes/'.$C->THEME ?>/imgs/fapz.png') no-repeat center left ;
}
a#duror859ertkdlflori58:hover{

background : url('<?= $C->SITE_URL.'themes/'.$C->THEME ?>/imgs/fapz2.png') no-repeat center left ;
width:145px;
}
a#ffjk8548uuej44e{
width:140px;
vertical-align:middle;
height:33px;
display: inline-block;
background : url('<?= $C->SITE_URL.'themes/'.$C->THEME ?>/imgs/fapzn.png') no-repeat center left ;
}
a#ffjk8548uuej44e:hover{
width:145px;
}
a#ddaddf6578970{
width:140px;
vertical-align:middle;
height:33px;
display: inline-block;

</style>
  <div class="ttl" style="margin-bottom:8px; margin-top:4px;">
                        <div class="ttl2">
                            <h3>کاربران پیشنهادی و معتبر دوستی</h3>

					  </div> </div>

<?


foreach($users_af as $m){ $u = $this->network->get_user_by_id($m); ?>
<div style="margin:8px;">



<?

$f = ($this->network->get_user_follows($this->user->id)->follow_users);

if(!isset($f[$u->id]) && $u->id !== $this->user->id ){ ?>
<a href="<?= userlink($u->username)?>" title="<?= htmlspecialchars($u->fullname)?>" target="_blank" id="duror859ertkdlflori58" onclick="" ><img src="<?= $C->IMG_URL.'avatars/thumbs3/'.$u->avatar?>" style="vertical-align:middle;border:solid 1px #888888" /></a>
<? }elseif(isset($f[$u->id]) && $u->id !== $this->user->id){ ?>
<a href="<?= userlink($u->username)?>" title="<?= htmlspecialchars($u->fullname)?>" target="_blank" id="ffjk8548uuej44e" onclick="" ><img src="<?= $C->IMG_URL.'avatars/thumbs3/'.$u->avatar?>" style="vertical-align:middle;border:solid 1px #888888" /></a>
<? }elseif(!isset($f[$u->id]) && $u->id == $this->user->id){ ?>
<a href="<?= userlink($u->username)?>" title="<?= htmlspecialchars($u->fullname)?>" target="_blank" id="ddaddf6578970" onclick="" ><img src="<?= $C->IMG_URL.'avatars/thumbs3/'.$u->avatar?>" style="vertical-align:middle;border:solid 1px #888888" /></a>

<? } ?>
</div>
<? } ?>
<? } ?>