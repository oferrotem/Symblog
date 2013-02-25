<?php

/* BloggerBlogBundle:Comment:form.html.twig */
class __TwigTemplate_9494f95fb6ed47170fe7d385be7be1b9 extends Twig_Template
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
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_comment_create", array("blog_id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
</form>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 48,  170 => 47,  128 => 25,  124 => 23,  87 => 47,  62 => 34,  77 => 25,  53 => 12,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 63,  185 => 61,  183 => 60,  177 => 58,  160 => 40,  112 => 42,  82 => 44,  65 => 16,  38 => 7,  144 => 34,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 34,  67 => 19,  61 => 16,  47 => 10,  28 => 4,  105 => 24,  93 => 20,  76 => 41,  72 => 22,  68 => 12,  91 => 20,  84 => 28,  44 => 15,  24 => 2,  27 => 4,  25 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 26,  127 => 49,  121 => 22,  118 => 44,  114 => 42,  104 => 36,  100 => 33,  78 => 24,  75 => 23,  71 => 19,  58 => 12,  34 => 11,  19 => 2,  94 => 53,  88 => 27,  79 => 26,  59 => 22,  31 => 4,  26 => 6,  21 => 2,  70 => 21,  63 => 24,  46 => 7,  22 => 3,  163 => 63,  155 => 58,  152 => 35,  149 => 51,  145 => 46,  139 => 50,  131 => 42,  123 => 47,  120 => 46,  115 => 13,  106 => 35,  101 => 36,  96 => 54,  83 => 18,  80 => 43,  74 => 40,  66 => 35,  55 => 22,  52 => 15,  50 => 11,  43 => 6,  41 => 7,  37 => 6,  35 => 6,  32 => 5,  29 => 4,  184 => 70,  178 => 53,  171 => 62,  165 => 43,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 54,  138 => 51,  136 => 27,  133 => 43,  130 => 47,  122 => 44,  119 => 36,  116 => 35,  111 => 11,  108 => 10,  102 => 6,  98 => 22,  95 => 34,  92 => 28,  89 => 50,  85 => 24,  81 => 40,  73 => 19,  64 => 17,  60 => 14,  57 => 31,  54 => 10,  51 => 14,  48 => 10,  45 => 8,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
