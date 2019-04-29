<?php

namespace UniceSIL\SyllabusImporterToolkit\Permission;


/**
 * Interface PermissionImporterInterface
 * @package UniceSIL\SyllabusImporterToolkit\Structure
 */
interface PermissionImporterInterface
{

    /**
     * @return PermissionCollection
     */
    public function execute(): PermissionCollection;
}