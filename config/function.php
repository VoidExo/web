<?php 
// include "./adm/data.php";
// echo 'tes function';

// fungsi untuk memvalidasi semua inputan dari user
function validasiBarang($data){

    foreach($data as $barang => $value){
        $value = trim($value);
        if ($value === '' || $value === null || $value === false)  return $barang; 
    }

    return 0;
}


// fungsi untuk mem\asukkan data ke tabel sepatu
function inputBarang($data, $koneksi){
    // global $koneksi
    $judul = $data['judul'];
    $durasi = $data['durasi'];
    $sinopsis = $data['sinopsis'];
    $cover= $data ['cover'];
    $thumbnail = $data ['thumbnail'];
    $file = $data ['file'];

    // prepare statement untuk mencegah SQL Injection (ikhtiar wkwk)
    $sql = "INSERT INTO film (judul, durasi, sinopsis, cover, thumbnail, file_film) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $sql);
    if ($stmt === false) {
        return "Failed to prepare statement: " . mysqli_error($koneksi);
    }
    mysqli_stmt_bind_param($stmt, 'sissss', $judul, $durasi, $sinopsis, $cover, $thumbnail, $file);
    $result = mysqli_stmt_execute($stmt);
    
    if (!$result) {
        // echo "Error executing statement: " . mysqli_stmt_error($stmt);
            return false;
        }
    // Close statement and connection
    mysqli_stmt_close($stmt);
    return true;

}



// baru ditambahkan
// fungsi untuk menampilkan semua data pada tabel sepatu
function tampilBarang($koneksi){
    $sql  = "SELECT * FROM film"; // query untuk menampilkan semua data 
    $stmt = mysqli_query($koneksi, $sql);

    // $result = mysqli_fetch_array($stmt);

    if(mysqli_num_rows($stmt) > 0) return mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    else return false;
}

// baru ditambahkan, 
// fungsi untuk menghapus data yang terpilih
function hapusBarang($id, $koneksi){
    $sql = "DELETE FROM film WHERE id_film = ? ";
    $stmt = mysqli_prepare($koneksi, $sql);

    if ($stmt === false) {
        return "Failed to prepare statement: " . mysqli_error($koneksi);
    }

    mysqli_stmt_bind_param($stmt, 'i', $id);
    $result = mysqli_stmt_execute($stmt);
    
    if (!$result) {
        echo "Error executing statement: " . mysqli_stmt_error($stmt);
        return false;
    }

    mysqli_stmt_close($stmt);
    return true;
}

// baru ditambahkan 
// fungsi untuk menampilkan satu data sesuai id yang dipilih
function tampilSatu($koneksi, $id){
    
    $sql  = "SELECT * FROM film WHERE id_film = $id"; // query untuk menampilkan data sesuai id yang dicari

    $stmt = mysqli_query($koneksi, $sql);
    // $result = mysqli_fetch_array($stmt);

    if(mysqli_num_rows($stmt) > 0) return mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    else return false;
}
// tambahan fungsi untuk yang tabel gambar dan barangnya terpisah


function tampilGambar($koneksi, $id){
    $sql = "SELECT * FROM film WHERE id_film = $id";
    $stmt = mysqli_query($koneksi, $sql);

    if(mysqli_num_rows($stmt) > 0 ) return mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    else return false;
}

// untuk menampilkan satu barang saja
function tampilSatuBarang($koneksi, $id)
{
    $sql = "SELECT * FROM film WHERE id_film = $id";
    $stmt = mysqli_query($koneksi, $sql);
    if(mysqli_num_rows($stmt) > 0 ) return mysqli_fetch_array($stmt);
    else return false; 
}

// fungsi untuk menampilkan kategori
function tampilKategori($koneksi)
{
    $sql = "SELECT * FROM film";
    $stmt = mysqli_query($koneksi, $sql);
    if(mysqli_num_rows($stmt) > 0 ) return mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    else return false; 
}
function updateBarangGambar ($data, $koneksi, $id){
    
    foreach($data as $rec => $value) {
        $sql = "UPDATE film SET `$rec` = ? WHERE id_film = ?";
        $stmt = mysqli_prepare($koneksi, $sql);
        if($stmt === false) 
            return "Failed to prepare statement : ". mysqli_error($koneksi);
        mysqli_stmt_bind_param($stmt, 'si', $value, $id);
        $result = mysqli_stmt_execute($stmt);

        mysqli_stmt_close($stmt);
    }

    return true;
}

function tampilNewReleaseGambar($koneksi){
    $sql = "SELECT id_film, judul, durasi, sinopsis, cover, thumbnail, file_film FROM film ORDER BY id_film DESC limit 3 ";
    $stmt = mysqli_query($koneksi, $sql);

    if(mysqli_num_rows($stmt) > 0 ) return mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    else return false; 
}

function tampilNewRelease($koneksi){
    $sql = "SELECT sepatu.id as idsepatu, nama, harga, gambar.file_gambar, gambar.sepatu_id FROM sepatu 
                    LEFT JOIN gambar ON sepatu.id = gambar.sepatu_id 
                    GROUP BY gambar.sepatu_id
                    ORDER BY sepatu.id DESC LIMIT 3";
    $stmt = mysqli_query($koneksi, $sql);

    if(mysqli_num_rows($stmt) > 0 ) return mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    else return false; 
}
?>
