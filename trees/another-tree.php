<?php
return [
    'question' => 'Möchtest du ein zweites Beispiel ausprobieren?',
    'answers' => [
        [
            'text' => 'Ja, bitte!',
            'next' => [
                'recommendation' => 'Super! Das ist das zweite Entscheidungsbaum-Beispiel.',
                'link' => '#'
            ]
        ],
        [
            'text' => 'Nein, zurück zum ersten.',
            'next' => [
                'recommendation' => 'Dann benutze das Energieberater-Baum :)',
                'link' => '#'
            ]
        ],
    ]
];