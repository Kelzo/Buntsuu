<?php

/* BuntsuuMainBundle:Member:add_message.html.twig */
class __TwigTemplate_42ff24a5daeeda473dba991da6f296ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t<div id=\"text\" class=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "currentTarget"), "html", null, true);
        echo "\">
\t\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 3
            echo "\t\t<h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "message"), "author"), "username"), "html", null, true);
            echo ":</h3> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "message"), "message"), "html", null, true);
            echo "<br/><br/>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 5
        echo "\t</div>";
    }

    public function getTemplateName()
    {
        return "BuntsuuMainBundle:Member:add_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  26 => 3,  22 => 2,  17 => 1,);
    }
}
