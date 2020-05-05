<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d6a6a31272debe58f423308ac57c0bb350e83169423a3b3c61ae04de197e4346 extends Twig_Template
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
        $__internal_f6195ee9e26d01d52fb4eab9308d31f975b31f41209e814b21036aa755897224 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6195ee9e26d01d52fb4eab9308d31f975b31f41209e814b21036aa755897224->enter($__internal_f6195ee9e26d01d52fb4eab9308d31f975b31f41209e814b21036aa755897224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c1285d1ef8aeaa7b152451c2d0b536416d7a24399ada98dc101e714ae2dee865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1285d1ef8aeaa7b152451c2d0b536416d7a24399ada98dc101e714ae2dee865->enter($__internal_c1285d1ef8aeaa7b152451c2d0b536416d7a24399ada98dc101e714ae2dee865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6195ee9e26d01d52fb4eab9308d31f975b31f41209e814b21036aa755897224->leave($__internal_f6195ee9e26d01d52fb4eab9308d31f975b31f41209e814b21036aa755897224_prof);

        
        $__internal_c1285d1ef8aeaa7b152451c2d0b536416d7a24399ada98dc101e714ae2dee865->leave($__internal_c1285d1ef8aeaa7b152451c2d0b536416d7a24399ada98dc101e714ae2dee865_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_88a6ee1ce92ac3e849ebb39a5fdb350f03d13bd76d0f0903be226972b7fd3083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88a6ee1ce92ac3e849ebb39a5fdb350f03d13bd76d0f0903be226972b7fd3083->enter($__internal_88a6ee1ce92ac3e849ebb39a5fdb350f03d13bd76d0f0903be226972b7fd3083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0ba68160889bc8cb3221ee1c1ed4c0a15e9144ae9e0e96228d4683351a94836a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba68160889bc8cb3221ee1c1ed4c0a15e9144ae9e0e96228d4683351a94836a->enter($__internal_0ba68160889bc8cb3221ee1c1ed4c0a15e9144ae9e0e96228d4683351a94836a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_0ba68160889bc8cb3221ee1c1ed4c0a15e9144ae9e0e96228d4683351a94836a->leave($__internal_0ba68160889bc8cb3221ee1c1ed4c0a15e9144ae9e0e96228d4683351a94836a_prof);

        
        $__internal_88a6ee1ce92ac3e849ebb39a5fdb350f03d13bd76d0f0903be226972b7fd3083->leave($__internal_88a6ee1ce92ac3e849ebb39a5fdb350f03d13bd76d0f0903be226972b7fd3083_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_70cb50e9476f5fccc6024048f284af6f66e764b2c53ef01a644e4833f7c68de3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70cb50e9476f5fccc6024048f284af6f66e764b2c53ef01a644e4833f7c68de3->enter($__internal_70cb50e9476f5fccc6024048f284af6f66e764b2c53ef01a644e4833f7c68de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1536989700a69b3f8c6c2e809a23f8091cee5469e123e530394e30a5a878e701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1536989700a69b3f8c6c2e809a23f8091cee5469e123e530394e30a5a878e701->enter($__internal_1536989700a69b3f8c6c2e809a23f8091cee5469e123e530394e30a5a878e701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_1536989700a69b3f8c6c2e809a23f8091cee5469e123e530394e30a5a878e701->leave($__internal_1536989700a69b3f8c6c2e809a23f8091cee5469e123e530394e30a5a878e701_prof);

        
        $__internal_70cb50e9476f5fccc6024048f284af6f66e764b2c53ef01a644e4833f7c68de3->leave($__internal_70cb50e9476f5fccc6024048f284af6f66e764b2c53ef01a644e4833f7c68de3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bff25cf8cc748c888358154223ea92c813e31f0cc9153a31386e58b97b11dc8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bff25cf8cc748c888358154223ea92c813e31f0cc9153a31386e58b97b11dc8f->enter($__internal_bff25cf8cc748c888358154223ea92c813e31f0cc9153a31386e58b97b11dc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d4be00057e30b3b23abe33d9987fc36df93824769bf0f5deffa651c3b83611af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4be00057e30b3b23abe33d9987fc36df93824769bf0f5deffa651c3b83611af->enter($__internal_d4be00057e30b3b23abe33d9987fc36df93824769bf0f5deffa651c3b83611af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d4be00057e30b3b23abe33d9987fc36df93824769bf0f5deffa651c3b83611af->leave($__internal_d4be00057e30b3b23abe33d9987fc36df93824769bf0f5deffa651c3b83611af_prof);

        
        $__internal_bff25cf8cc748c888358154223ea92c813e31f0cc9153a31386e58b97b11dc8f->leave($__internal_bff25cf8cc748c888358154223ea92c813e31f0cc9153a31386e58b97b11dc8f_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\Symfony3_F1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
