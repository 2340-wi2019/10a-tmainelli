<?php

    /*
        Plugin Name: 2340 Sample Plugin
        Plugin URI: https://faculity.mccneb.edu/grosas/
        Description: A sample plugin for INFO 2340.
        Version: 1.0
        Author: Guillermo J Rosas
        Author URI: https://faculty.mccneb.edu/grosas/
        License: GPL
    */

    add_shortcode("wittyquote", "get_quote");

    function get_quote($atts) {
        $quotes = array (
            "I define who I become.",
            "One may tolerate a world of demons for the sake of an angel.",
            "I would rather you hate me for everything I am, than to have you love me for something I am not.",
            "Tell me and I forget. Teach me and I remember. Involve me and I learn.",
            "Many of life's failures are people who did not realize how close they were to success when they gave up."
        );

        return $quotes[array_rand($quotes)];
    }