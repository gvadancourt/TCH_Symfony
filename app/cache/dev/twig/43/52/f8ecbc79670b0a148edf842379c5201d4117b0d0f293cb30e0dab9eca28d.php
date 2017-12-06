<?php

/* SiteTCHBlogBundle:Blog:voir.html.twig */
class __TwigTemplate_4352f8ecbc79670b0a148edf842379c5201d4117b0d0f293cb30e0dab9eca28d extends Twig_Template
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
        echo "\tDétail d'un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
\t";
    }

    // line 6
    public function block_TCHblog_body($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        // line 8
        echo "\t";
        if ((!(null === $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image")))) {
            // line 9
            echo "\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "getCheminImage", array(), "method")), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "alt"), "html", null, true);
            echo "\" />
\t";
        }
        // line 11
        echo "\t<h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
        echo "</h2>
\t<i>Par  ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur"), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y"), "html", null, true);
        echo "</i>
\t<p>
\t";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories"), "count"), "html", null, true);
        echo " Catégories :
\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie_actuelle"]) {
            // line 16
            echo "\t\t<li>
\t\t\t- ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorie_actuelle"]) ? $context["categorie_actuelle"] : $this->getContext($context, "categorie_actuelle")), "nom"), "html", null, true);
            echo "
\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie_actuelle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t</p>
\t<p>
\t";
        // line 22
        if ((twig_length_filter($this->env, (isset($context["Listes_competences"]) ? $context["Listes_competences"] : $this->getContext($context, "Listes_competences"))) > 0)) {
            // line 23
            echo "\t\tCompétences utilisées dans cet article:
\t\t";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["Listes_competences"]) ? $context["Listes_competences"] : $this->getContext($context, "Listes_competences")));
            foreach ($context['_seq'] as $context["_key"] => $context["competence_actuelle"]) {
                // line 25
                echo "\t\t\t<li>
\t\t\t\t- ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["competence_actuelle"]) ? $context["competence_actuelle"] : $this->getContext($context, "competence_actuelle")), "competence"), "nom"), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["competence_actuelle"]) ? $context["competence_actuelle"] : $this->getContext($context, "competence_actuelle")), "niveau"), "html", null, true);
                echo "
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence_actuelle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t";
        }
        // line 30
        echo "\t</p>
\t<div class=\"well\">
\t\t";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu"), "html", null, true);
        echo "
\t\t
\t</div>
\t<p>
\t\t<a href =\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("SiteTCHblog_accueil");
        echo "\" class=\"btn\">
\t\t\t<i class =\"icon-chevron-left\"></i>
\t\t\tRetour à la liste
\t\t</a>
\t\t<a href =\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteTCHblog_modifier", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
\t\t\t<i class =\"icon-edit\"></i>
\t\t\tModifier l'article
\t\t</a>
\t\t<a href =\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteTCHblog_supprimer", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
\t\t\t<i class =\"icon-trash\"></i>
\t\t\tSupprimer l'article
\t\t</a>
\t</p>
\t";
        // line 49
        if ((twig_length_filter($this->env, (isset($context["liste_commentaires"]) ? $context["liste_commentaires"] : $this->getContext($context, "liste_commentaires"))) > 0)) {
            // line 50
            echo "\t\t<h2>Liste des commentaires</h2>
\t\t<p>
\t\t";
            // line 52
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liste_commentaires"]) ? $context["liste_commentaires"] : $this->getContext($context, "liste_commentaires")));
            foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                // line 53
                echo "\t\t\t<li>
\t\t\t\tLe ";
                // line 54
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "date"), "d/m/Y"), "html", null, true);
                echo " Par ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "auteur"), "html", null, true);
                echo "
\t\t\t\t";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commentaire"]) ? $context["commentaire"] : $this->getContext($context, "commentaire")), "contenu"), "html", null, true);
                echo "
\t\t\t</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t</p>
\t";
        }
        // line 60
        echo "\t";
    }

    public function getTemplateName()
    {
        return "SiteTCHBlogBundle:Blog:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 60,  178 => 58,  169 => 55,  163 => 54,  160 => 53,  156 => 52,  152 => 50,  150 => 49,  142 => 44,  135 => 40,  128 => 36,  121 => 32,  117 => 30,  114 => 29,  103 => 26,  100 => 25,  96 => 24,  93 => 23,  91 => 22,  87 => 20,  78 => 17,  75 => 16,  71 => 15,  67 => 14,  60 => 12,  55 => 11,  47 => 9,  44 => 8,  42 => 7,  39 => 6,  32 => 3,  29 => 2,);
    }
}
