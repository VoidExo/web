<?php

include "../config/config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap-utilities.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container-fluid {
            margin-top: 5rem;
            margin-bottom: 5rem;
            margin-left: 5rem;
        }
        body {
            overflow-X: hidden;
        }
        .mb-3 {
            width: 500px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">

            
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="judul">Nama</label>
                    <br>
                    <input class="judul" type="text" name="judul" placeholder="Name">
                </div>

                <br>

                <div class="mb-3">
                    <label for="number">Durasi</label>
                    <br>
                    <input type="number" name="durasi" placeholder="Durasi">
                </div>

                <br>

                <div class="mb-3">
                    <label for="text">Sinopsis</label>
                    <br>
                    <textarea name="sinopsis" id="textarea"></textarea>
                </div>

                <br>




                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Cover</label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple name="cover">
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Thumbnail</label>
                    <input class="form-control" name="thumbnail" type="file" id="formFileMultiple" multiple>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">File Film</label>
                    <input class="form-control" name="file" type="file" id="formFileMultiple" multiple>
                </div>
                <br>
                <input type="submit" name="button">
            </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>