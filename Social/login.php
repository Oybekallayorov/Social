<?php
session_start();
$message = null;
if ($_POST){

    $db = new PDO("mysql:host=localhost;dbname=social","root","");
    $login = $_POST['login'];
    $user = $db->query("SELECT * FROM users WHERE login='$login'")->fetch();
    $admin = $db->query("SELECT * FROM administrator WHERE login='$login'")->fetch();
    $iib = $db->query("SELECT * FROM iib_check WHERE login='$login'")->fetch();
    if ($user['parol'] == md5($_POST['password'])){
        $_SESSION["userfio"] = $user["fio"];
        $_SESSION["login"] = 1;
        header("Location: foydalanuvchilar.php");
    }
    if ($iib['parol'] == md5($_POST['password'])){
        $_SESSION["iibfio"] = $user["fio"];
        $_SESSION["login"] = 1;
        header("Location: iib.php");
    }
    elseif ($admin['parol'] == md5($_POST['password'])){
        $_SESSION["adminrfio"] = $user["fio"];
        $_SESSION["login"] = 1;
        header("Location: citizen.php");
    }else{
        $message = "Login yoki parolda xatolik!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tizimga kirish</title>
    <style>
        td{
            padding: 10px;
        }
        form{
            border: 2px solid black;
            width: 270px;
            margin: 250px auto;
        }
        blockquote{
            background: lightcoral;
            border: 2px solid red;
            color: darkred;
        }
    </style>
</head>
<body>
<div>
    <form method="post" action="login.php">
        <?php if($message !== null): ?>
            <blockquote>
                <?php echo $message; ?>
            </blockquote>
        <?php endif; ?>
        <table>
            <tr>
                <td><label for="login">Login</label></td>
                <td><input type="text" name="login" id="login"></td>
            </tr>
            <tr>
                <td><label for="password">Parol</label></td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Kirish">
                </td>
            </tr>
        </table>
    </form>
</div>

</body>
</html>