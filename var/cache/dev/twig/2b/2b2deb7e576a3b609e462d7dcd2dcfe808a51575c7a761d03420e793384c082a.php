<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_55d93e2896641743c6c407412a740b5f126ff4e55691abf303423d7b4ab4c278 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_831c3e4245089c7d515fec863ecf33f20a4056daba398cd3d1047ea5257ec934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831c3e4245089c7d515fec863ecf33f20a4056daba398cd3d1047ea5257ec934->enter($__internal_831c3e4245089c7d515fec863ecf33f20a4056daba398cd3d1047ea5257ec934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c56acb24c196abb2720dcbcb00e36824299e2dca43cbbf07f6ca68539dd79046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56acb24c196abb2720dcbcb00e36824299e2dca43cbbf07f6ca68539dd79046->enter($__internal_c56acb24c196abb2720dcbcb00e36824299e2dca43cbbf07f6ca68539dd79046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_831c3e4245089c7d515fec863ecf33f20a4056daba398cd3d1047ea5257ec934->leave($__internal_831c3e4245089c7d515fec863ecf33f20a4056daba398cd3d1047ea5257ec934_prof);

        
        $__internal_c56acb24c196abb2720dcbcb00e36824299e2dca43cbbf07f6ca68539dd79046->leave($__internal_c56acb24c196abb2720dcbcb00e36824299e2dca43cbbf07f6ca68539dd79046_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_097d6f00c59a45e4ec7fb6c6fdfd9ed44b4c17d04527d9372db65738e6682960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_097d6f00c59a45e4ec7fb6c6fdfd9ed44b4c17d04527d9372db65738e6682960->enter($__internal_097d6f00c59a45e4ec7fb6c6fdfd9ed44b4c17d04527d9372db65738e6682960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9608b89e5dceaccd3b33011b0942b1077bb5557bca83354b289a23997bb96d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9608b89e5dceaccd3b33011b0942b1077bb5557bca83354b289a23997bb96d7e->enter($__internal_9608b89e5dceaccd3b33011b0942b1077bb5557bca83354b289a23997bb96d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9608b89e5dceaccd3b33011b0942b1077bb5557bca83354b289a23997bb96d7e->leave($__internal_9608b89e5dceaccd3b33011b0942b1077bb5557bca83354b289a23997bb96d7e_prof);

        
        $__internal_097d6f00c59a45e4ec7fb6c6fdfd9ed44b4c17d04527d9372db65738e6682960->leave($__internal_097d6f00c59a45e4ec7fb6c6fdfd9ed44b4c17d04527d9372db65738e6682960_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_40f5b730224b4a6362c695de2be685e703c33d1c6c476122059c451caa190250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f5b730224b4a6362c695de2be685e703c33d1c6c476122059c451caa190250->enter($__internal_40f5b730224b4a6362c695de2be685e703c33d1c6c476122059c451caa190250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bfdc2e0b3654b33266e208525aa635b6e5e1d26bb2db5df0ac63ae64a15e05bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfdc2e0b3654b33266e208525aa635b6e5e1d26bb2db5df0ac63ae64a15e05bb->enter($__internal_bfdc2e0b3654b33266e208525aa635b6e5e1d26bb2db5df0ac63ae64a15e05bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bfdc2e0b3654b33266e208525aa635b6e5e1d26bb2db5df0ac63ae64a15e05bb->leave($__internal_bfdc2e0b3654b33266e208525aa635b6e5e1d26bb2db5df0ac63ae64a15e05bb_prof);

        
        $__internal_40f5b730224b4a6362c695de2be685e703c33d1c6c476122059c451caa190250->leave($__internal_40f5b730224b4a6362c695de2be685e703c33d1c6c476122059c451caa190250_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_03251b80aa7fc1d7aec7ca0d2734e5f5dcb1fe17331947afae855467f6491630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03251b80aa7fc1d7aec7ca0d2734e5f5dcb1fe17331947afae855467f6491630->enter($__internal_03251b80aa7fc1d7aec7ca0d2734e5f5dcb1fe17331947afae855467f6491630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f46356ee22b1d7c2780f37360518bd0b319255ad629ec28d6f841226ea8e9925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46356ee22b1d7c2780f37360518bd0b319255ad629ec28d6f841226ea8e9925->enter($__internal_f46356ee22b1d7c2780f37360518bd0b319255ad629ec28d6f841226ea8e9925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f46356ee22b1d7c2780f37360518bd0b319255ad629ec28d6f841226ea8e9925->leave($__internal_f46356ee22b1d7c2780f37360518bd0b319255ad629ec28d6f841226ea8e9925_prof);

        
        $__internal_03251b80aa7fc1d7aec7ca0d2734e5f5dcb1fe17331947afae855467f6491630->leave($__internal_03251b80aa7fc1d7aec7ca0d2734e5f5dcb1fe17331947afae855467f6491630_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/himanshu-koshti/html/symfonyDemo/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
