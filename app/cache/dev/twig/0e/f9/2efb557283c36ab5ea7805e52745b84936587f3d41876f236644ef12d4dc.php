<?php

/* SiteGKTGSBBundle:GSB:SupprimerComposition.html.twig */
class __TwigTemplate_0ef92efb557283c36ab5ea7805e52745b84936587f3d41876f236644ef12d4dc extends Twig_Template
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
        echo "Supprimer un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_TCHblog_body($context, array $blocks = array())
    {
        // line 7
        echo "<h2>Supprimer une composition </h2>
<p>
\tEtes-vous certain de vouloir supprimer la composition \"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Composition"]) ? $context["Composition"] : $this->getContext($context, "Composition")), "getCOMLibelle", array(), "method"), "html", null, true);
        echo "\" ?
</p>
";
        // line 12
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteGKTGSB_SupprimerComposition", array("id" => $this->getAttribute((isset($context["Composition"]) ? $context["Composition"] : $this->getContext($context, "Composition")), "id"))), "html", null, true);
        echo "\" method=\"post\">
<a href =\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteTCHblog_voir", array("id" => $this->getAttribute((isset($context["Composition"]) ? $context["Composition"] : $this->getContext($context, "Composition")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
<i class=\"icon-chevron-left\"></i>
Retour à l'article
</a>
<input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "SiteGKTGSBBundle:GSB:SupprimerComposition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  56 => 13,  51 => 12,  46 => 9,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
