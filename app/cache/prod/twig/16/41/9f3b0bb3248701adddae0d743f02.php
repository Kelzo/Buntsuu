<?php

/* BuntsuuMainBundle:Member:search.html.twig */
class __TwigTemplate_16419f3b0bb3248701adddae0d743f02 extends Twig_Template
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
<h2 id=\"title_page\"> Search </h2><img id=\"mini\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/search.png"), "html", null, true);
        echo "\" alt=\"search\"/>
<div class=\"clear\"></div>
<button id=\"go_precise\" class=\"submit submit_special\">Precise</button>
<button id=\"go_balanced\" class=\"submit submit_special\">Balanced</button>
<button id=\"go_large\" class=\"submit submit_special\">Large</button>
<button id=\"go_verylarge\" class=\"submit submit_special\">Very Large</button>

<div id=\"precise\">
\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pUsers"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 14
            echo "\t<div class=\"user_case_";
            if (($this->getAttribute($this->getContext($context, "user"), "gender") == null)) {
                echo "male";
            } else {
                echo "female";
            }
            echo "\">
\t\t<a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_profile_target", array("target" => $this->getAttribute($this->getContext($context, "user"), "username"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), 0, 4), "html", null, true);
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username")) > 4)) {
                echo "...";
            }
            echo "</a>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 18
        echo "</div>

<div class=\"clear\"></div>
<div id=\"balanced\">
\t<h3></h3>
\t";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sUsers"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 24
            echo "\t<div class=\"user_case_";
            if (($this->getAttribute($this->getContext($context, "user"), "gender") == null)) {
                echo "male";
            } else {
                echo "female";
            }
            echo "\">
\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_profile_target", array("target" => $this->getAttribute($this->getContext($context, "user"), "username"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), 0, 4), "html", null, true);
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username")) > 4)) {
                echo "...";
            }
            echo "</a>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "</div>

<div class=\"clear\"></div>
<div id=\"large\">
\t<h3></h3>
\t";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tUsers"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 34
            echo "\t<div class=\"user_case_";
            if (($this->getAttribute($this->getContext($context, "user"), "gender") == null)) {
                echo "male";
            } else {
                echo "female";
            }
            echo "\">
\t\t<a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_profile_target", array("target" => $this->getAttribute($this->getContext($context, "user"), "username"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), 0, 4), "html", null, true);
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username")) > 4)) {
                echo "...";
            }
            echo "</a>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 38
        echo "</div>
<div class=\"clear\"></div>
<h3></h3>

<script>
\t\$(\"#balanced\").hide();
\t\$(\"#large\").hide();

\t/*PRECISE SELECTION*/
\t\$(\"#go_precise\").click(function(){
\t\t\$(\"#balanced\").hide();
\t\t\$(\"#large\").hide();
\t\t\$(\"#verylarge\").hide();
\t\t\$(\"#precise\").show();
\t});

\t/*BALANCED SELECTION*/
\t\$(\"#go_balanced\").click(function(){
\t\t\$(\"#precise\").hide();
\t\t\$(\"#large\").hide();
\t\t\$(\"#verylarge\").hide();
\t\t\$(\"#balanced\").show();
\t});

\t/*LARGE SELECTION*/
\t\$(\"#go_large\").click(function(){
\t\t\$(\"#balanced\").hide();
\t\t\$(\"#precise\").hide();
\t\t\$(\"#verylarge\").hide();
\t\t\$(\"#large\").show();
\t});

\t/*VERYLARGE SELECTION*/
\t\$(\"#go_verylarge\").click(function(){
\t\t\$(\"#balanced\").hide();
\t\t\$(\"#large\").hide();
\t\t\$(\"#precise\").hide();
\t\t\$(\"#verylarge\").show();
\t});
\t
</script>




";
    }

    public function getTemplateName()
    {
        return "BuntsuuMainBundle:Member:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 38,  124 => 35,  115 => 34,  111 => 33,  104 => 28,  90 => 25,  81 => 24,  77 => 23,  70 => 18,  56 => 15,  47 => 14,  43 => 13,  32 => 5,  29 => 4,  26 => 3,);
    }
}
