<?php
$koneksi = new mysqli ("localhost","root","","db_vote");
include "excel_reader2.php";
    if (isset ($_POST['import'])){
    //mulai proses Import data
		//$file = $_FILES['file']['name'];
		//$ekstensi = explode(".", $file);
		//$file_name = "file-".round(microtime(true)).".".end($ekstensi);
		//$sumber = $_FILES['file']['tmp_name'];
		//$target_dir = "admin/file/";
		//$target_file = $target_dir.$file_name;
		//move_uploaded_file($sumber, $target_file);
		//$obj = PHPExcel_IOFactory::load($target_file);
		//$all_data = $obj->getActiveSheet()->toArray(null, true, true, true);
		//echo $all_data[3]['A'];
	$data = new Spreadsheet_Excel_Reader($_FILES['file']['tmp_name']);
	$baris = $data->rowcount($sheet_index=0);
	
	for ($i=2;$i<=$baris;$i++){
		$nama = $data->val($i,1);
		$username = $data->val($i,2);
		$password = $data->val($i,3);
		
		$sql_import = "INSERT INTO tb_pengguna (nama_pengguna,username,password,level,status,jenis) VALUES (
        '".$nama ."',
        '".$username ."',
        '".$password ."',
        'Pemilih',
        '1',
        'PST')";
		$query_import = mysqli_query($koneksi, $sql_import);
		
	}
      // $sql_import = "INSERT INTO tb_pengguna (nama_pengguna,username,password,level,status,jenis) VALUES (
        //'".$_POST['nama_pengguna']."',
        //'".$_POST['username']."',
        //'".$pass_acak ."',
        //'Pemilih',
        //'1',
        //'PST')";
        //$query_impot = mysqli_query($koneksi, $sql_import);
        mysqli_close($koneksi);

   if ($query_import) {
      echo "<script>
      Swal.fire({title: 'Import Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
         window.location = 'index.php?page=data-pemilih';
         }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Import Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=import-pemilih';
          }
      })</script>";
    }
	}
     //selesai proses simpan data