<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_bf48a11c61ddd8eeccbd36bcc36c1f54bb033c33dae37f5d00686a004dd3d8fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Connexion";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
        <div>
                    ";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 9
            echo "                         <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : null), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 11
        echo "
                 <form class =\"form-horizontal\" action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                     <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

                     <div class=\"control-group\">
                         <label class=\"control-label\"  for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>     
                         <div class=\"controls\">
                             <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\"  placeholder=\"Username\"/>
                         </div>
                     </div>

                     <div class=\"control-group\">
                         <label class=\"control-label\" for=\"password\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                         <div class=\"controls\">
                             <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                         </div>
                     </div>

                     <div class=\"control-group\">
                          <div class=\"controls\">
                              <label class=\"checkbox\" for=\"remember_me\">
                                  <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                                  ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                              </label>   
                              <button class=\"btn btn-primary\" type=\"submit\">Envoyer <i class=\"icon-white icon-ok-sign\"></i> </button>    
                          </div>
                     </div>
                 </form>
        </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  76 => 23,  68 => 18,  63 => 16,  57 => 13,  53 => 12,  50 => 11,  44 => 9,  38 => 6,  35 => 5,  29 => 3,  72 => 22,  67 => 20,  60 => 16,  55 => 14,  51 => 13,  46 => 11,  42 => 8,  39 => 9,  33 => 7,  31 => 6,  28 => 5,);
    }
}
