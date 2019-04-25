<?php

namespace UniceSIL\SyllabusImporterToolkit\Course;

/**
 * Interface CourseImporterInterface
 * @package UniceSIL\SyllabusImporterToolkit\Course
 */
interface CourseImporterInterface
{
    /**
     * Set an year could be used to get courses information
     * @param string $year
     * @return mixed
     */
    public function setYear(string $year);

    /**
     * Method called to launch courses import
     * @return CourseCollection
     */
    public function execute(): CourseCollection;
}