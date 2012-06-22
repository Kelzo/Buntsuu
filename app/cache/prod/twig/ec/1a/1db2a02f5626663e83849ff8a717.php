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
            echo "<img img class=\"mini\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/0.png"), "html", null, true);
            echo "\" alt=\"skype\"/>
";
        } else {
            // line 11
            echo "<img img class=\"mini\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/1.png"), "html", null, true);
            echo "\" alt=\"skype\"/>
";
        }
        // line 12
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), "html", null, true);
        echo "</div>
<div class=\"email\"><img class=\"mini\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/email.png"), "html", null, true);
        echo "\" alt=\"email\"/>  Email </div>
<div class=\"letter\"><img class=\"mini\"src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/letter.png"), "html", null, true);
        echo "\" alt=\"letter\"/>  
\t";
        // line 15
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "user"), "adress")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "adress"), "html", null, true);
        } else {
            echo " 77, LPCM Street ";
        }
        echo " 
<br/>
\t ";
        // line 17
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "user"), "zip")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "zip"), "html", null, true);
        } else {
            echo " 10110 ";
        }
        echo " ";
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "user"), "city")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "city"), "html", null, true);
        } else {
            echo " BUNTSUU CITY ";
        }
        // line 18
        echo "<br/>
\t ";
        // line 19
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "user"), "country")))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "country"), "html", null, true);
        } else {
            echo " BUNTSUU LAND ";
        }
        // line 20
        echo "</div>
<div class=\"classic_bottom\"><img class=\"mini\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/birthday.png"), "html", null, true);
        echo "\" alt=\"skype\"/> ";
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "user"), "birthdate")))) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "birthdate"), "m.d.y"), "html", null, true);
        } else {
            echo " I was never born ? ";
        }
        echo "</div>
<div class=\"skype\" ><img class=\"mini\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/skype.png"), "html", null, true);
        echo "\" alt=\"skype\"/>  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "skype"), "html", null, true);
        echo "</div>
<div class=\"facebook\"><img class=\"mini\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\"/>  ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "facebook"), "html", null, true);
        echo "</div>
</div>
<div id=\"content_first\">
";
        // line 26
        if ((!twig_test_empty($this->getContext($context, "preference")))) {
            // line 27
            echo "<h3>My preferences :</h3>
\t<div>
\t\t<h4>My spoken language(s) :</h4>
\t\t";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "preference"), "firstLanguageSpoken"), "name"), "html", null, true);
            echo "
\t\t";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "preference"), "secondLanguageSpoken"), "name"), "html", null, true);
            echo "
\t\t";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "preference"), "thirdLanguageSpoken"), "name"), "html", null, true);
            echo "
\t</div>
\t<div>
\t\t<h4>My searched language(s) :</h4>
\t\t";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "preference"), "firstLanguageSearched"), "name"), "html", null, true);
            echo "
\t\t";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "preference"), "secondLanguageSearched"), "name"), "html", null, true);
            echo "
\t\t";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "preference"), "thirdLanguageSearched"), "name"), "html", null, true);
            echo "
\t</div>
\t<div>
\t\t<h4>I want to talk by : </h4>
\t\tSkype : ";
            // line 42
            if (($this->getAttribute($this->getContext($context, "preference"), "skype") == 1)) {
                echo " Yes ";
            } else {
                echo " No ";
            }
            // line 43
            echo "\t\tFacebook : ";
            if (($this->getAttribute($this->getContext($context, "preference"), "facebook") == 1)) {
                echo " Yes ";
            } else {
                echo " No ";
            }
            // line 44
            echo "\t\tLetter : ";
            if (($this->getAttribute($this->getContext($context, "preference"), "letter") == 1)) {
                echo " Yes ";
            } else {
                echo " No ";
            }
            // line 45
            echo "\t\tEmail : ";
            if (($this->getAttribute($this->getContext($context, "preference"), "email") == 1)) {
                echo " Yes ";
            } else {
                echo " No ";
            }
            // line 46
            echo "\t</div>
";
        } else {
            // line 48
            echo "\tYour preference aren't selected, please do it !
\t<br/>
\t<a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_preference"), "html", null, true);
            echo "\"> Preferences </a>
";
        }
        // line 52
        echo "</div>
<a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_profile_edit"), "html", null, true);
        echo "\"> <button class=\"submit submit_green\">Modify Informations</button> </a>
<a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_preference"), "html", null, true);
        echo "\"> <button class=\"submit submit_green\">Modify Preferences </button> </a>
<div class=\"clear\"></div>

";
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
        return array (  206 => 54,  202 => 53,  199 => 52,  194 => 50,  190 => 48,  186 => 46,  179 => 45,  172 => 44,  165 => 43,  159 => 42,  152 => 38,  148 => 37,  144 => 36,  137 => 32,  133 => 31,  129 => 30,  124 => 27,  122 => 26,  114 => 23,  108 => 22,  98 => 21,  95 => 20,  89 => 19,  86 => 18,  74 => 17,  65 => 15,  61 => 14,  57 => 13,  52 => 12,  46 => 11,  40 => 9,  38 => 8,  32 => 5,  29 => 4,  26 => 3,);
    }
}
