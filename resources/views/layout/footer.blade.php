<!--
MIT License
Copyright (c) 2021-2022 FoxxoSnoot
Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
-->

<footer class="footer">
    <div class="footer-links">
        <a href="{{ route('notes', ['page' => 'terms']) }}" class="footer-link">Terms</a>
        <a href="{{ route('notes', ['page' => 'privacy']) }}" class="footer-link">Privacy</a>
        <a href="{{ route('notes', ['page' => 'contact']) }}" class="footer-link">Support</a>
        <a href="{{ route('notes', ['page' => 'about']) }}" class="footer-link">About</a>
        <a href="{{ route('notes', ['page' => 'jobs']) }}" class="footer-link">Jobs</a>
        <a href="{{ route('notes', ['page' => 'team']) }}" class="footer-link">Team</a>
        <a href="{{ route('notes', ['page' => 'contact']) }}" class="footer-link">Contact</a>
    </div>
    <div class="footer-copyright">&copy; {{ date('Y') }} {{ config('app.name') }}</div>
    <div class="footer-social-icons">
        <a href="{{ config('blox.socials.twitter') }}" class="footer-social-icon" title="Follow us on Twitter!" target="_blank" data-tooltip>
            <img src="{{ asset('img/footer/twitter.png') }}">
        </a>
        <a href="{{ config('blox.socials.discord') }}" class="footer-social-icon" title="Join our Discord!" target="_blank" data-tooltip>
            <img src="{{ asset('img/footer/discord.png') }}">
        </a>
    </div>
</footer>
