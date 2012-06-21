<?php

/* BuntsuuMainBundle:Member:preference.html.twig */
class __TwigTemplate_9ff1969b9a608aff19dda34f1afb3635 extends Twig_Template
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

    // line 2
    public function block_principal_content($context, array $blocks = array())
    {
        // line 3
        echo "
\t<form action=\"\" class=\"side-by-side clearfix\" method=\"post\" ";
        // line 4
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
\t\t";
        // line 5
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
\t\t";
        // line 6
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "_token"));
        echo "
\t\t<div id=\"content_second\">
\t\t<h2>Your languages preferences</h2>
\t\t\t<div id=\"language_spoken\">
\t\t\t\t<label for=\"buntsuu_mainbundle_preferencetype_firstLanguageSpokenOne\">Language Spoken n°1 (priority)</label>
\t\t         ";
        // line 11
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "firstLanguageSpoken"), array("attr" => array("class" => "chzn-select")));
        echo "
\t\t         <label for=\"buntsuu_mainbundle_preferencetype_secondLanguageSpoken\">Language Spoken n°2</label>
\t\t    \t ";
        // line 13
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "secondLanguageSpoken"), array("attr" => array("class" => "chzn-select")));
        echo "
\t\t    \t <label for=\"buntsuu_mainbundle_preferencetype_thirdLanguageSpoken\">Language Spoken n°3</label>
\t\t    \t ";
        // line 15
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "thirdLanguageSpoken"), array("attr" => array("class" => "chzn-select")));
        echo "
\t\t    \t 
\t\t    \t <div id=\"language_searched_button\" class=\"button_green \">(CLICK HERE)</div>
\t    \t </div>
\t    \t <div id=\"language_searched\">
    \t <label for=\"buntsuu_mainbundle_preferencetype_firstLanguageSearched\">Language Searched n°1 (priority)</label>
\t    \t \t ";
        // line 21
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "firstLanguageSearched"), array("attr" => array("class" => "chzn-select")));
        echo "
\t    \t \t <label for=\"buntsuu_mainbundle_preferencetype_secondLanguageSearched\">Language Searched n°2</label>
\t    \t \t ";
        // line 23
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "secondLanguageSearched"), array("attr" => array("class" => "chzn-select")));
        echo "
\t    \t \t <label for=\"buntsuu_mainbundle_preferencetype_thirdLanguageSearched\">Language Searched n°3</label>
\t    \t \t ";
        // line 25
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "thirdLanguageSearched"), array("attr" => array("class" => "chzn-select")));
        echo "
\t    \t <div id=\"language_spoken_button\" class=\"button_green\">(CLICK HERE)</div>
    \t \t </div>
        
        </div>
        <div id=\"content_first\" >
        <h2>Communications medias</h2>
        <a style=\"font-size:12px;font-weight:bold; color:#E1C62F\"> (Click to activate) </a>
\t        <div id=\"medias\">
\t       \t\t <label for=\"buntsuu_mainbundle_preferencetype_skype\" class=\"checkbox_label\">Skype</label>
\t    \t \t ";
        // line 35
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "skype"), array("attr" => array("class" => "checkbox_form")));
        echo "
\t    \t \t <label for=\"buntsuu_mainbundle_preferencetype_facebook\" class=\"checkbox_label\">Facebook</label>
\t    \t \t ";
        // line 37
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "facebook"), array("attr" => array("class" => "checkbox_form")));
        echo "
\t    \t \t <label for=\"buntsuu_mainbundle_preferencetype_email\" class=\"checkbox_label\">Email</label>
\t    \t \t ";
        // line 39
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "email"), array("attr" => array("class" => "checkbox_form")));
        echo "
\t\t\t\t <label for=\"buntsuu_mainbundle_preferencetype_letter\" class=\"checkbox_label\">Letter</label>
\t    \t \t ";
        // line 41
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "letter"), array("attr" => array("class" => "checkbox_form")));
        echo "
\t    \t \t <label for=\"buntsuu_mainbundle_preferencetype_webcam\" class=\"checkbox_label\">Webcam</label>
\t    \t \t ";
        // line 43
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "webcam"), array("attr" => array("class" => "checkbox_form")));
        echo "
\t\t\t
\t\t\t</div>
\t\t</div>
\t\t<input type=\"submit\" value=\"Validate\" style=\"float:right\"/>
\t\t<div class=\"clear\"></div>
    </form>
    
    <script type=\"text/javascript\">
    \t
\t\t\$(\"#language_searched\").hide();
\t\t
\t\t\$(\"#language_searched_button\").click(function(){
\t\t\t\$(\"#language_spoken\").hide();
\t\t\t\$(\"#language_searched\").show();
\t\t});
\t\t
\t\t\$(\"#language_spoken_button\").click(function(){
\t\t\t\$(\"#language_searched\").hide();
\t\t\t\$(\"#language_spoken\").show();
\t\t});


\t\t\$(\".checkbox_label\").click(function()
\t\t{
\t\t\tif (\$(this).attr('class') == 'checkbox_label_checked')
\t\t\t{
\t\t\t\t\$(this).attr('class','checkbox_label');
\t\t\t}
\t\t\telse
\t\t\t{
\t\t\t\t\$(this).attr('class','checkbox_label_checked');
\t\t\t}
\t\t});
\t\t
\t
    </script>
";
    }

    public function getTemplateName()
    {
        return "BuntsuuMainBundle:Member:preference.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 43,  105 => 41,  100 => 39,  95 => 37,  90 => 35,  77 => 25,  72 => 23,  67 => 21,  58 => 15,  53 => 13,  48 => 11,  40 => 6,  36 => 5,  32 => 4,  29 => 3,  26 => 2,);
    }
}
