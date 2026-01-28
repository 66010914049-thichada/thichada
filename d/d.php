<!doctype html>
<html lang="th">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ฟอร์มสอบถามข้อมูล - chat gpt</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #ffdde1, #ee9ca7, #b49bc8);
        background-size: 300% 300%;
        animation: gradientMove 12s ease infinite;
        height: 100vh;
        padding: 40px 0;
    }

    @keyframes gradientMove {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .glass-card {
        max-width: 700px;
        margin: auto;
        padding: 35px 40px;
        background: rgba(255, 255, 255, 0.18);
        backdrop-filter: blur(15px);
        border-radius: 22px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.2);
        border: 1px solid rgba(255, 255, 255, 0.3);
        color: #fff;
    }

    .glass-card h1 {
        font-weight: 600;
        text-align: center;
        margin-bottom: 25px;
        text-shadow: 0px 2px 5px rgba(0,0,0,0.3);
    }

    .form-control, .form-select {
        border-radius: 14px;
        padding: 12px;
        background: rgba(255, 255, 255, 0.3);
        border: 1px solid rgba(255, 255, 255, 0.4);
        color: white;
    }

    .form-control::placeholder {
        color: #f3f3f3;
    }

    .btn-gradient {
        background: linear-gradient(90deg, #ff7eb3, #ff758c, #f54ea2);
        border: none;
        color: white;
        padding: 12px 20px;
        font-size: 18px;
        border-radius: 14px;
        width: 100%;
        font-weight: 600;
        transition: 0.3s;
        margin-top: 10px;
    }

    .btn-gradient:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(255, 117, 150, 0.4);
    }

    .result-box {
        margin-top: 30px;
        background: rgba(255, 255, 255, 0.25);
        padding: 25px;
        border-radius: 15px;
        color: #fff;
        border: 1px solid rgba(255,255,255,0.3);
        backdrop-filter: blur(10px);
    }

    .list-group-item {
        background: transparent !important;
        border: none;
        color: white;
        font-size: 16px;
    }

    label {
        font-weight: 500;
        margin-bottom: 5px;
    }
</style>
</head>

<body>

<div class="glass-card">
    <h1>✨ แบบฟอร์มข้อมูล - chat gpt ✨</h1>
    <h2>66010914049 ธิชาดา สีทอน (น้ำตาล)</h2>

    <form method="post">

        <div class="mb-3">
            <label>ชื่อ-สกุล</label>
            <input type="text" class="form-control" name="fullname" required>
        </div>

        <div class="mb-3">
            <label>เบอร์โทร *</label>
            <input type="text" class="form-control" name="phone" required>
        </div>

        <div class="mb-3">
            <label>ส่วนสูง (ซม.) *</label>
            <input type="number" class="form-control" name="height" min="100" max="200" required>
        </div>

        <div class="mb-3">
            <label>ที่อยู่</label>
            <textarea class="form-control" name="address" rows="2"></textarea>
        </div>

        <div class="mb-3">
            <label>วันเดือนปีเกิด</label>
            <input type="date" class="form-control" name="birthday">
        </div>

        <div class="mb-3">
            <label>สีที่ชอบ</label>
            <input type="color" class="form-control form-control-color" name="color">
        </div>

        <div class="mb-3">
            <label>สาขาวิชา</label>
            <select class="form-select" name="major">
                <option value="การบัญชี">การบัญชี</option>
                <option value="การตลาด">การตลาด</option>
                <option value="การจัดการ">การจัดการ</option>
                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
            </select>
        </div>

        <button class="btn-gradient" name="Submit">บันทึกข้อมูล</button>

    </form>
</div>

</body>
</html>
