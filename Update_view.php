<?php
	echo "<h1> Form Update Data</h1>";
	
	$hidden = array('old_nim' => $mhs[0]);
	echo form_open('mahasiswa/update','',$hidden);
	echo "<pre>";
	$data = array(
		'name'		=>'var[0]',
		'id'		=>'var[0]',
		'value'		=>$mhs[0],
		'maxlength' =>'10',
		'size'		=>'10',
		'style'		=>'color:blue',
	);
	echo "NIM : ".form_input($data)."<br/>";
	$data = array(
		'name'		=>'var[1]',
		'id'		=>'var[1]',
		'value'		=>$mhs[1],
		'maxlength' =>'50',
		'size'		=>'30',
		'style'		=>'color:blue',
	);
	echo "NAMA : ".form_input($data)."<br/>";
	$data = array(
		'name'		=>'var[2]',
		'id'		=>'var[2]',
		'value'		=>$mhs[2],
		'maxlength' =>'5',
		'size'		=>'30',
		'style'		=>'color:blue',
	);
	echo "Alamat : ".form_texarea($data)."<br/>";
	echo form_submit('submit','Simpan');
	
	echo "</pre>";
	echo from_close();
	
	if(isset($submitted)){
		echo "Data Berhasil Diinput";
	}
?>