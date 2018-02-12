@extends('layouts.book')

@section('content')

    @include('partials.book-header')

    <div>
        <div class="flex flex-col items-center mt-4 bg-white mt-12 relative">
            <div class="w-4/6 mb-12 bg-grey text-center">
                <h2 class="italic font-landing mt-0 text-3xl text-center w-5/6 md:w-100 m-auto">"Benefit from my
                    experience and let me teach you everything you need to know to build chatbots in PHP"</h2>
            </div>
            <div class="flex mt-4 mb-4 justify-center">
                <div class="w-4/5 md:w-100 font-landing text-grey-darkest text-lg">
                    <h2 class="mt-8 mb-4 font-bold font-landing text-4xl">Hi, I am Christoph 👋 </h2>
                    <p class="mb-4">I'm a chatbot developer and speaker from Vienna. In the last two years I have been building all kinds of chatbots for small and big companies. They were integrated in Facebook Messenger, Slack, Telegram or on websites with custom solutions.</p>
                    <p class="mb-4">For every project I used my favourite programming language PHP. Yes, that's possible. No need to learn another one like NodeJS. PHP is all you need!</p>
                    <p class="">Be the first to get a free chapter and to get notified about the process of this e-book. Additionally, everyone from the list will get a discount at the release! 🎉</p>
                    <h2 class="mt-10 mb-4 font-bold font-landing text-4xl">What the book will cover </h2>
                    <ul class="mb-4">
                        <li class="mb-2 ml-4">The rise of chatbots 🤖</li>
                        <li class="mb-2 ml-4">The state of chatbots in 2018 😲</li>
                        <li class="mb-2 ml-4">Why PHP is a perfect fit for chatbots 🤙</li>
                        <li class="mb-2 ml-4">Build your first chatbot in plain PHP 💪</li>
                        <li class="mb-2 ml-4">Use Laravel and BotMan to build a well tested, multi-platform chatbot 🚀 </li>
                        <li class="mb-2 ml-4">And more...</li>
                    </ul>
                    <p>Do you miss something? Let me know about it and  I'll try to cover it 👍</p>
                </div>
            </div>
            <div class="my-12 w-4/5 md:w-100">
                @include('partials.book-form', ['buttonText' => 'Sign me up'])
            </div>
            <footer class="mt-8 p-8 mb-0 text-center w-screen">
                <p class="font-landing text-lg mb-2">More information coming soon!</p>
                <p class="font-landing text-sm">&copy; Christoph Rumpel {{ date('Y') }}</p>
            </footer>
        </div>
    </div>
@endsection