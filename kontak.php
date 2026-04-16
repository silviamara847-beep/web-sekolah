<?php include 'layout/header.php'; ?>
<?php include 'layout/navbar.php'; ?>

<style>
    .contact-box {
        border-radius: 15px;
        padding: 30px;
        background: linear-gradient(135deg, #1565c0, #42a5f5);
        color: white;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    .contact-item {
        margin-bottom: 15px;
        font-size: 18px;
    }

    .map-box {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0,0,0,0.2);
    }
</style>

<div class="container mt-5 mb-5">

    <div class="text-center mb-4">
        <h2 style="color:#0d47a1;">Kontak Sekolah</h2>
        <hr style="width:100px; margin:auto; border:2px solid orange;">
    </div>

    <div class="row">

        <!-- INFO -->
        <div class="col-md-6">
            <div class="contact-box">
                <h4>Hubungi Kami</h4>

                <div class="contact-item">📧 smkn4kendal@gmail.com</div>
                <div class="contact-item">📞 08112969000</div>
                <div class="contact-item">📍 Brangsong,Kendal, Jawa Tengah</div>
            </div>
        </div>

        <!-- MAP -->
        <div class="col-md-6">
            <div class="map-box">
                <iframe 
                    src="https://maps.google.com/maps?q=kendal&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    width="100%" height="250" style="border:0;">
                </iframe>
            </div>
        </div>

    </div>

</div>

<?php include 'layout/footer.php'; ?>