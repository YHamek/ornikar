<?php

class LessonInstructorName extends Placeholder {

    public function getKey() {
        return '[lesson:instructor_name]';
    }

    public function getValue() {
        return $this->entity->instructor->firstname;
    }

}
