@php
$setting = App\Models\SiteSetting::find(1);
@endphp
<div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="{{ asset('frontend/assets/images/mobile_vibe.png') }}" style="width:100px" height="100px" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>{{ $setting->company_address }}</li>
                        <li><i class="far fa-phone"></i><a href="tel:2512353256">+{{ $setting->support_phone }}
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="{{ $setting->twitter }}"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="{{ $setting->facebook }}"><span class="fab fa-facebook-square"></span></a></li>
                        
                    </ul>
                </div>
            </nav>
        </div>