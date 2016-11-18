<?php

use PHPUnit\Framework\TestCase;

class HtmlConverterMockTest extends TestCase
{
    public function testShouldRetrieveLiElements()
    {
        $elements = [1, 2, 3];
        $wrapper = $this->createMock('Wrapper');

        $htmlConverter = new HtmlConverter($wrapper);

        $li1 = "<li>1</li>\n";
        $li2 = "<li>2</li>\n";
        $li3 = "<li>3</li>\n";

/* PHPUnit 4.1+
        $wrapper->expects($this->exactly(3))->method('wrap')
            ->withConsecutive(['li', '1'], ['li', '2'], ['li', '3'])
            ->will($this->onConsecutiveCalls($li1, $li2, $li3));
 */

        // PHPUnit 3.x...
        $wrapper->expects($this->at(0))
            ->method('wrap')
            ->with('li', '1')
            ->will($this->returnValue($li1));

        $wrapper->expects($this->at(1))
            ->method('wrap')
            ->with('li', '2')
            ->will($this->returnValue($li2));

        $wrapper->expects($this->at(2))
            ->method('wrap')
            ->with('li', '3')
            ->will($this->returnValue($li3));

        $result = $htmlConverter->toLi($elements);
        $this->assertEquals($li1 . $li2 . $li3, $result);
    }
}
