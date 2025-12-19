<?php 

class Course
{
    public function __construct(
        
        public string $title,
        public string $subtitle,
        public string $description,
        public array $tags
        ) {
        
}
}
