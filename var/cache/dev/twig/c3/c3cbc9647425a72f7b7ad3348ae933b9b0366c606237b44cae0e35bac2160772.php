<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* continent/afficherContinent.html.twig */
class __TwigTemplate_9e144ad477401403554746d5f3066a18e0fd1a5384c6beb09f9c8336195728ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'monTitre' => [$this, 'block_monTitre'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "continent/afficherContinent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "continent/afficherContinent.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "continent/afficherContinent.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Continents";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_monTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        echo "Continent : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["continent"]) || array_key_exists("continent", $context) ? $context["continent"] : (function () { throw new RuntimeError('Variable "continent" does not exist.', 4, $this->source); })()), "libelle", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"row\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["continent"]) || array_key_exists("continent", $context) ? $context["continent"] : (function () { throw new RuntimeError('Variable "continent" does not exist.', 7, $this->source); })()), "animaux", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["animal"]) {
            // line 8
            echo "            <div class=\"col-6\">
                <div class=\"row align-items-centers\">
                    <div class=\"col-12 cold-md-6 col-lg-2 text-center\">
                        <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, $context["animal"], "image", [], "any", false, false, false, 11))), "html", null, true);
            echo "\" class=\"img-fluid\">
                    </div>
                    <div class=\"col text-center\">
                            <h2><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_animal", ["id" => twig_get_attribute($this->env, $this->source, $context["animal"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animal"], "nom", [], "any", false, false, false, 14), "html", null, true);
            echo "</a></h2>
                            <div>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["animal"], "description", [], "any", false, false, false, 15), "html", null, true);
            echo "</div>
                            <div><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_famille", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["animal"], "famille", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["animal"], "famille", [], "any", false, false, false, 16), "libelle", [], "any", false, false, false, 16), "html", null, true);
            echo "</a></div>
                            <div>
                                ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["animal"], "continents", [], "any", false, false, false, 18));
            foreach ($context['_seq'] as $context["_key"] => $context["continentAnimal"]) {
                // line 19
                echo "                                    ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["continentAnimal"], "id", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, (isset($context["continent"]) || array_key_exists("continent", $context) ? $context["continent"] : (function () { throw new RuntimeError('Variable "continent" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)))) {
                    // line 20
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_continent", ["id" => twig_get_attribute($this->env, $this->source, $context["continentAnimal"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                    echo "\" class=\"btn btn-warning\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["continentAnimal"], "libelle", [], "any", false, false, false, 20), "html", null, true);
                    echo "</a>
                                    ";
                }
                // line 22
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['continentAnimal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "                            </div> 
                    </div>
                    
                </div> 
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </div> 


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "continent/afficherContinent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 29,  165 => 23,  159 => 22,  151 => 20,  148 => 19,  144 => 18,  137 => 16,  133 => 15,  127 => 14,  121 => 11,  116 => 8,  112 => 7,  109 => 6,  99 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Continents{% endblock %}
{% block monTitre %}Continent : {{ continent.libelle }}{% endblock %}
{% block body %}
    <div class=\"row\">
        {% for animal in continent.animaux %}
            <div class=\"col-6\">
                <div class=\"row align-items-centers\">
                    <div class=\"col-12 cold-md-6 col-lg-2 text-center\">
                        <img src=\"{{asset('images/' ~ animal.image)}}\" class=\"img-fluid\">
                    </div>
                    <div class=\"col text-center\">
                            <h2><a href=\"{{path('afficher_animal',{'id' : animal.id})}}\">{{ animal.nom }}</a></h2>
                            <div>{{ animal.description }}</div>
                            <div><a href=\"{{path('afficher_famille',{'id' :animal.famille.id})}}\" class=\"btn btn-primary\">{{ animal.famille.libelle }}</a></div>
                            <div>
                                {% for continentAnimal in animal.continents %}
                                    {% if continentAnimal.id != continent.id %}
                                    <a href=\"{{path('afficher_continent',{'id':continentAnimal.id})}}\" class=\"btn btn-warning\">{{ continentAnimal.libelle }}</a>
                                    {% endif %}
                                {% endfor %}
                            </div> 
                    </div>
                    
                </div> 
            </div>
        {% endfor %}
    </div> 


{% endblock %}
", "continent/afficherContinent.html.twig", "/Users/macbook/Desktop/Realisations/2-animaux/templates/continent/afficherContinent.html.twig");
    }
}
