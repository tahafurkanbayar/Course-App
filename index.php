<?php
    const title = "Popüler Kurslar";

    $kategoriler = array(
           array("kategori_adi" => "Programlama", "aktif" => true),
           array("kategori_adi" => "Web Programlama", "aktif" => false),
           array("kategori_adi" => "Veri Analizi", "aktif" => false),
           array("kategori_adi" => "Ofis Uygulamaları", "aktif" => false),
           array("kategori_adi" => "Mobil Uygulamalar", "aktif" => false)
    );

    $kurslar = array(
         "1" => array(
                 "baslik" => "Php Kursu",
                 "altBaslik" => "Sıfırdan ileri seviye php ile web geliştirme kursu",
                 "resim" => "1.png",
                 "yayinTarihi" => "15.12.2024",
                 "yorumSayisi" => 0,
                 "begeniSayisi" => 5,
                 "onay" => true
         ),
        "2" => array(
                 "baslik" => "Python Kursu",
                 "altBaslik" => "Sıfırdan ileri seviye python web geliştirme kursu",
                 "resim" => "2.jpg",
                 "yayinTarihi" => "15.12.2024",
                 "yorumSayisi" => 5,
                 "begeniSayisi" => 10,
                 "onay" => true
         ),
        "3" => array(
                 "baslik" => "Node.js Kursu",
                 "altBaslik" => "Sıfırdan ileri seviye node.js web geliştirme kursu",
                 "resim" => "3.png",
                 "yayinTarihi" => "15.12.2024",
                 "yorumSayisi" => 15,
                 "begeniSayisi" => 7,
                 "onay" => true
         ),
        "4" => array(
                 "baslik" => "Django Kursu",
                 "altBaslik" => "Sıfırdan ileri seviye django web geliştirme kursu",
                 "resim" => "2.jpg",
                 "yayinTarihi" => "15.12.2024",
                 "yorumSayisi" => 20,
                 "begeniSayisi" => 6,
                 "onay" => true
        )
    );

    $kurs1_altBaslik = ucfirst(strtolower($kurslar[1]['altBaslik']));
    $kurs2_altBaslik = ucfirst(strtolower($kurslar[2]['altBaslik']));
    $kurs3_altBaslik = ucfirst(strtolower($kurslar[3]['altBaslik']));


    $kurs1_url = str_replace([" ","ç","@","."],["-","c","","-"],strtolower($kurslar[1]['baslik']));
    $kurs2_url = str_replace([" ","ç","@","."],["-","c","","-"],strtolower($kurslar[2]['baslik']));
    $kurs3_url = str_replace([" ","ç","@","."],["-","c","","-"],strtolower($kurslar[3]['baslik']));
    $kurs4_url = str_replace([" ","ç","@","."],["-","c","","-"],strtolower($kurslar[4]['baslik']));

?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>
    <title>Course-App</title>
</head>
<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <?php for ($i = 0; $i < count($kategoriler); $i++): ?>
                    <a href="#" class="list-group-item list-group-item-action <?php echo ($kategoriler[$i]["aktif"] ? "active":"") ?> ">
                        <?=$kategoriler[$i]["kategori_adi"]?>
                    </a>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="col-9">
                <h1 class="mb-3"><?= title ?></h1>
                <p class="lead">
                    <?php echo count($kategoriler); ?> kategoride <?php echo count($kurslar); ?> kurs listelenmiştir
                </p>
                <?php foreach ($kurslar as $key => $kurs): ?>
                    <?php if ($kurs["onay"]): ?>
                        <div class="card mb-3">
                            <div class="row">
                                <div class="col-4">
                                    <img src="img/<?php echo $kurs['resim']; ?>" alt="" class="img-fluid rounded-start">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="<?php echo $kurs1_url; ?>">
                                                <?php echo $kurs['baslik']; ?>
                                            </a>
                                        </h5>
                                        <p class="card-text">
                                            <?php if (strlen($kurs['altBaslik']) > 50): ?>
                                                <?php echo substr($kurs['altBaslik'],0,50)."..."; ?>
                                            <?php else: ?>
                                                <?php echo $kurs['altBaslik']; ?>
                                            <?php endif; ?>
                                        </p>
                                        <p>
                                        <?php if ($kurs['begeniSayisi'] > 0): ?>
                                        <span class="span badge rounded-pill text-bg-primary">
                                          Beğeni:  <?php echo $kurs['begeniSayisi']; ?>
                                        </span>
                                        <?php endif; ?>
                                        <?php if ($kurs['yorumSayisi'] > 0): ?>
                                        <span class="span badge rounded-pill text-bg-danger">
                                          Yorum:  <?php echo $kurs['yorumSayisi']; ?>
                                        </span>
                                        <?php else: ?>
                                        <span class="span badge rounded-pill text-bg-warning">
                                          İlk yorumu sen yap
                                        </span>
                                        <?php endif; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>