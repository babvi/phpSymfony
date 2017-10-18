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
        $__internal_ad0b46f425e2f894f0662ae4584e7b9c9be5bbfa08c94fb6d8bf55ef17674587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad0b46f425e2f894f0662ae4584e7b9c9be5bbfa08c94fb6d8bf55ef17674587->enter($__internal_ad0b46f425e2f894f0662ae4584e7b9c9be5bbfa08c94fb6d8bf55ef17674587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_710f099e7ed95d99deaff08099c1da78d193fef3d276f3e27293a206924030b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710f099e7ed95d99deaff08099c1da78d193fef3d276f3e27293a206924030b0->enter($__internal_710f099e7ed95d99deaff08099c1da78d193fef3d276f3e27293a206924030b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_ad0b46f425e2f894f0662ae4584e7b9c9be5bbfa08c94fb6d8bf55ef17674587->leave($__internal_ad0b46f425e2f894f0662ae4584e7b9c9be5bbfa08c94fb6d8bf55ef17674587_prof);

        
        $__internal_710f099e7ed95d99deaff08099c1da78d193fef3d276f3e27293a206924030b0->leave($__internal_710f099e7ed95d99deaff08099c1da78d193fef3d276f3e27293a206924030b0_prof);

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
