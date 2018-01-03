<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f32ad73c9bc804e7d7685ce925e27ce9c7daa98efc0b9a8c89227d7076a75563 extends Twig_Template
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
        $__internal_a4a58db93c0752e17960b4d8c2495d2ddd7d1787b600c9615f511367dc6840bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a58db93c0752e17960b4d8c2495d2ddd7d1787b600c9615f511367dc6840bd->enter($__internal_a4a58db93c0752e17960b4d8c2495d2ddd7d1787b600c9615f511367dc6840bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_be908e383adc0df6c0880ee034198bf4bd119f4169054991039034ca96faa93b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be908e383adc0df6c0880ee034198bf4bd119f4169054991039034ca96faa93b->enter($__internal_be908e383adc0df6c0880ee034198bf4bd119f4169054991039034ca96faa93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4a58db93c0752e17960b4d8c2495d2ddd7d1787b600c9615f511367dc6840bd->leave($__internal_a4a58db93c0752e17960b4d8c2495d2ddd7d1787b600c9615f511367dc6840bd_prof);

        
        $__internal_be908e383adc0df6c0880ee034198bf4bd119f4169054991039034ca96faa93b->leave($__internal_be908e383adc0df6c0880ee034198bf4bd119f4169054991039034ca96faa93b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f64c3cbf9195d183bd2345fa4a2eac36e1616966755d396c006b7e238e5a102e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64c3cbf9195d183bd2345fa4a2eac36e1616966755d396c006b7e238e5a102e->enter($__internal_f64c3cbf9195d183bd2345fa4a2eac36e1616966755d396c006b7e238e5a102e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4f9d3534a82cd0e763f3afb0708ae5093d307a7cf2a79b53dd74deb61c4531ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f9d3534a82cd0e763f3afb0708ae5093d307a7cf2a79b53dd74deb61c4531ea->enter($__internal_4f9d3534a82cd0e763f3afb0708ae5093d307a7cf2a79b53dd74deb61c4531ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4f9d3534a82cd0e763f3afb0708ae5093d307a7cf2a79b53dd74deb61c4531ea->leave($__internal_4f9d3534a82cd0e763f3afb0708ae5093d307a7cf2a79b53dd74deb61c4531ea_prof);

        
        $__internal_f64c3cbf9195d183bd2345fa4a2eac36e1616966755d396c006b7e238e5a102e->leave($__internal_f64c3cbf9195d183bd2345fa4a2eac36e1616966755d396c006b7e238e5a102e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0cb13d2c7ca024f8b310082cfe93497331913cd3009fbcc6f798319f335a59e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0cb13d2c7ca024f8b310082cfe93497331913cd3009fbcc6f798319f335a59e->enter($__internal_c0cb13d2c7ca024f8b310082cfe93497331913cd3009fbcc6f798319f335a59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3b9a3b5f43d8f046dadddb8dcf9946d90318324f6c1e671c097ef4d6a1b0fe96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9a3b5f43d8f046dadddb8dcf9946d90318324f6c1e671c097ef4d6a1b0fe96->enter($__internal_3b9a3b5f43d8f046dadddb8dcf9946d90318324f6c1e671c097ef4d6a1b0fe96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_3b9a3b5f43d8f046dadddb8dcf9946d90318324f6c1e671c097ef4d6a1b0fe96->leave($__internal_3b9a3b5f43d8f046dadddb8dcf9946d90318324f6c1e671c097ef4d6a1b0fe96_prof);

        
        $__internal_c0cb13d2c7ca024f8b310082cfe93497331913cd3009fbcc6f798319f335a59e->leave($__internal_c0cb13d2c7ca024f8b310082cfe93497331913cd3009fbcc6f798319f335a59e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fff496fd51e612d215cf0c05f5cc8e851950d841528638ce211953785213f23f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff496fd51e612d215cf0c05f5cc8e851950d841528638ce211953785213f23f->enter($__internal_fff496fd51e612d215cf0c05f5cc8e851950d841528638ce211953785213f23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fad4af99dc0c447c664d5c76b7858ed8a3f3582457d45d1732c133b9df85711e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad4af99dc0c447c664d5c76b7858ed8a3f3582457d45d1732c133b9df85711e->enter($__internal_fad4af99dc0c447c664d5c76b7858ed8a3f3582457d45d1732c133b9df85711e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_fad4af99dc0c447c664d5c76b7858ed8a3f3582457d45d1732c133b9df85711e->leave($__internal_fad4af99dc0c447c664d5c76b7858ed8a3f3582457d45d1732c133b9df85711e_prof);

        
        $__internal_fff496fd51e612d215cf0c05f5cc8e851950d841528638ce211953785213f23f->leave($__internal_fff496fd51e612d215cf0c05f5cc8e851950d841528638ce211953785213f23f_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\User\\Desktop\\Skeletons\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
