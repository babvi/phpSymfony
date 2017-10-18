<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_edcb3c4f4b4aa23a7bf7338479013cf07f85d9eb10ae5e2337649869eb8994f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d6d54a4753c10635182682b4a14ee826a9753198c8c3d78bd235e293911bf0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6d54a4753c10635182682b4a14ee826a9753198c8c3d78bd235e293911bf0c->enter($__internal_2d6d54a4753c10635182682b4a14ee826a9753198c8c3d78bd235e293911bf0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9b54904a25c59980ec7fd71ae404285509420c9563d0ec1e15d63b498031e760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b54904a25c59980ec7fd71ae404285509420c9563d0ec1e15d63b498031e760->enter($__internal_9b54904a25c59980ec7fd71ae404285509420c9563d0ec1e15d63b498031e760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d6d54a4753c10635182682b4a14ee826a9753198c8c3d78bd235e293911bf0c->leave($__internal_2d6d54a4753c10635182682b4a14ee826a9753198c8c3d78bd235e293911bf0c_prof);

        
        $__internal_9b54904a25c59980ec7fd71ae404285509420c9563d0ec1e15d63b498031e760->leave($__internal_9b54904a25c59980ec7fd71ae404285509420c9563d0ec1e15d63b498031e760_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f28288df9cd648a6ee85e836b189e59d9de1219a845278fcea186682660ecef1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f28288df9cd648a6ee85e836b189e59d9de1219a845278fcea186682660ecef1->enter($__internal_f28288df9cd648a6ee85e836b189e59d9de1219a845278fcea186682660ecef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2e41ed51ee52998da0eccc5906db45402667385fe7c3011d4252205b315b31ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e41ed51ee52998da0eccc5906db45402667385fe7c3011d4252205b315b31ce->enter($__internal_2e41ed51ee52998da0eccc5906db45402667385fe7c3011d4252205b315b31ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2e41ed51ee52998da0eccc5906db45402667385fe7c3011d4252205b315b31ce->leave($__internal_2e41ed51ee52998da0eccc5906db45402667385fe7c3011d4252205b315b31ce_prof);

        
        $__internal_f28288df9cd648a6ee85e836b189e59d9de1219a845278fcea186682660ecef1->leave($__internal_f28288df9cd648a6ee85e836b189e59d9de1219a845278fcea186682660ecef1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b11be27dc1c32fefd8cf9a7867c83566febdc4ff9125a3a9cc425d9538451dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11be27dc1c32fefd8cf9a7867c83566febdc4ff9125a3a9cc425d9538451dda->enter($__internal_b11be27dc1c32fefd8cf9a7867c83566febdc4ff9125a3a9cc425d9538451dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da86a156344ca397c4fac09798945f5c7ca2190de91b9a8c8607f5e5145c848d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da86a156344ca397c4fac09798945f5c7ca2190de91b9a8c8607f5e5145c848d->enter($__internal_da86a156344ca397c4fac09798945f5c7ca2190de91b9a8c8607f5e5145c848d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_da86a156344ca397c4fac09798945f5c7ca2190de91b9a8c8607f5e5145c848d->leave($__internal_da86a156344ca397c4fac09798945f5c7ca2190de91b9a8c8607f5e5145c848d_prof);

        
        $__internal_b11be27dc1c32fefd8cf9a7867c83566febdc4ff9125a3a9cc425d9538451dda->leave($__internal_b11be27dc1c32fefd8cf9a7867c83566febdc4ff9125a3a9cc425d9538451dda_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e92c10c4249bfa51b3753295e20dcb430d55fba999fc50f9c8fcd620c0926c5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e92c10c4249bfa51b3753295e20dcb430d55fba999fc50f9c8fcd620c0926c5a->enter($__internal_e92c10c4249bfa51b3753295e20dcb430d55fba999fc50f9c8fcd620c0926c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a717afd00d5219dfd55acfb8db00bcfbdbf2893f76e00edc5c094c6d3a715c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a717afd00d5219dfd55acfb8db00bcfbdbf2893f76e00edc5c094c6d3a715c9e->enter($__internal_a717afd00d5219dfd55acfb8db00bcfbdbf2893f76e00edc5c094c6d3a715c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a717afd00d5219dfd55acfb8db00bcfbdbf2893f76e00edc5c094c6d3a715c9e->leave($__internal_a717afd00d5219dfd55acfb8db00bcfbdbf2893f76e00edc5c094c6d3a715c9e_prof);

        
        $__internal_e92c10c4249bfa51b3753295e20dcb430d55fba999fc50f9c8fcd620c0926c5a->leave($__internal_e92c10c4249bfa51b3753295e20dcb430d55fba999fc50f9c8fcd620c0926c5a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/himanshu-koshti/html/symfonyDemo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
