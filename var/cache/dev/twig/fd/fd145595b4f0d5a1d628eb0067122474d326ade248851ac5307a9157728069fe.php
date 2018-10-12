<?php

/* home.html.twig */
class __TwigTemplate_64d111b791580f4338cefb720da732e3f647bedabc116e81564925e680543f34 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->blocks = array(
            'add' => array($this, 'block_add'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->source); })()), array(0 => "bootstrap_4_layout.html.twig"), true);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_add($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "add"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "add"));

        // line 5
        echo "    <div role=\"main\" class=\"container\">
        <h2><input class=\"form-control form-control-lg text-center\"  type=\"text\" placeholder=\" Hubot Frequently asked Questions\" readonly></h2>
        <p class=\"form-control font-weight-light\">Hubot soll in Zukunft den Mitarbeitern helfen, antworten auf bestimmte Fragen zu finden, Reminder und Tasklisten zu erstellen und vieles mehr. Dieses Formular dient der Erfassung alle Hubot Einträge.
            Es geht im Wesentlichen darum alle Firmeninterne FAQs zu sammeln, spricht Informationen, die man für wichtig hält und denkt, dass es den ein oder anderen von Nutzen sein wird.
            Die Einträge über dieses Formular werden im Anschluss an dem Bot weitergeleitet. Diesen kann man dann über Mattermost anschreiben, wenn man Informationen sucht.
            Für mehrere Infos bitte den Hubothelp Kanal auf Mattermost beitreten.</p>
        <div class=\"form-group\">
            <div class=\"col-auto\">
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
                <div class=\"form-group\">
                    <div class=\"col-auto\">
                        <label for=\"exampleInputEmail1\">Email address:</label>
                        <div class=\"input-group mb-3 \">
                            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "email", array()), 'widget');
        echo "
                            <div class=\"input-group-append\">
                                <span class=\"input-group-text\">@m3connect.de</span>
                            </div>
                        </div>
                        <small class=\"form-text text-muted\">Deine E-Mail wird verwendet um Rücksprache mit Dir zu halten</small>


    <div class=\"form-group\" >
        <label for=\"exampleFormControlTextarea1\">Frage:</label>
        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "question", array()), 'widget');
        echo "
        <small class=\"form-text text-muted\">Achtung: Auf diese Worte lauscht der Bot anschließend! Deshalb so kurz wie möglich formulieren, wenn möglich, bitte Keywords benutzen, um die Suche zu vereinfachen.</small>
    </div>


    <div class=\"form-group\" >
        <label for=\"exampleFormControlTextarea1\">Antwort:</label>
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "answer", array()), 'widget');
        echo "
    </div>


        ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
    </div>
    </div>
            </div>
        </div>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 39,  97 => 35,  87 => 28,  74 => 18,  66 => 13,  56 => 5,  47 => 4,  37 => 1,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% form_theme form 'bootstrap_4_layout.html.twig' %}
{% block add %}
    <div role=\"main\" class=\"container\">
        <h2><input class=\"form-control form-control-lg text-center\"  type=\"text\" placeholder=\" Hubot Frequently asked Questions\" readonly></h2>
        <p class=\"form-control font-weight-light\">Hubot soll in Zukunft den Mitarbeitern helfen, antworten auf bestimmte Fragen zu finden, Reminder und Tasklisten zu erstellen und vieles mehr. Dieses Formular dient der Erfassung alle Hubot Einträge.
            Es geht im Wesentlichen darum alle Firmeninterne FAQs zu sammeln, spricht Informationen, die man für wichtig hält und denkt, dass es den ein oder anderen von Nutzen sein wird.
            Die Einträge über dieses Formular werden im Anschluss an dem Bot weitergeleitet. Diesen kann man dann über Mattermost anschreiben, wenn man Informationen sucht.
            Für mehrere Infos bitte den Hubothelp Kanal auf Mattermost beitreten.</p>
        <div class=\"form-group\">
            <div class=\"col-auto\">
                {{ form_start(form) }}
                <div class=\"form-group\">
                    <div class=\"col-auto\">
                        <label for=\"exampleInputEmail1\">Email address:</label>
                        <div class=\"input-group mb-3 \">
                            {{ form_widget(form.email) }}
                            <div class=\"input-group-append\">
                                <span class=\"input-group-text\">@m3connect.de</span>
                            </div>
                        </div>
                        <small class=\"form-text text-muted\">Deine E-Mail wird verwendet um Rücksprache mit Dir zu halten</small>


    <div class=\"form-group\" >
        <label for=\"exampleFormControlTextarea1\">Frage:</label>
        {{ form_widget(form.question) }}
        <small class=\"form-text text-muted\">Achtung: Auf diese Worte lauscht der Bot anschließend! Deshalb so kurz wie möglich formulieren, wenn möglich, bitte Keywords benutzen, um die Suche zu vereinfachen.</small>
    </div>


    <div class=\"form-group\" >
        <label for=\"exampleFormControlTextarea1\">Antwort:</label>
        {{ form_widget(form.answer) }}
    </div>


        {{ form_end(form) }}
    </div>
    </div>
            </div>
        </div>
    </div>


{% endblock %}", "home.html.twig", "C:\\xampp\\htdocs\\hubot_form\\hubot_form\\templates\\home.html.twig");
    }
}
