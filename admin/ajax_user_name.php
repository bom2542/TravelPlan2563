<!--SELECT name, created_at FROM users ORDER BY id DESC LIMIT 1-->
<!--<h4 class="card-title">-->
<!--    ประหยัด จันทร์อังคารพุธ-->
<!--</h4>-->
<!--<p class="card-text">-->
<!--    " 21/02/2564 22:27"-->
<!--</p>-->
<?php include '../admin/dbconnect.php';?>
<h1 align="left"><i class="fas fa-user-plus"></i></h1>
<h4 class="card-title" style="font-weight: bold;">
    คุณ
    <?php
    $sql = "SELECT name, created_at FROM users ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    echo $data['name'];
    ?>
</h4>
<p class="card-text">
    "
    <?php
    $sql = "SELECT name, created_at FROM users ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    $date = date_create($data['created_at'], timezone_open('Asia/Bangkok'));
    echo date_format($date, 'Y-m-d H:i:sP');
    ?> "
</p>