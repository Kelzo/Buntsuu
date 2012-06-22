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
<h3>Precise</h3>
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pUsers"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 9
            echo "<div class=\"user_case_";
            if (($this->getAttribute($this->getContext($context, "user"), "gender") == null)) {
                echo "male";
            } else {
                echo "female";
            }
            echo "\">
\t<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_profile_target", array("target" => $this->getAttribute($this->getContext($context, "user"), "username"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), 0, 4), "html", null, true);
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username")) > 4)) {
                echo "...";
            }
            echo "</a>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "<div class=\"clear\"></div>
<h3>Balanced</h3>
";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sUsers"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "<div class=\"user_case_";
            if (($this->getAttribute($this->getContext($context, "user"), "gender") == null)) {
                echo "male";
            } else {
                echo "female";
            }
            echo "\">
\t<a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_profile_target", array("target" => $this->getAttribute($this->getContext($context, "user"), "username"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), 0, 4), "html", null, true);
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username")) > 4)) {
                echo "...";
            }
            echo "</a>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "<div class=\"clear\"></div>
<h3>Large</h3>
";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tUsers"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 23
            echo "<div class=\"user_case_";
            if (($this->getAttribute($this->getContext($context, "user"), "gender") == null)) {
                echo "male";
            } else {
                echo "female";
            }
            echo "\">
\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_profile_target", array("target" => $this->getAttribute($this->getContext($context, "user"), "username"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), 0, 4), "html", null, true);
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username")) > 4)) {
                echo "...";
            }
            echo "</a>
</div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "<div class=\"clear\"></div>
<h3>Very Large</h3>





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
        return array (  128 => 28,  113 => 24,  104 => 23,  100 => 22,  96 => 20,  82 => 17,  73 => 16,  69 => 15,  65 => 13,  51 => 10,  42 => 9,  38 => 8,  32 => 5,  29 => 4,  26 => 3,);
    }
}
