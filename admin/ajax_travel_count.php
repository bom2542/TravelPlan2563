<!--<h4 class="card-title">-->
<!--    45 แห่ง-->
<!--</h4>-->
<?php include '../php/dBver2.php';?>
<h4 class="card-title" style="font-weight: bold;">
    <?php
    $sql = "SELECT COUNT(*) as total FROM tourist_attractions";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    echo $data['total'];
    ?>&nbsp;แห่ง
</h4>
