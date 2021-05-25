<?php

abstract class Entity {

    /**
     * @var array
     */
    protected $placeholders;

    public function __construct() {
        $this->setRelations();
        $this->setPlaceholders();
    }

    /**
     * @return void
     */
    abstract protected function setRelations();

    /**
     * @return void
     */
    abstract protected function setPlaceholders();

    /**
     * @return array
     */
    public function getPlaceholders() {
        return $this->placeholders;
    }

}