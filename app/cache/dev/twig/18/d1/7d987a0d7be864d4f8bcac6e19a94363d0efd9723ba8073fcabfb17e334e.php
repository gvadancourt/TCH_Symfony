<?php

/* ::layout.html.twig */
class __TwigTemplate_18d17d987a0d7be864d4f8bcac6e19a94363d0efd9723ba8073fcabfb17e334e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
\t\t<!-- création du bloc \"title\" avec \"TCH : Mon site\" comme contenu par défaut -->
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <div class=\"container\">
\t\t\t<div id=\"header\" class=\"hero-unit\">
\t\t\t\t<h1>
\t\t\t\t\t<center>
\t\t\t\t\t\tBLOG
\t\t\t\t\t</center>
\t\t\t\t</h1>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div id=\"menu\" class=\"span3\">
\t\t\t\t\t<h3>
\t\t\t\t\t\tMenu
\t\t\t\t\t</h3>
\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t\t\t\t";
        // line 28
        echo "\t\t\t\t\t\t<li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("SiteTCHblog_accueil");
        echo "\">Accueil du blog</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("SiteTCHblogAbonne_abonne");
        echo "\">Abonnés</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("SiteTCHblog_ajouter");
        echo "\">ajouter un article</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<!-- Inclusion de la méthode menu du contrôleur Blog du bundle TCHSiteBlogBundle avec l'argument nombre défini à 3 -->
\t\t\t\t\t";
        // line 33
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SiteTCHBlogBundle:Blog:menu", array("nombre" => 3)));
        echo "
\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"span9\">
\t\t\t\t\t<!-- Création du bloc \"body\" sans contenu par défaut -->
\t\t\t\t\t";
        // line 37
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr>
\t\t\t<footer>
\t\t\t\t<p>BTS SIO - Option SLAM</p>
\t\t\t</footer>
\t\t</div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "TCH : Mon site";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "\t\t<!-- appel du CSS situé dans web/css/bootstrap.css -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
\t\t";
    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        // line 38
        echo "\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 38,  108 => 37,  102 => 9,  99 => 8,  96 => 7,  90 => 6,  77 => 39,  75 => 37,  68 => 33,  62 => 30,  58 => 29,  53 => 28,  35 => 11,  29 => 6,  22 => 1,  47 => 10,  42 => 8,  39 => 7,  33 => 7,  31 => 4,  28 => 2,);
    }
}
