<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * File ini:
 *
 * Model untuk modul Program Bantuan
 *
 * donjo-app/models/Program_bantuan_model.php
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

 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.

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


class Produk_model extends MY_Model {

	// Konfigurasi untuk library 'upload'
	protected $uploadConfig = array();
	// Untuk datatables peserta bantuan di themes/klasik/partials/statistik.php (web)
	var $column_order = array(null, 'program', 'peserta', null); //set column field database for datatable orderable
	var $column_search = array('p.nama', 'pend.nama'); //set column field database for datatable searchable
	var $order = array('peserta' => 'asc'); // default order

	public function __construct()
	{
		$this->load->model(['rtm_model', 'kelompok_model', 'wilayah_model']);
	}

	public function get_general($table){
        $query = $this->db->get($table);
        return $query->result_array();
    }

	public function get_general_pagination($limit, $start){
		$query = $this->db->get('produk', $limit, $start);
        return $query;
	}

	public function create_general($table, $data){		 
		$outp = $this->db->insert($table, $data);
		status_sukses($outp);
	}

	function get_by_id_general($table, $id, $val)
	{
		$query = $this->db->where($id, $val)->get($table);
				return $query->result_array();
	}

	public function get_by_id_general_limit($table, $id, $val, $limit){
		$query = $this->db->where($id, $val)->get($table, $limit);
				return $query->result_array();
	}
	function delete_general($table, $id, $val)
	{
			$this->db->where($id, $val);
			return $this->db->delete($table);
	}

	public function paging($p=1, $o=0)
	{
		$sql = "SELECT COUNT(*) AS jml ". $this->list_data_sql();
		$query = $this->db->query($sql);
		$row = $query->row_array();
		$jml_data = $row['jml'];

		$this->load->library('paging');
		$cfg['page'] = $p;
		$cfg['per_page'] = $_SESSION['per_page'];
		$cfg['num_rows'] = $jml_data;
		$this->paging->init($cfg);

		return $this->paging;
	}

	private function list_data_sql()
	{
		$sql = " FROM produk WHERE 1 ";
		$sql .= $this->search_sql();
		$sql .= $this->filter_sql();
		return $sql;
	}


	public function autocomplete()
	{
		return $this->autocomplete_str('nama', 'produk');
	}

	private function search_sql()
	{
		if (isset($_SESSION['cari']))
		{
			$cari = $_SESSION['cari'];
			$kw = $this->db->escape_like_str($cari);
			$kw = '%' .$kw. '%';
			$search_sql = " AND (nama LIKE '$kw' OR nama LIKE '$kw')";
			return $search_sql;
		}
	}

	private function filter_sql()
	{
		if (isset($_SESSION['filter']))
		{
			$kf = $_SESSION['filter'];
			$filter_sql = " AND jenis = $kf";
			return $filter_sql;
		}
	}

	public function list_data($order = 0, $offset = 0, $limit = 20)
	{
		// Ordering sql
		switch($order)
		{
			case 1 :
				$order_sql = ' ORDER BY ketegori';
				break;
			case 2:
				$order_sql = ' ORDER BY ketegori DESC';
				break;
			case 3:
				$order_sql = ' ORDER BY nama';
				break;
			case 4:
				$order_sql = ' ORDER BY nama DESC';
				break;
			case 5:
				$order_sql = ' ORDER BY nama';
				break;
			case 6:
				$order_sql = ' ORDER BY nama DESC';
				break;
			default:
				$order_sql = ' ORDER BY nama';
		}
		// Paging sql
		$paging_sql = ' LIMIT '.$offset.' , '.$limit;
		// Query utama
		$sql = "SELECT * " . $this->list_data_sql();
		$sql .= $order_sql;
		$sql .= $paging_sql;

		$query = $this->db->query($sql);
		$data = $query->result_array();

		// Formating output
		$j = $offset;
		for ($i=0; $i < count($data); $i++)
		{
			$data[$i]['no'] = $j + 1;
			$j++;
		}
		return $data;
	}

	function update_general($table, $id, $val, $data)
                {
                        $this->db->where($id, $val);
                        return $this->db->update($table, $data);
                }

}
?>
