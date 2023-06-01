<!DOCTYPE html>
<html>
<head>
  <title>Biodata Diri</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 40px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #333;
      text-align: center;
      margin-bottom: 30px;
    }

    p {
      margin-bottom: 15px;
    }

    ul {
      padding-left: 20px;
    }

    .fa {
      margin-right: 5px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Biodata Diri</h1>
    <div class="row">
      <div class="col-md-6">
        <h3>Informasi Personal</h3>
        
      </div>
      

    <section>
      <div class="container">
          <div class="profile text-center">
              <div class="img-box">
                  <?php $gambar = 'assets/image/' . $detail_anggota['gambar']; ?>
                  <img src="<?= base_url($gambar) ?>" alt="<?= $detail_anggota['nama'] ?>" class="img-responsive rounded-circle img-thumbnail">
              </div>
              <h2><?= $detail_anggota['nim'] ?></h2>
              <h3><?= $detail_anggota['nama'] ?></h3>
              <p>Alamat: <?= $detail_anggota['alamat'] ?></p>
              <p>Tanggal Lahir: <?= $detail_anggota['tanggal lahir'] ?></p>
          </div>
      </div>
    </section>

  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>
