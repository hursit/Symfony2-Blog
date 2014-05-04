<?php

/* HursitBlogBundle:Default/includes:categories.html.twig */
class __TwigTemplate_5cd41b2b02f06e6bdaaaf3ab1caea899d55483301eb26ee645e895d4162a12c7 extends Twig_Template
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
        echo "<ul class=\"list-unstyled\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "categories"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("category_show", array("id" => $this->getAttribute($this->getContext($context, "category"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "name")), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "HursitBlogBundle:Default/includes:categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 5,  22 => 2,  26 => 3,  45 => 19,  40 => 17,  31 => 11,  19 => 1,  116 => 33,  112 => 32,  107 => 31,  104 => 30,  100 => 18,  97 => 17,  91 => 8,  86 => 7,  83 => 6,  77 => 5,  72 => 35,  63 => 26,  54 => 20,  49 => 17,  33 => 6,  23 => 1,  70 => 30,  66 => 16,  61 => 14,  55 => 11,  51 => 19,  47 => 9,  42 => 13,  38 => 6,  35 => 10,  29 => 5,);
    }
}
