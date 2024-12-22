<?php
    $kurs1_baslik = "Php Kursu";
    $kurs1_altBaslik = "Sıfırdan ileri seviye php web geliştirme kursu";
    $kurs1_resim = "1.png";
    $kurs1_yayinTarihi = "15.12.2024";
    $kurs1_yorumSayisi = "100";
    $kurs1_begeniSayisi = "300";

    $kurs2_baslik = "Python Kursu";
    $kurs2_altBaslik = "Sıfırdan ileri seviye python web geliştirme kursu";
    $kurs2_resim = "2.jpg";
    $kurs2_yayinTarihi = "15.12.2024";
    $kurs2_yorumSayisi = "100";
    $kurs2_begeniSayisi = "300";

    $kurs3_baslik = "Node.js Kursu";
    $kurs3_altBaslik = "Sıfırdan ileri seviye node.js web geliştirme kursu";
    $kurs3_resim = "3.png";
    $kurs3_yayinTarihi = "15.12.2024";
    $kurs3_yorumSayisi = "100";
    $kurs3_begeniSayisi = "300";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body>
    <div class="container my-3">
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs1_resim; ?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurs1_baslik; ?></h5>
                        <p><?php echo $kurs1_altBaslik; ?></p>
                        <p>
                            <span class="span badge rounded-pill text-bg-primary">
                              Beğeni:  <?php echo $kurs1_begeniSayisi; ?>
                            </span>
                            <span class="span badge rounded-pill text-bg-danger">
                              Yorum:  <?php echo $kurs1_yorumSayisi; ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs2_resim; ?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurs2_baslik; ?></h5>
                        <p><?php echo $kurs2_altBaslik; ?></p>
                        <p>
                            <span class="span badge rounded-pill text-bg-primary">
                              Beğeni:  <?php echo $kurs2_begeniSayisi; ?>
                            </span>
                            <span class="span badge rounded-pill text-bg-danger">
                              Yorum:  <?php echo $kurs2_yorumSayisi; ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs3_resim; ?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurs3_baslik; ?></h5>
                        <p><?php echo $kurs3_altBaslik; ?></p>
                        <p>
                            <span class="span badge rounded-pill text-bg-primary">
                              Beğeni:  <?php echo $kurs3_begeniSayisi; ?>
                            </span>
                            <span class="span badge rounded-pill text-bg-danger">
                              Yorum:  <?php echo $kurs3_yorumSayisi; ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>