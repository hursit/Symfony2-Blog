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
        return array (  116 => 33,  112 => 32,  107 => 31,  104 => 30,  100 => 18,  97 => 17,  91 => 8,  86 => 7,  83 => 6,  77 => 5,  72 => 35,  63 => 26,  54 => 20,  49 => 17,  33 => 6,  23 => 1,  70 => 30,  66 => 16,  61 => 14,  55 => 11,  51 => 19,  47 => 9,  42 => 13,  38 => 6,  35 => 10,  29 => 5,);
    }
}
