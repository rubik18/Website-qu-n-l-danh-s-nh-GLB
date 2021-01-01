<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/SEO4-Nhom14.2/webserver/css/all.css"
          integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
    <script src="/SEO4-Nhom14.2/webserver/js/jquery.min.js"></script>
    <script src="/SEO4-Nhom14.2/webserver/js/popper.min.js"></script>
    <script src="/SEO4-Nhom14.2/webserver/js/bootstrap.min.js"></script>
    <link rel="icon" href="/SEO4-Nhom14.2/webserver/upload/favicon.ico" type="image/ico" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="/SEO4-Nhom14.2/webserver/css/styleweb.css">

    <script>
        function Signin() {
            var x1=document.getElementById("Name").value;
            var x2 =document.getElementById("password").value;
            if(x1=="" || x2==""){
                alert("Bạn chưa nhập đầy đủ thông tin");
            }
            else{
                if(x1=="admin" && x2=="0000"){
                    window.location = "web.php";
                }

                if(x1=="admin1" && x2=="1111"){
                    window.location="web.php";
                }

                if(x1=="admin2" && x2=="2222"){
                    window.location="web.php";
                }
            }
        }
    </script>

    <title>Log in</title>
</head>

<body id="boodyy">
<div id="main">
    <div class="col-md-6" >

    </div>
    <div class="col-md-6" id="khung">
        <form action="">
            <div class="col-sm-12" id="signin">
                Welcom to website GLB

            </div>
            <div class="col-sm-12" >
                <div class="col-sm-12" id="Input">
                    <input type="text" placeholder="Account" class="col-sm-10" id="Name">

                </div>
                <div class="col-sm-12" id="Input">
                    <input type="password" placeholder="*********" class="col-sm-10" id="password">
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-12">
                        <input type="checkbox" name="vehicle1" value="Bike">
                        <label for="vehicle1"> Remember password</label><br>

                    </div>
                    <button class="col-md-4" style="float: left;background-color: #24578a;" onclick="Signin()" type="button" >
                        Log in
                    </button>
                </div>
                <div class="col-sm-12" id="thea" style="margin-bottom: -15px">
                    <a href="#" style="color: red">Forgot password ?</a>
                </div>
                <dir class="col-sm-12" id="thea" >
                    <a href="#" style="color: red">Creat an account ?</a>



            </div>
        </form>
    </div>
</div>
</body>

</html>

