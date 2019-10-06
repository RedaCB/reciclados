<?php
    header("Content-Type: text/html;charset=utf-8");
    include_once 'functions/bd_connection.php';
    $barCode = $_GET['barCode'];
    if (!filter_var($barCode, FILTER_SANITIZE_NUMBER_INT)) {
      header('Location: index.php');
    }
?>
<!doctype html>
<html>
<head>
    <?php include 'partials/header.php' ?>
</head>

<body>
    <div id="header-holder">
        <div class="bottom-gradiant"></div>
        <nav id="main-nav" class="navbar navbar-default navbar-full">
            <?php include 'partials/navbar.php' ?>
        </nav>
        <div id="top-content" class="container-fluid">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="big-title">Código de barras <?php echo $barCode; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="message-with-link" class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <span class="text">Este producto no se encuentra en nuestra base de datos actualmente.<br>Quieres contribuïr a hacer de este mundo un sitio mejor?</span> 
                <!--<a href="#" class="button-bluegrey">Request a Demo</a><a href="#" class="button-purple">Create free account</a>-->
            </div>
        </div>
    </div>

    <div id="contact" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row-title">Ayúdanos a seguir creciendo y añade un producto.<br>Gracias a tu tiempo ayudarás a otras personas a recilar correctamente.</div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="contact-holder">
                        <div class="row">
                        <!--
                            <div class="col-md-6">
                                <div class="contact-box">
                                    <h4>Get the right support</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus<br>error sit voluptatem accusantium<br>Lorem ipsusm set amir</p>
                                    <a href="#">Visit our support portal</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-box">
                                    <h4>Talk to customer service</h4>
                                    <p>Olim ut perspiciatis unde omnis iste natus<br>error sit voluptatem accusantium<br>Lorem ipsusm set amir</p>
                                    <a href="#">Call us on 38-244-64-23</a>
                                </div>
                            </div> -->
                        </div>
                        <?php
                            $sql = "SELECT * FROM containers;";                            
                            $result = $conn->query($sql);
                        ?>
                        <div class="row">
                            <form enctype="multipart/form-data" id="contactform" method="post" action="mailer.php">
                                <div class="form-items-holder">
                                    <div class="col-sm-12 col-md-6"><input type="text" id="name" name="name" placeholder="Tu nombre..." required=""></div>
                                    <div class="col-sm-12 col-md-6"><input type="email" id="email" name="email" placeholder="Un correo electrónico..." required=""></div>
                                    <div class="col-md-12"><input type="text" id="prod" name="prod" placeholder="Nombre del producto..." required=""></div>
                                    <div class="col-md-12">
                                        <select type="text" id="tipo" name="tipo" placeholder="Tipo de material..." required="">
                                        <option value="0">- Seleccionar Tipo de Material -</option>
                                        <?php
                                        while ($container = $result->fetch_assoc()) { ?>
                                            <option value="<?php echo $container['id_container']; ?>"><?php echo $container['numberContainer'] . ' - ' . $container['acronymContainer'] . ' - '. $container['nameContainer']; ?></option>
                                       <?php } ?>
                                            
                                        </select>
                                    </div>
                                    <div class="col-md-12"><input type="text" id="codi" name="codi" placeholder="Código de material"value="<?php echo $barCode; ?>" required=""></div>
                                    <br>
                                    <div class="col-md-12"><input name="uploadedfile" type="file" placeholder="Seleccionar foto de producto" required></div>
                                    <div class="ajax-button col-md-12">
                                    <input id="submit" type="submit" value="Enviar">
                                    </div>
                                    <div class="col-md-12" id="form-messages"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'partials/navfoot.php' ?>
    <?php include 'partials/footer.php' ?>
</body>
</html>
