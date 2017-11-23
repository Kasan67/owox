<?php

namespace test3;

/**
 * Class Speaking
 * @package test3
 */
class Speaking extends AbstractLesson
{
    /**
     * @var string
     */
    private $name = "Speaking lesson";

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