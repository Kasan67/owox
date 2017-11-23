<?php

namespace test3;

/**
 * Class Grammar
 * @package test3
 */
class Grammar extends AbstractLesson
{
    /**
     * @var string
     */
    private $name = "Grammar lesson";

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

}