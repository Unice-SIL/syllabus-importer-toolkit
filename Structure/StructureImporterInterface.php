<?php

namespace UniceSIL\SyllabusImporterToolkit\Structure;


/**
 * Interface StructureImporterInterface
 * @package UniceSIL\SyllabusImporterToolkit\Structure
 */
interface StructureImporterInterface
{

    /**
     * @return StructureCollection
     */
    public function execute(): StructureCollection;
}