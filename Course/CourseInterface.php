<?php

namespace UniceSIL\SyllabusImporterToolkit\Course;

/**
 * Interface CourseInterface
 * @package UniceSIL\SyllabusImporterToolkit\Course
 */
interface CourseInterface
{
    /**
     * Get course id / code in source repository
     * @return string
     */
    public function getEtbId(): string;

    /**
     * Get course type
     * @return string
     */
    public function getType(): string;

    /**
     * Get courses parents of course
     * @return CourseCollection
     */
    public function getParents(): CourseCollection;

    /**
     * Get infos of course
     * @return CourseInfoCollection
     */
    public function getCourseInfos(): CourseInfoCollection;

    /**
     * If return true, create the course if does not already exist in Syllabus database
     * @return bool
     */
    public function createCourseIfNotExist(): bool;

}