<?php
namespace Acme;

/**
 * Class ArticleAttribute
 */
class ArticleAttribute
{
    /**
     * @var Article
     */
    private $article;

    /**
     * @var string
     */
    private $attribute;

    /**
     * @var string
     */
    private $value;

    /**
     * @param Article $name
     * @param string  $value
     * @param string  $article
     */
    public function __construct(Article $article, $name, $value)
    {
        $this->article = $article;
        $this->attribute = $name;
        $this->value = $value;
    }
}
