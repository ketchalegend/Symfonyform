<?php

/* pagination.html.twig */
class __TwigTemplate_ea94992d3b1f24fabf2a900c5364a36c20d72a46a97d4463b175824ac1b87dc4 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pagination.html.twig"));

        // line 1
        if (((isset($context["lastPage"]) || array_key_exists("lastPage", $context) ? $context["lastPage"] : (function () { throw new Twig_Error_Runtime('Variable "lastPage" does not exist.', 1, $this->source); })()) > 1)) {
            // line 2
            echo "
    ";
            // line 4
            echo "    ";
            $context["extremePagesLimit"] = 3;
            // line 5
            echo "
    ";
            // line 7
            echo "    ";
            $context["nearbyPagesLimit"] = 2;
            // line 8
            echo "
    <div class=\"pagination pagination-centered\">
        <ul>
            ";
            // line 11
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new Twig_Error_Runtime('Variable "currentPage" does not exist.', 11, $this->source); })()) > 1)) {
                // line 12
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["paginationPath"]) || array_key_exists("paginationPath", $context) ? $context["paginationPath"] : (function () { throw new Twig_Error_Runtime('Variable "paginationPath" does not exist.', 12, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new Twig_Error_Runtime('Variable "currentPage" does not exist.', 12, $this->source); })()) - 1), "html", null, true);
                echo "\">&larr;</a></li>

                ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["extremePagesLimit"]) || array_key_exists("extremePagesLimit", $context) ? $context["extremePagesLimit"] : (function () { throw new Twig_Error_Runtime('Variable "extremePagesLimit" does not exist.', 14, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($context["i"] < ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new Twig_Error_Runtime('Variable "currentPage" does not exist.', 14, $this->source); })()) - (isset($context["nearbyPagesLimit"]) || array_key_exists("nearbyPagesLimit", $context) ? $context["nearbyPagesLimit"] : (function () { throw new Twig_Error_Runtime('Variable "nearbyPagesLimit" does not exist.', 14, $this->source); })())))) {
                        // line 15
                        echo "                    <li><a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["paginationPath"]) || array_key_exists("paginationPath", $context) ? $context["paginationPath"] : (function () { throw new Twig_Error_Runtime('Variable "paginationPath" does not exist.', 15, $this->source); })()), "html", null, true);
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a></li>
                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "
                ";
                // line 18
                if ((((isset($context["extremePagesLimit"]) || array_key_exists("extremePagesLimit", $context) ? $context["extremePagesLimit"] : (function () { throw new Twig_Error_Runtime('Variable "extremePagesLimit" does not exist.', 18, $this->source); })()) + 1) < ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new Twig_Error_Runtime('Variable "currentPage" does not exist.', 18, $this->source); })()) - (isset($context["nearbyPagesLimit"]) || array_key_exists("nearbyPagesLimit", $context) ? $context["nearbyPagesLimit"] : (function () { throw new Twig_Error_Runtime('Variable "nearbyPagesLimit" does not exist.', 18, $this->source); })())))) {
                    // line 19
                    echo "                    <li class=\"disabled\"><a href=\"#\">...</a></li>
                ";
                }
                // line 21
                echo "
                ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new Twig_Error_Runtime('Variable "currentPage" does not exist.', 22, $this->source); })()) - (isset($context["nearbyPagesLimit"]) || array_key_exists("nearbyPagesLimit", $context) ? $context["nearbyPagesLimit"] : (function () { throw new Twig_Error_Runtime('Variable "nearbyPagesLimit" does not exist.', 22, $this->source); })())), ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new Twig_Error_Runtime('Variable "currentPage" does not exist.', 22, $this->source); })()) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($context["i"] > 0)) {
                        // line 23
                        echo "                    <li><a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["paginationPath"]) || array_key_exists("paginationPath", $context) ? $context["paginationPath"] : (function () { throw new Twig_Error_Runtime('Variable "paginationPath" does not exist.', 23, $this->source); })()), "html", null, true);
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a></li>
                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "            ";
            } elseif ((isset($context["showAlwaysFirstAndLast"]) || array_key_exists("showAlwaysFirstAndLast", $context) ? $context["showAlwaysFirstAndLast"] : (function () { throw new Twig_Error_Runtime('Variable "showAlwaysFirstAndLast" does not exist.', 25, $this->source); })())) {
                // line 26
                echo "                <li><a href=\"#\">Previous</a></li>
            ";
            }
            // line 28
            echo "
            <li class=\"active\"><a href=\"#\">";
            // line 29
            echo twig_escape_filter($this->env, (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new Twig_Error_Runtime('Variable "currentPage" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "</a></li>

            ";
            // line 31
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new Twig_Error_Runtime('Variable "currentPage" does not exist.', 31, $this->source); })()) < (isset($context["lastPage"]) || array_key_exists("lastPage", $context) ? $context["lastPage"] : (function () { throw new Twig_Error_Runtime('Variable "lastPage" does not exist.', 31, $this->source); })()))) {
                // line 32
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new Twig_Error_Runtime('Variable "currentPage" does not exist.', 32, $this->source); })()) + 1), ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new Twig_Error_Runtime('Variable "currentPage" does not exist.', 32, $this->source); })()) + (isset($context["nearbyPagesLimit"]) || array_key_exists("nearbyPagesLimit", $context) ? $context["nearbyPagesLimit"] : (function () { throw new Twig_Error_Runtime('Variable "nearbyPagesLimit" does not exist.', 32, $this->source); })()))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($context["i"] <= (isset($context["lastPage"]) || array_key_exists("lastPage", $context) ? $context["lastPage"] : (function () { throw new Twig_Error_Runtime('Variable "lastPage" does not exist.', 32, $this->source); })()))) {
                        // line 33
                        echo "                    <li><a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["paginationPath"]) || array_key_exists("paginationPath", $context) ? $context["paginationPath"] : (function () { throw new Twig_Error_Runtime('Variable "paginationPath" does not exist.', 33, $this->source); })()), "html", null, true);
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a></li>
                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "
                ";
                // line 36
                if ((((isset($context["lastPage"]) || array_key_exists("lastPage", $context) ? $context["lastPage"] : (function () { throw new Twig_Error_Runtime('Variable "lastPage" does not exist.', 36, $this->source); })()) - (isset($context["extremePagesLimit"]) || array_key_exists("extremePagesLimit", $context) ? $context["extremePagesLimit"] : (function () { throw new Twig_Error_Runtime('Variable "extremePagesLimit" does not exist.', 36, $this->source); })())) > ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new Twig_Error_Runtime('Variable "currentPage" does not exist.', 36, $this->source); })()) + (isset($context["nearbyPagesLimit"]) || array_key_exists("nearbyPagesLimit", $context) ? $context["nearbyPagesLimit"] : (function () { throw new Twig_Error_Runtime('Variable "nearbyPagesLimit" does not exist.', 36, $this->source); })())))) {
                    // line 37
                    echo "                    <li class=\"disabled\"><a href=\"#\">...</a></li>
                ";
                }
                // line 39
                echo "
                ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range((((isset($context["lastPage"]) || array_key_exists("lastPage", $context) ? $context["lastPage"] : (function () { throw new Twig_Error_Runtime('Variable "lastPage" does not exist.', 40, $this->source); })()) - (isset($context["extremePagesLimit"]) || array_key_exists("extremePagesLimit", $context) ? $context["extremePagesLimit"] : (function () { throw new Twig_Error_Runtime('Variable "extremePagesLimit" does not exist.', 40, $this->source); })())) + 1), (isset($context["lastPage"]) || array_key_exists("lastPage", $context) ? $context["lastPage"] : (function () { throw new Twig_Error_Runtime('Variable "lastPage" does not exist.', 40, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($context["i"] > ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new Twig_Error_Runtime('Variable "currentPage" does not exist.', 40, $this->source); })()) + (isset($context["nearbyPagesLimit"]) || array_key_exists("nearbyPagesLimit", $context) ? $context["nearbyPagesLimit"] : (function () { throw new Twig_Error_Runtime('Variable "nearbyPagesLimit" does not exist.', 40, $this->source); })())))) {
                        // line 41
                        echo "                    <li><a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["paginationPath"]) || array_key_exists("paginationPath", $context) ? $context["paginationPath"] : (function () { throw new Twig_Error_Runtime('Variable "paginationPath" does not exist.', 41, $this->source); })()), "html", null, true);
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo "</a></li>
                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "
                <li><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, (isset($context["paginationPath"]) || array_key_exists("paginationPath", $context) ? $context["paginationPath"] : (function () { throw new Twig_Error_Runtime('Variable "paginationPath" does not exist.', 44, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new Twig_Error_Runtime('Variable "currentPage" does not exist.', 44, $this->source); })()) + 1), "html", null, true);
                echo "\">&rarr;</a></li>
            ";
            } elseif (            // line 45
(isset($context["showAlwaysFirstAndLast"]) || array_key_exists("showAlwaysFirstAndLast", $context) ? $context["showAlwaysFirstAndLast"] : (function () { throw new Twig_Error_Runtime('Variable "showAlwaysFirstAndLast" does not exist.', 45, $this->source); })())) {
                // line 46
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["paginationPath"]) || array_key_exists("paginationPath", $context) ? $context["paginationPath"] : (function () { throw new Twig_Error_Runtime('Variable "paginationPath" does not exist.', 46, $this->source); })()), "html", null, true);
                echo twig_escape_filter($this->env, ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new Twig_Error_Runtime('Variable "currentPage" does not exist.', 46, $this->source); })()) + 1), "html", null, true);
                echo "\">Next</a></li>
            ";
            }
            // line 48
            echo "        </ul>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 48,  181 => 46,  179 => 45,  174 => 44,  171 => 43,  158 => 41,  153 => 40,  150 => 39,  146 => 37,  144 => 36,  141 => 35,  128 => 33,  122 => 32,  120 => 31,  115 => 29,  112 => 28,  108 => 26,  105 => 25,  92 => 23,  87 => 22,  84 => 21,  80 => 19,  78 => 18,  75 => 17,  62 => 15,  57 => 14,  50 => 12,  48 => 11,  43 => 8,  40 => 7,  37 => 5,  34 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if lastPage > 1 %}

    {# the number of first and last pages to be displayed #}
    {% set extremePagesLimit = 3 %}

    {# the number of pages that are displayed around the active page #}
    {% set nearbyPagesLimit = 2 %}

    <div class=\"pagination pagination-centered\">
        <ul>
            {% if currentPage > 1 %}
                <li><a href=\"{{ paginationPath }}{{ currentPage-1 }}\">&larr;</a></li>

                {% for i in range(1, extremePagesLimit) if ( i < currentPage - nearbyPagesLimit ) %}
                    <li><a href=\"{{ paginationPath }}{{ i }}\">{{ i }}</a></li>
                {% endfor %}

                {% if extremePagesLimit + 1 < currentPage - nearbyPagesLimit %}
                    <li class=\"disabled\"><a href=\"#\">...</a></li>
                {% endif %}

                {% for i in range(currentPage-nearbyPagesLimit, currentPage-1) if ( i > 0 ) %}
                    <li><a href=\"{{ paginationPath }}{{ i }}\">{{ i }}</a></li>
                {% endfor %}
            {% elseif showAlwaysFirstAndLast %}
                <li><a href=\"#\">Previous</a></li>
            {% endif %}

            <li class=\"active\"><a href=\"#\">{{ currentPage }}</a></li>

            {% if currentPage < lastPage %}
                {% for i in range(currentPage+1, currentPage + nearbyPagesLimit) if ( i <= lastPage ) %}
                    <li><a href=\"{{ paginationPath }}{{ i }}\">{{ i }}</a></li>
                {% endfor %}

                {% if  (lastPage - extremePagesLimit) > (currentPage + nearbyPagesLimit) %}
                    <li class=\"disabled\"><a href=\"#\">...</a></li>
                {% endif %}

                {% for i in range(lastPage - extremePagesLimit+1, lastPage) if ( i > currentPage + nearbyPagesLimit ) %}
                    <li><a href=\"{{ paginationPath }}{{ i }}\">{{ i }}</a></li>
                {% endfor %}

                <li><a href=\"{{ paginationPath }}{{ currentPage+1 }}\">&rarr;</a></li>
            {% elseif showAlwaysFirstAndLast %}
                <li><a href=\"{{ paginationPath }}{{ currentPage+1 }}\">Next</a></li>
            {% endif %}
        </ul>
    </div>
{% endif %}
", "pagination.html.twig", "C:\\xampp\\htdocs\\hubot_form\\hubot_form\\templates\\pagination.html.twig");
    }
}
