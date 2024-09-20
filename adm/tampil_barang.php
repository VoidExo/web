<?php 
        include "../config/config.php";
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--untuk menginclude kan icon di title bar windows -->
    <link rel="icon" href="../img/logo.ico" type="image/x-icon" />
    
    <!-- Bootstrap CSS yang sudah di pindah ke lokal, tidak lagi membutuhkan akses online-->
    <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   
    <!-- fontawesome adalah font yang digunakan untuk 'icon-icon' seperti icon social media, icon amplop, arrow (di bagian footer) dll akses online -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>Official Website DEMOV</title>
<body>
    <div class="container">
        <div class="row">
            <div class="col6">
                <table class='table'>
                    <tr>
                            <td>#</td>
                            <td>Nama</td>
                            <td>Harga</td>
                            <td colspan=2> Menu</td>
                    </tr>
                    <?php 
                        $barang = tampilBarang($koneksi);
                        if($barang == false)
                        {
                            echo 'barang kosong';
                        }
                        else {
                            $no=1;
                            foreach($barang as $rec){
                    ?>
                    <tr>
                            <td><?= $no ?></td>
                            <td><?= $rec['id_film'] ?></td>
                            <td><?= $rec['judul'] ?></td>
                            <td><?= $rec['durasi'] ?></td>
                            <td><?= $rec['sinopsis'] ?></td>
                            <td><?= $rec['cover'] ?></td>
                            <td><?= $rec['thumbnail'] ?></td>
                            <td><?= $rec['file_film'] ?></td>
                            <td><a href="update_barang.php?id=<?= $rec['id_film']?>">edit</a></td>
                            <td>
                                <!-- dibawah ini adalah form yang dibuat untuk mengirimkan data id barang 
                                yang akan dihapus ketika kita klik tombol del -->
                                <form action="" method="post">
                                    <!-- data id barang disimpan dalam tag input type hidden dengan valuenya
                                    adalah id dari record/data terpilih  -->
                                    <input type="hidden" name="id" value="<?= $rec['id_film'] ?>">
                                    <button type="submit" class="btn-danger" name='del'>Delete</button>
                                </form>
                            </td>
                    </tr>
                    <?php  $no++; 
                            }
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>