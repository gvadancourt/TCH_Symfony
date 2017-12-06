<?php

/* SiteTCHBlogBundle:Blog:index.html.twig */
class __TwigTemplate_a56db43dea743d12886a9b1a2a899ae57262b385f718a24358249817f187b00f extends Twig_Template
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
        echo "\t\t<h2>Liste des articles</h2>
\t\t<ul>
\t\t";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))) > 0)) {
            // line 9
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 10
                echo "\t\t\t<li>
\t\t\t\t<a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteTCHblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
                echo "</a> par ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "auteur"), "html", null, true);
                echo ",le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "date"), "d/m/Y"), "html", null, true);
                echo "
\t\t\t</li>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "\t\t";
        }
        // line 15
        echo "\t\t";
        if ((twig_length_filter($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))) == 0)) {
            // line 16
            echo "\t\t<p>Aucun article dans cette catégorie</p>
\t\t";
        }
        // line 18
        echo "\t\t</ul>
\t";
    }

    public function getTemplateName()
    {
        return "SiteTCHBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  77 => 16,  74 => 15,  71 => 14,  56 => 11,  53 => 10,  48 => 9,  46 => 8,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
