<?php

/* HursitBlogBundle:Backend/includes:right_menu.html.twig */
class __TwigTemplate_3715fb0b94262f3d69a4dc84b2f5174456d420bc51f945a478faf10c99f7db41 extends Twig_Template
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
        echo "<div class=\"col-lg-4\">
    <div class=\"well\">
        <h4>Blog Kategorileri</h4>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                ";
        // line 6
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("HursitBlogBundle:Post:getCategories"));
        echo "
            </div>
        </div>
    </div>
    <!-- /well -->
    <div class=\"well\">
        <h4>Site Hakkında</h4>
        <p>Sitede Bootstrap stilleri ve teması kullanılmıştır. Symfony2 frameworku ile kodlanmıştır..</p>
    </div>
    <!-- /well -->
</div>";
    }

    public function getTemplateName()
    {
        return "HursitBlogBundle:Backend/includes:right_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  45 => 19,  40 => 17,  31 => 11,  19 => 1,  116 => 33,  112 => 32,  107 => 31,  104 => 30,  100 => 18,  97 => 17,  91 => 8,  86 => 7,  83 => 6,  77 => 5,  72 => 35,  63 => 26,  54 => 20,  49 => 17,  33 => 6,  23 => 1,  70 => 30,  66 => 16,  61 => 14,  55 => 11,  51 => 19,  47 => 9,  42 => 13,  38 => 6,  35 => 10,  29 => 5,);
    }
}
