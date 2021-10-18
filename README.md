Test technique
==============

Objectif
-------

Le but de ce test est de creer un salon de discussion simple qui aura pour interet de valider les competences d'un developpeur full-stack avec un mini-projet de niveau intermediaire


## Premiere etape, installer l'environnement

Le projet fonctionne sous Docker pour faciliter son installation.
Voici les differentes commandes a executer pour deployer l'environnement en local :


```
docker-compose up -d
```

Ensuite on se connecte dans le container et on installe les dependances

```
docker exec -ti test_php sh
composer install
yarn
```

Et ensuite on lance le watcher qui permettra de rafraichir les modifications js et css (toujours depuis le container) :

```
yarn watch
```

On se connecte sur http://localhost:8095/ pour verifier que le projet tourne bien

Le reste des instructions du test se trouveront sur cette page.

**Info importante**

Le maker bundle https://symfony.com/doc/current/bundles/SymfonyMakerBundle/index.html est utilisable.

Bonne chance !
