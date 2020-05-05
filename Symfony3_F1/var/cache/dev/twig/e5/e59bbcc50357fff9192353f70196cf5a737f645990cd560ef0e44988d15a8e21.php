<?php

/* OCPlatformBundle:Advert:layout.html.twig */
class __TwigTemplate_8db75694a00aa0c6af79e65a0ff2415499fe8fcdc35c32dd5bf9226105caef38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle:Advert:layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d39c088f5a55e753df162d7946c3573d419af0e0ab83c4b1381da62466d373a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39c088f5a55e753df162d7946c3573d419af0e0ab83c4b1381da62466d373a3->enter($__internal_d39c088f5a55e753df162d7946c3573d419af0e0ab83c4b1381da62466d373a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:layout.html.twig"));

        $__internal_d4f0351a85ef6dec208c14a11baf78035d7a61c792d52d22112005e135a36c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f0351a85ef6dec208c14a11baf78035d7a61c792d52d22112005e135a36c4d->enter($__internal_d4f0351a85ef6dec208c14a11baf78035d7a61c792d52d22112005e135a36c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d39c088f5a55e753df162d7946c3573d419af0e0ab83c4b1381da62466d373a3->leave($__internal_d39c088f5a55e753df162d7946c3573d419af0e0ab83c4b1381da62466d373a3_prof);

        
        $__internal_d4f0351a85ef6dec208c14a11baf78035d7a61c792d52d22112005e135a36c4d->leave($__internal_d4f0351a85ef6dec208c14a11baf78035d7a61c792d52d22112005e135a36c4d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2731e4ea05709a24c2d7133ca82685cf2cbc567a097788190364e72d2b1146b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2731e4ea05709a24c2d7133ca82685cf2cbc567a097788190364e72d2b1146b3->enter($__internal_2731e4ea05709a24c2d7133ca82685cf2cbc567a097788190364e72d2b1146b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ac73b0a3d70177fec0f73d3446c0ed66f6706fec0ec0db62fdd880d6178fb606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac73b0a3d70177fec0f73d3446c0ed66f6706fec0ec0db62fdd880d6178fb606->enter($__internal_ac73b0a3d70177fec0f73d3446c0ed66f6706fec0ec0db62fdd880d6178fb606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ac73b0a3d70177fec0f73d3446c0ed66f6706fec0ec0db62fdd880d6178fb606->leave($__internal_ac73b0a3d70177fec0f73d3446c0ed66f6706fec0ec0db62fdd880d6178fb606_prof);

        
        $__internal_2731e4ea05709a24c2d7133ca82685cf2cbc567a097788190364e72d2b1146b3->leave($__internal_2731e4ea05709a24c2d7133ca82685cf2cbc567a097788190364e72d2b1146b3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_37d48f5247baa23ac6e7caecb11716f12360362b9805ed952e5be2a3a5f5ea73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d48f5247baa23ac6e7caecb11716f12360362b9805ed952e5be2a3a5f5ea73->enter($__internal_37d48f5247baa23ac6e7caecb11716f12360362b9805ed952e5be2a3a5f5ea73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a344fa1d4a8e7468fa780e4f4212c7e932933f25b1523646f01a705be2a7ac80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a344fa1d4a8e7468fa780e4f4212c7e932933f25b1523646f01a705be2a7ac80->enter($__internal_a344fa1d4a8e7468fa780e4f4212c7e932933f25b1523646f01a705be2a7ac80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    <h1>Annonces</h1>

    <hr>

    ";
        // line 17
        echo "    ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_a344fa1d4a8e7468fa780e4f4212c7e932933f25b1523646f01a705be2a7ac80->leave($__internal_a344fa1d4a8e7468fa780e4f4212c7e932933f25b1523646f01a705be2a7ac80_prof);

        
        $__internal_37d48f5247baa23ac6e7caecb11716f12360362b9805ed952e5be2a3a5f5ea73->leave($__internal_37d48f5247baa23ac6e7caecb11716f12360362b9805ed952e5be2a3a5f5ea73_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_128110de106411e63484f311073d7470c559f7c366531423fe4afcb4817d5831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_128110de106411e63484f311073d7470c559f7c366531423fe4afcb4817d5831->enter($__internal_128110de106411e63484f311073d7470c559f7c366531423fe4afcb4817d5831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_56105ae306ec9943d336da03154a013c6f3139eec64788e7c06d16bec8c09f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56105ae306ec9943d336da03154a013c6f3139eec64788e7c06d16bec8c09f4f->enter($__internal_56105ae306ec9943d336da03154a013c6f3139eec64788e7c06d16bec8c09f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "    ";
        
        $__internal_56105ae306ec9943d336da03154a013c6f3139eec64788e7c06d16bec8c09f4f->leave($__internal_56105ae306ec9943d336da03154a013c6f3139eec64788e7c06d16bec8c09f4f_prof);

        
        $__internal_128110de106411e63484f311073d7470c559f7c366531423fe4afcb4817d5831->leave($__internal_128110de106411e63484f311073d7470c559f7c366531423fe4afcb4817d5831_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
    Annonces - {{ parent() }}
{% endblock %}

{% block body %}

    {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
    <h1>Annonces</h1>

    <hr>

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block ocplatform_body %}
    {% endblock %}

{% endblock %}", "OCPlatformBundle:Advert:layout.html.twig", "C:\\xampp\\htdocs\\Symfony3_F1\\src\\OC\\PlatformBundle/Resources/views/Advert/layout.html.twig");
    }
}
