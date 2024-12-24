<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตารางสูตรคูณ</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        table {
            margin-top: 20px;
            border-collapse: collapse;
            width: 50%;
        }
        th,td {
            padding: 10px;
            text-align: center;
            border: 1px solid #000;
        }
        .form-container {
            margin-bottom: 30px;
            text-align: center;
        }
        h1 {
            margin-bottom: 10px;
        }
    </style>
</head>
<body bgcolor="#CCFFFF">

    <div class="form-container">
        <form method="post" action="">
            <label for="number">กรอกแม่สูตรคูณ:</label>
            <input type="number" id="number" name="number" required>
            <button type="submit">แสดงแม่สูตรคูณ</button>
        </form>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST['number']);

        echo "<h1>ตารางสูตรคูณแม่ $number</h1>";
        echo "<table>";
        for ($i = 1; $i <= 12; $i++) {
            $result = $number * $i;
            echo "<tr><td>$number x $i</td><td>$result</td></tr>";
        }
        echo "</table>";
    }
    ?>

</body>
</html>
