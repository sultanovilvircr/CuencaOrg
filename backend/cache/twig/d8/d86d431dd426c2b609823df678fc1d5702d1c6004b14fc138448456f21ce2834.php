<?php

/* layout/layout.twig */
class __TwigTemplate_aea1e6fc9efb824019bff6a01b765720915936b58df60f0988282c1eca2a379e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/base.twig", "layout/layout.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'below_menu' => array($this, 'block_below_menu'),
            'page_content' => array($this, 'block_page_content'),
            'menu' => array($this, 'block_menu'),
            'leftnav' => array($this, 'block_leftnav'),
            'control_panel' => array($this, 'block_control_panel'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        <div id=\"left-column\">
            ";
        // line 6
        $this->displayBlock("control_panel", $context, $blocks);
        echo "
            ";
        // line 7
        $this->displayBlock("leftnav", $context, $blocks);
        echo "
        </div>
        <div id=\"right-column\">
            ";
        // line 10
        $this->displayBlock("menu", $context, $blocks);
        echo "
            ";
        // line 11
        $this->displayBlock('below_menu', $context, $blocks);
        // line 12
        echo "            <div id=\"page-content\">
                ";
        // line 13
        $this->displayBlock('page_content', $context, $blocks);
        // line 14
        echo "            </div>
            ";
        // line 15
        $this->displayBlock("footer", $context, $blocks);
        echo "
        </div>
    </div>
";
    }

    // line 11
    public function block_below_menu($context, array $blocks = array())
    {
        echo "";
    }

    // line 13
    public function block_page_content($context, array $blocks = array())
    {
        echo "";
    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        // line 21
        echo "    <nav id=\"site-nav\" class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-elements\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "index.html"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new Twig_Error_Runtime('Variable "project" does not exist.', 30, $this->getSourceContext()); })()), "config", array(0 => "title"), "method"), "html", null, true);
        echo "</a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navbar-elements\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "classes.html"), "html", null, true);
        echo "\">Classes</a></li>
                    ";
        // line 35
        if ((isset($context["has_namespaces"]) || array_key_exists("has_namespaces", $context) ? $context["has_namespaces"] : (function () { throw new Twig_Error_Runtime('Variable "has_namespaces" does not exist.', 35, $this->getSourceContext()); })())) {
            // line 36
            echo "                        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "namespaces.html"), "html", null, true);
            echo "\">Namespaces</a></li>
                    ";
        }
        // line 38
        echo "                    <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "interfaces.html"), "html", null, true);
        echo "\">Interfaces</a></li>
                    <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "traits.html"), "html", null, true);
        echo "\">Traits</a></li>
                    <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "doc-index.html"), "html", null, true);
        echo "\">Index</a></li>
                    <li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "search.html"), "html", null, true);
        echo "\">Search</a></li>
                </ul>
            </div>
        </div>
    </nav>
";
    }

    // line 48
    public function block_leftnav($context, array $blocks = array())
    {
        // line 49
        echo "    <div id=\"api-tree\"></div>
";
    }

    // line 52
    public function block_control_panel($context, array $blocks = array())
    {
        // line 53
        echo "    <div id=\"control-panel\">
        ";
        // line 54
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new Twig_Error_Runtime('Variable "project" does not exist.', 54, $this->getSourceContext()); })()), "versions", array())) > 1)) {
            // line 55
            echo "            <form action=\"#\" method=\"GET\">
                <select id=\"version-switcher\" name=\"version\">
                    ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new Twig_Error_Runtime('Variable "project" does not exist.', 57, $this->getSourceContext()); })()), "versions", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["version"]) {
                // line 58
                echo "                        <option value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, (("../" . $context["version"]) . "/index.html")), "html", null, true);
                echo "\" data-version=\"";
                echo twig_escape_filter($this->env, $context["version"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["version"], "longname", array()), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['version'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                </select>
            </form>
        ";
        }
        // line 63
        echo "        <script>
            \$('option[data-version=\"'+window.projectVersion+'\"]').prop('selected', true);
        </script>
        <form id=\"search-form\" action=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Sami\Renderer\TwigExtension')->pathForStaticFile($context, "search.html"), "html", null, true);
        echo "\" method=\"GET\">
            <span class=\"glyphicon glyphicon-search\"></span>
            <input name=\"search\"
                   class=\"typeahead form-control\"
                   type=\"search\"
                   placeholder=\"Search\">
        </form>
    </div>
";
    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        // line 77
        echo "    <div id=\"footer\">
        Generated by <a href=\"http://sami.sensiolabs.org/\">Sami, the API Documentation Generator</a>.
    </div>
";
    }

    public function getTemplateName()
    {
        return "layout/layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 77,  203 => 76,  190 => 66,  185 => 63,  180 => 60,  167 => 58,  163 => 57,  159 => 55,  157 => 54,  154 => 53,  151 => 52,  146 => 49,  143 => 48,  133 => 41,  129 => 40,  125 => 39,  120 => 38,  114 => 36,  112 => 35,  108 => 34,  99 => 30,  88 => 21,  85 => 20,  79 => 13,  73 => 11,  65 => 15,  62 => 14,  60 => 13,  57 => 12,  55 => 11,  51 => 10,  45 => 7,  41 => 6,  37 => 4,  34 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout/base.twig\" %}

{% block content %}
    <div id=\"content\">
        <div id=\"left-column\">
            {{ block('control_panel') }}
            {{ block('leftnav') }}
        </div>
        <div id=\"right-column\">
            {{ block('menu') }}
            {% block below_menu '' %}
            <div id=\"page-content\">
                {% block page_content '' %}
            </div>
            {{ block('footer') }}
        </div>
    </div>
{% endblock %}

{% block menu %}
    <nav id=\"site-nav\" class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-elements\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{ path('index.html') }}\">{{ project.config('title') }}</a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navbar-elements\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"{{ path('classes.html') }}\">Classes</a></li>
                    {% if has_namespaces %}
                        <li><a href=\"{{ path('namespaces.html') }}\">Namespaces</a></li>
                    {% endif %}
                    <li><a href=\"{{ path('interfaces.html') }}\">Interfaces</a></li>
                    <li><a href=\"{{ path('traits.html') }}\">Traits</a></li>
                    <li><a href=\"{{ path('doc-index.html') }}\">Index</a></li>
                    <li><a href=\"{{ path('search.html') }}\">Search</a></li>
                </ul>
            </div>
        </div>
    </nav>
{% endblock %}

{% block leftnav %}
    <div id=\"api-tree\"></div>
{% endblock %}

{% block control_panel %}
    <div id=\"control-panel\">
        {% if project.versions|length > 1 %}
            <form action=\"#\" method=\"GET\">
                <select id=\"version-switcher\" name=\"version\">
                    {% for version in project.versions %}
                        <option value=\"{{ path('../' ~ version ~ '/index.html') }}\" data-version=\"{{ version }}\">{{ version.longname }}</option>
                    {% endfor %}
                </select>
            </form>
        {% endif %}
        <script>
            \$('option[data-version=\"'+window.projectVersion+'\"]').prop('selected', true);
        </script>
        <form id=\"search-form\" action=\"{{ path('search.html') }}\" method=\"GET\">
            <span class=\"glyphicon glyphicon-search\"></span>
            <input name=\"search\"
                   class=\"typeahead form-control\"
                   type=\"search\"
                   placeholder=\"Search\">
        </form>
    </div>
{% endblock %}

{% block footer %}
    <div id=\"footer\">
        Generated by <a href=\"http://sami.sensiolabs.org/\">Sami, the API Documentation Generator</a>.
    </div>
{% endblock %}
", "layout/layout.twig", "phar://C:/xampp/htdocs/Cuenca verde -Desarrollo/cuenca-verde-api-3.0/cuenca-verde-api/sami.phar/Sami/Resources/themes\\default/layout/layout.twig");
    }
}
