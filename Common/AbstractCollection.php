<?php

namespace UniceSIL\SyllabusImporterToolkit\Common;

use UniceSIL\SyllabusImporterToolkit\Exception\CollectionObjectTypeException;

/**
 * Class Collection
 * @package UniceSIL\SyllabusImporterToolkit\Common
 */
abstract class AbstractCollection extends \ArrayObject
{
    /**
     * @var array|object
     */
    protected $objectType;

    /**
     * AbstractCollection constructor.
     * @param string $objectType
     * @param array $input
     * @param int $flags
     * @param string $iterator_class
     * @throws CollectionObjectTypeException
     */
    public function __construct(string $objectType, array $input = array(), $flags = 0, $iterator_class = "ArrayIterator")
    {
        $this->objectType = $objectType;
        $this->setFlags($flags);
        $this->setIteratorClass($iterator_class);
        try{
            $this->exchangeArray($input);
        }catch (CollectionObjectTypeException $e){
            throw $e;
        }
    }

    /**
     * @param mixed $value
     * @throws CollectionObjectTypeException
     */
    public function append($value)
    {
        if(!$value instanceof $this->objectType){
            throw new CollectionObjectTypeException("This collection can only contain instancies {$this->objectType}");
        }
        parent::append($value);
    }

    /**
     * @param mixed $index
     * @param mixed $newval
     * @throws CollectionObjectTypeException
     */
    public function offsetSet($index, $newval)
    {
        if(!$newval instanceof $this->objectType){
            throw new CollectionObjectTypeException("This collection can only contain instances of {$this->objectType}");
        }
        parent::offsetSet($index, $newval);
    }

    /**
     * @param array $input
     * @return array
     * @throws CollectionObjectTypeException
     */
    public function exchangeArray($input): array
    {
        $array = $this->getArrayCopy();
        foreach ($input as $key => $value){
            if(!$value instanceof $this->objectType){
                throw new CollectionObjectTypeException("This collection can only contain instances of {$this->objectType}");
            }
            $this->offsetSet($key, $value);
        }
        return $array;
    }
}