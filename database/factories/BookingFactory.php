<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dateStr = Carbon::now()->toDateString();
        $start = Carbon::create($dateStr)
            ->addDay(random_int(-30,30))
            ->addhour(random_int(9, 18));
        $end = Carbon::create($start)->addHour(2);
        return [
            'user_id' => 1,
            'booking_type' => $this->faker->word(),
            'guest_count' => $this->faker->randomNumber(2),
            'child_count' => $this->faker->randomNumber(2),
            'seat' => $this->faker->word(4),
            'body' => $this->faker->realText(255),
            'customer_name' => $this->faker->name,
            'customer_phone' => $this->faker->phoneNumber(14),
            'receptionist_name' => $this->faker->name,
            'final_confirmation' => $this->faker->word(2),
            'start' => $start,
            'end' => $end,
        ];
    }
}
