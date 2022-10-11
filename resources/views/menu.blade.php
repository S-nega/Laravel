<div class="menu-block">
    <ul class="menu-list">
        <li>
            <ul class="menu-list">
                <li class="menu-element">
                    <a href="/design-page">AESTETIKA</a>
                </li>
                <li class="menu-element">
                    <a href="/services">Services</a>
                </li>
                <li class="menu-element">
                    <a href="/ourProducts">Our Projects</a>
                </li>
                <li class="menu-element">
                    <a href="/contacts">Contacts</a>
                </li>
            </ul>
        </li>
        <li class="menu-element">
            <a href="/callback">I want you to call me back</a>
        </li>
        <li class="menu-element">
            @if(\Illuminate\Support\Facades\Auth::user())
                {{\Illuminate\Support\Facades\Auth::user()->email}}
                <br>
                <a href="{{route('logout')}}">Log Out</a>
            @else
                <a href="/authorization-page">I'm an admin</a>
            @endif
        </li>
    </ul>
</div>
