<?php

/* SiteGKTGSBBundle:GSB:ListeMedicament.html.twig */
class __TwigTemplate_e95ba2901dca429862109a87ebb5f0d7b6ae8d8b05fe5b0a121c23bb3bb5bc18 extends Twig_Template
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
        echo "\t\t<h2>Liste des médicaments</h2>
\t\t<ul>
\t\t";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["Medicaments"]) ? $context["Medicaments"] : $this->getContext($context, "Medicaments"))) > 0)) {
            // line 9
            echo "\t\t<table border=\"2\" width=\"100%\">
\t\t<tr><th>Nom commercial</th><th>Effets</th><th>Prix d'un échantillon</th><th>Dépot légal</th><th>Contre-indications</th><th>Actions</th></tr>
\t\t";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Medicaments"]) ? $context["Medicaments"] : $this->getContext($context, "Medicaments")));
            foreach ($context['_seq'] as $context["_key"] => $context["unMedicament"]) {
                // line 12
                echo "\t\t\t
\t\t\t\t<tr><td text-align:center>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unMedicament"]) ? $context["unMedicament"] : $this->getContext($context, "unMedicament")), "MED_Nomcommercial"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unMedicament"]) ? $context["unMedicament"] : $this->getContext($context, "unMedicament")), "MED_Effets"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unMedicament"]) ? $context["unMedicament"] : $this->getContext($context, "unMedicament")), "MED_PrixEchantillon"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unMedicament"]) ? $context["unMedicament"] : $this->getContext($context, "unMedicament")), "MED_DepotLegal"), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["unMedicament"]) ? $context["unMedicament"] : $this->getContext($context, "unMedicament")), "MED_ContreIndic"), "html", null, true);
                echo "</td>
\t\t\t\t<td>
\t\t\t\t\t<a href =\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteTCHblog_modifier", array("id" => $this->getAttribute((isset($context["unMedicament"]) ? $context["unMedicament"] : $this->getContext($context, "unMedicament")), "id"))), "html", null, true);
                echo "\" class=\"btn\">
\t\t\t\t\t<i class =\"icon-edit\"></i>
\t\t\t\t\tModifier
\t\t\t\t\t</a>
\t\t\t\t\t<a href =\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteGKTGSB_SupprimerMedicament", array("id" => $this->getAttribute((isset($context["unMedicament"]) ? $context["unMedicament"] : $this->getContext($context, "unMedicament")), "id"))), "html", null, true);
                echo "\" class=\"btn\">
\t\t\t\t\t<i class =\"icon-edit\"></i>
\t\t\t\t\tSupprimer
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unMedicament'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "\t\t</table>
\t\t";
        }
        // line 32
        echo "\t
\t\t</ul>
\t";
    }

    public function getTemplateName()
    {
        return "SiteGKTGSBBundle:GSB:ListeMedicament.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 32,  100 => 30,  87 => 23,  80 => 19,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  59 => 13,  56 => 12,  52 => 11,  48 => 9,  46 => 8,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
