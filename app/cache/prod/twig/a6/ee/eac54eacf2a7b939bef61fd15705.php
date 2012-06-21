<?php

/* ::layout.html.twig */
class __TwigTemplate_a6eeeac54eacf2a7b939bef61fd15705 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>

    <head>
\t
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/css/chosen.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/js/chosen.jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t<link href='http://fonts.googleapis.com/css?family=Exo:100,200,400,500,700' rel='stylesheet' type='text/css' />
    </head> 
\t
\t
    <body>
\t
\t\t
\t<div id=\"header\">
\t\t<div id=\"title\">BUNTSUU<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/back.png"), "html", null, true);
        echo "\" id=\"buntsuu\" alt=\"buntsuu\" /></div>
\t\t<div id=\"subtitle\"> Find your Correspondent</div>
\t</div>
\t\t
\t\t<div id=\"main\">
\t\t\t<div id=\"auth\">

\t\t\t</div>
\t\t\t";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 31
        echo "\t\t</div>
\t\t
\t\t<script type=\"text/javascript\">
\t\t \t\$(\".chzn-select\").chosen();
\t\t</script>
\t\t
    </body>
\t
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Buntsuu";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  84 => 29,  78 => 8,  66 => 31,  64 => 29,  41 => 12,  36 => 10,  28 => 8,  19 => 1,  48 => 11,  45 => 10,  38 => 10,  30 => 4,  27 => 3,  111 => 46,  103 => 37,  97 => 35,  91 => 33,  89 => 32,  81 => 27,  72 => 20,  63 => 18,  59 => 17,  53 => 21,  44 => 11,  40 => 13,  32 => 9,  29 => 4,  26 => 3,);
    }
}
