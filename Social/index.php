<!DOCTYPE html>
<html lang="en">
<?php include "blocks/head.php";?>
<style>
    .klass1{
        margin: 10px auto;
    }
    img{
        height: 100px;
        width: 200px;
    }
    .klass{
        height: 500px;
        width: 900px;
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
                <div class="site-index">
                    <p class="klass1" align="right"><a class="btn btn-lg btn-success" href="login.php">Kirish</a></p>
                    <div class="jumbotron">
                        <h1 align="center">Mahalla fuqarolar yig'inini avtomatlashtirish dasturiga xush kelibsiz!</h1>
                        <img src="images/maps/uzb1.jpg" alt=""class="klass" >
                        <br><br>
                        <p align="center"><a class="btn btn-lg btn-success" href="https://www.google.com/maps/place/Uzbekistan/@41.6243483,58.3104094,5z/data=!4m5!3m4!1s0x38ae8b20a5d676b1:0xca0a6dad7e841e20!8m2!3d41.377491!4d64.585262">Uzbekistan more</a></p>
                    </div>

                    <div class="body-content">

                        <div class="row">
                            <div class="col-lg-4">
                                <h2>Xorazm</h2>
                                <img src="images/maps/Xorazm.jpg" alt="">
                                <br><br>
                                <p><a class="btn btn-lg btn-success" href="https://www.istockphoto.com/vector/xorazm-map-of-uzbekistan-grey-illustration-shape-gm956814102-261253847">Xorazm more &raquo;</a></p>
                            </div>
                            <div class="col-lg-4">
                                <h2>Toshkent</h2>
                                <img src="images/maps/toshkent.jpg" alt="">
                                <br><br>
                                <p><a class="btn btn-lg btn-success" href="https://www.google.com/search?rlz=1C1GGRV_enUZ912UZ912&sxsrf=ALeKk008_PqeX9afDoo4JUGDIMT70pLJJg:1596818933078&source=univ&tbm=isch&q=toshkent+xaritasi&sa=X&ved=2ahUKEwiv6ZqKxonrAhXDk4sKHTk8COwQ7Al6BAgBECM&biw=1366&bih=608#imgrc=oPlsk4l_4OOk9M">Toshkent more &raquo;</a></p>
                            </div>
                            <div class="col-lg-4">
                                <h2>Samarqand</h2>
                                <img src="images/maps/samarqand.jpg" alt="">
                                <br><br>
                                <p><a class="btn btn-lg btn-success" href="https://www.google.com/search?q=samarqand+xaritasi&rlz=1C1GGRV_enUZ912UZ912&sxsrf=ALeKk00yc7lKeMtabJpxVJbpLFpBAEdH-A:1596818662152&tbm=isch&source=iu&ictx=1&fir=d_-x3PZrZuFXqM%252Cxmo1vbcwHElZrM%252C_&vet=1&usg=AI4_-kQpePj0tn-dxecE80bbBK-lMvgAJg&sa=X&ved=2ahUKEwi69YKJxYnrAhWQtIsKHY7kBrwQ9QEwBnoECAoQKA&biw=1366&bih=608#imgrc=d_-x3PZrZuFXqM">Samarqand more &raquo;</a></p>
                            </div>

                            <div class="col-lg-4">
                                <h2>Buxoro</h2>
                                <img src="images/maps/buxoro.jpg" alt="">
                                <br><br>
                                <p><a class="btn btn-lg btn-success" href="https://www.google.com/search?rlz=1C1GGRV_enUZ912UZ912&sxsrf=ALeKk03yvWeILl01Lv9NbNDMOsXSYstyFA:1596819131380&source=univ&tbm=isch&q=buxoro+xaritasi&sa=X&ved=2ahUKEwiBmeLoxonrAhVw_CoKHTgVB60Q7Al6BAgKEDc&biw=1366&bih=608">Buxoro more &raquo;</a></p>
                            </div>
                            <div class="col-lg-4">
                                <h2>Navoiy</h2>
                                <img src="images/maps/Navoiy.jpg" alt="">
                                <br><br>
                                <p><a class="btn btn-lg btn-success" href="https://www.google.com/search?q=navoiy+viloyati+xaritasi&tbm=isch&ved=2ahUKEwiRr6uYyInrAhUnHJoKHV59BKkQ2-cCegQIABAA&oq=navoiy+viloyati+xaritasi&gs_lcp=CgNpbWcQAzIGCAAQBxAeMgQIABAeUK2vBlj20AZg0tkGaABwAHgAgAGMBIgBhBaSAQswLjMuMi4wLjMuMZgBAKABAaoBC2d3cy13aXotaW1nwAEB&sclient=img&ei=K4gtX9HtIqe46ATe-pHICg&bih=608&biw=1366&rlz=1C1GGRV_enUZ912UZ912">Navoiy more &raquo;</a></p>
                            </div>
                            <div class="col-lg-4">
                                <h2>Surxandaryo</h2>
                                <img src="images/maps/surxondaryo.jpg" alt="">
                                <br><br>
                                <p><a class="btn btn-lg btn-success" href="https://www.google.com/search?rlz=1C1GGRV_enUZ912UZ912&sxsrf=ALeKk01QrJZsnnqbg4EeIZS3nV1E9zY-Qw:1596819741132&source=univ&tbm=isch&q=surxondaryo+xaritasi&sa=X&ved=2ahUKEwiN18KLyYnrAhU5i8MKHQBtD4UQ7Al6BAgKEDk&biw=1366&bih=608">Surxandaryo more &raquo;</a></p>
                            </div>
                            <div class="col-lg-4">
                                <h2>Qashqadaryo</h2>
                                <img src="images/maps/qashqadaryo.jpg" alt="">
                                <br><br>
                                <p><a class="btn btn-lg btn-success" href="https://www.google.com/search?q=qashqadaryo+xaritasi&tbm=isch&ved=2ahUKEwja8teOyYnrAhWt2aYKHSCwCoAQ2-cCegQIABAA&oq=qashqadaryo+xaritasi&gs_lcp=CgNpbWcQAzIGCAAQBxAeMgYIABAHEB4yBAgAEB4yBAgAEB5Q2roEWIvoBGCm7ARoAHAAeACAAYMDiAGSFpIBBzAuNS4zLjSYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=I4ktX5rVLq2zmwWg4KqACA&bih=608&biw=1366&rlz=1C1GGRV_enUZ912UZ912">Qashqadaryo more &raquo;</a></p>
                            </div>
                            <div class="col-lg-4">
                                <h2>Andijon</h2>
                                <img src="images/maps/andijon.jpg" alt="">
                                <br><br>
                                <p><a class="btn btn-lg btn-success" href="https://www.google.com/search?q=andijon+xaritasi&tbm=isch&ved=2ahUKEwitpP-1yYnrAhUtxMQBHX7pCw0Q2-cCegQIABAA&oq=andijon+xaritasi&gs_lcp=CgNpbWcQAzIGCAAQBxAeMgYIABAHEB4yBggAEAcQHjIECAAQHlCCygNYi-wDYNf0A2gAcAB4AIAB8QGIAfYLkgEFMC41LjOYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=doktX62RDK2Ik74P_tKvaA&bih=608&biw=1366&rlz=1C1GGRV_enUZ912UZ912">Andijon more &raquo;</a></p>
                            </div>
                            <div class="col-lg-4">
                                <h2>Fargona</h2>
                                <img src="images/maps/fargona.jpg" alt="">
                                <br><br>
                                <p><a class="btn btn-lg btn-success" href="https://www.google.com/search?q=fargona+xaritasi&tbm=isch&ved=2ahUKEwiY4onWyYnrAhWIIZoKHU2eBuwQ2-cCegQIABAA&oq=fargona+xaritasi&gs_lcp=CgNpbWcQAzIGCAAQBxAeOggIABAIEAcQHlC7xgJYpt8CYJTmAmgAcAB4AIAB0QKIAboMkgEHMC40LjMuMZgBAKABAaoBC2d3cy13aXotaW1nwAEB&sclient=img&ei=uYktX9ihHYjD6ATNvJrgDg&bih=608&biw=1366&rlz=1C1GGRV_enUZ912UZ912">Fargona more &raquo;</a></p>
                            </div>
                            <div class="col-lg-4">
                                <h2>Namangan</h2>

                                <img src="images/maps/Namangan.jpg" alt="">
                                <br><br>
                                <p><a class="btn btn-lg btn-success" href="http://namangan.uz/images/harita.jpg">Namangan more &raquo;</a></p>
                            </div>
                            <div class="col-lg-4">
                                <h2>Qoraqalpog'iston</h2>
                                <img src="images/maps/nukus.png" alt="">
                                <br><br>
                                <p><a class="btn btn-lg btn-success" href="https://www.google.com/search?q=qoraqalpogiston+xaritasi&tbm=isch&ved=2ahUKEwj2jLPtyYnrAhWFaZoKHcg6A3sQ2-cCegQIABAA&oq=qoraqalpogiston+xaritasi&gs_lcp=CgNpbWcQAzoGCAAQBxAeUNv5BljL1wdg9N8HaABwAHgAgAHVAYgB3hSSAQYwLjE1LjGYAQCgAQGqAQtnd3Mtd2l6LWltZ8ABAQ&sclient=img&ei=6oktX_bvF4XT6QTI9YzYBw&bih=608&biw=1366&rlz=1C1GGRV_enUZ912UZ912">Qoraqalpog'iston more &raquo;</a></p>
                            </div>
                            <div class="col-lg-4">
                                <h2>Sirdaryo</h2>
                                <img src="images/maps/sirdaryo.jpg" alt="">
                                <br><br>
                                <p><a class="btn btn-lg btn-success" href="https://www.google.com/search?q=Sirdaryo+viloyati+xaritasi&tbm=isch&ved=2ahUKEwiHgMKZy4nrAhVJwKYKHd6FAIAQ2-cCegQIABAA&oq=Sirdaryo+viloyati+xaritasi&gs_lcp=CgNpbWcQAzIECAAQHjoGCAAQBxAeUI2jAViavwFgjMsBaABwAHgAgAH3AogB3hGSAQcwLjIuNi4xmAEAoAEBqgELZ3dzLXdpei1pbWfAAQE&sclient=img&ei=U4stX8eKFcmAmwXei4KACA&bih=608&biw=1366&rlz=1C1GGRV_enUZ912UZ912">Sirdaryo more &raquo;</a></p>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="container-fluid">
                        <?php include "blocks/footer.php";?>
                </div>

            </div>
        </div>
    </div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>