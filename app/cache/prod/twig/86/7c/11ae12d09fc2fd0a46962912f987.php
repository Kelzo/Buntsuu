<?php

/* BuntsuuMainBundle:Member:layout.html.twig */
class __TwigTemplate_867c11ae12d09fc2fd0a46962912f987 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'principal_content' => array($this, 'block_principal_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
<div id=\"menu\">
\t<ul>
\t<li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_index"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/home.png"), "html", null, true);
        echo "\"  /><br/> Home </a></li>
\t<li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_search"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/search.png"), "html", null, true);
        echo "\"  /><br/>Search</a></li>
\t<li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_profile"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/profil.png"), "html", null, true);
        echo "\" /><br/> Profile </a></li>
\t<li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_stamp"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/stamp.png"), "html", null, true);
        echo "\"  /><br/> Stamp </a></li>
\t<li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_chat"), "html", null, true);
        echo "\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/chat.png"), "html", null, true);
        echo "\"  /><br/> Chats </a></li>
\t</ul>
</div>

<div class=\"clear\"></div>

        <div>
            ";
        // line 18
        $this->displayBlock('principal_content', $context, $blocks);
        // line 21
        echo "     \t</div>
";
    }

    // line 18
    public function block_principal_content($context, array $blocks = array())
    {
        // line 19
        echo "            
            ";
    }

    public function getTemplateName()
    {
        return "BuntsuuMainBundle:Member:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  78 => 18,  73 => 21,  71 => 18,  59 => 11,  53 => 10,  47 => 9,  41 => 8,  35 => 7,  30 => 4,  27 => 3,  29 => 4,  26 => 3,);
    }
}
