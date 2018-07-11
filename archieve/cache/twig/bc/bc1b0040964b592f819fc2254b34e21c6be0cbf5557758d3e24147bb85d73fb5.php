<?php

/* dashboard.html.twig */
class __TwigTemplate_1fdbce545011734b74703493bcafc088045ddef368ed254cebd7811535213919 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "dashboard.html.twig", 1);
        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'messages' => array($this, 'block_messages'),
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
        $context["title"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DASHBOARD");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_titlebar($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"button-bar\">
        ";
        // line 7
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
            // line 8
            echo "            <div class=\"button-group\">
                <button data-clear-cache=\"";
            // line 9
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/cache.json/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "clearCache"), 1 => "admin-form", 2 => "admin-nonce"), "method");
            echo "\" class=\"button\"><i class=\"fa fa-trash\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE");
            echo "</button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a data-clear-cache=\"";
            // line 14
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/cache.json/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "clearCache/cleartype") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "all"), 1 => "admin-form", 2 => "admin-nonce"), "method");
            echo "\" href=\"#\">";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_ALL_CACHE");
            echo "</a></li>
                    <li><a data-clear-cache=\"";
            // line 15
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/cache.json/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "clearCache/cleartype") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "assets-only"), 1 => "admin-form", 2 => "admin-nonce"), "method");
            echo "\" href=\"#\">";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_ASSETS_ONLY");
            echo "</a></li>
                    <li><a data-clear-cache=\"";
            // line 16
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/cache.json/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "clearCache/cleartype") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "images-only"), 1 => "admin-form", 2 => "admin-nonce"), "method");
            echo "\" href=\"#\">";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_IMAGES_ONLY");
            echo "</a></li>
                    <li><a data-clear-cache=\"";
            // line 17
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/cache.json/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "clearCache/cleartype") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "cache-only"), 1 => "admin-form", 2 => "admin-nonce"), "method");
            echo "\" href=\"#\">";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_CACHE_ONLY");
            echo "</a></li>
                </ul>
            </div>

            <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
            // line 21
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHECK_FOR_UPDATES");
            echo "</button>
        ";
        }
        // line 23
        echo "    </div>
    <h1><i class=\"fa fa-fw fa-th\"></i> ";
        // line 24
        echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DASHBOARD");
        echo "</h1>
";
    }

    // line 27
    public function block_messages($context, array $blocks = array())
    {
    }

    // line 29
    public function block_content_top($context, array $blocks = array())
    {
        // line 30
        echo "
    ";
        // line 31
        $context["gpm"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "gpm", array(), "method");
        // line 32
        echo "    ";
        $context["updatable"] = $this->getAttribute((isset($context["gpm"]) ? $context["gpm"] : null), "getUpdatablePlugins", array(), "method");
        // line 33
        echo "    ";
        $context["backup"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "lastBackup", array(), "method");
        // line 34
        echo "
    <div id=\"admin-dashboard\">
        ";
        // line 36
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
            // line 37
            echo "            <div id=\"updates\" class=\"dashboard-item dashboard-left\">
                <div class=\"tertiary-accent default-box-shadow\">
                    <h1>";
            // line 39
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MAINTENANCE");
            echo "</h1>
                    <div class=\"admin-update-charts\">
                        <div class=\"updates-chart\">
                            <div class=\"chart-wrapper\">
                                <div class=\"ct-chart\"></div>
                                <span class=\"numeric hidden\"><span>-</span><em>";
            // line 44
            echo twig_lower_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.UPDATED"));
            echo "</em></span>
                            </div>
                            <p class=\"js__updates-available-description\">&nbsp;</p>
                        </div>
                        <div class=\"backups-chart\">
                            <div class=\"chart-wrapper\">
                                <div class=\"ct-chart\"></div>
                                <script>
                                    var data = {
                                      series: [";
            // line 53
            echo $this->getAttribute((isset($context["backup"]) ? $context["backup"] : null), "chart_fill", array());
            echo ", ";
            echo $this->getAttribute((isset($context["backup"]) ? $context["backup"] : null), "chart_empty", array());
            echo "]
                                    };
                                    var options = {
                                      donut: true,
                                      donutWidth: 10,
                                      startAngle: 0,
                                      total: 100,
                                      showLabel: false,
                                      height: 150,
                                      chartPadding: !isFirefox ? 5 : 10
                                    };
                                    Chartist.Pie('.backups-chart .ct-chart', data, options);
                                </script>
                                <span class=\"numeric\">";
            // line 66
            echo $this->getAttribute((isset($context["backup"]) ? $context["backup"] : null), "days", array());
            echo "<em>";
            echo twig_lower_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DAYS"));
            echo "</em></span>
                            </div>
                            <p>";
            // line 68
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LAST_BACKUP");
            echo "</p>
                        </div>
                    </div>
                    <div class=\"flush-bottom button-bar\">
                        <button data-maintenance-update=\"";
            // line 72
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/update.json/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "update"), 1 => "admin-form", 2 => "admin-nonce"), "method");
            echo "\" class=\"button\"><i class=\"fa fa-cloud-download\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.UPDATE");
            echo "</button>
                        <button data-ajax=\"";
            // line 73
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/backup.json/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "backup"), 1 => "admin-form", 2 => "admin-nonce"), "method");
            echo "\" class=\"button\"><i class=\"fa fa-database\"></i> ";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACKUP");
            echo "</button>
                    </div>
                </div>
            </div>
        ";
        }
        // line 78
        echo "        ";
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.statistics", 1 => "admin.super"))) {
            // line 79
            echo "            <div id=\"popularity\" class=\"dashboard-item dashboard-right\">
                <div class=\"secondary-accent default-box-shadow\">
                    <h1>";
            // line 81
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.STATISTICS");
            echo "</h1>
                    <div class=\"ct-chart\"></div>
                    <script>
                        var data = {
                            labels: ";
            // line 85
            echo $this->getAttribute($this->getAttribute((isset($context["popularity"]) ? $context["popularity"] : null), "getDailyChartData", array()), "labels", array(), "array");
            echo ",
                            series: [
                                ";
            // line 87
            echo $this->getAttribute($this->getAttribute((isset($context["popularity"]) ? $context["popularity"] : null), "getDailyChartData", array()), "data", array(), "array");
            echo "
                            ]
                        };
                        var options = {
                            height: 164,
                            chartPadding: !isFirefox ? 5 : 25,

                            axisX: {
                                showGrid: false,
                                labelOffset: {
                                    x: 0,
                                    y: 5
                                }
                            },
                            axisY: {
                                offset: 15,
                                showLabel: true,
                                showGrid: true,
                                labelOffset: {
                                    x: 5,
                                    y: 5
                                },
                                scaleMinSpace: 20
                            }
                        };
                        Chartist.Bar('#popularity .ct-chart', data, options);
                    </script>
                    <div class=\"flush-bottom button-bar stats-bar\">
                        <span class=\"stat\">
                            <b>";
            // line 116
            echo $this->getAttribute((isset($context["popularity"]) ? $context["popularity"] : null), "getDailyTotal", array());
            echo "</b>
                            <i>";
            // line 117
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TODAY");
            echo "</i>
                        </span>
                        <span class=\"stat\">
                            <b>";
            // line 120
            echo $this->getAttribute((isset($context["popularity"]) ? $context["popularity"] : null), "getWeeklyTotal", array());
            echo "</b>
                            <i>";
            // line 121
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.WEEK");
            echo "</i>
                        </span>
                        <span class=\"stat\">
                            <b>";
            // line 124
            echo $this->getAttribute((isset($context["popularity"]) ? $context["popularity"] : null), "getMonthlyTotal", array());
            echo "</b>
                            <i>";
            // line 125
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MONTH");
            echo "</i>
                        </span>
                    </div>
                </div>
            </div>
        ";
        }
        // line 131
        echo "    </div>
";
    }

    // line 134
    public function block_content($context, array $blocks = array())
    {
        // line 135
        echo "
    ";
        // line 136
        $this->loadTemplate("partials/messages.html.twig", "dashboard.html.twig", 136)->display($context);
        // line 137
        echo "
    ";
        // line 138
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.pages", 1 => "admin.super"))) {
            // line 139
            echo "        <div id=\"latest\">
            <div class=\"button-bar\">
                <a class=\"button\" href=\"";
            // line 141
            echo $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "route", array(0 => true), "method");
            echo "/pages\"><i class=\"fa fa-fw fa-file-text-o\"></i>";
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MANAGE_PAGES");
            echo "</a>
            </div>
            <h1>";
            // line 143
            echo $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LATEST_PAGE_UPDATES");
            echo "</h1>
            <table>
            ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "latestPages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["latest"]) {
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "latestPages", array())) {
                    // line 146
                    echo "                <tr><td class=\"double page-title\"><a href=\"";
                    echo (isset($context["base_url"]) ? $context["base_url"] : null);
                    echo "/pages/";
                    echo trim($this->getAttribute($context["latest"], "route", array()), "/");
                    echo "\"><i class=\"fa fa-fw fa-file-o\"></i> ";
                    echo $this->getAttribute($context["latest"], "title", array());
                    echo "</a></td><td class=\"double page-route\">";
                    echo $this->getAttribute($context["latest"], "route", array());
                    echo "</td><td><b class=\"last-modified\">";
                    echo $this->env->getExtension('GravTwigExtension')->nicetimeFilter($this->getAttribute($context["latest"], "modified", array()));
                    echo "</b></td></tr>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['latest'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "            </table>
        </div>
    ";
        } else {
            // line 151
            echo "        <div class=\"padding\">You dont' have sufficient access to view the dashboard...</div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 151,  334 => 148,  316 => 146,  311 => 145,  306 => 143,  299 => 141,  295 => 139,  293 => 138,  290 => 137,  288 => 136,  285 => 135,  282 => 134,  277 => 131,  268 => 125,  264 => 124,  258 => 121,  254 => 120,  248 => 117,  244 => 116,  212 => 87,  207 => 85,  200 => 81,  196 => 79,  193 => 78,  183 => 73,  177 => 72,  170 => 68,  163 => 66,  145 => 53,  133 => 44,  125 => 39,  121 => 37,  119 => 36,  115 => 34,  112 => 33,  109 => 32,  107 => 31,  104 => 30,  101 => 29,  96 => 27,  90 => 24,  87 => 23,  82 => 21,  73 => 17,  67 => 16,  61 => 15,  55 => 14,  45 => 9,  42 => 8,  40 => 7,  37 => 6,  34 => 5,  30 => 1,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% set title = "PLUGIN_ADMIN.DASHBOARD"|tu %}*/
/* */
/* {% block titlebar %}*/
/*     <div class="button-bar">*/
/*         {% if authorize(['admin.maintenance', 'admin.super']) %}*/
/*             <div class="button-group">*/
/*                 <button data-clear-cache="{{ uri.addNonce(base_url_relative ~ '/cache.json/task' ~ config.system.param_sep ~ 'clearCache', 'admin-form', 'admin-nonce') }}" class="button"><i class="fa fa-trash"></i> {{ "PLUGIN_ADMIN.CLEAR_CACHE"|tu }}</button>*/
/*                 <button type="button" class="button dropdown-toggle" data-toggle="dropdown">*/
/*                     <i class="fa fa-caret-down"></i>*/
/*                 </button>*/
/*                 <ul class="dropdown-menu">*/
/*                     <li><a data-clear-cache="{{ uri.addNonce(base_url_relative ~ '/cache.json/task' ~ config.system.param_sep ~ 'clearCache/cleartype' ~ config.system.param_sep ~ 'all', 'admin-form', 'admin-nonce') }}" href="#">{{ "PLUGIN_ADMIN.CLEAR_CACHE_ALL_CACHE"|tu }}</a></li>*/
/*                     <li><a data-clear-cache="{{ uri.addNonce(base_url_relative ~ '/cache.json/task' ~ config.system.param_sep ~ 'clearCache/cleartype' ~ config.system.param_sep ~ 'assets-only', 'admin-form', 'admin-nonce') }}" href="#">{{ "PLUGIN_ADMIN.CLEAR_CACHE_ASSETS_ONLY"|tu }}</a></li>*/
/*                     <li><a data-clear-cache="{{ uri.addNonce(base_url_relative ~ '/cache.json/task' ~ config.system.param_sep ~ 'clearCache/cleartype' ~ config.system.param_sep ~ 'images-only', 'admin-form', 'admin-nonce') }}" href="#">{{ "PLUGIN_ADMIN.CLEAR_CACHE_IMAGES_ONLY"|tu }}</a></li>*/
/*                     <li><a data-clear-cache="{{ uri.addNonce(base_url_relative ~ '/cache.json/task' ~ config.system.param_sep ~ 'clearCache/cleartype' ~ config.system.param_sep ~ 'cache-only', 'admin-form', 'admin-nonce') }}" href="#">{{ "PLUGIN_ADMIN.CLEAR_CACHE_CACHE_ONLY"|tu }}</a></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <button data-gpm-checkupdates="" class="button"><i class="fa fa-refresh"></i> {{ "PLUGIN_ADMIN.CHECK_FOR_UPDATES"|tu }}</button>*/
/*         {% endif %}*/
/*     </div>*/
/*     <h1><i class="fa fa-fw fa-th"></i> {{ "PLUGIN_ADMIN.DASHBOARD"|tu }}</h1>*/
/* {% endblock %}*/
/* */
/* {% block messages %}{% endblock %}*/
/* */
/* {% block content_top %}*/
/* */
/*     {% set gpm = admin.gpm() %}*/
/*     {% set updatable = gpm.getUpdatablePlugins() %}*/
/*     {% set backup = admin.lastBackup() %}*/
/* */
/*     <div id="admin-dashboard">*/
/*         {% if authorize(['admin.maintenance', 'admin.super']) %}*/
/*             <div id="updates" class="dashboard-item dashboard-left">*/
/*                 <div class="tertiary-accent default-box-shadow">*/
/*                     <h1>{{ "PLUGIN_ADMIN.MAINTENANCE"|tu }}</h1>*/
/*                     <div class="admin-update-charts">*/
/*                         <div class="updates-chart">*/
/*                             <div class="chart-wrapper">*/
/*                                 <div class="ct-chart"></div>*/
/*                                 <span class="numeric hidden"><span>-</span><em>{{ "PLUGIN_ADMIN.UPDATED"|tu|lower }}</em></span>*/
/*                             </div>*/
/*                             <p class="js__updates-available-description">&nbsp;</p>*/
/*                         </div>*/
/*                         <div class="backups-chart">*/
/*                             <div class="chart-wrapper">*/
/*                                 <div class="ct-chart"></div>*/
/*                                 <script>*/
/*                                     var data = {*/
/*                                       series: [{{ backup.chart_fill }}, {{ backup.chart_empty }}]*/
/*                                     };*/
/*                                     var options = {*/
/*                                       donut: true,*/
/*                                       donutWidth: 10,*/
/*                                       startAngle: 0,*/
/*                                       total: 100,*/
/*                                       showLabel: false,*/
/*                                       height: 150,*/
/*                                       chartPadding: !isFirefox ? 5 : 10*/
/*                                     };*/
/*                                     Chartist.Pie('.backups-chart .ct-chart', data, options);*/
/*                                 </script>*/
/*                                 <span class="numeric">{{ backup.days }}<em>{{ "PLUGIN_ADMIN.DAYS"|tu|lower }}</em></span>*/
/*                             </div>*/
/*                             <p>{{ "PLUGIN_ADMIN.LAST_BACKUP"|tu }}</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="flush-bottom button-bar">*/
/*                         <button data-maintenance-update="{{ uri.addNonce(base_url_relative ~ '/update.json/task' ~ config.system.param_sep ~ 'update', 'admin-form', 'admin-nonce') }}" class="button"><i class="fa fa-cloud-download"></i> {{ "PLUGIN_ADMIN.UPDATE"|tu }}</button>*/
/*                         <button data-ajax="{{ uri.addNonce(base_url_relative ~ '/backup.json/task' ~ config.system.param_sep ~ 'backup', 'admin-form', 'admin-nonce') }}" class="button"><i class="fa fa-database"></i> {{ "PLUGIN_ADMIN.BACKUP"|tu }}</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*         {% if authorize(['admin.statistics', 'admin.super']) %}*/
/*             <div id="popularity" class="dashboard-item dashboard-right">*/
/*                 <div class="secondary-accent default-box-shadow">*/
/*                     <h1>{{ "PLUGIN_ADMIN.STATISTICS"|tu }}</h1>*/
/*                     <div class="ct-chart"></div>*/
/*                     <script>*/
/*                         var data = {*/
/*                             labels: {{ popularity.getDailyChartData['labels'] }},*/
/*                             series: [*/
/*                                 {{ popularity.getDailyChartData['data'] }}*/
/*                             ]*/
/*                         };*/
/*                         var options = {*/
/*                             height: 164,*/
/*                             chartPadding: !isFirefox ? 5 : 25,*/
/* */
/*                             axisX: {*/
/*                                 showGrid: false,*/
/*                                 labelOffset: {*/
/*                                     x: 0,*/
/*                                     y: 5*/
/*                                 }*/
/*                             },*/
/*                             axisY: {*/
/*                                 offset: 15,*/
/*                                 showLabel: true,*/
/*                                 showGrid: true,*/
/*                                 labelOffset: {*/
/*                                     x: 5,*/
/*                                     y: 5*/
/*                                 },*/
/*                                 scaleMinSpace: 20*/
/*                             }*/
/*                         };*/
/*                         Chartist.Bar('#popularity .ct-chart', data, options);*/
/*                     </script>*/
/*                     <div class="flush-bottom button-bar stats-bar">*/
/*                         <span class="stat">*/
/*                             <b>{{ popularity.getDailyTotal }}</b>*/
/*                             <i>{{ "PLUGIN_ADMIN.TODAY"|tu }}</i>*/
/*                         </span>*/
/*                         <span class="stat">*/
/*                             <b>{{ popularity.getWeeklyTotal }}</b>*/
/*                             <i>{{ "PLUGIN_ADMIN.WEEK"|tu }}</i>*/
/*                         </span>*/
/*                         <span class="stat">*/
/*                             <b>{{ popularity.getMonthlyTotal }}</b>*/
/*                             <i>{{ "PLUGIN_ADMIN.MONTH"|tu }}</i>*/
/*                         </span>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     {% include 'partials/messages.html.twig' %}*/
/* */
/*     {% if authorize(['admin.pages', 'admin.super']) %}*/
/*         <div id="latest">*/
/*             <div class="button-bar">*/
/*                 <a class="button" href="{{ uri.route(true) }}/pages"><i class="fa fa-fw fa-file-text-o"></i>{{ "PLUGIN_ADMIN.MANAGE_PAGES"|tu }}</a>*/
/*             </div>*/
/*             <h1>{{ "PLUGIN_ADMIN.LATEST_PAGE_UPDATES"|tu }}</h1>*/
/*             <table>*/
/*             {% for latest in admin.latestPages if admin.latestPages %}*/
/*                 <tr><td class="double page-title"><a href="{{ base_url }}/pages/{{ latest.route|trim('/') }}"><i class="fa fa-fw fa-file-o"></i> {{ latest.title }}</a></td><td class="double page-route">{{ latest.route }}</td><td><b class="last-modified">{{ latest.modified|nicetime }}</b></td></tr>*/
/*             {% endfor %}*/
/*             </table>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="padding">You dont' have sufficient access to view the dashboard...</div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
