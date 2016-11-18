<?php

use PHPUnit\Framework\TestCase;

class WrapperTest extends TestCase
{
    /**
     * @dataProvider providerTagWithContent
     */
    public function testShouldWrapWithCharacter($tag, $content)
    {
        $wrapper = new Wrapper();
        $result = $wrapper->wrap($tag, $content);

        $expected = "<{$tag}>{$content}</{$tag}>\n";

        $this->assertEquals($expected, $result);
    }

    public static function providerTagWithContent()
    {
        return [
            ['tag' => 'a', 'content' => 'Click'],
            ['tag' => 'b', 'content' => 'bold']
        ];
    }
}
