<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_08cb262f401b86e992d1004fbf010831700bf01c8a8e8de713bcccee294436cf extends Twig_Template
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
        $__internal_dc2f8058ffee0b549c8557361a10afe2e833afa443eba8d9ff67d94a20ebf527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc2f8058ffee0b549c8557361a10afe2e833afa443eba8d9ff67d94a20ebf527->enter($__internal_dc2f8058ffee0b549c8557361a10afe2e833afa443eba8d9ff67d94a20ebf527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_756ae5f5dd27bfd51cb99cbf9166d6963f7f2e6c04577043a4a64094c4a6f4fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756ae5f5dd27bfd51cb99cbf9166d6963f7f2e6c04577043a4a64094c4a6f4fe->enter($__internal_756ae5f5dd27bfd51cb99cbf9166d6963f7f2e6c04577043a4a64094c4a6f4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc2f8058ffee0b549c8557361a10afe2e833afa443eba8d9ff67d94a20ebf527->leave($__internal_dc2f8058ffee0b549c8557361a10afe2e833afa443eba8d9ff67d94a20ebf527_prof);

        
        $__internal_756ae5f5dd27bfd51cb99cbf9166d6963f7f2e6c04577043a4a64094c4a6f4fe->leave($__internal_756ae5f5dd27bfd51cb99cbf9166d6963f7f2e6c04577043a4a64094c4a6f4fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4d55c43044c2503d374b9aec0924042aac99bf2629c24df64b71c7430ff5f752 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d55c43044c2503d374b9aec0924042aac99bf2629c24df64b71c7430ff5f752->enter($__internal_4d55c43044c2503d374b9aec0924042aac99bf2629c24df64b71c7430ff5f752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fd70885a24831ba2ceeb04fd3e63e9a6f674df169ddb6efd225c7335603c8d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd70885a24831ba2ceeb04fd3e63e9a6f674df169ddb6efd225c7335603c8d96->enter($__internal_fd70885a24831ba2ceeb04fd3e63e9a6f674df169ddb6efd225c7335603c8d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fd70885a24831ba2ceeb04fd3e63e9a6f674df169ddb6efd225c7335603c8d96->leave($__internal_fd70885a24831ba2ceeb04fd3e63e9a6f674df169ddb6efd225c7335603c8d96_prof);

        
        $__internal_4d55c43044c2503d374b9aec0924042aac99bf2629c24df64b71c7430ff5f752->leave($__internal_4d55c43044c2503d374b9aec0924042aac99bf2629c24df64b71c7430ff5f752_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_370509fc56acc1f8781d42ae80f181a8384452c9e003cd444c972326ef3605fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_370509fc56acc1f8781d42ae80f181a8384452c9e003cd444c972326ef3605fe->enter($__internal_370509fc56acc1f8781d42ae80f181a8384452c9e003cd444c972326ef3605fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_47bed5ecdf4f238ad4fb4e1973c4676120b2703ddcfde6eb2422014b239f4f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47bed5ecdf4f238ad4fb4e1973c4676120b2703ddcfde6eb2422014b239f4f4a->enter($__internal_47bed5ecdf4f238ad4fb4e1973c4676120b2703ddcfde6eb2422014b239f4f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_47bed5ecdf4f238ad4fb4e1973c4676120b2703ddcfde6eb2422014b239f4f4a->leave($__internal_47bed5ecdf4f238ad4fb4e1973c4676120b2703ddcfde6eb2422014b239f4f4a_prof);

        
        $__internal_370509fc56acc1f8781d42ae80f181a8384452c9e003cd444c972326ef3605fe->leave($__internal_370509fc56acc1f8781d42ae80f181a8384452c9e003cd444c972326ef3605fe_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_191aedfed857bc225ef5385c1b1a9e3c876a948b8f7e435d23f2da4f57764537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_191aedfed857bc225ef5385c1b1a9e3c876a948b8f7e435d23f2da4f57764537->enter($__internal_191aedfed857bc225ef5385c1b1a9e3c876a948b8f7e435d23f2da4f57764537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_169254f6e57f8b77d2d2b1981675def87264466c8471d960f0d38c0eaae9c740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169254f6e57f8b77d2d2b1981675def87264466c8471d960f0d38c0eaae9c740->enter($__internal_169254f6e57f8b77d2d2b1981675def87264466c8471d960f0d38c0eaae9c740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_169254f6e57f8b77d2d2b1981675def87264466c8471d960f0d38c0eaae9c740->leave($__internal_169254f6e57f8b77d2d2b1981675def87264466c8471d960f0d38c0eaae9c740_prof);

        
        $__internal_191aedfed857bc225ef5385c1b1a9e3c876a948b8f7e435d23f2da4f57764537->leave($__internal_191aedfed857bc225ef5385c1b1a9e3c876a948b8f7e435d23f2da4f57764537_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Symfony3_F1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
