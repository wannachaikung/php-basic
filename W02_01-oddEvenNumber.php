<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd Even Number</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Odd or Even Number Checker</h1>
        <hr>
        <p class="text-center">กรุณากรอกตัวเลขเพื่อทำการตรวจสอบตัวเลขว่าเป็นเลขคู่เลขคี่</p>
        <form method="post" class="text-center">
            <div>
                <input type="number" name="number"id="number" placeholder="Enter a number" class="form-control w-50 mx-auto mb-3">
                <button type="submit" class="btn btn-primary mt-3 mb-3">Check</button>
            </div>
        </form>
        <hr>
        
        <?php
    $get_number = $_POST['number'] ?? null;
    if ($get_number % 2 == 0) {
        echo "<h3 class='text-success text-center'>The number $get_number is an even number</h3>";
    }
    else {
        echo "<h3 class='text-danger text-center'>The number $get_number an odd number</h3>"; 
    }
    ?>
    <p><a href="index.php">Home</p>
</div>
    <hr>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>