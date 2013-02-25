<?php

/* BloggerBlogBundle:Page:sidebar.html.twig */
class __TwigTemplate_cc37b6f95df3dcdd23902e99c1bf391d extends Twig_Template
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
<section class=\"section\">
    <header>
        <h3>Tag Cloud</h3>
    </header>
    <p class=\"tags\">
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["tag"] => $context["weight"]) {
            // line 9
            echo "            <span class=\"weight-";
            echo twig_escape_filter($this->env, (isset($context["weight"]) ? $context["weight"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : null), "html", null, true);
            echo "</span>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "            <p>There are no tags</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['weight'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "    </p>
</section>

<section class=\"section\">
    <header>
        <h3>Latest Comments</h3>
    </header>
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestComments"]) ? $context["latestComments"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 21
            echo "        <article class=\"comment\">
            <header>
                <p class=\"small\"><span class=\"highlight\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "username"), "html", null, true);
            echo "</span> commented on
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "blog"), "id"), "slug" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "blog"), "slug"))), "html", null, true);
            echo "#comment-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "id"), "html", null, true);
            echo "\">
                        ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "blog"), "title"), "html", null, true);
            echo "
                    </a>
                    [<em><time datetime=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "created"), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('blogger_blog_extension')->createdAgo($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "created")), "html", null, true);
            echo "</time></em>]
                </p>
            </header>
            <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "comment"), "html", null, true);
            echo "</p>
            </p>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            echo "        <p>There are no recent comments</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 36
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  99 => 34,  90 => 30,  67 => 23,  63 => 21,  58 => 20,  49 => 13,  27 => 8,  19 => 2,  178 => 53,  173 => 48,  170 => 47,  165 => 43,  160 => 40,  152 => 35,  144 => 34,  136 => 27,  132 => 26,  128 => 25,  124 => 23,  121 => 22,  115 => 13,  111 => 11,  108 => 10,  102 => 6,  96 => 54,  94 => 53,  89 => 50,  87 => 47,  82 => 27,  80 => 43,  76 => 41,  74 => 40,  66 => 35,  62 => 34,  57 => 31,  44 => 15,  42 => 11,  35 => 6,  50 => 11,  41 => 7,  32 => 9,  29 => 4,  92 => 25,  83 => 21,  77 => 25,  71 => 24,  64 => 15,  60 => 14,  55 => 22,  47 => 10,  40 => 7,  37 => 6,  31 => 5,  28 => 1,);
    }
}
