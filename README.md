# Docker-PHP-MySQL

<img src = "dockerEtiquette.svg"><br><br>

<h3> Avant-propos </h3>

<p> Ceci est un guide de création d'un environnement de développement avec Docker, ce guide suppose que vous êtes sur un système Linux, et que vous avez installez deux choses : </p>

<ul>
  <li> <a href="https://www.digitalocean.com/community/tutorials/comment-installer-et-utiliser-docker-sur-ubuntu-18-04-fr">Docker </a></li>
  <li> <a href="https://docs.docker.com/compose/install/"> Docker-compose </a><br><em> La commande : sudo apt-get install docker-compose fonctionne très bien aussi bien que plus simpliste </em></li>

</ul>    
    
<p> Le lien concernant docker a été testé le 22 juin 2019. Et est rédigé en français </p>
<p> Le lien concernant docker-compose à été testé le 23 juin 2019. Et est rédigé en anglais </p>

<p> Le tutoriel est écrit dans le cas où votre système d'exploitation est de type Linux, pour faire fonctionner Docker sous windows il vous faudra utiliser un logiciel tiers (boot2docker) que je n'ai pas eut l'utilité d'installer, mais dès que vous aurez installez docker et que vous le ferez fonctionner via boot2docker, nous n'aurons plus à prendre en compte votre système d'exploitation et vous pourrez suivre normalement le tutoriel. </p>

<p> <strong>Ce tutoriel n'as pas pour objectif de vous faire comprendre comment fonctionne Docker </strong>, mais juste de déployer un environnement de développement, si vous voulez maîtrisez Docker je vous fournis une liste des sources m'ayant inspiré dans mon apprentissage de Docker, ces sources seront en français, et en anglais. </p>

<p> Nous allons donc créer un environnement simple comprenant PHP en version 7.3, un serveur Apache, et une base de donnée MySQL, bonne lecture. </p>
