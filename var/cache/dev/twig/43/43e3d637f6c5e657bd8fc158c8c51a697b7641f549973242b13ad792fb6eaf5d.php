<?php

/* data/data.html.twig */
class __TwigTemplate_94772345c4ca51eeb03ca810924157509bd2dee2433821b06d74289b3b1533b2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "data/data.html.twig", 1);
        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'add' => array($this, 'block_add'),
            'javacript' => array($this, 'block_javacript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "data/data.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "data/data.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 4
        echo "    <nav class=\"navbar navbar-expand-lg navbar navbar-dark bg-dark\">
        <a class=\"navbar-brand\" href=\"#\"><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"\">
            m3connect
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create");
        echo "\">Hubot FAQ<span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hubot_commands");
        echo "\">Hubot Commands</a>
                </li>
                </ul>
                <ul class=\"navbar-nav ml-auto\">
                ";
        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 22
            echo "                    <li class=\"nav-item text-nowrap\">
                        <a class=\"nav-link\"
                           href=\"#\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->source); })()), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                    </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ml-auto\" href=\"";
            // line 27
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Sign Out</a>
                </li>
                 ";
        }
        // line 30
        echo "                </ul>
        </div>
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_add($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "add"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "add"));

        // line 35
        echo "    ";
        if ((isset($context["hubotfaq"]) || array_key_exists("hubotfaq", $context) ? $context["hubotfaq"] : (function () { throw new Twig_Error_Runtime('Variable "hubotfaq" does not exist.', 35, $this->source); })())) {
            // line 36
            echo "<div class=\"container\">
    <h2><input class=\"form-control form-control-lg text-center\" padding type=\"text\" placeholder=\" Hubot Frequently asked Questions from Database\" readonly></h2>
    <table id=\"hubotfaq\" class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Question</th>
            <th scope=\"col\">Answer</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Delete</th>

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
                <td><a href=\"edit/";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hubot_faq"], "id", array()), "html", null, true);
                echo "\" class=\"btn btn-light delete-article\">Edit</a></td>
                <td><a href=\"\" class=\"btn btn-danger delete-article\" data-id=\"";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hubot_faq"], "id", array()), "html", null, true);
                echo "\">Delete</a></td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hubot_faq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "        </tbody>
    </table>
    ";
        } else {
            // line 61
            echo "    <div class=\"container\">
    <h2><input class=\"form-control form-control-lg text-center\" padding type=\"text\" placeholder=\" Hubot Frequently asked Questions from Database\" readonly></h2>
            <div class=\"alert alert-danger\" role=\"alert\">
  <strong>No articles to display</strong>
</div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_javacript($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javacript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javacript"));

        // line 70
        echo "
        <script src=\"js/main.js\"></script>

        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js\" integrity=\"sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em\" crossorigin=\"anonymous\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "data/data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 70,  194 => 69,  178 => 61,  173 => 58,  164 => 55,  160 => 54,  156 => 53,  152 => 52,  148 => 51,  145 => 50,  141 => 49,  126 => 36,  123 => 35,  114 => 34,  101 => 30,  95 => 27,  89 => 24,  85 => 22,  83 => 21,  76 => 17,  70 => 14,  58 => 5,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block navbar %}
    <nav class=\"navbar navbar-expand-lg navbar navbar-dark bg-dark\">
        <a class=\"navbar-brand\" href=\"#\"><img src=\"{{ asset('images/logo.jpg') }}\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"\">
            m3connect
        </a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('create') }}\">Hubot FAQ<span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"{{ path('hubot_commands') }}\">Hubot Commands</a>
                </li>
                </ul>
                <ul class=\"navbar-nav ml-auto\">
                {% if is_granted('ROLE_USER') %}
                    <li class=\"nav-item text-nowrap\">
                        <a class=\"nav-link\"
                           href=\"#\">{{ app.user.username }}</a>
                    </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ml-auto\" href=\"{{path('logout')}}\">Sign Out</a>
                </li>
                 {% endif %}
                </ul>
        </div>
    </nav>
{% endblock %}
{% block add %}
    {% if hubotfaq %}
<div class=\"container\">
    <h2><input class=\"form-control form-control-lg text-center\" padding type=\"text\" placeholder=\" Hubot Frequently asked Questions from Database\" readonly></h2>
    <table id=\"hubotfaq\" class=\"table\">
        <thead>
        <tr>
            <th scope=\"col\">Question</th>
            <th scope=\"col\">Answer</th>
            <th scope=\"col\">Email</th>
            <th scope=\"col\">Delete</th>

        </tr>
        </thead>
        <tbody>
        {% for hubot_faq in hubotfaq %}
            <tr>
                <td>{{hubot_faq.question}}</td>
                <td>{{hubot_faq.answer}}</td>
                <td>{{hubot_faq.email}}</td>
                <td><a href=\"edit/{{ hubot_faq.id }}\" class=\"btn btn-light delete-article\">Edit</a></td>
                <td><a href=\"\" class=\"btn btn-danger delete-article\" data-id=\"{{ hubot_faq.id }}\">Delete</a></td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    {% else %}
    <div class=\"container\">
    <h2><input class=\"form-control form-control-lg text-center\" padding type=\"text\" placeholder=\" Hubot Frequently asked Questions from Database\" readonly></h2>
            <div class=\"alert alert-danger\" role=\"alert\">
  <strong>No articles to display</strong>
</div>
    {% endif %}
{% endblock %}

    {% block javacript %}

        <script src=\"js/main.js\"></script>

        <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js\" integrity=\"sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em\" crossorigin=\"anonymous\"></script>
    {% endblock %}", "data/data.html.twig", "C:\\xampp\\htdocs\\hubot_form\\hubot_form\\templates\\data\\data.html.twig");
    }
}
