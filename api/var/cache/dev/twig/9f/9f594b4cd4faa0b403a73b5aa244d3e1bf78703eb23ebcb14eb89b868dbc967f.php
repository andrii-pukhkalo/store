<?php

/* product/index.html.twig */
class __TwigTemplate_59ccc63b60221d7eb404a6cb9fea85f19ff7317fc8d724ddeb07bd2cfa70954b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

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
    <section class=\"categories_banner_area\">
        <div class=\"container\">
            <div class=\"c_banner_inner\">
                <h3>shop grid with left sidebar</h3>
                <ul>
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Shop</a></li>
                    <li class=\"current\"><a href=\"#\">Shop Grid with Left Sidebar</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->

    <!--================Categories Product Area =================-->
    <section class=\"categories_product_main p_80\">
        <div class=\"container\">
            <div class=\"categories_main_inner\">
                <div class=\"row row_disable\">
                    <div class=\"col-lg-9 float-md-right\">
                        <div class=\"showing_fillter\">
                            <div class=\"row m0\">
                                <div class=\"first_fillter\">
                                    <h4>Showing 1 to 12 of 30 total</h4>
                                </div>
                                <div class=\"secand_fillter\">
                                    <h4>SORT BY :</h4>
                                    <select class=\"selectpicker\">
                                        <option>Name</option>
                                        <option>Name 2</option>
                                        <option>Name 3</option>
                                    </select>
                                </div>
                                <div class=\"third_fillter\">
                                    <h4>Show : </h4>
                                    <select class=\"selectpicker\">
                                        <option>09</option>
                                        <option>10</option>
                                        <option>10</option>
                                    </select>
                                </div>
                                <div class=\"four_fillter\">
                                    <h4>View</h4>
                                    <a class=\"active\" href=\"#\"><i class=\"icon_grid-2x2\"></i></a>
                                    <a href=\"#\"><i class=\"icon_grid-3x3\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"categories_product_area\">
                            <div class=\"row\">
                                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 57
            echo "                                    <div class=\"col-lg-4 col-sm-6\">
                                        <div class=\"l_product_item\">
                                            <a href=\"product/";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", array(), "method"), "html", null, true);
            echo "\">
                                                <div class=\"l_p_img\">
                                                    <img src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "photoGallery", array(), "method"), "mainPhoto", array(), "method"), "fullName", array(), "method")), "html", null, true);
            echo "\" alt=\"\">
                                                    ";
            // line 62
            if (twig_get_attribute($this->env, $this->source, $context["product"], "isSale", array(), "method")) {
                // line 63
                echo "                                                        <h5 class=\"sale\">Sale</h5>
                                                    ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 64
$context["product"], "isNew", array(), "method")) {
                // line 65
                echo "                                                        <h5 class=\"new\">New</h5>
                                                    ";
            }
            // line 67
            echo "                                                </div>
                                            </a>
                                            <div class=\"l_p_text\">
                                                <ul>
                                                    <li class=\"p_icon\">
                                                        <a href=\"#\">
                                                            <i class=\"icon_piechart\"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"add_cart_btn\" href=\"#\">Add To Cart</a>
                                                    </li>
                                                    <li class=\"p_icon\">
                                                        <a href=\"#\">
                                                            <i class=\"icon_heart_alt\"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <h4>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", array(), "method"), "html", null, true);
            echo "</h4>
                                                <h5>
                                                    <del>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "oldPrice", array(), "method"), "amountInCurrency", array(), "method"), "html", null, true);
            echo "</del> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "price", array(), "method"), "amountInCurrency", array(), "method"), "html", null, true);
            echo "
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                            </div>
                            <nav aria-label=\"Page navigation example\" class=\"pagination_area\">
                                <ul class=\"pagination\">
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">4</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">5</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">6</a></li>
                                    <li class=\"page-item next\">
                                        <a class=\"page-link\" href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class=\"col-lg-3 float-md-right\">
                        <div class=\"categories_sidebar\">
                            <aside class=\"l_widgest l_p_categories_widget\">
                                <div class=\"l_w_title\">
                                    <h3>Categories</h3>
                                </div>
                                <ul class=\"navbar-nav\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"#\">Men’s Fashion
                                            <i class=\"icon_plus\" aria-hidden=\"true\"></i>
                                            <i class=\"icon_minus-06\" aria-hidden=\"true\"></i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Women’s Fashion
                                            <i class=\"icon_plus\" aria-hidden=\"true\"></i>
                                            <i class=\"icon_minus-06\" aria-hidden=\"true\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Hoodies & Sweatshirts</a></li>
                                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Jackets & Coats</a></li>
                                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Blouses & Shirts</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"#\">Phone & Accessories
                                            <i class=\"icon_plus\" aria-hidden=\"true\"></i>
                                            <i class=\"icon_minus-06\" aria-hidden=\"true\"></i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"#\">Electronic Appliance
                                            <i class=\"icon_plus\" aria-hidden=\"true\"></i>
                                            <i class=\"icon_minus-06\" aria-hidden=\"true\"></i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link disabled\" href=\"#\">Computer & Networking
                                            <i class=\"icon_plus\" aria-hidden=\"true\"></i>
                                            <i class=\"icon_minus-06\" aria-hidden=\"true\"></i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link disabled\" href=\"#\">TV, Audiio & Gaming
                                            <i class=\"icon_plus\" aria-hidden=\"true\"></i>
                                            <i class=\"icon_minus-06\" aria-hidden=\"true\"></i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link disabled\" href=\"#\">Office Supplies
                                            <i class=\"icon_plus\" aria-hidden=\"true\"></i>
                                            <i class=\"icon_minus-06\" aria-hidden=\"true\"></i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link disabled\" href=\"#\">All Categories
                                            <i class=\"icon_plus\" aria-hidden=\"true\"></i>
                                            <i class=\"icon_minus-06\" aria-hidden=\"true\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class=\"l_widgest l_fillter_widget\">
                                <div class=\"l_w_title\">
                                    <h3>Filter section</h3>
                                </div>
                                <div id=\"slider-range\" class=\"ui_slider\"></div>
                                <label for=\"amount\">Price:</label>
                                <input type=\"text\" id=\"amount\" readonly>
                            </aside>
                            <aside class=\"l_widgest l_color_widget\">
                                <div class=\"l_w_title\">
                                    <h3>Color</h3>
                                </div>
                                <ul>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                </ul>
                            </aside>
                            <aside class=\"l_widgest l_menufacture_widget\">
                                <div class=\"l_w_title\">
                                    <h3>Manufacturer</h3>
                                </div>
                                <ul>
                                    <li><a href=\"#\">Nigel Cabourn.</a></li>
                                    <li><a href=\"#\">Cacharel.</a></li>
                                    <li><a href=\"#\">Calibre (Menswear)</a></li>
                                    <li><a href=\"#\">Calvin Klein.</a></li>
                                    <li><a href=\"#\">Camilla and Marc</a></li>
                                </ul>
                            </aside>
                            <aside class=\"l_widgest l_feature_widget\">
                                <div class=\"l_w_title\">
                                    <h3>Featured Products</h3>
                                </div>
                                <div class=\"media\">
                                    <div class=\"d-flex\">
                                        <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/featured-product/f-p-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"media-body\">
                                        <h4>Jeans with <br /> Frayed Hems</h4>
                                        <h5>\$45.05</h5>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"d-flex\">
                                        <img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/featured-product/f-p-6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"media-body\">
                                        <h4>Crysp Denim<br />Montana</h4>
                                        <h5>\$45.05</h5>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Categories Product Area =================-->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  324 => 238,  312 => 229,  174 => 93,  160 => 87,  155 => 85,  135 => 67,  131 => 65,  129 => 64,  126 => 63,  124 => 62,  120 => 61,  115 => 59,  111 => 57,  107 => 56,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <!--================Categories Banner Area =================-->
    <section class=\"categories_banner_area\">
        <div class=\"container\">
            <div class=\"c_banner_inner\">
                <h3>shop grid with left sidebar</h3>
                <ul>
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Shop</a></li>
                    <li class=\"current\"><a href=\"#\">Shop Grid with Left Sidebar</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->

    <!--================Categories Product Area =================-->
    <section class=\"categories_product_main p_80\">
        <div class=\"container\">
            <div class=\"categories_main_inner\">
                <div class=\"row row_disable\">
                    <div class=\"col-lg-9 float-md-right\">
                        <div class=\"showing_fillter\">
                            <div class=\"row m0\">
                                <div class=\"first_fillter\">
                                    <h4>Showing 1 to 12 of 30 total</h4>
                                </div>
                                <div class=\"secand_fillter\">
                                    <h4>SORT BY :</h4>
                                    <select class=\"selectpicker\">
                                        <option>Name</option>
                                        <option>Name 2</option>
                                        <option>Name 3</option>
                                    </select>
                                </div>
                                <div class=\"third_fillter\">
                                    <h4>Show : </h4>
                                    <select class=\"selectpicker\">
                                        <option>09</option>
                                        <option>10</option>
                                        <option>10</option>
                                    </select>
                                </div>
                                <div class=\"four_fillter\">
                                    <h4>View</h4>
                                    <a class=\"active\" href=\"#\"><i class=\"icon_grid-2x2\"></i></a>
                                    <a href=\"#\"><i class=\"icon_grid-3x3\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"categories_product_area\">
                            <div class=\"row\">
                                {% for product in products %}
                                    <div class=\"col-lg-4 col-sm-6\">
                                        <div class=\"l_product_item\">
                                            <a href=\"product/{{ product.id() }}\">
                                                <div class=\"l_p_img\">
                                                    <img src=\"{{ asset(product.photoGallery().mainPhoto().fullName()) }}\" alt=\"\">
                                                    {% if(product.isSale()) %}
                                                        <h5 class=\"sale\">Sale</h5>
                                                    {% elseif(product.isNew()) %}
                                                        <h5 class=\"new\">New</h5>
                                                    {% endif %}
                                                </div>
                                            </a>
                                            <div class=\"l_p_text\">
                                                <ul>
                                                    <li class=\"p_icon\">
                                                        <a href=\"#\">
                                                            <i class=\"icon_piechart\"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class=\"add_cart_btn\" href=\"#\">Add To Cart</a>
                                                    </li>
                                                    <li class=\"p_icon\">
                                                        <a href=\"#\">
                                                            <i class=\"icon_heart_alt\"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <h4>{{ product.name() }}</h4>
                                                <h5>
                                                    <del>{{ product.oldPrice().amountInCurrency()}}</del> {{ product.price().amountInCurrency() }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                {%  endfor %}
                            </div>
                            <nav aria-label=\"Page navigation example\" class=\"pagination_area\">
                                <ul class=\"pagination\">
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">1</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">4</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">5</a></li>
                                    <li class=\"page-item\"><a class=\"page-link\" href=\"#\">6</a></li>
                                    <li class=\"page-item next\">
                                        <a class=\"page-link\" href=\"#\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class=\"col-lg-3 float-md-right\">
                        <div class=\"categories_sidebar\">
                            <aside class=\"l_widgest l_p_categories_widget\">
                                <div class=\"l_w_title\">
                                    <h3>Categories</h3>
                                </div>
                                <ul class=\"navbar-nav\">
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"#\">Men’s Fashion
                                            <i class=\"icon_plus\" aria-hidden=\"true\"></i>
                                            <i class=\"icon_minus-06\" aria-hidden=\"true\"></i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            Women’s Fashion
                                            <i class=\"icon_plus\" aria-hidden=\"true\"></i>
                                            <i class=\"icon_minus-06\" aria-hidden=\"true\"></i>
                                        </a>
                                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Hoodies & Sweatshirts</a></li>
                                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Jackets & Coats</a></li>
                                            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Blouses & Shirts</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"#\">Phone & Accessories
                                            <i class=\"icon_plus\" aria-hidden=\"true\"></i>
                                            <i class=\"icon_minus-06\" aria-hidden=\"true\"></i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link\" href=\"#\">Electronic Appliance
                                            <i class=\"icon_plus\" aria-hidden=\"true\"></i>
                                            <i class=\"icon_minus-06\" aria-hidden=\"true\"></i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link disabled\" href=\"#\">Computer & Networking
                                            <i class=\"icon_plus\" aria-hidden=\"true\"></i>
                                            <i class=\"icon_minus-06\" aria-hidden=\"true\"></i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link disabled\" href=\"#\">TV, Audiio & Gaming
                                            <i class=\"icon_plus\" aria-hidden=\"true\"></i>
                                            <i class=\"icon_minus-06\" aria-hidden=\"true\"></i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link disabled\" href=\"#\">Office Supplies
                                            <i class=\"icon_plus\" aria-hidden=\"true\"></i>
                                            <i class=\"icon_minus-06\" aria-hidden=\"true\"></i>
                                        </a>
                                    </li>
                                    <li class=\"nav-item\">
                                        <a class=\"nav-link disabled\" href=\"#\">All Categories
                                            <i class=\"icon_plus\" aria-hidden=\"true\"></i>
                                            <i class=\"icon_minus-06\" aria-hidden=\"true\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                            <aside class=\"l_widgest l_fillter_widget\">
                                <div class=\"l_w_title\">
                                    <h3>Filter section</h3>
                                </div>
                                <div id=\"slider-range\" class=\"ui_slider\"></div>
                                <label for=\"amount\">Price:</label>
                                <input type=\"text\" id=\"amount\" readonly>
                            </aside>
                            <aside class=\"l_widgest l_color_widget\">
                                <div class=\"l_w_title\">
                                    <h3>Color</h3>
                                </div>
                                <ul>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                    <li><a href=\"#\"></a></li>
                                </ul>
                            </aside>
                            <aside class=\"l_widgest l_menufacture_widget\">
                                <div class=\"l_w_title\">
                                    <h3>Manufacturer</h3>
                                </div>
                                <ul>
                                    <li><a href=\"#\">Nigel Cabourn.</a></li>
                                    <li><a href=\"#\">Cacharel.</a></li>
                                    <li><a href=\"#\">Calibre (Menswear)</a></li>
                                    <li><a href=\"#\">Calvin Klein.</a></li>
                                    <li><a href=\"#\">Camilla and Marc</a></li>
                                </ul>
                            </aside>
                            <aside class=\"l_widgest l_feature_widget\">
                                <div class=\"l_w_title\">
                                    <h3>Featured Products</h3>
                                </div>
                                <div class=\"media\">
                                    <div class=\"d-flex\">
                                        <img src=\"{{ asset('assets/img/product/featured-product/f-p-5.jpg') }}\" alt=\"\">
                                    </div>
                                    <div class=\"media-body\">
                                        <h4>Jeans with <br /> Frayed Hems</h4>
                                        <h5>\$45.05</h5>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"d-flex\">
                                        <img src=\"{{ asset('assets/img/product/featured-product/f-p-6.jpg') }}\" alt=\"\">
                                    </div>
                                    <div class=\"media-body\">
                                        <h4>Crysp Denim<br />Montana</h4>
                                        <h5>\$45.05</h5>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Categories Product Area =================-->

{% endblock %}", "product/index.html.twig", "/var/www/html/templates/product/index.html.twig");
    }
}
