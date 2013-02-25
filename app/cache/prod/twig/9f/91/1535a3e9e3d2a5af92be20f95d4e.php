<?php

/* BloggerBlogBundle:Page:contact.html.twig */
class __TwigTemplate_9f911535a3e9e3d2a5af92be20f95d4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BloggerBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Contact";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <header>
        <h1>Contact symblog</h1>
    </header>

    ";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "hasFlash", array(0 => "blogger-notice"), "method")) {
            // line 12
            echo "        <div class=\"blogger-notice\">
            ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flash", array(0 => "blogger-notice"), "method"), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 16
        echo "
    <p>Want to contact symblog?</p>
    
    <form action=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " class=\"blogger\">
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name"), 'row');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email"), 'row');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject"), 'row');
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body"), 'row');
        echo "

        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

        <input type=\"submit\" value=\"Submit\" />
    </form>    
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  66 => 20,  60 => 19,  55 => 16,  49 => 13,  46 => 12,  44 => 11,  38 => 7,  35 => 6,  29 => 4,);
    }
}
