<?php

/* themes/zircon/templates/views/views-view.html.twig */
class __TwigTemplate_b3aeaffb9f98be56d03dacaef7ad970e7308d082d5a752eac8676ecbf1cded49 extends Twig_Template
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
        $tags = array("if" => 41);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 40
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
  ";
        // line 41
        if ((isset($context["header"]) ? $context["header"] : null)) {
            // line 42
            echo "    <div class=\"view-header\">
      ";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["header"]) ? $context["header"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 46
        echo "  ";
        if ((isset($context["exposed"]) ? $context["exposed"] : null)) {
            // line 47
            echo "    <div class=\"view-filters\">
      ";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["exposed"]) ? $context["exposed"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 51
        echo "  ";
        if ((isset($context["attachment_before"]) ? $context["attachment_before"] : null)) {
            // line 52
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 53
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attachment_before"]) ? $context["attachment_before"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 56
        echo "
  ";
        // line 57
        if ((isset($context["rows"]) ? $context["rows"] : null)) {
            // line 58
            echo "    <div class=\"view-content\">
      ";
            // line 59
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true));
            echo "
    </div>
  ";
        } elseif (        // line 61
(isset($context["empty"]) ? $context["empty"] : null)) {
            // line 62
            echo "    <div class=\"view-empty\">
      ";
            // line 63
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["empty"]) ? $context["empty"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 66
        echo "
  ";
        // line 67
        if ((isset($context["pager"]) ? $context["pager"] : null)) {
            // line 68
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["pager"]) ? $context["pager"] : null), "html", null, true));
            echo "
  ";
        }
        // line 70
        echo "  ";
        if ((isset($context["attachment_after"]) ? $context["attachment_after"] : null)) {
            // line 71
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 72
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["attachment_after"]) ? $context["attachment_after"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 75
        echo "  ";
        if ((isset($context["more"]) ? $context["more"] : null)) {
            // line 76
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["more"]) ? $context["more"] : null), "html", null, true));
            echo "
  ";
        }
        // line 78
        echo "  ";
        if ((isset($context["footer"]) ? $context["footer"] : null)) {
            // line 79
            echo "    <div class=\"view-footer\">
      ";
            // line 80
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["footer"]) ? $context["footer"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 83
        echo "  ";
        if ((isset($context["feed_icons"]) ? $context["feed_icons"] : null)) {
            // line 84
            echo "    <div class=\"feed-icons\">
      ";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 88
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/zircon/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 88,  157 => 85,  154 => 84,  151 => 83,  145 => 80,  142 => 79,  139 => 78,  133 => 76,  130 => 75,  124 => 72,  121 => 71,  118 => 70,  112 => 68,  110 => 67,  107 => 66,  101 => 63,  98 => 62,  96 => 61,  91 => 59,  88 => 58,  86 => 57,  83 => 56,  77 => 53,  74 => 52,  71 => 51,  65 => 48,  62 => 47,  59 => 46,  53 => 43,  50 => 42,  48 => 41,  43 => 40,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/zircon/templates/views/views-view.html.twig", "/var/www/html/themes/zircon/templates/views/views-view.html.twig");
    }
}
