<x-app-layout>
    <div class="shadow bg-white border rounded w-full max-w-md mx-auto mt-10">
        <h1 class="text-3xl text-center font-semibold p-6">{{ __('Booking Update Form') }}</h1>

        <x-validation-errors class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mx-6" />

        <form action="{{ route('bookings.update', $booking) }}" method="POST" class="relative px-6 pb-6 flex-auto">
            @csrf
            @method('PATCH')
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="start">
                    {{ __('Booking Start') }}
                </label>
                <input type="date" name="start_date" id="start_date"
                    value="{{ old('start_date', $booking->start_date) }}" required
                    class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <input type="time" name="start_time" id="start_time"
                    value="{{ old('start_time', $booking->start_time) }}" required
                    class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="start">
                    {{ __('Booking End') }}
                </label>
                <input type="date" name="end_date" id="end_date" required
                    value="{{ old('end_date', $booking->end_date) }}"
                    class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <input type="time" name="end_time" id="end_time" required
                    value="{{ old('end_time', $booking->end_time) }}"
                    class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="booking_type">
                    {{ __('Booking Type') }}
                </label>
                <select name="booking_type" id="booking_type" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="席のみ" {{ old('booking_type', $booking->booking_type) == '席のみ' ? 'selected' : '' }}>
                        席のみ</option>
                    <option value="席のみ後日連絡"
                        {{ old('booking_type', $booking->booking_type) == '席のみ後日連絡' ? 'selected' : '' }}>席のみ後日連絡
                    </option>
                    <option value="和コース"
                        {{ old('booking_type', $booking->booking_type) == '和コース' ? 'selected' : '' }}>和コース</option>
                    <option value="彩々コース"
                        {{ old('booking_type', $booking->booking_type) == '彩々コース' ? 'selected' : '' }}>彩々コース</option>
                    <option value="煌コース"
                        {{ old('booking_type', $booking->booking_type) == '煌コース' ? 'selected' : '' }}>煌コース</option>

                </select>
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="guest_count">
                    {{ __('Guest Count') }}
                </label>
                <input type="number" name="guest_count" id="guest_count" placeholder="{{ __('Guest Count') }}"
                    value="{{ old('guest_count', $booking->guest_count) }}" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="child_count">
                    {{ __('Child Count') }}
                </label>
                <input type="number" name="child_count" id="child_count" placeholder="{{ __('Child Count') }}"
                    value="{{ old('child_count', $booking->child_count) }}" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="seat">
                    {{ __('Seat') }}
                </label>
                <input type="text" name="seat" id="seat" placeholder="{{ __('Seat') }}"
                    value="{{ old('seat', $booking->seat) }}" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed mb-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
                    {{ __('Description') }}
                </label>
                <textarea name="body" id="body" placeholder="{{ __('Description') }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline h-32">{{ old('body', $booking->body) }}</textarea>
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="customer_name">
                    {{ __('Customer Name') }}
                </label>
                <input type="text" name="customer_name" id="customer_name" placeholder="{{ __('Customer Name') }}"
                    value="{{ old('customer_name', $booking->customer_name) }}" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="customer_phone">
                    {{ __('Customer Phone') }}
                </label>
                <input type="number" name="customer_phone" id="customer_phone"
                    placeholder="{{ __('Customer Phone') }}"
                    value="{{ old('customer_phone', $booking->customer_phone) }}" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="receptionist_name">
                    {{ __('Receptionist Name') }}
                </label>
                <input type="text" name="receptionist_name" id="receptionist_name"
                    placeholder="{{ __('Receptionist Name') }}"
                    value="{{ old('receptionist_name', $booking->receptionist_name) }}" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="final_confirmation">
                    {{ __('Final Confirmation') }}
                </label>
                <input type="text" name="final_confirmation" id="final_confirmation"
                    placeholder="{{ __('Final Confirmation') }}"
                    value="{{ old('final_confirmation', $booking->final_confirmation) }}" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <input type="submit" value="{{ __('Save') }}"
                class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </form>
    </div>
</x-app-layout>
