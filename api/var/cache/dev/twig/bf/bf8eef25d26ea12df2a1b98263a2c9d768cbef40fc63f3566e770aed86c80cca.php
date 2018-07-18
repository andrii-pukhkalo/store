<?php

/* cart/checkout.html.twig */
class __TwigTemplate_7e7b95ab973adfb5b704aaadca4b0dadd2fbd8dffc4b7e736d5dabf8a5c418a7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cart/checkout.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cart/checkout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cart/checkout.html.twig"));

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
                <h3>checkout method</h3>
                <ul>
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"checkout.html\">Checkout Method</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->

    <!--================End Categories Banner Area =================-->
    <section class=\"checkout_method_area p_100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"checkout_main_area\">
                    <div class=\"checkout_prosses\">
                        <div class=\"row m0\">
                            <div class=\"col-md-6\">
                                <div class=\"checkout_method\">
                                    <h3>check as a guest or register</h3>
                                    <h4>Register with us for future convenience:</h4>
                                    <form role=\"form\" class=\"radio_area\">
                                        <ul class=\"radio_style\">
                                            <li>
                                                <input type=\"radio\" id=\"f-option\" name=\"selector\">
                                                <label for=\"f-option\">checkt as guest</label>
                                                <div class=\"check\"></div>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"s-option\" name=\"selector\">
                                                <label for=\"s-option\">register</label>
                                                <div class=\"check\"><div class=\"inside\"></div></div>
                                            </li>
                                        </ul>
                                    </form>
                                    <h5>register and save time !</h5>
                                    <h6>Register with us for future convenience:</h6>
                                    <a class=\"checkout_list\" href=\"#\"><i class=\"arrow_carrot-right\"></i> Fast and easy check out</a>
                                    <a class=\"checkout_list\" href=\"#\"><i class=\"arrow_carrot-right\"></i> Easy access to your order history and status</a>
                                    <a class=\"update_btn\" href=\"#\"><span>continue</span></a>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"row checkout_from_area\">
                                    <h2>already registed ?</h2>
                                    <p>Please log in below :</p>
                                    <form role=\"form\">
                                        <div class=\"form-group\">
                                            <label for=\"email\">Email address <span>*</span></label>
                                            <input type=\"email\" class=\"form-control\" id=\"email\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"pwd\">Password <span>*</span></label>
                                            <input type=\"password\" class=\"form-control\" id=\"pwd\">
                                        </div>
                                        <h3>* Required Filelds</h3>
                                        <div class=\"forgot_area\">
                                            <button type=\"submit\" class=\"btn update_btn btn-default\">log in</button>
                                            <h4>Forgot Your Password ?</h4>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    
    <!--================Categories Banner Area =================-->
    <section class=\"solid_banner_area\">
        <div class=\"container\">
            <div class=\"solid_banner_inner\">
                <h3>checkout method</h3>
                <ul>
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"checkout.html\">Checkout Method</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->

    <!--================End Categories Banner Area =================-->
    <section class=\"checkout_method_area p_100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"checkout_main_area\">
                    <div class=\"checkout_prosses\">
                        <div class=\"row m0\">
                            <div class=\"col-md-6\">
                                <div class=\"checkout_method\">
                                    <h3>check as a guest or register</h3>
                                    <h4>Register with us for future convenience:</h4>
                                    <form role=\"form\" class=\"radio_area\">
                                        <ul class=\"radio_style\">
                                            <li>
                                                <input type=\"radio\" id=\"f-option\" name=\"selector\">
                                                <label for=\"f-option\">checkt as guest</label>
                                                <div class=\"check\"></div>
                                            </li>
                                            <li>
                                                <input type=\"radio\" id=\"s-option\" name=\"selector\">
                                                <label for=\"s-option\">register</label>
                                                <div class=\"check\"><div class=\"inside\"></div></div>
                                            </li>
                                        </ul>
                                    </form>
                                    <h5>register and save time !</h5>
                                    <h6>Register with us for future convenience:</h6>
                                    <a class=\"checkout_list\" href=\"#\"><i class=\"arrow_carrot-right\"></i> Fast and easy check out</a>
                                    <a class=\"checkout_list\" href=\"#\"><i class=\"arrow_carrot-right\"></i> Easy access to your order history and status</a>
                                    <a class=\"update_btn\" href=\"#\"><span>continue</span></a>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"row checkout_from_area\">
                                    <h2>already registed ?</h2>
                                    <p>Please log in below :</p>
                                    <form role=\"form\">
                                        <div class=\"form-group\">
                                            <label for=\"email\">Email address <span>*</span></label>
                                            <input type=\"email\" class=\"form-control\" id=\"email\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"pwd\">Password <span>*</span></label>
                                            <input type=\"password\" class=\"form-control\" id=\"pwd\">
                                        </div>
                                        <h3>* Required Filelds</h3>
                                        <div class=\"forgot_area\">
                                            <button type=\"submit\" class=\"btn update_btn btn-default\">log in</button>
                                            <h4>Forgot Your Password ?</h4>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->

{% endblock %}", "cart/checkout.html.twig", "/var/www/html/templates/cart/checkout.html.twig");
    }
}
