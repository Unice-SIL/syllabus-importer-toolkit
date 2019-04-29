<?php

namespace UniceSIL\SyllabusImporterToolkit\Permission;

use UniceSIL\SyllabusImporterToolkit\Course\CourseInfoInterface;
use UniceSIL\SyllabusImporterToolkit\Course\ImporterInterface;


/**
 * Interface PermissionImporterInterface
 * @package UniceSIL\SyllabusImporterToolkit\Structure
 */
interface PermissionImporterInterface extends ImporterInterface
{

    /**
     * @param array $args
     * @return mixed
     */
    public function setArgs(array $args=[]);

    /**
     * @param CourseInfoInterface $courseInfo
     * @return mixed
     */
    public function setCourseInfo(CourseInfoInterface $courseInfo);

    /**
     * @return PermissionCollection
     */
    public function execute(): PermissionCollection;
}