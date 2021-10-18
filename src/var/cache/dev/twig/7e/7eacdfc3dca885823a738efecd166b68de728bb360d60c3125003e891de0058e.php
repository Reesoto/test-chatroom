<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* homepage.html.twig */
class __TwigTemplate_9006a8f986c738017173f6845a3d40908f2bf6a5528151ff6470f0c3920543a6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"base-block\">
        <pre class=\"code\">
            Merci d'exécuter ces commandes pour initiliser l'application et garantir son bon fonctionnement :

            > docker exec -ti test_php sh
            > composer install
            > php bin/console doctrine:migrations:migrate
            > php bin/console doctrine:fixtures:load
        </pre>

        <div style=\"border:1px dashed\">
            <p class=\"lead\">
                J'aurais souhaité mettre en place Mercure pour pouvoir push des events en SSE et ne pas passer par un setInterval en JS mais je n'ai pas eu le temps de le mettre en place et de le faire fonctionner dans le delais imparti des 2h.
                <br>Idem pour la mise en place des TU que je n'ai pas eu le temps de réaliser.
            </p>
        </div>

        <h1>
            Bravo ! Step 1 done
        </h1>
        <p>
            Maintenant nous allons rentrer dans le vif du sujet <br><br>
            Le but sera de creer une page qui reproduira un salon de discussion (chat) qui sera accessible <a href=\"/chat\">via ce lien</a><br>
            Lorsque l'on arrive sur cette page, il faudra demander a l'utilisateur son nom.<br><br>
            Une fois le nom renseigne on affiche un chat qui prendra toute la page.
            En bas de ce bloc de chat il y aura un champ permettant d'ecrire un message, avec un bouton permettant d'envoyer le message.<br>
            On enregistre le message en base de donnees (avec l'heure et le nom renseigne) et on rafraichit la page.<br><br>
            Dans le chat on affichera tous les messages dans l'ordre chronologique (comme dans tous les chats) avec le nom du createur du message et l'heure d'envoie.<br>
            Tous les messages associes au nom renseigne par l'utilisateur a l'entree dans le chat seront alignes du cote droit, et les autres messages du cote gauche.<br>
        </p>
        <div class=\"blankspace\"></div>
        <h2>Petit exemple d'affichage (pas obligatoire d'avoir le meme visuel)</h2>
        <img src=\"/example.png\">
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
    <div class=\"base-block\">
        <pre class=\"code\">
            Merci d'exécuter ces commandes pour initiliser l'application et garantir son bon fonctionnement :

            > docker exec -ti test_php sh
            > composer install
            > php bin/console doctrine:migrations:migrate
            > php bin/console doctrine:fixtures:load
        </pre>

        <div style=\"border:1px dashed\">
            <p class=\"lead\">
                J'aurais souhaité mettre en place Mercure pour pouvoir push des events en SSE et ne pas passer par un setInterval en JS mais je n'ai pas eu le temps de le mettre en place et de le faire fonctionner dans le delais imparti des 2h.
                <br>Idem pour la mise en place des TU que je n'ai pas eu le temps de réaliser.
            </p>
        </div>

        <h1>
            Bravo ! Step 1 done
        </h1>
        <p>
            Maintenant nous allons rentrer dans le vif du sujet <br><br>
            Le but sera de creer une page qui reproduira un salon de discussion (chat) qui sera accessible <a href=\"/chat\">via ce lien</a><br>
            Lorsque l'on arrive sur cette page, il faudra demander a l'utilisateur son nom.<br><br>
            Une fois le nom renseigne on affiche un chat qui prendra toute la page.
            En bas de ce bloc de chat il y aura un champ permettant d'ecrire un message, avec un bouton permettant d'envoyer le message.<br>
            On enregistre le message en base de donnees (avec l'heure et le nom renseigne) et on rafraichit la page.<br><br>
            Dans le chat on affichera tous les messages dans l'ordre chronologique (comme dans tous les chats) avec le nom du createur du message et l'heure d'envoie.<br>
            Tous les messages associes au nom renseigne par l'utilisateur a l'entree dans le chat seront alignes du cote droit, et les autres messages du cote gauche.<br>
        </p>
        <div class=\"blankspace\"></div>
        <h2>Petit exemple d'affichage (pas obligatoire d'avoir le meme visuel)</h2>
        <img src=\"/example.png\">
    </div>
{% endblock %}
", "homepage.html.twig", "/var/www/templates/homepage.html.twig");
    }
}
