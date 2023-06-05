<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Beranda</title>
    <link rel="stylesheet" href="css/booking.css">
</head>

<body>
    <div class="header">
        <a class="judul" href="index.html">
            <font color="red">BOOKING </font>BARBER
        </a>
        <div class="navigasi">
            <a href="index.html" class="nav-item nav-link active">Beranda</a>
            <a href="price.html" class="nav-item nav-link">Harga</a>
            <a href="portfolio.html" class="nav-item nav-link">Galeri</a>
            <a href="booking.html" class="nav-item nav-link">Pemesanan</a>
            <a href="pemesanan.php" class="nav-item nav-link">CETAK</a>
            <a href="logout.php" class="nav-item nav-link">Logout</a>
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

</head>

<body>
    <?php
    include('config.php');

    $query = "SELECT * FROM booking";

    $result = mysqli_query($conn, $query);

    ?>

    <div class="container bg-info" style="padding-top: 50px; padding-bottom: 30px; padding-left: 1px; padding-right: 1px;">
        <div class="row">
            <div class="col-sm-4">
                <h3>Tambah booking</h3>
                <form role="form" action="insert.php" method="post">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama_bk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Nomer Hp</label>
                        <input type="text" name="nomerhp_bk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Service</label>
                        <input type="text" name="service_bk" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Pesan</label>
                        <input type="text" name="pesan_bk" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-info btn-block">Submit</button>
                    <button type="submit" class="btn btn-info btn-block"><a target="_blank" href="cetak.php">
                            <font color="White">Cetak Nota</font>
                        </a></button>
                </form>

            </div>
            <div class="col-sm-8">
                <h3>Daftar koleksi booking yang pernah dibaca</h3>
                <table class="table table-striped table-hover dtabel">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nomer Hp</th>
                            <th>Service</th>
                            <th>Pesan</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $row['nama_booking']; ?></td>
                                <td><?php echo $row['nomerhp_booking']; ?></td>
                                <td><?php echo $row['service_booking']; ?></td>
                                <td><?php echo $row['pesan_booking']; ?></td>
                                <td>
                                    <a href="editform.php?id=<?php echo $row['id_booking']; ?>" class="btn btn-success" role="button">Edit</a>
                                    <a href="delete.php?id=<?php echo $row['id_booking'] ?>" class="btn btn-danger" role="button">Delete</a>
                                </td>
                            </tr>

                        <?php
                        }
                        mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</body>

<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//cdn.datatables.net/1.10.11/jquery/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('.dtabel').DataTable();
    });
</script>

</html>