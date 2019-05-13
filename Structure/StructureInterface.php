<?php

namespace UniceSIL\SyllabusImporterToolkit\Structure;

/**
 * Interface StructureInterface
 * @package UniceSIL\SyllabusImporterToolkit\Structure
 */
interface StructureInterface
{
    /**
     * Get structure establishment id from source repository
     * @return string
     */
    public function getEtbId(): string;

    /**
     * Get structure label
     * @return string
     */
    public function getUser(): string;

    /**
     * If return true, create the structure if does not already exist in Syllabus database
     * @return bool
     */
    public function createIfNotExist(): bool;

}