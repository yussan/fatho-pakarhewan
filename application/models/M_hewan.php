<?php 
class M_hewan extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	//get first step set clasification
	public function firstMorfologi($type) 
	{
		$this->db->where('type',$type);
		$this->db->where('hubungan_klasifikasi','');
		$this->db->order_by('kd_ciri_morfologi','asc');
		$query = $this->db->get('ciri_morfologi');
		return $query->result_array();
	}
	//get nama morfologi
	public function getNamaMorfologi($kodemorfologi) 
	{
		$this->db->where('kd_ciri_morfologi',$kodemorfologi);
		$query = $this->db->get('ciri_morfologi');
		$query = $query->row_array();
		return $query['nm_ciri_morfologi'];
	}
	//related morfologi
	public function relatedMorfologi($kodemorfologi) 
	{
		$this->db->where('hubungan_klasifikasi',$kodemorfologi);
		$this->db->order_by('kd_ciri_morfologi','asc');
		$query = $this->db->get('ciri_morfologi');
		return $query->result_array();
	}
	//detail hewan
	public function detailHewan($kdhewan) 
	{
		$this->db->where('kd_hewan',$kdhewan);
		$query = $this->db->get('hewan');
		return $query->row_array();
	}
	//iscompleted
	public function isCompleted($kdciri) 
	{
		$this->db->where('hubungan_klasifikasi',$kdciri);
		$query = $this->db->get('ciri_morfologi');
		if($query->num_rows()>0) 
		{
			return true;
		}else
		{	
			return false;
		}
	}

	//ADMIN ONLY
	public function getCiriMorfologi()
	{
		$query = $this->db->get('ciri_morfologi');
		return $query->result_array();
	}
	//detail morfologi
	public function detMorfologi($id)
	{
		$this->db->where('kd_ciri_morfologi',$id);
		$query = $this->db->get('ciri_morfologi');
		return $query->row_array();
	}
	//show all data hewan
	public function getHewan()
	{
		$query = $this->db->get('hewan');
		return $query->result_array();
	}
	//show all data hewan
	public function detHewan($id)
	{
		$this->db->where('kd_hewan',$id);
		$query = $this->db->get('hewan');
		return $query->row_array();
	}
	//show all data realsi
	public function getRelasi()
	{
		$query = $this->db->get('relasi_hewan_morfologi');
		return $query->result_array();
	}
	public function detRelasi($kdhewan)
	{
		$this->db->where('Kd_hewan',$kdhewan);
		$query = $this->db->get('relasi_hewan_morfologi');
		return $query->row_array();
	}
}