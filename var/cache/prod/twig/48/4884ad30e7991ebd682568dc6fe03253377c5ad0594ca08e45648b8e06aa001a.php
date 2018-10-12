<?php

/* base.html.twig */
class __TwigTemplate_218203201b59e135e73673ba312a7b6a43428dbc368a979c5b8866a683d75f0b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'add' => array($this, 'block_add'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('navbar', $context, $blocks);
        // line 36
        echo "
    ";
        // line 37
        $this->displayBlock('add', $context, $blocks);
        // line 41
        echo "


    ";
        // line 44
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Hubot m3connect";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css\" integrity=\"sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        echo "\">
    ";
    }

    // line 13
    public function block_navbar($context, array $blocks = array())
    {
        // line 14
        echo "    <nav class=\"navbar navbar-expand-lg navbar navbar-dark bg-dark\">
        <a class=\"navbar-brand\" href=\"#\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"index.php\">Hubot FAQ<span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/commands\">Hubot Commands</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"/login\">Login</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
                </li>
        </div>
    </nav>
";
    }

    // line 37
    public function block_add($context, array $blocks = array())
    {
        // line 38
        echo "

    ";
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\" integrity=\"sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js\" integrity=\"sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em\" crossorigin=\"anonymous\"></script>
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
";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  122 => 45,  119 => 44,  113 => 38,  110 => 37,  101 => 31,  82 => 14,  79 => 13,  73 => 10,  67 => 6,  64 => 5,  58 => 4,  54 => 44,  49 => 41,  47 => 37,  44 => 36,  42 => 13,  39 => 12,  37 => 5,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\xampp\\htdocs\\hubot_form\\hubot_form\\templates\\base.html.twig");
    }
}
