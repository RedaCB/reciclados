<?php
  if (isset($_POST['check-search'])) {
      $barCode = $_POST['barCode'];

      try {
        include_once 'functions/bd_connection.php';
        $stmt = $conn->prepare("SELECT * FROM products WHERE barCodeEAN = ?;");
        $stmt->bind_param("s", $barCode);
        $stmt->execute();
        $stmt->bind_result($id_Product, $nameProduct, $barCodeEAN, $imgProduct);
        if ($stmt->affected_rows) {
          $exist = $stmt->fetch();
          if ($exist) {
            $response = array(
                'response' => 'exists',
                'idProduct' => $id_Product
              );
          } else {
            $response = array(
              'response' => 'no_exists',
              'barCodeEAN' => $barCode
            );
          }
        }
        $stmt->close();
        $conn->close();
      } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
      }
      
      die(json_encode($response));
  }
?>