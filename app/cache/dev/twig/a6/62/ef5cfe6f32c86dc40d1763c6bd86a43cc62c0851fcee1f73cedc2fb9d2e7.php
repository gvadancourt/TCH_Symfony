<?php

/* SiteTCHBlogAbonneBundle:Blog:abonne.html.twig */
class __TwigTemplate_a662ef5cfe6f32c86dc40d1763c6bd86a43cc62c0851fcee1f73cedc2fb9d2e7 extends Twig_Template
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
        echo "\t\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t";
    }

    // line 5
    public function block_TCHblog_body($context, array $blocks = array())
    {
        // line 6
        echo "\t\t<h2>Liste des abonnés</h2>
\t\t<ul>
\t\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_abonnes"]) ? $context["liste_abonnes"] : $this->getContext($context, "liste_abonnes")));
        foreach ($context['_seq'] as $context["_key"] => $context["abonne"]) {
            // line 9
            echo "\t\t\t<li>
\t\t\t<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteTCHblogAbonne_abonnedetails", array("id" => $this->getAttribute((isset($context["abonne"]) ? $context["abonne"] : $this->getContext($context, "abonne")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonne"]) ? $context["abonne"] : $this->getContext($context, "abonne")), "prenom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonne"]) ? $context["abonne"] : $this->getContext($context, "abonne")), "nom"), "html", null, true);
            echo "</a> - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["abonne"]) ? $context["abonne"] : $this->getContext($context, "abonne")), "email"), "html", null, true);
            echo "
\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['abonne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t</ul>
\t";
    }

    public function getTemplateName()
    {
        return "SiteTCHBlogAbonneBundle:Blog:abonne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  53 => 10,  50 => 9,  46 => 8,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
