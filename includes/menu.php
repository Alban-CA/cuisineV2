<?php
 /*
    include 'includes/post.php';
    include 'includes/util.inc.php';*/

 ?>

<?php 
 $menus = [
        ['a href' => 'http://localhost/projet/sitecuisineV2/index.php', 'label' => 'Acceuil'],
        ['a href' => 'http://localhost/projet/sitecuisineV2/pages/recettes/recettes.php','label' => 'Recettes'],
        ['a href' => 'http://localhost/projet/sitecuisineV2/pages/materiels/materiels.php','label' => 'Matériels'],
       /* ['a href' => 'http://localhost/projet/sitecuisineV2/pages/recherche.php','label' => 'Recherche']*/
    ];
 ?>
<nav>
    <ul class="list-inline">
    <?php foreach ($menus as $menu): ?>
        <li>
            <a href="<?php echo $menu['a href']; ?>">
                <?php echo $menu['label']; ?>
            </a>
        </li>
    <?php endforeach ?>            
    </ul>
</nav>

