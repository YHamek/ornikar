<?php

class LessonSummaryHtml extends Placeholder {

    public function getKey() {
        return '[lesson:summary_html]';
    }

    public function getValue() {
        return '<p>' . $this->entity->id . '</p>';
    }

}
