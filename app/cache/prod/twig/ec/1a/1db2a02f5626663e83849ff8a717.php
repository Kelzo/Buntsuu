<?php

/* BuntsuuMainBundle:Member:profile.html.twig */
class __TwigTemplate_ec1a1db2a02f5626663e83849ff8a717 extends Twig_Template
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
<h2> Profile </h2>

";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "
";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "gender"), "html", null, true);
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "skype"), "html", null, true);
        echo "
";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "facebook"), "html", null, true);
        echo "
";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "birthdate"), "Y-m-d"), "html", null, true);
        echo "

";
        // line 13
        if ((!twig_test_empty($this->getContext($context, "preference")))) {
            // line 14
            echo "<h3>My preferences :</h3>
\t";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "preference"), "skype"), "html", null, true);
            echo "
\t";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "preference"), "facebook"), "html", null, true);
            echo "
\t";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "preference"), "letter"), "html", null, true);
            echo "
\t";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "preference"), "email"), "html", null, true);
            echo "
";
        } else {
            // line 20
            echo "\tYour preference aren't selected, please do it !
\t<br/>
\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_preference"), "html", null, true);
            echo "\"> Preferences </a>
";
        }
    }

    public function getTemplateName()
    {
        return "BuntsuuMainBundle:Member:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 22,  77 => 20,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  57 => 14,  55 => 13,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  34 => 7,  29 => 4,  26 => 3,);
    }
}
