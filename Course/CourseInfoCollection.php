<?php

namespace UniceSIL\SyllabusImporterToolkit\Course;

use UniceSIL\SyllabusImporterToolkit\Common\AbstractCollection;

/**
 * Class CourseInfoCollection
 * @package UniceSIL\SyllabusImporterToolkit\Course
 */
class CourseInfoCollection extends AbstractCollection
{

    /**
     * CourseInfoCollection constructor.
     * @param array $input
     * @param int $flags
     * @param string $iterator_class
     */
    public function __construct(array $input = array(), $flags = 0, $iterator_class = "ArrayIterator")
    {
        parent::__construct(CourseInfoInterface::class, $input, $flags, $iterator_class);
    }
}