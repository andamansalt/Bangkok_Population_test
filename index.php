<?php include('db_connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="select.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree&display=swap" rel="stylesheet">
    <title>Bangkok Population</title>
</head>

<body>
    <div class="container-fluid">
        <div class="container text-start paper">
            <div class="row">
                <div class="col-12 info">
                    <h1>สถิติประชากรกรุงเทพฯ พ.ศ. 2550 - 2559</h1>
                    <br>
                    <h3>ลักษณะพื้นที่</h3>
                    <p>กรุงเทพฯ เป็นจังหวัดที่มีประชากรมากที่สุดในประเทศไทย หากรวมประชากรแฝงที่ไม่ปรากฏในทะเบียนและคนที่ เดินทางมาทำงานในตอนกลางวันด้วยแล้ว คาดว่าจะสูงถึงเกือบเท่าตัวของประชากรที่ปรากฏในทะเบียน เราจึง เรียกกรุงเทพฯ ว่าเป็น <a href="https://en.wikipedia.org/wiki/Megacity">“อภิมหานคร (megacity)”</a> คือมีประชากรตั้งแต่ 10 ล้านคนขึ้นไป</p>
                    <p>อัตราเพิ่มของประชากรกรุงเทพฯ อยู่ระดับเกือบ 1% และเริ่มลดลงในปี 2559 ดังแสดงในแผนภูมิต่อไปนี้</p>
                </div> <!-- info -->


                <div class="row" style="margin-top: 2%;">
                    <h3>การเติบโต</h3>
                    <div class="col d-flex align-self-start">
                        <h4 class="selector" style="margin: 1.5% 6% 1.5% 0 ;">เขต</h4>
                        <select class="form-select" style="width: 45%; " id="sector" onchange="selectSector()">
                            <?php
                            $order = mysqli_query($conn, "SELECT * FROM `bkk_population_growth` "); //เลือกข้อมูลที่ต้องการจากใน orders
                            while ($rows = mysqli_fetch_array($order)) {
                            ?>
                                <option value="<?php echo $rows[1]; ?>"><?php echo $rows[1]; ?></option>
                            <?php
                            } ?>
                        </select>
                    </div>

                    <div class="col d-flex align-self-end">
                        <h4 class="selector" style="margin:1.5% 5%;">ตั้งแต่</h4>
                        <select class="form-select" id="year" style="width: 20%;" onchange="selectSector()">
                            <?php
                            for ($i = 2 and $e = 2550; $i <= 11; $i++ and $e++) {
                                echo "<option value='$i'>พ.ศ. $e</option>";
                            }
                            ?>
                        </select>
                        <h4 class="selector" style="margin:1.5% 5%;">ถึง</h4>
                        <select class="form-select" id="year" style="width: 20%;" onchange="selectSector()">
                            <?php
                            for ($i = 2 and $e = 2550; $i <= 11; $i++ and $e++) {
                                echo "<option value='$i'>พ.ศ. $e</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div><!-- selcetor -->

                <dl id="ans">

                </dl><!-- bar graph -->
                <div class="col-12" style="margin-bottom: 2%;">
                    <h1>แหล่งข้อมูล</h1>
                    <div class="link">
                        <li><a href="https://stat.bora.dopa.go.th/stat/statnew/statMONTH/statmonth/">สำนักบริหารการทะเบียน กรมการปกครอง กระทรวงมหาดไทย, จำนวนประชากร, สำนักบริหารการทะเบียน กรมการปกครอง กระทรวงมหาดไทย, Editor. 2564: กรุงเทพฯ.</a></li>
                        <li><a href="http://www.nso.go.th/">สำนักงานสถิติแห่งชาติ, การสำรวจภาวะเศรษฐกิจและสังคมของครัวเรือน พ.ศ. 2563 สำนักงานสถิติแห่งชาติ, Editor. 2563: กรุงเทพฯ</a></li>
                        <li><a href="https://price.moc.go.th/">สำนักดัชนีเศรษฐกิจการค้า กระทรวงพาณิชย์, Editor. 2563: กรุงเทพฯ.</a></li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>