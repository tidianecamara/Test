<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_adf5c6f6d9c09b0f4883bdf8351100a57fdd986ec1dd7d8d6fd058e0414a6afc extends Twig_Template
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
        // line 1
        echo "<a";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  139 => 66,  136 => 65,  131 => 64,  124 => 7,  121 => 6,  115 => 5,  105 => 65,  82 => 46,  61 => 28,  44 => 14,  35 => 9,  33 => 6,  29 => 5,  23 => 1,  146 => 67,  140 => 64,  137 => 63,  118 => 45,  108 => 68,  103 => 64,  99 => 38,  94 => 36,  90 => 35,  84 => 34,  80 => 33,  76 => 32,  72 => 31,  69 => 30,  65 => 29,  51 => 18,  42 => 12,  39 => 11,  31 => 4,  28 => 3,);
    }
}
