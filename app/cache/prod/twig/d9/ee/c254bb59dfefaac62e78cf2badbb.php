<?php

/* BuntsuuMainBundle:All:index.html.twig */
class __TwigTemplate_d9eec254bb59dfefaac62e78cf2badbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BuntsuuMainBundle:All:layout.html.twig");

        $this->blocks = array(
            'principal_content' => array($this, 'block_principal_content'),
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

    // line 3
    public function block_principal_content($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"first\">
\t<h2> <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/search.png"), "html", null, true);
        echo "\"  /> Search </h2>
\t<form action=\"\" class=\"side-by-side clearfix\" method=\"post\">
       
       <label>Spoken</label>
       <select  class=\"chzn-select\">
       \t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "languages"));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 11
            echo "       \t\t<option>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "language"), "name"), "html", null, true);
            echo "</option>
       \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "       \t</select>

       \t<label>Searched</label>
       \t<select  class=\"chzn-select\">
       \t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "languages"));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 18
            echo "       \t\t<option>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "language"), "name"), "html", null, true);
            echo "</option>
       \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "       </select>

       
        <input type=\"submit\" />
    </form>
</div>
<div id=\"second\">
\t<h2> <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/subscribe.png"), "html", null, true);
        echo "\"  /> Sign Up </h2>
\t<p></p>
\t<!--  FORMULAIRE DE LOGIN -->
\t<div class=\"clear\"></div>
\t<div>
\t";
        // line 32
        if ($this->getContext($context, "error")) {
            // line 33
            echo "    \t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
\t";
        }
        // line 35
        echo "\t\t<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
\t\t    <label for=\"username\">Username:</label>
\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
\t\t
\t\t    <label for=\"password\">Password:</label>
\t\t    <input type=\"password\" id=\"password\" name=\"_password\" />
\t\t
\t\t    ";
        // line 46
        echo "\t\t
\t\t    <button type=\"submit\">login</button>
\t\t</form>
\t</div>
\t
</div>
<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "BuntsuuMainBundle:All:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 46,  103 => 37,  97 => 35,  91 => 33,  89 => 32,  81 => 27,  72 => 20,  63 => 18,  59 => 17,  53 => 13,  44 => 11,  40 => 10,  32 => 5,  29 => 4,  26 => 3,);
    }
}
