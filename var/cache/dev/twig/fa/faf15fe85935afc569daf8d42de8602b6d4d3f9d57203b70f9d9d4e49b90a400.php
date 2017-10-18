<?php

/* base.html.twig */
class __TwigTemplate_800f016a509a651c87e7a376a40b2261c57ba78cdaf77ab1a4537ad4f7850fe4 extends Twig_Template
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
        $__internal_167c231994b7ebc2d353330cdbbffbd9ae52545c28cf1d637b4dd79dfe7b8d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_167c231994b7ebc2d353330cdbbffbd9ae52545c28cf1d637b4dd79dfe7b8d6f->enter($__internal_167c231994b7ebc2d353330cdbbffbd9ae52545c28cf1d637b4dd79dfe7b8d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0f22fa4f4e870103ecb7f441c7f59997f165b2f0d4be83a786e5710812643b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f22fa4f4e870103ecb7f441c7f59997f165b2f0d4be83a786e5710812643b3e->enter($__internal_0f22fa4f4e870103ecb7f441c7f59997f165b2f0d4be83a786e5710812643b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_167c231994b7ebc2d353330cdbbffbd9ae52545c28cf1d637b4dd79dfe7b8d6f->leave($__internal_167c231994b7ebc2d353330cdbbffbd9ae52545c28cf1d637b4dd79dfe7b8d6f_prof);

        
        $__internal_0f22fa4f4e870103ecb7f441c7f59997f165b2f0d4be83a786e5710812643b3e->leave($__internal_0f22fa4f4e870103ecb7f441c7f59997f165b2f0d4be83a786e5710812643b3e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9da46e5a4b1dbbe85b22f9c4dc6b8a732c817a76705f12632f0ba650f92b3af1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9da46e5a4b1dbbe85b22f9c4dc6b8a732c817a76705f12632f0ba650f92b3af1->enter($__internal_9da46e5a4b1dbbe85b22f9c4dc6b8a732c817a76705f12632f0ba650f92b3af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe001f75ca0caa661d1ef64043ec29718814712af4f9bf9e2b06f7b46e2a85cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe001f75ca0caa661d1ef64043ec29718814712af4f9bf9e2b06f7b46e2a85cb->enter($__internal_fe001f75ca0caa661d1ef64043ec29718814712af4f9bf9e2b06f7b46e2a85cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fe001f75ca0caa661d1ef64043ec29718814712af4f9bf9e2b06f7b46e2a85cb->leave($__internal_fe001f75ca0caa661d1ef64043ec29718814712af4f9bf9e2b06f7b46e2a85cb_prof);

        
        $__internal_9da46e5a4b1dbbe85b22f9c4dc6b8a732c817a76705f12632f0ba650f92b3af1->leave($__internal_9da46e5a4b1dbbe85b22f9c4dc6b8a732c817a76705f12632f0ba650f92b3af1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e7adeff9360475de006162d7f7e9504c7f108397466f86373b69667ae9626505 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7adeff9360475de006162d7f7e9504c7f108397466f86373b69667ae9626505->enter($__internal_e7adeff9360475de006162d7f7e9504c7f108397466f86373b69667ae9626505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8776d7ce86d8a398b22a68501f512fb5f8596a3f426ff793632ee2634a2b2599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8776d7ce86d8a398b22a68501f512fb5f8596a3f426ff793632ee2634a2b2599->enter($__internal_8776d7ce86d8a398b22a68501f512fb5f8596a3f426ff793632ee2634a2b2599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8776d7ce86d8a398b22a68501f512fb5f8596a3f426ff793632ee2634a2b2599->leave($__internal_8776d7ce86d8a398b22a68501f512fb5f8596a3f426ff793632ee2634a2b2599_prof);

        
        $__internal_e7adeff9360475de006162d7f7e9504c7f108397466f86373b69667ae9626505->leave($__internal_e7adeff9360475de006162d7f7e9504c7f108397466f86373b69667ae9626505_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f3d9ff50afd937e9ac72e33137584c2a801d92edf6a8f567e6e39002b7f3124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f3d9ff50afd937e9ac72e33137584c2a801d92edf6a8f567e6e39002b7f3124->enter($__internal_1f3d9ff50afd937e9ac72e33137584c2a801d92edf6a8f567e6e39002b7f3124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4704c8392c06c224ee703ae0c1b0fa05071db969147fc8559cb72b58ea723d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4704c8392c06c224ee703ae0c1b0fa05071db969147fc8559cb72b58ea723d1e->enter($__internal_4704c8392c06c224ee703ae0c1b0fa05071db969147fc8559cb72b58ea723d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4704c8392c06c224ee703ae0c1b0fa05071db969147fc8559cb72b58ea723d1e->leave($__internal_4704c8392c06c224ee703ae0c1b0fa05071db969147fc8559cb72b58ea723d1e_prof);

        
        $__internal_1f3d9ff50afd937e9ac72e33137584c2a801d92edf6a8f567e6e39002b7f3124->leave($__internal_1f3d9ff50afd937e9ac72e33137584c2a801d92edf6a8f567e6e39002b7f3124_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91d1805820b13b724a2c82da924fc9d01d8d4e187433f6d604aa40f124a3fe47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91d1805820b13b724a2c82da924fc9d01d8d4e187433f6d604aa40f124a3fe47->enter($__internal_91d1805820b13b724a2c82da924fc9d01d8d4e187433f6d604aa40f124a3fe47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ca4514b80a23b589daa47983a71378386c8b5a54a0e63f83e3f5e67e4bdb412c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4514b80a23b589daa47983a71378386c8b5a54a0e63f83e3f5e67e4bdb412c->enter($__internal_ca4514b80a23b589daa47983a71378386c8b5a54a0e63f83e3f5e67e4bdb412c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ca4514b80a23b589daa47983a71378386c8b5a54a0e63f83e3f5e67e4bdb412c->leave($__internal_ca4514b80a23b589daa47983a71378386c8b5a54a0e63f83e3f5e67e4bdb412c_prof);

        
        $__internal_91d1805820b13b724a2c82da924fc9d01d8d4e187433f6d604aa40f124a3fe47->leave($__internal_91d1805820b13b724a2c82da924fc9d01d8d4e187433f6d604aa40f124a3fe47_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/himanshu-koshti/html/symfonyDemo/app/Resources/views/base.html.twig");
    }
}
