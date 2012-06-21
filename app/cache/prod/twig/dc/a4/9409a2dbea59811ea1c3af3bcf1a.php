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
<h2> Chats </h2>
";
        // line 6
        if ((!twig_test_empty($this->getContext($context, "currentTarget")))) {
            // line 7
            echo "<div id=\"target\">
<ul>
";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "targets"));
            foreach ($context['_seq'] as $context["_key"] => $context["target"]) {
                // line 10
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
            // line 14
            echo "</ul>
</div>

<div id=\"chat\">
\t<div id=\"text\" class=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getContext($context, "currentTarget"), "html", null, true);
            echo "\">
\t\t";
            // line 19
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
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
            // line 22
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
            // line 40
            echo "\t<div id=\"warning\">
\t\t<h2>Oh..</h2>
\t\tYou don't have an open communication, find a friend with the search before !
\t</div>
";
        }
        // line 45
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
        // line 55
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
        // line 73
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
        return array (  146 => 73,  125 => 55,  113 => 45,  106 => 40,  86 => 22,  75 => 20,  71 => 19,  67 => 18,  61 => 14,  43 => 10,  39 => 9,  35 => 7,  33 => 6,  29 => 4,  26 => 3,);
    }
}
