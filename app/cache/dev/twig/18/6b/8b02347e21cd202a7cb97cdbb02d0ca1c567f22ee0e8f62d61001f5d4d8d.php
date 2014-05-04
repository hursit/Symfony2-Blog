<?php

/* HursitBlogBundle:Backend/Pages:new_category.html.twig */
class __TwigTemplate_186b8b02347e21cd202a7cb97cdbb02d0ca1c567f22ee0e8f62d61001f5d4d8d extends Twig_Template
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
        echo "Anasayfa";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <fieldset>
        <legend>Yeni Kategori Ekle</legend>
        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            <div class=\"form-group\">
                <label for=\"form_name\">Kategori İsmi :</label>
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'errors');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'widget');
        echo "
            </div>
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "Kaydet"), 'widget');
        echo "
        ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "form"), 'form_end');
        echo "
    </fieldset>
    
";
    }

    public function getTemplateName()
    {
        return "HursitBlogBundle:Backend/Pages:new_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  61 => 15,  56 => 13,  52 => 12,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
