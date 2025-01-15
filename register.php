<?php
require "libs/variables.php";
require "libs/functions.php";

?>
<?php include "partials/header.php"; ?>
<?php include "partials/navbar.php"; ?>

<?php
$usernameErr = $emailErr = $passwordErr = $repasswordErr = $cityErr = $hobbiesErr  = "";
$username = $email = $password = $repassword = $city  = "";
$hobbies = [];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])){
            $usernameErr = "Username gereklidir";
        } else {
            $username = safe_html($_POST["username"]);
        }
        if (empty($_POST["email"])){
            $emailErr = "email gereklidir";
        } else {
            $email = safe_html($_POST["email"]);
        }
        if (empty($_POST["password"])){
            $passwordErr = "password gereklidir";
        } else {
            $password = safe_html($_POST["password"]);
        }
        if ($_POST["repassword"] != $_POST["password"]){
            $repasswordErr = "parola uyuşması gereklidir";
        } else {
            $repassword = safe_html($_POST["repassword"]);
        }
        if ($_POST["city"] == -1){
            $cityErr = "Şehir Seçiniz";
        } else {
            $city = $_POST["city"];
        }
        if (!isset($_POST["hobbies"])){
            $hobbiesErr = "Hobi seçiniz";
        } else {
            $hobbies = $_POST["hobbies"];
        }
    }

print_r($hobbies);

?>
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <form action="register.php" method="post">
                    <div class="mb-3">
                        <label for="username">Kullanıcı Adı</label>
                        <input type="text" name="username" class="form-control" value="<?=$username?>">
                        <div class="text-danger"><?=$usernameErr?></div>
                    </div>
                    <div class="mb-3">
                        <label for="email">E-posta</label>
                        <input type="email" name="email" class="form-control" value="<?=$email?>">
                        <div class="text-danger"><?=$emailErr?></div>
                    </div>
                    <div class="mb-3">
                        <label for="password">Parola</label>
                        <input type="password" name="password" class="form-control" value="<?=$password?>">
                        <div class="text-danger"><?=$passwordErr?></div>
                    </div>
                    <div class="mb-3">
                        <label for="repassword">Parola Tekrar</label>
                        <input type="password" name="repassword" class="form-control">
                        <div class="text-danger"><?=$repasswordErr?></div>
                    </div>
                    <div class="mb-3">
                        <label for="city">Şehir</label>
                        <select name="city" class="form-select">
                            <option value="-1" selected>Şehir Seçiniz</option>
                            <?php foreach ($sehirler as $plaka => $sehir): ?>
                                <option value="<?php echo $plaka; ?>"<?php echo $city == $plaka ? ' selected' : ''?>  > <?php echo $sehir; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <div class="text-danger"><?=$cityErr?></div>
                    </div>
                    <div class="mb-3">
                        <label for="hobiler">Hobiler</label>
                        <?php foreach ($hobiler as $id => $hobi): ?>
                            <div class="form-check">
                                <input type="checkbox" name="hobbies[]" value="<?=$hobi?>" id="hobbies_<?=$id?>" <?php if(in_array($hobi, $hobbies)) echo 'checked' ?>  >
                                <label for="hobbies_<?=$id?>" class="form-check-label"><?=$hobi?></label>
                            </div>
                        <?php endforeach; ?>
                        <div class="text-danger"><?=$hobbiesErr?></div>
                    </div>
                    <button type="submit" class="btn btn-primary">Kayıt Ol</button>
                </form>
            </div>
        </div>
    </div>
<?php include "partials/footer.php"; ?>