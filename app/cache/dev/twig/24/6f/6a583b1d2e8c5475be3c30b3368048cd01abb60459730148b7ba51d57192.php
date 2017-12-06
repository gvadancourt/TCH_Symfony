<?php

/* SiteGKTGSBBundle:GSB:ajouterComposition.html.twig */
class __TwigTemplate_246f6a583b1d2e8c5475be3c30b3368048cd01abb60459730148b7ba51d57192 extends Twig_Template
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
        echo "\tAjouter une composition - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t";
    }

    // line 6
    public function block_TCHblog_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<h2>Ajouter une composition</h2>
\t\t";
        // line 8
        $this->env->loadTemplate("SiteGKTGSBBundle:GSB:formulaireComposition.html.twig")->display($context);
        // line 9
        echo "\t";
    }

    public function getTemplateName()
    {
        return "SiteGKTGSBBundle:GSB:ajouterComposition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  45 => 8,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
