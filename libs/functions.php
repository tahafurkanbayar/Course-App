<?php
function kursEkle(&$kurslar,string $baslik, string $altBaslik, string $resim, string $yayinTarihi, int $yorumSayisi=0, int $begeniSayisi=0, bool $onay = true){
    $yeni_kurs[count($kurslar) + 1] = array(
        "baslik" => $baslik,
        "altBaslik" => $altBaslik,
        "resim" => $resim,
        "yayinTarihi" => $yayinTarihi,
        "yorumSayisi" => $yorumSayisi,
        "begeniSayisi" => $begeniSayisi,
        "onay" => $onay
    );
    $kurslar = array_merge($kurslar,$yeni_kurs);
}

kursEkle($kurslar, "Yeni kurs 1", "Alt baslik 1", "1.png", "10.10.2024");
kursEkle($kurslar, "Yeni kurs 2", "Alt baslik 2", "1.png", "10.10.2024");

function urlDuzenle($baslik){
    return str_replace([" ","ç","@","."],["-","c","","-"],strtolower($baslik));
}

function kisaAciklama($altBaslik){
    if (strlen($altBaslik) > 50){
        return substr($altBaslik,0,50)."...";
    }else {
        return $altBaslik;
    }
}

?>