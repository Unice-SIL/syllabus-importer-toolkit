<?php

namespace UniceSIL\SyllabusImporterToolkit\Course;

/**
 * Interface CourseInfoInterface
 * @package UniceSIL\SyllabusImporterToolkit\Course
 */
interface CourseInfoInterface
{

    /**
     * @return null|string
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
     * @return null|float
     */
    public function getTeachingTdClass(): ?float;

    /**
     * et course tp hours in class
     * @return null|float
     */
    public function getTeachingTpClass(): ?float;

}