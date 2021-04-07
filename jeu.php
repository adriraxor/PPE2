<?php
require_once '_require.php';
require_once 'header.php';      //include les pages de la data class de la bdd
$test = new DB();               //instanciation de la class BDD
$cnx = $test->getCnx();         //récupère la variable de la connexion à la bdd avec une méthode getCnx()


$query1 = $cnx->prepare('SELECT * FROM byg_produit WHERE idProduit = ?');   //requete qui récupère le produit selon l'id du produit
$query1->execute([$_GET['idProduit']]);

$jeu = $query1->fetchAll();                                                 //cherche l'enregistrement 



?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8 "name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style/bootstrap/css/catalogue.css">
    <link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/bootstrap/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="style/bootstrap/css/jeu.css"/>
    <!-- fotorama (images style carousel) -->
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <title>Jeu - BuyYourGamesFR</title>
</head>
<body>


    <div class="container" style="margin-top: 50px;">       
        <?php foreach ($jeu as $info_jeu): // permet d'afficher les informations du produit?>               
            <div class="row">              

                <div class="medias col-6">

                    <div class="fotorama" data-nav="thumbs">

                        <a href="style/imgJeux/Catalogue/<?= $info_jeu['jaquette'] ?>">
                            <img src="style/imgJeux/Catalogue/<?= $info_jeu['jaquette'] ?>">
                        </a>

                        <a href="style/imgJeux/Descriptions/temtem-p-1.jpg">
                            <img src="style/imgJeux/Descriptions/temtem-p-1.jpg">
                        </a>

                        <a href="style/imgJeux/Descriptions/temtem-p-2.jpg">
                            <img src="style/imgJeux/Descriptions/temtem-p-2.jpg">
                        </a>

                        <a href="style/imgJeux/Descriptions/temtem-p-3.jpg">
                            <img src="style/imgJeux/Descriptions/temtem-p-3.jpg">
                        </a>

                        <a href="style/imgJeux/Descriptions/temtem-p-2.jpg">
                            <img src="style/imgJeux/Descriptions/temtem-p-2.jpg">
                        </a>

                        <a href="style/imgJeux/Descriptions/temtem-p-2.jpg">
                            <img src="style/imgJeux/Descriptions/temtem-p-2.jpg">
                        </a>

                    </div>

                </div>

                <div class="infos col-6">

                    <h1 class="buy titre text-center"><?= $info_jeu['nomProduit'] ?></h1>
                    <div class="row" style="padding-top: 50px;">
                        <div class="actions col-10 text-center">
                            <h6>
                                <a href="" style="color: black">Ajouter à la liste de souhaits</a>
                            </h6>
                        </div>
                        <div class="col-2">
                            <div class="heart"></div>
                        </div>

                    </div>
                    <div class="buy info-prix row">
                        <div class="col-6 text-center">

                            <p class="prix-conseil">
                                Prix conseillé : 
                                <?= number_format($info_jeu['prix'] * 1.5, 2, ',', ' '); ?> €
                                <br/>
                                <h3 style="color: white;">- 50%</h3>
                            </p>
                        </div>

                        <div class="col-6 text-center">
                            <h3 class="prix">
                                <?= number_format($info_jeu['prix'], 2, ',', ' '); ?> €
                            </h3>

                            <a href="addpanier.php?idProduit=<?= $info_jeu['idProduit'];?>">
                                <button class="btn btn-warning">Ajouter au panier</button>

                            </a>
                        </div>

                    </div>

                </div>

            </div>

            <div class="row">

                <div class="details">

                    <p>
                        <?= $info_jeu['description'] ?>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit culpa, tempore consectetur, facilis non officiis nobis deserunt esse est debitis sint placeat accusamus corrupti maxime aliquam? Autem perspiciatis, non nemo repellat excepturi error ipsa vel omnis esse, quidem temporibus. Beatae harum corporis ullam pariatur corrupti ut aliquid magnam maxime ea in illum ipsa doloribus voluptas, cupiditate doloremque officia excepturi, perferendis sint, nam consequatur aspernatur voluptatem numquam culpa accusantium. Quo tempora ex eligendi, nemo harum, corrupti, officiis recusandae libero tempore rerum obcaecati soluta facilis praesentium eaque repellat! Reiciendis nesciunt, animi vitae excepturi perspiciatis aperiam eum odio quae deleniti, similique nemo deserunt placeat cupiditate iure maiores cum tempore mollitia incidunt aspernatur! Quisquam, porro odit ipsam, vitae natus odio saepe esse temporibus blanditiis, atque dolore. Eum assumenda placeat molestiae voluptatibus excepturi id nobis corporis ratione fugiat dolorem dignissimos, cupiditate quae explicabo. Ducimus praesentium alias, porro saepe vitae eveniet rerum magni natus! Harum vero, magni corporis voluptatum magnam natus maiores non voluptas consequuntur ullam itaque, in dicta aspernatur laborum nihil adipisci numquam aperiam inventore perferendis dolores error voluptatibus at culpa. Harum nihil consequatur eius repellendus ad sit non mollitia laboriosam optio aut nisi vel itaque, eos eaque veniam, illum nostrum nulla. Quia repellendus doloremque velit laudantium tenetur delectus ab. Debitis qui, ipsum, distinctio numquam doloremque, dolores esse placeat cum at sed nihil quaerat recusandae deserunt repudiandae porro harum illo aspernatur. Atque itaque, qui nemo labore vero perferendis iste eum enim voluptatibus, ratione quae tempore, velit voluptatem delectus porro vitae fuga consectetur. Modi saepe possimus delectus dolorum magnam ex cum a quisquam accusantium doloremque reiciendis repellat, voluptate sint cupiditate, voluptatum dolores repellendus iusto quod.

                    </p>


                </div>

            </div>





        <?php endforeach ?>
    </div>    

























    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
</body>
</html>







<!-- 

To-Do list:
- Trouver la requête SQL selectionnant l'ID du jeu séléctionné dans le catalogue
- Transfomer mon fetchAll de la fonction query de db.class.php en fetch simple pour afficher un seul jeu


 -->