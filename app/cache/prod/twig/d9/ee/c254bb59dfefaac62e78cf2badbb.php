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
        echo "<div id=\"first\" class=\"content_design\">
\t<div class=\"general_content\">
\t\t<h2 id=\"title_page\"> Search </h2><img id=\"mini\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/search.png"), "html", null, true);
        echo "\" alt=\"search\"/>
\t\t<div class=\"clear\"></div>
\t\t<form action=\"\" class=\"side-by-side clearfix\" method=\"post\">
\t       
\t       <label>Spoken</label>
\t       <select  class=\"chzn-select\">
\t       \t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "languages"));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 13
            echo "\t       \t\t<option>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "language"), "name"), "html", null, true);
            echo "</option>
\t       \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "\t       \t</select>
\t
\t       \t<label>Searched</label>
\t       \t<select  class=\"chzn-select\">
\t       \t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "languages"));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 20
            echo "\t       \t\t<option>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "language"), "name"), "html", null, true);
            echo "</option>
\t       \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 22
        echo "\t       </select>
\t
\t       <div  class=\"clear\"></div>
\t        <button class=\"submit submit_purple\" type=\"submit\" >  Search !</button>
\t    </form>
    </div>
</div>
<div id=\"second\" class=\"content_design\">
\t<div class=\"general_content\">
\t\t<h2 id=\"title_page\"> Login </h2><img id=\"mini\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/profil.png"), "html", null, true);
        echo "\" alt=\"search\"/>
\t\t<div class=\"clear\"></div>
\t\t<p></p>
\t\t<!--  FORMULAIRE DE LOGIN -->
\t\t<div class=\"clear\"></div>
\t\t<div>
\t\t";
        // line 37
        if ($this->getContext($context, "error")) {
            // line 38
            echo "\t    \t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
            echo "</div>
\t\t";
        }
        // line 40
        echo "\t\t\t<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html", null, true);
        echo "\" method=\"post\">
\t\t\t    <label for=\"username\">Username:</label>
\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getContext($context, "last_username"), "html", null, true);
        echo "\" />
\t\t\t
\t\t\t    <label for=\"password\">Password:</label>
\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" />
\t\t\t
\t\t\t    ";
        // line 51
        echo "\t\t\t
\t\t\t    <button class=\"submit  submit_green\" type=\"submit\"> Go ! </button>
\t\t\t</form>
\t\t</div>
\t</div>
</div>
<div id=\"third\" class=\"content_design\">
\t<div class=\"general_content\">
\t\t<h2 id=\"title_page\"> Subscribe </h2><img id=\"mini\" src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/subscribe.png"), "html", null, true);
        echo "\" alt=\"search\"/>
\t\t<div class=\"clear\"></div>
\t\t<div style=\"width:95%;margin:0 auto;padding-bottom:20px;\">
\t\t\t<a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("all_registration"), "html", null, true);
        echo "\"><button class=\"submit submit_blue\" type=\"submit\" >  Go ! </button></a> 
\t\t</div>
\t</div>
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
        return array (  132 => 62,  126 => 59,  116 => 51,  108 => 42,  102 => 40,  96 => 38,  94 => 37,  85 => 31,  74 => 22,  65 => 20,  61 => 19,  55 => 15,  46 => 13,  42 => 12,  33 => 6,  29 => 4,  26 => 3,);
    }
}
