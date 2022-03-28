<html>
<head>
<meta charset="UTF-8">
<title>Як підключити Visual Studio Code + GitHub</title>
<!--Style CSS-->
<script type="text/javascript">
    function send()
    {var valid=true;
    var elems=document.forms[0].elements;
    for (var i=0; i=document.forms[0].length; i++){
        if (elems[i].getAttribute('type') == 'text' ||
        elems[i].getAttribute('type') == 'password' ||
        elems[i].getAttribute('type') == 'email') {
            if (elems[i].value == '' ) {
                elems[i].style.border = '2px solid red';
                valid = false;
            }
        }
    } if (!valid){
        alert('Enter all string!');
        return false;
    }
    }
</script>
<style>
    .shadowtext { text-shadow: 1px 3px 2px white, 0 0 1em red;
        color: #210042;
        font-size: 2em;
    }
    <!-- ==================== -->
</style>
</head>
<!--Додаємо фон -->
<body background="images/bg.jpg">
<table border="1" align="center" cellpadding="10">
    <tr>
        <td background="images/bg-3.jpg" colspan="2" height="150" align="right"> 
            <font size="5" align="center" color="Maroon"> <h1 class="shadowtext"> <a href="https://www.youtube.com/watch?v=KiMtkJw-4gs">Visual Studio Code + GitHub</a></h1></font></td></td>
    <tr>
        <td colspan="2">
            <font size="4"<b>
            <a href="#">Головна</a>
            <a href="#">Фотогалерея</a>
            <a href="#">Телефони</a>
            <a href="#">Статистика</a>
            <a href="#">Зареєстровані</a>
            </b></font>
        </td>
    <tr>
        <td width="30%" valign="top" >

            <center><canvas id="canvas" height="120" width="120"</canvas> </center>
                <hr>
            <font size="5" color="navy"><h2>News</h2></font>
            <font size="5">
                <ul>
                    <li><a href="#">сайт будівельної компанії</a></li>
                    <li><a href="#">сайт ТМ "Новашкола"</a></li>
                    <li><a href="#">Редизайн сайту classno.com.ua</a></li>
                    <li><a href="#">Розробка CMS for Metro Cash&Carry</a></li>
                    <li><a href="#">Сайт-візитівка дизайнера інтерфейсів</a></li><br>
                    <p align="right"><a href="#">інші...</a></p>
                </ul>
            </font>
            <hr>
                <h1 align="center"><font color="green">Registration</font></h1>
                <form action="forma.php" method="post" onsubmit="return send();">
                <table align="center" bgcolor="#ccc">
                <TR>
                    <td><font color="green" First name<font>: </td>
                    <td><input type="text" size="10" maxlength="20" name="name2" </td>
                </TR> 
                <TR>
                    <td><font color="green" Last name<font>: </td>
                    <td><input type="text" size="10" maxlength="20" name="name1" </td>
                </TR>
                <TR>
                    <td><font color="green" E-mail<font>: </td>
                    <td><input type="text" size="10" maxlength="20" name="email" </td>
                </TR>
                <TR>
                    <td><font color="green" Password<font>: </td>
                    <td><input type="text" size="10" maxlength="20" name="password" </td>
                </TR> 
                </table>

                <p align="center">
                    <input type="submit" value="Registration">
                    <input type="reset" value="clear">                    
                </p>
                </form>
                <hr>
        </td>
        <td width="70%" valign='top'> 
        <h1 align="center">Дякуємо за реєстрацію! </h1>
        <?php
        $st = $_POST['name2'].";".$_POST['name1'].";".$_POST['email'].";".$_POST['password']."\n";
        $fp = fopen("baza.txt", "a");
        $test = fwrite($fp,$st);
        echo "<h2 align='center'> Ви ввели:".$_POST['name2'].",".$_POST['name1'].",".$_POST['email'].",".$_POST['password']."</h2>";
        ?>
        </h1>        
        </td>
    </tr>
    <td background="images/bg-3.jpg" colspan="2" align="center" valign="middle" height="90"><a href="https://www.youtube.com/watch?v=KiMtkJw-4gs">Як підключити Visual Studio Code + GitHub<br></a>
    <font size="4"> Site Dima T.</font></td>
    </tr>
</table>
        <!--<a>https://www.youtube.com/watch?v=KiMtkJw-4gs</a>-->
</body>
</html>
