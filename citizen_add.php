<?php
$db = new PDO("mysql:host=localhost;dbname=social","root","");
if($_POST){
    $res = $db->prepare("INSERT INTO citizen1(nomi,surname,born_year,passport,email,kasb_id,jinoyat_id,mukofot_id)VALUES(?,?,?,?,?,?,?,?)")
              ->execute(array($_POST["ism"],$_POST["familiya"],$_POST["tug_sana"],$_POST["pass_seriya"],$_POST["email"],$_POST["kasb_id"],$_POST["jinoyat_id"],$_POST["mukofot_id"]));
    if ($res !== false){
        header("Location: citizen.php");
    }else{
        var_export($db->errorInfo());
    }
}

$kasbi = $db->query("SELECT * FROM kasbi")->fetchAll(PDO::FETCH_ASSOC);
$jinoyati = $db->query("SELECT * FROM jinoyati")->fetchAll(PDO::FETCH_ASSOC);
$mukofoti = $db->query("SELECT * FROM awards")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<?php include "blocks/head.php";?>
<style>
    input{
        margin: 10px auto;
    }
    table{
        width: 70%;
        border: 1px;
    }
    tr{
        align-content-center;
        margin: 30px auto;
    }
</style>
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
            <h3 class="klass">Fuqaro qoshish</h3>
            <form action="citizen_add.php" method="post">
                <table class="table-hover col-lg-7" >
                    <tr>
                        <td>Ism</td>
                        <td><input type="text" name="ism" placeholder="Ismi"/></td>
                    </tr>
                    <tr>
                        <td>Familiya</td>
                        <td><input type="text" name="familiya" placeholder="Familiyasi"/></td>
                    </tr>
                    <tr>
                        <td>Tugilgan sana</td>
                        <td><input type="date" name="tug_sana"/></td>
                    </tr>
                    <tr>
                        <td>Passport Seriyasi</td>
                        <td><input type="text" name="pass_seriya" placeholder="Passport seriyasi"/></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="e-mail" name="email" placeholder="Emaili"/></td>
                    </tr>
                    <tr>
                        <td>Kasbi</td>
                        <td>
                            <select name="kasb_id">
                                <?php foreach ($kasbi as $kasb): ?>
                                    <option value="<?=$kasb["id"]?>"><?=$kasb["nomi"];?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jinoyati</td>
                        <td>
                            <select name="jinoyat_id">
                                <?php foreach ($jinoyati as $jinoyat): ?>
                                    <option value="<?=$jinoyat["id"]?>"><?=$jinoyat["nomi"];?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Mukofoti</td>
                        <td>
                            <select name="mukofot_id">
                                <?php foreach ($mukofoti as $mukofot): ?>
                                    <option value="<?=$mukofot["id"]?>"><?=$mukofot["nomi"];?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Saqlash">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>