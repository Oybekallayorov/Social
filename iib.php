<?php
$db = new PDO("mysql:host=localhost;dbname=social","root","");

$citizen = $db->query("SELECT c.*, k.nomi as kasbi, j.nomi as jinoyati, a.nomi as mukofoti FROM citizen1 c
                                 JOIN kasbi k ON c.kasb_id=k.id
                                 JOIN jinoyati j ON c.jinoyat_id=j.id
                                 JOIN awards a ON c.mukofot_id=a.id
                                 ORDER BY c.id")
              ->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<?php include "blocks/head.php";?>
<script>
    function check(id) {
        if (confirm("Kechirasiz! O'chirish huququ faqat Adminda bor.")){
            document.location.href = "iib.php?id="+id;
        }
    }
    function tahrir(t) {
        if(confirm("Sizga faqat jinoyat qismini o'zgartirishga ruhsat etiladi."))
        document.location.href = "iib_update.php?id="+t;
    }
</script>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <?php include "blocks/nav.php"?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            <?php include "blocks/left.php";?>
        </div>
        <div class="col-md-10">
            <h3>Ichki ishlar boshqarmasi</h3>
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
                    <th scope="col">Jinoyati</th>
                    <th scope="col">Mukofoti</th>
                    <th scope="col">Amallar</th>
                </tr>
                </thead>
                <?php foreach ($citizen as $citizen1): ?>
                    <tr>
                        <td><?=$citizen1["id"];?></td>
                        <td><?=$citizen1["nomi"];?></td>
                        <td><?=$citizen1["surname"];?></td>
                        <td><?=$citizen1["born_year"];?></td>
                        <td><?=$citizen1["passport"];?></td>
                        <td><?=$citizen1["email"];?></td>
                        <td><?=$citizen1["kasbi"];?></td>
                        <td><?=$citizen1["jinoyati"];?></td>
                        <td><?=$citizen1["mukofoti"];?></td>
                        <td>
                            <button onclick="tahrir(<?=$citizen1["id"];?>)">/</button>
                            <button onclick="check( <?=$citizen1["id"];?>)">X</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>