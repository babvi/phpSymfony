<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5b712adbfe12e7c866a4c67439b6a3980ee5996e786786a1cda6ad79515c8c98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70b70b48e4449c8cf7ff5574ebaa799a4bca076d4ab8dc94de5417c0853cb3ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b70b48e4449c8cf7ff5574ebaa799a4bca076d4ab8dc94de5417c0853cb3ef->enter($__internal_70b70b48e4449c8cf7ff5574ebaa799a4bca076d4ab8dc94de5417c0853cb3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b331c88fef92f9819a2fbda73b39cb370cba4453a6c9350ba497b9d718a1f342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b331c88fef92f9819a2fbda73b39cb370cba4453a6c9350ba497b9d718a1f342->enter($__internal_b331c88fef92f9819a2fbda73b39cb370cba4453a6c9350ba497b9d718a1f342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70b70b48e4449c8cf7ff5574ebaa799a4bca076d4ab8dc94de5417c0853cb3ef->leave($__internal_70b70b48e4449c8cf7ff5574ebaa799a4bca076d4ab8dc94de5417c0853cb3ef_prof);

        
        $__internal_b331c88fef92f9819a2fbda73b39cb370cba4453a6c9350ba497b9d718a1f342->leave($__internal_b331c88fef92f9819a2fbda73b39cb370cba4453a6c9350ba497b9d718a1f342_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d87fce393cedd71ae2233a56ed139f47db2f12e8833b3acd233863e02e25430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d87fce393cedd71ae2233a56ed139f47db2f12e8833b3acd233863e02e25430->enter($__internal_3d87fce393cedd71ae2233a56ed139f47db2f12e8833b3acd233863e02e25430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fd7e130aaf5946f916dbc107e8829a6a6d21e6df54cc77af681a59f4f924ad67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7e130aaf5946f916dbc107e8829a6a6d21e6df54cc77af681a59f4f924ad67->enter($__internal_fd7e130aaf5946f916dbc107e8829a6a6d21e6df54cc77af681a59f4f924ad67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fd7e130aaf5946f916dbc107e8829a6a6d21e6df54cc77af681a59f4f924ad67->leave($__internal_fd7e130aaf5946f916dbc107e8829a6a6d21e6df54cc77af681a59f4f924ad67_prof);

        
        $__internal_3d87fce393cedd71ae2233a56ed139f47db2f12e8833b3acd233863e02e25430->leave($__internal_3d87fce393cedd71ae2233a56ed139f47db2f12e8833b3acd233863e02e25430_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bab94353903b8cbdcc5f5f693ab0fbb870355129a931611ff3fa994ba2aa41b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab94353903b8cbdcc5f5f693ab0fbb870355129a931611ff3fa994ba2aa41b9->enter($__internal_bab94353903b8cbdcc5f5f693ab0fbb870355129a931611ff3fa994ba2aa41b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f458f66bc1f8397d0a6939c741ae27a5526a60ea3d323156c93e91f111d66e32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f458f66bc1f8397d0a6939c741ae27a5526a60ea3d323156c93e91f111d66e32->enter($__internal_f458f66bc1f8397d0a6939c741ae27a5526a60ea3d323156c93e91f111d66e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f458f66bc1f8397d0a6939c741ae27a5526a60ea3d323156c93e91f111d66e32->leave($__internal_f458f66bc1f8397d0a6939c741ae27a5526a60ea3d323156c93e91f111d66e32_prof);

        
        $__internal_bab94353903b8cbdcc5f5f693ab0fbb870355129a931611ff3fa994ba2aa41b9->leave($__internal_bab94353903b8cbdcc5f5f693ab0fbb870355129a931611ff3fa994ba2aa41b9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9312bb7be985447a04d213b69a70642fbdc4652fd5c207c283d31af35bcec2dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9312bb7be985447a04d213b69a70642fbdc4652fd5c207c283d31af35bcec2dd->enter($__internal_9312bb7be985447a04d213b69a70642fbdc4652fd5c207c283d31af35bcec2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_46a25adaf9a07b62d84a562e7ca5104c39e382280e10a4dd6d763978f45e59e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a25adaf9a07b62d84a562e7ca5104c39e382280e10a4dd6d763978f45e59e8->enter($__internal_46a25adaf9a07b62d84a562e7ca5104c39e382280e10a4dd6d763978f45e59e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_46a25adaf9a07b62d84a562e7ca5104c39e382280e10a4dd6d763978f45e59e8->leave($__internal_46a25adaf9a07b62d84a562e7ca5104c39e382280e10a4dd6d763978f45e59e8_prof);

        
        $__internal_9312bb7be985447a04d213b69a70642fbdc4652fd5c207c283d31af35bcec2dd->leave($__internal_9312bb7be985447a04d213b69a70642fbdc4652fd5c207c283d31af35bcec2dd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/himanshu-koshti/html/symfonyDemo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
