<?php

namespace test3;

interface LessonInterface
{
    const HOUR = 100;
    const LESSON = 200;

    public function calculate(): int;

}