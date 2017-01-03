<?php

/* TravelBundle:Default:index.html.twig */
class __TwigTemplate_4b507ad7926edfafc57d1a3b1cbdb361816d9dce4bb53280b5549a16b72b6236 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Travel/layout.html.twig", "TravelBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Travel/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e59db8a772bb0a4147e2e697534d99fc9be0b0dc8f623728452493b7d8f7639 = $this->env->getExtension("native_profiler");
        $__internal_3e59db8a772bb0a4147e2e697534d99fc9be0b0dc8f623728452493b7d8f7639->enter($__internal_3e59db8a772bb0a4147e2e697534d99fc9be0b0dc8f623728452493b7d8f7639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TravelBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e59db8a772bb0a4147e2e697534d99fc9be0b0dc8f623728452493b7d8f7639->leave($__internal_3e59db8a772bb0a4147e2e697534d99fc9be0b0dc8f623728452493b7d8f7639_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_446c799071f22c9bece06326b91b46e4a7d42dd8a9513abbab5267a99b734f2d = $this->env->getExtension("native_profiler");
        $__internal_446c799071f22c9bece06326b91b46e4a7d42dd8a9513abbab5267a99b734f2d->enter($__internal_446c799071f22c9bece06326b91b46e4a7d42dd8a9513abbab5267a99b734f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col s12\">
            <table>
               <thead>
                  <td>Nom de l'hotel</td>
                  <td>Capacité d'accueil</td>
                  <td>Nb d'étoiles</td>
               </thead>
               <tbody>
               ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotel"]) ? $context["hotel"] : $this->getContext($context, "hotel")));
        foreach ($context['_seq'] as $context["_key"] => $context["hotels"]) {
            // line 16
            echo "                  <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : $this->getContext($context, "hotel")), "name", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : $this->getContext($context, "hotel")), "capacity", array()), "html", null, true);
            echo "</td>
                  <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : $this->getContext($context, "hotel")), "stars", array()), "html", null, true);
            echo "</td>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotels'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "               </tbody>
            </table>

         </div>

      </div>

   </div>
";
        
        $__internal_446c799071f22c9bece06326b91b46e4a7d42dd8a9513abbab5267a99b734f2d->leave($__internal_446c799071f22c9bece06326b91b46e4a7d42dd8a9513abbab5267a99b734f2d_prof);

    }

    public function getTemplateName()
    {
        return "TravelBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  66 => 18,  62 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@Travel/layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*    <div class="container">*/
/*       <div class="row">*/
/*          <div class="col s12">*/
/*             <table>*/
/*                <thead>*/
/*                   <td>Nom de l'hotel</td>*/
/*                   <td>Capacité d'accueil</td>*/
/*                   <td>Nb d'étoiles</td>*/
/*                </thead>*/
/*                <tbody>*/
/*                {% for hotels in hotel %}*/
/*                   <td>{{ hotel.name }}</td>*/
/*                   <td>{{ hotel.capacity }}</td>*/
/*                   <td>{{ hotel.stars }}</td>*/
/*                {% endfor %}*/
/*                </tbody>*/
/*             </table>*/
/* */
/*          </div>*/
/* */
/*       </div>*/
/* */
/*    </div>*/
/* {% endblock %}*/
