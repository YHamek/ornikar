<?php

class LessonStartDate extends Placeholder {

    public function getKey() {
        return '[lesson:start_date]';
    }

    public function getValue() {
        return $this->entity->start_time->format('d/m/Y');
    }

}
