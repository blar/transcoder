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
interface Decoder
{

    /**
     * Decode value from string.
     * 
     * @param string $encoded
     *
     * @return mixed
     */
    public function decode(string $encoded);

}
