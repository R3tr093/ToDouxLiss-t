<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

##  :page_facing_up: Quelques liens utiles.

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

##  :cd: Installation - Linux Ubuntu
<hr>
<p> La première chose, c'est de s'assurer d'avoir les éléments requis pour faire fonctionner ce projet. <br> Les éléments nécessaires sont les suivants : </p>

<ul> 
<li>  :arrow_right: PHP version 7.3.8 ( Ou supérieur ).</li>
<li>  :arrow_right: Composer version 1.9.0 ( Ou supérieur ). </li>
<li>  :arrow_right: Laravel 5.8.32 ( Ou supérieur ). </li>
<li>  :arrow_right: Node version 10.16.0 ( Ou supérieur ). </li>
<li>  :arrow_right: Mysql version 5.7.27 ( Ou supérieur ). </li>

</ul>

<p> Nous allons aborder l'installation sur Ubuntu Linux. Je n'ai pas pu mettre mon projet en développement sur MacOS ou Windows, aussi si vous poursuivez cette démarche n'hésiter pas à mes partager vos ressources pour que d'autres personnes puissent profiter du guide d'installation pour leur système d'exploitation.</p>

<p> Pour l'installation des outils nécessaires j'ai suivi le guide de <a href="https://linuxhint.com/install-laravel-on-ubuntu/" target="_blank"> <i>linux hint</i></a> nous allons donc voir comment cela fonctionne. </p>

## :cd: Installation de PHP
<hr>
<p> Pour faire l'installation de PHP, nous allons exécuter dans notre terminal les commandes ci-dessous dans cette ordre : </p>

<p>:arrow_right: <b>sudo apt-get update</b>  <em>( Mise à jour du gestionnaire de paquet )</em>.<p>

<p>:arrow_right: <b>sudo apt-get install php </b><em>( Installation de PHP )</em></p>

<p>:arrow_right: <b>php -v </b><em>( Vérification de votre version de PHP )</em></p>

<p>:arrow_right: <b>sudo apt-get install curl</b><em>( Installation d'extensions nécessaires au fonctionnement de Laravel)</em></p>

<p>:arrow_right: <b>sudo apt-get install php7.1-zip </b><em>( Dépaquetage du fichier php7.1-zip )</em></p>

<p>:arrow_right: <b>sudo apt-get install php7.1-mbstring </b><em>( Dépaquetage du fichier php7.1-mbstring)</em></p>

<p>:arrow_right: <b>sudo apt-get install php-xml </b><em>( Dépaquetage du fichier php-xml)</em></p>

<p>:arrow_right: <b> curl -sS https://getcomposer.org/installer | sudo php ----install-dir=/usr/local/bin --filename=composer</b><em><br>( Installation de Composer)</em></p>

<p> :white_check_mark: <em> Après cette commande vous pouvez vérifier la présence de composer en tapant <b> composer </b> dans votre terminal </em></p>