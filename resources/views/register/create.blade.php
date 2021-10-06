<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">
            <form method="POST" action="/register">

                <div class="mb-6">
                    <label for="username" class="block mb-2 font-bold text-xs text-grey-700">
                    Username
                    </label>

                    <input class="border border-grey-400 p-2 w-full"
                                type="text"
                                name="username"
                                id="username"
                                required
                                >
                </div>
            </form>
        </main>
    </section>
</x-layout>
