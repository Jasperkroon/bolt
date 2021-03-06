<?php
namespace Bolt\Extensions;

class TwigProxy extends \Twig_Extension
{
    public $functions = array();
    public $filters = array();
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getFunctions()
    {
        return $this->functions;
    }

    public function getFilters()
    {
        return $this->filters;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * Add a Twig Function
     *
     * @param string $name
     * @param string $callback
     * @param array  $options
     */
    public function addTwigFunction(\Twig_SimpleFunction $twigFunction)
    {
        $this->functions[] = $twigFunction;
    }

    /**
     * Add a Twig Filter
     *
     * @param string $name
     * @param string $callback
     * @param array  $options
     */
    public function addTwigFilter(\Twig_SimpleFilter $twigFilter)
    {
        $this->filters[] = $twigFilter;
    }

}
