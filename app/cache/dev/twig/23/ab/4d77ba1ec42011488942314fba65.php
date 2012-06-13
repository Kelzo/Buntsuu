<?php

/* BuntsuuMainBundle:All:registration.html.twig */
class __TwigTemplate_23ab4d77ba1ec42011488942314fba65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BuntsuuMainBundle:All:layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "\t<form action=\"\" class=\"side-by-side clearfix\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
        ";
        // line 4
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
        <input type=\"submit\" />
    </form>
    
";
    }

    public function getTemplateName()
    {
        return "BuntsuuMainBundle:All:registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  66 => 7,  56 => 24,  36 => 10,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 33,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 46,  80 => 26,  60 => 16,  52 => 12,  97 => 35,  95 => 21,  88 => 29,  78 => 25,  71 => 14,  25 => 4,  72 => 20,  64 => 15,  53 => 13,  34 => 4,  92 => 20,  86 => 28,  79 => 40,  19 => 1,  42 => 10,  40 => 13,  29 => 3,  26 => 2,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 37,  74 => 27,  47 => 7,  32 => 5,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  69 => 20,  63 => 18,  58 => 26,  49 => 11,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 34,  96 => 34,  91 => 33,  82 => 27,  77 => 25,  75 => 25,  57 => 15,  50 => 8,  46 => 10,  44 => 11,  39 => 9,  33 => 7,  30 => 4,  27 => 3,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 40,  108 => 40,  104 => 24,  102 => 37,  94 => 33,  89 => 32,  87 => 32,  84 => 28,  81 => 27,  73 => 21,  70 => 26,  67 => 19,  62 => 24,  59 => 17,  55 => 14,  51 => 13,  48 => 11,  41 => 9,  38 => 10,  35 => 5,  31 => 8,  28 => 3,);
    }
}
