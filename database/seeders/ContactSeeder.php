<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $contacts = [
            [
                'name' => 'Sara Ahmed',
                'phone' => '+973 3600 1122',
                'email' => 'sara.ahmed@example.com',
                'subject' => 'Order delivery delay',
                'message' => 'My order #1042 was supposed to arrive yesterday, could you check the status?',
            ],
            [
                'name' => 'Mohammed Ali',
                'phone' => '+973 3711 2233',
                'email' => 'mohammed.ali@example.com',
                'subject' => 'Product availability',
                'message' => 'Do you plan to restock the Adjustable Dumbbell Set soon?',
            ],
            [
                'name' => 'Fatima Noor',
                'phone' => '+973 3822 3344',
                'email' => 'fatima.noor@example.com',
                'subject' => 'Return request',
                'message' => 'I would like to return the Denim Jacket I purchased last week, wrong size.',
            ],
        ];

        foreach ($contacts as $contact) {
            Contact::firstOrCreate(
                ['email' => $contact['email'], 'subject' => $contact['subject']],
                $contact
            );
        }
    }
}
