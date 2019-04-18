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
     * Get Year id
     * @return string
     */
    public function getYearId(): string;

    /**
     * Get Structure id
     * @return string
     */
    public function getStructureId(): string;

    /**
     * Get course title
     * @return string
     */
    public function getTitle(): string;

    /**
     * Get course ECTS
     * @return mixed
     */
    public function getEcts(): ?int;

    /**
     * If return true, create the course if does not already exist in Syllabus database
     * @return bool
     */
    public function createCourseIfNotExist(): bool;

}