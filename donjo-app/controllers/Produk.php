<?php
/**
 * File ini:
 *
 * Controller halaman beranda untuk dashboard Admin
 *
 * donjo-app/controllers/Hom_sid.php
 *
 */

/**
 *
 * File ini bagian dari:
 *
 * OpenSID
 *
 * Sistem informasi desa sumber terbuka untuk memajukan desa
 *
 * Aplikasi dan source code ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * Hak Cipta 2016 - 2020 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah dan/atau mendistribusikan,
 * asal tunduk pada syarat berikut:
 *
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.
 *
 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package	OpenSID
 * @author	Tim Pengembang OpenDesa
 * @copyright	Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright	Hak Cipta 2016 - 2020 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license	http://www.gnu.org/licenses/gpl.html	GPL V3
 * @link 	https://github.com/OpenSID/OpenSID
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends Admin_Controller {
    protected $uploadConfig = array();
    private $_set_page;
	public function __construct()
	{
		parent::__construct();

		$this->load->model('produk_model' , 'dbObject');
		$this->load->model('surat_model');
		$this->load->model('notif_model');
        $this->load->library('release');
        $this->_set_page = ['20', '50', '100'];
        $this->modul_ini = 214;
	}

	public function index($p = 1, $o = 0)
	{
		if ($this->release->has_internet_connection())
		{
			$this->release->set_api_url('https://api.github.com/repos/opensid/opensid/releases/latest')
				->set_interval(7)
				->set_cache_folder(FCPATH.'desa');

			$data['update_available'] = $this->release->is_available();
			$data['current_version'] = $this->release->get_current_version();
			$data['latest_version'] = $this->release->get_latest_version();
			$data['release_name'] = $this->release->get_release_name();
			$data['release_body'] = $this->release->get_release_body();
		}
        $data['p'] = $p;
		$data['o'] = $o;
        $per_page = $this->input->post('per_page');
		if (isset($per_page))
			$this->session->per_page = $per_page;
        
        $data['per_page'] = $this->session->per_page;
        $data['produk'] = $this->dbObject->get_general('produk');
		$data['paging'] = $this->dbObject->paging($p, $o);
		$data['func'] = 'index';
		$data['main'] = $this->dbObject->list_data($o, $data['paging']->offset, $data['paging']->per_page);
		$data['keyword'] = $this->dbObject->autocomplete();
        $data['set_page'] = $this->_set_page;
		
		$this->render('admin_produk/index', $data);
    }
    
    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['form_action'] = site_url("Produk/insert");

        $this->render('admin_produk/create', $data);
    }

    public function insert(){
        // Produk
        $kategori = $this->input->post('kategori');
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $jenis = $this->input->post('jenis');
        $rating = $this->input->post('rating');
        $dekripsi = $this->input->post('dekripsi');
        $status = $this->input->post('status');
        $satuan = $this->input->post('satuan');

        // Penjual
        $namapenjual = $this->input->post('namapenjual');
        $nomortelpon = $this->input->post('nomortelpon');
        $nomorwa = $this->input->post('nomorwa');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');


        $config['upload_path']          = LOKASI_PRODUK;
        $config['allowed_types']        = 'gif|jpg|jpeg|png|mp4|flv|avi';
        $config['max_size']             = 100000000;
        $config['file_name']            = "produk-" . date('Y-m-d-H-i-s');

        $this->upload->initialize($config);
        if ($this->upload->do_upload('gambar'))
		{ 
            $gambar = $this->upload->data('file_name');
        }else{
            $gambar = "";
        }

        $config1['upload_path']          = LOKASI_PENJUAL;
        $config1['allowed_types']        = 'gif|jpg|jpeg|png|mp4|flv|avi';
        $config1['max_size']             = 100000000;
        $config1['file_name']            = "penjual-" . date('Y-m-d-H-i-s');
       
        $this->upload->initialize($config1);
        if ($this->upload->do_upload('poto'))
		{ 
            $poto = $this->upload->data('file_name');
        }else{
            $poto = "";
        }
       
        $data = array(
            'kategori' => $kategori ,
            'nama' => $nama,
            'harga' => $harga,
            'deskripsi' => $dekripsi,
            'jenis' => $jenis,
            'rating' => $rating,
            'status' => $status,
            'gambar' => $gambar,
            'galeri' => '',
            'namapenjual' => $namapenjual,
            'nomortelpon' => $nomortelpon,
            'nomorwa' => $nomorwa,
            'email' => $email,
            'alamat' => $alamat,
            'satuan' => $satuan,
            'poto' => $poto

        );
        $this->dbObject->create_general('produk', $data);
		redirect('produk');
    }


    public function detail($id){
        $data['produk'] = $this->dbObject->get_by_id_general('produk', 'id', $id);
        $this->render('admin_produk/detail', $data);
    }

    public function hapus($id){
        $gambar_id = $this->dbObject->get_by_id_general('produk', 'id', $id);
      
            unlink(LOKASI_PRODUK.$gambar_id[0]['gambar']);
            unlink(LOKASI_PENJUAL.$gambar_id[0]['poto']);

        if($this->dbObject->delete_general("produk", "id", $id)){
            redirect("produk");
        }
    }

    public function edit($id){


        $this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('cid', 'Sasaran', 'required');
		$this->form_validation->set_rules('nama', 'Nama Program', 'required');
		$this->form_validation->set_rules('sdate', 'Tanggal awal', 'required');
		$this->form_validation->set_rules('edate', 'Tanggal akhir', 'required');
		$this->form_validation->set_rules('asaldana', 'Asal Dana', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        

        $data['produk'] = $this->dbObject->get_by_id_general('produk', 'id', $id);
        $data['form_action'] = site_url("Produk/update/".$id);
        

        $this->render("admin_produk/edit", $data);

    }

    public function update($id){
        // Produk
        $kategori = $this->input->post('kategori');
        $nama = $this->input->post('nama');
        $harga = $this->input->post('harga');
        $jenis = $this->input->post('jenis');
        $rating = $this->input->post('rating');
        $dekripsi = $this->input->post('dekripsi');
        $status = $this->input->post('status');
        $satuan = $this->input->post('satuan');

        // Penjual
        $namapenjual = $this->input->post('namapenjual');
        $nomortelpon = $this->input->post('nomortelpon');
        $nomorwa = $this->input->post('nomorwa');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        // $data = array();
        $data = array(
            'kategori' => $kategori ,
            'nama' => $nama,
            'harga' => $harga,
            'deskripsi' => $dekripsi,
            'jenis' => $jenis,
            'rating' => $rating,
            'status' => $status,
            'galeri' => '',
            'namapenjual' => $namapenjual,
            'nomortelpon' => $nomortelpon,
            'nomorwa' => $nomorwa,
            'email' => $email,
            'alamat' => $alamat,
            'satuan' => $satuan,
        );
        $config['upload_path']          = LOKASI_PRODUK;
        $config['allowed_types']        = 'gif|jpg|jpeg|png|mp4|flv|avi';
        $config['max_size']             = 100000000;
        $config['file_name']            = "produk-" . date('Y-m-d-H-i-s');

        $this->upload->initialize($config);
        if ($this->upload->do_upload('gambar'))
		{ 
            $gambar = $this->upload->data('file_name');
            $data['gambar'] = $gambar;
            $gambar_id = $this->dbObject->get_by_id_general('produk', 'id', $id);
            
                unlink(LOKASI_PRODUK.$gambar_id[0]['gambar']);
        }

        $config1['upload_path']          = LOKASI_PENJUAL;
        $config1['allowed_types']        = 'gif|jpg|jpeg|png|mp4|flv|avi';
        $config1['max_size']             = 100000000;
        $config1['file_name']            = "penjual-" . date('Y-m-d-H-i-s');


        $this->upload->initialize($config1);
        if ($this->upload->do_upload('poto'))
		{ 
            $foto = $this->upload->data('file_name');
            $data['poto'] = $foto;
            $gambar_id1 = $this->dbObject->get_by_id_general('produk', 'id', $id);
            
                unlink(LOKASI_PRODUK.$gambar_id1[0]['poto']);
        }
        if($this->dbObject->update_general('produk', 'id', $id, $data)){
            redirect('produk');
        }
    }

}
