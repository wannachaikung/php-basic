<?php
 require_once 'W07_01_connectDB.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop For Show Product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    
    <!-- DataTable CSS -->
    <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">
    <style>
        .container{
            max-width: 800px;
        }
    </style>
</head>
<body>


    <?php
    $sql = "SELECT * FROM products";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC); 


    ?>  
    <div class="container mt-5">
        <h1>Product List</h1>
        <form method="post" class="mb-3">
            <div>
                <input type="number" name="price" placeholder="Enter Price" class="form-control mb-2">
                <button tyle="submit" class="btn btn-primary">Filter</button>
            </div>
        </form>
        <table id="productTable" class="table table-bordered table-striped ">
            <thead>
                    <tr>

                        <th>#</th>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                    </tr>
                
            </thead>
            <tbody>
                <?php

                //check if form is submitted
                if (isset($_POST['price']) && !empty($_POST['price'])){
                    $filterPrice = $_POST['price'];
                    $filterProducts = array_filter($products,function($product) use ($filterPrice){ return $product['price'] == $filterPrice;});
                
                    //คืนค่า array ใหม่โดยรีเช็ค index ให้เริ่มที่ 0
                $filterProducts = array_values($filterProducts);
                
                }else{
                    $filterProducts = $data;
                }

                foreach ($filterProducts as $index=> $product){
                //echo $product['id']. " สินค้า: " . $product['name'] .  " ราคา: " . $product['price'] . "บาท , จำนวน: " . $product['quantity'] . "ชิ้น" ."<br>";
                echo "<tr>";    
                echo "<td>".$index+1 ."</td>";    
                echo "<td>".$product['product_id']."</td>";    
                echo "<td>".$product['product_name']."</td>";    
                echo "<td>".$product['category']."</td>";    
                echo "<td>".$product['price']."</td>";    
                echo "<td>".$product['stock_quantity']."</td>";    
                echo "</tr>";        
                }
                ?>

            </tbody>
        </table>
    </div>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    
    
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

    <script>
        let table = new DataTable('#productTable');

    </script>
</body>
</html>