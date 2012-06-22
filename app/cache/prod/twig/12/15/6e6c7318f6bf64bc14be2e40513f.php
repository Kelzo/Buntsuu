<?php

/* BuntsuuMainBundle:Member:action_article.html.twig */
class __TwigTemplate_12156e6c7318f6bf64bc14be2e40513f extends Twig_Template
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
        echo "<h2>News</h2>
<div id=\"article\"  class=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "id"), "html", null, true);
        echo "\">
\t";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "message"), "html", null, true);
        echo "
\t<br/>
\t<br/>
\t<div style=\"text-align:right; font-size:10px; color:grey;\">";
        // line 6
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "date"), "l jS F Y h:i:s A"), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "BuntsuuMainBundle:Member:action_article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  24 => 3,  20 => 2,  17 => 1,);
    }
}
