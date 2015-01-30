<?php

/* TmsTraderBundle::layout.html.twig */
class __TwigTemplate_280dc4a3982bf97029210a4893c0440db5fcd09eef03aeb17782bf083e8372d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'topmenu' => array($this, 'block_topmenu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\" />
    ";
        // line 10
        echo "    <link rel=\"stylesheet\" href=\"/css/dark_bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/css/tmsTrader.css\">
    <script src=\"/js/jquery-2.1.3.min.js\"></script>
    <script src=\"/js/bootstrap.min.js\"></script>
    <script src=\"/js/tmsTrader.js\"></script>
</head>
<body>
";
        // line 17
        $this->displayBlock('topmenu', $context, $blocks);
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "TmsTrader";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 17
    public function block_topmenu($context, array $blocks = array())
    {
        // line 18
        echo "    <div class=\"navbar navbar-default navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <a href=\"../\" class=\"navbar-brand\">tmsTrader</a>
                <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-main\">
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
            </div>
            <div class=\"navbar-collapse collapse\" id=\"navbar-main\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" id=\"themes\">Пара <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"themes\">
                            <li><a href=\"\">LTC- RUR</a></li>
                            <li><a href=\"\">BTC - RUR</a></li>
                            <li><a href=\"\">LTC - EUR</a></li>
                            <li><a href=\"\">BTC -USR</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"../help/\">Help</a>
                    </li>

                </ul>

                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"#\" target=\"_blank\">Настройки</a></li>
                </ul>

            </div>
        </div>
    </div>
";
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TmsTraderBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 54,  114 => 53,  76 => 18,  73 => 17,  68 => 6,  62 => 5,  57 => 55,  55 => 54,  53 => 53,  51 => 17,  42 => 10,  36 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
