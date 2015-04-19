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
interface Encoder {

    /**
     * @param mixed $decoded
     * @return string
     */
    public function encode($decoded);

}
