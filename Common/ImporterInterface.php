<?php

namespace UniceSIL\SyllabusImporterToolkit\Course;

/**
 * Interface ImporterInterface
 * @package UniceSIL\SyllabusImporterToolkit\Course
 */
interface ImporterInterface
{

    /**
     * @param array $args
     * @return mixed
     */
    public function setArgs(array $args=[]);

}