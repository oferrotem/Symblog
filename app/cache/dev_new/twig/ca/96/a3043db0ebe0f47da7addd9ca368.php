<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_ca96a3043db0ebe0f47da7addd9ca368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" />
    ";
        // line 5
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/webprofiler/images/profiler/exception.png"), "html", null, true);
        echo "\" alt=\"Exception\" /></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 13
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 14
            echo "            <span>1</span>
        ";
        }
        // line 16
        echo "    </span>
</span>
";
    }

    // line 20
    public function block_panel($context, array $blocks = array())
    {
        // line 21
        echo "    <h2>Exception</h2>

    ";
        // line 23
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 24
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 28
            echo "        ";
            echo $this->env->getExtension('actions')->renderAction("WebProfilerBundle:Exception:show", array("exception" => $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "exception"), "format" => "html"), array());
            // line 29
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 141,  330 => 140,  327 => 139,  325 => 138,  320 => 135,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  280 => 114,  275 => 111,  264 => 105,  258 => 103,  254 => 101,  252 => 100,  247 => 97,  240 => 93,  234 => 89,  231 => 88,  228 => 87,  226 => 86,  221 => 83,  207 => 76,  202 => 73,  193 => 68,  190 => 67,  174 => 58,  169 => 56,  107 => 27,  209 => 77,  188 => 66,  182 => 64,  176 => 61,  148 => 46,  117 => 44,  113 => 43,  140 => 42,  97 => 23,  86 => 29,  23 => 1,  99 => 34,  90 => 28,  49 => 13,  40 => 6,  173 => 48,  170 => 60,  128 => 25,  124 => 23,  87 => 47,  62 => 16,  77 => 24,  53 => 11,  301 => 125,  295 => 121,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 86,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 79,  245 => 96,  230 => 75,  222 => 73,  220 => 72,  215 => 79,  211 => 69,  204 => 66,  198 => 69,  185 => 61,  183 => 63,  177 => 59,  160 => 59,  112 => 42,  82 => 19,  65 => 23,  38 => 5,  144 => 34,  141 => 51,  135 => 47,  126 => 45,  109 => 42,  103 => 25,  67 => 14,  61 => 12,  47 => 9,  28 => 3,  105 => 41,  93 => 20,  76 => 17,  72 => 22,  68 => 20,  91 => 20,  84 => 25,  44 => 8,  24 => 2,  27 => 4,  25 => 29,  225 => 96,  216 => 90,  212 => 78,  205 => 71,  201 => 83,  196 => 69,  194 => 62,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 48,  147 => 55,  132 => 47,  127 => 49,  121 => 45,  118 => 29,  114 => 42,  104 => 35,  100 => 24,  78 => 24,  75 => 23,  71 => 21,  58 => 14,  34 => 11,  19 => 2,  94 => 33,  88 => 20,  79 => 18,  59 => 13,  31 => 3,  26 => 9,  21 => 2,  70 => 15,  63 => 16,  46 => 8,  22 => 3,  163 => 63,  155 => 58,  152 => 35,  149 => 51,  145 => 57,  139 => 50,  131 => 42,  123 => 35,  120 => 46,  115 => 44,  106 => 36,  101 => 36,  96 => 54,  83 => 28,  80 => 28,  74 => 21,  66 => 20,  55 => 9,  52 => 14,  50 => 10,  43 => 7,  41 => 8,  37 => 5,  35 => 6,  32 => 9,  29 => 3,  184 => 70,  178 => 62,  171 => 57,  165 => 54,  162 => 53,  157 => 56,  153 => 54,  151 => 47,  143 => 43,  138 => 51,  136 => 27,  133 => 31,  130 => 39,  122 => 44,  119 => 45,  116 => 31,  111 => 11,  108 => 10,  102 => 34,  98 => 32,  95 => 31,  92 => 21,  89 => 31,  85 => 29,  81 => 24,  73 => 16,  64 => 15,  60 => 15,  57 => 12,  54 => 12,  51 => 14,  48 => 9,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
