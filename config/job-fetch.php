<?php

/*
* This file store all configations of job fetching options like page numbers and search query parameters
*/

return [
    'laravel_page' => 8,
    'laravel_search_query' => 'Laravel',
    'symfony_page' => 8,
    'symfony_search_query' => 'Symfony',
    'wordpress_page' => 8,
    'wordpress_search_query' => 'Wordpress Developer',
    'apiKey' => env('JOB_API_KEY', '62ed064f9fmsh3bd3f850278b097p133700jsnca750b9876a0'),
    'apiKeys' => [
        '4f0d6ab85emsh8e518a3ca23be4bp1fea37jsn61e81932bd06',
        'ebc33caf94msh3c6170c53ebd4b0p1435e3jsn4a7fd98af219',
        'ae58fe5e2amshb704d0855b08615p15692djsn631b88e76434',
        '62ed064f9fmsh3bd3f850278b097p133700jsnca750b9876a0',
    ],
];
