<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_6f3a021c9cdbd6593cceab7acd43ad55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('form')->renderer->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  262 => 236,  260 => 235,  257 => 234,  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  181 => 87,  166 => 82,  161 => 80,  156 => 77,  150 => 75,  167 => 64,  164 => 63,  134 => 54,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  238 => 218,  217 => 83,  214 => 82,  206 => 78,  203 => 77,  192 => 72,  158 => 56,  125 => 44,  110 => 42,  69 => 15,  56 => 12,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 156,  330 => 140,  327 => 139,  325 => 150,  320 => 135,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  280 => 114,  275 => 111,  264 => 105,  258 => 103,  254 => 101,  252 => 138,  247 => 97,  240 => 219,  234 => 89,  231 => 88,  228 => 89,  226 => 86,  221 => 83,  207 => 95,  202 => 73,  193 => 68,  190 => 89,  174 => 67,  169 => 56,  107 => 27,  209 => 77,  188 => 69,  182 => 69,  176 => 61,  148 => 74,  117 => 44,  113 => 40,  140 => 49,  97 => 23,  86 => 28,  23 => 3,  99 => 34,  90 => 27,  49 => 15,  40 => 8,  173 => 85,  170 => 60,  128 => 45,  124 => 23,  87 => 26,  62 => 14,  77 => 18,  53 => 38,  301 => 125,  295 => 133,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 248,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 79,  245 => 101,  230 => 75,  222 => 73,  220 => 72,  215 => 79,  211 => 81,  204 => 94,  198 => 74,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 22,  38 => 5,  144 => 73,  141 => 51,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 16,  61 => 18,  47 => 9,  28 => 3,  105 => 41,  93 => 28,  76 => 34,  72 => 18,  68 => 30,  91 => 28,  84 => 25,  44 => 11,  24 => 2,  27 => 5,  25 => 29,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 83,  196 => 92,  194 => 62,  191 => 70,  189 => 77,  186 => 76,  180 => 72,  172 => 64,  159 => 61,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 29,  114 => 42,  104 => 31,  100 => 36,  78 => 26,  75 => 24,  71 => 23,  58 => 14,  34 => 8,  19 => 1,  94 => 33,  88 => 20,  79 => 23,  59 => 13,  31 => 6,  26 => 3,  21 => 1,  70 => 13,  63 => 6,  46 => 10,  22 => 2,  163 => 81,  155 => 58,  152 => 35,  149 => 51,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 36,  101 => 33,  96 => 35,  83 => 27,  80 => 32,  74 => 21,  66 => 19,  55 => 13,  52 => 13,  50 => 15,  43 => 12,  41 => 7,  37 => 7,  35 => 7,  32 => 6,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 60,  162 => 53,  157 => 56,  153 => 62,  151 => 53,  143 => 43,  138 => 55,  136 => 27,  133 => 31,  130 => 53,  122 => 51,  119 => 57,  116 => 41,  111 => 11,  108 => 33,  102 => 30,  98 => 29,  95 => 34,  92 => 21,  89 => 30,  85 => 29,  81 => 24,  73 => 23,  64 => 11,  60 => 20,  57 => 14,  54 => 17,  51 => 16,  48 => 11,  45 => 8,  42 => 12,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
