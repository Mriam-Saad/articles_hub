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

/* themes/custom/aricleshubtheme/templates/partials/footer.html.twig */
class __TwigTemplate_52266725466b9f114b2bd8a80203e46971bf86a508228eca8989148c4a8b34f5 extends \Twig\Template
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
        echo "<footer>
  <section class=\"news-letter py-5\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-5\">
          <div class=\"txt\">
            <h3>News Letter</h3>
            <p>Some quick example text to build on the card title</p>
          </div>
        </div>
        <div class=\"col-lg-7\">
          <div class=\"d-flex justify-content-end\">
            <form class=\"form-inline my-2 justify-content-end py-2 w-100\">
              <input class=\"form-control\" type=\"email\" placeholder=\"email\" aria-label=\"email\">
              <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\">subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=\"footer-nav py-5\">
    <div class=\"container text-center\">
      <ul class=\"list-inline mb-0\">
        <li class=\"list-inline-item\">
          <a href=\"#\" class=\"nav-link\"> Home </a>
        </li>
        <li class=\"list-inline-item\">
          <a href=\"#\" class=\"nav-link\"> about us </a>
        </li>
        <li class=\"list-inline-item\">
          <a href=\"#\" class=\"nav-link\"> services </a>
        </li>
        <li class=\"list-inline-item\">
          <a href=\"#\" class=\"nav-link\"> contact us </a>
        </li>
        <li class=\"list-inline-item\">
          <a href=\"#\" class=\"nav-link\"> Help </a>
        </li>
      </ul>
    </div>
  </section>
  <section class=\"footer-main py-5\">
    <div class=\"container\">
      <div class=\"d-sm-flex align-items-center\">
        <ul class=\"social-links list-inline\">
          <li class=\"list-inline-item\">
            <a href=\"#\" class=\"nav-link\">
              <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                   viewBox=\"0 0 310 310\" style=\"enable-background:new 0 0 310 310;\" xml:space=\"preserve\">
                                        <g id=\"XMLID_801_\">
                                          <path id=\"XMLID_802_\" d=\"M72.16,99.73H9.927c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5H72.16c2.762,0,5-2.238,5-5V104.73
                                                C77.16,101.969,74.922,99.73,72.16,99.73z\"/>
                                          <path id=\"XMLID_803_\" d=\"M41.066,0.341C18.422,0.341,0,18.743,0,41.362C0,63.991,18.422,82.4,41.066,82.4
                                                c22.626,0,41.033-18.41,41.033-41.038C82.1,18.743,63.692,0.341,41.066,0.341z\"/>
                                          <path id=\"XMLID_804_\" d=\"M230.454,94.761c-24.995,0-43.472,10.745-54.679,22.954V104.73c0-2.761-2.238-5-5-5h-59.599
                                                c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5h62.097c2.762,0,5-2.238,5-5v-98.918c0-33.333,9.054-46.319,32.29-46.319
                                                c25.306,0,27.317,20.818,27.317,48.034v97.204c0,2.762,2.238,5,5,5H305c2.762,0,5-2.238,5-5V194.995
                                                C310,145.43,300.549,94.761,230.454,94.761z\"/>
                                        </g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g>
                </g><g>
                </g>
                <g></g>
                                    </svg>
            </a>
          </li>
          <li class=\"list-inline-item\">
            <a href=\"#\" class=\"nav-link\">
              <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                   viewBox=\"0 0 310 310\" style=\"enable-background:new 0 0 310 310;\" xml:space=\"preserve\">
                                        <g id=\"XMLID_826_\">
                                          <path id=\"XMLID_827_\" d=\"M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73
                                                c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783
                                                c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598
                                                C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467
                                                c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977
                                                c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889
                                                c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597
                                                c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961
                                                c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895
                                                c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367
                                                c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998
                                                C307.394,57.037,305.009,56.486,302.973,57.388z\"/>
                                        </g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                                    </svg>
            </a>
          </li>
        </ul>
        <ul class=\"mb-0 list-inline ml-auto\">
          <li class=\"list-inline-item\">
            <a href=\"#\" class=\"nav-link\"> Home </a>
          </li>
          <li class=\"list-inline-item\">
            <a href=\"#\" class=\"nav-link\"> Home </a>
          </li>
          <li class=\"list-inline-item\">
            <a href=\"#\" class=\"nav-link\"> Home </a>
          </li>
        </ul>
      </div>
    </div>
  </section>
</footer>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/aricleshubtheme/templates/partials/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
  <section class=\"news-letter py-5\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-5\">
          <div class=\"txt\">
            <h3>News Letter</h3>
            <p>Some quick example text to build on the card title</p>
          </div>
        </div>
        <div class=\"col-lg-7\">
          <div class=\"d-flex justify-content-end\">
            <form class=\"form-inline my-2 justify-content-end py-2 w-100\">
              <input class=\"form-control\" type=\"email\" placeholder=\"email\" aria-label=\"email\">
              <button class=\"btn btn-primary my-2 my-sm-0\" type=\"submit\">subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class=\"footer-nav py-5\">
    <div class=\"container text-center\">
      <ul class=\"list-inline mb-0\">
        <li class=\"list-inline-item\">
          <a href=\"#\" class=\"nav-link\"> Home </a>
        </li>
        <li class=\"list-inline-item\">
          <a href=\"#\" class=\"nav-link\"> about us </a>
        </li>
        <li class=\"list-inline-item\">
          <a href=\"#\" class=\"nav-link\"> services </a>
        </li>
        <li class=\"list-inline-item\">
          <a href=\"#\" class=\"nav-link\"> contact us </a>
        </li>
        <li class=\"list-inline-item\">
          <a href=\"#\" class=\"nav-link\"> Help </a>
        </li>
      </ul>
    </div>
  </section>
  <section class=\"footer-main py-5\">
    <div class=\"container\">
      <div class=\"d-sm-flex align-items-center\">
        <ul class=\"social-links list-inline\">
          <li class=\"list-inline-item\">
            <a href=\"#\" class=\"nav-link\">
              <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                   viewBox=\"0 0 310 310\" style=\"enable-background:new 0 0 310 310;\" xml:space=\"preserve\">
                                        <g id=\"XMLID_801_\">
                                          <path id=\"XMLID_802_\" d=\"M72.16,99.73H9.927c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5H72.16c2.762,0,5-2.238,5-5V104.73
                                                C77.16,101.969,74.922,99.73,72.16,99.73z\"/>
                                          <path id=\"XMLID_803_\" d=\"M41.066,0.341C18.422,0.341,0,18.743,0,41.362C0,63.991,18.422,82.4,41.066,82.4
                                                c22.626,0,41.033-18.41,41.033-41.038C82.1,18.743,63.692,0.341,41.066,0.341z\"/>
                                          <path id=\"XMLID_804_\" d=\"M230.454,94.761c-24.995,0-43.472,10.745-54.679,22.954V104.73c0-2.761-2.238-5-5-5h-59.599
                                                c-2.762,0-5,2.239-5,5v199.928c0,2.762,2.238,5,5,5h62.097c2.762,0,5-2.238,5-5v-98.918c0-33.333,9.054-46.319,32.29-46.319
                                                c25.306,0,27.317,20.818,27.317,48.034v97.204c0,2.762,2.238,5,5,5H305c2.762,0,5-2.238,5-5V194.995
                                                C310,145.43,300.549,94.761,230.454,94.761z\"/>
                                        </g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g>
                </g><g>
                </g>
                <g></g>
                                    </svg>
            </a>
          </li>
          <li class=\"list-inline-item\">
            <a href=\"#\" class=\"nav-link\">
              <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                   viewBox=\"0 0 310 310\" style=\"enable-background:new 0 0 310 310;\" xml:space=\"preserve\">
                                        <g id=\"XMLID_826_\">
                                          <path id=\"XMLID_827_\" d=\"M302.973,57.388c-4.87,2.16-9.877,3.983-14.993,5.463c6.057-6.85,10.675-14.91,13.494-23.73
                                                c0.632-1.977-0.023-4.141-1.648-5.434c-1.623-1.294-3.878-1.449-5.665-0.39c-10.865,6.444-22.587,11.075-34.878,13.783
                                                c-12.381-12.098-29.197-18.983-46.581-18.983c-36.695,0-66.549,29.853-66.549,66.547c0,2.89,0.183,5.764,0.545,8.598
                                                C101.163,99.244,58.83,76.863,29.76,41.204c-1.036-1.271-2.632-1.956-4.266-1.825c-1.635,0.128-3.104,1.05-3.93,2.467
                                                c-5.896,10.117-9.013,21.688-9.013,33.461c0,16.035,5.725,31.249,15.838,43.137c-3.075-1.065-6.059-2.396-8.907-3.977
                                                c-1.529-0.851-3.395-0.838-4.914,0.033c-1.52,0.871-2.473,2.473-2.513,4.224c-0.007,0.295-0.007,0.59-0.007,0.889
                                                c0,23.935,12.882,45.484,32.577,57.229c-1.692-0.169-3.383-0.414-5.063-0.735c-1.732-0.331-3.513,0.276-4.681,1.597
                                                c-1.17,1.32-1.557,3.16-1.018,4.84c7.29,22.76,26.059,39.501,48.749,44.605c-18.819,11.787-40.34,17.961-62.932,17.961
                                                c-4.714,0-9.455-0.277-14.095-0.826c-2.305-0.274-4.509,1.087-5.294,3.279c-0.785,2.193,0.047,4.638,2.008,5.895
                                                c29.023,18.609,62.582,28.445,97.047,28.445c67.754,0,110.139-31.95,133.764-58.753c29.46-33.421,46.356-77.658,46.356-121.367
                                                c0-1.826-0.028-3.67-0.084-5.508c11.623-8.757,21.63-19.355,29.773-31.536c1.237-1.85,1.103-4.295-0.33-5.998
                                                C307.394,57.037,305.009,56.486,302.973,57.388z\"/>
                                        </g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                <g></g>
                                    </svg>
            </a>
          </li>
        </ul>
        <ul class=\"mb-0 list-inline ml-auto\">
          <li class=\"list-inline-item\">
            <a href=\"#\" class=\"nav-link\"> Home </a>
          </li>
          <li class=\"list-inline-item\">
            <a href=\"#\" class=\"nav-link\"> Home </a>
          </li>
          <li class=\"list-inline-item\">
            <a href=\"#\" class=\"nav-link\"> Home </a>
          </li>
        </ul>
      </div>
    </div>
  </section>
</footer>
</div>
", "themes/custom/aricleshubtheme/templates/partials/footer.html.twig", "/var/www/html/articles_hub/web/themes/custom/aricleshubtheme/templates/partials/footer.html.twig");
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
