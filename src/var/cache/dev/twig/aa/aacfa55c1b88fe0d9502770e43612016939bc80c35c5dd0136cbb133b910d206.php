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

/* chat/index.html.twig */
class __TwigTemplate_6e13f6360ddb598ef625f61d8a093cdbd4924a6088b5978d7df5ffdadc3ec083 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chat/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "LE HIBOU | Room ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chatroomDetails"]) || array_key_exists("chatroomDetails", $context) ? $context["chatroomDetails"] : (function () { throw new RuntimeError('Variable "chatroomDetails" does not exist.', 3, $this->source); })()), "room", [], "any", false, false, false, 3), 0, [], "array", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>

    <div class=\"example-wrapper\">
        <p>Channel <b>#";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chatroomDetails"]) || array_key_exists("chatroomDetails", $context) ? $context["chatroomDetails"] : (function () { throw new RuntimeError('Variable "chatroomDetails" does not exist.', 13, $this->source); })()), "room", [], "any", false, false, false, 13), 0, [], "array", false, false, false, 13), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</b> :</p>

        <div class=\"instantMessages\">
            ";
        // line 16
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["chatroomDetails"]) || array_key_exists("chatroomDetails", $context) ? $context["chatroomDetails"] : (function () { throw new RuntimeError('Variable "chatroomDetails" does not exist.', 16, $this->source); })()), "Messages", [], "any", false, false, false, 16))) {
            // line 17
            echo "                <p class=\"text-center default-msg mt-md-5 mt-sm-5\">Don't be shy... Start the discussion :)</p>
            ";
        } else {
            // line 19
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["chatroomDetails"]) || array_key_exists("chatroomDetails", $context) ? $context["chatroomDetails"] : (function () { throw new RuntimeError('Variable "chatroomDetails" does not exist.', 19, $this->source); })()), "Messages", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
                echo "                    <div class=\"card mb-3\" style=\"max-width: 540px;\">
                        <div class=\"row g-0 ";
                // line 21
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21) === (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 21, $this->source); })()))) {
                    echo "bg-primary text-white";
                } else {
                    echo "bg-light";
                }
                echo "\">
                            ";
                // line 22
                if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22) === (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 22, $this->source); })()))) {
                    // line 23
                    echo "                                <div class=\"col-md-4\">
                                    <img src=\"";
                    // line 24
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 24), "avatar", [], "any", false, false, false, 24), "html", null, true);
                    echo "\" class=\"img-fluid rounded-start\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 24), "nickname", [], "any", false, false, false, 24), "html", null, true);
                    echo "\">
                                </div>
                            ";
                }
                // line 27
                echo "                            <div class=\"col-md-8\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 29), "nickname", [], "any", false, false, false, 29), "html", null, true);
                echo "</h5>
                                    <p class=\"card-text right\">";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "body", [], "any", false, false, false, 30), "html", null, true);
                echo "</p>
                                    <p class=\"card-text\"><small class=\"text-dark\">";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "date", [], "any", false, false, false, 31), "Y-m-d H:m:s"), "html", null, true);
                echo "</small></p>
                                </div>
                            </div>
                            ";
                // line 34
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34) === (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 34, $this->source); })()))) {
                    // line 35
                    echo "                                <div class=\"col-md-4\">
                                    <img src=\"";
                    // line 36
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 36), "avatar", [], "any", false, false, false, 36), "html", null, true);
                    echo "\" class=\"img-fluid rounded-start float-right\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "author", [], "any", false, false, false, 36), "nickname", [], "any", false, false, false, 36), "html", null, true);
                    echo "\">
                                </div>
                            ";
                }
                // line 39
                echo "                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            ";
        }
        // line 43
        echo "        </div>
    </div>

    <form method=\"post\" name=\"messenger\" id=\"messenger\" action=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("manageMessage");
        echo "\">
        <div class=\"form-group\">
            <label for=\"messageTextArea\">Type your message here :</label>
            <textarea class=\"form-control\" id=\"instantMessage\" name=\"instantMessage\" rows=\"3\"></textarea>
            <button type=\"submit\" class=\"btn btn-primary mt-3 text-right\">Send</button>
        </div>
    </form>
    <form action=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("room");
        echo "\">
        <button class=\"btn btn-success mb-3\">Back to room selection</button>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            updateFeed();

            let chatDiv = document.querySelector('.instantMessages');
            scrollToLastMessage();

            let form = document.getElementById('messenger');
            function handleForm(event) {
                event.preventDefault();
            }

            form.addEventListener('submit', handleForm);

            const submit = document.querySelector('button');

            submit.onclick = e => {
                const message = document.getElementById('instantMessage');
                const data = {
                    'body': message.value,
                    'room': ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chatroomDetails"]) || array_key_exists("chatroomDetails", $context) ? $context["chatroomDetails"] : (function () { throw new RuntimeError('Variable "chatroomDetails" does not exist.', 79, $this->source); })()), "room", [], "any", false, false, false, 79), 0, [], "array", false, false, false, 79), "id", [], "any", false, false, false, 79), "html", null, true);
        echo ",
                    'author': ";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "
                }

                fetch('/manageInstantMessage', {
                    method: 'POST',
                    body: JSON.stringify(data)
                }).then((response) => response.json()
                    .then(function(data) {
                        removeWelcomeMessage();
                        updateDomFeed(data, true);
                    })
                );
            }

            function scrollToLastMessage() {
                chatDiv.scrollTop = chatDiv.scrollHeight + 15
            }

            function updateDomFeed(data, isItMe) {
                if(isItMe) {
                    addMyMessageToDom(data);
                } else {
                    addFreshMessageToDom(data);
                }

                scrollToLastMessage();
                document.getElementById(\"instantMessage\").value=\"\";
            }

            function updateFeed() {
                setInterval(function(){
                    let roomId = ";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chatroomDetails"]) || array_key_exists("chatroomDetails", $context) ? $context["chatroomDetails"] : (function () { throw new RuntimeError('Variable "chatroomDetails" does not exist.', 111, $this->source); })()), "room", [], "any", false, false, false, 111), 0, [], "array", false, false, false, 111), "id", [], "any", false, false, false, 111), "html", null, true);
        echo ";

                    fetch('/getLastMessages/'+roomId, {
                        method: 'POST',
                        body: JSON.stringify(roomId)
                    }).then((response) => response.json()
                        .then(function(datas) {
                            if(datas.length > 0) {
                                datas.forEach(element => updateDomFeed(element, false));
                            }
                        })
                    );
                }, 5000);
            }

            function addMyMessageToDom(data) {
                removeWelcomeMessage();
                dateMsg = data.message.date.date;
                dateMsg = dateMsg.substring(0, dateMsg.indexOf('.'));

                document.querySelector('.instantMessages:last-child').insertAdjacentHTML(
                    'beforeend',
                    '<div class=\"card mb-3\" style=\"max-width: 540px;\">'+
                        `<div class=\"row g-0 bg-primary text-white\">`+
                            `<div class=\"col-md-8\">`+
                                `<div class=\"card-body\">`+
                                    `<h5 class=\"card-title\">\${data.author.nickname}</h5>`+
                                    `<p class=\"card-text right\">\${data.message.body}</p>`+
                                    `<p class=\"card-text\"><small class=\"text-dark\">\${dateMsg}</small></p>`+
                                `</div>`+
                            `</div>`+
                            `<div class=\"col-md-4\">`+
                                `<img src=\"\${data.author.avatar}\" class=\"img-fluid rounded-start float-right\" alt=\"\${data.author.nickname}\">`+
                            `</div>`+
                        `</div>`+
                    `</div>`
                );
            }

            function addFreshMessageToDom(data) {
                removeWelcomeMessage();
                dateMsg = data.message.date.date;
                dateMsg = dateMsg.substring(0, dateMsg.indexOf('.'));

                document.querySelector('.instantMessages:last-child').insertAdjacentHTML(
                    'beforeend',
                    '<div class=\"card mb-3\" style=\"max-width: 540px;\">'+
                        `<div class=\"row g-0\">`+
                            `<div class=\"col-md-4\">`+
                                `<img src=\"\${data.author.avatar}\" class=\"img-fluid rounded-start float-right\" alt=\"\${data.author.nickname}\">`+
                            `</div>`+
                            `<div class=\"col-md-8\">`+
                                `<div class=\"card-body\">`+
                                    `<h5 class=\"card-title\">\${data.author.nickname}</h5>`+
                                    `<p class=\"card-text right\">\${data.message.body}</p>`+
                                    `<p class=\"card-text\"><small class=\"text-dark\">\${dateMsg}</small></p>`+
                                `</div>`+
                            `</div>`+
                        `</div>`+
                    `</div>`
                );
            }

            function removeWelcomeMessage() {
                const elements = document.getElementsByClassName(\"default-msg\");
                while(elements.length > 0){
                    elements[0].parentNode.removeChild(elements[0]);
                }
            }
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "chat/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 111,  239 => 80,  235 => 79,  213 => 59,  206 => 58,  195 => 53,  185 => 46,  180 => 43,  177 => 42,  169 => 39,  161 => 36,  158 => 35,  156 => 34,  150 => 31,  146 => 30,  142 => 29,  138 => 27,  130 => 24,  127 => 23,  125 => 22,  117 => 21,  114 => 20,  109 => 19,  105 => 17,  103 => 16,  97 => 13,  89 => 7,  82 => 6,  69 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LE HIBOU | Room {{ chatroomDetails.room[0].name }}{% endblock %}
{% block navbar %} {% endblock %}

{% block body %}
    <style>
        .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
        .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
    </style>

    <div class=\"example-wrapper\">
        <p>Channel <b>#{{ chatroomDetails.room[0].name }}</b> :</p>

        <div class=\"instantMessages\">
            {% if  chatroomDetails.Messages is empty %}
                <p class=\"text-center default-msg mt-md-5 mt-sm-5\">Don't be shy... Start the discussion :)</p>
            {% else %}
                {%for message in chatroomDetails.Messages %}
                    <div class=\"card mb-3\" style=\"max-width: 540px;\">
                        <div class=\"row g-0 {% if message.author.id is same as (me) %}bg-primary text-white{% else %}bg-light{% endif %}\">
                            {% if message.author.id is not same as (me) %}
                                <div class=\"col-md-4\">
                                    <img src=\"{{ message.author.avatar }}\" class=\"img-fluid rounded-start\" alt=\"{{ message.author.nickname }}\">
                                </div>
                            {% endif %}
                            <div class=\"col-md-8\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">{{ message.author.nickname }}</h5>
                                    <p class=\"card-text right\">{{ message.body }}</p>
                                    <p class=\"card-text\"><small class=\"text-dark\">{{ message.date|date('Y-m-d H:m:s') }}</small></p>
                                </div>
                            </div>
                            {% if message.author.id is same as (me) %}
                                <div class=\"col-md-4\">
                                    <img src=\"{{ message.author.avatar }}\" class=\"img-fluid rounded-start float-right\" alt=\"{{ message.author.nickname }}\">
                                </div>
                            {% endif %}
                        </div>
                    </div>
                {% endfor %}
            {% endif %}
        </div>
    </div>

    <form method=\"post\" name=\"messenger\" id=\"messenger\" action=\"{{ path('manageMessage') }}\">
        <div class=\"form-group\">
            <label for=\"messageTextArea\">Type your message here :</label>
            <textarea class=\"form-control\" id=\"instantMessage\" name=\"instantMessage\" rows=\"3\"></textarea>
            <button type=\"submit\" class=\"btn btn-primary mt-3 text-right\">Send</button>
        </div>
    </form>
    <form action=\"{{ path('room') }}\">
        <button class=\"btn btn-success mb-3\">Back to room selection</button>
    </form>
{% endblock %}

{% block javascripts %}
    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            updateFeed();

            let chatDiv = document.querySelector('.instantMessages');
            scrollToLastMessage();

            let form = document.getElementById('messenger');
            function handleForm(event) {
                event.preventDefault();
            }

            form.addEventListener('submit', handleForm);

            const submit = document.querySelector('button');

            submit.onclick = e => {
                const message = document.getElementById('instantMessage');
                const data = {
                    'body': message.value,
                    'room': {{ chatroomDetails.room[0].id }},
                    'author': {{ me }}
                }

                fetch('/manageInstantMessage', {
                    method: 'POST',
                    body: JSON.stringify(data)
                }).then((response) => response.json()
                    .then(function(data) {
                        removeWelcomeMessage();
                        updateDomFeed(data, true);
                    })
                );
            }

            function scrollToLastMessage() {
                chatDiv.scrollTop = chatDiv.scrollHeight + 15
            }

            function updateDomFeed(data, isItMe) {
                if(isItMe) {
                    addMyMessageToDom(data);
                } else {
                    addFreshMessageToDom(data);
                }

                scrollToLastMessage();
                document.getElementById(\"instantMessage\").value=\"\";
            }

            function updateFeed() {
                setInterval(function(){
                    let roomId = {{ chatroomDetails.room[0].id }};

                    fetch('/getLastMessages/'+roomId, {
                        method: 'POST',
                        body: JSON.stringify(roomId)
                    }).then((response) => response.json()
                        .then(function(datas) {
                            if(datas.length > 0) {
                                datas.forEach(element => updateDomFeed(element, false));
                            }
                        })
                    );
                }, 5000);
            }

            function addMyMessageToDom(data) {
                removeWelcomeMessage();
                dateMsg = data.message.date.date;
                dateMsg = dateMsg.substring(0, dateMsg.indexOf('.'));

                document.querySelector('.instantMessages:last-child').insertAdjacentHTML(
                    'beforeend',
                    '<div class=\"card mb-3\" style=\"max-width: 540px;\">'+
                        `<div class=\"row g-0 bg-primary text-white\">`+
                            `<div class=\"col-md-8\">`+
                                `<div class=\"card-body\">`+
                                    `<h5 class=\"card-title\">\${data.author.nickname}</h5>`+
                                    `<p class=\"card-text right\">\${data.message.body}</p>`+
                                    `<p class=\"card-text\"><small class=\"text-dark\">\${dateMsg}</small></p>`+
                                `</div>`+
                            `</div>`+
                            `<div class=\"col-md-4\">`+
                                `<img src=\"\${data.author.avatar}\" class=\"img-fluid rounded-start float-right\" alt=\"\${data.author.nickname}\">`+
                            `</div>`+
                        `</div>`+
                    `</div>`
                );
            }

            function addFreshMessageToDom(data) {
                removeWelcomeMessage();
                dateMsg = data.message.date.date;
                dateMsg = dateMsg.substring(0, dateMsg.indexOf('.'));

                document.querySelector('.instantMessages:last-child').insertAdjacentHTML(
                    'beforeend',
                    '<div class=\"card mb-3\" style=\"max-width: 540px;\">'+
                        `<div class=\"row g-0\">`+
                            `<div class=\"col-md-4\">`+
                                `<img src=\"\${data.author.avatar}\" class=\"img-fluid rounded-start float-right\" alt=\"\${data.author.nickname}\">`+
                            `</div>`+
                            `<div class=\"col-md-8\">`+
                                `<div class=\"card-body\">`+
                                    `<h5 class=\"card-title\">\${data.author.nickname}</h5>`+
                                    `<p class=\"card-text right\">\${data.message.body}</p>`+
                                    `<p class=\"card-text\"><small class=\"text-dark\">\${dateMsg}</small></p>`+
                                `</div>`+
                            `</div>`+
                        `</div>`+
                    `</div>`
                );
            }

            function removeWelcomeMessage() {
                const elements = document.getElementsByClassName(\"default-msg\");
                while(elements.length > 0){
                    elements[0].parentNode.removeChild(elements[0]);
                }
            }
        })
    </script>
{% endblock%}
", "chat/index.html.twig", "/var/www/templates/chat/index.html.twig");
    }
}
