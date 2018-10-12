<?php

/* submit.html.twig */
class __TwigTemplate_73f70a8960894597b8ea3f17d8f7d0fc032075cdaaf13002592fb1d44fca78b5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "submit.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new Twig_Error_Runtime('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css\" integrity=\"sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B\" crossorigin=\"anonymous\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

    <nav class=\"navbar navbar-expand-lg navbar navbar-dark bg-dark\">
        <a class=\"navbar-brand\" href=\"#\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["menu_title"]) || array_key_exists("menu_title", $context) ? $context["menu_title"] : (function () { throw new Twig_Error_Runtime('Variable "menu_title" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["nav"]) || array_key_exists("nav", $context) ? $context["nav"] : (function () { throw new Twig_Error_Runtime('Variable "nav" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["navbar"]) {
            // line 22
            echo "                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["navbar"], "menu_title", array()), "html", null, true);
            echo " <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["navbar"], "menu2", array()), "html", null, true);
            echo "</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"login.php\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["navbar"], "menu3", array()), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navbar'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>
    </nav>
    <style>
        .speech {
            border: 1px solid #DDD;
            width: 300px;
            padding: 0;
            margin: 0
        }

        .speech input {
            border: 0;
            width: 240px;
            display: inline-block;
            height: 30px;
        }

        .speech img {
            float: right;
            width: 40px
        }
    </style>
</head>

<body>
<div class=\"container\">
    <div class=\"alert alert-success\" role=\"alert\">
        Success alert!
    </div>
    <input class=\"form-control\" type=\"text\" placeholder=\"Sent successfully\" readonly>
    <div>
        <a class=\"nav-link\" href=\"/Hubot_faq/index.php\"><button type=\"button\" class=\"btn btn-primary\">Zurück</button></a>
    </div>

</body>
<div class=\"s24-bar__utilities w-full bg-color-black-secondary m-a-0\">
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 text-center\">
                    <p style=\"margin-top: 14px;\">
                        Copyrights © All Rights Reserved <a class=\"s24-link s24-link--effect-alpha\" href=\"#\"></a>
                    </p>
                </div>
            </div>
        </div>
</div>
</div>

</footer>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 32,  76 => 29,  70 => 26,  64 => 23,  61 => 22,  57 => 21,  48 => 15,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <title>{{title}}</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css\" integrity=\"sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B\" crossorigin=\"anonymous\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

    <nav class=\"navbar navbar-expand-lg navbar navbar-dark bg-dark\">
        <a class=\"navbar-brand\" href=\"#\">{{menu_title}}</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                {% for navbar in nav %}
                    <li class=\"nav-item active\">
                        <a class=\"nav-link\" href=\"#\">{{navbar.menu_title}} <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">{{navbar.menu2}}</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"login.php\">{{navbar.menu3}}</a>
                    </li>
                {% endfor %}
        </div>
    </nav>
    <style>
        .speech {
            border: 1px solid #DDD;
            width: 300px;
            padding: 0;
            margin: 0
        }

        .speech input {
            border: 0;
            width: 240px;
            display: inline-block;
            height: 30px;
        }

        .speech img {
            float: right;
            width: 40px
        }
    </style>
</head>

<body>
<div class=\"container\">
    <div class=\"alert alert-success\" role=\"alert\">
        Success alert!
    </div>
    <input class=\"form-control\" type=\"text\" placeholder=\"Sent successfully\" readonly>
    <div>
        <a class=\"nav-link\" href=\"/Hubot_faq/index.php\"><button type=\"button\" class=\"btn btn-primary\">Zurück</button></a>
    </div>

</body>
<div class=\"s24-bar__utilities w-full bg-color-black-secondary m-a-0\">
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-12 text-center\">
                    <p style=\"margin-top: 14px;\">
                        Copyrights © All Rights Reserved <a class=\"s24-link s24-link--effect-alpha\" href=\"#\"></a>
                    </p>
                </div>
            </div>
        </div>
</div>
</div>

</footer>

</html>", "submit.html.twig", "C:\\xampp\\htdocs\\hubot_form\\hubot_form\\templates\\submit.html.twig");
    }
}
