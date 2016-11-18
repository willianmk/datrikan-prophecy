<?php

use PHPUnit\Framework\TestCase;

class HtmlConverterProphecyTest extends TestCase
{
    public function testShouldRetrieveLiElements()
    {
        $elements = [1, 2, 3];
        $wrapper = $this->prophesize('Wrapper');

        $htmlConverter = new HtmlConverter($wrapper->reveal());

        $li1 = "<li>1</li>\n";
        $li2 = "<li>2</li>\n";
        $li3 = "<li>3</li>\n";

        //Magic?!
        $wrapper->wrap('li', '1')->shouldBeCalled()->willReturn($li1);
        $wrapper->wrap('li', '2')->shouldBeCalled()->willReturn($li2);
        $wrapper->wrap('li', '3')->shouldBeCalled()->willReturn($li3);

        $result = $htmlConverter->toLi($elements);
        $this->assertEquals($li1 . $li2 . $li3, $result);
    }
}
