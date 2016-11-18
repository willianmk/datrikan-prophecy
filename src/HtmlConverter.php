<?php

class HtmlConverter
{
    /**
     * @var Wrapper;
     */
    private $wrapper;

    public function __construct(Wrapper $wrapper){
        $this->wrapper = $wrapper;
    }

    /**
     * @param array $elements
     * @return string
     */
    public function toLi(array $elements): string
    {
        $liList = '';

        foreach ($elements as $element) {
            $liList .= $this->wrapper->wrap('li', (string) $element);
        }

        return $liList;
    }

}
