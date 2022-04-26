<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <header data-aos="fade-down" data-aos-duration="1000">
        <h1>Portal de Notícia</h1>
    </header>

    <section class="main">
        <div class="container">
            <h1 class="manchete" data-aos="fade-left" data-aos-duration="1000"><?php echo $manchete ?></h1>

            <p class="lide" data-aos="fade-right" data-aos-duration="1000"><?php echo $lide ?></p>

            <p class="autor"></p>
            <p></p>
        </div><!--container-->
    </section><!--main-->

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>