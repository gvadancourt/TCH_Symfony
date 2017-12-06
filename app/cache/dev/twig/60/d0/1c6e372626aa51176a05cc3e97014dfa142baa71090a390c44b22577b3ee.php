<?php

/* SiteGKTGSBBundle:GSB:ListeFamille.html.twig */
class __TwigTemplate_60d01c6e372626aa51176a05cc3e97014dfa142baa71090a390c44b22577b3ee extends Twig_Template
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
        echo "\t\t<h2>Liste des familles</h2>
\t\t<ul>\t\t
\t\t";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["Familles"]) ? $context["Familles"] : $this->getContext($context, "Familles"))) > 0)) {
            // line 9
            echo "\t\t<table border=\"2\" width=\"100%\">
\t\t<tr><th>Libellé</th><th>Actions</th></tr>
\t\t";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Familles"]) ? $context["Familles"] : $this->getContext($context, "Familles")));
            foreach ($context['_seq'] as $context["_key"] => $context["uneFamille"]) {
                // line 12
                echo "\t\t\t
\t\t\t\t<tr><td>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uneFamille"]) ? $context["uneFamille"] : $this->getContext($context, "uneFamille")), "getFAMLibelle", array(), "method"), "html", null, true);
                echo "</td>
\t\t\t\t<td>
\t\t\t\t\t<a href =\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteGKTGSB_ModifierFamille", array("id" => $this->getAttribute((isset($context["uneFamille"]) ? $context["uneFamille"] : $this->getContext($context, "uneFamille")), "id"))), "html", null, true);
                echo "\" class=\"btn\">
\t\t\t\t\t<i class =\"icon-edit\"></i>
\t\t\t\t\tModifier
\t\t\t\t\t</a>
\t\t\t\t\t<a href =\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteGKTGSB_SupprimerFamille", array("id" => $this->getAttribute((isset($context["uneFamille"]) ? $context["uneFamille"] : $this->getContext($context, "uneFamille")), "id"))), "html", null, true);
                echo "\" class=\"btn\">
\t\t\t\t\t<i class =\"icon-edit\"></i>
\t\t\t\t\tSupprimer
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneFamille'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t\t</table>
\t\t";
        }
        // line 28
        echo "\t\t</ul>
\t";
    }

    public function getTemplateName()
    {
        return "SiteGKTGSBBundle:GSB:ListeFamille.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  84 => 26,  71 => 19,  64 => 15,  59 => 13,  56 => 12,  52 => 11,  48 => 9,  46 => 8,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
