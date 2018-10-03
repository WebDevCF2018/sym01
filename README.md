# sym01
Symfony version basic 4.1.5.2

## installation last version of Symfony for website
composer create-project symfony/website-skeleton sym01

## verification run server
php bin/console server:run

## .gitignore
add the hidden folders or files

## first commit
git add .
git commit -m"first commit :tada:"
git remote add NAME URL/GIT
git push ori master

## creating README.md
Procedurals actions

## updating libraries
composer update

## structure MVC:
Frontal contoller: public/index.php

Models: src/Entity

Views: templates/

Controllers: src/Controller/

## File type best practise
yaml => configuration

Routing => annotations

datas => json or other

## Create first controller
php bin/console make:controller
MyFirstController

creating    
    
    Your controller at
    src/Controller/MyFirstController.php
       
    and Your template at         
    templates/my_first/index.html.twig


## create new method
in MyfirstController class with annotations    

    /**
     * @Route("/", name="Accueil")
     */
    public function accueilAction(){
            // render the view
            return $this->render('my_first/accueil.html.twig');
        }

## create new view
in templates/my_first create accueil.html.twig

    {% extends 'base.html.twig' %}
    {% block title %}Accueil{% endblock %}
    {% block body %}
        {% block titre %}Notre site{% endblock %}
        {% block menu %}
            <ul>
                <li><a href="{{ path("Accueil") }}">Accueil</a></li>
                <li><a href="{{ path("my_first") }}" title="Affichage de débugage de notre premier contrôlleur généré" target="_blank">my_first</a></li>
                <li><a href=""></a></li>
            </ul>
        {% endblock %}
        {% block contenu %}{% endblock %}
    {% endblock %}