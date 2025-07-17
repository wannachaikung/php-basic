<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">PHP Check Grade A-E from Score</h1>
        <hr>

    <p class="text-center">กรุณากรอกคะแนนเพื่อทำการตรวจสอบว่าได้เกรดอะไร</p>
    
    <form method="post" class="text-center">
        <div class="mb-3">
            <input type="number" name="score" id="score"
            value="<?php echo isset($_POST['score']) ? $_POST['score']:''; ?>" 
            placeholder="Enter your score 1-100" class="form-control w-50 mx-auto">
        </div>
        <button type="submit" class="btn btn-primary mt-3 mb-3">Check Grade</button>
        <button type="button" class="btn btn-secondary mt-3 mb-3" onclick="clearGrade()" >Reset</button>
       
    </form>
    <hr>
    
    <div id="grade" class="text-center">
        <?php
        $get_score = $_POST['score'] ?? null;
        if($get_score >= 80){
                    echo "<h3 class='text-success text-center'>Your grade is A</h3>";
                }else if($get_score >= 70){
                    echo "<h3 class='text-success text-center'>Your grade is B</h3>";
                }else if($get_score >= 60){
                    echo "<h3 class='text-success text-center'>Your grade is C</h3>";
                }else if($get_score >= 50){
                    echo "<h3 class='text-success text-center'>Your grade is D</h3>";
                }else {
                    echo "<h3 class='text-danger text-center'>Your grade is E</h3>";
                }
        ?>
    </div> 
    <p><a href="index.php">Home</a></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // ฟังก์ชันสำหรับล้างผลลัพธ์เกรดและช่องกรอกคะแนน
        function clearGrade() {
            document.getElementById('grade').innerHTML = '';
            document.getElementById('score').value = '';
        }  
    </script>
</body>
</html>