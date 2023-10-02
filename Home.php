<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Webapp/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
    #home-page{
    width:50%;
    height: 1770px;
    border-radius: 25px;
    margin:40px auto;
    background-color: #ecb2b2;
}
</style>
<body>
    <br><br>
    <h4><center>ระบบช่วยตัดสินใจเลือกพฤติกรรมการใช้เวลาว่างสำหรับผู้สูงอายุด้วยเทคนิคดาต้าไมนิ่ง</center></h4>
    <h5><center>The Decision System for Leisure Time Behavior of Elderly by Using Data Mining Techniques</center></h5>
</body>
<body id="body">
<form id="App-form" action="Decision.php" method="POST">
    <div id="home-page" class="home">
        <br><h5 class="text1">&nbsp;&nbsp;&nbsp;&nbsp;กรุณากรอกข้อมูลของท่านเพื่อให้ระบบทำการช่วยตัดสินใจเลือกกิจกรรมที่เหมาะสม</h5>
            <br><h5 class="text1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เพศ</h5>
            <h5 class="text4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;เลือกได้ 1 ตัวเลือก</h5>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="S1" value="Male">&nbsp;&nbsp;ชาย<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="S1" value="Female">&nbsp;&nbsp;หญิง<br>

            <br><h5 class="text1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ความบกพร่องทางร่างกาย</h5>
            <h5 class="text4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;เช่น ความบกพร่องทางการมองเห็น,ทางการได้ยินและทางการเคลื่อนไหว เป็นต้น เลือกได้ 1 ตัวเลือก</h5>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="S2" value="None">&nbsp;&nbsp;ไม่มีความบกพร่อง<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="S2" value="Have">&nbsp;&nbsp;มีความบกพร่อง<br>

            <br><h5 class="text1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;โปรดระบุโรคประจำตัว</h5>
            <h5 class="text4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;เลือกได้มากกว่า 1 ตัวเลือก</h5>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="dis" value="1A">&nbsp;&nbsp;ไม่มีโรคประจำตัว<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="dis" value="2A">&nbsp;&nbsp;ความดันโลหิตสูง<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="dis" value="3A">&nbsp;&nbsp;เบาหวาน<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="dis" value="4A">&nbsp;&nbsp;ไขมันในเลือดสูง<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="dis" value="5A">&nbsp;&nbsp;ข้อเข่าเสื่อม<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="dis" value="6A">&nbsp;&nbsp;โรคอ้วน<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="dis" value="7A">&nbsp;&nbsp;ซึมเศร้า<br>

            <br><h5 class="text5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;การมีผู้ดูแล</h5>
            <h5 class="text4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;เลือกได้เพียง 1 ตัวเลือก </h5>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="04" value="caregiver"> มีผู้ดูแล(เช่น พยาบาล,บุคคลในครอบครัว,พี่เลี้ยง เป็นต้น)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="04" value="Nocaregiver"> ไม่มีผู้ดูแล<br>

            <br><h5 class="text5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อาการแพ้</h5>
            <h5 class="text4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;โปรดระบุอาการแพ้ของท่าน เลือกได้เพียง 1 ตัวเลือก </h5>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="lose" value="not"><label for="not">&nbsp;&nbsp;ไม่มีอาการแพ้</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="lose" value="dream"><label for="dream">&nbsp;&nbsp;แพ้ฝุ่น/อากาศ</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="lose" value="food"><label for="food">&nbsp;&nbsp;แพ้อาหาร</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="lose" value="pet"><label for="pet">&nbsp;&nbsp;แพ้ขนสัตว์</label><br>
          
            <br><h5 class="text5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ระดับการศึกษาสูงสุด</h5>
            <h5 class="text4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;เลือกได้เพียง 1 ตัวเลือก </h5>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="radio" name="study" value="primary"> ประถมศึกษา</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="radio" name="study" value="high"> มัธยมศึกษา</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="radio" name="study" value="degree"> ปริญญา(ตรี,โท,เอก)</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="radio" name="study" value="VVC"> ปวช./ปวส.</label><br>

            <br><h5 class="text5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สถานภาพ</h5>
            <h5 class="text4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;โปรดระบุสถานภาพปัจจุบันของท่าน เลือกได้เพียง 1 ตัวเลือก </h5>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status" value="marry"> สมรส<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status" value="divorce"> หย่าร้าง<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status" value="widowed"> หม้าย(สามีหรือภรรยาเสียชีวิต)<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="status" value="single"> โสด<br>

            <!-- <br><h5 class="text5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อาศัยอยู่กับ</h5>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="live" value="couple"> คู่สมรส<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="live" value="alone"> คนเดียว<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="live" value="child"> ลูก/หลาน<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="live" value="careg"> ผู้ดูแล<br> -->

            <br><h5 class="text5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ประเภทที่อยู่อาศัย</h5>
            <h5 class="text4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;เลือกได้เพียง 1 ตัวเลือก</h5>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="add" value="private"> บ้านส่วนตัว<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="add" value="hire"> บ้านเช่า<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="add" value="apart"> อพาร์ตเม้นต์<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="add" value="condo"> คอนโดมิเนียม<br>

            <br><h5 class="text5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เคยหรือกำลังประกอบอาชีพ</h5>
            <h5 class="text4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;โปรดระบุอาชีพที่ท่านเคยประกอบอาชีพหรือกำลังประกอบอาชีพในปัจจุบัน เลือกได้เพียง 1 ตัวเลือก</h5>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="job" value="X"><label for="X">&nbsp;&nbsp;รับราชการ</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="job" value="Y"><label for="Y">&nbsp;&nbsp;รับจ้าง</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="job" value="Z"><label for="Z">&nbsp;&nbsp;เกษตรกร</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="job" value="W"><label for="W">&nbsp;&nbsp;แม่บ้าน/พ่อบ้าน</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="job" value="M"><label for="M">&nbsp;&nbsp;ค้าขาย</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="job" value="F"><label for="F">&nbsp;&nbsp;ธุรกิจส่วนตัว</label><br>

            <br><h5 class="text5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;รายได้เฉลี่ยต่อเดือน</h5>
            <h5 class="text4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;เลือกได้เพียง 1 ตัวเลือก </h5>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="income" value="down"><label for="down">&nbsp;&nbsp;น้อยกว่า 15,000 บาท</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="income" value="center"><label for="center">&nbsp;&nbsp;15,000 - 30,000 บาท</label><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="income" value="up"><label for="up">&nbsp;&nbsp;มากกว่า 30,000 บาท</label><br><br>
            
            <center>
                <input type="button" value="ย้อนกลับ" id="click-back" onclick="location.href = 'welcome.html';">
                <input type="button" value="Reset"id="click-reset" onclick="location.href = 'Home.php';">
                <button type="submit" id="click-result">ประเมินผล</button></center>
        </div>    
    </form>
    </div> 
</body>
</html>
