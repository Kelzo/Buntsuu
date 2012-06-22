<?php

/* BuntsuuMainBundle:Member:index.html.twig */
class __TwigTemplate_7f13c52f6753cf95269ef1aa57ec3a1a extends Twig_Template
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
<h2 id=\"title_page\"> Home </h2><img id=\"mini\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/home.png"), "html", null, true);
        echo "\" alt=\"home\"/>
<div class=\"clear\"></div>
<img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/next.png"), "html", null, true);
        echo "\" alt=\"next\" id=\"next_article\" class=\"action\" />
<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/previous.png"), "html", null, true);
        echo "\" alt=\"previous\" id=\"previous_article\" class=\"action\" />
<div class=\"clear\"></div>
<div id=\"content_first\" \">
\t<h2>News</h2>
\t<div id=\"article\" class=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "id"), "html", null, true);
        echo "\">
\t\t";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "message"), "html", null, true);
        echo "
\t\t<br/><br/>
\t\t<div style=\"text-align:right; font-size:10px; color:grey;\">";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "date"), "l jS F Y h:i:s A"), "html", null, true);
        echo "</div>
\t</div>
</div>
<div id=\"content_second\">
\t<h2>Suggestions</h2>
\t<div id=\"\"></div>
";
        // line 21
        if (twig_test_empty($this->getContext($context, "preference"))) {
            // line 22
            echo "<h3></h3>
Do you want to see your suggestions ?! So come on and complete your preferences HERE now  ^^ ! 

";
        }
        // line 26
        echo "</div>
<div class=\"clear\"></div>


<script type=\"text/javascript\">
\t\t
\t/* CHANGEMENT D'ARTICLE AU CLIQUE SUR UNE FLECHE */
\t\$(\".action\").click(function(){
    id = \$(\"#article\").attr('class');
    action = \$(this).attr('alt');
       \t var DATA ='id='+id+'&action='+action;
\t\t \$.ajax({
\t\t        type: \"POST\",
\t\t        url:\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_index"), "html", null, true);
        echo "\",
\t\t        data: DATA,
\t\t        cache: false,
\t\t        success: function(data)
\t\t        {
\t\t\t\t\t\$(\"#content_first\").html(data);
\t\t        }
\t\t  });
    \t});

\t/* CHANGEMENT D'IMAGE AU SURVOL */
\t\$(\"#next_article\").hover(function(){
\t\t\$(\"#next_article\").attr('src','";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/next_white.png"), "html", null, true);
        echo "');
\t\t},
\t\tfunction () {
\t\t\$(\"#next_article\").attr('src','";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/next.png"), "html", null, true);
        echo "'); 
\t});

\t\$(\"#previous_article\").hover(function(){
\t\t\$(\"#previous_article\").attr('src','";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/previous_white.png"), "html", null, true);
        echo "');
\t\t},
\t\tfunction () {
\t\t\$(\"#previous_article\").attr('src','";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/previous.png"), "html", null, true);
        echo "'); 
\t});
\t
</script>

";
    }

    public function getTemplateName()
    {
        return "BuntsuuMainBundle:Member:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 61,  117 => 58,  110 => 54,  104 => 51,  89 => 39,  74 => 26,  68 => 22,  66 => 21,  57 => 15,  52 => 13,  48 => 12,  41 => 8,  37 => 7,  32 => 5,  29 => 4,  26 => 3,);
    }
}
