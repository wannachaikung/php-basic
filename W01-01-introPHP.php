<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intro</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>

<h1>Introduction to PHP</h1>
<hr>

<h1 style="color: red;">Basic PHP Syntax</h1>
    
    <pre>
        &lt;?php
        echo "Hello, World!";
        ?&gt;
    </pre>

    <h2>Result</h2>
<div style =color:blue>
    <?php 
        echo " Hello, World! <br>";
        print "<span style ='color:green;'> Wannachai Chouegthong </span>";
    ?>
</div>
<hr>
<h1 style="color: red;">PHP Varible</h1>
   
    <pre>
        &lt;?php
        $greeting = "Hello, World!";
        echo <span style =color:blue>.$greeting.</span>;
        ?&gt;
    </pre>
   
<h2>Result</h2>
<div style =color:blue>
    <?php 
        echo " Hello, World! <br>";
        print "<span style ='color:green;'> Wannachai Chouegthong </span>";
    ?>
</div>
<hr>
<h1 style =color:red>แบบฝึกหัด</h1>
<hr>
<h2>Integer Varible Example</h2>
    <?php
    $age = 21;
    echo "<span style =color:blue> I am " . $age . " year old <br></span>";
    echo "<span style =color:blue> I am " , $age , " year old </span>";
    
    ?>
<hr>
<h2>Calculator with Varibles</h2>
    <?php
    $num1 = 5;
    $num2 = 4;
    $sum = $num1 + $num2;
    echo "<span style =color:blue> The sum of " . $num1 . " and " . $num2 . " is " . $sum . "</span>";
    ?>
<hr>
<h2>คำนวณพื้นที่สามเหลี่ยม</h2>
    <?php
    $base =10;
    $height = 5;
    $area = 0.5 * $base * $height;
    echo "<span style =color:blue> พื้นที่ของสามเหลี่ยมคือ " . $area . " ตารางหน่วย </span>";
    ?>
<hr>
<h2>คำนวณอายุจากปีเกิด</h2>
    <?php
    $thisyear = 2025;
    $birthyear = 2004;
    $age = $thisyear - $birthyear; 
    echo "<span style =color:blue> อายุของคุณคือ " . $age . " ปี </span>";
    ?>
<hr>
<h1 style="color: blue;"> เงื่อนไข (if/else)</h1>
<!-- เกณฑ์ผ่านการสอบ ต้องได้คะแนน มากกว่า 60 คะแนน -->
    <h2>คำนวณคะแนนสอบ</h2>
    <?php

    $score = 75;
    echo "คะแนนของคุณคือ $score <br>";
    if ($score > 60) {
        echo "ผลลัพธ์ : คุณผ่านการสอบ";
    } else {
        echo "ผลลัพธ์ : คุณไม่ผ่านการสอบ ";

    }

    ?>
    <hr>
<h1 style="color: blue;">Boolean Variable</h1>
<!-- ตรวจสอบว่าเป็น นศ. หรือไม่ -->
    <?php
    echo "<h3>คุณเป็นนักศึกษาใช่หรือไม่?</h3>";
    $is_student = true; 
    if(!$is_student){
        echo "ใช่ ";
    }
    
    else{
        echo "ไม่ใช่ ";

    }
    ?>
    <hr>
<h1 style="color: blue;">Loop</h1>
    <h2>========Loop for=========</h2>
    <h3>แสดงตัวเลข 1 ถึง 10</h3>
    <?php
        $sum = 0;
        for($i=5;$i<=9;$i++) {
            $sum+=$i; 
            if($i < 9) {
                echo "$i+";
            } else {
                echo "$i = $sum";
            }
        }
        


    ?>
<hr>
<h1 style="color: blue;">Loop while</h1>
<h2>======สูตรคูณแม่ 2======</h2>
    
    <?php
    $j = 1; //ค่าเริ่มต้น
    while ($j<=12) {//เงื่อนไข
        echo "2 x $j = " . (2 * $j) . "<br>"; //แสดงผล
        $j++;//เพิ่มลดค่า

    }
    ?>
    <hr>
    <h2>======สูตรคูณแม่ 5======</h2>
    <table class="table table-bordered table-striped w-auto mx-auto text-center ">
        <thead class="table-dark">
            <tr> 
                <th>ลำดับ</th>
                <th>สูตรคูณ</th>
                <th>ผลลัพธ์</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for($i = 1; $i <= 12; $i++) {
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>5 x $i</td>";
                echo "<td>".(5 * $i)."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <!-- ======================================================== -->
    <!-- ======================================================== -->
    <!-- ======================================================== -->
    <!-- ======================================================== -->
 
    <hr>
    <h2>สร้างตัวแปรอาเรย์ แบบที่ 1: Indexed Array</h2>
    <h5>PHP จะกำหนด index เป็นตัวเลขอัตโนมัติ โดยเริ่มจาก 0</h5>
    <hr>    
    <?php
    $fruits = ["bannana","apple","mango"];
    ?>
     <h3>แสดงรายการผลไม้ โดยใช้ index</h3>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
     <?php
     echo $fruits[0]."<br>";
     echo $fruits[1]."<br>";
     echo $fruits[2]."<br>";
     ?>
    </div>
&nbsp;
     <div style="color:red; background-color: lightgray; padding:10px;">
     <?php
     echo "รายหารผลไม้ <br>";
     echo "ผลไม้ลูกที่ 1: ".$fruits[0]."<br>";
     echo "ผลไม้ลูกที่ 2: ".$fruits[1]."<br>";
     ?>
     </div>
&nbsp;
        <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ โดยใช้ print readable</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            echo "รายการผลไม้: <br>";
            print_r($fruits); // แสดงผลอาเรย์ทั้งหมด  print readable
            echo "<br>";

        ?>
    </div>

    <br>
    <h4>แสดงจำนวนสมาชิกในอาเรย์</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            echo "จำนวนผลไม้:" .count($fruits). "<br>";
            echo "<br>";

        ?>
    </div>
        
    <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ โดยใช้ implode เพื่อแปลงอาเรย์เป็นสตริง</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            // แสดงรายการผลไม้และจำนวนสมาชิกในอาเรย์
            // ใช้ implode เพื่อแปลงอาเรย์เป็นสตริง และแสดงผลลัพธ์
            echo "รายการผลไม้: " . implode(", ", $fruits) . "<br>"; // ผลลัพธ์: Apple, Banana, Cherry
            echo "<br>";
        ?>
    </div>
     
     <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ ใช้คำสั่ง foreach เพื่อวนลูป</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            // ใช้คำสั่ง foreach เพื่อวนลูปค่าใน array ทีละตัว โดยในแต่ละรอบ ตัวแปร $fruit จะเก็บค่าผลไม้ 1 ชนิด
            foreach ($fruits as $fruit){
            echo "ผลไม้:".$fruit." <br>";
            }

            foreach ($fruits as $fruit){
                if($fruit !== end($fruits)){
                    echo "$fruit,";
                }else{
                    echo "$fruit,";
                }
            }
        ?>
    </div> 
    <!-- ======================================================== -->
    <!-- ======================================================== -->
    <hr>
    <h2>สร้างตัวแปรอาเรย์ แบบที่ 2: Associative Array</h2>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <h6>เป็น array ซ้อนกันหลายชุด (Multidimensional array)</h6>
        <h6>แต่ละชุดเป็น associative array ที่ระบุชื่อ key ชัดเจน เช่น "name" และ "price"</h6>
        <h6>ใช้สำหรับเก็บข้อมูลที่มีความสัมพันธ์กัน key => value เช่น รายการสินค้า</h6>


        <?php
            // สร้างอาเรย์ของผลไม้ที่มีชื่อและราคา
            $products = [
                ["name" => "Apple", "price" => 30],
                ["name" => "Banana", "price" => 20],
                ["name" => "Cherry", "price" => 15]
            ];

        ?>
    </div>
        <!-- ======================================================== -->
    <br>
    <h4>แสดงรายการผลไม้ ใช้คำสั่ง key value</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            // แสดงผลลัพธ์ของการเข้าถึงข้อมูลในอาเรย์
            echo $products[0]["name"] . "<br>";  // Apple
            echo $products[2]["price"] . "<br>"; // 15

            
        ?>
    </div>
       <h4>แสดงรายกาสินค้า ใช้คำสั่ง foreach เพื่อวนลูป</h4>
    <div style="color:blue; background-color: lightgray; padding: 10px;">
        <?php
            foreach ($products as $product){
            echo "สินค้า:" .$product['name'] ." ราคา:".$product['price']." บาท" ."<br>";
                
            }
            echo"<br>";
            $total = 0;
            foreach ($products as $product) {
                $total += $product['price'];
            }
            echo "ราคารวมของสินค้าทั้งหมด: $total บาท<br>";
            
        ?>      
</div>
    <br>
   <p><a href="index.php">Home</p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
