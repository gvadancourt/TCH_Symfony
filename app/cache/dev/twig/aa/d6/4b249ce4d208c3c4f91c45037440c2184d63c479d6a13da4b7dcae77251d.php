<?php

/* SiteGKTGSBBundle:GSB:ajouter.html.twig */
class __TwigTemplate_aad64b249ce4d208c3c4f91c45037440c2184d63c479d6a13da4b7dcae77251d extends Twig_Template
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
\t\t<p>
\t<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("SiteGKTGSB_accueil");
        echo "\" class=\"btn\">
\t\t<i class=\"icon-chevron-left\"></i>
\t\tRetour à l'accueil
\t</a>
\t</p>
\t";
    }

    public function getTemplateName()
    {
        return "SiteGKTGSBBundle:GSB:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
