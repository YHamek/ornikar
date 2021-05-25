<?php

class LessonStartTime extends Placeholder {

    public function getKey() {
        return '[lesson:start_time]';
    }

    public function getValue() {
        return $this->entity->start_time->format('H:i');
    }

}
