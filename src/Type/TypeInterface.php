<?php
interface TypeInterface
{
    public function build(object $field): string;
}