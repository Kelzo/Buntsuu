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
<h2> Search </h2>
<h3>Primary</h3>
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pUsers"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 8
            echo "<div class=\"user_case_";
            if (($this->getAttribute($this->getContext($context, "user"), "gender") == null)) {
                echo "male";
            } else {
                echo "female";
            }
            echo "\">
\t";
            // line 9
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), 0, 4), "html", null, true);
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username")) > 4)) {
                echo "...";
            }
            // line 10
            echo "</div>
<div class=\"clear\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "<h3>Secondary</h3>
";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "sUsers"));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "<div class=\"user_case_";
            if (($this->getAttribute($this->getContext($context, "user"), "gender") == null)) {
                echo "male";
            } else {
                echo "female";
            }
            echo "\">
\t";
            // line 16
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), 0, 4), "html", null, true);
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username")) > 4)) {
                echo "...";
            }
            // line 17
            echo "</div>
<div class=\"clear\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "
<h3>3</h3>
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
\t";
            // line 24
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getContext($context, "user"), "username"), 0, 4), "html", null, true);
            if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "username")) > 4)) {
                echo "...";
            }
            // line 25
            echo "</div>
<div class=\"clear\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 28
        echo "<h3>4</h3>





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
        return array (  119 => 28,  111 => 25,  106 => 24,  97 => 23,  93 => 22,  89 => 20,  81 => 17,  76 => 16,  67 => 15,  63 => 14,  60 => 13,  52 => 10,  47 => 9,  38 => 8,  34 => 7,  29 => 4,  26 => 3,);
    }
}
