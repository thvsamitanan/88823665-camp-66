<?php
$number = 2; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางสูตรคูณแม่ <?php echo $number; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: #FFF0F5;">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="text-center">
            <h1 class="mb-4"><B>ตารางสูตรคูณแม่ <?php echo $number; ?></B></h1>
            <table class="table table-bordered table-striped text-center">
                <thead class="table-bule">
                    <tr>
                        <th><B>สูตรคูณ</B></th>
                        <th><B>ผลลัพธ์</B></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 1; $i <= 12; $i++) {
                        $result = $number * $i;
                        echo "<tr>";
                        echo "<td>$number x $i</td>";
                        echo "<td>$result</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>