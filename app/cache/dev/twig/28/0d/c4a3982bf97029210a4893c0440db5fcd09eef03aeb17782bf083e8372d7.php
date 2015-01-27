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
    <link rel=\"stylesheet\" href=\"/css/bootstrap-theme.min.css\">
    <link rel=\"stylesheet\" href=\"/css/dark_bootstrap.min.css\">
    <script src=\"/js/jquery-2.1.3.min.js\"></script>
    <script src=\"/js/bootstrap.min.js\"></script>
</head>
<body>
";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 17
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

    // line 15
    public function block_body($context, array $blocks = array())
    {
    }

    // line 16
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
        return array (  72 => 16,  67 => 15,  62 => 6,  56 => 5,  51 => 17,  49 => 16,  47 => 15,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
