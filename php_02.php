<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เลขคู่และเลขคี่</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #FFB6C1;">
    <div class="container mt-3">
        <h1 class="text-center mb-3"><B>แสดงตัวเลข 1-100 (เลขคู่/เลขคี่)</B></h1>
        <table class="table table-bordered table-striped text-center">
            <thead class="table-white">
                <tr>
                    <th><B>ตัวเลข</B></th>
                    <th><B>ประเภท</B></th>
                </tr>
            </thead>
            <tbody>
                <?php
                for ($i = 1; $i <= 100; $i++) {
                    $type = ($i % 2 == 0) ? "เลขคู่" : "เลขคี่";
                    echo "<tr>";
                    echo "<td>$i</td>";
                    echo "<td>$type</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
