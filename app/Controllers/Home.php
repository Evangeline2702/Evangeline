<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\M_models;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use vendor\autoload;

class Home extends Controller
{
	public function __construct(){
		helper('form');
	}
	// ===================================================Index==============================================	
	public function index(){
		if(session()->get('level')>0){
			$model = new m_models;
			$data['tampil']=$model->tampil('user');
			// $key= ",". session()->nis."_";
			// $keys=$model->stat('spp',$key);
			// $data['stat']=$model->stat('spp',$key);
			// $data['stat2']=$model->stat2('spp',$key);
			// $data['tampil']=$model->tampil('spp');
			echo view('head');
			echo view('menu');
			echo view('home',$data);
			echo view('footer');
		}
		else{
			echo "<script>
			alert('Harap Login');
			window.location.href='/Home/login';
			</script>";
		}
	}

	public function user(){
		$model = new m_models;
		$data['tampil']=$model->tampil('user');
		echo view('head');
		echo view('menu');
		echo view('user',$data);
		echo view('footer');
	}

	public function login(){
		echo view('head');
		echo view('login');
		echo view('footer');
	}

	public function signup(){
		echo view('head');
		echo view('signup');
		echo view('footer');
	}


	public function proses_login(){
		$model= new m_models;
		$u= $this->request->getPost('u');
		$p= $this->request->getPost('p');
		$isi=array(
			'username'=> $u,
			'password' => $p,
		);

		$cek=$model->getWhere('user',$isi);
		if ($cek>0) {
			session()->set('nis', $cek['nis']);
			session()->set('username', $cek['username']);
			session()->set('password', $cek['password']);
			session()->set('level', $cek['level']);
			return redirect()->to('Home');
		}
		else{
			echo "<script>
			alert('Email atau Password Salah');
			window.location.href='/Home/login';
			</script>";
		}
	}	


	public function proses_signup(){
		$model= new M_models;
		$id= $this->request->getPost('nis');
		$a= $this->request->getPost('username');
		$a2= $this->request->getPost('nama');
		$a3= $this->request->getPost('kelas');
		$b= $this->request->getPost('pass');
		$c= $this->request->getPost('profile');
		$d= "3";
		if ($c=="") {
      	$c='default.jpg'; 
    }
    else{
    	$c= $this->request->getPost('profile');
    }
		$isi=array(
		'nis'=>$id,
		'username'=> $a,
		'nama'=> $a2,
		'kelas'=> $a3,
		'password' => $b,
		'profile'=> $c,
		'level' => $d,
	);
		$model->input('user',$isi);
		return redirect()->to('../Home/login');
	}


	public function logout(){
		echo view ('head');
		echo view ('logout');
		echo view ('footer');
		session()->destroy();

	}



	public function bayar($id){
		$model = new m_models;
		$data['tampil']=$model->search_spp('spp',$id);
		echo view ('head2');
		echo view ('menu');
		echo view ('bayar',$data);
		echo view ('footer');

	}

	public function proses_bayar(){
		$model= new M_models();
		$id= $this->request->getPost('id');
		$a= $this->request->getPost('status');
		$nis = session()->get('nis');
		$bulan = $this->request->getPost('bulan');
		$code = $this->request->getPost('code');
		$b = $a .",".$nis."_ ";
		$tanggal = Date("d/m/y");
		$isi=array(
		'id_spp'=>$id,
		'status'=> $b,
		);
		$isi2=array(
		'nis'=>$nis,
		'bulan'=> $bulan,
		'code'=> $code,
		'tanggal'=> $tanggal,
		);
		$where= array('id_spp'=>$id);
		$model->edit('spp',$isi,$where);
		$model->input('pembayaran',$isi2);
		return redirect()->to('Home');
		}	


	public function history(){
		$model = new m_models;
		$key= session()->nis;
		$data['history']=$model->history('pembayaran',$key);
		echo view('head');
		echo view('menu');
		echo view('history',$data);
		echo view('footer');
}

	public function proses_cek_bulan(){
		$model = new m_models;
		$key= $this->request->getPost('bulan');
		$data['tampil']=$model->cek_bulan('spp',$key);
		echo view('head');
		echo view('menu');
		echo view('cek',$data);
		echo view('footer');
}
	public function proses_cek_nis(){
		$model = new m_models;
		$nis= $this->request->getPost('nis');
		$key= ",".$nis."_ ";
		$data['tampil']=$model->cek_nis('spp',$key);
		echo view('head');
		echo view('menu');
		echo view('cek',$data);
		echo view('footer');
}
	
	public function cek(){
		$model = new m_models;
		$data['tampil']=$model->tampil('spp');
		echo view('head');
		echo view('menu');
		echo view('cek',$data);
		echo view('footer');
	}
	public function print(){
		$model = new m_models;
		$data['tampil']=$model->tampil('spp');
		echo view('head');
		echo view('menu');
		echo view('input_print');
		echo view('footer');
	}

	public function print_pdf(){
		$model = new m_models;
		$data['tampil']=$model->tampil('spp');
		echo view('head');
		echo view('menu');
		echo view('input_print_pdf',$data);
		echo view('footer');
	}

	public function excel_print_nis(){
		// $spreadsheet = new Spreadsheet;
		// $sheet = $spreadsheet->getActiveSheet();
		$model= new m_models;
		$nis= $this->request->getPost('nis');
		$key= ",".$nis."_ ";
		$dataLaporan=$model->cek_nis('spp',$key);
		$stat=$model->stat('spp',$key);

		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', "LAPORAN SPP");
		$sheet->mergeCells('A1:E1'); 
		$sheet->getStyle('A1')->getFont()->setBold(true);
		$sheet->setCellValue('A3', "#");
		$sheet->setCellValue('B3', "Code");
		$sheet->setCellValue('C3', "Keterangan"); 
		$sheet->setCellValue('D3', "Total Harga");
		$sheet->setCellValue('E3', "Status");

		$no = 1;
		$numRow = 4;
		foreach ($dataLaporan as $row) :
		$sheet->setCellValue('A' . $numRow, $no);
		$sheet->setCellValue('B' . $numRow, $row->code);
		$sheet->setCellValue('C' . $numRow, $row->bulan);
		$sheet->setCellValue('D' . $numRow, $row->jumlah);
		$sheet->setCellValue('E' . $numRow, "Lunas");
		$no++;
		$numRow++;
		endforeach;

		foreach ($stat as $row) :
		$sheet->setCellValue('A' . $numRow, $no);
		$sheet->setCellValue('B' . $numRow, $row->code);
		$sheet->setCellValue('C' . $numRow, $row->bulan);
		$sheet->setCellValue('D' . $numRow, $row->jumlah);
		$sheet->setCellValue('E' . $numRow, "Belum Lunas");
		$no++;
		$numRow++;
		endforeach;

		$sheet->getDefaultRowDimension()->setRowHeight(-1);
		$sheet->getPageSetup()->setOrientation (\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
		$sheet->setTitle("Laporan Pembayaran SPP");
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename = "LAPORANSPP.xlsx"');
		header('Cache-Control: max-age=0');
		$writer = new Xlsx ($spreadsheet);
		$writer->save('php://output');

	}

	public function excel_print_bulan(){
		// $spreadsheet = new Spreadsheet;
		// $sheet = $spreadsheet->getActiveSheet();
		$model= new m_models;
		$key= $this->request->getPost('bulan');
		$dataLaporan=$model->cek_bulan('spp',$key);

		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', "LAPORAN SPP");
		$sheet->mergeCells('A1:E1'); 
		$sheet->getStyle('A1')->getFont()->setBold(true);
		$sheet->setCellValue('A3', "#");
		$sheet->setCellValue('B3', "Code");
		$sheet->setCellValue('C3', "Keterangan"); 
		$sheet->setCellValue('D3', "Total Harga");
		$sheet->setCellValue('E3', "Status Yang Lunas");

		$no = 1;
		$numRow = 4;
		foreach ($dataLaporan as $row) :
		$sheet->setCellValue('A' . $numRow, $no);
		$sheet->setCellValue('B' . $numRow, $row->code);
		$sheet->setCellValue('C' . $numRow, $row->bulan);
		$sheet->setCellValue('D' . $numRow, $row->jumlah);
		$sheet->setCellValue('E' . $numRow, $row->status);
		$no++;
		$numRow++;
		endforeach;

		$sheet->getDefaultRowDimension()->setRowHeight(-1);
		$sheet->getPageSetup()->setOrientation (\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
		$sheet->setTitle("Laporan Pembayaran SPP");
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename = "LAPORANSPP.xlsx"');
		header('Cache-Control: max-age=0');
		$writer = new Xlsx ($spreadsheet);
		$writer->save('php://output');

	}




	public function pdf_print_bulan(){
		// $spreadsheet = new Spreadsheet;
		// $sheet = $spreadsheet->getActiveSheet();
		$model= new m_models;
		$key= $this->request->getPost('bulan');
		$data['tampil']=$model->cek_bulan('spp',$key);
		echo view('print',$data);
// 
		// return redirect()->to('/home/berhasil');

	}
	public function pdf_print_all(){
		// $spreadsheet = new Spreadsheet;
		// $sheet = $spreadsheet->getActiveSheet();
		$model= new m_models;
		$data['tampil']=$model->tampil('spp');
		echo view('print',$data);

	}
	public function pdf_print_nis(){
		// $spreadsheet = new Spreadsheet;
		// $sheet = $spreadsheet->getActiveSheet();
		$model= new m_models;
		$nis= $this->request->getPost('nis');
		$key= ",".$nis."_ ";
		$data['tampil2']=$model->cek_nis('spp',$key);
		$data['tampil']=$model->stat('spp',$key);
		echo view('print_nis',$data);
		// return redirect()->to('/home/berhasil');


	}

	public function berhasil(){
		// $spreadsheet = new Spreadsheet;
		// $sheet = $spreadsheet->getActiveSheet();
		echo view('berhasil');

	}


	public function excel_print_all(){
		// $spreadsheet = new Spreadsheet;
		// $sheet = $spreadsheet->getActiveSheet();
		// $where=array('code' => , );
		$model= new m_models;
		$dataLaporan= $model->tampil('spp');
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', "LAPORAN SPP");
		$sheet->mergeCells('A1:E1'); 
		$sheet->getStyle('A1')->getFont()->setBold(true);
		$sheet->setCellValue('A3', "#");
		$sheet->setCellValue('B3', "Code");
		$sheet->setCellValue('C3', "Keterangan"); 
		$sheet->setCellValue('D3', "Total Harga");
		$sheet->setCellValue('E3', "Status");
		$no = 1;
		$numRow = 4;
		foreach ($dataLaporan as $row) :
		$sheet->setCellValue('A' . $numRow, $no);
		$sheet->setCellValue('B' . $numRow, $row->code);
		$sheet->setCellValue('C' . $numRow, $row->bulan);
		$sheet->setCellValue('D' . $numRow, $row->jumlah);
		$sheet->setCellValue('E' . $numRow, $row->status);

		$no++;
		$numRow++;
		endforeach;

		$sheet->getDefaultRowDimension()->setRowHeight(-1);
		$sheet->getPageSetup()->setOrientation (\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
		$sheet->setTitle("Laporan Pembayaran SPP");
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment; filename = "LAPORANSPP.xlsx"');
		header('Cache-Control: max-age=0');
		$writer = new Xlsx ($spreadsheet);
		$writer->save('php://output');

	}

}	

