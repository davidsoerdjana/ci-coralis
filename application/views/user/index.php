<!-- *7 lanjutan dari templates/header.php
1. Yang ditandain * yang diubah-->

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- * -->
  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-4 text-gray-800">Blank Page</h1> -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <!-- ref https://getbootstrap.com/docs/4.6/components/card/#horizontal -->
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?= $user['name']; ?></h5>
          <p class="card-text"><?= $user['email']; ?></p>
          <p class="card-text"><small class="text-muted">Member since: <?= date('D, d F Y', $user['date_created']); ?></small></p>
        </div>
      </div>
    </div>
  </div>
  <!-- * -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<!-- *7 lanjut ke templates/sidebar.php -->