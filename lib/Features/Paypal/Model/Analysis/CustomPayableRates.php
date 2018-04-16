<?php
/**
 * Created by PhpStorm.
 * @author domenico domenico@translated.net / ostico@gmail.com
 * Date: 13/04/18
 * Time: 13.26
 *
 */

namespace Features\Paypal\Model\Analysis;


class CustomPayableRates extends \Analysis_PayableRates {

    public static $DEFAULT_PAYABLE_RATES = [
            'NO_MATCH'    => 100,
            '50%-74%'     => 100,
        //            '75%-99%'     => 60,
            '75%-84%'     => 75,
            '85%-94%'     => 50,
            '95%-99%'     => 50,
            '100%'        => 10,
            '100%_PUBLIC' => 10,
            'REPETITIONS' => 25,
            'INTERNAL'    => 60,
            'MT'          => 24.9  //we assume an average between all MT percentages as default
    ];

    protected static $langPair2MTpayableRates = [

            "en-US" => [
                    "it-IT" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 30
                    ],
                    "fr-FR" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 23.5
                    ],
                    "fr-CA" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 30
                    ],
                    "pt-PT" => [
                            'NO_MATCH' => 100,
                            '50%-74%'  => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'  => 75,
                            '85%-94%'  => 50,
                            '95%-99%'  => 50,
                            '100%'     => 10,

                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 35
                    ],
                    "pt-BR" => [
                            'NO_MATCH' => 100,
                            '50%-74%'  => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'  => 75,
                            '85%-94%'  => 50,
                            '95%-99%'  => 50,
                            '100%'     => 10,

                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 35
                    ],
                    "es-ES" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 26
                    ],
                    "es-MX" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 22
                    ],
                    "nl-NL" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 30
                    ],
                    "pl-PL" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 11
                    ],
                    "he-IL" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 25
                    ],
                    "id-ID" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 23
                    ],
                    "ja-JP" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 18
                    ],
                    "ko-KR" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 6
                    ],
                    "nb-NO" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 41.94
                    ],
                    "zh-CN" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 18.75
                    ],
                    "zh-HK" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 10
                    ],
                    "zh-TW" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 7
                    ],
                    "ar-SA" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 23
                    ],
                    "da-DK" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 38.71
                    ],
                    "de-DE" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 10
                    ],
                    "de-AT" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 10
                    ],
                    "ru-RU" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 16.67
                    ],
                    "sv-SE" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 35.71
                    ],
                    "th-TH" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 24
                    ],
                    "tr-TR" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //'75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 15
                    ]
            ],
            "de-DE" => [
                    "en-US" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //            '75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 25
                    ]
            ],
            "es-ES" => [
                    "en-US" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //            '75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 26
                    ]
            ],
            "es-MX" => [
                    "en-US" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //            '75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 17
                    ]
            ],
            "fr-FR" => [
                    "en-US" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //            '75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 39
                    ]
            ],
            "it-IT" => [
                    "en-US" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //            '75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 38
                    ]
            ],
            "nl-NL" => [
                    "en-US" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //            '75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 30
                    ]
            ],
            "pl-PL" => [
                    "en-US" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //            '75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 43
                    ]
            ],
            "pt-BR" => [
                    "en-US" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //            '75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 32
                    ]
            ],
            "ru-RU" => [
                    "en-US" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //            '75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 40
                    ]
            ],
            "zh-CN" => [
                    "en-US" => [
                            'NO_MATCH'    => 100,
                            '50%-74%'     => 100,
                        //            '75%-99%'     => 60,
                            '75%-84%'     => 75,
                            '85%-94%'     => 50,
                            '95%-99%'     => 50,
                            '100%'        => 10,
                            '100%_PUBLIC' => 10,
                            'REPETITIONS' => 25,
                            'INTERNAL'    => 60,
                            'MT'          => 6
                    ]
            ]
    ];

    public static function getPayableRates( $source, $target ) {
        self::$langPair2MTpayableRates[ 'en-GB' ] = self::$langPair2MTpayableRates[ 'en-US' ];
        return parent::getPayableRates( $source, $target );
    }


}