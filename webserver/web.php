<!DOCTYPE html>
<html>
<head>
    <title>website GLB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/SEO4-Nhom14.2/webserver/css/bootstrap.min.css">

    <script src="/SEO4-Nhom14.2/webserver/js/jquery.min.js"></script>
    <script src="/SEO4-Nhom14.2/webserver/js/popper.min.js"></script>
    <script src="/SEO4-Nhom14.2/webserver/js/bootstrap.min.js"></script>
    <script src="/SEO4-Nhom14.2/webserver/js/code.jquery.js"></script>
    <link rel="icon" href="/SEO4-Nhom14.2/webserver/upload/favicon.ico" type="image/ico" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="/SEO4-Nhom14.2/webserver/css/styleweb.css">

    <script src='/SEO4-Nhom14.2/webserver/js/kit.fontawesome.js'></script>

    <link rel="stylesheet" href="/SEO4-Nhom14.2/webserver/css/font-awesome.min.css">
    <link rel="stylesheet" href="/SEO4-Nhom14.2/webserver/css/adminlte.min.css">
</head>
<header class="sticky-top">


<!--    class="fixed-top"-->
<!--    <div >...</div>-->
    <div >
        <nav class="navbar navbar-expand-lg navbar-ligh bg-li " >

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" ><i class='fas fa-house-user' ></i>  &ensp;|<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form_upload.php">Upload file &ensp;|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="listFile.php" tabindex="-1" aria-disabled="true">List file GLB  &ensp;|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/SEO4-Nhom14.2/Index.html" tabindex="-1" aria-disabled="true">Show view GLB  &ensp;&ensp;|</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link pd-0 " href="login.php" tabindex="-1" aria-disabled="true">Logout  &ensp;|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="javascript:void(0);" onclick="myFunction()" tabindex="-1" aria-disabled="true">About</a>
                    </li>
                </ul>
                <!-- -->
                <p class="nav-link" id="day"> SE04_Nhóm 14.2 -  <?php echo date("l, M d, Y")?>&emsp;</p>
            </div>
        </nav>
    </div>
</header>
<script>
    function myFunction() {
        alert("Website quản lý danh sách GLB \n\n Tác giả: \n SEO4_Nhom14.2 \n\n Đinh Thị Thắm\n Hoàng Thị Mai\n Vũ Thị Phương\n Trần Thúy Nga");
    }
</script>
<body >
<?php
require'connectSQL.php';
$sql = "SELECT * FROM `model3d`";
$conn->set_charset("utf8");
$result = mysqli_query($conn, $sql);
if (!$result) {
    die('error'. mysqli_error($conn));
}





?>
<div class="hold-transition sidebar-mini">
    <div class="row">
        <div class=" col-12 col-lg-3" id = "bg-col">
            <h4 id="navie"><br><center>List file GLB</center></h4>
            <ul class="nav nav-pills nav-sidebar flex-column">
                <?php
                if(mysqli_num_rows($result)>0){
                    $i = 0 ;
                    while($row = mysqli_fetch_assoc($result)){
                        $i++;

                        ?>

                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="fas fa-cog nav-icon" id="navi"></i>
                        <p id="nav"><?php echo $row['name']; ?></p>
                    </a>
                </li>
                <?php
                }
                }

                ?>
            </ul>

        </div>
        <div class="col-12 col-lg-9 " id="bg-bl">
            <div id="projects" style="display: grid;grid-template-columns: repeat(6, 1fr);">
                <?php
                                    $sqli = "SELECT * FROM `model3d`";

                                    $conn->set_charset("utf8");
                                    if($resulti = $conn->query($sqli) )
                                    {
                                    while($user_infoi = mysqli_fetch_array($resulti))
                                    {
                                    $id = $user_infoi['id'];?>
                <!-- January 2020 -->
                <a href="" target="_blank" rel="noopener"><img src="<?php if ($user_infoi['thumbnaillmageUri']==''){
                    echo "/SEO4-Nhom14.2/webserver/upload/three_js.png"; }else
                    echo $user_infoi['thumbnaillmageUri'];?>"style="width:100%;height:150px;" loading="lazy"></a>
                <?php
                                    }
                                    }
                                    mysqli_close($conn);
                                    ?>


            </div>
</div>
    </div></div>


</body>


</html>


