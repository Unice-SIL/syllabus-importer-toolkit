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
     * @return int|null
     */
    public function getEcts(): ?int;

    /**
     * Get course ECTS
     * @return null|string
     */
    public function getDomain(): ?string;

    /**
     * Get course period
     * @return null|string
     */
    public function getPeriod(): ?string;

    /**
     * get course cm hours in class
     * @return float|null
     */
    public function getTeachingCmClass(): ?float;

    /**
     * Get course td hours in class
     * @return float
     */
    public function getTeachingTdClass(): ?float;

    /**
     * et course tp hours in class
     * @return float
     */
    public function getTeachingTpClass(): ?float;

    /**
     * If return true, create the course if does not already exist in Syllabus database
     * @return bool
     */
    public function createCourseIfNotExist(): bool;

}