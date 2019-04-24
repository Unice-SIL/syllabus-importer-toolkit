<?php

namespace UniceSIL\SyllabusImporterToolkit\Course;

/**
 * Interface CourseImporterInterface
 * @package UniceSIL\SyllabusImporterToolkit\Course
 */
interface CourseImporterInterface
{
    /**
     * Set an array of years could be used to get courses information for specifics years
     * @param array $years
     * @return mixed
     */
    public function setYears(array $years = []);

    /**
     * Method called to launch courses import
     * @return CourseCollection
     */
    public function execute(): CourseCollection;
}