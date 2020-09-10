<?php
$db = new PDO("mysql:host=localhost;dbname=social","root","");
$citizen = $db->query("SELECT c.*, k.nomi as kasbi FROM citizen1 c
                                LEFT JOIN kasbi k ON c.kasb_id=k.id")
              ->fetchAll(PDO::FETCH_ASSOC);

if ($_POST) {
    $ism = $_POST["ism"];
    if ($ism !== ""){
//    $citizen = $db->query("SELECT id,nomi,surname,born_year,passport,email,kasb_id FROM citizen1 WHERE nomi LIKE '%$ism%'")->fetchAll(PDO::FETCH_ASSOC);
        $citizen = $db->query("SELECT c.*, k.nomi as kasbi FROM citizen1 c
                                    LEFT JOIN kasbi k ON c.kasb_id=k.id WHERE c.nomi LIKE '%$ism%'")
            ->fetchAll(PDO::FETCH_ASSOC);
        if ($citizen == false) check($ism);
    }else{
        $pass = $_POST["Pass_seriya"];
        $citizen = $db->query("SELECT c.*, k.nomi as kasbi FROM citizen1 c
                                LEFT JOIN kasbi k ON c.kasb_id=k.id WHERE c.passport LIKE '%$pass%'")
            ->fetchAll(PDO::FETCH_ASSOC);
    }
}else{
    echo "Wrong!";
}

?>
<!DOCTYPE html>
<html lang="en">
<?php include "blocks/head.php";?>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <?php include "blocks/nav.php"?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <?php include "blocks/left.php";?>
        </div>
        <div class="col-md-9">
            <h3 align="center">Foydalanuvchilar haqida malumot!</h3>
            <div>
                <form action="foydalanuvchilar.php" method="post">
                    <table class="table">
                        <tr class="container">
                            <td><label for="ism">Ismi</label></td>
                            <td><input type="text" name="ism" id="ism"></td>
                            <td><p style="color: red">*ismi orqali qidirish</p></td>
                        </tr>

                        <tr>
                            <td><label for="Pass_seriya">Passport seriyasi</label></td>
                            <td><input type="text" name="Pass_seriya" id="Pass_seriya"></td>
                            <td><p style="color: red">*Passport seriyasi orqali qidirish</p></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="Ko'rish"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div>
                <table class="table" border="1" width="70%">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Ismi</th>
                        <th scope="col">Familiyasi</th>
                        <th scope="col">Tug_sana</th>
                        <th scope="col">passport_seriyasi</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Kasbi</th>
                    </tr>
                    </thead>
                    <?php foreach ($citizen as $citizen1): ?>
                    <tr>
                        <td><?=$citizen1['id'];?></td>
                        <td><?=$citizen1['nomi'];?></td>
                        <td><?=$citizen1['surname'];?></td>
                        <td><?=$citizen1['born_year'];?></td>
                        <td><?=$citizen1['passport'];?></td>
                        <td><?=$citizen1["email"];?></td>
                        <td><?=$citizen1["kasbi"];?></td>
                    </tr>
                <?php endforeach; ?>
                    <?php function check($ism){
                        echo $ism . " ismli foydalanuvchi yoq";
                    } ?>
                </table>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>