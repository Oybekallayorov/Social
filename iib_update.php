<?php
$db = new PDO("mysql:host=localhost;dbname=social","root","");
$id = intval($_GET['id']);
$citizen = $db->query("SELECT * FROM citizen1 WHERE id=$id")->fetch(PDO::FETCH_ASSOC);
if($_POST){
    $res = $db->prepare("UPDATE citizen1 SET jinoyat_id=? WHERE id=?")
        ->execute(array($_POST["jinoyat_id"],$id));
    if ($res !== false){
        header("Location: iib.php");
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
        <div class="col-md-2">
            <?php include "blocks/left.php";?>
        </div>
        <div class="col-md-10">
            <h3 class="klass">Fuqaroning qilgan jinoyatiga oydinlik kiritish bo'limi.</h3>
            <form method="post">
                <table class="table-hover col-lg-7" >
                    <tr>
                        <td>Ism</td>
                        <td><input type="text" name="ism" placeholder="Ismi" value="<?=$citizen["nomi"]?>"/></td>
                    </tr>
                    <tr>
                        <td>Familiya</td>
                        <td><input type="text" name="familiya" placeholder="Familiyasi" value="<?=$citizen["surname"]?>"/></td>
                    </tr>
                    <tr>
                        <td>Tugilgan sana</td>
                        <td><input type="date" name="tug_sana" value="<?=$citizen["born_year"]?>"/></td>
                    </tr>
                    <tr>
                        <td>Passport Seriyasi</td>
                        <td><input type="text" name="pass_seriya" placeholder="Passport seriyasi" value="<?=$citizen["passport"]?>"/></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="e-mail" name="email" placeholder="Emaili" value="<?=$citizen["email"]?>"/></td>
                    </tr>
                    <tr>
                        <td>Kasbi</td>
                        <td>
                            <select name="kasb_id">
                                <?php foreach ($kasbi as $kasb): ?>
                                    <option value="<?=$kasb["id"]?>" <?php echo  ($citizen["kasb_id"] == $kasb["id"]) ? "selected" : "" ?>>
                                        <?=$kasb["nomi"];?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jinoyati</td>
                        <td>
                            <select name="jinoyat_id">
                                <?php foreach ($jinoyati as $jinoyat): ?>
                                    <option value="<?=$jinoyat["id"]?>"<?php echo  ($citizen["jinoyat_id"] == $jinoyat["id"]) ? "selected" : "" ?>>
                                        <?=$jinoyat["nomi"];?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Mukofoti</td>
                        <td>
                            <select name="mukofot_id">
                                <?php foreach ($mukofoti as $mukofot): ?>
                                    <option value="<?=$mukofot["id"]?>" <?php echo  ($citizen["mukofot_id"] == $mukofot["id"]) ? "selected" : "" ?>>
                                        <?=$mukofot["nomi"];?>
                                    </option>
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