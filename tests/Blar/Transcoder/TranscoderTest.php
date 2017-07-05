<?php

/**
 * @author Andreas Treichel <gmblar+github@gmail.com>
 */

namespace Blar\Transcoder;

use PHPUnit\Framework\TestCase as TestCase;

/**
 * Class TranscoderTest
 *
 * @package Blar\Transcoder
 */
class TranscoderTest extends TestCase {

    public function testInterface() {
        $this->assertTrue(is_a(Transcoder::class, Encoder::class, true));
        $this->assertTrue(is_a(Transcoder::class, Decoder::class, true));
    }

}
