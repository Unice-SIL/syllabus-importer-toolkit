<?php

namespace UniceSIL\SyllabusImporterToolkit\Structure;

/**
 * Interface StructureImporterInterface
 * @package UniceSIL\SyllabusImporterToolkit\Structure
 */
interface StructureImporterInterface
{
    /**
     * @param array $args
     * @return mixed
     */
    public function setArgs(array $args=[]);

    /**
     * @return StructureCollection
     */
    public function execute(): StructureCollection;
}