<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d1451a6b41781b5c9ee3090c82c7e7d5ce5c92e8f5614c0c3476f41a4f976281 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_d4e99ced0ae8d18682dcba6f7d800c01ebe114d0a590d5d1b1f2f015550c47b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e99ced0ae8d18682dcba6f7d800c01ebe114d0a590d5d1b1f2f015550c47b9->enter($__internal_d4e99ced0ae8d18682dcba6f7d800c01ebe114d0a590d5d1b1f2f015550c47b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a7fefc2788f45fae6bafcdae7a5c9e789f27f876aab455eaf06c0ee3195f697e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7fefc2788f45fae6bafcdae7a5c9e789f27f876aab455eaf06c0ee3195f697e->enter($__internal_a7fefc2788f45fae6bafcdae7a5c9e789f27f876aab455eaf06c0ee3195f697e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4e99ced0ae8d18682dcba6f7d800c01ebe114d0a590d5d1b1f2f015550c47b9->leave($__internal_d4e99ced0ae8d18682dcba6f7d800c01ebe114d0a590d5d1b1f2f015550c47b9_prof);

        
        $__internal_a7fefc2788f45fae6bafcdae7a5c9e789f27f876aab455eaf06c0ee3195f697e->leave($__internal_a7fefc2788f45fae6bafcdae7a5c9e789f27f876aab455eaf06c0ee3195f697e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_97c3750eb1f43ca660a7a812b59d8ac328a599408985619f06718995c99bbaed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c3750eb1f43ca660a7a812b59d8ac328a599408985619f06718995c99bbaed->enter($__internal_97c3750eb1f43ca660a7a812b59d8ac328a599408985619f06718995c99bbaed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_378b8fdfc48806b6185c477c61c5379a31076076a8dbcb2e7d7cd2d6449e7588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378b8fdfc48806b6185c477c61c5379a31076076a8dbcb2e7d7cd2d6449e7588->enter($__internal_378b8fdfc48806b6185c477c61c5379a31076076a8dbcb2e7d7cd2d6449e7588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_378b8fdfc48806b6185c477c61c5379a31076076a8dbcb2e7d7cd2d6449e7588->leave($__internal_378b8fdfc48806b6185c477c61c5379a31076076a8dbcb2e7d7cd2d6449e7588_prof);

        
        $__internal_97c3750eb1f43ca660a7a812b59d8ac328a599408985619f06718995c99bbaed->leave($__internal_97c3750eb1f43ca660a7a812b59d8ac328a599408985619f06718995c99bbaed_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/himanshu-koshti/html/symfonyDemo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
