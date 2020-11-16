<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf


        <textarea
            name="body"
            class="w-full"
            placeholder="What's up doc?"
            required
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="Your profile image"
                class="rounded-full mr-2"
                width="40"
                height="40"
            >

            <button
                type="submit"
                class="bg-blue-500 rounded-2xl shadow py-2 px-2 text-white"
            >
                Tweet-a-roo!
            </button>

        </footer>
    </form>

    @error('body')
        <p class="text-red text-sm">{{ $message }}</p>
    @enderror

</div>
