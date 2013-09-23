<?php
	
	$this->load_template('header.php');
	
?>

<? if($D->error) { ?>
<?= errorbox('خطا', $D->errmsg, TRUE, 'margin-top:5px;margin-bottom:5px;') ?>
<?php } ?>



<? if($D->sabad && $n=  $D->baste){ ?>

<?= msgbox ('خرید بسته '.$n['pri'].' ماهه با قیمت '.$n['amount'].' تومان', nl2br('<b>
در اینجا شما با خرید بسته مذکور ، اطلاعیه خود جهت جذب افزاد به پروفایل و دنبال کردن را فعال میکنید.

آواتار شما و دکمه دنبال کردن شما در پروفایل با عنوان کاربران اماده دنبال شدن اضافه می شود.
</b>
<center>
<form action="'.$C->SITE_URL.'payfllow/tab:submit" method="POST" >
<input type="hidden" value="'.$n['pri'].'" name="pri_2"/>
<input type="hidden" value="'.$n['amount'].'" name="amount_2"/>
<input type="submit" value="پرداخت نهایی" name="pardakht"/>
</form>
</center>
',false))?>



<?}?>




<?php
	
	$this->load_template('footer.php');
	
?>