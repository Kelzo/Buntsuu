<?php

/* BuntsuuMainBundle:Member:chat.html.twig */
class __TwigTemplate_dca49409a2dbea59811ea1c3af3bcf1a extends Twig_Template
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
<h2 id=\"title_page\"> Chats </h2><img id=\"mini\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/buntsuumain/images/chat.png"), "html", null, true);
        echo "\" alt=\"chat\"/>
<div class=\"clear\"></div>
";
        // line 7
        if ((!twig_test_empty($this->getContext($context, "currentTarget")))) {
            // line 8
            echo "<div id=\"target\">
<ul>
";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "targets"));
            foreach ($context['_seq'] as $context["_key"] => $context["target"]) {
                // line 11
                echo "\t\t\t<li ";
                if (($this->getContext($context, "currentTarget") == $this->getContext($context, "target"))) {
                    echo " class=\"currentTarget\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getContext($context, "target"), 0, 6), "html", null, true);
                if ((twig_length_filter($this->env, $this->getContext($context, "target")) > 6)) {
                    echo " ...";
                }
                echo "</li>
\t\t\t
\t\t\t
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['target'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 15
            echo "</ul>
</div>

<div id=\"chat\">
\t<div id=\"text\" class=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getContext($context, "currentTarget"), "html", null, true);
            echo "\">
\t\t";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 21
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
            // line 23
            echo "\t</div>
</div>
<div class=\"clear\"></div>
<div id=\"write\">

<form name=\"myform\" class=\"noPadding\"  onSubmit=\"return(false);\">
\t<textarea name=\"limitedtextarea\" onKeyDown=\"limitText(this.form.limitedtextarea,this.form.countdown,80);\" 
onKeyUp=\"limitText(this.form.limitedtextarea,this.form.countdown,80);\" type=\"text\" id=\"message\" style=\"float:left;height:50px; width:40%;\" value=\"test\" /> 
</textarea>
\t<button id=\"submit\" value=\"Send\" style=\"float:left; height:56px;\">Send</button>
\t<div class=\"clear\"></div>
\t<font size=\"1\">
You have <input readonly class=\"noDesign\" type=\"text\" name=\"countdown\" size=\"3\" value=\"80\"> characters left. (Maximum characters: 80)</font>
</div>
</form>\t


";
        } else {
            // line 41
            echo "\t<div id=\"warning\">
\t\t<h2>Oh..</h2>
\t\tYou don't have an open communication, find a friend with the search before !
\t</div>
";
        }
        // line 46
        echo "<div class=\"clear\"></div>
<script type=\"text/javascript\">
\t\$(\"#submit\").click(function(){
\t\t var username = \$(\"#text\").attr('class');
\t\t var message = \$(\"#message\").val();
\t\t if(message !=\"\"){
\t\t\t \$(\"#message\").val('');
\t\t\t var DATA ='username='+username+'&message='+message;
\t\t\t \$.ajax({
\t\t\t        type: \"POST\",
\t\t\t        url:\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_chat_message"), "html", null, true);
        echo "\",
\t\t\t        data: DATA,
\t\t\t        cache: false,
\t\t\t        success: function(data)
\t\t\t        {
\t\t\t\t\t\t\$(\"#chat\").html(data);
\t\t\t        }
\t\t\t  });
\t\t\t }
\t});

\t\$(\"#target li\").click(function(){
\t\t\$(\".currentTarget\").attr('class','');
\t\t\$(this).attr('class','currentTarget');
\t\t var username = \$(this).html();
\t\t var DATA ='username='+username;
\t\t \$.ajax({
\t\t        type: \"POST\",
\t\t        url:\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("member_chat_target"), "html", null, true);
        echo "\",
\t\t        data: DATA,
\t\t        cache: false,
\t\t        success: function(data)
\t\t        {
\t\t\t\t\t\$(\"#chat\").html(data);
\t\t        }
\t\t  });
\t});


</script>

<script language=\"javascript\" type=\"text/javascript\">
function limitText(limitField, limitCount, limitNum) {
\tif (limitField.value.length > limitNum) {
\t\tlimitField.value = limitField.value.substring(0, limitNum);
\t} else {
\t\tlimitCount.value = limitNum - limitField.value.length;
\t}
}
</script>
";
    }

    public function getTemplateName()
    {
        return "BuntsuuMainBundle:Member:chat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 74,  129 => 56,  117 => 46,  110 => 41,  90 => 23,  79 => 21,  75 => 20,  71 => 19,  65 => 15,  47 => 11,  43 => 10,  39 => 8,  37 => 7,  32 => 5,  29 => 4,  26 => 3,);
    }
}
