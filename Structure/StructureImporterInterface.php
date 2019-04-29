<?php

namespace UniceSIL\SyllabusImporterToolkit\Structure;

use UniceSIL\SyllabusImporterToolkit\Course\ImporterInterface;


/**
 * Interface StructureImporterInterface
 * @package UniceSIL\SyllabusImporterToolkit\Structure
 */
interface StructureImporterInterface extends ImporterInterface
{

    /**
     * @return StructureCollection
     */
    public function execute(): StructureCollection;
}