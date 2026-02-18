<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914049 ธิชาดา สีทอน(น้ำตาล)</title>
</head>

<body>
<h1>งาน k - 66010914049ธิชาดา สีทอน(น้ำตาล)</h1>
<button class="btn-green" onclick="showMe()">รูปฉัน</button>
<button class="btn-orange" onclick="showTeacher()">รูปอาจารย์</button>

    <div id="display-area">
        </div>

    <script>
        function showMe() {
            const area = document.getElementById('display-area');
            // เปลี่ยน 'me.jpg' เป็นลิงก์รูปของคุณเอง
            area.innerHTML = '<img src="1.jpg" alt="รูปฉัน">';
        }

        function showTeacher() {
            const area = document.getElementById('display-area');
            // เปลี่ยน 'teacher.jpg' เป็นลิงก์รูปของอาจารย์
            area.innerHTML = '<img src="2.jpg" alt="รูปอาจารย์">';
        }
    </script>


</body>
</html>
