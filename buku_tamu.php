<?php include 'layout/header.php'; ?>
<?php include 'layout/navbar.php'; ?>
<?php include 'koneksi.php'; ?>

<style>
    .form-box {
        background: #f5f9ff;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }

    .comment-box {
        border-left: 5px solid #1565c0;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 15px;
        background: white;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        transition: 0.3s;
    }

    .comment-box:hover {
        transform: scale(1.02);
    }

    .btn-custom {
        background: linear-gradient(45deg, #1565c0, #42a5f5);
        color: white;
        border: none;
    }
</style>

<div class="container mt-5 mb-5">

    <div class="text-center mb-4">
        <h2 style="color:#0d47a1;">Buku Tamu</h2>
        <hr style="width:100px; margin:auto; border:2px solid orange;">
    </div>

    <!-- FORM -->
    <div class="form-box mb-4">
        <form method="POST" action="simpan_tamu.php">
            <input type="text" name="nama" class="form-control mb-2" placeholder="Nama" required>
            <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
            <textarea name="pesan" class="form-control mb-2" placeholder="Tulis pesan..." required></textarea>
            <button class="btn btn-custom">Kirim Pesan</button>
        </form>
    </div>

    <!-- KOMENTAR -->
    <h4 class="mb-3">Komentar Pengunjung</h4>

    <?php
    $data = mysqli_query($conn, "SELECT * FROM buku_tamu ORDER BY id DESC");

    while ($d = mysqli_fetch_array($data)) {

        $tgl = date('d M Y - H:i', strtotime($d['tanggal']));

        echo "
        <div class='comment-box'>
            <b>$d[nama]</b> <small class='text-muted'>($tgl)</small>
            <p>$d[pesan]</p>
            <a href='hapus_tamu.php?id=$d[id]' class='btn btn-danger btn-sm'>Hapus</a>
        </div>
        ";
    }
    ?>

</div>

<?php include 'layout/footer.php'; ?>