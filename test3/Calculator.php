<?php

namespace test3;

/**
 * Class Calculator
 * @package test3
 */
class Calculator
{
    /**
     * @var array
     */
    public $lessons;

    /**
     * @var int
     */
    public $summary;

    /**
     * Calculator constructor.
     * @param array $list
     */
    function __construct(array $list)
    {
        $this->lessons = $list;
    }

    /**
     * @return int
     */
    public function parseList(): int
    {
        foreach ($this->lessons as $lesson) {
            $this->summary += $this->executeLesson($lesson);
        }

        return $this->summary;
    }

    /**
     * @param LessonInterface $lesson
     * @return int
     */
    private function executeLesson(LessonInterface $lesson): int
    {
        return $lesson->calculate();
    }

}