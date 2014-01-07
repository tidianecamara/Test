<?php

/* BcBootstrapBundle:Pagination:pagination.html.twig */
class __TwigTemplate_3089ecf33d95dfff815567e92a1866a58abfde31f58836dd4cae56765f6f2ceb extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if ((!array_key_exists("style", $context))) {
            // line 4
            echo "    ";
            $context["style"] = "pagination";
        }
        // line 6
        echo "
";
        // line 7
        if ((!array_key_exists("prev_label", $context))) {
            // line 8
            echo "    ";
            $context["prev_label"] = "Previous";
        }
        // line 10
        if ((!array_key_exists("next_label", $context))) {
            // line 11
            echo "    ";
            $context["next_label"] = "Next";
        }
        // line 13
        if ((!array_key_exists("first_label", $context))) {
            // line 14
            echo "    ";
            $context["first_label"] = "First";
        }
        // line 16
        if ((!array_key_exists("last_label", $context))) {
            // line 17
            echo "    ";
            $context["last_label"] = "Last";
        }
        // line 19
        echo "

";
        // line 21
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 22
            echo "    ";
            if (((isset($context["style"]) ? $context["style"] : $this->getContext($context, "style")) == "pagination")) {
                // line 23
                echo "        ";
                $context["orientation_class"] = "";
                // line 24
                echo "        ";
                if (array_key_exists("alignment", $context)) {
                    // line 25
                    echo "            ";
                    if (((isset($context["alignment"]) ? $context["alignment"] : $this->getContext($context, "alignment")) == "center")) {
                        // line 26
                        echo "                ";
                        $context["orientation_class"] = " pagination-centered";
                        // line 27
                        echo "            ";
                    } elseif (((isset($context["alignment"]) ? $context["alignment"] : $this->getContext($context, "alignment")) == "right")) {
                        // line 28
                        echo "                ";
                        $context["orientation_class"] = " pagination-right";
                        // line 29
                        echo "            ";
                    }
                    // line 30
                    echo "        ";
                }
                // line 31
                echo "
        <div class=\"pagination";
                // line 32
                echo twig_escape_filter($this->env, (isset($context["orientation_class"]) ? $context["orientation_class"] : $this->getContext($context, "orientation_class")), "html", null, true);
                echo "\">
            <ul>
            ";
                // line 34
                if ((array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))) {
                    // line 35
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["first_label"]) ? $context["first_label"] : $this->getContext($context, "first_label"));
                    echo "</a></li>
            ";
                }
                // line 37
                echo "
            ";
                // line 38
                if (array_key_exists("previous", $context)) {
                    // line 39
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["prev_label"]) ? $context["prev_label"] : $this->getContext($context, "prev_label"));
                    echo "</a></li>
            ";
                }
                // line 41
                echo "
            ";
                // line 42
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 43
                    echo "                ";
                    if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) != (isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")))) {
                        // line 44
                        echo "                    <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                        echo "</a></li>
                ";
                    } else {
                        // line 46
                        echo "                    <li class=\"active\"><span>";
                        echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                        echo "</span></li>
                ";
                    }
                    // line 48
                    echo "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "
            ";
                // line 51
                if (array_key_exists("next", $context)) {
                    // line 52
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["next_label"]) ? $context["next_label"] : $this->getContext($context, "next_label"));
                    echo "</a></li>
            ";
                }
                // line 54
                echo "
            ";
                // line 55
                if ((array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))) {
                    // line 56
                    echo "                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["last_label"]) ? $context["last_label"] : $this->getContext($context, "last_label"));
                    echo "</a></li>
            ";
                }
                // line 58
                echo "            </ul>
        </div>
    ";
            } else {
                // line 61
                echo "        ";
                if ((!array_key_exists("aligned", $context))) {
                    // line 62
                    echo "            ";
                    $context["aligned"] = false;
                    // line 63
                    echo "        ";
                }
                // line 64
                echo "        <ul class=\"pager\">
            ";
                // line 65
                if (array_key_exists("previous", $context)) {
                    // line 66
                    echo "                <li";
                    if ((isset($context["aligned"]) ? $context["aligned"] : $this->getContext($context, "aligned"))) {
                        echo " class=\"previous\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["prev_label"]) ? $context["prev_label"] : $this->getContext($context, "prev_label"));
                    echo "</a></li>
            ";
                } else {
                    // line 68
                    echo "                <li class=\"disabled";
                    if ((isset($context["aligned"]) ? $context["aligned"] : $this->getContext($context, "aligned"))) {
                        echo " previous";
                    }
                    echo "\"><span>";
                    echo (isset($context["prev_label"]) ? $context["prev_label"] : $this->getContext($context, "prev_label"));
                    echo "</span></li>
            ";
                }
                // line 70
                echo "            ";
                if (array_key_exists("next", $context)) {
                    // line 71
                    echo "                <li";
                    if ((isset($context["aligned"]) ? $context["aligned"] : $this->getContext($context, "aligned"))) {
                        echo " class=\"next\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), array((isset($context["pageParameterName"]) ? $context["pageParameterName"] : $this->getContext($context, "pageParameterName")) => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))))), "html", null, true);
                    echo "\">";
                    echo (isset($context["next_label"]) ? $context["next_label"] : $this->getContext($context, "next_label"));
                    echo "</a></li>
            ";
                } else {
                    // line 73
                    echo "                <li class=\"disabled";
                    if ((isset($context["aligned"]) ? $context["aligned"] : $this->getContext($context, "aligned"))) {
                        echo " next";
                    }
                    echo "\"><span>";
                    echo (isset($context["next_label"]) ? $context["next_label"] : $this->getContext($context, "next_label"));
                    echo "</span></li>
            ";
                }
                // line 75
                echo "        </ul>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "BcBootstrapBundle:Pagination:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 75,  232 => 73,  220 => 71,  217 => 70,  207 => 68,  195 => 66,  193 => 65,  190 => 64,  187 => 63,  184 => 62,  181 => 61,  176 => 58,  168 => 56,  166 => 55,  163 => 54,  155 => 52,  153 => 51,  150 => 50,  143 => 48,  129 => 44,  126 => 43,  122 => 42,  119 => 41,  111 => 39,  109 => 38,  106 => 37,  98 => 35,  96 => 34,  91 => 32,  88 => 31,  85 => 30,  79 => 28,  73 => 26,  70 => 25,  67 => 24,  64 => 23,  59 => 21,  55 => 19,  49 => 16,  45 => 14,  43 => 13,  37 => 10,  24 => 4,  22 => 3,  19 => 2,  139 => 66,  136 => 65,  131 => 64,  124 => 7,  121 => 6,  115 => 5,  105 => 65,  82 => 29,  61 => 22,  44 => 14,  35 => 9,  33 => 8,  29 => 5,  23 => 1,  146 => 67,  140 => 64,  137 => 46,  118 => 45,  108 => 68,  103 => 64,  99 => 38,  94 => 36,  90 => 35,  84 => 34,  80 => 33,  76 => 27,  72 => 31,  69 => 30,  65 => 29,  51 => 17,  42 => 12,  39 => 11,  31 => 7,  28 => 6,);
    }
}
