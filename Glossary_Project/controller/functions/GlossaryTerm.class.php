<?php

class GlossaryTerm {
 
    public $term; public $definition;

    function __construct($term, $definition) {
        $this->term = $term;
        $this->definition = $definition;
    }

    // Other methods and properties can be added here as needed.
}