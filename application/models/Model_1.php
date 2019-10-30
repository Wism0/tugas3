<?php
defined('BASEPATH')or exit('no direct scrip access allowed');
class Model_1 extends CI_Model{
	public function getdata()
	{
		return $this->db->get('mhs')->result();
	}
}