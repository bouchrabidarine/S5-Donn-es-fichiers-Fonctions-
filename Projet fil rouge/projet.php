<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> marketPlace --  Solde </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- header -->
     <header>
        <h1> Solde</h1>
    
        <nav>
            <a href="#Accueil">Accueil</a>
            <a href="#Articles">Articles</a>
            <a href="#Vendre">Vendre</a>
            <a href="#Panier">Panier 🛒</a>
        </nav>
    </header>

<!-- acceuil -->
 <section id="Accueil"class="hero">
<div class="hero-content">
    <h2>Bienvenue sur <span class="span">SOLDE</span> </h2>
    <p>Achetez ou vendez vos articles à petit prix. 
        Donnez une deuxième chance aux produits qui restent en stock.</p>
       <a href="#Articles">🛍️ Je veux acheter</a>
        <a href="#Vendre"> 💰 Je veux vendre </a>
</div>

 </section>

 <!-- article -->
  <h3> les Articles</h3>
   <section  class="article">
  <?php foreach($article as $art):?>
 
     <div class="produit">
        <img src="<?=$art["img"]?>">
        <h4> <?=htmlspecialchars($art["titre"])?></h4>
        <p> <?=htmlspecialchars($art["description"])?></p>
         <p><?=htmlspecialchars($art["prix"])?></p>
         <label for="">Quantite</label>
         <input type="number">
          <a href="#">ajouter au Panier</a>
    </div>
    <?php endforeach;?>
  </section>
  

</body>
</html>
