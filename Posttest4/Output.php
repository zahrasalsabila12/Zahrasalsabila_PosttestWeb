<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
        <title> Salsa Cookies </title>
        <link rel="icon" href="Logo Salsa Cookies.png">
        <link rel="stylesheet" href="Style.css">
        <script src="javascript.js" defer></script>
        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    </head>
    <body>
        <!-- Header -->
        <header>
            <h1> <img src="Logo Salsa Cookies.png" alt="Logo" width="60" height="60"> <br> Salsa Cookies </h1>
        </header>
        <!-- Nav bar -->
        <nav class="navigator">
            <ul>
                <li><a href="index.php"> HOME </a></li>
                <li><a href="index.php#section1"> SHOP </a></li>
                <li><a href="About Me.html"> ABOUT ME </a></li>
                <li><a href="index.php#section2"> CONTACT </a></li>
            </ul>
            <i class='bx bx-sun' id="lightMode"></i>
        </nav>
        <content1>
        <table>
                <tr>
                    <td><div class="gambarLogo">
                        <img src="Logo-Salsa Cookies.png" alt="gambarLogo"></div>
                    </td>
                    <td>
                    <div class="AboutMe"> 
                    <form action="Output.php" method="get" class="output">
                <?php
                if(isset($_GET['question'])){
                    $name = $_GET['Name'];
                    $phone = $_GET['Phone'];
                    $email = $_GET['Email'];
                    $message = $_GET['Message'];
                    $date = $_GET['Date'];

                    echo "<p1> Name  : $name </p1><br>";
                    echo "<p1> Phone  : $phone </p1><br>";
                    echo "<p1> Email  : $email </p1><br>";
                    echo "<p1> Message  : $message </p1><br>";
                    echo "<p1> Date  : $date </p1><br>";
                }
                            ?>
                        </div>
                    </td>
                </tr>
            </table>
        </content1>
    </body>
    <footer>
        <img src="Logo-Salsa Cookies.png" alt="Logo"> 
        <h3> Salsa Cookies. </h3>
        <ul>
            <li> <a href="#"> 👥 About Me </a></li>
            <li> <a href="#section2"> 📞 Contact Me </a></li>
        </ul>
        <br>
    </footer>
    <h5 class="bottom"> ©Copyright2022-Zahra Salsabila </h5>
</html>