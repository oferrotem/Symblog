<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_d8f876f774b40d400478252fbf25206e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 44,  113 => 43,  140 => 61,  97 => 45,  86 => 39,  23 => 1,  99 => 34,  90 => 30,  49 => 13,  40 => 6,  173 => 48,  170 => 47,  128 => 25,  124 => 23,  87 => 47,  62 => 34,  77 => 27,  53 => 12,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 40,  112 => 42,  82 => 37,  65 => 23,  38 => 7,  144 => 34,  141 => 51,  135 => 47,  126 => 45,  109 => 42,  103 => 34,  67 => 23,  61 => 22,  47 => 9,  28 => 3,  105 => 41,  93 => 20,  76 => 41,  72 => 22,  68 => 21,  91 => 20,  84 => 28,  44 => 11,  24 => 2,  27 => 4,  25 => 29,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 26,  127 => 49,  121 => 45,  118 => 29,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 22,  58 => 17,  34 => 11,  19 => 2,  94 => 33,  88 => 41,  79 => 26,  59 => 22,  31 => 3,  26 => 9,  21 => 2,  70 => 22,  63 => 19,  46 => 8,  22 => 3,  163 => 63,  155 => 58,  152 => 35,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 33,  120 => 46,  115 => 28,  106 => 36,  101 => 36,  96 => 54,  83 => 25,  80 => 28,  74 => 24,  66 => 20,  55 => 16,  52 => 14,  50 => 11,  43 => 11,  41 => 10,  37 => 5,  35 => 6,  32 => 9,  29 => 5,  184 => 70,  178 => 53,  171 => 62,  165 => 43,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 40,  138 => 51,  136 => 27,  133 => 31,  130 => 30,  122 => 44,  119 => 36,  116 => 35,  111 => 11,  108 => 10,  102 => 47,  98 => 22,  95 => 34,  92 => 43,  89 => 31,  85 => 29,  81 => 40,  73 => 11,  64 => 15,  60 => 19,  57 => 8,  54 => 10,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 3,);
    }
}
