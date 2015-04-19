<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('application/controllers/Base.php');
class Admin extends Base {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		//if  isset session
		if(!empty($this->session->userdata('admin'))):
			redirect('admin/morfologi');
			endif;
		if(!empty($_POST)):
			$username = $_POST['inputusername'];
			$password = md5($_POST['inputpassword']);
			if($username=='admin' AND $password==md5('admin'))
			{
				//create session
				$sessdata['admin'] = array('username'=>$username,'password'=>md5($password));
				$this->session->set_userdata($sessdata);
				redirect(site_url('admin'));
			}else{
				redirect(site_url('admin?note=username dan password tidak cocok'));//gagal login
			}
		endif;
		//membersihkan sistem
		$Data = array 
		(
			);
		$this->basePublicView('admin/login',$Data);
	}
	//moroflogi page
	public function morfologi()
	{
		$Data = array 
		(
			'title'=>'Ciri Morfologi',
			'view'=>$this->M_hewan->getCiriMorfologi(),
			);
		$this->basePublicView('admin/morfologi',$Data);

	}
	public function actionMorfologi()
	{
		switch ($_GET['act']) {
			case 'edit':
				$id=$_POST['inputkode'];
				$this->db->where('kd_ciri_morfologi',$id);
				$data = array(
					'kd_ciri_morfologi'=>$_POST['inputkode'],
					'nm_ciri_morfologi'=>$_POST['inputnama'],
					'type'=>$_POST['inputtype'],
					'hubungan_klasifikasi'=>$_POST['inputklasifikasi'],
					'desk_morf'=>$_POST['inputdeskripsi'],
					);
				$this->db->update('ciri_morfologi',$data);
				break;
			case 'delete':
				$id = $_GET['id'];
				$this->db->where('kd_ciri_morfologi',$id);
				$this->db->delete('ciri_morfologi');
				break;	
			default:
				$this->morfologi();
				break;
		}
		redirect(site_url('admin/morfologi'));
	}
	//olah data hewan
	public function hewan()
	{
		$Data = array 
		(
			'title'=>'Hewan',
			'view'=>$this->M_hewan->getHewan(),
			);
		$this->basePublicView('admin/hewan',$Data);
	}
	public function actionhewan()
	{
		switch ($_GET['act']) {
			case 'edit':
			if(!empty($_FILES['inputpic']['name'])){
				// print_r($_FILES);
				$config['upload_path'] = './resource/images/hewan';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']	= '500';
				$config['encrypt_name'] = TRUE;
				// $config['max_width']  = '500';
				// $config['max_height']  = '500';
				$this->load->library('upload', $config);
				if (!$this->upload->do_upload('inputpic')){//gagal upload
					echo $this->upload->display_errors();
				} else { //berhasil upload
					// $pp = $_FILES['input_pp']['name'];
					// $pp = str_replace(' ','_',$pp);
					$pp =$this->upload->data('file_name');					
				}
			}else{//not upload new profile picure
				$pp = $_POST['oldpic'];
			}
			$data = array
			(
				'kd_hewan'=>$_POST['inputkode'],
				'nm_hewan'=>$_POST['inputnama'],
				'definisi'=>$_POST['inputdefinisi'],
				'gambar_hewan'=>$pp
				);
			$this->db->where('kd_hewan',$_POST['inputkode']);
			$this->db->update('hewan',$data);
			break;
			case 'delete':
			$id = $_GET['id'];
			$this->db->where('kd_hewan',$id);
			$this->db->delete('hewan');
			break;
		}
		redirect(site_url('admin/hewan'));
	}
	//relasi
	public function relasi()
	{
		$Data = array 
		(
			'title'=>'Relasi',
			'view'=>$this->M_hewan->getRelasi(),
			);
		$this->basePublicView('admin/relasi',$Data);
	}
	public function actionrelasi()
	{
		switch ($_GET['act']) {
			case 'edit':
				$id=$_POST['inputkode'];
				$name = $_POST['inputnama'];
				$this->db->where('Kd_hewan',$id);
				$this->db->update('relasi_hewan_morfologi',array('kd_ciri_morfologi'=>$name));
				break;
			case 'delete':
				$id = $_GET['id'];
				$this->db->where('Kd_hewan',$id);
				$this->db->delete('relasi_hewan_morfologi');
				break;	
			default:
				$this->relasi();
				break;
		}
		redirect(site_url('admin/relasi'));
	}
	//logout
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('admin'));
	}
}
