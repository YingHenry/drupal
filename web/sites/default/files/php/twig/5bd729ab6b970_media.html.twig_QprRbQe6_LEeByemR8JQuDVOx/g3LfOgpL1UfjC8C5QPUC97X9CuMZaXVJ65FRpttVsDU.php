<?php

/* themes/custom/front_theme/media/media.html.twig */
class __TwigTemplate_44a82aaaa89f9ee4dd45a93e4ee97961334169638088fef36d04397c5c647abe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 15, "block" => 18, "if" => 19);
        $filters = array("clean_class" => 15);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'if'),
                array('clean_class'),
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

        // line 15
        $context["type"] = ("media--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(($context["media"] ?? null), "bundle", array(), "method")));
        // line 16
        $context["viewMode"] = ((($context["view_mode"] ?? null)) ? (("media--view-mode-" . ($context["view_mode"] ?? null))) : (""));
        // line 17
        echo "<div class=\"media ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["type"] ?? null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["viewMode"] ?? null), "html", null, true));
        echo "\">
  ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 23
        echo "</div>
";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        if (($context["content"] ?? null)) {
            // line 20
            echo "      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
    ";
        }
        // line 22
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/front_theme/media/media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  68 => 20,  65 => 19,  62 => 18,  57 => 23,  55 => 18,  48 => 17,  46 => 16,  44 => 15,);
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
{% set type = 'media--type-' ~ media.bundle()|clean_class %}
{% set viewMode = view_mode ? 'media--view-mode-' ~ view_mode %}
<div class=\"media {{ type }} {{ viewMode }}\">
  {%  block content %}
    {% if content %}
      {{ content }}
    {% endif %}
  {%  endblock %}
</div>
", "themes/custom/front_theme/media/media.html.twig", "/var/www/drupal/web/themes/custom/front_theme/media/media.html.twig");
    }
}
