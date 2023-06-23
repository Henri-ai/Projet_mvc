<?php

class Style
{

    private int $styles_id;
    private string $label;

    //styles_id------------------------------------------------------------------------------------------------
    public function getStylesId(): int
    {
        return $this->styles_id;
    }
    public function setStylesId(int $styles_id)
    {
        $this->styles_id = $styles_id;
    }
    //label-----------------------------------------------------------------------------------------------------
    public function getLabel(): string
    {
        return $this->label;
    }
    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}
