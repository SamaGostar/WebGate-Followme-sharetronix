<?php
	
	if( !$this->network->id ) {
		$this->redirect('home');
	}
	if( !$this->user->is_logged ) {
		$this->redirect('signin');
	}
	$db2->query('SELECT 1 FROM users WHERE id="'.$this->user->id.'" AND is_network_admin="1"  LIMIT 1');
	if( 0 == $db2->num_rows() ) {
		$this->redirect('dashboard');
	}
	
	
	
	
	
	
	$this->load_langfile('inside/global.php');
	$this->load_langfile('inside/admin.php');
	
	$D->page_title	= 'قیمت تبلیغ دنبالم کن'.$C->SITE_TITLE;
	
$D->submit = false;
$D->basteha = array();
$D->all_add_fllow = array('1','3','6','12');
foreach($D->all_add_fllow as $a){
$it = 'FLLOW_M'.$a;
$D->$it = $C->$it ;
$D->basteha[] = $it;
}
if(isset($_POST['sbm'])){
foreach($D->basteha as $b){

if(isset($_POST[$b]) && trim($_POST[$b]) && $intb = intval($_POST[$b]) && (intval($_POST[$b]) > 0 && intval($_POST[$b]) >=1000) ){
	$db2->query('REPLACE INTO settings SET word="'.$b.'", value="'.$db2->e($_POST[$b]).'" ');
$D->$b = $_POST[$b];
	}
}

}
	
	
	$this->load_template('admin_add-fllow.php');
	
?>
