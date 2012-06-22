<?php

/* BuntsuuMainBundle:Member:profile_target.html.twig */
class __TwigTemplate_07678da57c61a9e5693fe8105b83f979 extends Twig_Template
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
<h2 id=\"title_page\"> Profile </h2><img id=\"mini\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/profil.png"), "html", null, true);
        echo "\" alt=\"profile\"/>
<div class=\"clear\"></div>
<div id=\"content_third\">
<div class=\"classic_top\">";
        // line 8
        if (($this->getAttribute($this->getContext($context, "user"), "gender") == 0)) {
            // line 9
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/0.png"), "html", null, true);
            echo "\" alt=\"skype\"/>
";
        } else {
            // line 11
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/1.png"), "html", null, true);
            echo "\" alt=\"skype\"/>
";
        }
        // line 12
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "</div>
<div class=\"email\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/email.png"), "html", null, true);
        echo "\" alt=\"email\"/>  Email </div>
<div class=\"letter\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/letter.png"), "html", null, true);
        echo "\" alt=\"letter\"/>  Adress </div>
<div class=\"classic_bottom\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/birthday.png"), "html", null, true);
        echo "\" alt=\"skype\"/> Birthday ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "birthdate"), "html", null, true);
        echo "</div>
<div class=\"skype\" ><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/skype.png"), "html", null, true);
        echo "\" alt=\"skype\"/>  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "skype"), "html", null, true);
        echo "</div>
<div class=\"facebook\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\"/>  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "facebook"), "html", null, true);
        echo "</div>
</div>
<div id=\"content_first\">
";
        // line 20
        if ((!twig_test_empty($this->getContext($context, "preference")))) {
            // line 21
            echo "<h3>My preferences :</h3>
\t";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "preference"), "skype"), "html", null, true);
            echo "
\t";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "preference"), "facebook"), "html", null, true);
            echo "
\t";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "preference"), "letter"), "html", null, true);
            echo "
\t";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "preference"), "email"), "html", null, true);
            echo "
";
        }
        // line 27
        echo "</div>
<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "BuntsuuMainBundle:Member:profile_target.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 27,  102 => 25,  98 => 24,  94 => 23,  90 => 22,  87 => 21,  85 => 20,  77 => 17,  71 => 16,  65 => 15,  61 => 14,  57 => 13,  52 => 12,  46 => 11,  40 => 9,  38 => 8,  32 => 5,  29 => 4,  26 => 3,);
    }
}
