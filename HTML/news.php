<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../CSS/news.css">
    <title>Les news du jour</title>
</head>

<body>

    <header>
        <?php include("../include/header.php") ?>
    </header>
    <section>
        <div id=newsContent>
            <h3>Les news de la journée</h3>
        </div>
        <div id="contentNews">
            <div class="news">
                <a class="newsOn" href="#">
                    <h3>News</h3>
                </a>
                <div class="showNews">
                    <div class="contentNewsLeft"><img src="../img/ps5News.jpg" alt="newsPS5"></div>
                    <div class="contentNewsRight">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Porro dolore, ullam exercitationem earum velit accusamus quis mollitia rem,
                            amet impedit magni dolorem? Quod praesentium rerum itaque quaerat ullam, corporis quas!</p>
                    </div>
                </div>
            </div>
            <div class="news">
                <a class="newsOn" href="#">
                    <h3>News</h3>
                </a>
                <div class="showNews">
                    <div class="contentNewsRight">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Porro dolore, ullam exercitationem earum velit accusamus quis mollitia rem,
                            amet impedit magni dolorem? Quod praesentium rerum itaque quaerat ullam, corporis quas!</p>
                    </div>
                    <div class="contentNewsLeft"><img src="../img/ps5News.jpg" alt="newsPS5"></div>
                </div>
            </div>
            <div class="news">
                <a class="newsOn" href="#">
                    <h3>News</h3>
                </a>
                <div class="showNews">
                    <div class="contentNewsLeft"><img src="../img/ps5News.jpg" alt="newsPS5"></div>
                    <div class="contentNewsRight">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Porro dolore, ullam exercitationem earum velit accusamus quis mollitia rem,
                            amet impedit magni dolorem? Quod praesentium rerum itaque quaerat ullam, corporis quas!</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="../JS/showNews.js"></script>
    <script src="../JS/navbar.js"></script>
</body>

</html>