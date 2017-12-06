<?php

/* SiteTCHBlogBundle:Blog:menu.html.twig */
class __TwigTemplate_5a6a494c14323fbe6f79e50dd5b0e15b069334d30dc6575308d7c5d6947be7b6 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>\t
\t<title>BLOG</title>
\t</head>
\t<body>
\t\t<h3>Les derniers articles </h3>
\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 10
            echo "\t\t<li>
\t\t\t<a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteTCHblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "
\t\t\t</a>
\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t</ul>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "SiteTCHBlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  36 => 11,  19 => 1,  111 => 38,  108 => 37,  102 => 9,  99 => 8,  96 => 7,  90 => 6,  77 => 39,  75 => 37,  68 => 33,  62 => 30,  58 => 29,  53 => 28,  35 => 11,  29 => 9,  22 => 1,  47 => 10,  42 => 8,  39 => 7,  33 => 10,  31 => 4,  28 => 2,);
    }
}
