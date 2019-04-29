<?php

namespace UniceSIL\SyllabusImporterToolkit\User;


/**
 * Interface UserImporterInterface
 * @package UniceSIL\SyllabusImporterToolkit\User
 */
interface UserImporterInterface
{

    /**
     * @return UserCollection
     */
    public function execute(): UserCollection;
}