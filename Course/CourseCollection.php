<?php

namespace UniceSIL\SyllabusImporterToolkit\Course;

use UniceSIL\SyllabusImporterToolkit\Common\AbstractCollection;

/**
 * Class CourseCollection
 * @package UniceSIL\SyllabusImporterToolkit\Course
 */
class CourseCollection extends AbstractCollection
{

    /**
     * CourseCollection constructor.
     * @param string $objectType
     * @param array $input
     * @param int $flags
     * @param string $iterator_class
     */
    public function __construct($objectType, array $input = array(), $flags = 0, $iterator_class = "ArrayIterator")
    {
        parent::__construct(CourseInterface::class, $input, $flags, $iterator_class);
    }
}