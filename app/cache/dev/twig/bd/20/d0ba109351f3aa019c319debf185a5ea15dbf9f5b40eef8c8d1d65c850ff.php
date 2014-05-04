<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_bd20d0ba109351f3aa019c319debf185a5ea15dbf9f5b40eef8c8d1d65c850ff extends Twig_Template
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
        if ($this->getAttribute($this->getContext($context, "trace"), "function")) {
            // line 2
            echo "    at ";
            echo (($this->getAttribute($this->getContext($context, "trace"), "class") . $this->getAttribute($this->getContext($context, "trace"), "type")) . $this->getAttribute($this->getContext($context, "trace"), "function"));
            echo "(";
            echo $this->env->getExtension('code')->formatArgsAsText($this->getAttribute($this->getContext($context, "trace"), "args"));
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute($this->getContext($context, "trace", true), "file", array(), "any", true, true) && $this->getAttribute($this->getContext($context, "trace", true), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo $this->getAttribute($this->getContext($context, "trace"), "file");
            echo " line ";
            echo $this->getAttribute($this->getContext($context, "trace"), "line");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  29 => 4,  87 => 20,  80 => 19,  66 => 15,  57 => 14,  55 => 13,  51 => 12,  46 => 11,  44 => 10,  36 => 7,  31 => 5,  25 => 4,  21 => 2,  101 => 24,  94 => 22,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  39 => 6,  33 => 6,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
