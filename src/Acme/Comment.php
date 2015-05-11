<?php
namespace Acme;

/**
 * Class Comment
 */
class Comment
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var Article
     */
    private $article;

    /**
     * @var string
     */
    private $message;

    /**
     * @param Article $article
     * @param string $message
     */
    public function __construct(Article $article, $message)
    {
        $this->article = $article;
        $this->message = $message;
    }
}
