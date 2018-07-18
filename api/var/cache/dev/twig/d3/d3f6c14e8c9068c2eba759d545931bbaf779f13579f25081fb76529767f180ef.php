<?php

/* cart/cart.html.twig */
class __TwigTemplate_9c459bd5bca1b6e81335d062794982d2d04b6b8a4937d8064f63cb4419842f6d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cart/cart.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cart/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cart/cart.html.twig"));

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
    <!--================Shopping Cart Area =================-->
    <section class=\"shopping_cart_area p_100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"cart_items\">
                        <h3>Your Cart Items</h3>
                        <div class=\"table-responsive-md\">
                            <table class=\"table\">
                                <tbody>

                                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new Twig_Error_Runtime('Variable "cart" does not exist.', 16, $this->source); })()), "items", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["cartItem"]) {
            // line 17
            echo "
                                    <tr>
                                        <th scope=\"row\">
                                            <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/close-icon.png"), "html", null, true);
            echo "\" alt=\"\">
                                        </th>
                                        <td>
                                            <div class=\"media\">
                                                <div class=\"d-flex\">
                                                    <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", array(), "method"), "photoGallery", array(), "method"), "mainPhoto", array(), "method"), "fullNameCartPhoto", array(), "method")), "html", null, true);
            echo "\" alt=\"\">
                                                </div>
                                                <div class=\"media-body\">
                                                    <h4>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", array(), "method"), "name", array(), "method"), "html", null, true);
            echo "</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td><p class=\"red\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cartItem"], "product", array(), "method"), "price", array(), "method"), "amountInCurrency", array(), "method"), "html", null, true);
            echo "</p></td>
                                        <td>
                                            <div class=\"quantity\">
                                                <h6>Quantity</h6>
                                                <div class=\"custom\">
                                                    <button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;\" class=\"reduced items-count\" type=\"button\"><i class=\"icon_minus-06\"></i></button>
                                                    <input type=\"text\" name=\"qty\" id=\"sst\" maxlength=\"12\" value=\"1\" title=\"Quantity:\" class=\"input-text qty\">
                                                    <button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;\" class=\"increase items-count\" type=\"button\"><i class=\"icon_plus\"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                        <td><p>\$150</p></td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cartItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
                                <tr class=\"last\">
                                    <th scope=\"row\">
                                        <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/cart-icon.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </th>
                                    <td>
                                        <div class=\"media\">
                                            <div class=\"d-flex\">
                                                <h5>Cupon code</h5>
                                            </div>
                                            <div class=\"media-body\">
                                                <input type=\"text\" placeholder=\"Apply cuopon\">
                                            </div>
                                        </div>
                                    </td>
                                    <td><p class=\"red\"></p></td>
                                    <td>
                                        <h3>update cart</h3>
                                    </td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"cart_totals_area\">
                        <h4>Cart Totals</h4>
                        <div class=\"cart_t_list\">
                            <div class=\"media\">
                                <div class=\"d-flex\">
                                    <h5>Subtotal</h5>
                                </div>
                                <div class=\"media-body\">
                                    <h6>\$14</h6>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"d-flex\">
                                    <h5>Shipping</h5>
                                </div>
                                <div class=\"media-body\">
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model tex</p>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"d-flex\">

                                </div>
                                <div class=\"media-body\">
                                    <select class=\"selectpicker\">
                                        <option>Calculate Shipping</option>
                                        <option>Calculate Shipping</option>
                                        <option>Calculate Shipping</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"total_amount row m0 row_disable\">
                            <div class=\"float-left\">
                                Total
                            </div>
                            <div class=\"float-right\">
                                \$400
                            </div>
                        </div>
                    </div>
                    <form method=\"get\" action=\"/cart/checkout\">
                        <button type=\"submit\" value=\"submit\" class=\"btn subs_btn form-control\">Proceed to checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================End Shopping Cart Area =================-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/cart.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 126,  208 => 125,  123 => 49,  118 => 46,  98 => 32,  91 => 28,  85 => 25,  77 => 20,  72 => 17,  68 => 16,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <!--================Shopping Cart Area =================-->
    <section class=\"shopping_cart_area p_100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"cart_items\">
                        <h3>Your Cart Items</h3>
                        <div class=\"table-responsive-md\">
                            <table class=\"table\">
                                <tbody>

                                {% for cartItem in cart.items()  %}

                                    <tr>
                                        <th scope=\"row\">
                                            <img src=\"{{ asset('assets/img/icon/close-icon.png') }}\" alt=\"\">
                                        </th>
                                        <td>
                                            <div class=\"media\">
                                                <div class=\"d-flex\">
                                                    <img src=\"{{ asset(cartItem.product().photoGallery().mainPhoto().fullNameCartPhoto())}}\" alt=\"\">
                                                </div>
                                                <div class=\"media-body\">
                                                    <h4>{{ cartItem.product().name() }}</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td><p class=\"red\">{{ cartItem.product().price().amountInCurrency() }}</p></td>
                                        <td>
                                            <div class=\"quantity\">
                                                <h6>Quantity</h6>
                                                <div class=\"custom\">
                                                    <button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;\" class=\"reduced items-count\" type=\"button\"><i class=\"icon_minus-06\"></i></button>
                                                    <input type=\"text\" name=\"qty\" id=\"sst\" maxlength=\"12\" value=\"1\" title=\"Quantity:\" class=\"input-text qty\">
                                                    <button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;\" class=\"increase items-count\" type=\"button\"><i class=\"icon_plus\"></i></button>
                                                </div>
                                            </div>
                                        </td>
                                        <td><p>\$150</p></td>
                                    </tr>
                                {% endfor %}

                                <tr class=\"last\">
                                    <th scope=\"row\">
                                        <img src=\"{{ asset('assets/img/icon/cart-icon.png') }}\" alt=\"\">
                                    </th>
                                    <td>
                                        <div class=\"media\">
                                            <div class=\"d-flex\">
                                                <h5>Cupon code</h5>
                                            </div>
                                            <div class=\"media-body\">
                                                <input type=\"text\" placeholder=\"Apply cuopon\">
                                            </div>
                                        </div>
                                    </td>
                                    <td><p class=\"red\"></p></td>
                                    <td>
                                        <h3>update cart</h3>
                                    </td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"cart_totals_area\">
                        <h4>Cart Totals</h4>
                        <div class=\"cart_t_list\">
                            <div class=\"media\">
                                <div class=\"d-flex\">
                                    <h5>Subtotal</h5>
                                </div>
                                <div class=\"media-body\">
                                    <h6>\$14</h6>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"d-flex\">
                                    <h5>Shipping</h5>
                                </div>
                                <div class=\"media-body\">
                                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model tex</p>
                                </div>
                            </div>
                            <div class=\"media\">
                                <div class=\"d-flex\">

                                </div>
                                <div class=\"media-body\">
                                    <select class=\"selectpicker\">
                                        <option>Calculate Shipping</option>
                                        <option>Calculate Shipping</option>
                                        <option>Calculate Shipping</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class=\"total_amount row m0 row_disable\">
                            <div class=\"float-left\">
                                Total
                            </div>
                            <div class=\"float-right\">
                                \$400
                            </div>
                        </div>
                    </div>
                    <form method=\"get\" action=\"/cart/checkout\">
                        <button type=\"submit\" value=\"submit\" class=\"btn subs_btn form-control\">Proceed to checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================End Shopping Cart Area =================-->

{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('assets/js/cart.js') }}\"></script>
{% endblock %}", "cart/cart.html.twig", "/var/www/html/templates/cart/cart.html.twig");
    }
}
