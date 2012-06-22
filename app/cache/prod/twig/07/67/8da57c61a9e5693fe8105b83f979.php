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
            echo "<h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
            echo " preferences :</h3>
\t<div>
\t\t<h4>My spoken language(s) :</h4>
\t\t";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "preference"), "firstLanguageSpoken"), "name"), "html", null, true);
            echo "
\t\t";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "preference"), "secondLanguageSpoken"), "name"), "html", null, true);
            echo "
\t\t";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "preference"), "thirdLanguageSpoken"), "name"), "html", null, true);
            echo "
\t</div>
\t<div>
\t\t<h4>My searched language(s) :</h4>
\t\t";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "preference"), "firstLanguageSearched"), "name"), "html", null, true);
            echo "
\t\t";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "preference"), "secondLanguageSearched"), "name"), "html", null, true);
            echo "
\t\t";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "preference"), "thirdLanguageSearched"), "name"), "html", null, true);
            echo "
\t</div>
\t<div>
\t\t<h4>I want to talk by : </h4>
\t\tSkype : ";
            // line 36
            if (($this->getAttribute($this->getContext($context, "preference"), "skype") == 1)) {
                echo " Yes ";
            } else {
                echo " No ";
            }
            // line 37
            echo "\t\tFacebook : ";
            if (($this->getAttribute($this->getContext($context, "preference"), "facebook") == 1)) {
                echo " Yes ";
            } else {
                echo " No ";
            }
            // line 38
            echo "\t\tLetter : ";
            if (($this->getAttribute($this->getContext($context, "preference"), "letter") == 1)) {
                echo " Yes ";
            } else {
                echo " No ";
            }
            // line 39
            echo "\t\tEmail : ";
            if (($this->getAttribute($this->getContext($context, "preference"), "email") == 1)) {
                echo " Yes ";
            } else {
                echo " No ";
            }
            // line 40
            echo "\t</div>
";
        }
        // line 42
        echo "</div>
<a href=\"\"> <button class=\"submit submit_blue\">Send a message</button> </a>
<a href=\"\"> <button class=\"submit submit_purple\"> Add a comment </button> </a>
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
        return array (  155 => 42,  151 => 40,  144 => 39,  137 => 38,  130 => 37,  124 => 36,  117 => 32,  113 => 31,  109 => 30,  102 => 26,  98 => 25,  94 => 24,  87 => 21,  85 => 20,  77 => 17,  71 => 16,  65 => 15,  61 => 14,  57 => 13,  52 => 12,  46 => 11,  40 => 9,  38 => 8,  32 => 5,  29 => 4,  26 => 3,);
    }
}
