<x-app-layout>
    <div class="shadow bg-white border rounded w-full max-w-md mx-auto mt-10">
        <h1 class="text-3xl text-center font-semibold p-6">{{ __('Booking Info') }}</h1>

        <x-flash-message :message="session('notice')" />

        <div class="px-6 pb-6">
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="start">
                    {{ __('Booking Start') }}
                </label>
                <div class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight">
                    {{ $booking->start }}
                </div>
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="start">
                    {{ __('Booking End') }}
                </label>
                <div class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight">
                    {{ $booking->end }}
                </div>
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="booking_type">
                    {{ __('Booking Type') }}
                </label>
                <div class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight">
                    {{ $booking->booking_type }}
                </div>
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="guest_count">
                    {{ __('Guest Count') }}
                </label>
                <div class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight">
                    {{ $booking->guest_count }}
                </div>
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="child_count">
                    {{ __('Child Count') }}
                </label>
                <div class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight">
                    {{ $booking->child_count }}
                </div>
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="seat">
                    {{ __('Seat') }}
                </label>
                <div class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight">
                    {{ $booking->seat }}
                </div>
            </div>
            <div class="my-4 text-slate-500 text-lg leading-relaxed">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    {{ __('Description') }}
                </label>
                <div class="shadow appearance-none border rounded w-auto py-2 px-3 text-gray-700 leading-tight">
                    {!! nl2br(e($booking->body)) !!}
                </div>
            </div>
            <p class="text-sm mb-2 md:text-base font-normal text-gray-600">
                <span
                    class="text-red-400 font-bold">{{ date('Y-m-d H:i:s', strtotime('-1 day')) < $booking->created_at ? 'NEW' : '' }}</span>
                {{ $booking->created_at }}
            </p>
            <div class="flex flex-row text-center my-4">
                <a href="javascript:history.back()"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-20 mr-2">
                    {{ __('Go back') }}
                </a>
                <a href="{{ route('bookings.edit', $booking) }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-20 mr-2">
                    {{ __('Edit') }}
                </a>
                <form action="{{ route('bookings.destroy', $booking) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="{{ __('Delete') }}" onclick="if(!confirm('削除しますか？')){return false};"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-20">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
