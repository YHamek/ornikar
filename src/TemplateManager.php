<?php

class TemplateManager {

    public function getTemplateComputed(Template $tpl, array $data) {

        if (!$tpl) {
            throw new \RuntimeException('no tpl given');
        }

        $replaced = clone ($tpl);
        $replaced->subject = $this->computeText($replaced->subject, $data);
        $replaced->content = $this->computeText($replaced->content, $data);

        return $replaced;

    }

    private function computeText($text, array $data) {

        if (!isset($data['user'])) {
            $application_context = ApplicationContext::getInstance();
            $data['user'] = $application_context->getCurrentUser();
        }

        foreach ($data as $entity) {
            if ($entity instanceof Entity) {
                $placeholders = $entity->getPlaceholders();
                foreach ($placeholders as $placeholder) {
                    $key = $placeholder->getKey();
                    if (strpos($text, $key) !== false) {
                        $text = str_replace($key, $placeholder->getValue(), $text);
                    }
                }
            }
        }

        return $text;

    }
}
