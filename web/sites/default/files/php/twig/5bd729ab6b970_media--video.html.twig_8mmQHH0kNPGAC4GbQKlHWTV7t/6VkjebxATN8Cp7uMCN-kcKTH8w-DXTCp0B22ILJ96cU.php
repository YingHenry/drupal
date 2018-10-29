<?php

/* themes/custom/front_theme/media/media--video.html.twig */
class __TwigTemplate_7a6a47da798babb31a1c0532514c0b384efa4af60ba814ae2d1a1c89927327fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("media.html.twig", "themes/custom/front_theme/media/media--video.html.twig", 15);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "media.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 18);
        $filters = array("raw" => 24);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('raw'),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "  ";
        if (($context["content"] ?? null)) {
            // line 19
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_media_video_file", array()), "html", null, true));
            echo "
    ";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_video_embed_url", array()), "html", null, true));
            echo "

    ";
            // line 22
            if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_video_embed_code", array()), 0, array())) {
                // line 23
                echo "      <div class=\"video-embed-code\">
        ";
                // line 24
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_video_embed_code", array()), 0, array()), "#context", array(), "array"), "value", array(), "array")));
                echo "
      </div>
    ";
            }
            // line 27
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/front_theme/media/media--video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  73 => 24,  70 => 23,  68 => 22,  63 => 20,  58 => 19,  55 => 18,  52 => 17,  11 => 15,);
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
{% extends \"media.html.twig\" %}

{% block content %}
  {% if content %}
    {{ content.field_media_video_file }}
    {{ content.field_video_embed_url }}

    {% if content.field_video_embed_code.0 %}
      <div class=\"video-embed-code\">
        {{ content.field_video_embed_code.0['#context']['value'] | raw }}
      </div>
    {% endif %}
  {% endif %}
{% endblock %}
", "themes/custom/front_theme/media/media--video.html.twig", "/var/www/drupal/web/themes/custom/front_theme/media/media--video.html.twig");
    }
}
