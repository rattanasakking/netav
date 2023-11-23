<!DOCTYPE html>
<html>
<head>
    <title>Neta V Charging</title>
    <!-- เพิ่มลิงก์ไปยัง Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="icon" type="image/png" href="https://cdn.pic.in.th/file/picinth/ev-box-logo.png" /> -->
    <link rel="icon" href="https://cdn.pic.in.th/file/picinth/ev-box-logo.png" sizes="192x192" />
</head>
<body>
    <div class="container mt-5">
	 <div class="row justify-content-center">
<div class="d-grid gap-2">
<a class="btn btn-warning" href="https://www.retc.ac.th/king" role="button">โปรแกรมคำนวนเวลาชาร์จแบต สำหรับสายชาร์จฉุกเฉิน</a>
</div>

            <div class="col-md-6">

<img src="https://cdn.pic.in.th/file/picinth/ev-box-logo.png" Width="80%"  class="mx-auto d-block">
        <form method="POST" id="numberForm">
            <label for="numbers">แบตคุณเหลือ กี่ %:</label>
            <select class="form-select" name="numbers" id="numbers">
                <?php
                for ($i = 80; $i >= 1; $i--) {
                    echo "<option value=\"$i\">$i</option>";
                }
                ?>
            </select>
<div class="d-grid gap-2">

            <button type="submit" class="btn btn-primary mt-3" name="submit">คำนวณเวลาชาร์จ</button>
</div>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $selectedNumber = $_POST['numbers'];
            $cal_num_bt = ($selectedNumber * 40.7) / 100;
            //echo "<p class='mt-3'>คุณเลือก: $selectedNumber</p>";
            echo "<p>จำนวนแบตเตอร์รี่คงเหลือ: $cal_num_bt kWh </p>";
	 //ตัวแปร
		$kWh=2.25; //กำลังไฟในการชาร์จแบตต่อชั่วโมง
		$Wh=$kWh/60; //กำลังไฟในการชาร์จแบตต่อนาที


	   $cal_bt=40.7-$cal_num_bt;
	   $cal_time=$cal_bt/$kWh;
	   $cal_time_min=$cal_bt/$Wh;
	   $cal_time_min_show= floor($cal_time_min);
		//แสดงระยะเวลาในการชาร์จ เป็นแบบ ทศนิยม 2 หลัก
	    $cal_time_show =number_format($cal_time,2);
	    echo "<p>ใช้เวลาชาร์จ: $cal_time_show ชั่วโมง</p>";
	//echo "<p>ระยะเวลาในการชาร์จ: $cal_time_min_show นาที</p>";

// รับค่าเวลาปัจจุบัน
$current_time = time();

// กำหนดเวลาที่ต้องการบวกเข้า
$interval = "+$cal_time_min_show minutes"; 

//$interval = "+$cal_time hours"; 

// บวกเวลากับเวลาปัจจุบัน
$new_time = strtotime($interval, $current_time);

// แปลง timestamp ใหม่เป็นรูปแบบวันที่และเวลา
$new_time_formatted = date("Y-m-d H:i", $new_time);
$new_time_formatted_day = date("Y-m-d ", $new_time);
$new_time_formatted_min = date("H:i ", $new_time);
// แสดงผลลัพธ์
echo "เวลาปัจจุบัน: " . date("Y-m-d H:i", $current_time) . "<br>";
//echo "เวลาที่ต้องการบวกเข้า: $interval<br>";
//echo "คาดว่าจะชาร์จเสร็จในเวลา: $new_time_formatted";
echo "<h5>ประมาณการเวลาที่จะชาร์จเสร็จ</h5>วันที่: $new_time_formatted_day"; //แสดงวันที่
echo "<br>เวลา: $new_time_formatted_min"; //แสดงเวลา





echo "<br> ";

echo "<div class='d-grid gap-2'>";
echo "<a class='btn btn-danger' href='https://www.retc.ac.th/king' role='button'>คำนวณใหม่</a>";
		//   echo "<button type='button' class='btn btn-primary' onclick='resetForm()'>Reset</button>";
            echo "<script>document.getElementById('numberForm').style.display = 'none';</script>";

echo "</div>";
             }

       
        ?>

   	 <script>
      function resetForm() {
                        document.getElementById('numberForm').style.display = 'block';
                        document.getElementById('numbers').value = '';
                        document.getElementById('resetButton').style.display = 'none';          
  }
        </script>




    </div>
    </div>
    </div>
<br>
<br>
<div id="sfckaa5d3tcljaj1xxkjncm593ktem5s716"></div>
<script type="text/javascript" src="https://counter6.optistats.ovh/private/counter.js?c=kaa5d3tcljaj1xxkjncm593ktem5s716&down=async" async></script>
<noscript><a href="https://www.facebook.com/rattanasak.king" title="Retchanon Phasuk"><img src="https://counter6.optistats.ovh/private/freecounterstat.php?c=kaa5d3tcljaj1xxkjncm593ktem5s716" border="0" title="web counter" alt="web counter"></a></noscript>



    <!-- เพิ่มลิงก์ไปยัง Bootstrap JavaScript (ถ้าต้องการใช้งาน JavaScript) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
