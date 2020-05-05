<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_6f32e713303379bc8057f9528090fb36f025b407757c99595ee0ca2d39aff11e extends Twig_Template
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
        $__internal_6f9c75506d3b4e949de3d2b02a4eb6e01ad5ca05707023bc54f1e4e4005297c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f9c75506d3b4e949de3d2b02a4eb6e01ad5ca05707023bc54f1e4e4005297c5->enter($__internal_6f9c75506d3b4e949de3d2b02a4eb6e01ad5ca05707023bc54f1e4e4005297c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        $__internal_5dd6ac24450f714f358685c9e588ef2e67a17477f9aa60c2af71e001e3d7607a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd6ac24450f714f358685c9e588ef2e67a17477f9aa60c2af71e001e3d7607a->enter($__internal_5dd6ac24450f714f358685c9e588ef2e67a17477f9aa60c2af71e001e3d7607a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
<h3>Formulaire d'annonce</h3>

";
        // line 7
        echo "<div class=\"well\">
    Ici se trouvera le formulaire.
</div>";
        
        $__internal_6f9c75506d3b4e949de3d2b02a4eb6e01ad5ca05707023bc54f1e4e4005297c5->leave($__internal_6f9c75506d3b4e949de3d2b02a4eb6e01ad5ca05707023bc54f1e4e4005297c5_prof);

        
        $__internal_5dd6ac24450f714f358685c9e588ef2e67a17477f9aa60c2af71e001e3d7607a->leave($__internal_5dd6ac24450f714f358685c9e588ef2e67a17477f9aa60c2af71e001e3d7607a_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

<h3>Formulaire d'annonce</h3>

{# On laisse vide la vue pour l'instant, on la comblera plus tard
   lorsqu'on saura afficher un formulaire. #}
<div class=\"well\">
    Ici se trouvera le formulaire.
</div>", "OCPlatformBundle:Advert:form.html.twig", "C:\\xampp\\htdocs\\Symfony3_F1\\src\\OC\\PlatformBundle/Resources/views/Advert/form.html.twig");
    }
}
