<?php

namespace UPS\Entity;


class Image {
    public $ImageFormat;
    public $GraphicImage;

    function __construct( $response = null ) {
        if ( null != $response ) {
            if ( isset( $response->ImageFormat ) ) {
                $this->ImageFormat = new ImageFormat($response->ImageFormat);
            }
            if ( isset( $response->GraphicImage ) ) {
                $this->GraphicImage = $response->GraphicImage;
            }
        }
    }
} 