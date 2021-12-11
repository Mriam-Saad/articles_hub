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

/* themes/custom/aricleshubtheme/templates/node/node--in-article.html.twig */
class __TwigTemplate_d23ea81961a0333fc4933a40277f67ac21dc1616b295b4b2efe4c9f686b71d55 extends \Twig\Template
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
        echo "<div class=\"app-content my-5\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-md-3 pr-0\">
          <aside class=\"news-nav\">
            <a href=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 6, $this->source), "html", null, true);
        echo "allhubs\" class=\"back-link\">
              <span>go to back</span>
            </a>
            <div class=\"news-tabs mt-4\">
              <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">

                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aricles_data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 13
            echo "                  ";
            if ((twig_get_attribute($this->env, $this->source, $context["article"], "nid", [], "any", false, false, true, 13) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "nid", [], "any", false, false, true, 13), "value", [], "any", false, false, true, 13))) {
                // line 14
                echo "                <a class=\"nav-link active\" id=\"v-pills-news";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "nid", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "-tab\" data-toggle=\"pill\" href=\"#v-pills-news";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "nid", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "\" role=\"tab\" aria-controls=\"v-pills-news";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "nid", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "\" aria-selected=\"true\">
                  <h3 class=\"news-title mb-0\">";
                // line 15
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "</h3>
                  <date class=\"news-date\">";
                // line 16
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "</date>
                  <p class=\"news-desc\">";
                // line 17
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, true, 17), 17, $this->source))), "html", null, true);
                echo "..etc</p>
                </a>
                ";
            } else {
                // line 20
                echo "                  <a class=\"nav-link\" id=\"v-pills-news";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "nid", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "-tab\" data-toggle=\"pill\" href=\"#v-pills-news";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "nid", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "\" role=\"tab\" aria-controls=\"v-pills-news";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "nid", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "\" aria-selected=\"false\">
                    <h3 class=\"news-title mb-0\">";
                // line 21
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                echo "</h3>
                    <date class=\"news-date\">";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
                echo "</date>
                    <p class=\"news-desc\">";
                // line 23
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "description", [], "any", false, false, true, 23), 23, $this->source))), "html", null, true);
                echo "..etc</p>
                  </a>
                ";
            }
            // line 26
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
              </div>
            </div>

          </aside>
        </div>

        <div class=\"col-lg-8 col-md-9 pl-0\">
          <div class=\"tab-content\" id=\"v-pills-tabContent\">
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aricles_data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 38
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["article"], "nid", [], "any", false, false, true, 38) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "nid", [], "any", false, false, true, 38), "value", [], "any", false, false, true, 38))) {
                // line 39
                echo "
            <div class=\"tab-pane fade show active\" id=\"v-pills-news";
                // line 40
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "nid", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "\" role=\"tabpanel\" aria-labelledby=\"v-pills-news";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "nid", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                echo "-tab\">
            ";
            } else {
                // line 42
                echo "              <div class=\"tab-pane fade show\" id=\"v-pills-news";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "nid", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "\" role=\"tabpanel\" aria-labelledby=\"v-pills-news";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "nid", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                echo "-tab\">

              ";
            }
            // line 45
            echo "              <div class=\"card card-details border-0\">

                <div class=\"container\">
                  <div class=\"card-detais--header p-4\">
                    <b class=\"tab-header\"> ";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
            echo "</b>
                    <div class=\"row mb-1 mt-5\">
                      <div class=\"timer col-s-6\">
                        <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                             viewBox=\"0 0 489 489\" style=\"enable-background:new 0 0 489 489;\" xml:space=\"preserve\">
<g>
  <g>
    <path d=\"M244.5,0C109.3,0,0,109.3,0,244.5S109.3,489,244.5,489S489,379.8,489,244.5S379.8,0,244.5,0z M265.3,447.4V437
\t\t\tc0-11.4-9.4-20.8-20.8-20.8s-20.8,9.4-20.8,20.8v10.4c-95.8-9.8-172.3-86.3-182-182H51c11.4,0,20.8-9.4,20.8-20.8
\t\t\ts-9.4-20.8-20.8-20.8h-9.3c9.8-95.8,86.3-172.3,182-182V51c0,11.4,9.4,20.8,20.8,20.8s20.8-9.4,20.8-20.8v-9.3
\t\t\tc95.8,9.8,172.3,86.3,182,182H437c-11.4,0-20.8,9.4-20.8,20.8s9.4,20.8,20.8,20.8h10.4C437.6,361.1,361.1,437.6,265.3,447.4z\"/>
    <path d=\"M244.5,124.9c-11.4,0-20.8,9.4-20.8,20.8v91.5L129,353.8c-7.3,9.4-5.2,21.8,3.1,29.1c11.6,8.5,23.9,2.1,28.1-3.1
\t\t\tl101-122.8c2.1-3.1,4.2-7.3,4.2-12.5v-98.8C265.3,134.2,256,124.9,244.5,124.9z\"/>
  </g>
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
                        <p class=\"date-text p-1\"> ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "article_time_ago", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "</p>
                      </div>
                      <div class=\"calender col-s-6\">
                        <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                             viewBox=\"0 0 490 490\" style=\"enable-background:new 0 0 490 490;\" xml:space=\"preserve\">
<path d=\"M404.465,23.677h-53.131V0H330.03v23.677h-74.378V0h-21.304v23.677h-74.373V0h-21.304v23.677H85.535
\tc-5.883,0-10.652,4.769-10.652,10.652v445.019c0,5.883,4.769,10.652,10.652,10.652h318.93c5.883,0,10.652-4.769,10.652-10.652
\tV34.329C415.117,28.446,410.348,23.677,404.465,23.677z M138.671,44.981v23.681h21.304V44.981h74.373v23.681h21.304V44.981h74.378
\tv23.681h21.304V44.981h42.479v74.914H96.187V44.981H138.671z M96.187,468.696V141.199h297.626v327.497H96.187z\"/>
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
                        <p class=\"date-text p-1\">";
            // line 105
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "article_full_date", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "</p>
                      </div>
                    </div>
                  </div>
                  </header>
                  <div class=\"card-detais--actions py-2 px-4\">
                    <div class=\"container\">
                      <div class=\"row mt-2\">
                        <div class=\"col-s-6 action-like\">
                          <p>Share: </p>
                          ";
            // line 115
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "addtoany", [], "any", false, false, true, 115), 115, $this->source), "html", null, true);
            echo "
                        </div>
                        <div class=\"col-s-6\">
                          <a href=\"javascript:;\" class=\"fav\">
                            <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                 viewBox=\"0 0 471.701 471.701\" style=\"enable-background:new 0 0 471.701 471.701;\" xml:space=\"preserve\">
                                        <g>
                                          <path d=\"M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                                                c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                                                l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                                                C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                                                s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                                                c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                                                C444.801,187.101,434.001,213.101,414.401,232.701z\"/>
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
                        </div>
                        <p class=\"ml-2 fav-text\">Like this artticle</p>
                      </div>
                    </div>
                  </div>
                  <div class=\"card-detais--content px-4 py-3\">
                    <div class=\"container\">
                      <div class=\"text-center\">
                        ";
            // line 155
            if ((twig_get_attribute($this->env, $this->source, $context["article"], "video_or_image", [], "any", false, false, true, 155) == "Image")) {
                // line 156
                echo "
                          <img  src=\"";
                // line 157
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, true, 157), 157, $this->source)]), "html", null, true);
                echo "\"  alt=\"...\">
                          ";
            } else {
                // line 159
                echo "                            <video  class=\"card-img-top\" autoplay>
                              <source class=\"card-img-top\" src=\"";
                // line 160
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "video", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
                echo "\" type=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "video_extention", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
                echo "\">
                              Your browser does not support the video tag.
                            </video>
                        ";
            }
            // line 164
            echo "                      </div>

                      <p>
                        ";
            // line 167
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(strip_tags($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["article"], "full_description", [], "any", false, false, true, 167), 167, $this->source))), "html", null, true);
            echo "
                      </p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
      ";
        // line 182
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalBlock("weather_block"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/custom/aricleshubtheme/templates/node/node--in-article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 182,  317 => 176,  302 => 167,  297 => 164,  288 => 160,  285 => 159,  280 => 157,  277 => 156,  275 => 155,  232 => 115,  219 => 105,  191 => 80,  157 => 49,  151 => 45,  142 => 42,  135 => 40,  132 => 39,  129 => 38,  125 => 37,  114 => 28,  108 => 26,  102 => 23,  98 => 22,  94 => 21,  85 => 20,  79 => 17,  75 => 16,  71 => 15,  62 => 14,  59 => 13,  55 => 12,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"app-content my-5\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-md-3 pr-0\">
          <aside class=\"news-nav\">
            <a href=\"{{ base_path }}allhubs\" class=\"back-link\">
              <span>go to back</span>
            </a>
            <div class=\"news-tabs mt-4\">
              <div class=\"nav flex-column nav-pills\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\">

                {% for article in aricles_data %}
                  {% if article.nid == node.nid.value %}
                <a class=\"nav-link active\" id=\"v-pills-news{{ article.nid }}-tab\" data-toggle=\"pill\" href=\"#v-pills-news{{ article.nid }}\" role=\"tab\" aria-controls=\"v-pills-news{{ article.nid }}\" aria-selected=\"true\">
                  <h3 class=\"news-title mb-0\">{{ article.title }}</h3>
                  <date class=\"news-date\">{{ article.date }}</date>
                  <p class=\"news-desc\">{{ article.description|striptags|render }}..etc</p>
                </a>
                {% else %}
                  <a class=\"nav-link\" id=\"v-pills-news{{ article.nid }}-tab\" data-toggle=\"pill\" href=\"#v-pills-news{{ article.nid }}\" role=\"tab\" aria-controls=\"v-pills-news{{ article.nid }}\" aria-selected=\"false\">
                    <h3 class=\"news-title mb-0\">{{ article.title }}</h3>
                    <date class=\"news-date\">{{ article.date }}</date>
                    <p class=\"news-desc\">{{ article.description|striptags|render }}..etc</p>
                  </a>
                {% endif %}
                {% endfor %}
{#                </a>#}

              </div>
            </div>

          </aside>
        </div>

        <div class=\"col-lg-8 col-md-9 pl-0\">
          <div class=\"tab-content\" id=\"v-pills-tabContent\">
            {% for article in aricles_data %}
            {% if article.nid == node.nid.value %}

            <div class=\"tab-pane fade show active\" id=\"v-pills-news{{ article.nid }}\" role=\"tabpanel\" aria-labelledby=\"v-pills-news{{ article.nid }}-tab\">
            {% else %}
              <div class=\"tab-pane fade show\" id=\"v-pills-news{{ article.nid }}\" role=\"tabpanel\" aria-labelledby=\"v-pills-news{{ article.nid }}-tab\">

              {% endif %}
              <div class=\"card card-details border-0\">

                <div class=\"container\">
                  <div class=\"card-detais--header p-4\">
                    <b class=\"tab-header\"> {{ article.title }}</b>
                    <div class=\"row mb-1 mt-5\">
                      <div class=\"timer col-s-6\">
                        <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                             viewBox=\"0 0 489 489\" style=\"enable-background:new 0 0 489 489;\" xml:space=\"preserve\">
<g>
  <g>
    <path d=\"M244.5,0C109.3,0,0,109.3,0,244.5S109.3,489,244.5,489S489,379.8,489,244.5S379.8,0,244.5,0z M265.3,447.4V437
\t\t\tc0-11.4-9.4-20.8-20.8-20.8s-20.8,9.4-20.8,20.8v10.4c-95.8-9.8-172.3-86.3-182-182H51c11.4,0,20.8-9.4,20.8-20.8
\t\t\ts-9.4-20.8-20.8-20.8h-9.3c9.8-95.8,86.3-172.3,182-182V51c0,11.4,9.4,20.8,20.8,20.8s20.8-9.4,20.8-20.8v-9.3
\t\t\tc95.8,9.8,172.3,86.3,182,182H437c-11.4,0-20.8,9.4-20.8,20.8s9.4,20.8,20.8,20.8h10.4C437.6,361.1,361.1,437.6,265.3,447.4z\"/>
    <path d=\"M244.5,124.9c-11.4,0-20.8,9.4-20.8,20.8v91.5L129,353.8c-7.3,9.4-5.2,21.8,3.1,29.1c11.6,8.5,23.9,2.1,28.1-3.1
\t\t\tl101-122.8c2.1-3.1,4.2-7.3,4.2-12.5v-98.8C265.3,134.2,256,124.9,244.5,124.9z\"/>
  </g>
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
                        <p class=\"date-text p-1\"> {{ article.article_time_ago }}</p>
                      </div>
                      <div class=\"calender col-s-6\">
                        <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                             viewBox=\"0 0 490 490\" style=\"enable-background:new 0 0 490 490;\" xml:space=\"preserve\">
<path d=\"M404.465,23.677h-53.131V0H330.03v23.677h-74.378V0h-21.304v23.677h-74.373V0h-21.304v23.677H85.535
\tc-5.883,0-10.652,4.769-10.652,10.652v445.019c0,5.883,4.769,10.652,10.652,10.652h318.93c5.883,0,10.652-4.769,10.652-10.652
\tV34.329C415.117,28.446,410.348,23.677,404.465,23.677z M138.671,44.981v23.681h21.304V44.981h74.373v23.681h21.304V44.981h74.378
\tv23.681h21.304V44.981h42.479v74.914H96.187V44.981H138.671z M96.187,468.696V141.199h297.626v327.497H96.187z\"/>
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
                        <p class=\"date-text p-1\">{{ article.article_full_date }}</p>
                      </div>
                    </div>
                  </div>
                  </header>
                  <div class=\"card-detais--actions py-2 px-4\">
                    <div class=\"container\">
                      <div class=\"row mt-2\">
                        <div class=\"col-s-6 action-like\">
                          <p>Share: </p>
                          {{ content.addtoany }}
                        </div>
                        <div class=\"col-s-6\">
                          <a href=\"javascript:;\" class=\"fav\">
                            <svg version=\"1.1\" id=\"Capa_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                 viewBox=\"0 0 471.701 471.701\" style=\"enable-background:new 0 0 471.701 471.701;\" xml:space=\"preserve\">
                                        <g>
                                          <path d=\"M433.601,67.001c-24.7-24.7-57.4-38.2-92.3-38.2s-67.7,13.6-92.4,38.3l-12.9,12.9l-13.1-13.1
                                                c-24.7-24.7-57.6-38.4-92.5-38.4c-34.8,0-67.6,13.6-92.2,38.2c-24.7,24.7-38.3,57.5-38.2,92.4c0,34.9,13.7,67.6,38.4,92.3
                                                l187.8,187.8c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-3.9l188.2-187.5c24.7-24.7,38.3-57.5,38.3-92.4
                                                C471.801,124.501,458.301,91.701,433.601,67.001z M414.401,232.701l-178.7,178l-178.3-178.3c-19.6-19.6-30.4-45.6-30.4-73.3
                                                s10.7-53.7,30.3-73.2c19.5-19.5,45.5-30.3,73.1-30.3c27.7,0,53.8,10.8,73.4,30.4l22.6,22.6c5.3,5.3,13.8,5.3,19.1,0l22.4-22.4
                                                c19.6-19.6,45.7-30.4,73.3-30.4c27.6,0,53.6,10.8,73.2,30.3c19.6,19.6,30.3,45.6,30.3,73.3
                                                C444.801,187.101,434.001,213.101,414.401,232.701z\"/>
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
                        </div>
                        <p class=\"ml-2 fav-text\">Like this artticle</p>
                      </div>
                    </div>
                  </div>
                  <div class=\"card-detais--content px-4 py-3\">
                    <div class=\"container\">
                      <div class=\"text-center\">
                        {% if article.video_or_image == \"Image\" %}

                          <img  src=\"{{ file_url(article.image) }}\"  alt=\"...\">
                          {% else %}
                            <video  class=\"card-img-top\" autoplay>
                              <source class=\"card-img-top\" src=\"{{ article.video }}\" type=\"{{ article.video_extention }}\">
                              Your browser does not support the video tag.
                            </video>
                        {% endif %}
                      </div>

                      <p>
                        {{ article.full_description|striptags|render }}
                      </p>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            {% endfor %}

          </div>
        </div>
      </div>
    </div>
  </div>
      {{ drupal_block(\"weather_block\") }}

", "themes/custom/aricleshubtheme/templates/node/node--in-article.html.twig", "/var/www/html/articles_hub/web/themes/custom/aricleshubtheme/templates/node/node--in-article.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 12, "if" => 13);
        static $filters = array("escape" => 6, "render" => 17, "striptags" => 17);
        static $functions = array("file_url" => 157, "drupal_block" => 182);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 'render', 'striptags'],
                ['file_url', 'drupal_block']
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
