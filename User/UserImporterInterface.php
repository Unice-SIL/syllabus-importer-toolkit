<?php

namespace UniceSIL\SyllabusImporterToolkit\User;

use UniceSIL\SyllabusImporterToolkit\Course\ImporterInterface;


/**
 * Interface UserImporterInterface
 * @package UniceSIL\SyllabusImporterToolkit\User
 */
interface UserImporterInterface extends ImporterInterface
{

    /**
     * @return UserCollection
     */
    public function execute(): UserCollection;
}