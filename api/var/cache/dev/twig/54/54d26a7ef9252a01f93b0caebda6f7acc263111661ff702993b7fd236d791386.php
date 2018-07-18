<?php

/* base.html.twig */
class __TwigTemplate_4c7ef4825dbb52b1c5f07797ddcf35809d6a719de46e4b93927cc13bd4ec88bb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>Store</title>

        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    </head>
    <body>

        <!--================Menu Area =================-->
        <header class=\"shop_header_area carousel_menu_area\">
            <div class=\"carousel_top_header row m0\">
                <div class=\"container\">
                    <div class=\"carousel_top_h_inner\">
                        <div class=\"float-md-left\">
                            <div class=\"top_header_left\">
                                <div class=\"selector\">
                                    <select class=\"language_drop\" name=\"countries\" id=\"countries\" style=\"width:300px;\">
                                        <option value='yt' data-image=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/flag-1.png"), "html", null, true);
        echo "\" data-imagecss=\"flag yt\" data-title=\"English\">English</option>
                                        <option value='yu' data-image=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/flag-1.png"), "html", null, true);
        echo "\" data-imagecss=\"flag yu\" data-title=\"Bangladesh\">Bangla</option>
                                        <option value='yt' data-image=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/flag-1.png"), "html", null, true);
        echo "\" data-imagecss=\"flag yt\" data-title=\"English\">English</option>
                                        <option value='yu' data-image=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/icon/flag-1.png"), "html", null, true);
        echo "\" data-imagecss=\"flag yu\" data-title=\"Bangladesh\">Bangla</option>
                                    </select>
                                </div>
                                <select class=\"selectpicker usd_select\">
                                    <option>USD</option>
                                    <option>\$</option>
                                    <option>\$</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"float-md-right\">
                            <div class=\"top_header_middle\">
                                <a href=\"#\"><i class=\"fa fa-phone\"></i> Call Us: <span>+84 987 654 321</span></a>
                                <a href=\"#\"><i class=\"fa fa-envelope\"></i> Email: <span>support@yourdomain.com</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel_menu_inner\">
                <div class=\"container\">
                    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                        <a class=\"navbar-brand\" href=\"/\"><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>

                        </button>

                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav mr-auto\">
                                <li class=\"nav-item dropdown submenu active\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Home <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"index.html\">Home Simple</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"home-carousel.html\">Home Carousel</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"home-fullwidth.html\">Home Full Width</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"home-parallax.html\">Home Parallax</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"home-sidebar.html\">Home Boxed</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"home-fixed-menu.html\">Home Fixed</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item dropdown submenu\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Pages <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"compare.html\">Compare</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"checkout.html\">Checkout Method</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"register.html\">Checkout Register</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"track.html\">Track</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"login.html\">Login</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"404.html\">404</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item dropdown submenu\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Shop <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"categories-no-sidebar-2column.html\">Prodcut No Sidebar</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"categories-no-sidebar-3column.html\">Prodcut Two Column</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"categories-no-sidebar-4column.html\">Product Grid</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"categories-left-sidebar.html\">Categories Left Sidebar</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"categories-right-sidebar.html\">Categories Right Sidebar</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"categories-grid-left-sidebar.html\">Categories Grid Sidebar</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"product-details.html\">Prodcut Details 01</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"product-details2.html\">Prodcut Details 02</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"product-details3.html\">Prodcut Details 03</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"shopping-cart.html\">Shopping Cart 01</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"shopping-cart2.html\">Shopping Cart 02</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"empty-cart.html\">Empty Cart</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Blog</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">lookbook</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li>
                            </ul>
                            <ul class=\"navbar-nav justify-content-end\">
                                <li class=\"search_icon\"><a href=\"#\"><i class=\"icon-magnifier icons\"></i></a></li>
                                <li class=\"user_icon\"><a href=\"#\"><i class=\"icon-user icons\"></i></a></li>
                                <li class=\"cart_cart\"><a href=\"/cart\"><i class=\"icon-handbag icons\"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--================End Menu Area =================-->

        ";
        // line 147
        $this->displayBlock('body', $context, $blocks);
        // line 148
        echo "
        <!--================Footer Area =================-->
        <footer class=\"footer_area\">
            <div class=\"container\">
                <div class=\"footer_widgets\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-4 col-6\">
                            <aside class=\"f_widget f_about_widget\">
                                <img src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                                <p>Persuit is a Premium PSD Template. Best choice for your online store. Let purchase it to enjoy now</p>
                                <h6>Social:</h6>
                                <ul>
                                    <li><a href=\"#\"><i class=\"social_facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"social_twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"social_pinterest\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"social_instagram\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"social_youtube\"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class=\"col-lg-2 col-md-4 col-6\">
                            <aside class=\"f_widget link_widget f_info_widget\">
                                <div class=\"f_w_title\">
                                    <h3>Information</h3>
                                </div>
                                <ul>
                                    <li><a href=\"#\">About us</a></li>
                                    <li><a href=\"#\">Delivery information</a></li>
                                    <li><a href=\"#\">Terms & Conditions</a></li>
                                    <li><a href=\"#\">Help Center</a></li>
                                    <li><a href=\"#\">Returns & Refunds</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class=\"col-lg-2 col-md-4 col-6\">
                            <aside class=\"f_widget link_widget f_service_widget\">
                                <div class=\"f_w_title\">
                                    <h3>Customer Service</h3>
                                </div>
                                <ul>
                                    <li><a href=\"#\">My account</a></li>
                                    <li><a href=\"#\">Ordr History</a></li>
                                    <li><a href=\"#\">Wish List</a></li>
                                    <li><a href=\"#\">Newsletter</a></li>
                                    <li><a href=\"#\">Contact Us</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class=\"col-lg-2 col-md-4 col-6\">
                            <aside class=\"f_widget link_widget f_extra_widget\">
                                <div class=\"f_w_title\">
                                    <h3>Extras</h3>
                                </div>
                                <ul>
                                    <li><a href=\"#\">Brands</a></li>
                                    <li><a href=\"#\">Gift Vouchers</a></li>
                                    <li><a href=\"#\">Affiliates</a></li>
                                    <li><a href=\"#\">Specials</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class=\"col-lg-2 col-md-4 col-6\">
                            <aside class=\"f_widget link_widget f_account_widget\">
                                <div class=\"f_w_title\">
                                    <h3>My Account</h3>
                                </div>
                                <ul>
                                    <li><a href=\"#\">My account</a></li>
                                    <li><a href=\"#\">Ordr History</a></li>
                                    <li><a href=\"#\">Wish List</a></li>
                                    <li><a href=\"#\">Newsletter</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class=\"footer_copyright\">
                    <h5>© <script>document.write(new Date().getFullYear());</script> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </h5>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->

        ";
        // line 234
        $this->displayBlock('javascripts', $context, $blocks);
        // line 265
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/fav-icon.png"), "html", null, true);
        echo "\" type=\"image/x-icon\" />
            <!-- Icon css link -->
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/line-icon/css/simple-line-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/elegant-icon/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <!-- Bootstrap -->
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Rev slider css -->
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/css/settings.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/css/layers.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/css/navigation.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Extra plugin css -->
            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/owl-carousel/owl.carousel.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-selector/css/bootstrap-select.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://oss.maxcdn.com/respond/1.4.2/respond.min.js"), "html", null, true);
        echo "\"></script>
            <![endif]-->
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 147
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 234
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 235
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/main.js"), "html", null, true);
        echo "\"></script>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/popper.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Rev slider js -->
            <script src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Extra plugin css -->
            <script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/counterup/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/owl-carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/bootstrap-selector/js/bootstrap-select.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/image-dropdown/jquery.dd.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/smoothscroll.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/isotope/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/magnify-popup/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/vertical-slider/js/jQuery.verticalCarousel.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendors/jquery-ui/jquery-ui.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/theme.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 263,  483 => 261,  479 => 260,  475 => 259,  471 => 258,  467 => 257,  463 => 256,  459 => 255,  455 => 254,  451 => 253,  447 => 252,  443 => 251,  438 => 249,  434 => 248,  430 => 247,  426 => 246,  422 => 245,  418 => 244,  414 => 243,  410 => 242,  405 => 240,  401 => 239,  396 => 237,  390 => 235,  381 => 234,  364 => 147,  351 => 35,  347 => 34,  339 => 29,  335 => 28,  330 => 26,  326 => 25,  320 => 22,  316 => 21,  312 => 20,  306 => 17,  301 => 15,  297 => 14,  293 => 13,  287 => 11,  278 => 10,  266 => 265,  264 => 234,  183 => 156,  173 => 148,  171 => 147,  99 => 78,  74 => 56,  70 => 55,  66 => 54,  62 => 53,  45 => 38,  43 => 10,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>Store</title>

        {% block stylesheets %}
            <link rel=\"icon\" href=\"{{ asset('assets/img/fav-icon.png') }}\" type=\"image/x-icon\" />
            <!-- Icon css link -->
            <link href=\"{{ asset('assets/css/font-awesome.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/vendors/line-icon/css/simple-line-icons.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/vendors/elegant-icon/style.css') }}\" rel=\"stylesheet\">
            <!-- Bootstrap -->
            <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">

            <!-- Rev slider css -->
            <link href=\"{{ asset('assets/vendors/revolution/css/settings.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/vendors/revolution/css/layers.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/vendors/revolution/css/navigation.css') }}\" rel=\"stylesheet\">

            <!-- Extra plugin css -->
            <link href=\"{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/vendors/bootstrap-selector/css/bootstrap-select.min.css') }}\" rel=\"stylesheet\">

            <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
            <link href=\"{{ asset('assets/css/responsive.css') }}\" rel=\"stylesheet\">

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src=\"{{ asset('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}\"></script>
                <script src=\"{{ asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}\"></script>
            <![endif]-->
        {% endblock %}

        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    </head>
    <body>

        <!--================Menu Area =================-->
        <header class=\"shop_header_area carousel_menu_area\">
            <div class=\"carousel_top_header row m0\">
                <div class=\"container\">
                    <div class=\"carousel_top_h_inner\">
                        <div class=\"float-md-left\">
                            <div class=\"top_header_left\">
                                <div class=\"selector\">
                                    <select class=\"language_drop\" name=\"countries\" id=\"countries\" style=\"width:300px;\">
                                        <option value='yt' data-image=\"{{ asset('assets/img/icon/flag-1.png') }}\" data-imagecss=\"flag yt\" data-title=\"English\">English</option>
                                        <option value='yu' data-image=\"{{ asset('assets/img/icon/flag-1.png') }}\" data-imagecss=\"flag yu\" data-title=\"Bangladesh\">Bangla</option>
                                        <option value='yt' data-image=\"{{ asset('assets/img/icon/flag-1.png') }}\" data-imagecss=\"flag yt\" data-title=\"English\">English</option>
                                        <option value='yu' data-image=\"{{ asset('assets/img/icon/flag-1.png') }}\" data-imagecss=\"flag yu\" data-title=\"Bangladesh\">Bangla</option>
                                    </select>
                                </div>
                                <select class=\"selectpicker usd_select\">
                                    <option>USD</option>
                                    <option>\$</option>
                                    <option>\$</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"float-md-right\">
                            <div class=\"top_header_middle\">
                                <a href=\"#\"><i class=\"fa fa-phone\"></i> Call Us: <span>+84 987 654 321</span></a>
                                <a href=\"#\"><i class=\"fa fa-envelope\"></i> Email: <span>support@yourdomain.com</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"carousel_menu_inner\">
                <div class=\"container\">
                    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                        <a class=\"navbar-brand\" href=\"/\"><img src=\"{{ asset('assets/img/logo.png') }}\" alt=\"\"></a>
                        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>

                        </button>

                        <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav mr-auto\">
                                <li class=\"nav-item dropdown submenu active\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Home <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"index.html\">Home Simple</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"home-carousel.html\">Home Carousel</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"home-fullwidth.html\">Home Full Width</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"home-parallax.html\">Home Parallax</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"home-sidebar.html\">Home Boxed</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"home-fixed-menu.html\">Home Fixed</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item dropdown submenu\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Pages <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"compare.html\">Compare</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"checkout.html\">Checkout Method</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"register.html\">Checkout Register</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"track.html\">Track</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"login.html\">Login</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"404.html\">404</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item dropdown submenu\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        Shop <i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i>
                                    </a>
                                    <ul class=\"dropdown-menu\">
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"categories-no-sidebar-2column.html\">Prodcut No Sidebar</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"categories-no-sidebar-3column.html\">Prodcut Two Column</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"categories-no-sidebar-4column.html\">Product Grid</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"categories-left-sidebar.html\">Categories Left Sidebar</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"categories-right-sidebar.html\">Categories Right Sidebar</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"categories-grid-left-sidebar.html\">Categories Grid Sidebar</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"product-details.html\">Prodcut Details 01</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"product-details2.html\">Prodcut Details 02</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"product-details3.html\">Prodcut Details 03</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"shopping-cart.html\">Shopping Cart 01</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"shopping-cart2.html\">Shopping Cart 02</a></li>
                                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"empty-cart.html\">Empty Cart</a></li>
                                    </ul>
                                </li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Blog</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">lookbook</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"contact.html\">Contact</a></li>
                            </ul>
                            <ul class=\"navbar-nav justify-content-end\">
                                <li class=\"search_icon\"><a href=\"#\"><i class=\"icon-magnifier icons\"></i></a></li>
                                <li class=\"user_icon\"><a href=\"#\"><i class=\"icon-user icons\"></i></a></li>
                                <li class=\"cart_cart\"><a href=\"/cart\"><i class=\"icon-handbag icons\"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!--================End Menu Area =================-->

        {% block body %}{% endblock %}

        <!--================Footer Area =================-->
        <footer class=\"footer_area\">
            <div class=\"container\">
                <div class=\"footer_widgets\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-4 col-6\">
                            <aside class=\"f_widget f_about_widget\">
                                <img src=\"{{ asset('assets/img/logo.png') }}\" alt=\"\">
                                <p>Persuit is a Premium PSD Template. Best choice for your online store. Let purchase it to enjoy now</p>
                                <h6>Social:</h6>
                                <ul>
                                    <li><a href=\"#\"><i class=\"social_facebook\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"social_twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"social_pinterest\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"social_instagram\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"social_youtube\"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class=\"col-lg-2 col-md-4 col-6\">
                            <aside class=\"f_widget link_widget f_info_widget\">
                                <div class=\"f_w_title\">
                                    <h3>Information</h3>
                                </div>
                                <ul>
                                    <li><a href=\"#\">About us</a></li>
                                    <li><a href=\"#\">Delivery information</a></li>
                                    <li><a href=\"#\">Terms & Conditions</a></li>
                                    <li><a href=\"#\">Help Center</a></li>
                                    <li><a href=\"#\">Returns & Refunds</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class=\"col-lg-2 col-md-4 col-6\">
                            <aside class=\"f_widget link_widget f_service_widget\">
                                <div class=\"f_w_title\">
                                    <h3>Customer Service</h3>
                                </div>
                                <ul>
                                    <li><a href=\"#\">My account</a></li>
                                    <li><a href=\"#\">Ordr History</a></li>
                                    <li><a href=\"#\">Wish List</a></li>
                                    <li><a href=\"#\">Newsletter</a></li>
                                    <li><a href=\"#\">Contact Us</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class=\"col-lg-2 col-md-4 col-6\">
                            <aside class=\"f_widget link_widget f_extra_widget\">
                                <div class=\"f_w_title\">
                                    <h3>Extras</h3>
                                </div>
                                <ul>
                                    <li><a href=\"#\">Brands</a></li>
                                    <li><a href=\"#\">Gift Vouchers</a></li>
                                    <li><a href=\"#\">Affiliates</a></li>
                                    <li><a href=\"#\">Specials</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class=\"col-lg-2 col-md-4 col-6\">
                            <aside class=\"f_widget link_widget f_account_widget\">
                                <div class=\"f_w_title\">
                                    <h3>My Account</h3>
                                </div>
                                <ul>
                                    <li><a href=\"#\">My account</a></li>
                                    <li><a href=\"#\">Ordr History</a></li>
                                    <li><a href=\"#\">Wish List</a></li>
                                    <li><a href=\"#\">Newsletter</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
                <div class=\"footer_copyright\">
                    <h5>© <script>document.write(new Date().getFullYear());</script> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </h5>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->

        {% block javascripts %}
            <script src=\"{{ asset('build/main.js') }}\"></script>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src=\"{{ asset('assets/js/jquery-3.2.1.min.js') }}\"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src=\"{{ asset('assets/js/popper.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/bootstrap.min.js') }}\"></script>
            <!-- Rev slider js -->
            <script src=\"{{ asset('assets/vendors/revolution/js/jquery.themepunch.tools.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendors/revolution/js/jquery.themepunch.revolution.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.video.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js') }}\"></script>
            <!-- Extra plugin css -->
            <script src=\"{{ asset('assets/vendors/counterup/jquery.waypoints.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendors/counterup/jquery.counterup.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendors/bootstrap-selector/js/bootstrap-select.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendors/image-dropdown/jquery.dd.min.js') }}\"></script>
            <script src=\"{{ asset('assets/js/smoothscroll.js') }}\"></script>
            <script src=\"{{ asset('assets/vendors/isotope/imagesloaded.pkgd.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendors/isotope/isotope.pkgd.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendors/magnify-popup/jquery.magnific-popup.min.js') }}\"></script>
            <script src=\"{{ asset('assets/vendors/vertical-slider/js/jQuery.verticalCarousel.js') }}\"></script>
            <script src=\"{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}\"></script>

            <script src=\"{{ asset('assets/js/theme.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/templates/base.html.twig");
    }
}
