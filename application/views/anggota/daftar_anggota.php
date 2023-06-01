<html>
    <head>
        <title>Kelompok</title>
        <link rel="stylesheet" href=".../style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    </head>
    <body>
        
    
<section>
    
    <div class="container " style>
        <h1 class="judul  profile text-center" >ANGGOTA KELOMPOK KAMI</h1>
        <div class="row">
            <?php foreach ($anggota as $item): ?>
            <div class="col-md-3">
                <div class="profile text-center">
                    <div class="img-box">
                    <?php $gambar = 'assets/image/' . $item['id'] . '.jpg'; ?>
                    <img src="<?= base_url($gambar) ?>" alt="<?= $item['nama'] ?>" class=" img-responsive rounded-circle img-fluid">
                    </div>
                    <h2><?= $item['nim'] ?></h2>
                    <h3><?= $item['nama'] ?></h3>
                    <a href="<?= site_url('anggota/biodata/' . $item['id']) ?>"><p>Lihat Selengkapnya</p></a>
                    
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
</body>
