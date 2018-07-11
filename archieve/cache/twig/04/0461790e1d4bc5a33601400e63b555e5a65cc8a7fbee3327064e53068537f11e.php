<?php

/* pages.html.twig */
class __TwigTemplate_3c2ece0c784e0111cd07e07f29936f7453953ba40cb9d2ebe6a08dadc05ad0f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "pages.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) {
            // line 8
            $context["context"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array(0 => true), "method");
        }
        // line 11
        if ($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "param", array(0 => "new"), "method")) {
            // line 12
            $context["mode"] = "new";
        } elseif (        // line 13
(isset($context["context"]) ? $context["context"] : null)) {
            // line 14
            $context["mode"] = "edit";
            // line 15
            if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) {
                // line 16
                $context["page_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/pages") . (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "routes", array()), "default", array())) : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "rawRoute", array()))));
                // line 17
                $context["exists"] = true;
                // line 18
                $context["title"] = (((($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) ? ($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT")) : ($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE"))) . " ") . (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "title", array())) ? ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "header", array()), "title", array())) : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "title", array()))));
            } else {
                // line 20
                $context["title"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            }
        } else {
            // line 23
            $context["mode"] = "list";
            // line 24
            $context["title"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PAGES");
        }
        // line 27
        $context["modular"] = (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "modular", array())) ? ("modular_") : (""));
        // line 29
        $context["warn"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "admin", array()), "warnings", array()), "delete_page", array());
        // line 31
        $context["admin_lang"] = (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "admin_lang", array())) ? ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "admin_lang", array())) : ("en"));
        // line 33
        $context["page_lang"] = $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "language", array());
        // line 54
        $context["preview_html"] = ((($this->env->getExtension('GravTwigExtension')->rtrimFilter((isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null), "/") . (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "home", array())) ? ("") : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "route", array()))))) ? (($this->env->getExtension('GravTwigExtension')->rtrimFilter((isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null), "/") . (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "home", array())) ? ("") : ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "route", array()))))) : ("/"));
        // line 55
        $context["preview_link"] = (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "routable", array())) ? ((("<a class=\"button\" target=\"_blank\" href=\"" . (isset($context["preview_html"]) ? $context["preview_html"] : null)) . "\"> <i class=\"fa fa-fw fa-eye\" style=\"font-size:18px;margin-right:0;\"></i></a>")) : (""));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 37
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
            // line 38
            echo "    ";
        }
        // line 39
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/pages-all.js")), "method");
        // line 44
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/speakingurl.min.js")), "method");
        // line 45
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/slugify.min.js")), "method");
        // line 46
        echo "    ";
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 47
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/codemirror-compressed.js")), "method");
            // line 48
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/mdeditor.js")), "method");
            // line 49
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/js/dropzone.min.js")), "method");
            // line 50
            echo "    ";
        }
        // line 51
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 119
    public function block_titlebar($context, array $blocks = array())
    {
        // line 120
        echo "    <div class=\"button-bar\">
        ";
        // line 121
        if (((isset($context["mode"]) ? $context["mode"] : null) == "list")) {
            // line 122
            echo "            <a class=\"button\" href=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "\"><i class=\"fa fa-reply\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
            echo "</a>
            <a class=\"button\" href=\"#modal\" data-remodal-target=\"modal\"><i class=\"fa fa-plus\"></i> ";
            // line 123
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            echo "</a>
            ";
            // line 124
            if ( !twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modularTypes", array()))) {
                // line 125
                echo "            <a class=\"button\" href=\"#modular\" data-remodal-target=\"modular\"><i class=\"fa fa-plus\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_MODULAR");
                echo "</a>
            ";
            }
            // line 127
            echo "
            ";
            // line 128
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array())) {
                // line 129
                echo "                <div class=\"button-group\">
                    <button type=\"button\" class=\"button disabled\">
                        <i class=\"fa fa-flag-o\"></i>
                        ";
                // line 132
                $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), (isset($context["admin_lang"]) ? $context["admin_lang"] : null), array(), "array");
                // line 133
                echo "                        ";
                echo (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null));
                echo "
                    </button>
                    <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                        <i class=\"fa fa-caret-down\"></i>
                    </button>
                    <ul class=\"dropdown-menu language-switcher\">
                        ";
                // line 139
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "languages_enabled", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                    // line 140
                    echo "                            ";
                    $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), $context["langCode"], array(), "array");
                    // line 141
                    echo "                            ";
                    if (($context["langCode"] != (isset($context["admin_lang"]) ? $context["admin_lang"] : null))) {
                        // line 142
                        echo "                                <li><a href=\"";
                        echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => (((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "slug", array())) . "/pages/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "switchlanguage/lang") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . $context["langCode"]), 1 => "admin-form", 2 => "admin-nonce"), "method");
                        echo "\">";
                        echo (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null));
                        echo "</a></li>
                            ";
                    }
                    // line 144
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 145
                echo "                    </ul>

                </div>
            ";
            }
            // line 149
            echo "
        ";
        } elseif ((        // line 150
(isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 151
            echo "
            ";
            // line 152
            echo (isset($context["preview_link"]) ? $context["preview_link"] : null);
            echo "
            <a class=\"button\" href=\"";
            // line 153
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/pages\"><i class=\"fa fa-reply\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK");
            echo "</a>
            ";
            // line 154
            if ((isset($context["exists"]) ? $context["exists"] : null)) {
                // line 155
                echo "                <a class=\"button\" href=\"";
                echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "copy"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                echo "\" class=\"page-copy\" ><i class=\"fa fa-copy\"></i> ";
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COPY");
                echo "</a>
                <a class=\"button\" href=\"#\" data-remodal-target=\"move\"><i class=\"fa fa-arrows\"></i> ";
                // line 156
                echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MOVE");
                echo "</a>
                ";
                // line 157
                if ((isset($context["warn"]) ? $context["warn"] : null)) {
                    // line 158
                    echo "                    <a class=\"button\" href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                    echo "\"><i class=\"fa fa-close\"></i> ";
                    echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DELETE");
                    echo "</a>
                ";
                } else {
                    // line 160
                    echo "                    <a class=\"button\" href=\"";
                    echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method") . "/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                ";
                }
                // line 162
                echo "            ";
            }
            // line 163
            echo "
            <div class=\"button-group\">
                <button class=\"button\" name=\"task\" value=\"save\" form=\"blueprints\" type=\"submit\"><i class=\"fa fa-check\"></i> ";
            // line 165
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE");
            echo "</button>
                ";
            // line 166
            if (((isset($context["exists"]) ? $context["exists"] : null) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array()))) {
                // line 167
                echo "                    ";
                if ($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "untranslatedLanguages", array())) {
                    // line 168
                    echo "                        <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                            <i class=\"fa fa-caret-down\"></i>
                        </button>
                        <ul class=\"dropdown-menu lang-switcher\">
                            ";
                    // line 172
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "untranslatedLanguages", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["langCode"]) {
                        // line 173
                        echo "                                ";
                        $context["langName"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "siteLanguages", array()), $context["langCode"], array(), "array");
                        // line 174
                        echo "                                ";
                        if (($context["langCode"] != (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                            // line 175
                            echo "                                    <li><button class=\"button task\" name=\"task\" value=\"saveas\" lang=\"";
                            echo $context["langCode"];
                            echo "\" form=\"blueprints\" type=\"submit\">";
                            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_AS");
                            echo " ";
                            echo (twig_upper_filter($this->env, twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 0, 1)) . twig_slice($this->env, (isset($context["langName"]) ? $context["langName"] : null), 1, null));
                            echo "</button>
                                ";
                        }
                        // line 177
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langCode'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 178
                    echo "                        </ul>
                    ";
                }
                // line 180
                echo "                ";
            }
            // line 181
            echo "            </div>


        ";
        }
        // line 185
        echo "    </div>
    ";
        // line 186
        if (((isset($context["mode"]) ? $context["mode"] : null) == "new")) {
            // line 187
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_PAGE");
            echo "</h1>
    ";
        } elseif ((        // line 188
(isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 189
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i>
            ";
            // line 190
            echo (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "exists", array())) ? (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EDIT") . ((" <i>" . $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "menu", array())) . "</i>"))) : (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CREATE") . ((" <i>" . $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "menu", array())) . "</i>"))));
            echo "
        </h1>
    ";
        } else {
            // line 193
            echo "        <h1><i class=\"fa fa-fw fa-file-text-o\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES");
            echo "</h1>
    ";
        }
    }

    // line 197
    public function block_content($context, array $blocks = array())
    {
        // line 198
        echo "    <div class=\"admin-block clear\">
    ";
        // line 199
        $this->loadTemplate("partials/messages.html.twig", "pages.html.twig", 199)->display($context);
        // line 200
        echo "    ";
        if (((isset($context["mode"]) ? $context["mode"] : null) == "new")) {
            // line 201
            echo "        ";
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 201)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/page"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 202
            echo "    ";
        } elseif (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 203
            echo "        <div class=\"admin-form-wrapper\" data-media-url=\"";
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/media/";
            echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
            echo ".json\" data-media-local=\"";
            echo (isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null);
            echo "/";
            echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
            echo "\" data-media-types=\"";
            echo (isset($context["media_types"]) ? $context["media_types"] : null);
            echo "\">
            <div id=\"admin-topbar\">

                ";
            // line 206
            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "multilang", array()) && (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                // line 207
                echo "                    <div id=\"admin-lang-toggle\" class=\"button-group\">
                        <button type=\"button\" class=\"button disabled\">
                            ";
                // line 209
                if ((isset($context["exists"]) ? $context["exists"] : null)) {
                    // line 210
                    echo "                                ";
                    echo (isset($context["page_lang"]) ? $context["page_lang"] : null);
                    echo "
                            ";
                } else {
                    // line 212
                    echo "                                ";
                    echo (isset($context["admin_lang"]) ? $context["admin_lang"] : null);
                    echo "
                            ";
                }
                // line 214
                echo "                        </button>
                        ";
                // line 215
                if (((isset($context["exists"]) ? $context["exists"] : null) && (twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "translatedLanguages", array())) > 1))) {
                    // line 216
                    echo "                            <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                                <i class=\"fa fa-caret-down\"></i>
                            </button>
                            <ul class=\"dropdown-menu language-switcher\">
                                ";
                    // line 220
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "translatedLanguages", array()));
                    foreach ($context['_seq'] as $context["language"] => $context["route"]) {
                        // line 221
                        echo "                                    ";
                        if (($context["language"] != (isset($context["page_lang"]) ? $context["page_lang"] : null))) {
                            // line 222
                            echo "                                    <li><button class=\"task\" name=\"task\" value=\"switchlanguage\" lang=\"";
                            echo $context["language"];
                            echo "\" redirect=\"";
                            echo trim($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "rawRoute", array()), "/");
                            echo "\" form=\"blueprints\">";
                            echo $context["language"];
                            echo "</button>
                                    ";
                        }
                        // line 224
                        echo "                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['language'], $context['route'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 225
                    echo "                            </ul>
                        ";
                }
                // line 227
                echo "                    </div>
                ";
            }
            // line 229
            echo "
                ";
            // line 230
            if ($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "fields", array())) {
                // line 231
                echo "                ";
                $context["normalText"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.NORMAL");
                // line 232
                echo "                ";
                $context["expertText"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPERT");
                // line 233
                echo "                ";
                $context["maxLen"] = max(array(0 => twig_length_filter($this->env, (isset($context["normalText"]) ? $context["normalText"] : null)), 1 => twig_length_filter($this->env, (isset($context["expertText"]) ? $context["expertText"] : null))));
                // line 234
                echo "                ";
                $context["normalText"] = $this->getAttribute($this, "spanToggle", array(0 => (isset($context["normalText"]) ? $context["normalText"] : null), 1 => (isset($context["maxLen"]) ? $context["maxLen"] : null)), "method");
                // line 235
                echo "                ";
                $context["expertText"] = $this->getAttribute($this, "spanToggle", array(0 => (isset($context["expertText"]) ? $context["expertText"] : null), 1 => (isset($context["maxLen"]) ? $context["maxLen"] : null)), "method");
                // line 236
                echo "                <form id=\"admin-mode-toggle\">
                    <div class=\"switch-toggle switch-grav\">
                        <input type=\"radio\" value=\"normal\" data-leave-url=\"";
                // line 238
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/pages/";
                echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
                echo "/mode";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo "normal\" id=\"normal\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"normal\">";
                // line 239
                echo trim((isset($context["normalText"]) ? $context["normalText"] : null));
                echo "</label>
                        <input type=\"radio\" value=\"expert\" data-leave-url=\"";
                // line 240
                echo (isset($context["base_url"]) ? $context["base_url"] : null);
                echo "/pages/";
                echo trim($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), "/");
                echo "/mode";
                echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array());
                echo "expert\" id=\"expert\" name=\"mode-switch\" class=\"highlight\" ";
                if (($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "1")) {
                    echo " checked=\"checked\"";
                }
                echo ">
                        <label for=\"expert\">";
                // line 241
                echo trim((isset($context["expertText"]) ? $context["expertText"] : null));
                echo "</label>
                        <a></a>
                    </div>
                </form>
                ";
            }
            // line 246
            echo "
            </div>

            ";
            // line 249
            if (($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "fields", array()) && ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "session", array()), "expert", array()) == "0"))) {
                // line 250
                echo "                ";
                $this->loadTemplate("partials/blueprints.html.twig", "pages.html.twig", 250)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["context"]) ? $context["context"] : null), "blueprints", array()), "data" => (isset($context["context"]) ? $context["context"] : null))));
                // line 251
                echo "            ";
            } else {
                // line 252
                echo "                ";
                $this->loadTemplate("partials/blueprints-raw.html.twig", "pages.html.twig", 252)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => (("pages/" . (isset($context["modular"]) ? $context["modular"] : null)) . "raw")), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
                // line 253
                echo "            ";
            }
            // line 254
            echo "        </div>
    ";
        } else {
            // line 256
            echo "        <form id=\"page-filtering\">
            <div class=\"page-filters\">
                <input type=\"text\" data-template-types=\"";
            // line 258
            echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "types", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "modularTypes", array()))), "html_attr");
            echo "\" data-template-access-levels=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "accessLevels", array())), "html_attr");
            echo "\" placeholder=\"";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD_FILTERS");
            echo "\" class=\"page-filter\" name=\"page-filter\" />
            </div>
            <div class=\"page-search\">
                <input type=\"text\" placeholder=\"";
            // line 261
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SEARCH_PAGES");
            echo "\" name=\"page-search\" />
            </div>
            <div class=\"page-shortcuts\">
                <span class=\"button button-x-small\" data-page-toggleall=\"expand\"><i class=\"fa fa-fw fa-plus-circle\"></i> ";
            // line 264
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.EXPAND_ALL");
            echo "</span>
                <span class=\"button button-x-small\" data-page-toggleall=\"collapse\"><i class=\"fa fa-fw fa-minus-circle\"></i> ";
            // line 265
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.COLLAPSE_ALL");
            echo "</span>
            </div>
        </form>
        <ul class=\"pages-list depth-0\">
            ";
            // line 269
            echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null), 1 => 0, 2 => $context), "method");
            echo "
        </ul>
    ";
        }
        // line 272
        echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"generic\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 276
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ERROR");
        echo "</h1>
            <div class=\"error-content\"></div>
            <div class=\"button-bar\">
                <a class=\"button remodal-confirm\" href=\"#\">";
        // line 279
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLOSE");
        echo "</a>
            </div>
        </form>
    </div>

    ";
        // line 284
        if (((isset($context["mode"]) ? $context["mode"] : null) == "list")) {
            // line 285
            echo "    <div class=\"remodal\" data-remodal-id=\"modal\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 286
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 286)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/new"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 287
            echo "    </div>

    <div class=\"remodal\" data-remodal-id=\"modular\" data-remodal-options=\"hashTracking: false\">
        ";
            // line 290
            $this->loadTemplate("partials/blueprints-new.html.twig", "pages.html.twig", 290)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/modular_new"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 291
            echo "    </div>
    ";
        }
        // line 293
        echo "
    ";
        // line 294
        if (((isset($context["mode"]) ? $context["mode"] : null) == "edit")) {
            // line 295
            echo "    <div class=\"remodal\" data-remodal-id=\"move\" data-remodal-options=\"hashTracking: false\">

        ";
            // line 297
            $this->loadTemplate("partials/page-move.html.twig", "pages.html.twig", 297)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "blueprints", array(0 => "pages/move"), "method"), "data" => (isset($context["context"]) ? $context["context"] : null))));
            // line 298
            echo "    </div>
    ";
        }
        // line 300
        echo "
    <div class=\"remodal\" data-remodal-id=\"delete\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 303
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE");
        echo "</h1>
            <p class=\"bigger\">
              ";
        // line 305
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC");
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <a class=\"button secondary remodal-cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 309
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL");
        echo "</a>
            <a class=\"button\" data-delete-action href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 310
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE");
        echo "</a>
            </div>
        </form>
    </div>


    <div class=\"remodal\" data-remodal-id=\"changes\">
        <form>
            <h1>";
        // line 318
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE");
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 320
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC");
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <a class=\"button secondary\" data-leave-action=\"cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 324
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL");
        echo "</a>
            <a class=\"button\" data-leave-action=\"continue\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 325
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE");
        echo "</a>
            </div>
        </form>
    </div>

    <div class=\"remodal\" data-remodal-id=\"delete-media\" data-remodal-options=\"hashTracking: false\">
        <form>
            <h1>";
        // line 332
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE");
        echo "</h1>
            <p class=\"bigger\">
                ";
        // line 334
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC");
        echo "
            </p>
            <br>
            <div class=\"button-bar\">
            <a class=\"button secondary remodal-cancel\" href=\"#\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 338
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL");
        echo "</a>
            <a class=\"button remodal-confirm\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> ";
        // line 339
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE");
        echo "</a>
            </div>
        </form>
    </div>
";
    }

    // line 3
    public function getspanToggle($__input__ = null, $__length__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "input" => $__input__,
            "length" => $__length__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            echo (($this->env->getExtension('GravTwigExtension')->repeatFunc("&nbsp;&nbsp;", (((isset($context["length"]) ? $context["length"] : null) - twig_length_filter($this->env, (isset($context["input"]) ? $context["input"] : null))) / 2)) . (isset($context["input"]) ? $context["input"] : null)) . $this->env->getExtension('GravTwigExtension')->repeatFunc("&nbsp;&nbsp;", (((isset($context["length"]) ? $context["length"] : null) - twig_length_filter($this->env, (isset($context["input"]) ? $context["input"] : null))) / 2)));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 57
    public function getloop($__page__ = null, $__depth__ = null, $__twig_vars__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "depth" => $__depth__,
            "twig_vars" => $__twig_vars__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 58
            echo "    ";
            $context["separator"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "config", array(), "array"), "system", array()), "param_sep", array());
            // line 59
            echo "    ";
            $context["base_url"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "base_url_relative", array(), "array");
            // line 60
            echo "    ";
            $context["base_url_simple"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "base_url_simple", array(), "array");
            // line 61
            echo "    ";
            $context["admin_route"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "admin_route", array(), "array");
            // line 62
            echo "    ";
            $context["admin_lang"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "admin_lang", array(), "array");
            // line 63
            echo "    ";
            $context["warn"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "warn", array(), "array");
            // line 64
            echo "    ";
            $context["uri"] = $this->getAttribute((isset($context["twig_vars"]) ? $context["twig_vars"] : null), "uri", array(), "array");
            // line 65
            echo "
    ";
            // line 66
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "by", array())) {
                // line 67
                echo "        ";
                $context["pcol"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method"), "order", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "by", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "content", array()), "order", array()), "dir", array())), "method");
                // line 68
                echo "    ";
            } elseif ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order_by", array())) {
                // line 69
                echo "        ";
                $context["pcol"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method"), "order", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order_by", array()), 1 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "order_dir", array())), "method");
                // line 70
                echo "    ";
            } else {
                // line 71
                echo "        ";
                $context["pcol"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array(), "method");
                // line 72
                echo "    ";
            }
            // line 73
            echo "
    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pcol"]) ? $context["pcol"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 75
                echo "        ";
                $context["description"] = (((((( !$this->getAttribute($context["p"], "page", array())) ? ("Folder &bull; ") : ("Page &bull; ")) . (($this->getAttribute(                // line 76
$context["p"], "modular", array())) ? ("Modular &bull; ") : (""))) . (($this->getAttribute(                // line 77
$context["p"], "routable", array())) ? ("Routable &bull; ") : ("Non-Routable &bull; "))) . (($this->getAttribute(                // line 78
$context["p"], "visible", array())) ? ("Visible &bull; ") : ("Non-Visible &bull; "))) . (($this->getAttribute(                // line 79
$context["p"], "published", array())) ? ("Published &bull; ") : ("Non-Published &bull; ")));
                // line 80
                echo "        ";
                $context["page_route"] = trim($this->getAttribute($context["p"], "rawRoute", array()), "/");
                // line 81
                echo "        ";
                if (($this->getAttribute($context["p"], "language", array()) && ($this->getAttribute($context["p"], "language", array()) != (isset($context["admin_lang"]) ? $context["admin_lang"] : null)))) {
                    // line 82
                    echo "            ";
                    $context["page_url"] = (((((((isset($context["base_url_simple"]) ? $context["base_url_simple"] : null) . "/") . $this->getAttribute($context["p"], "language", array())) . "/") . (isset($context["admin_route"]) ? $context["admin_route"] : null)) . "/pages/") . (isset($context["page_route"]) ? $context["page_route"] : null));
                    // line 83
                    echo "        ";
                } else {
                    // line 84
                    echo "            ";
                    $context["page_url"] = (((isset($context["base_url"]) ? $context["base_url"] : null) . "/pages/") . (isset($context["page_route"]) ? $context["page_route"] : null));
                    // line 85
                    echo "        ";
                }
                // line 86
                echo "
        <li class=\"page-item\" data-nav-id=\"";
                // line 87
                echo $this->getAttribute($context["p"], "route", array());
                echo "\">
            <div class=\"row\">
                <span ";
                // line 89
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("data-toggle=\"children\"") : (""));
                echo " data-hint=\"";
                echo trim((isset($context["description"]) ? $context["description"] : null), " &bull; ");
                echo "\" class=\"hint--bottom\">
                <i class=\"page-icon fa fa-fw fa-circle-o ";
                // line 90
                echo ((($this->getAttribute($this->getAttribute($context["p"], "children", array(0 => 0), "method"), "count", array()) > 0)) ? ("children-closed") : (""));
                echo " ";
                echo (($this->getAttribute($context["p"], "modular", array())) ? ("modular") : ((( !$this->getAttribute($context["p"], "routable", array())) ? ("not-routable") : ((( !$this->getAttribute($context["p"], "visible", array())) ? ("not-visible") : ((( !$this->getAttribute($context["p"], "page", array())) ? ("folder") : (""))))))));
                echo "\"></i>
                </span>
                <a href=\"";
                // line 92
                echo (isset($context["page_url"]) ? $context["page_url"] : null);
                echo "\" class=\"page-edit\">";
                echo $this->getAttribute($context["p"], "title", array());
                echo "</a>

                ";
                // line 94
                if ($this->getAttribute($context["p"], "language", array())) {
                    // line 95
                    echo "                    <span class=\"badge lang ";
                    if (($this->getAttribute($context["p"], "language", array()) == (isset($context["admin_lang"]) ? $context["admin_lang"] : null))) {
                        echo "info";
                    }
                    echo "\">";
                    echo $this->getAttribute($context["p"], "language", array());
                    echo "</span>
                ";
                }
                // line 97
                echo "                <span class=\"page-home\">";
                echo (($this->getAttribute($context["p"], "home", array())) ? ("<i class=\"fa fa-home\"></i>") : (""));
                echo "</span>
                <span class=\"page-tools\">

                    ";
                // line 100
                if ((isset($context["warn"]) ? $context["warn"] : null)) {
                    // line 101
                    echo "                    <a href=\"#delete\" data-remodal-target=\"delete\" data-delete-url=\"";
                    echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . (isset($context["separator"]) ? $context["separator"] : null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                } else {
                    // line 103
                    echo "                    <a href=\"";
                    echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["page_url"]) ? $context["page_url"] : null) . "/task") . (isset($context["separator"]) ? $context["separator"] : null)) . "delete"), 1 => "admin-form", 2 => "admin-nonce"), "method");
                    echo "\" class=\"page-delete\" ><i class=\"fa fa-close\"></i></a>
                    ";
                }
                // line 105
                echo "                </span>
                <p class=\"page-route\">";
                // line 106
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "header", array()), "routes", array()), "default", array())) : ($this->getAttribute($context["p"], "route", array())));
                echo " <span class=\"spacer\"><i class=\"fa fa-long-arrow-right\"></i></span> ";
                echo $this->getAttribute($context["p"], "template", array(), "method");
                echo "</p>
            </div>
            ";
                // line 108
                if (($this->getAttribute($this->getAttribute($context["p"], "children", array(), "method"), "count", array()) > 0)) {
                    // line 109
                    echo "
            <ul class=\"depth-";
                    // line 110
                    echo ((isset($context["depth"]) ? $context["depth"] : null) + 1);
                    echo "\" style=\"display:none;\">
                ";
                    // line 111
                    echo $this->getAttribute($this, "loop", array(0 => $context["p"], 1 => ((isset($context["depth"]) ? $context["depth"] : null) + 1), 2 => (isset($context["twig_vars"]) ? $context["twig_vars"] : null)), "method");
                    echo "
            </ul>
            ";
                }
                // line 114
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  897 => 114,  891 => 111,  887 => 110,  884 => 109,  882 => 108,  875 => 106,  872 => 105,  866 => 103,  860 => 101,  858 => 100,  851 => 97,  841 => 95,  839 => 94,  832 => 92,  825 => 90,  819 => 89,  814 => 87,  811 => 86,  808 => 85,  805 => 84,  802 => 83,  799 => 82,  796 => 81,  793 => 80,  791 => 79,  790 => 78,  789 => 77,  788 => 76,  786 => 75,  782 => 74,  779 => 73,  776 => 72,  773 => 71,  770 => 70,  767 => 69,  764 => 68,  761 => 67,  759 => 66,  756 => 65,  753 => 64,  750 => 63,  747 => 62,  744 => 61,  741 => 60,  738 => 59,  735 => 58,  721 => 57,  707 => 4,  694 => 3,  685 => 339,  681 => 338,  674 => 334,  669 => 332,  659 => 325,  655 => 324,  648 => 320,  643 => 318,  632 => 310,  628 => 309,  621 => 305,  616 => 303,  611 => 300,  607 => 298,  605 => 297,  601 => 295,  599 => 294,  596 => 293,  592 => 291,  590 => 290,  585 => 287,  583 => 286,  580 => 285,  578 => 284,  570 => 279,  564 => 276,  558 => 272,  552 => 269,  545 => 265,  541 => 264,  535 => 261,  525 => 258,  521 => 256,  517 => 254,  514 => 253,  511 => 252,  508 => 251,  505 => 250,  503 => 249,  498 => 246,  490 => 241,  478 => 240,  474 => 239,  462 => 238,  458 => 236,  455 => 235,  452 => 234,  449 => 233,  446 => 232,  443 => 231,  441 => 230,  438 => 229,  434 => 227,  430 => 225,  424 => 224,  414 => 222,  411 => 221,  407 => 220,  401 => 216,  399 => 215,  396 => 214,  390 => 212,  384 => 210,  382 => 209,  378 => 207,  376 => 206,  361 => 203,  358 => 202,  355 => 201,  352 => 200,  350 => 199,  347 => 198,  344 => 197,  336 => 193,  330 => 190,  327 => 189,  325 => 188,  320 => 187,  318 => 186,  315 => 185,  309 => 181,  306 => 180,  302 => 178,  296 => 177,  286 => 175,  283 => 174,  280 => 173,  276 => 172,  270 => 168,  267 => 167,  265 => 166,  261 => 165,  257 => 163,  254 => 162,  248 => 160,  240 => 158,  238 => 157,  234 => 156,  227 => 155,  225 => 154,  219 => 153,  215 => 152,  212 => 151,  210 => 150,  207 => 149,  201 => 145,  195 => 144,  187 => 142,  184 => 141,  181 => 140,  177 => 139,  167 => 133,  165 => 132,  160 => 129,  158 => 128,  155 => 127,  149 => 125,  147 => 124,  143 => 123,  136 => 122,  134 => 121,  131 => 120,  128 => 119,  121 => 51,  118 => 50,  115 => 49,  112 => 48,  109 => 47,  106 => 46,  103 => 45,  100 => 44,  97 => 43,  94 => 42,  87 => 39,  84 => 38,  81 => 37,  78 => 36,  75 => 35,  71 => 1,  69 => 55,  67 => 54,  65 => 33,  63 => 31,  61 => 29,  59 => 27,  56 => 24,  54 => 23,  50 => 20,  47 => 18,  45 => 17,  43 => 16,  41 => 15,  39 => 14,  37 => 13,  35 => 12,  33 => 11,  30 => 8,  28 => 7,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% macro spanToggle(input, length) %}*/
/*     {{ repeat('&nbsp;&nbsp;', (length - input|length) / 2) ~ input ~ repeat('&nbsp;&nbsp;', (length - input|length) / 2) }}*/
/* {% endmacro %}*/
/* */
/* {% if admin.route %}*/
/*     {% set context = admin.page(true) %}*/
/* {% endif %}*/
/* */
/* {% if uri.param('new') %}*/
/*     {% set mode = 'new' %}*/
/* {%  elseif context %}*/
/*     {% set mode = 'edit' %}*/
/*     {% if context.exists %}*/
/*         {% set page_url = base_url ~ '/pages' ~ (context.header.routes.default ?: context.rawRoute) %}*/
/*         {% set exists = true %}*/
/*         {% set title = (context.exists ? "PLUGIN_ADMIN.EDIT"|tu : "PLUGIN_ADMIN.CREATE"|tu ) ~ " " ~ (context.header.title ?: context.title) %}*/
/*     {% else %}*/
/*         {% set title = "PLUGIN_ADMIN.ADD_PAGE"|tu %}*/
/*     {% endif %}*/
/* {% else %}*/
/*     {% set mode = 'list' %}*/
/*     {% set title = "PLUGIN_ADMIN.PAGES"|tu %}*/
/* {% endif %}*/
/* */
/* {% set modular = context.modular ? 'modular_' : '' %}*/
/* */
/* {% set warn = config.plugins.admin.warnings.delete_page %}*/
/* */
/* {% set admin_lang = admin.session.admin_lang ?: 'en' %}*/
/* */
/* {% set page_lang = context.language %}*/
/* */
/* {% block stylesheets %}*/
/*     {% if mode == 'edit' %}*/
/*         {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {% do assets.addJs(theme_url~'/js/pages-all.js') %}*/
/*     {% do assets.addJs(theme_url~'/js/speakingurl.min.js') %}*/
/*     {% do assets.addJs(theme_url~'/js/slugify.min.js') %}*/
/*     {% if mode == 'edit' %}*/
/*         {% do assets.addJs(theme_url~'/js/codemirror-compressed.js') %}*/
/*         {% do assets.addJs(theme_url~'/js/mdeditor.js') %}*/
/*         {% do assets.addJs(theme_url~'/js/dropzone.min.js') %}*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% set preview_html = (base_url_relative_frontend|rtrim('/') ~ (context.home ? '' : context.route)) ?: '/' %}*/
/* {% set preview_link = context.routable ? '<a class="button" target="_blank" href="' ~ preview_html ~ '"> <i class="fa fa-fw fa-eye" style="font-size:18px;margin-right:0;"></i></a>' : '' %}*/
/* */
/* {% macro loop(page, depth, twig_vars) %}*/
/*     {% set separator = twig_vars['config'].system.param_sep %}*/
/*     {% set base_url = twig_vars['base_url_relative'] %}*/
/*     {% set base_url_simple = twig_vars['base_url_simple'] %}*/
/*     {% set admin_route = twig_vars['admin_route'] %}*/
/*     {% set admin_lang = twig_vars['admin_lang'] %}*/
/*     {% set warn = twig_vars['warn'] %}*/
/*     {% set uri = twig_vars['uri'] %}*/
/* */
/*     {% if page.header.content.order.by %}*/
/*         {% set pcol = page.children().order(page.header.content.order.by, page.header.content.order.dir) %}*/
/*     {% elseif page.order_by %}*/
/*         {% set pcol = page.children().order(page.order_by, page.order_dir) %}*/
/*     {% else %}*/
/*         {% set pcol = page.children() %}*/
/*     {% endif %}*/
/* */
/*     {% for p in pcol %}*/
/*         {% set description = (not p.page ? 'Folder &bull; ' : 'Page &bull; ') ~*/
/*                              (p.modular ? 'Modular &bull; ' : '') ~*/
/*                              (p.routable ? 'Routable &bull; ' : 'Non-Routable &bull; ') ~*/
/*                              (p.visible ? 'Visible &bull; ' : 'Non-Visible &bull; ') ~*/
/*                              (p.published ? 'Published &bull; ' : 'Non-Published &bull; ') %}*/
/*         {% set page_route =  p.rawRoute|trim('/') %}*/
/*         {% if p.language and p.language != admin_lang %}*/
/*             {% set page_url = base_url_simple ~ '/' ~ p.language ~ '/' ~ admin_route ~ '/pages/' ~ page_route %}*/
/*         {% else %}*/
/*             {% set page_url = base_url ~ '/pages/' ~ page_route  %}*/
/*         {% endif %}*/
/* */
/*         <li class="page-item" data-nav-id="{{ p.route }}">*/
/*             <div class="row">*/
/*                 <span {{ p.children(0).count > 0 ? 'data-toggle="children"' : ''}} data-hint="{{ description|trim(' &bull; ') }}" class="hint--bottom">*/
/*                 <i class="page-icon fa fa-fw fa-circle-o {{ p.children(0).count > 0 ? 'children-closed' : ''}} {{ p.modular ? 'modular' : (not p.routable ? 'not-routable' : (not p.visible ? 'not-visible' : (not p.page ? 'folder' :  ''))) }}"></i>*/
/*                 </span>*/
/*                 <a href="{{ page_url }}" class="page-edit">{{ p.title }}</a>*/
/* */
/*                 {% if p.language %}*/
/*                     <span class="badge lang {% if p.language == admin_lang %}info{% endif %}">{{p.language}}</span>*/
/*                 {% endif %}*/
/*                 <span class="page-home">{{ p.home ? '<i class="fa fa-home"></i>' }}</span>*/
/*                 <span class="page-tools">*/
/* */
/*                     {% if warn %}*/
/*                     <a href="#delete" data-remodal-target="delete" data-delete-url="{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}" class="page-delete" ><i class="fa fa-close"></i></a>*/
/*                     {% else %}*/
/*                     <a href="{{ uri.addNonce(page_url ~ '/task' ~ separator ~ 'delete', 'admin-form', 'admin-nonce') }}" class="page-delete" ><i class="fa fa-close"></i></a>*/
/*                     {% endif %}*/
/*                 </span>*/
/*                 <p class="page-route">{{ p.header.routes.default ?: p.route }} <span class="spacer"><i class="fa fa-long-arrow-right"></i></span> {{ p.template() }}</p>*/
/*             </div>*/
/*             {% if p.children().count > 0 %}*/
/* */
/*             <ul class="depth-{{ depth + 1 }}" style="display:none;">*/
/*                 {{ _self.loop(p, depth + 1, twig_vars) }}*/
/*             </ul>*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */
/* */
/* {% block titlebar %}*/
/*     <div class="button-bar">*/
/*         {% if mode == 'list' %}*/
/*             <a class="button" href="{{ base_url }}"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             <a class="button" href="#modal" data-remodal-target="modal"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD_PAGE"|tu }}</a>*/
/*             {% if admin.modularTypes is not empty %}*/
/*             <a class="button" href="#modular" data-remodal-target="modular"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD_MODULAR"|tu }}</a>*/
/*             {% endif %}*/
/* */
/*             {% if admin.multilang %}*/
/*                 <div class="button-group">*/
/*                     <button type="button" class="button disabled">*/
/*                         <i class="fa fa-flag-o"></i>*/
/*                         {% set langName = admin.siteLanguages[admin_lang] %}*/
/*                         {{ langName[:1]|upper ~ langName[1:] }}*/
/*                     </button>*/
/*                     <button type="button" class="button dropdown-toggle" data-toggle="dropdown">*/
/*                         <i class="fa fa-caret-down"></i>*/
/*                     </button>*/
/*                     <ul class="dropdown-menu language-switcher">*/
/*                         {% for langCode in admin.languages_enabled %}*/
/*                             {% set langName = admin.siteLanguages[langCode] %}*/
/*                             {% if langCode != admin_lang %}*/
/*                                 <li><a href="{{ uri.addNonce(base_url_relative ~ theme.slug ~ '/pages/task' ~ config.system.param_sep ~ 'switchlanguage/lang' ~ config.system.param_sep ~ langCode, 'admin-form', 'admin-nonce') }}">{{ langName[:1]|upper ~ langName[1:] }}</a></li>*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </ul>*/
/* */
/*                 </div>*/
/*             {% endif %}*/
/* */
/*         {% elseif mode == 'edit' %}*/
/* */
/*             {{  preview_link }}*/
/*             <a class="button" href="{{ base_url }}/pages"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             {% if exists %}*/
/*                 <a class="button" href="{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'copy', 'admin-form', 'admin-nonce') }}" class="page-copy" ><i class="fa fa-copy"></i> {{ "PLUGIN_ADMIN.COPY"|tu }}</a>*/
/*                 <a class="button" href="#" data-remodal-target="move"><i class="fa fa-arrows"></i> {{ "PLUGIN_ADMIN.MOVE"|tu }}</a>*/
/*                 {% if warn %}*/
/*                     <a class="button" href="#delete" data-remodal-target="delete" data-delete-url="{{ uri.addNonce(page_url ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}"><i class="fa fa-close"></i> {{ "PLUGIN_ADMIN.DELETE"|tu }}</a>*/
/*                 {% else %}*/
/*                     <a class="button" href="{{ uri.addNonce(uri.route(true) ~ '/task' ~ config.system.param_sep ~ 'delete', 'admin-form', 'admin-nonce') }}" class="page-delete" ><i class="fa fa-close"></i></a>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/* */
/*             <div class="button-group">*/
/*                 <button class="button" name="task" value="save" form="blueprints" type="submit"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*                 {% if exists and admin.multilang %}*/
/*                     {% if context.untranslatedLanguages %}*/
/*                         <button type="button" class="button dropdown-toggle" data-toggle="dropdown">*/
/*                             <i class="fa fa-caret-down"></i>*/
/*                         </button>*/
/*                         <ul class="dropdown-menu lang-switcher">*/
/*                             {% for langCode in context.untranslatedLanguages %}*/
/*                                 {% set langName = admin.siteLanguages[langCode] %}*/
/*                                 {% if langCode != page_lang %}*/
/*                                     <li><button class="button task" name="task" value="saveas" lang="{{langCode}}" form="blueprints" type="submit">{{ "PLUGIN_ADMIN.SAVE_AS"|tu }} {{ langName[:1]|upper ~ langName[1:] }}</button>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     {% endif %}*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/* */
/*         {% endif %}*/
/*     </div>*/
/*     {% if mode == 'new' %}*/
/*         <h1><i class="fa fa-fw fa-file-text-o"></i> {{ "PLUGIN_ADMIN.ADD_PAGE"|tu }}</h1>*/
/*     {% elseif mode == 'edit' %}*/
/*         <h1><i class="fa fa-fw fa-file-text-o"></i>*/
/*             {{ context.exists ? "PLUGIN_ADMIN.EDIT"|tu ~ " <i>#{context.menu}</i>" : "PLUGIN_ADMIN.CREATE"|tu ~ " <i>#{context.menu}</i>" }}*/
/*         </h1>*/
/*     {% else %}*/
/*         <h1><i class="fa fa-fw fa-file-text-o"></i> {{ "PLUGIN_ADMIN.MANAGE_PAGES"|tu }}</h1>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="admin-block clear">*/
/*     {% include 'partials/messages.html.twig' %}*/
/*     {% if mode == 'new' %}*/
/*         {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/page'), data: context } %}*/
/*     {% elseif mode == 'edit' %}*/
/*         <div class="admin-form-wrapper" data-media-url="{{ base_url }}/media/{{ admin.route|trim('/') }}.json" data-media-local="{{ base_url_relative_frontend }}/{{ admin.route|trim('/') }}" data-media-types="{{ media_types }}">*/
/*             <div id="admin-topbar">*/
/* */
/*                 {% if admin.multilang and page_lang %}*/
/*                     <div id="admin-lang-toggle" class="button-group">*/
/*                         <button type="button" class="button disabled">*/
/*                             {% if exists %}*/
/*                                 {{ page_lang }}*/
/*                             {% else %}*/
/*                                 {{ admin_lang }}*/
/*                             {% endif %}*/
/*                         </button>*/
/*                         {% if exists and context.translatedLanguages|length > 1 %}*/
/*                             <button type="button" class="button dropdown-toggle" data-toggle="dropdown">*/
/*                                 <i class="fa fa-caret-down"></i>*/
/*                             </button>*/
/*                             <ul class="dropdown-menu language-switcher">*/
/*                                 {% for language, route in context.translatedLanguages %}*/
/*                                     {% if language != page_lang %}*/
/*                                     <li><button class="task" name="task" value="switchlanguage" lang="{{language}}" redirect="{{context.rawRoute|trim('/')}}" form="blueprints">{{ language }}</button>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                 {% endif %}*/
/* */
/*                 {% if context.blueprints.fields %}*/
/*                 {% set normalText = "PLUGIN_ADMIN.NORMAL"|tu %}*/
/*                 {% set expertText = "PLUGIN_ADMIN.EXPERT"|tu %}*/
/*                 {% set maxLen = max([normalText|length, expertText|length]) %}*/
/*                 {% set normalText = _self.spanToggle(normalText, maxLen) %}*/
/*                 {% set expertText = _self.spanToggle(expertText, maxLen) %}*/
/*                 <form id="admin-mode-toggle">*/
/*                     <div class="switch-toggle switch-grav">*/
/*                         <input type="radio" value="normal" data-leave-url="{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}normal" id="normal" name="mode-switch" class="highlight" {% if admin.session.expert == '0' %} checked="checked"{% endif %}>*/
/*                         <label for="normal">{{ normalText|trim }}</label>*/
/*                         <input type="radio" value="expert" data-leave-url="{{ base_url }}/pages/{{ admin.route|trim('/') }}/mode{{ config.system.param_sep }}expert" id="expert" name="mode-switch" class="highlight" {% if admin.session.expert == '1' %} checked="checked"{% endif %}>*/
/*                         <label for="expert">{{ expertText|trim }}</label>*/
/*                         <a></a>*/
/*                     </div>*/
/*                 </form>*/
/*                 {% endif %}*/
/* */
/*             </div>*/
/* */
/*             {% if context.blueprints.fields and admin.session.expert == '0' %}*/
/*                 {% include 'partials/blueprints.html.twig' with { blueprints: context.blueprints, data: context } %}*/
/*             {% else %}*/
/*                 {% include 'partials/blueprints-raw.html.twig' with { blueprints: admin.blueprints('pages/'~modular~'raw'), data: context } %}*/
/*             {% endif %}*/
/*         </div>*/
/*     {% else %}*/
/*         <form id="page-filtering">*/
/*             <div class="page-filters">*/
/*                 <input type="text" data-template-types="{{ admin.types|merge(admin.modularTypes)|json_encode|e('html_attr') }}" data-template-access-levels="{{ admin.accessLevels|json_encode|e('html_attr') }}" placeholder="{{ "PLUGIN_ADMIN.ADD_FILTERS"|tu }}" class="page-filter" name="page-filter" />*/
/*             </div>*/
/*             <div class="page-search">*/
/*                 <input type="text" placeholder="{{ "PLUGIN_ADMIN.SEARCH_PAGES"|tu }}" name="page-search" />*/
/*             </div>*/
/*             <div class="page-shortcuts">*/
/*                 <span class="button button-x-small" data-page-toggleall="expand"><i class="fa fa-fw fa-plus-circle"></i> {{ "PLUGIN_ADMIN.EXPAND_ALL"|tu }}</span>*/
/*                 <span class="button button-x-small" data-page-toggleall="collapse"><i class="fa fa-fw fa-minus-circle"></i> {{ "PLUGIN_ADMIN.COLLAPSE_ALL"|tu }}</span>*/
/*             </div>*/
/*         </form>*/
/*         <ul class="pages-list depth-0">*/
/*             {{ _self.loop(pages, 0, _context) }}*/
/*         </ul>*/
/*     {% endif %}*/
/*     </div>*/
/* */
/*     <div class="remodal" data-remodal-id="generic" data-remodal-options="hashTracking: false">*/
/*         <form>*/
/*             <h1>{{ "PLUGIN_ADMIN.ERROR"|tu }}</h1>*/
/*             <div class="error-content"></div>*/
/*             <div class="button-bar">*/
/*                 <a class="button remodal-confirm" href="#">{{ "PLUGIN_ADMIN.CLOSE"|tu }}</a>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/*     {% if mode == 'list' %}*/
/*     <div class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking: false">*/
/*         {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/new'), data: context } %}*/
/*     </div>*/
/* */
/*     <div class="remodal" data-remodal-id="modular" data-remodal-options="hashTracking: false">*/
/*         {% include 'partials/blueprints-new.html.twig' with { blueprints: admin.blueprints('pages/modular_new'), data: context } %}*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     {% if mode == 'edit' %}*/
/*     <div class="remodal" data-remodal-id="move" data-remodal-options="hashTracking: false">*/
/* */
/*         {% include 'partials/page-move.html.twig' with { blueprints: admin.blueprints('pages/move'), data: context } %}*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     <div class="remodal" data-remodal-id="delete" data-remodal-options="hashTracking: false">*/
/*         <form>*/
/*             <h1>{{ "PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_TITLE"|tu }}</h1>*/
/*             <p class="bigger">*/
/*               {{ "PLUGIN_ADMIN.MODAL_DELETE_PAGE_CONFIRMATION_REQUIRED_DESC"|tu }}*/
/*             </p>*/
/*             <br>*/
/*             <div class="button-bar">*/
/*             <a class="button secondary remodal-cancel" href="#"><i class="fa fa-fw fa-close"></i> {{ "PLUGIN_ADMIN.CANCEL"|tu }}</a>*/
/*             <a class="button" data-delete-action href="#"><i class="fa fa-fw fa-check"></i> {{ "PLUGIN_ADMIN.CONTINUE"|tu }}</a>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/* */
/*     <div class="remodal" data-remodal-id="changes">*/
/*         <form>*/
/*             <h1>{{ "PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_TITLE"|tu }}</h1>*/
/*             <p class="bigger">*/
/*                 {{ "PLUGIN_ADMIN.MODAL_CHANGED_DETECTED_DESC"|tu }}*/
/*             </p>*/
/*             <br>*/
/*             <div class="button-bar">*/
/*             <a class="button secondary" data-leave-action="cancel" href="#"><i class="fa fa-fw fa-close"></i> {{ "PLUGIN_ADMIN.CANCEL"|tu }}</a>*/
/*             <a class="button" data-leave-action="continue" href="#"><i class="fa fa-fw fa-check"></i> {{ "PLUGIN_ADMIN.CONTINUE"|tu }}</a>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* */
/*     <div class="remodal" data-remodal-id="delete-media" data-remodal-options="hashTracking: false">*/
/*         <form>*/
/*             <h1>{{ "PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_TITLE"|tu }}</h1>*/
/*             <p class="bigger">*/
/*                 {{ "PLUGIN_ADMIN.MODAL_DELETE_FILE_CONFIRMATION_REQUIRED_DESC"|tu }}*/
/*             </p>*/
/*             <br>*/
/*             <div class="button-bar">*/
/*             <a class="button secondary remodal-cancel" href="#"><i class="fa fa-fw fa-close"></i> {{ "PLUGIN_ADMIN.CANCEL"|tu }}</a>*/
/*             <a class="button remodal-confirm" href="#"><i class="fa fa-fw fa-check"></i> {{ "PLUGIN_ADMIN.CONTINUE"|tu }}</a>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* {% endblock %}*/
/* */
