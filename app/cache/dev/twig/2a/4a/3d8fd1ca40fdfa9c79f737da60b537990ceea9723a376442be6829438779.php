<?php

/* SdzBlogBundle:Article:index.html.twig */
class __TwigTemplate_2a4a3d8fd1ca40fdfa9c79f737da60b537990ceea9723a376442be6829438779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Article list</h1>

<div class=\"container-fluid\">
    <div class=\"row-fluid\">
        <div class=\"span8\">

            ";
        // line 11
        echo "            <div class=\"count\">
                ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), "getTotalItemCount"), "html", null, true);
        echo "
            </div>

            <table class=\"table table-hover \">
                <thead>
                    <tr>
                        <th>";
        // line 18
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")), $this->env->getExtension('translator')->trans("Id", array("foo" => "bar"), "messages"), "id");
        echo "</th>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Date</th>
                        <th>Contenue</th>
                        <th>Publication</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>
                ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "                    <tr>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "auteur"), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date")) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenue"), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "publication"), "html", null, true);
            echo "</td>
                        <td>
                            <a  data-toggle=\"modal\" data-target=\"#modal_show\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_show", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-eye-open\"></i></a>
                            <a data-toggle=\"modal\" data-target=\"#modal_edit\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><i class=\"icon-pencil\"></i></a>
                            
                            <a  href=\"../uploads/doc_";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
            echo "\"><i class=\"icon-file\"></i></a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </tbody>
            </table>

            <div id=\"modal_show\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                </div>
                <div class=\"modal-body\"></div>
            </div>
            
             <div id=\"modal_edit\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                </div>
                <div class=\"modal-body\"></div>
            </div>

           ";
        // line 63
        echo "            <div class=\"navigation pagination-centered\">
                    ";
        // line 64
        echo $this->env->getExtension('knp_pagination')->render((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        echo "
            </div>

            <a  class=\"btn btn-primary\" href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("article_new");
        echo "\"> Ajouter un article </a>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 67,  140 => 64,  137 => 63,  118 => 45,  108 => 41,  103 => 39,  99 => 38,  94 => 36,  90 => 35,  84 => 34,  80 => 33,  76 => 32,  72 => 31,  69 => 30,  65 => 29,  51 => 18,  42 => 12,  39 => 11,  31 => 4,  28 => 3,);
    }
}
