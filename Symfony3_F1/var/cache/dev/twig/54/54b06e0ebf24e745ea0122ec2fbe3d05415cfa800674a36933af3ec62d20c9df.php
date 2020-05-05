<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_0dca29a564970e3387430907d4a8b442b8f76bf5afe8fc8e159c152048b437f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle:Advert:layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle:Advert:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd0f2990acc253373707b6edc591776a66deb78a1fbbbf498210d561066ffdd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd0f2990acc253373707b6edc591776a66deb78a1fbbbf498210d561066ffdd3->enter($__internal_fd0f2990acc253373707b6edc591776a66deb78a1fbbbf498210d561066ffdd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_67c9d97388b2531c7120379e6ac7be3d63b01e2b8871479ea909e055a3059725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c9d97388b2531c7120379e6ac7be3d63b01e2b8871479ea909e055a3059725->enter($__internal_67c9d97388b2531c7120379e6ac7be3d63b01e2b8871479ea909e055a3059725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd0f2990acc253373707b6edc591776a66deb78a1fbbbf498210d561066ffdd3->leave($__internal_fd0f2990acc253373707b6edc591776a66deb78a1fbbbf498210d561066ffdd3_prof);

        
        $__internal_67c9d97388b2531c7120379e6ac7be3d63b01e2b8871479ea909e055a3059725->leave($__internal_67c9d97388b2531c7120379e6ac7be3d63b01e2b8871479ea909e055a3059725_prof);

    }

    // line 5
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_5e7cc11afb9e5b8de96ae06747627fe548f72bb2f0c5e8ef927861f303eca96b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e7cc11afb9e5b8de96ae06747627fe548f72bb2f0c5e8ef927861f303eca96b->enter($__internal_5e7cc11afb9e5b8de96ae06747627fe548f72bb2f0c5e8ef927861f303eca96b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_9844ef9761a37041344cf4d77ef90d94d9ccde394015c6defeb7cb43321dd4ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9844ef9761a37041344cf4d77ef90d94d9ccde394015c6defeb7cb43321dd4ee->enter($__internal_9844ef9761a37041344cf4d77ef90d94d9ccde394015c6defeb7cb43321dd4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 6
        echo "
    <h2>Ajouter une annonce</h2>

    ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

";
        
        $__internal_9844ef9761a37041344cf4d77ef90d94d9ccde394015c6defeb7cb43321dd4ee->leave($__internal_9844ef9761a37041344cf4d77ef90d94d9ccde394015c6defeb7cb43321dd4ee_prof);

        
        $__internal_5e7cc11afb9e5b8de96ae06747627fe548f72bb2f0c5e8ef927861f303eca96b->leave($__internal_5e7cc11afb9e5b8de96ae06747627fe548f72bb2f0c5e8ef927861f303eca96b_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"OCPlatformBundle:Advert:layout.html.twig\" %}

{% block ocplatform_body %}

    <h2>Ajouter une annonce</h2>

    {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

    <p>
        Attention : cette annonce sera ajoutée directement
        sur la page d'accueil après validation du formulaire.
    </p>

{% endblock %}", "OCPlatformBundle:Advert:add.html.twig", "C:\\xampp\\htdocs\\Symfony3_F1\\src\\OC\\PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
