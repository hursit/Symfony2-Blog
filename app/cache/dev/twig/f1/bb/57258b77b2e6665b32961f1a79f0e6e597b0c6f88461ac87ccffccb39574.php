<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_f1bb57258b77b2e6665b32961f1a79f0e6e597b0c6f88461ac87ccffccb39574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\" />
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute($this->getContext($context, "collector"), "memoryLimit") == (-1))) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memoryLimit") / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  118 => 49,  113 => 48,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  188 => 90,  165 => 83,  153 => 77,  389 => 160,  386 => 159,  380 => 158,  378 => 157,  371 => 156,  367 => 155,  361 => 152,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  281 => 114,  276 => 111,  259 => 103,  253 => 100,  248 => 97,  232 => 88,  222 => 83,  216 => 79,  213 => 78,  210 => 77,  197 => 69,  194 => 68,  191 => 67,  184 => 63,  178 => 66,  175 => 65,  172 => 64,  170 => 84,  155 => 47,  152 => 46,  134 => 54,  127 => 35,  76 => 31,  363 => 153,  357 => 123,  353 => 149,  351 => 120,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  315 => 131,  306 => 107,  303 => 106,  300 => 105,  297 => 104,  291 => 102,  288 => 118,  274 => 110,  265 => 105,  263 => 95,  255 => 101,  231 => 83,  212 => 78,  202 => 94,  190 => 76,  185 => 74,  174 => 65,  161 => 63,  90 => 42,  81 => 23,  65 => 23,  84 => 40,  58 => 25,  53 => 12,  104 => 32,  100 => 39,  97 => 17,  77 => 22,  70 => 15,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 115,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 58,  132 => 51,  128 => 49,  107 => 31,  61 => 12,  273 => 96,  269 => 107,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 72,  179 => 69,  159 => 61,  143 => 51,  135 => 53,  119 => 40,  102 => 40,  71 => 17,  67 => 24,  63 => 26,  59 => 16,  201 => 92,  196 => 92,  183 => 82,  171 => 61,  166 => 54,  163 => 82,  158 => 62,  156 => 62,  151 => 59,  142 => 59,  138 => 54,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 8,  62 => 27,  49 => 14,  38 => 7,  26 => 3,  93 => 28,  88 => 25,  78 => 21,  28 => 3,  94 => 21,  89 => 20,  85 => 24,  75 => 19,  68 => 30,  56 => 19,  27 => 3,  24 => 4,  87 => 34,  46 => 13,  44 => 10,  31 => 4,  25 => 3,  21 => 2,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 11,  40 => 17,  37 => 5,  22 => 2,  246 => 136,  157 => 56,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 43,  111 => 47,  108 => 36,  101 => 31,  98 => 45,  96 => 37,  83 => 33,  74 => 14,  66 => 17,  55 => 16,  52 => 12,  50 => 22,  43 => 12,  41 => 19,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 72,  164 => 59,  162 => 57,  154 => 60,  149 => 51,  147 => 75,  144 => 42,  141 => 73,  133 => 55,  130 => 41,  125 => 51,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 32,  99 => 23,  95 => 28,  92 => 43,  86 => 25,  82 => 19,  80 => 32,  73 => 33,  64 => 23,  60 => 16,  57 => 11,  54 => 20,  51 => 13,  48 => 8,  45 => 19,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 5,);
    }
}
