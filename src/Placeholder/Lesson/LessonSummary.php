<?php

class LessonSummary extends Placeholder {

    public function getKey() {
        return '[lesson:summary]';
    }

    public function getValue() {
        return (string) $this->entity->id;
    }

}
