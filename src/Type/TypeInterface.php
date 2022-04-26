<?php
namespace App\Type;

interface TypeInterface
{
    public function build(object $field): string;
}