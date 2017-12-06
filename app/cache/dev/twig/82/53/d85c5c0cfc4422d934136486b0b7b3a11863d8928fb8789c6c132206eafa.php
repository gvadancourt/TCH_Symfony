<?php

/* SiteTCHBlogBundle:Blog:ajouter.html.twig */
class __TwigTemplate_8253d85c5c0cfc4422d934136486b0b7b3a11863d8928fb8789c6c132206eafa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SiteTCHBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'TCHblog_body' => array($this, 'block_TCHblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteTCHBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "\tAjouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t";
    }

    // line 6
    public function block_TCHblog_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<h2>Ajouter un article</h2>
\t";
        // line 8
        if ($this->env->getExtension('security')->isGranted("ROLE_GESTIONNAIRE")) {
            // line 9
            echo "\t\t";
            $this->env->loadTemplate("SiteTCHBlogBundle:Blog:formulaire.html.twig")->display($context);
            // line 10
            echo "\t";
        }
        // line 11
        echo "\t";
    }

    public function getTemplateName()
    {
        return "SiteTCHBlogBundle:Blog:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  50 => 10,  47 => 9,  45 => 8,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
