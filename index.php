<?php
	session_start();
	include_once 'dbconnectt.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title> Home - LAMAI GARDREN </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="bootstrap.min.css" type="text/css" />
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">LAMAI GARDREN</a>
                </li>
            </ul>
        </div>
        <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
            <ul class="navbar-nav ml-auto">
                    <!--6.if already logged in, change menu items -->
                <?php if (isset($_SESSION['id'])){ ?>
                    <li><p class="navbar-text"> Signed in as <?php echo $_SESSION['name']; ?></p></li> &nbsp; &nbsp;
                    <li><a class="nav-link" href="logout.php"> Log Out </a></li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logon.php">Logon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registerr.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin_logon.php">Admin</a>
                    </li>
                <?php } ?>		
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <table style="width:100%"> 
        <tr>
            <td>
                <ul class="navigation menu" align="top">
                    <li><a href="index.php"> หน้าหลัก </a></li>
                    <br>
                    <li><a href="product.php" target="_blank"> สินค้า  </a></li>
                    <br>
                    <li><a href="activities.php" target="_blank"> กิจกรรม  </a></li>
                    <br>
                    <li><a href="benefit.php" target="_blank"> ประโยชน์ของผลไม้  </a></li>
                </ul>
                <div>
                    <dialog id="myFirstDialog">
                        <p> Facebook Page : สวนละไม (LAMAI GARDREN)<br>
                            Instragram : LAMAI_GARDREN <br>
                            Line : @lamaigardren <br>
                            EMAIL : Lamai_Gardren@hotmail.com <br>
                            TEL : 098-737-4983 <br></p>
                        <button id="hide"> ปิด </button>
                    </dialog>
                    <button id="show"> ช่องทางการติดต่อ </button>
                </div>
                <script>
                    (function() {
                        var dialog = document.getElementById('myFirstDialog');
                        document.getElementById('show').onclick = function(){
                            dialog.showModal();
                        };
                        document.getElementById('hide').onclick = function() {
                            dialog.close();
                        };
                    })();
                </script>
                <br>
                <br>
                <div class = "content_left">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1943.82511717602!2d101.43491643383926!3d12.994208655055012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310323fb6e555553%3A0xa2ec994fc7b1bf02!2z4Liq4Lin4LiZ4Lil4Liw4LmE4Lih!5e0!3m2!1sth!2sth!4v1634973136275!5m2!1sth!2sth" width="180" height="180" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <td>
                <h1 align="center"> สวนละไม (LAMAI GARDREN) </h1>
                <div class="container">
                    <P align="center">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/M4_NA5RxHy0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <br>
                    <br>
                    สวนละไม จังหวัดระยอง อาณาจักรไม้ผลท่ามกลางขุนเขาด้วยพื้นที่สวนผลไม้กว่า 500 ไร่ โอบล้อมด้วยภูเขาและป่าไม้ธรรมชาติอากาศเย็นสบายด้วยพรรณไม้นานาชนิด
                    เราวางแผนการปลูกผลไม้มากกว่า 10 ปี โดยจัดวางผังปลูกผลไม้แต่ลชนิดอย่างมีระบบ มีผลไม้หลากหลายชนิด อาทิ ทุเรียน มังคุด เงาะ ลองกอง ส้มโอ ชมพู่ ลำไย สละ แก้วมังกร มะยงชิด องุ่นฯลฯ เป็นต้น 
                    ในการเข้าชมสวนจะมีเจ้าหน้าที่ให้ความรู้และข้อมูลต่าง ๆ ตลอดการชมสวน เพลิดเพลินกับบรรยากาศและสนุกกับการเก็บผลไม้สด ๆ จากต้น 
                    สวนละไม เปิดให้บริการลูกค้าและนักท่องเที่ยวทุกท่านเข้ามาสัมผัสบรรยากาศความสุข สนุกสนาน และความสงบที่ลงตัว 
                    </p>
                </div>
                <br>
                <p>
                <b> โดยกิจกรรมที่สวนละไม จะแบ่งตามฤดูกาลต่าง ๆ ของผลไม้ดังนี้ </b><br><br>
                    เดือน เมษายน - กรกฎาคม ของทุก ๆ ปีจะเป็นช่วงฤดูร้อน หน้าผลไม้ เงาะ มังคุด ทุเรียน สละ ลองกอง ลำไย ฯลฯ สวนละไมจะมีกิจกรรม "เที่ยวชมสวน และทานบุฟเฟ่ต์ผลไม้" <br>
                    เดือน  ธันวาคม - กุมภาพันธ์ ของทุก ๆ ปีจะเป็นช่วงฤดูฝนและหนาว สวนละไมจะมีเปิดกิจกรรมเที่ยวไร่สตอเบอร์รี่ ทุ่งดอกคอสมอส พร้อมด้วยสวนส้มเขียวหวาน สวนลำไย สวนดอกไม้
                </p>
            </td>
        </tr>
    </table>
    <br>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2"></div>
    </nav>
</body>
</html>