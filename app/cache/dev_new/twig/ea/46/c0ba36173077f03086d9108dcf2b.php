<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ea46c0ba36173077f03086d9108dcf2b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/routing.png"), "html", null, true);
        echo "\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Router:panel", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token"))), array());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 73,  188 => 67,  182 => 64,  176 => 61,  148 => 58,  117 => 44,  113 => 43,  140 => 61,  97 => 45,  86 => 39,  23 => 1,  99 => 34,  90 => 28,  49 => 13,  40 => 6,  173 => 48,  170 => 60,  128 => 25,  124 => 23,  87 => 47,  62 => 34,  77 => 27,  53 => 11,  301 => 100,  295 => 96,  292 => 95,  289 => 94,  287 => 93,  282 => 90,  276 => 86,  273 => 85,  270 => 84,  268 => 83,  263 => 80,  249 => 79,  245 => 77,  230 => 75,  222 => 73,  220 => 72,  215 => 70,  211 => 69,  204 => 66,  198 => 69,  185 => 61,  183 => 60,  177 => 58,  160 => 59,  112 => 42,  82 => 37,  65 => 23,  38 => 7,  144 => 34,  141 => 51,  135 => 47,  126 => 45,  109 => 42,  103 => 34,  67 => 23,  61 => 22,  47 => 9,  28 => 3,  105 => 41,  93 => 20,  76 => 41,  72 => 22,  68 => 19,  91 => 20,  84 => 25,  44 => 11,  24 => 2,  27 => 4,  25 => 29,  225 => 96,  216 => 90,  212 => 88,  205 => 71,  201 => 83,  196 => 80,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 47,  127 => 49,  121 => 45,  118 => 29,  114 => 42,  104 => 35,  100 => 33,  78 => 24,  75 => 23,  71 => 20,  58 => 17,  34 => 11,  19 => 2,  94 => 33,  88 => 41,  79 => 23,  59 => 13,  31 => 3,  26 => 9,  21 => 2,  70 => 22,  63 => 16,  46 => 8,  22 => 3,  163 => 63,  155 => 58,  152 => 35,  149 => 51,  145 => 57,  139 => 50,  131 => 42,  123 => 33,  120 => 46,  115 => 44,  106 => 36,  101 => 36,  96 => 54,  83 => 25,  80 => 28,  74 => 21,  66 => 20,  55 => 16,  52 => 14,  50 => 10,  43 => 7,  41 => 8,  37 => 5,  35 => 6,  32 => 9,  29 => 3,  184 => 70,  178 => 62,  171 => 62,  165 => 43,  162 => 57,  157 => 56,  153 => 54,  151 => 52,  143 => 56,  138 => 51,  136 => 27,  133 => 31,  130 => 30,  122 => 44,  119 => 45,  116 => 35,  111 => 11,  108 => 10,  102 => 34,  98 => 32,  95 => 31,  92 => 43,  89 => 31,  85 => 29,  81 => 24,  73 => 11,  64 => 15,  60 => 15,  57 => 12,  54 => 12,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
