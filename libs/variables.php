<?php
const title = "Popüler Kurslar";

const db_user = array (
    "username" => "tahabayar",
    "password" => "12345",
    "name" => "Taha Furkan Bayar"
);

$kategoriler = array(
    array("kategori_adi" => "Programlama", "aktif" => true),
    array("kategori_adi" => "Web Programlama", "aktif" => false),
    array("kategori_adi" => "Veri Analizi", "aktif" => false),
    array("kategori_adi" => "Ofis Uygulamaları", "aktif" => false),
    array("kategori_adi" => "Mobil Uygulamalar", "aktif" => false)
);

$sehirler = array(
    "06" => "Ankara",
    "41" => "Kocaeli",
    "34" => "İstanbul",
    "53" => "Rize",
    "54" => "Sakarya"
);

$hobiler = array(
    "1" => "Sinema",
    "2" => "Spor",
    "3" => "Müzik",
    "4" => "Kitap"
);

$kurslar = array(
    "1" => array(
        "baslik" => "Php Kursu",
        "altBaslik" => "Sıfırdan ileri seviye php ile web geliştirme kursu test",
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

?>