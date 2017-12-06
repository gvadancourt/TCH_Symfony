<?php

/* SiteGKTGSBBundle:GSB:formulaireComposition.html.twig */
class __TwigTemplate_b53e64bd9cbbc4d6a17db78a1fb19f3025fbc7b72a11c2aa539ea0a5f208ad6b extends Twig_Template
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
<h3>Formulaire de composition</h3>
<div class=\"well\">
\t<form method=\"post\" ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t";
        // line 7
        echo "\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t\t
\t\t<div>
\t\t\t";
        // line 11
        echo "\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "COM_Libelle"), 'label', array("label" => "Titre de la composition"));
        echo "
\t\t\t";
        // line 13
        echo "\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "COM_Libelle"), 'errors');
        echo "
\t\t\t";
        // line 15
        echo "\t\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "COM_Libelle"), 'widget');
        echo "
\t\t</div>
\t\t
\t\t
\t\t
\t\t";
        // line 21
        echo "\t\t";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t
\t\t<input type=\"submit\" class=\"btn btn-primary\" />
\t</form>
</div>";
    }

    public function getTemplateName()
    {
        return "SiteGKTGSBBundle:GSB:formulaireComposition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 21,  40 => 13,  35 => 11,  28 => 7,  24 => 5,  19 => 2,  47 => 9,  45 => 15,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
