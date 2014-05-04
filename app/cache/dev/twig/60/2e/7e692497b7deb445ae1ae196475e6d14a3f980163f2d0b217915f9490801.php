<?php

/* HursitBlogBundle:Backend/Pages/Post:showPost.html.twig */
class __TwigTemplate_602e7e692497b7deb445ae1ae196475e6d14a3f980163f2d0b217915f9490801 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("HursitBlogBundle:Backend:backend_layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HursitBlogBundle:Backend:backend_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "title"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "title"), "html", null, true);
        echo "</h1>
         <hr>
         <p>
             <span class=\"glyphicon glyphicon-time\"></span> <strong>Gönderilme:</strong> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "post"), "created"), "html", null, true);
        echo " &Diamond; <strong>Kategori:</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "post"), "category_id"), "name"), "html", null, true);
        echo "</p>
         <hr>
             <br>
             &xmap;&nbsp;&nbsp;";
        // line 12
        echo $this->getAttribute($this->getContext($context, "post"), "detail");
        echo "
             <div class=\"clear\"></div>
             
             <hr><br>
             <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("backend_edit_post", array("id" => $this->getAttribute($this->getContext($context, "post"), "id"))), "html", null, true);
        echo "\" class=\"btn btn-warning\">Düzenle</a> &DoubleLongLeftRightArrow;<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("backend_delete_post", array("id" => $this->getAttribute($this->getContext($context, "post"), "id"))), "html", null, true);
        echo "\" class=\"btn btn-danger\">Sil</a>
";
    }

    public function getTemplateName()
    {
        return "HursitBlogBundle:Backend/Pages/Post:showPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  81 => 23,  65 => 23,  84 => 27,  58 => 13,  53 => 12,  104 => 30,  100 => 18,  97 => 17,  77 => 22,  70 => 18,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 31,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 22,  63 => 26,  59 => 13,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 8,  62 => 14,  49 => 9,  38 => 6,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  28 => 3,  94 => 31,  89 => 20,  85 => 28,  75 => 18,  68 => 16,  56 => 19,  27 => 4,  24 => 4,  87 => 25,  46 => 7,  44 => 12,  31 => 11,  25 => 3,  21 => 2,  19 => 1,  79 => 18,  72 => 35,  69 => 24,  47 => 9,  40 => 17,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 6,  74 => 14,  66 => 17,  55 => 12,  52 => 18,  50 => 10,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 33,  112 => 32,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 25,  82 => 22,  80 => 41,  73 => 25,  64 => 15,  60 => 16,  57 => 11,  54 => 20,  51 => 19,  48 => 8,  45 => 9,  42 => 13,  39 => 9,  36 => 5,  33 => 6,  30 => 7,);
    }
}
