<?php

/* themes/custom/back_theme/templates/content/media--video.html.twig */
class __TwigTemplate_48718b6a29759a54a51effb3fd1a879153d38546656c3a4457a522fe1cc3c87d extends Twig_Template
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
        $tags = array("set" => 16, "if" => 25);
        $filters = array("clean_class" => 18, "raw" => 31);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 'raw'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 16
        $context["classes"] = array(0 => "media", 1 => ("media--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 18
($context["media"] ?? null), "bundle", array(), "method"))), 2 => (( !$this->getAttribute(        // line 19
($context["media"] ?? null), "isPublished", array(), "method")) ? ("media--unpublished") : ("")), 3 => ((        // line 20
($context["view_mode"] ?? null)) ? (("media--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")));
        // line 23
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
  ";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_suffix"] ?? null), "contextual_links", array()), "html", null, true));
        echo "
  ";
        // line 25
        if (($context["content"] ?? null)) {
            // line 26
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_media_video_file", array()), "html", null, true));
            echo "
    ";
            // line 27
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_video_embed_url", array()), "html", null, true));
            echo "

    ";
            // line 29
            if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_video_embed_code", array()), 0, array())) {
                // line 30
                echo "      <div class=\"video-embed-code\">
        ";
                // line 31
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_video_embed_code", array()), 0, array()), "#context", array(), "array"), "value", array(), "array")));
                echo "
      </div>
    ";
            }
            // line 34
            echo "  ";
        }
        // line 35
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/back_theme/templates/content/media--video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 35,  80 => 34,  74 => 31,  71 => 30,  69 => 29,  64 => 27,  59 => 26,  57 => 25,  53 => 24,  48 => 23,  46 => 20,  45 => 19,  44 => 18,  43 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override to display a media item.
 *
 * Available variables:
 * - name: Name of the media.
 * - content: Media content.
 *
 * @see template_preprocess_media()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
  'media',
  'media--type-' ~ media.bundle()|clean_class,
  not media.isPublished() ? 'media--unpublished',
  view_mode ? 'media--view-mode-' ~ view_mode|clean_class,
]
%}
<article{{ attributes.addClass(classes) }}>
  {{ title_suffix.contextual_links }}
  {% if content %}
    {{ content.field_media_video_file }}
    {{ content.field_video_embed_url }}

    {% if content.field_video_embed_code.0 %}
      <div class=\"video-embed-code\">
        {{ content.field_video_embed_code.0['#context']['value'] | raw }}
      </div>
    {% endif %}
  {% endif %}
</article>
", "themes/custom/back_theme/templates/content/media--video.html.twig", "/var/www/drupal/web/themes/custom/back_theme/templates/content/media--video.html.twig");
    }
}
