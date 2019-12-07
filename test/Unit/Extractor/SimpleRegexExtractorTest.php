<?php

namespace Lexuss1979\HtmlExtractor\Test\Unit\Extractor;

use Lexuss1979\HtmlExtractor\Extractor\IExtractor;
use Lexuss1979\HtmlExtractor\Extractor\SimpleRegexExtractor;
use PHPUnit\Framework\TestCase;

class SimpleRegexExtractorTest extends TestCase
{
    protected $extractor;

    public function setUp(): void
    {
        $this->extractor = new SimpleRegexExtractor();
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    /** @test */
    public function it_can_extract()
    {
        $source = 'my name is Alex';
        $rules = "/my name is (\w*)/";
        assert($this->extractor instanceof IExtractor);
        $result = $this->extractor->extract($source,$rules);
        $this->assertIsArray($result);

    }
}
