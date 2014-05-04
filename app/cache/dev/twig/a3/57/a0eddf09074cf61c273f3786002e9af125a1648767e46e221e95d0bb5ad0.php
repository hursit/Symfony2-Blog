<?php

/* HursitBlogBundle:Backend/includes:navbar.html.twig */
class __TwigTemplate_a357a0eddf09074cf61c273f3786002e9af125a1648767e46e221e95d0bb5ad0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
        <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\">
                    <span class=\"sr-only\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("blog_homepage");
        echo "\">Symfony Blog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
                <ul class=\"nav navbar-nav\">
                    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getUrl("backend_posts");
        echo "\">Gönderiler</a>
                    </li>
                    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("backend_categories");
        echo "\">Kategoriler</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>";
    }

    public function getTemplateName()
    {
        return "HursitBlogBundle:Backend/includes:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 19,  40 => 17,  31 => 11,  19 => 1,  116 => 33,  112 => 32,  107 => 31,  104 => 30,  100 => 18,  97 => 17,  91 => 8,  86 => 7,  83 => 6,  77 => 5,  72 => 35,  63 => 26,  54 => 20,  49 => 17,  33 => 6,  23 => 1,  70 => 30,  66 => 16,  61 => 14,  55 => 11,  51 => 19,  47 => 9,  42 => 13,  38 => 6,  35 => 10,  29 => 5,);
    }
}
