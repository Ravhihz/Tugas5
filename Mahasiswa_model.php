<?php
class Mahasiswa_model extends CI_Model {
function retrieve()
{
	$query = $this->db->get('mhs');
	
	if($query->result()){
	foreach ($query->result() as $content) {
	$data[] = array(
		$content->nim,
		$content->nama,
		$content->alamat,
		);
	}
	return $data;
	} else {
	return FALSE;
	}
}
function add($arg)
{
	$data = array (
	'nim'	=>$arg[0],
	'nama'	=>$arg[1],
	'alamat'=>$arg[2],
	);
	$this->db->insert('nim',$data);
	$this->db->delete('mhs');
}
function update($id,$form)
{
	$data = array(
	'nim'	=>$arg[0],
	'nama'	=>$arg[1],
	'alamat'=>$arg[2],
	);
}
}