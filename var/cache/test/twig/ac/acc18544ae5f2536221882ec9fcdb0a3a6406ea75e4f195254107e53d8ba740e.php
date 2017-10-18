<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_95ec65c7290c52075ed18a8c3c04926e36b0a7a6cee6d118ce9baeecded57a18 extends Twig_Template
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
        $__internal_5f24ef2227b4d121de1d7841e1cf02a9ebfab6421bb4b50a2163ece520cc7259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f24ef2227b4d121de1d7841e1cf02a9ebfab6421bb4b50a2163ece520cc7259->enter($__internal_5f24ef2227b4d121de1d7841e1cf02a9ebfab6421bb4b50a2163ece520cc7259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_0e6256d7c45fdd4677c807f518f78f677ec0d0b7fba4676c31d3955ab5daf20c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6256d7c45fdd4677c807f518f78f677ec0d0b7fba4676c31d3955ab5daf20c->enter($__internal_0e6256d7c45fdd4677c807f518f78f677ec0d0b7fba4676c31d3955ab5daf20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_5f24ef2227b4d121de1d7841e1cf02a9ebfab6421bb4b50a2163ece520cc7259->leave($__internal_5f24ef2227b4d121de1d7841e1cf02a9ebfab6421bb4b50a2163ece520cc7259_prof);

        
        $__internal_0e6256d7c45fdd4677c807f518f78f677ec0d0b7fba4676c31d3955ab5daf20c->leave($__internal_0e6256d7c45fdd4677c807f518f78f677ec0d0b7fba4676c31d3955ab5daf20c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/himanshu-koshti/html/symfonyDemo/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
