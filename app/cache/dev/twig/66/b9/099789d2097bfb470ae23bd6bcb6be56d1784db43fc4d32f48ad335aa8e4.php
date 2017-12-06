<?php

/* SiteGKTGSBBundle:GSB:index.html.twig */
class __TwigTemplate_66b9099789d2097bfb470ae23bd6bcb6be56d1784db43fc4d32f48ad335aa8e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SiteGKTGSBBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'TCHblog_body' => array($this, 'block_TCHblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SiteGKTGSBBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "\t\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t";
    }

    // line 5
    public function block_TCHblog_body($context, array $blocks = array())
    {
        // line 6
        echo "\t\t<h2>Accueil</h2>
\t\t<ul>
\t\t\tBonjour.
\t\t\tVous voici sur le site GSB
\t\t</ul>
\t";
    }

    public function getTemplateName()
    {
        return "SiteGKTGSBBundle:GSB:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
