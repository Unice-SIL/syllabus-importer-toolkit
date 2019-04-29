<?php

namespace UniceSIL\SyllabusImporterToolkit\User;


/**
 * Interface UserImporterInterface
 * @package UniceSIL\SyllabusImporterToolkit\User
 */
interface UserImporterInterface
{

    /**
     * @param array $args
     * @return mixed
     */
    public function setArgs(array $args=[]);

    /**
     * @return UserCollection
     */
    public function execute(): UserCollection;
}