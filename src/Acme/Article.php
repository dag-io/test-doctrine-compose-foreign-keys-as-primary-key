<?php
namespace Acme;

/**
 * Class Article
 */
class Article
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var array
     */
    private $attributes;

    /**
     * Constructor
     */
    public function __construct($title)
    {
        $this->title = $title;
    }


    /**
     * @param $name
     * @param $value
     */
    public function addAttribute($name, $value)
    {
        $this->attributes[$name] = new ArticleAttribute($name, $value, $this);
    }
}
