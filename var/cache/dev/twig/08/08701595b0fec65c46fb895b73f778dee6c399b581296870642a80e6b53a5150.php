<?php

/* posts/index.html.twig */
class __TwigTemplate_9934ae0cc6647588a09c36bb58bd6d11dbc969f81700ff0a74d92ba12b5f6318 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "posts/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0737a0c2a3c8d1444e91c3717dd351f849bb6a8b036b7a3e2662be5095563e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0737a0c2a3c8d1444e91c3717dd351f849bb6a8b036b7a3e2662be5095563e37->enter($__internal_0737a0c2a3c8d1444e91c3717dd351f849bb6a8b036b7a3e2662be5095563e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "posts/index.html.twig"));

        $__internal_bad0eb221198140c62f8b2e83ea957c5360c0c439aadce659dac9686f521e4db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad0eb221198140c62f8b2e83ea957c5360c0c439aadce659dac9686f521e4db->enter($__internal_bad0eb221198140c62f8b2e83ea957c5360c0c439aadce659dac9686f521e4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "posts/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0737a0c2a3c8d1444e91c3717dd351f849bb6a8b036b7a3e2662be5095563e37->leave($__internal_0737a0c2a3c8d1444e91c3717dd351f849bb6a8b036b7a3e2662be5095563e37_prof);

        
        $__internal_bad0eb221198140c62f8b2e83ea957c5360c0c439aadce659dac9686f521e4db->leave($__internal_bad0eb221198140c62f8b2e83ea957c5360c0c439aadce659dac9686f521e4db_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7e8ec0c4ff20647aaa5334881762e506c150b34e7632d781302c77e2d9db293 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e8ec0c4ff20647aaa5334881762e506c150b34e7632d781302c77e2d9db293->enter($__internal_f7e8ec0c4ff20647aaa5334881762e506c150b34e7632d781302c77e2d9db293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eea1fbac960071891e2c60e5574ff3a15de54251677322f2eba077118cfc93db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea1fbac960071891e2c60e5574ff3a15de54251677322f2eba077118cfc93db->enter($__internal_eea1fbac960071891e2c60e5574ff3a15de54251677322f2eba077118cfc93db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Posts list</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Desc</th>
                <th>Created</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("posts_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "desc", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            if ($this->getAttribute($context["post"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("posts_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("posts_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("posts_new");
        echo "\">Create a new post</a>
        </li>
    </ul>
";
        
        $__internal_eea1fbac960071891e2c60e5574ff3a15de54251677322f2eba077118cfc93db->leave($__internal_eea1fbac960071891e2c60e5574ff3a15de54251677322f2eba077118cfc93db_prof);

        
        $__internal_f7e8ec0c4ff20647aaa5334881762e506c150b34e7632d781302c77e2d9db293->leave($__internal_f7e8ec0c4ff20647aaa5334881762e506c150b34e7632d781302c77e2d9db293_prof);

    }

    public function getTemplateName()
    {
        return "posts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  112 => 35,  100 => 29,  94 => 26,  87 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Posts list</h1>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Desc</th>
                <th>Created</th>
                <th>Id</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for post in posts %}
            <tr>
                <td><a href=\"{{ path('posts_show', { 'id': post.id }) }}\">{{ post.name }}</a></td>
                <td>{{ post.desc }}</td>
                <td>{% if post.created %}{{ post.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ post.id }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('posts_show', { 'id': post.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('posts_edit', { 'id': post.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('posts_new') }}\">Create a new post</a>
        </li>
    </ul>
{% endblock %}
", "posts/index.html.twig", "/home/himanshu-koshti/html/symfonyDemo/app/Resources/views/posts/index.html.twig");
    }
}
