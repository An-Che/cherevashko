<?php
/* Здесь мы проверяем существуют ли переменные, которые передала форма обратной связи. Если не существуют, то мы их создаем */
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['message'])) {$message = $_POST['message'];}

/* Здесь необходимо вписать ваш e-mail адрес */
$address = "info@cherevashko.com"; 

/* Здесь вписуете тему, которая будет отображаться в теме письма */
$sub = "Это сообщение с моего сайта cherevashko.com";

/* А здесь прописываете сам текст сообщения, который будет Вам отправлен. Если Вам необходимо начать новую строку необходимо поставить n */
$mes = "Автор указал такое имя: $name Оставил такой E-mail: $email Содержание письма: $message";

/* А это функция, как раз занимается отправкой письма на указанный выше адрес */
$send = mail($address, $sub, $mes, "Content-type: text/plain; charset=UTF-8\r\nFrom: $email");

if ($send == 'true')
{
echo "Сообщение отправлено!";
}
else 
{
echo "Сообщение не отправлено!";
}
?>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Anton Cherevashko">
    <title>Отправка</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet"> 
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <section id="error-page">
        <div class="error-page-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <div class="bg-404">
                                <div class="error-image">                                
                                    <img class="img-responsive" src="images/home/worksite.png" alt="отправка">  
                                </div>
                            </div>
                            <h2>ДА! YES! ТАК!</h2>
                            <p>Вы отлично справились)</p>
                            <a href="/" class="btn btn-error">Вернутся на главную</a>
                            <div class="social-link">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>