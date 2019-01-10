<?php

get_header();

$sections = [
    'intro',
    'for-who',
    'program',
    'speakers',
    'singup',
    'contacts'
];

foreach ($sections as $section) {
    get_template_part('template-parts/' . $section);
}

get_footer();