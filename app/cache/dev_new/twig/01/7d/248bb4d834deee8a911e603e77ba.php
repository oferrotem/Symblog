<?php

/* WebProfilerBundle:Profiler:table.html.twig */
class __TwigTemplate_017d248bb4d834deee8a911e603e77ba extends Twig_Template
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
        // line 1
        echo "<table ";
        if (array_key_exists("class", $context)) {
            echo "class='";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
            echo "'";
        }
        echo " >
    <thead>
        <tr>
            <th scope=\"col\">Key</th>
            <th scope=\"col\">Value</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_array_keys_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 10
            echo "            <tr>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "</th>
                <td>";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('yaml')->dump($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), array(), "array")), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  790 => 469,  787 => 468,  776 => 466,  772 => 465,  768 => 463,  755 => 462,  729 => 457,  726 => 456,  707 => 454,  690 => 453,  686 => 451,  682 => 450,  678 => 449,  674 => 448,  670 => 447,  666 => 446,  663 => 445,  661 => 444,  644 => 443,  633 => 442,  618 => 437,  613 => 435,  609 => 434,  606 => 433,  604 => 432,  590 => 431,  558 => 401,  540 => 398,  523 => 397,  520 => 396,  518 => 395,  513 => 393,  508 => 391,  181 => 87,  166 => 82,  161 => 80,  156 => 77,  150 => 75,  167 => 64,  164 => 63,  134 => 54,  356 => 163,  347 => 160,  343 => 159,  340 => 158,  335 => 157,  323 => 149,  316 => 145,  309 => 141,  302 => 137,  288 => 129,  281 => 125,  274 => 121,  259 => 109,  238 => 97,  217 => 83,  214 => 82,  206 => 78,  203 => 77,  192 => 72,  158 => 56,  125 => 44,  110 => 42,  69 => 20,  56 => 39,  388 => 160,  385 => 159,  379 => 158,  377 => 157,  370 => 156,  366 => 155,  362 => 153,  360 => 152,  357 => 151,  354 => 150,  352 => 149,  344 => 147,  342 => 146,  339 => 145,  333 => 156,  330 => 140,  327 => 139,  325 => 150,  320 => 135,  314 => 131,  311 => 130,  308 => 129,  306 => 128,  280 => 114,  275 => 111,  264 => 105,  258 => 103,  254 => 101,  252 => 138,  247 => 97,  240 => 93,  234 => 89,  231 => 88,  228 => 89,  226 => 86,  221 => 83,  207 => 95,  202 => 73,  193 => 68,  190 => 89,  174 => 67,  169 => 56,  107 => 27,  209 => 77,  188 => 69,  182 => 69,  176 => 61,  148 => 74,  90 => 41,  117 => 44,  113 => 40,  140 => 49,  97 => 23,  86 => 28,  77 => 18,  23 => 1,  40 => 11,  49 => 13,  173 => 85,  170 => 60,  128 => 45,  124 => 23,  87 => 33,  62 => 21,  53 => 38,  301 => 125,  295 => 133,  292 => 120,  289 => 119,  287 => 118,  282 => 115,  276 => 86,  273 => 110,  270 => 84,  268 => 107,  263 => 80,  249 => 79,  245 => 101,  230 => 75,  222 => 73,  220 => 72,  215 => 79,  211 => 81,  204 => 94,  198 => 74,  185 => 68,  183 => 63,  177 => 59,  160 => 59,  112 => 52,  82 => 19,  65 => 22,  38 => 18,  144 => 73,  141 => 51,  135 => 47,  126 => 61,  109 => 51,  103 => 25,  67 => 12,  61 => 12,  47 => 15,  28 => 6,  105 => 41,  93 => 42,  76 => 34,  72 => 22,  68 => 30,  91 => 28,  84 => 23,  44 => 11,  24 => 2,  27 => 3,  25 => 29,  225 => 88,  216 => 90,  212 => 78,  205 => 71,  201 => 83,  196 => 92,  194 => 62,  191 => 70,  189 => 77,  186 => 76,  180 => 72,  172 => 64,  159 => 61,  154 => 54,  147 => 58,  132 => 47,  127 => 52,  121 => 45,  118 => 29,  114 => 42,  104 => 37,  100 => 36,  78 => 24,  75 => 23,  71 => 21,  58 => 25,  34 => 5,  19 => 1,  94 => 33,  88 => 20,  79 => 35,  59 => 13,  31 => 4,  26 => 9,  21 => 2,  70 => 13,  63 => 16,  46 => 12,  22 => 2,  163 => 81,  155 => 58,  152 => 35,  149 => 51,  145 => 57,  139 => 71,  131 => 46,  123 => 35,  120 => 50,  115 => 44,  106 => 35,  101 => 33,  96 => 35,  83 => 27,  80 => 32,  74 => 21,  66 => 19,  55 => 15,  52 => 14,  50 => 16,  43 => 7,  41 => 19,  37 => 6,  35 => 9,  32 => 4,  29 => 3,  184 => 88,  178 => 86,  171 => 84,  165 => 60,  162 => 53,  157 => 56,  153 => 62,  151 => 53,  143 => 43,  138 => 55,  136 => 27,  133 => 31,  130 => 53,  122 => 51,  119 => 57,  116 => 41,  111 => 11,  108 => 41,  102 => 34,  98 => 32,  95 => 30,  92 => 21,  89 => 29,  85 => 29,  81 => 24,  73 => 23,  64 => 11,  60 => 20,  57 => 19,  54 => 13,  51 => 37,  48 => 11,  45 => 14,  42 => 11,  39 => 10,  36 => 9,  33 => 4,  30 => 7,);
    }
}