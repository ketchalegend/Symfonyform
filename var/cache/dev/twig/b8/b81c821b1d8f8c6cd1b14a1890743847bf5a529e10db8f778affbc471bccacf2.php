<?php

/* data.html.twig */
class __TwigTemplate_d4af473eb564a1ade393cff4890ea5f8f4e24082a92638d47db250e5f64f1d66 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "data.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "data.html.twig"));

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
                        <a class=\"nav-link\" href=\"index.php\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["navbar"], "menu_title", array()), "html", null, true);
            echo " <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"hubotcommands.php\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["navbar"], "menu2", array()), "html", null, true);
            echo "</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"logout.php\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["navbar"], "menu4", array()), "html", null, true);
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
</head>
</body>
<div class=\"container\">
    <h2><input class=\"form-control form-control-lg text-center\" padding type=\"text\" placeholder=\" Hubot Frequently asked Questions from Database\" readonly></h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Question</th>
            <th scope=\"col\">Answer</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Date</th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hubotfaq"]) || array_key_exists("hubotfaq", $context) ? $context["hubotfaq"] : (function () { throw new Twig_Error_Runtime('Variable "hubotfaq" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hubot_faq"]) {
            // line 50
            echo "            <tr>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hubot_faq"], "question", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hubot_faq"], "answer", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hubot_faq"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hubot_faq"], "date", array()), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hubot_faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
        ";
        // line 58
        echo twig_include($this->env, $context, "pagination.html", array("currentFilters" => array("myFilter" => (isset($context["filtervariables"]) || array_key_exists("filtervariables", $context) ? $context["filtervariables"] : (function () { throw new Twig_Error_Runtime('Variable "filtervariables" does not exist.', 58, $this->source); })())), "currentPage" => (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 58, $this->source); })()), "paginationPath" => "myroute", "lastPage" => (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new Twig_Error_Runtime('Variable "totalPages" does not exist.', 58, $this->source); })()), "showAlwaysFirstAndLast" => true));
        echo "
    </table>

    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js\" integrity=\"sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em\" crossorigin=\"anonymous\"></script>
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
        </footer>
    </div>
</div>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 58,  132 => 57,  123 => 54,  119 => 53,  115 => 52,  111 => 51,  108 => 50,  104 => 49,  85 => 32,  76 => 29,  70 => 26,  64 => 23,  61 => 22,  57 => 21,  48 => 15,  36 => 6,  29 => 1,);
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
                        <a class=\"nav-link\" href=\"index.php\">{{navbar.menu_title}} <span class=\"sr-only\">(current)</span></a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"hubotcommands.php\">{{navbar.menu2}}</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"logout.php\">{{navbar.menu4}}</a>
                    </li>
                {% endfor %}
        </div>
    </nav>
</head>
</body>
<div class=\"container\">
    <h2><input class=\"form-control form-control-lg text-center\" padding type=\"text\" placeholder=\" Hubot Frequently asked Questions from Database\" readonly></h2>
    <table class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Question</th>
            <th scope=\"col\">Answer</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Date</th>

        </tr>
        </thead>
        <tbody>
        {% for hubot_faq in hubotfaq %}
            <tr>
                <td>{{hubot_faq.question}}</td>
                <td>{{hubot_faq.answer}}</td>
                <td>{{hubot_faq.email}}</td>
                <td>{{hubot_faq.date}}</td>
            </tr>
        {% endfor %}
        </tbody>
        {{ include('pagination.html', { currentFilters: { myFilter: filtervariables }, currentPage: page, paginationPath: \"myroute\", lastPage: totalPages, showAlwaysFirstAndLast: true }) }}
    </table>

    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js\" integrity=\"sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em\" crossorigin=\"anonymous\"></script>
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
        </footer>
    </div>
</div>

</html>", "data.html.twig", "C:\\xampp\\htdocs\\hubot_form\\hubot_form\\templates\\data.html.twig");
    }
}
