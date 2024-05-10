<?php
include_once('koneksi.php');

$id = $_GET['id'];
$unit_kerja = $dbh->query("SELECT * FROM unit_kerja WHERE id = $id")->fetch();

if(isset($_POST['submit'])) {
    // Tangkap data dari form
    $nama = $_POST['nama'];

    // Query untuk update unit kerja
    $query = "UPDATE unit_kerja SET nama='$nama' WHERE id=$id";

    // Eksekusi query update
    if ($dbh->query($query)) {
        header('location: unit_kerja.php');
        exit(); 
    } else {
        echo "Gagal menyimpan data";
    }
}

include_once('top.php');
include_once('menu.php');
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="Template/css/styles.css" rel="stylesheet" />
</head>

<body>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Unit</h1>
            <form action="unit_kerja_update.php" method="post">
                <input type="hidden" name="id" value="<?= $unit_kerja['id'] ?>">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama</label>
                    <div class="col-8">
                        <input id="nama" name="nama" type="text" class="form-control" required="required" value="<?= $unit_kerja['nama'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

<?php
include_once('buttom.php');
?>
