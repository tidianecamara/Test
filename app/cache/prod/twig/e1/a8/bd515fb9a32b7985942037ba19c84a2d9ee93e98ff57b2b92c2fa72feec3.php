<?php

/* ::base.html.twig */
class __TwigTemplate_e1a8bd515fb9a32b7985942037ba19c84a2d9ee93e98ff57b2b92c2fa72feec3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"navbar navbar-inverse\">
            <div class=\"navbar-inner\">
                <a class=\"brand\" href=\"#\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"logo\"></a>

                <ul class=\"nav\">
                    <li class=\"active\"><a href=\"#\"><i class=\"icon-home icon-white\"></i>  Home</a></li>
                    <li><a href=\"#\">Link</a></li>
                    <li><a href=\"#\">Link</a></li>


                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            Account
                            <b class=\"caret\"></b>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a tabindex=\"-1\" href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("article_new");
        echo "\"><i class=\"icon-pencil\"></i>Nouveau</a></li>
                            <li><a tabindex=\"-1\" href=\"#\">Another action</a></li>
                            <li><a tabindex=\"-1\" href=\"#\">Something else here</a></li>
                            <li class=\"divider\"></li>
                            <li><a tabindex=\"-1\" href=\"#\">Separated link</a></li>
                        </ul>
                    </li>
                </ul> 


                <ul class=\"nav navbar-nav navbar-right\">
                  
                    <li>
                        <div class=\"btn-group\">
                            <a class=\"btn btn-primary\" href=\"#\"><i class=\"icon-user icon-white\"></i> User</a>
                            <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\"><i class=\"icon-pencil\"></i> Edit</a></li>
                                <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><i class=\"icon-trash\"></i> Deconnexion</a></li>
                                <li><a href=\"#\"><i class=\"icon-ban-circle\"></i> Ban</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"#\"><i class=\"i\"></i> Make admin</a></li>
                            </ul>
                        </div>
                    </li>
                    
                     <li class=\"right\">
                        <form class=\"navbar-search pull-right\">

                            <input type=\"text\" class=\"search-query\" placeholder=\"Search\">
                        </form>
                    </li>  
                </ul>

            </div>
 
        ";
        // line 64
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "    </body>
</html>

";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "             <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
        ";
    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        // line 66
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/core.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 66,  136 => 65,  131 => 64,  124 => 7,  121 => 6,  115 => 5,  108 => 68,  105 => 65,  103 => 64,  82 => 46,  61 => 28,  23 => 1,  89 => 33,  76 => 23,  68 => 18,  63 => 16,  57 => 13,  53 => 12,  50 => 11,  44 => 14,  38 => 6,  35 => 9,  29 => 5,  72 => 22,  67 => 20,  60 => 16,  55 => 14,  51 => 13,  46 => 11,  42 => 8,  39 => 9,  33 => 6,  31 => 6,  28 => 5,);
    }
}
