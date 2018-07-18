<?php

/* product/details.html.twig */
class __TwigTemplate_0f3979b849926a806011678759469746f18fde6e6a17c0d04557c3b93f3bd358 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/details.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/details.html.twig"));

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
                <h3>simple product Layout 03</h3>
                <ul>
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Shop</a></li>
                    <li class=\"current\"><a href=\"product-details2.html\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 14, $this->source); })()), "name", array(), "method"), "html", null, true);
        echo "</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->

    <!--================Product Details Area =================-->
    <section class=\"product_details_area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"product_details_slider\">
                        <div id=\"product_slider2\" class=\"rev_slider\" data-version=\"5.3.1.6\">
                            <ul>\t<!-- SLIDE  -->
                                ";
        // line 29
        $context["continue"] = false;
        // line 30
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 30, $this->source); })()), "photoGallery", array(), "method"), "photos", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 31
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, $context["photo"], "isMain", array(), "method")) {
                // line 32
                echo "                                        ";
                $context["continue"] = true;
                // line 33
                echo "                                    ";
            }
            // line 34
            echo "                                    ";
            if ( !(isset($context["continue"]) || array_key_exists("continue", $context) ? $context["continue"] : (function () { throw new Twig_Error_Runtime('Variable "continue" does not exist.', 34, $this->source); })())) {
                // line 35
                echo "                                        <li
                                            data-index=\"rs-";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["photo"], "id", array(), "method"), "html", null, true);
                echo "\"
                                            data-transition=\"scaledownfromleft\"
                                            data-slotamount=\"default\"
                                            data-easein=\"default\"
                                            data-easeout=\"default\"
                                            data-masterspeed=\"1500\"
                                            data-thumb=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["photo"], "fullName", array(), "method")), "html", null, true);
                echo "\"
                                            data-rotate=\"0\"
                                            data-fstransition=\"fade\"
                                            data-fsmasterspeed=\"1500\"
                                            data-fsslotamount=\"7\"
                                            data-saveperformance=\"off\"
                                            data-title=\"Umbrella\"
                                            data-param1=\"September 7, 2015\"
                                            data-param2=\"Alfon Much, The Precious Stones\"
                                            data-description=\"\">
                                            <!-- MAIN IMAGE -->
                                            <img src=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["photo"], "fullNameLargePhoto", array(), "method")), "html", null, true);
                echo "\"  alt=\"\"  width=\"1920\" height=\"1080\"
                                                 data-lazyload=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["photo"], "fullNameLargePhoto", array(), "method")), "html", null, true);
                echo "\"
                                                 data-bgposition=\"center center\"
                                                 data-bgfit=\"contain\"
                                                 data-bgrepeat=\"no-repeat\" class=\"rev-slidebg\"
                                                 data-no-retina>
                                            <!-- LAYERS -->
                                        </li>
                                    ";
            }
            // line 62
            echo "                                    ";
            if ((isset($context["continue"]) || array_key_exists("continue", $context) ? $context["continue"] : (function () { throw new Twig_Error_Runtime('Variable "continue" does not exist.', 62, $this->source); })())) {
                // line 63
                echo "                                        ";
                $context["continue"] = false;
                // line 64
                echo "                                    ";
            }
            // line 65
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"product_details_text\">
                        <h3>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 72, $this->source); })()), "name", array(), "method"), "html", null, true);
        echo "</h3>
                        <ul class=\"p_rating\">
                            ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 74, $this->source); })()), "description", array(), "method")) {
            // line 75
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 75, $this->source); })()), "description", array(), "method"), "rating", array(), "method"), "rate", array(), "method")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 76
                echo "                                    <li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                            ";
        }
        // line 79
        echo "                        </ul>
                        <div class=\"add_review\">
                            <a href=\"#\">Add your review</a>
                        </div>
                        <h6>Available In <span>Stock</span></h6>
                        <h4><del>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 84, $this->source); })()), "oldPrice", array(), "method"), "amountInCurrency", array(), "method"), "html", null, true);
        echo "</del> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 84, $this->source); })()), "price", array(), "method"), "amountInCurrency", array(), "method"), "html", null, true);
        echo "</h4>
                        ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 85, $this->source); })()), "description", array(), "method")) {
            // line 86
            echo "                            <p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 86, $this->source); })()), "description", array(), "method"), "shortDescription", array(), "method"), "html", null, true);
            echo "</p>
                        ";
        }
        // line 88
        echo "
                        <div class=\"quantity\">
                            <div class=\"custom\">
                                <button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;\" class=\"reduced items-count\" type=\"button\"><i class=\"icon_minus-06\"></i></button>
                                <input type=\"text\" name=\"qty\" id=\"sst\" maxlength=\"12\" value=\"01\" title=\"Quantity:\" class=\"input-text qty\">
                                <button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;\" class=\"increase items-count\" type=\"button\"><i class=\"icon_plus\"></i></button>
                            </div>
                            <a class=\"add_cart_btn\" href=\"#\">add to cart</a>
                        </div>
                        <div class=\"shareing_icon\">
                            <h5>share :</h5>
                            <ul>
                                <li><a href=\"#\"><i class=\"social_facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"social_twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"social_pinterest\"></i></a></li>
                                <li><a href=\"#\"><i class=\"social_instagram\"></i></a></li>
                                <li><a href=\"#\"><i class=\"social_youtube\"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================End Product Details Area =================-->

    <!--================Product Description Area =================-->
    <section class=\"product_description_area\">
        <div class=\"container\">
            <nav class=\"tab_menu\">
                <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                    <a class=\"nav-item nav-link active\"     id=\"nav-about-tab\"   data-toggle=\"tab\" href=\"#nav-about\"            role=\"tab\" aria-controls=\"nav-about\"            aria-selected=\"true\">All about</a>
                    <a class=\"nav-item nav-link\"            id=\"nav-home-tab\"    data-toggle=\"tab\" href=\"#nav-home\"             role=\"tab\" aria-controls=\"nav-home\"             aria-selected=\"true\">Product Description</a>
                    <a class=\"nav-item nav-link\"            id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#nav-profile\"          role=\"tab\" aria-controls=\"nav-profile\"          aria-selected=\"false\">Reviews</a>
                    <a class=\"nav-item nav-link\"            id=\"nav-related-tab\" data-toggle=\"tab\" href=\"#nav-related-products\" role=\"tab\" aria-controls=\"nav-related-products\" aria-selected=\"false\">Related Products</a>
                </div>
            </nav>
            <div class=\"tab-content\" id=\"nav-tabContent\">
                <div class=\"tab-pane fade show active\" id=\"nav-about\" role=\"tabpanel\" aria-labelledby=\"nav-about-tab\">

                    <!--================Slider Area =================-->
                    <section class=\"main_slider_area\">
                        <div id=\"fullwidth_slider\" class=\"rev_slider\" data-version=\"5.3.1.6\">
                            <ul>
                                <li data-index=\"rs-1587\" data-transition=\"fade\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\"  data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"300\"  data-thumb=\"img/home-slider/slider-1.jpg\"  data-rotate=\"0\"  data-saveperformance=\"off\"  data-title=\"Creative\" data-param1=\"01\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
                                    <!-- MAIN IMAGE -->
                                    <img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-slider/full-width-1.jpg"), "html", null, true);
        echo "\"  alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"5\" class=\"rev-slidebg\" data-no-retina>
                                    <!-- LAYER NR. 1 -->
                                    <div class=\"slider_text_box\">
                                        <div class=\"tp-caption tp-resizeme first_text\"
                                             data-x=\"['left','left','left','left','center','center']\"
                                             data-hoffset=\"['0','0','0','0']\"
                                             data-y=\"['top','top','top','top']\"
                                             data-voffset=\"['250','250','250','250','160','160']\"
                                             data-fontsize=\"['48','48','48','48','36','28']\"
                                             data-lineheight=\"['64','64','64','64','46','38']\"
                                             data-width=\"['none','none','none','none','none']\"
                                             data-height=\"none\"
                                             data-whitespace=\"nowrap\"
                                             data-type=\"text\"
                                             data-responsive_offset=\"on\"
                                             data-frames=\"[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]\"
                                             data-textAlign=\"['left','left','left','left','center','center']\"
                                        >WOMEN'S DESIGNER</div>

                                        <div class=\"tp-caption tp-resizeme secand_text\"
                                             data-x=\"['left','left','left','left','center','center']\"
                                             data-hoffset=\"['0','00','00','0']\"
                                             data-y=\"['top','top','top','top']\" data-voffset=\"['320','320','320','320','220','200']\"
                                             data-fontsize=\"['100','100','100','100','60','50']\"
                                             data-lineheight=\"['120','120','120','120','60','60']\"
                                             data-width=\"['none','none','none','none','none']\"
                                             data-height=\"none\"
                                             data-whitespace=\"nowrap\"
                                             data-type=\"text\"
                                             data-responsive_offset=\"on\"
                                             data-transform_idle=\"o:1;\"
                                             data-frames=\"[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]\"
                                             data-textAlign=\"['left','left','left','left','center','center']\"
                                        >Sunglass
                                        </div>

                                        <div class=\"tp-caption tp-resizeme third_text\"
                                             data-x=\"['left','left','left','left','center','center']\"
                                             data-hoffset=\"['0','0','0','0']\"
                                             data-y=\"['top','top','top','top']\" data-voffset=\"['450','450','450','450','300','270']\"
                                             data-fontsize=\"['13','13','13','13','13']\"
                                             data-lineheight=\"['28','28','26','26']\"
                                             data-width=\"['475','475','475','475','475','320']\"
                                             data-height=\"none\"
                                             data-whitespace=\"normal\"
                                             data-type=\"text\"
                                             data-responsive_offset=\"on\"
                                             data-transform_idle=\"o:1;\"
                                             data-frames=\"[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]\"
                                             data-textAlign=\"['left','left','left','left','center','center']\"
                                        >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </div>

                                        <div class=\"tp-caption tp-resizeme four_btn\"
                                             data-x=\"['left','left','left','left','center','center']\"
                                             data-hoffset=\"['0','0','0','0']\"
                                             data-y=\"['top','top','top','top']\" data-voffset=\"['575','575','575','575','400','400']\"
                                             data-width=\"none\"
                                             data-height=\"none\"
                                             data-whitespace=\"nowrap\"
                                             data-type=\"text\"
                                             data-responsive_offset=\"on\"
                                             data-frames=\"[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]\"
                                             data-textAlign=\"['left','left','left','left','left','center']\">
                                            <a class=\"checkout_btn\" href=\"#\">read more</a>
                                        </div>
                                    </div>
                                </li>
                                <li data-index=\"rs-1588\" data-transition=\"fade\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\"  data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"300\"  data-thumb=\"img/home-slider/slider-2.jpg\"  data-rotate=\"0\"  data-saveperformance=\"off\"  data-title=\"Creative\" data-param1=\"01\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
                                    <!-- MAIN IMAGE -->
                                    <img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home-slider/full-width-1.jpg"), "html", null, true);
        echo "\"  alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"5\" class=\"rev-slidebg\" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class=\"slider_text_box\">
                                        <div class=\"tp-caption tp-resizeme first_text\"
                                             data-x=\"['left','left','left','left','center','center']\"
                                             data-hoffset=\"['0','0','0','0']\"
                                             data-y=\"['top','top','top','top']\"
                                             data-voffset=\"['250','250','250','250','160','160']\"
                                             data-fontsize=\"['48','48','48','48','36','28']\"
                                             data-lineheight=\"['64','64','64','64','46','38']\"
                                             data-width=\"['none','none','none','none','none']\"
                                             data-height=\"none\"
                                             data-whitespace=\"nowrap\"
                                             data-type=\"text\"
                                             data-responsive_offset=\"on\"
                                             data-frames=\"[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]\"
                                             data-textAlign=\"['left','left','left','left','center','center']\"
                                        >WOMEN'S DESIGNER</div>

                                        <div class=\"tp-caption tp-resizeme secand_text\"
                                             data-x=\"['left','left','left','left','center','center']\"
                                             data-hoffset=\"['0','00','00','0']\"
                                             data-y=\"['top','top','top','top']\" data-voffset=\"['320','320','320','320','220','200']\"
                                             data-fontsize=\"['100','100','100','100','60','50']\"
                                             data-lineheight=\"['120','120','120','120','60','60']\"
                                             data-width=\"['none','none','none','none','none']\"
                                             data-height=\"none\"
                                             data-whitespace=\"nowrap\"
                                             data-type=\"text\"
                                             data-responsive_offset=\"on\"
                                             data-transform_idle=\"o:1;\"
                                             data-frames=\"[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]\"
                                             data-textAlign=\"['left','left','left','left','center','center']\"
                                        >Sunglass
                                        </div>

                                        <div class=\"tp-caption tp-resizeme third_text\"
                                             data-x=\"['left','left','left','left','center','center']\"
                                             data-hoffset=\"['0','0','0','0']\"
                                             data-y=\"['top','top','top','top']\" data-voffset=\"['450','450','450','450','300','270']\"
                                             data-fontsize=\"['13','13','13','13','13']\"
                                             data-lineheight=\"['28','28','26','26']\"
                                             data-width=\"['475','475','475','475','475','320']\"
                                             data-height=\"none\"
                                             data-whitespace=\"normal\"
                                             data-type=\"text\"
                                             data-responsive_offset=\"on\"
                                             data-transform_idle=\"o:1;\"
                                             data-frames=\"[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]\"
                                             data-textAlign=\"['left','left','left','left','center','center']\"
                                        >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </div>

                                        <div class=\"tp-caption tp-resizeme four_btn\"
                                             data-x=\"['left','left','left','left','center','center']\"
                                             data-hoffset=\"['0','0','0','0']\"
                                             data-y=\"['top','top','top','top']\" data-voffset=\"['575','575','575','575','400','400']\"
                                             data-width=\"none\"
                                             data-height=\"none\"
                                             data-whitespace=\"nowrap\"
                                             data-type=\"text\"
                                             data-responsive_offset=\"on\"
                                             data-frames=\"[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]\"
                                             data-textAlign=\"['left','left','left','left','left','center']\">
                                            <a class=\"checkout_btn\" href=\"#\">read more</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <!--================End Slider Area =================-->

                    <!--================Full Width Feature Area =================-->
                    <section class=\"fullwidth_feature_area\">
                        <div class=\"full_feature_item\">
                            <div class=\"left_full_feature\">
                                <div class=\"full_feature_img\">
                                    <img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/fullwidth-item/fullwidth-item-1.jpg  "), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"right_full_feature\">
                                <div class=\"full_feature_text\">
                                    <h4>Women Designer Sunglass</h4>
                                    <h5>\$45.05</h5>
                                    <div class=\"sunglass_slider owl-carousel\">
                                        <div class=\"item\">
                                            <img src=\"img/product/sunglass-1.jpg\" alt=\"\">
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"img/product/sunglass-1.jpg\" alt=\"\">
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"img/product/sunglass-1.jpg\" alt=\"\">
                                        </div>
                                    </div>
                                    <a class=\"add_cart_btn\" href=\"#\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"full_feature_item dir_right\">
                            <div class=\"right_full_feature\">
                                <div class=\"full_feature_text\">
                                    <div class=\"full_feature_text_inner\">
                                        <h4>Women Designer Sunglass</h4>
                                        <h5>\$45.05</h5>
                                        <div class=\"sunglass_slider owl-carousel\">
                                            <div class=\"item\">
                                                <img src=\"img/product/sunglass-2.jpg\" alt=\"\">
                                            </div>
                                            <div class=\"item\">
                                                <img src=\"img/product/sunglass-2.jpg\" alt=\"\">
                                            </div>
                                            <div class=\"item\">
                                                <img src=\"img/product/sunglass-2.jpg\" alt=\"\">
                                            </div>
                                        </div>
                                        <a class=\"add_cart_btn\" href=\"#\">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"left_full_feature\">
                                <div class=\"full_feature_img\">
                                    <img src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/fullwidth-item/fullwidth-item-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                        </div>
                        <div class=\"full_feature_item\">
                            <div class=\"left_full_feature\">
                                <div class=\"full_feature_img\">
                                    <img src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/fullwidth-item/fullwidth-item-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"right_full_feature\">
                                <div class=\"full_feature_text\">
                                    <h4>Women Designer Sunglass</h4>
                                    <h5>\$45.05</h5>
                                    <div class=\"sunglass_slider owl-carousel\">
                                        <div class=\"item\">
                                            <img src=\"img/product/sunglass-3.jpg\" alt=\"\">
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"img/product/sunglass-3.jpg\" alt=\"\">
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"img/product/sunglass-3.jpg\" alt=\"\">
                                        </div>
                                    </div>
                                    <a class=\"add_cart_btn\" href=\"#\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--================End Full Width Feature Area =================-->

                    <!--================Isotope Slider Area =================-->
                    <section class=\"fillter_product_slider_area\">
                        <div class=\"container\">
                            <div class=\"fillter_product_inner\">
                                <ul class=\"portfolio_filter\">
                                    <li class=\"active\" data-filter=\"*\"><a href=\"#\">men's</a></li>
                                    <li data-filter=\".men\"><a href=\"#\">MEN</a></li>
                                    <li data-filter=\".woman\"><a href=\"#\">Woman</a></li>
                                    <li data-filter=\".kids\"><a href=\"#\">KIDS</a></li>
                                    <li data-filter=\".bags\"><a href=\"#\">GOGGLES</a></li>
                                    <li data-filter=\".brands\"><a href=\"#\">BRANDS</a></li>
                                </ul>
                                <div class=\"fillter_product_slider owl-carousel\">
                                    <div class=\"item men woman bags brands\">
                                        <div class=\"fillter_product\">
                                            <div class=\"l_product_item\">
                                                <div class=\"l_p_img\">
                                                    <img src=\"img/product/fillter-product/f-product-4.jpg\" alt=\"\">
                                                </div>
                                                <div class=\"l_p_text\">
                                                    <ul>
                                                        <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                                        <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                                        <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                                    </ul>
                                                    <h4>Quay Invader Sunglasses</h4>
                                                    <h5>\$85.50</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"item men woman kids brands\">
                                        <div class=\"fillter_product\">
                                            <div class=\"l_product_item\">
                                                <div class=\"l_p_img\">
                                                    <img src=\"img/product/fillter-product/f-product-5.jpg\" alt=\"\">
                                                    <h5 class=\"new\">New</h5>
                                                </div>
                                                <div class=\"l_p_text\">
                                                    <ul>
                                                        <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                                        <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                                        <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                                    </ul>
                                                    <h4>Black Retro Dapper Cross Bar</h4>
                                                    <h5>\$110</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"item woman bags brands\">
                                        <div class=\"fillter_product\">
                                            <div class=\"l_product_item\">
                                                <div class=\"l_p_img\">
                                                    <img src=\"img/product/fillter-product/f-product-6.jpg\" alt=\"\">
                                                </div>
                                                <div class=\"l_p_text\">
                                                    <ul>
                                                        <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                                        <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                                        <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                                    </ul>
                                                    <h4>Raen Figurative Sunglasses</h4>
                                                    <h5>\$250.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"item men woman kids brands\">
                                        <div class=\"fillter_product\">
                                            <div class=\"l_product_item\">
                                                <div class=\"l_p_img\">
                                                    <img src=\"img/product/fillter-product/f-product-7.jpg\" alt=\"\">
                                                    <h5 class=\"sale\">Sale</h5>
                                                </div>
                                                <div class=\"l_p_text\">
                                                    <ul>
                                                        <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                                        <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                                        <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                                    </ul>
                                                    <h4>Ricky Shirt</h4>
                                                    <h5>\$45.05</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--================End Isotope Slider Area =================-->

                </div>
                <div class=\"tab-pane fade show\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                    <table class=\"table\">
                        <th>Name</th>
                        <th>Details</th>
                        ";
        // line 461
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 461, $this->source); })()), "specification", array(), "method"), "properties", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 462
            echo "                            <tr>
                                <th scope=\"row\">
                                    ";
            // line 464
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "name", array(), "method"), "html", null, true);
            echo "
                                </th>
                                <td>
                                    <p>
                                        ";
            // line 468
            echo twig_get_attribute($this->env, $this->source, $context["property"], "viewAsHtml", array(), "method");
            echo "
                                    </p>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 473
        echo "                    </table>
                </div>
                <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                    ";
        // line 476
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 476, $this->source); })()), "comments", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 477
            echo "                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <h6 style=\"padding-bottom: 15px\">Jon Conor</h6>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <div class=\"product_details_text\">
                                    <table>
                                        ";
            // line 486
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["comment"], "estimates", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["estimate"]) {
                // line 487
                echo "                                            <tr>
                                                <td>
                                                    <ul class=\"p_rating\">
                                                        ";
                // line 490
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["estimate"], "value", array(), "method")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 491
                    echo "                                                            <li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 493
                echo "                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class=\"add_review\">
                                                        <a href=\"#\">";
                // line 497
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["estimate"], "name", array(), "method"), "html", null, true);
                echo "</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['estimate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 502
            echo "                                    </table>
                                </div>
                            </div>
                            <div class=\"col-md-9\">
                                <h6>Title</h6>
                                <p style=\"padding-bottom: 15px\">";
            // line 507
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "details", array(), "method"), "title", array(), "method"), "html", null, true);
            echo "</p>
                                <h6>Description</h6>
                                <p style=\"padding-bottom: 15px\">";
            // line 509
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "details", array(), "method"), "description", array(), "method"), "html", null, true);
            echo "</p>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <h6 style=\"display: inline-block\"><span class=\"product_comment_benefits\">Benefits:</span></h6>
                                        <p style=\"padding-bottom: 15px; display: inline-block\">";
            // line 513
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "details", array(), "method"), "benefits", array(), "method"), "html", null, true);
            echo "</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6 style=\"display: inline-block\"><span class=\"product_comment_shortcomming\">Shortcoming: </span></h6>
                                        <p style=\"padding-bottom: 15px; display: inline-block\">";
            // line 517
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "details", array(), "method"), "shortcoming", array(), "method"), "html", null, true);
            echo "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 523
        echo "                </div>
                <div class=\"tab-pane fade\" id=\"nav-related-products\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                    <!--================End Related Product Area =================-->
                    <section class=\"related_product_area\">
                        <div class=\"container\">
                            <div class=\"related_product_inner\">
                                <div class=\"row\">
                                    ";
        // line 530
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 530, $this->source); })()), "relatedProducts", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["relatedProduct"]) {
            // line 531
            echo "                                        <div class=\"col-lg-4 col-sm-6\">
                                            <div class=\"l_product_item\">
                                                <a href=\"/product/";
            // line 533
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relatedProduct"], "id", array(), "method"), "html", null, true);
            echo "\">
                                                    <div class=\"l_p_img\">
                                                        <img src=\"";
            // line 535
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["relatedProduct"], "photoGallery", array(), "method"), "mainPhoto", array(), "method"), "fullName", array(), "method")), "html", null, true);
            echo "\" alt=\"\">
                                                        ";
            // line 536
            if (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 536, $this->source); })()), "isSale", array(), "method")) {
                // line 537
                echo "                                                            <h5 class=\"sale\">Sale</h5>
                                                        ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 538
$context["relatedProduct"], "isNew", array(), "method")) {
                // line 539
                echo "                                                            <h5 class=\"new\">New</h5>
                                                        ";
            }
            // line 541
            echo "                                                    </div>
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
            // line 559
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relatedProduct"], "name", array(), "method"), "html", null, true);
            echo "</h4>
                                                    <h5>
                                                        <del>";
            // line 561
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["relatedProduct"], "oldPrice", array(), "method"), "amountInCurrency", array(), "method"), "html", null, true);
            echo "</del> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["relatedProduct"], "price", array(), "method"), "amountInCurrency", array(), "method"), "html", null, true);
            echo "
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relatedProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 567
        echo "                                </div>
                            </div>
                        </div>
                    </section>
                    <!--================End Related Product Area =================-->
                </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  796 => 567,  782 => 561,  777 => 559,  757 => 541,  753 => 539,  751 => 538,  748 => 537,  746 => 536,  742 => 535,  737 => 533,  733 => 531,  729 => 530,  720 => 523,  708 => 517,  701 => 513,  694 => 509,  689 => 507,  682 => 502,  671 => 497,  665 => 493,  658 => 491,  654 => 490,  649 => 487,  645 => 486,  634 => 477,  630 => 476,  625 => 473,  614 => 468,  607 => 464,  603 => 462,  599 => 461,  473 => 338,  463 => 331,  415 => 286,  331 => 205,  258 => 135,  209 => 88,  203 => 86,  201 => 85,  195 => 84,  188 => 79,  185 => 78,  178 => 76,  173 => 75,  171 => 74,  166 => 72,  158 => 66,  152 => 65,  149 => 64,  146 => 63,  143 => 62,  132 => 54,  128 => 53,  114 => 42,  105 => 36,  102 => 35,  99 => 34,  96 => 33,  93 => 32,  90 => 31,  85 => 30,  83 => 29,  65 => 14,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}


    <!--================Categories Banner Area =================-->
    <section class=\"categories_banner_area\">
        <div class=\"container\">
            <div class=\"c_banner_inner\">
                <h3>simple product Layout 03</h3>
                <ul>
                    <li><a href=\"#\">Home</a></li>
                    <li><a href=\"#\">Shop</a></li>
                    <li class=\"current\"><a href=\"product-details2.html\">{{ product.name() }}</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--================End Categories Banner Area =================-->

    <!--================Product Details Area =================-->
    <section class=\"product_details_area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"product_details_slider\">
                        <div id=\"product_slider2\" class=\"rev_slider\" data-version=\"5.3.1.6\">
                            <ul>\t<!-- SLIDE  -->
                                {% set continue = false %}
                                {% for photo in  product.photoGallery().photos() %}
                                    {% if(photo.isMain()) %}
                                        {% set continue = true %}
                                    {% endif %}
                                    {% if not continue %}
                                        <li
                                            data-index=\"rs-{{ photo.id() }}\"
                                            data-transition=\"scaledownfromleft\"
                                            data-slotamount=\"default\"
                                            data-easein=\"default\"
                                            data-easeout=\"default\"
                                            data-masterspeed=\"1500\"
                                            data-thumb=\"{{ asset(photo.fullName()) }}\"
                                            data-rotate=\"0\"
                                            data-fstransition=\"fade\"
                                            data-fsmasterspeed=\"1500\"
                                            data-fsslotamount=\"7\"
                                            data-saveperformance=\"off\"
                                            data-title=\"Umbrella\"
                                            data-param1=\"September 7, 2015\"
                                            data-param2=\"Alfon Much, The Precious Stones\"
                                            data-description=\"\">
                                            <!-- MAIN IMAGE -->
                                            <img src=\"{{ asset(photo.fullNameLargePhoto()) }}\"  alt=\"\"  width=\"1920\" height=\"1080\"
                                                 data-lazyload=\"{{ asset(photo.fullNameLargePhoto()) }}\"
                                                 data-bgposition=\"center center\"
                                                 data-bgfit=\"contain\"
                                                 data-bgrepeat=\"no-repeat\" class=\"rev-slidebg\"
                                                 data-no-retina>
                                            <!-- LAYERS -->
                                        </li>
                                    {% endif %}
                                    {% if continue %}
                                        {% set continue = false %}
                                    {% endif %}
                                {%  endfor %}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"product_details_text\">
                        <h3>{{ product.name() }}</h3>
                        <ul class=\"p_rating\">
                            {% if (product.description()) %}
                                {% for item in 1..product.description().rating().rate() %}
                                    <li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
                                {% endfor %}
                            {% endif %}
                        </ul>
                        <div class=\"add_review\">
                            <a href=\"#\">Add your review</a>
                        </div>
                        <h6>Available In <span>Stock</span></h6>
                        <h4><del>{{ product.oldPrice().amountInCurrency()}}</del> {{ product.price().amountInCurrency()}}</h4>
                        {% if product.description() %}
                            <p>{{ product.description().shortDescription() }}</p>
                        {% endif %}

                        <div class=\"quantity\">
                            <div class=\"custom\">
                                <button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;\" class=\"reduced items-count\" type=\"button\"><i class=\"icon_minus-06\"></i></button>
                                <input type=\"text\" name=\"qty\" id=\"sst\" maxlength=\"12\" value=\"01\" title=\"Quantity:\" class=\"input-text qty\">
                                <button onclick=\"var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;\" class=\"increase items-count\" type=\"button\"><i class=\"icon_plus\"></i></button>
                            </div>
                            <a class=\"add_cart_btn\" href=\"#\">add to cart</a>
                        </div>
                        <div class=\"shareing_icon\">
                            <h5>share :</h5>
                            <ul>
                                <li><a href=\"#\"><i class=\"social_facebook\"></i></a></li>
                                <li><a href=\"#\"><i class=\"social_twitter\"></i></a></li>
                                <li><a href=\"#\"><i class=\"social_pinterest\"></i></a></li>
                                <li><a href=\"#\"><i class=\"social_instagram\"></i></a></li>
                                <li><a href=\"#\"><i class=\"social_youtube\"></i></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--================End Product Details Area =================-->

    <!--================Product Description Area =================-->
    <section class=\"product_description_area\">
        <div class=\"container\">
            <nav class=\"tab_menu\">
                <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                    <a class=\"nav-item nav-link active\"     id=\"nav-about-tab\"   data-toggle=\"tab\" href=\"#nav-about\"            role=\"tab\" aria-controls=\"nav-about\"            aria-selected=\"true\">All about</a>
                    <a class=\"nav-item nav-link\"            id=\"nav-home-tab\"    data-toggle=\"tab\" href=\"#nav-home\"             role=\"tab\" aria-controls=\"nav-home\"             aria-selected=\"true\">Product Description</a>
                    <a class=\"nav-item nav-link\"            id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#nav-profile\"          role=\"tab\" aria-controls=\"nav-profile\"          aria-selected=\"false\">Reviews</a>
                    <a class=\"nav-item nav-link\"            id=\"nav-related-tab\" data-toggle=\"tab\" href=\"#nav-related-products\" role=\"tab\" aria-controls=\"nav-related-products\" aria-selected=\"false\">Related Products</a>
                </div>
            </nav>
            <div class=\"tab-content\" id=\"nav-tabContent\">
                <div class=\"tab-pane fade show active\" id=\"nav-about\" role=\"tabpanel\" aria-labelledby=\"nav-about-tab\">

                    <!--================Slider Area =================-->
                    <section class=\"main_slider_area\">
                        <div id=\"fullwidth_slider\" class=\"rev_slider\" data-version=\"5.3.1.6\">
                            <ul>
                                <li data-index=\"rs-1587\" data-transition=\"fade\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\"  data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"300\"  data-thumb=\"img/home-slider/slider-1.jpg\"  data-rotate=\"0\"  data-saveperformance=\"off\"  data-title=\"Creative\" data-param1=\"01\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
                                    <!-- MAIN IMAGE -->
                                    <img src=\"{{ asset('assets/img/home-slider/full-width-1.jpg') }}\"  alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"5\" class=\"rev-slidebg\" data-no-retina>
                                    <!-- LAYER NR. 1 -->
                                    <div class=\"slider_text_box\">
                                        <div class=\"tp-caption tp-resizeme first_text\"
                                             data-x=\"['left','left','left','left','center','center']\"
                                             data-hoffset=\"['0','0','0','0']\"
                                             data-y=\"['top','top','top','top']\"
                                             data-voffset=\"['250','250','250','250','160','160']\"
                                             data-fontsize=\"['48','48','48','48','36','28']\"
                                             data-lineheight=\"['64','64','64','64','46','38']\"
                                             data-width=\"['none','none','none','none','none']\"
                                             data-height=\"none\"
                                             data-whitespace=\"nowrap\"
                                             data-type=\"text\"
                                             data-responsive_offset=\"on\"
                                             data-frames=\"[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]\"
                                             data-textAlign=\"['left','left','left','left','center','center']\"
                                        >WOMEN'S DESIGNER</div>

                                        <div class=\"tp-caption tp-resizeme secand_text\"
                                             data-x=\"['left','left','left','left','center','center']\"
                                             data-hoffset=\"['0','00','00','0']\"
                                             data-y=\"['top','top','top','top']\" data-voffset=\"['320','320','320','320','220','200']\"
                                             data-fontsize=\"['100','100','100','100','60','50']\"
                                             data-lineheight=\"['120','120','120','120','60','60']\"
                                             data-width=\"['none','none','none','none','none']\"
                                             data-height=\"none\"
                                             data-whitespace=\"nowrap\"
                                             data-type=\"text\"
                                             data-responsive_offset=\"on\"
                                             data-transform_idle=\"o:1;\"
                                             data-frames=\"[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]\"
                                             data-textAlign=\"['left','left','left','left','center','center']\"
                                        >Sunglass
                                        </div>

                                        <div class=\"tp-caption tp-resizeme third_text\"
                                             data-x=\"['left','left','left','left','center','center']\"
                                             data-hoffset=\"['0','0','0','0']\"
                                             data-y=\"['top','top','top','top']\" data-voffset=\"['450','450','450','450','300','270']\"
                                             data-fontsize=\"['13','13','13','13','13']\"
                                             data-lineheight=\"['28','28','26','26']\"
                                             data-width=\"['475','475','475','475','475','320']\"
                                             data-height=\"none\"
                                             data-whitespace=\"normal\"
                                             data-type=\"text\"
                                             data-responsive_offset=\"on\"
                                             data-transform_idle=\"o:1;\"
                                             data-frames=\"[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]\"
                                             data-textAlign=\"['left','left','left','left','center','center']\"
                                        >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </div>

                                        <div class=\"tp-caption tp-resizeme four_btn\"
                                             data-x=\"['left','left','left','left','center','center']\"
                                             data-hoffset=\"['0','0','0','0']\"
                                             data-y=\"['top','top','top','top']\" data-voffset=\"['575','575','575','575','400','400']\"
                                             data-width=\"none\"
                                             data-height=\"none\"
                                             data-whitespace=\"nowrap\"
                                             data-type=\"text\"
                                             data-responsive_offset=\"on\"
                                             data-frames=\"[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]\"
                                             data-textAlign=\"['left','left','left','left','left','center']\">
                                            <a class=\"checkout_btn\" href=\"#\">read more</a>
                                        </div>
                                    </div>
                                </li>
                                <li data-index=\"rs-1588\" data-transition=\"fade\" data-slotamount=\"default\" data-hideafterloop=\"0\" data-hideslideonmobile=\"off\"  data-easein=\"default\" data-easeout=\"default\" data-masterspeed=\"300\"  data-thumb=\"img/home-slider/slider-2.jpg\"  data-rotate=\"0\"  data-saveperformance=\"off\"  data-title=\"Creative\" data-param1=\"01\" data-param2=\"\" data-param3=\"\" data-param4=\"\" data-param5=\"\" data-param6=\"\" data-param7=\"\" data-param8=\"\" data-param9=\"\" data-param10=\"\" data-description=\"\">
                                    <!-- MAIN IMAGE -->
                                    <img src=\"{{ asset('assets/img/home-slider/full-width-1.jpg') }}\"  alt=\"\" data-bgposition=\"center center\" data-bgfit=\"cover\" data-bgrepeat=\"no-repeat\" data-bgparallax=\"5\" class=\"rev-slidebg\" data-no-retina>
                                    <!-- LAYERS -->
                                    <!-- LAYERS -->

                                    <!-- LAYER NR. 1 -->
                                    <div class=\"slider_text_box\">
                                        <div class=\"tp-caption tp-resizeme first_text\"
                                             data-x=\"['left','left','left','left','center','center']\"
                                             data-hoffset=\"['0','0','0','0']\"
                                             data-y=\"['top','top','top','top']\"
                                             data-voffset=\"['250','250','250','250','160','160']\"
                                             data-fontsize=\"['48','48','48','48','36','28']\"
                                             data-lineheight=\"['64','64','64','64','46','38']\"
                                             data-width=\"['none','none','none','none','none']\"
                                             data-height=\"none\"
                                             data-whitespace=\"nowrap\"
                                             data-type=\"text\"
                                             data-responsive_offset=\"on\"
                                             data-frames=\"[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]\"
                                             data-textAlign=\"['left','left','left','left','center','center']\"
                                        >WOMEN'S DESIGNER</div>

                                        <div class=\"tp-caption tp-resizeme secand_text\"
                                             data-x=\"['left','left','left','left','center','center']\"
                                             data-hoffset=\"['0','00','00','0']\"
                                             data-y=\"['top','top','top','top']\" data-voffset=\"['320','320','320','320','220','200']\"
                                             data-fontsize=\"['100','100','100','100','60','50']\"
                                             data-lineheight=\"['120','120','120','120','60','60']\"
                                             data-width=\"['none','none','none','none','none']\"
                                             data-height=\"none\"
                                             data-whitespace=\"nowrap\"
                                             data-type=\"text\"
                                             data-responsive_offset=\"on\"
                                             data-transform_idle=\"o:1;\"
                                             data-frames=\"[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]\"
                                             data-textAlign=\"['left','left','left','left','center','center']\"
                                        >Sunglass
                                        </div>

                                        <div class=\"tp-caption tp-resizeme third_text\"
                                             data-x=\"['left','left','left','left','center','center']\"
                                             data-hoffset=\"['0','0','0','0']\"
                                             data-y=\"['top','top','top','top']\" data-voffset=\"['450','450','450','450','300','270']\"
                                             data-fontsize=\"['13','13','13','13','13']\"
                                             data-lineheight=\"['28','28','26','26']\"
                                             data-width=\"['475','475','475','475','475','320']\"
                                             data-height=\"none\"
                                             data-whitespace=\"normal\"
                                             data-type=\"text\"
                                             data-responsive_offset=\"on\"
                                             data-transform_idle=\"o:1;\"
                                             data-frames=\"[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]\"
                                             data-textAlign=\"['left','left','left','left','center','center']\"
                                        >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        </div>

                                        <div class=\"tp-caption tp-resizeme four_btn\"
                                             data-x=\"['left','left','left','left','center','center']\"
                                             data-hoffset=\"['0','0','0','0']\"
                                             data-y=\"['top','top','top','top']\" data-voffset=\"['575','575','575','575','400','400']\"
                                             data-width=\"none\"
                                             data-height=\"none\"
                                             data-whitespace=\"nowrap\"
                                             data-type=\"text\"
                                             data-responsive_offset=\"on\"
                                             data-frames=\"[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]\"
                                             data-textAlign=\"['left','left','left','left','left','center']\">
                                            <a class=\"checkout_btn\" href=\"#\">read more</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <!--================End Slider Area =================-->

                    <!--================Full Width Feature Area =================-->
                    <section class=\"fullwidth_feature_area\">
                        <div class=\"full_feature_item\">
                            <div class=\"left_full_feature\">
                                <div class=\"full_feature_img\">
                                    <img src=\"{{ asset('assets/img/fullwidth-item/fullwidth-item-1.jpg  ') }}\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"right_full_feature\">
                                <div class=\"full_feature_text\">
                                    <h4>Women Designer Sunglass</h4>
                                    <h5>\$45.05</h5>
                                    <div class=\"sunglass_slider owl-carousel\">
                                        <div class=\"item\">
                                            <img src=\"img/product/sunglass-1.jpg\" alt=\"\">
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"img/product/sunglass-1.jpg\" alt=\"\">
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"img/product/sunglass-1.jpg\" alt=\"\">
                                        </div>
                                    </div>
                                    <a class=\"add_cart_btn\" href=\"#\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class=\"full_feature_item dir_right\">
                            <div class=\"right_full_feature\">
                                <div class=\"full_feature_text\">
                                    <div class=\"full_feature_text_inner\">
                                        <h4>Women Designer Sunglass</h4>
                                        <h5>\$45.05</h5>
                                        <div class=\"sunglass_slider owl-carousel\">
                                            <div class=\"item\">
                                                <img src=\"img/product/sunglass-2.jpg\" alt=\"\">
                                            </div>
                                            <div class=\"item\">
                                                <img src=\"img/product/sunglass-2.jpg\" alt=\"\">
                                            </div>
                                            <div class=\"item\">
                                                <img src=\"img/product/sunglass-2.jpg\" alt=\"\">
                                            </div>
                                        </div>
                                        <a class=\"add_cart_btn\" href=\"#\">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"left_full_feature\">
                                <div class=\"full_feature_img\">
                                    <img src=\"{{ asset('assets/img/fullwidth-item/fullwidth-item-2.jpg') }}\" alt=\"\">
                                </div>
                            </div>
                        </div>
                        <div class=\"full_feature_item\">
                            <div class=\"left_full_feature\">
                                <div class=\"full_feature_img\">
                                    <img src=\"{{ asset('assets/img/fullwidth-item/fullwidth-item-3.jpg') }}\" alt=\"\">
                                </div>
                            </div>
                            <div class=\"right_full_feature\">
                                <div class=\"full_feature_text\">
                                    <h4>Women Designer Sunglass</h4>
                                    <h5>\$45.05</h5>
                                    <div class=\"sunglass_slider owl-carousel\">
                                        <div class=\"item\">
                                            <img src=\"img/product/sunglass-3.jpg\" alt=\"\">
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"img/product/sunglass-3.jpg\" alt=\"\">
                                        </div>
                                        <div class=\"item\">
                                            <img src=\"img/product/sunglass-3.jpg\" alt=\"\">
                                        </div>
                                    </div>
                                    <a class=\"add_cart_btn\" href=\"#\">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--================End Full Width Feature Area =================-->

                    <!--================Isotope Slider Area =================-->
                    <section class=\"fillter_product_slider_area\">
                        <div class=\"container\">
                            <div class=\"fillter_product_inner\">
                                <ul class=\"portfolio_filter\">
                                    <li class=\"active\" data-filter=\"*\"><a href=\"#\">men's</a></li>
                                    <li data-filter=\".men\"><a href=\"#\">MEN</a></li>
                                    <li data-filter=\".woman\"><a href=\"#\">Woman</a></li>
                                    <li data-filter=\".kids\"><a href=\"#\">KIDS</a></li>
                                    <li data-filter=\".bags\"><a href=\"#\">GOGGLES</a></li>
                                    <li data-filter=\".brands\"><a href=\"#\">BRANDS</a></li>
                                </ul>
                                <div class=\"fillter_product_slider owl-carousel\">
                                    <div class=\"item men woman bags brands\">
                                        <div class=\"fillter_product\">
                                            <div class=\"l_product_item\">
                                                <div class=\"l_p_img\">
                                                    <img src=\"img/product/fillter-product/f-product-4.jpg\" alt=\"\">
                                                </div>
                                                <div class=\"l_p_text\">
                                                    <ul>
                                                        <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                                        <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                                        <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                                    </ul>
                                                    <h4>Quay Invader Sunglasses</h4>
                                                    <h5>\$85.50</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"item men woman kids brands\">
                                        <div class=\"fillter_product\">
                                            <div class=\"l_product_item\">
                                                <div class=\"l_p_img\">
                                                    <img src=\"img/product/fillter-product/f-product-5.jpg\" alt=\"\">
                                                    <h5 class=\"new\">New</h5>
                                                </div>
                                                <div class=\"l_p_text\">
                                                    <ul>
                                                        <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                                        <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                                        <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                                    </ul>
                                                    <h4>Black Retro Dapper Cross Bar</h4>
                                                    <h5>\$110</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"item woman bags brands\">
                                        <div class=\"fillter_product\">
                                            <div class=\"l_product_item\">
                                                <div class=\"l_p_img\">
                                                    <img src=\"img/product/fillter-product/f-product-6.jpg\" alt=\"\">
                                                </div>
                                                <div class=\"l_p_text\">
                                                    <ul>
                                                        <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                                        <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                                        <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                                    </ul>
                                                    <h4>Raen Figurative Sunglasses</h4>
                                                    <h5>\$250.00</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"item men woman kids brands\">
                                        <div class=\"fillter_product\">
                                            <div class=\"l_product_item\">
                                                <div class=\"l_p_img\">
                                                    <img src=\"img/product/fillter-product/f-product-7.jpg\" alt=\"\">
                                                    <h5 class=\"sale\">Sale</h5>
                                                </div>
                                                <div class=\"l_p_text\">
                                                    <ul>
                                                        <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_piechart\"></i></a></li>
                                                        <li><a class=\"add_cart_btn\" href=\"#\">Add To Cart</a></li>
                                                        <li class=\"p_icon\"><a href=\"#\"><i class=\"icon_heart_alt\"></i></a></li>
                                                    </ul>
                                                    <h4>Ricky Shirt</h4>
                                                    <h5>\$45.05</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--================End Isotope Slider Area =================-->

                </div>
                <div class=\"tab-pane fade show\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                    <table class=\"table\">
                        <th>Name</th>
                        <th>Details</th>
                        {% for property in product.specification().properties() %}
                            <tr>
                                <th scope=\"row\">
                                    {{ property.name() }}
                                </th>
                                <td>
                                    <p>
                                        {{ property.viewAsHtml()|raw }}
                                    </p>
                                </td>
                            </tr>
                        {% endfor %}
                    </table>
                </div>
                <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                    {% for comment in product.comments() %}
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <h6 style=\"padding-bottom: 15px\">Jon Conor</h6>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <div class=\"product_details_text\">
                                    <table>
                                        {% for estimate in comment.estimates() %}
                                            <tr>
                                                <td>
                                                    <ul class=\"p_rating\">
                                                        {% for item in 1..estimate.value() %}
                                                            <li><a href=\"#\"><i class=\"fa fa-star\"></i></a></li>
                                                        {% endfor %}
                                                    </ul>
                                                </td>
                                                <td>
                                                    <div class=\"add_review\">
                                                        <a href=\"#\">{{ estimate.name() }}</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </table>
                                </div>
                            </div>
                            <div class=\"col-md-9\">
                                <h6>Title</h6>
                                <p style=\"padding-bottom: 15px\">{{ comment.details().title() }}</p>
                                <h6>Description</h6>
                                <p style=\"padding-bottom: 15px\">{{ comment.details().description() }}</p>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <h6 style=\"display: inline-block\"><span class=\"product_comment_benefits\">Benefits:</span></h6>
                                        <p style=\"padding-bottom: 15px; display: inline-block\">{{ comment.details().benefits() }}</p>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <h6 style=\"display: inline-block\"><span class=\"product_comment_shortcomming\">Shortcoming: </span></h6>
                                        <p style=\"padding-bottom: 15px; display: inline-block\">{{ comment.details().shortcoming() }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
                <div class=\"tab-pane fade\" id=\"nav-related-products\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                    <!--================End Related Product Area =================-->
                    <section class=\"related_product_area\">
                        <div class=\"container\">
                            <div class=\"related_product_inner\">
                                <div class=\"row\">
                                    {% for relatedProduct in product.relatedProducts() %}
                                        <div class=\"col-lg-4 col-sm-6\">
                                            <div class=\"l_product_item\">
                                                <a href=\"/product/{{ relatedProduct.id() }}\">
                                                    <div class=\"l_p_img\">
                                                        <img src=\"{{ asset(relatedProduct.photoGallery().mainPhoto().fullName()) }}\" alt=\"\">
                                                        {% if(product.isSale()) %}
                                                            <h5 class=\"sale\">Sale</h5>
                                                        {% elseif(relatedProduct.isNew()) %}
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
                                                    <h4>{{ relatedProduct.name() }}</h4>
                                                    <h5>
                                                        <del>{{ relatedProduct.oldPrice().amountInCurrency()}}</del> {{ relatedProduct.price().amountInCurrency() }}
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    {%  endfor %}
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--================End Related Product Area =================-->
                </div>
        </div>
    </section>
{% endblock %}", "product/details.html.twig", "/var/www/html/templates/product/details.html.twig");
    }
}
