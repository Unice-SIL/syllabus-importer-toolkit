<?php

namespace UniceSIL\SyllabusImporterToolkit\Permission;

use UniceSIL\SyllabusImporterToolkit\Course\CourseCollection;


/**
 * Interface PermissionImporterInterface
 * @package UniceSIL\SyllabusImporterToolkit\Structure
 */
interface PermissionImporterInterface
{

    /**
     * @param array $args
     * @return mixed
     */
    public function setArgs(array $args=[]);

    /**
     * Set years could be used to get courses permission
     * @param array $years
     * @return mixed
     */
    public function setYears(array $years): PermissionImporterInterface;

    /**
     * @return CourseCollection
     */
    public function execute(): CourseCollection;
}