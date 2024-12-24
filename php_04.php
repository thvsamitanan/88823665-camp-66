<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงเลขคู่และเลขคี่</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .container {
            text-align: center;
            width: 90%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 10px;
            background-color: #FFFACD;
        }
        form {
            margin-bottom: 30px;
        }
        h3 {
            margin-top: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            padding: 5px 0;
        }
    </style>
</head>
<body bgcolor="#FFFAF0">
    <div class="container">
        <form method="post" action="">
            <h1>แสดงเลขคู่และเลขคี่</h1>
            <label for="start">กรอกค่าเริ่มต้น</label>
            <input type="number" id="start" name="start" required>
            <br><br>
            <label for="end">กรอกค่าสิ้นสุด</label>
            <input type="number" id="end" name="end" required>
            <br><br>
            <button type="submit">แสดงตัวเลข</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $start = intval($_POST['start']);
            $end = intval($_POST['end']);

            echo "<h3>แสดงตัวเลขจาก $start ถึง $end</h3>";
            echo "<ul>";
            for ($i = $start; $i <= $end; $i++) {
                $type = ($i % 2 == 0) ? "เลขคู่" : "เลขคี่";
                echo "<li>$i เป็น $type</li>";
            }
            echo "</ul>";
        }
        ?>
    </div>
</body>
</html>
