<!DOCTYPE html>
<html>
<head>
    <title>website GLB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="icon" href="http://hus.vnu.edu.vn/favicon.ico" type="image/ico" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="/SEO4-Nhom14.2/webserver/css/styleweb.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css">
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
                        <a class="nav-link " href="server.php" tabindex="-1" aria-disabled="true">List file GLB  &ensp;|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Show view GLB  &ensp;&ensp;|</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link pd-0 " href="login.php" tabindex="-1" aria-disabled="true">Logout  &ensp;|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Help</a>
                    </li>
                </ul>
                <!-- -->
                <p class="nav-link" id="day"> SE04_Nhóm 14.2 -  <?php echo date("l, M d, Y")?>&emsp;</p>
            </div>
        </nav>
    </div>
</header>
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
                <a href="" target="_blank" rel="noopener"><img src="<?php echo $user_infoi['thumbnaillmageUri'];?>"style="width:100%;height:150px;" loading="lazy"></a>
                <?php
                                    }
                                    }
                                    mysqli_close($conn);
                                    ?>
<!--                <a href="" target="_blank" rel="noopener"><img src="/Three.js - Thư viện JavaScript 3D_files/hello-webxr.png" style="width:100%;height:150px;"loading="lazy"></a>-->
<!--                <a href="" target="_blank" rel="noopener"><img src="/Three.js - Thư viện JavaScript 3D_files/monsieurnoss.png" style="width:100%;height:150px;"loading="lazy"></a>-->
<!--                <a href="" target="_blank" rel="noopener"><img src="/Three.js - Thư viện JavaScript 3D_files/PrimarylonDrive.gif"style="width:100%;height:150px;" loading="lazy"></a>-->
<!--                <a href="" target="_blank" rel="noopener"><img src="/Three.js - Thư viện JavaScript 3D_files/dvein.png"style="width:100%;height:150px;" loading="lazy"></a>-->
<!--                <a href="" target="_blank" rel="noopener"><img src="/Three.js - Thư viện JavaScript 3D_files/kentatoshikura.png" style="width:100%;height:150px;"loading="lazy"></a>-->
<!--                <a href="" target="_blank" rel="noopener"><img src="/Three.js - Thư viện JavaScript 3D_files/PrimarylonDrive.gif" style="width:100%;height:150px;" loading="lazy"></a>-->
<!--                <a href="" target="_blank" rel="noopener"><img src="/Three.js - Thư viện JavaScript 3D_files/richardmattka.png"style="width:100%;height:150px;" loading="lazy"></a>-->
<!--                <a href="" target="_blank" rel="noopener"><img src="/Three.js - Thư viện JavaScript 3D_files/bruno-simon.png" style="width:100%;height:150px;"loading="lazy"></a>-->
<!--                <a href="" target="_blank" rel="noopener"><img src="https://mythuatms.com/image/data/HUONG%20LY/MY%20THUAT%20CN/chuyen%20dong%20va%20dinh%20huong%20trong%20TK/dinh-huong-trong-thiet-ke-6.jpg" style="width:100%;height:150px;" loading="lazy"></a>-->
<!--                <a href="" target="_blank" rel="noopener"><img src="/Three.js - Thư viện JavaScript 3D_files/1955horsebit.png" style="width:100%;height:150px;"loading="lazy"></a>-->

            </div>
<!--                <div class="row">-->
<!--                    --><?php
//                    $sqli = "SELECT * FROM `model3d`";
//
////                    $conn->set_charset("utf8");
//                    if($resulti = $conn->query($sqli) )
//                    {
//                    while($user_infoi = mysqli_fetch_array($resulti))
//                    {
//                    $id = $user_infoi['id'];?>
<!--                    <div class="col-12 col-md-6 col-lg-3 magazine-item bg-bo" >-->
<!--                        <a href="" class="a-box">-->
<!--                        <center>--><?php //echo $user_infoi['name'];?><!--</center>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                    --><?php
//                    }
//                    }
//                    mysqli_close($conn);
//                    ?>
<!---->
<!--        <!--            .......-->-->
<!--                    -->
<!---->
<!--                </div>-->


        </div>
    </div></div>


</body>


</html>


