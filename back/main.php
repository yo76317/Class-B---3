
<!-- 如果裡面是空的才叛斷所以用empty -->
<?php
    if(!empty($_POST)){
        if($_POST['acc']=='admin' && $_POST['pw']=='1234'){
            $_SESSION['login']='admin';
        }else{
            echo "<div class='ct' style='color:red'>帳號或密碼錯誤</div>";
        }
    }
?>

<?php
    if(isset($_SESSION['login'])){
?>


    <div class="ct a rb" style="position:relative; width:101.5%; left:-1%; padding:3px; top:-9px;">
        <a href="?do=title">網站標題管理</a>
        <a href="?do=go">動態文字管理</a>
        <a href="?do=poster">預告片海報管理</a>| 
        <a href="?do=movie">院線片管理</a>
        <a href="?do=order">電影訂票管理</a> 
    </div>
    
    <!-- 導入到請選擇所需功能這邊 -->
    <?php
        $do=$_GET['do']??'';
        if($do!='main'){
          $file='back/'.$do.".php";
            }else{
          $file='';
            }
        if(file_exists($file)){
        include $file;
            }else{
            echo"<div class='rb tab'>";
            echo"<h2 class='ct'>請選擇所需功能</h2>";
            echo"</div>";

      }
    ?>





<?php
    }else{
?>

    <form action="back.php" method="post">
        <table class="tab">
            <tr>
                <td>帳號:</td>
                <td>
                    <input type="text" name="acc">
                </td>
            </tr>
            <tr>
                <td>帳號:</td>
                <td>
                    <input type="password" name="pw">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="登入">
                </td>
            </tr>
        </table>
    </form>

<?php
    }
?>