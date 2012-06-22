<?php

/* BuntsuuMainBundle:Member:stamp.html.twig */
class __TwigTemplate_f23269c5f79984a3f9337c72190c68fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BuntsuuMainBundle:Member:layout.html.twig");

        $this->blocks = array(
            'principal_content' => array($this, 'block_principal_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BuntsuuMainBundle:Member:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_principal_content($context, array $blocks = array())
    {
        // line 4
        echo "
<h2 id=\"title_page\"> Stamps </h2><img id=\"mini\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/stamp.png"), "html", null, true);
        echo "\" alt=\"stamp\"/>
<div class=\"clear\"></div>

";
    }

    public function getTemplateName()
    {
        return "BuntsuuMainBundle:Member:stamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  29 => 4,  26 => 3,);
    }
}
