<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([

            [
                'service_title' => 'Math Home Tuition',
                'service_category' => 'Tutor Services',
                'price_type' => 'Fixed',
                'base_price' => 500,
                'discount_price' => 450,
                'available_days' => json_encode(['Monday', 'Tuesday', 'Wednesday']),
                'location_type' => 'On Site',
                'city' => 'Chennai',
                'state' => 'Tamil Nadu',
                'zip_code' => '600001',
                'address' => 'Anna Nagar',
                'highlight' => json_encode(['On time finish', 'Experienced tutors']),
                'service' => json_encode(['24-Hour Room Service', 'Laundry and Ironing Service']),
                'other_service' => 'Online Support',
                'faq' => json_encode([
                    [
                        'question' => 'What is the duration of the service?',
                        'answer' => 'The service usually takes around 2 hours.'
                    ],
                    [
                        'question' => 'Do you provide online support?',
                        'answer' => 'Yes, we provide both online and onsite support.'
                    ],
                    [
                        'question' => 'Can I reschedule the service?',
                        'answer' => 'Yes, you can reschedule 24 hours before the appointment.'
                    ]
                ]),
                'description' => 'Professional math tutoring service.',
                'gallery' => json_encode(['g1.png', 'g2.png', 'g3.png']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'service_title' => 'English Speaking Class',
                'service_category' => 'Tutor Services',
                'price_type' => 'Hourly',
                'base_price' => 300,
                'discount_price' => 250,
                'available_days' => json_encode(['Monday', 'Wednesday', 'Friday']),
                'location_type' => 'Online',
                'city' => 'Chennai',
                'state' => 'Tamil Nadu',
                'zip_code' => '600002',
                'address' => 'Velachery',
                'highlight' => json_encode(['Flexible time', 'Beginner friendly']),
                'service' => json_encode(['Translator Service']),
                'other_service' => 'Weekend batch',
                'faq' => json_encode([
                    [
                        'question' => 'What is the duration of the service?',
                        'answer' => 'The service usually takes around 2 hours.'
                    ],
                    [
                        'question' => 'Do you provide online support?',
                        'answer' => 'Yes, we provide both online and onsite support.'
                    ],
                    [
                        'question' => 'Can I reschedule the service?',
                        'answer' => 'Yes, you can reschedule 24 hours before the appointment.'
                    ]
                ]),
                'description' => 'Improve English communication skills.',
                'gallery' => json_encode(['g1.png', 'g2.png', 'g3.png']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'service_title' => 'Yoga Trainer',
                'service_category' => 'Fitness',
                'price_type' => 'Monthly',
                'base_price' => 2000,
                'discount_price' => 1800,
                'available_days' => json_encode(['Tuesday', 'Thursday', 'Saturday']),
                'location_type' => 'On Site',
                'city' => 'Madurai',
                'state' => 'Tamil Nadu',
                'zip_code' => '625001',
                'address' => 'KK Nagar',
                'highlight' => json_encode(['Certified trainer', 'Personal training']),
                'service' => json_encode(['Hair and Beauty Service']),
                'other_service' => 'Diet advice',
                'faq' => json_encode([
                    [
                        'question' => 'What is the duration of the service?',
                        'answer' => 'The service usually takes around 2 hours.'
                    ],
                    [
                        'question' => 'Do you provide online support?',
                        'answer' => 'Yes, we provide both online and onsite support.'
                    ],
                    [
                        'question' => 'Can I reschedule the service?',
                        'answer' => 'Yes, you can reschedule 24 hours before the appointment.'
                    ]
                ]),
                'description' => 'Daily yoga sessions for health.',
                'gallery' => json_encode(['g1.png', 'g2.png', 'g3.png']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'service_title' => 'Home Cleaning',
                'service_category' => 'Cleaning',
                'price_type' => 'Fixed',
                'base_price' => 1000,
                'discount_price' => 850,
                'available_days' => json_encode(['Monday', 'Saturday']),
                'location_type' => 'On Site',
                'city' => 'Coimbatore',
                'state' => 'Tamil Nadu',
                'zip_code' => '641001',
                'address' => 'Gandhipuram',
                'highlight' => json_encode(['Professional staff', 'Quick service']),
                'service' => json_encode(['Daily Housekeeping']),
                'other_service' => 'Deep cleaning',
                'faq' => json_encode([
                    [
                        'question' => 'What is the duration of the service?',
                        'answer' => 'The service usually takes around 2 hours.'
                    ],
                    [
                        'question' => 'Do you provide online support?',
                        'answer' => 'Yes, we provide both online and onsite support.'
                    ],
                    [
                        'question' => 'Can I reschedule the service?',
                        'answer' => 'Yes, you can reschedule 24 hours before the appointment.'
                    ]
                ]),
                'description' => 'Complete house cleaning service.',
                'gallery' => json_encode(['g1.png', 'g2.png', 'g3.png']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'service_title' => 'Computer Training',
                'service_category' => 'IT Training',
                'price_type' => 'Fixed',
                'base_price' => 3000,
                'discount_price' => 2500,
                'available_days' => json_encode(['Monday', 'Tuesday', 'Wednesday', 'Thursday']),
                'location_type' => 'Online',
                'city' => 'Trichy',
                'state' => 'Tamil Nadu',
                'zip_code' => '620001',
                'address' => 'Srirangam',
                'highlight' => json_encode(['Project training', 'Job ready']),
                'service' => json_encode(['Free luggage deposit']),
                'other_service' => 'Internship',
                'faq' => json_encode([
                    [
                        'question' => 'What is the duration of the service?',
                        'answer' => 'The service usually takes around 2 hours.'
                    ],
                    [
                        'question' => 'Do you provide online support?',
                        'answer' => 'Yes, we provide both online and onsite support.'
                    ],
                    [
                        'question' => 'Can I reschedule the service?',
                        'answer' => 'Yes, you can reschedule 24 hours before the appointment.'
                    ]
                ]),
                'description' => 'Learn basic computer skills.',
                'gallery' => json_encode(['g1.png', 'g2.png', 'g3.png']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'service_title' => 'Web Development Course',
                'service_category' => 'IT Training',
                'price_type' => 'Fixed',
                'base_price' => 8000,
                'discount_price' => 7000,
                'available_days' => json_encode(['Monday', 'Wednesday', 'Friday']),
                'location_type' => 'Online',
                'city' => 'Chennai',
                'state' => 'Tamil Nadu',
                'zip_code' => '600003',
                'address' => 'Tambaram',
                'highlight' => json_encode(['Real projects', 'Placement help']),
                'service' => json_encode(['Dry Cleaning Service']),
                'other_service' => 'Portfolio building',
                'faq' => json_encode([
                    [
                        'question' => 'What is the duration of the service?',
                        'answer' => 'The service usually takes around 2 hours.'
                    ],
                    [
                        'question' => 'Do you provide online support?',
                        'answer' => 'Yes, we provide both online and onsite support.'
                    ],
                    [
                        'question' => 'Can I reschedule the service?',
                        'answer' => 'Yes, you can reschedule 24 hours before the appointment.'
                    ]
                ]),
                'description' => 'Full stack web development training.',
                'gallery' => json_encode(['g1.png', 'g2.png', 'g3.png']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'service_title' => 'Photography Service',
                'service_category' => 'Events',
                'price_type' => 'Fixed',
                'base_price' => 10000,
                'discount_price' => 8500,
                'available_days' => json_encode(['Saturday', 'Sunday']),
                'location_type' => 'On Site',
                'city' => 'Salem',
                'state' => 'Tamil Nadu',
                'zip_code' => '636001',
                'address' => 'Fairlands',
                'highlight' => json_encode(['HD photos', 'Fast delivery']),
                'service' => json_encode(['Valet Parking']),
                'other_service' => 'Drone shoot',
                'faq' => json_encode([
                    [
                        'question' => 'What is the duration of the service?',
                        'answer' => 'The service usually takes around 2 hours.'
                    ],
                    [
                        'question' => 'Do you provide online support?',
                        'answer' => 'Yes, we provide both online and onsite support.'
                    ],
                    [
                        'question' => 'Can I reschedule the service?',
                        'answer' => 'Yes, you can reschedule 24 hours before the appointment.'
                    ]
                ]),
                'description' => 'Professional photography service.',
                'gallery' => json_encode(['g1.png', 'g2.png', 'g3.png']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'service_title' => 'Digital Marketing',
                'service_category' => 'Marketing',
                'price_type' => 'Monthly',
                'base_price' => 5000,
                'discount_price' => 4500,
                'available_days' => json_encode(['Monday', 'Tuesday', 'Friday']),
                'location_type' => 'Online',
                'city' => 'Chennai',
                'state' => 'Tamil Nadu',
                'zip_code' => '600004',
                'address' => 'Adyar',
                'highlight' => json_encode(['SEO experts', 'Fast ranking']),
                'service' => json_encode(['Concierge Services']),
                'other_service' => 'Ads management',
                'faq' => json_encode([
                    [
                        'question' => 'What is the duration of the service?',
                        'answer' => 'The service usually takes around 2 hours.'
                    ],
                    [
                        'question' => 'Do you provide online support?',
                        'answer' => 'Yes, we provide both online and onsite support.'
                    ],
                    [
                        'question' => 'Can I reschedule the service?',
                        'answer' => 'Yes, you can reschedule 24 hours before the appointment.'
                    ]
                ]),
                'description' => 'Complete digital marketing solutions.',
                'gallery' => json_encode(['g1.png', 'g2.png', 'g3.png']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'service_title' => 'Graphic Design',
                'service_category' => 'Design',
                'price_type' => 'Fixed',
                'base_price' => 1500,
                'discount_price' => 1200,
                'available_days' => json_encode(['Monday', 'Thursday']),
                'location_type' => 'Online',
                'city' => 'Madurai',
                'state' => 'Tamil Nadu',
                'zip_code' => '625002',
                'address' => 'Anna Nagar',
                'highlight' => json_encode(['Creative designs', 'Fast delivery']),
                'service' => json_encode(['Hair and Beauty Service']),
                'other_service' => 'Logo design',
                'faq' => json_encode([
                    [
                        'question' => 'What is the duration of the service?',
                        'answer' => 'The service usually takes around 2 hours.'
                    ],
                    [
                        'question' => 'Do you provide online support?',
                        'answer' => 'Yes, we provide both online and onsite support.'
                    ],
                    [
                        'question' => 'Can I reschedule the service?',
                        'answer' => 'Yes, you can reschedule 24 hours before the appointment.'
                    ]
                ]),
                'description' => 'Creative graphic design services.',
                'gallery' => json_encode(['g1.png', 'g2.png', 'g3.png']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'service_title' => 'Car Washing',
                'service_category' => 'Cleaning',
                'price_type' => 'Fixed',
                'base_price' => 400,
                'discount_price' => 350,
                'available_days' => json_encode(['Saturday', 'Sunday']),
                'location_type' => 'On Site',
                'city' => 'Erode',
                'state' => 'Tamil Nadu',
                'zip_code' => '638001',
                'address' => 'Perundurai',
                'highlight' => json_encode(['Quick wash', 'Affordable']),
                'service' => json_encode(['Valet Parking']),
                'other_service' => 'Interior cleaning',
                'faq' => json_encode([
                    [
                        'question' => 'What is the duration of the service?',
                        'answer' => 'The service usually takes around 2 hours.'
                    ],
                    [
                        'question' => 'Do you provide online support?',
                        'answer' => 'Yes, we provide both online and onsite support.'
                    ],
                    [
                        'question' => 'Can I reschedule the service?',
                        'answer' => 'Yes, you can reschedule 24 hours before the appointment.'
                    ]
                ]),
                'description' => 'Professional car washing.',
                'gallery' => json_encode(['g1.png', 'g2.png', 'g3.png']),
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
