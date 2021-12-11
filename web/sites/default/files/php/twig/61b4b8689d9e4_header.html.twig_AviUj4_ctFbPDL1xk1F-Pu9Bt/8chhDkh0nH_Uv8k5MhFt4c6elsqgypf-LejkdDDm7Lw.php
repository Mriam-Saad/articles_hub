<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/aricleshubtheme/templates/partials/header.html.twig */
class __TwigTemplate_41508d4b671432d9d4475bfe319b12b8e0e4c5d5e73384d4c3d871de356edcbb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<body>
<div class=\"app-wrapper detailed-wrapper\">
  <header class=\"main-header align-items-center d-flex justify-content-center\">
    <h1 class=\"main-header--title\">MSA MSA</h1>
  </header>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/aricleshubtheme/templates/partials/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<body>
<div class=\"app-wrapper detailed-wrapper\">
  <header class=\"main-header align-items-center d-flex justify-content-center\">
    <h1 class=\"main-header--title\">MSA MSA</h1>
  </header>
", "themes/custom/aricleshubtheme/templates/partials/header.html.twig", "/var/www/html/articles_hub/web/themes/custom/aricleshubtheme/templates/partials/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
