<?php

namespace UniceSIL\SyllabusImporterToolkit\Course;

/**
 * Interface CourseImporterInterface
 * @package UniceSIL\SyllabusImporterToolkit\Course
 */
interface CourseImporterInterface
{

    /**
     * @param array $args
     * @return mixed
     */
    public function setArgs(array $args=[]);

    /**
     * Set years could be used to get courses information
     * @param array $years
     * @return mixed
     */
    public function setYears(array $years): CourseImporterInterface;

    /**
     * Method called to launch courses import
     * @return CourseCollection
     */
    public function execute(): CourseCollection;
}