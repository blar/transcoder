<?php

/**
 * @author Andreas Treichel <gmblar+github@gmail.com>
 */

namespace Blar\Transcoder;

/**
 * Interface Encoder
 *
 * @package Blar\Transcoder
 */
interface Encoder
{

    /**
     * Encode value to string.
     * 
     * @param mixed $decoded
     *
     * @return string
     */
    public function encode($decoded): string;

}
