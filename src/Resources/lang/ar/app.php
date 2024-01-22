<?php

return [
    'admin' => [
        'catalog' => [
            'products' => [
                'edit'  => [
                    'booking' => [
                        'appointment' => [
                            'break-duration'         => 'وقت الراحة بين الفترات (دقائق)',
                            'slot-duration'          => 'مدة الفترة (دقائق)',

                            'same-slot-for-all-days' => [
                                'no'    => 'لا',
                                'title' => 'نفس الفترة لجميع الأيام',
                                'yes'   => 'نعم',
                            ],
                        ],

                        'default'     => [
                            'add'            => 'إضافة',
                            'break-duration' => 'وقت الراحة بين الفترات (دقائق)',
                            'close'          => 'إغلاق',
                            'description'    => 'معلومات الحجز',
                            'edit'           => 'تعديل',
                            'many'           => 'العديد من الحجوزات ليوم واحد',

                            'modal'          => [
                                'slot' => [
                                    'add-title'  => 'إضافة فترات',
                                    'close'      => 'إغلاق',
                                    'day'        => 'يوم',
                                    'edit-title' => 'تعديل الفترات',
                                    'friday'     => 'الجمعة',
                                    'from-day'   => 'من اليوم',
                                    'from'       => 'من',
                                    'monday'     => 'الاثنين',
                                    'open'       => 'فتح',
                                    'saturday'   => 'السبت',
                                    'save'       => 'حفظ الفترة',
                                    'select'     => 'اختيار',
                                    'status'     => 'الحالة',
                                    'sunday'     => 'الأحد',
                                    'thursday'   => 'الخميس',
                                    'to'         => 'إلى',
                                    'tuesday'    => 'الثلاثاء',
                                    'wednesday'  => 'الأربعاء',
                                    'week'       => ':day',
                                ],
                            ],

                            'one'            => 'حجز واحد لعدة أيام',
                            'open'           => 'فتح',
                            'slot-add'       => 'إضافة فترات',
                            'slot-title'     => 'الفترات',
                            'slot-duration'  => 'مدة الفترة (دقائق)',
                            'title'          => 'افتراضي',
                        ],

                        'event'       => [
                            'add'                => 'إضافة تذاكر',
                            'delete'             => 'حذف',
                            'description-info'   => 'لا تتوفر تذاكر.',
                            'description'        => 'الوصف',
                            'edit'               => 'تعديل',

                            'modal'              => [
                                'save' => 'حفظ التذاكر',
                            ],

                            'name'               => 'الاسم',
                            'price'              => 'السعر',
                            'qty'                => 'الكمية',
                            'special-price-from' => 'السعر الخاص من',
                            'special-price-to'   => 'السعر الخاص إلى',
                            'special-price'      => 'السعر الخاص',
                            'title'              => 'التذاكر',
                            'valid-from'         => 'صالح من',
                            'valid-until'        => 'صالح حتى',
                        ],

                        'empty-info'  => [
                            'tickets' => [
                                'add' => 'إضافة تذاكر',
                            ],

                            'slots'   => [
                                'add'         => 'إضافة فترات',
                                'description' => 'الفترات المتاحة مع مدة زمنية.',
                            ],
                        ],

                        'rental'      => [
                            'daily-hourly'           => 'كليهما (يومي وساعي)',
                            'daily-price'            => 'السعر اليومي',
                            'daily'                  => 'يومي',
                            'hourly-price'           => 'السعر الساعي',
                            'hourly'                 => 'ساعي',

                            'same-slot-for-all-days' => [
                                'no'    => 'لا',
                                'title' => 'نفس الفترة لجميع الأيام',
                                'yes'   => 'نعم',
                            ],

                            'title'                  => 'نوع الإيجار',
                        ],

                        'slots'       => [
                            'add'              => 'إضافة فترات',

                            'action'           => [
                                'add' => 'إضافة',
                            ],

                            'description-info' => 'وفقًا للفترات، سيتم إنشاء مدة الزمن ويمكن رؤيتها.',

                            'modal'            => [
                                'slot' => [
                                    'friday'     => 'الجمعة',
                                    'from'       => 'من',
                                    'monday'     => 'الاثنين',
                                    'saturday'   => 'السبت',
                                    'sunday'     => 'الأحد',
                                    'thursday'   => 'الخميس',
                                    'to'         => 'إلى',
                                    'tuesday'    => 'الثلاثاء',
                                    'wednesday'  => 'الأربعاء',
                                ],
                            ],

                            'save'             => 'حفظ',
                            'title'            => 'مدة زمنية للفترات',
                            'unavailable'      => 'غير متاح',
                        ],

                        'table'       => [
                            'break-duration'            => 'وقت الراحة بين الفترات (دقائق)',

                            'charged-per'               => [
                                'guest'  => 'الزائر',
                                'table'  => 'المقاعد',
                                'title'  => 'يتم التحقيق من',
                            ],

                            'guest-capacity'            => 'سعة الزائر',
                            'guest-limit'               => 'الحد المسموح بالزائر لكل مقاعد',
                            'prevent-scheduling-before' => 'منع الجدولة قبل',
                            'slot-duration'             => 'مدة الفترة (دقائق)',

                            'same-slot-for-all-days'    => [
                                'no'    => 'لا',
                                'title' => 'نفس الفترة لجميع الأيام',
                                'yes'   => 'نعم',
                            ],
                        ],
                    ],

                    'types'   => [
                        'booking' => [
                            'available-from'       => 'متاح من',
                            'available-to'         => 'متاح إلى',

                            'available-every-week' => [
                                'no'    => 'لا',
                                'title' => 'متاح كل أسبوع',
                                'yes'   => 'نعم',
                            ],

                            'location'             => 'الموقع',
                            'qty'                  => 'الكمية',

                            'type'                 => [
                                'appointment' => 'موعد',
                                'default'     => 'افتراضي',
                                'event'       => 'حدث',
                                'many'        => 'عديد',
                                'one'         => 'واحد',
                                'rental'      => 'تأجير',
                                'table'       => 'طاولة',
                                'title'       => 'النوع',
                            ],

                            'title'                => 'نوع الحجز',
                        ],
                    ],
                ],

                'index' => [
                    'booking' => 'الحجز',
                ],
            ],
        ],

        'sales'   => [
            'bookings' => [
                'index' => [
                    'datagrid' => [
                        'created-date' => 'تاريخ الإنشاء',
                        'from'         => 'من',
                        'id'           => 'الرقم',
                        'order-id'     => 'رقم الطلب',
                        'qty'          => 'الكمية',
                        'to'           => 'إلى',
                    ],

                    'title'    => 'منتجات الحجوزات',
                ],

                'title' => 'منتجات الحجوزات',
            ],
        ],
    ],

    'shop'  => [
        'products' => [
            'booking' => [
                'closed' => 'مغلق',

                'cart'   => [
                    'booking-from' => 'الحجز من تاريخ',
                    'booking-till' => 'الحجز حتى تاريخ',
                    'daily'        => 'يومياً',
                    'event-from'   => 'بداية الحدث',
                    'event-ticket' => 'تذكرة الحدث',
                    'event-till'   => 'نهاية الحدث',

                    'integrity'    => [
                        'missing_options'        => 'الخيارات مفقودة لهذا المنتج.',
                        'select_hourly_duration' => 'يرجى اختيار مدة فترة ساعة واحدة.',
                    ],

                    'rent-from'    => 'الإيجار من تاريخ',
                    'rent-till'    => 'الإيجار حتى تاريخ',
                    'rent-type'    => 'نوع الإيجار',
                    'renting_type' => 'نوع الإيجار',
                    'special-note' => 'طلب/ملاحظات خاصة',
                ],

                'per-ticket-price' => ':price لكل تذكرة',
            ],

            'view'    => [
                'types' => [
                    'booking' => [
                        'event-on'                 => 'الحدث في',
                        'location'                 => 'الموقع',
                        'slot-duration-in-minutes' => ':minutes دقائق',
                        'slot-duration'            => 'مدة الفترة',
                        'view-on-map'              => 'عرض على الخريطة',
                    ],
                ],

                'booking' => [
                    'appointment' => [
                        'closed'             => 'مغلق',
                        'today-availability' => 'التوافر اليوم',
                    ],

                    'event'       => [
                        'book-your-ticket' => 'احجز تذكرتك',
                    ],

                    'rental'      => [
                        'choose-rent-option'       => 'اختر خيار الإيجار',
                        'daily-basis'              => 'على أساس يومي',
                        'from'                     => 'من',
                        'hourly-basis'             => 'على أساس ساعي',
                        'rent-an-item'             => 'استأجر عنصرًا',
                        'select-date'              => 'اختر التاريخ',
                        'select-rent-time'         => 'حدد وقت الإيجار',
                        'select-slot'              => 'اختر الفترة',
                        'slot'                     => 'فترة',
                        'to'                       => 'إلى',
                    ],

                    'slots'       => [
                        'book-an-appointment'       => 'احجز موعدًا',
                        'date'                      => 'التاريخ',
                        'no-slots-available'        => 'لا توجد فترات متاحة',
                        'title'                     => 'الفترة',
                    ],

                    'table'       => [
                        'book-a-table'             => 'احجز طاولة',
                        'closed'                   => 'مغلق',
                        'slots-for-all-days'       => 'عرض لكل الأيام',
                        'special-notes'            => 'طلبات/ملاحظات خاصة',
                        'today-availability'       => 'التوافر اليوم',
                    ],
                ],
            ],
        ],
    ],
];
