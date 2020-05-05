<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e5544c4b532c80ec31e341431ee4776b3d27fcfff955ffe815489b243dbbb6af extends Twig_Template
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
        $__internal_921a0ce55fcb629505c66f1c436fec78a5618e30d7312f52debb194b49cc5c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921a0ce55fcb629505c66f1c436fec78a5618e30d7312f52debb194b49cc5c31->enter($__internal_921a0ce55fcb629505c66f1c436fec78a5618e30d7312f52debb194b49cc5c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_beb2798ef833196f695e01b3997d31e02f5333aceb8d0922885b722fa04e7000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb2798ef833196f695e01b3997d31e02f5333aceb8d0922885b722fa04e7000->enter($__internal_beb2798ef833196f695e01b3997d31e02f5333aceb8d0922885b722fa04e7000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_921a0ce55fcb629505c66f1c436fec78a5618e30d7312f52debb194b49cc5c31->leave($__internal_921a0ce55fcb629505c66f1c436fec78a5618e30d7312f52debb194b49cc5c31_prof);

        
        $__internal_beb2798ef833196f695e01b3997d31e02f5333aceb8d0922885b722fa04e7000->leave($__internal_beb2798ef833196f695e01b3997d31e02f5333aceb8d0922885b722fa04e7000_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bdb78524b52991a8a3a7516244e0fb1b374e77720c746be4a2bc64bb171f09a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdb78524b52991a8a3a7516244e0fb1b374e77720c746be4a2bc64bb171f09a3->enter($__internal_bdb78524b52991a8a3a7516244e0fb1b374e77720c746be4a2bc64bb171f09a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_815a85029922226feab060f3f09cd2c57ffbc93a38ee51e3ae7c7ba7e8a50efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_815a85029922226feab060f3f09cd2c57ffbc93a38ee51e3ae7c7ba7e8a50efd->enter($__internal_815a85029922226feab060f3f09cd2c57ffbc93a38ee51e3ae7c7ba7e8a50efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_815a85029922226feab060f3f09cd2c57ffbc93a38ee51e3ae7c7ba7e8a50efd->leave($__internal_815a85029922226feab060f3f09cd2c57ffbc93a38ee51e3ae7c7ba7e8a50efd_prof);

        
        $__internal_bdb78524b52991a8a3a7516244e0fb1b374e77720c746be4a2bc64bb171f09a3->leave($__internal_bdb78524b52991a8a3a7516244e0fb1b374e77720c746be4a2bc64bb171f09a3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ccfc3f942d91a040ee40d0f8e7ec4227c0f9bfe0c7ac6f85b2af26c173ecef4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccfc3f942d91a040ee40d0f8e7ec4227c0f9bfe0c7ac6f85b2af26c173ecef4d->enter($__internal_ccfc3f942d91a040ee40d0f8e7ec4227c0f9bfe0c7ac6f85b2af26c173ecef4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f5d3f35d599d61feea7f620707d404f9a5657fb7d899394354ad578ecb64b7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d3f35d599d61feea7f620707d404f9a5657fb7d899394354ad578ecb64b7fa->enter($__internal_f5d3f35d599d61feea7f620707d404f9a5657fb7d899394354ad578ecb64b7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f5d3f35d599d61feea7f620707d404f9a5657fb7d899394354ad578ecb64b7fa->leave($__internal_f5d3f35d599d61feea7f620707d404f9a5657fb7d899394354ad578ecb64b7fa_prof);

        
        $__internal_ccfc3f942d91a040ee40d0f8e7ec4227c0f9bfe0c7ac6f85b2af26c173ecef4d->leave($__internal_ccfc3f942d91a040ee40d0f8e7ec4227c0f9bfe0c7ac6f85b2af26c173ecef4d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_17298df2aad7dfc75f36a0ce04ccd6c915f80fd9e314dff6a4a07c4e0545e8d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17298df2aad7dfc75f36a0ce04ccd6c915f80fd9e314dff6a4a07c4e0545e8d0->enter($__internal_17298df2aad7dfc75f36a0ce04ccd6c915f80fd9e314dff6a4a07c4e0545e8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9d8dbb6e9969f9c66a5510cfd9b8b2c2595c0cb5bb777a975a7751c654221c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8dbb6e9969f9c66a5510cfd9b8b2c2595c0cb5bb777a975a7751c654221c9c->enter($__internal_9d8dbb6e9969f9c66a5510cfd9b8b2c2595c0cb5bb777a975a7751c654221c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9d8dbb6e9969f9c66a5510cfd9b8b2c2595c0cb5bb777a975a7751c654221c9c->leave($__internal_9d8dbb6e9969f9c66a5510cfd9b8b2c2595c0cb5bb777a975a7751c654221c9c_prof);

        
        $__internal_17298df2aad7dfc75f36a0ce04ccd6c915f80fd9e314dff6a4a07c4e0545e8d0->leave($__internal_17298df2aad7dfc75f36a0ce04ccd6c915f80fd9e314dff6a4a07c4e0545e8d0_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Symfony3_F1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
