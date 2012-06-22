<?php

/* BuntsuuMainBundle:All:registration.html.twig */
class __TwigTemplate_23ab4d77ba1ec42011488942314fba65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BuntsuuMainBundle:All:layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BuntsuuMainBundle:All:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div id=\"first\" class=\"content_design\">
\t<form action=\"\" class=\"side-by-side clearfix\" method=\"post\" ";
        // line 4
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
        <button class=\"submit submit_blue\" type=\"submit\" >  Validate </button>
    </form>
</div>
<div id=\"second_large\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/ban.png"), "html", null, true);
        echo "\" alt=\"banner\"/></div>


<script>
    \$(\"#second_large\").css('opacity','0');
\t\$(\"#second_large\").ready(function(){
\t\t\$(\"#second_large\").animate({opacity: 1},3000)
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "BuntsuuMainBundle:All:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  36 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
