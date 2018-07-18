<?php

/* security/login.html.twig */
class __TwigTemplate_dcabd4af1ba448ef9eb6db0d53d1b293e140d3ba683430511420fe3150382896 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<!--================Categories Banner Area =================-->
<section class=\"solid_banner_area\">
    <div class=\"container\">
        <div class=\"solid_banner_inner\">
            <h3>LOgin</h3>
            <ul>
                <li><a href=\"#\">Home</a></li>
                <li><a href=\"track.html\">Login</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Categories Banner Area =================-->

<!--================login Area =================-->
<section class=\"login_area p_100\">
    <div class=\"container\">
        <div class=\"login_inner\">
            <div class=\"row\">
                ";
        // line 24
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "                    ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 25, $this->source); })()));
            echo "
                    <div class=\"text-danger\">";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 26, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 26, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 28
        echo "                <div class=\"col-lg-4\">
                    <div class=\"login_title\">
                        <h2>log in your account</h2>
                        <p>Log in to your account to discovery all great features in this template.</p>
                    </div>
                    <form class=\"login_form row\" action=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
                        <div class=\"col-lg-12 form-group\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"User Name\" id=\"username\" name=\"_username\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\">
                        </div>
                        <div class=\"col-lg-12 form-group\">
                            <input class=\"form-control\" type=\"password\" placeholder=\"Password\" id=\"password\" name=\"_password\">
                        </div>
                        <div class=\"col-lg-12 form-group \">
                            <div class=\"solid_banner_area\">
                                ";
        // line 42
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 42, $this->source); })())) {
            // line 43
            echo "                                    ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 43, $this->source); })()));
            echo "
                                    <div class=\"text-danger\">";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 44, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 44, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                                ";
        }
        // line 46
        echo "                            </div>
                        </div>
                        <div class=\"col-lg-12 form-group\">
                            <div class=\"creat_account\">
                                <input type=\"checkbox\" id=\"f-option\" name=\"selector\">
                                <label for=\"f-option\">Keep me logged in</label>
                                <div class=\"check\"></div>
                            </div>
                            <h4>Forgot your password ?</h4>
                        </div>
                        <div class=\"col-lg-12 form-group\">
                            <button type=\"submit\" value=\"submit\" class=\"btn update_btn form-control\">Login</button>
                        </div>
                    </form>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"login_title\">
                        <h2>create account</h2>
                        <p>Follow the steps below to create email account enjoy the great mail.com emailing experience. Vivamus tempus risus vel felis condimentum, non vehicula est iaculis.</p>
                    </div>
                    <form class=\"login_form row\">
                        <div class=\"col-lg-6 form-group\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"Name\">
                        </div>
                        <div class=\"col-lg-6 form-group\">
                            <input class=\"form-control\" type=\"email\" placeholder=\"Email\">
                        </div>
                        <div class=\"col-lg-6 form-group\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"User Name\">
                        </div>
                        <div class=\"col-lg-6 form-group\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"Phone\">
                        </div>
                        <div class=\"col-lg-6 form-group\">
                            <input class=\"form-control\" type=\"password\" placeholder=\"Password\">
                        </div>
                        <div class=\"col-lg-6 form-group\">
                            <input class=\"form-control\" type=\"password\" placeholder=\"Re-Password\">
                        </div>
                        <div class=\"col-lg-6 form-group\">
                            <button type=\"submit\" value=\"submit\" class=\"btn subs_btn form-control\">register now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End login Area =================-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 46,  116 => 44,  111 => 43,  109 => 42,  99 => 35,  94 => 33,  87 => 28,  82 => 26,  77 => 25,  75 => 24,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<!--================Categories Banner Area =================-->
<section class=\"solid_banner_area\">
    <div class=\"container\">
        <div class=\"solid_banner_inner\">
            <h3>LOgin</h3>
            <ul>
                <li><a href=\"#\">Home</a></li>
                <li><a href=\"track.html\">Login</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Categories Banner Area =================-->

<!--================login Area =================-->
<section class=\"login_area p_100\">
    <div class=\"container\">
        <div class=\"login_inner\">
            <div class=\"row\">
                {% if error %}
                    {{ dump(error) }}
                    <div class=\"text-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
                <div class=\"col-lg-4\">
                    <div class=\"login_title\">
                        <h2>log in your account</h2>
                        <p>Log in to your account to discovery all great features in this template.</p>
                    </div>
                    <form class=\"login_form row\" action=\"{{ path('login') }}\" method=\"post\">
                        <div class=\"col-lg-12 form-group\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"User Name\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\">
                        </div>
                        <div class=\"col-lg-12 form-group\">
                            <input class=\"form-control\" type=\"password\" placeholder=\"Password\" id=\"password\" name=\"_password\">
                        </div>
                        <div class=\"col-lg-12 form-group \">
                            <div class=\"solid_banner_area\">
                                {% if error %}
                                    {{ dump(error) }}
                                    <div class=\"text-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"col-lg-12 form-group\">
                            <div class=\"creat_account\">
                                <input type=\"checkbox\" id=\"f-option\" name=\"selector\">
                                <label for=\"f-option\">Keep me logged in</label>
                                <div class=\"check\"></div>
                            </div>
                            <h4>Forgot your password ?</h4>
                        </div>
                        <div class=\"col-lg-12 form-group\">
                            <button type=\"submit\" value=\"submit\" class=\"btn update_btn form-control\">Login</button>
                        </div>
                    </form>
                </div>
                <div class=\"col-lg-8\">
                    <div class=\"login_title\">
                        <h2>create account</h2>
                        <p>Follow the steps below to create email account enjoy the great mail.com emailing experience. Vivamus tempus risus vel felis condimentum, non vehicula est iaculis.</p>
                    </div>
                    <form class=\"login_form row\">
                        <div class=\"col-lg-6 form-group\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"Name\">
                        </div>
                        <div class=\"col-lg-6 form-group\">
                            <input class=\"form-control\" type=\"email\" placeholder=\"Email\">
                        </div>
                        <div class=\"col-lg-6 form-group\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"User Name\">
                        </div>
                        <div class=\"col-lg-6 form-group\">
                            <input class=\"form-control\" type=\"text\" placeholder=\"Phone\">
                        </div>
                        <div class=\"col-lg-6 form-group\">
                            <input class=\"form-control\" type=\"password\" placeholder=\"Password\">
                        </div>
                        <div class=\"col-lg-6 form-group\">
                            <input class=\"form-control\" type=\"password\" placeholder=\"Re-Password\">
                        </div>
                        <div class=\"col-lg-6 form-group\">
                            <button type=\"submit\" value=\"submit\" class=\"btn subs_btn form-control\">register now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End login Area =================-->

{% endblock %}", "security/login.html.twig", "/var/www/html/templates/security/login.html.twig");
    }
}
