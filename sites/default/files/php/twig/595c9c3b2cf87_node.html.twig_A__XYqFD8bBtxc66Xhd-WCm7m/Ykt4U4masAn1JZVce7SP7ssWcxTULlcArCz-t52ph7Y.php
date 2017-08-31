<?php

/* themes/zen/STARTERKIT/templates/content/node.html.twig */
class __TwigTemplate_ee82876aa47072bb18a8889fc13294f938864323193a7877ad93ae7d03ce0bfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@STARTERKIT/containers/article/article.twig", "themes/zen/STARTERKIT/templates/content/node.html.twig", 1);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@STARTERKIT/containers/article/article.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 61, "if" => 66, "trans" => 78, "include" => 83);
        $filters = array("t" => 84);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'trans', 'include'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 61
        $context["modifier_class"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "class", array());
        // line 62
        $context["attributes"] = $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeAttribute", array(0 => "class"), "method");
        // line 74
        $context["footer"] = (((isset($context["display_submitted"]) ? $context["display_submitted"] : null) || $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "in_preview", array())) ||  !$this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 64
    public function block_heading($context, array $blocks = array())
    {
        // line 65
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 66
        if ( !(isset($context["page"]) ? $context["page"] : null)) {
            // line 67
            echo "    ";
            $context["heading"] = (isset($context["label"]) ? $context["label"] : null);
            // line 68
            echo "    ";
            $context["headingAttributes"] = (isset($context["title_attributes"]) ? $context["title_attributes"] : null);
            // line 69
            echo "    ";
            $this->displayParentBlock("heading", $context, $blocks);
            echo "
  ";
        }
        // line 71
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
";
    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        // line 76
        echo "  ";
        if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
            // line 77
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true));
            echo "
    ";
            // line 78
            echo t("Submitted by @author_name on @date", array("@author_name" => (isset($context["author_name"]) ? $context["author_name"] : null), "@date" => (isset($context["date"]) ? $context["date"] : null), ));
            // line 79
            echo "    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["metadata"]) ? $context["metadata"] : null), "html", null, true));
            echo "
  ";
        }
        // line 81
        echo "  ";
        if (($this->getAttribute((isset($context["node"]) ? $context["node"] : null), "in_preview", array()) ||  !$this->getAttribute((isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method"))) {
            // line 82
            echo "    ";
            // line 83
            $this->loadTemplate("@STARTERKIT/components/watermark/watermark.twig", "themes/zen/STARTERKIT/templates/content/node.html.twig", 83)->display(array("content" => (($this->getAttribute(            // line 84
(isset($context["node"]) ? $context["node"] : null), "in_preview", array())) ? (t("Preview")) : (t("Unpublished")))));
            // line 87
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/zen/STARTERKIT/templates/content/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 87,  114 => 84,  113 => 83,  111 => 82,  108 => 81,  102 => 79,  100 => 78,  95 => 77,  92 => 76,  89 => 75,  82 => 71,  76 => 69,  73 => 68,  70 => 67,  68 => 66,  63 => 65,  60 => 64,  56 => 1,  54 => 74,  52 => 62,  50 => 61,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"@STARTERKIT/containers/article/article.twig\" %}
{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - node.bundle will return the machine name of the content type.
 *   - node.getCreatedTime() will return the node creation timestamp.
 *   - node.hasField('field_example') returns TRUE if the node bundle includes
 *     field_example. (This does not indicate the presence of a value in this
 *     field.)
 *   - node.isPublished() will return whether the node is published or not.
 *   - node.isPromoted() will return whether the node is promoted to the front
 *     page or not.
 *   - node.isSticky() will return whether the node should be sticky to the top
 *     of the current list.
 *   Calling other methods, such as node.delete(), will result in an exception.
 *   See \\Drupal\\node\\Entity\\Node for a full list of public properties and
 *   methods for the node object.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more classes.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_node()
 */
#}
{% set modifier_class = attributes.class %}
{% set attributes = attributes.removeAttribute('class') %}

{% block heading %}
  {{ title_prefix }}
  {% if not page %}
    {% set heading = label %}
    {% set headingAttributes = title_attributes %}
    {{ parent() }}
  {% endif %}
  {{ title_suffix }}
{% endblock heading %}

{% set footer = display_submitted or node.in_preview or not node.isPublished() %}
{% block footer %}
  {% if display_submitted %}
    {{ author_picture }}
    {% trans %}Submitted by {{ author_name }} on {{ date }}{% endtrans %}
    {{ metadata }}
  {% endif %}
  {% if node.in_preview or not node.isPublished() %}
    {%
      include \"@STARTERKIT/components/watermark/watermark.twig\" with {
        \"content\": node.in_preview ? \"Preview\"|t : \"Unpublished\"|t
      } only
    %}
  {% endif %}
{% endblock %}
";
    }
}
