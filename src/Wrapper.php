<?php

class Wrapper
{
    /**
     * @param string $tag
     * @param string $content
     * @return string
     */
    public function wrap(string $tag, string $content): string
    {
        return "<{$tag}>{$content}</{$tag}>\n";
    }
}
