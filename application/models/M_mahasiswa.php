<?php	
defined('BASEPATH')or exit('No direct script access allowed');
/**
 * 
 */
class M_mahasiswa extends CI_model
{
	
	function getDataFormulir()
	{
		$query = $this->db->get('formulir');
		return $query->result();
		# code...
	}
}