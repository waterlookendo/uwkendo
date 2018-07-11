<?php

/* site.html.twig */
class __TwigTemplate_234b050e9d132e4b5ed67cb64bd8c5cda1fc1bd91c21afd5770b64fbbf6a03c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "site.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content_top' => array($this, 'block_content_top'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["title"] = (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION") . ": ") . $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SITE"));
        // line 5
        $context["data"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => "site"), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
        // line 9
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/codemirror-compressed.js")), "method");
        // line 14
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/mdeditor.js")), "method");
        // line 15
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 18
    public function block_titlebar($context, array $blocks = array())
    {
        // line 19
        echo "    <div class=\"button-bar\">
        <a class=\"button\" href=\"";
        // line 20
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "\"><i class=\"fa fa-reply\"></i> ";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
        echo "</a>
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> Save</button>
    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> ";
        // line 23
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION");
        echo " - ";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SITE");
        echo "</h1>
";
    }

    // line 26
    public function block_content_top($context, array $blocks = array())
    {
        // line 27
        echo "    <div class=\"alert notice\">";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION");
        echo ": <b>";
        echo twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "file", array()), "filename", array()), array((isset($context["base_path"]) ? $context["base_path"] : null) => ""));
        echo "</b></div>
    <ul class=\"tab-bar\">
        <li><a href=\"";
        // line 29
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/system\">";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SYSTEM");
        echo "</a></li>
        <li class=\"active\"><span>";
        // line 30
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SITE");
        echo "</span></li>
        <li><a href=\"";
        // line 31
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/info\">";
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INFO");
        echo "</a></li>
    </ul>
";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $this->loadTemplate("partials/blueprints.html.twig", "site.html.twig", 36)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blueprints", array()), "data" => (isset($context["data"]) ? $context["data"] : null))));
    }

    public function getTemplateName()
    {
        return "site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 36,  118 => 35,  109 => 31,  105 => 30,  99 => 29,  91 => 27,  88 => 26,  80 => 23,  72 => 20,  69 => 19,  66 => 18,  59 => 15,  56 => 14,  53 => 13,  50 => 12,  43 => 9,  40 => 8,  37 => 7,  33 => 1,  31 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% set title = "PLUGIN_ADMIN.CONFIGURATION"|tu ~ ": " ~ "PLUGIN_ADMIN.SITE"|tu %}*/
/* */
/* {% set data = admin.data('site') %}*/
/* */
/* {% block stylesheets %}*/
/*     {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {% do assets.addJs(theme_url~'/js/codemirror-compressed.js') %}*/
/*     {% do assets.addJs(theme_url~'/js/mdeditor.js') %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block titlebar %}*/
/*     <div class="button-bar">*/
/*         <a class="button" href="{{ base_url }}"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*         <button class="button" type="submit" name="task" value="save" form="blueprints"><i class="fa fa-check"></i> Save</button>*/
/*     </div>*/
/*     <h1><i class="fa fa-fw fa-wrench"></i> {{ "PLUGIN_ADMIN.CONFIGURATION"|tu }} - {{ "PLUGIN_ADMIN.SITE"|tu }}</h1>*/
/* {% endblock %}*/
/* */
/* {% block content_top %}*/
/*     <div class="alert notice">{{ "PLUGIN_ADMIN.SAVE_LOCATION"|tu }}: <b>{{ data.file.filename|replace({(base_path):''}) }}</b></div>*/
/*     <ul class="tab-bar">*/
/*         <li><a href="{{ base_url_relative }}/system">{{ "PLUGIN_ADMIN.SYSTEM"|tu }}</a></li>*/
/*         <li class="active"><span>{{ "PLUGIN_ADMIN.SITE"|tu }}</span></li>*/
/*         <li><a href="{{ base_url_relative }}/info">{{ "PLUGIN_ADMIN.INFO"|tu }}</a></li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {% include 'partials/blueprints.html.twig' with { blueprints: data.blueprints, data: data } %}*/
/* {% endblock %}*/
/* */
/* */
