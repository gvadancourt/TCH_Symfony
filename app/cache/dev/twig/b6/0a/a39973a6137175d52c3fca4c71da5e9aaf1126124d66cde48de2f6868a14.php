<?php

/* ::layoutGSB.html.twig */
class __TwigTemplate_b60aa39973a6137175d52c3fca4c71da5e9aaf1126124d66cde48de2f6868a14 extends Twig_Template
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
\t\t\t\t\t\t<img src=\"http://localhost/TCH_Symfony/web/img/Logo_Gsb.png\" alt=\"logo_Gsb\" />
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
        echo $this->env->getExtension('routing')->getPath("SiteGKTGSB_accueil");
        echo "\">Accueil du site</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("SiteGKTGSB_listemedicament");
        echo "\">Liste des médicaments</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("SiteGKTGSB_listefamille");
        echo "\">Liste des familles</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("SiteGKTGSB_listecomposition");
        echo "\">Liste des compositions</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("SiteGKTGSB_AjouterComposition");
        echo "\">Ajouter une composition</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("SiteGKTGSB_AjouterFamille");
        echo "\">Ajouter une famille</a></li>
\t\t\t\t\t</ul>fezffezzezefefef
\t\t\t\t</div>
\t\t\t\t<div id=\"content\" class=\"span9\">
\t\t\t\t\t<!-- Création du bloc \"body\" sans contenu par défaut -->
\t\t\t\t\t";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 40
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<hr>
\t\t\t<footer>
\t\t\t\t<p>BTS SIO - Option SLAM</p>
\t\t\t</footer>
\t\t</div>http://localhost/TCH_Symfony/web/uploads/img/17.png
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

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "::layoutGSB.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  115 => 38,  109 => 9,  106 => 8,  103 => 7,  97 => 6,  84 => 40,  82 => 38,  74 => 33,  70 => 32,  66 => 31,  62 => 30,  58 => 29,  53 => 28,  35 => 11,  33 => 7,  29 => 6,  22 => 1,);
    }
}
