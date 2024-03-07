<?php return [
    'components'               => [
        'discountApplier'        => [
            'onlyOneCouponError' => 'Vous ne pouvez appliquer qu\'un seul coupon à la fois.',
            'cartPromotionAlreadyApplied' => 'Le panier contient déjà un produit sujet à une promotion. Vous ne pouvez pas ajouter de code promotionnel. Passer une deuxième commande pour utiliser un code promotionnel.',
            'onlyOneCouponGuestError' => 'Vous ne pouvez appliquer qu\'un seul coupon client à la fois.',
            'cartPromotionTwoMaxAppliedError' => 'Vous ne pouvez appliquer qu\'un seul coupon client professionnel à la fois.',
            'cartPromotionMaxreached' => 'Vous atteignez le maximum d\'utilisation des codes promotionnels.',
            'discountCustomerGroupError'=> 'Veuillez se connecter pour utiliser le code professionnel'
        ]
    ],
    'label' => [
        'search' => 'Rechercher',
    ],
    'discounts' => [
        'name'                                 => 'Nom',
        'code'                                 => 'Code de réduction',
        'total_to_reach'                       => 'Total de commande minimal pour que la remise soit valide',
        'type'                                 => 'Type de remise',
        'trigger'                              => 'Valide si',
        'rate'                                 => 'Taux (%)',
        'amount'                               => 'Montant fixé',
        'max_number_of_usages'                 => 'Nombre maximum d\'utilisations',
        'expires'                              => 'Expire',
        'number_of_usages'                     => 'Nombre d\'utilisations',
        'shipping_description'                 => 'Nom du mode de livraison alternatif',
        'shipping_price'                       => 'Prix du mode de livraison alternatif',
        'shipping_guaranteed_days_to_delivery' => 'Jours garantis de livraison',
        'section_type'                         => 'Que fait cette réduction ?',
        'section_trigger'                      => 'Quand cette réduction est-elle applicable ?',
        'code_comment'                         => 'Laissez vide pour générer un code aléatoire.',
        'product' => 'Produit',
        'products' => 'Produits',
        'types'                                => [
            'fixed_amount' => 'Montant fixé',
            'rate'         => 'Taux',
            'shipping'     => 'Envoi alternatif',
        ],
        'triggers'                             => [
            '' => ' --- Choissez une valeur ---',
            'total'   => 'Le total de la commande est atteint',
            'code'    => 'Le code de réduction est entré',
            'product' => 'Un produit spécifique est présent dans le panier',
            'products' => 'Si tous les produits sélectionnés sont présents dans le panier',
        ],
        'validation'                           => [
            'empty'               => 'Entrez un code promo.',
            'shipping'            => 'Vous ne pouvez appliquer qu\'un seul code promotionnel qui réduit vos frais d\'expédition.',
            'duplicate'           => 'Vous ne pouvez utiliser le même code promotionnel qu\'une seule fois.',
            'expired'             => 'Ce code promo a expiré.',
            'not_found'           => 'Ce code promo n\'est pas valide.',
            'usage_limit_reached' => 'Ce code promotionnel a été appliqué plusieurs fois et n’est donc plus valide.',
            'conditions_corequiste_require'=> 'Vous ne pouvez pas appliquer ce code.'
        ],
        'discount_triggers' => [
            'label' => 'Combinaison des conditions',
            'btns' => [
                'create' => 'Ajouter une autre condition'
            ],
            'columns' => [
                'total_to_reach' => 'Total de commande minimal'
            ]
        ]
    ],
    'frontend' => [
        'discount_applied' => [
            'remove_code' => 'enlever'
        ]
    ]
];
