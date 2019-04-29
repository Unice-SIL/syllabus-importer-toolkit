<?php

namespace UniceSIL\SyllabusImporterToolkit\User;

/**
 * Interface UserInterface
 * @package UniceSIL\SyllabusImporterToolkit\Structure
 */
interface UserInterface
{
    /**
     * Get user username
     * @return string
     */
    public function getUsername(): string;

    /**
     * Get user firstname
     * @return null|string
     */
    public function getFirstname(): ?string;

    /**
     * Get user lastname
     * @return null|string
     */
    public function getLastname(): ?string;

    /**
     * Get user email
     * @return null|string
     */
    public function getEmail(): ?string;

    /**
     * If return true, create the permission if does not already exist in Syllabus database
     * @return bool
     */
    public function createIfNotExist(): bool;

}