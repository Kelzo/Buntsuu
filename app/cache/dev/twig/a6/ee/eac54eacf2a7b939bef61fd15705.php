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
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/css/chosen.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js\" type=\"text/javascript\"></script>
\t\t<script src=\"";
        // line 11
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
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/back.png"), "html", null, true);
        echo "\" id=\"buntsuu\" alt=\"buntsuu\" /></div>
\t\t<div id=\"subtitle\"> Find your Correspondent</div>
\t</div>
\t\t
\t\t<div id=\"main\">
\t\t\t<div id=\"auth\">

\t\t\t</div>
\t\t\t";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 30
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

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Buntsuu";
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        // line 29
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
        return array (  86 => 29,  83 => 28,  77 => 7,  65 => 30,  63 => 28,  52 => 20,  40 => 11,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
