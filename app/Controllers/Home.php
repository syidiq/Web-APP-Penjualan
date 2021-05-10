<?php

namespace App\Controllers;
use App\Models\UserModel;
use App\Models\JualModel;
use App\Models\BlnModel;
use CodeIgniter\I18n\Time;
use ValueError;
helper('array');
class Home extends BaseController
{
	protected $UserModel;
	protected $JualModel;
	protected $BlnModel;

	public function __construct()
	{
		$this->UserModel = new UserModel();
		$this->JualModel = new JualModel();
		$this->BlnModel = new BlnModel();
	}

	public function index()
	{
		$data = [
			'title' => 'Login-App'
		];

		return view('auth/login', $data);
	}

	public function register()
	{
		$userq = $this->UserModel->findAll();
		$data = [
			'title' => 'Register Member Baru',
			'userq' => $userq
		];

		return view('auth/register',$data);
	}

	public function admin()
	{
		$bln= date('m');
		$thn= date('Y');
		$thnjl = $this->JualModel->select('*');
		$thnjl = $this->JualModel->selectSum('jumlah_ayam');
		$thnjl = $this->JualModel->selectSum('total_harga');
		$thnjl = $this->JualModel->selectSum('bayaran');
		$thnjl = $this->JualModel->selectAvg('ket');
		$thnjl = $this->JualModel->selectCount('id','Total_Transaksi');
		$thnjl = $this->JualModel->where('tahun', $thn);
		$thnjl = $this->JualModel->groupBy('bln', 'asc')->findAll();

		$j_by = $this->JualModel->selectSum('bayaran')->findAll();
		$j_h = $this->JualModel->selectSum('total_harga')->findAll();

		$d_bl = $this->JualModel->select('*');
		$d_bl = $this->JualModel->selectSum('jumlah_ayam');
		$d_bl = $this->JualModel->selectSum('total_harga');
		$d_bl = $this->JualModel->selectSum('bayaran');
		$d_bl = $this->JualModel->distinct('nama_perusahaan');
		$d_bl = $this->JualModel->selectCount('nama_perusahaan');
		$d_bl = $this->JualModel->where('tahun', $thn);
		$d_bl = $this->JualModel->where('bln', $bln)->findAll();


		$data = [
			'title' => 'Dashboard',
			'd_jual' => $thnjl,
			'bulan_in' => $bln,
			'tahunn_in' => $thn,
			'd_bln' => $d_bl
		];
		return view('admin/index', $data);
	}

	public function pesanan()
	{
		$jual = $this->JualModel->findAll();
		$userq = $this->UserModel->findAll();
		$data = [
			'title' => 'Tabel Daftar Penjualan',
			'jual' => $jual,
			'userq' => $userq
		];
		return view('admin/pesanan', $data);
	}

	public function credit()
	{
		$jual = $this->JualModel->where(['ket' => 2])->findAll();
		$data = [
			'title' => 'Daftar Credit',
			'jual' => $jual
		];
		return view('admin/credit', $data);
	}

	public function perusahaan()
	{
		$userq = $this->UserModel->findAll();
		$data = [
			'title' => 'List Member',
			'userq' => $userq
		];
		return view('admin/perusahaan', $data);
	}

	public function bulan($bl = 1, $tn = 2018)
	{
		helper('array');
		$bl = $this->request->getVar('bulan');
		$tn = $this->request->getVar('tahun');
		$thn = $this->JualModel->groupBy('tahun', 'asc')->findAll();
		$jual = $this->JualModel->select('*');
		$jual = $this->JualModel->selectSum('jumlah_ayam');
		$jual = $this->JualModel->selectSum('total_harga');
		$jual = $this->JualModel->selectSum('bayaran');
		$jual = $this->JualModel->selectAvg('ket');
		$jual = $this->JualModel->selectCount('id','Total_Transaksi');
		$jual = $this->JualModel->where('bln', $bl);
		$jual = $this->JualModel->where('tahun', $tn);
		$jual = $this->JualModel->groupBy('username', 'asc')->findAll();
		// $jual = $this->JualModel->selectCount('ket');
		$bln = $this->BlnModel->findAll();
		$bl = $this->BlnModel->where('id', $bl)->findAll();
		// $this->JualModel->select('*');
		// $this->JualModel->groupBy(["bln","tahun"], 'asc');
		// $this->JualModel->join('bulan', 'bulan.id = penjualan.bln');
		// $query = $this->JualModel->findAll();
		// dd($bln);
		// dd(dot_array_search('0.bln', $bl));
		$data = [
			'title' => 'Rekap Bulanan',
			'jual' => $jual,
			'Bln' => $bln,
			'bulan_r' => $bl,
			'tahun_r' => $tn,
			'thn' => $thn
		];
		return view('rekap/bulan', $data);
	}


	// public function res()
	// {
	// 	// if(dd($this->request->getVar()))
	// 	if(($this->request->getVar('bulan')>1)){
	// 		echo "aaaaa";
	// 	} else {
	// 		echo "asqqw";
	// 	}
	// }

	public function tahun($tn = 2018)
	{
		helper('array');
		$tn = $this->request->getVar('tahun');
		$thn = $this->JualModel->groupBy('tahun', 'asc')->findAll();
		$jual = $this->JualModel->select('*');
		$jual = $this->JualModel->selectSum('jumlah_ayam');
		$jual = $this->JualModel->selectSum('total_harga');
		$jual = $this->JualModel->selectSum('bayaran');
		$jual = $this->JualModel->selectAvg('ket');
		$jual = $this->JualModel->selectCount('id','Total_Transaksi');
		$jual = $this->JualModel->where('tahun', $tn);
		$jual = $this->JualModel->groupBy('username', 'asc')->findAll();

		$data = [
			'title' => 'Rekap Tahun',
			'jual' => $jual,
			'tahun_r' => $tn,
			'thn' => $thn
		];
		return view('rekap/tahun', $data);
	}

	public function credit1()
	{
		return view('perusahaan/credit');
	}

	public function pesanan1()
	{
		return view('perusahaan/pesanan');
	}
}
