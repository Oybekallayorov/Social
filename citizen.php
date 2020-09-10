<?php
$db = new PDO("mysql:host=localhost;dbname=social", "root", "");

$citizen = $db->query("SELECT c.*, k.nomi as kasbi, j.nomi as jinoyati, a.nomi as mukofoti FROM citizen1 c
                                 JOIN kasbi k ON c.kasb_id=k.id
                                 JOIN jinoyati j ON c.jinoyat_id=j.id
                                 JOIN awards a ON c.mukofot_id=a.id
                                 ORDER BY c.id")
              ->fetchAll(PDO::FETCH_ASSOC);

if ($_POST) {
//    $sorov = $_POST["sorov"];
    $ism = $_POST["ism"];
    $fam = $_POST["familiya"];
    $tug_s = $_POST["tug_sana"];
    $pass = $_POST["Pass_seriya"];
    $email = $_POST["email"];
    // $kasbi = $_POST["kasbi"];
    // $jinoyati = $_POST["jinoyati"];
    // $mukofoti = $_POST["mukofot"];
    if ($ism !== ""){
        $citizen = $db->query("SELECT c.*, k.nomi as kasbi, j.nomi as jinoyati, a.nomi as mukofoti FROM citizen1 c
                                 JOIN kasbi k ON c.kasb_id=k.id
                                 JOIN jinoyati j ON c.jinoyat_id=j.id
                                 JOIN awards a ON c.mukofot_id=a.id
                                 WHERE c.nomi LIKE '%$ism%'" )
            ->fetchAll(PDO::FETCH_ASSOC);

//        if ($citizen == false) check($ism);
    }elseif ($fam !== ""){
        $citizen = $db->query("SELECT c.*, k.nomi as kasbi, j.nomi as jinoyati, a.nomi as mukofoti FROM citizen1 c
                                 JOIN kasbi k ON c.kasb_id=k.id
                                 JOIN jinoyati j ON c.jinoyat_id=j.id
                                 JOIN awards a ON c.mukofot_id=a.id
                                 WHERE c.surname LIKE '%$fam%'" )
            ->fetchAll(PDO::FETCH_ASSOC);
    }
//elseif ($tug_s !== ""){
//        $citizen = $db->query("SELECT c.*, k.nomi as kasbi, j.nomi as jinoyati, a.nomi as mukofoti FROM citizen1 c
//                                 JOIN kasbi k ON c.kasb_id=k.id
//                                 JOIN jinoyati j ON c.jinoyat_id=j.id
//                                 JOIN awards a ON c.mukofot_id=a.id
//                                 WHERE c.burn_year LIKE '%$tug_s%'" )
//            ->fetchAll(PDO::FETCH_ASSOC);
//    }
    elseif ($pass !== ""){
        $citizen = $db->query("SELECT c.*, k.nomi as kasbi, j.nomi as jinoyati, a.nomi as mukofoti FROM citizen1 c
                                 JOIN kasbi k ON c.kasb_id=k.id
                                 JOIN jinoyati j ON c.jinoyat_id=j.id
                                 JOIN awards a ON c.mukofot_id=a.id
                                 WHERE c.passport LIKE '%$pass%'" )
            ->fetchAll(PDO::FETCH_ASSOC);
    }elseif ($email !== ""){
        $citizen = $db->query("SELECT c.*, k.nomi as kasbi, j.nomi as jinoyati, a.nomi as mukofoti FROM citizen1 c
                                 JOIN kasbi k ON c.kasb_id=k.id
                                 JOIN jinoyati j ON c.jinoyat_id=j.id
                                 JOIN awards a ON c.mukofot_id=a.id
                                 WHERE c.email LIKE '%$email%'" )
            ->fetchAll(PDO::FETCH_ASSOC);
    }elseif ($pass !== ""){
        $citizen = $db->query("SELECT c.*, k.nomi as kasbi, j.nomi as jinoyati, a.nomi as mukofoti FROM citizen1 c
                                 JOIN kasbi k ON c.kasb_id=k.id
                                 JOIN jinoyati j ON c.jinoyat_id=j.id
                                 JOIN awards a ON c.mukofot_id=a.id
                                 WHERE c.passport LIKE '%$pass%'" )
            ->fetchAll(PDO::FETCH_ASSOC);
    }
    // elseif ($kasbi !== ""){
    //     $citizen = $db->query("SELECT c.*, k.nomi as kasbi, j.nomi as jinoyati, a.nomi as mukofoti FROM citizen1 c
    //                              JOIN kasbi k ON c.kasb_id=k.id
    //                              JOIN jinoyati j ON c.jinoyat_id=j.id
    //                              JOIN awards a ON c.mukofot_id=a.id
    //                              WHERE c.kasb_id LIKE '%$kasbi%'" )
    //         ->fetchAll(PDO::FETCH_ASSOC);
    // }
    // elseif ($jinoyati !== ""){
    //     $citizen = $db->query("SELECT c.*, k.nomi as kasbi, j.nomi as jinoyati, a.nomi as mukofoti FROM citizen1 c
    //                              JOIN kasbi k ON c.kasb_id=k.id
    //                              JOIN jinoyati j ON c.jinoyat_id=j.id
    //                              JOIN awards a ON c.mukofot_id=a.id
    //                              WHERE c.jinoyat_id LIKE '%$jinoyati%'" )
    //         ->fetchAll(PDO::FETCH_ASSOC);
    // }
    // elseif ($mukofoti !== ""){
    //     $citizen = $db->query("SELECT c.*, k.nomi as kasbi, j.nomi as jinoyati, a.nomi as mukofoti FROM citizen1 c
    //                              JOIN kasbi k ON c.kasb_id=k.id
    //                              JOIN jinoyati j ON c.jinoyat_id=j.id
    //                              JOIN awards a ON c.mukofot_id=a.id
    //                              WHERE c.mukofot_id LIKE '%$mukofoti%'" )
    //         ->fetchAll(PDO::FETCH_ASSOC);
    // }
}else{
    echo "Wrong!";
}
?>
<!DOCTYPE html>
<html lang="en">
<?php include "blocks/head.php";?>
<script>
    function check(id) {
        if (confirm("O'chirilsinmi?")){
            document.location.href = "citizen_delete.php?id="+id;
        }
    }

    function tahrir(t) {
        document.location.href = "c_update.php?id="+t;
    }
    function checker(word) {
        document.location.href = "common_search.php?id="+word;
    }
</script>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <?php include "blocks/nav.php" ?>
<!--            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">-->
<!--                <a class="navbar-brand" href="index.php">Mahalla</a>-->
<!--                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
<!--                    <span class="navbar-toggler-icon"></span>-->
<!--                </button>-->
<!---->
<!--                <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--                    <ul class="navbar-nav mr-auto">-->
<!--                        <li class="nav-item active">-->
<!--                            <a class="nav-link" href="index.php">Bosh sahifa <span class="sr-only">(current)</span></a>-->
<!--                        </li>-->
<!--                    </ul>-->
<!--                    <form class="form-inline my-2 my-lg-0">-->
<!--                        <input class="form-control mr-sm-2" type="search" placeholder="So'rovni kiriting" aria-label="Search" name="sorov" id="sorov">-->
<!--                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit" onclick="checker(--><?//= $_POST["sorov"]; ?></button>
<!--//                    </form>-->
<!--//                </div>-->
<!--//            </nav>-->
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <?php include "blocks/left.php"; ?>
        </div>
        <div class="col-md-10">
            <h3>Fuqarolarni boshqarish</h3>

            <div>
                <form action="citizen.php" method="post">
                    <table class="table">
                        <tr class="container">
                            <td><label for="ism">Ismi</label></td>
                            <td><input type="text" name="ism" id="ism"></td>
                            <td><p style="color: red">*ismi orqali qidirish</p></td>
                        </tr>
                        <tr>
                            <td><label for="familiya">Familiyasi</label></td>
                            <td><input type="text" name="familiya" id="familiya"></td>
                            <td><p style="color: red">*Familiya orqali qidirish</p></td>
                        </tr>
                        <tr>
                            <td><label for="tug_sana">Tugilgan sanasi</label></td>
                            <td><input type="text" name="tug_sana" id="tug_sana"></td>
                            <td><p style="color: red">*Tugilgan sanasi orqali qidirish</p></td>
                        </tr>

                        <tr>
                            <td><label for="Pass_seriya">Passport seriyasi</label></td>
                            <td><input type="text" name="Pass_seriya" id="Pass_seriya"></td>
                            <td><p style="color: red">*Passport seriyasi orqali qidirish</p></td>
                        </tr>
                        <tr>
                        <td><label for="email">Email</label></td>
                        <td><input type="text" name="email" id="email"></td>
                        <td><p style="color: red">*Email orqali qidirish</p></td>
                        </tr>
                        <tr>
                        <!-- <td><label for="kasbi">Kasbi</label></td>
                        <td><input type="text" name="kasbi" id="kasbi"></td>
                        <td><p style="color: red">*Kasbi orqali qidirish</p></td>
                        </tr>
                        <tr>
                        <td><label for="jinoyati">Jinoyati</label></td>
                        <td><input type="text" name="jinoyati" id="jinoyati"></td>
                        <td><p style="color: red">*Jinoyati orqali qidirish</p></td>
                        </tr>
                        <tr>
                        <td><label for="mukofot">Mukofoti</label></td>
                        <td><input type="text" name="mukofot" id="mukofot"></td>
                        <td><p style="color: red">*Mukofoti orqali qidirish</p></td>
                        </tr> -->


                        <tr>
                            <td colspan="2"><input type="submit" value="Ko'rish"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <p class="text-right">
                <a class="nav-link" href="citizen_add.php">
                    <button class="button"> Qoshish</button>
                </a>
            </p>
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
                    <th scope="col">JInoyati</th>
                    <th scope="col">Mukofoti</th>
                    <th scope="col">Amallar</th>
                </tr>
                </thead>

                <?php foreach ($citizen as $citizen1): ?>
                <tr>
                    <td><?= $citizen1["id"]; ?></td>
                    <td><?= $citizen1["nomi"]; ?></td>
                    <td><?= $citizen1["surname"]; ?></td>
                    <td><?= $citizen1["born_year"]; ?></td>
                    <td><?= $citizen1["passport"]; ?></td>
                    <td><?= $citizen1["email"]; ?></td>
                    <td><?= $citizen1["kasbi"]; ?></td>
                    <td><?= $citizen1["jinoyati"]; ?></td>
                    <td><?= $citizen1["mukofoti"]; ?></td>
                    <td>
                        <button class="btn edit btn-info" onclick="tahrir(<?= $citizen1["id"]; ?>)">/</button>
                        <button class="btn cancel btn-default" onclick="check( <?= $citizen1["id"]; ?>)">X</button>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php function check($ism){
                    echo $ism . " ismli foydalanuvchi yoq";
                } ?>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>