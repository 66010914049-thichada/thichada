<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>66010914049  ธิชาดา สีทอน - Gemini</title><br>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    /* สไตล์เพิ่มเติมเล็กน้อยเพื่อให้ฟอร์มอยู่ตรงกลางและมีระยะห่าง */
    .container {
        margin-top: 30px;
        max-width: 600px; /* จำกัดความกว้างของฟอร์ม */
    }
    .color-display {
        display: inline-block;
        width: 100px;
        height: 20px;
        border: 1px solid #ccc;
        vertical-align: middle;
    }
    .result-box {
        margin-top: 20px;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
</style>
</head>

<body>
<div class="container">
    <h1 class="text-center mb-4 text-primary">ฟอร์มรับข้อมูล - 66010914049 ธิชาดา สีทอน(น้ำตาล) - Gemini</h1>
    <p class="text-end text-muted">(*) ข้อมูลที่ต้องกรอก</p>
    
    <form method="post" action="" class="p-4 border rounded shadow-sm bg-white">
        
        <div class="mb-3">
            <label for="fullname" class="form-label">ชื่อ-สกุล</label>
            <input type="text" class="form-control" id="fullname" name="fullname" autofocus required>
        </div>
        
        <div class="mb-3">
            <label for="phone" class="form-label">เบอร์โทร *</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>
        
        <div class="mb-3">
            <label for="height" class="form-label">ส่วนสูง (ซม.) *</label>
            <div class="input-group">
                <input type="number" class="form-control" id="height" name="height" min="100" max="200" required>
                <span class="input-group-text">ซม.</span>
            </div>
        </div>
        
        <div class="mb-3">
            <label for="address" class="form-label">ที่อยู่</label>
            <textarea class="form-control" id="address" name="address" rows="3"></textarea>
        </div>
        
        <div class="mb-3">
            <label for="birthday" class="form-label">วันเดือนปีเกิด</label>
            <input type="date" class="form-control" id="birthday" name="birthday">
        </div>
        
        <div class="mb-3">
            <label for="color" class="form-label d-block">สีที่ชอบ</label>
            <input type="color" class="form-control form-control-color" id="color" name="color" value="#563d7c">
        </div>
        
        <div class="mb-4">
            <label for="major" class="form-label">สาขาวิชา</label>
            <select class="form-select" id="major" name="major">
                <option value="การบัญชี">การบัญชี</option>
                <option value="การตลาด">การตลาด</option>
                <option value="การจัดการ">การจัดการ</option>
                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
            </select>
        </div>
        
        <hr>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" name="Submit" class="btn btn-success me-md-2">สมัครสมาชิก</button>
            <button type="reset" class="btn btn-secondary">ยกเลิก</button>
            <button type="button" class="btn btn-info text-white" onClick="window.location='https://www.msu.ac.th/th/%E0%B8%AB%E0%B8%99%E0%B9%89%E0%B8%B2%E0%B9%81%E0%B8%A3%E0%B8%81-n/';">Go to MSU</button>
            <button type="button" class="btn btn-warning text-dark" onMouseOver="alert('อันยอง')">Hello</button>
            <button type="button" class="btn btn-primary" onClick="window.print() ;">พิมพ์</button>
        </div>

    </form>
    
    <hr class="mt-4">

    <?php
    if (isset($_POST['Submit'])) {
        $fullname = htmlspecialchars($_POST['fullname']);
        $phone = htmlspecialchars($_POST['phone']);
        $height = htmlspecialchars($_POST['height']);
        $address = htmlspecialchars($_POST['address']);
        $date = htmlspecialchars($_POST['birthday']);
        $color = htmlspecialchars($_POST['color']);
        $major = htmlspecialchars($_POST['major']);
        
        echo "<div class='result-box'>";
        echo "<h3 class='text-success'>✅ ข้อมูลที่ได้รับ</h3>";
        echo "<ul class='list-group list-group-flush'>";
        echo "<li class='list-group-item'><strong>ชื่อ-สกุล:</strong> {$fullname}</li>";    
        echo "<li class='list-group-item'><strong>เบอร์โทร:</strong> {$phone}</li>";    
        echo "<li class='list-group-item'><strong>ส่วนสูง:</strong> {$height} ซม.</li>";    
        echo "<li class='list-group-item'><strong>ที่อยู่:</strong> {$address}</li>";    
        echo "<li class='list-group-item'><strong>วันเดือนปีเกิด:</strong> {$date}</li>";    
        echo "<li class='list-group-item d-flex justify-content-between align-items-center'><strong>สีที่ชอบ:</strong> <span class='color-display' style='background-color:{$color};'></span> ({$color})</li>";    
        echo "<li class='list-group-item'><strong>สาขาวิชา:</strong> {$major}</li>";    
        echo "</ul>";
        echo "</div>";
    }
    ?>
    
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>