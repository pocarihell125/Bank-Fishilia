<?php

include 'header.php';
require_once 'include/auth.php';

?>

<main>
  <div class="container-fluid">
    <h1 class="mt-4">Dashboard</h1>
    <div class="card mb-4">
      <div class="card-header">
        Dashboard
      </div>
      <!--<img src="dist/assets/img/bri.jpg" class="img-fluid" alt="...">-->
      <div class="card-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Sejarah</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Visi</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Misi</a>
          </li>
        </ul>
        <div class="tab-content border-left border-right" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p><strong>Bank FR</strong> adalah salah satu bank swasta terbesar di Indonesia. Bank FR didirikan di Jawa Tengah pada tahun 2023 di Yogyakata</p>
          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <p>"Menjadi bank terkemuka yang memberikan solusi keuangan inovatif dan menjadi mitra yang dipercaya bagi para nasabah dalam mencapai tujuan keuangan mereka."</p>
          </div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <p><strong>Memberikan layanan perbankan yang unggul: Kami berkomitmen untuk menyediakan layanan perbankan yang berkualitas tinggi kepada nasabah kami dengan menawarkan produk dan layanan yang inovatif, aman, dan handal.</p>
            <p><strong>Memenuhi kebutuhan nasabah: Kami berusaha memahami dan memenuhi kebutuhan keuangan nasabah kami dengan menyediakan berbagai produk dan layanan yang sesuai, seperti pinjaman, tabungan, investasi, dan layanan perbankan elektronik.</p>
            <p><strong>Membangun hubungan jangka panjang: Kami berusaha untuk membangun hubungan yang kuat dan jangka panjang dengan nasabah kami. Kami akan terus mengembangkan kemitraan yang saling menguntungkan dengan memberikan layanan yang persona.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <img src="dist/assets/img/dashboard.jpg" style="width: 100%;" alt="">
    </div>
  </div>
</main>

<?php

include 'footer.php';

?>
