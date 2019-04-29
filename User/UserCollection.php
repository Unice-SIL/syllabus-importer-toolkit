<?php

namespace UniceSIL\SyllabusImporterToolkit\User;

use UniceSIL\SyllabusImporterToolkit\Common\AbstractCollection;

/**
 * Class UserCollection
 * @package UniceSIL\SyllabusImporterToolkit\User
 */
class UserCollection extends AbstractCollection
{

    /**
     * UserCollection constructor.
     * @param array $input
     * @param int $flags
     * @param string $iterator_class
     */
    public function __construct(array $input = array(), $flags = 0, $iterator_class = "ArrayIterator")
    {
        parent::__construct(UserInterface::class, $input, $flags, $iterator_class);
    }
}