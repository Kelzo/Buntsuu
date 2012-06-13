<?php

/* BuntsuuMainBundle:All:layout.html.twig */
class __TwigTemplate_9a4a8820f21d79ff3a2136bb387c7526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'principal_content' => array($this, 'block_principal_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"menu\">
\t<ul>
\t</ul>
</div>
<div class=\"clear\"></div>
        <div>
            ";
        // line 10
        $this->displayBlock('principal_content', $context, $blocks);
        // line 13
        echo "     \t</div>
";
    }

    // line 10
    public function block_principal_content($context, array $blocks = array())
    {
        // line 11
        echo "            
            ";
    }

    public function getTemplateName()
    {
        return "BuntsuuMainBundle:All:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  45 => 10,  38 => 10,  30 => 4,  27 => 3,  111 => 46,  103 => 37,  97 => 35,  91 => 33,  89 => 32,  81 => 27,  72 => 20,  63 => 18,  59 => 17,  53 => 13,  44 => 11,  40 => 13,  32 => 5,  29 => 4,  26 => 3,);
    }
}
