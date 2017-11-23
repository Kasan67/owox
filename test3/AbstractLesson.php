<?php
/**
 * Created by PhpStorm.
 * User: sanya
 * Date: 24.11.17
 * Time: 0:15
 */

namespace test3;


/**
 * Class AbstractLesson
 * @package test3
 */
abstract class AbstractLesson implements LessonInterface
{
    /**
     * @var int
     */
    protected $time;

    /**
     * @var mixed
     */
    protected $price;

    /**
     * AbstractLesson constructor.
     * @param int $time
     * @param array $type
     * @throws \Exception
     */
    private function __construct(int $time, array $type)
    {
        $this->time = $time;
        if (isset($this->getPrices()[$type])) {
            $this->price = $this->getPrices()[$type];
        } else {
            throw new \Exception("Undefined type of lesson");
        }
    }

    /**
     * @return array
     */
    private function getPrices(): array
    {
        return ['hour' => self::HOUR, 'lesson' => self::LESSON];
    }

    /**
     * @return int
     */
    public function calculate(): int
    {
        return $this->time * $this->price;
    }

}