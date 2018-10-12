<?php

/* contact/contact.html.twig */
class __TwigTemplate_cf49e5d3805de7124d572ac8e8d1ea08b8b801fc70841e6506d15f84d62affa2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/contact.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_add($context, array $blocks = array())
    {
        // line 5
        echo "

<div>
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["our_form"] ?? null), 'form_start');
        echo "
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["our_form"] ?? null), 'widget');
        echo "


    <input type=\"submit\" value=\"Submit\" class=\"btn btn-success\"/>

    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["our_form"] ?? null), 'form_end');
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "contact/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  44 => 9,  40 => 8,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "contact/contact.html.twig", "C:\\xampp\\htdocs\\hubot_form\\hubot_form\\templates\\contact\\contact.html.twig");
    }
}
