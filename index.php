<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil portfolio | Morgan ZARKA</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Rubik:wght@300;500&display=swap"
        rel="stylesheet">

<body>

    <div class="video">
        <video src="./img/Composition 1.mp4" class="logo" muted></video>
    </div>
    <div class="wrapper">
        <header>
            <a href="" title="" class="logo"><img src="./img/filigrane.svg" alt="Accueil"></a>
            <nav>
                <a href="" title="">Qui suis-je ?</a>
                <a href="" title="">Mes projets</a>
                <a href="" title="">Contact</a>
            </nav>
        </header>

        <main>
            <div class="banner">
                <h1 class="title">Morgan ZARKA<br>Développeur<br>fullstack</h1>
                <div class="dynamique">
                    <p>Je suis&nbsp;<span class="savoirEtre"></span></p>
                    <p>J'aime l<span class="savoirFaire"></span></p>
                </div>
            </div>

            <h2>blabla</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi veniam quia nostrum alias tempore incidunt
                quam
                laboriosam libero molestiae quis velit repellat voluptate deserunt veritatis cumque a officia vitae esse
                ullam
                corrupti id non, laborum excepturi in! Deleniti, illum. Quasi dignissimos tempora cum voluptate impedit,
                nostrum
                quis amet accusamus debitis tenetur optio, numquam odio iure maiores, earum incidunt eaque rem quidem
                molestiae.
                Id error sunt aut, consequuntur a ut eligendi cum sint nulla doloremque debitis impedit qui nisi sit
                culpa. Ab
                ipsam assumenda minima reiciendis aut tempora aperiam dicta quia nam ipsum fuga vitae omnis quam nemo,
                est
                voluptas id libero voluptatum. Id soluta, sit nisi quam dignissimos tempore consequuntur corporis hic
                minus
                fugit veritatis autem vero placeat iste facilis perferendis eos. Quasi suscipit expedita nemo vero
                temporibus
                adipisci mollitia officiis ad omnis maiores pariatur iusto dolore necessitatibus neque, tenetur harum
                aspernatur
                ab minima ipsam quae! Illo reiciendis soluta asperiores explicabo iste laudantium sit tempora aperiam
                eveniet
                sunt tenetur, modi aut numquam libero possimus tempore voluptatum doloremque excepturi temporibus
                quibusdam
                deserunt, nisi minima? Excepturi dolore inventore, similique et esse itaque illo nobis architecto sequi
                asperiores. Aliquid earum dicta, porro iste voluptatum ipsa nemo? Minus odit obcaecati, iure consequatur
                mollitia, dolorem assumenda deleniti sed fugit animi dolorum natus autem, officiis quibusdam tempore?
                Repellendus magni repudiandae molestias rerum nulla. Vel veniam iusto libero tenetur deserunt quas
                recusandae
                quo enim. Laboriosam, reprehenderit commodi.</p>
            <h2 class="projet">Quelques-uns de mes projets :</h2>
            <div class="hide">
                <div class="flexbox">
                    <?php 
                    include './script/database.php';
                    $stmt = $db->prepare("SELECT * FROM `projets`");
                    $stmt->execute();
                    $projets = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($projets as $row) {
                        ?>
                        <a class="lienProjet" id="<?=$row["id_projet"]?>" href="./projet.php?id=<?=$row["id_projet"]?>">
                        <img src="./img/projet/<?=$row["id_projet"]?>.png" alt="" width="150px" class="logo">
                        <div class="text">
                            <h3><?=$row["nom_projet"]?></h3>
                            <p><?=$row["description_rapide"]?></p>
                        </div>
                        <div class="theme"><p>PHP</p></div>
                    </a>
                        <?php
                    }
                    ?>
                </div>
                <img src="./img/fleche.svg" alt="" width="75" class="sliderDroite">
                <img src="./img/fleche.svg" alt="" width="75" class="sliderGauche">
            </div>
        </main>

        <footer>
            <div class="lien">
                <a href="" title="">Mentions légales</a>
                <a href="" title="">Plan du site</a>
            </div>
        </footer>

    </div>


    <script src="./script/script.js" defer></script>
</body>

</html>

<!--Pour un chargement de l'image au moment où elle apaprait : loading="lazy" -->