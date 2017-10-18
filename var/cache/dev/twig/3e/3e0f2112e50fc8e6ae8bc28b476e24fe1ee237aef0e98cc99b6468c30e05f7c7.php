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
        $__internal_ca4cda32ab90290cd4b5ace5dc2d1433091f8a5a9c3f7f0dd19312514702fbf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca4cda32ab90290cd4b5ace5dc2d1433091f8a5a9c3f7f0dd19312514702fbf3->enter($__internal_ca4cda32ab90290cd4b5ace5dc2d1433091f8a5a9c3f7f0dd19312514702fbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_a678ee21c27d69168e1efb8eb15c203893e76f8a2ddf89c3560515f59d376581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a678ee21c27d69168e1efb8eb15c203893e76f8a2ddf89c3560515f59d376581->enter($__internal_a678ee21c27d69168e1efb8eb15c203893e76f8a2ddf89c3560515f59d376581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca4cda32ab90290cd4b5ace5dc2d1433091f8a5a9c3f7f0dd19312514702fbf3->leave($__internal_ca4cda32ab90290cd4b5ace5dc2d1433091f8a5a9c3f7f0dd19312514702fbf3_prof);

        
        $__internal_a678ee21c27d69168e1efb8eb15c203893e76f8a2ddf89c3560515f59d376581->leave($__internal_a678ee21c27d69168e1efb8eb15c203893e76f8a2ddf89c3560515f59d376581_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b8e892f689ad900969ed524a9cf3fcea512c28ccfc7eef94c2ad04ae15a22b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8e892f689ad900969ed524a9cf3fcea512c28ccfc7eef94c2ad04ae15a22b29->enter($__internal_b8e892f689ad900969ed524a9cf3fcea512c28ccfc7eef94c2ad04ae15a22b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e4fefb29df41adf4de982c78ec99d88e23719e4687c6a25d081d668febd03bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4fefb29df41adf4de982c78ec99d88e23719e4687c6a25d081d668febd03bf7->enter($__internal_e4fefb29df41adf4de982c78ec99d88e23719e4687c6a25d081d668febd03bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e4fefb29df41adf4de982c78ec99d88e23719e4687c6a25d081d668febd03bf7->leave($__internal_e4fefb29df41adf4de982c78ec99d88e23719e4687c6a25d081d668febd03bf7_prof);

        
        $__internal_b8e892f689ad900969ed524a9cf3fcea512c28ccfc7eef94c2ad04ae15a22b29->leave($__internal_b8e892f689ad900969ed524a9cf3fcea512c28ccfc7eef94c2ad04ae15a22b29_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_82f25209789be9f0e3865be2163e3747e5744164664610ca8207799535af691a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f25209789be9f0e3865be2163e3747e5744164664610ca8207799535af691a->enter($__internal_82f25209789be9f0e3865be2163e3747e5744164664610ca8207799535af691a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8116f35075fedb8e219d2c4d9fbdbc92b8bfb36a8a3d6566d90ba1cb29771c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8116f35075fedb8e219d2c4d9fbdbc92b8bfb36a8a3d6566d90ba1cb29771c0a->enter($__internal_8116f35075fedb8e219d2c4d9fbdbc92b8bfb36a8a3d6566d90ba1cb29771c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8116f35075fedb8e219d2c4d9fbdbc92b8bfb36a8a3d6566d90ba1cb29771c0a->leave($__internal_8116f35075fedb8e219d2c4d9fbdbc92b8bfb36a8a3d6566d90ba1cb29771c0a_prof);

        
        $__internal_82f25209789be9f0e3865be2163e3747e5744164664610ca8207799535af691a->leave($__internal_82f25209789be9f0e3865be2163e3747e5744164664610ca8207799535af691a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3a66b1ee4dd0a23629783a46e69dca3277cf4221351ee0f556ddecb80aa3e29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a66b1ee4dd0a23629783a46e69dca3277cf4221351ee0f556ddecb80aa3e29->enter($__internal_a3a66b1ee4dd0a23629783a46e69dca3277cf4221351ee0f556ddecb80aa3e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64574f295ca769f67b4178eb2f677392e38cc921d427498ea6d2314f72a9e77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64574f295ca769f67b4178eb2f677392e38cc921d427498ea6d2314f72a9e77a->enter($__internal_64574f295ca769f67b4178eb2f677392e38cc921d427498ea6d2314f72a9e77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_64574f295ca769f67b4178eb2f677392e38cc921d427498ea6d2314f72a9e77a->leave($__internal_64574f295ca769f67b4178eb2f677392e38cc921d427498ea6d2314f72a9e77a_prof);

        
        $__internal_a3a66b1ee4dd0a23629783a46e69dca3277cf4221351ee0f556ddecb80aa3e29->leave($__internal_a3a66b1ee4dd0a23629783a46e69dca3277cf4221351ee0f556ddecb80aa3e29_prof);

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
