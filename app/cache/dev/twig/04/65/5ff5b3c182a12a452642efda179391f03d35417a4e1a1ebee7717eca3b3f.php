<?php

/* SiteGKTGSBBundle:GSB:modifierComposition.html.twig */
class __TwigTemplate_04655ff5b3c182a12a452642efda179391f03d35417a4e1a1ebee7717eca3b3f extends Twig_Template
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
        echo "\tModifier une composition - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t";
    }

    // line 6
    public function block_TCHblog_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<h2>Modifier une composition</h2>
\t";
        // line 8
        $this->env->loadTemplate("SiteGKTGSBBundle:GSB:formulaireComposition.html.twig")->display($context);
        // line 9
        echo "\t<p>
\t\t<a href =\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteTCHblog_voir", array("id" => $this->getAttribute((isset($context["Composition"]) ? $context["Composition"] : $this->getContext($context, "Composition")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
\t\t\t<i class =\"icon-chevron-left\"></i>
\t\t\tRetour à l'article
\t\t</a>
\t</p>
\t";
    }

    public function getTemplateName()
    {
        return "SiteGKTGSBBundle:GSB:modifierComposition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  47 => 9,  45 => 8,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
