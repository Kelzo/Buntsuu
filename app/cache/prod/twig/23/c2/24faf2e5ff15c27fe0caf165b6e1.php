<?php

/* BuntsuuMainBundle:Member:edit_profile.html.twig */
class __TwigTemplate_23c224faf2e5ff15c27fe0caf165b6e1 extends Twig_Template
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

    // line 2
    public function block_principal_content($context, array $blocks = array())
    {
        // line 3
        echo "\t<form action=\"\" class=\"side-by-side clearfix\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
 \t\t";
        // line 4
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
        <button class=\"submit submit_blue\" type=\"submit\" >  Validate </button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "BuntsuuMainBundle:Member:edit_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 3,  26 => 2,);
    }
}
