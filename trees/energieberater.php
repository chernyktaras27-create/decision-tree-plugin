<?php
return [
    "question" => "Was ist dein Hintergrund?",
    "answers" => [
        [
            "text" => "(Angefangener) Energieberater",
            "next" => [
                "question" => "Hast du auch schon den Vertiefungskurs?",
                "answers" => [
                    [
                        "text" => "Ja",
                        "next" => [
                            "question" => "Möchtest du noch einen zusätzlichen Vertiefungskurs?",
                            "answers" => [
                                [
                                    "text" => "Ja",
                                    "next" => [
                                        "question" => "Welchen Vertiefungskurs hast du schon gemacht?",
                                        "answers" => [
                                            [
                                                "text" => "WG",
                                                "recommendation" => "Empfehlung: NWG",
                                                "link" => ["url" => "https://example.com/nwg", "label" => "Mehr erfahren"]
                                            ],
                                            [
                                                "text" => "NWG",
                                                "recommendation" => "Empfehlung: WG oder Energieaudit",
                                                "link" => ["url" => "https://example.com/wg-audit", "label" => "Mehr erfahren"]
                                            ]
                                        ]
                                    ]
                                ],
                                [
                                    "text" => "Nein",
                                    "recommendation" => "Empfehlung: Fortbildungen",
                                    "link" => ["url" => "https://example.com/fortbildungen", "label" => "Mehr erfahren"]
                                ]
                            ]
                        ]
                    ],
                    [
                        "text" => "Nein",
                        "recommendation" => "Empfehlung: Vertiefungskurse",
                        "link" => ["url" => "https://example.com/vertiefung", "label" => "Mehr erfahren"]
                    ]
                ]
            ]
        ],
        [
            "text" => "Hochschulabschluss",
            "next" => [
                "question" => "In welchem Bereich?",
                "answers" => [
                    [
                        "text" => "Im Bereich A, B oder C?",
                        "next" => [
                            "question" => "Interessiert dich eher der Bereich WG oder NWG?",
                            "answers" => [
                                [
                                    "text" => "WG",
                                    "recommendation" => "Empfehlung: Basis 80UE + Wohngebäude 40UE",
                                    "link" => ["url" => "https://example.com/basis80-wg40", "label" => "Mehr erfahren"]
                                ],
                                [
                                    "text" => "NWG",
                                    "recommendation" => "Empfehlung: Basis 80UE + NWG 80 UE",
                                    "link" => ["url" => "https://example.com/basis80-nwg80", "label" => "Mehr erfahren"]
                                ],
                                [
                                    "text" => "Beides",
                                    "recommendation" => "Empfehlung: Basis 80UE + Wohngebäude 40UE + NWG 80 UE",
                                    "link" => ["url" => "https://example.com/komplett", "label" => "Mehr erfahren"]
                                ],
                                [
                                    "text" => "Weiß nicht",
                                    "recommendation" => "Empfehlung: Erst WG und dann NWG; Basis 80UE + Wohngebäude 40UE",
                                    "link" => ["url" => "https://example.com/erst-wg", "label" => "Mehr erfahren"]
                                ]
                            ]
                        ]
                    ],
                    [
                        "text" => "Sonst ohne Grundqualifikation",
                        "recommendation" => "Empfehlung: Basis Quereinstieg 160UE + Wohngebäude 40UE Quereinstieg",
                        "link" => ["url" => "https://example.com/quereinstieg", "label" => "Mehr erfahren"]
                    ]
                ]
            ]
        ],
        [
            "text" => "Handwerk",
            "next" => [
                "question" => "Interessiert dich eher der Bereich WG oder NWG?",
                "answers" => [
                    [
                        "text" => "WG",
                        "recommendation" => "Empfehlung: Basis 160UE + Wohngebäude 40UE",
                        "link" => ["url" => "https://example.com/basis160-wg40", "label" => "Mehr erfahren"]
                    ],
                    [
                        "text" => "NWG",
                        "recommendation" => "Empfehlung: Basis 160UE + NWG 80 UE",
                        "link" => ["url" => "https://example.com/basis160-nwg80", "label" => "Mehr erfahren"]
                    ],
                    [
                        "text" => "Beides",
                        "recommendation" => "Empfehlung: Basis 160UE + Wohngebäude 40UE + NWG 80 UE",
                        "link" => ["url" => "https://example.com/handwerk-komplett", "label" => "Mehr erfahren"]
                    ],
                    [
                        "text" => "Weiß nicht",
                        "recommendation" => "Empfehlung: Erst WG und dann NWG; Basis 160UE + Wohngebäude 40UE",
                        "link" => ["url" => "https://example.com/handwerk-erst-wg", "label" => "Mehr erfahren"]
                    ]
                ]
            ]
        ],
        [
            "text" => "Keine Grundqualifikation / Quereinsteiger",
            "recommendation" => "Empfehlung: Basis Quereinstieg 160UE + Wohngebäude 40UE Quereinstieg",
            "link" => ["url" => "https://example.com/quereinsteiger", "label" => "Mehr erfahren"]
        ]
    ]
];