<?php

/**
 * @author Andreas Treichel <gmblar+github@gmail.com>
 */

namespace Blar\Transcoder;

/**
 * Interface Decoder
 *
 * @package Blar\Transcoder
 */
interface Decoder {

    /**
     * @param string $encoded
     * @return mixed
     */
    public function decode(string $encoded);

}
