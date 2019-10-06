<?php
    include_once 'functions/bd_connection.php';

    $id = $_GET['id'];
    if (!filter_var($id, FILTER_VALIDATE_INT)) {
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
        <?php
            $sql = "SELECT * FROM products WHERE id_Product = $id;";
            $result = $conn->query($sql);
            $product = $result->fetch_assoc();
        ?>
        <div id="top-content" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="big-title"><?php echo $product['nameProduct'] ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="partners" class="container-fluid">
        <div class="row">
            <img src="img/product/<?php echo $product['imgProduct'] ?>" width="341" height="400">
            <div class="row-title">Este producto tarda X años en desaparecer de la tierra.</div>
        </div>
    </div>

    <div id="more-features" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row-title">Como reciclar este producto?</div>
                </div>
            </div>
            <div class="row" style="font-color:black">
                <div class="col-md-6">
                    <div class="mfeature-box">
                        <div class="mfeature-title">Contenedor</div>
                        <div class="mfeature-text bg-color1">Para reciclar este producto debe ser depositado en el contenedor amarillo. <br><br> <img src="https://img.icons8.com/windows/32/000000/recycling.png"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mfeature-box">
                        <div class="mfeature-title">Sabías que...</div>
                        <div class="mfeature-text bg-color2">Con 80 latas de aluminio recicladas se puede fabricar una llanta para bicicleta. <br><br>80 x <img src="https://img.icons8.com/windows/32/000000/beer-can.png"> = <img src="https://img.icons8.com/windows/32/000000/wheel.png">
                        </div>
                        
                    </div>
                </div>
                <!--
                <div class="col-md-4">
                    <div class="mfeature-box">
                        <div class="mfeature-title">Contacto</div>
                        <div class="mfeature-text bg-color3">Para más info de como reciclar este producto puedes ponerte en contacto con tu ayuntamiento.</div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <div id="pricing" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row-title">Más información</div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="pricing-box">
                        <div class="pricing-content">
                            <div class="pricing-title">Este producto está hecho de aluminio.</div>
                            <div class="pricing-price">41 ALU</div>

                        </div>
                        <div class="pricing-link">
                            <a class="order-link" href="index.php">Buscar otro producto <i class="sphst sphst-arrow-down"></i></a>
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
