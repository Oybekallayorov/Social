<?php
$db = new PDO("mysql:host=localhost;dbname=social","root","");
$citizen = $db->query("SELECT c.*, k.nomi as kasbi FROM citizen1 c
                                LEFT JOIN kasbi k ON c.kasb_id=k.id")
              ->fetchAll(PDO::FETCH_ASSOC);

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
                <form action="foydalanuvchilar1.php" method="post">
                    <table>
                        <tr>
                            <td><label for="ism">ismi</label></td>
                            <td><input type="text" name="ism" id="ism"></td>
                        </tr>

                        <tr>
                            <td><label for="Pass_seriya">Passport seriyasi</label></td>
                            <td><input type="text" name="Pass_seriya" id="Pass_seriya"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" value="Korish"></td>
                        </tr>
                    </table>
                </form>
            </div>
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
                        <td><?=$citizen1["id"];?></td>
                        <td><?=$citizen1["nomi"];?></td>
                        <td><?=$citizen1["surname"];?></td>
                        <td><?=$citizen1["born_year"];?></td>
                        <td><?=$citizen1["passport"];?></td>
                        <td><?=$citizen1["email"];?></td>
                        <td><?=$citizen1["kasbi"];?></td>
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