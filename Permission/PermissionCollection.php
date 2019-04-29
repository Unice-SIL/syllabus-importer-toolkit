<?php

namespace UniceSIL\SyllabusImporterToolkit\Permission;

use UniceSIL\SyllabusImporterToolkit\Common\AbstractCollection;

/**
 * Class PermissionCollection
 * @package UniceSIL\SyllabusImporterToolkit\Structure
 */
class PermissionCollection extends AbstractCollection
{

    /**
     * PermissionCollection constructor.
     * @param array $input
     * @param int $flags
     * @param string $iterator_class
     */
    public function __construct(array $input = array(), $flags = 0, $iterator_class = "ArrayIterator")
    {
        parent::__construct(PermissionInterface::class, $input, $flags, $iterator_class);
    }
}