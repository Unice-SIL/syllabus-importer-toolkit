<?php

namespace UniceSIL\SyllabusImporterToolkit\Permission;


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
     * @return PermissionCollection
     */
    public function execute(): PermissionCollection;
}