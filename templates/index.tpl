<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script SRC="static/js/bootstrap.min.js"></script>
    <title>{}</title>
</head>
<body bgcolor="blue">
<!-- рабочая область -->
<div class="container-fluid" style="background: #B1A1CE">
    <!-- row - строка хедр здесь -->
    <div class="row">
        <!-- col md 12 - колонки-12шт в себе -->
        <div class="col-md-12" style="background: darkslateblue">
            <div class="col-md-9" style= text-decoration-color: aria-busy="font: Helvetica">
                <h1><p class="text-info">Here Will be a header </p><small>    blah blah</small> </h1>
            </div>
            <div class="col-md-3" >
                {if !isset($auth)}
                <p class="bg-info">
                <form method="post" action="auth.php">
                    <input type="text" name='login' value="Имя"><br>
                    <input type="password" name='password' value="пароль">
                    <input type="submit" value="send">
                </form>
                {$message}
                <a href="reg.php">Пройти регистрацию</a>
                </p>
                {/if}
            </form>
                {if isset($auth)}
                    {if $auth==1}
                    <p class="bg-info">
                    <form role="form" method="post" action="logout.php">
                        <div class="form-group">
                        <button type="submit" class="btn btn-info">Выйти</button>
                            {$message}
                    </form>
                    </p>
                    {/if}
                {/if}
            </div>
        </div>
    </div>
    <!-- row - строка девая колонка 3 -->

    <div class="row">
        <div class="col-md-3" style="background: #B1A1CE"> <p><h3>Выберите породу котика</h3></p>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Выберите породу котика
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">
                            {foreach from=$allcategories key=key1 item=category}
                                {*<!--Из массива, в верхнем цикле форич, мы берем переменную юзер, и обозначаем, что ключ в данном массиве*}
                                {*это переменная кей, а значение это переменная айтем*}
                                {*-->*}
                                <a href="goodsincat.php?id={$category.id}">
                                    <span class="active">{$category.name}<br></span>
                                    {*{foreach from=$categoryarray key=key item=item}*}
                                    {*{$item}<br>*}
                                    {*{/foreach}*}
                                </a>
                            {/foreach}
                        </a>
                    </li>
                </ul>
            </div>

                {*{foreach from=$allcategories key=key1 item=category}*}
                            {*<!--Из массива, в верхнем цикле форич, мы берем переменную юзер, и обозначаем, что ключ в данном массиве*}
                            {*это переменная кей, а значение это переменная айтем*}
                            {*-->*}

                        {*<a href="goodsincat.php?id={$category.id}">*}
                        {*<span class="active">{$category.name}<br></span>*}
                            {*{foreach from=$categoryarray key=key item=item}*}
                            {*{$item}<br>*}
                            {*{/foreach}*}
                        {*</a>*}
                {*{/foreach}*}

        </div>
        <div class="col-md-6" style="background: #B1A1CE"> <p><h3>Выберите котика</h3></p>

                {foreach from=$allgoods key=key1 item=good}
                <!--Из массива, в верхнем цикле форич, мы берем переменную юзер, и обозначаем, что ключ в данном массиве
                это переменная кей, а значение это переменная айтем
                -->

                        <span class="active">
                            <a href="Redel.php?id={$good.id}">{$good.name}</a><br>
                        </span>
                {/foreach}
                    {*{foreach from=$categoryarray key=key item=item}*}
                    {*{$item}<br>*}
                    {*{/foreach}*}

        </div>
        <div class="col-md-3" style="background: #B1A1CE">
            <blockquote class="blockquote-reverse">
                <p>Cat and training - are not so incompatible concepts. In just a few days, well-behaved cat can anyone. </p>
                <footer>Graham Cooper</footer>
            </blockquote>
           <center> <img src="static/images/zavulon.jpg" class="img-circle"  alt="Responsive image"></center><br>
            <center> <p class="text-muted"><h3><strong>Zavulon fon Gugenzollern</strong><h3></p></center><br>
            </div>
        </div>

    <div class="row">
        <!-- col md 12 - колонки-12шт в себе футер -->
        <div class="col-md-12" style="background: darkslateblue">
            <div class="col-md-9">
                
                таблица</div>
            <div class="col-md-3">
                <address class="text-info">
                    <strong>Dnevnoi Dozor, Inc.</strong><br>
                    Highway to Hell<br>
                    Moscow,  666 <br>
                    <abbr title="Phone">Tel:</abbr> (666) 666-6666
                </address>

                <address>
                    <strong>Zavulosha Ilyuskik</strong><br>
                    <a href="mailto:#">Zavochka@gmail.com</a>
                </address></div>
        </div>
    </div>
</div>
</body>
</html>