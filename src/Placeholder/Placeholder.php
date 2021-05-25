<?php

abstract class Placeholder {

    /**
     * @var IEntity
     */
    protected $entity;

    public function __construct(IEntity $entity) {
        $this->entity = $entity;
    }

    /**
     * @return string
     */
    abstract public function getKey();

    /**
     * @return string
     */
    abstract public function getValue();

}
