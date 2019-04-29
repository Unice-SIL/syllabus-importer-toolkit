<?php

namespace UniceSIL\SyllabusImporterToolkit\Permission;

use UniceSIL\SyllabusImporterToolkit\Course\CourseInterface;
use UniceSIL\SyllabusImporterToolkit\User\UserInterface;

/**
 * Interface PermissionInterface
 * @package UniceSIL\SyllabusImporterToolkit\Structure
 */
interface PermissionInterface
{
    /**
     * Get course info
     * @return CourseInterface
     */
    public function getCourse(): CourseInterface;

    /**
     * Get permission
     * @return string
     */
    public function getPermission(): string;

    /**
     * @return UserInterface
     */
    public function getUser(): UserInterface;

    /**
     * If return true, create the permission if does not already exist in Syllabus database
     * @return bool
     */
    public function createIfNotExist(): bool;

}