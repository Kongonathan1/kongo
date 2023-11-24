<?php 
$projects = [
    [
      'title' => 'TodoList',
      'description' => "
          Ce projet représente une todolist avec des fonctionnalités simples et efficaces notamment la création, la modification et la suppression de tâches.
          Ce projet m'a permis d'expérimenter concrètement la notion de CRUD en PHP.",
      'technologies' => [
        'HTML',
        'Sass',
        'Bootstrap',
        'PHP',
        'MySQL',
      ],
      'images' => [
        'img/todolist (1).png',
        'img/todolist (2).png',
        'img/todolist (3).png',
        'img/todolist (4).png',
        'img/todolist (5).png',
        'img/todolist (6).png'
      ],
      'link' => "https://github.com/Kongonathan1/todolist/tree/main"
    ], 
    [
        'title' => 'Blog',
        'description' => "
        Ceci est un blog avec toutes les fonctionnalités requises. On a la possibilité de trier les articles par catégorie et de naviguer dans le listing à travers une pagination simple et de laisser un ou plusieurs commentaires pour un article en particulier.
        Il est bien sûr administrable à travers une parie réservée aux administateurs qui est protégée par un système de connexion.
        Au sein de cette administration, nous avons une gestion des articles et des catégories avec laquelle il est possible de créer, d'éditer, et de supprimer les articles et les catégories.
        De plus pour une bonne gestion de la base de donnée, une suppression en cascade de l'image reliée à l'article est fait lors de la supresion de l'article.",
        'technologies' => [
          'HTML',
          'Sass',
          'Bootstrap 5',
          'PHP (Programmation Orientée Objet)',
          'Composer',
          'MySQL',
        ],
        'images' => [
          'img/blog (1).png',
          'img/blog (2).png',
          'img/blog (3).png',
          'img/blog (4).png',
          'img/blog (12).png',
          'img/blog (13).png',
          'img/blog (14).png',
          'img/blog (15).png',
          'img/admin-blog (1).png',
          'img/admin-blog (2).png',
          'img/admin-blog (3).png',
          'img/admin-blog (4).png',
          'img/admin-blog (5).png',
          'img/admin-blog (6).png',
          'img/admin-blog (7).png',
        ],
        'link' => "https://github.com/Kongonathan1/blog/tree/main"
    ], [
        'title' => 'E-commerce',
        'description' => "
        Ce projet rpésente un site e-commerce entièrement administrable d'une une interface d'administration dont l'accès est restreint.Un système d'inscription, de connexion et déconnexion des utilisateurs est disponible.
        Les différents produits sont listés et paginés sur l'acceuil avec la possibilité de les trier par catégories.Pour chaque produit, est muni d'une image, d'une partie de sa description et d'un bouton pour voir plus de détails par rapport au produit.
        La page du détail d'un produit affiche  le prix de ce produit, sa des cription complète, un un carousel d'iùages s'il y'en a plus d'une; On a également un bouton pour passer directemnet la commande de ce produit et un autre bouton pour ajouter le produit au panier.
        Si un produit est ajouter au panier, un troisième bouton menant au panier apparaît au niveau de la page de détails de chaque produit. Le panier en question posède différentes actions telles que l'ajout du même produit, la suppression d'un produit, la suppression de tout les produits d'une ligne, la possibilité de vider le panier et enfin la possibilité de passer une commande.
        Une fois que la commande est passée , si tout est bon, le panier se vide, on ajoute un mesage flash et on crée la commande de l'utilisateur en question.Un utilisateur non connecté ne peut rien ajouter au panier et ne peut rien acheter. <br>
        La plateforme de e-commerce est bien sûr équipée d'une administration permettant de gérer les produits, les catégories associées a ces produits, les utilisateurs et plus-tard les commandes. Enfin on a une page profil de l'utilisateur qui listera les différents commandes de l'utilisateur, son rôle etc.",
        'technologies' => [
            'Symfony 6',
            'Twig',
            'Bootstrap 5',
            'PHP (Programmation Orientée Objet)',
            'Composer',
            'Doctrine',
        ],
        'images' => [
            'img/1.png',
            'img/2.png',
            'img/3.png',
            'img/4.png',
            'img/5.png',
            'img/6.png',
            'img/7.png',
            'img/8.png',
            'img/9.png',
            'img/10.png',
            'img/11.png',
            'img/12.png',
            'img/13.png',
            'img/14.png',
            'img/15.png',
            'img/16.png',
            'img/17.png',
            'img/18.png',
            'img/19.png',
            'img/20.png',
            'img/21.png',
            'img/22.png',
            'img/23.png',
            'img/24.png',
            'img/bonus.png',
            'img/25.png',
            'img/26.png',
            'img/27.png',
        ],
        'link' => "https://github.com/Kongonathan1/ecommerce/tree/main"
    ], [
        'title' => 'Agence immobilière',
        'description' => "C'est une application web de gestion d'une agence immobilière avec toutes les fonctionnalités de base (CRUD).
        La page de listing des biens est muni d'un mini moteur de recherche interne permettent ainsi de filtrer les biens.
        Nous avons également la possibilité de contacter l'agence l'orsque l'on est intéresser par un bien spécifiquement ou pas.
        De plus l'administration est protégé par un système de connexion. Cette administration permet de gérer les options des biens, les messages et les biens.
        On a la possibilité de spécifier si un bien a été vendu ou non et par conséquent de l'afficher ou pas sur le site.",
        'technologies' => [
            'Symfony 6',
            'Twig',
            'Bootstrap 5',
            'PHP (Programmation Orientée Objet)',
            'Composer',
            'Doctrine',
        ],
        'images' => [
            'img/immo_1.png',
            'img/immo_2.png',
            'img/immo_3.png',
            'img/immo_4.png',
            'img/immo_5.png',
            'img/immo_6.png',
            'img/immo_7.png',
            'img/immo_8.png',
            'img/immo_8(1).png',
            'img/immo_9.png',
            'img/immo_10.png',
            'img/immo_11.png',
            'img/immo_12.png',
            'img/immo_13.png',
            'img/immo_14.png',
            'img/immo_15.png',
            'img/immo_15(1).png',
            'img/immo_16.png',
            'img/immo_17.png',
            'img/immo_18.png',
            'img/immo_19.png',
            'img/immo_20.png',
            'img/immo_21.png',
            'img/immo_22.png',
            'img/immo_23.png',
            'img/immo_24.png',
            'img/immo_24(1).png',
            'img/immo_25.png',
            'img/immo_26.png',
            'img/immo_27.png',
            'img/immo_28.png',
            'img/immo_29.png',
            'img/immo_30.png',
            'img/immo_31.png',
            'img/immo_32.png',
            'img/immo_33.png',
            'img/immo_35.png',
        ],
        'link' => "https://github.com/Kongonathan1/immobilier/tree/main"
    ]
];

$skills = [
    [
       'title' => 'HTML',
       'description' => '',
       'image' => 'img/skills/html.png'
    ],
    [
       'title' => 'CSS',
       'description' => '',
       'image' => 'img/skills/css.png'
    ],
    [
       'title' => 'Bootstrap',
       'description' => '',
       'image' => 'img/skills/bootstrap.png'
    ],
    [
       'title' => 'Algo',
       'description' => '',
       'image' => 'img/skills/algo.png'
    ],
    [
       'title' => 'Sass',
       'description' => '',
       'image' => 'img/skills/sass.png'
    ],
    [
       'title' => 'PHP',
       'description' => '',
       'image' => 'img/skills/php.png'
    ],
    [
       'title' => 'SQL',
       'description' => '',
       'image' => 'img/skills/sql.png'
    ],
    [
       'title' => 'Symfony 6',
       'description' => '',
       'image' => 'img/skills/symfony.png'
    ],
    [
       'title' => 'Twig',
       'description' => '',
       'image' => 'img/skills/twig.png'
    ],
    [
       'title' => 'Laravel 10',
       'description' => '',
       'image' => 'img/skills/laravel.png'
    ],
    [
       'title' => 'JacaScript',
       'description' => '',
       'image' => 'img/skills/js.png'
    ],
];

?>