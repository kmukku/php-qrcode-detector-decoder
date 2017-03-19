<?php

namespace kmukku\QRReader\lib;

interface Reader {
    public function decode($image);
    public function reset();
}