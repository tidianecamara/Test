<?php

/* SdzBlogBundle:Article:edit.html.twig */
class __TwigTemplate_375ad594dbe3e8ae4abe5bbbc90329290ce4da220f1382d1cdbf4be9632de904 extends Twig_Template
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
        echo "<div class=\"container-fluid\">
    <div class=\"row-fluid\">
        <div class=\"span2\">




        </div>
        <div class=\"span10\">
            <div class=\"title\"> Article edit</div>
           
            ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "


            <ul class=\"record_actions\">
                <li>
                    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("article");
        echo "\">
                        Back to the list
                    </a>
                </li>
                <li>";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
            </ul>
                
            
        </div>
    </div>
</div>


";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Article:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 24,  52 => 20,  44 => 15,  31 => 4,  28 => 3,);
    }
}
