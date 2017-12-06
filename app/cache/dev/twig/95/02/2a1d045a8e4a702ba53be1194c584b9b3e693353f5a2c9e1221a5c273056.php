<?php

/* SiteTCHBlogBundle::layout.html.twig */
class __TwigTemplate_95022a1d045a8e4a702ba53be1194c584b9b3e693353f5a2c9e1221a5c273056 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'TCHblog_body' => array($this, 'block_TCHblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "\t\tBlog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t";
        // line 7
        echo "\t\t<h1>Mon blog TCH</h1>
\t\tBonjour ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
        echo " - (
\t\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "roles"));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 10
            echo "\t\t";
            echo twig_escape_filter($this->env, (isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")), "html", null, true);
            echo "
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t\t)
\t\t<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Déconnexion</a> 
\t\t<hr>
\t\t";
        // line 16
        echo "\t\t
\t\t";
        // line 17
        $this->displayBlock('TCHblog_body', $context, $blocks);
        // line 19
        echo "\t";
    }

    // line 17
    public function block_TCHblog_body($context, array $blocks = array())
    {
        // line 18
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "SiteTCHBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 18,  82 => 17,  78 => 19,  76 => 17,  73 => 16,  68 => 13,  65 => 12,  52 => 9,  48 => 8,  45 => 7,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  64 => 18,  56 => 10,  51 => 12,  46 => 9,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
