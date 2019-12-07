<?php

namespace Lexuss1979\HtmlExtractor\Extractor;;

interface IExtractor
{
    public function extract($source, $rules, $options = []): array;
}