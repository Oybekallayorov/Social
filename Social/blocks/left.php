<ul class="nav nav-pills flex-column">
    <li class="nav-item" >
        <a class="nav-link <?php echo (strpos($_SERVER["PHP_SELF"],"citizen.php")) ? "active" : "" ; ?>" href="citizen.php">Citizens</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo (strpos($_SERVER["PHP_SELF"],"iib.php")) ? "active" : "" ; ?>" href="iib.php">IIB</a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php echo (strpos($_SERVER["PHP_SELF"],"foydalanuvchilar.php")) ? "active" : "" ; ?>" href="foydalanuvchilar.php">Foydalanuvchilar</a>
    </li>
</ul>