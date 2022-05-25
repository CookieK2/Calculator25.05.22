<?php

class View
{
    public function render(?string $calculate): void
    {
        include("Templates/layout.php");
    }
}