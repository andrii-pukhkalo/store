<?php

/* home/index.html.twig */
class __TwigTemplate_af10c2b1ea3553257f80a511a6f81e0c928adccea6d4ccd31cdf820c26bcfa38 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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
    <!--================Home Carousel Area =================-->
    <section class=\"home_carousel_area\">
        <div class=\"home_carousel_slider owl-carousel\">
            <div class=\"item\">
                <div class=\"h_carousel_item\">
                    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-carousel/home-c-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"carousel_hover\">
                        <h3>mens bag</h3>
                        <h4>We feature the best professional bags </h4>
                        <h5>Including:</h5>
                        <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                        <a class=\"discover_btn\" href=\"#\">discover now</a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"h_carousel_item\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-carousel/home-c-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"carousel_hover\">
                        <h3>mens bag</h3>
                        <h4>We feature the best professional bags </h4>
                        <h5>Including:</h5>
                        <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                        <a class=\"discover_btn\" href=\"#\">discover now</a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"h_carousel_item\">
                    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-carousel/home-c-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"carousel_hover\">
                        <h3>mens bag</h3>
                        <h4>We feature the best professional bags </h4>
                        <h5>Including:</h5>
                        <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                        <a class=\"discover_btn\" href=\"#\">discover now</a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"h_carousel_item\">
                    <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-carousel/home-c-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"carousel_hover\">
                        <h3>mens bag</h3>
                        <h4>We feature the best professional bags </h4>
                        <h5>Including:</h5>
                        <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                        <a class=\"discover_btn\" href=\"#\">discover now</a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"h_carousel_item\">
                    <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-carousel/home-c-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"carousel_hover\">
                        <h3>mens bag</h3>
                        <h4>We feature the best professional bags </h4>
                        <h5>Including:</h5>
                        <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                        <a class=\"discover_btn\" href=\"#\">discover now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Carousel Area =================-->


    <!--================Special Offer Area =================-->
    <section class=\"special_offer_area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"special_offer_item\">
                        <img class=\"img-fluid\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/feature-add/special-offer-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"hover_text\">
                            <h4>Special Offer</h4>
                            <h5>Young Couple</h5>
                            <a class=\"shop_now_btn\" href=\"#\">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"special_offer_item2\">
                        <img class=\"img-fluid\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/feature-add/special-offer-2.jpg    "), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"hover_text\">
                            <h5>girls bag</h5>
                            <a class=\"shop_now_btn\" href=\"#\">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Special Offer Area =================-->

    <!--================Latest Product isotope Area =================-->
    <section class=\"fillter_latest_product\">
        <div class=\"container\">
            <div class=\"single_c_title\">
                <h2>Our Latest Product</h2>
            </div>
            <div class=\"fillter_l_p_inner\">
                <ul class=\"fillter_l_p\">
                    <li class=\"active\" data-filter=\"*\"><a href=\"#\">men's</a></li>
                    <li data-filter=\".woman\"><a href=\"#\">Woman</a></li>
                    <li data-filter=\".acc\"><a href=\"#\">Accessories</a></li>
                    <li data-filter=\".shoes\"><a href=\"#\">Shoes</a></li>
                    <li data-filter=\".bags\"><a href=\"#\">Bags</a></li>
                </ul>
                <div class=\"row isotope_l_p_inner\">
                    <div class=\"col-lg-3 col-md-4 col-sm-6 woman bags\">
                        <div class=\"l_product_item\">
                            <div class=\"l_p_img\">
                                <img class=\"img-fluid\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/l-product-1.jpg    "), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"l_p_text\">
                                <ul>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                    <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                </ul>
                                <h4>Womens Libero</h4>
                                <h5><del>\$45.50</del>  \$40</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6 acc shoes\">
                        <div class=\"l_product_item\">
                            <div class=\"l_p_img\">
                                <img class=\"img-fluid\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/l-product-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"l_p_text\">
                                <ul>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                    <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                </ul>
                                <h4>Womens Libero</h4>
                                <h5><del>\$45.50</del>  \$40</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6 woman shoes\">
                        <div class=\"l_product_item\">
                            <div class=\"l_p_img\">
                                <img class=\"img-fluid\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/l-product-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"l_p_text\">
                                <ul>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                    <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                </ul>
                                <h4>Womens Libero</h4>
                                <h5><del>\$45.50</del>  \$40</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6 woman shoes\">
                        <div class=\"l_product_item\">
                            <div class=\"l_p_img\">
                                <img class=\"img-fluid\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/l-product-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"l_p_text\">
                                <ul>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                    <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                </ul>
                                <h4>Womens Libero</h4>
                                <h5><del>\$45.50</del>  \$40</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6 woman shoes\">
                        <div class=\"l_product_item\">
                            <div class=\"l_p_img\">
                                <img class=\"img-fluid\" src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/l-product-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"l_p_text\">
                                <ul>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                    <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                </ul>
                                <h4>Womens Libero</h4>
                                <h5><del>\$45.50</del>  \$40</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6 acc shoes bags\">
                        <div class=\"l_product_item\">
                            <div class=\"l_p_img\">
                                <img class=\"img-fluid\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/l-product-6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"l_p_text\">
                                <ul>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                    <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                </ul>
                                <h4>Womens Libero</h4>
                                <h5><del>\$45.50</del>  \$40</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6 acc bags\">
                        <div class=\"l_product_item\">
                            <div class=\"l_p_img\">
                                <img class=\"img-fluid\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/l-product-7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"l_p_text\">
                                <ul>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                    <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                </ul>
                                <h4>Womens Libero</h4>
                                <h5><del>\$45.50</del>  \$40</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6 acc bags\">
                        <div class=\"l_product_item\">
                            <div class=\"l_p_img\">
                                <img class=\"img-fluid\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/l-product-8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <div class=\"l_p_text\">
                                <ul>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                    <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                </ul>
                                <h4>Womens Libero</h4>
                                <h5><del>\$45.50</del>  \$40</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Latest Product isotope Area =================-->

    <!--================Product_listing Area =================-->
    <section class=\"product_listing_area\">
        <div class=\"container\">
            <div class=\"row p_listing_inner\">
                <div class=\"col-lg-4\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-sm-8\">
                            <div class=\"p_list_text\">
                                <h3>Men</h3>
                                <ul>
                                    <li><a href=\"/products\">Down Jackets</a></li>
                                    <li><a href=\"#\">Hoodies</a></li>
                                    <li><a href=\"#\">Suits</a></li>
                                    <li><a href=\"#\">Jeans</a></li>
                                    <li><a href=\"#\">Casual Pants</a></li>
                                    <li><a href=\"#\">Sunglass</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-sm-4\">
                            <div class=\"p_list_img\">
                                <img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/p-categories-list/product-l-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-sm-8\">
                            <div class=\"p_list_text\">
                                <h3>Women</h3>
                                <ul>
                                    <li><a href=\"#\">Down Jackets</a></li>
                                    <li><a href=\"#\">Hoodies</a></li>
                                    <li><a href=\"#\">Suits</a></li>
                                    <li><a href=\"#\">Jeans</a></li>
                                    <li><a href=\"#\">Casual Pants</a></li>
                                    <li><a href=\"#\">Sunglass</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-sm-4\">
                            <div class=\"p_list_img\">
                                <img src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/p-categories-list/product-l-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-sm-8\">
                            <div class=\"p_list_text\">
                                <h3>Accessories</h3>
                                <ul>
                                    <li><a href=\"#\">Down Jackets</a></li>
                                    <li><a href=\"#\">Hoodies</a></li>
                                    <li><a href=\"#\">Suits</a></li>
                                    <li><a href=\"#\">Jeans</a></li>
                                    <li><a href=\"#\">Casual Pants</a></li>
                                    <li><a href=\"#\">Sunglass</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-sm-4\">
                            <div class=\"p_list_img\">
                                <img src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/p-categories-list/product-l-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Product_listing Area =================-->

    <!--================Featured Product Area =================-->
    <section class=\"feature_product_area\">
        <div class=\"container\">
            <div class=\"f_p_inner\">
                <div class=\"row\">
                    <div class=\"col-lg-3\">
                        <div class=\"f_product_left\">
                            <div class=\"s_m_title\">
                                <h2>Featured Products</h2>
                            </div>
                            <div class=\"f_product_inner\">
                                <div class=\"media\">
                                    <div class=\"d-flex\">
                                        <img src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/featured-product/f-p-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"media-body\">
                                        <h4>Oxford Shirt</h4>
                                        <h5>\$45.05</h5>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"d-flex\">
                                        <img src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/featured-product/f-p-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"media-body\">
                                        <h4>Puffer Jacket</h4>
                                        <h5>\$45.05</h5>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"d-flex\">
                                        <img src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/featured-product/f-p-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"media-body\">
                                        <h4>Leather Bag</h4>
                                        <h5>\$45.05</h5>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"d-flex\">
                                        <img src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/featured-product/f-p-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"media-body\">
                                        <h4>Casual Shoes</h4>
                                        <h5>\$45.05</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-9\">
                        <div class=\"fillter_slider_inner\">
                            <ul class=\"portfolio_filter\">
                                <li class=\"active\" data-filter=\"*\"><a href=\"#\">men's</a></li>
                                <li data-filter=\".woman\"><a href=\"#\">Woman</a></li>
                                <li data-filter=\".shoes\"><a href=\"#\">Shoes</a></li>
                                <li data-filter=\".bags\"><a href=\"#\">Bags</a></li>
                            </ul>
                            <div class=\"fillter_slider owl-carousel\">
                                <div class=\"item shoes\">
                                    <div class=\"fillter_product_item bags\">
                                        <div class=\"f_p_img\">
                                            <img src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/fillter-product/f-product-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <h5 class=\"sale\">Sale</h5>
                                        </div>
                                        <div class=\"f_p_text\">
                                            <h5>Nike Max Air Vapor Power</h5>
                                            <h4>\$45.05</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item woman shoes bags\">
                                    <div class=\"fillter_product_item\">
                                        <div class=\"f_p_img\">
                                            <img src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/fillter-product/f-product-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <h5 class=\"new\">New</h5>
                                        </div>
                                        <div class=\"f_p_text\">
                                            <h5>Fossil Watch</h5>
                                            <h4><del>\$250</del> \$110</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item woman shoes\">
                                    <div class=\"fillter_product_item\">
                                        <div class=\"f_p_img\">
                                            <img src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/fillter-product/f-product-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <h5 class=\"discount\">-10%</h5>
                                        </div>
                                        <div class=\"f_p_text\">
                                            <h5>High Heel</h5>
                                            <h4>\$45.05</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item shoes\">
                                    <div class=\"fillter_product_item bags\">
                                        <div class=\"f_p_img\">
                                            <img src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/fillter-product/f-product-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <h5 class=\"sale\">Sale</h5>
                                        </div>
                                        <div class=\"f_p_text\">
                                            <h5>Nike Max Air Vapor Power</h5>
                                            <h4>\$45.05</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item woman shoes bags\">
                                    <div class=\"fillter_product_item\">
                                        <div class=\"f_p_img\">
                                            <img src=\"";
        // line 435
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/fillter-product/f-product-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <h5 class=\"new\">New</h5>
                                        </div>
                                        <div class=\"f_p_text\">
                                            <h5>Fossil Watch</h5>
                                            <h4><del>\$250</del> \$110</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item woman shoes\">
                                    <div class=\"fillter_product_item\">
                                        <div class=\"f_p_img\">
                                            <img src=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/fillter-product/f-product-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <h5 class=\"discount\">-10%</h5>
                                        </div>
                                        <div class=\"f_p_text\">
                                            <h5>High Heel</h5>
                                            <h4>\$45.05</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item shoes\">
                                    <div class=\"fillter_product_item bags\">
                                        <div class=\"f_p_img\">
                                            <img src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/fillter-product/f-product-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <h5 class=\"sale\">Sale</h5>
                                        </div>
                                        <div class=\"f_p_text\">
                                            <h5>Nike Max Air Vapor Power</h5>
                                            <h4>\$45.05</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item woman shoes bags\">
                                    <div class=\"fillter_product_item\">
                                        <div class=\"f_p_img\">
                                            <img src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/fillter-product/f-product-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <h5 class=\"new\">New</h5>
                                        </div>
                                        <div class=\"f_p_text\">
                                            <h5>Fossil Watch</h5>
                                            <h4><del>\$250</del> \$110</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item woman shoes\">
                                    <div class=\"fillter_product_item\">
                                        <div class=\"f_p_img\">
                                            <img src=\"";
        // line 483
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/product/fillter-product/f-product-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                            <h5 class=\"discount\">-10%</h5>
                                        </div>
                                        <div class=\"f_p_text\">
                                            <h5>High Heel</h5>
                                            <h4>\$45.05</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Featured Product Area =================-->

    <!--================Form Blog Area =================-->
    <section class=\"from_blog_area\">
        <div class=\"container\">
            <div class=\"from_blog_inner\">
                <div class=\"c_main_title\">
                    <h2>From The Blog</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-sm-6\">
                        <div class=\"from_blog_item\">
                            <img class=\"img-fluid\" src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/blog/from-blog/f-blog-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"f_blog_text\">
                                <h5>fashion</h5>
                                <p>Neque porro quisquam est qui dolorem ipsum</p>
                                <h6>21.09.2017</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6\">
                        <div class=\"from_blog_item\">
                            <img class=\"img-fluid\" src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/blog/from-blog/f-blog-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"f_blog_text\">
                                <h5>fashion</h5>
                                <p>Neque porro quisquam est qui dolorem ipsum</p>
                                <h6>21.09.2017</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6\">
                        <div class=\"from_blog_item\">
                            <img class=\"img-fluid\" src=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/blog/from-blog/f-blog-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            <div class=\"f_blog_text\">
                                <h5>fashion</h5>
                                <p>Neque porro quisquam est qui dolorem ipsum</p>
                                <h6>21.09.2017</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Form Blog Area =================-->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  681 => 531,  668 => 521,  655 => 511,  624 => 483,  609 => 471,  594 => 459,  579 => 447,  564 => 435,  549 => 423,  534 => 411,  519 => 399,  504 => 387,  479 => 365,  467 => 356,  455 => 347,  443 => 338,  417 => 315,  392 => 293,  367 => 271,  324 => 231,  305 => 215,  286 => 199,  267 => 183,  248 => 167,  229 => 151,  210 => 135,  191 => 119,  158 => 89,  145 => 79,  121 => 58,  106 => 46,  91 => 34,  76 => 22,  61 => 10,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

    <!--================Home Carousel Area =================-->
    <section class=\"home_carousel_area\">
        <div class=\"home_carousel_slider owl-carousel\">
            <div class=\"item\">
                <div class=\"h_carousel_item\">
                    <img src=\"{{ asset('assets/img/home-carousel/home-c-1.jpg') }}\" alt=\"\">
                    <div class=\"carousel_hover\">
                        <h3>mens bag</h3>
                        <h4>We feature the best professional bags </h4>
                        <h5>Including:</h5>
                        <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                        <a class=\"discover_btn\" href=\"#\">discover now</a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"h_carousel_item\">
                    <img src=\"{{ asset('assets/img/home-carousel/home-c-2.jpg') }}\" alt=\"\">
                    <div class=\"carousel_hover\">
                        <h3>mens bag</h3>
                        <h4>We feature the best professional bags </h4>
                        <h5>Including:</h5>
                        <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                        <a class=\"discover_btn\" href=\"#\">discover now</a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"h_carousel_item\">
                    <img src=\"{{ asset('assets/img/home-carousel/home-c-3.jpg') }}\" alt=\"\">
                    <div class=\"carousel_hover\">
                        <h3>mens bag</h3>
                        <h4>We feature the best professional bags </h4>
                        <h5>Including:</h5>
                        <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                        <a class=\"discover_btn\" href=\"#\">discover now</a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"h_carousel_item\">
                    <img src=\"{{ asset('assets/img/home-carousel/home-c-4.jpg') }}\" alt=\"\">
                    <div class=\"carousel_hover\">
                        <h3>mens bag</h3>
                        <h4>We feature the best professional bags </h4>
                        <h5>Including:</h5>
                        <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                        <a class=\"discover_btn\" href=\"#\">discover now</a>
                    </div>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"h_carousel_item\">
                    <img src=\"{{ asset('assets/img/home-carousel/home-c-5.jpg') }}\" alt=\"\">
                    <div class=\"carousel_hover\">
                        <h3>mens bag</h3>
                        <h4>We feature the best professional bags </h4>
                        <h5>Including:</h5>
                        <p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
                        <a class=\"discover_btn\" href=\"#\">discover now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Carousel Area =================-->


    <!--================Special Offer Area =================-->
    <section class=\"special_offer_area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"special_offer_item\">
                        <img class=\"img-fluid\" src=\"{{ asset('assets/img/feature-add/special-offer-1.jpg') }}\" alt=\"\">
                        <div class=\"hover_text\">
                            <h4>Special Offer</h4>
                            <h5>Young Couple</h5>
                            <a class=\"shop_now_btn\" href=\"#\">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"special_offer_item2\">
                        <img class=\"img-fluid\" src=\"{{ asset('assets/img/feature-add/special-offer-2.jpg    ') }}\" alt=\"\">
                        <div class=\"hover_text\">
                            <h5>girls bag</h5>
                            <a class=\"shop_now_btn\" href=\"#\">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Special Offer Area =================-->

    <!--================Latest Product isotope Area =================-->
    <section class=\"fillter_latest_product\">
        <div class=\"container\">
            <div class=\"single_c_title\">
                <h2>Our Latest Product</h2>
            </div>
            <div class=\"fillter_l_p_inner\">
                <ul class=\"fillter_l_p\">
                    <li class=\"active\" data-filter=\"*\"><a href=\"#\">men's</a></li>
                    <li data-filter=\".woman\"><a href=\"#\">Woman</a></li>
                    <li data-filter=\".acc\"><a href=\"#\">Accessories</a></li>
                    <li data-filter=\".shoes\"><a href=\"#\">Shoes</a></li>
                    <li data-filter=\".bags\"><a href=\"#\">Bags</a></li>
                </ul>
                <div class=\"row isotope_l_p_inner\">
                    <div class=\"col-lg-3 col-md-4 col-sm-6 woman bags\">
                        <div class=\"l_product_item\">
                            <div class=\"l_p_img\">
                                <img class=\"img-fluid\" src=\"{{ asset('assets/img/product/l-product-1.jpg    ') }}\" alt=\"\">
                            </div>
                            <div class=\"l_p_text\">
                                <ul>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                    <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                </ul>
                                <h4>Womens Libero</h4>
                                <h5><del>\$45.50</del>  \$40</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6 acc shoes\">
                        <div class=\"l_product_item\">
                            <div class=\"l_p_img\">
                                <img class=\"img-fluid\" src=\"{{ asset('assets/img/product/l-product-2.jpg') }}\" alt=\"\">
                            </div>
                            <div class=\"l_p_text\">
                                <ul>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                    <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                </ul>
                                <h4>Womens Libero</h4>
                                <h5><del>\$45.50</del>  \$40</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6 woman shoes\">
                        <div class=\"l_product_item\">
                            <div class=\"l_p_img\">
                                <img class=\"img-fluid\" src=\"{{ asset('assets/img/product/l-product-3.jpg') }}\" alt=\"\">
                            </div>
                            <div class=\"l_p_text\">
                                <ul>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                    <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                </ul>
                                <h4>Womens Libero</h4>
                                <h5><del>\$45.50</del>  \$40</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6 woman shoes\">
                        <div class=\"l_product_item\">
                            <div class=\"l_p_img\">
                                <img class=\"img-fluid\" src=\"{{ asset('assets/img/product/l-product-4.jpg') }}\" alt=\"\">
                            </div>
                            <div class=\"l_p_text\">
                                <ul>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                    <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                </ul>
                                <h4>Womens Libero</h4>
                                <h5><del>\$45.50</del>  \$40</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6 woman shoes\">
                        <div class=\"l_product_item\">
                            <div class=\"l_p_img\">
                                <img class=\"img-fluid\" src=\"{{ asset('assets/img/product/l-product-5.jpg') }}\" alt=\"\">
                            </div>
                            <div class=\"l_p_text\">
                                <ul>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                    <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                </ul>
                                <h4>Womens Libero</h4>
                                <h5><del>\$45.50</del>  \$40</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6 acc shoes bags\">
                        <div class=\"l_product_item\">
                            <div class=\"l_p_img\">
                                <img class=\"img-fluid\" src=\"{{ asset('assets/img/product/l-product-6.jpg') }}\" alt=\"\">
                            </div>
                            <div class=\"l_p_text\">
                                <ul>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                    <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                </ul>
                                <h4>Womens Libero</h4>
                                <h5><del>\$45.50</del>  \$40</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6 acc bags\">
                        <div class=\"l_product_item\">
                            <div class=\"l_p_img\">
                                <img class=\"img-fluid\" src=\"{{ asset('assets/img/product/l-product-7.jpg') }}\" alt=\"\">
                            </div>
                            <div class=\"l_p_text\">
                                <ul>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                    <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                </ul>
                                <h4>Womens Libero</h4>
                                <h5><del>\$45.50</del>  \$40</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4 col-sm-6 acc bags\">
                        <div class=\"l_product_item\">
                            <div class=\"l_p_img\">
                                <img class=\"img-fluid\" src=\"{{ asset('assets/img/product/l-product-8.jpg') }}\" alt=\"\">
                            </div>
                            <div class=\"l_p_text\">
                                <ul>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                    <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                    <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                </ul>
                                <h4>Womens Libero</h4>
                                <h5><del>\$45.50</del>  \$40</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Latest Product isotope Area =================-->

    <!--================Product_listing Area =================-->
    <section class=\"product_listing_area\">
        <div class=\"container\">
            <div class=\"row p_listing_inner\">
                <div class=\"col-lg-4\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-sm-8\">
                            <div class=\"p_list_text\">
                                <h3>Men</h3>
                                <ul>
                                    <li><a href=\"/products\">Down Jackets</a></li>
                                    <li><a href=\"#\">Hoodies</a></li>
                                    <li><a href=\"#\">Suits</a></li>
                                    <li><a href=\"#\">Jeans</a></li>
                                    <li><a href=\"#\">Casual Pants</a></li>
                                    <li><a href=\"#\">Sunglass</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-sm-4\">
                            <div class=\"p_list_img\">
                                <img src=\"{{ asset('assets/img/product/p-categories-list/product-l-1.jpg') }}\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-sm-8\">
                            <div class=\"p_list_text\">
                                <h3>Women</h3>
                                <ul>
                                    <li><a href=\"#\">Down Jackets</a></li>
                                    <li><a href=\"#\">Hoodies</a></li>
                                    <li><a href=\"#\">Suits</a></li>
                                    <li><a href=\"#\">Jeans</a></li>
                                    <li><a href=\"#\">Casual Pants</a></li>
                                    <li><a href=\"#\">Sunglass</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-sm-4\">
                            <div class=\"p_list_img\">
                                <img src=\"{{ asset('assets/img/product/p-categories-list/product-l-2.jpg') }}\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-sm-8\">
                            <div class=\"p_list_text\">
                                <h3>Accessories</h3>
                                <ul>
                                    <li><a href=\"#\">Down Jackets</a></li>
                                    <li><a href=\"#\">Hoodies</a></li>
                                    <li><a href=\"#\">Suits</a></li>
                                    <li><a href=\"#\">Jeans</a></li>
                                    <li><a href=\"#\">Casual Pants</a></li>
                                    <li><a href=\"#\">Sunglass</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-sm-4\">
                            <div class=\"p_list_img\">
                                <img src=\"{{ asset('assets/img/product/p-categories-list/product-l-3.jpg') }}\" alt=\"\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Product_listing Area =================-->

    <!--================Featured Product Area =================-->
    <section class=\"feature_product_area\">
        <div class=\"container\">
            <div class=\"f_p_inner\">
                <div class=\"row\">
                    <div class=\"col-lg-3\">
                        <div class=\"f_product_left\">
                            <div class=\"s_m_title\">
                                <h2>Featured Products</h2>
                            </div>
                            <div class=\"f_product_inner\">
                                <div class=\"media\">
                                    <div class=\"d-flex\">
                                        <img src=\"{{ asset('assets/img/product/featured-product/f-p-1.jpg') }}\" alt=\"\">
                                    </div>
                                    <div class=\"media-body\">
                                        <h4>Oxford Shirt</h4>
                                        <h5>\$45.05</h5>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"d-flex\">
                                        <img src=\"{{ asset('assets/img/product/featured-product/f-p-2.jpg') }}\" alt=\"\">
                                    </div>
                                    <div class=\"media-body\">
                                        <h4>Puffer Jacket</h4>
                                        <h5>\$45.05</h5>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"d-flex\">
                                        <img src=\"{{ asset('assets/img/product/featured-product/f-p-3.jpg') }}\" alt=\"\">
                                    </div>
                                    <div class=\"media-body\">
                                        <h4>Leather Bag</h4>
                                        <h5>\$45.05</h5>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"d-flex\">
                                        <img src=\"{{ asset('assets/img/product/featured-product/f-p-4.jpg') }}\" alt=\"\">
                                    </div>
                                    <div class=\"media-body\">
                                        <h4>Casual Shoes</h4>
                                        <h5>\$45.05</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-9\">
                        <div class=\"fillter_slider_inner\">
                            <ul class=\"portfolio_filter\">
                                <li class=\"active\" data-filter=\"*\"><a href=\"#\">men's</a></li>
                                <li data-filter=\".woman\"><a href=\"#\">Woman</a></li>
                                <li data-filter=\".shoes\"><a href=\"#\">Shoes</a></li>
                                <li data-filter=\".bags\"><a href=\"#\">Bags</a></li>
                            </ul>
                            <div class=\"fillter_slider owl-carousel\">
                                <div class=\"item shoes\">
                                    <div class=\"fillter_product_item bags\">
                                        <div class=\"f_p_img\">
                                            <img src=\"{{ asset('assets/img/product/fillter-product/f-product-1.jpg') }}\" alt=\"\">
                                            <h5 class=\"sale\">Sale</h5>
                                        </div>
                                        <div class=\"f_p_text\">
                                            <h5>Nike Max Air Vapor Power</h5>
                                            <h4>\$45.05</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item woman shoes bags\">
                                    <div class=\"fillter_product_item\">
                                        <div class=\"f_p_img\">
                                            <img src=\"{{ asset('assets/img/product/fillter-product/f-product-2.jpg') }}\" alt=\"\">
                                            <h5 class=\"new\">New</h5>
                                        </div>
                                        <div class=\"f_p_text\">
                                            <h5>Fossil Watch</h5>
                                            <h4><del>\$250</del> \$110</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item woman shoes\">
                                    <div class=\"fillter_product_item\">
                                        <div class=\"f_p_img\">
                                            <img src=\"{{ asset('assets/img/product/fillter-product/f-product-3.jpg') }}\" alt=\"\">
                                            <h5 class=\"discount\">-10%</h5>
                                        </div>
                                        <div class=\"f_p_text\">
                                            <h5>High Heel</h5>
                                            <h4>\$45.05</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item shoes\">
                                    <div class=\"fillter_product_item bags\">
                                        <div class=\"f_p_img\">
                                            <img src=\"{{ asset('assets/img/product/fillter-product/f-product-1.jpg') }}\" alt=\"\">
                                            <h5 class=\"sale\">Sale</h5>
                                        </div>
                                        <div class=\"f_p_text\">
                                            <h5>Nike Max Air Vapor Power</h5>
                                            <h4>\$45.05</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item woman shoes bags\">
                                    <div class=\"fillter_product_item\">
                                        <div class=\"f_p_img\">
                                            <img src=\"{{ asset('assets/img/product/fillter-product/f-product-2.jpg') }}\" alt=\"\">
                                            <h5 class=\"new\">New</h5>
                                        </div>
                                        <div class=\"f_p_text\">
                                            <h5>Fossil Watch</h5>
                                            <h4><del>\$250</del> \$110</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item woman shoes\">
                                    <div class=\"fillter_product_item\">
                                        <div class=\"f_p_img\">
                                            <img src=\"{{ asset('assets/img/product/fillter-product/f-product-3.jpg') }}\" alt=\"\">
                                            <h5 class=\"discount\">-10%</h5>
                                        </div>
                                        <div class=\"f_p_text\">
                                            <h5>High Heel</h5>
                                            <h4>\$45.05</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item shoes\">
                                    <div class=\"fillter_product_item bags\">
                                        <div class=\"f_p_img\">
                                            <img src=\"{{ asset('assets/img/product/fillter-product/f-product-1.jpg') }}\" alt=\"\">
                                            <h5 class=\"sale\">Sale</h5>
                                        </div>
                                        <div class=\"f_p_text\">
                                            <h5>Nike Max Air Vapor Power</h5>
                                            <h4>\$45.05</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item woman shoes bags\">
                                    <div class=\"fillter_product_item\">
                                        <div class=\"f_p_img\">
                                            <img src=\"{{ asset('assets/img/product/fillter-product/f-product-2.jpg') }}\" alt=\"\">
                                            <h5 class=\"new\">New</h5>
                                        </div>
                                        <div class=\"f_p_text\">
                                            <h5>Fossil Watch</h5>
                                            <h4><del>\$250</del> \$110</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"item woman shoes\">
                                    <div class=\"fillter_product_item\">
                                        <div class=\"f_p_img\">
                                            <img src=\"{{ asset('assets/img/product/fillter-product/f-product-3.jpg') }}\" alt=\"\">
                                            <h5 class=\"discount\">-10%</h5>
                                        </div>
                                        <div class=\"f_p_text\">
                                            <h5>High Heel</h5>
                                            <h4>\$45.05</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Featured Product Area =================-->

    <!--================Form Blog Area =================-->
    <section class=\"from_blog_area\">
        <div class=\"container\">
            <div class=\"from_blog_inner\">
                <div class=\"c_main_title\">
                    <h2>From The Blog</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-lg-4 col-sm-6\">
                        <div class=\"from_blog_item\">
                            <img class=\"img-fluid\" src=\"{{ asset('assets/img/blog/from-blog/f-blog-1.jpg') }}\" alt=\"\">
                            <div class=\"f_blog_text\">
                                <h5>fashion</h5>
                                <p>Neque porro quisquam est qui dolorem ipsum</p>
                                <h6>21.09.2017</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6\">
                        <div class=\"from_blog_item\">
                            <img class=\"img-fluid\" src=\"{{ asset('assets/img/blog/from-blog/f-blog-2.jpg') }}\" alt=\"\">
                            <div class=\"f_blog_text\">
                                <h5>fashion</h5>
                                <p>Neque porro quisquam est qui dolorem ipsum</p>
                                <h6>21.09.2017</h6>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-sm-6\">
                        <div class=\"from_blog_item\">
                            <img class=\"img-fluid\" src=\"{{ asset('assets/img/blog/from-blog/f-blog-3.jpg') }}\" alt=\"\">
                            <div class=\"f_blog_text\">
                                <h5>fashion</h5>
                                <p>Neque porro quisquam est qui dolorem ipsum</p>
                                <h6>21.09.2017</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Form Blog Area =================-->


{% endblock %}", "home/index.html.twig", "/var/www/html/templates/home/index.html.twig");
    }
}
