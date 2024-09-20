<?php
// require_once "../config/koneksi.php";
// require_once "../config/function.php";

if(isset($_POST['button'])){
    $judul = htmlspecialchars($_POST['judul']); 
    $durasi = htmlspecialchars($_POST['durasi']);
    $sinopsis = htmlspecialchars($_POST['sinopsis']);
    $cover = basename($_FILES['cover']['name']);
    $thumbnail = basename($_FILES['thumbnail']['name']);
    $file = basename($_FILES['file']['name']);
    
    // htmlspecialchars digunakan untuk mengantisipasi inputan dari user.
    
    // kita memasukkan semua data yang akan di inputkan ke dalam variabel array bernama $data
    $data = [
        'judul' => $judul,
        'durasi' => $durasi,
        'sinopsis' => $sinopsis,
        'cover' => $cover,
        'thumbnail' => $thumbnail,
        'file' => $file
    ];

    // sebelum menginputkan data kedalam database kita akan memvalidasi semua inputan, apakah sudah terisi
    // jika ternyata ada sebuah field yang tidak terisi maka fungsi validasiBarang akan mengeluarkan 
    // pesan error melalui url
    // jika berhasil, variabel validasi akan menghasilkan nilai 0
    $validasi = validasiBarang($data);
    
    // jika validasi berhasil (tidak ada inputan yang kosong atau bernilai 0)
    if($validasi === 0)
    {
        // maka input data barang akan di lakukan dengan memanggil fungsi inputBarang
        $result = inputBarang($data, $koneksi);
        if($result === true)
        {
            $dir_cover = $_SERVER['DOCUMENT_ROOT'].'/web_demov/Upload/Cover';
            $dir_thumbnail = $_SERVER['DOCUMENT_ROOT'].'/web_demov/Upload/thumbnail';
            $dir_file = $_SERVER['DOCUMENT_ROOT'].'/web_demov/Upload/file';
            $upload_cover = tambahGambar($dir_cover, $_FILES['cover']);
            $upload_thumbnail = tambahGambar($dir_thumbnail, $_FILES['thumbnail']);
            $upload_file = tambahGambar($dir_file, $_FILES['file']);
            if($upload_cover && $upload_file && $upload_thumbnail) header("location: input.php?success=1");
            else header("location: input.php?errno=2");
        } 
        else header("Location: input.php?errno=1");  // jika eksekusi tidak berhasil, maka halaman akan diarahkan ke halmaan input_sepatu.php dengan error no = 1
    } 
    else 
        header("Location: input.php?error=missing_field&field=" . $validasi); // line ini berisi pesan error jika ada salah satu inputan kosong dan inputan yang mana yang kosong

    exit();
}
// proses ketika tombol delete di tekan 
else if(isset($_POST['del'])){
    $id = $_POST['id'];

    $result = hapusBarang($id, $koneksi);

    if($result) header("Location: tampil_barang.php?success=2"); 
    else header("Location: tampil_barang.php?errno=2"); 
}


if(isset($_POST['buttonupdate'])){
    $judul = htmlspecialchars($_POST['judul']); 
    $durasi = htmlspecialchars($_POST['durasi']);
    $sinopsis = htmlspecialchars($_POST['sinopsis']);
    $id = $_POST['id'];

    $cover = basename($_FILES['cover']['name']);
    $thumbnail = basename($_FILES['thumbnail']['name']);
    $file = basename($_FILES['file']['name']);

    // $gambar = basename($_FILES['gambar']['name']);

    $gblamacv = $_POST['gambar_lama_CV'];
    $gblamatm = $_POST['gambar_lama_TM'];
    $gblamafl = $_POST['gambar_lama_FL'];

    $data = [
        'judul' => $judul, 
        'durasi' => $durasi,
        'sinopsis' => $sinopsis,
    ];
  
  
   
    
    if(!empty($cover)){
        $data['cover'] = $cover;
    }
    if(!empty($thumbnail)){
        $data['thumbnail'] = $thumbnail;
    }
    if(!empty($file)){
        $data['file_film'] = $file;
    }
    // var_dump($data);
    // if
    // else {
    //     $data = [
    //         'judul' => $judul, 
    //         'durasi' => $durasi,
    //         'sinopsis' => $sinopsis,
    //         'cover' => $cover, 
    //         'thumbnail' => $thumbnail,
    //         'file' => $file
    //     ];
    // }
    $validasi = validasiBarang($data);

    if($validasi === 0){
        $result = updateBarangGambar($data, $koneksi, $id);
        var_dump($data);
        if($result) {
                if(!empty($cover))
                {
                    // $gb = tampilSatuBarangGambar($koneksi, $id);
                    $dest_cover = $_SERVER['DOCUMENT_ROOT'].'/web_demov/Upload/Cover';
                    
                    $upload = tambahGambar($dest_cover, $_FILES['cover']);
                    if($upload) 
                    { 
                        unlink("../Upload/Cover/$gblamacv");
                        header("location: tampil_barang_gambar.php");
                    }
                    else {
                        header("location: tampil_barang_gambar.php?errno=2");
                    }
                }
                else {
                    header("location: tampil_barang_gambar.php");
                }
                if(!empty($thumbnail))
                {
                    // $gb = tampilSatuBarangGambar($koneksi, $id);
                    
                    $dest_thumbnail = $_SERVER['DOCUMENT_ROOT'].'/web_demov/Upload/thumbnail';
                    
                    $upload = tambahGambar($dest_thumbnail, $_FILES['thumbnail']);
                    if($upload) 
                    { 
                        unlink("../Upload/thumbnail/$gblamatm");
                        header("location: tampil_barang_gambar.php");
                    }
                    else {
                        header("location: tampil_barang_gambar.php?errno=2");
                    }
                }
                else {
                    header("location: tampil_barang_gambar.php");
                }
                if(!empty($file))
                {
                    // $gb = tampilSatuBarangGambar($koneksi, $id);
                    
                    $dest_file = $_SERVER['DOCUMENT_ROOT'].'/web_demov/Upload/file';
                    $upload = tambahGambar($dest_file, $_FILES['file']);
                    if($upload) 
                    { 
                        unlink("../Upload/file/$gblamafl");
                        header("location: tampil_barang_gambar.php");
                    }
                    else {
                        header("location: tampil_barang_gambar.php?errno=2");
                    }
                }
                else {
                    header("location: tampil_barang_gambar.php");
                }
        }
        else {
            header("location: tampil_barang_gambar.php?errno=1");
        }
    }
    else 
        header("Location: tampil_barang.php?id=$id&error=missing_field&field=" . $validasi); // line ini berisi pesan error jika ada salah satu inputan kosong dan inputan yang mana yang kosong
    
    exit();
}
?>