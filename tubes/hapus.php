<?php
require "function.php";

$id = $_GET["id"];

if(hapus($id) > 0 ){
    echo "<script>
                alert('Product Deleted Succsessfully')       
                document.location.href = 'shop.php';
            </script>";
}
?>