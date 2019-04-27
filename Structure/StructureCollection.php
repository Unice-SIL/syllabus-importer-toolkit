<?php

namespace UniceSIL\SyllabusImporterToolkit\Structure;

use UniceSIL\SyllabusImporterToolkit\Common\AbstractCollection;

/**
 * Class StructureCollection
 * @package UniceSIL\SyllabusImporterToolkit\Course
 */
class StructureCollection extends AbstractCollection
{

    /**
     * StructureCollection constructor.
     * @param array $input
     * @param int $flags
     * @param string $iterator_class
     */
    public function __construct(array $input = array(), $flags = 0, $iterator_class = "ArrayIterator")
    {
        parent::__construct(StructureInterface::class, $input, $flags, $iterator_class);
    }
}