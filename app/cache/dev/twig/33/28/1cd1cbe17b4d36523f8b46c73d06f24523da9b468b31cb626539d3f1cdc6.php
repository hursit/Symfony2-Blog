<?php

/* HursitBlogBundle:Backend:backend_layout.html.twig */
class __TwigTemplate_33281cd1cbe17b4d36523f8b46c73d06f24523da9b468b31cb626539d3f1cdc6 extends Twig_Template
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
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    ";
        // line 13
        echo twig_include($this->env, $context, "HursitBlogBundle:Backend/includes:navbar.html.twig");
        echo "
    <div class=\"container\">
    <div class=\"row\">
            <div class=\"col-lg-8\">
                ";
        // line 17
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "            </div>
            ";
        // line 20
        echo twig_include($this->env, $context, "HursitBlogBundle:Backend/includes:right_menu.html.twig");
        echo "
            
        </div>

        <hr>

        ";
        // line 26
        echo twig_include($this->env, $context, "HursitBlogBundle:Backend/includes:footer.html.twig");
        echo "
    </div>
    <!-- /.container -->

            ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Blogum";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("theme/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("theme/css/blog-post.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "                ";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "                <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("theme/js/bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("theme/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
                <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("theme/js/jquery-2.1.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            ";
    }

    public function getTemplateName()
    {
        return "HursitBlogBundle:Backend:backend_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 27,  58 => 13,  53 => 12,  104 => 30,  100 => 18,  97 => 17,  77 => 5,  70 => 30,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 31,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 23,  67 => 22,  63 => 26,  59 => 20,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 8,  62 => 14,  49 => 17,  38 => 6,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  28 => 3,  94 => 28,  89 => 20,  85 => 25,  75 => 24,  68 => 14,  56 => 19,  27 => 4,  24 => 4,  87 => 25,  46 => 7,  44 => 12,  31 => 11,  25 => 3,  21 => 2,  19 => 1,  79 => 18,  72 => 35,  69 => 25,  47 => 9,  40 => 17,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 6,  74 => 14,  66 => 24,  55 => 23,  52 => 18,  50 => 21,  43 => 7,  41 => 5,  35 => 10,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 33,  112 => 32,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 7,  82 => 22,  80 => 41,  73 => 19,  64 => 17,  60 => 25,  57 => 11,  54 => 20,  51 => 19,  48 => 13,  45 => 19,  42 => 13,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
