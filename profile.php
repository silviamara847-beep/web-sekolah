<?php include 'layout/header.php'; ?>
<?php include 'layout/navbar.php'; ?>

<style>
    body {
        background: #f4f6f9;
    }

    .section-title {
        color: #0d47a1;
        font-weight: bold;
    }

    .card-box {
        border-radius: 12px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        padding: 25px;
        background: white;
    }

    .kepsek-img {
        border-radius: 10px;
        transition: 0.3s;
    }

    .kepsek-img:hover {
        transform: scale(1.05);
    }

    .highlight {
        color: #ff9800;
        font-weight: bold;
    }
</style>

<div class="container mt-5 mb-5">

    <!-- JUDUL -->
    <div class="text-center mb-4">
        <h2 class="section-title">Profil Sekolah</h2>
        <hr style="width:120px; margin:auto; border:2px solid orange;">
    </div>

    <!-- DESKRIPSI -->
    <div class="card-box mb-4">
        <p>
        SMK Negeri 4 Kendal terletak di <span class="highlight">Jalan Soekarno-Hatta, Brangsong</span>,
        Kabupaten Kendal, Jawa Tengah, dengan luas tanah <b>30.280 m²</b>.
        Sekolah ini memiliki NPSN 20321845 dan merupakan aset pemerintah daerah.
        </p>

        <p>
        Berdiri pada <span class="highlight">14 Mei 2005</span>, sekolah ini dirintis oleh
        Drs. Condro Budi Susetyo. Awalnya kegiatan belajar masih menumpang di
        SMP Negeri 1 Brangsong.
        </p>

        <p>
        Saat ini SMK Negeri 4 Kendal berkembang menjadi sekolah unggulan
        berbasis teknologi dan karakter.
        </p>
    </div>

    <!-- KEPALA SEKOLAH -->
    <div class="row mt-5 align-items-center card-box">

        <!-- FOTO -->
        <div class="col-md-4 text-center">
            <img src="assests/img/kepsek.jpg" 
                 class="img-fluid kepsek-img shadow"
                 style="max-height:300px;">
        </div>

        <!-- DESKRIPSI -->
        <div class="col-md-8">
            <h4 class="section-title">Kepala Sekolah</h4>
            <h5 class="text-primary">Arif Ediyanto, S.Pd., M.Pd.</h5>

            <p>
            SMK Negeri 4 Kendal dipimpin oleh kepala sekolah yang memiliki
            komitmen tinggi dalam meningkatkan kualitas pendidikan serta
            mencetak lulusan yang unggul, berkarakter, dan siap kerja.
            </p>

            <p>
            Dengan kepemimpinan yang visioner, sekolah terus berkembang menjadi
            institusi pendidikan yang inovatif, adaptif, dan berdaya saing global.
            </p>
        </div>

    </div>

    <!-- VISI MISI -->
    <div class="row mt-4">

        <div class="col-md-6">
            <div class="card-box">
                <h4 class="section-title">Visi</h4>
                <p>
                Mencetak lulusan yang unggul, berkarakter, berjiwa wirausaha,
                berdaya saing global, dan berwawasan lingkungan.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card-box">
                <h4 class="section-title">Misi</h4>
                <ul>
                    <li>Pembelajaran berbasis DUDIKA</li>
                    <li>Penguatan karakter Profil Pelajar Pancasila</li>
                    <li>Mengembangkan jiwa wirausaha</li>
                    <li>Penguasaan IPTEK & bahasa asing</li>
                    <li>Peduli lingkungan</li>
                </ul>
            </div>
        </div>

    </div>

</div>
<style>
<?php include 'layout/footer.php'; ?>
    .card-custom:hover {
        transform: scale(1.02);
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
    }

    .bg-soft {
        background: #f5f9ff;
    }

    .highlight {
        color: #ff9800;
        font-weight: bold;
    }
</style>

<div class="container mt-5">

    <!-- JUDUL -->
    <div class="text-center mb-5">
        <h2 class="section-title">Profil SMK Negeri 4 Kendal</h2>
        <hr style="width:120px; margin:auto; border:2px solid #ff9800;">
    </div>

    <!-- DESKRIPSI -->
    <div class="card card-custom p-4 mb-4">
        <p>
        SMK Negeri 4 Kendal terletak di <span class="highlight">Jalan Soekarno-Hatta, Brangsong</span>,
        Kabupaten Kendal, Jawa Tengah, dengan luas tanah <b>30.280 m²</b>.
        Sekolah ini memiliki NPSN 20321845 dan merupakan aset pemerintah daerah.
        </p>

        <p>
        Berdiri pada <span class="highlight">14 Mei 2005</span>, sekolah ini dirintis oleh
        Drs. Condro Budi Susetyo. Awalnya kegiatan belajar masih menumpang di SMP Negeri 1 Brangsong,
        namun kini telah berkembang menjadi sekolah unggulan.
        </p>
    </div>

    <!-- VISI MISI -->
    <div class="row">
        <div class="col-md-6">
            <div class="card card-custom p-4 mb-3 bg-soft">
                <h4 class="section-title">Visi</h4>
                <p>
                Mencetak lulusan yang <span class="highlight">unggul, berkarakter,
                berjiwa wirausaha, dan berdaya saing global</span>.
                </p>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-custom p-4 mb-3 bg-soft">
                <h4 class="section-title">Misi</h4>
                <ul>
                    <li>Pembelajaran berbasis DUDIKA</li>
                    <li>Penguatan karakter Profil Pelajar Pancasila</li>
                    <li>Mengembangkan jiwa wirausaha</li>
                    <li>Penguasaan IPTEK & bahasa asing</li>
                    <li>Peduli lingkungan</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- JURUSAN -->
    <div class="card card-custom p-4 mt-4">
        <h4 class="section-title">Program Keahlian</h4>
        <div class="row">
            <div class="col-md-4">
                <ul>
                    <li>RPL</li>
                    <li>TKRO</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul>
                    <li>TKJ</li>
                    <li>APAT</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul>
                    <li>Tata Boga</li>
                    <li>NKPI</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- DATA SEKOLAH -->
    <div class="row mt-4 text-center">
        <div class="col-md-4">
            <div class="card p-3 bg-primary text-white shadow">
                <h3>1412</h3>
                <p>Siswa</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-3 bg-warning text-dark shadow">
                <h3>86</h3>
                <p>Guru</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-3 bg-success text-white shadow">
                <h3>26</h3>
                <p>Staff</p>
            </div>
        </div>
    </div>

    <!-- KEPALA SEKOLAH -->
    <div class="card card-custom p-4 mt-4">
        <h4 class="section-title">Kepala Sekolah</h4>
        <ul>
            <li>Drs. Condro Budi Susetyo</li>
            <li>Drs. Langgeng Budiharso, M.Si.</li>
            <li>Drs. Suroyo, M.Pd.</li>
            <li>Drs. Kusdarmanto</li>
            <li>Drs. Maryono, M.Pd.</li>
            <li>Suharto, S.Pd., M.Pd.</li>
            <li>Agus Basuki, S.Pd.</li>
            <li>Drs. Sigit Poedjiono, S.H., M.Si.</li>
            <li>Drs. Yudi Wibowo</li>
            <li>Agus Surono, S.Pd., M.M., Gr.</li>
            <li>Arif Ediyanto, S.Pd., M.Pd.</li>
        </ul>
    </div>

    <!-- FASILITAS -->
    <div class="card card-custom p-4 mt-4 mb-5 bg-soft">
        <h4 class="section-title">Fasilitas & Kegiatan</h4>
        <p>
        Sekolah menyediakan berbagai fasilitas seperti laboratorium, perpustakaan,
        ekstrakurikuler, organisasi siswa, komunitas belajar, dan tim olahraga.
        Proses belajar dibuat nyaman agar siswa berkembang maksimal.
        </p>
    </div>

</div>

<?php include 'layout/footer.php'; ?>