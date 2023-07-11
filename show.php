<?php
include('db_connect.php');
$sector = $_POST['sector'];
$year = $_POST['year'];
$sector = trim($sector);
$year = trim($year);
$order = mysqli_query($conn, "SELECT * FROM `bkk_population_growth` WHERE name =  '{$sector}' ");

if ($order && mysqli_num_rows($order) > 0) {
    while ($rs = mysqli_fetch_array($order)) {
?>

<dd class="percentage percentage-<?php echo $rs[2]; ?>" style="" ><span class="text">2550</span></dd>
            <dd class="percentage percentage-<?php echo $rs[3]; ?>"><span class="text">2551</span></dd>
            <dd class="percentage percentage-<?php echo $rs[4]; ?>"><span class="text">2552</span></dd>
            <dd class="percentage percentage-<?php echo $rs[5]; ?>"><span class="text">2553</span></dd>
            <dd class="percentage percentage-<?php echo $rs[6]; ?>"><span class="text">2554</span></dd>
            <dd class="percentage percentage-<?php echo $rs[7]; ?>"><span class="text">2555</span></dd>
            <dd class="percentage percentage-<?php echo $rs[8]; ?>"><span class="text">2556</span></dd>
            <dd class="percentage percentage-<?php echo $rs[9]; ?>"><span class="text">2557</span></dd>
            <dd class="percentage percentage-<?php echo $rs[10]; ?>"><span class="text">2558</span></dd>
            <dd class="percentage percentage-<?php echo $rs[11]; ?>"><span class="text">2559</span></dd>
    <?php
    }
}
    ?>